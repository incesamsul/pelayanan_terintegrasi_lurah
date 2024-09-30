<?php

namespace App\Http\Controllers;

use App\Models\RequestSurat;
use App\Models\User;
use App\Models\wilayah;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SKController extends Controller
{

    public function index($jenis_surat)
    {
        if(auth()->user()->role == 'user'){
            $request = RequestSurat::where('jenis_surat',$jenis_surat)->where('user_id', auth()->user()->id)->get();
        } else {
            $request = RequestSurat::where('jenis_surat',$jenis_surat)->get();
        }
        return view('pages.sk-izin-menikah.index', compact('request', 'jenis_surat'));
    }

    public function request($jenis_surat)
    {
        RequestSurat::create([
            'user_id' => auth()->user()->id,
            'jenis_surat' => $jenis_surat,
            'status' => 'Pending'
        ]);

        return redirect()->back()->with('success', 'Permintaan anda sedang diproses');
    }

    public function accept(Request $request, $jenis_surat, $id_request)
    {

        $data = RequestSurat::find($id_request);

        $message = 'Halo, ' . $data->user->name . '. Permintaan anda untuk ' . $data->jenis_surat . ' sudah diterima. Nomor surat anda adalah ' . $request->nomor_surat . '. Silahkan cetak surat di link berikut: ' . request()->getSchemeAndHttpHost() . '/sk/' . $data->jenis_surat . '/download';

$client = new \GuzzleHttp\Client();
$res = $client->post('http://localhost:3000/send_message', [
    'json' => [
        'message' => $message,
        'phone' => $data->user->no_hp,
        'link' => request()->getSchemeAndHttpHost() . '/sk/' . $data->jenis_surat . '/' . $data->user->no_hp . '/download'
    ]
]);
        dump($res->getBody()->getContents());
die;

        $data->update([
            'status' => 'Approved',
            'nomor_surat' => $request->nomor_surat,
            'admin_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success', 'Permintaan telah diterima');
    }

    public function cetak($jenis_surat, $id_request)
    {
        if(auth()->user())
        {
            $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['request'] = RequestSurat::where('user_id', auth()->user()->id)->where('jenis_surat', $jenis_surat)->first();

        } else {
            $data['user'] = null;
            $data['request'] = null;
        }

        // Load the view and pass the data
        $html = view('pages.sk-izin-menikah.cetak', $data)->render();

        // Instantiate and use the Dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('document.pdf', ['Attachment' => false]);
    }


    public function saveSignature(Request $request)
    {
        $idSurat = $request->input('id_surat');

        // Get the base64 encoded image from the request
        $data = $request->input('signature');

        // Remove the base64 header (e.g., "data:image/png;base64,")
        $image_parts = explode(";base64,", $data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        // Generate a unique filename
        $fileName = $idSurat . '.png';

        // Set the file path where you want to save the image
        $filePath = public_path('storage/signatures/' . $fileName);

        // Save the image to the public/signatures folder
        File::put($filePath, $image_base64);

        RequestSurat::where('id', $idSurat)->update([
            'tanda_tangan' => $fileName
        ]);

        return response()->json(['success' => true, 'file' => $fileName]);
    }

}

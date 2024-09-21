<?php

namespace App\Http\Controllers;

use App\Models\RequestSurat;
use App\Models\User;
use App\Models\wilayah;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

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

        $message = 'Halo, ' . $data->user->name . '. Permintaan anda untuk ' . $data->jenis_surat . ' sudah diterima. Nomor surat anda adalah ' . $request->nomor_surat . '. Silahkan cetak surat di link berikut: ' . 'http://localhost:3000/' . $data->jenis_surat . '/download';

$client = new \GuzzleHttp\Client();
$res = $client->post('http://localhost:3000/send_message', [
    'json' => [
        'message' => $message,
        'no_hp' => $data->user->no_hp,
        'link' => 'http://127.0.0.1:8000/sk/' . $data->jenis_surat . '/' . $data->user->no_hp . '/download'
    ]
]);


        $data->update([
            'status' => 'Approved',
            'nomor_surat' => $request->nomor_surat,
            'admin_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success', 'Permintaan anda telah diterima');
    }

    public function cetak($jenis_surat)
    {
        $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['request'] = RequestSurat::where('user_id', auth()->user()->id)->where('jenis_surat', $jenis_surat)->first();

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

}

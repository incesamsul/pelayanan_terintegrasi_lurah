<?php

namespace App\Http\Controllers;

use App\Models\RequestSurat;
use App\Models\wilayah;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class SKIzinMenikahController extends Controller
{

    public function index()
    {
        if(auth()->user()->role == 'user'){
            $request = RequestSurat::where('user_id', auth()->user()->id)->get();
        } else {
            $request = RequestSurat::all();
        }
        return view('pages.sk-izin-menikah.index', compact('request'));
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

    public function accept(Request $request, $id_request)
    {

        $data = RequestSurat::find($id_request);
        $data->update([
            'status' => 'Approved',
            'nomor_surat' => $request->nomor_surat
        ]);

        return redirect()->back()->with('success', 'Permintaan anda telah diterima');
    }

    public function cetak()
    {

        // Load the view and pass the data
        $html = view('pages.sk-izin-menikah.cetak')->render();

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

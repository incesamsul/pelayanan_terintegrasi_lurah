<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request ;

class General extends Controller
{

    protected $userModel;

    public function __construct()
    {
    }

    public function dashboard()
    {
        $data['users'] = User::all()->count();

        return view('pages.dashboard.index', $data);
    }

    public function profile()
    {
        $data['user'] = User::where('id', auth()->user()->id)->first();
        return view('pages.profile.index', $data);
    }

    public function bantuan()
    {
        return view('pages.bantuan.index');
    }

    public function updateProfile(Request $request)
    {

        User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'nik' => $request->nik,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }



    public function ubahFotoProfile(Request $request)
    {

        $extensions = ['jpg', 'jpeg', 'png'];

        $result = array($request->foto->getClientOriginalExtension());

        if (in_array($result[0], $extensions)) {
            $file = $request->foto;
        } else {
            return redirect()->back()->with('error', 'format file tidak di dukung');
        }

        // $fileName = auth()->user()->email . "." . $request->foto->extension();
        $fileName = uniqid() . "." . $request->foto->extension();
        $request->foto->move(public_path('data/foto_profile/' . $fileName . '/'), $fileName);

        // Storage::disk('uploads')->put($fileName, file_get_contents($request->foto->getRealPath()));

        User::where('id', auth()->user()->id)
            ->update(['foto' => $fileName]);
        return redirect()->back();
    }
}

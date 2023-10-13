<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class UserController extends Controller
{
    
    public function index()
    {
        return view("user.index");
    }
    
    public function ViewPendaftaran2()
    {
        return view("user.form_pendaftaran2");
    }

    public function ViewPendaftaran()
    {
        return view("user.form_pendaftaran");
    }

    public function ViewBerkas()
    {
        return view('user.pendaftaran');
    }

    public function ViewPengumuman()
    {
        return view("user.pengumuman");
    }

    public function inputPendaftaran(Request $request)
    {

        $formDataSiswa = Siswa::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nisn' => $request->input('nisn'),
            'ttl' => $request->input('ttl'),
            'alamat' =>$request->input('alamat'),
            'jenkel' => $request->input('jenkel'),
            'anakke' => $request->input('ank_ke'),
            'agama' => $request->input('agama')
        ]);
        dd($formDataSiswa);
        // $formDataSiswa->save();


    }

}

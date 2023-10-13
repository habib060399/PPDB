<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        

        $request->input('nama_lengkap');
        $request->input('nisn');
        $request->input('ttl');
        $request->input('alamat');
        $request->input('jenkel');
        $request->input('ank_ke');
        $request->input('agama');

    }

}

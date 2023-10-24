<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function  __construct(Request $request)
    // {
    //     $username = $request->session()->get('username');
    //     if(!$request->session()->has('username')){
    //         Controller::to();
    //     }
    // }

    public function ViewBerkas()
    {
        return view('admin.index');
    }

    public function ViewBerkasPendaftaran()
    {
        return view('admin.berkas_pendaftaran');
    }

    public function ViewDaftarAkun()
    {
        return view('admin.daftar_akun');
    }
}

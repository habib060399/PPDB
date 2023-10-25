<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

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
        $daftarBerkas = Siswa::all();

        $data = [
            'daftarBerkas' => $daftarBerkas
        ];
        return view('admin.index', $data);
    }

    public function ViewBerkasPendaftaran($id_user)
    {
        $getDataSiswa = Siswa::where('id_user', $id_user)->first();

        $data = [
            'berkas' => $getDataSiswa
        ];
        return view('admin.berkas_pendaftaran', $data);
    }

    public function ViewDaftarAkun()
    {
        return view('admin.daftar_akun');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class AdminController extends Controller
{
    public $id_user;
    public function  __construct()
    {        
        $this->id_user = session('id_user');        
    }

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

    public function confirm($id, $status)
    {
        if($status == '1'){

            $status = 'LULUS';
            Siswa::where('id_user', $id)->update([
                'status' => $status
            ]);
            return redirect()->to('admin');

        } elseif($status == '2'){

            $status = 'TIDAK LULUS';
            Siswa::where('id_user', $id)->update([
                'status' => $status
            ]);
            return redirect()->to('admin');
            
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berkas;
use App\Models\BerkasDaftarUlang;

class AdminController extends Controller
{
    public $id_user;
    public function  __construct()
    {        
        $this->id_user = session('id_user');        
    }

    public function ViewBerkas()
    {
        $daftarBerkas = Berkas::get();
        
        $data = [
            'daftarBerkas' => $daftarBerkas
        ];
        return view('admin.index', $data);
    }

    public function ViewBerkasPendaftaran($id_user)
    {
        $getDataSiswa = Berkas::where('id_user', $id_user)->first();

        $data = [
            'berkas' => $getDataSiswa
        ];
        return view('admin.berkas_pendaftaran', $data);
    }

    public function ViewDaftarAkun()
    {
        $getAkun = User::where('role', '2')->get();
        
        $data = [
            'akun' => $getAkun
        ];
        return view('admin.daftar_akun', $data);
    }

    public function confirm(Request $request)
    {
        $id = $request->input('id_user');
        $nisn = $request->input('nisn');
        $status = $request->input('status');
        
       $data = Berkas::where('id_user', $id)->update([
            'nisn' => $nisn,
            'status' => $status
        ]);

        return redirect('/admin')->with('status', 'Data Berhasil Disimpan');
        // if($status == '1'){

        //     $status = 'LULUS';
        //     Siswa::where('id_user', $id)->update([
        //         'status' => $status
        //     ]);
        //     return redirect()->to('admin');

        // } elseif($status == '2'){

        //     $status = 'TIDAK LULUS';
        //     Siswa::where('id_user', $id)->update([
        //         'status' => $status
        //     ]);
        //     return redirect()->to('admin');
            
        // }
        
    }

    public function hapus($id)
    {
        Berkas::where('id_user', $id)->delete();
        BerkasUlang::where('id_user', $id)->delete();

        return redirect('/admin')->with('status', 'Data Berhasil Dihapus');
    }

    public function hapusAkun($id)
    {
        User::where('id', $id)->delete();

        return redirect('/admin/akun')->with('status', 'Data Berhasil Dihapus');
    }

    public function modalEditAkun($id)
    {
        $user = User::where('id', $id)->first();
        return $user;
    }

    public function editAKun(Request $request)
    {
        $id = $request->input('id');
        $username = $request->input('username');
        $nama = $request->input('nama');

        User::where('id', $id)->update([
            'username' => $username,
            'nama' => $nama
        ]);

        return redirect('admin/akun')->with('status', 'Data berhasil diubah');        
    }

    public function editStatus($id, $status, $nisn)
    {
        if($status == '1'){

            $status = 'LULUS';
            Berkas::where('id_user', $id)->update([
                'status' => $status,
                'nisn' => $nisn
            ]);
            return redirect()->to('admin');

        } elseif($status == '2'){

            $status = 'TIDAK LULUS';
            $data = Berkas::where('id_user', $id)->update([
                'status' => $status,
                'nisn' => $nisn
            ]);            
            return redirect()->to('admin');
            
        }
    }
}

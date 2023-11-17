<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class AdminController extends Controller
{
    public $id_user;
    public function  __construct()
    {        
        $this->id_user = session('id_user');        
    }

    public function ViewBerkas()
    {
        $daftarBerkas = Siswa::get();
        
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
        $getAkun = User::where('role', '2')->get();
        
        $data = [
            'akun' => $getAkun
        ];
        return view('admin.daftar_akun', $data);
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

    public function hapus($id)
    {
        Siswa::where('id_user', $id)->delete();

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
}

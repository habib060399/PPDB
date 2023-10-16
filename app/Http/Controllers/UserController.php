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
        
        $formDataSiswa->save();
        if($formDataSiswa){
            return redirect('user/daftar2');
        }else{
            return redirect('user/daftar');
        }

    }

    public function inputPendaftaran2()
    {

        $formDataSiswa2 = Siswa::create([
            'asal_sekolah' => $request->input('asal_sekolah'),
            'negara' => $request->input('warganegara'),
            'no_reg' => $request->input('no_reg_akta'),
            'nama_ortu' => $request->input('nama_ortu'),
            'no_kk' => $request->input('no_kk'),
            'no_hp_ortu' => $request->input('no_hp'),
            'alamat_ortu' => $request->input('alamat_ortu')
        ]);
        
        $formDataSiswa2->save();
        if($formDataSiswa2){
            return redirect('user/pengumuman');
        }else{
            return redirect('user/daftar2');
        }
                            
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class UserController extends Controller
{
    public $id_user;
    public function  __construct()
    {        
        $this->id_user = session('id_user');        
    }
    
    public function index()
    {
        return view("user.index");
    }
    
    public function ViewPendaftaran2()
    {        
        $siswa = Siswa::where('id_user', $this->id_user)->first();
        if($siswa->status_regis == '1'){
            return view("user.cek");
        } else {
            return view("user.form_pendaftaran2");
        }
        
    }

    public function ViewPendaftaran()
    {
        $siswa = Siswa::where('id_user', $this->id_user)->first();
        if($siswa){

            if($siswa->status_regis == '1'){
                return view("user.cek");
            }elseif($siswa->status_regis == null) {
                return view("user.form_pendaftaran");
            }
            
        } else {
            return view("user.form_pendaftaran");        
        }
        
        
    }

    public function ViewBerkas()
    {
        return view('user.pendaftaran');
    }

    public function ViewPengumuman()
    {        
        $getDataSiswa = Siswa::where('id_user', $this->id_user)->first();
        $data = ['user' => $getDataSiswa];
        return view("user.pengumuman", $data);
    }

    public function idUser(Request $request)
    {        
        $id_user = $request->session()->get('id_user');
        return $id_user;        
    }

    public function inputPendaftaran(Request $request)
    {

        $id_user = $request->session()->get('id_user');

        $formDataSiswa = Siswa::create([
            'id_user' => $id_user,
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
            return redirect('user/daftar2')->with('status', 'Data berhasil ditambahkan');
        }else{
            return redirect('user/daftar');
        }

    }

    public function inputPendaftaran2(Request $request)
    {
        $id_user = $request->session()->get('id_user');

        Siswa::where('id_user', $id_user)
        ->update([
            'asal_sekolah' => $request->input('asal_sekolah'),
            'negara' => $request->input('warganegara'),
            'no_reg' => $request->input('no_reg_akta'),
            'nama_ortu' => $request->input('nama_ortu'),
            'no_kk' => $request->input('no_kk'),
            'no_hp_ortu' => $request->input('no_hp'),
            'alamat_ortu' => $request->input('alamat_ortu'),
            'status_regis' => "1"
        ]);
                
        
        return redirect('user/pengumuman')->with('status', 'Data berhasil didafarkan');        
                            
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Berkas;
use App\Models\BerkasDaftarUlang;
use App\Models\User;

class LaporanController extends Controller
{
    public function viewLaporan()
    {        
        $data = [
            "total_pendaftar" => Berkas::get()->count(),
            "total_daftar_ulang" => BerkasDaftarUlang::get()->count(),
            "total_lulus" => Berkas::where("status", "LULUS")->count(),
            "total_siswa" => User::where("role", 2)->count(),
            "berkas_siswa" => Berkas::get()
        ];

        return view('admin.laporan_ppdb', $data);
    }

    public function cetakLaporanLulus()
    {        
        $pdf = Pdf::loadView('admin.cetak_laporan_lulus', ["berkas_siswa" => Berkas::where("status", "LULUS")->get()]);
        return $pdf->download('Laporan_PPDB.pdf');
    }
}

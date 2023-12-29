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

    public function cetakLaporanPPDB()
    {
        $berkas = Berkas::leftJoin('berkas_daftar_ulang', 'berkas_daftar_ulang.id_berkas', '=', 'berkas.id')->get();        
        $pdf = Pdf::loadView('admin.cetak_laporan_ppdb', ["berkas_siswa" => $berkas])->setPaper('a4', 'potrait');
        return $pdf->download('Laporan_PPDB_full.pdf');
    }

    public function cetakLaporanDaftarUlang()
    {
        $berkas = BerkasDaftarUlang::get();
        $pdf = Pdf::loadView('admin.cetak_laporan_daftar_ulang', ["berkas_siswa" => $berkas])->setPaper('a4', 'landscape');
        return $pdf->download('Laporan_PPDB_Daftar_Ulang.pdf');
    }

    public function cetakLaporanLulus()
    {        
        $pdf = Pdf::loadView('admin.cetak_laporan_lulus', ["berkas_siswa" => Berkas::where("status", "LULUS")->get()]);
        return $pdf->download('Laporan_PPDB.pdf');
    }

    public function cetakRekapPPDB()
    {
        $data = [
            "total_siswa" => User::where("role", 2)->count(),
            "total_pendaftar" => Berkas::get()->count(),
            "total_lulus" => Berkas::where("status", "LULUS")->count(),
            "total_daftar_ulang" => BerkasDaftarUlang::get()->count(), 
            "total_tidak_lulus" => Berkas::where("status", "TIDAK LULUS")->count(),                                   
        ];
        $pdf = Pdf::loadView('admin.cetak_rekapitulasi_ppdb', $data);
        return $pdf->download('Laporan_Rekapitulasi_PPDB.pdf');
    }
}

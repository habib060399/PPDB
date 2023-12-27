<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function viewLaporan()
    {
        return view('admin.laporan_ppdb');
    }
}

<?php

namespace App\Http\Controllers\Pegawai;

use App\{Pembayaran};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function spp()
    {
        $pembayarans = Pembayaran::latest()->get();
        return view('pegawai.laporan.laporanSPP');
    }
}

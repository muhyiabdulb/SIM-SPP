<?php

namespace App\Http\Controllers\Pegawai;

use App\{Pembayaran, Siswa, DetailPembayaran};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function spp()
    {
        $siswas = Siswa::latest()->get();
        return view('pegawai.laporan.laporanSPP', compact('siswas'));
    }

    public function detailSPP($id)
    {

        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $detail = Siswa::with('detailPembayaran')->find($id);
        // return $detail;
        return view('pegawai.laporan.detailSPP', compact('detail'));
    }
}

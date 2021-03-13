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
        $siswa = Siswa::find($id);
        $detail = DetailPembayaran::where('siswa_id', $id)
                                ->where('jenis_pembayaran_id', 1)
                                ->get();
        // return $detail;
        return view('pegawai.laporan.detailSPP', compact('detail', 'siswa'));
    }

    public function umum()
    {
        $siswas = Siswa::latest()->get();
        return view('pegawai.laporan.laporanUmum', compact('siswas'));
    }

    public function detailUmum($id)
    {
        $siswa = Siswa::find($id);
        $detail = DetailPembayaran::where('siswa_id', $id)
                                ->where('jenis_pembayaran_id', '!=', 1)
                                ->get();
        // return $detail;
        return view('pegawai.laporan.detailUmum', compact('detail', 'siswa'));
    }
}

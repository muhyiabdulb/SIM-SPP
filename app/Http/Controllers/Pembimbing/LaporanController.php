<?php

namespace App\Http\Controllers\Pembimbing;

use Auth;
use App\{Pembayaran, Siswa, DetailPembayaran};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function spp()
    {
        $rayon_id = Auth::user()->rayon_id;
        $siswas = Siswa::where("rayon_id", $rayon_id)
                        ->latest()->get();
        return view('pembimbing.laporan.laporanSPP', compact('siswas'));
    }

    public function detailSPP($id)
    {
        $siswa = Siswa::find($id);
        $detail = DetailPembayaran::where('siswa_id', $id)
                                ->where('jenis_pembayaran_id', 1)
                                ->get();
        // return $detail;
        return view('pembimbing.laporan.detailSPP', compact('detail', 'siswa'));
    }

    public function umum()
    {
        $rayon_id = Auth::user()->rayon_id;
        $siswas = Siswa::where("rayon_id", $rayon_id)
                        ->latest()->get();
        return view('pembimbing.laporan.laporanUmum', compact('siswas'));
    }

    public function detailUmum($id)
    {
        $siswa = Siswa::find($id);
        $detail = DetailPembayaran::where('siswa_id', $id)
                                ->where('jenis_pembayaran_id', '!=', 1)
                                ->get();
        // return $detail;
        return view('pembimbing.laporan.detailUmum', compact('detail', 'siswa'));
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\{Pembayaran, DetailPembayaran,Siswa};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Untuk Pegawai (Semua Siswa)
        $totalNunggakP = Pembayaran::whereHas('detailPembayaran', function($q){
                                        $q->where('status', 'Nunggak');
                                    })->count();

        $nominalNunggakP = DetailPembayaran::sum('sisa_pembayaran');
                                    
        // Untuk Rayon (Hanya Rayon)
        $totalNunggakR = Pembayaran::whereHas('detailPembayaran', function($q){
                                        $q->where('status', 'Nunggak');
                                    })->whereHas('siswa', function($q){
                                        $q->where('rayon_id', Auth::user()->rayon_id);
                                    })->count();

        $nominalNunggakR = DetailPembayaran::whereHas('siswa', function($q){
                                        $q->where('rayon_id', Auth::user()->rayon_id);
                                    })->sum('sisa_pembayaran');
        
        // Untuk Ortu (Satu Siswa)
        $totalBelumLunasO = Pembayaran::whereHas('detailPembayaran', function($q){
                                        $q->where('status', 'Belum Lunas');
                                    })->whereHas('siswa', function($q){
                                        $q->where('id', Auth::user()->siswa_id);
                                    })->count();

        $nominalBelumLunasO = DetailPembayaran::where('status', 'Belum Lunas')->whereHas('siswa', function($q){
                                        $q->where('id', Auth::user()->siswa_id);
                                    })->sum('sisa_pembayaran');

        $totalNunggakO = Pembayaran::whereHas('detailPembayaran', function($q){
                                        $q->where('status', 'Nunggak');
                                    })->whereHas('siswa', function($q){
                                        $q->where('id', Auth::user()->siswa_id);
                                    })->count();

        $nominalNunggakO = DetailPembayaran::where('status', 'Nunggak')->whereHas('siswa', function($q){
                                        $q->where('id', Auth::user()->siswa_id);
                                    })->sum('sisa_pembayaran');

        return view('home', compact('nominalNunggakR', 'totalNunggakR', 'nominalNunggakP', 'totalNunggakP', 'nominalBelumLunasO', 'totalBelumLunasO', 'nominalNunggakO', 'totalNunggakO', ));
    }
}

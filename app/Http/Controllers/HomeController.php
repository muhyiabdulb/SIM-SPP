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
        $totalNunggak = Pembayaran::whereHas('siswa', function($q){
                            $q->where('rayon_id', Auth::user()->rayon_id);
                        })->count();

        $nominalNunggak = DetailPembayaran::whereHas('siswa', function($q){
                            $q->where('rayon_id', Auth::user()->rayon_id);
                        })->sum('sisa_pembayaran');

        // return $nominalNunggak;
        return view('home', compact('nominalNunggak', 'totalNunggak'));
    }
}

<?php

namespace App\Http\Controllers\Pembimbing;

use Auth;
use App\{Siswa};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $rayon_id = Auth::user()->rayon_id;
        $siswas = Siswa::where("rayon_id", $rayon_id)
                            ->latest()->get();
        // return $siswas;
        return view('pembimbing.siswa.index', compact('siswas'));
    }
}

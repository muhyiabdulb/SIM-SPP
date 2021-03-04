<?php

namespace App\Http\Controllers\Admin;

use App\Rayon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::latest()->get();
        // return $rayons;
        return view('admin.rayon.index', compact('rayons'));
    }
}

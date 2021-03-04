<?php

namespace App\Http\Controllers\Admin;

use App\Rayon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::get();
        // return $rayons;
        return view('admin.rayon.index', compact('rayons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_rayon' => 'required'
        ]);

        // dd($request->nama_Rayon);

        Rayon::create($request->all());
        return redirect()->back()->with('toast_success', 'Berhasil Ditambahkan :)');
    }

    public function edit(Rayon $rayon)
    {
        dd($rayon);
        return view('admin.rayon.index', compact('rayon'));
    }

    public function update(Request $request, Rayon $rayon)
    {
        $request->validate([
            'nama_rayon' => 'required'
        ]);

        // dd($request->nama_Rayon);

        Rayon::findOrFail($rayon)->update($request->all());
        return redirect()->back()->with('toast_success', 'Berhasil Diupdate :)');
    }

    public function destroy(Rayon $rayon)
    {
        $rayon->delete();
        return redirect()->back()->with('toast_success', 'Berhasil Dihapus :)');
    }
}

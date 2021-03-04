<?php

namespace App\Http\Controllers\Admin;

use App\Rayon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::get();
        // return $rayons;
        return view('admin.rayon.index', compact('rayons'));
    }

    public function create()
    {
        return view('admin.rayon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_rayon' => 'required'
        ]);

        // dd($request->nama_Rayon);

        Rayon::create($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        return redirect()->route('admin.rayon.index');
    }

    public function edit(Rayon $rayon)
    {
        // dd($rayon);
        return view('admin.rayon.edit', compact('rayon'));
    }

    public function update(Request $request, Rayon $rayon)
    {
        $request->validate([
            'nama_rayon' => 'required'
        ]);

        // dd($request->nama_Rayon);

        $rayon->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.rayon.index');
    }

    public function destroy(Rayon $rayon)
    {
        $rayon->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.rayon.index');
    }
}

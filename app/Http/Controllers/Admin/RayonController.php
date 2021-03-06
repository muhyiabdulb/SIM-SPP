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
        // variabel rayons buat nampung data Rayon dari db 
        $rayons = Rayon::latest()->get();;
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.rayon.index', compact('rayons'));
    }

    public function create()
    {
        // pindah ke halaman create
        return view('admin.rayon.create');
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'nama_rayon' => 'required'
        ]);

        // masukkan semua inputan ke db
        Rayon::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.rayon.index');
    }

    public function edit(Rayon $rayon)
    {
        // pindah halaman ke edit
        return view('admin.rayon.edit', compact('rayon'));
    }

    public function update(Request $request, Rayon $rayon)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'nama_rayon' => 'required'
        ]);

        // inputan di update
        $rayon->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.rayon.index');
    }

    public function destroy(Rayon $rayon)
    {
        // mengahapus 1 data
        $rayon->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.rayon.index');
    }
}

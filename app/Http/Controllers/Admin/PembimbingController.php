<?php

namespace App\Http\Controllers\Admin;

use App\{Pembimbing, Rayon};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class PembimbingController extends Controller
{
    public function index()
    {
        $pembimbings = Pembimbing::get();
        // return $pembimbings;
        return view('admin.pembimbing.index', compact('pembimbings'));
    }

    public function create()
    {
        $rayons = Rayon::all();
        // pindah ke halaman create
        return view('admin.pembimbing.create', compact('rayons'));
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'photo' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'nip' => 'required',
            'nama_pembimbing' => 'required',
            'jenis_kelamin' => 'required',
            'rayon_id' => 'required'
        ]);

        $attr = $request->all();
        // return $attr;
        $photo = request()->file('photo') ? request()->file('photo')->store("img/photo") : null;
        // return $photo;
        $attr['photo'] = $photo;
        // return $attr;
        // masukkan semua inputan ke db
        Pembimbing::create($attr);
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.pembimbing.index');
    }

    public function edit(Rayon $rayon)
    {
        // pindah halaman ke edit
        return view('admin.pembimbing.edit', compact('rayon'));
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
        return redirect()->route('admin.pembimbing.index');
    }

    public function destroy(Rayon $rayon)
    {
        // mengahapus 1 data
        $rayon->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.pembimbing.index');
    }
}

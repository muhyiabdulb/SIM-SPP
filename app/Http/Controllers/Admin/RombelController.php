<?php

namespace App\Http\Controllers\Admin;

use App\{Rombel, Jurusan};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class rombelController extends Controller
{
    public function index()
    {
        // variabel rombels buat nampung data rombel dari db 
        $rombels = Rombel::get();
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.rombel.index', compact('rombels'));
    }

    public function create()
    {
        $jurusans = Jurusan::all();
        // return $jurusans;
        // pindah ke halaman create
        return view('admin.rombel.create', compact('jurusans'));
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jurusan_id' => 'required',
            'nama_rombel' => 'required',
        ]);
        // return $request->all();
        // masukkan semua inputan ke db
        Rombel::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.rombel.index');
    }

    public function edit(rombel $rombel)
    {
        // pindah halaman ke edit
        return view('admin.rombel.edit', compact('rombel'));
    }

    public function update(Request $request, rombel $rombel)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jurusan_id' => 'required',
            'nama_rombel' => 'required',
        ]);

        // inputan di update
        $rombel->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.rombel.index');
    }

    public function destroy(rombel $rombel)
    {
        // mengahapus 1 data
        $rombel->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.rombel.index');
    }
}

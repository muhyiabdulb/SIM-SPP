<?php

namespace App\Http\Controllers\Admin;

use App\Jurusan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class jurusanController extends Controller
{
    public function index()
    {
        // variabel jurusans buat nampung data jurusan dari db 
        $jurusans = Jurusan::get();
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        // pindah ke halaman create
        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jurusan' => 'required',
            'program_keahlian' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);

        // masukkan semua inputan ke db
        Jurusan::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.jurusan.index');
    }

    public function edit(Jurusan $jurusan)
    {
        // pindah halaman ke edit
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jurusan' => 'required',
            'program_keahlian' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);

        // inputan di update
        $jurusan->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.jurusan.index');
    }

    public function destroy(jurusan $jurusan)
    {
        // mengahapus 1 data
        $jurusan->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.jurusan.index');
    }
}

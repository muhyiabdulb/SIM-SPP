<?php

namespace App\Http\Controllers\Admin;

use App\JenisPembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class jenispembayaranController extends Controller
{
    public function index()
    {
        // variabel jenispembayarans buat nampung data jenispembayaran dari db 
        $jenispembayarans = JenisPembayaran::get();
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.jenispembayaran.index', compact('jenispembayarans'));
    }

    public function create()
    {
        // pindah ke halaman create
        return view('admin.jenispembayaran.create');
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jenis_pembayaran' => 'required',
            'nominal' => 'required',
        ]);

        // masukkan semua inputan ke db
        JenisPembayaran::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.jenispembayaran.index');
    }

    public function edit(JenisPembayaran $jenispembayaran)
    {
        // pindah halaman ke edit
        return view('admin.jenispembayaran.edit', compact('jenispembayaran'));
    }

    public function update(Request $request, JenisPembayaran $jenispembayaran)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jenis_pembayaran' => 'required',
            'nominal' => 'required',
        ]);

        // inputan di update
        $jenispembayaran->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.jenispembayaran.index');
    }

    public function destroy(JenisPembayaran $jenispembayaran)
    {
        // mengahapus 1 data
        $jenispembayaran->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.jenispembayaran.index');
    }
}

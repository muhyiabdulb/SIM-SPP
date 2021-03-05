<?php

namespace App\Http\Controllers\Admin;

use App\RencanaPembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RencanaPembayaranController extends Controller
{
    public function index()
    {
        // variabel Semesters buat nampung data Semester dari db 
        $rencanapembayarans = RencanaPembayaran::get();
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.rencana_pembayaran.index', compact('rencanapembayarans'));
    }

    public function create()
    {
        // pindah ke halaman create
        return view('admin.rencana_pembayaran.create');
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jenis_pembayaran_id' => 'required',
            'nominal' => 'required',
            'banyaknya' => 'required',
            'total_nominal' => 'required',
            'tahun' => 'required',
        ]);

        // masukkan semua inputan ke db
        RencanaPembayaran::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.rencanapembayaran.index');
    }

    public function edit(RencanaPembayaran $rencanapembayaran)
    {
        // pindah halaman ke edit
        return view('admin.rencana_pembayaran.edit', compact('rencanapembayaran'));
    }

    public function update(Request $request, RencanaPembayaran $rencanapembayaran)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'jenis_pembayaran_id' => 'required',
            'nominal' => 'required',
            'banyaknya' => 'required',
            'total_nominal' => 'required',
            'tahun' => 'required',
        ]);

        // inputan di update
        $rencanapembayaran->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.rencanapembayaran.index');
    }

    public function destroy(RencanaPembayaran $rencanapembayaran)
    {
        // mengahapus 1 data
        $rencanapembayaran->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.rencanapembayaran.index');
    }
}

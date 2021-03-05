<?php

namespace App\Http\Controllers\Admin;

use App\ViaTransfer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class ViaTransferController extends Controller
{
    public function index()
    {
        // variabel viatransfernsfers buat nampung data viatransfernsfer dari db 
        $viatransfers = ViaTransfer::get();
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.viatransfer.index', compact('viatransfers'));
    }

    public function create()
    {
        // pindah ke halaman create
        return view('admin.viatransfer.create');
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'nama_bank' => 'required'
        ]);

        // masukkan semua inputan ke db
        ViaTransfer::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.viatransfer.index');
    }

    public function edit(ViaTransfer $viatransfer)
    {
        // pindah halaman ke edit
        return view('admin.viatransfer.edit', compact('viatransfer'));
    }

    public function update(Request $request, ViaTransfer $viatransfer)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'nama_bank' => 'required'
        ]);

        // inputan di update
        $viatransfer->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.viatransfer.index');
    }

    public function destroy(ViaTransfer $viatransfer)
    {
        // mengahapus 1 data
        $viatransfer->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.viatransfer.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\{RencanaPembayaran, JenisPembayaran};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use DB;

class RencanaPembayaranController extends Controller
{
    public function index()
    {
        // variabel Semesters buat nampung data Semester dari db 
        $rencanaPembayarans = RencanaPembayaran::latest()->get();;
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.rencana_pembayaran.index', compact('rencanaPembayarans'));
    }

    public function create()
    {
        $jenisPembayarans = JenisPembayaran::all();
        // pindah ke halaman create
        return view('admin.rencana_pembayaran.create', compact('jenisPembayarans'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        // return $input['transactions'];
        try {
            foreach($input['transactions'] as $detail) {
                $trash = RencanaPembayaran::create([
                    'jenis_pembayaran_id' => $detail['jenis_pembayaran_id'],
                    'nominal' => $detail['nominal'],
                    'banyaknya' => $detail['banyaknya'],
                    'total_nominal' => $detail['total_nominal'],
                    'tahun' => $detail['tahun']
                ]);
            }

            // return $trash;

            // alert berhasil
            Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
            // pindah halaman lagi ke index
            return redirect()->route('admin.rencanapembayaran.index');
        } catch(\Exception $e) {
            // alert gagal
            Alert::error('Gagal!!!', 'Anda tidak mengisi apapun!');
            return redirect()->back();
        }
    }

    public function edit(RencanaPembayaran $rencanapembayaran)
    {
        $jenisPembayaran = JenisPembayaran::all();
        // pindah halaman ke edit
        return view('admin.rencana_pembayaran.edit', compact('rencanapembayaran', 'jenisPembayaran'));
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

    public function destroy(RencanaPembayaran $rencanaPembayaran)
    {
        // mengahapus 1 data
        $rencanaPembayaran->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.rencanapembayaran.index');
    }
}

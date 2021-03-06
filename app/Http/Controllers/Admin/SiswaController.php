<?php

namespace App\Http\Controllers\Admin;

use App\{Siswa, Rombel, Rayon};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::get();
        // return $siswas;
        return view('admin.siswa.index', compact('siswas'));
    }

    public function create()
    {
        $rombels = Rombel::all();
        $rayons = Rayon::all();
        // pindah ke halaman create
        return view('admin.siswa.create', compact('rombels', 'rayons'));
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'photo' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required'
        ]);

        $attr = $request->all();
        // return $attr;
        $photo = request()->file('photo') ? request()->file('photo')->store("img/photo") : null;
        // return $photo;
        $attr['photo'] = $photo;
        // return $attr;
        // masukkan semua inputan ke db
        Siswa::create($attr);
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.siswa.index');
    }

    public function edit(Siswa $siswa)
    {
        $rayons = Rayon::all();
        $rombels = Rombel::all();
        // pindah halaman ke edit
        return view('admin.siswa.edit', compact('siswa', 'rayons', 'rombels'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'photo' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required'
        ]);

        $attr = $request->all();

        if(request()->file('photo')){
            Storage::delete($siswa->photo);
            $photo = request()->file('photo')->store("img/photo");
        } else{
            $photo = $siswa->photo;
        }

        $attr['photo'] = $photo;
        // return $attr;
        $siswa->update($attr);

        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.siswa.index');
    }

    public function show(Siswa $siswa)
    {
        return view('admin.siswa.show', compact('siswa'));
    }

    public function destroy(Siswa $siswa)
    {
        // mengahapus 1 data
        \Storage::delete($siswa->photo);
        $siswa->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.siswa.index');
    }
}

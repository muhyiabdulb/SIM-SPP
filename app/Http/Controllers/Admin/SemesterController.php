<?php

namespace App\Http\Controllers\Admin;

use App\Semester;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class SemesterController extends Controller
{
    public function index()
    {
        // variabel Semesters buat nampung data Semester dari db 
        $semesters = Semester::latest()->get();;
        // masukkan ke halaman index, jangan compact variabel nya
        return view('admin.semester.index', compact('semesters'));
    }

    public function create()
    {
        // pindah ke halaman create
        return view('admin.semester.create');
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        // masukkan semua inputan ke db
        Semester::create($request->all());
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.semester.index');
    }

    public function edit(Semester $semester)
    {
        // pindah halaman ke edit
        return view('admin.semester.edit', compact('semester'));
    }

    public function update(Request $request, Semester $semester)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        // inputan di update
        $semester->update($request->all());
        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.semester.index');
    }

    public function destroy(Semester $semester)
    {
        // mengahapus 1 data
        $semester->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.semester.index');
    }
}

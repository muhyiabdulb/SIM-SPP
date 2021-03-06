<?php

namespace App\Http\Controllers\Admin;

use App\{User, Siswa};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();;
        // return $users;
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        // return $siswas;
        // pindah ke halaman create
        return view('admin.user.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'siswa_id' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'name' => 'required|string|max:255|',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => ['required', 'string', 'confirmed'],
            'role' => 'required',
        ]);

        $user = $request->all();
        // return $user;
        $photo = request()->file('photo') ? request()->file('photo')->store("img/photo") : null;
        // return $photo;
        $user['photo'] = $photo;
   
        $user['password'] = Hash::make($user['password']);
        // return $request->role;
        //  return $user;
        // masukkan semua inputan ke db
        $role = User::create($user);

        $role->assignRole($request->role);
        // alert berhasil
        Alert::success('Pemberitahun!', 'Berhasil Ditambahkan');
        // pindah halaman lagi ke index
        return redirect()->route('admin.user.index');
    }

    public function edit(User $user)
    {
        $siswas = Siswa::all();
        // pindah halaman ke edit
        return view('admin.user.edit', compact('user', 'siswas'));
    }

    public function update(Request $request, User $user)
    {
        // ini validasi sesuai inputan
        $request->validate([
            'siswa_id' => 'required',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'name' => 'required|string|max:255|',
            'email' => 'required|string|email|max:255|',
            'username' => 'required|string|max:255|',
        ]);

        $attr = $request->all();

        if(request()->file('photo')){
            \Storage::delete($user->photo);
            $photo = request()->file('photo')->store("img/photo");
        } else{
            $photo = $user->photo;
        }

        $attr['photo'] = $photo;
        // return $attr;
        $user->update($attr);

        Alert::success('Pemberitahun!', 'Berhasil Diupdate');
        return redirect()->route('admin.user.index');
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        // mengahapus 1 data
        \Storage::delete($user->photo);
        $user->delete();
        Alert::success('Pemberitahun!', 'Berhasil Dihapus :)');
        return redirect()->route('admin.user.index');
    }
}

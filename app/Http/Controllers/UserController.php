<?php

namespace App\Http\Controllers;

use App\User;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function myProfile()
    {
        return view('user.edit');
    }

    public function updateProfile(Request $request)
    {
        $this->validate(request(), [
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
        ]);

        $user = auth()->user();
        // return $user;

        if(request()->file('photo')){
            \Storage::delete($user['photo']);
            $photo = request()->file('photo')->store("img/photo");
        } else{
            $photo = $user['photo'];
        }

        $user['photo'] = $photo;

        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'username' => request('username')
        ]);

        Alert::success('Pemberitahun!', 'Profile Berhasil Diubah');
        return redirect()->route('admin.profile.myprofile');
    }

    public function changePassword()
    {
        return view('user.password');
    }

    public function updatePassword()
    {
        $this->validate(request(), [
            'old_password' => 'required',
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');
        // dd($currentPassword);
        if (Hash::check($old_password, $currentPassword)) {
            auth()->user()->update([
                'password' => bcrypt(request('password'))
            ]);
            Alert::success('Pemberitahun!', 'Password Berhasil Diubah');
            return redirect()->route('admin.profile.changepassword');
        } else {
            Alert::error('Pemberitahun!', 'Password Gagal Diubah');
            return back()->withErrors(['old_password' => 'Password Lama tidak Valid!']);
        }
    }
}

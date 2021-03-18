<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'siswa_id', 'photo', 'name', 'rayon_id',  'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // RELASI KEPADA TABEL SISWA
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    // RELASI KEPADA TABEL RAYON
    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    // membuat function Image
    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->photo;
    }
}

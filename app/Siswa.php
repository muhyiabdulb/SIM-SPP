<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

    // RELASI KEPADA TABEL RAYON
    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    // RELASI KEPADA TABEL ROMBEL
    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    // RELASI KEPADA TABEL DETAILPEMBAYARAN
    public function detailPembayaran(){
        return $this->hasMany(DetailPembayaran::class, 'siswa_id');
    }

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->photo;
    }
}

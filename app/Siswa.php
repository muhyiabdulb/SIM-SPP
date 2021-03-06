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

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->photo;
    }
}

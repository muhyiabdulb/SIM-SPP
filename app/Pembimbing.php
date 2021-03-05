<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

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

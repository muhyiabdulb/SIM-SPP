<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

    // RELASI KEPADA TABEL JURUSAN
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}

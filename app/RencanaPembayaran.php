<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RencanaPembayaran extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

    // RELASI KEPADA TABEL JENIS PEMBAYARAN
    public function jenisPembayaran()
    {
        return $this->belongsTo(JenisPembayaran::class);
    }
}

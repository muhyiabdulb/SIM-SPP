<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pembayaran extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

    // RELASI KEPADA TABEL USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // RELASI KEPADA TABEL USER
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    
    // RELASI KEPADA TABEL DETAILPEMBAYARAN
    public function detailPembayaran(){
        return $this->hasMany(DetailPembayaran::class, 'transaksi_id');
    }

    // ACCESSOR UNTUK MENAMPILKAN TANGGAL BAYAR
    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_bayar'])->format('l, d F Y');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class DetailPembayaran extends Model
{
    // SEMUA FIELD DIMASUKKAN
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisPembayaran()
    {
        return $this->belongsTo(JenisPembayaran::class);
    }

    public function viaTransfer()
    {
        return $this->belongsTo(ViaTransfer::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'transaksi_id');
    }
    
    // ACCESSOR UNTUK MENAMPILKAN TANGGAL TRANSFER
    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_transfer'])->format('l, d F Y');
    }
}

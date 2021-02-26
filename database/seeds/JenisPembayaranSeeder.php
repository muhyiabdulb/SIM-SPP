<?php

use App\JenisPembayaran;
use Illuminate\Database\Seeder;

class JenisPembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisPembayaran::create([
            'jenis_pembayaran' => 'SPP',
            'nominal' => 450000
        ]);
        JenisPembayaran::create([
            'jenis_pembayaran' => 'DSP',
            'nominal' => 6000000
        ]);
        JenisPembayaran::create([
            'jenis_pembayaran' => 'BPJS',
            'nominal' => 110000
        ]);
    }
}

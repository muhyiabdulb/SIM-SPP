<?php

use App\ViaTransfer;
use Illuminate\Database\Seeder;

class ViaTransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ViaTransfer::create([
            'nama_bank' => 'BNI',
        ]);
        ViaTransfer::create([
            'nama_bank' => 'BRI',
        ]);
        ViaTransfer::create([
            'nama_bank' => 'Mandiri',
        ]); 
    }
}

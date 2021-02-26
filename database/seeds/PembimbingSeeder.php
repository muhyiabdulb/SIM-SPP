<?php

use App\Pembimbing;
use Illuminate\Database\Seeder;

class PembimbingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembimbing::create([
            'nip' => '12345678',
            'nama_pembimbing' => 'Ria Rosia',
            'rayon_id' => 1,
        ]);
        Pembimbing::create([
            'nip' => '12345679',
            'nama_pembimbing' => 'Rina Finanti',
            'rayon_id' => 2,
        ]);
        Pembimbing::create([
            'nip' => '12345674',
            'nama_pembimbing' => 'Mohammad Rizal',
            'rayon_id' => 3,
        ]);
    }
}

<?php

use App\Rombel;
use Illuminate\Database\Seeder;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rombel::create([
            'jurusan_id' => 1,
            'nama_rombel' => 'RPL XII-1',
        ]);
        Rombel::create([
            'jurusan_id' => 1,
            'nama_rombel' => 'RPL XII-2',
        ]);
        Rombel::create([
            'jurusan_id' => 1,
            'nama_rombel' => 'RPL XII-3',
        ]);
    }
}

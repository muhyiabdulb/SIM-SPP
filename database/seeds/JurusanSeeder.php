<?php

use App\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'jurusan' => 'RPL',
            'program_keahlian' => 'IT',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        Jurusan::create([
            'jurusan' => 'TKJ',
            'program_keahlian' => 'IT',
            'kompetensi_keahlian' => 'Teknologi Jaringan Komputer',
        ]);
    }
}

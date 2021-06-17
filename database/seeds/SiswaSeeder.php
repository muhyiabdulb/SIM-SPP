<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nis' => '111111111',
            'nama_siswa' => 'Ini Bukan Ortu',
            'jenis_kelamin' => 'L',
            'rombel_id' => 1,
            'rayon_id' => 1,
        ]);
        Siswa::create([
            'nis' => '11806778',
            'nama_siswa' => 'Muhyi',
            'jenis_kelamin' => 'L',
            'rombel_id' => 2,
            'rayon_id' => 2,
        ]);
        Siswa::create([
            'nis' => '11806777',
            'nama_siswa' => 'Virga',
            'jenis_kelamin' => 'L',
            'rombel_id' => 3,
            'rayon_id' => 3,
        ]);
    }
}

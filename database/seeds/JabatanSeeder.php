<?php

use App\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
            'nama_jabatan' => 'Kepala Sekolah'
        ]);
        Jabatan::create([
            'nama_jabatan' => 'Pegawai'
        ]);
        Jabatan::create([
            'nama_jabatan' => 'Orang Tua'
        ]);
    }
}

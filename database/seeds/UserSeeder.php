<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kepsek = User::create([
            'name' => 'Kepsek',
            'email' => 'kepsek@gmail.com',
            'username' => 'kepsek',
            'password' => bcrypt('12345678'),
        ]);

        $kepsek->assignRole('kepsek');

        $ortu = User::create([
            'name' => 'Ortu',
            'email' => 'ortu@gmail.com',
            'username' => 'ortu',
            'password' => bcrypt('12345678'),
        ]);

        $ortu->assignRole('ortu');

        $pegawai = User::create([
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'username' => 'pegawai',
            'password' => bcrypt('12345678'),
        ]);

        $pegawai->assignRole('pegawai');
    }
}
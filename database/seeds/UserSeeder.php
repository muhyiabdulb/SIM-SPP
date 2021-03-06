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
            'siswa_id' => 1,
            'name' => 'Kepsek',
            'email' => 'kepsek@gmail.com',
            'username' => 'kepsek',
            'password' => bcrypt('12345678'),
        ]);

        $kepsek->assignRole('kepsek');

        $ortu = User::create([
            'siswa_id' => 2,
            'name' => 'Ortu',
            'email' => 'ortu@gmail.com',
            'username' => 'ortu',
            'password' => bcrypt('12345678'),
        ]);

        $ortu->assignRole('ortu');

        $pegawai = User::create([
            'siswa_id' => 1,
            'name' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'username' => 'pegawai',
            'password' => bcrypt('12345678'),
        ]);

        $pegawai->assignRole('pegawai');

        $admin = User::create([
            'siswa_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $pembimbing = User::create([
            'siswa_id' => 1,
            'name' => 'Pembimbing',
            'email' => 'pembimbing@gmail.com',
            'username' => 'pembimbing',
            'password' => bcrypt('12345678'),
        ]);

        $pembimbing->assignRole('pembimbing');
    }
}
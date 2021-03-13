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
            'rayon_id' => 0,
            'email' => 'kepsek@gmail.com',
            'username' => 'kepsek',
            'password' => bcrypt('12345678'),
        ]);

        $kepsek->assignRole('kepsek');

        $ortu = User::create([
            'siswa_id' => 2,
            'name' => 'Ortu',
            'rayon_id' => 0,
            'email' => 'ortu@gmail.com',
            'username' => 'ortu',
            'password' => bcrypt('12345678'),
        ]);

        $ortu->assignRole('ortu');

        $pegawai = User::create([
            'siswa_id' => 1,
            'name' => 'Pegawai',
            'rayon_id' => 0,
            'email' => 'pegawai@gmail.com',
            'username' => 'pegawai',
            'password' => bcrypt('12345678'),
        ]);

        $pegawai->assignRole('pegawai');

        $admin = User::create([
            'siswa_id' => 1,
            'name' => 'Admin',
            'rayon_id' => 0,
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $pembimbing = User::create([
            'siswa_id' => 1,
            'name' => 'Pembimbing',
            'rayon_id' => 1,
            'email' => 'pembimbing@gmail.com',
            'username' => 'pembimbing',
            'password' => bcrypt('12345678'),
        ]);

        $pembimbing->assignRole('pembimbing');
    }
}
<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'kepsek',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'ortu',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'pegawai',
            'guard_name' => 'web'
        ]);
    }
}
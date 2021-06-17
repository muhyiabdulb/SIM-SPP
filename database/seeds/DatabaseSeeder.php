<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(RombelSeeder::class);
        $this->call(RayonSeeder::class);
        $this->call(ViaTransferSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(PembimbingSeeder::class);
        $this->call(SemesterSeeder::class);
    }
}

<?php

use App\Rayon;
use Illuminate\Database\Seeder;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rayon::create([
            'nama_rayon' => 'Ciawi - 1',
       ]);
        Rayon::create([
            'nama_rayon' => 'Ciawi - 2',
       ]);
        Rayon::create([
            'nama_rayon' => 'Ciawi - 3',
       ]);
    }
}

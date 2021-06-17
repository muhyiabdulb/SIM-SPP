<?php

use App\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create([
            'semester' => '1',
            'tahun_ajaran' => '2021',
        ]);
        Semester::create([
            'semester' => '2',
            'tahun_ajaran' => '2021',
        ]);
    }
}

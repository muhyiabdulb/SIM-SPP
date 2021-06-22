<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return Pegawai::all();
    }
}

<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class DetailPembayaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DetailPembayaran::all();
    }
}

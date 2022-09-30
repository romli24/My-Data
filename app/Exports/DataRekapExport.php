<?php

namespace App\Exports;

use App\Models\DataRekap;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataRekapExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataRekap::all();
    }
}

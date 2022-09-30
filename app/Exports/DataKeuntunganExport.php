<?php

namespace App\Exports;

use App\Models\DataKeuntungan;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataKeuntunganExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataKeuntungan::all();
    }
}

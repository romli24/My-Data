<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DataSupplier extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "data_suppliers";
    protected $primarykey = "id";
    protected $fillable = [
        'id','kodesupplayer','namasupplayer','notelpon','alamat'
    ];
    public function databarang()
    {
        return $this->hasMany(DataBarang::class);
    }
}

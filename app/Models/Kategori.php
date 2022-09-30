<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "kategori";
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
    protected $fillable = ['id','kategorii'];

        public function databarang()
        {
            return $this->hasMany(DataBarang::class);
        }
        public function detailpesanan()
        {
            return $this->hasMany(DetailPesanan::class);
        }
        // public function jumlahdigunakan()
        // {
        // return $this->hasManyThrough(DataBarang::class,'nama_barang');
        // }
}

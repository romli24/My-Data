<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DetailPesanan extends Model
{
    use SoftDeletes;
    protected $table = "detail_pesanan";
    protected $dates = ['deleted_at'];
    protected $primarykey = "id";
    protected $fillable = [
        'id','kode_pemesan_id','nama_barang_id','harga_jual_id','jumlah','total'
    ];

    public function kodepemesan(){
        return $this->belongsTo(DataPemesan::class, 'kode_pemesan_id', 'id');
    }

    public function hargajual(){
        return $this->belongsTo(DataBarang::class);
    }


    public function namabarang(){
        return $this->belongsTo(DataBarang::class, 'nama_barang_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataBarang extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "data_barangs";
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode_barang','kategori_id','nama_supplayer_id','nama_barang','harga_jual','harga_beli','stok','total_beli','deskripsi','gambar'];

        public function kategori()
        {
            return $this->belongsTo(Kategori::class);
        }
        public function detailpesanan()
        {
            return $this->hasMany(DetailPesanan::class);
        }
        public function hargajual(){
            return $this->hasMany(DetailPesanan::class);
        }
        public function namasupplayer(){
            return $this->belongsTo(DataSupplier::class, 'nama_supplayer_id', 'id');
        }

    protected $guarded = [];
}

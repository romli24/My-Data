<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPemesan extends Model
{
    // use HasFactory;
    // protected $guarded = [];
    use SoftDeletes;

    protected $table = "data_pemesans";
    protected $dates = ['deleted_at'];
    protected $primarykey = "id";
    protected $fillable = [
        'id','kodepemesan','namapemesan','alamat','notelpon'
    ];

    public function pesanan(){
        return $this->hasMany(DetailPesanan::class, "kode_pemesan_id", "id");
    }
    public function kodepemesan(){
        return $this->belongsTo(DetailPesanan::class);
    }
}

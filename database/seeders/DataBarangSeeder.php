<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_barangs')->insert([
            'kode_barang' => '001',
            'nama_barang' => 'word',
            'stok' => '21',
            'harga' => '10.000',
            'deskripsi' => '2010',
            'gambar' => 'C:\xampp\tmp\php44F1.tmp',
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->bigInteger('kategori_id');
            $table->bigInteger('nama_supplayer_id');
            $table->string('nama_barang');
            $table->integer('stok');
            $table->bigInteger('harga_jual');
            $table->bigInteger('harga_beli');
            $table->bigInteger('total_beli');
            $table->text('deskripsi');
            $table->string('gambar')->default('default-produk.jpg');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_barangs');
    }
}

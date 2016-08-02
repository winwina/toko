<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang', 50);
            $table->integer('kategori')->unique();;
            $table->integer('satuan')->unique();;
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('stok');
            $table->integer('harga_satuan');
            $table->string('keterangan');
            $table->timestamps();
             $table->foreign('kategori')->references('id_kategori')->on('kategori');
             $table->foreign('satuan')->references('id_satuan')->on('satuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('barang');
    }
}

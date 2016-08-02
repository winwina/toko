<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailPembelian', function (Blueprint $table) {
            $table->increments('id_pembelian');
            $table->integer('id_transaksi')->unique();;
            $table->integer('id_barang')->unique();;
            $table->integer('jumlah');
            $table->integer('harga_total');
            $table->timestamps();
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->foreign('id_transaksi')->references('id_beli')->on('transaksiBeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detailPembelian');
    }
}

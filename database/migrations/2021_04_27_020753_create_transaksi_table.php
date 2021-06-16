<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('namakamar');
            $table->integer('jumlahkamar');
            $table->integer('hargakamar');
            $table->string('tanggal_masuk');
            $table->string('tanggal_keluar');
            $table->string('total_kamar');
            $table->string('paketlaundry');
            $table->integer('jumlahlaundry');
            $table->integer('totallaundry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

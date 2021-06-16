<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('tanggal_masuk');
            $table->string('tanggal_keluar');
            $table->string('namakamar');
            $table->integer('hargakamar');
            $table->integer('total_kamar');
            $table->integer('hargalaundry');
            $table->integer('jumlahlaundry');
            $table->integer('totallaundry');
            $table->integer('totalbayar');
            $table->integer('bayar');
            $table->integer('kembalian');
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
        Schema::dropIfExists('histori');
    }
}

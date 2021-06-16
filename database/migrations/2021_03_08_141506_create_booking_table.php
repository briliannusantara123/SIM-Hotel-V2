<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email');
            $table->string('fasilitas');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('namakamar');
            $table->string('id_tipekamar');
            $table->integer('jumlahkamar');
            $table->text('deskripsi');
            $table->integer('hargakamar');
            $table->integer('jumlahhari');
            $table->integer('jumlah_orang');
            $table->string('tanggal');
            $table->string('tanggal_keluar');
            $table->string('total');
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
        Schema::dropIfExists('booking');
    }
}

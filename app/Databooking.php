<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Databooking extends Model
{
    protected $table = "databooking";
    protected $fillable = ['nama','telepon','alamat','namakamar','id_tipekamar','jumlahkamar','deskripsi','hargakamar','jumlahhari','jumlah_orang','tanggal','tanggal_keluar','total','email','fasilitas'];
}

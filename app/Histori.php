<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    protected $table = "histori";

     protected $fillable =['nama','telepon','alamat','tanggal_masuk','tanggal_keluar','namakamar','hargakamar','total_kamar','bayar','kembalian','hargalaundry','jumlahlaundry','totallaundry','totalbayar','bayar','kembalian'];

     

     public function laundry()
    {
    	return $this->belongsTo('App\Laundry');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporan";

    protected $guarded = [];

    public function booking()
     {
     	return $this->hasOne('App\Booking','id');
     }
     public function tipekamar()
     {
     	return $this->hasOne('App\Tipekamar','id');
     }
     public function laundry()
     {
     	return $this->hasOne('App\Laundry','id');
     }
     public function datatamu()
     {
     	return $this->hasOne('App\Datatamu','id');
     }
}

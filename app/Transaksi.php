<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";

    protected $guarded = [];

    public function laundry()
    {
    	return $this->belongsTo('App\Laundry');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = "laundry";

    protected $guarded = [];

    public function histori()
    {
    	return $this->hasOne('App\Histori');
    }
}

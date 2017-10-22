<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    public $timestamps = false;

    public function rumah_sakit(){
    	return $this->belongsTo('App\Rumah_sakit','id_rs');
    }

    public function pemesanans(){
        return $this->hasMany('App\Pemesanan','id_perawat');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah_sakit extends Model
{
    public $timestamps = false;

    public function perawats(){
        return $this->hasMany('App\Perawat','id_rs');
    }
}

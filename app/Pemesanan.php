<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    public $timestamps = false;
    protected $fillable = ['nama_pemesan','alamat_pemesan','no_hp_pemesan','nama_pasien','jenis_kelamin','umur','alamat','id_perawat'];

    public function perawat(){
    	return $this->belongsTo('App\Pemesanan','id_perawat');
    }
}

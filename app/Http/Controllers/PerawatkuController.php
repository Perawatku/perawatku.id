<?php

namespace App\Http\Controllers;

use App\Rumah_sakit;
use App\Perawat;
use App\Pemesanan;

use Illuminate\Http\Request;

class PerawatkuController extends Controller
{
    public function index(){

    	return view('perawatku/index');
    }

    public function listrawat(){
    	$rs = Rumah_sakit::all();

    	return view('perawatku/listrs',['rs'=>$rs]);
    }

    public function detailrs($id){
    	$rs = Rumah_sakit::where('id_rs',$id)->first();

    	return view('perawatku/detailrs',['rs'=>$rs]);
    }

    public function listperawat($id){
    	$perawat = Perawat::where('id_rs',$id)->get();
    	$rs = Rumah_sakit::where('id_rs',$id)->first();

    	return view('perawatku/listperawat',['perawat'=>$perawat,'rs'=>$rs]);
    }

    public function detailperawat($id){
    	$perawat = Perawat::where('id_perawat',$id)->first();

    	return view('perawatku/detailperawat',['perawat'=>$perawat]);
    }

    public function pemesanan($id){    	
    	$perawat = Perawat::where('id_perawat',$id)->first();

    	return view('perawatku/pemesanan',['perawat'=>$perawat]);
    }

    public function pemesananperawat(Request $request){

    	$pesan = new Pemesanan;
    	$pesan->nama_pemesan = $request->nama_pemesan;
    	$pesan->alamat_pemesan = $request->alamat_pemesan;
    	$pesan->no_hp_pemesan = $request->no_hp_pemesan;
    	$pesan->nama_pasien = $request->nama_pasien;
    	$pesan->jenis_kelamin = $request->jenis_kelamin;
    	$pesan->umur = $request->umur;
    	$pesan->alamat = $request->alamat;
    	$pesan->id_perawat = $request->id_perawat;
    	$pesan->save();

    	if ($pesan->save()) {
    		return redirect('/');
    	}

    }
}

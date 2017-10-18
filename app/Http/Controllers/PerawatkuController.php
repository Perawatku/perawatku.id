<?php

namespace App\Http\Controllers;

use App\Rumah_sakit;

use Illuminate\Http\Request;

class PerawatkuController extends Controller
{
    public function index(){

    	return view('perawatku/index');
    }

    public function listrawat(){
    	$rs = Rumah_sakit::all();

    	return view('perawatku/listrawat',['rs'=>$rs]);
    }
}

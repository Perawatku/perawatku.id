<?php

namespace App\Http\Controllers;

use App\Rumah_sakit;

use Illuminate\Http\Request;

class PerawatkuController extends Controller
{
    public function index(){
    	$rs = Rumah_sakit::all();

    	return view('perawatku/index',['rs'=>$rs]);
    }
}

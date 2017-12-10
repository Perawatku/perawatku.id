<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rumahsakit/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('rumahsakit/login');
    }

    public function perawat()
    {
        return view('rumahsakit/perawat');
    }

    public function perawat_detail()
    {
        return view('rumahsakit/perawat-detail');
    }

    public function perawat_add()
    {
        return view('rumahsakit/perawat-add');
    }

    public function perawat_edit()
    {
        return view('rumahsakit/perawat-edit');
    }

    public function profil()
    {
        return view('rumahsakit/profil');
    }

    public function profil_edit()
    {
        return view('rumahsakit/profil-edit');
    }

    public function notifikasi()
    {
        return view('rumahsakit/notifikasi');
    }

    public function notifikasi_detail()
    {
        return view('rumahsakit/notifikasi-detail');
    }

}

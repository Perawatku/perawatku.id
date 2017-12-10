@extends('rumahsakit.nav')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Nama Rumah Sakit</h2>
    </div>
    <div class="header">
      <h1>Profil</h1>
    </div>
    <div class="row clearfix">
      <!-- Task Info -->
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="card">
          <div class="header">
            <h2>Data Pemesan</h2>
          </div>
          <div class="body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td class="col-md-2 col-lg-2">Nama Lengkap</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Nama Pemesan</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">Alamat</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Alamat Pemesan</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">No KTP</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">No KTP Pemesan</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">No HP</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">No HP Pemesan</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="card">
          <div class="header">
            <h2>Data Pasien</h2>
          </div>
          <div class="body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td class="col-md-2 col-lg-2">Nama Lengkap</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Nama Pasien</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">Alamat</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Alamat Pasien</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">No KTP</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">No KTP Pasien</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">No HP</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">No HP Pasien</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
        <div class="card">
          <div class="header">
            <h1>Data Perawat</h1>
          </div>
          <div class="body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td class="col-md-2 col-lg-2">Nama Lengkap</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Nama Perawat</td>
                  <td class="col-md-2 col-lg-2">Fee</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Rp. 500.000</td>
                  <td rowspan="4"> <img src="{{ url('/asset/images/perawat.png') }}"  alt=""  width="270px;" height="270px;"> </td>

                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">Alamat</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">Alamat Perawat</td>
                  <td class="col-md-2 col-lg-2">Lama Waktu</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">2 Hari</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">No KTP</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">No KTP Perawat</td>
                </tr>
                <tr>
                  <td class="col-md-2 col-lg-2">No HP</td>
                  <td class="col-md-1 col-lg-1">:</td>
                  <td class="col-md-3 col-lg-3">No HP Perawat</td>
                </tr>
              </table>
            </div>
            <div class="row clearfix ">
              <button class="btn btn-default waves-effect" type="button" name="button">Cancel</button>
              <button class="btn btn-primary waves-effect" type="button" name="button">Confirm</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

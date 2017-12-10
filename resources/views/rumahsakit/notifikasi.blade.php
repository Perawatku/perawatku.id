@extends('rumahsakit.nav')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Nama Rumah Sakit</h2>
      <h1>Notifikasi</h1>
    </div>
    <div class="row clearfix">
      <!-- Task Info -->
      <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
        <div class="card">
          <div class="body">
            <div class="table-responsive">
              <table class="table table-hover dashboard-task-infos">
                <thead>
                  <th class="col-md-4 col-lg-4 info">Nama Pemesan</th>
                  <th class="col-md-4 col-lg-4 info">Nama Pasien</th>
                  <th class="col-md-4 col-lg-4 info" colspan="2">Keterangan</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Pemesan 1</td>
                    <td>Pasien 1</td>
                    <td> <button class="btn bg-grey waves-effect" type="button" name="button">Belum Diproses</button> </td>
                    <td> <a href="{{ url('/rumahsakit/notifikasi-detail') }}"> Detail </a> </td>
                  </tr>
                  <tr>
                    <td>Pemesan 2</td>
                    <td>Pasien 2</td>
                    <td> <button class="btn bg-blue waves-effect" type="button" name="button">Sudah Diproses</button> </td>
                    <td> <a href="{{ url('/rumahsakit/notifikasi-detail') }}"> Detail </a> </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="defaultModalLabel">Perawat</h4></center>
            </div>
            <div class="modal-body">
              <div class="row clearfix">
                <div >
                  <table>
                    <tr>
                      <td rowspan="7"><img src="{{ url('/asset/images/perawat.png') }}" alt=""  width="270px;" height="270px;"></td>
                      <td>Nama Perawat</td>
                      <td>: Nama Perawat</td>
                    </tr>
                    <tr>
                      <td>Kota</td>
                      <td>: Kota Perawat</td>
                    </tr>
                    <tr>
                      <td>Asal Kampus</td>
                      <td>: Kampus Perawat</td>
                    </tr>
                    <tr>
                      <td>Sertifikasi</td>
                      <td>: Sertifikasi</td>
                    </tr>
                    <tr>
                      <td>No STR</td>
                      <td>: No STR</td>
                    </tr>
                    <tr>
                      <td>Keahlian</td>
                      <td>: Keahlian</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>: Keterangan</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect">Edit</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection

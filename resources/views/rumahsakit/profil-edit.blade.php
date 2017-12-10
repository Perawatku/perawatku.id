@extends('rumahsakit.nav')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Nama Rumah Sakit</h2>
    </div>
    <div class="header">
      <h2>Isi Profil Rumah Sakit</h2>
    </div>
    <div class="row clearfix">
      <!-- Task Info -->
      <div class="col-sm-offset-2 col-md-8 col-lg-8 ">
        <div class="body">
          <div class="table-responsive">
            <br><br>
            <table class="table">
              <tr>
                <td class="col-md- col-lg-6">Nama Rumah Sakit</td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>No Telepon</td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>Nama Penanggung Jawab</td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
            </table>
          </div>
          <div class="col-sm-offset-8">
            <button class="btn btn-default waves-effect col-md-6 col-lg-6"  type="button" name="button">Upload</button>
            <button class="btn btn-primary waves-effect col-md-6 col-lg-6"  type="button" name="button">Save</button>
          </div>
          <div class="row clearfix">
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

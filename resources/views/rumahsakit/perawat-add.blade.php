@extends('rumahsakit.nav')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Nama Rumah Sakit</h2>
    </div>
    <div class="row clearfix">
      <!-- Task Info -->
      <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
        <div class="header">
          <h2>Isi Profil Perawat</h2>
        </div>
        <div class="body">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <td rowspan="10" class="col-md-4 col-lg-4">
                  <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                      <div class="dz-message">
                          <div class="drag-icon-cph">
                              <i class="material-icons">cloud_upload</i>
                          </div>
                          <h3>Tarik File Kesini.</h3>
                      </div>
                      <div class="fallback">
                          <input name="file" type="file" multiple />
                      </div>
                  </form>
                </td>
                <td class="col-md-4 col-lg-4">Nama Lengkap</td>
                <td class="col-md-4 col-lg-4">Keahlian</td>
              </tr>
              <tr>
                <td> <input type="text" class="form-control" name="" value=""> </td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>Kota</td>
                <td>Pengalaman</td>
              </tr>
              <tr>
                <td> <input type="text" class="form-control" name="" value=""> </td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>Asal Kampus</td>
                <td>Keterangan</td>
              </tr>
              <tr>
                <td> <input type="text" class="form-control" name="" value=""> </td>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>Sertifikasi yang pernah Diikuti</td>
                <td></td>
              </tr>
              <tr>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
              <tr>
                <td>No STR</td>
                <td></td>
              </tr>
              <tr>
                <td> <input type="text" class="form-control" name="" value=""> </td>
              </tr>
            </table>
          </div>
          <div class="col-sm-offset-10">
            <button type="button" class="btn btn-primary waves-effect" name="button">Save</button>
          </div>
        </div>
        <div class="row clearfix">
          <br><br>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

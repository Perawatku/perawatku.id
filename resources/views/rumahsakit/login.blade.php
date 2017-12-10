<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perawatku</title>
    <!-- Bootstrap -->
    <link href="{{ url('/asset/login/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/login/css/style4.css') }}" rel="stylesheet">

    <script src="{{ url('/asset/login/js/jquery.min.js') }}"></script>
    <script src="{{ url('/asset/login/js/bootstrap.js') }}"></script>
  </head>
  <body>

          <div class="container" style="padding-top: 200px; ">

              <div class="panel-group col-md-6 col-md-offset-3">

                      <div class="panel panel-primary">

                        <div class="panel-heading" style="font-family: SciFly Sans ; font-size: 40px; color: #fff; text-align: center;">Login <strong> Rumah Sakit</strong></div>

                        <div class="panel-body">

                              <form  id="form-login" style="font-family: Lato; padding-top: 10px;">

                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="col-md-2">
                                              <label for="Username"> Username </label>
                                          </div>
                                          <div class="col-md-10">
                                              <input class="form-control " type="text" name="username" required="" placeholder="nama rumah sakit">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="col-md-2">
                                              <label for="password"> Password </label>
                                          </div>
                                          <div class="col-md-10">
                                              <input class="form-control " name="password" type="password" required="" placeholder="*******">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12" style="padding-left: 115px;">
                                          <a href="pages-lupapassword.html"> Forgot your password?</a>
                                      </div>
                                  </div>

                                  <div class="form-group text-center">
                                      <div class="col-md-12">
                                          <button class="btn btn-primary" style="border-radius: 15%; " type="submit">Log In</button>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12 text-right">
                                          <a href="pages-register.html"> <strong>Create an account</strong>  </a>
                                      </div>
                                  </div>

                              </form>

                        </div>
                      </div>

              </div>
          </div>

          <!-- Modal -->
              <div id="modal-berhasil" class="modal fade" role="dialog">

                <div class="modal-dialog modal-sm">

                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-body" style="text-align: center;">

                             <h4 class="judul-berhasil">Login Berhasil</h4>

                             <div style="font-family: Lato;">
                                  <br>Anda akan menuju halaman
                                  <br>Rumah Sakit Anda <br>
                                  <br> Mohon Menunggu
                             </div>

                          </div>
                      </div>

                </div>
              </div>

              <div id="modal-gagal" class="modal fade" role="dialog">

                <div class="modal-dialog modal-sm">

                      <!-- Modal content-->
                      <div class="modal-content">

                         <div class="modal-body" style="text-align: center;">

                           <h4 class="judul-gagal">Login Gagal !</h4>

                           <div style="font-family: Lato; text-align: 20px;">
                               <br>Email atau Password Anda Salah
                               <br>Coba Ulangi !
                               <br><br><button type="button" class="btn btn-default btn-kembali" data-dismiss="modal">Kembali</button>
                           </div>

                           <br><a href=" " style="color: #48a8cb; font-family: Lato;"> Lupa Username atau Password ?</a>
                        </div>

                      </div>

                </div>

              </div>

              <script type="text/javascript">
                  $(document).ready(function(){
                      $('#form-login').on("submit",function(e){
                          e.preventDefault();
                          var username = $('input[name=username]').val()
                          var password = $('input[name=password]').val()

                          if(username == "123" && password == "123"){
                              $('#modal-berhasil').modal();
                          }else{
                              $('#modal-gagal').modal();

                          }
                      });
                  });

              </script>

  </body>
</html>

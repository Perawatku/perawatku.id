@extends('layouts.nav')
@section('content')
<section id="big-banner" class="big-banner">
  <div class="banner-content">
    <div class="container">
      <div class="content">
        <h1>About</h1>
      </div>
    </div>
  </div>
</section>
<section id="about" style="padding-top:200px;padding-bottom:200px;">
  <div class="container">
    <div class="text1">
      <h2> Tentang Kami </h2>
    </div>
    <div class="isi-text1">
      <h4> About Us</h4>
    </div>
  </div> <!-- pembatas container 1 -->
  <div class="container">
    <div class="col-sm-12 col-md-12 " >
      <div class="text2">
        <div align="center">
          <img src="{{url('/asset/images/orang.png')}}" style="width:300px; height:300px;">
        </div>
        <a href="" data-toggle="modal" data-target="#myModal-ceo"> <h4> Ogy Winenriandhika</h4></a>
        <!-- Modal Lihat Profil -->
        <div id="myModal-ceo" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Profil Lebih Lengkap</h4>
              </div>
              <div class="modal-body">
                <p>Some text in the modal untuk ceo.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
              </div>
            </div>
          </div>
        </div>
        <!--Batas Modal -->
        <h3> Founder/CEO </h3>
      </div>
    </div>
  </div> <!-- pembatas container 2 -->
  <div class="container" style="padding-top:100px;">
    <div class="text3">
      <h2> Tim Kami</h2>
    </div>
    <div class="col-sm-6 col-md-4 profil-tim" >
      <img src="{{url('/asset/images/orang.png')}}" style="width:200px; height:200px;">
      <h4 style="color:#48a8cb;"> Hafni Afif </h4>
      <h4> Backend Developer </h4>
      <button type="button" class="btn btn-default btn-profil" data-toggle="modal" data-target="#myModal1"> Lihat Profil</button>
      <!-- Modal Lihat Profil -->
      <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Profil Lebih Lengkap</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal 1.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <!--Batas Modal -->
    </div>
    <div class="col-sm-6 col-md-4 profil-tim" >
      <img src="{{url('/asset/images/orang.png')}}" style="width:200px; height:200px;">
      <h4 style="color:#48a8cb;"> Hafni Afif </h4>
      <h4> Backend Developer </h4>
      <button type="button" class="btn btn-default btn-profil" data-toggle="modal" data-target="#myModal2"> Lihat Profil</button>
      <!-- Modal Lihat Profil -->
      <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Profil Lebih Lengkap</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal 2.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <!--Batas Modal -->
    </div>
    <div class="col-sm-6 col-md-4 profil-tim" >
      <img src="{{url('/asset/images/orang.png')}}" style="width:200px; height:200px;">
      <h4 style="color:#48a8cb;"> Hafni Afif </h4>
      <h4> Backend Developer </h4>
      <button type="button" class="btn btn-default btn-profil" data-toggle="modal" data-target="#myModal3"> Lihat Profil</button>
      <!-- Modal Lihat Profil -->
      <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Profil Lebih Lengkap</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal 3.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <!--Batas Modal -->
    </div>
    <div class="col-sm-6 col-md-4 profil-tim" >
      <img src="{{url('/asset/images/orang.png')}}" style="width:200px; height:200px;">
      <h4 style="color:#48a8cb;"> Hafni Afif </h4>
      <h4> Backend Developer </h4>
      <button type="button" class="btn btn-default btn-profil" data-toggle="modal" data-target="#myModal4"> Lihat Profil</button>
      <!-- Modal Lihat Profil -->
      <div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Profil Lebih Lengkap</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal 4.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <!--Batas Modal -->
    </div>
    <div class="col-sm-6 col-md-4 profil-tim" >
      <img src="{{url('/asset/images/orang.png')}}" style="width:200px; height:200px;">
      <h4 style="color:#48a8cb;"> Hafni Afif </h4>
      <h4> Backend Developer </h4>
      <button type="button" class="btn btn-default btn-profil" data-toggle="modal" data-target="#myModal5"> Lihat Profil</button>
      <!-- Modal Lihat Profil -->
      <div id="myModal5" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Profil Lebih Lengkap</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal 5.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <!--Batas Modal -->
    </div>
    <div class="col-sm-6 col-md-4 profil-tim" >
      <img src="{{url('/asset/images/orang.png')}}" style="width:200px; height:200px;">
      <h4 style="color:#48a8cb;"> Hafni Afif </h4>
      <h4> Backend Developer </h4>
      <button type="button" class="btn btn-default btn-profil" data-toggle="modal" data-target="#myModal6"> Lihat Profil</button>
      <!-- Modal Lihat Profil -->
      <div id="myModal6" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Profil Lebih Lengkap</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal 6.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <!--Batas Modal -->
    </div>
    <div class="">
      <br><br>
    </div>
  </div> <!-- pembatas container 3 -->
</section>
<div class="container">
  <section id="" class="subscribe">
    <div class="subscribe-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="form-subscribe">
              <h2>Hubungi Kami</h2>
              <form method="post" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your E-Mail">
                </div>
                <button class="btn btn-primary btn-subscribe">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<section class="about">
  <center><h2>Link</h2></center>
  <div class="links-container">
    <ul class="contact-links">
      <li><a href="https://facebook.com/" target="_blank"><span class="fa fa-facebook"></span></a></li>
      <li><a href="https://instagram.com/" target="_blank"><span class="fa fa-instagram"></span></a></li>
      <li><a href="https://twitter.com/" target="_blank"><span class="fa fa-twitter"></span></a></li>
    </ul>
  </div>
</section>


@endsection

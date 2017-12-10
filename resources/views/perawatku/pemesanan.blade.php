@extends('layouts.nav')
@section('content')
<section id="big-banner" class="big-banner">
	<div class="banner-content">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-2 slideInLeft animated">
						<img src="{{ url('/asset/images/ipad.png') }}" class="banner-img-imac">
					</div>
					<div class="col-sm-4">
						<div class="banner-content-right slideInRight animated judul-atas">
							<h2>Kenali Keluhan Pasien</h2>
							<p>ratusan template desain gratis untuk meningkatkan kualitas tugas-tugas kuliah kamu</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class='service-content'>
	<div class="container responsive">
		<div class="progress">
			<div class="circle done">
				<span class="label">1</span>
				<span class="title">0%</span>
			</div>
			<span class="bar done"></span>
			<div class="circle done">
				<span class="label">2</span>
				<span class="title">25%</span>
			</div>
			<span class="bar half"></span>
			<div class="circle active">
				<span class="label">3</span>
				<span class="title">50%</span>
			</div>
			<span class="bar"></span>
			<div class="circle">
				<span class="label">4</span>
				<span class="title">75%</span>
			</div>
		</div>
	</div>
</section>
<div class="service-content">
	<div class="container">
		<a id="next" href="#button"><button class="button">Selanjutnya</button></a>
		<a id="prev" href="#button"><button class="button">Sebelumnya</button></a>
	</div>
</div>
<section class="service-content">
	<form action="/pesanperawat" method="post" class="form-horizontal">
		<div class="divs">
	     <div class="cls1 panel-perawat col-sm-6 col-centered">
				 <table>
					 <tr>
						 <th >Nama Perawat</th>
						 <th >:</th>
						 <th >{{$perawat->nama_perawat}}</th>
						 <th hidden><input type="text" name="id_perawat" value="{{$perawat->id_perawat}}" readonly required></th>
					 </tr>
				 </table>
			 </div>
	     <div class="cls2 panel-pemesan col-sm-6 col-centered	">
				 <table >
					 <thead>
						 <tr>
							 <th colspan="3"><center>Pemesan</center></th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <th class="col-md-5">Nama Pemesan</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5"><input type="text" class="form-control"  name="nama_pemesan" required></th>
						 </tr>
						 <tr>
							 <th class="col-md-5">Alamat</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5"><input type="text" class="form-control" name="alamat_pemesan" required></th>
						 </tr>
						 <tr>
							 <th class="col-md-5">No HP</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5"><input type="text" class="form-control"  name="no_hp_pemesan" required></th>
						 </tr>
					 </tbody>
				 </table>
			 </div>
	     <div class="cls3 panel-pasien  col-sm-6 col-centered">
				 <table>
					 <thead>
						 <tr>
							 <th colspan="3"><center>Pasien</center></th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <th class="col-md-5">Pasien</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5"><input type="text" class="form-control"  name="nama_pasien" required></th>
						 </tr>
						 <tr>
							 <th class="col-md-5">Umur</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5"><input type="text" class="form-control"  name="Umur" required></th>
						 </tr>
						 <tr>
							 <th class="col-md-5">Jenis Kelamin</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5">
								 <select name="jenis_kelamin" required>
									 <option value="laki-laki">Laki-laki</option>
									 <option value="perempuan">Perempuan</option>
								 </select>
							 </th>
						 </tr>
						 <tr>
							 <th class="col-md-5">Alamat</th>
							 <th class="col-md-2">:</th>
							 <th class="col-md-5"><input type="text" class="form-control"  name="Alamat" required></th>
						 </tr>
					 </tbody>
				 </table>
			 </div>
	     <div class="cls4 panel-administrasi col-sm-10  col-centered">
				 <table>
					 <thead>
					 	<th colspan="2"><span>Data</span> Pemesan</th>
						<th colspan="2"><span>Data</span> Pasien</th>
					</thead>
					<tbody>
						<tr>
							<td class="col-sm-2">Nama Lengkap</td>
							<td class="col-sm-3">: Nama Pemesan</td>
							<td class="col-sm-2">Nama Lengkap</td>
							<td class="col-sm-3	">: Nama Pasien</td>
						</tr>
					</tbody>
				 </table>
				 <br>
				 <table>
					 <tfoot>
						<th colspan="4"><span>Data</span> Perawat</th>
						<th></th>
						<th></th>
					</tfoot>
					<tbody>
						<tr>
							<td rowspan="6" colspan="3" class="col-sm-6"> <img src="{{ url('/asset/images/perawat.png') }}" alt=""  width="270px;" height="270px;"> </td>
							<td class="col-sm-2">Nama Lengkap</td>
							<td class="col-sm-3">: Nama Perawat</td>
						</tr>
						<tr>
							<td class="col-sm-2">Alamat</td>
							<td class="col-sm-3">: Alamat Perawat</td>
						</tr>
						<tr>
							<td class="col-sm-2">No KTP</td>
							<td class="col-sm-3">: No KTP Perawat</td>
						</tr>
						<tr>
							<td class="col-sm-2">No HP</td>
							<td class="col-sm-3">: No HP Perawat</td>
						</tr>
						<tr>
							<td class="col-sm-2">Fee</td>
							<td class="col-sm-3">:<p>100.000</p></td>
						</tr>
						<tr>
							<td class="col-sm-2">No HP</td>
							<td class="col-sm-3">: No HP Perawat</td>
						</tr>
					</tbody>
				 </table>
				 <table>
				 		<tr>
				 			<th>
								<input class="form-control" type="checkbox" name="uea" value="">
							</th>
							<th>Saya Setuju dengan <a href="#">Syarat dan Ketentuan</a> dari Perawatku.id</th>
				 		</tr>
				 </table>
				 <table class="col-sm-offset-11">
				 	<tr>
				 		<td><button type="submit" name="submit" class="btn btn-primary">Pesan</button></td>
				 	</tr>
				 </table>
			 </div>
			 {{ csrf_field() }}
	 		</div>
 		</form>
</section>
<script type="text/javascript">
$(document).ready(function() {
var i = 1;
$('.progress .circle').removeClass().addClass('circle');
$('.progress .bar').removeClass().addClass('bar');
setInterval(function() {
$('.progress .circle:nth-of-type(' + i + ')').addClass('active');

$('.progress .circle:nth-of-type(' + (i - 1) + ')').removeClass('active').addClass('done');

$('.progress .circle:nth-of-type(' + (i - 1) + ') .label').html('&#10003;');

$('.progress .bar:nth-of-type(' + (i - 1) + ')').addClass('active');

$('.progress .bar:nth-of-type(' + (i - 2) + ')').removeClass('active').addClass('done');

i++;

if (i == 0) {
$('.progress .bar').removeClass().addClass('bar');
$('.progress div.circle').removeClass().addClass('circle');
i = 1;
}
}, 1000);
});
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(".divs div").each(function(e) {
			if (e != 0)
					$(this).hide();
	});

	$("#next").click(function(){
			if ($(".divs div:visible").next().length != 0)
					$(".divs div:visible").next().show().prev().hide();
			else {
					$(".divs div:visible").hide();
					$(".divs div:first").show();
			}
			return false;
	});

	$("#prev").click(function(){
			if ($(".divs div:visible").prev().length != 0)
					$(".divs div:visible").prev().show().next().hide();
			else {
					$(".divs div:visible").hide();
					$(".divs div:last").show();
			}
			return false;
	});
});
</script>
@endsection

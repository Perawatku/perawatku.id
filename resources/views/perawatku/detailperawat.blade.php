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

<section id="detail-perawat">
	<div class="container">
		<div class="row">
			<div class=" col-sm-6 col-md-6">
				<h1><span class="nama-perawat">{{ $perawat->nama_perawat }}</span> </h1>
			</div>
		</div>
		<div class="col-sm-6 col-md-4" style="padding-top:50px;">
			<img src="{{ url('/asset/images/perawat.png') }}" width="270px;" height="270px;">
			<h3> <span class="ket-perawat">Perawat Ada</span> </h3>
		</div>
		<div class="col-sm-6 col-md-8 bg-panel" style="padding:20px 20px 20px 20px;">
			<table class="">
				<tbody class="tb-panel">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>{{ $perawat->nama_perawat }}</td>
					</tr>
					<tr>
						<td>Kota</td>
						<td>:</td>
						<td>{{ $perawat->kota }}</td>
					</tr>
					<tr>
						<td>Nomor STR</td>
						<td>:</td>
						<td>{{ $perawat->no_str }}</td>
					</tr>
					<tr>
						<td>Nomor HP</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td>Keahlian</td>
						<td>:</td>
						<td>{{ $perawat->keahlian }}</td>
					</tr>
					<tr>
						<td>Pengalaman</td>
						<td>:</td>
						<td>{{ $perawat->pengalaman }}</td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td>:</td>
						<td>{{ $perawat->keterangan_perawat }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div> <!--batas container-->
	<div class="container">
		<div class="row">
			<a href="{{ url('/detailrs/listperawat/detailperawat/pemesanan/'.$perawat->id_perawat) }}">
				<button type="button" class="btn btn-info pull-right btn-pesan"><span> Pesan </span></button>
			</a>
		</div>
	</div> <!--batas container-->
</section>
@endsection

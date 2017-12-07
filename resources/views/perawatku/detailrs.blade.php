@extends('layouts.nav')
@section('content')
<section id="big-banner" class="big-banner">

		<div class="banner-content">

				<div class="container">

						<div class="content">

								<h1>Detail <br>Rumah Sakit</h1>

						</div>

				</div>

		</div>

</section>
<section id="more-rs">
	<div class="container">
		<div class="col-md-4">
			<img src="{{ url('/asset/images/rs.png') }}" style="width:300px; height:300px;">
		</div>
		<div class="col-md-8" style="padding-top:30px;">
			<div class="panel panel-color panel-primary" style="border-color:#48a8cb;">
				<div class="panel-heading" style="background-color:#48a8cb; border-color:#48a8cb;">
					<h3 class="panel-title nama-rs"> <b>{{ $rs->nama_rs }}</b></h3>
				</div>
				<div class="panel-body konten-rs">
					<div class="col-md">
						<h5 style="padding-left:10px;text-align: justify" >{{ $rs->keterangan_rs }}</h5>
					</div>
				</div>
				<div class="panel-body konten-rs">
					<div class="col-md">
						<h5 style="padding-left:10px;text-align: justify" >Alamat : {{ $rs->alamat_rs }}</h5>
					</div>
				</div>
				<div class="panel-body konten-rs">
					<div class="col-md">
						<h5 style="padding-left:10px;text-align: justify" >Alamat : {{ $rs->no_telp_rs }}</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="pilih-perawat" style="padding-top:80px;">
	<div class="container">
		<table class="table">
			<thead class="tabel-header">
				<tr>
					<th>No.</th>
					<th>Nomor STR</th>
					<th>Nama Perawat</th>
					<th>Kota</th>
					<th>Status</th>
					<th>Keterangan</th>
					<th>Pesan</th>
				</tr>
			</thead>
			<tbody>
				@foreach($perawat as $p)
				<?php $i=1 ?>
				<tr>
					<td>{{$i}}</td>
					<td>{{$p->no_str}}</td>
					<td>{{$p->nama_perawat}}</td>
					<td>{{$p->kota}}</td>
					<td>Ada</td>
					<td> <a href="{{ url('/detailrs/listperawat/detailperawat/'.$p->id_perawat) }}"> <button class="btn btn-info waves-effect waves-light m-b-5"> Lihat Lebih Lengkap </button> </a> </td>
					<td> <a href="{{ url('/detailrs/listperawat/detailperawat/pemesanan/'.$p->id_perawat) }}"> <button class="btn btn-info waves-effect waves-light m-b-5"> Pesan </button> </a> </td></td>
				</tr>
				<?php $i++ ?>
				@endforeach
			</tbody>
		</table>
	</div>
</section>

@endsection

@extends('layouts.nav')
@section('content')
<section id="big-banner" class="big-banner">
	<div class="banner-content">
		<div class="container">
			<div class="content">
				<h1>List Rumah Sakit</h1>
			</div>
		</div>
	</div>
</section>
		<div class="container">
			<?php $no=1; ?>
			@foreach($rs as $rs)
			<div class="col-sm-6 col-md-4"> <!-- panel rs-1-->
				<div class="panel panel-color panel-primary" style="border-color:#48a8cb;" >
					<div class="panel-heading" style="background-color:#48a8cb; border-color:#48a8cb;">
        		<h3 class="panel-title nama-rs"> <b>{{ $rs->nama_rs }}</b></h3>
					</div>
					<div class="panel-body konten-rs">
						<div class="col-md-4">
							<img src="{{ url('/asset/images/rs.png') }}" style="width:100px; height:100px; ">
						</div>
						<div class="col-md-8">
							<h5 style="padding-left:10px;text-align: justify" > ksoj onnknoi nnnoiasn kasn  nans ns ns knin  nknain aknknain kkkno naisnan biubkjb kjhasug  bjah jkgj buugnji </h5>
						</div>
						<div>
							<a href="detailrs/{{$rs->id_rs}}"><button type="button" class="btn btn-info pull-right btn-more"> More</button></a>
						</div>
					</div>
				</div>
			</div>
			<?php $no++; ?>
			@endforeach
		</div><!-- pembatas container 1 -->
	</div>
@endsection

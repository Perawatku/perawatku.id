<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		List <br>Perawat Rumah Sakit {{$rs->nama_rs}}
	</div>
	<div>
		<table>
			<thead>
				<tr>
					<td>No</td>
					<td>Nama Perawat</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				@foreach($perawat as $perawat)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $perawat->nama_perawat }}</td>
						<td><a href="detailperawat/{{$perawat->id_perawat}}"><button>Info Perawat</button></a></td>
					</tr>
				<?php $no++; ?>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		List Rawat
	</div>
	<div>
		<table>
			<thead>
				<tr>
					<td>No</td>
					<td>Nama Rumah Sakit</td>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				@foreach($rs as $rs)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $rs->nama_rs }}</td>
					</tr>
				<?php $no++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>
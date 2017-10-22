<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<div>
		Detail Perawat
	</div>
	<div>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $perawat->nama_perawat }}</td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>:</td>
				<td>{{ $perawat->kota }}</td>
			</tr>
			<tr>
				<td>Keahlian</td>
				<td>:</td>
				<td>{{ $perawat->keahlian }}</td>
			</tr>
			<tr>
				<td colspan="3"><a href="pemesanan/{{$perawat->id_perawat}}"><button>Pesan</button></a></td>
			</tr>
		</table>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<div>
		Detail Rumah Sakit
	</div>
	<div>
		<table>
			<tr>
				<td>Nama Rumah Sakit</td>
				<td>:</td>
				<td>{{ $rs->nama_rs }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $rs->alamat_rs }}</td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td>{{ $rs->no_telp_rs }}</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td>{{ $rs->keterangan_rs }}</td>
			</tr>
			<tr>
				<td colspan="3"><a href="listperawat/{{$rs->id_rs}}"><button>List Perawat</button></a></td>
			</tr>
		</table>
	</div>
</body>
</html>
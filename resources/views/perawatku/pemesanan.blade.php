<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>Form Pemesanan Perawat</div>

    <form action="/pesanperawat" method="post" class="form-horizontal">
	<div>
		<table>
			<tr>
				<td>Nama Perawat</td>
				<td>:</td>
				<td>{{$perawat->nama_perawat}}</td>
				<td hidden><input type="text" name="id_perawat" value="{{$perawat->id_perawat}}" readonly required></td>
			</tr>
		</table>
	</div>

	<div>
		<table>
			<thead>
				<tr>
					<td colspan="3"><center>Pemesan</center></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama Pemesan</td>
					<td>:</td>
					<td><input type="text" name="nama_pemesan" required></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat_pemesan" required></td>
				</tr>
				<tr>
					<td>No HP</td>
					<td>:</td>
					<td><input type="text" name="no_hp_pemesan" required></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div>
		<table>
			<thead>
				<tr>
					<td colspan="3"><center>Pasien</center></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama Pasien</td>
					<td>:</td>
					<td><input type="text" name="nama_pasien" required></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td>:</td>
					<td><input type="text" name="umur" required></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><select name="jenis_kelamin" required>
						<option value="laki-laki">Laki-laki</option>
						<option value="perempuan">Perempuan</option>
					</select></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" required></td>
				</tr>
			</tbody>
		</table>		
	</div>
	<div><button type="submit" name="submit">Pesan</button></div>
	    {{ csrf_field() }}
	</form>

</body>
</html>
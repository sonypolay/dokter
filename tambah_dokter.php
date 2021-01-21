<html>
<head>
	<title>Halaman Tambah Dokter</title>
</head>
<body>
	<center>
		<h2>Data Tambah Dokter</h2><br/>
		<form method="POST" action="tambah_dokter_aksi.php">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>No Telpon</td>
					<td><input type="text" name="telp"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
			</table>
			<tr>
				<td><input type="submit" value="Simpan"></td>
				</tr>
			<tr>
				<td><input type="reset" value="Reset"></td>
			</tr>
		</form>
		<a href="dokter.php">kembali</a>
	</center>
</body>
</html>
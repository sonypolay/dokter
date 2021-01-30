<!DOCTYPE html>
<html>
<head>
	<title>Halaman data dokter</title>
</head>
<body style="background-color: lightblue">
	<center>
		<h2>Data Dokter</h2>
		<table border="1" cellpadding="5">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Telepon</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no=1;
			$data=mysqli_query($koneksi, "select * from dokter");
			while ($d=mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit_dokter.php?id=<?php echo $d['id']; ?>">edit /</a>
					<a href="hapus_dokter.php?id=<?php echo $d['id']; ?>">hapus</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
		<br/>
		<a href="tambah_dokter.php">Tambah data dokter</a>
		<br/>
		<a href="halaman_utama.php">Home</a>
	</center>
</body>
</html>

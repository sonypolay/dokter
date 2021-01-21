<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
</head>
<body>
	<center>
	<h2>LOGIN</h2>
	<!--cek notifikasi-->
	<?php
		if (isset($_GET['pesan'])){
			if ($_GET['pesan']=="gagal"){
				echo "Login Gagal! username password salah";
			}if ($_GET['pesan']=="logout"){
				echo "anda berhasil logout";
			}if ($_GET['pesan']=="belum login"){
				echo "anda harus login";
			}
		}
	?>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>USERNAME</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
		</center>
</body>
</html>
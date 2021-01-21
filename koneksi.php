<?php
$koneksi=(mysqli_connect("localhost","root","","db_klinik"));
if(mysqli_connect_errno()){
	echo "login database gagal :".mysqli_connect_error();
}

?>
<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","pretestdb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

?>
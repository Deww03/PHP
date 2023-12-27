<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","persediaandb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

{
	$vusername = $_POST['txtusername'];
	$vpass = $_POST['txtpass'];
	{
		$query = mysqli_query($conn,"insert into user (username,pass) values ('$vusername','$vpass')");
		if ($query)
		echo "<h1><center>Input Data Sukses</center></h1><br>";
		else
		echo "<h1><center>Input Data Gagal</center></h1><br>";
	}
// header("location:barang.php");
}
?>
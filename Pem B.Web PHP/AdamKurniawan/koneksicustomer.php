<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","persediaandb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

{
	$vkdcustomer = $_POST['txtkdcustomer'];
	$vnmcustomer = $_POST['txtnmcustomer'];
	$vtelepon = $_POST['txttlp'];
	$vemail = $_POST['txtemail'];
	$valamat= $_POST['txtalamat'];
	{
		$query = mysqli_query($conn,"insert into customer (kdcustomer,nmcustomer,telepon,email,alamat) values ('$vkdcustomer','$vnmcustomer','$vtelepon','$vemail','$valamat')");
		if ($query)
		echo "<h1><center>Input Data Sukses</center></h1><br>";
		else
		echo "<h1><center>Input Data Gagal</center></h1><br>";
	}
// header("location:barang.php");
}
?>
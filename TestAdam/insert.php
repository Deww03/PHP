<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","dbmotor");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

{
	$vkdmotor = $_POST['txtkdmotor'];
	$vnmmotor = $_POST['txtnmmotor'];
	$vwarna = $_POST['txtwarna'];
	$vharga = $_POST['txtharga'];
	{
		$query = mysqli_query($conn,"insert into motor (kdmotor,nmmotor,warna,harga) values ('$vkdmotor','$vnmmotor','$vwarna','$vharga')");
		if ($query)
		echo "<h1><center>Input Data Sukses</center></h1><br>";
		else
		echo "<h1><center>Input Data Gagal</center></h1><br>";
	}
// header("location:barang.php");
}
?>
<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","persediaandb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

{
	$vkdbbarang = $_POST['txtkdbarang'];
	$vnmbarang = $_POST['txtnmbarang'];
	$vsatuan = $_POST['cbsatuan'];
	$vwarna = $_POST['cbwarna'];
	$vjumlah = $_POST['txtjumlah'];
	{
		$query = mysqli_query($conn,"insert into barang (kdbarang,nmbarang,satuan,warna,jumlah) values ('$vkdbbarang','$vnmbarang','$vsatuan','$vwarna','$vjumlah')");
		if ($query)
		echo "<h1><center>Input Data Sukses</center></h1><br>";
		else
		echo "<h1><center>Input Data Gagal</center></h1><br>";
	}
// header("location:barang.php");
}
?>
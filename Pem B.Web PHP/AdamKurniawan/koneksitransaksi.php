<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","persediaandb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

{
	$vkdtransaksi = $_POST['txtkdtransaksi'];
	$vkdcustomer = $_POST['cbkdcustomer'];
	$vkdbarang = $_POST['cbkdbarang'];
	$vqty = $_POST['txtqty'];
	$vtanggal = $_POST['txttanggal'];
	{
		$query = mysqli_query($conn,"insert into transaksi (kdtransaksi,kdcustomer,kdbarang,qty,tanggal) values ('$vkdtransaksi','$vkdcustomer','$vkdbarang','$vqty','$vtanggal')");
		if ($query)
		echo "<h1><center>Input Data Sukses</center></h1><br>";
		else
		echo "<h1><center>Input Data Gagal</center></h1><br>";
	}
// header("location:barang.php");
}
?>
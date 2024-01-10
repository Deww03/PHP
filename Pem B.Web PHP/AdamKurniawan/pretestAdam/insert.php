<?php
//koneksi ke mysql
$conn = mysqli_connect("localhost", "root","","pretestdb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

{
	$vkdpembelian = $_POST['txtkdpembelian'];
	$vtgl = $_POST['txttgl'];
	$vnmmotor = $_POST['cbnmmotor'];
    $vharga = $_POST['txtharga'];
    $vtype = $_POST['txttype'];
    $vck = $_POST['txtck'];
	$vwarna = $_POST['cbwarna'];
	{
		$query = mysqli_query($conn,"insert into transaksi (kdpembelian,tgl,nmmotor,harga,type,ck,warna) values ('$vkdpembelian','$vtgl','$vnmmotor','$vharga','$vtype','$vck','$vwarna')");
		if ($query)
		echo "<h1><center>Input Data Sukses</center></h1><br>";
		else
		echo "<h1><center>Input Data Gagal</center></h1><br>";
	}
}
?>
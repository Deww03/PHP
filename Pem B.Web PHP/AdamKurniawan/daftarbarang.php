<html>
<title>
	Daftar Barang
</title>
<body>
<?php
	$conn = mysqli_connect("localhost","root","","persediaandb");
	if (mysqli_connect_errno()){
		echo "Koneksi Gagal".mysqli_connect_error();
	}
	$query = mysqli_query($conn,"select * from barang");

?>
<table width="100%" height="100%" border="1" bgcolor="skyblue">
	<tr>
		<td>
			<table width="800" height="87" border="1" align="center" bgcolor="red">
				<center>
					<tr>
						<td width="400"><center><h1>DAFTAR BARANG</h1></center>
						</td>
					</tr>
				<form method="post" action="insert.php">
			</table>

<table width="800" border="1" align="center" bgcolor="white">
	<tr>
		<td><b>Kode Barang</td>
		<td><b>Nama Barang</td>
		<td><b>Satuan</td>
		<td><b>Warna</td>
		<td><b>Jumlah</td>
		<td><b>Hapus</td>
		<td><b>Edit</td>
		<td><b>Kembali</td>
	</tr>

<?php
	while ($row=mysqli_fetch_array($query)) 
	{
		echo"<tr>";
		echo"<td>".$row["kdbarang"]."</td>";
		echo"<td>".$row["nmbarang"]."</td>";
		echo"<td>".$row["satuan"]."</td>";
		echo"<td>".$row["warna"]."</td>";
		echo"<td>".$row["jumlah"]."</td>";
		echo"<td><a href =delete.php?kdbarang=".$row["kdbarang"].">Delete</a></td>";
		echo"<td><a href =editbarang.php?kdbarang=".$row["kdbarang"].">Edit</a></td>";
		echo"<td><a href='barang.php'>Back</a></td>";
		echo "</tr>";
	}
?>
</table>
</table>
</CENTER>
<center>
	<div class="Frame_Footer">
	<div class="Frame_Inside_Footer" style="background-color: blue; color: white">
	<span class="style1" style="color: white">Copyrights by Adam Kurniawan</span><br class="style1" />
	<span class="style1"><span class="style1">&copy; 2023 All Right Reserved</span></span><span class="style1"></span>
	</div>
</center>
</body>
</html>
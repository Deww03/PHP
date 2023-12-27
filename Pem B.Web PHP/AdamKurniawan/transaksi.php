<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>
	Data User
	</title>
	<style type="text/css">
	</style>
</head>

<body>
<?php
$conn = mysqli_connect("localhost", "root","","persediaandb");
if (mysqli_connect_errno()){
	echo "koneksi Gagal".mysqli_connect_error();
}

$queryBarang = mysqli_query($conn, "select * from barang");
$queryCustomer = mysqli_query($conn, "select * from customer");
?>
	<center>
		<table width="100%" height="100%" border="1" bgcolor="skyblue">
		<tr>
			<td>
				<center>
				<table width="800" height="87" border="1" align="center" bgcolor="red">
		</tr>
			<h4>PT.SISTEM INFORMASI</h4>
			<b>JL.Raya Serang Km.10 Bitung-Tangerang</b>

		<hr>
		<center>
				<table width="500" height="150" border="1" align="center" bgcolor="violet">
					<tr>
						<td colspan="2"><center>INPUT DATA TRANSAKSI</center></td>
					</tr>
			<form method="post" action="koneksitransaksi.php">


				<tr>
					<td width="175">Kode Transaksi</td>
					<td><input type="text" name="txtkdtransaksi" id="txtkdtransaksi" size="20 /"></td>
				</tr>

				<tr>
					<td height="37">Kode Customer</td>
					<td width="306">
					<select name="cbkdcustomer" id="txtkdcustomer" style="height:25;">
						<?php
						while ($row = mysqli_fetch_array($queryCustomer)) {
							echo "<option value=".$row["kdcustomer"].">".$row["kdcustomer"]."</option>";
						}
						?>
					</select>
					</td>
				</tr>

				<tr>
					<td height="37">Kode Barang</td>
					<td width="306">
					<select name="cbkdbarang" id="txtkdbarang" style="height:25;">
						<?php
						while ($row = mysqli_fetch_array($queryBarang)) {
							echo "<option value=".$row["kdbarang"].">".$row["kdbarang"]."</option>";
						}
						?>
					</select>
					</td>
				</tr>

				<tr>
					<td width="175">Quantity</td>
					<td><input type="text" name="txtqty" id="txtqty" size="20 /"></td>
				</tr>

				<tr>
					<td width="175">Tanggal</td>
					<td><input type="text" name="txttanggal" id="txttanggal" size="20 /"></td>
				</tr>

				<tr><center>
				<td colspan="2">
					<form id="form5" name="form5" method="post"	action="" >
						<center>
							<input name="BtnSave" type="submit" id="BtnSave" value="Save" style="height:25; background-color: purple" />
							<input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel" style="height:25; background-color: purple" />
						</center>
					</form>
				</td>
		</center>
		</tr>
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
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>
	Data Barang
	</title>
</head>
<body><CENTER>
<table width="100%" height="100%" border="1" bgcolor="skyblue">
	<tr>
		<td>
			<table width="800" height="87" border="1" align="center" bgcolor="red">
				<center>
					<tr>
						<td width="400"><center><h1>INPUT DATA BARANG</h1></center>
						</td>
					</tr>
				<form method="post" action="insert.php">
</table>

	<table width="800" border="1" align="center" bgcolor="white">

		<tr>
			<td width="295" height="37">
				<font size="5">Kode Barang</font>
			</td>
			<td>
				<input name="txtkdbarang" type="text" id="txtkdbarang" size="5" style="height:25;" />
			</td>
		</tr>

		<tr>
			<td height="37">
				<font size="5">Nama Barang</font>
			</td>
			<td>
				<input name="txtnmbarang" type="text" id="txtnmbarang" size="25" style="height:25;" />
			</td>
		</tr>

		<tr>
			<td height="37">
				<font size="5">Satuan</font>
			</td>
			<td width="306">
				<select name="cbsatuan" id="txtsatuan" style="height:25;">
					<option value="Pcs">Pcs</option>
					<option value="Set">Set</option>
					<option value="Box">Box</option>
					<option value="Kg">Kg</option>
				</select>
			</td>
		</tr>

		<tr>
			<td height="37">
				<font size="5">Warna</font>
			</td>
			<td width="306">
				<select name="cbwarna" id="txtwarna" style="height:25;">
					<option value="Hitam">Hitam</option>
					<option value="Biru">Biru</option>
					<option value="Putih">Putih</option>
					<option value="None">None</option>
				</select>
			</td>
		</tr>

		<tr>
			<td height="37">
				<font size="5">Jumlah</font>
			</td>
			<td>
				<input name="txtjumlah" type="text" id="txtjumlah" size="5" style="height:25;" />
			</td>
		</tr>

		<tr><center>
			<td colspan="2">
				<form id="form5" name="form5" method="post"	action="" >
					<center>
						<input name="BtnSave" type="submit" id="BtnSave" value="Save" style="height:25; background-color: red" />
						<input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel" style="height:25; background-color: red" />
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

</form>
</body>
</html> 
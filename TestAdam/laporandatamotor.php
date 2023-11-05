<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost", "root","","dbmotor");
		if (mysqli_connect_errno()){
			echo "koneksi Gagal".mysqli_connect_error();
		}
		$query = mysqli_query($conn,"SELECT * FROM motor");
		?>

		<center>
			<table width="100%" height="300" border="1" bgcolor="#00FF99">
				<tr>
					<td><table width="400" height="50" align="center" bgcolor="#999999">
			</table>
		<center>
			<b><h3> PT. SISTEM INFORMASI </h3>
			Jl. Raya Serang Km.10 Bitung-Tangerang</b>
			<hr>
			<h3>LAPORAN DATA MOTOR</h3>
			<table border="1" cellpadding="5" cellspacing="0" bgcolor="#999999">
				<thead>
					<tr>
						<td><b>Kode Motor</td>
						<td><b>Nama Motor</td>
						<td><b>Warna Motor</td>
						<td><b>Harga</td>
					</tr>
				</thead>
			<tbody bgcolor="#ffffff">
				<?php
					while ($row=mysqli_fetch_array ($query))

					{
						echo"<tr>";
							echo"<td>".$row['kdmotor']."</td>";
							echo"<td>".$row['nmmotor']."</td>";
							echo"<td>".$row['warna']."</td>";
							echo"<td>".$row['harga']."</td>";
						echo"<tr>";
					}
				?>
		</center>
			</tbody>
		</table><p>
		</center>

		<p><p>
			<center>
			<div class="Frame_Footer">
			<div class="Frame_Inside_Footer" style="background-color: blue; color: white">
			<span class="style1" style="color: white">Copyrights by Adam Kurniawan</span><br class="style1" />
			<span class="style1"><span class="style1">&copy; 2023 All Right Reserved</span></span><span class="style1">
			</span>
			</div>
		</table>
		<a href="menu.php">Klik disini Kembali ke Menu Utama</a>
	</body>
</html>
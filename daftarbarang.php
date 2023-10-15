<!DOCTYPE html>
<html>
	<head>
		<title>Daftar barang</title>
	</head>
	<body>
		<?php  
			// Koneksi ke mysql
			$conn = mysqli_connect("localhost", "root", "", "persediaandb");

			if (mysqli_connect_errno()) {
				echo "Koneksi Gagal".mysqli_connect_errno();
			}

			$query = mysqli_query($conn, "select * from barang");
		?>



		<!-- Body -->
		<center>
            <table width="1260" height="500" border="1" bgcolor="skyblue">
                <tr>
                    <td>
                        <table width="800" height="47" border="1" align="center" bgcolor="red">
                            <center>
                                <tr>
                                    <td width="4000"><center>INPUT DATA BARANG</center></td>
                                </tr>
                            <form method="post" action="insert.php">
            </table>

							<!-- Form -->

							<table width="800" border="1" align="center" bgcolor="white">
								<tr>
								<td>Kode Barang</td>
								<td>Nama Barang</td>
								<td>Satuan</td>
								<td>Warna</td>
								<td>Jumlah</td>
								<td>Hapus</td>
								<td>Edit</td>
								<td>Kembali</td>
							</tr>
						

							<?php
								while ($row = mysqli_fetch_array($query)) {
									echo "<tr>";
									echo "<td>".$row["kdbarang"]."</td>";
									echo "<td>".$row["nmbarang"]."</td>";
									echo "<td>".$row["satuan"]."</td>";
									echo "<td>".$row["warna"]."</td>";
									echo "<td>".$row["jumlah"]."</td>";
									echo "<td><a href=Delete.php?kdbarang=".$row["kdbarang"].">Delete</a></td>";
									echo "<td><a href=EditBarang.php?kdbarang=".$row["kdbarang"].">Edit</a></td>";
									echo "<td><a href='barang.php'>Back</a></td>";
									echo "<tr>";
								}
							?>
							</table>
						</center>
					</td>
				</tr>
			</table>
		</center>

		<!-- FOOTER -->
		<br>
        <center>
            <div class="Frame_Footer"></div>
            <div class="Frame_Inside_Footer" style="background-color: blue; color: white">
                <span class="style1"  style="color: azure">Copyright by Adam Kurniawan</span>
                <br class="style1" />
                <span class="style1">&copy; 2023 All Right Reserved</span>
            </div>
        </center>
	</body>
</html>
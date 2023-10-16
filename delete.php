<html>
    <body>
        <?php
            $conn = mysqli_connect("localhost", "root","","persediaandb");
            if (mysqli_connect_errno()) 
            {
                echo "Koneksi Gagal".mysqli_connect_error();
            }
                $kdbarang = $_GET["kdbarang"];
                $query = mysqli_query($conn, "DELETE FROM barang WHERE kdbarang = '$kdbarang'") or die (mysqli_connect_error());
        ?>

        Data Sudah Dihapus
        <a href="daftarbarang.php">Lihat Data</a>
    </body>
</html>
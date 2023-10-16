<html>
    <body>
        <?php
            $kdbarang = $_POST['kdbarang'];
            $nmbarang = $_POST['nmbarang'];
            $satuan = $_POST['satuan'];
            $warna = $_POST['warna'];
            $jumlah = $_POST['jumlah'];
            $conn = mysqli_connect("localhost", "root","","persediaandb");
            if (mysqli_connect_errno()) 
            {
                echo "Koneksi Gagal".mysqli_connect_error();
            }
            $query = mysqli_query($conn, "UPDATE barang SET nmbarang = '$_POST[nmbarang]', satuan = '$_POST[satuan]', warna = '$_POST[warna]', jumlah = '$_POST[jumlah]' WHERE kdbarang = '$_POST[kdbarang]'");
        ?>
            Data Sudah Diupdate
            <a href="daftarbarang.php">Lihat Data</a>
    </body>
</html>
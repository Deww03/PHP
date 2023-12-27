<html>
    <body>
        <?php
            $conn = mysqli_connect("localhost", "root","","persediaandb");
            if (mysqli_connect_errno()) 
            {
                echo "Koneksi Gagal".mysqli_connect_error();
            }
                $username = $_GET["username"];
                $query = mysqli_query($conn, "DELETE FROM user WHERE username = '$username'") or die (mysqli_connect_error());
        ?>

        Data Sudah Dihapus
        <a href="daftaruser.php">Lihat Data</a>
    </body>
</html>
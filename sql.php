<?php
$conn = mysqli_connect("localhost", "root","","persediaandb");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal".mysqli_connect_error();
}
?>

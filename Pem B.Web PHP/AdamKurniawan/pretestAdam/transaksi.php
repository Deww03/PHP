<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>
        Data Transaksi
    </title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "pretestdb");
    if (mysqli_connect_errno()) {
        echo "koneksi Gagal" . mysqli_connect_error();
    }
    $querymotor = mysqli_query($conn, "select * from motor");
    ?>
    <CENTER>
        <table width="100%" height="100%" border="1" bgcolor="skyblue">
            <tr>
                <td>
                    <table width="800" height="87" border="1" align="center" bgcolor="red">
                        <center>
                            <tr>
                                <td width="400">
                                    <center>PT SISFO 5A<br>JL.Raya Serang KM. 10 Bitung-Tangerang<h2>INPUT TRANSAKSI
                                            PEMBELIAN</h2>
                                    </center>
                                </td>
                            </tr>
                            <form method="post" action="insert.php">
                    </table>

                    <table width="800" border="1" align="center" bgcolor="white">

                        <tr>
                            <td>
                                <font size="4">Kode Pembelian</font>
                            </td>
                            <td>
                                <input name="txtkdpembelian" type="text" id="txtkdpembelian" size="5"
                                    style="height:25;" />
                            </td>

                            <td>
                                <font size="4">Tanggal</font>
                            </td>
                            <td>
                                <input name="txttgl" type="date" id="txttgl" size="25" style="height:25;" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <font size="4">Nama Motor</font>
                            </td>
                            <td>
                                <select name="cbnmmotor" id="cbnmmotor" style="height:25;">
                                    <?php
                                    while ($row = mysqli_fetch_array($querymotor)) {
                                        echo "<option value=" . $row["nmmotor"] . ">" . $row["nmmotor"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>

                            <td>
                                <font size="4">Harga</font>
                            </td>
                            <td>
                                <input name="txtharga" type="text" id="txtharga" size="25"
                                    style="height:25;" />
                            </td>
                </td>
            </tr>

            <tr>
                <td>
                    <font size="4">Type</font>
                </td>
                <td>
                    <input name="txttype" type="text" id="txttype" size="25" style="height:25;" />
                </td>

                <td>
                    <font size="4">Cash/Kredit</font>
                </td>
                <td>
                    <input name="txtck" type="text" id="txtck" size="25" style="height:25;" />
                </td>
            </tr>

            <tr>
                <td height="37">
                    <font size="4">Warna</font>
                </td>
                <td width="306">
                    <select name="cbwarna" id="cbwarna" style="height:25;">
                        <option value="Hitam">Hitam</option>
                        <option value="Biru">Biru</option>
                        <option value="Putih">Putih</option>
                        <option value="None">Merah</option>
                    </select>
                </td>
            </tr>

            <tr>
                <center>
                    <td colspan="5">
                        <form id="form5" name="form5" method="post" action="">
                            <center>
                                <input name="BtnSave" type="submit" id="BtnSave" value="Save"
                                    style="height:25; background-color: red" />
                                <input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel"
                                    style="height:25; background-color: red" />
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
                <span class="style1"><span class="style1">&copy; 2023 All Right Reserved</span></span><span
                    class="style1"></span>
            </div>
    </center>

    </form>
</body>

</html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>
        Data Barang
    </title>
</head>
<body>
    <center>
        <table width="1260" height="500" border="1" bgcolor="skyblue">
            <tr>
                <td>
                    <table width="400" height="47" border="1" align="center" bgcolor="red">
                        <center>
                            <tr>
                                <td width="4000"><center>INPUT DATA BARANG</center></td>
                            </tr>
                        <form method="post" action="insert.php">
</table>
<table width="400" border="1" align="center" bgcolor="white">
    <tr>
        <td width="175">
            Kode Barang
        </td>
        <td>
            <input name="txtkdbarang" type="text" id="txtkdbarang" size="5" />
        </td>
    </tr>

    <tr>
        <td>
            Nama Barang
        </td>
        <td>
            <input name="txtnmbarang" type="text" id="txtnmbarang" size="25" />
        </td>
    </tr>

    <tr>
        <td>
            Satuan
        </td>
        <td width="306">
            <select name="cbsatuan" id="txtsatuan">
                <option value="Pcs">Pcs</option>
                <option value="Set">Set</option>
                <option value="Box">Box</option>
                <option value="Kg">Kg</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>
            Warna
        </td>
        <td width="306">
            <select name="cbwarna" id="txtwarna">
                <option value="Hitam">Hitam</option>
                <option value="Biru">Biru</option>
                <option value="Putih">Putih</option>
                <option value="None">None</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>
            Jumlah
        </td>
        <td>
            <input name="txtjumlah" type="text" id="txtjumlah" size="25" />
        </td>
    </tr>

    <tr>
        <center>
            <td colspan="2">
                <form id="form5" name="form5" method="post" action="">
                    <input name="BtnSave" type="submit" id="BtnSave" value="Save" />
                    <input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel" />
                </form>
            </td>
        </center>
    </tr>
</table>
</center>
<br>
<center>
    <div class="Frame_Footer"></div>
    <div class="Frame_Inside_Footer" style="background-color: blue; color: white">
        <span class="style1"  style="color: azure">Copyright by Adam Kurniawan</span>
        <br class="style1" />
        <span class="style1">&copy; 2023 All Right Reserved</span>
    </div>
</center>
</form>
</body>
</html>


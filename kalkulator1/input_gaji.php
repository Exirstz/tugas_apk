<?php 
    include 'bahan.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Data Penggajian</title>
</head>
<body>
    <form action="slip_gaji.php" method="POST">
        <h2>*** Input Data Penggajian ***</h2>
        <table>
            <tr> 
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>NIP</td>
                <td>:</td>
                <td><input type="number" name="nip"></td>
            </tr>
            <tr> 
                <td>Jabatan</td>
                <td>:</td>
                <td>
                    <select name="jabatan">
                        <option value="Manager">Manager</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <br>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <input type="radio" name="status" value="Belum Menikah">Belum Menikah
                    <input type="radio" name="status" value="Menikah">Menikah
                </td>
            </tr>
        </table>
        <input type="submit" value="Proses">
        <input type="reset" value="Batal">
    </form>
</body>
</html>
<?php
include 'bahan.php';
include 'koneksi2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCRUD</title>
</head>
<body>
    <div class="container m-5">
        <h2>Biodata Diri</h2>
         <table class="center">
            <tr>
                <h1 style="text-align:center">Buku Tamu</h1> <br>
                <h3 align="center">Tambah Daftar Tamu</h3>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><input type="pesan" name="pesan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="kirim"><a href="index.php"> Lihat Daftar Tamu</a></td>
            </tr>
         </table>
    </div>
</body>
</html>
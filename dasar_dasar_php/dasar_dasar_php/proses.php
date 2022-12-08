<?php 
error_reporting(0); ?>

<html>
    <head>
        <title>Biodata</title>
    </head>
    <div class=”content”>
        <header>
            <center><h1 class=”judul”>Biodata Anda</h1></center>
        </header>
        </html>
<?php



$nama = $_POST['nama'];
echo "Nama Saya Adalah <b>$nama</b> <br>";
$nim = $_POST['nim'];
echo "Nim Saya Adalah <b>$nim</b> <br>";
$ttl = $_POST['ttl'];
echo "Tanggal Lahir Saya Adalah <b>$ttl</b> <br>";
$alamat = $_POST['alamat'];
echo "Alamat Saya Adalah <b>$alamat</b> <br>";
$pendidikan = $_POST['pendidikan'];
echo "Pendidikan Saya Adalah <b>$pendidikan</b> <br>";
$telepon = $_POST['telepon'];
echo "Nomer Telepon Saya Adalah <b>$telepon</b> <br>";
$email = $_POST['email'];
echo "Pendidikan Saya Adalah <b>$email</b> <br>";
?> 
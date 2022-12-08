<?php 
error_reporting(0); 
include ('bootstrap.php'); ?>

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
echo "Hai, perkenalkan nama saya <b>$nama</b> ";
$umur = $_POST['umur'];
echo "dan saya berumur <b>$umur</b> ";
$ttl = $_POST['ttl'];
echo "Saya lahir di <b>$ttl</b> ";
$alamat = $_POST['alamat'];
echo "Saat ini saya tinggal di <b>$alamat</b> ";
echo "Saya merupakan anak ketiga dari tiga
bersaudara. ";
$hobi = $_POST['hobi'];
echo "Saya memiliki hobby <b>$hobi</b> ";
$pendidikan = $_POST['pendidikan'];
echo "Saat ini saya berkuiah di <b>$pendidikan</b> ";
$jurusan = $_POST['jurusan'];
echo "dan mengambil jurusan <b>$jurusan</b>";
$angkatan = $_POST['angkatan'];
echo "Angkatan <b>$angkatan</b> ";
?> 
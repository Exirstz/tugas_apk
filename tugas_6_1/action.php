<?php
error_reporting(0);
include ("bootstrap.php");
// menangkap data nama lengkap dengan method nama
$namalengkap = $_POST['namalengkap'];
// menangkap data umur dengan method nama
$umur = $_POST['umur'];
// menangkap data tempat tanggal lahir dengan method nama
$tempattanggallahir = $_POST['tempattanggallahir'];
// menangkap data domisili dengan method nama
$domisili = $_POST['domisili'];
// menangkap data hobby dengan method nama
$hobby = $_POST['hobby'];
// menangkap data nama universitas dengan method nama
$namauniversitas = $_POST['namauniversitas'];
// menangkap data jurusan dengan method nama
$jurusan = $_POST['jurusan'];
// menangkap data angkatan dengan method nama
$angkatan = $_POST['angkatan'];

$data = array ("Hai, perkenalkan nama saya  <b>$namalengkap</b>"," dan saya berumur <b>$umur.</b>", " Saya lahir di <b>$tempattanggallahir.</b>", "<br>",  " Saat ini saya tinggal di <b>$domisili.</b>", " Saya merupakan anak pertama dari tiga bersaudara. ", "Saya memiliki hobby <b>$hobby.</b> ", "<br>", " Saat ini saya berkuliah di <b>$namauniversitas</b> ", " dan mengambil jurusan <b>$jurusan</b> ", " Angkatan <b>$angkatan.</b>" );
for($x=0;$x<count($data);$x++){
    echo $data[$x];
}
?>
<?php 
error_reporting(0);
include 'koneksi2.php';
include 'bahan.php';

$nams = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$conn = $koneksi;
$sql = "INSERT INTO buku_tamu (nama,email,pesan)
VALUES ('$nama','$email','$pesan')";

if (mysqli_query($conn,$sql)) {
    header ("Locaion : lihat_tamu.php");
} else {
    echo " EROR : " . $sql . "<br>" . mysqli_error($conn);
}
?>

<?php
include 'bahan.php';
include 'koneksi2.php';
$id = $_POST['id'];
$nams = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "UPDATE 'buku_tamu' SET 'nama' = '$nama', 'email', '$email', 'pesan' = '$pesan' WHERE 'buku_tamu'.'id_tamu' =id; ";
if (mysqli_query($conn, $sql)) {
    header("Location : lihaat_tamu.php");
} else {
    echo "Eror : " . $sql . "<br>" . mysqli_error($conn);
}
 ?>
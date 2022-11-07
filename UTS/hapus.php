<?php
include 'koneksi2.php';
include 'bahan.php';
$id = $_GET['id'];

$sql = "DELETE FROM 'buku_tamu' WHERE 'buku_tamu' . 'id_tamu' = $id";
if (mysqli_query($conn, $sql)) {
    header("location : lihat_tamu.php");
} else {
    echo "EROR : " . $sql . "<br>" . mysqli_error($conn);
}
?>
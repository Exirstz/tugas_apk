<?php
include 'koneksi2.php';
include 'bahan.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM 'buku_tamu' WHERE 'id_tamu' = '$id'");
$data = mysqli_fetch_array($query);
?>
<html>
    <body>
        <h1 style="text-align:center ;">Edit Data Tamu</h1> <br>
        <form action="edit_fcn.php" method="post"></form>
        <input type="hidden" name="id" value="<?php echo $data['id_tamu']?>">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']?>" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $data['email']?>" ></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><input type="text" name="pesan" value="<?php echo $data['pesan']?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah">
            <a href="lihat_tamu.php"><button>Batal</button></a></td>
            </tr>
        </table>
    </body>
</html>
<html>
<?php 
error_reporting(0);
include 'koneksi2.php';
include 'bahan.php';

$nams = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$conn = $koneksi;
$query = mysqli_query($conn, "SELECT * FROM 'buku_tamu' ORDER BY 'id_tamu'");
?>
<body>
    <h1 align="center" style="color:blue"> Daftar Tamu</h1>
    <table class="table table-hover" border="2px">
        <tr bgcolor="#FCDDB0" style="text-align:center;">
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Pesan</td>
            <td>Action</td>
        </tr>
        <?php 
        $nomor = 1;
        while ($data =mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $nomor++;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['pesan'];?></td>
            <td>
                <a href="edit.php?id=
                <?php echo $data['id_tamu'];?>"><button><strong>Edit</strong></button></a>
                <a href="hapus.php?id=
                <?php echo $data['id_tamu'];?>"onclick="return confirm ('apakah anda benar ingin menghapus <?php echo $data['nama'];?> dari daftar ?')"><button><strong>Hapus</strong></button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
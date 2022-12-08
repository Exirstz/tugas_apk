<?php 
    include 'bahan.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <title>Cetak Sip Gaji</title>
</head>
<body>

    <?php

    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $pph = 1050000;

    if ($jabatan == "Manager") {
        $gaji_pokok = 50000000;
    } else if ($jabatan == "Sekretaris") {
        $gaji_pokok = 2000000;
    } else {
        $gaji_pokok = 1500000;
    };

    $gaji_bersih = $gaji_pokok - $pph;

    ?>

    <h2 >*** Slip Gaji ***</h2>
    <hr>
    <table border="1">
            <tr> 
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><?php echo "$nama"; ?></td>
            </tr>
            <tr> 
                <td>NIP</td>
                <td>:</td>
                <td><?php echo "$nip"; ?></td>
            </tr>
            <tr> 
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo "$jabatan"; ?></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td>:</td>
                <td><?php echo "$status"; ?></td>
            </tr>
            <tr> 
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><?php echo "Rp. $gaji_pokok"; ?></td>
            </tr>
            <tr> 
                <td>Pph</td>
                <td>:</td>
                <td><?php echo "Rp. $pph"; ?></td>
            </tr>
            <tr> 
                <td>Gaji Bersih</td>
                <td>:</td>
                <td><?php echo "Rp. $gaji_bersih"; ?></td>
            </tr>
    </table>
    <br>
    <a href="input_gaji.php">
    <button type="button" class="btn btn-primary">Back</button>
    </a>
</body>
</html>



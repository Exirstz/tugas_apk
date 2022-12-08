<?php 
    include 'bahan.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <form action="kalkulator_out.php" method="POST">
    <h2>*** Kalkulator Sederhana ***</h2>
    <style>
        h2 {
            text-align: center;
        }
    </style>
    <table class="table table-striped">
        <tr>
            <td>Nilai A</td>
            <td>:</td>
            <td><input type="number" name="a"></td>
        </tr>
        <tr>
            <td>Nilai B</td>
            <td>:</td>
            <td><input type="number" name="b"></td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>:</td>
            <td>
                <select name="operasi">
                    <option value="1"> Tambah</option>
                    <option value="2"> Kurang</option>
                    <option value="3"> Bagi</option>
                    <option value="4"> Kali</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Proses">
    <input type="reset" value="Batal">
    </form>
</body>
</html>
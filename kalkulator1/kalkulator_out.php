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
    <title>Kalkulator Output</title>
</head>
<body>
    <?php 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operasi = $_POST['operasi'];
    switch($operasi) {
        case 1;
        $c=$a+$b;
        $ope="+"; break; case 2;
        $c=$a-$b;
        $ope="-"; break; case 3;
        $c=$a*$b;
        $ope="*"; break; case 4;
        $c=$a/$b;
        $ope="/"; break;
    }
    echo "Hasil dari $a $ope $b adalah $c <br>"
    ?>
</body>
</html>
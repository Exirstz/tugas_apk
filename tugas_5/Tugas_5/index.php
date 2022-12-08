<!DOCTYPE html>
<html>
<body>
<center>
<?php
error_reporting(0);
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat","Sabtu","Minggu");
$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24","25", "26", "27", "28", "29", "30", "31"); 
$bulan = array("Januari" , "Februari", "Maret", "April", "Mei" , "Juni", "Juli","Agustus", "September" , "Oktober", "November", "Desember");
$tahun = array("2021", "2022", "2023", "2024", "2025", "2026");
echo "Sekarang Hari " . $hari[1] ." - " . "Tanggal " . $tanggal[10] ." - " . "Bulan " . $bulan[10] ." - "."Tahun " . $tahun[1]. "<br>";
echo date('d/m/y')
?>
</center>
</body>
</html>
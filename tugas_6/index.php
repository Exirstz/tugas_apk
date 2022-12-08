<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Biodata Diri</title>
<?php 
include ('bootstrap.php');
$nama= array ("Teguh Saputra", "Furkhon Nurdiyanto", "Farhan Ibnu Prabowo", "Dzaguar Ismail Raya", "Syihan", "Sunanto" );
$umur= array ("17", "18", "19", "20", "21", "22" );
$ttl= array ("Bekasi,04 Desember 2003", "Karawang,04 Maret 2002", "Riau,14 Juni 2002", "Bandung, 18 November 2001", "Cirebon,17 September 2000", "Kuningan, 26 April 2002" );
$alamat= array ("Bekasi", "Karawang", "Jakarta", "Bandung", "Riau", "Samarinda" );
$hobi= array ("Sepakbola", "Bola Voli", "Badminton", "Membaca", "Menulis");
$pendidikan= array ("UNIVERSITAS SINGAPERBANGSA KARAWANG", "UNSOED", "UGM", "UI", "UNS");
$jurusan= array ("TEKNIK ELEKTRO", "TEKNIK KIMIA", "TEKNIK LINGKUNGAN", "TEKNIK SIPIL", "TEKNIK INFORMATIKA");
$angkatan= array ("2019", "2020", "2021", "2022");
asort($nama);
?>
</head>
<body>
	<center><b><h1>Masukan Biodata Diri</h1></b></center>
<form method="POST" action="proses.php">
	<div class="row">
		<div class="col-lg-2"><label for="tipe">Nama :</label></div>
		<div class="col-lg-2">
			<select id="nama" name="nama">
			<option value="">- Pilih Nama -</option>
			<?php
			foreach ($nama as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
		<div class="row">
		<div class="col-lg-2"><label for="tipe">Umur :</label></div>
		<div class="col-lg-2">
			<select id="umur" name="umur">
			<option value="">- Pilih Umur -</option>
			<?php
			foreach ($umur as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
		<div class="row">
		<div class="col-lg-2"><label for="tipe">Tempat, Tanggal Lahir:</label></div>
		<div class="col-lg-2">
			<select id="ttl" name="ttl">
			<option value="">- Pilih Tempat Tanggal Lahir -</option>
			<?php
			foreach ($ttl as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
		<div class="row">
		<div class="col-lg-2"><label for="tipe">Alamat :</label></div>
		<div class="col-lg-2">
			<select id="alamat" name="alamat">
			<option value="">- Pilih Alamat -</option>
			<?php
			foreach ($alamat as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
		<div class="row">
		<div class="col-lg-2"><label for="tipe">Hobi :</label></div>
		<div class="col-lg-2">
			<select id="hobi" name="hobi">
			<option value="">- Pilih Umur -</option>
			<?php
			foreach ($hobi as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
		<div class="row">
		<div class="col-lg-2"><label for="tipe">Pendidikan :</label></div>
		<div class="col-lg-2">
			<select id="pendidikan" name="pendidikan">
			<option value="">- Pilih Pendidikan -</option>
			<?php
			foreach ($pendidikan as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
			<div class="row">
		<div class="col-lg-2"><label for="tipe">Jurusan Anda :</label></div>
		<div class="col-lg-2">
			<select id="jurusan" name="jurusan">
			<option value="">- Pilih Jurusan -</option>
			<?php
			foreach ($jurusan as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
		<div class="row">
		<div class="col-lg-2"><label for="tipe">Angkatan :</label></div>
		<div class="col-lg-2">
			<select id="angkatan" name="angkatan">
			<option value="">- Pilih Angkatan -</option>
			<?php
			foreach ($angkatan as $ap) {
				echo "<option value='".$ap."'>".$ap."</option>";
			}
			?>
			</select>
			</div>
			<div class="row">
			<div class="d-grid gap-2 col-6 mx-auto">
			<input class="btn btn-primary" type="submit" value="Submit">
			</div>
			</div>
</form>
</table>
</body>
</html>
<?php include ("bootstrap.php"); ?>
<!-- penanganan form dengan method POST -->
<html>
<title>TUGAS 6</title>
<h1>Masukan Data Diri</h1><br>
<form method="post" action="action.php">
	<label>Nama Lengkap</label><br/>
	<input type="text" name="namalengkap" placeholder="Masukan Nama Anda"><br/>
	<label>Umur</label><br/>
	<input type="text" name="umur" placeholder="Masukan Umur Anda"><br/>
    <label>Tempat, Tanggal Lahir</label><br/>
	<input type="text" name="tempattanggallahir" placeholder="Masukan TTL Anda"><br/>	
    <label>Domisili</label><br/>
	<input type="text" name="domisili" placeholder="Masukan Domisili Anda"><br/>
    <label>Hobby</label><br/>
	<input type="text" name="hobby" placeholder="Masukan Hobby Anda"><br/>
    <label>Universitas</label><br/>
	<input type="text" name="namauniversitas" placeholder="Masukan Nama Universitas Anda"><br/>
    <label>Jurusan</label><br/>
	<input type="text" name="jurusan" placeholder="Masukan Jurusan Anda"><br/>
    <label>Angkatan</label><br/>
	<input type="text" name="angkatan" placeholder="Masukan Angkatan Anda"><br/>
    <br>
	<input type="submit" value="Proses">
</form>
<center>
<p>&copy; 2022 Furkhon Nurdiyanto | 2110631160045 | TE 3C</p>
</center>
</html>
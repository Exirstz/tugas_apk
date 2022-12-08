<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Biodata Diri</title>
</head>
<body>
	<center><b><h1>Masukan Biodata Diri</h1></b></center>
<table>
<form method="POST" action="proses.php">
	<tbody>
		<tr>
    	<th><label>Nama Anda</label> </th>
		<th>:</th>
        <th><input type="text" name="nama" placeholder="Masukan Nama Anda"></th>
		</tr>
		<tr>
    	<th><label>Nim Anda</label> </th>
		<th>:</th>
        <th><input type="number" name="nim" placeholder="Masukan Nim Anda"></th>
		</tr>
		<tr>
    	<th><label>Tanggal Lahir Anda </label> </th>
		<th>:</th>
        <th><input type="date" name="ttl" placeholder="Masukan Tanggal Lahir Anda"></th>
		</tr>
		<tr>
    	<th><label>Alamat Anda</label> </th>
		<th>:</th>
        <th><textarea name="alamat" placeholder="Masukan Alamat Anda"></textarea></th>
		</tr>
		<tr>
    	<th><label>Pendidikan</label> </th>
		<th>:</th>
        <th><input type="text" name="pendidikan" placeholder="Tambahkan Pendidikan"></th>
		</tr>
		<tr>
    	<th><label>Nomer Telepon</label> </th>
		<th>:</th>
        <th><input type="number" name="telepon" placeholder="Tambahkan no telepon"></th>
		</tr>
		<tr>
    	<th><label>Email</label> </th>
		<th>:</th>
        <th><input type="email" name="email" placeholder="Tambahkan Email Anda"></th>
		</tr>
		<tr>
    	<th><button type="submit" class="btn btn-warning">Kirim</button></th>
		</tr>
	</tbody>
</form>
</table>
</body>
</html>
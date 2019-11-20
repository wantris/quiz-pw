<?php
include "koneksi.php"

if(isset($_POST['submit'])){
	$nama = 'nama';
	$nim = 'nim';
	$kelas = 'kelas';
	$username = 'username';
	$pass = password_hash($_POST["pass"], FILTER_SANITIZE_STRING);
	$pass2 = password_hash($_POST["pass2"], FILTER_SANITIZE_STRING);

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td><label>Nama : </label></td>
				<td> <input type="text" name="nama" placeholder="Nama..."></td>

			</tr>
			<tr>
				<td><label>Nim : </label></td>
				<td><input type="text" name="nim" placeholder="Nim..."></td>
			</tr>
			<tr>
				<td><label>Kelas : </label></td>
				<td><input type="text" name="kelas" placeholder="Kelas..."></td>
			</tr>
			<tr>
				<td><label>Username : </label></td>
				<td><input type="text" name="username" placeholder="Kelas..."></td>
			</tr>
			<tr>
				<td><label>Password : </label></td>
				<td><input type="password" name="pass" placeholder="Password..."></td>
			</tr>
			<tr>
				<td><label>Konfirmasi Password : </label></td>
				<td><input type="text" name="pass2" placeholder="Konfirmasi password..."></td>
			</tr>

			<td><input type="submit" name="submit" value="submit"></td>
		</table>
	</form>
</body>
</html>
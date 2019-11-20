<?php
include "koneksi.php";
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = mysqli_query($koneksi, "SELECT * FROM login where username = '$user' and password= '$pass'");
$result = mysqli_fetch_array($sql);
if(!$result){
	echo "<script>alert('Username atau Password salah');window.location='login.php'</script>";
}else{
	echo "<script>window.location='mahasiswa.php'</script>";
}

?>
<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];

$input = "INSERT INTO mahasiswa values ('$nama','$nim')";
$query = mysqli_query($koneksi, $input) or die("ERROR");
if(!$query){
	echo "<script>alert('Tambah Data Gagal');window.location='tambah.php'</script>";
}else{
	echo "<script>alert('Tambah Data Berhasil');window.location='mahasiswa.php'</script>";
} 
?>
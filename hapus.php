<?php
include "koneksi.php";

$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");
if(!$query){
	echo "<script>alert('Maaf data tidak terhapus');window.location='mahasiswa.php'</script>";
}else{
	echo "<script>alert('Data Terhapus');window.location='mahasiswa.php'</script>";
}
?>
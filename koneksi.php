<?php
$user = "root";
$server = "localhost";
$pass = "";
$dbname = "quiz-pw";

$koneksi = new mysqli($server, $user, $pass, $dbname);

if($koneksi->connect_error){
	die("koneksi Gagal : ". $koneksi->connect_error);
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Noo komeksi gagal :< :".$conn->connect_error);
} 
echo "Yatta Berhasil";
?>
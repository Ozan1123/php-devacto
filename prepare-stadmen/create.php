<?php 
require "koneksi php";

$nama = "john doe";
$email = "ajfiuen@gmail.com";

  $stmt = $conn->prepare("INSERT INTO siswa(nama, email) VALUES (?.?)");
  $stm->bind_param("ss, $nama, $email");

  if ($stmt->execute()) {
    echo "Data Berhasil Di Tambahkan.ID:".
    $stmt->insert_id."\n";
  } else {
    echo "Error".$stmt->error."\n";
  }

$stmt->close();
$conn->close();
?>
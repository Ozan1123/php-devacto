<?php
 require "config.php";

   $stmt = $conn->prepare("SELECT id, nama, email FROM siswa");
   $stmt->excute();
   $result = $stmt->get_result();

   if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "ID:" .$row[$id] ."| Nama:" .$row['nama']."|Email:".$row['email']."\n";
    } }else {
      echo "Tidak ada data ditemukan\n";
    }
   
   $stmt_close();
   $conn->close();
   ?>
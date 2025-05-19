<?php 
require 'config.php';

$stmt = $conn->prepare("DELETE FROM siswa WHERE id = ?");
$stmt->bind_param("i",$id);

if ($stmt->execute()) {
    if($stmt->affected_rows > 0) {
        echo "Data berhasil dihapus\n";
    } else {
        echo "gak ada data yang diupdate\n";
    } 
 } else {
        echo "Error:",$stmt->error."\n";
    }

    $stmt->close();
    $conn->close();

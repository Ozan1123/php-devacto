<?php
require 'config.php';

$id = 1;
$newEmail = "john.new@example.com";

$stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
$stmt->bind_param("si", $newEmail, $id);

if ($stmt->execute()){
    if($stmt->affected_rows > 0){
        echo "data berhasil diupdate\n";
    } else {
        echo "tidak ada data yang diupdate";
    }
}else {
    echo "Error: " . $stmt->error . "\n";
}

$stmt->close();
$conn->close();
?>
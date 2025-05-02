<?php 
include "koneksi.php";

// Data yang akan diupdate
$id = 1;
$newEmail = "Adityamewing@gmail.com";
// Query UPDATE
$sql = "UPDATE users SET email='$newEmail' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
echo "Data berhasil diupdate";
} else {
echo "Error updating record: " . mysqli_error($conn);
}
?>
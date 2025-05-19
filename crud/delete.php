<?php
include "koneksi.php";

// ID data yang akan dihapus
$id = 1;
// Query DELETE
$sql = "DELETE FROM users WHERE id=$id";
if (mysqli_query($conn, $sql)) {
echo "Data berhasil dihapus";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
?>
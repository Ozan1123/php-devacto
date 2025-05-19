<?php
include "koneksi.php";
// Query SELECT
$sql = "SELECT id, nama, email FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Output data setiap baris
while($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email:
" . $row["email"]. "<br>";
}
} else {
echo "0 hasil";
}
?>
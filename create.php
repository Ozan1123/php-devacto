<?php
include "koneksi.php";

$nama = "Ahmad arridho";
$email = "arridhoweabo@gmail.com";

$sql = "INSERT INTO users (nama,email) VALUES ('$nama', '$email')";

if(mysqli_query($conn,$sql)) {
    echo "Berhasil nambah datanya bang";
} else {
    echo "Error:".$sql.mysqli_error($conn);
}
?>
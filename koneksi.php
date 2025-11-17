<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "project");

// if ($koneksi) {
//     echo "✅ Connected successfully!";
// } else {
//     echo "❌ Connection failed: " . mysqli_connect_error();
// }
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
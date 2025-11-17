<?php
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$title = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from book where title='$title'");

// mengalihkan halaman kembali ke index.php
header("location:show.php");

?>
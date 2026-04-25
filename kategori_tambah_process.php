<?php
include 'config.php';

$nama = $_POST['nama_kategori'];

mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES('$nama')");

header("Location: kategori.php");
?>
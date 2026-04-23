<?php
include 'config.php';

$nama = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO barang VALUES(NULL,'$nama','$stok','$harga',NOW(),NOW())");

header("Location: dashboard.php");
?>
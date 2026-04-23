<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id=$id");

header("Location: dashboard.php");
?>
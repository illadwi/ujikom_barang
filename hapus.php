<?php
include 'config.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM barang WHERE id=$id");

header("Location: dashboard.php");
?>
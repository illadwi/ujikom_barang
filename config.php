<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "ujikom");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
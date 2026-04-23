<?php
// Ubah sesuai password yang kamu inginkan
$password_asli = "admin123";

// Enkripsi password
$hash = password_hash($password_asli, PASSWORD_DEFAULT);

// Tampilkan hasil hash
echo "Password Asli: " . $password_asli . "<br>";
echo "Password Hash: " . $hash . "<br>";
?>
<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal. <a href='index.php'>Coba lagi</a>";
}
?>
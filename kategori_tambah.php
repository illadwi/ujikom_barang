<?php
include 'config.php';

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border-radius: 6px;
            text-decoration: none;
        }

        .btn-back {
            background: #7f8c8d;
        }
    </style>

</head>
<body>

<div class="container">
    <h2>Tambah Kategori</h2>

    <form action="kategori_tambah_process.php" method="POST">
        <label>Nama Kategori:</label>
        <input type="text" name="nama_kategori" required>

        <button type="submit" class="btn">Simpan</button>
        <a href="kategori.php" class="btn btn-back">Kembali</a>
    </form>
</div>

</body>
</html>
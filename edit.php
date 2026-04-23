<?php
include 'config.php';

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id=$id");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>

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
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-back {
            background: #7f8c8d;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>

</head>
<body>

<div class="container">
    <h2>Edit Barang</h2>

    <form action="edit_process.php" method="POST">
        <input type="hidden" name="id" value="<?= $d['id'] ?>">

        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= $d['nama_barang'] ?>" required>

        <label>Stok:</label>
        <input type="number" name="stok" value="<?= $d['stok'] ?>" required>

        <label>Harga:</label>
        <input type="number" name="harga" value="<?= $d['harga'] ?>" required>

        <button type="submit" class="btn">Update</button>
        <a href="dashboard.php" class="btn-back">Kembali</a>
    </form>
</div>

</body>
</html>
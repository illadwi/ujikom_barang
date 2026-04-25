<?php
include 'config.php';

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0;
        }

        .btn {
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .btn-tambah {
            background: #2ecc71;
        }

        .btn-logout {
            background: #e74c3c;
        }

        .btn-edit {
            background: #3498db;
            padding: 5px 10px;
            font-size: 12px;
        }

        .btn-hapus {
            background: #e74c3c;
            padding: 5px 10px;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        th {
            background: #3498db;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }

        .aksi a {
            margin-right: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h2>Data Kategori</h2>

        <div>
            <a href="kategori_tambah.php" class="btn btn-tambah">+ Tambah</a>
            <a href="dashboard.php" class="btn btn-logout">Kembali</a>
        </div>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $d['id'] ?></td>
            <td><?= $d['nama_kategori'] ?></td>
            <td class="aksi">
                <a href="kategori_edit.php?id=<?= $d['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="kategori_hapus.php?id=<?= $d['id'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>
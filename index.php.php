<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM barang");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Data Barang</h1>
    <a href="tambah.php">Tambah Barang</a>
    <table border="1">
        <tr>
            <th>No</th><th>Kode</th><th>Nama Barang</th><th>Merk</th><th>Jumlah</th><th>Satuan</th><th>Aksi</th>
        </tr>
        <?php $no=1; while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['merk'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['satuan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

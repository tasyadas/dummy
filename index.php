<?php include 'inc/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="tambah.php" class="button">+ Tambah Produk</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Supplier</th>
            <th>Aksi</th>
        </tr>
        <?php
            $stmt = $conn->query("CALL GetAllProduk()");
            while ($row = $stmt->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['produk'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['suppliers'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="button">Edit</a>
                <!-- Tambahkan delete jika diinginkan -->
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>

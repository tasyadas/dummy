<?php
require 'db.php';

function tampilkanProduk(): void {
    $conn = connectDB();

    $result = $conn->query("CALL tampilkan_produk()");

    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} | Nama: {$row['nama']} | Harga: Rp{$row['harga']} | Stok: {$row['stok']} \n";
    }

    $conn->close();
}

// Contoh panggilan fungsi:
tampilkanProduk();
?>

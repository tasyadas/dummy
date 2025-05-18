<?php
require 'db.php';

function cariProduk(string $keyword): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL cari_produk_nama(?)");
    $stmt->bind_param("s", $keyword);
    $stmt->execute();

    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} | Nama: {$row['nama']} | Harga: Rp{$row['harga']} | Stok: {$row['stok']} \n";
    }

    $stmt->close();
    $conn->close();
}

// Contoh panggilan fungsi:
cariProduk("Mouse");
?>

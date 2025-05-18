<?php
require 'db.php';

function tambahProduk(string $nama, float $harga, int $stok): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL tambah_produk(?, ?, ?)");
    $stmt->bind_param("sdi", $nama, $harga, $stok);
    $stmt->execute();

    echo "Produk berhasil ditambahkan! \n";

    $stmt->close();
    $conn->close();
}

// Contoh panggilan fungsi:
tambahProduk("Printer", 900000, 7);
?>

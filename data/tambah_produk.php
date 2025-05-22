<?php
require 'db.php';

function tambahProduk(string $nama, float $harga, int $stok): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL tambah_produk(?, ?, ?)");
    $stmt->bind_param("sdi", $nama, $harga, $stok);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $harga = isset($_POST['harga']) ? floatval($_POST['harga']) : 0;
    $stok = isset($_POST['stok']) ? intval($_POST['stok']) : 0;

    if ($nama !== '' && $harga > 0 && $stok >= 0) {
        tambahProduk($nama, $harga, $stok);
        header('Location: ../index.php?pesan=berhasil');
        exit;
    } else {
        echo "Input tidak valid.";
    }
}
?>

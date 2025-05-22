<?php
require 'db.php';

function updateProduk(int $id, string $nama, float $harga, int $stok): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL update_produk(?, ?, ?, ?)");
    $stmt->bind_param("isdi", $id, $nama, $harga, $stok);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $nama = $_POST['nama'] ?? '';
    $harga = isset($_POST['harga']) ? floatval($_POST['harga']) : 0;
    $stok = isset($_POST['stok']) ? intval($_POST['stok']) : 0;

    echo "<pre>";
    echo "Input dari form:\n";
    echo "ID: $id\n";
    echo "Nama: $nama\n";
    echo "Harga: $harga\n";
    echo "Stok: $stok\n";
    echo "</pre>";

    if ($nama !== '' && $harga > 0 && $stok >= 0) {
        echo "✅ Input valid, mencoba updateProduk()...\n";
        updateProduk($id, $nama, $harga, $stok);
        echo "✅ Produk berhasil diupdate!";
        exit;
    } else {
        echo "❌ Input tidak valid.\n";
        exit;
    }
}
?>

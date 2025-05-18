<?php
require 'db.php';

function updateProduk(int $id, string $nama, float $harga, int $stok): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL update_produk(?, ?, ?, ?)");
    $stmt->bind_param("isdi", $id, $nama, $harga, $stok);
    $stmt->execute();

    echo "Produk berhasil diperbarui! \n";

    $stmt->close();
    $conn->close();
}

// Contoh panggilan fungsi:
updateProduk(2, "Mouse Gaming", 250000, 40);
?>

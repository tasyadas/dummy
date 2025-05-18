<?php
require 'db.php';

function hapusProduk(int $id): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL hapus_produk(?)");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    echo "Produk berhasil dihapus! \n";

    $stmt->close();
    $conn->close();
}

// Contoh panggilan fungsi:
hapusProduk(1);
?>

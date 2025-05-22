<?php
require 'db.php';

function hapusProduk(int $id): void {
    $conn = connectDB();

    $stmt = $conn->prepare("CALL hapus_produk(?)");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

// Tangani request GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if ($id > 0) {
        hapusProduk($id);
        // Redirect balik ke dashboard
        header('Location: ../index.php?pesan=hapus_berhasil');
        exit;
    } else {
        // ID tidak valid
        header('Location: ../index.php?pesan=hapus_gagal');
        exit;
    }
}
?>
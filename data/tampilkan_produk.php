<?php
require 'db.php';

function tampilkanProduk(): array {
    $conn = connectDB();

    $result = $conn->query("CALL tampilkan_produk()");

    $produk = [];

    while ($row = $result->fetch_assoc()) {
        $produk[] = $row;
    }

    $conn->close();
    return $produk;
}
?>
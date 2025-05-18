<?php
require 'db.php';

function tampilkanProdukDenganRelasi(): void {
    $conn = connectDB();

    $result = $conn->query("CALL tampil_produk_dengan_relasi()");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: {$row['id']} | Produk: {$row['produk']} | Harga: Rp{$row['harga']} | Stok: {$row['stok']} | Kategori: {$row['kategori']} | Supplier: {$row['suppliers']}\n";
        }
    } else {
        echo "⚠️ Data tidak ditemukan.\n";
    }

    $conn->close();
}

tampilkanProdukDenganRelasi();
?>

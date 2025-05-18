<?php
function connectDB(): mysqli {
    $conn = new mysqli('mysql', 'admin', 'admin123', 'inventory_db');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Inventori</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>📦 Dashboard Inventori</h2>
    <p>Silakan pilih aksi yang ingin dilakukan:</p>

    <div class="button-group">
      <a href="tambah.php" class="button">➕ Tambah Produk</a>
    </div>

    <hr>

    <h3>Daftar Produk</h3>
    <?php
      require_once './data/tampilkan_produk.php';
      $produk = tampilkanProduk();

      // Tampilkan pesan jika ada
      if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] === 'hapus_berhasil') {
              echo "<p style='color: green;'>✅ Produk berhasil dihapus!</p>";
          } elseif ($_GET['pesan'] === 'hapus_gagal') {
              echo "<p style='color: red;'>❌ Gagal menghapus produk.</p>";
          }
      }

      if (count($produk) === 0) {
          echo "<p>Tidak ada produk ditemukan.</p>";
      } else {
          echo "<table border='1' cellpadding='8'>";
          echo "<tr><th>ID</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>";
          foreach ($produk as $p) {
              echo "<tr>";
              echo "<td>{$p['id']}</td>";
              echo "<td>{$p['nama']}</td>";
              echo "<td>Rp" . number_format($p['harga'], 0, ',', '.') . "</td>";
              echo "<td>{$p['stok']}</td>";
              echo "<td>
                      <a href='update.php?id={$p['id']}'>✏️ Edit</a> |
                      <a href='data/hapus_produk.php?id={$p['id']}'>🗑️ Hapus</a>
                    </td>";
              echo "</tr>";
          }
          echo "</table>";
      }
    ?>
  </div>
</body>
</html>

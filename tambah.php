<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Form Tambah Produk</h2>

    <form action="./data/tambah_produk.php" method="POST">
      <label for="nama">Nama Produk:</label>
      <input type="text" name="nama" required>

      <label for="harga">Harga:</label>
      <input type="number" name="harga" step="0.01" required>

      <label for="stok">Stok:</label>
      <input type="number" name="stok" required>

      <button type="submit">Tambah Produk</button>
    </form>
  </div>
</body>
</html>
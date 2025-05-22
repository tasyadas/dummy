<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Update Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Form Update Produk</h2>

    <form action="./data/update_produk.php" method="POST">
      <label for="id">ID Produk:</label>
      <input type="text" name="id_display" value="<?= $_GET['id'] ?>" readonly>
<input type="hidden" name="id" value="<?= $_GET['id'] ?>">


      <label for="nama">Nama Produk:</label>
      <input type="text" name="nama" required>

      <label for="harga">Harga:</label>
      <input type="number" name="harga" step="0.01" required>

      <label for="stok">Stok:</label>
      <input type="number" name="stok" required>

      <button type="submit">Update Produk</button>
    </form>
  </div>
</body>
</html>

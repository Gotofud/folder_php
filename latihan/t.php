<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Marketplace Makanan</title>
</head>
<body>
  <?php
  // Daftar makanan dengan harga
  $makanan = [
    "Nasi Goreng" => 10000,
    "Mie Goreng" => 15000,
    "Ayam Goreng" => 20000,
  ];
  ?>

  <!-- Form untuk memilih makanan -->
  <form method="post" action="">
    <label for="makanan">Pilih Makanan:</label>
    <select name="makanan" id="makanan">
      <?php foreach ($makanan as $nama => $harga): ?>
        <option value="<?= $nama ?>"><?= $nama ?> </option>
      <?php endforeach; ?>
    </select>
    <input type="submit" name="submit" value="Pilih">
  </form>

  <?php
  // Menampilkan hasil pilihan
  if (isset($_POST['submit'])) {
    $nama_makanan = $_POST['makanan'];
    $harga = $makanan[$nama_makanan];
    echo "<p>Makanan yang Anda pilih adalah: $nama_makanan - Rp " . number_format($harga, 0, ',', '.') . "</p>";
  }
  ?>
</body>
</html>

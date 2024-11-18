<?php

$nama = "Fazli";
$jk = "Laki-laki";
$jenis = "Makanan";
$menu = "Nasi Goreng";
$jumlah = 12;
echo "<h2>============Restoran Selalu Gyatt==============</h2>";
if ($jenis == "Makanan") {
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
    }
    elseif ($menu == "Mie Goreng") {
        $harga = 15000;
    }
    elseif ($menu == "Ayam Goreng") {
        $harga = 20000;
    } else {
      $harga = 0;
      $total = 0;
  }
} elseif ($jenis == "Minuman") {
    if ($menu == "Air Mineral") {
        $harga = 5000;
    }
    elseif ($menu == "Fresh Tea") {
        $harga = 7000;  
    }
    elseif ($menu == "Jus") {
        $harga = 12000;    
    } else {
        $harga = 0;
        $total = 0;
    }
} else {
    $harga = 0;
    $total = 0;
}

$total = $harga * $jumlah;

if ($total >= 50000) {
  $diskon = $total * 0.2;
  $totalBayar = $total - $diskon;
echo "
Nama : $nama <br>
Jenis Kelamin : $jk <br>
Jenis : $jenis <br>
Menu : $menu <br>";
echo "Harga : Rp" . number_format($harga) . "<Br>";
echo "
Jumlah : $jumlah 
<h5>=========================================</h5>";
echo "Total : Rp" . number_format($total) . "<br>",
     "Diskon 20% : Rp" . number_format($diskon),
     "<h5>=========================================</h5>" . 
     "Total Bayar : Rp" . number_format($totalBayar);
} else {
  echo "
  Nama : $nama <br>
  Jenis Kelamin : $jk <br>
  Jenis : $jenis <br>
  Menu : $menu <br>";
  echo "Harga : Rp" . number_format($harga) . "<br>";
  echo "
  Jumlah : $jumlah
    <h5>=========================================</h5>";
  echo "Total : Rp" . number_format($total);
} 
?>

<?php
if (isset($_POST['kirim'])) {
 $no = $_POST['no'];
 $nama = $_POST['nama'];
 $unit = $_POST['unit'];
 $tgl = $_POST['tgl'];
//  Gaji
 $jabatan = $_POST['jabatan'];
 $lamaKerja = $_POST['lama_kerja'];
 $status = $_POST['status'];
//  Potongan
 $bpjs = $_POST['bpjs'];
 $pinjaman = $_POST['pinjaman'];
 $tabungan = $_POST['tabungan'];
 $lainnya = $_POST['lainnya'];
 
// Gaji Jabatan
 if ($jabatan == "kepala sekolah") {
   $gaji = 10000000;
 } elseif ($jabatan == "wakasek") {
   $gaji = 7500000;
 } elseif ($jabatan == "guru") {
   $gaji = 5000000;
 } elseif ($jabatan == "ob") {
   $gaji = 2500000;
 }

//  Status Kerja
if ($lamaKerja >= 5) {
  $tunjangan = 1000000;
} else {
   $tunjangan = 0;
}
 if ($status == "tetap") {
  $bonus = 500000;
 } else {
  $bonus = 0;
 }
// Gaji Kotor
 $gaji_kotor = $gaji + $tunjangan + $bonus;
//  Potongan
 $total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
// Gaji Bersih
 $gaji_bersih = $gaji_kotor - $total_potongan;

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struk Gaji</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-custom {
      max-width: 35rem;
      margin: auto;
    }
    .card-body :where(p){
        padding-left: 100px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card card-custom border-primary">
      <div class="card-header text-center">
        <h5>Struk Gaji</h5>
      </div>
      <div class="card-body text-primary">
        <div class="mb-3 mt-3">
          <p><strong>No:</strong> <?php echo $no;?></p>
          <p><strong>Nama:</strong> <?php echo $nama;?></p>
          <p><strong>Unit Pendidikan:</strong> <?php echo $unit;?></p>
          <p><strong>Tanggal Gaji:</strong> <?php echo $tgl;?></p>
        </div>
        <hr>
        <h3 class="text-center">Gaji</h3>
        <p><strong>Jabatan:</strong> <?php echo $jabatan;?></p>
        <p><strong>Gaji:</strong> <?php echo "Rp" . number_format($gaji);?></p>
        <p><strong>Lama Kerja:</strong> <?php echo $lamaKerja . " Tahun";?></p>
        <p><strong>Tunjangan Lama Kerja:</strong> <?php echo "Rp" . number_format($tunjangan);?></p>
        <p><strong>Status Kerja:</strong> <?php echo $status;?></p>
        <p><strong>Bonus:</strong> <?php echo "Rp" . number_format($bonus);?></p>
        <p><strong>Gaji Kotor:</strong> <?php echo "Rp" . number_format($gaji_kotor);?></p>
        <hr>
        <h3 class="text-center">Potongan</h3>
        <p><strong>BPJS:</strong> <?php echo "Rp" . number_format($bpjs);?></p>
        <p><strong>Pinjaman:</strong> <?php echo "Rp" . number_format($pinjaman);?></p>
        <p><strong>Tabungan:</strong><?php echo "Rp" . number_format($tabungan);?></p>
        <p><strong>Lainnya:</strong> <?php echo "Rp" . number_format($lainnya);?></p>
        <p><strong>Total Potongan:</strong><?php echo "Rp" . number_format($total_potongan);?></p>
        <hr>
        <div class="total text-center">
        <h3>Total</h3>
        <h3>Gaji Bersih : <?php echo "Rp" . number_format($gaji_bersih);?></h3>
      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

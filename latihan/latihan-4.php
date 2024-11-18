<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Nilai Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="post" class="bg-primary p-5">
    <h1 class="text-white mb-3"><img src="img/smk.png" alt="logo" width="90" height="75" class="bg-light rounded"> Data Siswa</h1>
  <div class="form-floating mb-3">
  <input type="text" name="nama" class="form-control" id="floatingInput">
  <label for="floatingInput">Nama</label>
</div>
  <div class="form-floating mb-3">
  <select class="form-select" name="Kelas" id="floatingSelect" aria-label="Floating label select example">
    <option value="X RPL">X RPL</option>
    <option value="XI RPL">XI RPL</option>
    <option value="XII RPL">XII RPL</option>
    <option value="X TKRO">X TKRO</option>
    <option value="XI TKRO">XI TKRO</option>
    <option value="XII TKRO">XII TKRO</option>
    <option value="X TBSM">X TBSM</option>
    <option value="XI TBSM">XI TBSM</option>
    <option value="XII TBSM">XII TBSM</option>
  </select>
  <label for="floatingSelect">Kelas</label>
</div>
<!-- Form -->
<h1 class="text-white mb-4 mt-4">Nilai Ujian</h1>
<div class="form-floating mb-3">
  <input type="number" name="B_Indonesia" class="form-control" id="floatingInput">
  <label for="floatingInput">Nilai Bahasa Indonesia</label>
</div>
<div class="form-floating mb-3">
  <input type="number" name="B_Inggris" class="form-control" id="floatingInput">
  <label for="floatingInput">Nilai Bahasa Inggris</label>
</div>
<div class="form-floating mb-3">
  <input type="number" name="Matematika" class="form-control" id="floatingInput">
  <label for="floatingInput">Nilai Matematika</label>
</div>
<div class="form-floating mb-3">
  <input type="number" name="Produktif" class="form-control" id="floatingInput">
  <label for="floatingInput">Nilai Produktif</label>
</div>
<input type="submit" value="Check" name="proses" class="btn btn-lg text-white bg-danger">
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['Kelas'];
    $bIndo = $_POST['B_Indonesia']; 
    $bIngg = $_POST['B_Inggris'];
    $mTk = $_POST['Matematika'];
    $produktif = $_POST['Produktif'];

  $total = $bIndo + $bIngg + $mTk + $produktif;
  $rata_rata = $total / 4;
  
  if ($rata_rata >= 75) {
          echo "
          <table class='bg-primary text-white w-100 py-5'>
          <tr>
          <td>
            <h1>Data Siswa</h1></td>
          </tr>
          <Tr>
          <td> Nama : $nama </td>
          </tr>
          <tr>
              <td>Kelas : $kelas </td>
          </tr>
          <tr>
          <td><h1>Nilai Ujian & Status </h1></td>
          </tr>
          <tr>
           <td>B Indonesia : $bIndo </td>
           </tr>
          <tr>
              <td>B Inggris : $bIngg</td>
          </tr>
          <tr>
              <td>Matematika : $mTk</td>
          </tr>
          <tr>
              <td>Produktif : $produktif</td>
          </tr>
          <tr>
              <td>Rata Rata : $rata_rata</td>
          </tr>
          <tr>
              <td>Status : LULUS</td>
          </tr>
          </table>
          ";
  } else {
      echo "
      <table class='bg-primary text-white w-100 py-5'>
      <tr>
      <td>
        <h1>Data Siswa</h1></td>
      </tr>
      <Tr>
      <td> Nama : $nama </td>
      </tr>
      <tr>
          <td>Kelas : $kelas </td>
      </tr>
      <tr>
      <td><h1>Nilai Ujian & Status </h1></td>
      </tr>
      <tr>
       <td>B Indonesia : $bIndo </td>
       </tr>
      <tr>
          <td>B Inggris : $bIngg</td>
      </tr>
      <tr>
          <td>Matematika : $mTk</td>
      </tr>
      <tr>
          <td>Produktif : $produktif</td>
      </tr>
      <tr>
          <td>Rata Rata : $rata_rata</td>
      </tr>
      <tr>
          <td>Status : TIDAK LULUS</td>
      </tr>
      </table>
      ";
  }
}
?>
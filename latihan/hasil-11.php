<?php
if (isset($_POST['kirim'])) {
    // Data Siswa
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Nilai Matematika
    $harian_mtk = $_POST['harian_mtk'];
    $tugas_mtk = $_POST['tugas_mtk'];
    $uts_mtk = $_POST['uts_mtk'];
    $uas_mtk = $_POST['uas_mtk'];
    // Nilai Bahasa Indonesia
    $harian_bindo = $_POST['harian_bindo'];
    $tugas_bindo = $_POST['tugas_bindo'];
    $uts_bindo = $_POST['uts_bindo'];
    $uas_bindo = $_POST['uas_bindo'];
    // Nilai Bahasa Inggris
    $harian_bing = $_POST['harian_bing'];
    $tugas_bing = $_POST['tugas_bing'];
    $uts_bing = $_POST['uts_bing'];
    $uas_bing = $_POST['uas_bing'];
    // Nilai Produktif
    $harian_prd = $_POST['harian_prd'];
    $tugas_prd = $_POST['tugas_prd'];
    $uts_prd = $_POST['uts_prd'];
    $uas_prd = $_POST['uas_prd'];

    class nilai {
        public $rata_rata;

        public function RataRata($harian, $tugas, $uts, $uas) {
            $this->rata_rata = ($harian + $tugas + $uts + $uas) / 4;
            $status = $this->rata_rata >= 75 ? "Tuntas" : "Tidak Tuntas";
            return ['rata_rata' => $this->rata_rata, 'status' => $status];
        }
    }

    $cetak = new nilai();
    $hasil_mtk = $cetak->RataRata($harian_mtk, $tugas_mtk, $uts_mtk, $uas_mtk);
    $hasil_bindo = $cetak->RataRata($harian_bindo, $tugas_bindo, $uts_bindo, $uas_bindo);
    $hasil_bing = $cetak->RataRata($harian_bing, $tugas_bing, $uts_bing, $uas_bing);
    $hasil_prd = $cetak->RataRata($harian_prd, $tugas_prd, $uts_prd, $uas_prd);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="m-5">
    <h4><?php echo "Nama : ". $nama; ?></h4>
    <h4><?php echo "Kelas : ". $kelas; ?></h4>
    <h4><?php echo "Jurusan : ". $jurusan; ?></h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Mapel</th>
          <th scope="col">Harian</th>
          <th scope="col">Tugas</th>
          <th scope="col">UTS</th>
          <th scope="col">UAS</th>
          <th scope="col">Rata-Rata</th>
          <th scope="col">Grade</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <td>Matematika</td>
          <td><?php echo $harian_mtk; ?></td>
          <td><?php echo $tugas_mtk; ?></td>
          <td><?php echo $uts_mtk; ?></td>
          <td><?php echo $uas_mtk; ?></td>
          <td><?php echo $hasil_mtk['rata_rata']; ?></td>
          <td><?php echo $hasil_mtk['status']; ?></td>
        </tr>
        <tr>
          <td>Bahasa Indonesia</td>
          <td><?php echo $harian_bindo; ?></td>
          <td><?php echo $tugas_bindo; ?></td>
          <td><?php echo $uts_bindo; ?></td>
          <td><?php echo $uas_bindo; ?></td>
          <td><?php echo $hasil_bindo['rata_rata']; ?></td>
          <td><?php echo $hasil_bindo['status']; ?></td>
        </tr>
        <tr>
          <td>Bahasa Inggris</td>
          <td><?php echo $harian_bing; ?></td>
          <td><?php echo $tugas_bing; ?></td>
          <td><?php echo $uts_bing; ?></td>
          <td><?php echo $uas_bing; ?></td>
          <td><?php echo $hasil_bing['rata_rata']; ?></td>
          <td><?php echo $hasil_bing['status']; ?></td>
        </tr>
        <tr>
          <td>Produktif</td>
          <td><?php echo $harian_prd; ?></td>
          <td><?php echo $tugas_prd; ?></td>
          <td><?php echo $uts_prd; ?></td>
          <td><?php echo $uas_prd; ?></td>
          <td><?php echo $hasil_prd['rata_rata']; ?></td>
          <td><?php echo $hasil_prd['status']; ?></td>
        </tr>
      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
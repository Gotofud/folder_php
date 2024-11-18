<?php
$nama = "Fazli Rausyan Fikri";
$kelas = "XI RPL 1";
$NilaiBindo = 85;
$NilaiBingg = 100;
$NilaiMtk = 75;
$NilaiProdktf = 85;

$total = $NilaiBindo + $NilaiBingg + $NilaiMtk + $NilaiProdktf;
$rata_rata = $total / 4;

echo "
Nama : $nama <br>
Kelas : $kelas <br>
Nilai B Indonesia : $NilaiBindo <br>
Nilai B Inggris : $NilaiBingg <br>
Nilai Matematika : $NilaiMtk <br>
Nilai Produktif : $NilaiProdktf <br>
Nilai Rata-rata : $rata_rata <hr>
";

if ($rata_rata >= 75) {
    echo "Status : Anda Lulus";
} else {
    echo "Status : Anda tidak lulus";
}

?>

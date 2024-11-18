<?php

class bangun_datar{

public $luas_segitiga;
public $persegi;
public $persegi_panjang;
public $lingkaran;

public function segitiga($a,$t){
    echo "<b>Menghitung Luas Segitiga</b><br>";
    echo "Panjang : $a <br>";
    echo "Tinggi : $t <br>";
    $this->luas_segitiga = $a*$t/2;
    echo "Hasilnya : $this->luas_segitiga <br>";
}

public function persegi($s){
    echo "<b>Menghitung Persegi</b><br>";
    echo "Sisi : $s <br>";
    $this->persegi = $s*$s;
    echo "Hasilnya : $this->persegi <br>";
}

public function persegipanjang($p,$l){
    echo "<b>Menghitung Persegi Panjang</b><br>";
    echo "Panjang : $p <br>";
    echo "Lebar : $l <br>";
    $this->persegi_panjang = $p*$l;
    echo "Hasilnya : $this->persegi_panjang <br>";
}

public function lingkaran($r){
    echo "<b>Menghitung Lingkaran</b><br>";
    echo "Jari-jari : $r <br>";
    $this->lingkaran = $r*$r*3.14;
    echo "Hasilnya : $this->lingkaran <br>";
}

}

$cetak = new bangun_datar();
echo $cetak->segitiga(12,32);
echo $cetak->persegipanjang(12,32);
echo $cetak->persegi(12,32);
echo $cetak->lingkaran(32);
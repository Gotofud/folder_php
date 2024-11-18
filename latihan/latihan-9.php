<?php

function segitiga($a,$t){
    echo "<b>Menghitung Luas Segitiga</b><br>";
    echo "Panjang : $a <br>";
    echo "Tinggi : $t <br>";
    $hasil = $a*$t/2;
    echo "Hasilnya : $hasil <br>";
}

function persegi($s){
    echo "<b>Menghitung Persegi</b><br>";
    echo "Sisi : $s <br>";
    $hasil = $s*$s;
    echo "Hasilnya : $hasil <br>";
}

function persegipanjang($p,$l){
    echo "<b>Menghitung Persegi Panjang</b><br>";
    echo "Panjang : $p <br>";
    echo "Lebar : $l <br>";
    $hasil = $p*$l;
    echo "Hasilnya : $hasil <br>";
}

function lingkaran($r){
    echo "<b>Menghitung Lingkaran</b><br>";
    echo "Jari-jari : $r <br>";
    $hasil = $r*$r*22/7;
    echo "Hasilnya : $hasil <br>";
}

segitiga(3,3);
persegi(5);
persegipanjang(3,8);
lingkaran(6);

?>
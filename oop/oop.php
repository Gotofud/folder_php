<?php
// Pengisian Class
class Kucing{
// Pengisian Property
    var $warna;
    var $jenis;
// Pengisian Method
    public function makan(){
        echo "Kucing suka makan whiskas";
    }
    public function minum(){
        echo "Kucing suka minum air";
    }
}
// Buat Object
$cetak = new Kucing();
// Munculkan Method
echo $cetak->makan() . "<br>";
echo $cetak->minum() . "<br>";
echo "<br>";
// Munculkan Property
echo $cetak->warna = "Hijau <br>";
echo $cetak->jenis = "Alien <br>";

<?php
// Pengisian Class
class example{
// Pengisian Property
    public $nama = "Fazli";
// Pengisian Method
    public function halo(){
        echo "halooooooo";
    }
}
// Buat Object
$cetak = new example();
// Munculkan Method
echo $cetak->halo() . "<br>";
echo "<br>";
// Munculkan Property
echo $cetak->nama;

// Public bisa di luar class dan di turunan
// Protected ga bisa di luar class tapi bisa di turunan
// Private ga bisa dua duannya
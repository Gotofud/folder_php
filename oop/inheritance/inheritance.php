<?php
// Class Induk
class kendaraan{

    public $warna = "Biru";

    public function a(){
        echo "Saya adalah kendaraan";
    }
}

// Class Anak
    class mobil extends kendaraan{

        public function b(){
            echo $this->a() . "<br>";
            echo "Warna saya adalah $this->warna"; 
        }
    }

    $cetak = new mobil();
    echo $cetak->b();
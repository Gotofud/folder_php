<?php
class bangun_datar{
    public $luas_segitiga;
    public $luas_persegi;
    public $luas_persegi_panjang;
    public $luas_lingkaran;
    public $keliling_segitiga;
    public $keliling_persegi;
    public $keliling_persegi_panjang;
    public $keliling_lingkaran;
}
 class segitiga extends bangun_datar{

    public function segitiga($panjang,$tinggi){
        echo "<b>Menghitung Luas Segitiga</b><br>";
        echo "Panjang : $panjang <br>";
        echo "Tinggi : $tinggi <br>";
        $this->luas_segitiga = $panjang*$tinggi/2;
        echo "Hasilnya : $this->luas_segitiga <br>";
    }

 }
 class persegi extends bangun_datar{

    public function persegi($sisi_persegi){
        echo "<b>Menghitung luas Persegi</b><br>";
        echo "Sisi : $sisi_persegi <br>";
        $this->luas_persegi = $sisi_persegi*$sisi_persegi;
        echo "Hasilnya : $this->luas_persegi <br>";
    }

 }
 class persegi_panjang extends bangun_datar{

    public function persegipanjang($panjang,$lebar){
        echo "<b>Menghitung luas Persegi Panjang</b><br>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        $this->luas_persegi_panjang = $panjang*$lebar;
        echo "Hasilnya : $this->luas_persegi_panjang <br>";
    }

 }
 class lingkaran extends bangun_datar{

    public function lingkaran($jari_jari){
        echo "<b>Menghitung luas Lingkaran</b><br>";
        echo "Jari-jari : $jari_jari <br>";
        $this->luas_lingkaran = $jari_jari * $jari_jari * 3.14;
        echo "Hasilnya : $this->luas_lingkaran <br>";
    }
 }
 class k_segitiga extends bangun_datar{

    public function k_segitiga($a,$b,$c){
        echo "<b>Menghitung keliling Segitiga</b><br>";
        echo "
        Panjang A = $a <br>
        Panjang B = $b <br>
        Panjang C = $c <br>";   
        $this->keliling_segitiga = $a+$b+$c ;
        echo "Hasilnya : $this->keliling_segitiga <br>";
    }

 }
 class k_persegi extends bangun_datar{

    public function k_persegi($sisi_persegi){
        echo "<b>Menghitung Keliling Persegi</b><br>";
        echo "Sisi : $sisi_persegi <br>";
        $this->keliling_persegi = $sisi_persegi+$sisi_persegi+$sisi_persegi+$sisi_persegi;
        echo "Hasilnya : $this->keliling_persegi <br>";
    }

 }
 class k_persegi_panjang extends bangun_datar{

    public function k_persegipanjang($panjang,$lebar){
        echo "<b>Menghitung keliling Persegi Panjang</b><br>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        $this->keliling_persegi_panjang = 2 * $panjang + $lebar;
        echo "Hasilnya : $this->keliling_persegi_panjang <br>";
    }

 }
 class k_lingkaran extends bangun_datar{

    public function k_lingkaran($jari_jari){
        echo "<b>Menghitung keliling Lingkaran</b><br>";
        echo "Jari-jari : $jari_jari <br>";
        $this->keliling_lingkaran = 2 * 3.14 * $jari_jari;
        echo "Hasilnya : $this->keliling_lingkaran <br>";
    }

 }


 $cetak = new segitiga();
 $cetak2 = new persegi();
 $cetak3 = new persegi_panjang();
 $cetak4 = new lingkaran();

 $ctk = new k_segitiga();
 $ctk2 = new k_persegi();
 $ctk3 = new k_persegi_panjang();
 $ctk4 = new k_lingkaran();

 echo $cetak->segitiga(12,12) . "<hr>";
 echo $cetak2->persegi(12,12) . "<hr>";
 echo $cetak3->persegipanjang(12,12) . "<hr>";
 echo $cetak4->lingkaran(12,12) . "<hr>";
 

 echo $ctk->k_segitiga(12,12,12) . "<hr>";
 echo $ctk2->k_persegi(12,12) . "<hr>";
 echo $ctk3->k_persegipanjang(12,12) . "<hr>";
 echo $ctk4->k_lingkaran(12,12) . "<hr>";


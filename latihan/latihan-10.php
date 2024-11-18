<?php

class penggajihan {
    public $gaji;
    public $tunjangan;
    public $potongan;
    public $gaji_bersih;

    public function jabatan($nama,$jabatan){
        if ($jabatan == "Direktur") {
            $this->gaji = 10000000;
        } elseif ($jabatan == "Manager") {
            $this->gaji = 7500000;
        } elseif ($jabatan == "Karyawan") {
            $this->gaji = 5000000;
        } elseif ($jabatan == "Ob") {
            $this->gaji = 2500000;
        };

        echo "
        Nama Karyawan : $nama <br>
        Jabatan : $jabatan <br>
        Gaji Pokok : Rp" . number_format($this->gaji) . "<br>";
    }
    public function tunjangan($pendidikan){
        if ($pendidikan == "SD") {
            $this->tunjangan = 250000;
        } elseif ($pendidikan == "SMP") {
            $this->tunjangan = 500000;
        } elseif ($pendidikan == "SMA" || "SMK") {
            $this->tunjangan = 750000;
        } elseif ($pendidikan == "S1") {
            $this->tunjangan = 1000000;
        }

        echo "
        Pendidikan : $pendidikan <br>
        Tunjangan Pendidikan : Rp" . number_format($this->tunjangan) . "<br>";     
    } 
    public function potongan($tabungan,$pinjaman){
        $this->potongan = $tabungan + $pinjaman;
        
        echo "
        Tabungan : Rp" . number_format($tabungan) . "<br>
        Pinjaman : Rp" . number_format($pinjaman) . "<br>
        Total : Rp" . number_format($this->potongan) . "<br>";
    }
    public function gaji_bersih(){
        $this->gaji_bersih = $this->gaji + $this->tunjangan - $this->potongan;
        
        echo "Total Gaji Bersih : Rp" . number_format($this->gaji_bersih) . "<br>";
    }

}

$cetak = new penggajihan();
echo "<center><h2>Penggajihan Karyawan</h2></center>";
echo "<h3>Gaji Pokok</h3>";
echo $cetak->jabatan("Fazli","Direktur") . "<br><hr>";
echo "<h3>Tunjangan</h3>";
echo $cetak->tunjangan("SMK") . "<br><hr>";
echo "<h3>Potongan</h3>";
echo $cetak->potongan(250000, 20000) . "<br><hr>";
echo "<h3>Total Gaji Bersih</h3>";
echo $cetak->gaji_bersih() . "<br><hr>";
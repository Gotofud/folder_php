<?php
function biodata($nama,$tmp_lahir,
         $tgl_lahir,$jk,$agama,
         $alamat,$hobi){

            echo "Nama saya $nama <br>";
            echo "Saya lahir di $tmp_lahir <br>";
            echo "Saya lahir pada $tgl_lahir <br>";
            echo "Jenis Kelamin saya $jk <br>";
            echo "Agama saya adalah $agama <br>";
            echo "Saya tinggal di $alamat <br>";
            echo "Hobi saya adalah $hobi";
}

biodata("Fazli Rf","Bandung","26 Feb 2008","Laki laki","Islam","Rancamanyar","Bobo");


function berhitung($angka1, $angka2){
    echo "<p>Angka pertama $angka1</p>
          <p>Angka Kedua $angka2</p>";
        $hasil = $angka1 + $angka2;
    echo "Hasil pertambahan $angka1 + $angka2 = $hasil";
}

berhitung(12,43);
?>
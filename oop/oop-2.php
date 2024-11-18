<?php
class ppdb{

    public function data_diri($nama,$jurusan,$jk,$tgl_lahir){
        echo "
        Nama Lengkap : $nama <br>
        Jurusan : $jurusan <br>
        Jenis Kelamin : $jk <br>
        Tanggal Lahir : $tgl_lahir
        ";
    }
    public function alamat($provinsi,$kab_kota,$kec,$alamat,$kode_pos){
        echo "
        Provinsi : $provinsi <br>
        Kab/Kota : $kab_kota <br>
        Kecamatan : $kec <br>
        Alamat : $alamat <br>
        Kode POS : $kode_pos
        ";
    }
    public function data_sekolah($nama_sekolah,$alamat_sekolah){
        echo "
        Nama Sekolah : $nama_sekolah <br>
        Alamat Sekolah : $alamat_sekolah
        ";
    }
    public function data_ortu($nama_ortu,$pekerjaan,$no,$alamat){
        echo "
        Nama Orang Tua : $nama_ortu <br>
        Pekerjaan : $pekerjaan <br>
        Nomor Telepon : $no <br>
        Alamat Lengkap : $alamat 
        ";
    }
}

$cetak = new ppdb();

echo "<h3>Data Diri</h3>";
echo $cetak->data_diri("Fazli RF","RPL","Laki-Laki","26 Feb 2008");

echo "<h3>Alamat Caon Pendaftar</h3>";
echo $cetak->alamat("Jabar","Kab Bandung","Baleendah","Rancamanyar","40021");

echo "<h3>Data Asal Sekolah</h3>";
echo $cetak->data_sekolah("MTS Persis 30","Jl. Cisirung No.78");

echo "<h3>Data Orang Tua</h3>";
echo $cetak->data_ortu("Bapa","Pegawai Swasta","0821-2213-2456","Antapani");
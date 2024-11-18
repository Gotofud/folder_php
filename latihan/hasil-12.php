<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB Online - SMK Assalaam Bandung</title>
    <link rel="web icon" href="img/smk.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            max-width: 45rem;
            margin-top: 10px
        }
        .form-title {
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        body {
            background-color: whitesmoke;
            font-size: 17px;
        }
    </style>
</head>

<body>
        <header class="text-white py-3">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <div class="form-text mb-2">Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status
                    Pendaftaran"</div>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary">Cek Status Pendaftaran</a>
                        <a href="latihan-12.php" class="btn btn-warning text-white">Kembali ke Form</a>
                        <a href="https://smkassalaambandung.sch.id/" class="btn btn-danger">Situs Resmi SMK ASSALAAM</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            // Data Siswa
            $jurusan = $_POST['jurusan'];
            $nama_siswa = $_POST['nama_siswa'];
            $jk = $_POST['jk'];
            $tmp_lahir = $_POST['tmp_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $no_siswa = $_POST['no_siswa'];
            $email_siswa = $_POST['email_siswa'];
            // Alamat siswa
            $provinsi = $_POST['provinsi'];
            $kota_kab = $_POST['kota_kab'];
            $kecamatan = $_POST['kecamatan'];
            $desa_kel = $_POST['desa_kelurahan'];
            $alamat_rmh = $_POST['alamat_rumah'];
            $kode_pos = $_POST['kode_pos'];
            // Asal Sekolah
            $nama_sekolah = $_POST['nama_sekolah'];
            $alamat_sekolah = $_POST['alamat_sekolah'];
            // Data Ortu
            $ortu = $_POST['orangtua'];
            $nama_ortu = $_POST['nama_ortu'];
            $pekerjaan = $_POST['pekerjaan_ortu'];
            $no_ortu = $_POST['no_ortu'];
            $alamat_ortu = $_POST['alamat_ortu'];


            class ppdb   {

                public function data_diri($nama, $jurusan, $jk, $tmp_lhr, $tgl_lhr, $no, $email){
                echo "
                <div class='container'>
                <div class='card shadow mb-4>
                <div class='card-body'>
                <h6 class='form-title'>Data Siswa</h6>
                <div class='mb-3'>
                <table spacing='1'>
                        <tr>
                            <td>Jurusan : </td>
                            <td>$jurusan</td>
                       </tr>
                        <tr>
                            <td>Nama : </td>
                            <td>$nama</td>
                       </tr>
                        <tr>
                            <td>Jenis Kelamin : </td>
                            <td>$jk</td>
                       </tr>
                        <tr>
                            <td>Tempat Lahir : </td>
                            <td>$tmp_lhr</td>
                       </tr>
                        <tr>
                            <td>Tanggal Lahir : </td>
                            <td>$tgl_lhr</td>
                       </tr>
                        <tr>
                            <td>Nomor Siswa : </td>
                            <td>$no</td>
                       </tr>
                        <tr>
                            <td>Email Siswa : </td>
                            <td>$email</td>
                       </tr>
                </table>
                </div>
                </div>
                </div>
                </div>
                ";
                }
                public function alamat($provinsi, $kab_kota, $kec, $desa_kelrh, $alamat, $kode_pos) {
                    echo "
                    <div class='container'>
                    <div class='card shadow mb-4>
                    <div class='card-body'>
                    <h6 class='form-title'>Alamat</h6>
                    <div class='mb-3'>
                    <table spacing='1'>
                            <tr>
                                <td>Provinsi : </td>
                                <td>$provinsi</td>
                           </tr>
                            <tr>
                                <td>Kabupaten/Kota : </td>
                                <td>$kab_kota</td>
                           </tr>
                            <tr>
                                <td>Kecamatan : </td>
                                <td>$kec</td>
                           </tr>
                            <tr>
                                <td>Desa/Kelurahan : </td>
                                <td>$desa_kelrh</td>
                           </tr>
                            <tr>
                                <td>Alamat : </td>
                                <td>$alamat</td>
                           </tr>
                            <tr>
                                <td>Kode Pos : </td>
                                <td>$kode_pos</td>
                           </tr>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    ";
                }
                public function data_sekolah($nama_sekolah, $alamat_sekolah){
                    echo "
                <div class='container'>
                <div class='card shadow mb-4>
                <div class='card-body'>
                <h6 class='form-title'>Data Sekolah</h6>
                <div class='mb-3'>
                <table spacing='1'>
                        <tr>
                            <td>Nama Sekolah : </td>
                            <td>$nama_sekolah</td>
                       </tr>
                        <tr>
                            <td>Alamat Sekolah : </td>
                            <td>$alamat_sekolah</td>
                       </tr>
                </table>
                </div>
                </div>
                </div>
                </div>
                ";
                }
                public function data_ortu($ortu, $nama_ortu, $pekerjaan, $no, $alamat){
                    echo "
                    <div class='container'>
                    <div class='card shadow mb-4>
                    <div class='card-body'>
                    <h6 class='form-title'>Data Orang tua</h6>
                    <div class='mb-3'>
                    <table spacing='1'>
                            <tr>
                                <td>Orang Tua (Ayah/Ibu/Wali) : </td>
                                <td>$ortu</td>
                           </tr>
                            <tr>
                                <td>Nama Orang Tua (Ayah/Ibu/Wali) : </td>
                                <td>$nama_ortu</td>
                           </tr>
                            <tr>
                                <td>Pekerjaan : </td>
                                <td>$pekerjaan</td>
                           </tr>
                            <tr>
                                <td>Nomor Aktif Orang tua : </td>
                                <td>$no</td>
                           </tr>
                            <tr>
                                <td>Alamat Orang tua : </td>
                                <td>$alamat</td>
                           </tr>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    ";
                }
            }

            $cetak = new ppdb();
            $cetak->data_diri($nama_siswa, $jurusan, $jk, $tgl_lahir, $tmp_lahir, $no_siswa, $email_siswa);
            $cetak->alamat($provinsi, $kota_kab, $kecamatan, $desa_kel, $alamat_rmh, $kode_pos);
            $cetak->data_sekolah($nama_sekolah, $alamat_sekolah);
            $cetak->data_ortu($ortu, $nama_ortu, $pekerjaan, $no_ortu, $alamat_ortu);
        }
        ?>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
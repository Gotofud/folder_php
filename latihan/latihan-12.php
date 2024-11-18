<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online - SMK Assalaam Bandung</title>
    <link rel="web icon" href="img/smk.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 80rem;
        }

        .form-title {
            font-weight: bold;
            margin-bottom: 20px;
        }

        body {
            background-color: whitesmoke;
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
                        <a href="https://www.youtube.com/watch?v=0itOCgJtNVU" class="btn btn-warning text-white">Kembali ke Home</a>
                        <a href="https://smkassalaambandung.sch.id/" class="btn btn-danger">Situs Resmi SMK ASSALAAM</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<form action="hasil-12.php" method="post">
    <div class="container ">
        <!-- Form Data Diri -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h6 class="form-title">Data Diri Calon Pendaftar (Form yang bertanda <span class="text-danger">*</span> wajib di isi)</h6>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan <span class="text-danger">*</span></label>
                    <select class="form-select" id="jurusan" name="jurusan" required>
                        <option value="" selected>Pilih Jurusan</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                        <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama_siswa"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-Laki"
                                required>
                            <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan"
                                required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir" name="tmp_lahir">
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir <span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tgl_lahir" required>
                </div>
                <div class="mb-3">
                    <label for="nomorHP" class="form-label">Nomor HP <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="nomorHP" placeholder="Nomor HP" name="no_siswa" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email_siswa">
                    <div class="form-text">Softcopy form pendaftaran akan dikirim ke alamat email ini.</div>
                </div>
            </div>
        </div>

        <!-- Form Alamat -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h6 class="form-title">Alamat Calon Pendaftar</h6>
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi <span class="text-danger">*</span></label>
                    <select class="form-select" id="provinsi" name="provinsi" required>
                        <option value="" selected>Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kab / Kota <span class="text-danger">*</span></label>
                    <select class="form-select" id="kota" name="kota_kab" required>
                        <option value="" selected>Pilih Provinsi dahulu</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung Barat">Bandung Barat</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cimahi">Cimahi</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Garut">Garut</option>
                        <option value="Indramayu">Indramayu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan <span class="text-danger">*</span></label>
                    <select class="form-select" id="kecamatan" name="kecamatan" required>
                        <option value="" selected>Pilih Kota dahulu</option>
                        <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="desa" class="form-label">Desa / Kelurahan <span class="text-danger">*</span></label>
                    <select class="form-select" id="desa" name="desa_kelurahan" required>
                        <option value="" selected>Pilih Kecamatan dahulu</option>
                        <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="alamat" rows="3"
                        placeholder="Tidak perlu lagi menulis provinsi, kota, kecamatan & kelurahan" name="alamat_rumah"
                        required></textarea>
                </div>
                <div class="mb-3">
                    <label for="kodePos" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="kodePos" placeholder="Kode Pos" name="kode_pos">
                </div>
            </div>
        </div>

        <!-- Form Data Asal Sekolah -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h6 class="form-title">Data Asal Sekolah</h6>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Sekolah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Sekolah" name="nama_sekolah" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Sekolah<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="alamat" rows="3"
                        placeholder="Alamat Sekolah" name="alamat_sekolah"
                        required></textarea>
                </div>

            </div>
        </div>

        <!-- Form Data Orang tua -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h6 class="form-title">Data Asal Sekolah</h6>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap Ayah / Ibu / Wali <span
                            class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <select name="orangtua" id="" class="form-select" name="orangtua" required>
                            <option value="Ayah" selected>Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Wali">Wali</option>
                        </select>
                        <input type="text" class="form-control w-75" aria-label="Text input with dropdown button" name="nama_ortu">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Pekerjaan Ayah / Ibu / Wali <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" placeholder="Pekerjaan" name="pekerjaan_ortu" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorHP" class="form-label">Nomor HP yang bisa dihubungi<span
                                class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="nomorHP" placeholder="Nomor HP" name="no_ortu" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat Lengkap" name="alamat_ortu"
                            required></textarea>
                    </div>
                </div>
            </div>
            <!-- Button Submit -->
            <div class="w-50 d-flex gap-3 ms-3 mb-2">
                <button type="submit" class="btn btn-primary btn" name="submit">Simpan & Daftar</button>
                <button type="reset" class="btn btn-outline-warning btn">Reset</button>
            </div>
        </div>
</form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
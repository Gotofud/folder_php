<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaji Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .mt-0 {
  margin-top: 25rem!important;
}
    </style>
  </head>
  <body>
   <div class="title text-center grid gap-0">
 <img src="img/yayasan.png" alt="">
    <h4>PENGGAJIHAN</h4>
    <h4>GURU/KARYAWAN YAYASAN ASSALAAM</h4>
   </div>
   
  <div class="card d-block mt-2 mx-auto p-2" style="width:30rem; height:auto">
  <div class="card-header px-4">
    Data Penggajihan 
  </div>
  <div class="card-body">
  <form method="post" action="hasil-5.php">
  <div class="mb-3">
    <label for="exampleInputNo1" class="form-label">No</label>
    <input type="number" class="form-control" id="exampleInputNo1" aria-describedby="emailHelp" name="no">
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputName1" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Unit Pendidikan</label>
    <select name="unit" class="form-select">
      <option value="SD">SD</option>
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="SMK">SMK</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Tanggal Gaji</label>
    <input type="date" class="form-control" id="exampleInputName1" name="tgl">
  </div>
  <div class="row">
    <div class="col">
      <div class="form-header">
        <h2><i>Gaji</i></h2>
      </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Jabatan</label>
    <select name="jabatan" class="form-select">
      <option value="kepala sekolah">Kepala Sekolah</option>
      <option value="wakasek">Wakasek</option>
      <option value="guru">Guru</option>
      <option value="ob">Ob</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Lama Kerja</label>
    <input type="number" name="lama_kerja" id="" class="form-control" placeholder="Lama Kerja">
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Status</label>
    <select name="status" class="form-select">
      <option value="kosong">Pilih Status</option>
      <option value="kontrak">kontrak</option>
      <option value="tetap">tetap</option>
    </select>
  </div>
    </div>
    <!-- pembatas -->
    <div class="col">
      <div class="form-header">
        <h2><i>Potongan</i></h2>
      </div>
      <div class="mb-3">
    <label for="exampleInputName1" class="form-label">BPJS</label>
    <input type="Number" class="form-control" id="exampleInputName1" name="bpjs"  placeholder="BPJS">
  </div>
      <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Pinjaman</label>
    <input type="Number" class="form-control" id="exampleInputName1" name="pinjaman"  placeholder="Pinjaman">
  </div>
      <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Tabungan</label>
    <input type="Number" class="form-control" id="exampleInputName1" name="tabungan"  placeholder="Tabungan">
  </div>
      <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Lainnya</label>
    <input type="Number" class="form-control" id="exampleInputName1" name="lainnya"  placeholder="Lainnya">
  </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
</form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
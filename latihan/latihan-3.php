<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <img src="img/smk.png" alt="logo smk" width="200" height="150">
        <h1>Form Biodata Diri</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmpLahir" value=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tglLahir" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="checkbox" name="jk" value="Laki-Laki">Laki-laki
                <input type="checkbox" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Kepercayaan">Kepercayaan</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendTer">
                   <option value="SD">SD</option>
                   <option value="SMP">SMP</option>
                   <option value="SMK/SMA">SMK/SMA</option>
                   <option value="KULIAH">KULIAH</option>
                </select></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><select name="status">
                    <option value="Menikah">Menikah</option>
                    <option value="Belom Menikah">Belom Menikah</option>
                    <option value="Hidup">Hidup</option>
                    <option value="Mati">Mati</option>
                </select></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" value="membaca">membaca
                <input type="checkbox" name="hobi" value="menulis">menulis
                <input type="checkbox" name="hobi" value="ngepush">ngepush</td>
            </tr>
            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td><select name="ctct">
                    <option value="programmer">programmer</option>
                    <option value="orang baik">orang baik</option>
                    <option value="orang jahad">orang jahad</option>
                </select></td>
            </tr>
            <tr>
                <td>Kata Kata Bijak</td>
                <td>:</td>
                <td><textarea name="ktkt"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="proses" value="kirim"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama_lengkap'];
    $tmpLahir = $_POST['tmpLahir'];
    $tglLahir = $_POST['tglLahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $pendTer = $_POST['pendTer'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $ctct = $_POST['ctct'];
    $ktkt = $_POST['ktkt'];
    
    echo "
    <center>
    <table> 
     <tr>
       <td>Nama : $nama</td>
     </tr>
     <tr>
       <td>Tempat Lahir : $tmpLahir</td>
     </tr>
     <tr>
       <td>Tanggal Lahir : $tglLahir</td>
     </tr>
     <tr>
       <td>Jenis Kelamin : $jk </td>
     </tr>
     <tr>
       <td>Agama : $agama</td>
     </tr>
     <tr>
       <td>Pendidikan Terakhir : $pendTer</td>
     </tr>
     <tr>
       <td>Status : $status </td>
     </tr>
     <tr>
       <td>Hobi : $hobi</td>
     </tr>
     <tr>
       <td>Cita Cita : $ctct</td>
     </tr>
     <tr>
       <td>Kata Kata Bijak : $ktkt </td>
     </tr>
    </table>
    </center>";
}
?>

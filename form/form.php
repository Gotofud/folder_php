<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Biodata Diri</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""></td>
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
    $kelas = $_POST['kelas'];

    echo "Nama : $nama <br>";
    echo "Kelas : $kelas";
}
?>

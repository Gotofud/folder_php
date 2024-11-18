<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang"></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['hitung'])){
    // deklarasi variable
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class persegiPanjang{
        public $luas;
                                            // Parameter
        public function luas_persegiPanjang($panjang2, $lebar2){ 
            $this->luas = $panjang2 * $lebar2   ;

            echo "Panjang : ". number_format($panjang2)."<br>";
            echo "Lebar : ". number_format($lebar2)."<br>";
            echo "Luasnya : ".number_format($this->luas)."<br>";
        }
    }

    $cetak = new persegiPanjang();   // Argument
    echo $cetak->luas_persegiPanjang($panjang, $lebar);
}
?>

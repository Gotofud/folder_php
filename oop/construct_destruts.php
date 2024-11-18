<?php

class kucing{

    public function __construct(){
        echo "miau miau NIGA <br>";
    }
    public function makan(){
        echo "Kucing Suka Makan Wiskhas";
    }
    public function minum(){
        echo "Kucing Suka Minum Air";
    }

    public function __destruct(){
        echo "KOKOKOKOKOKOKOKOKO";
    }
}

$cetak = new kucing;

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

?>
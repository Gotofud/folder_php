<?php

$dataJSON = '[
    {
        "nama" : "Nurul Huda",
        "alamat" : "Bandung"
    },
    {
        "nama" : "Renza",
        "alamat" : "Arab"
    }
]';

$list = json_decode($dataJSON);

foreach ($list as $mahasiswa) {
    echo "Nama :  {$mahasiswa->nama} <br>";
    echo "Nama :  {$mahasiswa->alamat} <br>";
    echo "<hr>";
}
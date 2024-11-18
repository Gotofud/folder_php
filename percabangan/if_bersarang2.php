<?php

    $provinsi = "jawa tengah";
    $kota = "Magelang";

    if ($provinsi == "jawa barat") {
        if ($kota == "Bandung") {
            echo "Selamat datang di bandung";
        } elseif ($kota == "Cimahi") {
            echo "Selamat datang di cimahi";
        } elseif ($kota == "Bogor") {
            echo "Selamat datang di bogor";
        } elseif ($kota == "Cirebon") {
            echo "Selamat datang di cirebon";
        } else {
            echo "Kota tidak tersedia";
        }
        
    } elseif ($provinsi == "jawa timur") {
        if ($kota == "Blitar") {
            echo "Selamat datang di blitar";
        } elseif ($kota == "Malang") {
            echo "Selamat datang di malang";
        } elseif ($kota == "Batu") {
            echo "Selamat datang di batu";
        } elseif ($kota == "Madiun") {
            echo "Selamat datang di madiun";
        } else {
            echo "Kota tidak tersedia";
        }
    
    } elseif ($provinsi == "jawa tengah") {
        if ($kota == "Magelang") {
            echo "Selamat datang di magelang";
        } elseif ($kota == "Pekalongan") {
            echo "Selamat datang di pekalongan";
        } elseif ($kota == "Salatiga") {
            echo "Selamat datang di salatiga";
        } elseif ($kota == "Surakarta") {
            echo "Selamat datang di surakarta";
        } else {
            echo "Kota tidak tersedia";
        }
    
    } else {
        echo "Provinsi tidak ada";
    }
?>
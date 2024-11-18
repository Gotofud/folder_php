<?php
$orang = [
    [
        "nama" => "Fazli",
        "buah" => [
            "Anggur" => ["Anggur Ijo", "Anggur Merah"]
        ]
    ],
    [
        "nama" => "Sulis",
        "buah" => [
            "Alpukat" => ["Alpukat Mentega", "Alpukat Biasa"],
            "Apel" => ["Apel Merah", "Apel Hijau"]
        ]
    ]
];

foreach ($orang as $data) {
    echo "<h2>Nama: " . $data["nama"] . "</h2>";
    echo "<p>Daftar Buah:</p>";
    foreach ($data["buah"] as $buah => $jenisBuah) {
        echo "<ul type='square'><li><h2>" . $buah . "</h2></li></ul>";
        foreach ($jenisBuah as $jenis) {
            echo "<p> - " . $jenis . "<p>";
        }
    }
    echo "<hr>";
}
?>

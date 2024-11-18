<?php
$siswa = [
    [
        "nisn" => "1001",
        "nama" => "Fazli",
        "kelas" => "XI RPL 1",
        "eskul" => [
            "nama eskul" => ["Band"]
        ]
    ],
    [
        "nisn" => "1002",
        "nama" => "Sulis",
        "kelas" => "XI RPL 1",
        "eskul" => [
            "nama eskul" => ["Tari", "Karawitan"]
        ]
    ]
];

foreach ($siswa as $data) {
    echo "<p>NISN: " . $data["nisn"] . "</p>";
    echo "<p>Nama: " . $data["nama"] . "</p>";
    echo "<p>Kelas: " . $data["kelas"] . "</p>";
    echo "<p>Ekstrakurikuler:</p>";
    foreach ($data["eskul"]["nama eskul"] as $eskul) {
        echo "<ul><li>" . $eskul . "</li></ul>";
    }
    echo "<hr>";
}
?>

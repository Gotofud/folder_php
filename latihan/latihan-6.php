<?php
$artikel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Baiq",
        "Tahun Terbit" => "20 November 2015",
        "Penerbit" => "Buku kita"
    ],
    [
        "judul" => "Le Petit Prince",
        "penulis" => " Antoine de Saint-Exupéry",
        "Tahun Terbit" => " 6 April 1943",
        "Penerbit" => "  J.B. Wolters"
    ],
    [
        "judul" => "Les Misérables",
        "penulis" => "Victor Hugo",
        "Tahun Terbit" => "1862",
        "Penerbit" => "Wordsworth"
    ],
    [
        "judul" => "Küçük Kara Balık",
        "penulis" => "Samad Behranghi",
        "Tahun Terbit" => "1968",
        "Penerbit" => "Gramedia"
    ],
    [
        "judul" => "How to be a sigma male in 5 weeks",
        "penulis" => "Sigma",
        "Tahun Terbit" => "1 April 1977",
        "Penerbit" => "PT BUKU"
    ]
];

// menampilkan 
echo "<h1>List Buku</h1>";
foreach($artikel as $post){
    echo "<h3>". "Judul : " . $post["judul"]."</h3>";
    echo "<p>". "Penulis : " . $post["penulis"]."<p>";
    echo "<p>". "Tahun Terbit : " . $post["Tahun Terbit"] . "</p>";
    echo "<p>". "Penerbit : " . $post["Penerbit"] . "</p>";
}
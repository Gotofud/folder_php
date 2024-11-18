<?php

// FOR
for ($i=10; $i > 0 ; $i--) { 
    echo "Aku For  $i <br>";
}
echo "<br>";

// WHILE
$a = 0;
while ($a < 10) {
    echo "Aku While $a <br>";
    $a++;
}

echo "<br>";

// Do While
$b = 0;
do {
    echo "Aku Do WHile $b <br>";
    $b++;
} while ($b < 10);

echo "<br>";

// Foreach
$buku = [
    "Sigma",
    "Skibidi",
    "Gyatt",
    "Miaw"
];

foreach ($buku as $book) {
    echo "$book <br>";
}
<?php

$buku = '[
  {
    "no" : 1001,
    "judul": "To Kill a Mockingbird",
    "genre": "Fiction",
    "penulis": "Harper Lee",
    "penerbit": "J.B. Lippincott & Co.",
    "tahun_terbit": 1960
  },
  {
    "no" : 1002,
    "judul": "1984",
    "genre": "Dystopian",
    "penulis": "George Orwell",
    "penerbit": "Secker & Warburg",
    "tahun_terbit": 1949
  },
  {
    "no" : 1003,
    "judul": "The Great Gatsby",
    "genre": "Classic",
    "penulis": "F. Scott Fitzgerald",
    "penerbit": "Charles Scribners Sons",
    "tahun_terbit": 1925
  },
  {
    "no" : 1004,
    "judul": "The Catcher in the Rye",
    "genre": "Classic",
    "penulis": "J.D. Salinger",
    "penerbit": "Little, Brown and Company",
    "tahun_terbit": 1951
  },
  { 
    "no" : 1005,
    "judul": "Pride and Prejudice",
    "genre": "Romance",
    "penulis": "Jane Austen",
    "penerbit": "T. Egerton",
    "tahun_terbit": 1813
  },
  {
    "no" : 1006,
    "judul": "The Hobbit",
    "genre": "Fantasy",
    "penulis": "J.R.R. Tolkien",
    "penerbit": "George Allen & Unwin",
    "tahun_terbit": 1937
  },
  { 
    "no" : 1007,
    "judul": "Moby Dick",
    "genre": "Adventure",
    "penulis": "Herman Melville",
    "penerbit": "Harper & Brothers",
    "tahun_terbit": 1851
  },
  { 
    "no" : 1008, 
    "judul": "War and Peace",
    "genre": "Historical",
    "penulis": "Leo Tolstoy",
    "penerbit": "The Russian Messenger",
    "tahun_terbit": 1869
  },
  {  
    "no" : 1009,
    "judul": "The Alchemist",
    "genre": "Fiction",
    "penulis": "Paulo Coelho",
    "penerbit": "HarperTorch",
    "tahun_terbit": 1988
  },
  { 
    "no" : 1010,
    "judul": "The Da Vinci Code",
    "genre": "Mystery",
    "penulis": "Dan Brown",
    "penerbit": "Doubleday",
    "tahun_terbit": 2003
  },
  { 
    "no" : 1011,
    "judul": "Harry Potter and the Philosophers Stone",
    "genre": "Fantasy",
    "penulis": "J.K. Rowling",
    "penerbit": "Bloomsbury",
    "tahun_terbit": 1997
  },
  {
    "no" : 1012,
    "judul": "The Road",
    "genre": "Post-apocalyptic",
    "penulis": "Cormac McCarthy",
    "penerbit": "Alfred A. Knopf",
    "tahun_terbit": 2006
  },
  {
    "no" : 1013,
    "judul": "The Catcher in the Rye",
    "genre": "Fiction",
    "penulis": "J.D. Salinger",
    "penerbit": "Little, Brown and Company",
    "tahun_terbit": 1951
  },
  {
    "no" : 1014,
    "judul": "Brave New World",
    "genre": "Science Fiction",
    "penulis": "Aldous Huxley",
    "penerbit": "Chatto & Windus",
    "tahun_terbit": 1932
  },
  {
    "no" : 1015,
    "judul": "One Hundred Years of Solitude",
    "genre": "Magical Realism",
    "penulis": "Gabriel Garcia Marquez",
    "penerbit": "Harper & Row",
    "tahun_terbit": 1967
  },
  {
    "no" : 1016,
    "judul": "The Book Thief",
    "genre": "Historical",
    "penulis": "Markus Zusak",
    "penerbit": "Picador",
    "tahun_terbit": 2005
  },
  {
    "no" : 1017,
    "judul": "The Chronicles of Narnia",
    "genre": "Fantasy",
    "penulis": "C.S. Lewis",
    "penerbit": "Geoffrey Bles",
    "tahun_terbit": 1950
  },
  {
    "no" : 1018,
    "judul": "The Kite Runner",
    "genre": "Fiction",
    "penulis": "Khaled Hosseini",
    "penerbit": "Riverhead Books",
    "tahun_terbit": 2003
  },
  { 
    "no" : 1019,
    "judul": "The Shining",
    "genre": "Horror",
    "penulis": "Stephen King",
    "penerbit": "Doubleday",
    "tahun_terbit": 1977
  },
  {
    "no" : 1020,
    "judul": "Crime and Punishment",
    "genre": "Psychological Fiction",
    "penulis": "Fyodor Dostoevsky",
    "penerbit": "The Russian Messenger",
    "tahun_terbit": 1866
  }
]
';

$list_buku = json_decode($buku);
// foreach ($list_buku as $data_buku) {
//     // echo "No : {$data_buku->no} <br>";
//     // echo "Judul : {$data_buku->judul} <br>";
//     // echo "Genre : {$data_buku->genre} <br>";
//     // echo "Penulis : {$data_buku->penulis} <br>";
//     // echo "Penerbit : {$data_buku->penerbit} <br>";
//     // echo "Tahun Terbit : {$data_buku->tahun_terbit} <br>";
//     // echo "<hr>";
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="text-center mt-5">Kumpulan Novel</h1>
  <table class="table table-light table-striped mx-auto mt-4" style="width:70rem;">
  <thead class="table-dark text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Genre</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($list_buku as $data_buku) {
        echo " 
    <tr>
      <th scope=row'>{$data_buku->no}</th>
      <th>{$data_buku->judul}</th>
      <th>{$data_buku->genre}</th>
      <th>{$data_buku->penulis}</th>
      <th>{$data_buku->penerbit}</th>
      <th>{$data_buku->tahun_terbit}</th>
    </tr>";
    }
    ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
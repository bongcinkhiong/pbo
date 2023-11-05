<?php
// Buat Variabel
$contoh;

// Tipe Data integer
$a = 1;

// Tipe Data String
$b = "Kalimat";

// Cara menampilkan isi dari variabel
echo $b;
echo "<br>";

// Tipe data Array
$d = ['andiko', 'farhan', 'herman'];
echo $d[0];
echo "<br>";

$e['tampan'] = "Haikal";
echo $e['tampan'];
echo "<br>";

// Tipe data boolean
$c = true; // True dan False

if ($c == true) {
    echo "kondisinya lolos";
    echo "<br>";
} else {
    echo "kondisinya tidak lolos";
    echo "<br>";
}
var_dump($c);
echo "<br>";


// Percabangan (If Else, Else If, Switch)
$angka1 = 10;
$angka2 = 30;

// = masukin nilai ke variabel
// == buat membandingkan hanya data
// === buat membandingkan data serta tipe data

// If Else
if ($angka1 == '10') {
    echo "Benar";
    echo "<br>";
} else {
    echo "Salah";
    echo "<br>";
}

// Else If

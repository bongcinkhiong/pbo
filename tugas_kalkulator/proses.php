<?php

$angka1 = @$_GET['angka1'];
$angka2 = @$_GET['angka2'];
$simbol = @$_GET['simbol'];

// Kita tampilkan disini
if ($simbol == "+") {
    $hasil = $angka1 + $angka2;
    echo "Angka 1 : {$angka1} <br>";
    echo "Angka 2 : {$angka2} <br>";
    echo "Simbol : {$simbol} <br>";
    echo "Hasilnya : {$hasil} ";
}else if($simbol == "-"){
    $hasil = $angka1 - $angka2;
    echo "Angka 1 : {$angka1} <br>";
    echo "Angka 2 : {$angka2} <br>";
    echo "Simbol : {$simbol} <br>";
    echo "Hasilnya : {$hasil} <br>";
}else if($simbol == "*"){
    $hasil = $angka1 * $angka2;
    echo "Angka 1 : {$angka1} <br>";
    echo "Angka 2 : {$angka2} <br>";
    echo "Simbol : {$simbol} <br>";
    echo "Hasilnya : {$hasil} <br>";
}else if($simbol == "/"){
    $hasil = $angka1 / $angka2;
    echo "Angka 1 : {$angka1} <br>";
    echo "Angka 2 : {$angka2} <br>";
    echo "Simbol : {$simbol} <br>";
    echo "Hasilnya : {$hasil} <br>";
}
?>
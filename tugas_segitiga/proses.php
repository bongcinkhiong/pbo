<?php

$alas = @$_GET['alas'];
$tinggi = @$_GET['tinggi'];

// Kita tampilkan disini

$hasil = ($alas * $tinggi)/2;
echo "Alas : {$alas} <br>";
echo "Tinggi : {$tinggi} <br>";
echo "Hasilnya : {$hasil} ";

?>
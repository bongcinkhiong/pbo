<?php
// Perbandingan
// Lebih dari , Kurang Dari , Sama Dengan
$a = 100;
$b = 50;

if($a < $b){
    echo "Berhasil";
    echo "<br>";
}else{
    echo "Tidak Berhasil";
    echo "<br>";
}

// = , == , ===
// == : Sama yang sesuai "90", 90, '90'
// === : Sama yang identik, termasuk tipe datanya
$c = "90";

if ($c === 90){
    echo "Berhasil";
    echo "<br>";
}else{
    echo "Tidak Berhasil";
    echo "<br>";
}

// >= , <= 

$nilai = 75;

if ($nilai >= 75){
    echo "Anda Lulus";
    echo "<br>";
}else{
    echo "Anda Tidak Lulus";
    echo "<br>";
}

// Rasio

$nilai_akhir = 95;

if($nilai_akhir >= 75 && $nilai_akhir <= 80){
    echo "Lulus";
    echo "<br>";
    echo "Nilai A";
    echo "<br>";
}else if ($nilai_akhir >= 80 && $nilai_akhir <= 95){
    echo "Lulus";
    echo "<br>";
    echo "Nilai A+";
    echo "<br>";
}






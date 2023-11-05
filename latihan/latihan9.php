<?php

// sambung ke localhost
$host = mysqli_connect("localhost","root","");

if($host){
    echo "Koneksi Berhasil<br>";
}else{
    echo "Koneksi Gagal<br>";
}

//sambung ke database
$db = mysqli_select_db($host,"pbo");

if($db){
    echo "Koneksi Database Berhasil";
}else{
    echo "Koneksi Database Gagal";
}

?>
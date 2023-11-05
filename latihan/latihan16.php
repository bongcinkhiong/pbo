<?php
// What is construct ?
// Construct is methode yang di jalankan pertama kali saat kita inisiasi class
// _ _ C o n s t r u c t
// buat class
class orang{
    //property
    var $nama;
    var $warna;

    //method 1
    function __construct(){
        echo "Iini adalag isi dari method construct";
    }

    //method 2
    function tampilkan_nama(){
        echo "Saya salah jurusan";
    }

}

//instansiasi class
$lanjut = new orang();

//panggil methode ke 2 saja
$lanjut->tampilkan_nama();
?>
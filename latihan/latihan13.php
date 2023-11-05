<?php
// Latihan membuat class

// Buat Class
class siswa{
    //propertynya
    var $nama;
    var $warna;

    // Methodenya
    function tampilkan_nama(){
        return "Halo Nama Saya Jarjit \n";
    }

    function tampilkan_warna(){
        return "Halo Kulit Saya Cerah \n";
    }
}

// instansiasi = memganggil class
$orang = new siswa();

// memanggil methode yang ada di dalam class
// a.k.a object ( yang ada simbol ->)
echo $orang->tampilkan_nama();
echo $orang->tampilkan_warna();     
?>
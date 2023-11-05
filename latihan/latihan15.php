<?php
// Latihan Kalkulator OOP 

// Buat Class Kalkulator
class kalkulator{
    var $jumlah;

    // Metode 1(Operasi bilangan)
    function set_operasi(){
        // set property
        $angka1 = 10;
        $angka2 = 10;

        // set operasi bilangan
        $this->jumlah = $angka1 + $angka2;
    }

    // Metode 2 (tampilkan hasilnya)
    function set_hasil(){
        echo $this->jumlah;
    }
}
$result = new kalkulator();
$result ->set_operasi();
$result ->set_hasil();

?>
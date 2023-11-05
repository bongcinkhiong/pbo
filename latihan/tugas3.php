<?php
// Latihan Kalkulator OOP 

// Buat Class Kalkulator
class kalkulator{
    var $jumlah;

    // Metode 1(Operasi bilangan)
    function set_operasi(){
        // set property
        $berat_badan1 = 75;
        $tinggi =  172;

        // set operasi bilangan
        $this->jumlah = $berat_badan1 * $berat_badan1 / $tinggi;
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
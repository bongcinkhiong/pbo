<?php

// Latihan menggunakan property

// Buat class
class mobil{
    // ban & setir
    var $ban;
    var $setir;

    // Set isi dari Property
    function set_jenis_ban(){
        // hard, soft, intermadate
        $this->ban ="hard";
    }

    // Kita printtt
    function print_ban(){
        // Kita keluaran isi dari valaue property
        echo $this->ban;
    }
}
$test = new mobil();
$test->set_jenis_ban();
$test->print_ban();

// Cara yawng benar untuk memanggil dari property
// 1. Set Propertinya
// 2. Isi Propertinya 
// 3. Olah Propertinya
?>
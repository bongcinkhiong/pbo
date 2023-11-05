<?php
// isset : fungsi bawaan untuk mengecek sebuah variabel berisikan data nilai (value) atau tidak, lalu mengembalikan nilai berupa boolean (true or false)

$nama = null;

cek_nama($nama);

function cek_nama($nama){
    if(isset($nama)){
        echo "berisi nilai \n";
    }else{
        echo "Salah Tak Punya Nilai \n";
    }
}

?>
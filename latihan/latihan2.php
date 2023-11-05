<?php
// Membuat function
function tampilkan_nama(){
    echo "Nama Saya Poenya";
    echo "<br>";
}

// Memanggil Function
tampilkan_nama();


// Menggunakan Switch
$angka = 10;

switch($angka){
    case 1:
        echo "isi variabelnya satu";
        echo "<br>";
        break;
    case 2:
        echo "isi variabelnya dua";
        echo "<br>";
        break;
    case 3:
        echo "isi variabelnya tiga";
        echo "<br>";
        break;
    default:
        echo "Silahkan Coba lagi";
        echo "<br>";
        break;
}

// Perbandingan
// Lebih dari, Kurang dari, sama dengan
$kkm = 75;
$nilai = 75;
// 75 Kebawah ga lulus
// diatas 75 lulus

if ($nilai >= 75){
    echo "Anda Lulus";
}else if ($nilai < 75){
    echo "Anda Tidak Lulus";
}
?>
<?php
// Array : Kumpulan data 
$siswa = [
    "Ziqry",
    "Luffy",
    "Arry"
];

echo $siswa[1];

// Memanggil semua nama yang ada di array
foreach($siswa as $listsiswa){
    echo $listsiswa . "<br>";
}


// Array Terindeks itu : 0
// Array Asosiatif : Custom
$siswa_baru = [
    'nama' => 'Nurul Mustofa',
    'kelas' => 'SIJA',
    'jenis kelamin' => 'pria'
];

echo "Nama : {$siswa_baru['nama']}";
echo "Kelas : {$siswa_baru['kelas']}";
echo "Jenis Kelamin : {$siswa_baru['jenis kelamin']}";


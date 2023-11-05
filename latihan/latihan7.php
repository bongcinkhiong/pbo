<?php
// Implode : gabungkan string
// Explode : memisahkan string menjadi beberapa bagian

echo "<h2>Belajar Implode dan Explode</h2> <br>";

// Variabel yang disiapkan
$kalimat = "Belajar Coding di SMK JP 1";

// memisahkan menjadi array
$data = explode(" ", $kalimat);

print_r($data);

echo "<br>";
echo "<br>";

echo "Data 1 = " . $data[0];
echo "<br>";

echo "Data 2 = " . $data[1];
echo "<br>";

echo "Data 3 = " . $data[2];
echo "<br>";

echo "Data 4 = " . $data[3];
echo "<br>";

echo "Data 5 = " . $data[4];
echo "<br>";

echo "Data 6 = " . $data[5];
echo "<br>";

?>
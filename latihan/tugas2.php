<?php
$UH = 100;
$UAS = 100;
$raport = ($UH + $UAS) / 2;

if ($raport >= 95 && $raport <=100){
    echo "Anda Lulus dengan nilai {$raport}", "<br>";
    echo "Mendapatkan : A";
}else if ($raport >= 80 && $raport <=94){
    echo "Anda Lulus dengan nilai {$raport}", "<br>";
    echo "Mendapatkan : B";
}else if ($raport >= 75 && $raport <=79){
    echo "Anda Lulus dengan nilai {$raport}", "<br>";
    echo "Mendapatkan : C";
}else if ($raport >= 50 && $raport <=75){
    echo "Anda Tidak Lulus dengan nilai {$raport}", "<br>";
    echo "Mendapatkan : D";
}else if ($raport >= 0 && $raport <=49){
    echo "Anda Tidak Lulus dengan nilai {$raport}", "<br>";
    echo "Mendapatkan : E";
}



?>
<?php
// Variabel lokal
 function haloDunia(){// scope
    global $nama; //akses ke luar scope
    $nama = "Wahid Abdullah"; //lokal
 }// scope

 haloDunia();
 echo $nama;
?>
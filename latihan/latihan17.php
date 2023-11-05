<?php

//what is desctruct
// desctruct is method kebalikan construct

//buat class
class xiirpl2{
    //property
    var $nama;
    var $asal;

    //construct
    function __construct(){
        echo "Aku sipaling rajin <br>";
    }

    //method biasa
    function dava(){
        echo "Aku mah pemula <br>";
    }

    //destruct
    function __destruct(){
        echo "Ajarin dong puh <br>";
    }
}

//instansiasi class
$murid = new xiirpl2();

//object towe
$murid->dava();
?>
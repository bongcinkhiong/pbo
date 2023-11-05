<?php

// function for connect to database

function db(){
    return mysqli_connect("localhost","root",null,"latihan_mvc");
}

// functio for select table and explode it into arrray
function get_table(){
    $query = mysqli_query(db(),"select * from user");

    // mobil semua isi table, lalu mari kita ledakan
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $hasil;
}
?>
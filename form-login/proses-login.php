<?php

$username = @$_REQUEST['username'];
$password = @$_REQUEST['password'];

// = : untuk mendefinisikan variabel
// == : disamakan isinya
// === : disamakan isinya + sesuai tipe datanya

if($username !== "rizkiakbar2302@gmail.com"){
    die("Username Tidak Terdaftar");
}

if($password !== "12345"){
    die("Password Anda Salah!");
}

echo "Selamat {$username}, Anda Berhasil Login!";

?>
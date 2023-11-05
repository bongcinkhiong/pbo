<?php

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$daftar = mysqli_query($host,"insert into user values ('','$username','$password')");

var_dump($daftar);

?>
<?php
include "connect.php";

$user = $_POST['user'];
$pass = $_POST['pass'];
$name_complete = $_POST['full_name'];

$query = mysqli_query($host,"INSERT INTO user VALUES (null,'$user','$pass','$name_complete','admin')");

if($query){
    echo "Anda telah berhasil dafatr";
}else{
    echo "Anda gagal daftar, silahkan coba laagi";
}
?>
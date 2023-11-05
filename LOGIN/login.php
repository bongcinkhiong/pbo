<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($host,"select * from user where username='$username' and password='$password' ");
$cek = mysqli_num_rows($query);

if($cek == 1){
    echo "Selamat Datang {$username}, Anda berhasil login";
}else if($cek == 0){
    header('Location:index.php');
    echo "Anda Gagal login, Silahkan login kembali";
}

?>
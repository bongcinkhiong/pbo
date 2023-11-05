<?php
// mengaktifkan session php
session_start();

//hubungkan koneksinya
include "connect.php";

// menangkap data yang dikirim dari form
$user = $_POST['user'];
$pass = $_POST['pass'];

$data = mysqli_query($host,"SELECT * FROM user WHERE username='$user' AND password='$pass'");

while($split = mysqli_fetch_array($query)){
    $role = $split['role'];
}

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("Location:admin/index.php");
}else{
    header("Location:index.php?pesan=gagal");
}

?>
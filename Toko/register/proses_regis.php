<?php
include '../connect.php';

// ambil variabel
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// perintah tambah data
$daftar = mysqli_query($host,"insert into user values
(
    null,
    '$username',
    '$password',
    '$role'
    )");

//notifikasi
if($daftar){
    echo "
    <script>
    alert('Akun Berhasil di daftarkan');
    window.location.href = '../login/login.php';
    </script>
    ";
}
?>
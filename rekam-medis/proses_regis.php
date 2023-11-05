<?php
include 'config.php';

// ambil variabel
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$role = $_POST['role'];

// perintah tambah data
$daftar = mysqli_query($host,"insert into user values
(
    null,
    '$username',
    '$password',
    '$nama_lengkap',
    '$role'
    )");

//notifikasi
if($daftar){
    echo "
    <script>
    alert('Akun Berhasil di daftarkan');
    window.location.href = 'index.php';
    </script>
    ";
}

// $insert = mysqli_query($host, "INSERT INTO user VALUES (null,'$username','$password','$nama_lengkap','$role')");

// // cek
// if($insert){
//     echo "
//     <script>
//     alert('Akun Berhasil Daftar');
//     window.location.href = 'index.php';
//     </script>
//     ";
// }else{
//     echo "
//     <script>
//     alert('Akun Gagal Daftar');
//     window.location.href = 'register.php';
//     </script>
//     ";
// }
?>
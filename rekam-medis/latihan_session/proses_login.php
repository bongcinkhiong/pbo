<?php
// tiket session
session_start();

// konek tu database
include 'config.php';

// ambil data dari form
$user = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($host, "SELECT * FROM user WHERE username='$user' AND password='$pass'");

// menyeleksi menghitung data yang ditemukan
$cek = mysqli_num_rows($login);

// filter
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    
    //jika role dokter
    if($data['role'] == "dokter"){
        //tiket untuk masuk ke halaman dokter
        $_SESSION['username'] = $user;
        $_SESSION['role'] = "dokter";
        //mengarahkan
        header("Location:halaman_dokter.php");
    }
    
    else if($data['role'] == "pasien"){
        $_SESSION['username'] = $user;
        $_SESSION['role'] = "pasien";
        header("Location:halaman_pasien.php");
    }

    // jika tidak ada data yang cocok
    else{
        header("Location:index.php?pesan=gagal");
    }
}else{
    //jika tidak ada data yang terdeteksi
    header("Location:index.php?pesan=gagal");
}
    
?>
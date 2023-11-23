<?php
session_start();

include 'template/header.php';
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// isi username terpanggil
// jika username terdapat di tabel user dengan rolenya pasien, maka arahkan ke halaman pasien
// jika username terdapat di tabel user dengan rolenya dokter, maka arahkan ke halaman dokter

// QUERY MULTI LOGIN PASIEN
$user_pasien = mysqli_query($host,"select * from user where role='pasien' AND username='$username' ");

// QUERY MUTLI LOGIN DOKTER
$user_dokter = mysqli_query($host,"select * from user where role='dokter' AND username='$username' ");

// QUERY MUTLI LOGIN ADMIN
$user_admin = mysqli_query($host,"select * from user where role='admin' AND username='$username' ");

$cik = mysqli_query($host, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$test = mysqli_num_rows($cik);

// filter
if($test > 0){
    $data = mysqli_fetch_assoc($cik);
    
    //jika role dokter
    if($data['role'] == "dokter"){
        //tiket untuk masuk ke halaman dokter
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "dokter";
        //mengarahkan
        header("Location:./dokter/index.php");
    }
    
    else if($data['role'] == "pasien"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "pasien";
        header("Location:./pasien/index.php");
    }

    else if($data['role'] == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("Location:./admin/index.php");
    }

    // jika tidak ada data yang cocok
    else{
        header("Location:index.php?pesan=gagal");
    }
}else{
    //jika tidak ada data yang terdeteksi
    header("Location:index.php?pesan=gagal");
}


// KELUARKAN DATA
foreach($user_pasien as $data){
    $user = $data['role'];
}
foreach($user_dokter as $data){
    $user = $data['role'];
}
foreach($user_admin as $data){
    $user = $data['role'];
}

//Desicion to where land for
if($user == "pasien"){
    echo"
    <script>
    window.location.href = 'pasien/index.php';
    </script>
    ";
}else if($user == "dokter"){
    echo"
    <script>
    window.location.href = 'dokter/index.php';
    </script>
    ";
}else if($user == "admin"){
    echo"
    <script>
    window.location.href = 'admin/index.php';
    </script>
    ";
}else{
    echo"
    
    <script>
    alert('USER TIDAK TERDAFTAR, SILAHKAN REGSITER');
    window.location.href = 'index.php';
    </script>
    ";
}

include 'template/footer.php';
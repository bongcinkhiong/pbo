<?php
include 'config.php';

// ambil nilai dari form into variabel
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$role = $_POST['role'];

// Eliminasi Role
// jika rolenya itu admin = insert into user
// jika rolenya itu pasien = insert into user + insert into detail_pasien
// jika rolenya itu dokter = insert into user + insert into detail_dokter

// untuk admin
if($role == "admin"){
    $insert = mysqli_query($host, "INSERT INTO user VALUES(null, '$username','$password','$nama_lengkap','$role')");
    if($insert){
        echo "
        <script>
        alert('Akun Admin Berhasil Daftar');
        window.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Akun Gagal Daftar');
        window.location.href = 'register.php';
        </script>
        ";
    }

// untuk dokter
}elseif($role == "dokter"){
    $insert = mysqli_query($host, "INSERT INTO user VALUES(null, '$username','$password','$nama_lengkap','$role')");
    $insert .= mysqli_query($host, "INSERT INTO detail_dokter VALUES(null, '1,'$name','spesialis')");

    if($insert){
        echo "
        <script>
        alert('Akun Dokter Berhasil Daftar');
        window.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Akun Gagal Daftar');
        window.location.href = 'register.php';
        </script>
        ";
    }
// untuk pasien
}elseif($role == "pasien"){
    $insert = mysqli_query($host, "INSERT INTO user VALUES(null, '$username','$password','$nama_lengkap','$role')");
    $insert .= mysqli_query($host, "INSERT INTO detail_pasien VALUES(null, '1','$name','alamat','gender','00')");

    if($insert){
        echo "
        <script>
        alert('Akun Pasien Berhasil Daftar');
        window.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Akun Gagal Daftar');
        window.location.href = 'register.php';
        </script>
        ";
    }
}else{
    echo "
    <script>
    alert('Akun Gagal Daftar');
    window.location.href = 'register.php';
    </script>
    ";
}

?>
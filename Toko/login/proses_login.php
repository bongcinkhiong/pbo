<?php 
session_start();
require '../connect.php';

$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

$query = mysqli_query($host, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["role"] == "admin"){

        $_SESSION["username"] = $data["username"];
        $_SESSION["role"] = $data["role"];

        header("Location:../admin/index.php");
    }else if($data["role"] == "penjual"){

        $_SESSION["username"] = $data["username"];
        $_SESSION["role"] = $data["role"];

        header("Location:../penjual/index.php");
    }else if($data["role"] == "pembeli"){

        $_SESSION["username"] = $data["username"];
        $_SESSION["role"] = $data["role"];

        header("Location:../pembeli/index.php");
    }
}else{
    echo '
        <script type="text/javascript">
            alert("Akun tidak ditemukan");
            window.location: "login.php";
        </script>
    ';
}

if($user == "pembeli"){
    echo"
    <script>
    window.location.href = '../pembeli/index.php';
    </script>
    ";
}else if($user == "penjual"){
    echo"
    <script>
    window.location.href = '../penjual/index.php';
    </script>
    ";
}else if($user == "admin"){
    echo"
    <script>
    window.location.href = '../admin/index.php';
    </script>
    ";
}else{
    echo"
    
    <script>
    alert('USER TIDAK TERDAFTAR, SILAHKAN REGSITER');
    window.location.href = '../login/login.php';
    </script>
    ";
}

?>
<?php include '../template/header.php'?>
<?php
    session_start();
        if($_SESSION['role']==""){
        header("Location:../login/login.php?pesan=gagal");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <p>Halo Selamat Datang <b><?php echo $_SESSION['username'];?></b></p>

    </center>
    <a href="../logout.php">Logout</a>

</body>
</html>
<?php include '../template/footer.php'?>
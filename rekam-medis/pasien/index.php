<?php include '../template/header.php'?>
<!-- isi content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //tiket masuk ke halaman dokter
    session_start();
    
    // apakah anda mempunyai role?
    if($_SESSION['role']==""){
        header("Location:../index.php?pesan=gagal");
    }
    ?>
    <center>
        <h2>Halaman PASIEN</h2>
        <p>Halo   <b><?php echo $_SESSION['username'];?></b></p>
    </center>
    <a href="../logout.php">Logout</a>
</body>
</html>
<?php include '../template/footer.php'?>
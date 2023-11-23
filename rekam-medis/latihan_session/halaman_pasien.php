<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pasien</title>
</head>
<body>
    <?php
    //tiket masuk ke halaman dokter
    session_start();
    
    // apakah anda mempunyai role?
    if($_SESSION['role']==""){
        header("Location:index.php?pesan=gagal");
    }
    ?>
    <h1>Halaman Pasien</h1>
    <p>Halo <b><?php echo $_SESSION['username'];?></b></p>
    <a href="logout.php">Keluar Halaman</a>
</body>
</html>
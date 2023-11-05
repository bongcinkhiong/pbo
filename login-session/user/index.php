<html>
    <head>
        <title>Halaman User</title>
    </head>
    <body>
        <h2>Halaman User</h2>

        <?php
        session_start();
            if($_SESSION['status'] != 'login'){
                header("Location: ../index.php?pesan=belum_login");
            }
        ?>

        <h4>Selamat datang User</h4>
    </body>
</html>
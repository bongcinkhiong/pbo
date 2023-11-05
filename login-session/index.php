<html>
    <head>
        <title>Login Menggunakan Session</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <h3>Silahkan untuk Login</h3>

        <?php
        if(isset($_GET['pesan'])){
            // untuk akun belum di register
            if($_GET['pesan'] == "gagal"){
                echo "Login Gagal! user dan pass salah";
            // untuk akun yang sudah keluar
            }else if($_GET['pesan'] == "logout"){
                echo "Anda berhasil loogout";
            // mencegah untuk mengakses langsung ke halaman dashboard
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman ini";
            }
        }
        ?>
        <form action="proses_login.php" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="user" id="">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="pass" id="">
            </div>
            <div>
                <input type="submit" value="Masuk" name="login">
            </div>
        </form>
        <p>Anda belum punya akun? <a href="regis.php">Daftar Sekarang</a></p>
    </body>
</html>
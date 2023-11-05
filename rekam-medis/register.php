<html>
    <head>
        <title>Registrasi Akun</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <h3>Di Aplikasi Rekam Medis</h3>
        <form action="add_regis.php" method="post">
            <div>
                <label for="">username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap">
            </div>
            <div>
                <label for="role">Daftar Akun Sebagai</label>
                <select name="role" id="">
                    <option value="pasien">pasien</option>
                    <option value="admin">admin</option>
                    <option value="dokter">dokter</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Daftar">
            </div>
        </form>
    </body>
</html>
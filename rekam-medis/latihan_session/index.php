<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Login Session Multi Account</title>
</head>
<body>
    <h1>Login</h1>
    <h4>Masukan Username dan Passwordnya</h4>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal" ){
            echo"
            <script>
            alert('Username dan Password tidak sesuai!')
            </script>
            ";
        }
    }
    ?>

    <form action="proses_login.php" method="post">
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="login">
        </div>
    </form>
</body>
</html>
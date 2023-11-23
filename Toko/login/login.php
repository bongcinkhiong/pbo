<?php
    include '../template/link.php';

    if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal" ){
        echo"
        <script>
        alert('Login Eror Silahkan coba kembali!')
        </script>
        ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Login</h2>
            </div>
            <form action="proses_login.php" method="post" class="form">
                <div class="input-group mb-3">
                    <input type="text" name="username" placeholder="username" class="form-control">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person"></i>
                    </span>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control" >
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key"></i>
                    </span>
                </div>

                <div class="row">
                    <div class="col-2">
                        <input type="checkbox">
                    </div>
                    <div class="col-1">
                        <p><b>Remember </b></p>
                    </div>
                </div>
            
                <input type="submit" id="submit-btn" class="btn btn-success" Value="Login"> <br>
                <center>
                    <p>Don't have account yet?<a href="../register/register.php" > Register</a></p>
                </center>
            </form>
        </div>
    </div>
</body>
</html>


<?php
include '../connect.php';
include '../template/header.php';
$id = $_GET['id'];
$cek = mysqli_query($host,"select * from user where id_user=$id");
while ($user = mysqli_fetch_array($cek)){
    $id = $user['id_user'];
    $username = $user['username'];
    $password = $user['password'];
    $role = $user['role'];
}       
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <div class="container">

    <h2 class="mt-4">Edit Data User</h2> 

    <form action="function.php" method="post">
        <div>
            <input type="hidden" name="id_user" value="<?php echo $id ?>">
        </div>
        <div>
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $password ?>">
        </div>
        <div>
            <label for="">Roles</label>
            <select name="role" id="role" class="form-select">
                <option value="<?php echo $role ?>">Admin</option>
                <option value="<?php echo $role ?>">Pembeli</option>
                <option value="<?php echo $role ?>">Penjual</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Edit" name="edit_user" class="btn btn-primary mt-4">
        </div>
    </form>
    </div>
</body>
</html>

<?php  include'../template/footer.php'?>
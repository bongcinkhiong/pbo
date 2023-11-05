<?php
include("config.php");
$id = $_GET['id'];
$cek = mysqli_query($host,"select * from user where id=$id");
while ($user = mysqli_fetch_array($cek)){
    $name = $user['nama'];
    $email = $user['email'];
    $no_hp = $user['no_hp'];
}    
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <a href="index.php">Back To Home</a>
    <h2>Edit Data</h2>

    <form action="config.php" method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <div>
            <label for="">Name</label>
            <input type="text" name="nama" value="<?php echo $name ?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $email ?>">
        </div>
        <div>
            <label for="">No Hp</label>
            <input type="number" name="no_hp" value="<?php echo $no_hp ?>">
        </div>
        <div>
            <input type="submit" value="edit" name="edit">
        </div>
    </form>
</body>
</html>
<?php 
include '../template/header.php';
include '../connect.php';
$table = mysqli_query($host,"select * from user");
$barang = mysqli_query($host,"select * from barang");
$i = 1;
$p = 1;
?>

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
        <h2>Halo Selamat Datang <b><?php echo $_SESSION['username'];?></b></h2>
    </center> <br>
    <div class="container">
        <div class="d-flex">
            <div class="p-2 flex-fill ">
        
            <h3>Data User</h3>
            <a href="add.php" class="btn btn-primary mb-2">Tambah Data</a>
        
            <table border="1" class="table table-striped">
            <tr class="text-center">
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>   
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                while($user = mysqli_fetch_array($table))
                {
                    echo "<tr class='text-center'>";
                    echo "<td>".$i++."</td>"; 
                    echo "<td>".$user['username']."</td>";    
                    echo "<td>".$user['password']."</td>";    
                    echo "<td>".$user['role']."</td>";    
                    echo "<td>
                    <a class='btn btn-success' href='edit.php?id=$user[id_user]'>Edit</a>    
                    <a class='btn btn-danger' href='delete.php?id=$user[id_user]'>Delete</a>
                    </td>";     
                    echo "</tr>";
                }
            ?>
            </table>
        </div>

            <div class="p-2 flex-fill ">
            <h3>Data Barang</h3>
            <a href="add_barang.php" class="btn btn-primary mb-2">Tambah Barang</a>
        
            <table border="1" class="table table-striped">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kuantitas Barang</th>
                <th>Harga</th> 
                <th>Status</th>  
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                while($ck = mysqli_fetch_array($barang))
                {
                    echo "<tr class='text-center'>";
                    echo "<td>".$p++."</td>"; 
                    echo "<td>".$ck['nama_barang']."</td>";    
                    echo "<td>".$ck['kuantitas_barang']."</td>";    
                    echo "<td>Rp".$ck['harga']."</td>";    
                    echo "<td>".$ck['kondisi']."</td>";    
                    echo "<td>
                    <a class='btn btn-success' href='edit_barang.php?id=$ck[id_barang]'>Edit</a>    
                    <a class='btn btn-danger' href='delete_barang.php?id=$ck[id_barang]'>Delete</a>
                    </td>";    
                    echo "</tr>";
                }
            ?>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php include '../template/footer.php'?>
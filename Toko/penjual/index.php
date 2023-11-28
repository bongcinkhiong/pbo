<?php 
include '../template/header.php';
include '../connect.php';
$barang = mysqli_query($host,"select * from barang");
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
            <div class="">
            <h3>Data Barang</h3>
            <a href="create.php" class="btn btn-primary mb-2">Tambah Barang</a>
        
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
                    <a class='btn btn-success' href='edit.php?id=$ck[id_barang]'>Edit</a>    
                    <a class='btn btn-danger' href='delete.php?id=$ck[id_barang]'>Delete</a>
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
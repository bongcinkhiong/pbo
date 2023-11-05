<?php
include("config.php");
$table = mysqli_query($host,"select * from user");
$i = 1;
?>

<html>
    <head>
        <title>CRUD 1</title>
    </head>
    <body>
        <h2>Data User</h2>
        <a href="add.php">Tambah Data</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Hp</th>   
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                while($user = mysqli_fetch_array($table))
                {
                    echo "<tr>";
                    echo "<td>".$i++."</td>"; 
                    echo "<td>".$user['nama']."</td>";    
                    echo "<td>".$user['email']."</td>";    
                    echo "<td>".$user['no_hp']."</td>";    
                    echo "<td>"."<a href='edit.php?id=$user[id]'>edit</a>"."</td>";    
                    echo "<td>"."<a href='delete.php?id=$user[id]'>delete</a> "."</td>";    
                    echo "</tr>";
                }
            ?>
        </table>        
    </body>
</html>

<?php
include("connect.php");
$table = mysqli_query($host,"select * from buku");
$i = 1;
?>

<html>
    <head>
        <title>Perpustakaan</title>
    </head>
    <body>
        <h2>Data Buku</h2>
        <a href="add.php">Tambah Buku</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Jenis</th>
                <th>Judul</th>
                <th>Pengarang</th> 
                <th>Tahun Terbit</th>
                <th>Status</th>  
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                while($buku = mysqli_fetch_array($table))
                {
                    echo "<tr>";
                    echo "<td>".$i++."</td>"; 
                    echo "<td>".$buku['jenis']."</td>";    
                    echo "<td>".$buku['judul']."</td>";    
                    echo "<td>".$buku['pengarang']."</td>";    
                    echo "<td>".$buku['tahun_terbit']."</td>";    
                    echo "<td>".$buku['status']."</td>";    
                    echo "<td>"."<a href='edit.php?id=$buku[id]'>edit</a>"."</td>";    
                    echo "<td>"."<a href='delete.php?id=$buku[id]'>delete</a> "."</td>";    
                    echo "</tr>";
                }
            ?>
        </table>        
    </body>
</html>

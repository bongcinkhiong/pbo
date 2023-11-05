<html>
    <head>
        <title>CRUD OOP</title>
    </head>
    <body>
        <h1>Data User</h1>
        <a href="add.php">Tambah Data</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Usia</th>
            </tr>
            <?php
            include 'config.php';
            $db = new db();
            $no = 1;
            foreach($db->show_data() as $data){
                echo"
                <tr>
                <td>".$no++."</td>
                <td>{$data['nama']}</td>    
                <td>{$data['email']}</td>    
                <td>{$data['no_hp']}</td>    
                <td><a href='update.php?id={$data['id']}&aksi=update'>update</a></td>
                <td><a href='proses_add.php?id={$data['id']}&aksi=hapus'>delete</a></td>
                </tr>
                ";
            }    
            ?>
        </table>
        <a href="">Edit</a>
    </body>
</html>
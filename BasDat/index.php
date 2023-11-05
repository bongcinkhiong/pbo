<html>
    <head>
        <title>Tampilkan Data dari Localhost</title>
    </head>
    <body>
        <h1>Data Penjual</h1>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nama Penjual</th>
                <th>Alamat</th>
            </tr>
            <?php
            include 'connect.php';
            $query = mysqli_query($host,"select * from penjual");
            $nomor = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama_penjual']; ?></td>
                <td><?php echo $data['alamat_penjual']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
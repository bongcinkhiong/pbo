<html>

<head>
    <title>CRUD SEDERHANA</title>
</head>

<body>
    <div class="judul">
        <h1>CRUD PHP</h1>
        <h2>Menampilkan data dari DB</h2>
    </div>
    <h2>Data Buku</h2>
    <table border="1" class="table">
        <tr>
            <th>ID Katalog</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>

        <?php
        include "connect.php";
        $query = mysqli_query($host, "select * from buku");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['id_katalog'] ?></td>
                <td><?php echo $data['judul_buku'] ?></td>
                <td><?php echo $data['pengarang'] ?></td>
                <td><?php echo $data['thn_terbit'] ?></td>
                <td><?php echo $data['penerbit'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
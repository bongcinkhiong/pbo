<html>
    <head>
        <title>Tambah Data | CRUD OOP</title>
    </head>
    <body>
        <h1>Tambah Data</h1>
        <a href="index.php">Back</a>
        <form action="proses_add.php?aksi=tambah" method="post">
            <div>
                <label for="">Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label for="">No Hp</label>
                <input type="number" name="no_hp">
            </div>
            <input type="submit" value="Add">
        </form>
    </body>
</html>

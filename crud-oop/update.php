<?php

include 'config.php';
$db = new db();
foreach($db->detail_data($_GET['id']) as $data);

?>

<html>
    <head>
        <title>UPDATE DATA | CRUD OOP</title>
    </head>
    <body>
        <h1>Update data</h1>
        <form action="proses.php?aksi=update" method="post">
        <div>
            <div>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
            </div>
            <label for="">Nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama']  ?>">
            </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $data['email']  ?>">
        </div>
        <div>
            <label for="">No Hp</label>
            <input type="number" name="no_hp" value="<?php echo $data['no_hp']  ?>">
        </div>
        <input type="submit" value="Update">
        </form>
    </body>
</html>
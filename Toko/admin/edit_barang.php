<?php
include '../connect.php';
include '../template/header.php';
$id = $_GET['id'];
$cek = mysqli_query($host,"select * from barang where id_barang=$id");
while ($user = mysqli_fetch_array($cek)){
    $id = $user['id_barang'];
    $nama_barang = $user['nama_barang'];
    $kuantitas_barang = $user['kuantitas_barang'];
    $harga = $user['harga'];
    $kondisi = $user['kondisi'];
}       
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <div class="container">

    <h2 class="mt-4">Edit Data Barang</h2> 

    <form action="function.php" method="post">
        <div>
            <input type="hidden" name="id_barang" value="<?php echo $id ?>">
        </div>
        <div>
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $nama_barang ?>">
        </div>
        <div>
            <label for="">Kuantitas Barang</label>
            <input type="number" name="kuantitas_barang" class="form-control" value="<?php echo $kuantitas_barang ?>">
        </div>
        <div>
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $harga ?>">
        </div>
        <div>
            <label for="">Kondisi</label>
            <select name="kondisi" id="kondisi" class="form-select">
                <option value="<?php echo $kondisi ?>">Baru</option>
                <option value="<?php echo $kondisi ?>">Bekas</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Edit" name="edit_barang" class="btn btn-primary mt-4">
        </div>
    </form>
    </div>
</body>
</html>

<?php  include'../template/footer.php'?>
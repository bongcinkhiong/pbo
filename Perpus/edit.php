<?php
include("connect.php");
$id = $_GET['id'];
$dit = mysqli_query($host,"select * from buku where id=$id");
while ($buku = mysqli_fetch_array($dit)){
    $jenis = $buku['jenis'];
    $judul = $buku['judul'];
    $pengarang = $buku['pengarang'];
    $tahun_terbit = $buku['tahun_terbit'];
    $status = $buku['status'];
}    
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <a href="Home.php">Back To Home</a>
    <h2>Edit Data Perpus</h2>

    <form action="proses_edit.php" method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <div>
            <label for="">Jenis</label>
                <select name="jenis" id="jenis" value="<?php echo $jenis ?>">
                    <option value="buku">Buku</option>
                    <option value="anggota">Anggota</option>
                    <option value="peminjaman">Peminjaman</option>
                </select>
        </div>
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" value="<?php echo $judul ?>">
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" value="<?php echo $pengarang ?>">
        </div>
        <div>
            <label for="">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?php echo $tahun_terbit ?>">
        </div>
            <div>
                <label for="">Status</label>
                <select name="status" id="status" value="<?php echo $status ?>">
                    <option value="tersedia">Tersedia</option>
                    <option value="dipinjam">Di Pinjam</option>
                    <option value="dikembalikan">Di Kembalikan</option>
                </select>
            </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
</body>
</html>
<?php
include("connect.php");

//jika tombol tambah tertekan
$jenis = $_POST['jenis'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$status = $_POST['status'];
    
//insert ke dalawm table
$tambah = mysqli_query($host,"insert into buku values(null,'$jenis','$judul','$pengarang','$tahun_terbit','$status')");

if ($tambah){
    ?>
    <script>
        alert("Data Berhasil di Tambah");
        window.location.href = "Home.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Data Berhasil di Tambah");
        window.location.href = "add.php";
    </script>
    <?php
}
?>
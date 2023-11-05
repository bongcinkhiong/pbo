<?php
include("connect.php");

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$status = $_POST['status'];

$edit = mysqli_query($host,"update buku set jenis='$jenis', judul='$judul',pengarang ='$pengarang',tahun_terbit='$tahun_terbit',status='$status' where id='$id' ");

if($edit){
    ?>
    <script>
        alert("Data Berhasil di edit");
        window.location.href = "Home.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Data tidak berhasil di Edit");
        window.location.href = "edit.php";  
    </script>
    <?php
}
?>
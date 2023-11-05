<?php
include("connect.php");

//ambil id dari form
$id = $_GET['id'];

//perintah untuk delete dimana id db sama dengan id form
$delete = mysqli_query($host,"delete from buku where id=$id");
?>
<script>
    alert("Data Berhasil di Hapus");
    window.location.href = "Home.php";
</script>
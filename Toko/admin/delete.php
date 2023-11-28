<?php
include '../connect.php';

//ambil id dari form
$id = $_GET['id'];

//perintah untuk delete dimana id db sama dengan id form
$delete = mysqli_query($host,"delete from user where id_user=$id");
?>
<script>
    alert("Data Berhasil di Hapus");
    window.location.href = "../admin/index.php";
</script>
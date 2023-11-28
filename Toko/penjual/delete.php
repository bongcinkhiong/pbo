<?php
include '../connect.php';

//ambil id dari form
$id = $_GET['id'];

//perintah untuk delete dimana id db sama dengan id form
$delete = mysqli_query($host,"delete from barang where id_barang=$id");
?>
<script>
    alert("Data Berhasil di Hapus");
    window.location.href = "../penjual/index.php";
</script>
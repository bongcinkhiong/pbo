<?php

// Connect to Database
$host = mysqli_connect("localhost","root",null,"crud");

if(isset($_POST['tambah'])){

$name = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

$tambah = mysqli_query($host,"insert into user values(null,'$name','$email','$no_hp')");

        if ($tambah){
            ?>
            <script>
                alert("Data Berhasil di Tambah");
                window.location.href = "index.php";
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
}

if(isset($_POST['edit'])){

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

$edit = mysqli_query($host,"update user set nama='$nama', email='$email',no_hp ='$no_hp' where id='$id' ");

        if($edit){
            ?>
            <script>
                alert("Data Berhasil di edit");
                window.location.href = "index.php";
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
}

?>
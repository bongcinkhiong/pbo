<?php

include '../connect.php';


if(isset($_POST['add_user'])){

    $username = $_POST['username'];
    $password = $_POST['password'];   
    $role = $_POST['role'];

    $add_user = mysqli_query($host,"insert into user values(null,'$username','$password','$role')");

    if ($add_user){
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

if(isset($_POST['add_barang'])){

    $nama_barang = $_POST['nama_barang'];
    $kuantitas_barang = $_POST['kuantitas_barang'];   
    $harga = $_POST['harga'];
    $kondisi = $_POST['kondisi'];
        
    $add_barang = mysqli_query($host,"insert into barang values(null,'$nama_barang','$kuantitas_barang','$harga','$kondisi')");
        
            if ($add_barang){
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
                    window.location.href = "add_barang.php";
                </script>
                <?php
            }
        }

if(isset($_POST['edit_user'])){

        $id = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
            
        $edit_user = mysqli_query($host,"update user set username='$username', password='$password',role ='$role' where id_user='$id' ");
            
                if($edit_user){
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

if(isset($_POST['edit_barang'])){

                $id = $_POST['id_barang'];
                $nama_barang = $_POST['nama_barang'];
                $kuantitas_barang = $_POST['kuantitas_barang'];
                $harga = $_POST['harga'];
                $kondisi = $_POST['kondisi'];
                    
                $edit_barang = mysqli_query($host,"update barang set nama_barang='$nama_barang', kuantitas_barang='$kuantitas_barang',harga ='$harga',kondisi='$kondisi' where id_barang='$id' ");
                    
                        if($edit_barang){
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
                                window.location.href = "edit_barang.php";
                            </script>
                            <?php
                            }
                    }
?>


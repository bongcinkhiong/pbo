<?php include '../template/header.php' ?>
<?php include '../config.php' ?>
<?php $data = mysqli_fetch_array(mysqli_query($host, "SELECT * FROM user WHERE id_user='$_GET[id_user]'")); ?>

<?php 
if($data['role'] == 'pasien'){
    mysqli_fetch_array(mysqli_query($host, "SELECT * FROM detail_pasien WHERE id_user='$_GET[id_user]'")); 
}else if($data['role'] == 'dokter'){
    mysqli_fetch_array(mysqli_query($host, "SELECT * FROM detail_dokter WHERE id_user='$_GET[id_user]'")); 
}
?>

<div class="container">
    <!-- Bagian Atas -->
    <div class="row mb-5">
        <div class="col">
            <h5 class="display-5">Halaman Admin / Update</h5>
        </div>
        <div class="col">

        </div>
    </div>

    <!-- Bagian Content -->
    <div class="row mb-5">
    <form action="" method="post" class="row">

        <div class="col">
            <!-- Data dari table user -->
            <div class="mb-2">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?=$data['username']?>">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" value="<?=$data['password']?>">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="<?=$data['nama']?>">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Role</label>
                <select name="role" id="" class="form-select">
                    <option value="" selected>...</option>
                    <option value="dokter">Dokter</option>
                    <option value="pasien">Pasien</option>
                </select>
            </div>
        </div>

        <div class="col">
            <?php
            if($data['role'] == 'dokter'){
                include 'detail_dokter.php';
            }else if($data['role'] == 'pasien'){
                include 'detail_pasien.php';
            }
            ?>
        </div>
    </form>
    </div>
</div>

<?php include '../template/footer.php' ?>

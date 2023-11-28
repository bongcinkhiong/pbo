<?php  include'../template/link.php'?>

<div class="container">
    <h3>Tambah Data User</h3>
    <form action="function.php" method="post">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-select" name="role" required>
                <option selected>...</option>
                <option value="admin">Admin</option>
                <option value="pembeli">Pembeli</option>
                <option value="penjual">Penjual</option>
            </select>
        </div>
        <button type="submit" name="add_user" class="btn btn-primary" value="add_user">Submit</button>
    </form>
</div>

<?php  include'../template/footer.php'?>
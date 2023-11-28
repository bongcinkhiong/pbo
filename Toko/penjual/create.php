<?php  include'../template/link.php'?>

<div class="container">
    <h3>Tambah Data Barang</h3>

    <form action="function.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kuantitas Barang</label>
            <input type="number" class="form-control" name="kuantitas_barang" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select" name="kondisi" required>
                <option selected>...</option>
                <option value="baru">Baru</option>
                <option value="bekas">Bekas</option>
            </select>
        </div>
        <button type="submit" name="add_barang" class="btn btn-primary" value="add_barang">Submit</button>
    </form>
</div>

<?php  include'../template/footer.php'?>
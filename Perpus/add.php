<html>
    <head>
        <title>Tambah Data Buku</title>
    </head>
    <body>
        <a href="Home.php">Back To Home</a>
        <h2>Tambah Data</h2>
        <form action="proses_add.php" method="post">
            <div>
                <label for="">Jenis</label>
                <select name="jenis" id="jenis">
                    <option value="buku">Buku</option>
                    <option value="anggota">Anggota</option>
                    <option value="peminjaman">Peminjaman</option>
                </select>
            </div>
            <div>
                <label for="">Judul</label>
                <input type="text" name="judul">
            </div>
            <div>
                <label for="">Pengarang</label>
                <input type="text" name="pengarang">
            </div>
            <div>
                <label for="">Tahun Terbit</label>
                <input type="date" name="tahun_terbit">
            </div>
            <div>
                <label for="">Status</label>
                <select name="status" id="status">
                    <option value="tersedia">Tersedia</option>
                    <option value="dipinjam">Di Pinjam</option>
                    <option value="dikembalikan">Di Kembalikan</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Tambah">
            </div>
        </form>
    </body>
</html>
<html>
    <head>
        <title>Form Sederhana</title>
    </head>
    <body>
        <?php
        // // fungsi @ itu berguna untuk memeriksa ada atau tidak key 'nama', jika tidak maka menjadi null
        // $nama = @$_GET['nama'];
        // $alamat =  @$_GET['alamat'];

        // // Kita tampilkan disini
        // if ($nama) {
        //     echo "Nama : {$nama}";
        // }
        // if ($alamat) {
        //     echo "Alamat : {$nama}";
        // }
        ?>
        <form action="" method="post">
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama">
            </div>
            <div>
                <label>Alamat</label><br>
                <input type="text" name="alamat">
            </div>
            <div>
                <button>Submit</button>
            </div>
        </form>
    </body>
</html>
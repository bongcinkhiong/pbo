<?php

// Wajib ditulis jika ingin menggunakan fungsi $_SESSION 
session_start();
?>

<html>
    <head>
        <title>Belajar Session</title>
    </head>
    <body>
        <?php
        // menetapkan nilai dari session
        $_SESSION['nama'] = 'Jason';
        $_SESSION['hobi'] = 'Berenang';

        echo "Session Telah di tetapkan <br>";

        // mengeluarkan nilai dari array asosiatif
        print_r($_SESSION);

        // menyelesaikan waktu dalam halaman web 
        // (biasanya untuk logout)
        session_destroy()
        ?>
    </body>
</html>
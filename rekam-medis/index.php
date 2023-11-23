<?php include 'template/header.php' ?>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rekam.Medis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Creator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row align-items-start">
        <div class="col-6">
            <img src="style/foto.gif" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-1"></div>
        <div class="col-5">
            <h2>
                Rekam.Medis
                <br>
                <small class="text-body-secondary">
                    <h5>
                        Aplikasi khusus untuk orang yang tidak sehat
                    </h5>
                </small>
            </h2>

            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal" ){
                        echo"
                        <script>
                        alert('Username dan Password tidak sesuai!')
                        </script>
                        ";
                    }
                }
            ?>

            <form action="proses_login.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                </div>
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-primary" href="register.php" role="button">Register</a>
                    </div>
                    <div class="col-4">
                        <input class="btn btn-success" type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row my-5">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="style/cetaklaporan.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Laporan Penyakit</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="style/kesehatan.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Manajemen Pasien</h3>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="style/cetaklaporan.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Cek Kesehatan</h3>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="style/wow.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Cetak Laporan</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-9">
                <h1>Bong Cin Khiong</h1>
                <br>
                <h3 class="container">Description</h3>
                <p class="container">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea autem, deserunt odit ducimus culpa quidem laudantium aut aliquam neque ab explicabo necessitatibus, alias tempora? Quam neque qui nostrum unde atque.
                </p>
                <div class="d-flex">
                    <div class="p-2 flex-fill">
                        <ul>
                            <li>SMK Jakarta Pusat 1</li>
                            <li>30 June 2006</li>
                            <li>BackEnd</li>
                        </ul>
                    </div>
                    <div class="p-2 flex-fill">
                        <ul>
                            <li>Student</li>
                            <li>I have knowledge about (Tailwind,TypeScript)</li>
                            <li>My Hobby Playing Basketball</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="sosmed grid-row-0 row-gap-50px">
                    <i class="bi bi-github"><a href="https://github.com/bongcinkhiong"></a></i>
                    <i class="bi bi-instagram"><a href="https://www.instagram.com/bluerocket06"></i>
                    <i class="bi bi-facebook"><a href="https://www.facebook.com/profile.php?id=100076145015102"></i>
                </div>
            </div>
        </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,96L48,90.7C96,85,192,75,288,96C384,117,480,171,576,170.7C672,171,768,117,864,112C960,107,1056,149,1152,154.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</div>

<?php include 'template/footer.php' ?>
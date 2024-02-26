    <?php 
session_start();
if( !isset($_SESSION['login'])) {
 header("location: ../login.php");
 exit;
}

require '../config/config.php';

$username = $_SESSION['username'];
$userid = $_SESSION['user_id'];


$hasil = mysqli_query($conn, "SELECT * FROM foto WHERE user_id = '$userid'");
$title_web = 'home';

include'../template/bagian_atas.php';
include'../template/nav.php';
?>


<body>
    <div class="container">
    <h1 class="text-center" style="margin-top: 100px;">Selamat Datang <?= $username ?></h1>

    <br>

    <div class="container">
        <div class="row">
            <?php foreach($hasil as $gambar) : ?>
            <div class="col-md-4">
                <div class="card" style="width: 20rem; height: 20rem;">
                    <img src="../img/<?= $gambar['lokasi_file'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $gambar['judul_foto'] ?></h5>
                        <p class="card-text"><?= $gambar['tanggal_unggah'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

</div>
<?php include'../template/bagian_bawah.php'; ?>
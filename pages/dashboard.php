<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

// Query untuk menghitung jumlah data
$mobil_count = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tbl_mobil_wandinurjaman");
$pelanggan_count = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tbl_pelanggan_wandinurjaman");
$rental_count = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tbl_rental_wandinurjaman");

$mobil_total = mysqli_fetch_assoc($mobil_count)['total'];
$pelanggan_total = mysqli_fetch_assoc($pelanggan_count)['total'];
$rental_total = mysqli_fetch_assoc($rental_count)['total'];
?>

<h2 class="mb-4">Dashboard</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-warning bg-gradient mb-3">
            <div class="card-body">
                <h5 class="card-title">Jumlah Mobil</h5>
                <p class="card-text display-4"><?= $mobil_total ?></p>
                <a href="mobil.php" class="btn btn-light">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success bg-gradient mb-3">
            <div class="card-body">
                <h5 class="card-title">Jumlah Pelanggan</h5>
                <p class="card-text display-4"><?= $pelanggan_total ?></p>
                <a href="pelanggan.php" class="btn btn-light">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-danger bg-gradient mb-3">
            <div class="card-body">
                <h5 class="card-title">Jumlah Rental</h5>
                <p class="card-text display-4"><?= $rental_total ?></p>
                <a href="rental.php" class="btn btn-light">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>
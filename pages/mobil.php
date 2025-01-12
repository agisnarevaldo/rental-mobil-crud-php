<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

// Ambil data mobil dari database
$query = "SELECT * FROM tbl_mobil_wandinurjaman";
$result = mysqli_query($koneksi, $query);
?>

<h2 class="mb-4">Kelola Data Mobil</h2>
<a href="mobil_tambah.php" class="btn btn-success mb-3">Tambah Mobil</a>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No. Plat</th>
                        <th>Nama Mobil</th>
                        <th>Brand</th>
                        <th>Tipe Transmisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['no_plat_wandinurjaman']; ?></td>
                            <td><?= $row['nama_mobil_wandinurjaman']; ?></td>
                            <td><?= $row['brand_mobil_wandinurjaman']; ?></td>
                            <td><?= $row['tipe_transmisi_wandinurjaman']; ?></td>
                            <td>
                                <a href="mobil_edit.php?id=<?= $row['no_plat_wandinurjaman']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="mobil_hapus.php?id=<?= $row['no_plat_wandinurjaman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>
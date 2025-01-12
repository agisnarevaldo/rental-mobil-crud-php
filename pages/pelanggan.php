<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

// Ambil data pelanggan dari database
$query = "SELECT * FROM tbl_pelanggan_wandinurjaman";
$result = mysqli_query($koneksi, $query);
?>

<h2 class="mb-4">Kelola Data Pelanggan</h2>
<a href="pelanggan_tambah.php" class="btn btn-success mb-3">Tambah Pelanggan</a>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>NIK KTP</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['nik_ktp_wandinurjaman']; ?></td>
                            <td><?= $row['nama_wandinurjaman']; ?></td>
                            <td><?= $row['no_hp_wandinurjaman']; ?></td>
                            <td><?= $row['alamat_wandinurjaman']; ?></td>
                            <td>
                                <a href="pelanggan_edit.php?id=<?= $row['nik_ktp_wandinurjaman']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="pelanggan_hapus.php?id=<?= $row['nik_ktp_wandinurjaman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <?php include '../templates/footer.php'; ?>
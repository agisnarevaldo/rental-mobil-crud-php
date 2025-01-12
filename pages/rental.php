<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

// Ambil data rental gabungan dari tabel rental, pelanggan, dan mobil
$query = "SELECT r.no_trx_wandinurjaman, r.tgl_rental_wandinurjaman, r.jam_rental_wandinurjaman, r.harga_wandinurjaman, r.lama_wandinurjaman, r.total_bayar_wandinurjaman,
                 p.nama_wandinurjaman AS nama_pelanggan, m.nama_mobil_wandinurjaman AS nama_mobil
          FROM tbl_rental_wandinurjaman r
          INNER JOIN tbl_pelanggan_wandinurjaman p ON r.nik_ktp_wandinurjaman = p.nik_ktp_wandinurjaman
          INNER JOIN tbl_mobil_wandinurjaman m ON r.no_plat_wandinurjaman = m.no_plat_wandinurjaman";
$result = mysqli_query($koneksi, $query);
?>

<h2 class="mb-4">Kelola Data Rental</h2>
<a href="rental_tambah.php" class="btn btn-success mb-3">Tambah Rental</a>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No. Transaksi</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Mobil</th>
                        <th>Tanggal Rental</th>
                        <th>Harga</th>
                        <th>Lama (hari)</th>
                        <th>Total Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['no_trx_wandinurjaman']; ?></td>
                            <td><?= $row['nama_pelanggan']; ?></td>
                            <td><?= $row['nama_mobil']; ?></td>
                            <td><?= $row['tgl_rental_wandinurjaman']; ?></td>
                            <td>Rp <?= number_format($row['harga_wandinurjaman'], 0, ',', '.'); ?></td>
                            <td><?= $row['lama_wandinurjaman']; ?> hari</td>
                            <td>Rp <?= number_format($row['total_bayar_wandinurjaman'], 0, ',', '.'); ?></td>
                            <td>
                                <a href="rental_edit.php?id=<?= $row['no_trx_wandinurjaman']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="rental_hapus.php?id=<?= $row['no_trx_wandinurjaman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>
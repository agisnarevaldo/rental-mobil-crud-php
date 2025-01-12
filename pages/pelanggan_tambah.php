<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

// Proses tambah data pelanggan
if (isset($_POST['submit'])) {
    $nik_ktp = $_POST['nik_ktp'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO tbl_pelanggan_wandinurjaman (nik_ktp_wandinurjaman, nama_wandinurjaman, no_hp_wandinurjaman, alamat_wandinurjaman)
              VALUES ('$nik_ktp', '$nama', '$no_hp', '$alamat')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: pelanggan.php");
    } else {
        echo "Gagal menambahkan data pelanggan.";
    }
}
?>

<h2 class="mb-4">Tambah Data Pelanggan</h2>
<form method="POST">
    <div class="mb-3">
        <label>NIK KTP</label>
        <input type="text" name="nik_ktp" class="form-control" maxlength="16" required>
    </div>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" maxlength="15" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>

<?php include '../templates/footer.php'; ?>
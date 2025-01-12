<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

// Proses tambah data mobil
if (isset($_POST['submit'])) {
    $no_plat = $_POST['no_plat'];
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $tipe_transmisi = $_POST['tipe_transmisi'];

    $query = "INSERT INTO tbl_mobil_wandinurjaman (no_plat_wandinurjaman, nama_mobil_wandinurjaman, brand_mobil_wandinurjaman, tipe_transmisi_wandinurjaman)
              VALUES ('$no_plat', '$nama_mobil', '$brand_mobil', '$tipe_transmisi')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: mobil.php");
    } else {
        echo "Gagal menambahkan data mobil.";
    }
}
?>

<h2 class="mb-4">Tambah Data Mobil</h2>
<form method="POST">
    <div class="mb-3">
        <label>No. Plat</label>
        <input type="text" name="no_plat" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Mobil</label>
        <input type="text" name="nama_mobil" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Brand Mobil</label>
        <input type="text" name="brand_mobil" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tipe Transmisi</label>
        <select name="tipe_transmisi" class="form-control">
            <option value="Manual">Manual</option>
            <option value="Matic">Matic</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>

<?php include '../templates/footer.php'; ?>
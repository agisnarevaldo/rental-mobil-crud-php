<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

$id = $_GET['id'];

// Ambil data mobil berdasarkan ID
$query = "SELECT * FROM tbl_mobil_wandinurjaman WHERE no_plat_wandinurjaman='$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Proses update data mobil
if (isset($_POST['submit'])) {
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $tipe_transmisi = $_POST['tipe_transmisi'];

    $query = "UPDATE tbl_mobil_wandinurjaman 
              SET nama_mobil_wandinurjaman='$nama_mobil', 
                  brand_mobil_wandinurjaman='$brand_mobil', 
                  tipe_transmisi_wandinurjaman='$tipe_transmisi' 
              WHERE no_plat_wandinurjaman='$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: mobil.php");
    } else {
        echo "Gagal mengupdate data mobil.";
    }
}
?>

<h2 class="mb-4">Edit Data Mobil</h2>
<form method="POST">
    <div class="mb-3">
        <label>No. Plat</label>
        <input type="text" class="form-control" value="<?= $data['no_plat_wandinurjaman']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label>Nama Mobil</label>
        <input type="text" name="nama_mobil" class="form-control" value="<?= $data['nama_mobil_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Brand Mobil</label>
        <input type="text" name="brand_mobil" class="form-control" value="<?= $data['brand_mobil_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Tipe Transmisi</label>
        <select name="tipe_transmisi" class="form-control">
            <option value="Manual" <?= $data['tipe_transmisi_wandinurjaman'] === 'Manual' ? 'selected' : ''; ?>>Manual</option>
            <option value="Matic" <?= $data['tipe_transmisi_wandinurjaman'] === 'Matic' ? 'selected' : ''; ?>>Matic</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

<?php include '../templates/footer.php'; ?>
<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

$id = $_GET['id'];

// Ambil data pelanggan berdasarkan ID
$query = "SELECT * FROM tbl_pelanggan_wandinurjaman WHERE nik_ktp_wandinurjaman='$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Proses update data pelanggan
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_pelanggan_wandinurjaman 
              SET nama_wandinurjaman='$nama', 
                  no_hp_wandinurjaman='$no_hp', 
                  alamat_wandinurjaman='$alamat' 
              WHERE nik_ktp_wandinurjaman='$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: pelanggan.php");
    } else {
        echo "Gagal mengupdate data pelanggan.";
    }
}
?>

<h2 class="mb-4">Edit Data Pelanggan</h2>
<form method="POST">
    <div class="mb-3">
        <label>NIK KTP</label>
        <input type="text" class="form-control" value="<?= $data['nik_ktp_wandinurjaman']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= $data['nama_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" value="<?= $data['no_hp_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" required><?= $data['alamat_wandinurjaman']; ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

<?php include '../templates/footer.php'; ?>
<?php
session_start();
include '../config/koneksi.php';
include '../templates/header.php';

$id = $_GET['id'];

// Ambil data rental berdasarkan ID
$query = "SELECT * FROM tbl_rental_wandinurjaman WHERE no_trx_wandinurjaman='$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Ambil data pelanggan dan mobil untuk select option
$pelanggan_query = "SELECT nik_ktp_wandinurjaman, nama_wandinurjaman FROM tbl_pelanggan_wandinurjaman";
$pelanggan_result = mysqli_query($koneksi, $pelanggan_query);

$mobil_query = "SELECT no_plat_wandinurjaman, nama_mobil_wandinurjaman FROM tbl_mobil_wandinurjaman";
$mobil_result = mysqli_query($koneksi, $mobil_query);

// Proses update data rental
if (isset($_POST['submit'])) {
    $nik_ktp = $_POST['nik_ktp'];
    $no_plat = $_POST['no_plat'];
    $tgl_rental = $_POST['tgl_rental'];
    $jam_rental = $_POST['jam_rental'];
    $harga = $_POST['harga'];
    $lama = $_POST['lama'];
    $total_bayar = $harga * $lama;

    $query = "UPDATE tbl_rental_wandinurjaman 
              SET nik_ktp_wandinurjaman='$nik_ktp', 
                  no_plat_wandinurjaman='$no_plat', 
                  tgl_rental_wandinurjaman='$tgl_rental', 
                  jam_rental_wandinurjaman='$jam_rental', 
                  harga_wandinurjaman='$harga', 
                  lama_wandinurjaman='$lama', 
                  total_bayar_wandinurjaman='$total_bayar'
              WHERE no_trx_wandinurjaman='$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: rental.php");
    } else {
        echo "Gagal mengupdate data rental.";
    }
}
?>

<h2 class="mb-4">Edit Data Rental</h2>
<form method="POST">
    <div class="mb-3">
        <label>Nama Pelanggan</label>
        <select name="nik_ktp" class="form-control" required>
            <option value="">-- Pilih Pelanggan --</option>
            <?php while ($row = mysqli_fetch_assoc($pelanggan_result)) { ?>
                <option value="<?= $row['nik_ktp_wandinurjaman']; ?>" <?= $data['nik_ktp_wandinurjaman'] === $row['nik_ktp_wandinurjaman'] ? 'selected' : ''; ?>>
                    <?= $row['nama_wandinurjaman']; ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Nama Mobil</label>
        <select name="no_plat" class="form-control" required>
            <option value="">-- Pilih Mobil --</option>
            <?php while ($row = mysqli_fetch_assoc($mobil_result)) { ?>
                <option value="<?= $row['no_plat_wandinurjaman']; ?>" <?= $data['no_plat_wandinurjaman'] === $row['no_plat_wandinurjaman'] ? 'selected' : ''; ?>>
                    <?= $row['nama_mobil_wandinurjaman']; ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Tanggal Rental</label>
        <input type="date" name="tgl_rental" class="form-control" value="<?= $data['tgl_rental_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Jam Rental</label>
        <input type="time" name="jam_rental" class="form-control" value="<?= $data['jam_rental_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="<?= $data['harga_wandinurjaman']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Lama (hari)</label>
        <input type="number" name="lama" class="form-control" value="<?= $data['lama_wandinurjaman']; ?>" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

<?php include '../templates/footer.php'; ?>

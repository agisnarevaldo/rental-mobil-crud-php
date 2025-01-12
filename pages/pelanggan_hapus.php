<?php
session_start();
include '../config/koneksi.php';

$id = $_GET['id'];

// Hapus data pelanggan
$query = "DELETE FROM tbl_pelanggan_wandinurjaman WHERE nik_ktp_wandinurjaman='$id'";
if (mysqli_query($koneksi, $query)) {
    header("Location: pelanggan.php");
} else {
    echo "Gagal menghapus data pelanggan.";
}
?>
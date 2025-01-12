<?php
session_start();
include '../config/koneksi.php';

$id = $_GET['id'];

// Hapus data mobil
$query = "DELETE FROM tbl_mobil_wandinurjaman WHERE no_plat_wandinurjaman='$id'";
if (mysqli_query($koneksi, $query)) {
    header("Location: mobil.php");
} else {
    echo "Gagal menghapus data mobil.";
}
?>
<?php
session_start();
include '../config/koneksi.php';

$id = $_GET['id'];

// Hapus data rental
$query = "DELETE FROM tbl_rental_wandinurjaman WHERE no_trx_wandinurjaman='$id'";
if (mysqli_query($koneksi, $query)) {
    header("Location: rental.php");
} else {
    echo "Gagal menghapus data rental.";
}
?>
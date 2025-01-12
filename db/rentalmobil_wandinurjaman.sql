-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2025 pada 16.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_wandinurjaman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil_wandinurjaman`
--

CREATE TABLE `tbl_mobil_wandinurjaman` (
  `no_plat_wandinurjaman` varchar(10) NOT NULL,
  `nama_mobil_wandinurjaman` varchar(25) DEFAULT NULL,
  `brand_mobil_wandinurjaman` varchar(25) DEFAULT NULL,
  `tipe_transmisi_wandinurjaman` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mobil_wandinurjaman`
--

INSERT INTO `tbl_mobil_wandinurjaman` (`no_plat_wandinurjaman`, `nama_mobil_wandinurjaman`, `brand_mobil_wandinurjaman`, `tipe_transmisi_wandinurjaman`) VALUES
('B5678CF', 'Lamborgini AV', 'Lamborgini', 'Matic'),
('D1122GH', 'BR-V', 'Honda', 'Matic'),
('D1234AB', 'Avanza', 'Toyota', 'Manual'),
('D3344IJ', 'Innova', 'Toyota', 'Manual'),
('D5678CD', 'Xenia', 'Daihatsu', 'Matic'),
('D9101EF', 'Ertiga', 'Suzuki', 'Manual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan_wandinurjaman`
--

CREATE TABLE `tbl_pelanggan_wandinurjaman` (
  `nik_ktp_wandinurjaman` varchar(16) NOT NULL,
  `nama_wandinurjaman` varchar(35) DEFAULT NULL,
  `no_hp_wandinurjaman` varchar(15) DEFAULT NULL,
  `alamat_wandinurjaman` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pelanggan_wandinurjaman`
--

INSERT INTO `tbl_pelanggan_wandinurjaman` (`nik_ktp_wandinurjaman`, `nama_wandinurjaman`, `no_hp_wandinurjaman`, `alamat_wandinurjaman`) VALUES
('0987654321098765', 'Rina Susanti', '081987654321', 'Jl. Asia Afrika No. 2, Bandung'),
('1122334455667788', 'Budi Santoso', '081223344556', 'Jl. Soekarno Hatta No. 10, Bandung'),
('1234567', 'Jhon Doe', '09124345454', 'Jalan Merdeka'),
('1234567890123456', 'Andi Wijaya', '081234567890', 'Jl. Merdeka No. 1, Bandung'),
('2233445566778899', 'Siti Aminah', '081334455667', 'Jl. Braga No. 20, Bandung'),
('3344556677889900', 'Tono Prasetyo', '081445566778', 'Jl. Dago No. 15, Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rental_wandinurjaman`
--

CREATE TABLE `tbl_rental_wandinurjaman` (
  `no_trx_wandinurjaman` varchar(20) NOT NULL,
  `nik_ktp_wandinurjaman` varchar(16) DEFAULT NULL,
  `no_plat_wandinurjaman` varchar(10) DEFAULT NULL,
  `tgl_rental_wandinurjaman` date DEFAULT NULL,
  `jam_rental_wandinurjaman` time DEFAULT NULL,
  `harga_wandinurjaman` int(11) DEFAULT NULL,
  `lama_wandinurjaman` int(11) DEFAULT NULL,
  `total_bayar_wandinurjaman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_rental_wandinurjaman`
--

INSERT INTO `tbl_rental_wandinurjaman` (`no_trx_wandinurjaman`, `nik_ktp_wandinurjaman`, `no_plat_wandinurjaman`, `tgl_rental_wandinurjaman`, `jam_rental_wandinurjaman`, `harga_wandinurjaman`, `lama_wandinurjaman`, `total_bayar_wandinurjaman`) VALUES
('TRX-20250112010101', '1234567890123456', 'D1234AB', '2025-01-10', '09:00:00', 300000, 2, 600000),
('TRX-20250112020202', '0987654321098765', 'D5678CD', '2025-01-11', '10:00:00', 250000, 3, 750000),
('TRX-20250112030303', '1122334455667788', 'D9101EF', '2025-01-12', '08:30:00', 280000, 4, 1120000),
('TRX-20250112040404', '2233445566778899', 'D1122GH', '2025-01-13', '14:00:00', 320000, 1, 320000),
('TRX-20250112050505', '3344556677889900', 'D3344IJ', '2025-01-14', '11:00:00', 400000, 5, 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_wandinurjaman`
--

CREATE TABLE `tbl_user_wandinurjaman` (
  `id_user_wandinurjaman` int(11) NOT NULL,
  `username_wandinurjaman` varchar(35) DEFAULT NULL,
  `password_wandinurjaman` varchar(100) DEFAULT NULL,
  `nama_lengkap_wandinurjaman` varchar(35) DEFAULT NULL,
  `level_wandinurjaman` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user_wandinurjaman`
--

INSERT INTO `tbl_user_wandinurjaman` (`id_user_wandinurjaman`, `username_wandinurjaman`, `password_wandinurjaman`, `nama_lengkap_wandinurjaman`, `level_wandinurjaman`) VALUES
(1, 'wandi', '3b061f6cd9ce9137e02c651f87e166b2', 'Wandi Nurjaman', 'admin'),
(3, 'wandi', '3b061f6cd9ce9137e02c651f87e166b2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mobil_wandinurjaman`
--
ALTER TABLE `tbl_mobil_wandinurjaman`
  ADD PRIMARY KEY (`no_plat_wandinurjaman`);

--
-- Indeks untuk tabel `tbl_pelanggan_wandinurjaman`
--
ALTER TABLE `tbl_pelanggan_wandinurjaman`
  ADD PRIMARY KEY (`nik_ktp_wandinurjaman`);

--
-- Indeks untuk tabel `tbl_rental_wandinurjaman`
--
ALTER TABLE `tbl_rental_wandinurjaman`
  ADD PRIMARY KEY (`no_trx_wandinurjaman`),
  ADD KEY `nik_ktp_wandinurjaman` (`nik_ktp_wandinurjaman`),
  ADD KEY `no_plat_wandinurjaman` (`no_plat_wandinurjaman`);

--
-- Indeks untuk tabel `tbl_user_wandinurjaman`
--
ALTER TABLE `tbl_user_wandinurjaman`
  ADD PRIMARY KEY (`id_user_wandinurjaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user_wandinurjaman`
--
ALTER TABLE `tbl_user_wandinurjaman`
  MODIFY `id_user_wandinurjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_rental_wandinurjaman`
--
ALTER TABLE `tbl_rental_wandinurjaman`
  ADD CONSTRAINT `tbl_rental_wandinurjaman_ibfk_1` FOREIGN KEY (`nik_ktp_wandinurjaman`) REFERENCES `tbl_pelanggan_wandinurjaman` (`nik_ktp_wandinurjaman`),
  ADD CONSTRAINT `tbl_rental_wandinurjaman_ibfk_2` FOREIGN KEY (`no_plat_wandinurjaman`) REFERENCES `tbl_mobil_wandinurjaman` (`no_plat_wandinurjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

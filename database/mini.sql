-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2021 pada 10.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `alamat_pemesan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Belum Diproses',
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `produk`, `jumlah`, `nama_pemesan`, `alamat_pemesan`, `status`, `tgl`) VALUES
(12, 'headset', 1, 'Syifa', 'Jl. Ciputat Raya 2', 'Sedang Diproses', '2021-05-09 08:16:09'),
(13, 'iphone', 1, 'Rizaldy', 'Jl. Kebayoran Lama No.38', 'Sedang Diproses', '2021-05-09 04:12:22'),
(14, 'xiaomi', 1, 'Aulia', 'Jl. Pamulang Raya', 'Belum Diproses', '2021-05-09 06:17:06'),
(15, 'oppo', 1, 'Khairan', 'Jl. Kemandoran Raya', 'Sedang Diproses', '2021-05-09 05:29:11'),
(16, 'samsung', 1, 'Maulana', 'Jl. Kemanggisan', 'Sedang Diproses', '2021-05-09 06:30:11'),
(17, 'iphone', 1, 'Fadil', 'Jl. Srengseng', 'Belum Diproses', '2021-05-09 04:20:03'),
(18, 'xiaomi', 1, 'Indah', 'Jl. Pondok Indah', 'Pesanan Sampai', '2021-05-09 01:20:06'),
(19, 'samsung', 1, 'Sari', 'Jl. Kelapa Dua', 'Belum Diproses', '2021-05-09 01:12:23'),
(20, 'oppo', 1, 'Syahril', 'Jl. Kebon Nanas 2', 'Pesanan Sampai', '2021-05-09 01:24:10'),
(21, 'samsung', 1, 'Sinta', 'Jl. Mawar Putih', 'Belum Diproses', '2021-05-09 06:03:12'),
(22, 'samsung', 3, 'kudo', 'feafegeaddwd', 'Belum Diproses', '2021-05-09 23:39:01'),
(23, 'headset', 2, 'Haidar', 'Jl. Srengseng Raya', 'Belum Diproses', '2021-05-10 12:39:18'),
(24, 'headset', 1, 'Jl. Mangga 2', 'Fikri', 'Belum Diproses', '2021-05-10 12:40:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2024 pada 08.29
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_galerifoto_vebr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto1`
--

CREATE TABLE `foto1` (
  `fotoid` int(11) NOT NULL,
  `judulfoto` varchar(255) NOT NULL,
  `deskripsifoto` text NOT NULL,
  `tanggalunggah` date NOT NULL,
  `lokasifile` varchar(255) NOT NULL,
  `albumid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto1`
--

INSERT INTO `foto1` (`fotoid`, `judulfoto`, `deskripsifoto`, `tanggalunggah`, `lokasifile`, `albumid`, `userid`) VALUES
(28, 'mobil', 'calya5', '2024-09-03', '2057775309-innova-1-640x389.jpg', 14, 2),
(31, 'toyota', 'xenia', '2024-09-03', '1117635346-maxresdefault.jpg', 15, 2),
(32, 'daihatsu', 'singra', '2024-09-03', '1153086427-Modifikasi-Mobil-Toyta-calya-dan-Daihatsu-Sigra-35.jpg', 16, 2),
(33, 'toyota', 'avanza', '2024-09-03', '1380322667-modifikasi-mobil-avanza-4-4157.png', 15, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto1`
--
ALTER TABLE `foto1`
  ADD PRIMARY KEY (`fotoid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `albumid` (`albumid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto1`
--
ALTER TABLE `foto1`
  MODIFY `fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

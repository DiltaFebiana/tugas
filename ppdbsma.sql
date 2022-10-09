-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2021 pada 13.38
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
-- Database: `ppdbsma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `noun` int(20) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `namaortu` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kotakab` varchar(255) NOT NULL,
  `asalsekolah` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`noun`, `namalengkap`, `jk`, `tempatlahir`, `tanggallahir`, `namaortu`, `alamat`, `kotakab`, `asalsekolah`, `agama`) VALUES
(12345, 'Adi', 'pria', 'Malang', '2021-11-01', 'Endang', 'Jl. Kaliurang', 'Malang', 'SMP Plus Alkautsar', 'Islam'),
(12643, 'Elisa', 'Wanit', 'Sumedang', '2002-07-01', 'Sugiarti', 'Jl. Papa Kuning', 'Kota Malang', 'SMP Kolese Santo Yusup 1', 'Katholik'),
(23411, 'Edi', 'Pria', 'Jakarta', '2003-06-01', 'Retno', 'wjiadaijdiadasd', 'Kota Malang', 'SMPN 21 Malang', 'Buddha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin1', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'guest', '202cb962ac59075b964b07152d234b70', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`noun`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

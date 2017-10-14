-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Okt 2017 pada 12.55
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perawatku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sertifikasis`
--

CREATE TABLE `detail_sertifikasis` (
  `id_detail_sertifikasi` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat_pemesan` varchar(255) NOT NULL,
  `no_hp_pemesan` varchar(20) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_perawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawats`
--

CREATE TABLE `perawats` (
  `id_perawat` int(11) NOT NULL,
  `nama_perawat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `asal_kampus` varchar(100) NOT NULL,
  `no_str` varchar(100) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `keterangan_perawat` varchar(255) NOT NULL,
  `id_rs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakits`
--

CREATE TABLE `rumah_sakits` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(200) NOT NULL,
  `alamat_rs` varchar(200) NOT NULL,
  `no_telp_rs` varchar(50) NOT NULL,
  `nama_pj` varchar(100) NOT NULL,
  `jabatan_pj` varchar(100) NOT NULL,
  `keterangan_rs` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakits`
--

INSERT INTO `rumah_sakits` (`id_rs`, `nama_rs`, `alamat_rs`, `no_telp_rs`, `nama_pj`, `jabatan_pj`, `keterangan_rs`, `id_user`) VALUES
(1, 'Rumah Sakit Yos Sudarso', 'Padang', '123456789', 'Arif Ganteng', 'Kepala Harian Umum', 'Sangat Bagus Sekali', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikasis`
--

CREATE TABLE `sertifikasis` (
  `id_sertifikasi` int(11) NOT NULL,
  `ket_sertifikasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `perawats`
--
ALTER TABLE `perawats`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perawats`
--
ALTER TABLE `perawats`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

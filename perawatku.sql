-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Okt 2017 pada 09.56
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

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id_pemesanan`, `nama_pemesan`, `alamat_pemesan`, `no_hp_pemesan`, `nama_pasien`, `jenis_kelamin`, `umur`, `alamat`, `id_perawat`) VALUES
(1, 'q', 'q', 'q', 'q', 'Laki-Laki', 1, 'q', 1);

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

--
-- Dumping data untuk tabel `perawats`
--

INSERT INTO `perawats` (`id_perawat`, `nama_perawat`, `kota`, `asal_kampus`, `no_str`, `keahlian`, `pengalaman`, `keterangan_perawat`, `id_rs`) VALUES
(1, 'Cici', 'Padang', 'Unand', '', 'Perawat', '-', '-', 2);

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
(1, 'Rumah Sakit Yos Sudarso', 'Padang', '123456789', 'Arif Ganteng', 'Kepala Harian Umum', 'Sangat Bagus Sekali', 0),
(2, 'M Jamil', 'Padang', '999999999', 'Budi', 'Kepala SDM', 'emejing', 0);

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
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_perawat` (`id_perawat`);

--
-- Indexes for table `perawats`
--
ALTER TABLE `perawats`
  ADD PRIMARY KEY (`id_perawat`),
  ADD KEY `id_rs` (`id_rs`);

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
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perawats`
--
ALTER TABLE `perawats`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sertifikasis`
--
ALTER TABLE `sertifikasis`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanans_ibfk_1` FOREIGN KEY (`id_perawat`) REFERENCES `perawats` (`id_perawat`);

--
-- Ketidakleluasaan untuk tabel `perawats`
--
ALTER TABLE `perawats`
  ADD CONSTRAINT `perawats_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rumah_sakits` (`id_rs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 10.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fadil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` char(6) NOT NULL,
  `nik_guru` char(16) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `golongan_darah` enum('a','b','ab','o') NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `agama` enum('islam','kristen','buddha','hindu') NOT NULL,
  `status_perkawinan` enum('menikah','belum menikah') NOT NULL,
  `pekerjaan` enum('bekerja','belum bekerja') NOT NULL,
  `kewarganegaraan` enum('wna','wni') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nik_guru`, `nama`, `tempat_lahir`, `tanggal_lahir`, `Jenis_kelamin`, `golongan_darah`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`) VALUES
('GRU001', '002002002', 'Dimas Hanagsubagyo', 'Bandung', '2023-02-08', 'L', 'b', 'Jl Gatot Subroto No 31', 'islam', 'menikah', 'bekerja', 'wni'),
('GRU002', '002002002', 'Ratnasari', 'Bandung', '2023-02-13', 'P', 'b', 'jln gagak edan', 'islam', 'menikah', 'bekerja', 'wni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` varchar(9) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `nama` char(30) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `golongan_darah` enum('a','b','ab','o') NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `agama` enum('islam','kristen','buddha','hindu') NOT NULL,
  `status_perkawinan` enum('menikah','belum menikah') NOT NULL,
  `pekerjaan` enum('bekerja','belum bekerja') NOT NULL,
  `kewarganegaraan` enum('wna','wni') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `Jenis_kelamin`, `golongan_darah`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`) VALUES
('KRY001', '001001001', 'Abhi', 'Bandung', '2023-02-21', 'L', 'a', 'Jalan Cijerah', 'islam', 'belum menikah', '', 'wni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(7) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL,
  `golongan_darah` enum('a','b','ab','o') NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `agama` enum('islam','kristen','buddha','hindu') NOT NULL,
  `status_perkawinan` enum('menikah','belum menikah') NOT NULL,
  `statuspr` enum('bekerja','belum bekerja') NOT NULL,
  `kewarganegaraan` enum('wna','wni') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `Jenis_kelamin`, `golongan_darah`, `alamat`, `agama`, `status_perkawinan`, `statuspr`, `kewarganegaraan`) VALUES
('001', '001002003', 'Fadil Ganteng', 'Bandung', '2005-02-19', 'L', 'b', 'Bandung', 'islam', 'belum menikah', 'bekerja', 'wna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Fadil', 'fadilanugrah751@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'fadil', 'fadilanugrah7@gmail.com', '8d90d3b4702c9df2567603dfb1c26978');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_karyawan` (`id_karyawan`,`nik`,`nama`,`tempat_lahir`,`tanggal_lahir`,`Jenis_kelamin`,`golongan_darah`,`alamat`,`agama`,`status_perkawinan`,`pekerjaan`,`kewarganegaraan`),
  ADD KEY `id_karyawan_2` (`id_karyawan`,`nik`,`nama`,`tempat_lahir`,`tanggal_lahir`,`Jenis_kelamin`,`golongan_darah`,`alamat`,`agama`,`status_perkawinan`,`pekerjaan`,`kewarganegaraan`),
  ADD KEY `id_karyawan_3` (`id_karyawan`,`nik`,`nama`,`tempat_lahir`,`tanggal_lahir`,`Jenis_kelamin`,`golongan_darah`,`alamat`,`agama`,`status_perkawinan`,`pekerjaan`,`kewarganegaraan`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

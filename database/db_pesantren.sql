-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 05:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pesantren`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `kode_kriteria` varchar(5) NOT NULL,
  `jenis_kriteria` varchar(10) NOT NULL,
  `bobot_kriteria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_normalisasi_alternatif`
--

CREATE TABLE `nilai_normalisasi_alternatif` (
  `id_nilai_normalisasi` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `id_santri` int(5) NOT NULL,
  `nilai_alternatif` int(5) NOT NULL,
  `nilai_normalisasi` float NOT NULL,
  `nilai_normalisasi_terbobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_preferensi_alternatif`
--

CREATE TABLE `nilai_preferensi_alternatif` (
  `id_nilai_preferensi` int(5) NOT NULL,
  `id_santri` int(5) NOT NULL,
  `nilai_preferensi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(5) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat_santri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_normalisasi_alternatif`
--
ALTER TABLE `nilai_normalisasi_alternatif`
  ADD PRIMARY KEY (`id_nilai_normalisasi`);

--
-- Indexes for table `nilai_preferensi_alternatif`
--
ALTER TABLE `nilai_preferensi_alternatif`
  ADD PRIMARY KEY (`id_nilai_preferensi`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_normalisasi_alternatif`
--
ALTER TABLE `nilai_normalisasi_alternatif`
  MODIFY `id_nilai_normalisasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_preferensi_alternatif`
--
ALTER TABLE `nilai_preferensi_alternatif`
  MODIFY `id_nilai_preferensi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

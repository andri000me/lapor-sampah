-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 01:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(5) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `tempat` text NOT NULL,
  `judul_laporan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `photo` longblob NOT NULL,
  `tgl_laporan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama-pelapor` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_handphone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_laporan`
--

CREATE TABLE `status_laporan` (
  `id_laporan` int(5) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kode_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','pelapor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`, `level`) VALUES
(6, 'Singgih Bayu Wicaksono', 'sngghbyw', '123456', 'pelapor'),
(9, 'musa', 'musa', '$2y$10$z3gYN2N0kdQO6CEInJ8Ns.selZAyBejbm8DD2TG.r63', 'pelapor'),
(10, 'danis', 'danis', '$2y$10$iVpRjXN5zNrNi1kFmlv4AuXeYd5b/nQbacN2LD8aqPF70vh2capki', 'pelapor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_user` (`id_pelapor`),
  ADD KEY `id_pelaporan` (`id_pelapor`),
  ADD KEY `id_pelapor` (`id_pelapor`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `status_laporan`
--
ALTER TABLE `status_laporan`
  ADD PRIMARY KEY (`kode_status`),
  ADD KEY `id_laporan` (`id_laporan`),
  ADD KEY `id_pelapor` (`id_pelapor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_laporan`
--
ALTER TABLE `status_laporan`
  MODIFY `kode_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_laporan`) REFERENCES `status_laporan` (`id_laporan`);

--
-- Constraints for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD CONSTRAINT `pelapor_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `laporan` (`id_pelapor`),
  ADD CONSTRAINT `pelapor_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `status_laporan`
--
ALTER TABLE `status_laporan`
  ADD CONSTRAINT `status_laporan_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

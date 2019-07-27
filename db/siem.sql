-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 03:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siem`
--

-- --------------------------------------------------------

--
-- Table structure for table `acak_maqra`
--

CREATE TABLE `acak_maqra` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `tgl_acak` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `acak_tema`
--

CREATE TABLE `acak_tema` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `tgl_acak` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `waktu_akhir_acak_nourut` datetime NOT NULL,
  `waktu_akhir_acak_maqra` datetime NOT NULL,
  `waktu_akhir_acak_tema` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `waktu_akhir_acak_nourut`, `waktu_akhir_acak_maqra`, `waktu_akhir_acak_tema`) VALUES
(1, '2019-07-31 00:00:00', '2019-07-31 00:00:00', '2019-07-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `pakai_maqra` int(11) DEFAULT NULL,
  `pakai_tema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `pakai_maqra`, `pakai_tema`) VALUES
(1, 'Hifzhil', 1, NULL),
(2, 'Fahmil', 1, 1),
(3, 'Tilawah', NULL, NULL),
(4, 'Tilawah', 0, 0),
(5, 'coba', 0, 0),
(6, 'Tilawah', 1, 1),
(7, 'coba lagi', 1, 1),
(8, '21', 1, 0),
(9, '21', 1, 0),
(10, '21', 1, 0),
(11, 'Tilawah 1 Juz', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nomer_urut`
--

CREATE TABLE `nomer_urut` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `tgl_acak` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `kategori` int(11) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `maqra` int(11) DEFAULT NULL,
  `tema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `user_id`, `nama`, `kategori`, `urutan`, `maqra`, `tema`) VALUES
(1, 5, 'Daneswara', 1, NULL, NULL, NULL),
(2, 5, 'Daneswara', 1, NULL, NULL, NULL),
(3, 5, 'Jauhari', 2, NULL, NULL, NULL),
(4, 5, 'Coba', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `daerah` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `surat` varchar(200) DEFAULT NULL,
  `access` varchar(20) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `daerah`, `email`, `password`, `nama`, `nohp`, `surat`, `access`, `created_date`, `updated_date`, `updated_by`) VALUES
(5, 'Pati', 'new@new.com', '22af645d1859cb5ca6da0c484f1f37ea', 'Daneswara', '085730595101', 'themes10.jpg', 'admin', '2019-06-18 20:43:25', '2019-07-05 20:19:51', 0),
(6, 'Pati', 'daneswarajauhari@gmail.com', '23774d7fe41cc7e444830818ba4d308a', 'Daneswara', '085730595101', 'talin.JPG', 'user', '2019-07-05 20:07:18', '2019-07-05 20:07:18', 0),
(7, 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', '123', 'balloon.jpeg', 'user', '2019-07-05 20:08:11', '2019-07-05 20:08:11', 0),
(8, 'Surabaya', 'daneswarajauhari@ymail.com', '23774d7fe41cc7e444830818ba4d308a', 'Jauhari', '085730595101', 'pgtk.png', 'user', '2019-07-21 16:52:41', '2019-07-21 16:52:41', 0),
(9, 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', '085730595101', 'pgtk1.png', 'user', '2019-07-21 16:54:37', '2019-07-21 16:54:37', 0),
(10, '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', '085730595101', 'pgtk2.png', 'user', '2019-07-21 16:55:10', '2019-07-21 16:55:10', 0),
(11, NULL, 'admin@masbie.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL, 'admin', '2019-07-21 20:35:03', '2019-07-21 20:35:03', 5),
(12, NULL, 'admin@masbie.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL, 'admin', '2019-07-21 20:35:19', '2019-07-21 20:35:19', 5),
(13, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'Tes1', '1', 'pgtk3.png', 'user', '2019-07-27 19:59:35', '2019-07-27 19:59:35', 5),
(14, 'lagi', 'lagi', 'e691fe545314b7b56c5d82702f2be359', 'lagi', '12', 'pgtk4.png', 'user', '2019-07-27 20:04:06', '2019-07-27 20:04:06', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acak_maqra`
--
ALTER TABLE `acak_maqra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acak_tema`
--
ALTER TABLE `acak_tema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomer_urut`
--
ALTER TABLE `nomer_urut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acak_maqra`
--
ALTER TABLE `acak_maqra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acak_tema`
--
ALTER TABLE `acak_tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `nomer_urut`
--
ALTER TABLE `nomer_urut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

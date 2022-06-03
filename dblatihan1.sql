-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 01:32 PM
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
-- Database: `dblatihan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_blog`
--

CREATE TABLE `mst_blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `date_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_kategoriblog`
--

CREATE TABLE `mst_kategoriblog` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL,
  `is_active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_kategoriblog`
--

INSERT INTO `mst_kategoriblog` (`id_kategori`, `nm_kategori`, `is_active`) VALUES
(3, 'Pekerja', '1'),
(4, 'Pekerja2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `idmenu` int(11) NOT NULL,
  `nmmenu` varchar(20) NOT NULL,
  `link` varchar(30) NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`idmenu`, `nmmenu`, `link`, `is_active`) VALUES
(1, 'Dashboard', '#', 1),
(2, 'Berita', 'mod_berita', 1),
(3, 'SettingMenu', 'mod_menu', 3),
(4, 'Kategori_blog', 'mod_kategori', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`id_user`, `username`, `password`, `is_active`) VALUES
(1, 'aninur', '202cb962ac59075b964b07152d234b70', 1),
(2, 'hida', '202cb962ac59075b964b07152d234b70', 1),
(3, 'rahmad', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_blog`
--
ALTER TABLE `mst_blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `fk_id_kategori` (`id_kategori`);

--
-- Indexes for table `mst_kategoriblog`
--
ALTER TABLE `mst_kategoriblog`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_blog`
--
ALTER TABLE `mst_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_kategoriblog`
--
ALTER TABLE `mst_kategoriblog`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_blog`
--
ALTER TABLE `mst_blog`
  ADD CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `mst_kategoriblog` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

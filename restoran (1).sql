-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 06:33 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_makanan`
--

CREATE TABLE IF NOT EXISTS `harga_makanan` (
  `nama_makanan` varchar(150) NOT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_makanan`
--

INSERT INTO `harga_makanan` (`nama_makanan`, `harga`) VALUES
('Meno Kucin Haro', 78000),
('Hataru Kobisa', 78000),
('Rekota Datana', 78000),
('Ritana Dodoshi', 78000),
('Doruta Shimasi', 78000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_makanan`
--

CREATE TABLE IF NOT EXISTS `pesan_makanan` (
`id` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `nama_makanan` varchar(150) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `meja_pemesan` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `status` enum('lunas','pending') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_makanan`
--

INSERT INTO `pesan_makanan` (`id`, `nama_pemesan`, `nama_makanan`, `jumlah_pesanan`, `meja_pemesan`, `harga`, `status`) VALUES
(1, 'mohtar', 'Meno Kucin Haro', 2, 'Meja 1', 0, ''),
(2, 'dimas', 'Meno Kucin Haro', 3, 'Meja 1', 0, ''),
(3, 'dimas', 'Daruta Shimashi', 2, 'Meja 1', 0, ''),
(4, 'dimas', 'Iwana Hitanashi', 1, 'Meja 1', 0, ''),
(5, 'inul', 'Meno Kucin Haro', 1, 'Meja 1', 0, ''),
(6, 'h', 'Meno Kucin Haro', 2, 'Meja 1', 0, ''),
(7, 'konsep', 'Meno Kucin Haro', 2, 'Meja 1', 0, ''),
(8, 'konsep', 'Hataru Kobisa', 3, 'Meja 1', 0, ''),
(9, 'konsep', 'Fuida Takara', 4, 'Meja 1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','pegawai') NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `img`) VALUES
('desi', 'desi', '', 'desi.png'),
('ilmudetil', 'ilmudetil', 'Administrator', 'ilmudetil.png'),
('mohtar', 'mohtar', 'Administrator', ''),
('pegawai', 'pegawai', 'pegawai', ''),
('pegawai1', 'pegawai', 'Administrator', ''),
('zakaria', 'zakaria', '', 'zakaria.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan_makanan`
--
ALTER TABLE `pesan_makanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan_makanan`
--
ALTER TABLE `pesan_makanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 06:49 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_audio`
--

CREATE TABLE `tb_audio` (
  `kd_audio` int(11) NOT NULL,
  `nm_audio` varchar(30) NOT NULL,
  `audio` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_audio`
--

INSERT INTO `tb_audio` (`kd_audio`, `nm_audio`, `audio`) VALUES
(6, 'ATM Sule', '5e743dc2684f7.mp3'),
(7, 'Last Child', '5e743e3adc3b4.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam`
--

CREATE TABLE `tb_jam` (
  `kd_jam` int(11) NOT NULL,
  `jam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jam`
--

INSERT INTO `tb_jam` (`kd_jam`, `jam`) VALUES
(4, '07:00:00'),
(5, '23:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kd_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kd_kategori`, `nm_kategori`) VALUES
(42, 'Pelajaran Pertama'),
(43, 'Pelajaran Kedua'),
(44, 'Pelajaran Ketiga'),
(45, 'Pelajaran Keempat'),
(46, 'Pelajaran Kelima'),
(47, 'Pelajaran Keenam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nm_user` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nm_user`, `email`, `password`) VALUES
(2, 'Adiatna Sukmana', 'dyatna.id@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_audio`
--
ALTER TABLE `tb_audio`
  ADD PRIMARY KEY (`kd_audio`);

--
-- Indexes for table `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`kd_jam`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_audio`
--
ALTER TABLE `tb_audio`
  MODIFY `kd_audio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `kd_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kd_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

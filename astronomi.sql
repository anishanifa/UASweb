-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 06:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astronomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bintang`
--

CREATE TABLE `bintang` (
  `id_bintang` int(11) NOT NULL,
  `nama_konstelasi` varchar(250) NOT NULL,
  `nama_khas` varchar(250) NOT NULL,
  `nama_modern` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galaksi`
--

CREATE TABLE `galaksi` (
  `id_galaksi` int(11) NOT NULL,
  `nama_galaksi` varchar(250) NOT NULL,
  `nama_konstelasi` varchar(250) NOT NULL,
  `asal_nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `id_log` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `planet`
--

CREATE TABLE `planet` (
  `id_planet` int(11) NOT NULL,
  `nama_planet` varchar(250) NOT NULL,
  `periode_revolusi` varchar(250) NOT NULL,
  `periode_rotasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bintang`
--
ALTER TABLE `bintang`
  ADD PRIMARY KEY (`id_bintang`),
  ADD UNIQUE KEY `nama_konstelasi` (`nama_konstelasi`);

--
-- Indexes for table `galaksi`
--
ALTER TABLE `galaksi`
  ADD PRIMARY KEY (`id_galaksi`),
  ADD KEY `nama_konstelasi` (`nama_konstelasi`);

--
-- Indexes for table `log_info`
--
ALTER TABLE `log_info`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`id_planet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bintang`
--
ALTER TABLE `bintang`
  MODIFY `id_bintang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galaksi`
--
ALTER TABLE `galaksi`
  MODIFY `id_galaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_info`
--
ALTER TABLE `log_info`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planet`
--
ALTER TABLE `planet`
  MODIFY `id_planet` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galaksi`
--
ALTER TABLE `galaksi`
  ADD CONSTRAINT `galaksi_ibfk_1` FOREIGN KEY (`nama_konstelasi`) REFERENCES `bintang` (`nama_konstelasi`);

--
-- Constraints for table `log_info`
--
ALTER TABLE `log_info`
  ADD CONSTRAINT `log_info_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

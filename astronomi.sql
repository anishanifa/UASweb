-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 11:40 PM
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
  `data_image` blob DEFAULT NULL,
  `nama_konstelasi` varchar(250) NOT NULL,
  `nama_khas` varchar(250) NOT NULL,
  `nama_modern` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bintang`
--

INSERT INTO `bintang` (`id_bintang`, `data_image`, `nama_konstelasi`, `nama_khas`, `nama_modern`) VALUES
(1, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4c796e785f28636f6e7374656c6c6174696f6e29232f6d656469612f46696c653a4c796e785f4941552e737667, 'Lynx', 'XO-5', 'Absolutno'),
(2, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f43617373696f706569615f28636f6e7374656c6c6174696f6e29232f6d656469612f46696c653a43617373696f706569615f4941552e737667, 'Cassiopeia', 'η Cassiopeiae A', 'Achird'),
(3, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f43616e6365725f28636f6e7374656c6c6174696f6e29232f6d656469612f46696c653a43616e6365725f4941552e737667, 'Cancer', 'α Cancri Aa', 'Acubens'),
(4, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4c656f5f28636f6e7374656c6c6174696f6e29232f6d656469612f46696c653a4c656f5f4941552e737667, 'Leo', 'ζ Leonis Aa', 'Adhafera'),
(5, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f5461757275735f28636f6e7374656c6c6174696f6e29232f6d656469612f46696c653a5461757275735f4941552e737667, 'Taurus', 'ε Tauri Aa1', 'Ain');

-- --------------------------------------------------------

--
-- Table structure for table `galaksi`
--

CREATE TABLE `galaksi` (
  `id_galaksi` int(11) NOT NULL,
  `data_image` blob DEFAULT NULL,
  `nama_galaksi` varchar(250) NOT NULL,
  `nama_konstelasi` varchar(250) NOT NULL,
  `asal_nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galaksi`
--

INSERT INTO `galaksi` (`id_galaksi`, `data_image`, `nama_galaksi`, `nama_konstelasi`, `asal_nama`) VALUES
(1, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f416e64726f6d6564615f47616c617879232f6d656469612f46696c653a416e64726f6d6564615f47616c6178795f3536306d6d5f464c2e6a7067, 'Andromeda Galaxy', 'Andromeda', 'Andromeda, yang disingkat dari \"Galaksi Andromeda\", mendapatkan namanya dari area langit di mana ia muncul, konstelasi Andromeda.'),
(2, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f416e74656e6e61655f47616c6178696573232f6d656469612f46696c653a416e74656e6e61655f47616c61786965735f72656c6f616465642e6a7067, 'Antennae Galaxies', 'Corvus', 'Penampilannya mirip dengan antena serangga.'),
(3, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4e47435f34363232232f6d656469612f46696c653a4e47435f3436323248535446756c6c2e6a7067, 'Backward Galaxy', 'Centaurus', 'Tampaknya berputar ke belakang, karena ujung lengan spiral menunjuk ke arah rotasi.'),
(4, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f426c61636b5f4579655f47616c617879232f6d656469612f46696c653a4e47435f343832365f2d5f4853542e706e67, 'Black Eye Galaxy', 'Coma Berenices', 'Ia memiliki pita gelap spektakuler yang menyerap debu di depan inti terang galaksi, sehingga memunculkan julukan galaksi \"Mata Hitam\" atau \"Mata Jahat\".'),
(5, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4e47435f343536375f616e645f4e47435f34353638232f6d656469612f46696c653a4e47435f343536375f265f343536382e706e67, 'Butterfly Galaxies', 'Virgo', 'Penampilannya mirip dengan kupu-kupu.');

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `id_log` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `logip` binary(20) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
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

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `username`, `email`, `password`) VALUES
(1, 'Salsabila Syifa', 'ssyifa04', '20108173200004@mhs.ul.ac.id', 'salsapass'),
(2, 'Anis Hanifa', 'ahanifa10', '2010817320010@mhs.ulm.ac.id', 'anispass');

-- --------------------------------------------------------

--
-- Table structure for table `planet`
--

CREATE TABLE `planet` (
  `id_planet` int(11) NOT NULL,
  `data_image` blob DEFAULT NULL,
  `nama_planet` varchar(250) NOT NULL,
  `periode_revolusi` varchar(250) NOT NULL,
  `periode_rotasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planet`
--

INSERT INTO `planet` (`id_planet`, `data_image`, `nama_planet`, `periode_revolusi`, `periode_rotasi`) VALUES
(1, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4d6572637572795f28706c616e657429232f6d656469612f46696c653a4d6572637572795f696e5f747275655f636f6c6f722e6a7067, 'Merkurius', '88 hari', '59 hari'),
(2, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f56656e7573232f6d656469612f46696c653a56656e75735f66726f6d5f4d6172696e65725f31302e6a7067, 'Venus', '224.7 hari', '243\r\nretrograde hari'),
(3, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4561727468232f6d656469612f46696c653a5468655f426c75655f4d6172626c655f2872656d61737465726564292e6a7067, 'Bumi', '365.2 hari', '23 jam 56 menit 4 detik'),
(4, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4d617273232f6d656469612f46696c653a4f53495249535f4d6172735f747275655f636f6c6f722e6a7067, 'Mars', '687 hari', '24 jam 37 menit'),
(5, 0x68747470733a2f2f656e2e77696b6970656469612e6f72672f77696b692f4a757069746572232f6d656469612f46696c653a4a7570697465725f616e645f6974735f736872756e6b656e5f47726561745f5265645f53706f742e6a7067, 'Jupiter', '11.86 tahun', '9 jam 55 menit 30 detik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bintang`
--
ALTER TABLE `bintang`
  ADD PRIMARY KEY (`id_bintang`);

--
-- Indexes for table `galaksi`
--
ALTER TABLE `galaksi`
  ADD PRIMARY KEY (`id_galaksi`);

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
  MODIFY `id_bintang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galaksi`
--
ALTER TABLE `galaksi`
  MODIFY `id_galaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_info`
--
ALTER TABLE `log_info`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `planet`
--
ALTER TABLE `planet`
  MODIFY `id_planet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_info`
--
ALTER TABLE `log_info`
  ADD CONSTRAINT `log_info_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 05:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `id` int(20) NOT NULL,
  `tempatwisata` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempatwisata`
--

INSERT INTO `tempatwisata` (`id`, `tempatwisata`, `lokasi`, `tempat`, `foto`, `harga`) VALUES
(13, 'Wisata Kota Bontang', 'Sekitar Kota', 'Kota Bontang', '', 75000),
(15, 'Wisata Kota Samarinda', 'Sekitar Kota Samarinda', 'Samarinda', '', 90000),
(16, 'Wisata Kota Balikpapan', 'Sekitar Kota Balikpapan', 'Kota Balikpapan', '', 80000),
(17, 'Wisata Kota sangatta', 'Sekitar Kota Sangatta', 'Sangatta', '', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noiden` varchar(200) NOT NULL,
  `hp` varchar(200) NOT NULL,
  `tempatwisata` varchar(200) NOT NULL,
  `tanggalkunjungan` date NOT NULL,
  `pengunjungdewasa` int(200) NOT NULL,
  `pengunjunganak` int(200) NOT NULL,
  `harga` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `nama`, `noiden`, `hp`, `tempatwisata`, `tanggalkunjungan`, `pengunjungdewasa`, `pengunjunganak`, `harga`, `total`) VALUES
(1, 'dadu', '6472010302010001', '085251565171', 'coba', '2022-09-22', 7, 2, 50000, 225000),
(2, 'Devara Putra', '6412345678901001', '085763202420', 'coba', '2022-09-22', 2, 1, 50000, 75000),
(3, 'Devara Putra', '6412345678901001', '085763202420', 'coba', '2022-09-22', 2, 1, 50000, 75000),
(4, 'Devara Putra', '6412345678901001', '085763202420', 'Wisata Kota Samarinda', '2022-09-22', 4, 3, 90000, 315000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- NOT BU SQL DOSYASI ÖRNEK BİR VERİTABANIDIR PHPMYADMİNLE YAPILAN GERÇEK VERİ TABANI DEĞİLDİR
-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
-- 
-- Host: localhost
-- Generation Time: Jun 17, 2025 at 06:23 PM
-- Server version: 10.11.11-MariaDB-0+deb12u1
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veritabani`
--

-- --------------------------------------------------------

--
-- Table structure for table `veriler`
--

CREATE TABLE `veriler` (
  `id` int(11) NOT NULL,
  `konum` text NOT NULL,
  `tarih` date NOT NULL,
  `saat` text NOT NULL,
  `isim` text NOT NULL,
  `soyisim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veriler`
--

INSERT INTO `veriler` (`id`, `konum`, `tarih`, `saat`, `isim`, `soyisim`) VALUES
(1, '41.02016380533614, 28.711776641400473', '2025-06-04', '12.21', 'Efe', 'Kılıç');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veriler`
--
ALTER TABLE `veriler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veriler`
--
ALTER TABLE `veriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

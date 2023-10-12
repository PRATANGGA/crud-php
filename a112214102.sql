-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 05:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a112214102`
--

-- --------------------------------------------------------

--
-- Table structure for table `brg`
--

CREATE TABLE `brg` (
  `id` int(11) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `hrg` int(15) NOT NULL,
  `stok` int(5) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `almt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brg`
--

INSERT INTO `brg` (`id`, `nmbrg`, `hrg`, `stok`, `ket`, `foto`, `almt`) VALUES
(323, 'Kursi', 100000, 4, '2', '649855df98aa1.png', 'julangx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brg`
--
ALTER TABLE `brg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brg`
--
ALTER TABLE `brg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

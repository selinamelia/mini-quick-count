-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 05:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `caleg`
--

CREATE TABLE `caleg` (
  `id` int(10) UNSIGNED NOT NULL,
  `kel` varchar(70) NOT NULL,
  `tps` int(2) NOT NULL,
  `score1` int(11) DEFAULT '0',
  `score2` int(10) NOT NULL,
  `score3` int(10) NOT NULL,
  `scorehj` int(10) NOT NULL,
  `score5` int(10) NOT NULL,
  `score6` int(10) NOT NULL,
  `score7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caleg`
--

INSERT INTO `caleg` (`id`, `kel`, `tps`, `score1`, `score2`, `score3`, `scorehj`, `score5`, `score6`, `score7`) VALUES
(26, 'men', 20, 5, 5, 5, 100, 5, 10, 9),
(28, 'dat', 1, 5, 5, 70, 66, 9, 9, 7),
(29, 'dat', 2, 9, 9, 8, 99, 10, 7, 18),
(30, 'tan', 22, 1, 1, 1, 1, 11, 1, 1),
(31, 'tun', 21, 1, 1, 11, 111, 1, 1, 1),
(32, 'tim', 22, 1, 1, 11, 1111, 1, 11, 1),
(33, 'tan', 1, 2, 2, 22, 2, 12, 121, 3);

-- --------------------------------------------------------

--
-- Table structure for table `partai`
--

CREATE TABLE `partai` (
  `id` int(10) UNSIGNED NOT NULL,
  `kel` varchar(70) NOT NULL,
  `name` varchar(30) NOT NULL,
  `score` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partai`
--

INSERT INTO `partai` (`id`, `kel`, `name`, `score`) VALUES
(1, 'men', 'Partai Kebangkitan Bangsa', 15),
(2, 'men', 'Gerindra', 15),
(3, 'men', 'PDI Perjuangan', 3),
(4, 'men', 'Golkar', 471),
(5, 'men', 'Nasdem', 3),
(6, 'men', 'Partai Garuda', 3),
(7, 'dat', 'Golkar', 356),
(8, 'dat', 'Partai', 10),
(9, 'tim', 'FF', 12),
(10, 'tan', 'HMM', 12),
(11, 'kar', 'FQ', 11),
(12, 'tan', 'SEL', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caleg`
--
ALTER TABLE `caleg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caleg`
--
ALTER TABLE `caleg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `partai`
--
ALTER TABLE `partai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

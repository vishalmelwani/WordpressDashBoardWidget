-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 12:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpressdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_demoData`
--

CREATE TABLE `wp_demodata` (
  `demoData_id` int(20) NOT NULL,
  `demoDataYval` int(11) DEFAULT NULL,
  `demoDataTimestamp` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_demoData`
--

INSERT INTO `wp_demoData` (`demoData_id`, `demoDataYval`, `demoDataTimestamp`) VALUES
(2, 75, '2022-10-01 03:22:41'),
(3, 52, '2022-10-02 03:22:41'),
(4, 63, '2022-10-03 03:22:41'),
(5, 65, '2022-10-04 03:22:41'),
(6, 63, '2022-10-05 03:22:41'),
(7, 73, '2022-10-06 03:22:41'),
(8, 92, '2022-10-07 03:22:41'),
(9, 83, '2022-10-08 03:22:41'),
(10, 38, '2022-10-09 03:22:41'),
(11, 83, '2022-10-10 03:22:41'),
(12, 27, '2022-10-11 03:22:41'),
(13, 93, '2022-10-12 03:22:41'),
(14, 63, '2022-10-13 03:22:41'),
(15, 18, '2022-10-14 03:22:41'),
(16, 45, '2022-10-15 03:22:41'),
(17, 33, '2022-10-16 03:22:41'),
(18, 51, '2022-10-17 03:22:41'),
(19, 77, '2022-10-18 03:22:41'),
(20, 63, '2022-10-19 03:22:41'),
(21, 37, '2022-10-20 03:22:41'),
(22, 45, '2022-10-21 03:22:41'),
(23, 65, '2022-10-22 03:22:41'),
(24, 19, '2022-10-23 03:22:41'),
(25, 33, '2022-10-24 03:31:25'),
(26, 12, '2022-10-25 03:22:41'),
(27, 75, '2022-10-26 03:22:41'),
(1, 89, '2022-10-27 03:22:41'),
(28, 34, '2022-10-28 03:22:41'),
(29, 21, '2022-10-29 03:22:41'),
(30, 19, '2022-10-30 03:22:41'),
(31, 10, '2022-10-31 03:22:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_demoData`
--
ALTER TABLE `wp_demoData`
  ADD PRIMARY KEY (`demoData_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_demoData`
--
ALTER TABLE `wp_demoData`
  MODIFY `demoData_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

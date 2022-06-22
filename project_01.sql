-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 04:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy_name`
--

CREATE TABLE `academy_name` (
  `id` int(10) UNSIGNED NOT NULL,
  `academyName` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academy_name`
--

INSERT INTO `academy_name` (`id`, `academyName`) VALUES
(1, 'Студенти од Маркетинг'),
(2, 'Студенти од Програмирање'),
(3, 'Студенти од Data-Science'),
(4, 'Студенти од Дизајн');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstLastName` varchar(32) DEFAULT NULL,
  `companyName` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `academyName` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `firstLastName`, `companyName`, `email`, `phone`, `academyName`) VALUES
(1, 'vladimir momiroski', 'gfwaojg', 'vladimirmomiroski@gmail.com', '2325421521', 'Академија за data_science'),
(2, 'fwagwa', 'gwfagwag', 'gwagawgwa@gmail.com', '2223', 'Академија за маркетинг'),
(3, 'petre p', 'fiawjpfowpa', 'vladimirmomiroskiii@gmail.com', '2324512521', 'Академија за програмирање'),
(4, 'petre p', 'gwfagwag', 'srcemoenajuboo@gmail.com', '2325421521', 'Студенти од Програмирање'),
(5, 'Aleksandar Filipovski', 'gfwaojg', 'gwagawewrwgwa@gmail.com', '2324512521', 'Студенти од Data-Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy_name`
--
ALTER TABLE `academy_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy_name`
--
ALTER TABLE `academy_name`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

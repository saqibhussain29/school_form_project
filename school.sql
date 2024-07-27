-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 03:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(222) DEFAULT NULL,
  `last_name` varchar(222) DEFAULT NULL,
  `father_name` varchar(222) DEFAULT NULL,
  `mother_name` varchar(222) DEFAULT NULL,
  `school` varchar(222) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(222) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`std_id`, `std_name`, `last_name`, `father_name`, `mother_name`, `school`, `class`, `email`, `age`, `gender`, `file_name`, `file_size`, `file_type`) VALUES
(1, 'Pugh', 'Serrano', 'tode@mailinator.com', 'peperu@mailinator.com', 'futywoke@mailinator.com', 0, 'zymomegyx@mailinator.com', 17, '0', 'download (2).jpg', 4356, 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

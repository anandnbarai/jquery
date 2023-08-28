-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 10:50 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `an`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `date`) VALUES
(1, 'Jim Connor', 'jimconnor@yahoo.com', '2023-08-03 06:04:28'),
(2, 'Mark Higgins', 'mark.higgins21@yahoo.com', '2022-10-12 06:04:28'),
(3, 'Austin Joseph', 'austin.joseph.boston@gmail.com', '2022-06-07 06:04:28'),
(4, 'Sean Kennedy', 'seankennedy01@gmail.com', '2023-08-15 06:04:28'),
(5, 'Rose Harris', 'roseharris@gmail.com', '2023-06-14 06:04:28'),
(6, 'Lilly Whites', 'lillywhites@outlook.com', '2023-08-28 06:04:28'),
(7, 'Jennifer Winters', 'jennie.winters001@gmail.com', '2023-08-28 06:04:28'),
(8, 'Michael Bruce', 'michaelbruce78@yahoo.com', '2021-12-14 06:04:28'),
(9, 'John Alex', 'johnalex@example.com', '2023-08-28 06:04:28'),
(10, 'Demi Milan', 'demimilan@gmail.com', '2023-08-28 06:04:28'),
(11, 'Austin Joseph', 'austin.joseph.boston@gmail.com', '2023-08-28 06:04:28'),
(12, 'Mark Higgins', 'mark.higgins21@yahoo.com', '2023-08-28 06:04:28'),
(13, 'Sean Kennedy', 'seankennedy.boss@outlook.com', '2023-05-22 06:04:28'),
(14, 'Mark Higgins', 'mark.higgins21@yahoo.com', '2022-09-14 06:04:28'),
(15, 'Anand Barai', 'admin@gmail.com', '2023-08-24 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

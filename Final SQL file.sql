-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 10:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `sl.no` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `eventid` int(11) NOT NULL,
  `action` varchar(25) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`sl.no`, `name`, `eventid`, `action`, `c_date`) VALUES
(1, 'ss', 17, 'inserted', '2018-12-05 23:54:19'),
(2, 'ss', 17, 'inserted', '2018-12-05 23:56:07'),
(3, 'dilli', 15, 'UPDATED', '2018-12-05 23:59:06'),
(4, 'DEEPA', 2, 'DELETED', '2018-12-05 23:59:26'),
(5, 'nikitha', 6, 'DELETED', '2018-12-05 23:59:32'),
(6, 'abcd', 7, 'DELETED', '2018-12-05 23:59:46'),
(7, 'DEEPA', 8, 'DELETED', '2018-12-05 23:59:53'),
(8, 'dilli', 15, 'DELETED', '2018-12-05 23:59:58'),
(9, 'ss', 17, 'DELETED', '2018-12-06 00:00:04'),
(10, 'dee', 18, 'INSERTED', '2018-12-06 00:02:32'),
(11, 'dee', 19, 'INSERTED', '2018-12-06 00:12:51'),
(12, 'dee', 18, 'DELETED', '2018-12-06 00:21:44'),
(13, 'dee', 19, 'DELETED', '2018-12-06 00:21:51'),
(14, 'maggi', 1, 'INSERTED', '2018-12-06 00:53:55'),
(15, 'deepa', 2, 'INSERTED', '2018-12-06 14:47:08'),
(16, 'deepashree', 2, 'UPDATED', '2018-12-06 14:48:39'),
(17, 'deepashree', 2, 'DELETED', '2018-12-06 14:49:50'),
(18, 'Deepashree Chandrashekar', 2, 'INSERTED', '2023-04-27 22:34:40'),
(19, 'maggi', 1, 'DELETED', '2023-04-28 13:26:14'),
(20, 'Deepashree Chandrashekar', 2, 'DELETED', '2023-04-28 13:27:29'),
(21, 'Test1', 3, 'INSERTED', '2023-04-28 13:34:42'),
(22, 'Test2', 4, 'INSERTED', '2023-04-28 13:37:35'),
(23, 'Test3', 5, 'INSERTED', '2023-04-28 22:22:03'),
(24, 'deepa@gmail.com', 6, 'INSERTED', '2023-04-29 01:18:23'),
(25, 'deepa@gmail.com', 7, 'INSERTED', '2023-04-29 01:19:42'),
(26, 'deepa@gmail.com', 8, 'INSERTED', '2023-04-29 01:25:32'),
(27, 'deepa@gmail.com', 9, 'INSERTED', '2023-04-29 01:27:49'),
(28, 'deepa@gmail.com', 10, 'INSERTED', '2023-04-29 01:28:48'),
(29, 'deepa@gmail.com', 11, 'INSERTED', '2023-04-29 01:28:56'),
(30, 'Test1', 3, 'DELETED', '2023-04-29 10:56:44'),
(31, 'Test2', 4, 'DELETED', '2023-04-29 10:56:50'),
(32, 'Deepa', 12, 'INSERTED', '2023-04-29 22:50:03'),
(33, 'Deepa', 13, 'INSERTED', '2023-04-29 22:50:14'),
(34, 'Deepa', 14, 'INSERTED', '2023-04-29 22:50:52'),
(35, 'Deepa', 15, 'INSERTED', '2023-04-29 22:53:44'),
(36, 'Deepa', 16, 'INSERTED', '2023-04-29 22:53:44'),
(37, 'Test3', 17, 'INSERTED', '2023-04-29 22:54:09'),
(38, 'Deepa', 18, 'INSERTED', '2023-04-29 23:07:09'),
(39, 'Deepa', 19, 'INSERTED', '2023-04-29 23:07:17'),
(40, 'Deepa', 20, 'INSERTED', '2023-04-29 23:09:37'),
(41, 'Deepa', 21, 'INSERTED', '2023-04-29 23:10:04'),
(42, 'Deepa', 22, 'INSERTED', '2023-04-30 00:11:08'),
(43, 'Test3', 23, 'INSERTED', '2023-04-30 00:26:04'),
(44, 'Test3', 24, 'INSERTED', '2023-04-30 00:59:27'),
(45, 'test 0', 25, 'INSERTED', '2023-04-30 01:23:22'),
(46, 'Test3', 5, 'DELETED', '2023-04-30 01:24:10'),
(47, 'Deepa', 25, 'UPDATED', '2023-04-30 01:26:54'),
(48, 'Test 5', 26, 'INSERTED', '2023-04-30 09:20:06'),
(49, 'Test final', 26, 'UPDATED', '2023-04-30 09:21:52'),
(50, 'deepa@gmail.com', 6, 'DELETED', '2023-04-30 09:22:19'),
(51, 'deepa@gmail.com', 7, 'DELETED', '2023-04-30 09:22:26'),
(52, 'deepa@gmail.com', 8, 'DELETED', '2023-04-30 09:22:33'),
(53, 'deepa@gmail.com', 9, 'DELETED', '2023-04-30 09:22:39'),
(54, 'deepa@gmail.com', 10, 'DELETED', '2023-04-30 09:22:46'),
(55, 'deepa@gmail.com', 11, 'DELETED', '2023-04-30 09:22:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`sl.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `sl.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

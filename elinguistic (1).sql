-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 04:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elinguistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `elinguistic_users`
--

CREATE TABLE `elinguistic_users` (
  `id` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elinguistic_users`
--

INSERT INTO `elinguistic_users` (`id`, `fname`, `lname`, `email`, `mobile`, `password`) VALUES
(1, 'Ketaki', 'Keluskar', 'kjkeluskar1@gmail.com', 2147483647, 'e04ea4423af9863bbf71787fe1df5b30'),
(2, 'K', 'K', 'kjkel@kjk.com', 2147483647, '204e00cc2d9202582fa677f97ebcfa0a'),
(3, 'K', 'K', 'k@k.com', 1122331122, '5b5495238cc788b0aed52c2c9bdf54e4'),
(4, 'dumdum', 'dum', 'dumdum@dum.com', 2147483647, '08ceec513c22a793e80c4256a83b9837'),
(5, 'A', 'A', 'a@a.com', 2147483647, '60a4d2e781aa05c5e7cb7a818f572433'),
(6, 'B', 'B', 'b@b.com', 2147483647, '5f8ef50ad5d5e85042081a21b4e120d6'),
(7, 'hello', 'h', 'h@h.com', 2147483647, '8d7b2306c5b42a1e2b8c2e6104e5c788');

-- --------------------------------------------------------

--
-- Table structure for table `languages_opt`
--

CREATE TABLE `languages_opt` (
  `email` varchar(100) NOT NULL,
  `language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages_opt`
--

INSERT INTO `languages_opt` (`email`, `language`) VALUES
('a@a.com', 'Spanish_A2'),
('a@a.com', 'Spanish_A2'),
('a@a.com', 'Spanish_A2'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('a@a.com', 'Spanish_A1'),
('b@b.com', 'Spanish_A2'),
('b@b.com', 'Spanish_A2'),
('b@b.com', 'Spanish_A2'),
('b@b.com', 'Spanish_A2'),
('b@b.com', 'Spanish_A1'),
('h@h.com', 'Spanish_A2'),
('h@h.com', 'Spanish_A1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elinguistic_users`
--
ALTER TABLE `elinguistic_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elinguistic_users`
--
ALTER TABLE `elinguistic_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 03:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aicte_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `expert` text NOT NULL,
  `problem1` text NOT NULL,
  `problem2` text NOT NULL,
  `problem3` text NOT NULL,
  `problem4` text NOT NULL,
  `problem5` text NOT NULL,
  `problem6` text NOT NULL,
  `problem7` text NOT NULL,
  `problem8` text NOT NULL,
  `problem9` text NOT NULL,
  `problem10` text NOT NULL,
  `problem11` text NOT NULL,
  `problem12` text NOT NULL,
  `problem13` text NOT NULL,
  `problem14` text NOT NULL,
  `problem15` text NOT NULL,
  `problem16` text NOT NULL,
  `problem17` text NOT NULL,
  `problem18` text NOT NULL,
  `problem19` text NOT NULL,
  `problem20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `email`, `phone`, `expert`, `problem1`, `problem2`, `problem3`, `problem4`, `problem5`, `problem6`, `problem7`, `problem8`, `problem9`, `problem10`, `problem11`, `problem12`, `problem13`, `problem14`, `problem15`, `problem16`, `problem17`, `problem18`, `problem19`, `problem20`) VALUES
(2, 0, 0, 2147483647, 'baljeet singh', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n', '<p>dsaas</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

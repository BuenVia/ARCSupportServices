-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 12:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevda`
--

-- --------------------------------------------------------

--
-- Table structure for table `vdaform`
--

CREATE TABLE `vdaform` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suffix` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vdaform`
--

INSERT INTO `vdaform` (`id`, `date`, `suffix`, `surname`, `fname`, `street`, `town`, `county`, `postcode`, `phone`) VALUES
(1, '2021-04-27 17:56:19', '', '', '', '', '', '', '', ''),
(2, '2021-04-27 17:56:26', '', '', '', '', '', '', '', ''),
(3, '2021-04-27 17:56:49', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vdaform`
--
ALTER TABLE `vdaform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vdaform`
--
ALTER TABLE `vdaform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

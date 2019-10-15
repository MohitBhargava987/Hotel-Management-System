-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 06:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms`
--

CREATE TABLE `hms` (
  `id` int(10) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms`
--

INSERT INTO `hms` (`id`, `username`, `email`, `password`, `phone`, `date`) VALUES
(4, 'mohit bhagrava', 'mohitbhargava987@gmail.com', '$2y$10$o3mos8kfcxP/zcm8XLD3IeoSkwNYhquKtd2rpknYL6Qbb3FdjawUy', 21313, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hms1`
--

CREATE TABLE `hms1` (
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Rooms` int(10) DEFAULT NULL,
  `Members` int(200) DEFAULT NULL,
  `Date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms1`
--

INSERT INTO `hms1` (`Name`, `Email`, `Rooms`, `Members`, `Date`) VALUES
('Mohan', 'm@gmail.com', 2, 3, '02 03 19'),
('Mohit Bhargava', 'mohitbhargava987@gmail.com', 2, 4, '07 07 19');

-- --------------------------------------------------------

--
-- Table structure for table `hms2`
--

CREATE TABLE `hms2` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms2`
--

INSERT INTO `hms2` (`id`, `name`, `email`, `phone`, `message`) VALUES
(3, 'Mohit Bhargava', 'mohitbhargava987@gmail.com', 2147483647, 'vfff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hms`
--
ALTER TABLE `hms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms2`
--
ALTER TABLE `hms2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hms`
--
ALTER TABLE `hms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hms2`
--
ALTER TABLE `hms2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

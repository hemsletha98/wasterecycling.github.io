-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 04:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasterecycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `sellerId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`sellerId`, `productName`, `productAmount`) VALUES
(5, 'SUGARCANE', 200),
(7, 'SUGARCANE', 4522),
(11, 'WOOD', 500);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `sellerId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` int(12) NOT NULL,
  `companyName` varchar(70) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `zipCode` int(10) NOT NULL,
  `street` varchar(70) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`sellerId`, `firstName`, `lastName`, `email`, `phoneNumber`, `companyName`, `city`, `area`, `zipCode`, `street`, `password`) VALUES
(2, 'kandula', 'jaya surya', 'jayasurya036@gmail.com', 2147483647, 'jayasofts', 'vishakapatanam', 'aganapudi', 530046, '2-120/9, prasanthi nagar, steel plant hospital road aganampudi, vishak', '0'),
(3, 'kandula', 'jaya surya', 'jayasurya036@gmail.com', 2147483647, 'jayasofts', 'vishakapatanam', 'aganapudi', 530046, '2-120/9, prasanthi nagar, steel plant hospital road aganampudi, vishak', '0'),
(4, 'kandula', 'jaya surya', 'jayasurya036@gmail.com', 2147483647, 'jayasofts', 'vishakapatanam', 'aganapudi', 530046, '2-120/9, prasanthi nagar, steel plant hospital road aganampudi, vishak', '0'),
(5, 'kandula', 'jaya surya', 'jayasurya036@gmail.com', 2147483647, 'jayasofts', 'vishakapatanam', 'aganapudi', 530046, '2-120/9, prasanthi nagar, steel plant hospital road aganampudi, vishak', 'jayasurya'),
(6, '', '', '', 0, '', '', '', 0, '20', 'Saiteja@123'),
(7, 'ram', 'sri', 'ramsri@gmai.com', 2145669785, 'rameshFabrics', 'vizag', 'nad', 530012, '20', 'ramsri123'),
(8, '', '', '', 0, '', '', '', 0, '20', 'Saiteja@123'),
(10, 'ldskhf', 'dhfk', 'xxx@gmail.com', 9878789, 'dfdskfdJLALFJAL', 'ljldfjdf', 'ldjflj', 0, '', ''),
(11, 'ldskhf', 'dhfk', 'xxxx@gmail.com', 9878789, 'dfdskfdJLALFJAL', 'ljldfjdf', 'ldjflj', 564, 'sldjfl', 'xxxx'),
(12, '', '', '', 0, '', '', '', 0, '20', 'Saiteja@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productinfo`
--
ALTER TABLE `productinfo`
  ADD PRIMARY KEY (`sellerId`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`sellerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `productinfo`
--
ALTER TABLE `productinfo`
  ADD CONSTRAINT `sellerId` FOREIGN KEY (`sellerId`) REFERENCES `sellers` (`sellerId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3300
-- Generation Time: Jan 09, 2019 at 06:32 PM
-- Server version: 5.5.60-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sno` int(11) NOT NULL,
  `name` char(100) DEFAULT NULL,
  `phone_number` char(100) DEFAULT NULL,
  `place` char(200) DEFAULT NULL,
  `i1` char(10) DEFAULT NULL,
  `i2` char(10) DEFAULT NULL,
  `i3` char(10) DEFAULT NULL,
  `i4` char(10) DEFAULT NULL,
  `i5` char(10) DEFAULT NULL,
  `i6` char(10) DEFAULT NULL,
  `i7` char(10) DEFAULT NULL,
  `i8` char(10) DEFAULT NULL,
  `i9` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sno`, `name`, `phone_number`, `place`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`) VALUES
(12, 'sai', '9533244333', 'shiridi', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, 'Prabhu', '9994058168', 'Nitc', '1', '3', '0', '0', '0', '0', '0', '0', '0'),
(14, 'B Mohan karthik', '9656419058', 'Room no 202 A hostel', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, 'Kabaka', '9922661188', 'Beach road', '0', '0', '0', '0', '0', '0', '1', '0', '0'),
(16, 'Dhj', '35', 'Fhjk', '2', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, 'Kaluvakuri Sandeep Chowdary', '7902981378', 'C   Hostel-321', '0', '1', '0', '0', '0', '0', '0', '0', '0'),
(18, 'Gowtham', '8639267634', 'B hostel Room-107', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(19, 'Ishal Baji', '8943945779', ' B', '0', '1', '0', '0', '0', '0', '0', '0', '0'),
(20, 'Satpal', '418#503629', 'A hostel', '1', '0', '0', '0', '0', '0', '2', '0', '0'),
(21, 'Gsksj', '418#503629', 'A hostel', '2', '0', '0', '0', '0', '0', '0', '0', '0'),
(22, 'Mff', '45', 'Cfd', '1', '1', '0', '0', '0', '0', '0', '0', '0'),
(23, 'lavadalo programs', '01010101010', 'picchi guddhala hostel', '0', '9', '7', '7', '7', '7', '6', '0', '0'),
(24, 'allu', '21346', 'kkg', '1', '1', '0', '0', '0', '0', '0', '0', '0'),
(25, 'botta', '42342344', 'kkd', '5', '1', '3', '0', '0', '0', '0', '0', '0'),
(26, 'sandhya rani', '9618544377', 'lormi', '1', '2', '1', '2', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `f1` char(50) DEFAULT NULL,
  `p1` char(30) DEFAULT NULL,
  `f2` char(50) DEFAULT NULL,
  `p2` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`f1`, `p1`, `f2`, `p2`) VALUES
('Nafeesa Ashik', '9747411037', 'Annette Johnson', '9562135683'),
('', '', '', ''),
('U.Praneeth', '8985410496', 'Sridhar', '8137034286'),
('Surya prakash', '6282754705', 'Harish', '6282117059'),
('', '', '', ''),
('B Sai Krishna', '9494348020', 'Bhanu Prakash', '8891749974'),
('Akhil Akhi', '8921303848', 'Vishal Fish', '8848382640'),
('AKISETTI SAI TEJA', '8089907579', 'G SUNIL', '8089196962'),
('Akhil Akhi', '8921303848', 'Vishal Fish', '8848382640'),
('om', '283790432', 'sai', '823p943246'),
('rahul', '12345667', 'botta', '1123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

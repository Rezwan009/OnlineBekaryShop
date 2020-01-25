-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 05:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `price` double(7,2) NOT NULL,
  `ShortDes` varchar(20) NOT NULL,
  `Fulldes` varchar(20) NOT NULL,
  `catagory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `ShortDes`, `Fulldes`, `catagory`) VALUES
(48, 'cake', '1205', 'download.jpg', 69.00, 'This Cake is so tast', 'This Cake is so tast', 'dry'),
(49, 'cake1', '5050', 'images (6).jpg', 115.00, 'This Cake is so tast', 'This Cake is so tast', 'dry'),
(50, 'Cake2', '0020255', 'images (5).jpg', 40.00, 'This Cake is so tast', 'This Cake is so tast', 'dry'),
(51, 'pastry cake', '1001', 'images (8).jpg', 120.00, 'This pastry is so ta', 'This pastry is so ta', 'pastry'),
(52, 'pastry2', '1002', 'images (15).jpg', 150.00, 'This pastry is so ta', 'This pastry is so ta', 'pastry'),
(53, 'pastry3', '103200', 'images.jpg', 133.00, 'This pastry is so ta', 'This pastry is so ta', 'pastry'),
(54, 'Sweet', '0009', 'images (13).jpg', 250.00, 'This Sweet is so tas', 'This Sweet is so tas', 'Special Sweets'),
(55, 'Sweet2', '00010', 'images (14).jpg', 300.00, 'This Sweet is so tas', 'This Sweet is so tas', 'Special Sweets'),
(56, 'Sweet3', '00012', 'images (11).jpg', 175.00, 'This Sweet is so tas', 'This Sweet is so tas', 'sweet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 01:00 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Afirstname` varchar(20) NOT NULL,
  `Alastname` varchar(20) NOT NULL,
  `Ausername` varchar(20) NOT NULL,
  `Aaddress` varchar(20) NOT NULL,
  `Aemail` varchar(20) NOT NULL,
  `Apassword` varchar(20) NOT NULL,
  `Agender` char(20) NOT NULL,
  `PhoneCode` varchar(20) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Afirstname`, `Alastname`, `Ausername`, `Aaddress`, `Aemail`, `Apassword`, `Agender`, `PhoneCode`, `PhoneNumber`) VALUES
(1, 'csaff', 'fsssssssss', 'sfff', 'sffsfs', 'avba@gmail.com', 'Aiub@1234', 'M', ' 018', '01894218542'),
(2, 'Mesbah', 'Ahmed', 'Rezo', 'Dhaka-205', 'arezwan93@gmail.com', 'Aiub@1234', 'M', ' 018', '01894218542'),
(3, 'Mesbah', 'Haque', 'haque', 'Dhaka-1205', 'emon74653@gmail.com', 'Aiub21234', 'M', ' 018', '018533333333');

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
(25, 'Cake1', '12051d', 'images (2).jpg', 69.00, 'aaaafafa', 'its minex', 'pastry'),
(26, 'Cake2', '12051d', 'download.jpg', 69.00, 'its mex', 'fafafa', 'dry'),
(28, 'cake2', '1205', 'images (1).jpg', 50.00, 'its me', 'its mine', 'pastry'),
(29, 'cake3', '103200', 'images (3).jpg', 69.00, 'aaaafafa', 'fafafa', 'pastry'),
(30, 'cake4', '0020255', 'download.jpg', 69.00, '$ shortdes', 'its mine', ''),
(31, 'cake5', '1205', 'images (8).jpg', 69.00, 'aaaafafa', 'its mine', 'sweet'),
(32, 'cake', '5050', 'images (7).jpg', 69.00, 'its me', 'its mine', 'dry'),
(35, '', '', 'images (6).jpg', 0.00, '$ shortdes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(4) NOT NULL,
  `UFname` varchar(20) NOT NULL,
  `ULastname` varchar(20) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Uaddress` varchar(20) NOT NULL,
  `Uemail` varchar(20) NOT NULL,
  `Upassword` varchar(20) NOT NULL,
  `Ugender` char(20) NOT NULL,
  `PhoneCode` varchar(20) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UFname`, `ULastname`, `Uname`, `Uaddress`, `Uemail`, `Upassword`, `Ugender`, `PhoneCode`, `PhoneNumber`) VALUES
(1, 'Mesbah', 'UlHaque', 'alamin', 'Dhaka-1205', 'arezwan93@gmail.com', 'Aiub@1234', 'F', ' 018', '01942513643'),
(2, 'alamin', 'ahmed', 'alo', 'dhaka-1205', 'alao@gmail.com', 'Aiub@12234', 'F', '017', '5431334301'),
(3, 'farabi', 'ahmed', 'Faro', 'dhaka-1205', 'ffaro@gmail.com', 'Faro@1234', 'M', '016', '8485456565656'),
(4, 'hassan', 'Chy', 'nafi', 'dhaka-1205', 'nafi@gmail.com', 'Nafi@1234', 'M', '018', '4545656565656'),
(5, 'rakib', 'hasssan', 'rako', 'dhaka-1205', 'Rakib@gmail.com', 'Rakib@1234', '0', '019', '01944322'),
(6, 'Rezwan', 'Ahmed', 'Rezo', 'Dhaka-1205', 'rezonmajhi@gmail.com', 'Aiub@12334', 'M', ' 019', '01894218542'),
(8, 'farabi', 'Chy', 'Faro', 'dhaka-1205', 'farhinfarabi1234@gma', 'Nafi@1234', 'F', '018', '5431334301');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

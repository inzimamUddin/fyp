-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 11:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_workshop`
--

CREATE TABLE `add_workshop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_workshop`
--

INSERT INTO `add_workshop` (`id`, `name`, `ownername`, `address`, `contact`, `latitude`, `longitude`) VALUES
(32, 'ptdc', 'lkjl', 'chitral town', '3423423', '35.85982933731695', '71.78595027696451'),
(33, 'city ws', 'karam', 'chitral', '3423423', '35.854994651792865', ' 71.78715190659649'),
(34, 'view', 'khan', 'goldur', '34234', '35.852542414425315', '71.7803069092286'),
(35, 'brothers', 'ali', 'danin', '3324234', '35.863446463235874', '71.78882560502727'),
(36, 'jfjj', 'akdj', 'orghoch', '4982934', '35.86407246416288', ' 71.79624997515184'),
(37, 'ali', 'kha n', 'jughur', '3423', '35.856472891035295', ' 71.78985558889595');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'inzi', 'inzimam@gmail.com', 'inzi123', '2016-04-04 20:31:45', '2022-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(14, 'inzi', 'inzii@gmail.com', '$2y$10$zluQ2scFvlcdiSrgpLaDIu6maXOrRN9/pCjrEY3A8l3tfnD7ZsJb6', '$2y$10$sFb.DOo/Md0az.CAClVRHu5q4c4Wl7MhQIW7F1JO4Xc.nz3ohYufm'),
(15, 'raf', 'raf@gmail.com', '$2y$10$4NmZ8xnXfdv.VxUM/vbBw.gLxw//t/RuEHI0rViM9Uix53/Zy8o6i', '$2y$10$fCmaf9n8caPOKK66dmKDS.WRCUi14JykDELoGQJR8mYcAuJ.QqLRe'),
(16, 'karam', 'karam@gmail.com', '$2y$10$Bb.sPH9z8OmlZ6jXGRlsi.jyRUJym7aiVzGkYDuaKTTeoE5oAf0Ty', '$2y$10$NCuXcySAa1tKzo8ZA6ghnub1Q0KWkwBreomojJFcThhLWKv2UiSna'),
(17, 'adil', 'adil@gmail.com', '$2y$10$u1uD2fWu99tymgeq5HKBaOuU3eGYjrZ33K.jNrTmHuut3LZ3zUbAm', '$2y$10$lgdeNT7c.ln4NIWUCZLPXujQUx0C0VxOC7.pdzROIWJXArqz2W73q'),
(18, 'qadi', 'qadir@gmail.com', '$2y$10$VWps./QvCfzeiqOE0u864Ohs.2ZKR2/56IJI32ML2.0Grrnnvgevu', '$2y$10$x38d3ewxgv3zHy.iPQvslerxul5W6pFoKQqP175endVTtMQGWCVdW'),
(19, 'inzii', 'inz@gmail.com', '$2y$10$P4KC453pDz9Tk1nL.YFWyuWo6Gv3pyplrZmEHmezB7QM7H3YsEjKy', '$2y$10$ETdlmxPqUetm0r3sbS9y/eugl3MQ6ptTV9E.JhIVzfWb5RudSNbt.');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'Benjamin@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 10, 'test@gmail.com', 0x3a3a31, '', '', '2019-02-10 07:43:43'),
(8, 21, 'flga@gmail.com', 0x3a3a31, '', '', '2019-02-10 08:49:33'),
(9, 21, 'flga@gmail.com', 0x3a3a31, '', '', '2019-02-10 08:52:11'),
(10, 21, 'flga@gmail.com', 0x3a3a31, '', '', '2019-02-10 08:54:58'),
(11, 22, 'inzi@gmail.com', 0x3a3a31, '', '', '2022-09-13 05:26:53'),
(12, 22, 'inzi@gmail.com', 0x3a3a31, '', '', '2022-09-13 10:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(10, '108061211', 'code', 'test', 'projects', 'male', 8467067344, 'test@gmail.com', 'Test@123', '2016-06-22 04:21:33', '23-06-2016 11:04:15', '22-06-2016 05:16:49'),
(19, '102355', 'Harry', 'projects', 'Singh', 'male', 6786786786, 'Harry@gmail.com', '6786786786', '2016-06-26 16:33:36', '', ''),
(20, '586952', 'Benjamin', '', 'projects', 'male', 8596185625, 'Benjamin@gmail.com', '8596185625', '2016-06-26 16:40:07', '', ''),
(22, '', 'inzimam', 'khan', 'qahri', 'male', 203097628, 'inzi@gmail.com', 'inzi', '2022-09-13 05:26:41', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_workshop`
--
ALTER TABLE `add_workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_workshop`
--
ALTER TABLE `add_workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

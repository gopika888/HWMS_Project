-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hwms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collector`
--

CREATE TABLE `tbl_collector` (
  `cid` int(10) NOT NULL,
  `wid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ano` varchar(12) NOT NULL,
  `cno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_collector`
--

INSERT INTO `tbl_collector` (`cid`, `wid`, `cname`, `ano`, `cno`) VALUES
(2158, 7, 'Gini Manoj', '958745698547', '7589658745'),
(2980, 7, 'Manju Anu', '963852741852', '9112378945'),
(4120, 7, 'Jagathamma', '963852456753', '9512374185'),
(5678, 7, 'Bindhu Panicker', '823409453678', '8529637418'),
(5847, 7, 'Vanaja Kumari', '659847586598', '635485745'),
(6734, 7, 'Kavya Madhavan', '761234560178', '7539518524'),
(6836, 7, 'Rajitha Harikumar', '785296325686', '7869451589'),
(7890, 7, 'Rehana Fathima', '45897958475', '9548255876'),
(8521, 7, 'Gayathri Soman', '753951852159', '9634562511'),
(8790, 7, 'Sindhu Suresh', '963741598861', '9988555050');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `uid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`uid`, `uname`, `upass`, `utype`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'gopika@gmail.com', 'gopika@123', 'User'),
(4, 'gayathri@gmail.com', 'gayathri@123', 'Collector'),
(6, 'gini@gmail.com', 'gini@123', 'Collector'),
(9, 'kavya@gmail.com', 'kavya@123', 'User'),
(10, 'athira@gmail.com', '12345', 'User'),
(18, 'sreedevi@gmail.com', 'sreedevi@123', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_panchayat`
--

CREATE TABLE `tbl_panchayat` (
  `pid` int(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `no_ward` varchar(20) NOT NULL,
  `no_collectors` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_panchayat`
--

INSERT INTO `tbl_panchayat` (`pid`, `pname`, `no_ward`, `no_collectors`) VALUES
(1, 'Anikadu', '7', '14'),
(101, 'Ayiroor', '16', '32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pyid` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `cid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_residence`
--

CREATE TABLE `tbl_residence` (
  `rid` int(10) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `pno` varchar(11) NOT NULL,
  `pay` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_residence`
--

INSERT INTO `tbl_residence` (`rid`, `rname`, `pincode`, `pno`, `pay`) VALUES
(1, 'Kumbakkatu', '689588', '9562415985', '50'),
(4, 'Pallipurathu', '689588', '8596459522', '50'),
(6, 'Mukkatu', '689588', '7525873698', '50'),
(8, 'Kadoor', '689588', '8989525246', '50'),
(15, 'Shivasadanam', '689588', '8545787841', '50'),
(16, 'Mukkanonickal', '689588', '7856859565', '50'),
(66, 'Kannanthanathil', '689588', '9073824511', '50'),
(77, 'JishnuBhavan', '689588', '9785686851', '50'),
(90, 'Chamathackal', '689588', '9061810179', '50'),
(140, 'Chudukattumannil', '689588', '9574123674', '50'),
(149, 'Ashalayam', '678903', '9497911086', '50'),
(214, 'Chamathackal', '689588', '9586742356', '50'),
(232, 'Keerthana', '684356', '7560859528', '50'),
(259, 'Pullolil', '689588', '9846811788', '50'),
(260, 'Mulamballil', '689578', '9447678818', '50'),
(280, 'Mulamballil', '689588', '9102743782', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `usid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cono` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`usid`, `name`, `email`, `cono`, `address`, `password`) VALUES
(1, 'athira', 'athira@gmail.com', '1234567890', 'athirahouse', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_collector`
--
ALTER TABLE `tbl_collector`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_panchayat`
--
ALTER TABLE `tbl_panchayat`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pyid`);

--
-- Indexes for table `tbl_residence`
--
ALTER TABLE `tbl_residence`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`usid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_collector`
--
ALTER TABLE `tbl_collector`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8791;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_panchayat`
--
ALTER TABLE `tbl_panchayat`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pyid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_residence`
--
ALTER TABLE `tbl_residence`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `usid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 09:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temple`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `dno` int(11) NOT NULL,
  `donorname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`dno`, `donorname`, `phone`, `address`, `amount`) VALUES
(100, 'Kethan', '8676655423', 'Sullia', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `r_no` int(11) NOT NULL,
  `seva_no` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Total_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`r_no`, `seva_no`, `date_time`, `quantity`, `Total_amount`) VALUES
(11, 2, '2022-01-20 00:31:25', 2, 50),
(12, 2, '2022-01-20 00:33:17', 2, 50),
(13, 1, '2022-01-20 00:35:50', 2, 60);

-- --------------------------------------------------------

--
-- Table structure for table `seva`
--

CREATE TABLE `seva` (
  `seva_no` int(11) NOT NULL,
  `sevaname` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seva`
--

INSERT INTO `seva` (`seva_no`, `sevaname`, `time`, `amount`) VALUES
(1, 'Hoovina pooja', '11AM-5PM', 30),
(2, 'Annaprashana', '11AM-4PM', 25);

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

CREATE TABLE `stay` (
  `sno` int(11) NOT NULL,
  `devoteename` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `checkin` datetime NOT NULL DEFAULT current_timestamp(),
  `checkout` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`sno`, `devoteename`, `phone`, `address`, `checkin`, `checkout`) VALUES
(1, 'Nikhil', '9564564563', 'Puttur', '2022-01-18 20:50:47', '2022-01-19 11:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `temple_login`
--

CREATE TABLE `temple_login` (
  `uid` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temple_login`
--

INSERT INTO `temple_login` (`uid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`r_no`),
  ADD KEY `seva_no` (`seva_no`);

--
-- Indexes for table `seva`
--
ALTER TABLE `seva`
  ADD PRIMARY KEY (`seva_no`);

--
-- Indexes for table `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `temple_login`
--
ALTER TABLE `temple_login`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `dno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `r_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seva`
--
ALTER TABLE `seva`
  MODIFY `seva_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stay`
--
ALTER TABLE `stay`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temple_login`
--
ALTER TABLE `temple_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_ibfk_1` FOREIGN KEY (`seva_no`) REFERENCES `seva` (`seva_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

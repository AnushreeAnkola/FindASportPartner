-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 12:22 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SPFinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `User_Requests`
--

CREATE TABLE `User_Requests` (
  `UR_ID` int(11) NOT NULL,
  `Event_ID` int(11) NOT NULL,
  `User_Request_Email` varchar(255) NOT NULL,
  `Request_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Requests`
--

INSERT INTO `User_Requests` (`UR_ID`, `Event_ID`, `User_Request_Email`, `Request_Status`) VALUES
(1, 45, 'vnand@csu.fullerton.edu', 'Requested'),
(2, 45, 'vnand@csu.fullerton.edu', 'Requested'),
(3, 45, 'vnand@csu.fullerton.edu', 'Requested'),
(4, 45, 'vnand@csu.fullerton.edu', 'Requested');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User_Requests`
--
ALTER TABLE `User_Requests`
  ADD PRIMARY KEY (`UR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User_Requests`
--
ALTER TABLE `User_Requests`
  MODIFY `UR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 12:21 PM
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
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `Event_ID` int(11) NOT NULL,
  `Sport` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `Finish_Time` time NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Num_Players` int(11) NOT NULL DEFAULT '1',
  `Max_Players` int(11) NOT NULL,
  `Email_Players` varchar(255) NOT NULL,
  `Delete_Event` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Event_ID`, `Sport`, `Date`, `Start_Time`, `Finish_Time`, `Email`, `Num_Players`, `Max_Players`, `Email_Players`, `Delete_Event`) VALUES
(40, 'Tennis', '2017-11-18', '06:30:00', '08:30:00', 'vnand@csu.fullerton.edu', 1, 4, '', 1),
(41, 'Tennis', '2017-11-19', '20:00:00', '22:00:00', 'vnand@csu.fullerton.edu', 1, 3, '', 0),
(42, 'Tennis', '2017-11-18', '14:00:00', '17:30:00', 'sam@gmail.com', 1, 5, '', 0),
(44, 'Tennis', '2017-11-20', '18:00:00', '20:30:00', 'sam@gmail.com', 1, 7, '', 0),
(45, 'Basketball', '2017-11-21', '18:00:00', '20:30:00', 'abhishek.na@aol.com', 1, 7, '', 0),
(46, 'Tennis', '2017-11-22', '18:00:00', '22:00:00', 'sam@gmail.com', 1, 9, '', 0),
(47, 'Tennis', '2017-11-19', '19:00:00', '21:00:00', 'sam@gmail.com', 1, 11, '', 0),
(48, 'Tennis', '2017-11-26', '20:00:00', '22:00:00', 'sam@gmail.com', 1, 4, '', 0),
(49, 'Tennis', '2017-11-19', '21:00:00', '23:00:00', 'sam@gmail.com', 1, 12, '', 0),
(50, 'Tennis', '2017-11-19', '21:30:00', '22:00:00', 'sam@gmail.com', 1, 6, '', 0),
(51, 'Tennis', '2017-11-18', '07:00:00', '08:00:00', 'sam@gmail.com', 1, 14, '', 0),
(52, 'Tennis', '2017-11-19', '21:00:00', '13:00:00', 'sam@gmail.com', 1, 15, '', 0),
(53, 'Tennis', '2017-11-19', '19:05:00', '20:00:00', 'sam@gmail.com', 1, 6, '', 0),
(54, 'Tennis', '2017-11-19', '21:15:00', '22:15:00', 'sam@gmail.com', 1, 11, '', 0),
(55, 'Tennis', '2017-11-19', '20:05:00', '21:05:00', 'sam@gmail.com', 1, 2, '', 0),
(56, 'Tennis', '2017-11-19', '20:05:00', '21:05:00', 'sam@gmail.com', 1, 5, '', 0),
(57, 'Tennis', '2017-11-19', '20:05:00', '21:05:00', 'sam@gmail.com', 1, 5, '', 0),
(58, 'Tennis', '2017-11-19', '20:05:00', '21:05:00', 'sam@gmail.com', 1, 5, '', 0),
(59, 'Tennis', '2017-11-19', '20:10:00', '20:35:00', 'sam@gmail.com', 1, 11, '', 0),
(60, 'Tennis', '2017-11-19', '20:11:00', '21:11:00', 'sam@gmail.com', 1, 3, '', 0),
(61, 'Tennis', '2017-11-19', '20:11:00', '21:11:00', 'sam@gmail.com', 1, 3, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

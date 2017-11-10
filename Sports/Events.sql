-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 08:50 AM
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
  `Time` time NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Duration` time NOT NULL,
  `Initiator_Name` varchar(255) NOT NULL,
  `Num_Players` int(11) NOT NULL,
  `Max_Players` int(11) NOT NULL,
  `Email_Players` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Event_ID`, `Sport`, `Date`, `Time`, `Email`, `Duration`, `Initiator_Name`, `Num_Players`, `Max_Players`, `Email_Players`) VALUES
(3, 'Tennis', '2017-11-30', '06:00:00', 'abhishek.na@aol.com', '02:00:00', 'Abhishek', 1, 4, ''),
(4, 'Hiking', '2017-11-22', '02:00:00', 'vnand@csu.fullerton.edu', '00:35:00', 'Vishal', 2, 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Initiator_Name` (`Initiator_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Events`
--
ALTER TABLE `Events`
  ADD CONSTRAINT `Events_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `Users` (`Email`),
  ADD CONSTRAINT `Events_ibfk_2` FOREIGN KEY (`Initiator_Name`) REFERENCES `Users` (`First_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

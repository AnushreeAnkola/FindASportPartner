-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 12:15 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `User_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Dob` date DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `ZIP` char(5) NOT NULL,
  `Phone_Number` bigint(20) NOT NULL,
  `Tennis` varchar(20) NOT NULL,
  `Basketball` varchar(20) NOT NULL,
  `Volleyball` varchar(20) NOT NULL,
  `Hiking` varchar(20) NOT NULL,
  `Swimming` varchar(20) NOT NULL,
  `Soccer` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`User_Id`, `First_Name`, `Last_Name`, `Gender`, `Dob`, `City`, `State`, `ZIP`, `Phone_Number`, `Tennis`, `Basketball`, `Volleyball`, `Hiking`, `Swimming`, `Soccer`, `Email`, `Password`) VALUES
(1, 'Vishal', 'Nand', 'male', '1992-04-08', 'Fullerton', 'California', '92831', 6193407722, 'Intermediate', '0', '0', '0', '0', '0', 'vnand@csu.fullerton.edu', '$2y$10$nRw0T6lvk2WPQ1lk6npIa.tEq6ViV2GeDhY5H50NMWhNqkV8.FZS.'),
(2, 'Abhishek', 'Nand', 'male', '2017-11-01', 'Brampton', 'ON', '92854', 64786525, '0', 'Intermediate', 'Expert', '0', '0', 'Expert', 'abhishek.na@aol.com', '$2y$10$82QlslC7GS9HKVGrmPv5Iu.Fbw9H4SGuncR5WvpuxdNbQSzGQwRVi');

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
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `First_Name` (`First_Name`);

--
-- Indexes for table `User_Requests`
--
ALTER TABLE `User_Requests`
  ADD PRIMARY KEY (`UR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `User_Requests`
--
ALTER TABLE `User_Requests`
  MODIFY `UR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

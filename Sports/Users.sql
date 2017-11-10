-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 05:02 PM
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
(1, 'Vishal', 'Nand', 'male', '2017-11-02', 'Fullerton', 'California', '92831', 6193407722, 'Intermediate', '0', '0', '0', '0', '0', 'vnand@csu.fullerton.edu', '$2y$10$nRw0T6lvk2WPQ1lk6npIa.tEq6ViV2GeDhY5H50NMWhNqkV8.FZS.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

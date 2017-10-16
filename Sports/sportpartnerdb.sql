-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 06:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportpartnerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(55) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `City` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `Zip` int(55) NOT NULL,
  `Ph_Number` int(55) NOT NULL,
  `Tennis` varchar(200) NOT NULL,
  `Basketball` varchar(200) NOT NULL,
  `Volleyball` varchar(200) NOT NULL,
  `Hiking` varchar(200) NOT NULL,
  `Soccer` varchar(200) NOT NULL,
  `Swimming` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `First_Name`, `Last_Name`, `Gender`, `DOB`, `City`, `State`, `Zip`, `Ph_Number`, `Tennis`, `Basketball`, `Volleyball`, `Hiking`, `Soccer`, `Swimming`, `Email`, `Password`) VALUES
(1, 'Sam', 'Irani', 'Male', '2013-02-05', 'Newport Beach', 'CA', 92660, 2147483647, '', '', '', '', '', '', '', ''),
(2, 'Sam', 'Irani', 'Male', '2017-10-07', 'Newport Beach', 'CA', 92660, 2147483647, '', '', '', '', '', '', '', ''),
(3, 'Sam', 'Irani', 'Male', '2014-10-07', 'Newport Beach', 'CA', 92660, 1111111111, '', '', '', '', '', '', '', ''),
(4, 'Sam', 'Irani', 'Female', '2017-10-04', 'Newport Beach', 'CA', 92660, 2147483647, 'Professional', '', '', '', '', '', '', ''),
(5, 'Sam', 'Irani', 'other', '0000-00-00', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', '', '', '', ''),
(6, 'Sam', 'Irani', 'other', '0000-00-00', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', '', '', '', ''),
(7, 'Sam', 'Irani', 'Female', '2017-10-05', 'Newport Beach', 'CA', 92660, 714, '', 'Amateur', '', 'Professional', 'Amateur', '', '', ''),
(8, 'Sam', 'Irani', 'Male', '2017-10-08', 'Newport Beach', 'CA', 92660, 851756532, 'Intermediate', '', '', '', '', '', '', ''),
(9, 'Sam', 'Irani', 'Male', '0000-00-00', 'Newport Beach', 'CA', 92660, 2147483647, '', 'Professional', '', '', '', '', '', ''),
(10, 'Sam', 'Irani', 'Male', '2017-10-12', 'Newport Beach', 'CA', 92660, 2147483647, '', 'Professional', 'Intermediate', '', '', '', '', ''),
(11, 'Sam', 'Irani', 'Male', '0000-00-00', 'Newport Beach', 'CA', 92660, 2147483647, '', 'Amateur', '', '', '', '', '', ''),
(12, 'Sam', 'Irani', 'other', '2017-10-07', 'Newport Beach', 'CA', 92660, 2147483647, '', 'Intermediate', '', '', '', '', '', ''),
(13, 'Sam', 'Irani', 'Male', '2017-10-06', 'Newport Beach', 'CA', 92660, 71485174, 'Professional', '', 'Amateur', 'Professional', '', '', '', ''),
(14, 'Sam', 'Irani', 'Male', '0000-00-00', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', 'Intermediate', '', '', ''),
(15, 'Sam', 'Irani', 'Male', '0000-00-00', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', '', '', 'irani.sam@gmail.com', '123'),
(16, 'Sam', 'Irani', 'other', '2017-10-03', 'Newport Beach', 'CA', 92660, 2147483647, 'Professional', '', '', '', '', '', 'irani.sam@gmail.com', '1234'),
(17, 'Sam', 'Irani', 'Male', '2017-10-04', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', 'Professional', '', '', '', '', 'irani.sam@gmail.com', '1'),
(18, 'Sam', 'Irani', 'Male', '2017-10-05', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', '', '', 'irani.sam@gmail.com', '1'),
(19, 'Sam', 'Irani', 'Male', '2017-10-05', 'Newport Beach', 'CA', 92660, 2147483647, '', '', '', '', '', '', 'irni.sam@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

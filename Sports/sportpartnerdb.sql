-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 11:38 PM
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_ID` int(11) NOT NULL,
  `sport` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` time NOT NULL,
  `name_initiator` varchar(255) NOT NULL,
  `num_players` int(11) NOT NULL,
  `max_players` int(11) NOT NULL,
  `email_players` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Sam', 'Irani', 'Male', '2017-02-09', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', 'Professional', 'Amateur', 'Professional', 'Intermediate', 'Amateur', 'irani.sam@gmail.com', '1'),
(2, 'Sam', 'Irani', 'Male', '2017-10-03', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', '', '', 'irani.sam@gmail.co', '1'),
(3, 'Sam', 'Irani', 'Male', '2017-10-04', 'Newport Beach', 'CA', 92660, 2147483647, '', 'Amateur', '', '', '', '', 'irani.sam@gmail.c', '12'),
(4, 'Sam', 'Irani', 'Male', '2017-10-04', 'Newport Beach', 'CA', 92660, 2147483647, '', '', '', '', '', '', 'irani.sam@mail.com', '1'),
(5, 'Sam', 'Irani', 'Female', '2017-10-04', 'Newport Beach', 'CA', 92660, 2147483647, '', '', '', '', '', '', 'irni.sam@gmail.com', '1'),
(6, 'Sam', 'Irani', 'Male', '2017-10-04', 'Newport Beach', 'CA', 92660, 2147483647, '', '', '', '', '', '', 'irani.sm@gmail.com', '1'),
(7, 'Sam', 'Irani', 'Male', '2017-11-02', 'Newport Beach', 'CA', 92660, 2147483647, 'Intermediate', '', '', '', '', '', 'irai.sam@gmail.com', '1'),
(8, 'Sam', 'Irani', 'Male', '2017-11-01', 'Newport Beach', 'CA', 92660, 2147483647, 'Professional', 'Intermediate', '', '', '', '', 'ini.sam@gmail.com', '12'),
(9, 'Sam', 'Irani', 'Male', '2017-11-01', 'Newport Beach', 'CA', 92660, 2147483647, 'Professional', 'Professional', 'Professional', '', '', '', 'in.sam@gmail.com', '1'),
(10, 'Sam', 'Irani', 'Male', '2017-10-31', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', 'Amateur', '', '', '', '', 'irani.sam@ail.com', '1'),
(11, 'Sam', 'Irani', 'Male', '2017-11-01', 'Newport Beach', 'CA', 92660, 2147483647, 'Amateur', '', '', '', '', '', 'ani.sam@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

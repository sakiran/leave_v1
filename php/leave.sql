-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2016 at 02:49 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave`
--
-- CREATE DATABASE IF NOT EXISTS `dbleave` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbleave`;

-- --------------------------------------------------------

--
-- Table structure for table `leavemanagement`
--

CREATE TABLE IF NOT EXISTS `leavemanagement` (
  `serialno` varchar(400) NOT NULL,
  `username` varchar(400) NOT NULL,
  `department` varchar(400) NOT NULL,
  `fromdate` varchar(400) NOT NULL,
  `todate` varchar(400) NOT NULL,
  `reason` varchar(400) NOT NULL,
  `contactnumber` varchar(400) NOT NULL,
  `approvalstatus` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `leavemanagement`
--

TRUNCATE TABLE `leavemanagement`;
--
-- Dumping data for table `leavemanagement`
--

INSERT INTO `leavemanagement` (`serialno`, `username`, `department`, `fromdate`, `todate`, `reason`, `contactnumber`, `approvalstatus`) VALUES
('1', 'keerthana', 'CSE', '10 jan 2020', '16 jan 2020', 'going home for pongal', '8888888888', 'pending with class incharge'),
('2', 'arthi', 'CSE', '10 jan 2020', '16 jan 2020', 'going home for pongal', '8888888888', 'pending with class incharge'),
('3', 'jaya', 'CSE', '10 jan 2020', '16 jan 2020', 'going home for pongal', '8888888888', 'pending with class incharge');

-- --------------------------------------------------------

--
-- Table structure for table `usermanagement`
--

CREATE TABLE IF NOT EXISTS `usermanagement` (
  `userid` int(5) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `role` varchar(400) NOT NULL,
  `department` varchar(400) NOT NULL,
  `dateofjoining` varchar(400) NOT NULL,
  `homeaddress` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phonenumber` varchar(400) NOT NULL,
  `gender` varchar(400) NOT NULL,
  `userstatus` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `usermanagement`
--

TRUNCATE TABLE `usermanagement`;
--
-- Dumping data for table `usermanagement`
--

INSERT INTO `usermanagement` (`userid`, `username`, `password`, `role`, `department`, `dateofjoining`, `homeaddress`, `email`, `phonenumber`, `gender`, `userstatus`) VALUES
(1, 'keerthana', 'password123', 'student', 'CSE', '10 july 2018', 'Hosur', 'keerthana@pmctech.org', '8888888888', 'Female', 'y'),
(2, 'arthi', 'password1234', 'student', 'CSE', '10 july 2018', 'Salem', 'arthi@pmctech.org', '8888888888', 'Female', 'y'),
(3, 'jaya', 'password12345', 'student', 'CSE', '10 july 2018', 'Salem', 'jaya@pmctech.org', '8888888888', 'Female', 'y'),
(4, 'classincharge', 'password678', 'classincharge', 'CSE', '10 july 2018', 'Hosur', 'classincharge@pmctech.org', '8888888888', 'Male', 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2015 at 07:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE IF NOT EXISTS `booktable` (
  `bookID` varchar(30) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 => false',
  PRIMARY KEY (`bookID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`bookID`, `available`) VALUES
('1234', 4);

-- --------------------------------------------------------

--
-- Table structure for table `borrowtable`
--

CREATE TABLE IF NOT EXISTS `borrowtable` (
  `loanDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'current date of insert table',
  `ic` int(12) NOT NULL,
  `bookID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowtable`
--

INSERT INTO `borrowtable` (`loanDate`, `ic`, `bookID`) VALUES
('2015-03-09 05:46:45', 1234, '1234'),
('2015-03-09 05:46:56', 1234, '1234'),
('2015-03-09 06:33:28', 1234, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `stafftable`
--

CREATE TABLE IF NOT EXISTS `stafftable` (
  `staffID` int(12) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftable`
--

INSERT INTO `stafftable` (`staffID`, `password`) VALUES
(1234, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `ic` int(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `numLoan` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  PRIMARY KEY (`ic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`ic`, `password`, `name`, `address`, `numLoan`, `penalty`) VALUES
(1234, '1234', 'huhu', 'huhu', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

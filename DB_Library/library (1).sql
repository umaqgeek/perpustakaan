-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2015 at 06:22 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE IF NOT EXISTS `booktable` (
  `bookID` varchar(30) NOT NULL,
  `Date` varchar(33) NOT NULL,
  `Time` varchar(33) NOT NULL,
  `Q_book` varchar(50) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 => false',
  `BooksNAme` varchar(70) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `BooksType` varchar(50) NOT NULL,
  `Purchase` varchar(50) NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`bookID`, `Date`, `Time`, `Q_book`, `available`, `BooksNAme`, `Author`, `BooksType`, `Purchase`) VALUES
('4321', '', '', '7', 1, 'sang buaya', 'bazli', 'buku cerita', '12');

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
('2015-04-01 08:11:41', 1234, '12'),
('2015-04-01 08:12:36', 1234, '32');

-- --------------------------------------------------------

--
-- Table structure for table `calculate_book`
--

CREATE TABLE IF NOT EXISTS `calculate_book` (
  `bookID` int(11) NOT NULL,
  `BookType` varchar(77) NOT NULL,
  `Total` varchar(55) NOT NULL,
  `Available` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculate_book`
--

INSERT INTO `calculate_book` (`bookID`, `BookType`, `Total`, `Available`) VALUES
(4321, 'buku cerita', '7', '');

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
(0, 'eee', 'eee', 'eee', 0, 0),
(123, '323', '333', '33', 0, 0),
(1234, '1234', 'huhu', 'huhu', 0, 0),
(33333, 'www', 'www', 'www', 0, 0),
(123456, '321', 'sasasa', '32444', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

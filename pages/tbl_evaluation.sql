-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2016 at 03:54 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evaluation`
--

CREATE TABLE IF NOT EXISTS `tbl_evaluation` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(10) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `QID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`EID`),
  KEY `QID` (`QID`),
  KEY `StudentID` (`StudentID`),
  KEY `StudentID_2` (`StudentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_evaluation`
--

INSERT INTO `tbl_evaluation` (`EID`, `StudentID`, `SubjectID`, `QID`, `Rating`) VALUES
(31, 'c14-0102', 'IT101', 7, 4),
(32, 'c14-0102', 'IT101', 8, 4),
(33, 'c14-0102', 'IT101', 9, 4),
(34, 'c14-0102', 'IT101', 10, 4),
(35, 'c14-0102', 'IT101', 11, 4),
(36, 'c14-0102', 'IT101', 12, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

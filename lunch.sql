-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2020 at 04:33 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lunch`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `Id` int(11) NOT NULL,
  `FoodName` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `ServeDate` text NOT NULL,
  `MaxLength` int(11) NOT NULL,
  `SetBy` varchar(50) NOT NULL,
  `WeekDay` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`Id`, `FoodName`, `Price`, `ServeDate`, `MaxLength`, `SetBy`, `WeekDay`) VALUES
(0, 'gjdjr', 100003, '139908010', 7, 'moti', 'شنبه'),
(1, 'کباب', 10000, '13990802', 2, 'moti', 'یکشنبه'),
(2, 'kivy', 10000, '13990701', 1, 'moti', 'دوشنبه'),
(3, 'food', 10000, '13990701', 4, 'moti', 'سه شنبه'),
(4, 'moti food', 100000000, '13990731', 1, 'moti', 'چهارشنبه'),
(5, 'food', 10000, '13990703', 4, 'moti', 'پنجشنبه'),
(6, 'food', 10000, '13990704', 4, 'moti', 'جمعه');

-- --------------------------------------------------------

--
-- Table structure for table `serevs`
--

CREATE TABLE IF NOT EXISTS `serevs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Food` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `DateModified` text NOT NULL,
  `Price` double NOT NULL,
  `Length` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `serevs`
--

INSERT INTO `serevs` (`Id`, `UserName`, `Food`, `DateModified`, `Price`, `Length`) VALUES
(11, 'moti', 'غذا', '20200915171625', 10000, 13),
(12, 'moti', 'dashagh', '20200915171700', 10000, 6),
(13, 'moti', 'dashagh', '2015172011', 10000, 1),
(14, 'moti', 'ghorme', '202015172115', 10000, 2),
(15, 'moti', 'dashagh', '20200915172458', 10000, 4),
(16, 'moti', 'dashagh', '20201509172625', 10000, 1),
(17, 'moti', 'dashagh', '20201509172734', 10000, 12),
(18, 'moti', 'ghorme', 'stringtime', 15000, 1),
(19, 'moti', 'ghorme', 'stringtime', 15000, 1),
(20, 'moti', 'ghorme', 'stringtime', 15000, 1),
(21, 'moti', 'ghorme', 'stringtime', 15000, 1),
(22, 'moti', 'ghorme', 'stringtime', 15000, 1),
(23, 'moti', 'food', 'stringtime', 10000, 1),
(24, 'SetBy', 'hjxfggrj', '13990702', 1000, 4),
(25, 'SetBy', 'bjghnj', '13990702', 1000, 4),
(26, 'SetBy', 'bjghnj', '13990702', 1000, 4),
(27, 'SetBy', 'bjghnj', '13990702', 1000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `userinformations`
--

CREATE TABLE IF NOT EXISTS `userinformations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userinformations`
--

INSERT INTO `userinformations` (`Id`, `UserName`, `Password`, `Admin`) VALUES
(1, 'Mahdi Moti', '32537787357', 1),
(2, 'Sobhan Ebrahimi', '11831569', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2019 at 01:47 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sri`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookyourtest`
--

CREATE TABLE IF NOT EXISTS `bookyourtest` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenum` int(10) NOT NULL,
  `testname` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookyourtest`
--

INSERT INTO `bookyourtest` (`name`, `email`, `phonenum`, `testname`, `datetime`, `city`) VALUES
('veraswamy lingala', 'veeraveeru07@gmail.c', 2147483647, 'bloodtest', '2019-04-05 02:20:00', 'Hanamkonda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

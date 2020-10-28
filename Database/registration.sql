-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2019 at 10:27 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sri`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `uname` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uname`, `gender`, `emailid`, `pass`, `address`, `city`, `state`, `pincode`, `dob`) VALUES
('veera', 'M', 'Sda@gmail.com', '123456789', 'asDEaEA', 'DZFGSF', 'FZS', 'ZGRSG', '2019-04-01'),
('swamy', 'M', 'veeraveeru07@gmail.c', '123456789', 'H:NO;3-12-125\r\nKumarpally', 'Hanamkonda', 'Telangana', 'Hanamkonda', '2019-04-19'),
('Admin', 'M', 'veeraveeru07@gmail.c', '123456789', 'dgazsfgzfhgarzhg', 'fhzfhgfdh', 'hxgfjfcjgh', 'xhfjkghkjmh', '2019-04-04');

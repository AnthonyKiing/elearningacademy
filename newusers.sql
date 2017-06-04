-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 11:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `psw`) VALUES
('Admin', 'admin'),
('Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `email` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Nme` text NOT NULL,
  `Srme` text NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `usrnme` varchar(100) NOT NULL,
  `psw` varchar(100) DEFAULT NULL,
  `Gender` char(50) NOT NULL,
  `Bday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Nme`, `Srme`, `email`, `usrnme`, `psw`, `Gender`, `Bday`) VALUES
(26, 'erere', 'rerer', 'ere', 'erer', 'erer', 'Female', '2008-06-29'),
(27, 'asas', 'aas', 'asas', 'asa121', 'qq', 'Female', '2007-12-28'),
(28, 'www', 'ww', 'www', 'ww', 'ww', 'Female', '2014-02-28'),
(29, 'asa', 'asaa', 'sas', 'asas', '123', 'Female', '2013-02-28'),
(30, 'asa', 'asaa', 'sas', 'asas', '123', 'Female', '2013-02-28'),
(31, 'asa', 'asaa', 'sas', 'asas', '123', 'Female', '2013-02-28'),
(32, 'qwerty', 'qwerty', 'qwerty', 'qwert', '123', 'Female', '2004-03-28'),
(33, 'sds', 'sds', 'sds', 'dsd', 'sds', 'Female', '2010-01-29'),
(34, 'sds', 'sds', 'sds', 'dsd', 'sds', 'Female', '2010-01-29'),
(35, 'wewew', 'ewe', 'ewe', 'ewe', 'wewe', 'Female', '2013-02-28'),
(36, 'sds', 'sds', 'sds', 'dsd', 'sds', 'Female', '2010-01-29'),
(37, 'tsada', 'sadsa', 'as@gmabck', 'asd', 'gfd', 'Male', '1993-05-29'),
(38, 'qwert', 'qwert', 'qwerty', 'qwert', '123', 'Female', '2009-02-28'),
(39, 'qwertyuiop', 'qwertyuiop', 'qwertyuiop', 'asdfghjkl', '123', 'Female', '2007-03-30'),
(40, 'Christine', 'Gendrano', 'tintin@gmail.com', 'mavis', '123', 'Female', '1998-11-01'),
(41, 'tin', 'tin', 'tintingendrano@gmail.com', 'tin', 'maetin98', 'Female', '1999-11-01'),
(42, 'tin', 'tin', 'tintingendrano@gmail.com', 'tin', 'maetin98', 'Female', '1999-11-01'),
(43, 'Christine Mae', 'Gendrano', 'tin@gmail.com', 'Mavis', 'neneng98', 'Female', '1999-11-01'),
(44, 'tin', 'ee', 'ee', 'ww', 'qwerty', 'Female', '1998-03-31'),
(45, 'Christine', 'qq', 'qwert', 'www', '123', 'Female', '2017-05-03'),
(46, 'ss', 'ss', 'ss', 'ss', '123', 'Female', '2011-04-03'),
(47, 'ee', 'ee', 'r', 'r', 'rty', 'Female', '2015-06-03'),
(48, 'Joara', 'Marabulas', 'jcm@gmail.com', 'Candy', 'jcm', 'Female', '2017-06-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

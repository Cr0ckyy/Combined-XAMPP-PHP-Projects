-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 08:52 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c273_p02`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `book_weight` decimal(10,2) NOT NULL,
  `num_books` int(5) NOT NULL,
  `ship_time` varchar(45) NOT NULL,
  `ship_method` varchar(20) NOT NULL,
  `extra_additions` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

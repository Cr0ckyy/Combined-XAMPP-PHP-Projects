-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2015 at 02:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c203_p08`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `c_id` int(4) NOT NULL,
  `title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pages` int(4) NOT NULL,
  `qty` int(4) NOT NULL,
  `rent_price` float(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `c_id`, `title`, `pages`, `qty`, `rent_price`) VALUES
(1, 2, 'Teach Them the Alphabets', 50, 12, 3.00),
(2, 3, 'The Longest Afternoon', 125, 5, 2.00),
(3, 4, 'CGI for the Uninitiated', 327, 11, 5.50),
(4, 1, 'Rome and Carthage', 655, 14, 10.00),
(5, 2, 'Sleeping 8 Hours at Night Guaranteed', 226, 7, 5.00),
(6, 2, 'Establish Your Ground Rules', 187, 22, 2.00),
(7, 3, 'The Runner Story', 341, 32, 5.00),
(8, 4, 'Photoshop and Illustrator', 83, 11, 2.00),
(9, 1, 'Discovery of Australia', 455, 2, 7.00),
(24, 1, 'Alexander the Great', 270, 5, 5.00);

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE IF NOT EXISTS `book_categories` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`c_id`, `name`) VALUES
(1, 'history'),
(2, 'parenting'),
(3, 'novel'),
(4, 'arts & photography');

-- --------------------------------------------------------

--
-- Table structure for table `example_directors`
--

CREATE TABLE IF NOT EXISTS `example_directors` (
  `d_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `example_directors`
--

INSERT INTO `example_directors` (`d_id`, `name`) VALUES
(1, 'Bettany Vision'),
(2, 'Owen Grady');

-- --------------------------------------------------------

--
-- Table structure for table `example_movies`
--

CREATE TABLE IF NOT EXISTS `example_movies` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `d_id` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `example_movies`
--

INSERT INTO `example_movies` (`id`, `d_id`, `title`) VALUES
(1, 1, 'Dancing With the Cats'),
(2, 1, 'Reading 1000 Books'),
(3, 2, 'Sunshine and Moonlight'),
(4, 2, 'Good Morning to Me');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

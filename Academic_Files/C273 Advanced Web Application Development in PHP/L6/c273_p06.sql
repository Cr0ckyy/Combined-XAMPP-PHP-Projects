-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2014 at 01:28 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c273_p06`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `cat_id` int(2) NOT NULL,
  `pages` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `cat_id`, `pages`) VALUES
(1, 'The Adventures of Mary', 1, 345),
(2, 'Silver Chef and His Tips', 3, 124),
(3, 'Drawing the Animals', 2, 45),
(4, 'Happy at Everything', 4, 113),
(5, 'Brown Cat', 2, 78),
(7, 'Effective Communication', 4, 122),
(8, 'Best Food in Africa', 3, 456);

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE IF NOT EXISTS `book_categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `cat_name`) VALUES
(1, 'adventure'),
(2, 'children'),
(3, 'food'),
(4, 'self-development');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `area` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `last_visit` date NOT NULL,
  `comments` text COLLATE latin1_general_ci NOT NULL,
  `rating` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `area`, `last_visit`, `comments`, `rating`) VALUES
(21, 'Benny', 'Woodlands', '2013-11-22', 'It could be better', 1),
(22, 'Kahn', 'Paya Lebar', '2013-11-27', 'It was okay.', 3),
(5, 'Nina', 'Marsiling', '2013-12-05', 'Not much. Overall was good', 4),
(6, 'Anna', 'Sommerset', '2014-01-01', 'I truly enjoyed it!', 5),
(20, 'John', 'Orchard', '2013-12-18', 'The service was poor', 1),
(19, 'Bernard', 'Bugis', '2014-01-01', 'I was not satisfied', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

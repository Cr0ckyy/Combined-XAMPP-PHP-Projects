-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2014 at 09:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c203_p09`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel_highlights`
--

CREATE TABLE IF NOT EXISTS `travel_highlights` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `length_days` float(5,2) NOT NULL,
  `total_spending` float(7,2) NOT NULL,
  `story` text COLLATE latin1_general_ci NOT NULL,
  `picture` varchar(70) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `travel_highlights`
--

INSERT INTO `travel_highlights` (`id`, `title`, `city`, `length_days`, `total_spending`, `story`, `picture`) VALUES
(1, 'Had a great time at the Big Apple', 'New York', 12.00, 800.00, 'I visited New York on 21 December 2013, during the Make Music Winter. This free event is to celebrate the winter solstice which features 13 musical parades throughout the day in various parts of the city. I saw a lot of New Yorkers getting involved in the parades, which span a variety of genres. ', 'MemorableTimeNewYork.jpg'),
(2, 'Nice Countryside in Thailand', 'Bangkok', 7.50, 160.00, 'We explored Bangkok and spent some time biking through remote rice fields outside of the city. Our hosts were very cordial, and were happy to share stories of everyday life.', 'ThailandRiceField.jpg'),
(3, 'Packed but Fun Cruise Ship Travelling', 'Venice', 15.00, 1500.00, 'For my holiday, I booked a 12 days cruise ship package that departed from Venice. It was nice to feel the warm waters and the cool breezes. I had complete relaxation.', 'LovelyCruiseShips.jpg');

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `rest_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`rest_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`rest_id`, `name`) VALUES
(1, 'Our Place At Three-West'),
(2, 'Great Mouse Cook'),
(3, 'Fine Chicken Corner');

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `date_submitted` date NOT NULL,
  `date_sold` date NOT NULL,
  `quality` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `price` float(7,2) NOT NULL,
  `image` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=71 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `date_submitted`, `date_sold`, `quality`, `price`, `image`) VALUES
(35, 'Black Computer Chair', 'Mesh Back, Padded Mesh Seat, Black Nylon T-Arms, Pneumatic Seat Height Adjustment.', '2014-04-01', '2014-06-05', 'okay', 213.00, 'black-computer-chair.jpg'),
(21, '64GB MicroSDXC', 'UHS-1 enabled, faster app performance with transfer speeds up to 30MB/s.', '2014-04-03', '2014-06-01', 'okay', 33.00, 'MicroSDcard-64GB.jpg'),
(22, 'Electric Pencil Sharpener', 'This electrical pencil sharpener quickly and efficiently sharpens pencils, as its nonskid rubberized feet hold it in place.', '2014-05-05', '0000-00-00', 'good', 15.40, 'Electric-Pencil-Sharpener.jpg'),
(23, 'Walkman MP3 Player', 'One-piece music player you can wear with total freedom. It has a waterproof design. ', '2014-04-07', '0000-00-00', 'bad', 34.00, 'none'),
(24, 'Travel Packing Cubes', 'special zippers with corded double zipper pulls make opening and closing simple and fast.', '2014-03-22', '0000-00-00', 'okay', 31.00, 'none'),
(9, '2-Pack High-Speed HDMI Cables', '2-pack contains (2) 6.5-foot-long High-Speed HDMI Cables. Constructed with durable, black PVC outer layer, and corrosion-resistant, gold-plated connectors for optimal signal transfer.', '2014-05-03', '0000-00-00', 'okay', 12.00, 'none'),
(36, 'Replacement Badminton Raquet Set', 'The Racket Set can be used to increase your play to more players or to replace worn or broken rackets.', '2014-03-24', '0000-00-00', 'okay', 45.00, 'badminton-raquets.jpg'),
(51, 'Wireless Stereo Headset', 'A Headset for Gamers: Experience everything from the big booms to whisper-quiet warnings in stunning 7.1 virtual surround sound and chat with friends through the hidden noise cancelling microphone.', '2014-01-01', '0000-00-00', 'good', 78.40, 'none'),
(68, 'wooden computer desk', 'wooden computer desk, only used for a few weeks', '2014-06-06', '0000-00-00', 'good', 78.50, 'wooden-computer-desk.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

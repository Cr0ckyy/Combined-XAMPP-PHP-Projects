-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2015 at 08:52 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c273_p09`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `obese` decimal(5,2) DEFAULT NULL,
  `population` int(10) DEFAULT NULL,
  `revenue_1995_1997` decimal(17,13) DEFAULT NULL,
  `revenue_2006_2008` decimal(17,13) DEFAULT NULL,
  `tertiary_55_64` int(3) DEFAULT NULL,
  `tertiary_25_34` int(3) DEFAULT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `obese`, `population`, `revenue_1995_1997`, `revenue_2006_2008`, `tertiary_55_64`, `tertiary_25_34`, `country`) VALUES
(182, '21.70', 21015, '34.9773574866667', '35.8913672100000', 27, 41, 'Australia'),
(183, '12.40', 8315, '51.3481177833333', '48.1663989733333', 14, 19, 'Austria'),
(184, '12.70', 10626, '48.3614072900000', '48.5790665800000', 22, 41, 'Belgium'),
(185, '15.40', 32976, '43.8000581100000', '40.4909334866667', 39, 56, 'Canada'),
(186, NULL, 10323, NULL, NULL, NULL, NULL, 'Czech Republic'),
(187, '11.40', 5457, '56.2913037966667', '55.4718186566667', 24, 40, 'Denmark'),
(188, '14.90', 5289, '55.5046544366667', '52.8480984966667', 28, 39, 'Finland'),
(189, '10.50', 61707, '50.0529302666667', '49.7455326300000', 17, 41, 'France'),
(190, '13.60', 82247, '45.5672064933333', '43.7728585166667', 23, 23, 'Germany'),
(191, '16.40', 11193, '37.7334720433333', '40.2199658833333', 14, 28, 'Greece'),
(192, '18.80', 10050, '45.2549107000000', '44.2999220366667', 16, 22, 'Hungary'),
(193, '20.10', 311, '40.3504266866667', '46.7244022566667', 23, 31, 'Iceland'),
(194, '15.00', 4339, '38.7477046966667', '36.1865469433333', 17, 44, 'Ireland'),
(195, '9.90', 59336, '46.0449392100000', '45.9244200600000', 9, 19, 'Italy'),
(196, '3.40', 127771, '31.5090402166667', '34.1300098800000', 24, 54, 'Japan'),
(197, '3.50', 48456, '24.0459192766667', '32.7479980766667', 11, 56, 'Korea'),
(198, '20.00', 480, '42.9157335300000', '39.9276279600000', 19, 36, 'Luxembourg'),
(199, '30.00', 105791, NULL, NULL, 9, 19, 'Mexico'),
(200, '11.20', 16382, '47.0222373433333', '46.1099119666667', 26, 37, 'Netherlands'),
(201, NULL, 4228, NULL, NULL, NULL, NULL, 'New Zealand'),
(202, '9.00', 4709, '54.4989205966667', '58.8473023066667', 26, 43, 'Norway'),
(203, '12.50', 38116, '43.7501602400000', '40.0508508500000', 12, 30, 'Poland'),
(204, '15.40', 10608, '39.2348652900000', '42.9159441833333', 7, 21, 'Portugal'),
(205, NULL, 5398, NULL, NULL, NULL, NULL, 'Slovak Republic'),
(206, '14.90', 44874, '38.1851749433333', '39.5045459433333', 16, 39, 'Spain'),
(207, '10.20', 9148, '58.8640044533333', '54.8925280400000', 26, 40, 'Sweden'),
(208, '8.10', 7550, '33.0738404466667', '33.9461349300000', 26, 35, 'Switzerland'),
(209, '12.00', 73875, NULL, NULL, 8, 14, 'Turkey'),
(210, NULL, 60975, NULL, NULL, NULL, NULL, 'United Kingdom'),
(211, NULL, 301280, NULL, NULL, NULL, NULL, 'United States'),
(212, NULL, 190120, '26.9707866433333', '34.7332293000000', 8, 10, 'Brazil'),
(213, NULL, 16636, '21.7000000000000', '26.6333333333333', 9, 18, 'Chile'),
(214, NULL, 1329090, NULL, NULL, NULL, NULL, 'China'),
(215, NULL, 1343, NULL, NULL, 28, 35, 'Estonia'),
(216, NULL, 1128521, NULL, NULL, NULL, NULL, 'India'),
(217, NULL, 224670, NULL, NULL, NULL, NULL, 'Indonesia'),
(218, NULL, 6932, NULL, NULL, 43, 42, 'Israel'),
(219, NULL, 141941, NULL, NULL, NULL, NULL, 'Russian Federation'),
(220, NULL, 2010, '43.3567927733333', '42.6941710566667', 16, 30, 'Slovenia'),
(221, NULL, 49173, NULL, NULL, NULL, NULL, 'South Africa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

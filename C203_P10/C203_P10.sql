-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 04:08 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c203_p10`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `color_pref` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `birthdate`, `username`, `password`, `color_pref`) VALUES
(1, 'Garry Matthew', 'male', '1984-03-13', 'Garry', 'Garry', 'cyan'),
(2, 'Grace Kerry', 'female', '1984-05-08', 'admin', 'admin', 'pink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

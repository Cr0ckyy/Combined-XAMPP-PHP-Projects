-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2014 at 04:28 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c203_p12`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE IF NOT EXISTS `flowers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `cat_id`, `name`, `description`, `picture`) VALUES
(1, 1, 'Ophrys apifera', 'Ophrys apifera grows to a height of between 15 and 50 centimetres. This hardy orchid develops small rosettes of leaves in autumn. They slowly continue to grow during winter.', '640px-Orchidaceae-Ophrys_apifera-4.jpg'),
(2, 1, 'Habenaria radiata', 'Pecteilis radiata (syn. Habenaria radiata) is a species of orchid endemic to China, Japan, Korea and Russia. It is commonly known as the White Egret Flower, Fringed Orchid or Sagiso. ', '480px-Habenaria_radiata.jpg'),
(3, 1, 'Coilostylis ciliaris', 'Coilostylis ciliaris (Fringed Star Orchid), formerly Epidendrum ciliare, is a species of orchid in the genus Coilostylis. It was transferred from Epidendrum by Withner and Harding in 2004. It is the type species of the genus Coilostylis.', '360px-Epidendrum_ciliare_Orchi_05.jpg'),
(4, 1, 'Tiger Orchid', 'The Tiger Orchid, Rossioglossum grande (previously Odontoglossum grande), is an epiphytic species of orchid native to the area from Mexico to Honduras. Tiger Orchid s the common name however it may also share it with other species of orchids. The plant may grow four to eight flowers, each may reach up to 13 inches in diameter.', '640px-Odontoglossum_grande_Orchi_003.jpg'),
(5, 2, 'Butterfly-pea', 'It is a perennial herbaceous plant. Its leaves are elliptic and obtuse. It grows as a vine or creeper, doing well in moist neutral soil. The most striking feature about this plant are its vivid deep blue flowers.', '640px-Clitoria_ternatea.jpg'),
(6, 2, 'Calliandra haematocephala', 'Calliandra haematocephala is a species of flowering plants of the genus Calliandra in the Fabaceae family.', '640px-Bungakepalmerah1.jpg'),
(7, 2, 'Saintpaulia', 'Saintpaulia, commonly known as African violet, is a genus of between 6 and 20 species of herbaceous perennial flowering plants in the family Gesneriaceae, native to Tanzania and adjacent southeastern Kenya in eastern tropical Africa.', 'Purple_African_Violet_Top.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flower_categories`
--

CREATE TABLE IF NOT EXISTS `flower_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `flower_categories`
--

INSERT INTO `flower_categories` (`id`, `name`) VALUES
(1, 'Orchids'),
(2, 'Peas');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE IF NOT EXISTS `allocation` (
  `student_id` int(11) NOT NULL,
  `module_code` varchar(10) NOT NULL,
  `class` varchar(45) NOT NULL,
  PRIMARY KEY (`student_id`,`module_code`),
  KEY `fk_student_has_modules_modules1_idx` (`module_code`),
  KEY `fk_student_has_modules_student_idx` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`student_id`, `module_code`, `class`) VALUES
(1111111, 'c105', 'W67B'),
(1111111, 'c207', 'W67A'),
(2222222, 'c111', 'E67A'),
(2222222, 'c207', 'E66D');


--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `module_code` varchar(10) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  PRIMARY KEY (`module_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_code`, `module_name`) VALUES
('c105', 'Introduction to Programming'),
('c111', 'New Media Communications'),
('c203', 'Web Applications Development'),
('c207', 'Database Systems'),
('c208', 'Object-oriented programming');

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`) VALUES
(1111111, 'Bob', 'Tan'),
(2222222, 'Sally', 'Lim');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocation`
--
ALTER TABLE `allocation`
  ADD CONSTRAINT `fk_student_has_modules_modules1` FOREIGN KEY (`module_code`) REFERENCES `modules` (`module_code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_has_modules_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 02:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c273_p08`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `student_id` int(11) NOT NULL,
  `module_code` varchar(10) NOT NULL,
  `class` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`student_id`, `module_code`, `class`) VALUES
(1111111, 'c105', 'W67B'),
(1111111, 'c207', 'W67A'),
(2222222, 'c111', 'E67A'),
(2222222, 'c207', 'E66D');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_code` varchar(10) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_code`, `module_name`, `description`) VALUES
('c105', 'Introduction to Programming', 'This module introduces the concepts and applications of programming to students with no prior programming experience. The module uses the python language that is widely used in industry by companies such as Google, YouTube and Industrial Light & Magic. Software developers, scientists, engineers, and academics also use python as an effective and highly-productive tool. Students will learn programming concepts such as variables, loops, conditional statements, functions and libraries, and use python to create graphics, manipulate data and media objects, and to utilise external programme libraries.'),
('c111', 'New Media Communications', 'The Internet and new media (digital imaging, audio, augmented reality, video, web, etc.) have become important means of communications. This module explores how to communicate effectively via the Internet and new media. Students will explore issues relating to aesthetics, usability, user experience, and humancomputer interaction. They will learn about content creation and design techniques that will best support the desired communication objectives. Topics covered will include basic web design, typography, colour, choice of media, interactivity, and responsible use of new media.'),
('c202', 'Systems Analysis and Design', 'This module provides an introduction to the theory and practices of systems development methodologies. With practical case scenarios, students will undertake, in a methodical manner, the analysis of a given problem situation and produce a definition of client requirements using appropriate methods, tools and techniques that will lead to the development of application systems. This module also covers the techniques and best practices for varied device platforms.'),
('c203', 'Web Applications Development', 'This module introduces students to the fundamental skills and knowledge associated with developing database-driven web applications. The scope of this module will cover the development of web pages that can store, search, retrieve, and display data from a database, validate data using client and server-side techniques, use sessions variables for holding information across multiple web pages, use web cookies for remembering previous user activity, and set access control to various web pages based on different user profiles. The language and technologies used in this module include HTML, CSS, php, and JavaScript.'),
('c207', 'Database Systems', 'This module covers the principles and concepts of database management systems and the reasons for using such systems in an organisation. It provides an understanding of the factors in database design and it will help students develop a methodical approach to database design and implementation. This includes the skills in accessing and manipulating database systems through the use of SQL. It also introduces an awareness of the maintenance, performance and support issues associated with a database environment.'),
('c208', 'Object-oriented programming', 'The module introduces students to the programming constructs of the Java programming language, concept of object-orientation and the programming of object-oriented programmes in Java. Students will learn to interpret and programme the solution of systems represented as Unified Modelling Language (UML) diagrams in Java.'),
('c227', 'Computer System Technologies', 'This module covers the concepts and fundamentals of computer systems and the various software that power computers today. Students will learn effective workstation administration and gain an understanding of network technologies. Problems designed to encourage practical hands-on exploration will be used.'),
('c235', 'IT Security and Management', 'This module addresses the best practices of the development and management of effective security systems with coverage on information, personnel, physical security, and risk analysis for information protection. It provides a broad overview of the principles and elements of information technology security. It covers the basic principles of the CIA model Confidentiality, Integrity and Availability. Topics covered include IT security threats, security techniques, security services, and system security features. Students will also be introduced to the different information security standards available in the IT industry such as ISO 27001 that implements a security framework for organisations.'),
('c273', 'Advanced Web Application Development', 'This module extends the coverage of web application development using php by building on the students understanding of database-driven web applications with hands-on skills involved in developing web applications with more advanced functionality including the use of jQuery and AJAX. This module will also introduce the theoretical and practical skills in the use of php web frameworks for web development to alleviate the overhead associated with common activities performed in web development and in promoting code re-use. Finally, this module will introduce students to the practical aspects related to the deployment of web applications on a cloudbased platform.'),
('c294', 'Mobile User Interface Design', 'This module address the issues associated with the user experience and the design of user interfaces for mobile devices. This module will explore these issues with the creation of mobile websites. Students will use CSS, HTML5 and php in creating web sites specifically for the use on mobile phone browsers.'),
('c302', 'Web Services', 'This module will cover the creation and use of different web service protocols like Simple Object Access Protocol (SOAP), Representational State Transfer (REST) and Web Services Description Language (WDSL), as well as their use in mobile applications. Students will look into different programming languages to create and parse services, as well as learning about more general concepts like authentication, cloud computing and enterprise solutions.'),
('c308', 'Web Frameworks', 'This module builds on the students'' understanding of webcentric applications with the introduction and application of web frameworks and the hands-on skills involved in web applications with more advanced functionality. Students will learn how such applications can be accessible via the mobile platform.'),
('c346', 'Android Programming', 'In this module, students will learn the basics of creating Android Applications. They will learn about user interface implementation issues such as layout, notifications and dialogues as well as the logic and data management (databases, services, GPS, multi-threading, etc.) using the Java programming language.'),
('c347', 'Android Programming II', 'In this module, students will continue to base on what was covered in C346 Android Programming, but they will also be exposed to more advanced topics like widgets, animation and phone hardware (camera, accelerometer etc.). This module also cover 2D and 3D Android games.'),
('c348', 'iPhone Programming', 'This module covers basic iPhone application and game development in Xcode (Objective C) including development of user interfaces, the use of GPS, camera, web communication, and push notifications.'),
('c349', 'iPad Programming', 'The iPad programming module will be based on the C348 iPhone Programming module, but focuses on iPad specific features including like developing applications and games for the bigger screen.');

-- --------------------------------------------------------


-- Table structure for table `nutrition`


CREATE TABLE `nutrition` (
  `id` int(5) NOT NULL,
  `food` varchar(100) NOT NULL,
  `calories` int(5) NOT NULL,
  `fat` int(5) NOT NULL,
  `protein` int(5) NOT NULL,
  `carbs` int(5) NOT NULL,
  `fiber` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`id`, `food`, `calories`, `fat`, `protein`, `carbs`, `fiber`) VALUES
(1, 'Pecans', 691, 72, 9, 14, 10),
(2, 'Walnuts', 654, 65, 15, 14, 7),
(3, 'Hazelnuts', 628, 61, 15, 17, 10),
(4, 'Sunflower Seeds', 584, 51, 21, 20, 9),
(5, 'Almonds', 575, 49, 21, 22, 12),
(6, 'Sesame Seeds', 573, 50, 18, 23, 12),
(7, 'Pumpkin Seeds', 541, 46, 25, 18, 4),
(8, 'Soybeans', 446, 20, 36, 30, 9),
(9, 'Quinoa', 368, 6, 14, 64, 7),
(10, 'Beans, Pinto', 347, 1, 21, 63, 15),
(11, 'Black Beans', 341, 1, 22, 62, 15),
(12, 'Beans, Kidney', 337, 1, 23, 61, 15),
(13, 'Beans, Navy', 337, 1, 22, 61, 24),
(14, 'Cranberry Beans', 335, 1, 23, 60, 25),
(15, 'Mushrooms, Shiitake', 296, 1, 10, 75, 11),
(16, 'Avacado', 160, 15, 2, 9, 7),
(17, 'Garlic', 149, 0, 6, 33, 2),
(18, 'Yams', 118, 0, 2, 28, 4),
(19, 'Bananas', 89, 0, 1, 23, 3),
(20, 'Sweet Potato', 86, 0, 2, 20, 3),
(21, 'Corn', 86, 1, 3, 19, 3),
(22, 'Pomegranates', 83, 1, 2, 19, 4),
(23, 'Peas', 81, 0, 5, 14, 5),
(24, 'Potatoes, Russet', 79, 0, 2, 18, 1),
(25, 'Parsnips', 75, 0, 1, 18, 5),
(26, 'Figs', 74, 0, 1, 19, 3),
(27, 'Shallots', 72, 0, 3, 17, 0),
(28, 'Kumquats', 71, 1, 2, 16, 6),
(29, 'Potatoes, Red', 70, 0, 2, 16, 2),
(30, 'Guava', 68, 1, 3, 14, 5),
(31, 'Grapes', 67, 0, 1, 17, 1),
(32, 'Cherries', 63, 0, 1, 16, 2),
(33, 'Leeks', 61, 0, 1, 14, 2),
(34, 'Pears', 58, 0, 0, 15, 3),
(35, 'Blueberries', 57, 0, 1, 14, 2),
(36, 'Tangerines', 53, 0, 1, 13, 2),
(37, 'Apples', 52, 0, 0, 14, 2),
(38, 'Raspberries', 52, 1, 1, 12, 6),
(39, 'Pineapple', 50, 0, 1, 13, 1),
(40, 'Kale', 50, 1, 3, 10, 2),
(41, 'Apricots', 48, 0, 1, 11, 2),
(42, 'Oranges', 47, 0, 1, 12, 2),
(43, 'Artichokes', 47, 0, 3, 11, 5),
(44, 'Cranberries', 46, 0, 0, 12, 5),
(45, 'Beets', 43, 0, 2, 10, 3),
(46, 'Blackberries', 43, 0, 1, 10, 5),
(47, 'Grapefruit', 42, 0, 1, 11, 2),
(48, 'Celeriac', 42, 0, 1, 9, 2),
(49, 'Sugar Snap Peas', 42, 0, 3, 8, 3),
(50, 'Carrots', 41, 0, 1, 10, 3),
(51, 'Acorn Squash', 40, 0, 1, 10, 1),
(52, 'Onion', 40, 0, 1, 9, 2),
(53, 'Papaya', 39, 0, 1, 10, 2),
(54, 'Peaches', 39, 0, 1, 10, 1),
(55, 'Mushrooms, Maitake', 37, 0, 2, 7, 3),
(56, 'Honeydew', 36, 0, 1, 9, 1),
(57, 'Rutabagas', 36, 0, 1, 8, 3),
(58, 'Cantaloupe', 34, 0, 1, 9, 1),
(59, 'Broccoli', 34, 0, 3, 7, 3),
(60, 'Serrano Pepper', 32, 0, 2, 8, 4),
(61, 'Strawberries', 32, 0, 0, 8, 2),
(62, 'Green Beans', 31, 0, 2, 7, 3),
(63, 'Okra', 31, 0, 2, 7, 3),
(64, 'Spaghetti Squash', 31, 1, 1, 7, 0),
(65, 'Sweet Red Peppers', 31, 0, 1, 6, 2),
(66, 'Limes', 30, 0, 1, 11, 3),
(67, 'Watermelon', 30, 0, 1, 8, 0),
(68, 'Collards', 30, 0, 2, 6, 4),
(69, 'Lemons', 29, 0, 1, 9, 3),
(70, 'Turnips', 28, 0, 1, 6, 2),
(71, 'Sweet Yellow Peppers', 27, 0, 1, 6, 1),
(72, 'Banana Peppers', 27, 0, 2, 5, 3),
(73, 'Mustard Greens', 26, 0, 3, 5, 3),
(74, 'Cabbage', 25, 0, 1, 6, 3),
(75, 'Cauliflower', 25, 0, 2, 5, 3),
(76, 'Eggplant', 24, 0, 0, 6, 1),
(77, 'Spinach', 23, 0, 3, 4, 2),
(78, 'Rhubarb', 21, 0, 1, 5, 2),
(79, 'Sweet Green Pepper', 20, 0, 1, 5, 2),
(80, 'Asparagus', 20, 0, 2, 4, 2),
(81, 'Swiss Chard', 19, 0, 2, 4, 2),
(82, 'Tomatoes', 18, 0, 1, 4, 1),
(83, 'Celery', 16, 0, 1, 3, 2),
(84, 'Radish', 16, 0, 1, 3, 2),
(85, 'Summer Squash', 16, 0, 1, 3, 1),
(86, 'Cucumbers', 15, 0, 1, 4, 0),
(87, 'Lettuce', 15, 0, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`) VALUES
(1, 'Introduction to Programming', 'This module introduces the concepts and applications of programming to students with no prior programming experience. The module uses the python language that is widely used in industry by companies such as Google, YouTube and Industrial Light & Magic. Software developers, scientists, engineers, and academics also use python as an effective and highly-productive tool. Students will learn programming concepts such as variables, loops, conditional statements, functions and libraries, and use python to create graphics, manipulate data and media objects, and to utilise external programme libraries.'),
(2, 'New Media Communications', 'The Internet and new media (digital imaging, audio, augmented reality, video, web, etc.) have become important means of communications. This module explores how to communicate effectively via the Internet and new media. Students will explore issues relating to aesthetics, usability, user experience, and humancomputer interaction. They will learn about content creation and design techniques that will best support the desired communication objectives. Topics covered will include basic web design, typography, colour, choice of media, interactivity, and responsible use of new media.'),
(3, 'Systems Analysis and Design', 'This module provides an introduction to the theory and practices of systems development methodologies. With practical case scenarios, students will undertake, in a methodical manner, the analysis of a given problem situation and produce a definition of client requirements using appropriate methods, tools and techniques that will lead to the development of application systems. This module also covers the techniques and best practices for varied device platforms.'),
(4, 'Web Applications Development', 'This module introduces students to the fundamental skills and knowledge associated with developing database-driven web applications. The scope of this module will cover the development of web pages that can store, search, retrieve, and display data from a database, validate data using client and server-side techniques, use sessions variables for holding information across multiple web pages, use web cookies for remembering previous user activity, and set access control to various web pages based on different user profiles. The language and technologies used in this module include HTML, CSS, php, and JavaScript.'),
(5, 'Database Systems', 'This module covers the principles and concepts of database management systems and the reasons for using such systems in an organisation. It provides an understanding of the factors in database design and it will help students develop a methodical approach to database design and implementation. This includes the skills in accessing and manipulating database systems through the use of SQL. It also introduces an awareness of the maintenance, performance and support issues associated with a database environment.'),
(6, 'Object-oriented programming', 'The module introduces students to the programming constructs of the Java programming language, concept of object-orientation and the programming of object-oriented programmes in Java. Students will learn to interpret and programme the solution of systems represented as Unified Modelling Language (UML) diagrams in Java.'),
(7, 'Computer System Technologies', 'This module covers the concepts and fundamentals of computer systems and the various software that power computers today. Students will learn effective workstation administration and gain an understanding of network technologies. Problems designed to encourage practical hands-on exploration will be used.'),
(8, 'IT Security and Management', 'This module addresses the best practices of the development and management of effective security systems with coverage on information, personnel, physical security, and risk analysis for information protection. It provides a broad overview of the principles and elements of information technology security. It covers the basic principles of the CIA model â€“ Confidentiality, Integrity and Availability. Topics covered include IT security threats, security techniques, security services, and system security features. Students will also be introduced to the different information security standards available in the IT industry such as ISO 27001 that implements a security framework for organisations.'),
(9, 'Advanced Web Application Development', 'This module extends the coverage of web application development using php by building on the students understanding of database-driven web applications with hands-on skills involved in developing web applications with more advanced functionality including the use of jQuery and AJAX. This module will also introduce the theoretical and practical skills in the use of php web frameworks for web development to alleviate the overhead associated with common activities performed in web development and in promoting code re-use. Finally, this module will introduce students to the practical aspects related to the deployment of web applications on a cloudbased platform.'),
(10, 'Mobile User Interface Design', 'This module address the issues associated with the user experience and the design of user interfaces for mobile devices. This module will explore these issues with the creation of mobile websites. Students will use CSS, HTML5 and php in creating web sites specifically for the use on mobile phone browsers.'),
(11, 'Web Services', 'This module will cover the creation and use of different web service protocols like Simple Object Access Protocol (SOAP), Representational State Transfer (REST) and Web Services Description Language (WDSL), as well as their use in mobile applications. Students will look into different programming languages to create and parse services, as well as learning about more general concepts like authentication, cloud computing and enterprise solutions.'),
(12, 'Web Frameworks', 'This module builds on the studentsâ€™ understanding of webcentric applications with the introduction and application of web frameworks and the hands-on skills involved in web applications with more advanced functionality. Students will learn how such applications can be accessible via the mobile platform.'),
(13, 'Android Programming', 'In this module, students will learn the basics of creating Android Applications. They will learn about user interface implementation issues such as layout, notifications and dialogues as well as the logic and data management (databases, services, GPS, multi-threading, etc.) using the Java programming language.'),
(14, 'Android Programming II', 'In this module, students will continue to base on what was covered in C346 Android Programming, but they will also be exposed to more advanced topics like widgets, animation and phone hardware (camera, accelerometer etc.). This module also cover 2D and 3D Android games.'),
(15, 'iPhone Programming', 'This module covers basic iPhone application and game development in Xcode (Objective C) including development of user interfaces, the use of GPS, camera, web communication, and push notifications.'),
(16, 'iPad Programming', 'The iPad programming module will be based on the C348 iPhone Programming module, but focuses on iPad specific features including like developing applications and games for the bigger screen.');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `module_code` varchar(10) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `module_code`, `student_id`) VALUES
(1, 4, 'c105', 111111),
(2, 3, 'c111', 111111);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`) VALUES
(1111111, 'Bob', 'Tan'),
(2222222, 'Sally', 'Lim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`student_id`,`module_code`),
  ADD KEY `fk_student_has_modules_modules1_idx` (`module_code`),
  ADD KEY `fk_student_has_modules_student_idx` (`student_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_code`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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

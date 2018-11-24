-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 06:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yalla_etbra3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `hospital_name` varchar(100) NOT NULL,
  `blood_type` char(2) NOT NULL,
  `number_needed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`hospital_name`, `blood_type`, `number_needed`) VALUES
('MagdyYacoub', 'A+', 5),
('MagdyYacoub', 'O+', 1),
('MagdyYacoub', 'A-', 1),
('MagdyYacoub', 'A+', 12),
('MagdyYacoub', 'A+', 5),
('MagdyYacoub', 'A+', 10),
('MagdyYacoub', 'A+', 45),
('Andalosia', 'A+', 5),
('Andalosia', 'A+', 1),
('DarFoad', 'A+', 2),
('DarFoad', 'A+', 5),
('ElTkhasosy', 'A+', 6),
('ElTkhasosy', 'A+', 56),
('Andalosia', 'A+', 100),
('Andalosia', 'O+', 80),
('MagdyYacoub', 'A+', 4),
('MagdyYacoub', 'A+', 121),
('MagdyYacoub', 'A+', 121),
('MagdyYacoub', 'A+', 1),
('Andalosia', 'A+', 5),
('Andalosia', 'A+', 555),
('Andalosia', 'A+', 50),
('Andalosia', 'A+', 3);

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests1`
--

CREATE TABLE `blood_requests1` (
  `date` varchar(80) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_requests1`
--

INSERT INTO `blood_requests1` (`date`, `hospital_name`, `user`, `number`) VALUES
('2018-05-10 10:14:40pm', 'MagdyYacoub', 'reham@yallamail.com', 4),
('2018-05-10 10:14:44pm', 'MagdyYacoub', 'reham@yallamail.com', 9),
('2018-05-10 10:14:48pm', 'MagdyYacoub', 'tarek@yallamail.com', 45),
('2018-05-10 10:14:48pm', 'MagdyYacoub', 'reham@yallamail.com', 45),
('2018-05-10 10:27:02pm', 'Andalosia', 'reham@yallamail.com', 4),
('2018-05-10 10:27:21pm', 'DarFoad', 'tarek@yallamail.com', 1),
('2018-05-10 10:27:23pm', 'DarFoad', 'tarek@yallamail.com', 4),
('2018-05-10 10:27:41pm', 'ElTkhasosy', 'tarek@yallamail.com', 6),
('2018-05-10 10:27:41pm', 'ElTkhasosy', 'reham@yallamail.com', 6),
('2018-05-10 10:27:46pm', 'ElTkhasosy', 'tarek@yallamail.com', 56),
('2018-05-10 10:27:46pm', 'ElTkhasosy', 'reham@yallamail.com', 56),
('2018-05-11 02:23:16am', 'Andalosia', 'tarek@yallamail.com', 100),
('2018-05-11 02:23:16am', 'Andalosia', 'reham@yallamail.com', 100),
('2018-05-11 02:24:46am', 'Andalosia', 'mostafanabil@yallamail.com', 80),
('2018-05-11 08:15:55pm', 'MagdyYacoub', 'tarek@yallamail.com', 4),
('2018-05-11 08:15:55pm', 'MagdyYacoub', 'reham@yallamail.com', 4),
('2018-05-11 08:16:03pm', 'MagdyYacoub', 'tarek@yallamail.com', 121),
('2018-05-11 08:16:03pm', 'MagdyYacoub', 'reham@yallamail.com', 121),
('2018-05-11 08:16:03pm', 'MagdyYacoub', 'tarek@yallamail.com', 121),
('2018-05-11 08:16:03pm', 'MagdyYacoub', 'reham@yallamail.com', 121),
('2018-05-11 08:16:12pm', 'MagdyYacoub', 'tarek@yallamail.com', 0),
('2018-05-11 10:29:15pm', 'Andalosia', 'tarek@yallamail.com', 5),
('2018-05-11 10:29:15pm', 'Andalosia', 'reham@yallamail.com', 5),
('2018-05-11 10:51:42pm', 'Andalosia', 'tarek@yallamail.com', 555),
('2018-05-11 10:51:42pm', 'Andalosia', 'reham@yallamail.com', 555),
('2018-05-12 02:14:51pm', 'Andalosia', 'tarek@yallamail.com', 50),
('2018-05-12 02:14:51pm', 'Andalosia', 'reham@yallamail.com', 50),
('2018-05-12 06:42:36pm', 'Andalosia', 'tarek@yallamail.com', 3),
('2018-05-12 06:42:36pm', 'Andalosia', 'reham@yallamail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donations_msgs`
--

CREATE TABLE `donations_msgs` (
  `user_name` varchar(100) NOT NULL,
  `charity` varchar(100) NOT NULL,
  `phone_num` char(12) NOT NULL,
  `msg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donations_msgs`
--

INSERT INTO `donations_msgs` (`user_name`, `charity`, `phone_num`, `msg`) VALUES
('idmcldmvd', '	Orman Association', '01127385066', 'hshsahsahsh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Admin` tinyint(1) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone_number` char(12) NOT NULL,
  `country` varchar(50) NOT NULL,
  `blood_type` char(2) NOT NULL,
  `hospital` tinyint(1) NOT NULL,
  `charity` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Yalla etbra3 Users'' data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Admin`, `first_name`, `second_name`, `email`, `password`, `phone_number`, `country`, `blood_type`, `hospital`, `charity`) VALUES
(0, 'mostafa', 'nabil', 'mostafanabil@yallamail.com', '698d51a19d8a121ce581499d7b701668', '01127385066', 'Alexandria', 'O+', 0, 0),
(0, 'tarek', 'mohamed', 'tarek@yallamail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', '01215457845', 'Alexandria', 'A+', 0, 0),
(0, 'reham', 'naguib', 'reham@yallamail.com', '698d51a19d8a121ce581499d7b701668', 'asdasdasdas', 'Alexandria', 'A+', 0, 0),
(0, 'MagdyYacoub', '----', 'magdyYacoub@yallamail.com', '698d51a19d8a121ce581499d7b701668', '01201201201', 'alexandria', '--', 1, 0),
(0, 'Andalosia', '----', 'Andalosia@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 1, 0),
(0, 'ElTkhasosy', '---', 'ElTkhasosy@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 1, 0),
(0, 'DarFoad', '---', 'DarFoad@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 1, 0),
(0, 'Resala Association', '---', 'Resala@yallamail.comm', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 0, 1),
(0, 'Orman Association', '---', 'Orman@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 0, 1),
(0, 'Magdy Yaqoub Foundation', '---', 'MagdyYaqoubFoundation@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 0, 1),
(0, 'Misr El Kheir Foundation', '---', 'MisrElKheir@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 0, 1),
(0, '57357 foundation', '---', '57357@yallamail.com', '698d51a19d8a121ce581499d7b701668', '---', 'alexandria', '--', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2019 at 06:05 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `child`, `user`) VALUES
(10, '', ''),
(2, 'Eialid Ahmed Joy', 'pranab.datta'),
(3, 'Eialid Ahmed Joy', 'pranab.datta'),
(4, 'Sakib Al Mamun', 'eialid071'),
(6, 'Kashem Ali', 'eialid071'),
(11, 'Iqbal Hossain', 'eialid071');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `agei` int(3) NOT NULL,
  `imgsrc` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `name`, `gender`, `age`, `agei`, `imgsrc`, `desc`) VALUES
(10, 'Rina Khatun', 'female', '4-6', 5, '2', 'She can do dancing, love to draw picture.friendly and polite'),
(9, 'Rabeya Ahamed', 'female', '4-6', 5, '1', 'She likes to drawing. She is good at singing.'),
(11, 'Kashem Ali', 'male', '4-6', 4, '3', 'From-Jashore\r\nPolite, like to eat ice cream,like to play cricket\r\n'),
(12, 'Al Mamun', 'male', '7-9', 9, '4', 'From Comilla\r\nFriendly nature, Good at drawing,Polite'),
(13, 'Sakib Al Mamun', 'male', '4-6', 4, '5', 'From-Chittagong\r\nHe like to play cricket, like sweet,friendly\r\n'),
(14, 'Johora', 'female', '4-6', 6, '6', 'She likes to play, tribal child,  she can recite Quran, her smile is beautiful\r\n'),
(15, 'Rana Halder', 'male', '1-3', 3, '7', 'He is naughty, his eyes are beautiful\r\n'),
(16, 'Iqbal Hossain', 'male', '4-6', 6, '8', 'Like to play football,polite,friendly,like to read story book.'),
(17, 'Anika Afrose', 'female', '7-9', 9, '9', 'She is good at drawing, good singer, have a good interest in study'),
(18, 'Taslima Banu', 'female', '4-6', 6, '10', 'Good at handcrafting, friendly, disciplined'),
(19, 'Tareq Sikder', 'male', '4-6', 6, '11', 'Good at drawing,like to play football,like to eat chocolate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'pranab.datta', '$2y$10$yI5N30X.zba5ny/eK0ddr.AD0xT4mZeQokiZpU4pfgD6XU5GkJcri', '2019-07-27 05:17:39'),
(2, 'akash103691', '$2y$10$j8hOMxCfIAwigx1nEXiyi.0bywiEB8AxBYS8/17eS5kmwCGSf4ae2', '2019-07-27 14:25:20'),
(3, 'eialid071', '$2y$10$P6A03inU1OWs41EWBuGhfuVF0C.X52sdxMVcYFwNjToNaRMnr5k2.', '2019-07-30 04:04:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

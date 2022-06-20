-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2022 at 09:36 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date` date NOT NULL,
  `die_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `surname`, `born_date`, `die_date`) VALUES
(1, 'Taras', 'Shevchenko', '1814-02-25', '1861-02-26'),
(3, 'k7ui', 'ilyk', '1000-12-11', '1212-12-11'),
(4, 'Rt', 'ist', '1222-03-09', '1252-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `exhibits`
--

DROP TABLE IF EXISTS `exhibits`;
CREATE TABLE IF NOT EXISTS `exhibits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rentable` tinyint(1) NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artist` (`artist`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exhibits`
--

INSERT INTO `exhibits` (`id`, `title`, `artist`, `type`, `rentable`, `picture`) VALUES
(1, 'name1', 1, 'weeapon', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `exhibits_history`
--

DROP TABLE IF EXISTS `exhibits_history`;
CREATE TABLE IF NOT EXISTS `exhibits_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exhibit` int(11) NOT NULL,
  `since_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `exhibited_in` int(11) NOT NULL,
  `rented_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exhibited_in` (`exhibited_in`),
  KEY `exhibit` (`exhibit`),
  KEY `rented_to` (`rented_to`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exhibits_history`
--

INSERT INTO `exhibits_history` (`id`, `exhibit`, `since_date`, `to_date`, `exhibited_in`, `rented_to`) VALUES
(4, 1, '1333-07-05', '1335-07-04', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `street`, `city`, `zip_code`) VALUES
(1, 'gal1', 'str', 'city', '3465'),
(2, 'jjyfhg', 'kgjhk', 'jhgkl', 'jm');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery` int(11) NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `gallery`, `room`) VALUES
(5, 1, 'fdhg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(32, 'Chris ', 'chrisrock4@gmail.com', 'chris@rock'),
(33, 'Charlie', 'madcharlie@gmail.com', 'charlie1234'),
(34, 'Andy', 'andyfun69@yahoo.in', 'andy@66'),
(36, 'root', 'leondredeviries@gmail.com', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visitor_name`, `phone_num`, `gallery_id`) VALUES
(2, 'loguyj', '536', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exhibits`
--
ALTER TABLE `exhibits`
  ADD CONSTRAINT `exhibits_ibfk_1` FOREIGN KEY (`artist`) REFERENCES `artists` (`id`);

--
-- Constraints for table `exhibits_history`
--
ALTER TABLE `exhibits_history`
  ADD CONSTRAINT `exhibits_history_ibfk_1` FOREIGN KEY (`exhibited_in`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `exhibits_history_ibfk_2` FOREIGN KEY (`exhibit`) REFERENCES `exhibits` (`id`),
  ADD CONSTRAINT `exhibits_history_ibfk_3` FOREIGN KEY (`rented_to`) REFERENCES `galleries` (`id`);

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

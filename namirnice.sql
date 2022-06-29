-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2021 at 01:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `namirnice`
--

DROP TABLE IF EXISTS `namirnice`;
CREATE TABLE IF NOT EXISTS `namirnice` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Jedinica` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `Vrsta` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `Cijena` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `namirnice`
--

INSERT INTO `namirnice` (`id`, `Jedinica`, `Vrsta`, `Cijena`) VALUES
(1, 'Hljeb', 'Klas', '1'),
(3, 'Pašteta', 'Argeta', '2'),
(4, 'Jabuke', 'Voće', '1.5'),
(5, 'Eurokrem', 'Nutella', '10'),
(9, 'Pasta', 'Barilla', '3'),
(10, 'Mlijeko', 'Milkos', '1.5'),
(11, 'Mlijeko', 'Meggle', '1.7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

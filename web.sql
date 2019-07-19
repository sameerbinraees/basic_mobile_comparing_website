-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2019 at 07:44 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

DROP TABLE IF EXISTS `mobiles`;
CREATE TABLE IF NOT EXISTS `mobiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `new` varchar(500) NOT NULL,
  `os` varchar(50) NOT NULL,
  `dimensions` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `technology` varchar(50) NOT NULL,
  `displaysize` varchar(50) NOT NULL,
  `resolution` varchar(50) NOT NULL,
  `front` varchar(50) NOT NULL,
  `rear` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `chipset` varchar(50) NOT NULL,
  `builtin` varchar(50) NOT NULL,
  `sdcard` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `talktime` varchar(50) NOT NULL,
  `2g` varchar(50) NOT NULL,
  `3g` varchar(50) NOT NULL,
  `4g` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `name`, `url`, `price`, `new`, `os`, `dimensions`, `weight`, `technology`, `displaysize`, `resolution`, `front`, `rear`, `cpu`, `chipset`, `builtin`, `sdcard`, `capacity`, `talktime`, `2g`, `3g`, `4g`, `brand`) VALUES
(1, 'IPHONE8', 'http://komoorki.pl/userdata/gfx/ebeb1d74c2dfe70e201229563b8b4ea7.jpg', '50000', 'hdfjdhjfhdsjfhjhgjfdhjhjhj', 'IOS', '4./8*9.33641.55-53', '60g', 'IOS', '6 In', '441PPI', '4mp', '16mp', 'SDM', 'Ad', '256 GB', '256 GB', '256 GB', '256 GB', 'yes', 'yes', 'yes', 'apple'),
(3, 'IPHONE6', 'https://drop.ndtv.com/TECH/product_database/images/910201410645AM_635_apple_iphone_6_plus.jpeg', '50000', 'gdfugsdufgu', 'IOS', '4./8*9.33641.55-53', '60g', 'IOS', '6 In', '441PPI', '4mp', '16mp', 'SDM', 'Ad', '256 GB', '256 GB', '256 GB', '256 GB', 'yes', 'yes', 'yes', 'apple'),
(2, 'IPHONE7', 'https://stat-m5.ms-online.pl/media/cache/gallery/rc/aioxqk25/images/20/20503840/iPhone8-SpGry-PureAngles_GB-EN-SCREEN_2.jpg', '50000', 'gdfugsdufgu', 'IOS', '4./8*9.33641.55-53', '60g', 'IOS', '6 In', '441PPI', '4mp', '16mp', 'SDM', 'Ad', '256 GB', '256 GB', '256 GB', '256 GB', 'yes', 'yes', 'yes', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `email`) VALUES
('sameer', 'password', 'Sameer', 'Raees', 'sameer.raees@yahoo.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

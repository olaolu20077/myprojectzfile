-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2024 at 07:07 AM
-- Server version: 5.7.40
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprojectz`
--

-- --------------------------------------------------------

--
-- Table structure for table `user75zs`
--

DROP TABLE IF EXISTS `user75zs`;
CREATE TABLE IF NOT EXISTS `user75zs` (
  `user75z_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usernami` varchar(255) NOT NULL,
  `myfoto` varchar(100) NOT NULL,
  `fonino` varchar(20) NOT NULL,
  `emali` varchar(255) NOT NULL,
  `whatwantdescribe` varchar(0) NOT NULL,
  `agreeterms` varchar(255) NOT NULL,
  PRIMARY KEY (`user75z_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

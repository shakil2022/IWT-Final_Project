-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2022 at 01:04 PM
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
-- Database: `final_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `facility_problem`
--

DROP TABLE IF EXISTS `facility_problem`;
CREATE TABLE IF NOT EXISTS `facility_problem` (
  `Room_Number` int(11) NOT NULL,
  `Damaged_Fan_Un` int(11) NOT NULL,
  `Damaged_Fan_Pro` int(11) NOT NULL,
  `Damaged_Fan_Sol` int(11) NOT NULL,
  `Damaged_Light_Un` int(11) NOT NULL,
  `Damaged_Light_Pro` int(11) NOT NULL,
  `Damaged_Light_Sol` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Room_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

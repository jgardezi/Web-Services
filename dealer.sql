-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2011 at 01:14 AM
-- Server version: 5.5.11
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_pinefalls`
--

CREATE TABLE IF NOT EXISTS `vehicles_pinefalls` (
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `yyear` varchar(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `feature_desc` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles_pinefalls`
--

INSERT INTO `vehicles_pinefalls` (`make`, `model`, `yyear`, `price`, `feature_desc`) VALUES
('Toyota', 'Camry', '2001', 13999, 'Power steering'),
('Toyota', 'Tacoma', '2002', 16999, 'Power seats'),
('Lexus', 'LS', '2003', 26999, 'Built in GPS'),
('Toyota', 'Prius', '2004', 29999, 'Built in TV and DVD player'),
('Lexus', 'GS', '2005', 34999, '10 CD changer');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_selkirk`
--

CREATE TABLE IF NOT EXISTS `vehicles_selkirk` (
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `yyear` varchar(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `feature_desc` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles_selkirk`
--

INSERT INTO `vehicles_selkirk` (`make`, `model`, `yyear`, `price`, `feature_desc`) VALUES
('Saturn', 'Vue', '2004', 15999, 'Power locks'),
('Saturn', 'Ion', '2005', 12499, 'Reliable'),
('Saturn', 'Sky', '2006', 19999, 'Convertible, must see!'),
('Saturn', 'Relay', '2004', 14999, 'Very roomy'),
('Saturn', 'L300', '2001', 9999, 'Chrome wheels');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_steinbach`
--

CREATE TABLE IF NOT EXISTS `vehicles_steinbach` (
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `yyear` varchar(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `feature_desc` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles_steinbach`
--

INSERT INTO `vehicles_steinbach` (`make`, `model`, `yyear`, `price`, `feature_desc`) VALUES
('Chrysler', 'Crossfire', '2005', 19999, 'Air conditioning, power windows'),
('Chrysler', 'Sebring', '2003', 14999, 'Convertible'),
('Dodge', 'Viper', '2006', 89999, 'loaded'),
('Chrysler', '300', '2003', 18999, 'Leather seats'),
('Dodge', 'Durango', '2004', 23999, 'Supercharged engine');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

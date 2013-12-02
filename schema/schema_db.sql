-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2013 at 02:31 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codeigniter_angular`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `lastName`, `birthdate`, `delete`) VALUES
(1, '1', '1', '2013-12-01', 0),
(2, '2', '2', '2013-12-02', 0),
(3, '3', '3', '2013-12-03', 0),
(5, '5', '5', '2013-12-05', 0),
(6, '6', '6', '2013-12-06', 0),
(7, '7', '7', '2013-12-07', 0),
(8, '8', '8', '2013-12-08', 0),
(9, '9', '9', '2013-12-09', 0),
(22, '22', '22', '2013-12-22', 0),
(10, '10', '10', '2013-12-10', 0),
(11, '11', '11', '2013-12-11', 0),
(12, '12', '12', '2013-12-12', 0),
(13, '13', '13', '2013-12-13', 0),
(14, '14', '14', '2013-12-14', 0),
(15, '15', '15', '2013-12-15', 0),
(16, '16', '16', '2013-12-16', 0),
(17, '17', '17', '2013-12-17', 0),
(18, '18', '18', '2013-12-18', 0),
(19, '19', '19', '2013-12-19', 0),
(20, '20', '20', '2013-12-20', 0),
(21, '21', '21', '2013-12-21', 0),
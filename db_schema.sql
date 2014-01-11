-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2014 at 04:19 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `guid` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `birthday`, `guid`) VALUES
(1, 'Bryon', 'Webster', '1966-12-09', '52cb46a43e1751.09990271'),
(2, 'Doug', 'Reese', '2072-06-05', '52cb46a43e1753.87492605'),
(3, 'Fredrick', 'Grant', '2093-04-19', '52cb46a43e1758.25780220'),
(4, 'Linnette', 'Knaus', '2070-07-03', '52cb46a43e1750.41337129'),
(5, 'Toya', 'Higdon', '2003-02-17', '52cb46a43e1751.47564669'),
(6, 'Kathleen', 'Ong', '1958-05-23', '52cb46a43e1753.57960196'),
(7, 'Dwayne', 'Brennan', '2055-01-30', '52cb46a43e1756.95031437'),
(8, 'Sigrid', 'Burks', '1924-01-17', '52cb46a43e1755.84581840'),
(9, 'Angelique', 'Hatton', '2079-05-20', '52cb46a43e1751.09499083'),
(10, 'Araceli', 'Goodwin', '1948-06-26', '52cb46a43e1758.61818384'),
(11, 'Rick', 'Hoepner', '1910-12-04', '52cb46a43e1753.69839714'),
(12, 'Racquel', 'Michalowski', '2054-11-04', '52cb46a43e1750.88867233'),
(13, 'Regine', 'Bashford', '1918-05-22', '52cb46a43e1756.43300248'),
(14, 'Rabiah', 'Kelley', '2079-06-12', '52cb46a43e1757.50760284'),
(15, 'Polina', 'Brabant', '2017-09-03', '52cb46a43e1753.43180336'),
(16, 'Greg', 'Bunch', '2051-03-12', '52cb46a43e1751.77435662'),
(17, 'Arun', 'Jayn', '2012-09-04', '52cb46a43e1756.38389568'),
(18, 'Majeed', 'Hughesdkaiya', '2022-05-12', '52cb46a43e1758.78872004'),
(19, 'Micheal', 'Mott', '2061-11-29', '52cb46a43e1752.90134850'),
(20, 'Dominic', 'Bryson', '2053-11-02', '52cb46a43e1756.43232293'),
(21, 'Vernon', 'Odonoghue', '1959-08-10', '52cb46a43e1756.06683570'),
(22, 'Mutahir', 'Simpson', '1995-04-13', '52cb46a43e1753.53493546'),
(23, 'Victoria', 'Tupper', '2096-04-13', '52cb46a43e1759.16856723'),
(24, 'Karl', 'Welld', '2011-11-26', '52cb46a43e1752.24498048'),
(25, 'Corrine', 'Butterfield', '1927-02-23', '52cb46a43e1753.72547337'),
(26, 'Rashad', 'Givens', '2030-02-03', '52cb46a43e1758.24422824'),
(27, 'Austin', 'Hobbs', '2051-11-15', '52cb46a43e1754.37095011'),
(28, 'Raphael', 'Sutton', '1960-11-30', '52cb46a43e1754.20562396'),
(29, 'Wazir', 'Peacock', '1905-04-29', '52cb46a43e1753.42007083'),
(30, 'Andre', 'Shobe', '1929-06-26', '52cb46a43e1753.44622781'),
(31, 'Bola', 'Rice', '2066-05-10', '52cb46a43e1753.24265759'),
(32, 'Atul', 'Labrucherie', '2065-05-27', '52cb46a43e1759.67035044'),
(33, 'Sutman', 'Apotheloz', '1945-09-02', '52cb46a43e1752.93823019'),
(34, 'Bradley', 'Reiter', '2053-12-04', '52cb46a43e1755.64839440'),
(35, 'Aisha', 'Gallant', '2005-05-20', '52cb46a43e1752.32677409'),
(36, 'Stan', 'Hobson', '1966-12-29', '52cb46a43e1754.18205073'),
(37, 'Shelley', 'Hill', '2040-01-03', '52cb46a43e1751.24210656'),
(38, 'Roy', 'Dedonato', '2076-03-20', '52cb46a43e55d7.94602811'),
(39, 'Maria', 'Taylor', '1988-06-07', '52cb46a43e55d0.51259546'),
(40, 'Elena', 'Compton', '2037-07-05', '52cb46a43e55d4.82668304'),
(41, 'Howard', 'Graves', '2069-09-12', '52cb46a43e55d1.15220154'),
(42, 'Jasper', 'Donaldson', '1933-12-30', '52cb46a43e55d7.29860141'),
(43, 'Rakesh', 'Ward', '2069-04-17', '52cb46a43e55d5.86930362'),
(44, 'Jerline', 'Kiab', '1927-07-01', '52cb46a43e55d8.78598722'),
(45, 'Cecilia', 'Marrinson', '2028-04-17', '52cb46a43e55d6.21897030'),
(46, 'Spyro', 'Jayanti', '1988-08-24', '52cb46a43e55d0.61521338'),
(47, 'Ruth', 'Symes', '1996-12-25', '52cb46a43e55d8.99507532'),
(48, 'Colette', 'Miranda', '1908-05-26', '52cb46a43e55d6.80530422'),
(49, 'Miyanda', 'Tippit', '2051-10-07', '52cb46a43e55d2.55098666'),
(50, 'Fang', 'Lake', '1967-02-18', '52cb46a43e55d6.99401194');

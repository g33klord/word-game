-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2013 at 04:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `word`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(1, 'What is the capital of India?', 'Delhi'),
(2, 'What is the capital of Karnataka?', 'Bangalore'),
(3, 'What is the capital of Tamilnadu?', 'Chennai'),
(4, 'One who paint?', 'Painter'),
(5, 'One who drive?', 'Driver'),
(6, 'Where is Tajmahal situated?', 'Aagra'),
(7, 'Which is the most famous search engine?', 'Google'),
(8, 'Sun rises in?', 'East'),
(9, 'Starts with B, Colour of sky.', 'Blue'),
(10, 'Starts with R, colour of Blood.', 'Red'),
(11, 'Which  cities is known as Electronic City of India?', 'Bangalore'),
(12, 'The famous Eiffel Tower is in__', 'Paris'),
(13, 'GNU/Linux and MAC have root in which operating system?', 'Unix'),
(14, 'A country where there is no zero Income Tax. ', 'Kuwait'),
(15, 'Jog falls is located in which state ?', 'Karnataka'),
(16, 'Capital of Bihar?', 'Patna'),
(17, 'It''s a widely used programming language. Known for its platform independence.', 'Java'),
(18, 'It''s a Unix command used to search a occurance of give string. ', 'Grep'),
(19, 'Behavior of a coil of wire in resisting any change of electric current through the coil.', 'Inductance'),
(20, 'Extreme old age when a man behaves like a fool.', 'Dotage'),
(21, 'That which cannot be corrected', 'Incorrigible'),
(22, 'A person who insists on something.', 'Stickler'),
(23, 'Habitually silent or talking little.', 'Taciturn'),
(24, 'A person not sure of the existence of god', 'Agnostic'),
(25, 'A person who speaks many languages.', 'Polyglot'),
(26, 'This city is known as Pink city.', 'Jaipur'),
(27, 'A mobile operating system.', 'Android'),
(28, 'Most famous Free Operating system but often criticized for being not so open and privacy issues. ', 'Ubuntu'),
(29, 'It''s a free operating system from Red Hat. It''s community driven.', 'Fedora'),
(30, 'Who wrote Linux kernel?', 'Linus'),
(31, 'Before google+, Google had launched an Social Networking Site.', 'Orkut'),
(32, 'Continuing fight between parties, families, clans, etc.', 'Feud'),
(33, 'One who is determined to exact full vengeance for wrongs done to him', 'Vindictive'),
(34, 'Murder of a king.', 'Regicide'),
(35, 'An expression of mild disapproval', 'Reproof'),
(36, 'Having superior or intellectual interests and tastes', 'Highbrow'),
(37, 'One who is in charge of museum.', 'Curator'),
(38, 'A government by the nobles.', 'Aristocracy'),
(39, 'Giving undue favours to one''s own kith and kin', 'Nepotism'),
(40, 'Hater of learning and knowledge.', 'Misologist'),
(41, 'One who does not care for literature or art.', 'Philistine'),
(42, 'A disease of mind causing an uncontrollable desire to steal', 'Kleptomania');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 05:03 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `server`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `ChatId` int(20) NOT NULL AUTO_INCREMENT,
  `Message` text NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL,
  KEY `ChatId` (`ChatId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ChatId`, `Message`, `Sender`, `Role`) VALUES
(1, 'Welcome to Africa!', 'Akin Samson', 'Staff'),
(2, 'Not in Nigeria', 'Tunde', 'Staff'),
(3, 'hi', 'Akin Samson', 'Staff'),
(4, 'This is Php document', 'Akin Samson', 'Staff'),
(5, 'This is Php document', 'Akin Samson', 'Student'),
(6, 'This is Php document', 'Akin Samson', 'Staff'),
(7, 'Yet we are there', 'Akin Samson', 'Staff'),
(8, 'Are we still there', 'Akin Samson', 'Staff'),
(9, 'Are we still there', 'Akin Samson', 'Staff'),
(10, 'Are we still there', 'Akin Samson', 'Student'),
(11, 'Are we still there', 'Akin Samson', 'Staff'),
(12, 'Are we still there', 'Akin Samson', 'Staff'),
(13, 'Are we still there', 'Akin Samson', 'Staff'),
(14, 'Are we still there', 'Akin Samson', 'Staff'),
(15, 'Are we still there', 'Akin Samson', 'Staff'),
(16, 'Are we still there', 'Akin Samson', 'Staff'),
(17, 'Are we still there', 'Akin Samson', 'Staff'),
(18, 'Are we still there', 'Akin Samson', 'Staff'),
(19, 'Are we still there', 'Akin Samson', 'Staff'),
(20, 'Are we still there', 'Akin Samson', 'Staff'),
(21, 'Are we still there', 'Akin Samson', 'Staff'),
(22, 'Are we still there', 'Akin Samson', 'Staff'),
(23, 'Are we still there', 'Akin Samson', 'Staff'),
(24, 'Are we still there', 'Akin Samson', 'Staff'),
(25, 'Are we still there', 'Akin Samson', 'Staff'),
(26, 'Are we still there', 'Akin Samson', 'Staff'),
(27, 'Are we still there', 'Akin Samson', 'Staff'),
(28, 'Good Day', 'Akin Samson', 'Staff'),
(29, 'Good morning', 'Akin Samson', 'Staff'),
(30, 'welcome to the world', 'Akin Samson', 'Staff'),
(31, 'dsddfsfdg rfsrgff', 'Akin Samson', 'Staff'),
(32, 'vdjgdgjmfmsdgmdgdgdgv', 'Akin Samson', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `MessageId` int(20) NOT NULL AUTO_INCREMENT,
  `Message` text NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL,
  KEY `MessageId` (`MessageId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageId`, `Message`, `Sender`, `Role`) VALUES
(1, 'There will be meeting tomorrow', 'Taiwo', 'Staff'),
(2, 'Taking drug prohibited', 'Tunde', 'Staff'),
(3, 'How are you', 'Akin Samson', 'Staff'),
(4, 'How are you', 'Akin Samson', 'Student'),
(5, 'welcome to the wortld', 'Akin Samson', 'Student'),
(6, 'welcome to the worlsdsfld', 'Akin Samson', 'Staff'),
(7, 'fhfghgh bhrttt fgtete', 'Jimoh Michael', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Username`, `Password`, `Role`) VALUES
('Akin Samson', 'akins', 'inter', 'Staff'),
('Jimoh Michael', 'jimo', 'jimo', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE IF NOT EXISTS `userss` (
  `UserId` int(15) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL DEFAULT '',
  `Phone` varchar(20) NOT NULL DEFAULT '',
  `OtherNames` varchar(50) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL,
  PRIMARY KEY (`UserId`),
  KEY `UserId` (`UserId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`UserId`, `Firstname`, `Email`, `Phone`, `OtherNames`, `Username`, `Password`, `Role`) VALUES
(1, '', '', '', 'Akin Samson', 'akins', 'inter', 'Staff'),
(2, '', '', '', 'Jimoh Michael', 'jimo', 'jimo', 'Student');

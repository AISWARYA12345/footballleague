-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2020 at 06:50 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snitdb`
--
CREATE DATABASE IF NOT EXISTS `snitdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `snitdb`;

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE IF NOT EXISTS `bidding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `bamount` int(11) NOT NULL,
  `bid_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`id`, `sid`, `pid`, `teamid`, `bamount`, `bid_status`) VALUES
(9, 3, 4, 1006, 2500, 1),
(8, 2, 2, 1004, 1000, 0),
(7, 1, 4, 1004, 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bidplayer`
--

CREATE TABLE IF NOT EXISTS `bidplayer` (
  `sid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `endate` date NOT NULL,
  `status` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `team` varchar(30) NOT NULL,
  `points` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`sid`, `name`, `dob`, `email`, `phone`, `team`, `points`, `won`, `total`, `password`) VALUES
(1, 'hdfg', '2019-09-25', 'dhjgh@gmail.com', 2147483647, 'dgf', 100, 60, 10, '123'),
(2, 'dfgdf', '2019-09-09', 'sdfg', 2147483647, 'manchester', 890, 120, 180, '234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `status`) VALUES
('admin', 'admin', 'admin', '1'),
('player', 'player', 'player', '1'),
('1', '123', 'coach', '1'),
('5', '890', 'player', '1'),
('1001', 'ghh', 'team', '1'),
('8', 'p8', 'player', '0'),
('6', '908', 'player', '0'),
('4', 'p4', 'player', '1'),
('3', '456', 'player', '1'),
('1', '', 'team', '1'),
('1003', '90', 'team', '1'),
('8', 'p8', 'player', '0'),
('8', 'p8', 'player', '0'),
('8', 'p8', 'player', '0'),
('1007', '1007', 'team', '1'),
('league', 'league', 'league', '1'),
('1006', '1006', 'team', '1'),
('1004', '123', 'team', '1'),
('1005', '456', 'team', '1'),
('7', '789', 'player', '0'),
('8', '68', 'player', '0'),
('8', 'p8', 'player', '0'),
('8', 'p8', 'player', '0'),
('8', 'p8', 'player', '0'),
('8', 'p8', 'player', '0');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `sid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `totalmatches` int(11) NOT NULL,
  `photo` tinyint(1) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `id1` (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`sid`, `name`, `address`, `dob`, `phone`, `email`, `height`, `weight`, `type`, `totalmatches`, `photo`, `amount`) VALUES
(1, 'ewr', 'ret', '2019-09-25', 1234567890, 'jefrreu', 100, 200, 'sdbfbs', 20, 1, 0),
(2, 'sadsa', 'shdgf', '2019-09-28', 1234567890, 'gg@gmail.com', 90, 50, 'defender', 90, 1, 0),
(3, 'sa', 'sd', '2019-09-13', 1234567890, '123@gmail.com', 100, 70, 'defender', 20, 1, 0),
(4, 'messy', 'messy us', '2019-09-18', 2147483647, 'messy@gmail.com', 189, 80, 'defender', 90, 1, 0),
(5, 'dfgd', 'dfgf', '2019-09-17', 2147483647, 'as@gmail.com', 90, 10, 'striker', 120, 1, 0),
(6, 'Joseph', 'sajhgf', '2019-09-10', 2147483647, 'an@gmail.com', 100, 200, 'defender', 40, 1, 0),
(7, 'dsfs', 'fdgdfg', '2019-07-23', 2147483647, 'ssdg@gmail.com', 90, 20, 'goal', 90, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pointtable`
--

CREATE TABLE IF NOT EXISTS `pointtable` (
  `sid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `gameplayed` int(11) NOT NULL,
  `gamewon` int(11) NOT NULL,
  `gamelost` int(11) NOT NULL,
  `goalfor` int(11) NOT NULL,
  `goalagainst` int(11) NOT NULL,
  `goaldiff` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `team1` varchar(20) NOT NULL,
  `team2` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `stadium` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `lattitude` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sid`, `date`, `team1`, `team2`, `country`, `stadium`, `longitude`, `lattitude`, `time`, `status`) VALUES
(2, '2019-10-29', 'Magester United', 'Chelsea FC', 'London', 'Stamford Bridge', '90', '48', '04:00:00', 'upcoming'),
(1, '2019-10-15', 'df', 'rtge', 'ret', 'erte', '89', '90', '04:00:00', 'drgte'),
(23, '2019-12-31', 'Chelsea FC', 'rg', 'rtu', 'rty', '574', '47', '00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `yoc` varchar(5) NOT NULL,
  `photo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `email`, `phone`, `dob`, `fname`, `course`, `sem`, `yoc`, `photo`) VALUES
(1, 'ferg', 'sfhh', '1234567890', '09/09/1998', 'fghfh', 'fftt', '9', '0/08/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leag_bid_player`
--

CREATE TABLE IF NOT EXISTS `tbl_leag_bid_player` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `bid_id` int(11) NOT NULL,
  `b_player_id` int(11) NOT NULL,
  `b_status` int(11) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_leag_bid_player`
--

INSERT INTO `tbl_leag_bid_player` (`b_id`, `bid_id`, `b_player_id`, `b_status`) VALUES
(10, 1, 4, 1),
(9, 1, 2, 0),
(8, 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `license` varchar(30) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `coachname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `manager` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`sid`, `name`, `license`, `nation`, `coachname`, `email`, `address`, `manager`) VALUES
(1000, 'njh', 'hjj', 'hjhu', 'jk@gmail.com', 'fgf', 'thyt', 'hytjuy'),
(1001, '44', '4', '4', '4', '4', '4', '4'),
(1002, '66', '66', '66', '66', '66', '66', '66'),
(1003, 'uyiui', 'uiouio', 'uiouio', 'uoiiuo', 'uioiuo', 'uioiuo', 'uioi'),
(1004, 'Barselona', 'rej12445', '', 'John cletus', 'barselona@gmail.com', 'barselona fc,US', 'Barselona Company'),
(1005, 'Christal Palace', '1fewgt', 'London', 'Bobes mardona', 'christal@gmail.com', 'ccelshurst park stadium', 'Roy Hodson'),
(1006, 'Mangester United', 'Mg1235', 'England', 'Abys john', 'mangesterfc@gmail.com', 'Old taffrod England', 'Ole Gonner'),
(1007, 'Chelsea Fc', 'ch12345', 'London', 'Franklin MK', 'chelseafc@gmail.com', 'Chelsea London UnitedKindom', 'Frank Lampard');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

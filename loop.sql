-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 12:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loop`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_resources`
--

CREATE TABLE IF NOT EXISTS `available_resources` (
`rid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `fromtime` datetime NOT NULL,
  `totime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_resources`
--

INSERT INTO `available_resources` (`rid`, `sid`, `rname`, `fromtime`, `totime`) VALUES
(1, 1, 'Aditya', '2019-07-18 12:12:00', '2019-07-04 12:01:00'),
(2, 1, 'Aditya', '2019-07-18 12:12:00', '2019-07-04 12:01:00'),
(3, 1, 'Aditya', '2019-07-18 12:12:00', '2019-07-04 12:01:00'),
(4, 1, 'Aditya', '2019-07-18 12:12:00', '2019-07-04 12:01:00'),
(5, 1, 'Shivam', '2019-07-06 12:12:00', '2019-07-12 12:01:00'),
(6, 1, 'Shivam', '2019-07-06 12:12:00', '2019-07-12 12:01:00'),
(7, 1, 'asdfghnj', '2019-07-21 12:01:00', '2019-07-12 12:01:00'),
(8, 1, 'Shivam', '2019-07-12 12:23:00', '2019-07-09 12:12:00'),
(9, 1, 'khammam', '2019-07-28 12:12:00', '2019-07-11 12:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
`bid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `usedby` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `user_comment` varchar(500) NOT NULL,
  `provider_comment` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `rid`, `usedby`, `start_time`, `end_time`, `user_comment`, `provider_comment`) VALUES
(1, 1, 1, '2019-07-01 00:00:00', '2019-07-03 00:00:00', '', ''),
(2, 2, 2, '2019-07-10 00:00:00', '2019-07-25 00:00:00', '', ''),
(3, 1, 2, '2019-07-10 00:00:00', '2019-07-17 00:00:00', '', ''),
(4, 3, 5, '2019-07-11 00:00:00', '2019-07-18 00:00:00', '', ''),
(5, 2, 6, '2019-07-16 00:00:00', '2019-07-11 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clusters`
--

CREATE TABLE IF NOT EXISTS `clusters` (
`cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `mandal` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clusters`
--

INSERT INTO `clusters` (`cid`, `cname`, `mandal`, `state`) VALUES
(1, 'mars', 'hyd', 'Telangana'),
(2, 'venus', 'jeedi', 'telangana');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`eid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `agenda` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `cid`, `agenda`, `place`) VALUES
(1, 1, 'debate', 'hyderabad'),
(2, 1, 'asdfhjm,.', 'sdfghjk,');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
`mid` int(20) NOT NULL,
  `muname` varchar(30) DEFAULT NULL,
  `mpwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`mid`, `muname`, `mpwd`) VALUES
(1, 'Mangaer', 'Manger@1');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `sid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `isAttended` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
`sid` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `mandal` varchar(200) NOT NULL,
  `cluster` varchar(200) NOT NULL,
  `pincode` int(6) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `dise` int(11) NOT NULL,
  `scategory` varchar(200) NOT NULL,
  `smanagement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_resources`
--
ALTER TABLE `available_resources`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
 ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `clusters`
--
ALTER TABLE `clusters`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
 ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `sid` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_resources`
--
ALTER TABLE `available_resources`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `clusters`
--
ALTER TABLE `clusters`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
MODIFY `mid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

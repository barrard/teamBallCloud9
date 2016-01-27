-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2016 at 07:10 PM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TeamBall`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(5) NOT NULL,
  `homeTeamId` int(4) NOT NULL,
  `visitorTeamId` int(4) NOT NULL,
  `homeTeamScore` int(3) NOT NULL,
  `visitorTeamScore` int(3) NOT NULL,
  `homeTeamName` varchar(35) NOT NULL,
  `visitorTeamName` varchar(35) NOT NULL,
  `dateString` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `playerId` int(5) NOT NULL,
  `teamId` int(5) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `playerPosition` varchar(20) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `starter` varchar(5) NOT NULL,
  `playerNumber` int(3) NOT NULL,
  `playerNotes` text NOT NULL,
  `cacheControl` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playerStats`
--

CREATE TABLE IF NOT EXISTS `playerStats` (
  `playerId` int(5) NOT NULL,
  `Id` int(5) NOT NULL,
  `eventCoordsX` int(4) NOT NULL,
  `eventCoordsY` int(4) NOT NULL,
  `shotType` int(2) NOT NULL,
  `shotId` int(5) NOT NULL,
  `teamId` int(4) NOT NULL,
  `gameId` int(4) NOT NULL,
  `time` varchar(30) NOT NULL,
  `player` varchar(35) NOT NULL,
  `foundIcon` varchar(30) NOT NULL,
  `iconColor` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=313 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playerStats1`
--

CREATE TABLE IF NOT EXISTS `playerStats1` (
  `shotTotal` int(5) NOT NULL,
  `ShotMade` int(5) NOT NULL,
  `shotMissed` int(5) NOT NULL,
  `turnOver` int(5) NOT NULL,
  `rebounds` int(5) NOT NULL,
  `assists` int(5) NOT NULL,
  `playerId` int(5) NOT NULL,
  `shotId` int(5) NOT NULL,
  `eventCoordsX` int(4) NOT NULL,
  `eventCoordsY` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `teamId` int(5) NOT NULL,
  `teamName` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerId`);

--
-- Indexes for table `playerStats`
--
ALTER TABLE `playerStats`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=255;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `playerStats`
--
ALTER TABLE `playerStats`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=313;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `teamId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

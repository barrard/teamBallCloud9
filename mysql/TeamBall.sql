-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2015 at 06:58 PM
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
  `playerNotes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerId`, `teamId`, `firstName`, `playerPosition`, `lastName`, `starter`, `playerNumber`, `playerNotes`) VALUES
(3, 18, 'david', 'Point Guard', 'barrar', 'yes', 69, 'Dakine'),
(7, 18, 'This', 'Shooting Guard', 'Sail', 'yes', 101, 'prog'),
(15, 18, 'first name', 'Power Forward', 'last name', 'no', 0, 'no notes here'),
(17, 18, 'AJAX', 'Point Guard', 'ROCKS', 'yes', 7, 'JS ANYNC GOGO');

-- --------------------------------------------------------

--
-- Table structure for table `playerStats`
--

CREATE TABLE IF NOT EXISTS `playerStats` (
  `shotTotal` int(5) NOT NULL,
  `turnOver` int(5) NOT NULL,
  `rebounds` int(5) NOT NULL,
  `assists` int(5) NOT NULL,
  `playerId` int(5) NOT NULL,
  `Id` int(5) NOT NULL,
  `eventCoordsX` int(4) NOT NULL,
  `eventCoordsY` int(4) NOT NULL,
  `shotType` int(2) NOT NULL,
  `shotId` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerStats`
--

INSERT INTO `playerStats` (`shotTotal`, `turnOver`, `rebounds`, `assists`, `playerId`, `Id`, `eventCoordsX`, `eventCoordsY`, `shotType`, `shotId`) VALUES
(0, 0, 0, 0, 17, 14, 315, 428, 1, 1),
(0, 0, 0, 0, 17, 15, 267, 419, 0, 2),
(0, 0, 0, 0, 17, 16, 261, 466, 1, 3),
(0, 0, 0, 0, 17, 17, 266, 419, 0, 4),
(0, 0, 0, 0, 17, 18, 293, 472, 0, 5),
(0, 0, 0, 0, 17, 19, 441, 412, 1, 6),
(0, 0, 0, 0, 17, 20, 324, 497, 0, 7),
(0, 0, 0, 0, 17, 21, 195, 399, 0, 8),
(0, 0, 0, 0, 17, 22, 301, 509, 1, 9),
(0, 0, 0, 0, 17, 23, 366, 409, 0, 10),
(0, 0, 0, 0, 17, 24, 442, 478, 1, 11),
(0, 0, 0, 0, 15, 25, 297, 297, 0, 1),
(0, 0, 0, 0, 7, 26, 270, 339, 1, 2),
(0, 0, 0, 0, 7, 27, 193, 392, 1, 3),
(0, 0, 0, 0, 3, 28, 215, 315, 0, 4),
(0, 0, 0, 0, 7, 29, 333, 395, 1, 5);

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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `teamId` int(5) NOT NULL,
  `teamName` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`teamId`, `teamName`, `password`) VALUES
(17, 'bbb', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(18, 'blurr', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(19, 'blurrfsdfasdad1', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(20, 'ffff', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(21, 'barr', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(22, 'blurr2222', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(23, 'blurrasdasd', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(24, 'sdfsfsdfblurr', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(25, 'blurrsadasdasd', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(26, 'blurrdfgdfg', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(27, 'blurrsadsf', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(28, 'blurrcvb', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(29, 'blurrasdadasd', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(30, 'blurrasdasdasdas', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(31, 'blurrasdasdadsasd', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(32, 'blurraaaaaaaaaaaaa', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(33, 'blurrss', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(34, 'asaaasdblurr', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(35, 'asasdasdasdsablurr', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(36, 'blurraasdasd', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(37, 'ccccc', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(38, 'teamName', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(39, 'teamName0', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `playerStats`
--
ALTER TABLE `playerStats`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `teamId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

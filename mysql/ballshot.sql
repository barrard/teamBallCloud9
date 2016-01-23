-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2016 at 12:27 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `homeTeamId`, `visitorTeamId`, `homeTeamScore`, `visitorTeamScore`, `homeTeamName`, `visitorTeamName`, `dateString`) VALUES
(165, 43, 39, 0, 0, 'barrard', 'teamName0', '2016 01/17 09:41 pm'),
(166, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 10:18 pm'),
(167, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 10:26 pm'),
(168, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 10:34 pm'),
(169, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 10:41 pm'),
(170, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 10:46 pm'),
(171, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 10:53 pm'),
(172, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 11:16 pm'),
(173, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 11:28 pm'),
(174, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 11:43 pm'),
(175, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 11:57 pm'),
(176, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/17 11:58 pm'),
(177, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/18 12:42 am'),
(178, 43, 39, 0, 0, 'barrard', 'teamName0', '2016 01/18 12:50 am'),
(179, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/18 01:15 am'),
(180, 43, 39, 0, 0, 'barrard', 'teamName0', '2016 01/18 01:39 am'),
(181, 39, 22, 0, 0, 'teamName0', 'blurr2222', '2016 01/18 02:37 pm'),
(182, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/18 02:55 pm'),
(183, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/18 11:40 pm'),
(184, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/19 12:44 am'),
(185, 39, 43, 0, 0, 'teamName0', 'barrard', '2016 01/21 06:25 pm');

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerId`, `teamId`, `firstName`, `playerPosition`, `lastName`, `starter`, `playerNumber`, `playerNotes`) VALUES
(3, 25, 'david', 'Point Guard', 'barrar', 'yes', 69, 'Dakine'),
(7, 25, 'This', 'Shooting Guard', 'Sail', 'yes', 101, 'prog'),
(15, 20, 'first name', 'Power Forward', 'last name', 'no', 0, 'no notes here'),
(17, 26, 'AJAX', 'Point Guard', 'ROCKS', 'yes', 7, 'JS ANYNC GOGO'),
(18, 26, 'AJAX', 'Point Guard', 'ROCKS', 'yes', 7, 'JS ANYNC GOGO'),
(19, 39, 'David', 'Point Guard', 'Barrar', 'yes', 100, ''),
(20, 39, 'This is my game', 'Point Guard', 'this i it', 'yes', 100, 'make it happen'),
(22, 43, '', 'Point Guard', '', 'yes', 100, ''),
(23, 43, 'me', 'Point Guard', '', 'yes', 100, ''),
(25, 39, 'ira', 'Point Guard', 'miller', 'yes', 69, 'good');

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
  `player` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerStats`
--

INSERT INTO `playerStats` (`playerId`, `Id`, `eventCoordsX`, `eventCoordsY`, `shotType`, `shotId`, `teamId`, `gameId`, `time`, `player`) VALUES
(19, 30, 333, 362, 2, 1, 39, 0, '00:02', 'David'),
(19, 31, 273, 402, 0, 1, 39, 0, '00:02', 'David'),
(20, 32, 317, 438, 2, 2, 39, 0, '00:02', 'This is my game'),
(20, 33, 301, 562, 0, 3, 39, 0, '00:02', 'This is my game'),
(20, 34, 428, 487, 2, 1, 39, 0, '00:02', 'This is my game'),
(19, 35, 334, 387, 0, 1, 39, 0, '00:02', 'David'),
(19, 36, 423, 488, 2, 1, 39, 0, '00:02', 'David'),
(19, 37, 290, 346, 0, 1, 39, 0, '00:02', 'David'),
(20, 38, 276, 516, 2, 2, 39, 0, '00:02', 'This is my game'),
(21, 39, 344, 542, 0, 3, 39, 0, '00:02', 'WEEEE!!!'),
(19, 40, 325, 301, 0, 4, 39, 168, '00:02', 'David'),
(21, 41, 393, 501, 2, 5, 39, 168, '00:02', 'WEEEE!!!'),
(20, 42, 437, 481, 0, 6, 39, 168, '00:02', 'This is my game'),
(19, 43, 267, 527, 0, 1, 39, 169, '00:02', 'David'),
(19, 44, 349, 383, 2, 2, 39, 169, '00:02', 'David'),
(21, 45, 352, 531, 2, 1, 39, 169, '00:02', 'WEEEE!!!'),
(21, 46, 326, 556, 2, 2, 39, 169, '00:02', 'WEEEE!!!'),
(21, 47, 363, 571, 0, 3, 39, 169, '00:02', 'WEEEE!!!'),
(21, 48, 301, 577, 2, 4, 39, 169, '00:02', 'WEEEE!!!'),
(21, 49, 269, 502, 2, 5, 39, 169, '00:02', 'WEEEE!!!'),
(20, 50, 400, 542, 2, 1, 39, 170, '00:02', 'This is my game'),
(19, 51, 452, 362, 2, 1, 39, 170, '00:02', 'David'),
(21, 52, 360, 511, 2, 2, 39, 170, '00:02', 'WEEEE!!!'),
(19, 53, 348, 401, 2, 1, 39, 171, '00:02', 'David'),
(20, 54, 283, 421, 2, 2, 39, 171, '00:02', 'This is my game'),
(21, 55, 353, 444, 0, 3, 39, 171, '00:02', 'WEEEE!!!'),
(21, 56, 436, 511, 0, 4, 39, 171, '00:02', 'WEEEE!!!'),
(19, 57, 372, 336, 0, 1, 39, 171, '00:02', 'David'),
(20, 58, 349, 496, 2, 2, 39, 171, '00:02', 'This is my game'),
(19, 59, 546, 456, 2, 3, 39, 171, '00:02', 'David'),
(19, 60, 357, 396, 0, 1, 39, 171, '00:02', 'David'),
(19, 61, 342, 377, 2, 2, 39, 171, '00:02', 'David'),
(19, 62, 300, 291, 3, 3, 39, 171, '00:02', 'David'),
(21, 63, 867, 457, 2, 4, 39, 171, '00:02', 'WEEEE!!!'),
(20, 64, 314, 492, 7, 5, 39, 171, '00:02', 'This is my game'),
(21, 65, 353, 586, 5, 6, 39, 171, '00:02', 'WEEEE!!!'),
(20, 66, 336, 405, 2, 1, 39, 171, '00:02', 'This is my game'),
(19, 67, 449, 409, 2, 2, 39, 171, '00:02', 'David'),
(20, 68, 414, 372, 0, 3, 39, 171, '00:02', 'This is my game'),
(21, 69, 273, 503, 2, 4, 39, 171, '00:02', 'WEEEE!!!'),
(21, 70, 394, 537, 3, 5, 39, 171, '00:02', 'WEEEE!!!'),
(21, 71, 474, 537, 1, 6, 39, 171, '00:02', 'WEEEE!!!'),
(21, 72, 321, 552, 6, 7, 39, 171, '00:02', 'WEEEE!!!'),
(21, 73, 323, 485, 6, 8, 39, 171, '00:02', 'WEEEE!!!'),
(21, 74, 322, 521, 6, 9, 39, 171, '00:02', 'WEEEE!!!'),
(21, 75, 452, 583, 6, 10, 39, 171, '00:02', 'WEEEE!!!'),
(21, 76, 286, 460, 2, 11, 39, 171, '00:02', 'WEEEE!!!'),
(21, 77, 291, 578, 2, 12, 39, 171, '00:02', 'WEEEE!!!'),
(21, 78, 342, 486, 0, 13, 39, 171, '00:02', 'WEEEE!!!'),
(21, 79, 492, 471, 4, 14, 39, 171, '00:02', 'WEEEE!!!'),
(21, 80, 331, 576, 10, 15, 39, 171, '00:02', 'WEEEE!!!'),
(20, 81, 366, 586, 2, 16, 39, 171, '00:02', 'This is my game'),
(20, 82, 372, 445, 0, 1, 39, 171, '00:02', 'This is my game'),
(19, 83, 407, 398, 2, 2, 39, 171, '00:02', 'David'),
(20, 84, 327, 303, 2, 3, 39, 171, '00:02', 'This is my game'),
(19, 85, 362, 507, 2, 4, 39, 171, '00:02', 'David'),
(21, 86, 390, 525, 0, 5, 39, 171, '00:02', 'WEEEE!!!'),
(0, 87, 518, 425, 0, 6, 39, 171, '00:02', 'null'),
(20, 88, 378, 456, 0, 7, 39, 171, '00:02', 'This is my game'),
(19, 89, 313, 430, 2, 8, 39, 171, '00:02', 'David'),
(19, 90, 403, 282, 2, 9, 39, 171, '00:02', 'David'),
(19, 91, 275, 287, 2, 10, 39, 171, '00:02', 'David'),
(19, 92, 620, 302, 2, 11, 39, 171, '00:02', 'null'),
(19, 93, 407, 389, 2, 1, 39, 171, '00:02', 'David'),
(19, 94, 359, 401, 2, 2, 39, 171, '00:02', 'David'),
(19, 95, 362, 315, 2, 3, 39, 171, '00:02', 'David'),
(19, 96, 362, 462, 0, 4, 39, 171, '00:02', 'David'),
(20, 97, 634, 374, 9, 5, 39, 171, '00:02', 'This is my game'),
(21, 98, 340, 491, 5, 6, 39, 171, '00:02', 'WEEEE!!!'),
(19, 99, 409, 300, 2, 1, 39, 172, '00:02', 'David'),
(20, 100, 465, 468, 10, 2, 39, 172, '00:02', 'This is my game'),
(20, 101, 333, 378, 2, 1, 39, 172, '00:02', 'This is my game'),
(20, 102, 478, 456, 3, 2, 39, 172, '00:02', 'This is my game'),
(19, 103, 618, 398, 0, 3, 39, 172, '00:02', 'David'),
(21, 104, 853, 411, 1, 4, 39, 172, '00:02', 'WEEEE!!!'),
(20, 105, 546, 322, 9, 5, 39, 172, '00:02', 'This is my game'),
(19, 106, 416, 307, 4, 6, 39, 172, '00:02', 'David'),
(20, 107, 303, 294, 3, 7, 39, 172, '00:02', 'This is my game'),
(20, 108, 563, 331, 2, 1, 39, 174, '00:02', 'This is my game'),
(20, 109, 448, 316, 3, 2, 39, 174, '00:02', 'This is my game'),
(20, 110, 355, 331, 2, 1, 39, 176, '00:02', 'This is my game'),
(19, 111, 319, 280, 2, 2, 39, 176, '00:02', 'David'),
(20, 112, 729, 417, 2, 1, 39, 176, '00:02', 'This is my game'),
(23, 113, 498, 350, 2, 1, 43, 178, '00:02', 'me'),
(0, 114, 818, 255, 0, 2, 43, 178, '00:02', 'null'),
(22, 115, 613, 303, 9, 3, 43, 178, '00:02', ''),
(20, 116, 366, 342, 2, 1, 39, 177, '00:02', 'This is my game'),
(19, 117, 333, 353, 4, 2, 39, 177, '00:02', 'David'),
(20, 118, 411, 324, 10, 3, 39, 177, '00:02', 'This is my game'),
(20, 119, 467, 416, 1, 4, 39, 177, '00:02', 'This is my game'),
(20, 120, 479, 317, 2, 5, 39, 177, '02:58', 'This is my game'),
(19, 121, 717, 188, 2, 6, 39, 177, '02:40', 'David'),
(21, 122, 593, 303, 6, 7, 39, 177, '02:15', 'WEEEE!!!'),
(21, 123, 788, 215, 0, 8, 39, 177, '02:05', 'WEEEE!!!'),
(19, 124, 331, 387, 9, 9, 39, 177, '01:44', 'David'),
(20, 125, 453, 238, 0, 1, 39, 181, '00:02', 'This is my game'),
(20, 126, 484, 344, 3, 2, 39, 181, '00:02', 'This is my game'),
(20, 127, 665, 384, 10, 3, 39, 181, '00:02', 'This is my game'),
(20, 128, 307, 285, 1, 4, 39, 181, '00:02', 'This is my game'),
(20, 129, 311, 286, 1, 5, 39, 181, '00:02', 'This is my game'),
(21, 130, 358, 450, 10, 6, 39, 181, '00:02', 'WEEEE!!!'),
(20, 131, 319, 262, 2, 1, 39, 181, '00:02', 'This is my game'),
(25, 132, 674, 262, 3, 2, 39, 181, '00:02', 'ira'),
(25, 133, 426, 412, 2, 3, 39, 181, '00:02', 'ira'),
(25, 134, 393, 344, 1, 4, 39, 181, '00:02', 'ira'),
(20, 135, 235, 331, 0, 5, 39, 181, '00:02', 'This is my game'),
(19, 136, 482, 192, 0, 6, 39, 181, '03:00', 'David'),
(20, 137, 432, 307, 9, 7, 39, 181, '02:54', 'This is my game'),
(25, 138, 534, 331, 10, 8, 39, 181, '02:48', 'ira'),
(19, 139, 545, 143, 2, 9, 39, 181, '02:41', 'David'),
(20, 140, 372, 352, 6, 10, 39, 181, '02:28', 'This is my game'),
(20, 141, 325, 331, 6, 11, 39, 181, '02:24', 'This is my game'),
(20, 142, 456, 397, 7, 12, 39, 181, '02:18', 'This is my game'),
(20, 143, 424, 367, 0, 13, 39, 181, '02:15', 'This is my game'),
(20, 144, 391, 393, 2, 14, 39, 181, '02:13', 'This is my game'),
(20, 145, 346, 423, 4, 15, 39, 181, '02:10', 'This is my game'),
(20, 146, 284, 373, 1, 16, 39, 181, '02:05', 'This is my game'),
(20, 147, 356, 340, 5, 17, 39, 181, '02:01', 'This is my game'),
(20, 148, 818, 183, 2, 1, 39, 182, '03:58', 'This is my game'),
(25, 149, 875, 266, 0, 2, 39, 182, '03:54', 'ira'),
(25, 150, 904, 317, 7, 3, 39, 182, '03:50', 'ira'),
(25, 151, 993, 268, 2, 4, 39, 182, '03:45', 'ira'),
(19, 152, 915, 121, 2, 5, 39, 182, '03:29', 'David'),
(20, 153, 730, 253, 2, 4, 39, 183, '00:02', 'This is my game'),
(20, 154, 730, 253, 2, 4, 39, 183, '00:02', 'This is my game'),
(20, 155, 730, 253, 2, 4, 39, 183, '00:02', 'This is my game'),
(20, 156, 730, 253, 2, 4, 39, 183, '00:02', 'This is my game'),
(19, 157, 966, 140, 0, 5, 39, 183, '00:02', 'David'),
(19, 158, 818, 66, 10, 6, 39, 183, '00:02', 'David'),
(19, 159, 870, 96, 4, 7, 39, 183, '00:02', 'David'),
(19, 160, 795, 155, 6, 8, 39, 183, '00:02', 'David'),
(19, 161, 792, 231, 7, 9, 39, 183, '00:02', 'David'),
(19, 162, 915, 308, 9, 10, 39, 183, '00:02', 'David'),
(19, 163, 825, 321, 1, 11, 39, 183, '00:02', 'David'),
(19, 164, 832, 277, 5, 12, 39, 183, '00:02', 'David'),
(19, 165, 867, 227, 3, 13, 39, 183, '00:02', 'David'),
(20, 166, 547, 195, 3, 1, 39, 185, '00:02', 'This is my game'),
(19, 167, 621, 381, 3, 2, 39, 185, '00:02', 'David'),
(25, 168, 586, 444, 0, 3, 39, 185, '00:02', 'ira'),
(20, 169, 546, 467, 3, 4, 39, 185, '00:02', 'This is my game'),
(25, 170, 630, 350, 0, 5, 39, 185, '00:02', 'ira'),
(20, 171, 634, 283, 3, 6, 39, 185, '00:02', 'This is my game'),
(19, 172, 531, 310, 2, 7, 39, 185, '00:02', 'David'),
(20, 173, 415, 291, 2, 8, 39, 185, '00:02', 'This is my game'),
(25, 174, 411, 320, 2, 9, 39, 185, '00:02', 'ira'),
(25, 175, 425, 343, 9, 10, 39, 185, '00:02', 'ira'),
(19, 176, 435, 311, 5, 11, 39, 185, '00:02', 'David');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teamId`, `teamName`, `password`) VALUES
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
(39, 'teamName0', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(40, 'blurr1919', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(41, 'dude', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(42, 'smile', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(43, 'barrard', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `playerStats`
--
ALTER TABLE `playerStats`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `teamId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

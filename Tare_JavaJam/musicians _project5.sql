-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 05:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicians`
--
CREATE DATABASE IF NOT EXISTS `musicians` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `musicians`;

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--
-- Creation: Apr 27, 2017 at 03:06 PM
--

CREATE TABLE `musician` (
  `musianid` varchar(10) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `musician`:
--

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`musianid`, `name`, `genre`) VALUES
('101', 'Adele', 'Pop'),
('102', 'Eminem', 'Hip hop'),
('103', 'Jenifer', 'Pop'),
('104', 'Madonna', 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--
-- Creation: Apr 27, 2017 at 03:06 PM
--

CREATE TABLE `performance` (
  `perfomanceId` varchar(13) NOT NULL,
  `monthYear` date DEFAULT NULL,
  `musicianid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `performance`:
--

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`perfomanceId`, `monthYear`, `musicianid`) VALUES
('901', '2017-09-01', '101'),
('904', '2017-09-21', '104'),
('905', '2017-06-21', '102'),
('906', '2017-06-18', '103'),
('907', '2017-07-18', '101'),
('908', '2017-07-15', '104'),
('909', '2017-09-18', '102');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`musianid`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`perfomanceId`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for musician
--

--
-- Metadata for performance
--

--
-- Metadata for musicians
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

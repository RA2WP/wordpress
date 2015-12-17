-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2015 at 05:03 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ra2db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_batch`
--

CREATE TABLE IF NOT EXISTS `ra2db_batch` (
  `Id` int(11) NOT NULL,
  `Id_Object` int(11) NOT NULL,
  `Id_Purchase` int(11) NOT NULL,
  `Object_Amount` int(11) NOT NULL,
  `visible` tinyint(1) DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_batch`
--

INSERT INTO `ra2db_batch` (`Id`, `Id_Object`, `Id_Purchase`, `Object_Amount`, `visible`, `timestamp`) VALUES
(1, 1, 1, 1, 1, '2015-09-01 14:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_financial`
--

CREATE TABLE IF NOT EXISTS `ra2db_financial` (
  `Id` int(11) NOT NULL,
  `Number` varchar(20) NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_financial`
--

INSERT INTO `ra2db_financial` (`Id`, `Number`, `Note`, `visible`, `timestamp`) VALUES
(1, 'CTR.425/2012', 'The financial support for ELI-NP project.', 1, '2015-09-01 13:16:16'),
(2, 'CTR.426/2013', 'This is a test.', 1, '2015-09-02 12:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_location`
--

CREATE TABLE IF NOT EXISTS `ra2db_location` (
  `Id` int(11) NOT NULL,
  `Building` varchar(60) NOT NULL,
  `Room` varchar(20) NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_location`
--

INSERT INTO `ra2db_location` (`Id`, `Building`, `Room`, `Note`, `visible`, `timestamp`) VALUES
(1, 'ELI-NP Bloc Turn', 'Camera 503A', '', 1, '2015-09-01 13:19:27'),
(2, 'ELI-NP Bloc Turn', 'Camera 303', '', 1, '2015-09-02 13:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_object`
--

CREATE TABLE IF NOT EXISTS `ra2db_object` (
  `Id` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Date_Deliver` date NOT NULL,
  `Date_Test` date NOT NULL,
  `Price` double NOT NULL,
  `Series_No` varchar(60) NOT NULL,
  `Id_Location` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_object`
--

INSERT INTO `ra2db_object` (`Id`, `Name`, `Date_Deliver`, `Date_Test`, `Price`, `Series_No`, `Id_Location`, `visible`, `timestamp`) VALUES
(1, 'Statie cu monitor Dell', '2014-12-18', '2014-12-18', 4469, 'Desktop: GLBGJ32; Monitor: CN0J8J317444546BAL6B', 1, 1, '2015-09-01 13:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_people`
--

CREATE TABLE IF NOT EXISTS `ra2db_people` (
  `Id` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Eli_Code` varchar(20) NOT NULL,
  `Eli_Phone` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Personal_Phone` varchar(20) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_people`
--

INSERT INTO `ra2db_people` (`Id`, `Name`, `Eli_Code`, `Eli_Phone`, `Email`, `Personal_Phone`, `visible`, `timestamp`) VALUES
(1, 'Test People', 'XXX001', '777 888 999', 'test.people@eli-np.ro', '999 888 777', 1, '2015-09-01 13:11:55'),
(2, 'Gabriela Apetrei', 'XXX002', '777 888 999', 'gabriela.apetrei@eli-np.ro', '999 888 777', 1, '2015-09-01 14:32:44'),
(3, 'Gabriel Suliman', 'XXX003', '777 888 999', 'gabriel.suliman@eli-np.ro', '999 888 777', 1, '2015-09-01 14:33:27'),
(4, 'Test People2', 'XXX004', '111 222 333', 'test.people2@eli-np.ro', '333 222 111', 1, '2015-09-02 08:29:36'),
(5, 'Test People5', 'XXX005', '111 222 333', 'test.people5@eli-np.ro', '333 222 111', 1, '2015-09-02 08:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_purchase`
--

CREATE TABLE IF NOT EXISTS `ra2db_purchase` (
  `Id` int(11) NOT NULL,
  `Number` varchar(20) NOT NULL,
  `Id_People_Responsible1` int(11) NOT NULL,
  `Id_People_Responsible2` int(11) NOT NULL,
  `Id_Financial` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ra2db_purchase`
--

INSERT INTO `ra2db_purchase` (`Id`, `Number`, `Id_People_Responsible1`, `Id_People_Responsible2`, `Id_Financial`, `visible`, `timestamp`) VALUES
(1, '8399500', 2, 3, 1, 1, '2015-09-01 14:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_supplier`
--

CREATE TABLE IF NOT EXISTS `ra2db_supplier` (
  `Id` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_supplier`
--

INSERT INTO `ra2db_supplier` (`Id`, `Name`, `Address`, `Note`, `visible`, `timestamp`) VALUES
(1, 'Chrome Computers srl', 'No. St. City', '', 1, '2015-09-01 13:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `ra2db_user`
--

CREATE TABLE IF NOT EXISTS `ra2db_user` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `username` char(15) CHARACTER SET utf8 NOT NULL,
  `password` char(32) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ra2db_user`
--

INSERT INTO `ra2db_user` (`uid`, `username`, `password`, `email`, `visible`, `timestamp`) VALUES
(1, 'admin', '$2y$10$ztUs7j9KhmjQBDc.0RKxQucGl', 'admin@email.com', 1, '2015-02-06 13:16:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ra2db_batch`
--
ALTER TABLE `ra2db_batch`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ra2db_financial`
--
ALTER TABLE `ra2db_financial`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Number` (`Number`);

--
-- Indexes for table `ra2db_location`
--
ALTER TABLE `ra2db_location`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ra2db_object`
--
ALTER TABLE `ra2db_object`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ra2db_people`
--
ALTER TABLE `ra2db_people`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Eli_Code` (`Eli_Code`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `ra2db_purchase`
--
ALTER TABLE `ra2db_purchase`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ra2db_supplier`
--
ALTER TABLE `ra2db_supplier`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ra2db_user`
--
ALTER TABLE `ra2db_user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ra2db_batch`
--
ALTER TABLE `ra2db_batch`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ra2db_financial`
--
ALTER TABLE `ra2db_financial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ra2db_location`
--
ALTER TABLE `ra2db_location`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ra2db_object`
--
ALTER TABLE `ra2db_object`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ra2db_people`
--
ALTER TABLE `ra2db_people`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ra2db_purchase`
--
ALTER TABLE `ra2db_purchase`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ra2db_supplier`
--
ALTER TABLE `ra2db_supplier`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

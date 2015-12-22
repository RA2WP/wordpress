-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2015 at 10:16 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iscvr`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_contract`
--

CREATE TABLE IF NOT EXISTS `is_contract` (
`Contract_Id` int(11) NOT NULL,
  `Contract_No` varchar(255) NOT NULL,
  `Contract_Name` varchar(255) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Contract_Start_Date` date NOT NULL,
  `Contract_End_Date` date NOT NULL,
  `Relative_Doc_Name` varchar(255) DEFAULT NULL,
  `Contract_Note` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `is_contract`
--

INSERT INTO `is_contract` (`Contract_Id`, `Contract_No`, `Contract_Name`, `Customer_Name`, `Contract_Start_Date`, `Contract_End_Date`, `Relative_Doc_Name`, `Contract_Note`, `visible`, `timestamp`) VALUES
(1, 'XXXXXXX001', 'The Contract with IRE', 'IRE', '2013-01-01', '2015-12-31', '', '', 1, '2015-02-05 11:49:15'),
(2, 'XXXXXXX002', 'The Contract with UJF', 'UJF-OJS Kučera', '2014-12-01', '2014-12-31', 'Doc. 0002', '', 1, '2015-02-05 11:49:15'),
(3, 'XXXXXXX003', 'The Contract with UJF', 'UJF-OJS Kučera', '2014-12-01', '2015-12-31', 'Doc. 0003', '', 1, '2015-02-05 11:49:15'),
(4, 'XXXXXXX004', 'The Contract with 8520', 'CVŘ 8520', '2014-12-01', '2014-12-31', 'Doc. 0004', '', 1, '2015-02-05 11:49:15'),
(5, 'XXXXXXX005', 'The Contract with 8311', 'CVŘ 8311', '2015-01-01', '2015-01-31', 'Doc. 0005', 'some note', 1, '2015-02-05 11:49:15'),
(6, 'XXXXXXX006', 'The Contract with 8311', 'CVŘ 8530', '2015-03-01', '2016-03-01', 'Doc. 0006', 'some note', 1, '2015-03-04 16:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `is_customer`
--

CREATE TABLE IF NOT EXISTS `is_customer` (
`Customer_Id` int(11) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Contact_Person` varchar(255) NOT NULL,
  `Contact_Phone` int(255) DEFAULT NULL,
  `Contact_Email` varchar(255) DEFAULT NULL,
  `Company_Address` varchar(255) DEFAULT NULL,
  `VAT` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `is_customer`
--

INSERT INTO `is_customer` (`Customer_Id`, `Customer_Name`, `Contact_Person`, `Contact_Phone`, `Contact_Email`, `Company_Address`, `VAT`, `Note`, `visible`, `timestamp`) VALUES
(1, 'IRE', 'Jim', 888666123, 'abc@123.com', 'City Country', '123', 'This is a test note', 1, '2015-02-05 11:59:05'),
(2, 'UJF-OJS Kučera', 'Ali', 888666000, 'abc2@123.com', 'City2 Country2', '223', 'This is a test note2', 1, '2015-02-05 11:59:05'),
(3, 'CVŘ 8520', 'Lisa', 888666222, 'abc3@123.com', 'City3 Country3', '323', 'This is a test note3', 1, '2015-02-05 11:59:05'),
(4, 'CVŘ 8530', 'Tracy', 888666444, 'abc4@123.com', 'City4 Country4', '423', 'This is a test note4', 1, '2015-02-05 11:59:05'),
(5, 'CVŘ 8540 M', 'Michal', 123456987, 'abc5@123.com', 'City5 Country5', '4523', 'This is a test note5', 1, '2015-02-05 11:59:05'),
(6, 'CVŘ 8311', 'Eddie', 800800888, 'abc6@123.com', 'City6 Country6', '623', 'This is a test note6', 1, '2015-02-05 11:59:05'),
(7, 'Eurostandard s.r.o.', 'Bob', 800800333, 'abc7@123.com', 'City7 Country7', '723', 'This is a test note7', 1, '2015-02-05 11:59:05'),
(21, 'Test Customer', 'Somebody', 123456789, 'something@123.com', 'some address', '321654', 'some note', 1, '2015-02-05 11:59:05'),
(22, 'Test Customer2', 'Somebody2', 223456789, 'something2@123.com', 'some address2', '3216542', 'some note2', 1, '2015-02-05 11:59:05'),
(23, 'Test Customer3', 'Somebody3', 323456789, 'something3@123.com', 'some address3', '3216543', 'some note3', 1, '2015-02-05 11:59:05'),
(24, 'Test Customer4', 'Somebody4', 423456789, 'something4@123.com', 'some address4', '3216544', 'some note4', 1, '2015-02-05 11:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `is_cycle`
--

CREATE TABLE IF NOT EXISTS `is_cycle` (
`Cycle_ID` int(11) NOT NULL,
  `Cycle_Name` varchar(255) NOT NULL,
  `Cycle_Start_Date` date NOT NULL,
  `Cycle_End_Date` date NOT NULL,
  `Cycle_Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `is_cycle`
--

INSERT INTO `is_cycle` (`Cycle_ID`, `Cycle_Name`, `Cycle_Start_Date`, `Cycle_End_Date`, `Cycle_Note`, `visible`, `timestamp`) VALUES
(4, 'K165', '2014-01-06', '2014-01-19', 'note for cycle K165', 1, '2015-02-05 11:52:10'),
(5, 'K166', '2014-01-26', '2014-02-16', 'note for cycle K166', 1, '2015-02-05 11:52:10'),
(6, 'K167', '2014-02-23', '2014-03-10', 'Note for K167', 1, '2015-02-05 11:52:10'),
(7, 'K168', '2014-03-23', '2014-04-20', '', 1, '2015-02-05 11:52:10'),
(8, 'K169', '2015-01-03', '2015-01-31', 'some note', 1, '2015-02-05 11:52:10'),
(9, 'K170', '2015-02-02', '2015-02-25', 'some note', 1, '2015-02-12 14:26:39'),
(10, 'K171', '2015-03-10', '2015-03-15', '', 1, '2015-02-12 14:27:29'),
(11, 'K172', '2015-04-09', '2015-04-21', '', 1, '2015-02-16 09:42:49'),
(12, 'K173', '2015-05-04', '2015-05-16', '', 1, '2015-02-16 09:43:54'),
(13, 'K174', '2015-06-01', '2015-06-10', '', 1, '2015-02-16 09:44:35'),
(14, 'K175', '2015-06-20', '2015-06-29', '', 1, '2015-02-16 09:45:26'),
(15, 'K176', '2015-07-01', '2015-07-14', '', 1, '2015-02-16 09:47:24'),
(16, 'K177', '2015-07-22', '2015-07-31', '', 1, '2015-02-16 09:49:31'),
(17, 'K178', '2015-08-08', '2015-08-20', '', 1, '2015-02-16 09:55:42'),
(18, 'K179', '2015-09-01', '2015-09-15', '', 1, '2015-02-16 09:59:08'),
(19, 'K180', '2015-10-28', '2015-11-11', '', 1, '2015-02-19 10:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `is_driver`
--

CREATE TABLE IF NOT EXISTS `is_driver` (
`Driver_Id` int(11) NOT NULL,
  `Driver_Name` varchar(255) NOT NULL,
  `Driver_Phone` varchar(20) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `is_driver`
--

INSERT INTO `is_driver` (`Driver_Id`, `Driver_Name`, `Driver_Phone`, `visible`, `timestamp`) VALUES
(1, 'Ken Waterschoot', '+32475202237', 1, '2015-06-04 10:23:33'),
(2, 'Jan Hendrickx', '+32479280969', 1, '2015-06-04 10:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `is_irradiation`
--

CREATE TABLE IF NOT EXISTS `is_irradiation` (
`Irradiation_Parameter_Id` int(11) NOT NULL,
  `Order_No` char(20) NOT NULL,
  `Reactor_Energy` float NOT NULL,
  `Type_Cask` varchar(255) NOT NULL,
  `Irradiated_Material_Name` varchar(255) NOT NULL,
  `Irradiated_Material_Weight` double NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `is_irradiation`
--

INSERT INTO `is_irradiation` (`Irradiation_Parameter_Id`, `Order_No`, `Reactor_Energy`, `Type_Cask`, `Irradiated_Material_Name`, `Irradiated_Material_Weight`, `Note`, `visible`, `timestamp`) VALUES
(3, '14T23/1', 8, 'Special', 'U235 v Al trubicce', 0.3, 'some note', 1, '2015-02-05 11:52:34'),
(4, '14G02/1', 8, 'Special', 'U235 v Al', 0.3, 'some note', 1, '2015-02-05 11:52:34'),
(5, '14F23/1', 8, 'Special', 'U235 v trubicce', 0.3, 'some note', 1, '2015-02-05 11:52:34'),
(6, '15F23/1', 8, 'Wide/Drilled/Pb', 'U235', 0.1, 'some note', 1, '2015-02-05 11:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `is_isotopes`
--

CREATE TABLE IF NOT EXISTS `is_isotopes` (
  `Isotope_Id` int(11) NOT NULL,
  `Isotope_Name` varchar(255) NOT NULL,
  `Isotope_Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `is_isotopes`
--

INSERT INTO `is_isotopes` (`Isotope_Id`, `Isotope_Name`, `Isotope_Note`, `visible`, `timestamp`) VALUES
(1, 'Mo99', 'Note for Mo99', 1, '2015-02-05 11:59:26'),
(2, 'Xe127', 'Note for Xe127', 1, '2015-02-05 11:59:26'),
(2, 'I131', 'Note for I131', 1, '2015-02-05 11:59:26'),
(2, 'Ir192', 'Note for Ir192', 1, '2015-02-05 11:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `is_monitor`
--

CREATE TABLE IF NOT EXISTS `is_monitor` (
`Monitor_Id` int(11) NOT NULL,
  `Order_No` varchar(255) NOT NULL,
  `Monitor_Require` tinyint(1) NOT NULL,
  `Identif_Contract` varchar(255) NOT NULL,
  `Monitor_Trans_Date` date NOT NULL,
  `Monitor_Meas_Date` date NOT NULL,
  `Monitor_Eval_Date` date NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `is_monitor`
--

INSERT INTO `is_monitor` (`Monitor_Id`, `Order_No`, `Monitor_Require`, `Identif_Contract`, `Monitor_Trans_Date`, `Monitor_Meas_Date`, `Monitor_Eval_Date`, `Note`, `visible`, `timestamp`) VALUES
(1, '14G02/1', 1, 'contract number', '2014-07-15', '2014-07-15', '2014-07-15', 'Some note', 1, '2015-02-05 11:52:57'),
(2, '14T23/1', 0, 'contract number', '2014-07-15', '2014-07-15', '2014-07-15', 'Some note', 1, '2015-02-05 11:52:57'),
(3, '14F23/1', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 1, '2015-02-05 11:52:57'),
(4, '15F23/1', 1, '000654', '2015-01-29', '2015-01-29', '2015-01-29', 'some note', 1, '2015-02-05 11:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `is_order`
--

CREATE TABLE IF NOT EXISTS `is_order` (
`Order_Id` int(11) NOT NULL,
  `Order_No` varchar(255) NOT NULL,
  `Cask_No` varchar(255) NOT NULL COMMENT 'Order No. in CVR',
  `Customer_Name` varchar(255) NOT NULL,
  `Cycle_Name` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Amount_of_Targets` int(11) NOT NULL,
  `Start_Irradiation_Time_Node` datetime NOT NULL,
  `End_Irradiation_Time_Node` datetime NOT NULL,
  `Irradiation_Hrs` double NOT NULL,
  `Start_Cooling_Time_Node` datetime NOT NULL,
  `End_Cooling_Time_Node` datetime NOT NULL,
  `Cooling_Time_Hrs` double NOT NULL,
  `Amount_of_Targets_Transport` int(11) NOT NULL,
  `Transport_Date_Time` datetime NOT NULL,
  `Weight` double NOT NULL,
  `Order_Application_Date` date NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `is_order`
--

INSERT INTO `is_order` (`Order_Id`, `Order_No`, `Cask_No`, `Customer_Name`, `Cycle_Name`, `Position`, `Amount_of_Targets`, `Start_Irradiation_Time_Node`, `End_Irradiation_Time_Node`, `Irradiation_Hrs`, `Start_Cooling_Time_Node`, `End_Cooling_Time_Node`, `Cooling_Time_Hrs`, `Amount_of_Targets_Transport`, `Transport_Date_Time`, `Weight`, `Order_Application_Date`, `Note`, `visible`, `timestamp`) VALUES
(1, '14F23/1', '121/14', 'IRE', 'K165', 'D5', 6, '2014-06-15 20:00:00', '2014-06-22 00:30:00', 148.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13.5, 6, '2014-06-22 14:00:00', 11.7, '0000-00-00', '', 1, '2015-02-05 11:53:15'),
(3, '14T23/1', '122/14', 'IRE', 'K165', ' A3', 6, '2014-09-19 12:00:00', '2014-09-19 15:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 6, '2014-09-20 12:00:00', 2014, '0000-00-00', 'Test', 1, '2015-02-05 11:53:15'),
(8, '14G02/1', '123/14', 'IRE', 'K165', ' D5', 6, '2014-06-23 17:30:00', '2014-07-01 00:30:00', 175, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13.5, 6, '2014-07-01 14:00:00', 0, '2014-06-12', '', 1, '2015-02-05 11:53:15'),
(9, '15F23/1', '001/15', 'IRE', 'K169', ' C1', 6, '2015-01-23 17:00:00', '2015-01-23 23:00:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 6, '2015-01-23 18:00:00', 8, '2015-01-17', 'some note', 1, '2015-02-05 11:53:15'),
(10, '15F45/1', '002/15', 'UJF-OJS Kučera', 'K168', ' D2', 3, '2015-02-04 19:00:00', '2015-02-12 20:00:00', 193, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 3, '2015-02-14 20:00:00', 8, '2015-02-01', 'test', 1, '2015-02-27 16:51:43'),
(11, '15F46/1', '003/15', 'UJF-OJS Kučera', 'K168', ' E3', 3, '2015-02-17 20:00:00', '2015-02-27 20:00:00', 240, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 3, '2015-02-28 20:00:00', 8, '2015-02-10', 'test', 1, '2015-02-27 16:56:58'),
(12, '15F47/1', '004/15', 'UJF-OJS Kučera', 'K168', ' C3', 3, '2015-02-20 20:00:00', '2015-02-25 20:00:00', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 3, '2015-02-28 20:00:00', 8, '2015-02-11', 'test', 1, '2015-02-27 17:01:34'),
(13, '15F48/1', '005/15', 'IRE', 'K168', ' E2', 3, '2015-02-09 20:00:00', '2015-02-18 20:00:00', 216, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 3, '2015-02-20 20:00:00', 8, '2015-02-01', 'test', 1, '2015-02-27 17:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `is_phase`
--

CREATE TABLE IF NOT EXISTS `is_phase` (
`Phase_Id` int(10) NOT NULL,
  `Phase_Start` datetime NOT NULL,
  `Phase_Stop` datetime NOT NULL,
  `Phase_Energy` double NOT NULL,
  `Cycle_Name` varchar(255) NOT NULL,
  `Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `is_phase`
--

INSERT INTO `is_phase` (`Phase_Id`, `Phase_Start`, `Phase_Stop`, `Phase_Energy`, `Cycle_Name`, `Note`, `visible`, `timestamp`) VALUES
(1, '2014-06-15 20:00:00', '2014-06-20 17:00:00', 9.3, 'K165', '', 1, '2015-05-27 15:19:49'),
(3, '2014-06-20 18:00:00', '2014-06-22 00:30:00', 9.6, 'K165', '', 1, '2015-05-27 15:22:07'),
(4, '2014-06-22 01:30:00', '2014-06-23 17:00:00', 9.6, 'K165', '', 1, '2015-05-27 15:23:28'),
(5, '2014-06-23 18:00:00', '2014-06-25 07:30:00', 9.7, 'K165', '', 1, '2015-05-27 15:26:25'),
(6, '2014-06-25 08:30:00', '2014-06-29 00:30:00', 9.8, 'K165', '', 1, '2015-05-27 15:26:25'),
(7, '2014-06-29 01:30:00', '2014-07-01 00:30:00', 10, 'K165', '', 1, '2015-05-27 15:26:26'),
(8, '2014-07-22 01:30:00', '2014-07-23 17:00:00', 10, 'K166', '', 1, '2015-05-28 16:49:44'),
(9, '2014-07-01 01:30:00', '2014-07-03 00:30:00', 9.8, 'K165', '', 1, '2015-06-01 12:04:42'),
(10, '2014-07-03 01:30:00', '2014-07-04 17:00:00', 9.8, 'K165', '', 1, '2015-06-01 12:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `is_relative_documents`
--

CREATE TABLE IF NOT EXISTS `is_relative_documents` (
`Document_Id` int(11) NOT NULL,
  `Contract_No` varchar(255) NOT NULL,
  `Irradiation_Requisition_File` varchar(255) NOT NULL,
  `Irradiation_Command_File` varchar(255) NOT NULL,
  `Accompanying_Letter_File` varchar(255) NOT NULL,
  `Document_Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `is_relative_documents`
--

INSERT INTO `is_relative_documents` (`Document_Id`, `Contract_No`, `Irradiation_Requisition_File`, `Irradiation_Command_File`, `Accompanying_Letter_File`, `Document_Note`, `visible`, `timestamp`) VALUES
(1, '1.1/14', '1 az 5-14.pdf', 'p1a-14ir.doc', 'dn1-14.DOC', 'Some note', 1, '2015-02-05 14:23:08'),
(2, '1.2/14', '1 az 5-14.pdf', 'p1a-14ir.doc', 'dn1-14.DOC', 'Some note', 1, '2015-02-05 14:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `is_target`
--

CREATE TABLE IF NOT EXISTS `is_target` (
`Target_Id` int(6) NOT NULL,
  `Target_No` char(20) NOT NULL,
  `Order_No_Customer` char(20) NOT NULL,
  `Target_Material` varchar(255) NOT NULL,
  `Target_Weight` double NOT NULL,
  `Target_Package_In` varchar(255) NOT NULL,
  `Target_Package_Out` varchar(255) NOT NULL,
  `Target_Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `is_target`
--

INSERT INTO `is_target` (`Target_Id`, `Target_No`, `Order_No_Customer`, `Target_Material`, `Target_Weight`, `Target_Package_In`, `Target_Package_Out`, `Target_Note`, `visible`, `timestamp`) VALUES
(4, 'L6982', '14G02/1', 'Al', 3, 'Bez ...', 'Package out...', '', 1, '2015-02-05 11:53:37'),
(5, 'L6983', '14G02/1', 'Al', 3, 'Bez ...', 'Package out...', '', 1, '2015-02-05 11:53:37'),
(6, 'L6984', '14G02/1', 'Al', 3, 'Bez ...', 'Package out...', '', 1, '2015-02-05 11:53:37'),
(7, 'L6984', '15F23/1', 'Al', 3, 'Bez ...', 'Package out...', '', 1, '2015-02-05 11:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `is_time_node`
--

CREATE TABLE IF NOT EXISTS `is_time_node` (
`Time_Node_Id` int(11) NOT NULL,
  `Cask_No` varchar(255) NOT NULL,
  `Time_Node` datetime NOT NULL,
  `Reactor_Pos_From` varchar(255) NOT NULL,
  `Reactor_Pos_Caps_From` char(6) DEFAULT NULL,
  `Reactor_Pos_To` varchar(255) NOT NULL,
  `Reactor_Pos_Caps_To` char(6) DEFAULT NULL,
  `Action` varchar(255) NOT NULL,
  `Operate_No` char(2) NOT NULL,
  `Status` char(20) NOT NULL,
  `Time_Node_Note` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `is_time_node`
--

INSERT INTO `is_time_node` (`Time_Node_Id`, `Cask_No`, `Time_Node`, `Reactor_Pos_From`, `Reactor_Pos_Caps_From`, `Reactor_Pos_To`, `Reactor_Pos_Caps_To`, `Action`, `Operate_No`, `Status`, `Time_Node_Note`, `visible`, `timestamp`) VALUES
(1, '121/14', '2014-09-01 10:00:00', ' C5', '2', '', NULL, 'irr', '1', 'Start', 'Note1', 1, '2015-02-05 11:53:55'),
(18, '123/14', '2015-02-06 13:00:00', 'new', NULL, 'C1', '2', 'cool', '1', 'Start', '', 1, '2015-02-06 09:40:24'),
(19, '001/15', '2015-02-19 18:00:00', ' D2', '3', ' B2', '1', 'exp', '1', 'Stop', '', 1, '2015-02-11 13:10:50'),
(20, '001/15', '2015-02-12 18:00:00', ' E2', '2', ' D1', '1', '(dp)', '2', 'Start', '', 1, '2015-02-11 16:47:58'),
(21, '123/14', '2015-02-11 21:00:00', ' D2', '', ' D1', '', 'exp', '1', 'Stop', '', 1, '2015-02-11 17:29:33'),
(22, '001/15', '2015-02-18 14:00:00', ' D2', '1', ' E3', '2', 'cool', '2', 'In process', '', 1, '2015-02-19 11:41:15'),
(23, '121/14', '2015-02-21 14:00:00', ' D2', '1', ' E2', '2', 'exp', '2', 'Stop', '', 1, '2015-02-19 11:43:28'),
(24, '002/15', '2015-02-04 22:00:00', 'new', '', ' D1', '1', '(dp)', '2', 'Start', 'test', 1, '2015-02-27 17:03:22'),
(25, '002/15', '2015-02-06 19:00:00', ' C2', '1', ' D2', '3', 'irr', '2', 'Stop', 'test', 1, '2015-02-27 17:05:16'),
(26, '005/15', '2015-02-10 20:00:00', 'new', '', ' E2', '', '(dp)', '1', 'Start', 'test', 1, '2015-02-27 17:07:31'),
(27, '005/15', '2015-02-11 16:00:00', ' E2', '', ' D1', '', 'cool', '1', 'Stop', '', 1, '2015-03-02 14:53:53'),
(28, '121/14', '2014-09-01 10:00:00', 'new', 'None', ' C1', '1', 'exp', '2', 'Start', '', 1, '2015-03-06 13:50:49'),
(29, '121/14', '2015-02-21 14:00:00', 'new', 'None', ' D1', '1', 'exp', '1', 'Stop', '', 1, '2015-03-06 13:57:12'),
(30, '121/14', '2015-03-10 16:00:00', 'new', '', ' C2', '', 'exp', '3', 'Start', '', 1, '2015-03-10 15:23:38'),
(31, '121/14', '2015-03-10 16:00:00', ' D1', '1', ' D2', '', 'irr', '2', 'In process', '', 1, '2015-03-10 15:35:02'),
(33, '005/15', '2015-02-12 17:00:00', 'new', '', ' B1', '', 'exp', '1', 'Start', '', 1, '2015-03-10 15:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `is_transport_firm`
--

CREATE TABLE IF NOT EXISTS `is_transport_firm` (
`Firm_Id` int(11) NOT NULL,
  `Firm_Name` varchar(20) NOT NULL,
  `Firm_Address` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `is_transport_firm`
--

INSERT INTO `is_transport_firm` (`Firm_Id`, `Firm_Name`, `Firm_Address`, `visible`, `timestamp`) VALUES
(1, 's.a. Transrad n.v.', 'B-6220 Fleurus (Belgique)', 1, '2015-06-04 10:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `is_user_iscvr`
--

CREATE TABLE IF NOT EXISTS `is_user_iscvr` (
`uid` mediumint(8) NOT NULL,
  `username` char(15) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `is_user_iscvr`
--

INSERT INTO `is_user_iscvr` (`uid`, `username`, `password`, `email`, `visible`, `timestamp`) VALUES
(1, 'admin', '$2y$10$ztUs7j9KhmjQBDc.0RKxQucGl', 'admin@email.com', 1, '2015-02-06 13:16:31'),
(2, 'admin2', '$2y$10$w2nbwRMx9QvK4phirfER2utCh', 'admin2@email.com', 1, '2015-02-06 13:18:32'),
(21, 'admin3', '$2y$10$BVdCvBWHhxbkzycSJmFpb.NNQ', 'admin3@email.com', 1, '2015-02-06 13:20:56'),
(22, 'admin4', '$2y$10$OxUf429/IWg47BeFM80Ydevyp', 'admin4@email.com', 1, '2015-02-10 15:56:37'),
(30, 'admin5', '$2y$10$NCIY/QxBmy2KjgHbG2HoDe4NK', 'admin5@email.com', 1, '2015-02-11 11:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `is_vehicle`
--

CREATE TABLE IF NOT EXISTS `is_vehicle` (
`Vehicle_Id` int(11) NOT NULL,
  `Vehicle_Model` varchar(20) NOT NULL,
  `Plate_No` char(20) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `is_vehicle`
--

INSERT INTO `is_vehicle` (`Vehicle_Id`, `Vehicle_Model`, `Plate_No`, `visible`, `timestamp`) VALUES
(1, 'Scania R480', '318-BFP + QJA-372', 1, '2015-06-04 10:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_contract`
--
ALTER TABLE `is_contract`
 ADD PRIMARY KEY (`Contract_Id`);

--
-- Indexes for table `is_customer`
--
ALTER TABLE `is_customer`
 ADD PRIMARY KEY (`Customer_Id`), ADD UNIQUE KEY `Customer_ID` (`Customer_Name`);

--
-- Indexes for table `is_cycle`
--
ALTER TABLE `is_cycle`
 ADD PRIMARY KEY (`Cycle_ID`);

--
-- Indexes for table `is_driver`
--
ALTER TABLE `is_driver`
 ADD PRIMARY KEY (`Driver_Id`);

--
-- Indexes for table `is_irradiation`
--
ALTER TABLE `is_irradiation`
 ADD PRIMARY KEY (`Irradiation_Parameter_Id`);

--
-- Indexes for table `is_monitor`
--
ALTER TABLE `is_monitor`
 ADD PRIMARY KEY (`Monitor_Id`);

--
-- Indexes for table `is_order`
--
ALTER TABLE `is_order`
 ADD UNIQUE KEY `Order_Id_2` (`Order_Id`), ADD UNIQUE KEY `Order_No_Customer` (`Order_No`), ADD KEY `Order_Id` (`Order_Id`);

--
-- Indexes for table `is_phase`
--
ALTER TABLE `is_phase`
 ADD PRIMARY KEY (`Phase_Id`);

--
-- Indexes for table `is_relative_documents`
--
ALTER TABLE `is_relative_documents`
 ADD PRIMARY KEY (`Document_Id`), ADD UNIQUE KEY `Contract_No` (`Contract_No`);

--
-- Indexes for table `is_target`
--
ALTER TABLE `is_target`
 ADD PRIMARY KEY (`Target_Id`);

--
-- Indexes for table `is_time_node`
--
ALTER TABLE `is_time_node`
 ADD PRIMARY KEY (`Time_Node_Id`);

--
-- Indexes for table `is_transport_firm`
--
ALTER TABLE `is_transport_firm`
 ADD PRIMARY KEY (`Firm_Id`);

--
-- Indexes for table `is_user_iscvr`
--
ALTER TABLE `is_user_iscvr`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `is_vehicle`
--
ALTER TABLE `is_vehicle`
 ADD PRIMARY KEY (`Vehicle_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_contract`
--
ALTER TABLE `is_contract`
MODIFY `Contract_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `is_customer`
--
ALTER TABLE `is_customer`
MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `is_cycle`
--
ALTER TABLE `is_cycle`
MODIFY `Cycle_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `is_driver`
--
ALTER TABLE `is_driver`
MODIFY `Driver_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `is_irradiation`
--
ALTER TABLE `is_irradiation`
MODIFY `Irradiation_Parameter_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `is_monitor`
--
ALTER TABLE `is_monitor`
MODIFY `Monitor_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `is_order`
--
ALTER TABLE `is_order`
MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `is_phase`
--
ALTER TABLE `is_phase`
MODIFY `Phase_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `is_relative_documents`
--
ALTER TABLE `is_relative_documents`
MODIFY `Document_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `is_target`
--
ALTER TABLE `is_target`
MODIFY `Target_Id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `is_time_node`
--
ALTER TABLE `is_time_node`
MODIFY `Time_Node_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `is_transport_firm`
--
ALTER TABLE `is_transport_firm`
MODIFY `Firm_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `is_user_iscvr`
--
ALTER TABLE `is_user_iscvr`
MODIFY `uid` mediumint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `is_vehicle`
--
ALTER TABLE `is_vehicle`
MODIFY `Vehicle_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

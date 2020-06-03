-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2019 at 09:08 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignevent`
--

DROP TABLE IF EXISTS `assignevent`;
CREATE TABLE IF NOT EXISTS `assignevent` (
  `eid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `emanager` varchar(100) DEFAULT NULL,
  `cathead` varchar(100) DEFAULT NULL,
  `mhead` varchar(100) DEFAULT NULL,
  `hincharge` varchar(100) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  PRIMARY KEY (`eid`,`title`),
  KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignevent`
--

INSERT INTO `assignevent` (`eid`, `title`, `emanager`, `cathead`, `mhead`, `hincharge`, `cost`) VALUES
(1, 'Talks and Readings', 'aaa', 'bbb', 'ccc', 'ddd', 10000.9),
(2, 'Arts and Exhibits', 'amar', 'mohan', 'shreya', 'shruthi', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `pno` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occp` varchar(100) NOT NULL,
  `addr` varchar(255) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `ename`, `gender`, `dob`, `pno`, `email`, `occp`, `addr`) VALUES
(1, 'aaa', 'male', '1990-08-01', '111111111', 'aaa@gmail.com', 'catering head', 'lucknow'),
(2, 'bbb', 'female', '1993-10-03', '22222222', 'bbb@gmail.com', 'media head', 'punjab'),
(3, 'amar', 'male', '1999-10-01', '8881988271', 'amar@gmail.com', 'event manager', 'belagavi');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `desp` varchar(255) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `loc` varchar(100) NOT NULL,
  `guest_no` bigint(20) NOT NULL,
  `seatStyle` varchar(255) NOT NULL,
  `chairsno` bigint(20) NOT NULL,
  `tablesno` bigint(20) NOT NULL,
  `aud` varchar(255) NOT NULL,
  `vid` varchar(255) NOT NULL,
  `cat_type` varchar(255) NOT NULL,
  `req` varchar(255) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `name`, `email`, `type`, `desp`, `sdate`, `edate`, `loc`, `guest_no`, `seatStyle`, `chairsno`, `tablesno`, `aud`, `vid`, `cat_type`, `req`) VALUES
(6, 'vaibhav', 'vaib@gail.com', 'Conference', 'hdhhd', '2019-10-30', '2019-10-31', 'mangalore', 12, 'Theatre Style', 12, 12, 'ipod connection', 'TV', 'In house catering', 'Buffet Style'),
(2, 'harsh', 'harsh@hotmail.com', 'Arts and Exhibits', 'Exhibition of my sculptures', '2019-10-09', '2019-10-18', 'kabul', 40, 'Large Hall', 100, 20, 'ipod connection', 'Projector and Screen', 'In house catering', 'Buffet Style'),
(1, 'shraddha', 'shraddha@gmail.com', 'Talks and Readings', 'A talk on my latest book', '2019-11-01', '2019-10-01', 'mangalore', 49, 'Banquet Style(Round Table)', 60, 5, 'HandHeld music', 'Projector and Screen', 'In house catering', 'Buffet Style'),
(7, 'ghg', 'harsh@hotmail.com', 'Wedding', 'fgfhgf', '2019-10-30', '2019-10-31', 'gf', 12, 'Theatre Style', 12, 4, 'ipod connection', 'DVD/VCR', 'In house catering', 'Buffet Style'),
(8, 'Panchami Rao', 'panchi@gmail.com', 'Music(Concerts)', 'Fusion Music Concert', '2019-11-06', '2019-11-08', 'Mumbai', 100, 'Theatre Style', 2000, 50, 'HandHeld music', 'DVD/VCR', 'Outside catering', 'Buffet Style'),
(9, 'aaaaa', 'fffghghg@gmail.com', 'Sports', 'Marathon Race ', '2019-11-05', '2019-11-05', 'Munnar', 97, 'Garden Style(Round Table)', 200, 96, 'CD player', 'TV', 'In house catering', 'Beverages Only');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `desp` varchar(255) DEFAULT NULL,
  `impr` varchar(255) DEFAULT NULL,
  `sugg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uid`, `uname`, `email`, `desp`, `impr`, `sugg`) VALUES
(1, 'harsh', 'harsh@hotmail.com', 'asadefe', 'sfrhb', 'nio');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `addr` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `username`, `passwd`, `dob`, `addr`) VALUES
(1, 'shraddha', 'aaa@gmail.com', 'shraddha_s', 'shraddha', '1999-04-10', 'belagavi'),
(2, 'harsh', 'harsh@hotmail.com', 'harsh_u', 'harsh', '1999-05-01', 'lucknow'),
(3, 'def', 'def@gmail.com', 'def', 'def', '2019-10-19', 'def'),
(4, 'Panchami Rao', 'panchi@gmail.com', 'panch_r', 'panchi', '1999-10-28', 'Mangalore');

-- --------------------------------------------------------

--
-- Stand-in structure for view `userevent`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `userevent`;
CREATE TABLE IF NOT EXISTS `userevent` (
`eid` int(11)
,`name` varchar(100)
,`email` varchar(100)
,`type` varchar(100)
,`desp` varchar(255)
,`sdate` date
,`edate` date
,`loc` varchar(100)
,`guest_no` bigint(20)
,`seatStyle` varchar(255)
,`chairsno` bigint(20)
,`tablesno` bigint(20)
,`aud` varchar(255)
,`vid` varchar(255)
,`cat_type` varchar(255)
,`req` varchar(255)
,`emanager` varchar(100)
,`cathead` varchar(100)
,`mhead` varchar(100)
,`hincharge` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `userevent`
--
DROP TABLE IF EXISTS `userevent`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userevent`  AS  select `e`.`eid` AS `eid`,`e`.`name` AS `name`,`e`.`email` AS `email`,`e`.`type` AS `type`,`e`.`desp` AS `desp`,`e`.`sdate` AS `sdate`,`e`.`edate` AS `edate`,`e`.`loc` AS `loc`,`e`.`guest_no` AS `guest_no`,`e`.`seatStyle` AS `seatStyle`,`e`.`chairsno` AS `chairsno`,`e`.`tablesno` AS `tablesno`,`e`.`aud` AS `aud`,`e`.`vid` AS `vid`,`e`.`cat_type` AS `cat_type`,`e`.`req` AS `req`,`a`.`emanager` AS `emanager`,`a`.`cathead` AS `cathead`,`a`.`mhead` AS `mhead`,`a`.`hincharge` AS `hincharge` from (`event` `e` join `assignevent` `a`) where ((`e`.`eid` = `a`.`eid`) and (`e`.`type` = `a`.`title`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

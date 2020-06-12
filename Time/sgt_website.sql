-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 08:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgt_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(10) NOT NULL,
  `classname` varchar(100) NOT NULL,
  `sub1` varchar(10) DEFAULT '0',
  `load1` int(10) DEFAULT NULL,
  `status1` int(10) DEFAULT NULL,
  `sub2` varchar(10) DEFAULT '0',
  `load2` int(10) DEFAULT NULL,
  `status2` int(10) DEFAULT NULL,
  `sub3` varchar(10) DEFAULT '0',
  `load3` int(10) DEFAULT NULL,
  `status3` int(10) DEFAULT NULL,
  `sub4` varchar(10) DEFAULT '0',
  `load4` int(10) DEFAULT NULL,
  `status4` int(10) DEFAULT NULL,
  `sub5` varchar(10) DEFAULT '0',
  `load5` int(10) DEFAULT NULL,
  `status5` int(10) DEFAULT NULL,
  `sub6` varchar(10) DEFAULT '0',
  `load6` int(10) DEFAULT NULL,
  `status6` int(10) DEFAULT NULL,
  `sub7` varchar(10) DEFAULT '0',
  `load7` int(10) DEFAULT NULL,
  `status7` int(10) DEFAULT NULL,
  `sub8` varchar(10) DEFAULT '0',
  `load8` int(10) DEFAULT NULL,
  `status8` int(10) DEFAULT NULL,
  `sub9` varchar(10) DEFAULT '0',
  `load9` int(10) DEFAULT NULL,
  `status9` int(10) DEFAULT NULL,
  `sub10` varchar(10) DEFAULT '0',
  `load10` int(10) DEFAULT NULL,
  `status10` int(10) DEFAULT NULL,
  `sub11` varchar(10) DEFAULT '0',
  `load11` int(10) DEFAULT NULL,
  `status11` int(10) DEFAULT NULL,
  `sub12` varchar(10) DEFAULT '0',
  `load12` int(10) DEFAULT NULL,
  `status12` int(10) DEFAULT NULL,
  `sub13` varchar(10) DEFAULT '0',
  `load13` int(10) DEFAULT NULL,
  `status13` int(10) DEFAULT NULL,
  `sub14` varchar(10) DEFAULT '0',
  `load14` int(10) DEFAULT NULL,
  `status14` int(10) DEFAULT NULL,
  `sub15` varchar(10) DEFAULT '0',
  `load15` int(10) DEFAULT NULL,
  `status15` int(10) DEFAULT NULL,
  `stat` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classname`, `sub1`, `load1`, `status1`, `sub2`, `load2`, `status2`, `sub3`, `load3`, `status3`, `sub4`, `load4`, `status4`, `sub5`, `load5`, `status5`, `sub6`, `load6`, `status6`, `sub7`, `load7`, `status7`, `sub8`, `load8`, `status8`, `sub9`, `load9`, `status9`, `sub10`, `load10`, `status10`, `sub11`, `load11`, `status11`, `sub12`, `load12`, `status12`, `sub13`, `load13`, `status13`, `sub14`, `load14`, `status14`, `sub15`, `load15`, `status15`, `stat`) VALUES
(49, 'MCA', 'English', 6, 6, 'ert', 2, 2, 'ADBMS', 4, 4, 'PHP', 4, 4, 'DS', 3, 3, 'ADA', 3, 3, 'TOC', 3, 3, 'ACA', 3, 3, 'CD lab', 1, 1, 'PERL lab', 1, 1, '', 2, 2, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(50, 'CSE SEM 1', 'PHYSICS', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(51, 'CSE SEM 2', 'CHEM', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(52, 'CSE SEM 3', 'MATH', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(53, 'CSE SEM 4', 'BOE', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(54, 'CSE SEM 5', 'DE', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(55, 'CSE SEM 6', 'asd', 1, 1, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(56, 'CSE SEM 7', 'IF', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(57, 'BCA', 'C', 4, 4, 'JAVA', 4, 4, 'C lab', 1, 1, 'DBMS', 4, 4, 'JAVA lab', 1, 1, 'HTML', 4, 4, 'PYTHON', 4, 4, 'OS lab', 1, 1, 'OS', 4, 4, 'CAO', 3, 3, 'WD', 2, 2, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(58, '3rd ece', 'ADA', 4, 4, 'CN', 4, 4, 'ED', 4, 4, 'SE', 4, 4, 'ECOM', 4, 4, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(59, 'g', 'f', 1, 1, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(60, '', '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(61, 'mkij', '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0),
(62, 'cse sem8', 'a1', 4, 4, 'a2', 3, 3, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `roomno` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classtimetable`
--

CREATE TABLE `classtimetable` (
  `classname` varchar(100) NOT NULL DEFAULT '0',
  `days00` varchar(10) NOT NULL DEFAULT '0',
  `days01` varchar(10) NOT NULL DEFAULT '0',
  `days02` varchar(10) NOT NULL DEFAULT '0',
  `days03` varchar(10) NOT NULL DEFAULT '0',
  `days04` varchar(10) NOT NULL DEFAULT '0',
  `days05` varchar(10) NOT NULL DEFAULT '0',
  `days06` varchar(10) NOT NULL DEFAULT '0',
  `days07` varchar(10) NOT NULL DEFAULT '0',
  `days08` varchar(15) NOT NULL DEFAULT '0',
  `days09` varchar(15) NOT NULL DEFAULT '0',
  `days10` varchar(10) NOT NULL DEFAULT '0',
  `days11` varchar(10) NOT NULL DEFAULT '0',
  `days12` varchar(10) NOT NULL DEFAULT '0',
  `days13` varchar(10) NOT NULL DEFAULT '0',
  `days14` varchar(10) NOT NULL DEFAULT '0',
  `days15` varchar(10) NOT NULL DEFAULT '0',
  `days16` varchar(10) NOT NULL DEFAULT '0',
  `days17` varchar(10) NOT NULL DEFAULT '0',
  `days18` varchar(15) NOT NULL DEFAULT '0',
  `days19` varchar(15) DEFAULT '0',
  `days20` varchar(10) NOT NULL DEFAULT '0',
  `days21` varchar(10) NOT NULL DEFAULT '0',
  `days22` varchar(10) NOT NULL DEFAULT '0',
  `days23` varchar(10) NOT NULL DEFAULT '0',
  `days24` varchar(10) NOT NULL DEFAULT '0',
  `days25` varchar(10) NOT NULL DEFAULT '0',
  `days26` varchar(10) NOT NULL DEFAULT '0',
  `days27` varchar(10) NOT NULL DEFAULT '0',
  `days28` varchar(15) NOT NULL DEFAULT '0',
  `days29` varchar(15) NOT NULL DEFAULT '0',
  `days30` varchar(10) NOT NULL DEFAULT '0',
  `days31` varchar(10) NOT NULL DEFAULT '0',
  `days32` varchar(10) NOT NULL DEFAULT '0',
  `days33` varchar(10) NOT NULL DEFAULT '0',
  `days34` varchar(10) NOT NULL DEFAULT '0',
  `days35` varchar(10) NOT NULL DEFAULT '0',
  `days36` varchar(10) NOT NULL DEFAULT '0',
  `days37` varchar(10) NOT NULL DEFAULT '0',
  `days38` varchar(15) NOT NULL DEFAULT '0',
  `days39` varchar(15) NOT NULL DEFAULT '0',
  `days40` varchar(10) NOT NULL DEFAULT '0',
  `days41` varchar(10) NOT NULL DEFAULT '0',
  `days42` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtimetable`
--

INSERT INTO `classtimetable` (`classname`, `days00`, `days01`, `days02`, `days03`, `days04`, `days05`, `days06`, `days07`, `days08`, `days09`, `days10`, `days11`, `days12`, `days13`, `days14`, `days15`, `days16`, `days17`, `days18`, `days19`, `days20`, `days21`, `days22`, `days23`, `days24`, `days25`, `days26`, `days27`, `days28`, `days29`, `days30`, `days31`, `days32`, `days33`, `days34`, `days35`, `days36`, `days37`, `days38`, `days39`, `days40`, `days41`, `days42`) VALUES
('MCA', 'English', 'ADBMS', 'PHP', 'DS', 'TOC', 'ACA', '0', 'DS', 'English', 'ADBMS', 'PHP', 'TOC', 'ACA', '0', 'PHP', 'English', 'ADBMS', 'DS', 'TOC', 'ACA', '0', 'ADBMS', 'English', 'PHP', '0', '0', '0', '0', 'English', 'CD lab', 'PERL lab', '0', '0', '0', '0', '0', 'English', '0', '0', '0', '0', '0', '0'),
('CSE SEM 1', 'PHYSICS', '0', '0', '0', '0', '0', '0', '0', '0', 'PHYSICS', '0', '0', '0', '0', '0', '0', 'PHYSICS', '0', '0', '0', '0', 'PHYSICS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('CSE SEM 2', '0', 'CHEM', '0', '0', '0', '0', '0', 'CHEM', '0', '0', '0', '0', '0', '0', 'CHEM', '0', '0', '0', '0', '0', '0', '0', 'CHEM', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('CSE SEM 3', '0', '0', 'MATH', '0', '0', '0', '0', '0', 'MATH', '0', '0', '0', '0', '0', '0', '0', '0', 'MATH', '0', '0', '0', '0', '0', 'MATH', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('CSE SEM 4', '0', '0', '0', 'BOE', '0', '0', '0', '0', '0', '0', 'BOE', '0', '0', '0', '0', 'BOE', '0', '0', '0', '0', '0', '0', '0', '0', 'BOE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('CSE SEM 5', '0', '0', '0', '0', 'DE', '0', '0', '0', '0', '0', '0', 'DE', '0', '0', '0', '0', '0', '0', 'DE', '0', '0', '0', '0', '0', '0', 'DE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('BCA', 'JAVA', 'HTML', 'DBMS', 'PYTHON', 'CAO', 'C', 'OS', 'JAVA', 'DBMS', 'HTML', 'OS', 'PYTHON', 'C', 'CAO', 'DBMS', 'JAVA', 'HTML', 'PYTHON', 'CAO', 'C', 'OS', 'WD', 'DBMS', 'JAVA', 'HTML', 'PYTHON', 'C', 'OS', 'C lab', 'C lab', 'WD', '0', '0', 'JAVA lab', '0', 'OS lab', 'OS lab', '0', '0', '0', '0', '0', '0'),
('3rd ece', '0', 'ADA', 'ED', '0', '0', '0', '0', '0', '0', 'ADA', 'ED', '0', '0', '0', 'ADA', '0', 'ED', '0', '0', '0', '0', 'ADA', '0', '0', 'ED', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('cse sem8', 'a1', '0', '0', '0', '0', '0', '0', '0', '0', 'a1', '0', '0', '0', '0', '0', '0', 'a1', '0', '0', '0', '0', '0', 'a1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `Coun` int(2) NOT NULL DEFAULT '0',
  `COUNT` int(2) NOT NULL DEFAULT '1',
  `notfound` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`Coun`, `COUNT`, `notfound`) VALUES
(0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyid` int(10) DEFAULT NULL,
  `facultyname` varchar(20) NOT NULL,
  `sub1` varchar(10) DEFAULT NULL,
  `class1` varchar(100) DEFAULT NULL,
  `sub2` varchar(10) DEFAULT NULL,
  `class2` varchar(100) DEFAULT NULL,
  `sub3` varchar(10) DEFAULT NULL,
  `class3` varchar(100) DEFAULT NULL,
  `sub4` varchar(10) DEFAULT NULL,
  `class4` varchar(100) DEFAULT NULL,
  `sub5` varchar(10) DEFAULT NULL,
  `class5` varchar(100) DEFAULT NULL,
  `sub6` varchar(10) DEFAULT NULL,
  `class6` varchar(100) DEFAULT NULL,
  `class7` varchar(100) DEFAULT NULL,
  `sub7` varchar(10) DEFAULT NULL,
  `class8` varchar(100) DEFAULT NULL,
  `sub8` varchar(10) DEFAULT NULL,
  `class9` varchar(100) DEFAULT NULL,
  `sub9` varchar(10) DEFAULT NULL,
  `class10` varchar(100) DEFAULT NULL,
  `sub10` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyid`, `facultyname`, `sub1`, `class1`, `sub2`, `class2`, `sub3`, `class3`, `sub4`, `class4`, `sub5`, `class5`, `sub6`, `class6`, `class7`, `sub7`, `class8`, `sub8`, `class9`, `sub9`, `class10`, `sub10`) VALUES
(1, 'GAURAV', 'C', 'BCA', 'C lab', 'BCA', 'PERL', 'MCA', 'PHYSICS', 'CSE SEM 1', 'CHEM', 'CSE SEM 2', 'MATH', 'CSE SEM 3', 'CSE SEM 4', 'BOE', 'CSE SEM 5', 'DE', 'CSE SEM 6', 'DSD', 'CSE SEM 7', 'IF'),
(2, 'PREETI', 'JAVA', 'BCA', 'JAVA lab', 'BCA', 'PERL lab', 'MCA', 'ED', '3rd ece', 'ABC', 'CSE SEM 1', 'abc', 'CSE SEM 4', 'CSE SEM 7', 'dd', 'CSE SEM 5', 'w', 'CSE SEM 7', 'ht', NULL, NULL),
(3, 'SATNAM', 'DBMS', 'BCA', 'ADBMS', 'MCA', 'CD', 'MCA', 'CD lab', 'MCA', 'd', 'CSE SEM 3', 'cx', 'MCA', 'MCA', 'cx', 'MCA', 'cx', 'MCA', 'cx', 'MCA', 'Test'),
(4, 'REENU', 'HTML', 'BCA', 'PYTHON', 'BCA', 'PHP', 'MCA', 'PHP lab', 'MCA', 'dse', 'CSE SEM 6', 'd', 'g', 'g', 'dnv', 'g', 'dnv', 'g', 'dnv', 'g', 'dnv'),
(5, 'SHWETA', 'OS', 'BCA', 'OS lab', 'BCA', 'TOC', 'MCA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'YASHIKA', 'CAO', 'BCA', 'WD', 'BCA', 'DS', 'MCA', 'ACA', 'MCA', 'r', 'CSE SEM 2', 'we', 'CSE SEM 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1221, 'Priyankaka', 'ADA', '3rd ece', 'English', 'MCA', 'MATH', 'MCA', 'MATH', 'MCA', 'MATH', 'MCA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Deepak', 'a1', 'cse sem8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facultyregistration`
--

CREATE TABLE `facultyregistration` (
  `facultyname` varchar(15) NOT NULL,
  `facultyid` int(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phoneno` int(13) NOT NULL,
  `emailaddress` varchar(20) NOT NULL,
  `stat` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyregistration`
--

INSERT INTO `facultyregistration` (`facultyname`, `facultyid`, `age`, `gender`, `phoneno`, `emailaddress`, `stat`) VALUES
('GAURAV', 1, 25, 'm', 65845769, 'DSFDSF', 0),
('PREETI', 2, 25, 'fm', 464, 'WWEW', 0),
('SATNAM', 3, 25, 'fm', 64, 'WFD', 0),
('REENU', 4, 25, 'fm', 3644, 'NBHVGC', 0),
('SHWETA', 5, 25, 'fm', 325, 'QWEF', 0),
('YASHIKA', 6, 25, 'fm', 31664, 'QSDF', 0),
('Priyankaka', 1221, 5, 'fm', 987654432, 'yorockspriyanka@g.cp', 0),
('Deepak', 76, 27, 'm', 2147483647, 'avc@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facultytimetable`
--

CREATE TABLE `facultytimetable` (
  `facultyname` varchar(30) NOT NULL,
  `days00` varchar(30) DEFAULT '0',
  `days01` varchar(30) DEFAULT '0',
  `days02` varchar(30) DEFAULT '0',
  `days03` varchar(30) DEFAULT '0',
  `days04` varchar(30) DEFAULT '0',
  `days05` varchar(30) DEFAULT '0',
  `days06` varchar(30) DEFAULT '0',
  `days07` varchar(30) DEFAULT '0',
  `days08` varchar(30) DEFAULT '0',
  `days09` varchar(30) DEFAULT '0',
  `days10` varchar(30) DEFAULT '0',
  `days11` varchar(30) DEFAULT '0',
  `days12` varchar(30) DEFAULT '0',
  `days13` varchar(30) DEFAULT '0',
  `days14` varchar(30) DEFAULT '0',
  `days15` varchar(30) DEFAULT '0',
  `days16` varchar(30) DEFAULT '0',
  `days17` varchar(30) DEFAULT '0',
  `days18` varchar(30) DEFAULT '0',
  `days19` varchar(30) DEFAULT '0',
  `days20` varchar(30) DEFAULT '0',
  `days21` varchar(30) DEFAULT '0',
  `days22` varchar(30) DEFAULT '0',
  `days23` varchar(30) DEFAULT '0',
  `days24` varchar(30) DEFAULT '0',
  `days25` varchar(30) DEFAULT '0',
  `days26` varchar(30) DEFAULT '0',
  `days27` varchar(30) DEFAULT '0',
  `days28` varchar(30) DEFAULT '0',
  `days29` varchar(30) DEFAULT '0',
  `days30` varchar(30) DEFAULT '0',
  `days31` varchar(30) DEFAULT '0',
  `days32` varchar(30) DEFAULT '0',
  `days33` varchar(30) DEFAULT '0',
  `days34` varchar(30) DEFAULT '0',
  `days35` varchar(30) DEFAULT '0',
  `days36` varchar(30) DEFAULT '0',
  `days37` varchar(30) DEFAULT '0',
  `days38` varchar(30) DEFAULT '0',
  `days39` varchar(30) DEFAULT '0',
  `days40` varchar(30) DEFAULT '0',
  `days41` varchar(30) DEFAULT '0',
  `days42` varchar(30) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultytimetable`
--

INSERT INTO `facultytimetable` (`facultyname`, `days00`, `days01`, `days02`, `days03`, `days04`, `days05`, `days06`, `days07`, `days08`, `days09`, `days10`, `days11`, `days12`, `days13`, `days14`, `days15`, `days16`, `days17`, `days18`, `days19`, `days20`, `days21`, `days22`, `days23`, `days24`, `days25`, `days26`, `days27`, `days28`, `days29`, `days30`, `days31`, `days32`, `days33`, `days34`, `days35`, `days36`, `days37`, `days38`, `days39`, `days40`, `days41`, `days42`) VALUES
('Priyankaka', 'MCA English', '3rd ece ADA', '0', '0', '0', '0', '0', '0', 'MCA English', '3rd ece ADA', '0', '0', '0', '0', '3rd ece ADA', 'MCA English', '0', '0', '0', '0', '0', '3rd ece ADA', 'MCA English', '0', '0', '0', '0', '0', 'MCA English', '0', '0', '0', '0', '0', '0', '0', 'MCA English', '0', '0', '0', '0', '0', '0'),
('SATNAM', '0', 'MCA ADBMS', 'BCA DBMS', '0', '0', '0', '0', '0', 'BCA DBMS', 'MCA ADBMS', '0', '0', '0', '0', 'BCA DBMS', '0', 'MCA ADBMS', '0', '0', '0', '0', 'MCA ADBMS', 'BCA DBMS', '0', '0', '0', '0', '0', '0', 'MCA CD lab', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('REENU', '0', 'BCA HTML', 'MCA PHP', 'BCA PYTHON', '0', '0', '0', '0', '0', 'BCA HTML', 'MCA PHP', 'BCA PYTHON', '0', '0', 'MCA PHP', '0', 'BCA HTML', 'BCA PYTHON', '0', '0', '0', '0', '0', 'MCA PHP', 'BCA HTML', 'BCA PYTHON', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('YASHIKA', '0', '0', '0', 'MCA DS', 'BCA CAO', 'MCA ACA', '0', 'MCA DS', '0', '0', '0', '0', 'MCA ACA', 'BCA CAO', '0', '0', '0', 'MCA DS', 'BCA CAO', 'MCA ACA', '0', 'BCA WD', '0', '0', '0', '0', '0', '0', '0', '0', 'BCA WD', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('SHWETA', '0', '0', '0', '0', 'MCA TOC', '0', 'BCA OS', '0', '0', '0', 'BCA OS', 'MCA TOC', '0', '0', '0', '0', '0', '0', 'MCA TOC', '0', 'BCA OS', '0', '0', '0', '0', '0', '0', 'BCA OS', '0', '0', '0', '0', '0', '0', '0', 'BCA OS lab', 'BCA OS lab', '0', '0', '0', '0', '0', '0'),
('PREETI', 'BCA JAVA', '0', '3rd ece ED', '0', '0', '0', '0', 'BCA JAVA', '0', '0', '3rd ece ED', '0', '0', '0', '0', 'BCA JAVA', '3rd ece ED', '0', '0', '0', '0', '0', '0', 'BCA JAVA', '3rd ece ED', '0', '0', '0', '0', '0', 'MCA PERL lab', '0', '0', 'BCA JAVA lab', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('GAURAV', 'CSE SEM 1 PHYSICS', 'CSE SEM 2 CHEM', 'CSE SEM 3 MATH', 'CSE SEM 4 BOE', 'CSE SEM 5 DE', 'BCA C', '0', 'CSE SEM 2 CHEM', 'CSE SEM 3 MATH', 'CSE SEM 1 PHYSICS', 'CSE SEM 4 BOE', 'CSE SEM 5 DE', 'BCA C', '0', 'CSE SEM 2 CHEM', 'CSE SEM 4 BOE', 'CSE SEM 1 PHYSICS', 'CSE SEM 3 MATH', 'CSE SEM 5 DE', 'BCA C', '0', 'CSE SEM 1 PHYSICS', 'CSE SEM 2 CHEM', 'CSE SEM 3 MATH', 'CSE SEM 4 BOE', 'CSE SEM 5 DE', 'BCA C', '0', 'BCA C lab', 'BCA C lab', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('Deepak', 'cse sem8 a1', '0', '0', '0', '0', '0', '0', '0', '0', 'cse sem8 a1', '0', '0', '0', '0', '0', '0', 'cse sem8 a1', '0', '0', '0', '0', '0', 'cse sem8 a1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `ID` int(3) NOT NULL,
  `Room` int(4) NOT NULL,
  `lab1` varchar(30) DEFAULT NULL,
  `lab2` varchar(30) DEFAULT NULL,
  `lab3` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`ID`, `Room`, `lab1`, `lab2`, `lab3`) VALUES
(1, 401, 'C lab', 'JAVA lab', 'OS lab'),
(2, 402, 'CD lab', 'PERL lab', 'PHP lab'),
(3, 403, 'CD lab', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labtimetable`
--

CREATE TABLE `labtimetable` (
  `Room` int(4) NOT NULL DEFAULT '0',
  `days00` varchar(30) DEFAULT '0',
  `days01` varchar(30) DEFAULT '0',
  `days02` varchar(30) DEFAULT '0',
  `days03` varchar(30) DEFAULT '0',
  `days04` varchar(30) DEFAULT '0',
  `days05` varchar(30) DEFAULT '0',
  `days06` varchar(30) DEFAULT '0',
  `days07` varchar(30) DEFAULT '0',
  `days08` varchar(30) DEFAULT '0',
  `days09` varchar(30) DEFAULT '0',
  `days10` varchar(30) DEFAULT '0',
  `days11` varchar(30) DEFAULT '0',
  `days12` varchar(30) DEFAULT '0',
  `days13` varchar(30) DEFAULT '0',
  `days14` varchar(30) DEFAULT '0',
  `days15` varchar(30) DEFAULT '0',
  `days16` varchar(30) DEFAULT '0',
  `days17` varchar(30) DEFAULT '0',
  `days18` varchar(30) DEFAULT '0',
  `days19` varchar(30) DEFAULT '0',
  `days20` varchar(30) DEFAULT '0',
  `days21` varchar(30) DEFAULT '0',
  `days22` varchar(30) DEFAULT '0',
  `days23` varchar(30) DEFAULT '0',
  `days24` varchar(30) DEFAULT '0',
  `days25` varchar(30) DEFAULT '0',
  `days26` varchar(30) DEFAULT '0',
  `days27` varchar(30) DEFAULT '0',
  `days28` varchar(30) DEFAULT '0',
  `days29` varchar(30) DEFAULT '0',
  `days30` varchar(30) DEFAULT '0',
  `days31` varchar(30) DEFAULT '0',
  `days32` varchar(30) DEFAULT '0',
  `days33` varchar(30) DEFAULT '0',
  `days34` varchar(30) DEFAULT '0',
  `days35` varchar(30) DEFAULT '0',
  `days36` varchar(30) DEFAULT '0',
  `days37` varchar(30) DEFAULT '0',
  `days38` varchar(30) DEFAULT '0',
  `days39` varchar(30) DEFAULT '0',
  `days40` varchar(30) DEFAULT '0',
  `days41` varchar(30) DEFAULT '0',
  `days42` varchar(30) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labtimetable`
--

INSERT INTO `labtimetable` (`Room`, `days00`, `days01`, `days02`, `days03`, `days04`, `days05`, `days06`, `days07`, `days08`, `days09`, `days10`, `days11`, `days12`, `days13`, `days14`, `days15`, `days16`, `days17`, `days18`, `days19`, `days20`, `days21`, `days22`, `days23`, `days24`, `days25`, `days26`, `days27`, `days28`, `days29`, `days30`, `days31`, `days32`, `days33`, `days34`, `days35`, `days36`, `days37`, `days38`, `days39`, `days40`, `days41`, `days42`) VALUES
(402, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'CD lab', 'PERL lab', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(401, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'C lab', 'C lab', '0', '0', '0', 'JAVA lab', '0', 'OS lab', 'OS lab', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sgt`
--

CREATE TABLE `sgt` (
  `ID` int(10) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sgt`
--

INSERT INTO `sgt` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'test', 'test'),
(2, 'test1', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `lecture` int(10) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `ID` int(5) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email_id` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`ID`, `username`, `password`, `email_id`) VALUES
(1, 'test1', 'test1', 'test1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'test1', 'test1@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a'),
(3, 'test2', 'test2@gmail.com', '3c4f419e8cd958690d0d14b3b89380d3'),
(4, 'test3', 'test3@g.com', '8ad8757baa8564dc136c1e07507f4a98'),
(5, 'test4', 'test4@gmail.com', '86985e105f79b95d6bc918fb45ec7727'),
(6, 'test10', 'test10@g.cm', 'c1a8e059bfd1e911cf10b626340c9a54'),
(7, 'tert', 'tert@gmail.com', '165c3732382b3f59759560c5caf69bf8'),
(8, 'tert7', 'tert222@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'gaurav123', 'gauravsingla31@gmail.com', '857f12c7851f6931f1c1ea871cce12e2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `sgt`
--
ALTER TABLE `sgt`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sgt`
--
ALTER TABLE `sgt`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

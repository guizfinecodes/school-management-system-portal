-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 08:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(128) CHARACTER SET latin1 NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `username`, `password`, `email`, `role`) VALUES
(1, 'brian', 'guiz', 'guiz', 'qwerty', 'guiz@guiz.com', 'admin'),
(2, 'emmanuel', 'college', 'emmanuel', 'emmanuel', 'emmanuelcollege@eman.co.ke', 'admin'),
(3, 'boss', 'baby', 'bosslady', 'bosslady', 'bos@bos.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` int(50) NOT NULL,
  `intake_id` int(10) NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `feepayable` int(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `mobile` (`mobile`) USING BTREE,
  UNIQUE KEY `email_2` (`email`),
  KEY `email` (`email`),
  KEY `course_id` (`course_id`) USING BTREE,
  KEY `course_id_2` (`course_id`),
  KEY `county_id` (`county_id`),
  KEY `constituency_id` (`constituency_id`),
  KEY `intake_id` (`intake_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `border`
--

CREATE TABLE IF NOT EXISTS `border` (
  `status_id` varchar(20) NOT NULL,
  `stutus_name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `border`
--

INSERT INTO `border` (`status_id`, `stutus_name`, `amount`) VALUES
('1', 'border', 5000),
('2', 'day_scholar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cert`
--

CREATE TABLE IF NOT EXISTS `cert` (
  `cert_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`cert_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE IF NOT EXISTS `companyinfo` (
  `auto` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cbox` varchar(50) NOT NULL,
  `cemail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ccontact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clocation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clogo` longblob NOT NULL,
  PRIMARY KEY (`auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE IF NOT EXISTS `constituency` (
  `constituency_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `constituencyname` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`constituency_id`),
  KEY `county_id` (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`constituency_id`, `county_id`, `constituencyname`) VALUES
(1, 1, 'wote'),
(2, 1, 'mbooni'),
(3, 1, 'kangundo'),
(4, 2, 'cbd'),
(5, 4, 'shinyalu'),
(6, 6, 'bungoma'),
(7, 6, 'lurambi'),
(8, 5, 'bungoma'),
(9, 4, 'mwiyala'),
(10, 3, 'eld');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `countyname` varchar(50) NOT NULL,
  PRIMARY KEY (`county_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`county_id`, `country_id`, `countyname`) VALUES
(1, 1, 'mombasa'),
(2, 1, 'kwale'),
(3, 1, 'kilifi'),
(4, 1, 'tana river'),
(5, 1, 'lamu'),
(6, 1, 'taita taveta'),
(7, 1, 'Garissa'),
(8, 1, 'wajir'),
(9, 1, 'mandera'),
(10, 1, 'marsabit'),
(11, 1, 'isiolo'),
(12, 1, 'meru'),
(13, 1, 'tharaka nithi'),
(14, 1, 'embu'),
(15, 1, 'kitui'),
(16, 1, 'machakos'),
(17, 1, 'makueni'),
(18, 1, 'nyandarua'),
(19, 1, 'nyeri'),
(20, 1, 'kirinyaga'),
(21, 1, 'murang''a'),
(22, 1, 'kiambu'),
(23, 1, 'turkana'),
(24, 1, 'west pokot'),
(25, 1, 'samburu'),
(26, 1, 'uasin gishu'),
(27, 1, 'trans-nzoia'),
(28, 1, 'elgeyo-marakwet'),
(29, 1, 'nandi'),
(30, 1, 'baringo'),
(31, 1, 'laikipia'),
(32, 1, 'nakuru'),
(33, 1, 'narok'),
(34, 1, 'kajiado'),
(35, 1, 'kericho'),
(36, 1, 'bomet'),
(37, 1, 'kakamega'),
(38, 1, 'vihiga'),
(39, 1, 'bungoma'),
(40, 1, 'busia'),
(41, 1, 'siaya'),
(42, 1, 'kisumu'),
(43, 1, 'homa bay'),
(44, 1, 'migori'),
(45, 1, 'kisii'),
(46, 1, 'nyamira'),
(47, 1, 'nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `counties_1`
--

CREATE TABLE IF NOT EXISTS `counties_1` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `countyname` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2022 ;

--
-- Dumping data for table `counties_1`
--

INSERT INTO `counties_1` (`county_id`, `country_id`, `countyname`) VALUES
(1, 1, 'makueni'),
(2, 1, 'nairobi'),
(3, 0, 'kirinyaga'),
(4, 0, 'kakamega'),
(5, 0, 'machakos'),
(6, 0, 'mombasa'),
(7, 0, 'kitui'),
(8, 0, 'kiambu'),
(9, 0, 'muranga'),
(10, 0, 'kisimu'),
(11, 0, 'migori'),
(12, 0, 'vihiga'),
(13, 0, 'homa-bay'),
(14, 0, 'nandi'),
(15, 0, 'bungoma'),
(16, 0, 'elgeyo-marakwet'),
(17, 0, 'nakuru'),
(18, 0, 'meru'),
(19, 0, 'tharaka-nithi'),
(20, 0, 'embu'),
(21, 0, 'kisii'),
(22, 0, 'taita-taveta'),
(23, 0, 'mandela'),
(24, 0, 'turkana'),
(26, 0, 'kwale'),
(27, 0, 'tana-river'),
(28, 1, 'holla'),
(29, 1, 'ala'),
(2019, 0, 'wajir'),
(2020, 2, 'trcvybu'),
(2021, 1, 'ettyu');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `countryname` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `countryname`) VALUES
(1, 'kenya');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(50) NOT NULL AUTO_INCREMENT,
  `department_id` int(50) NOT NULL,
  `coursename` varchar(50) CHARACTER SET latin1 NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  `instructor` varchar(100) NOT NULL,
  `exambody` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duration` varchar(50) CHARACTER SET latin1 NOT NULL,
  `feepayable` int(11) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `coursename` (`coursename`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `department_id`, `coursename`, `academic_year`, `instructor`, `exambody`, `duration`, `feepayable`) VALUES
(1, 1, 'Information Technology and Communications', '2019', 'Mrs. Rambim agnes', 'internal', '1 year', 50000),
(2, 4, 'food and bevarage', '2019', 'Madam angnes nyalita', 'knec', '2 year', 40000),
(3, 2, 'beauty and hair dressing', '2019', 'Dr Kasiangani Jacob', 'internal', '1 years', 20000),
(4, 3, 'business management', '2019', 'Hon. brian guiz', 'internal', '3 years', 53000),
(31, 5, 'tourism', '2020', 'Prof. daniel otanga', 'knec', '2 years', 60000),
(32, 1, 'computer packages', '2019', 'Prof. emmanuel utunga', 'internal', '1 year', 8000),
(33, 3, 'office management', '2023', 'Mrs. Rambim agnes', 'internal', '1 year', 30500);

-- --------------------------------------------------------

--
-- Table structure for table `deletedstudents`
--

CREATE TABLE IF NOT EXISTS `deletedstudents` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `county_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `constituency_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `intake_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `hod` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `departmentname` (`departmentname`),
  UNIQUE KEY `departmentname_2` (`departmentname`),
  UNIQUE KEY `departmentname_3` (`departmentname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `departmentname`, `hod`) VALUES
(1, ' Information Technology', 'dr. kelvin omieno'),
(2, ' Beauty & Hairdressing', 'mrs. angelica guiz'),
(3, 'Business Studies', 'prof. eliud mathew'),
(4, 'catering', 'mrs. josephine mawathe'),
(5, 'tourism', 'dr. jonathan charles');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_prc` text CHARACTER SET latin1 NOT NULL,
  `dis_val` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `displinary_case`
--

CREATE TABLE IF NOT EXISTS `displinary_case` (
  `displine_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(20) NOT NULL,
  `date_c` varchar(20) NOT NULL,
  `displine_case` varchar(100) NOT NULL,
  PRIMARY KEY (`displine_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `displinary_case`
--

INSERT INTO `displinary_case` (`displine_id`, `admission_number`, `date_c`, `displine_case`) VALUES
(12, '2019/0020', '2016-05-06', 'never returned a library book'),
(11, '2019/0015', '2020-05-06', 'assaulted fellow classmate'),
(13, '2019/0004', '2019-05-07', 'lost a school computer'),
(14, '2019/0007', '2022-05-07', 'stole an exam'),
(15, '2019/0020', '2019-05-07', 'slept during class session'),
(16, '2019/0020', '2019-05-07', 'stealing of eggs.'),
(17, '2019/0004', '2019-05-15', 'stole food from a lecturer and harassed her'),
(18, '2019/0020', '2019-05-28', 'ate everything'),
(19, '2019/0003', '2019-06-03', 'so stupid'),
(20, '2019/0020', '2019-06-03', 'copied exams \r\n'),
(21, '2019/0030', '2019-06-03', 'came to school with home clothes'),
(22, '2019/0031', '2019-06-03', 'stole money from ivy kwamboka'),
(23, '2019/0033', '2019-06-03', 'Stole an exam (found with a phone in an exam room)'),
(24, '2019/0032', '2019-06-03', 'Arrogant');

-- --------------------------------------------------------

--
-- Table structure for table `expence`
--

CREATE TABLE IF NOT EXISTS `expence` (
  `expence_id` int(11) NOT NULL AUTO_INCREMENT,
  `expence_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 NOT NULL,
  `expence_amount` varchar(50) CHARACTER SET latin1 NOT NULL,
  `captured_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`expence_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `expence`
--

INSERT INTO `expence` (`expence_id`, `expence_date`, `description`, `expence_amount`, `captured_by`) VALUES
(55, '2019-04-28', 'assesories', '1000', 'munyaoÂ brian'),
(56, '2019-05-02', 'library books', '100500', 'brianÂ guiz'),
(57, '2019-05-02', 'mark-pens', '5500', 'brianÂ guiz'),
(61, '2019-05-10', 'food', '3000', 'brianÂ guiz'),
(62, '2019-05-10', 'washing robes', '100500', 'brianÂ guiz');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `reciept` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(50) CHARACTER SET latin1 NOT NULL,
  `refno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `admission_number` varchar(50) NOT NULL,
  `tdate` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `term_id` varchar(50) NOT NULL,
  `feepayable` int(100) NOT NULL,
  `amount` int(50) NOT NULL,
  `totalpaid` int(100) DEFAULT NULL,
  `balance` int(100) NOT NULL,
  `captured_by` varchar(50) NOT NULL,
  `updation_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reciept`),
  UNIQUE KEY `refno` (`refno`),
  KEY `student_id` (`admission_number`),
  KEY `course_id` (`course_id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`reciept`, `method`, `refno`, `admission_number`, `tdate`, `course_id`, `term_id`, `feepayable`, `amount`, `totalpaid`, `balance`, `captured_by`, `updation_time`) VALUES
(6, 'Bank[Direct deposit]', '04/19/675843#', '2019/0002', '2019-04-30', '25', '1', 8000, 13000, NULL, 0, 'brian munyao', NULL),
(7, 'Postal Order', '04/19/6758243#', '2019/0003', '2019-04-30', '1', '1', 50000, 13000, NULL, 0, 'brian munyao', NULL),
(8, 'Bank[Direct deposit]', '04/19/wwft43', '2019/0004', '2019-04-30', '4', '1', 53000, 1000, NULL, 0, 'brian guiz', NULL),
(12, 'Cash', '04/19/2535662', '2019/0004', '2019-04-30', '4', '1', 53000, 5000, NULL, 0, 'brian guiz', NULL),
(13, 'Bank[Direct deposit]', '05/19/234354657g', '2019/0004', '2019-05-01', '4', '1', 53000, 2, NULL, 0, 'brian guiz', NULL),
(14, 'Cash', '05/19/34rt#', '2019/0005', '2019-05-01', '28', '1', 60000, 60001, NULL, 0, 'brian guiz', NULL),
(16, 'Bank[Direct deposit]', '05/19/', '2019/0007', '2019-05-02', '1', '1', 50000, 50000, NULL, 0, 'brian guiz', NULL),
(20, 'Cash', '05/19/123#', '2019/0020', '2019-05-02', '2', '1', 40000, 50000, NULL, 0, 'brian guiz', NULL),
(21, 'Cash', '05/19/1234#', '2019/0002', '2019-05-02', '33', '1', 30500, 31000, NULL, 0, 'brian guiz', NULL),
(22, 'Postal Order', '05/19/234#', '2019/0003', '2019-05-02', '31', '1', 60000, 45000, NULL, 0, 'brian guiz', NULL),
(23, 'Cheque', '05/19/12345#', '2019/0004', '2019-05-02', '4', '1', 53000, 45000, NULL, 0, 'brian guiz', NULL),
(24, 'Others', '05/19/09#', '2019/0005', '2019-05-02', '32', '1', 8000, 8000, NULL, 0, 'brian guiz', NULL),
(25, 'Cash', '05/19/2345#', '2019/0006', '2019-05-02', '3', '1', 20000, 2000, NULL, 0, 'brian guiz', NULL),
(26, 'Cheque', '05/19/096#', '2019/0010', '2019-05-04', '2', '1', 40000, 20000, NULL, 0, 'brian guiz', NULL),
(27, 'Bank[Direct deposit]', '05/19/697#', '2019/0010', '2019-05-04', '2', '1', 40000, 18000, NULL, 0, 'brian guiz', NULL),
(28, 'Cash', '05/19/844', '2019/0011', '2019-05-05', '31', '2', 60000, 50000, NULL, 0, 'brian guiz', NULL),
(29, 'Postal Order', '05/19/789$#', '2019/0015', '2019-05-05', '4', '1', 53000, 49000, NULL, 0, 'brian guiz', NULL),
(30, 'Bank[Direct deposit]', '05/19/3019$#', '2019/0016', '2019-05-07', '34', '1', 30000, 29999, NULL, 0, 'brian guiz', NULL),
(32, 'Cash', '05/19/65#$', '2019/0011', '2019-05-07', '2', '1', 40000, 40000, NULL, 0, 'brian guiz', NULL),
(33, 'Cash', '05/19/3456#$', '2019/0003', '2019-05-10', '31', '1', 15000, 10000, NULL, 0, 'brian guiz', NULL),
(35, 'Bank[Direct deposit]', '05/19/09$%', '2019/0003', '2019-05-10', '31', '1', 60000, 2000, NULL, 5000, 'brian guiz', NULL),
(36, 'Others', '05/19/LPGEWG456K', '2019/0017', '2019-05-10', '31', '1', 60000, 50002, NULL, 60000, 'brian guiz', NULL),
(37, 'Cash', '05/19/EHWEH34', '2019/0017', '2019-05-10', '31', '1', 60000, 2001, NULL, 9998, 'brian guiz', NULL),
(38, 'Cash', '05/19/UETHVT4', '2019/0017', '2019-05-10', '31', '1', 60000, 3, NULL, 7997, 'brian guiz', NULL),
(44, 'Cash', '05/19/SDGJNWL432', '2019/0017', '2019-05-10', '31', '1', 60000, 994, NULL, 7994, 'brian guiz', NULL),
(45, 'Cash', '05/19/FHRU', '2019/0005', '2019-05-11', '32', '1', 8000, 20, NULL, 0, 'brian guiz', NULL),
(48, 'Cash', '05/19/XVDFVBWU5', '2019/0004', '2019-05-14', '4', '1', 53000, 998, 1998, 0, 'brian guiz', NULL),
(49, 'Cash', '05/19/SDBFS', '2019/0004', '2019-05-14', '4', '1', 53000, 1000, 1000, 0, 'brian guiz', NULL),
(50, 'Cash', '05/19/QWQW', '2019/0018', '2019-05-14', '31', '1', 60000, 18000, 60000, 0, 'brian guiz', NULL),
(51, 'Cash', '05/19/SFGNTEII', '2019/0018', '2019-05-14', '31', '1', 60000, 2000, 42000, 0, 'brian guiz', NULL),
(53, 'Cash', '05/19/WEITY', '2019/0018', '2019-05-14', '31', '1', 60000, 10000, 40000, 0, 'brian guiz', NULL),
(54, 'Cheque', '05/19/DFHIG', '2019/0018', '2019-05-14', '31', '1', 60000, 5000, 30000, 0, ' ', NULL),
(56, 'Postal Order', '05/19/ASDFGH', '2019/0013', '2019-05-15', '4', '1', 53000, 3000, 53000, 0, 'brian guiz', NULL),
(57, 'Bank[Direct deposit]', '05/19/QWERTY', '2019/0019', '2019-05-15', '3', '1', 20000, 18000, 20000, 0, 'brian guiz', NULL),
(58, 'Cash', '05/19/QWERT34', '2019/0021', '2019-05-29', '1', '1', 50000, 0, 50000, 0, 'brian guiz', NULL),
(59, 'Cash', '05/19/QWERT234#', '2019/0021', '2019-05-29', '1', '1', 50000, 46000, 50000, 0, 'brian guiz', NULL),
(62, 'Others', '05/19/QWERTYE', '2019/0026', '2019-05-29', '2', '1', 40000, 13000, 40000, 0, 'brian guiz', NULL),
(63, 'Postal Order', '05/19/HNBGV', '2019/0027', '2019-05-29', '33', '1', 30500, 13000, 30500, 0, 'brian guiz', NULL),
(64, 'Postal Order', '05/19/IUYTBV', '2019/0028', '2019-05-29', '31', '1', 60000, 20922, 60000, 0, 'brian guiz', NULL),
(65, 'Cash', '05/19/QWTYUM G', '2019/0030', '2019-05-29', '2', '1', 40000, 200, 40000, 0, 'brian guiz', NULL),
(66, 'Bank[Direct deposit]', '05/19/HGFDS', '2019/0031', '2019-05-31', '3', '1', 20000, 18000, 20000, 0, 'brian guiz', NULL),
(67, 'Bank[Direct deposit]', '06/19/56', '2019/0032', '2019-06-03', '31', '1', 60000, 18000, 60000, 0, 'brian guiz', NULL),
(68, 'Bank[Direct deposit]', '06/19/', '2019/0033', '2019-06-03', '33', '1', 30500, 9000, 30500, 0, 'brian guiz', NULL),
(74, 'Cheque', '06/19/QWERTYU3456', '2019/0033', '2019-06-03', '33', '1', 30500, 15000, 21500, 0, 'brian guiz', NULL),
(75, 'Cheque', '07/19/11', '2019/0034', '2019-07-11', '3', '3', 20000, 18000, 20000, 0, 'brian guiz', NULL),
(76, 'Cheque', '07/19/12', '2019/0034', '2019-07-11', '3', '3', 20000, 2500, 2000, 0, 'brian guiz', NULL),
(77, 'Cheque', '10/19/qwerty', '2019/0035', '2019-10-14', '31', '1', 60000, 400000000, 60000, 0, 'brian guiz', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genderset`
--

CREATE TABLE IF NOT EXISTS `genderset` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gendername` varchar(20) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `genderset`
--

INSERT INTO `genderset` (`gender_id`, `gendername`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `hostel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(50) NOT NULL,
  PRIMARY KEY (`hostel_id`),
  UNIQUE KEY `hostel_name` (`hostel_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `hostel_name`) VALUES
(1, 'Hall 1 - Masinde'),
(2, 'Hall 2 - Kenyatta'),
(3, 'Hall 3 - Murilo'),
(4, 'Hall 4 - Mandela');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
  `instructor_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `fullname`, `username`, `phone`, `email`, `password`) VALUES
(1, 'Mrs. Rambim agnes', 'rambim', '0792423432', 'rambim@rambim.com', 'qwerty'),
(2, 'Miss. aggy shyreen', 'aggy', '0732932029', 'aggy@gmail.com', '123456789'),
(3, 'Prof. daniel otanga', 'daniel', '0721265432', 'rambim@gmail.com', '12345'),
(4, 'Madam angnes nyalita', 'nyalita', '0732492284', 'aggy@yahoo.com', '0987563423'),
(5, 'Dr. kimanzi ', 'kimanzu', '0760654323', 'kim@kim.com', 'hello'),
(6, 'Hon. brian guiz', 'deguiz', '0745322226', 'guiz@guiz.com', 'yolo'),
(9, 'Dr. john joseph', 'john', '0724245334', 'john@john.com', 'qwerty'),
(11, 'Prof. emmanuel utunga', 'emmanuel', '0723456784', 'emman@gmal.com', 'qwerty'),
(13, 'Alison nyamweya Obuga', 'Alison', '0724685432', 'mobuga@gmail.com', '1234'),
(14, 'Dr Kasiangani Jacob', 'jaco', '0798765432', 'jacob@gmal.com', 'jac');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `asset_id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_purchased` varchar(100) CHARACTER SET latin1 NOT NULL,
  `estimated_value` varchar(50) NOT NULL,
  `location` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `purchase_price` varchar(50) NOT NULL,
  `serial_number` varchar(100) CHARACTER SET latin1 NOT NULL,
  `asset_condition` varchar(50) CHARACTER SET latin1 NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `active` varchar(50) CHARACTER SET latin1 NOT NULL,
  `reason_for_disposing` varchar(100) NOT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`asset_id`,`asset_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`asset_id`, `asset_code`, `date_purchased`, `estimated_value`, `location`, `description`, `purchase_price`, `serial_number`, `asset_condition`, `quantity`, `order_number`, `active`, `reason_for_disposing`, `updated_by`) VALUES
(2, 'stationary', '2019-05-03', '6000', 'yako enterprises, kakamega', 'mark-pens', '5500', '138eyeih3823983#', 'good', '200', '42', 'yes', '', 'brianÂ guiz'),
(3, 'books', '2019-04-29', '100000', 'yako enterprises, kakamega town, along mumias road', 'library books', '100500', '138eyeih382983#', 'good', '203', '41', 'yes', '', 'brianÂ guiz'),
(4, 'clothes', '2019-05-05', '2000', 'yako enterprises, kakamega', 'washing robes', '2000', '123456#', 'good', '100', '67', 'yes', '', 'brianÂ guiz'),
(5, 'hello', '2019-05-05', '6000', 'yako enterprises, kakamega', '', '5500', '138eyeih3823983#', 'good', '203', '4425', 'no', '    \r\n                            ', 'brianÂ guiz'),
(6, '', '2019-08-09', '', '', '', '', '', '', '', '', 'yes', '', 'brianÂ guiz');

-- --------------------------------------------------------

--
-- Table structure for table `manage_termly_fee`
--

CREATE TABLE IF NOT EXISTS `manage_termly_fee` (
  `course_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`term_id`),
  KEY `course_id` (`course_id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `admission_number` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term` varchar(50) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `exam_series` varchar(50) CHARACTER SET latin1 NOT NULL,
  `unit_1` int(11) DEFAULT NULL,
  `unit_2` int(11) DEFAULT NULL,
  `unit_3` int(11) DEFAULT NULL,
  `unit_4` int(11) DEFAULT NULL,
  `unit_5` int(11) DEFAULT NULL,
  `unit_6` int(11) DEFAULT NULL,
  `unit_7` int(11) DEFAULT NULL,
  `unit_8` int(11) DEFAULT NULL,
  `unit_9` int(11) DEFAULT NULL,
  `unit_10` int(11) DEFAULT NULL,
  `unit_11` int(11) DEFAULT NULL,
  `unit_12` int(11) DEFAULT NULL,
  `unit_13` int(11) DEFAULT NULL,
  `unit_14` int(11) DEFAULT NULL,
  `unit_15` int(11) DEFAULT NULL,
  `average` int(11) DEFAULT NULL,
  UNIQUE KEY `student_id_2` (`admission_number`,`course_id`,`term`,`year`,`exam_series`),
  KEY `course_id` (`course_id`),
  KEY `student_id` (`admission_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`admission_number`, `course_id`, `term`, `year`, `exam_series`, `unit_1`, `unit_2`, `unit_3`, `unit_4`, `unit_5`, `unit_6`, `unit_7`, `unit_8`, `unit_9`, `unit_10`, `unit_11`, `unit_12`, `unit_13`, `unit_14`, `unit_15`, `average`) VALUES
('2019/0002', 33, 'Term 1', 2019, 'End Term', 64, 98, 65, 45, 68, 70, 73, 98, 68, 100, NULL, NULL, NULL, NULL, NULL, 75),
('2019/0003', 31, 'Term 1', 2019, 'End Term', 45, 84, 65, 78, 67, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 67),
('2019/0004', 4, 'Term 1', 2019, 'End Term', 64, 56, 89, 78, 76, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 72),
('2019/0004', 4, 'Term 1', 2020, 'End Term', 45, 56, 65, 78, 67, 49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60),
('2019/0004', 4, 'Term 2', 2019, 'End Term', 71, 87, 34, 34, 67, 89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60),
('2019/0004', 4, 'Term 2', 2020, 'End Term', 85, 47, 69, 71, 42, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 68),
('2019/0004', 4, 'Term 3', 2019, 'End Term', 89, 90, 64, 40, 85, 64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 72),
('2019/0005', 32, 'Term 1', 2019, 'End Term', 71, 87, 94, 84, 67, 89, 73, 98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78),
('2019/0005', 32, 'Term 2', 2019, 'End Term', 78, 65, 47, 89, 56, 89, 60, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 69),
('2019/0006', 3, 'Term 1', 2019, 'End Term', 56, 92, 36, 56, 68, 78, 56, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 66),
('2019/0007', 1, 'Term 1', 2019, 'End Term', 71, 56, 65, 45, 68, 70, 56, 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 61),
('2019/0010', 2, 'Term 1', 2019, 'End Term', 71, 98, 65, 78, 68, 49, 56, 57, 61, 45, NULL, NULL, NULL, NULL, NULL, 65),
('2019/0015', 4, 'Term 1', 2019, 'End Term', 45, 39, 94, 78, 76, 82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 69),
('2019/0018', 31, 'Term 1', 2019, 'End Term', 56, 72, 70, 51, 49, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 61),
('2019/0019', 3, 'Term 1', 2019, 'End Term', 45, 56, 65, 78, 49, 65, 43, 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 57),
('2019/0020', 2, 'Term 1', 2019, 'End Term', 71, 84, 54, 45, 76, 65, 73, 89, 34, 45, NULL, NULL, NULL, NULL, NULL, 64),
('2019/0031', 3, 'Term 1', 2019, 'End Term', 71, 56, 54, 45, 68, 70, 43, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 58);

-- --------------------------------------------------------

--
-- Table structure for table `packages_marks`
--

CREATE TABLE IF NOT EXISTS `packages_marks` (
  `admission_number` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term` varchar(50) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `INTRODUCTION_TO_COMPUTERS` int(11) NOT NULL,
  `MS_WINDOWS` int(11) NOT NULL,
  `MS_EXCEL` int(11) NOT NULL,
  `MS_ACCESS` int(11) NOT NULL,
  `MS_PUBLISHER` int(11) NOT NULL,
  `MS_POWERPOINT` int(11) NOT NULL,
  `MS_WORD` int(11) NOT NULL,
  `INTERNET_AND_EMAIL` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  UNIQUE KEY `student_id_2` (`admission_number`,`course_id`,`term`,`year`),
  KEY `course_id` (`course_id`),
  KEY `student_id` (`admission_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages_marks`
--

INSERT INTO `packages_marks` (`admission_number`, `course_id`, `term`, `year`, `INTRODUCTION_TO_COMPUTERS`, `MS_WINDOWS`, `MS_EXCEL`, `MS_ACCESS`, `MS_PUBLISHER`, `MS_POWERPOINT`, `MS_WORD`, `INTERNET_AND_EMAIL`, `average`) VALUES
('E/0987/2014', 32, 'Term 1', 2019, 78, 65, 77, 89, 56, 89, 60, 70, 73),
('E/0987/2014', 32, 'Term 2', 2019, 12, 46, 1, 34, 56, 90, 20, 100, 45);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(50) NOT NULL,
  `psirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pfirstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `plastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pmobile` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prelationship` varchar(50) CHARACTER SET latin1 NOT NULL,
  `active` enum('yes','no') NOT NULL,
  PRIMARY KEY (`parent_id`),
  UNIQUE KEY `student_id` (`admission_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `admission_number`, `psirname`, `pfirstname`, `plastname`, `pmobile`, `prelationship`, `active`) VALUES
(2, '2019/0020', 'otongola', 'JACK', 'julius', '123456789', 'FATHER', 'yes'),
(3, '2019/0002', 'JOSHUA', 'SHARON', 'MWIKALI', '0723484898', 'MOTHER', 'yes'),
(4, '2019/0003', 'SIMIYU', 'MASAKU', 'JAVADA', '0714345678', 'GUARDIAN', 'yes'),
(5, '2019/0004', 'MUTIE', 'CHARLES', 'WAMBUA', '0723456733', 'FATHER', 'yes'),
(6, '2019/0005', 'JANET', 'WAMBUA', 'KYALO', '0714345566', 'MOTHER', 'yes'),
(7, '2019/0006', 'MUNYAO', 'JOMBA', 'DADAKE', '0756354786', 'GUARDIAN', 'yes'),
(8, '2019/0007', 'PETER', 'DIANA', 'KWAMBOKA', '0714345375', 'MOTHER', 'yes'),
(9, '2019/0010', 'BRIAN', 'JOSEPHINE', 'DORCAS', '0712345375', 'MOTHER', 'yes'),
(10, '2019/0011', 'joel', 'koinange', 'mukumu', '0723594382', 'guardian', 'yes'),
(11, '2019/0013', 'damaris', 'angelica', 'david', '0798439232', 'guardian', 'yes'),
(13, '2019/0015', 'KWAMBOKA', 'EMBESA', 'DARLING', '0712345949', 'FATHER', 'yes'),
(14, '2019/0016', 'JUSTUS', 'JULIUS', 'MALOMBE', '0792822328', 'FATHER', 'no'),
(15, '2019/0017', 'KWAMBOKA', 'JOEL', 'KEMUNTO', '0723924108', 'DADDY', 'yes'),
(16, '2019/0018', 'JOAN', 'EUGINE', 'KISALA', '0722329090', 'DAD', 'yes'),
(17, '2019/0019', 'KINYA', 'NIKO', 'MBOSO', '0792853753', 'FATHER', 'yes'),
(18, '2019/0021', 'JOHN', 'HARON', 'MWAU', '0794329232', 'FATHER', 'yes'),
(19, '2019/0022', 'MOGIRE', 'BANANA', 'MEFI', '0794294200', 'FATHER', 'yes'),
(20, '2019/0023', 'MUSEMBI', 'JOSH', 'KAMU', '0791033929', 'FATHER', 'yes'),
(21, '2019/0024', 'AKOTH', 'AKOKO', 'AGWABO', '0794320490', 'FATHER', 'yes'),
(23, '2019/0026', 'MUUO', 'KELI', 'HOMIE', '', 'FATHER', 'yes'),
(24, '2019/0027', 'KIVUNGI', 'MACHA', 'BGHUU', '', 'GUARDIAN', 'yes'),
(25, '2019/0028', 'TITUS', 'JOAN', 'WENDI', '', 'MOTHER', 'yes'),
(26, '2019/0030', 'MORAAH', 'IVON', '', '', 'RELATIVE', 'yes'),
(27, '2019/0031', 'JONNE', 'JONNA', 'JONNO', '0794302129', 'GUARDIAN', 'yes'),
(28, '2019/0032', 'WASILWA', 'JOHN', 'WEPUKULU', '074567890', 'FATHER', 'yes'),
(29, '2019/0033', 'ORANGE', 'YU', 'ZAIN', '0795467569', 'MOTHER', 'yes'),
(30, '2019/0034', 'NGUI', 'JACKSON', 'MULWA', '0792492227', 'FATHER', 'yes'),
(31, '2019/0035', 'KOECH', 'ARUSEI', 'ROTICH', '', 'SPONSOR', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` int(20) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `booked` enum('no','yes') NOT NULL,
  `admission` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`room_id`),
  UNIQUE KEY `room_number` (`room_number`),
  UNIQUE KEY `admission_number` (`admission`),
  KEY `hostel_id` (`hostel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_number`, `hostel_id`, `booked`, `admission`) VALUES
(1, 1, 1, 'yes', '2019/0021'),
(2, 2, 2, 'yes', '2019/0023'),
(3, 3, 3, 'yes', '2019/0030'),
(4, 4, 4, 'yes', '2019/0022'),
(5, 5, 1, 'yes', '2019/0024'),
(6, 6, 2, 'yes', '2019/0004'),
(7, 7, 3, 'yes', '2019/0025'),
(8, 8, 4, 'yes', '2019/0026'),
(9, 9, 1, 'yes', '2019/0027'),
(10, 10, 2, 'yes', '2019/0028'),
(14, 11, 1, 'yes', '2019/0020'),
(16, 12, 1, 'yes', '2019/0002'),
(17, 13, 1, 'yes', '2019/0003'),
(18, 14, 1, 'yes', '2019/0005'),
(19, 15, 1, 'yes', '2019/0006'),
(20, 16, 1, 'yes', '2019/0007'),
(21, 17, 1, 'yes', '2019/0010'),
(22, 18, 1, 'yes', '2019/0011'),
(23, 19, 1, 'yes', '2019/0013'),
(24, 20, 1, 'yes', '2019/0015'),
(25, 21, 2, 'yes', '2019/0016'),
(26, 22, 2, 'yes', '2019/0017'),
(27, 23, 2, 'yes', '2019/0018'),
(28, 25, 3, 'yes', '2019/0019'),
(29, 27, 3, 'no', NULL),
(31, 26, 3, 'yes', '2019/0034'),
(32, 28, 4, 'no', NULL),
(33, 29, 4, 'yes', '2019/0031'),
(34, 30, 1, 'no', NULL),
(35, 31, 2, 'no', NULL),
(36, 33, 4, 'no', NULL),
(37, 32, 3, 'no', NULL),
(39, 34, 2, 'no', NULL),
(40, 35, 3, 'no', NULL),
(41, 36, 4, 'no', NULL),
(42, 37, 3, 'no', NULL),
(43, 38, 2, 'no', NULL),
(44, 39, 2, 'yes', '2019/0032'),
(45, 40, 4, 'no', NULL),
(46, 41, 3, 'yes', '2019/0033'),
(47, 42, 2, 'no', NULL),
(48, 45, 3, 'no', NULL),
(49, 44, 4, 'no', NULL),
(50, 46, 1, 'no', NULL),
(51, 47, 3, 'no', NULL),
(52, 48, 3, 'no', NULL),
(54, 49, 1, 'no', NULL),
(55, 50, 2, 'no', NULL),
(56, 51, 1, 'no', NULL),
(57, 52, 1, 'yes', '2019/0035'),
(58, 53, 2, 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `doa` varchar(50) NOT NULL,
  `kra` varchar(50) NOT NULL,
  `nssf` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nhif` varchar(11) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `tsc` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `county_id` (`county_id`),
  KEY `constituency_id` (`constituency_id`),
  KEY `intake_id` (`kra`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `sirname`, `firstname`, `lastname`, `idno`, `dateofbirth`, `gender`, `country_id`, `county_id`, `constituency_id`, `mobile`, `email`, `address`, `zipcode`, `doa`, `kra`, `nssf`, `nhif`, `roles`, `tsc`, `department_id`) VALUES
(1, 'kimani', 'masaku', 'index', '12345678', '1987-12-31', 'male', 1, 4, 7, '12345678', 'index@index.er', '12341', '12-hg', '2019-04-28', 'A123456567J', '2x345vb', '2345vb6', 'secretary', 'qwe2345', 4),
(2, 'kimani', 'helen', 'wangechi', '12345678', '2010-12-31', 'male', 1, 13, 5, '756434456', 'index@index.er', '12341', '12-hg', '2019-08-09', 'A123456567J', '2x345vb', '2345vb6', 'secretary janitor', '12345', 4);

-- --------------------------------------------------------

--
-- Table structure for table `studentstable`
--

CREATE TABLE IF NOT EXISTS `studentstable` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_number` varchar(100) NOT NULL,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` int(50) NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `border` varchar(20) DEFAULT NULL,
  `feepayable` int(11) NOT NULL,
  `emergency_contact` varchar(20) NOT NULL,
  `active` varchar(50) NOT NULL,
  `session_reporting` enum('no','yes') NOT NULL,
  `academic_year` varchar(20) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `admission_number` (`admission_number`),
  UNIQUE KEY `username` (`username`),
  KEY `course_id` (`course_id`) USING BTREE,
  KEY `course_id_2` (`course_id`),
  KEY `county_id` (`county_id`),
  KEY `constituency_id` (`constituency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `studentstable`
--

INSERT INTO `studentstable` (`student_id`, `admission_number`, `sirname`, `firstname`, `lastname`, `username`, `password`, `idno`, `dateofbirth`, `gender`, `country_id`, `county_id`, `constituency_id`, `mobile`, `email`, `address`, `zipcode`, `course_id`, `reg_date`, `border`, `feepayable`, `emergency_contact`, `active`, `session_reporting`, `academic_year`, `room_number`) VALUES
(2, '2019/0020', 'MOSES', 'NDEGWA', 'NDUGU', 'mose', '123', '23234567', '1993-12-31', 'male', 1, 28, 4, '0715345678', 'mose@mose.com', '12341', '12-HGml', 2, '2019-04-29', '', 40000, '0788932456', 'yes', 'yes', NULL, 11),
(3, '2019/0002', 'SIMON', 'JACK', 'WAGENE', 'simon', 'simo', '12345678', '1996-12-31', 'MALE', 1, 3, 9, '12345678', 'SIMO@SIMO.COM', '12341', '12-HG', 33, '2019-04-30', '', 13000, '0798765432', 'yes', 'no', NULL, 12),
(4, '2019/0003', 'JOSHUA', 'SIMIYU', 'NDEGE', 'josh', 'hello', '34832588', '1994-12-31', 'male', 1, 40, 7, '0712345678', 'JOSH@JOSH.COM', '12341', '12-HG', 31, '2019-04-30', '', 50000, '0798765432', 'yes', 'yes', NULL, 13),
(5, '2019/0004', 'WAMBUA', 'MIRIAM', 'MWIKALI', 'mirrie', 'sweet', '3365644', '2010-12-11', 'FEMALE', 1, 4, 9, '0728487696', 'WAMBUA@GMAIL.COM', '34', '23463', 4, '2019-04-30', '', 2000, '0792345678', 'yes', 'yes', NULL, 6),
(6, '2019/0005', 'ENNEY', 'MUENI', 'JAVADA', 'enney', 'jav', '12345678', '1992-12-31', 'FEMALE', 1, 20, 8, '0756434786', 'F@GMAIL.COM', '12341', '12-HG', 32, '2019-05-01', '', 8000, '0798765432', 'yes', 'yes', NULL, 14),
(7, '2019/0006', 'MUNYAO', 'JANE', 'ONGINJO', 'jane', 'munyao', '23234565', '1993-01-23', 'female', 1, 11, 4, '0756434456', 'JANE@GMAIL.COM', '12341234', '14-HIGH LANDS', 3, '2019-05-02', '', 20000, '0798765486', 'yes', 'no', NULL, 15),
(8, '2019/0007', 'PETER', 'BRENDAH', 'JOMBA', 'brenda', '123456', '34257282', '1991-12-31', 'female', 1, 3, 3, '714345543', 'BRENDAH@GMAIL.COM', '9482-4832', '14-LOWLANDS', 1, '2019-05-02', '', 50000, '0798765435', 'yes', 'no', NULL, 16),
(9, '2019/0010', 'BRIAN', 'MAINGI', 'ALVIN', 'maingi', 'qwerty', '34832583', '1992-12-31', 'male', 1, 23, 4, '0712345654', 'BRIAN@BRIAN.ER', '12344521', '12-IG', 2, '2019-05-04', '', 40000, '0798769832', 'yes', 'no', NULL, 17),
(10, '2019/0011', 'angel', 'dwaine', 'johnson', 'angel', '123467', '2019/0008', '1993-10-10', 'male', 1, 2, 3, '789453245', 'dwagne@dw.com', '233-qwer', '12456-99', 2, '2019-05-05', '', 40000, '0798765435', 'yes', 'no', NULL, 18),
(12, '2019/0013', 'gaelle', 'akoth', 'malaba', 'gaelle', 'gaelle', '5467893', '10-11-1996', 'female', 1, 3, 4, '0734521679', 'gel@gel.com', '123-hgh low', '12-5684', 4, '2019-05-05', '', 53000, '0798765432', 'yes', 'yes', NULL, 19),
(15, '2019/0015', 'JAPHETH', 'MARY', 'KWAMBOKA', 'japheth', 'japheth', '33322928', '1994-04-02', 'female', 1, 1, 1, '0732248548', 'MARY@GMAIL.COM', '43-KISII', '35694-90100', 4, '2019-05-05', '', 53000, '0712345949', 'yes', 'yes', NULL, 20),
(16, '2019/0016', 'JUSTUS', 'ELIUS', 'JACOB', 'JUSTO', '0987654321', '43342342', '1995-04-04', 'male', 1, 5, 2, '0723456822', 'JUSTO@GMAIL.COM', '35-TUR9', '12-59640', 34, '2019-05-07', '', 30000, '0792438218', 'no', 'no', NULL, 21),
(18, '2019/0017', 'KEMUNTO', 'BETHSHEBA', 'WALLACE', 'SHEBA', 'beth', '34569434', '1997-08-27', 'FEMALE', 1, 4, 8, '0724543928', 'SHEB@SHEB.BOM', '12-3456', '12-KISII', 31, '2019-05-10', '', 60000, '0792302100', 'yes', 'no', NULL, 22),
(19, '2019/0018', 'JOAN', 'ALICE', 'WAMBUGU', 'ALICE', '1234', '', '2010-12-31', 'FEMALE', 1, 17, 1, '0794348239', 'XYZ@GMS.COB', '231-4546', '', 31, '2019-05-14', '', 60000, '0942912843', 'yes', 'yes', NULL, 23),
(20, '2019/0019', 'NIKO', 'LINET', 'KINYA', 'LINET', 'LINET', '23485483', '1996-03-03', 'FEMALE', 1, 45, 5, '0793568449', 'LIN@LIN.COM', '13-6943', '68F-35843', 3, '2019-05-15', '', 20000, '0735633753', 'yes', 'no', NULL, 25),
(21, '2019/0021', 'HARON', 'FESTUS', 'KIRUI', 'FESTUS', 'FESTUS', '32044930', '1996-09-02', 'MALE', 1, 2, 9, '0792284391', 'FES@FES.COM', '548-248322', '', 1, '2019-05-29', '', 50000, '0792219123', 'yes', 'no', NULL, 1),
(22, '2019/0022', 'MOGIRE', 'CALEB', 'BANANA', 'CALEB', 'CALEB', '36943023', '1994-02-02', 'male', 1, 6, 4, '0792395329', 'CAL@CAL.COM', '5933-338GG', '578998', 1, '2019-05-29', '', 50000, '0792349553', 'yes', 'no', NULL, 4),
(23, '2019/0023', 'MUSEMBI', 'EVELYN', 'NZILANI', 'EVE', 'EVE', '53239349', '1997-09-28', 'FEMALE', 1, 18, 1, '0702292104', 'EVE@EVE.COM', '4529-3484HK', '', 31, '2019-05-29', '', 60000, '07920229121', 'yes', 'no', NULL, 2),
(24, '2019/0024', 'AKOTH', 'ROSE', 'AKOKO', 'ROSE', 'ROSE', '', '1997-10-02', 'FEMALE', 1, 44, 9, '0791395654', 'ROSE@ROSE.COM', '463-23489', '', 3, '2019-05-29', '', 20000, '0723943929', 'yes', 'yes', NULL, 5),
(26, '2019/0026', 'KELI', 'SAM', 'MUUO', 'SAM', 'SAM', '85320490', '1996-10-29', 'MALE', 1, 1, 10, '0792421039', 'SAM@SAM.COM', '385432-KIBWEZI', '569534GNIN', 2, '2019-05-29', '', 40000, '0701239329', 'yes', 'yes', NULL, 8),
(27, '2019/0027', 'KIVUNGI', 'MASAKU', 'NGUU', 'MACHA', 'MACHA', '', '1993-05-28', 'MALE', 1, 15, 1, '07942291392', 'MAC@MAC.COM', '6833-4842U1', '', 33, '2019-05-29', '', 30500, '0792342013', 'yes', 'no', NULL, 9),
(28, '2019/0028', 'KATE', 'CARISTLE', 'MIRRIE', 'CAR', 'car', '34678761', '1998-08-28', 'MALE', 1, 19, 1, '0793231232', 'CAR@CAR.COM', '234567SDFGH', '243546768', 31, '2019-05-29', '', 60000, '0795392340', 'yes', 'yes', NULL, 10),
(29, '2019/0030', 'JEREMIAH', 'IVY', 'MORAAH', 'IVY', 'IVY', '23456980', '1995-03-28', 'FEMALE', 1, 5, 3, '0793212238', 'IV@IV.COM', '23456ISSOOII', '2345678', 2, '2019-05-29', '', 40000, '0789422929', 'yes', 'yes', NULL, 3),
(31, '2019/0031', 'JONNY', 'JONNA', 'JONNE', 'JONNY', 'JONNY', '34569654', '1997-04-02', 'MALE', 1, 19, 0, '0793532201', 'JON@JON.COM', '3456TUTY', '438GRHN', 3, '2019-05-31', NULL, 20000, '0794302129', 'yes', 'no', NULL, 29),
(32, '2019/0032', 'WASILWA', 'BRIDGID', 'ANYONJE', 'BRIG', 'BRIG', '34568897', '2001-12-31', 'FEMALE', 1, 39, 0, '0798765438', 'BRID@GMAIL.COM', '98 BUNGOMA', '34YU', 31, '2019-06-03', NULL, 60000, '0745677890', 'yes', 'yes', NULL, 39),
(33, '2019/0033', 'SAFARICOM', 'AIRTEL', 'TELKOM', 'ORANGE', 'ORANGE', '098654', '1995-01-28', 'MALE', 1, 28, 0, '0798654324', 'YU@YU.COM', '9-56QWERTY', '', 33, '2019-06-03', NULL, 30500, '0798655687', 'yes', 'yes', NULL, 41),
(34, '2019/0034', 'NGUI', 'ELIZABETH', 'NZISA', 'LIZ', 'LIZ', '24658433', '1991-05-26', 'FEMALE', 1, 17, 0, '0724932242', 'LIZ@GMAIL.COM', 'WER2345', '456GHFFF', 3, '2019-07-11', NULL, 20000, '0793219103', 'yes', 'yes', NULL, 26),
(35, '2019/0035', 'KIGEN', 'KIPCHONGE', 'KIPROP', 'KIPCHONGE', 'KIPCHONGE', '23445545', '1991-09-26', 'MALE', 1, 29, 0, '0795548334', 'KIP@GMAIL.COM', '45-4392JJE', '2345', 31, '2019-10-14', NULL, 60000, '0794320292', 'yes', 'no', NULL, 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products1`
--

CREATE TABLE IF NOT EXISTS `tbl_products1` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) NOT NULL,
  `products_quantity` int(11) NOT NULL,
  `products_model` varchar(255) NOT NULL,
  `products_price` double NOT NULL,
  `products_weight` double NOT NULL,
  `products_status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_products1`
--

INSERT INTO `tbl_products1` (`products_id`, `products_name`, `products_quantity`, `products_model`, `products_price`, `products_weight`, `products_status`) VALUES
(1, 'Peter England', 125, 'XP123', 400, 10, 'A'),
(2, 'Arrow', 360, 'PP123', 900, 12, 'A'),
(3, 'Allen Solly', 456, 'OP78456', 520, 3, 'A'),
(4, 'Raymond', 756, 'SS789465', 1022, 36, 'A'),
(5, 'Grasim', 899, 'GS132645', 640, 55, 'A'),
(6, 'Levis', 885, 'LL123465', 1500, 36, 'A'),
(7, 'Lee', 74, 'Lee4556', 960, 44, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products2`
--

CREATE TABLE IF NOT EXISTS `tbl_products2` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) NOT NULL,
  `products_quantity` int(11) NOT NULL,
  `products_model` varchar(255) NOT NULL,
  `products_price` double NOT NULL,
  `products_weight` double NOT NULL,
  `products_status` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `term_id` int(11) NOT NULL AUTO_INCREMENT,
  `termname` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `termname`) VALUES
(1, 'Term 1'),
(2, 'Term 2'),
(3, 'Term 3');

-- --------------------------------------------------------

--
-- Table structure for table `trial`
--

CREATE TABLE IF NOT EXISTS `trial` (
  `idno` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  PRIMARY KEY (`unit_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `unit_name`, `course_id`, `academic_year`) VALUES
(1, 'software programming and development', 1, '0000'),
(2, 'security issues and management', 1, '0000'),
(3, 'networking and applications', 1, '0000'),
(4, 'database', 1, '0000'),
(5, 'programming language and practises', 1, '0000'),
(6, 'data analysis method and techniques', 1, '0000'),
(7, 'cloud computing technologies', 1, '0000'),
(8, 'communication skills', 1, '0000'),
(9, 'introduction to course', 3, '0000'),
(10, 'beauty therapies', 3, '0000'),
(11, 'hair dressing techniques', 3, '0000'),
(12, 'customer relations', 3, '0000'),
(13, 'entreprenuership', 3, '0000'),
(14, 'trends', 3, '0000'),
(15, 'business law', 4, '0000'),
(16, 'business plans and decision making', 4, '0000'),
(17, 'business relations and organisation', 4, '0000'),
(18, 'economics and statistical methods', 4, '0000'),
(19, 'business course and evaluation', 4, '0000'),
(20, 'business ethics and communication skills', 4, '0000'),
(21, 'office planning and selection', 33, ''),
(22, 'front office management', 33, ''),
(23, 'office maintenance', 33, ''),
(24, 'communication skills', 33, ''),
(25, 'office keeping and spacing', 33, ''),
(26, 'front office management', 33, ''),
(27, 'practicals', 33, ''),
(28, 'front office and guest relation', 33, ''),
(29, 'costing and control', 33, ''),
(30, 'office pricing and marketing', 33, ''),
(31, 'food and beverage', 2, ''),
(32, 'culinary theory', 2, ''),
(33, 'fundamentals and the hosipitality industry', 2, ''),
(34, 'communication skills', 2, ''),
(35, 'housekeeping and accomodation studies', 2, ''),
(36, 'restaurant service theory', 2, ''),
(37, 'food science', 2, ''),
(38, 'front office and guest relation', 2, ''),
(39, 'costing and control', 2, ''),
(40, 'food and beverage practical unit', 2, ''),
(41, 'introduction to tourism', 31, ''),
(42, 'client interaction and management', 31, ''),
(43, 'planning and management of tourism', 31, ''),
(44, 'entreprenuership engagement', 31, ''),
(45, 'exploration/field skills', 31, ''),
(46, 'communication skills', 31, ''),
(57, 'introduction to computer', 32, ''),
(58, 'ms windows', 32, ''),
(59, 'ms word', 32, ''),
(60, 'ms excel', 32, ''),
(61, 'ms access', 32, ''),
(62, 'ms powerpoint', 32, ''),
(63, 'ms publisher', 32, ''),
(64, 'internet and email', 32, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `constituency`
--
ALTER TABLE `constituency`
  ADD CONSTRAINT `constituency_ibfk_1` FOREIGN KEY (`county_id`) REFERENCES `counties_1` (`county_id`) ON UPDATE CASCADE;

--
-- Constraints for table `counties`
--
ALTER TABLE `counties`
  ADD CONSTRAINT `counties_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_termly_fee`
--
ALTER TABLE `manage_termly_fee`
  ADD CONSTRAINT `manage_termly_fee_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_termly_fee_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`constituency_id`) REFERENCES `constituency` (`constituency_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`county_id`) REFERENCES `counties_1` (`county_id`) ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2018 at 11:05 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

DROP TABLE IF EXISTS `attachment`;
CREATE TABLE IF NOT EXISTS `attachment` (
  `attachid` int(11) NOT NULL AUTO_INCREMENT,
  `mailid` int(11) DEFAULT NULL,
  `attachment` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`attachid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `fromid` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `updte` date NOT NULL,
  `uptime` time NOT NULL,
  PRIMARY KEY (`blogid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogid`, `fromid`, `title`, `content`, `updte`, `uptime`) VALUES
(1, 'principal', 'Welcome', 'Welcome to myCampus!', '2018-01-24', '11:34:56'),
(6, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:41'),
(7, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:41'),
(8, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:42'),
(9, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:42'),
(10, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:43'),
(11, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:43'),
(12, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:43'),
(13, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:44'),
(14, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:44'),
(15, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:44'),
(16, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:44'),
(17, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:45'),
(18, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:45'),
(19, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:45'),
(20, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:45'),
(21, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:45'),
(22, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:46'),
(23, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:46'),
(24, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:46'),
(25, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:46'),
(26, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:46'),
(27, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:47'),
(28, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:47'),
(29, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:52'),
(30, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:52'),
(31, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:52'),
(32, 'principal', 'Test', 'Test Post', '2018-01-26', '08:45:52'),
(34, 'shawn_parker', 'first', 'first blog..', '2018-02-07', '18:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `cmntid` int(11) NOT NULL AUTO_INCREMENT,
  `blogid` int(11) DEFAULT NULL,
  `fromid` varchar(50) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `cmntdte` date DEFAULT NULL,
  `cmnttime` time DEFAULT NULL,
  PRIMARY KEY (`cmntid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmntid`, `blogid`, `fromid`, `comment`, `cmntdte`, `cmnttime`) VALUES
(3, 1, 'admin', 'hello', '2018-01-25', '22:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `name`, `description`) VALUES
(1, 'BCA', 'BCA'),
(2, 'BBA', 'BBA'),
(3, 'BCom', 'BCom'),
(4, 'Bsc Maths', 'Bsc Maths'),
(5, 'Msc Physics', 'Master of Science in Physics.'),
(7, 'Msc Biotechnology', 'Masters in Biotechnology');

-- --------------------------------------------------------

--
-- Table structure for table `crssubalt`
--

DROP TABLE IF EXISTS `crssubalt`;
CREATE TABLE IF NOT EXISTS `crssubalt` (
  `courseid` int(11) DEFAULT NULL,
  `subid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crssubalt`
--

INSERT INTO `crssubalt` (`courseid`, `subid`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `logid` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `password`, `role`, `status`) VALUES
('admin', '$2y$10$tlCqW3pLdmjyRnyxi26D.O4LEDddy0xM6KD5Qxi.IO54pKkD0NRcS', 'std', 0),
('principal', '$2y$10$cIFbDk4SQR82pwQ0eRksDuHIT2aEkiR.xvVRg0coTwuPRGfTH5FGi', 'prnc', 0),
('shawn_parker', '$2y$10$.8qMBTE4mQV4EA.ZMDpJO.EtbfTqmLJHm6LIUeWFhF5toDemg4QNa', 'hod', 0),
('testuser', '$2y$10$dyP5xK7gbQQ4WU5AbcgHQuaHvZ1fcoT7bhxvuYKUlIQyjJh69uYye', 'tchr', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `mailid` int(11) NOT NULL AUTO_INCREMENT,
  `fromid` varchar(50) DEFAULT NULL,
  `toid` varchar(50) DEFAULT NULL,
  `sub` varchar(100) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `attach` tinyint(1) DEFAULT NULL,
  `sdte` date DEFAULT NULL,
  `stime` time DEFAULT NULL,
  PRIMARY KEY (`mailid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mailid`, `fromid`, `toid`, `sub`, `content`, `attach`, `sdte`, `stime`) VALUES
(1, 'principal', 'admin', 'Welcome', 'Welcome to myCamous', 0, '2018-01-26', '13:50:09'),
(2, 'admin', 'principal', 'Thanks', 'Thank you so much!', 0, '2018-01-26', '13:50:15'),
(3, 'shawn_parker', 'principal', 'Thanks', 'Thank you so much!', 0, '2018-01-26', '13:50:18'),
(8, 'shawn_parker', 'principal', 'let me in', 'please let me in', 0, '2018-02-09', '17:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `stdcrsalt`
--

DROP TABLE IF EXISTS `stdcrsalt`;
CREATE TABLE IF NOT EXISTS `stdcrsalt` (
  `stdno` int(11) DEFAULT NULL,
  `yos` int(11) DEFAULT NULL,
  `courseid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdcrsalt`
--

INSERT INTO `stdcrsalt` (`stdno`, `yos`, `courseid`) VALUES
(128, 2015, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stdno` int(11) NOT NULL,
  `yos` int(11) NOT NULL,
  `logid` varchar(50) DEFAULT NULL,
  `name` varchar(35) DEFAULT NULL,
  `dp` varchar(200) DEFAULT NULL,
  `guardian` varchar(35) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mail` varchar(150) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`stdno`,`yos`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdno`, `yos`, `logid`, `name`, `dp`, `guardian`, `gender`, `address`, `mail`, `contact`, `status`) VALUES
(128, 2015, 'admin', 'Karthik Prakash', 'img/dp/admin.jpg', 'Prakash', 'male', 'Vadakkethayyil', 'karthik.prakash1998@gmail.com', '+919656266505', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `name`, `description`) VALUES
(1, 'ITC', 'Mastered in Introduction to computer.'),
(2, 'Acconting', 'Accouting with marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tchrsubalt`
--

DROP TABLE IF EXISTS `tchrsubalt`;
CREATE TABLE IF NOT EXISTS `tchrsubalt` (
  `facid` int(11) DEFAULT NULL,
  `subid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tchrsubalt`
--

INSERT INTO `tchrsubalt` (`facid`, `subid`) VALUES
(2, 2),
(120, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `facid` int(11) NOT NULL,
  `logid` varchar(50) DEFAULT NULL,
  `name` varchar(35) DEFAULT NULL,
  `dp` varchar(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mail` varchar(150) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`facid`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`facid`, `logid`, `name`, `dp`, `gender`, `address`, `mail`, `contact`, `qualification`, `designation`, `status`) VALUES
(1, 'principal', 'Pushpan', 'img/dp/default_male.jpg', 'male', 'Pushpan Villa', 'pushpu@gmail.com', '123456789', 'Phd', 'Principal', 1),
(2, 'shawn_parker', 'Shawn', 'img/dp/shawn_parker.jpg', 'male', 'Shawn Villa', 'shawn.parker@gmail.com', '+911234567890', 'Phd', 'Head of Department', 1),
(120, 'testuser', 'test', 'img/dp/testuser.jpg', 'female', 'test', 'test@test.com', '+1234567890', 'b.ed.', 'Teacher', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

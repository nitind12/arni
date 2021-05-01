-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 09:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arni_univ`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ID` int(11) NOT NULL,
  `TITLE_` varchar(200) NOT NULL,
  `BRIEF_` text NOT NULL,
  `DET_PATH` varchar(100) NOT NULL,
  `PICTURE_PATH` varchar(100) NOT NULL,
  `DATE_OF_ACTIVITY` varchar(15) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS_` tinyint(1) NOT NULL,
  `USERNAME_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alumniprofile`
--

CREATE TABLE `alumniprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `course` varchar(200) CHARACTER SET utf8 NOT NULL,
  `passout` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 NOT NULL,
  `company` varchar(200) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(200) CHARACTER SET utf8 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `hometown` varchar(200) CHARACTER SET utf8 NOT NULL,
  `suggestion` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `pic` varchar(200) CHARACTER SET utf8 NOT NULL,
  `college` varchar(10) CHARACTER SET utf8 NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `whatsappno` varchar(15) NOT NULL,
  `allowed` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'student allowed AGI to use your information for promotional purposes in any type of media',
  `username` varchar(40) NOT NULL DEFAULT 'user',
  `del_date` varchar(50) NOT NULL DEFAULT 'x'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alumniprofiledelete`
--

CREATE TABLE `alumniprofiledelete` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `course` varchar(200) CHARACTER SET utf8 NOT NULL,
  `passout` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 NOT NULL,
  `company` varchar(200) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(200) CHARACTER SET utf8 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `hometown` varchar(200) CHARACTER SET utf8 NOT NULL,
  `suggestion` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `pic` varchar(200) CHARACTER SET utf8 NOT NULL,
  `college` varchar(10) CHARACTER SET utf8 NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `whatsappno` varchar(15) NOT NULL,
  `allowed` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'student allowed AGI to use your information for promotional purposes in any type of media',
  `username` varchar(40) NOT NULL,
  `del_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `ANNOUNCEMENT` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `announcements_`
--

CREATE TABLE `announcements_` (
  `ID` int(11) DEFAULT NULL,
  `SUBJECT` varchar(200) DEFAULT NULL,
  `ANNOUNCEMENT` text DEFAULT NULL,
  `PATH_ATTACH` varchar(150) DEFAULT NULL,
  `DATE_` varchar(25) DEFAULT NULL,
  `DATE_START` varchar(25) DEFAULT NULL,
  `DATE_END` varchar(25) DEFAULT NULL,
  `TIME_` varchar(25) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `USERNAME` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bday_data`
--

CREATE TABLE `bday_data` (
  `BID` int(11) NOT NULL,
  `NAME_` varchar(100) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `PHOTO_` varchar(100) NOT NULL,
  `DOA` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` int(11) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bloglinks`
--

CREATE TABLE `bloglinks` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(250) NOT NULL,
  `LINK` text NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store blog links';

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `BR_ID` varchar(10) NOT NULL,
  `BRANCH_` varchar(250) NOT NULL,
  `CRS_ID` varchar(10) NOT NULL,
  `SEQ` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bus_route`
--

CREATE TABLE `bus_route` (
  `ID` int(11) NOT NULL,
  `ROUTE` varchar(200) NOT NULL,
  `ROUTE_NO` varchar(50) NOT NULL,
  `DRIVER` varchar(150) NOT NULL,
  `PICK_UP_POINT` varchar(200) NOT NULL,
  `PICK_UP_TIME` varchar(150) NOT NULL,
  `STUDENT_FULL` varchar(100) NOT NULL,
  `STUDENT_ONE_WAY` varchar(150) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(1) NOT NULL DEFAULT 1,
  `COLOR` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store bus stop';

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `careerid`
--

CREATE TABLE `careerid` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEG_ID` varchar(20) NOT NULL,
  `CATEGORY` varchar(150) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `collegeID` varchar(8) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `actualFee` varchar(100) NOT NULL DEFAULT '0',
  `SECURITY_FEE` varchar(100) NOT NULL DEFAULT '0',
  `ENROLLMENT_FEE` varchar(100) NOT NULL DEFAULT '0',
  `UNIV_EXAM_FEE` varchar(100) NOT NULL DEFAULT '0',
  `UNIV_SPORTS_FEE` varchar(100) NOT NULL DEFAULT '0',
  `BOOK_BANK_FEE` varchar(100) NOT NULL DEFAULT '0',
  `INSURANCE_FEE` varchar(100) NOT NULL DEFAULT '0',
  `WELFARE_FEE` varchar(100) NOT NULL DEFAULT '0',
  `DEVELOPMENT_FEE` varchar(100) NOT NULL DEFAULT '0',
  `TUITION_FEE` varchar(100) NOT NULL,
  `ACADEMICS` varchar(100) NOT NULL,
  `UNIVERSITY` varchar(100) NOT NULL,
  `CTPD_FEE` varchar(100) NOT NULL DEFAULT '0',
  `SKILL_CERTFICATION_FEE` varchar(100) NOT NULL DEFAULT '0',
  `HOSTEL` varchar(100) NOT NULL,
  `intake` int(11) NOT NULL,
  `printableAbrv` varchar(150) NOT NULL,
  `stdate` varchar(50) NOT NULL,
  `eligibility` int(11) NOT NULL,
  `SORTCRS` int(11) NOT NULL DEFAULT 0,
  `DELCRS` varchar(1) NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CRS_ID` varchar(10) NOT NULL,
  `COURSE_` varchar(250) NOT NULL,
  `UNIV_ID` int(11) NOT NULL,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `DEPT_ID` varchar(10) NOT NULL,
  `DEPARTMENT` varchar(250) NOT NULL,
  `SEQ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `ID` int(11) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `distribute_login`
--

CREATE TABLE `distribute_login` (
  `username` varchar(40) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `DWNLD_ID` int(11) NOT NULL,
  `TITLE` varchar(250) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PATH_` varchar(500) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `USER_STATUS` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL COMMENT '0 or 1',
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expertviews`
--

CREATE TABLE `expertviews` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `DESIGNATION` varchar(250) NOT NULL,
  `PLACE` varchar(250) NOT NULL,
  `PHOTO` varchar(250) NOT NULL,
  `VIEWS` text NOT NULL,
  `ATTACH` varchar(250) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FAC_ID` int(11) NOT NULL,
  `FACULTY_NAME` varchar(255) NOT NULL,
  `DOJ` varchar(20) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `SEQ` varchar(11) NOT NULL,
  `DESIG` varchar(50) NOT NULL,
  `DD` varchar(5) CHARACTER SET utf8 NOT NULL,
  `MM` varchar(5) CHARACTER SET utf8 NOT NULL,
  `YY` varchar(5) CHARACTER SET utf8 NOT NULL,
  `LAST_QUALIF` varchar(250) CHARACTER SET utf8 NOT NULL,
  `LQ_YEAR` varchar(5) CHARACTER SET utf8 NOT NULL,
  `ANY_ACHIEVE` text CHARACTER SET utf8 NOT NULL,
  `PHOTO_` varchar(500) CHARACTER SET utf8 NOT NULL,
  `RESUME` varchar(500) CHARACTER SET utf8 NOT NULL,
  `SUMMARY` text CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MOBILE` varchar(10) CHARACTER SET utf8 NOT NULL,
  `USERNAME` varchar(250) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_profile`
--

CREATE TABLE `faculty_profile` (
  `profileID` int(10) NOT NULL,
  `facultyPic` varchar(20) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dob` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `qualification` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `teachingExp` varchar(200) CHARACTER SET utf8 NOT NULL,
  `researchExp` varchar(200) CHARACTER SET utf8 NOT NULL,
  `industryExp` varchar(200) CHARACTER SET utf8 NOT NULL,
  `otherExp` varchar(500) CHARACTER SET utf8 NOT NULL,
  `specialization` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `graduateSubject` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `pgSubject` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `researchBachelors` varchar(20) CHARACTER SET utf8 NOT NULL,
  `researchMasters` varchar(20) CHARACTER SET utf8 NOT NULL,
  `researchPhD` varchar(20) CHARACTER SET utf8 NOT NULL,
  `conference_seminar` varchar(20) CHARACTER SET utf8 NOT NULL,
  `project` varchar(20) CHARACTER SET utf8 NOT NULL,
  `publications` varchar(20) CHARACTER SET utf8 NOT NULL,
  `emailID` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GL_ID` int(11) NOT NULL,
  `PHOTO_` varchar(250) NOT NULL,
  `TITLE_` varchar(250) NOT NULL,
  `WIDTH_` int(11) NOT NULL,
  `HEIGHT_` int(11) NOT NULL,
  `CATEG_ID` int(11) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `CATEG_ID` int(11) NOT NULL,
  `CATEGORY` varchar(45) NOT NULL,
  `DESC` varchar(500) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `PIC` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME_` varchar(150) NOT NULL,
  `PASSWORD_` varchar(120) NOT NULL,
  `USER_STATUS` varchar(15) NOT NULL,
  `DEPT_` varchar(200) NOT NULL DEFAULT 'all',
  `COURSE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `USER_STATUS`, `DEPT_`, `COURSE`) VALUES
('diraihm', '123456', 'dir', 'Faculty of Hotel Management', 'FHM'),
('diraits', '123456', 'dir', 'Faculty of Technology &amp; Sciences', 'FTS'),
('dirmba', 'fcbm$#123', 'dir', 'Faculty of Business Management', 'FCBM'),
('dirmca', 'karan', 'dir', 'Faculty of Computer Applications', 'FCSA'),
('exam', 'agiexam@1234', 'exam', 'Amrapali Group of Institutes', 'AGI'),
('naveen', 'naveen786$#', 'adm', 'Amrapali Group of Institutes', 'AGI'),
('nitin', '123', 'adm', 'Amrapali Group of Institutes', 'AGI'),
('office', '123', 'ofc', 'Amrapali Group of Institutes', 'AGI'),
('principalaips', 'ppl$#123', 'dir', 'Faculty of Pharmacy', 'FPS'),
('rahul', 'alumniuser', 'dm', 'Amrapali Group of Institutes', 'AGI');

-- --------------------------------------------------------

--
-- Table structure for table `menu_1`
--

CREATE TABLE `menu_1` (
  `ID_` int(11) NOT NULL,
  `PRE_ICON` varchar(150) NOT NULL,
  `MENU` varchar(30) NOT NULL,
  `PATH_` varchar(300) NOT NULL,
  `PRIORITY_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_1`
--

INSERT INTO `menu_1` (`ID_`, `PRE_ICON`, `MENU`, `PATH_`, `PRIORITY_`) VALUES
(1, 'fa fa-dropbox fa-fw', 'Dashboard', 'dashboard', 1),
(2, 'fa fa-user fa-fw', 'Faculty Profile', 'faculty', 2),
(3, 'fa fa-camera fa-fw', 'Manage Activities', 'activity', 3),
(4, 'fa fa-camera fa-fw', 'News', 'newsevents', 4),
(5, 'fa fa-camera fa-fw', 'Upcoming Events', 'upcoming', 5),
(6, 'fa fa-camera fa-fw', 'Announcements', 'announcements', 6),
(7, 'fa fa-user fa-fw', 'Faculty Sequence', 'faculty/sequence', 2),
(8, 'fa fa-user fa-fw', 'Gallery', 'gallery', 7),
(9, 'fa fa-user fa-fw', 'Blogs', 'blog', 8),
(10, 'fa fa-user fa-fw', 'Notices', 'notices', 9);

-- --------------------------------------------------------

--
-- Table structure for table `menu_user_status`
--

CREATE TABLE `menu_user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_user_status`
--

INSERT INTO `menu_user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Admin'),
('dir', 'Director'),
('dm', 'Data Manager'),
('exam', 'Exam'),
('fc', 'Faculty'),
('ofc', 'Main Office');

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `NEWS` text NOT NULL,
  `BLOG_URL` varchar(500) NOT NULL DEFAULT 'x',
  `PATH_ATTACH` varchar(150) NOT NULL,
  `FONTJI` varchar(250) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `NID` int(11) NOT NULL,
  `TITLE_` varchar(250) NOT NULL,
  `VOLUME_` int(11) NOT NULL COMMENT 'Means edition (i.e 1,2,3,4...n) of newsletter',
  `COVER_` varchar(250) NOT NULL,
  `PATH_` varchar(250) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `YEAR_` varchar(5) NOT NULL,
  `USERNAME_` varchar(150) NOT NULL,
  `STATUS_` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `ANNOUNCEMENT` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `onlineregistration`
--

CREATE TABLE `onlineregistration` (
  `regID` int(100) NOT NULL,
  `course` varchar(50) NOT NULL DEFAULT '-',
  `name` varchar(50) NOT NULL DEFAULT '-',
  `dob` varchar(50) NOT NULL DEFAULT '-',
  `fatherName` varchar(50) NOT NULL DEFAULT '-',
  `motherName` varchar(50) NOT NULL DEFAULT '-',
  `gender` varchar(1) NOT NULL DEFAULT '-',
  `nationality` varchar(50) NOT NULL DEFAULT '-',
  `caste` varchar(50) NOT NULL DEFAULT '-',
  `hrCategory` varchar(50) NOT NULL DEFAULT '-',
  `perAddress` varchar(150) DEFAULT '-',
  `perPhone` varchar(15) DEFAULT '-',
  `corAddress` varchar(150) NOT NULL DEFAULT '-',
  `corPhone` varchar(15) NOT NULL DEFAULT '-',
  `locAddress` varchar(150) NOT NULL DEFAULT '-',
  `locPhone` varchar(15) NOT NULL DEFAULT '-',
  `emailID` varchar(50) NOT NULL DEFAULT '-',
  `clgLastAttended` varchar(50) DEFAULT '-',
  `highInstitute` varchar(50) NOT NULL DEFAULT '-',
  `highUni` varchar(50) NOT NULL DEFAULT '-',
  `highYear` varchar(10) NOT NULL DEFAULT '-',
  `highSubject` varchar(100) NOT NULL DEFAULT '-',
  `highMarks` varchar(10) NOT NULL DEFAULT '-',
  `interInstitute` varchar(50) NOT NULL DEFAULT '-',
  `interUni` varchar(50) NOT NULL DEFAULT '-',
  `interYear` varchar(10) NOT NULL DEFAULT '-',
  `interSubject` varchar(100) NOT NULL DEFAULT '-',
  `interMarks` varchar(10) NOT NULL DEFAULT '-',
  `gradInstitute` varchar(50) NOT NULL DEFAULT '-',
  `gradUni` varchar(50) NOT NULL DEFAULT '-',
  `gradYear` varchar(10) NOT NULL DEFAULT '-',
  `gradSubject` varchar(100) NOT NULL DEFAULT '-',
  `gradMarks` varchar(10) NOT NULL DEFAULT '-',
  `otherInstitute` varchar(50) NOT NULL DEFAULT '-',
  `otherUni` varchar(50) NOT NULL DEFAULT '-',
  `otherYear` varchar(10) NOT NULL DEFAULT '-',
  `otherSubject` varchar(100) NOT NULL DEFAULT '-',
  `otherMarks` varchar(10) NOT NULL DEFAULT '-',
  `achievement` varchar(150) NOT NULL DEFAULT '-',
  `draftNo` varchar(20) NOT NULL DEFAULT '-',
  `draftDate` varchar(20) NOT NULL DEFAULT '-',
  `draftBank` varchar(20) NOT NULL DEFAULT '-',
  `confirm` int(1) NOT NULL DEFAULT 0,
  `regDate` date DEFAULT NULL,
  `del_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `onlineregistrationold`
--

CREATE TABLE `onlineregistrationold` (
  `regID` int(100) NOT NULL,
  `course` varchar(50) NOT NULL DEFAULT '-',
  `name` varchar(50) NOT NULL DEFAULT '-',
  `dob` varchar(50) NOT NULL DEFAULT '-',
  `fatherName` varchar(50) NOT NULL DEFAULT '-',
  `motherName` varchar(50) NOT NULL DEFAULT '-',
  `gender` varchar(1) NOT NULL DEFAULT '-',
  `nationality` varchar(50) NOT NULL DEFAULT '-',
  `caste` varchar(50) NOT NULL DEFAULT '-',
  `hrCategory` varchar(50) NOT NULL DEFAULT '-',
  `perAddress` varchar(150) DEFAULT '-',
  `perPhone` varchar(15) DEFAULT '-',
  `corAddress` varchar(150) NOT NULL DEFAULT '-',
  `corPhone` varchar(15) NOT NULL DEFAULT '-',
  `locAddress` varchar(150) NOT NULL DEFAULT '-',
  `locPhone` varchar(15) NOT NULL DEFAULT '-',
  `emailID` varchar(50) NOT NULL DEFAULT '-',
  `clgLastAttended` varchar(50) DEFAULT '-',
  `highInstitute` varchar(50) NOT NULL DEFAULT '-',
  `highUni` varchar(50) NOT NULL DEFAULT '-',
  `highYear` varchar(10) NOT NULL DEFAULT '-',
  `highSubject` varchar(100) NOT NULL DEFAULT '-',
  `highMarks` varchar(10) NOT NULL DEFAULT '-',
  `interInstitute` varchar(50) NOT NULL DEFAULT '-',
  `interUni` varchar(50) NOT NULL DEFAULT '-',
  `interYear` varchar(10) NOT NULL DEFAULT '-',
  `interSubject` varchar(100) NOT NULL DEFAULT '-',
  `interMarks` varchar(10) NOT NULL DEFAULT '-',
  `gradInstitute` varchar(50) NOT NULL DEFAULT '-',
  `gradUni` varchar(50) NOT NULL DEFAULT '-',
  `gradYear` varchar(10) NOT NULL DEFAULT '-',
  `gradSubject` varchar(100) NOT NULL DEFAULT '-',
  `gradMarks` varchar(10) NOT NULL DEFAULT '-',
  `otherInstitute` varchar(50) NOT NULL DEFAULT '-',
  `otherUni` varchar(50) NOT NULL DEFAULT '-',
  `otherYear` varchar(10) NOT NULL DEFAULT '-',
  `otherSubject` varchar(100) NOT NULL DEFAULT '-',
  `otherMarks` varchar(10) NOT NULL DEFAULT '-',
  `achievement` varchar(150) NOT NULL DEFAULT '-',
  `draftNo` varchar(20) NOT NULL DEFAULT '-',
  `draftDate` varchar(20) NOT NULL DEFAULT '-',
  `draftBank` varchar(20) NOT NULL DEFAULT '-',
  `confirm` int(1) NOT NULL DEFAULT 0,
  `regDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `onlineregistration_log`
--

CREATE TABLE `onlineregistration_log` (
  `regID` int(100) NOT NULL,
  `course` varchar(50) NOT NULL DEFAULT '-',
  `name` varchar(50) NOT NULL DEFAULT '-',
  `dob` varchar(50) NOT NULL DEFAULT '-',
  `fatherName` varchar(50) NOT NULL DEFAULT '-',
  `motherName` varchar(50) NOT NULL DEFAULT '-',
  `gender` varchar(1) NOT NULL DEFAULT '-',
  `nationality` varchar(50) NOT NULL DEFAULT '-',
  `caste` varchar(50) NOT NULL DEFAULT '-',
  `hrCategory` varchar(50) NOT NULL DEFAULT '-',
  `perAddress` varchar(150) DEFAULT '-',
  `perPhone` varchar(15) DEFAULT '-',
  `corAddress` varchar(150) NOT NULL DEFAULT '-',
  `corPhone` varchar(15) NOT NULL DEFAULT '-',
  `locAddress` varchar(150) NOT NULL DEFAULT '-',
  `locPhone` varchar(15) NOT NULL DEFAULT '-',
  `emailID` varchar(50) NOT NULL DEFAULT '-',
  `clgLastAttended` varchar(50) DEFAULT '-',
  `highInstitute` varchar(50) NOT NULL DEFAULT '-',
  `highUni` varchar(50) NOT NULL DEFAULT '-',
  `highYear` varchar(10) NOT NULL DEFAULT '-',
  `highSubject` varchar(100) NOT NULL DEFAULT '-',
  `highMarks` varchar(10) NOT NULL DEFAULT '-',
  `interInstitute` varchar(50) NOT NULL DEFAULT '-',
  `interUni` varchar(50) NOT NULL DEFAULT '-',
  `interYear` varchar(10) NOT NULL DEFAULT '-',
  `interSubject` varchar(100) NOT NULL DEFAULT '-',
  `interMarks` varchar(10) NOT NULL DEFAULT '-',
  `gradInstitute` varchar(50) NOT NULL DEFAULT '-',
  `gradUni` varchar(50) NOT NULL DEFAULT '-',
  `gradYear` varchar(10) NOT NULL DEFAULT '-',
  `gradSubject` varchar(100) NOT NULL DEFAULT '-',
  `gradMarks` varchar(10) NOT NULL DEFAULT '-',
  `otherInstitute` varchar(50) NOT NULL DEFAULT '-',
  `otherUni` varchar(50) NOT NULL DEFAULT '-',
  `otherYear` varchar(10) NOT NULL DEFAULT '-',
  `otherSubject` varchar(100) NOT NULL DEFAULT '-',
  `otherMarks` varchar(10) NOT NULL DEFAULT '-',
  `achievement` varchar(150) NOT NULL DEFAULT '-',
  `draftNo` varchar(20) NOT NULL DEFAULT '-',
  `draftDate` varchar(20) NOT NULL DEFAULT '-',
  `draftBank` varchar(20) NOT NULL DEFAULT '-',
  `confirm` int(1) NOT NULL DEFAULT 0,
  `regDate` date DEFAULT NULL,
  `del_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `onlineregistration_temp`
--

CREATE TABLE `onlineregistration_temp` (
  `regID` int(100) NOT NULL,
  `course` varchar(50) NOT NULL DEFAULT '-',
  `name` varchar(50) NOT NULL DEFAULT '-',
  `dob` varchar(50) NOT NULL DEFAULT '-',
  `fatherName` varchar(50) NOT NULL DEFAULT '-',
  `motherName` varchar(50) NOT NULL DEFAULT '-',
  `gender` varchar(1) NOT NULL DEFAULT '-',
  `nationality` varchar(50) NOT NULL DEFAULT '-',
  `caste` varchar(50) NOT NULL DEFAULT '-',
  `hrCategory` varchar(50) NOT NULL DEFAULT '-',
  `perAddress` varchar(150) DEFAULT '-',
  `perPhone` varchar(15) DEFAULT '-',
  `corAddress` varchar(150) NOT NULL DEFAULT '-',
  `corPhone` varchar(15) NOT NULL DEFAULT '-',
  `locAddress` varchar(150) NOT NULL DEFAULT '-',
  `locPhone` varchar(15) NOT NULL DEFAULT '-',
  `emailID` varchar(50) NOT NULL DEFAULT '-',
  `clgLastAttended` varchar(50) DEFAULT '-',
  `highInstitute` varchar(50) NOT NULL DEFAULT '-',
  `highUni` varchar(50) NOT NULL DEFAULT '-',
  `highYear` varchar(10) NOT NULL DEFAULT '-',
  `highSubject` varchar(100) NOT NULL DEFAULT '-',
  `highMarks` varchar(10) NOT NULL DEFAULT '-',
  `interInstitute` varchar(50) NOT NULL DEFAULT '-',
  `interUni` varchar(50) NOT NULL DEFAULT '-',
  `interYear` varchar(10) NOT NULL DEFAULT '-',
  `interSubject` varchar(100) NOT NULL DEFAULT '-',
  `interMarks` varchar(10) NOT NULL DEFAULT '-',
  `gradInstitute` varchar(50) NOT NULL DEFAULT '-',
  `gradUni` varchar(50) NOT NULL DEFAULT '-',
  `gradYear` varchar(10) NOT NULL DEFAULT '-',
  `gradSubject` varchar(100) NOT NULL DEFAULT '-',
  `gradMarks` varchar(10) NOT NULL DEFAULT '-',
  `otherInstitute` varchar(50) NOT NULL DEFAULT '-',
  `otherUni` varchar(50) NOT NULL DEFAULT '-',
  `otherYear` varchar(10) NOT NULL DEFAULT '-',
  `otherSubject` varchar(100) NOT NULL DEFAULT '-',
  `otherMarks` varchar(10) NOT NULL DEFAULT '-',
  `achievement` varchar(150) NOT NULL DEFAULT '-',
  `draftNo` varchar(20) NOT NULL DEFAULT '-',
  `draftDate` varchar(20) NOT NULL DEFAULT '-',
  `draftBank` varchar(20) NOT NULL DEFAULT '-',
  `confirm` int(1) NOT NULL DEFAULT 0,
  `regDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `placement_data`
--

CREATE TABLE `placement_data` (
  `ID` int(11) NOT NULL,
  `COMPANY` varchar(250) NOT NULL,
  `COURSE` int(11) NOT NULL,
  `DEPTID` varchar(10) NOT NULL,
  `PACKAGE` varchar(25) NOT NULL,
  `DESIG_PROFILE` varchar(150) NOT NULL,
  `STUDENT_PALCED` varchar(150) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `MONTH` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `placement_data_course_wise`
-- (See below for the actual view)
--
CREATE TABLE `placement_data_course_wise` (
`ID` int(11)
,`COMPANY` varchar(250)
,`COURSE` int(11)
,`PACKAGE` varchar(25)
,`DESIG_PROFILE` varchar(150)
,`STUDENT_PALCED` varchar(150)
,`YEAR` varchar(10)
,`MONTH` varchar(15)
,`CRS_NAME` varchar(250)
,`DEPARTMENT` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `socialenquiry`
--

CREATE TABLE `socialenquiry` (
  `ENQID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `CONTACT` varchar(150) NOT NULL,
  `CITY` varchar(100) NOT NULL,
  `COURSE_FOR` varchar(25) NOT NULL,
  `ENQUIRY` text NOT NULL,
  `TALK_TO_EXPERT` varchar(10) NOT NULL COMMENT 'YES OR NO',
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` varchar(10) NOT NULL COMMENT 'open or close',
  `U_CODE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `socialenquiry_course_expert`
--

CREATE TABLE `socialenquiry_course_expert` (
  `EXPERTID` int(11) NOT NULL,
  `EXPERT` varchar(150) NOT NULL,
  `CONTACT` varchar(24) NOT NULL,
  `COURSE` varchar(500) NOT NULL,
  `STATUS_` tinyint(1) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `socialenquiry_followup`
--

CREATE TABLE `socialenquiry_followup` (
  `FID` int(11) NOT NULL,
  `ENQID` int(11) NOT NULL,
  `FOLLOWUP` text NOT NULL,
  `BY_` varchar(150) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `ID` int(11) NOT NULL,
  `NAME_` text NOT NULL,
  `SM_LINK` text NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='used to promote social media links';

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `ID` int(11) NOT NULL,
  `COURSE_APPLIED` varchar(50) CHARACTER SET utf8 NOT NULL,
  `FST_NAME` varchar(50) NOT NULL,
  `SCND_NAME` varchar(50) NOT NULL,
  `THRD_NAME` varchar(50) NOT NULL,
  `FATHER_` varchar(150) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `CATEGORY` varchar(50) NOT NULL,
  `PH_MOB` varchar(50) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `ADDRESS` text NOT NULL,
  `LAST_QUALIF` varchar(200) NOT NULL,
  `BOARD_UNIV` varchar(250) NOT NULL,
  `SUBJECTS` varchar(500) NOT NULL,
  `YOP` varchar(25) NOT NULL,
  `PERCENTAGE` varchar(500) NOT NULL,
  `LOAN_REQ` varchar(3) NOT NULL,
  `DATE_` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `profileID` int(10) NOT NULL,
  `studentPic` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Resume` varchar(400) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fatherName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dob` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `emailID` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 NOT NULL,
  `parentMobile` varchar(15) CHARACTER SET utf8 NOT NULL,
  `careerObjective` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `skills` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `summerTraining` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `PgCourse` varchar(20) CHARACTER SET utf8 NOT NULL,
  `PgSpecial` varchar(20) CHARACTER SET utf8 NOT NULL,
  `PgPercentage` varchar(10) CHARACTER SET utf8 NOT NULL,
  `PgPass` varchar(10) CHARACTER SET utf8 NOT NULL,
  `PgBacklog` varchar(500) CHARACTER SET utf8 NOT NULL,
  `gCourse` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gSpecial` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gPercentage` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gPass` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gBacklog` varchar(500) CHARACTER SET utf8 NOT NULL,
  `InterBorad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `InterPass` varchar(20) CHARACTER SET utf8 NOT NULL,
  `InterPercentage` varchar(20) CHARACTER SET utf8 NOT NULL,
  `HsBorad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `HsPass` varchar(20) CHARACTER SET utf8 NOT NULL,
  `HsPercentage` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(250) NOT NULL,
  `PATH_` varchar(500) NOT NULL,
  `STATUS_` int(11) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `CRS_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thoughts`
--

CREATE TABLE `thoughts` (
  `ID` int(11) NOT NULL,
  `THOUGHT` text NOT NULL,
  `AUTHOR` varchar(100) NOT NULL,
  `FONT_SIZE` int(11) NOT NULL,
  `DAY_` varchar(25) NOT NULL,
  `DATE_` int(11) NOT NULL,
  `MONTH_` int(11) NOT NULL,
  `YEAR_` int(11) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `UPCOMING_EVENT` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `DATE_START` varchar(25) NOT NULL,
  `DATE_END` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`ID`, `SUBJECT`, `UPCOMING_EVENT`, `PATH_ATTACH`, `DATE_`, `DATE_START`, `DATE_END`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(5, '<a href=\"competition\" target=\"_blank\">CONTENT WRITING COMPETITION</a>', 'Content Submission Date <h3 [removed]>15<sup>th</sup> January, 2018</h3>\r\n<br><br>\r\n<a href=\"competition\" target=\"_blank\">&lt;button class=\"btn btn-primary\"&gt;click here for detail&lt;/button&gt;&lt;/a>', 'x', '01/01/2018', '2018-01-01', '2018-01-15', '09:48:48pm', 1, 'nitin'),
(6, 'ABHYUDAYA 2018', '13th Annual ‘NATIONAL HOSPITALITY TALENT HUNT 2018’, “ABHYUDAYA” On February 20th and 21st with exciting activities.', '6.pdf', '24/01/2018', '2018-01-24', '2018-02-21', '10:50:09am', 0, 'dirAIHM'),
(8, 'Adhyayan Case Studies 2018', 'Case Studies (1 to 11)', '8.pdf', '13/02/2018', '2018-02-13', '2018-02-20', '03:52:19pm', 0, 'dirAIHM'),
(9, 'Management Games', '\"Management Games\" will be organized by Faculty of Commerce & Business Management on Feb 15th 2018', 'x', '15/02/2018', '2018-02-15', '2018-02-16', '03:33:02pm', 1, 'dirmba'),
(10, 'IMPULSE-2018', 'Annual Tech-Fest of Faculty of Computer Science & Applications will be organized on 17th March 2018', '10.jpg', '07/03/2018', '2018-03-07', '2018-03-19', '09:49:39am', 1, 'nitin'),
(11, ' Workshop on : Statistical Package for the Social Sciences (SPSS) will be organised by FCBM, AGI', 'Faculty of Commerce and Business Management is going to organize a workshop on Statistical Package for the Social Sciences (SPSS) with a view to impart practical training in Research Methodology. ', '11.pdf', '22/03/2018', '2018-03-22', '2018-03-24', '11:54:58am', 1, 'dirmba'),
(12, 'PRABANDHAN - 2018 \" Annual Management Fest \"', 'Faculty of Commerce and Business Management proudly announce to organize PRABANDHAN 2018, Annual management fest that will be held on 7 th April 2018.', '12.jpg', '22/03/2018', '2018-03-22', '2018-04-07', '02:14:33pm', 1, 'dirmba'),
(13, 'Workshop on \"Hybrid App Development\"', 'Faculty of Computer Science & Applications is organizing a \"Workshop on Hybrid App Development\" on 21st-April-2018 for B.Sc. (IT) Final Yr, BCA Final Yr & B.Sc. (CS) final yr students. <a href=\"https://www.amrapali.ac.in/workshop\" target=\"_blank\"><b>more...</b></a>', 'x', '09/04/2018', '2018-04-09', '2018-04-21', '07:52:33pm', 1, 'nitin'),
(15, ' Farewell for the Batch (2015-18) of B.Com(Hons.)', 'Faculty of Commerce & Business Management is going to organize a farewell party for the students of B.Com(Hons.) batch (2015-18) on 18th May, 2018.', '15.JPG', '14/05/2018', '2018-05-14', '2018-05-19', '08:55:01am', 1, 'dirmba'),
(16, 'Farewell of students from BBA Batch (2015-18)', 'Faculty of Commerce & Business Management is going to organize a farewell party for the students of BBA batch (2015-18) on 16th May, 2018. ', '16.jpg', '14/05/2018', '2018-05-14', '2018-05-19', '04:41:48pm', 1, 'dirmba'),
(17, '<h4>Late Smt. Kamla Dhingra Memorial Meet 2018</h4>', 'Inter-School Competition <br>\r\nInter-Collegiate Competition <br><br>\r\n<a href=\"https://www.amrapali.ac.in/index.php/Agi/kdmm2018\">KDMM 2018 - Click Here for Detail</a>', 'x', '09/10/2018', '2018-10-09', '2018-10-26', '09:18:15am', 1, 'nitin'),
(18, 'AVAHAN 2019', 'The 6<sup>th</sup> AVAHAN- The International Conference at Amrapali Institute of Hotel Management will be help on 1<sup>st</sup>-2<sup>nd</sup> February,2019. For more detail <a href=\'https://www.amrapali.ac.in/assets/avahan/AVAHAN 2019 Brochure.pdf\' target=\'_blank\'>click here</a>', '18.pdf', '19/12/2018', '2018-12-19', '2019-02-03', '10:15:23am', 1, 'nitin'),
(19, 'ALUMNITE ', 'FCBM Alumni Meet has been scheduled on 25th January 2019. We expect alumni of all batches to participate in the Alumni Meet and to make it successful by your benign presence.', '19.jpg', '07/01/2019', '2019-01-07', '2019-01-31', '03:36:03pm', 1, 'dirmba'),
(20, 'ABHYUDAYA - 2019', 'The 14th National Hospitality Talent Hunt is going to be held on 22nd and 23rd February 2019.', '20.pdf', '05/02/2019', '2019-02-05', '2019-02-24', '03:43:42pm', 0, 'dirAIHM'),
(21, 'SPANDAN 2019', 'AGI Annual fest \"SPANDAN\" 2019<br>\r\n<b>Carnival</b>: 27<sup>th</sup>-Feb-2019<br>\r\n<b>Annual Foundation Day</b>: 28<sup>th</sup>-Feb-2019<br>\r\n<a href=\"https://spandan2019.amrapali.ac.in\" target=\"_blank\" class=\"attach\">Click for detail</a>', 'x', '01/02/2019', '2019-02-18', '2019-03-02', '09:56:41am', 1, 'nitin'),
(22, 'WORKSHOP', 'Cloud Computing & Virtual World<br>\r\n<b>Organizer</b>: Faculty of Technology & Sciences<br>\r\n<b>Date</b>: 11<sup>th</sup>-March-2019<br><br>\r\n<a href=\"https://www.amrapali.ac.in/workshop\" target=\"_blank\" class=\"attach\">Click for detail & Registration</a>', 'x', '26/02/2019', '2019-02-26', '2019-03-13', '12:49:37pm', 1, 'nitin'),
(23, 'SANDHAAN 2019', 'Annual Tech Fest - sandhan-2019.<br>\r\n<b>Organizer</b>: Faculty of Technology & Sciences<br>\r\n<b>Date</b>: 06<sup>th</sup>-April-2019<br><br>\r\n<a href=\"https://www.amrapali.ac.in/sandhaan\" target=\"_blank\" class=\"attach\">Click for detail & Registration</a>', 'x', '10/03/2019', '2019-03-10', '2019-04-07', '01:29:43pm', 1, 'nitin'),
(24, 'PRABANDHAN 2019', 'Annual Management Fest\r\n\r\nOrganizer- Faculty of Commerce & Business & Management\r\n\r\nDate- 16th March 2019', '24.jpg', '13/03/2019', '2019-03-13', '2019-03-31', '11:45:12am', 1, 'dirmba'),
(25, 'International Yoga Day 21st-June at 6 am', 'Amrapali Group of Institutes is organizing International yoga day at its own place, which is conducted by Adiyoga Foundation on 21st-Jun at 6 am. ', '25.jpg', '04/06/2019', '2019-06-04', '2019-06-21', '06:03:00am', 1, 'nitin'),
(26, 'Register for International Yoga Day', 'International Yoga Day is being celebrated at Amrapali Group of Institutes, Haldwani on 21st June 2019. During this a Yoga Wellness Session is being organized by Adiyog Foundation at the sparkling green, pollution free campus of Amrapali Group of Institutes from 6 am onwards. Participants are requested to provide their details to Register. <a href=\"https://forms.gle/JpPdnZQAvn9dR27A8\" target=\"_blank\">Register here</a>', 'x', '04/06/2019', '2019-06-04', '2019-06-20', '04:35:51pm', 0, 'nitin'),
(27, 'IOT Workshop 2019', 'One Day Workshop on IOT (Internet of Things) with Python is being organized by Faculty of Technology &amp; Computer Applications on 14th-sep-2019.', '27.jpg', '11/09/2019', '2019-09-11', '2019-09-14', '03:23:47pm', 0, 'nitin'),
(28, 'KDMM 2019', 'Late Smt. Kamla Dhingra Memorial Meet 2019 (Quest for the best) is being organized on 12th of October, 2019.<br><a href=\"https://amrapali.ac.in/index.php/agi/kdmm2019\" target=\"_blank\" class=\"btn btn-danger\">Click for details</a>', 'x', '22/09/2019', '2019-09-22', '2019-10-12', '05:17:33pm', 1, 'nitin'),
(29, 'FCBM participating in AIWMI- 3rd National Competition - Credit Research Challenge 2020', 'FCBM students of MBA- 1st Year and MBA 2nd year are participating in the 3rd National Competition - Credit Research Challenge 2020 organized  by AIWMI. ', '29.jpg', '24/12/2019', '2019-12-24', '2020-01-20', '12:20:16pm', 1, 'dirmba'),
(30, 'Abhyudaya-2020', 'The 15th National Hospitality Talent Hunt is going to be held on 18th and 19th February 2020.', 'x', '11/02/2020', '2020-02-11', '2020-02-20', '03:28:26pm', 1, 'dirAIHM'),
(31, 'Abhyudaya-2020', 'The 15th National Hospitality Talent Hunt is going to be held on 18th and 19th February 2020. ', 'x', '11/02/2020', '2020-02-11', '2020-02-20', '03:34:38pm', 1, 'dirAIHM');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_`
--

CREATE TABLE `upcoming_` (
  `ID` int(11) DEFAULT NULL,
  `SUBJECT` varchar(200) DEFAULT NULL,
  `UPCOMING_EVENT` text DEFAULT NULL,
  `PATH_ATTACH` varchar(150) DEFAULT NULL,
  `DATE_` varchar(25) DEFAULT NULL,
  `DATE_START` varchar(25) DEFAULT NULL,
  `DATE_END` varchar(25) DEFAULT NULL,
  `TIME_` varchar(25) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `USERNAME` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `userID` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `emailID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `contactNo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Requirement` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `ID` int(11) NOT NULL,
  `MENU` int(11) NOT NULL,
  `USER_` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`ID`, `MENU`, `USER_`) VALUES
(1, 1, 'adm'),
(2, 2, 'adm'),
(3, 3, 'adm'),
(4, 4, 'adm'),
(5, 5, 'adm'),
(6, 6, 'adm'),
(7, 1, 'dir'),
(8, 2, 'dir'),
(9, 3, 'dir'),
(10, 4, 'dir'),
(12, 1, 'ofc'),
(13, 6, 'ofc'),
(14, 7, 'adm'),
(15, 7, 'dir'),
(16, 8, 'adm'),
(17, 8, 'dm'),
(18, 1, 'dm'),
(19, 9, 'adm'),
(20, 9, 'dm'),
(21, 10, 'adm'),
(22, 10, 'exam');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Administrator'),
('dir', 'Director'),
('dm', 'Data Manager'),
('exam', 'exam'),
('usr', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `vol_college`
--

CREATE TABLE `vol_college` (
  `CLGCODE` varchar(15) NOT NULL,
  `CLG_NAME` varchar(200) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(2) NOT NULL DEFAULT 1,
  `USERNAME` varchar(20) NOT NULL DEFAULT 'nitin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store colleges';

-- --------------------------------------------------------

--
-- Table structure for table `vol_committee`
--

CREATE TABLE `vol_committee` (
  `CMTID` int(11) NOT NULL,
  `C_NAME` varchar(50) NOT NULL,
  `EVENTID` varchar(15) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(1) NOT NULL DEFAULT 1,
  `USERNAME` varchar(40) NOT NULL DEFAULT 'nitin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store the committees';

-- --------------------------------------------------------

--
-- Table structure for table `vol_course`
--

CREATE TABLE `vol_course` (
  `COURSECODE` varchar(15) NOT NULL,
  `CRS_NAME` varchar(200) NOT NULL,
  `DURATION` int(5) NOT NULL,
  `UNIT` varchar(5) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(2) NOT NULL DEFAULT 1,
  `USERNAME` varchar(40) NOT NULL DEFAULT 'nitin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='USED TO STORE COURSE';

-- --------------------------------------------------------

--
-- Table structure for table `vol_events`
--

CREATE TABLE `vol_events` (
  `EVENTID` varchar(15) NOT NULL,
  `NAME_` varchar(50) NOT NULL,
  `DESC_` text NOT NULL,
  `STATUS` tinyint(2) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `USERNAME` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store events';

-- --------------------------------------------------------

--
-- Table structure for table `vol_position`
--

CREATE TABLE `vol_position` (
  `POSID` int(11) NOT NULL,
  `P_NAME` varchar(60) NOT NULL,
  `EVENTID` varchar(15) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(1) NOT NULL DEFAULT 1,
  `USERNAME` varchar(40) NOT NULL DEFAULT 'nitin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store committee positions';

-- --------------------------------------------------------

--
-- Table structure for table `vol_volunteers`
--

CREATE TABLE `vol_volunteers` (
  `REGID` int(11) NOT NULL,
  `NAME_` varchar(150) NOT NULL,
  `CLG_CODE` varchar(15) NOT NULL,
  `CRS_CODE` varchar(15) NOT NULL,
  `EVENTID` varchar(15) NOT NULL,
  `CMTEE_ID` int(11) NOT NULL,
  `POSTN_ID` int(11) NOT NULL,
  `MOB` varchar(25) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `STATUS` tinyint(2) NOT NULL DEFAULT 1,
  `DATE_` timestamp NOT NULL DEFAULT current_timestamp(),
  `USERNAME` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='used to store the voluteers';

-- --------------------------------------------------------

--
-- Stand-in structure for view `vol_voluteersdata`
-- (See below for the actual view)
--
CREATE TABLE `vol_voluteersdata` (
`REGID` int(11)
,`NAME_` varchar(150)
,`CLG_CODE` varchar(15)
,`CRS_CODE` varchar(15)
,`EVENTID` varchar(15)
,`CMTEE_ID` int(11)
,`POSTN_ID` int(11)
,`MOB` varchar(25)
,`EMAIL` varchar(200)
,`STATUS` tinyint(2)
,`DATE_` timestamp
,`USERNAME` varchar(40)
,`COMMITTEE` varchar(50)
,`Position` varchar(60)
);

-- --------------------------------------------------------

--
-- Structure for view `placement_data_course_wise`
--
DROP TABLE IF EXISTS `placement_data_course_wise`;

CREATE ALGORITHM=UNDEFINED DEFINER=`amrapaliac`@`localhost` SQL SECURITY DEFINER VIEW `placement_data_course_wise`  AS  select `placement_data`.`ID` AS `ID`,`placement_data`.`COMPANY` AS `COMPANY`,`placement_data`.`COURSE` AS `COURSE`,`placement_data`.`PACKAGE` AS `PACKAGE`,`placement_data`.`DESIG_PROFILE` AS `DESIG_PROFILE`,`placement_data`.`STUDENT_PALCED` AS `STUDENT_PALCED`,`placement_data`.`YEAR` AS `YEAR`,`placement_data`.`MONTH` AS `MONTH`,`courses`.`COURSE_` AS `CRS_NAME`,`placement_data`.`DEPTID` AS `DEPARTMENT` from (`courses` join `placement_data`) where `courses`.`CRS_ID` = `placement_data`.`COURSE` ;

-- --------------------------------------------------------

--
-- Structure for view `vol_voluteersdata`
--
DROP TABLE IF EXISTS `vol_voluteersdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`amrapaliac`@`localhost` SQL SECURITY DEFINER VIEW `vol_voluteersdata`  AS  select `a`.`REGID` AS `REGID`,`a`.`NAME_` AS `NAME_`,`a`.`CLG_CODE` AS `CLG_CODE`,`a`.`CRS_CODE` AS `CRS_CODE`,`a`.`EVENTID` AS `EVENTID`,`a`.`CMTEE_ID` AS `CMTEE_ID`,`a`.`POSTN_ID` AS `POSTN_ID`,`a`.`MOB` AS `MOB`,`a`.`EMAIL` AS `EMAIL`,`a`.`STATUS` AS `STATUS`,`a`.`DATE_` AS `DATE_`,`a`.`USERNAME` AS `USERNAME`,`c`.`C_NAME` AS `COMMITTEE`,`b`.`P_NAME` AS `Position` from ((`vol_volunteers` `a` join `vol_position` `b` on(`a`.`POSTN_ID` = `b`.`POSID`)) join `vol_committee` `c` on(`a`.`CMTEE_ID` = `c`.`CMTID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `alumniprofile`
--
ALTER TABLE `alumniprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumniprofiledelete`
--
ALTER TABLE `alumniprofiledelete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `bday_data`
--
ALTER TABLE `bday_data`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `bloglinks`
--
ALTER TABLE `bloglinks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`BR_ID`),
  ADD KEY `DEPT_ID` (`CRS_ID`);

--
-- Indexes for table `bus_route`
--
ALTER TABLE `bus_route`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `careerid`
--
ALTER TABLE `careerid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEG_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CRS_ID`),
  ADD KEY `DEPT_ID` (`UNIV_ID`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DESIGNATION` (`DESIGNATION`(250));

--
-- Indexes for table `distribute_login`
--
ALTER TABLE `distribute_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`DWNLD_ID`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `expertviews`
--
ALTER TABLE `expertviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FAC_ID`),
  ADD KEY `DEPT_ID` (`COURSE`);

--
-- Indexes for table `faculty_profile`
--
ALTER TABLE `faculty_profile`
  ADD PRIMARY KEY (`profileID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GL_ID`),
  ADD KEY `CATEG_ID` (`CATEG_ID`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`CATEG_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME_`),
  ADD KEY `STATUS` (`USER_STATUS`);

--
-- Indexes for table `menu_1`
--
ALTER TABLE `menu_1`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `menu_user_status`
--
ALTER TABLE `menu_user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `onlineregistration`
--
ALTER TABLE `onlineregistration`
  ADD PRIMARY KEY (`regID`);

--
-- Indexes for table `onlineregistrationold`
--
ALTER TABLE `onlineregistrationold`
  ADD PRIMARY KEY (`regID`);

--
-- Indexes for table `onlineregistration_temp`
--
ALTER TABLE `onlineregistration_temp`
  ADD PRIMARY KEY (`regID`);

--
-- Indexes for table `placement_data`
--
ALTER TABLE `placement_data`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DEPTID` (`DEPTID`);

--
-- Indexes for table `socialenquiry`
--
ALTER TABLE `socialenquiry`
  ADD PRIMARY KEY (`ENQID`);

--
-- Indexes for table `socialenquiry_course_expert`
--
ALTER TABLE `socialenquiry_course_expert`
  ADD PRIMARY KEY (`EXPERTID`);

--
-- Indexes for table `socialenquiry_followup`
--
ALTER TABLE `socialenquiry_followup`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`profileID`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CRS_ID` (`CRS_ID`);

--
-- Indexes for table `thoughts`
--
ALTER TABLE `thoughts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MENU` (`MENU`),
  ADD KEY `USER_` (`USER_`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `vol_college`
--
ALTER TABLE `vol_college`
  ADD PRIMARY KEY (`CLGCODE`);

--
-- Indexes for table `vol_committee`
--
ALTER TABLE `vol_committee`
  ADD PRIMARY KEY (`CMTID`),
  ADD KEY `EVENTID` (`EVENTID`);

--
-- Indexes for table `vol_course`
--
ALTER TABLE `vol_course`
  ADD PRIMARY KEY (`COURSECODE`);

--
-- Indexes for table `vol_events`
--
ALTER TABLE `vol_events`
  ADD PRIMARY KEY (`EVENTID`);

--
-- Indexes for table `vol_position`
--
ALTER TABLE `vol_position`
  ADD PRIMARY KEY (`POSID`),
  ADD KEY `EVENTID` (`EVENTID`);

--
-- Indexes for table `vol_volunteers`
--
ALTER TABLE `vol_volunteers`
  ADD PRIMARY KEY (`REGID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumniprofile`
--
ALTER TABLE `alumniprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bday_data`
--
ALTER TABLE `bday_data`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloglinks`
--
ALTER TABLE `bloglinks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bus_route`
--
ALTER TABLE `bus_route`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `DWNLD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expertviews`
--
ALTER TABLE `expertviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FAC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_profile`
--
ALTER TABLE `faculty_profile`
  MODIFY `profileID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `GL_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `CATEG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_1`
--
ALTER TABLE `menu_1`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsevents`
--
ALTER TABLE `newsevents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onlineregistration`
--
ALTER TABLE `onlineregistration`
  MODIFY `regID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onlineregistrationold`
--
ALTER TABLE `onlineregistrationold`
  MODIFY `regID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onlineregistration_temp`
--
ALTER TABLE `onlineregistration_temp`
  MODIFY `regID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `placement_data`
--
ALTER TABLE `placement_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialenquiry`
--
ALTER TABLE `socialenquiry`
  MODIFY `ENQID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialenquiry_course_expert`
--
ALTER TABLE `socialenquiry_course_expert`
  MODIFY `EXPERTID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialenquiry_followup`
--
ALTER TABLE `socialenquiry_followup`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentregistration`
--
ALTER TABLE `studentregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `profileID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thoughts`
--
ALTER TABLE `thoughts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vol_committee`
--
ALTER TABLE `vol_committee`
  MODIFY `CMTID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vol_position`
--
ALTER TABLE `vol_position`
  MODIFY `POSID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vol_volunteers`
--
ALTER TABLE `vol_volunteers`
  MODIFY `REGID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD CONSTRAINT `fk_mennu` FOREIGN KEY (`MENU`) REFERENCES `menu_1` (`ID_`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`USER_`) REFERENCES `menu_user_status` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

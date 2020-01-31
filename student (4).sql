-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 05:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `password`) VALUES
('Laura', 'Antochi', 'la@abc.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

DROP TABLE IF EXISTS `client_details`;
CREATE TABLE IF NOT EXISTS `client_details` (
  `subject_code` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_phone_number` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `availyear` int(11) DEFAULT NULL,
  `speriod` varchar(255) DEFAULT NULL,
  `teamno` int(11) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`availyear`, `speriod`, `teamno`, `pname`) VALUES
(2019, 'SP22', 9, 'VetCon'),
(2019, 'SP22', 13, 'Bunjii'),
(2019, 'SP22', 8, 'Digital Garden'),
(2019, 'SP22', 14, 'CMZ'),
(2019, 'SP22', 2, 'Smart Parking'),
(2019, 'SP22', 6, 'GreenKPI OCR'),
(2019, 'SP22', 7, 'Cool Pool'),
(2019, 'SP22', 5, 'Blood Bank'),
(2019, 'SP22', 12, 'Linfox'),
(2019, 'SP22', 4, 'CRM Leads'),
(2019, 'SP22', 11, 'Urban Xtreme'),
(2019, 'SP22', 3, 'Ohm Cinemas'),
(2019, 'SP22', 1, 'Employee Tracker'),
(2019, 'SP22', 10, 'Network Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `project_feedback`
--

DROP TABLE IF EXISTS `project_feedback`;
CREATE TABLE IF NOT EXISTS `project_feedback` (
  `jc_giving_feedback` varchar(10) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_feedback`
--

INSERT INTO `project_feedback` (`jc_giving_feedback`, `comments`) VALUES
('jc492904', '111');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `snum` int(11) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`snum`, `lname`, `fname`, `email`, `scode`, `login`, `pname`, `token`) VALUES
(13603822, 'Acharya', 'Rabin', 'rabin.acharya@my.jcu.edu.au', 'CP5047', 'jc492904', 'VetCon', 'agllkiq9jt6h'),
(13633755, 'Anusuri', 'Anjani', 'anjani.anusuri@my.jcu.edu.au', 'CP5047', 'jc497400', 'Bunjii', 'o5n5stbbibnk'),
(13591856, 'Arora', 'Nancy', 'nancy.arora@my.jcu.edu.au', 'CP5047', 'jc490385', 'Digital Garden', 'mx0glq4f4ejn'),
(13562827, 'Babu', 'Kishore Kumar', 'kishorekumar.babu@my.jcu.edu.au', 'CP5047', 'jc484867', 'CMZ', '5y0vgo38ulks'),
(13550543, 'Bandi', 'Bhargav', 'bhargav.bandi@my.jcu.edu.au', 'CP5047', 'jc481760', 'Bunjii', '9n6g6bm5rasn'),
(13570071, 'Benny', 'Emil', 'emil.benny@my.jcu.edu.au', 'CP5047', 'jc486008', 'Smart Parking', 'cozjrakk4g6m'),
(13644846, 'Bhamra', 'Gurpreet Kaur Amarpal Singh', 'gurpreetkauramarpalsingh.bhamra@my.jcu.edu.au', 'CP5047', 'jc499636', 'CMZ', '3hqr219n0dqc'),
(13643148, 'Bhusal', 'Suraj', 'suraj.bhusal@my.jcu.edu.au', 'CP5047', 'jc499315', 'VetCon', 'p5wqp76nsrld'),
(13570048, 'Chhetri', 'Kamal', 'kamal.chhetri@my.jcu.edu.au', 'CP5047', 'jc486004', 'GreenKPI OCR', '61tqw6yatz3i'),
(13635464, 'Dave', 'Mrunal Paresh', 'mrunalparesh.dave@my.jcu.edu.au', 'CP5047', 'jc497773', 'Cool Pool', 'stxsz418vaqs'),
(13558153, 'Dhamke', 'Rucha Shrikant', 'ruchashrikant.dhamke@my.jcu.edu.au', 'CP5047', 'jc483921', 'Blood Bank', '97gqjp59qva1'),
(13578648, 'GEORGE', 'Alex', 'alex.george1@my.jcu.edu.au', 'CP5047', 'jc487793', 'Smart Parking', 'am9bc0gsyflp'),
(13578330, 'GONSALVES', 'Violet Diego', 'violetdiego.gonsalves@my.jcu.edu.au', 'CP5047', 'jc487740', 'Linfox', 'jiytsd2l5own'),
(13569277, 'Gagan Deep', ' ', 'gagandeep3@my.jcu.edu.au', 'CP5047', 'jc485881', 'CMZ', 'jj1361r50iab'),
(13549112, 'Gummadi', 'Santhosh Kumar', 'santhoshkumar.gummadi@my.jcu.edu.au', 'CP5047', 'jc484544', 'CRM Leads', '6iui25riea78'),
(13553819, 'Gurnishan Singh', ' ', 'gurnishansingh@my.jcu.edu.au', 'CP5047', 'jc482621', 'Linfox', 'i8omqkzqtfol'),
(13564239, 'Hamidi', 'Amirreza', 'amirreza.hamidi@my.jcu.edu.au', 'CP5047', 'jc485052', 'Urban Xtreme', 'xb2f2hm0xnl6'),
(13590236, 'Ishvpreet Kaur', ' ', 'ishvpreetkaur@my.jcu.edu.au', 'CP5047', 'jc489992', 'Ohm Cinemas', 'hdcqf189t0l0'),
(13572209, 'Jagjit Singh', ' ', 'jagjitsingh1@my.jcu.edu.au', 'CP5047', 'jc486529', 'Cool Pool', '1hjk3n2crywe'),
(13582741, 'KAMERA', 'Aslesha', 'aslesha.kamera@my.jcu.edu.au', 'CP5047', 'jc488507', 'CRM Leads', 'b643k765a1iu'),
(13679521, 'KAUR', 'Simran', 'simran.kaur3@my.jcu.edu.au', 'CP5047', 'jc507354', 'Ohm Cinemas', 'txop9n2e7r0a'),
(13582730, 'KUNWAR', 'Sunil', 'sunil.kunwar@my.jcu.edu.au', 'CP5047', 'jc488504', 'Digital Garden', 'atuf6yex8u86'),
(13636576, 'Kaka', 'Varun Vijay', 'varunvijay.kaka@my.jcu.edu.au', 'CP5047', 'jc498073', 'Employee Tracker', 'n6wdmpm4fl2f'),
(13369546, 'MADALA', 'Poorna Sai Kumar', 'poornasaikumar.madala@my.jcu.edu.au', 'CP5047', 'jc489853', 'CRM Leads', 'g8jr0ar8ww5t'),
(13601879, 'Mali', 'Tanvi Prakash', 'tanviprakash.mali@my.jcu.edu.au', 'CP5047', 'jc492413', 'Blood Bank', 'gcao6828rmi1'),
(13498105, 'Mehrbanilayegh', 'Danyal', 'danyal.mehrbanilayegh@my.jcu.edu.au', 'CP5047', 'jc468480', 'Urban Xtreme', '4mvpk6ohujzy'),
(13638574, 'Navneet Kaur', ' ', 'navneetkaur6@my.jcu.edu.au', 'CP5047', 'jc498421', 'CMZ', 'og0wvi208stw'),
(13598562, 'Patel', 'Ashishkumar Jayantibhai', 'ashishkumarjayantibhai.patel@my.jcu.edu.au', 'CP5047', 'jc491672', 'Digital Garden', 'il1onwh80wz4'),
(13581977, 'SASAN', 'Mohinderpal Singh Jaspal Singh', 'mohinderpalsinghjaspalsingh.sasan@my.jcu.edu.au', 'CP5047', 'jc488417', 'Ohm Cinemas', 'rmwjc3g6aa2b'),
(13584880, 'SHARMA', 'Neha', 'neha.sharma@my.jcu.edu.au', 'CP5047', 'jc488841', 'Blood Bank', '47lxmyy5641l'),
(13686545, 'SIDHU', 'Gurnihal Singh', 'gurnihalsingh.sidhu@my.jcu.edu.au', 'CP5047', 'jc513951', 'Ohm Cinemas', 'uietkm9a8pha'),
(13578341, 'SUNUWAR', 'Subash', 'subash.sunuwar@my.jcu.edu.au', 'CP5047', 'jc487741', 'Network Monitor', 'n9ka1n6n01f3'),
(13577558, 'SURYAWANSHI', 'Gaurav Parasnath', 'gauravparasnath.suryawanshi@my.jcu.edu.au', 'CP5047', 'jc487619', 'GreenKPI OCR', 'zj2adufv29au'),
(13580424, 'SUTHAR', 'Chintan Dineshkumar', 'chintandineshkumar.suthar@my.jcu.edu.au', 'CP5047', 'jc488130', 'Employee Tracker', 'o8iy4vn66muo'),
(13644857, 'Shah', 'Bhavik Chetankumar', 'bhavikchetankumar.shah@my.jcu.edu.au', 'CP5047', 'jc499637', 'Employee Tracker', 'ftcyie5bm26q'),
(13596445, 'Shah', 'Suraj Yogesh', 'surajyogesh.shah@my.jcu.edu.au', 'CP5047', 'jc491160', 'Employee Tracker', 'du0w3hra7fyp'),
(13562408, 'Shrestha', 'Maikal', 'maikal.shrestha@my.jcu.edu.au', 'CP5047', 'jc484785', 'GreenKPI OCR', 'desxj8c6we92'),
(13559198, 'Shrestha', 'Manish', 'manish.shrestha@my.jcu.edu.au', 'CP5047', 'jc484126', 'Network Monitor', 'zqr85re6s17j'),
(13592619, 'Silwal', 'Shishir', 'shishir.silwal@my.jcu.edu.au', 'CP5047', 'jc490487', 'Network Monitor', 'soiypqm3zzjo'),
(13545450, 'Sonar', 'Sheshbhushan Rajesh', 'sheshbhushanrajesh.sonar@my.jcu.edu.au', 'CP5047', 'jc480051', 'Urban Xtreme', 'p4yc7nh4upet'),
(13580435, 'VAGHELA', 'Harshish Sunilsinh', 'harshishsunilsinh.vaghela@my.jcu.edu.au', 'CP5047', 'jc488131', 'Linfox', '5f201lef6rag'),
(13513266, 'VASWANI', 'Anand Navalkumar', 'anandnavalkumar.vaswani@my.jcu.edu.au', 'CP5047', 'jc472616', 'Cool Pool', '6w7tds6uuhwx'),
(13688110, 'VERMA', 'Anjali Pawan', 'anjalipawan.verma@my.jcu.edu.au', 'CP5047', 'jc515311', 'Smart Parking', 'rktaope89dba'),
(13543929, 'Vedicherla', 'Praneeth', 'praneeth.vedicherla@my.jcu.edu.au', 'CP5047', 'jc479621', 'Blood Bank', 'lx40l6dz55pw'),
(12940517, 'Virdi', 'Sandeep', 'sandeep.virdi@my.jcu.edu.au', 'CP5047', 'jc276219', 'Digital Garden', 'ho501k9z7h28'),
(13365568, 'YIN', 'Qichang', 'qichang.yin@my.jcu.edu.au', 'CP5047', 'jc437895', 'VetCon', '9tzkkv0f4fdm'),
(13531371, 'Yenugu', 'Sirish Vardhan Reddy', 'sirishvardhanreddy.yenugu@my.jcu.edu.au', 'CP5047', 'jc476845', 'CRM Leads', 'kygzob32mg8e');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

DROP TABLE IF EXISTS `student_feedback`;
CREATE TABLE IF NOT EXISTS `student_feedback` (
  `jc_receiving_feedback` varchar(10) NOT NULL,
  `jc_giving_feedback` varchar(10) NOT NULL,
  `cb_total` int(2) NOT NULL,
  `teamwork_total` int(2) NOT NULL,
  `leadership_total` int(2) NOT NULL,
  `tc_total` int(2) NOT NULL,
  `wp_total` int(2) NOT NULL,
  `grade_you_would_assign` varchar(2) NOT NULL,
  `grade_they_would_assign` varchar(2) NOT NULL,
  `work_again` varchar(3) NOT NULL,
  `relative_contribution` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`jc_receiving_feedback`, `jc_giving_feedback`, `cb_total`, `teamwork_total`, `leadership_total`, `tc_total`, `wp_total`, `grade_you_would_assign`, `grade_they_would_assign`, `work_again`, `relative_contribution`) VALUES
(' jc492904', 'jc492904', 4, 1, 2, 3, 3, 'HD', 'HD', 'Yes', 11),
(' jc499315', 'jc492904', 1, 7, 3, 2, 4, 'HD', 'HD', 'Yes', 11),
(' jc437895', 'jc492904', 2, 6, 4, 3, 4, 'HD', 'HD', 'Yes', 11),
(' jc492904', 'jc492904', 4, 1, 2, 3, 3, 'HD', 'HD', 'Yes', 11),
(' jc499315', 'jc492904', 1, 7, 3, 2, 4, 'HD', 'HD', 'Yes', 11),
(' jc437895', 'jc492904', 2, 6, 4, 3, 4, 'HD', 'HD', 'Yes', 11);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

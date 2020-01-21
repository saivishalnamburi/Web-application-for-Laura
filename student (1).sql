-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2020 at 04:45 AM
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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `teamName` varchar(50) NOT NULL,
  `teamNo` varchar(50) NOT NULL,
  `subjectCode` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL
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
(13603822, 'Acharya', 'Rabin', 'rabin.acharya@my.jcu.edu.au', 'CP5047', 'jc492904', 'VetCon', '2vrr4hlrsody'),
(13633755, 'Anusuri', 'Anjani', 'anjani.anusuri@my.jcu.edu.au', 'CP5047', 'jc497400', 'Bunjii', 'bikgagv74g55'),
(13591856, 'Arora', 'Nancy', 'nancy.arora@my.jcu.edu.au', 'CP5047', 'jc490385', 'Digital Garden', 'r48peu5sc90i'),
(13562827, 'Babu', 'Kishore Kumar', 'kishorekumar.babu@my.jcu.edu.au', 'CP5047', 'jc484867', 'CMZ', '62ucony4hp96'),
(13550543, 'Bandi', 'Bhargav', 'bhargav.bandi@my.jcu.edu.au', 'CP5047', 'jc481760', 'Bunjii', 'i3t23p6386v6'),
(13570071, 'Benny', 'Emil', 'emil.benny@my.jcu.edu.au', 'CP5047', 'jc486008', 'Smart Parking', '5qgdl1geu9au'),
(13644846, 'Bhamra', 'Gurpreet Kaur Amarpal Singh', 'gurpreetkauramarpalsingh.bhamra@my.jcu.edu.au', 'CP5047', 'jc499636', 'CMZ', 'nwnz00iufs1y'),
(13643148, 'Bhusal', 'Suraj', 'suraj.bhusal@my.jcu.edu.au', 'CP5047', 'jc499315', 'VetCon', 'd3ngmerf2mwf'),
(13570048, 'Chhetri', 'Kamal', 'kamal.chhetri@my.jcu.edu.au', 'CP5047', 'jc486004', 'GreenKPI OCR', '6ydho24qi1w5'),
(13635464, 'Dave', 'Mrunal Paresh', 'mrunalparesh.dave@my.jcu.edu.au', 'CP5047', 'jc497773', 'Cool Pool', '1h9uyjvhzglb'),
(13558153, 'Dhamke', 'Rucha Shrikant', 'ruchashrikant.dhamke@my.jcu.edu.au', 'CP5047', 'jc483921', 'Blood Bank', 'iwj785pw3kxy'),
(13578648, 'GEORGE', 'Alex', 'alex.george1@my.jcu.edu.au', 'CP5047', 'jc487793', 'Smart Parking', '296pdtpd2b2u'),
(13578330, 'GONSALVES', 'Violet Diego', 'violetdiego.gonsalves@my.jcu.edu.au', 'CP5047', 'jc487740', 'Linfox', 'p64ef9kdvw4u'),
(13569277, 'Gagan Deep', ' ', 'gagandeep3@my.jcu.edu.au', 'CP5047', 'jc485881', 'CMZ', 'k9qdfyrwhoee'),
(13549112, 'Gummadi', 'Santhosh Kumar', 'santhoshkumar.gummadi@my.jcu.edu.au', 'CP5047', 'jc484544', 'CRM Leads', '6ucgjtq4bu02'),
(13553819, 'Gurnishan Singh', ' ', 'gurnishansingh@my.jcu.edu.au', 'CP5047', 'jc482621', 'Linfox', 'uwwq1nmvoabv'),
(13564239, 'Hamidi', 'Amirreza', 'amirreza.hamidi@my.jcu.edu.au', 'CP5047', 'jc485052', 'Urban Xtreme', 'jvs2vxx0zp37'),
(13590236, 'Ishvpreet Kaur', ' ', 'ishvpreetkaur@my.jcu.edu.au', 'CP5047', 'jc489992', 'Ohm Cinemas', 'l6cn19gj6u94'),
(13572209, 'Jagjit Singh', ' ', 'jagjitsingh1@my.jcu.edu.au', 'CP5047', 'jc486529', 'Cool Pool', '2m1bgz9pedng'),
(13582741, 'KAMERA', 'Aslesha', 'aslesha.kamera@my.jcu.edu.au', 'CP5047', 'jc488507', 'CRM Leads', 'd85hoxhgjcvz'),
(13679521, 'KAUR', 'Simran', 'simran.kaur3@my.jcu.edu.au', 'CP5047', 'jc507354', 'Ohm Cinemas', '7xdm2cg334l6'),
(13582730, 'KUNWAR', 'Sunil', 'sunil.kunwar@my.jcu.edu.au', 'CP5047', 'jc488504', 'Digital Garden', '6xqn7qpr2qvo'),
(13636576, 'Kaka', 'Varun Vijay', 'varunvijay.kaka@my.jcu.edu.au', 'CP5047', 'jc498073', 'Employee Tracker', 'tgaj1a8qzxfe'),
(13369546, 'MADALA', 'Poorna Sai Kumar', 'poornasaikumar.madala@my.jcu.edu.au', 'CP5047', 'jc489853', 'CRM Leads', 'qosc7k3ikooc'),
(13601879, 'Mali', 'Tanvi Prakash', 'tanviprakash.mali@my.jcu.edu.au', 'CP5047', 'jc492413', 'Blood Bank', 'mwx4mbv4ks7p'),
(13498105, 'Mehrbanilayegh', 'Danyal', 'danyal.mehrbanilayegh@my.jcu.edu.au', 'CP5047', 'jc468480', 'Urban Xtreme', 'pzgq41bxhhk1'),
(13638574, 'Navneet Kaur', ' ', 'navneetkaur6@my.jcu.edu.au', 'CP5047', 'jc498421', 'CMZ', 'e2fp4tirprmy'),
(13598562, 'Patel', 'Ashishkumar Jayantibhai', 'ashishkumarjayantibhai.patel@my.jcu.edu.au', 'CP5047', 'jc491672', 'Digital Garden', '5vgajk3q22h9'),
(13581977, 'SASAN', 'Mohinderpal Singh Jaspal Singh', 'mohinderpalsinghjaspalsingh.sasan@my.jcu.edu.au', 'CP5047', 'jc488417', 'Ohm Cinemas', 'd6cy9fmhv3nf'),
(13584880, 'SHARMA', 'Neha', 'neha.sharma@my.jcu.edu.au', 'CP5047', 'jc488841', 'Blood Bank', '9y0h0xoihmhw'),
(13686545, 'SIDHU', 'Gurnihal Singh', 'gurnihalsingh.sidhu@my.jcu.edu.au', 'CP5047', 'jc513951', 'Ohm Cinemas', '8ak9fjo5scwr'),
(13578341, 'SUNUWAR', 'Subash', 'subash.sunuwar@my.jcu.edu.au', 'CP5047', 'jc487741', 'Network Monitor', 'ryte9ragyh8q'),
(13577558, 'SURYAWANSHI', 'Gaurav Parasnath', 'gauravparasnath.suryawanshi@my.jcu.edu.au', 'CP5047', 'jc487619', 'GreenKPI OCR', 'tmgxz5ixcqk4'),
(13580424, 'SUTHAR', 'Chintan Dineshkumar', 'chintandineshkumar.suthar@my.jcu.edu.au', 'CP5047', 'jc488130', 'Employee Tracker', 'huu0e59i4faj'),
(13644857, 'Shah', 'Bhavik Chetankumar', 'bhavikchetankumar.shah@my.jcu.edu.au', 'CP5047', 'jc499637', 'Employee Tracker', 'it1nfp128c9z'),
(13596445, 'Shah', 'Suraj Yogesh', 'surajyogesh.shah@my.jcu.edu.au', 'CP5047', 'jc491160', 'Employee Tracker', '1q1e54957syl'),
(13562408, 'Shrestha', 'Maikal', 'maikal.shrestha@my.jcu.edu.au', 'CP5047', 'jc484785', 'GreenKPI OCR', 'emv9ma4hi950'),
(13559198, 'Shrestha', 'Manish', 'manish.shrestha@my.jcu.edu.au', 'CP5047', 'jc484126', 'Network Monitor', 'wdmidqfzinhv'),
(13592619, 'Silwal', 'Shishir', 'shishir.silwal@my.jcu.edu.au', 'CP5047', 'jc490487', 'Network Monitor', '0m85ke1kjwtw'),
(13545450, 'Sonar', 'Sheshbhushan Rajesh', 'sheshbhushanrajesh.sonar@my.jcu.edu.au', 'CP5047', 'jc480051', 'Urban Xtreme', 'yghzfe3bxynp'),
(13580435, 'VAGHELA', 'Harshish Sunilsinh', 'harshishsunilsinh.vaghela@my.jcu.edu.au', 'CP5047', 'jc488131', 'Linfox', 'cof2gkzalz9t'),
(13513266, 'VASWANI', 'Anand Navalkumar', 'anandnavalkumar.vaswani@my.jcu.edu.au', 'CP5047', 'jc472616', 'Cool Pool', 'foiamtfq1o2u'),
(13688110, 'VERMA', 'Anjali Pawan', 'anjalipawan.verma@my.jcu.edu.au', 'CP5047', 'jc515311', 'Smart Parking', 'y5fjov09q14l'),
(13543929, 'Vedicherla', 'Praneeth', 'praneeth.vedicherla@my.jcu.edu.au', 'CP5047', 'jc479621', 'Blood Bank', 'u3y2qtpcmrg3'),
(12940517, 'Virdi', 'Sandeep', 'sandeep.virdi@my.jcu.edu.au', 'CP5047', 'jc276219', 'Digital Garden', 'ie8oxv7d5nfv'),
(13365568, 'YIN', 'Qichang', 'qichang.yin@my.jcu.edu.au', 'CP5047', 'jc437895', 'VetCon', 'dxm6wa5htu8u'),
(13531371, 'Yenugu', 'Sirish Vardhan Reddy', 'sirishvardhanreddy.yenugu@my.jcu.edu.au', 'CP5047', 'jc476845', 'CRM Leads', 'kwsk3zetowcb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

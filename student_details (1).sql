-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2020 at 11:29 PM
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
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `snum` int(11) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `availyear` int(11) DEFAULT NULL,
  `speriod` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `teamno` int(11) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`snum`, `lname`, `fname`, `email`, `scode`, `availyear`, `speriod`, `login`, `teamno`, `pname`, `token`) VALUES
(13603822, 'Acharya', 'Rabin', 'rabin.acharya@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc492904', 9, 'VetCon', 'fcynnru4w3sp'),
(13633755, 'Anusuri', 'Anjani', 'anjani.anusuri@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc497400', 13, 'Bunjii', 'w8up7jkie3n6'),
(13591856, 'Arora', 'Nancy', 'nancy.arora@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc490385', 8, 'Digital Garden', '5nsdyvcxjauw'),
(13562827, 'Babu', 'Kishore Kumar', 'kishorekumar.babu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484867', 14, 'CMZ', 'p06kvqd2mqpa'),
(13550543, 'Bandi', 'Bhargav', 'bhargav.bandi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc481760', 13, 'Bunjii', 'lehvg99053ng'),
(13570071, 'Benny', 'Emil', 'emil.benny@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486008', 2, 'Smart Parking', 'wosuh9gjc0lq'),
(13644846, 'Bhamra', 'Gurpreet Kaur Amarpal Singh', 'gurpreetkauramarpalsingh.bhamra@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499636', 14, 'CMZ', 'tjirpt8twrcg'),
(13643148, 'Bhusal', 'Suraj', 'suraj.bhusal@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499315', 9, 'VetCon', 'pw3ppmy6t8wk'),
(13570048, 'Chhetri', 'Kamal', 'kamal.chhetri@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486004', 6, 'GreenKPI OCR', 'pf52wl355497'),
(13635464, 'Dave', 'Mrunal Paresh', 'mrunalparesh.dave@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc497773', 7, 'Cool Pool', 'zvzdjah4yzft'),
(13558153, 'Dhamke', 'Rucha Shrikant', 'ruchashrikant.dhamke@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc483921', 5, 'Blood Bank', 'v5f2hjdvkn4l'),
(13578648, 'GEORGE', 'Alex', 'alex.george1@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487793', 2, 'Smart Parking', 'hl684xbscfdx'),
(13578330, 'GONSALVES', 'Violet Diego', 'violetdiego.gonsalves@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487740', 12, 'Linfox', '1zv7azmwr215'),
(13569277, 'Gagan Deep', ' ', 'gagandeep3@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc485881', 14, 'CMZ', 'n97vyest1sx0'),
(13549112, 'Gummadi', 'Santhosh Kumar', 'santhoshkumar.gummadi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484544', 4, 'CRM Leads', '6tki72iskv7z'),
(13553819, 'Gurnishan Singh', ' ', 'gurnishansingh@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc482621', 12, 'Linfox', 'qw88ms4v6svo'),
(13564239, 'Hamidi', 'Amirreza', 'amirreza.hamidi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc485052', 11, 'Urban Xtreme', 'knjo5ntf2ogq'),
(13590236, 'Ishvpreet Kaur', ' ', 'ishvpreetkaur@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc489992', 3, 'Ohm Cinemas', 'dvhxdjk2k684'),
(13572209, 'Jagjit Singh', ' ', 'jagjitsingh1@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486529', 7, 'Cool Pool', '9e1d4eqtgvuc'),
(13582741, 'KAMERA', 'Aslesha', 'aslesha.kamera@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488507', 4, 'CRM Leads', 'pp9qfwkxfa0t'),
(13679521, 'KAUR', 'Simran', 'simran.kaur3@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc507354', 3, 'Ohm Cinemas', 'lqmc0z9w3k10'),
(13582730, 'KUNWAR', 'Sunil', 'sunil.kunwar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488504', 8, 'Digital Garden', 'pvkn52a90301'),
(13636576, 'Kaka', 'Varun Vijay', 'varunvijay.kaka@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc498073', 1, 'Employee Tracker', '8xuwbfxdn03r'),
(13369546, 'MADALA', 'Poorna Sai Kumar', 'poornasaikumar.madala@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc489853', 4, 'CRM Leads', '3tmm0kbb6ocr'),
(13601879, 'Mali', 'Tanvi Prakash', 'tanviprakash.mali@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc492413', 5, 'Blood Bank', 'nlcm1h65pgm2'),
(13498105, 'Mehrbanilayegh', 'Danyal', 'danyal.mehrbanilayegh@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc468480', 11, 'Urban Xtreme', 'yo5uq784ivtk'),
(13638574, 'Navneet Kaur', ' ', 'navneetkaur6@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc498421', 14, 'CMZ', 'ma1t9sngcaf3'),
(13598562, 'Patel', 'Ashishkumar Jayantibhai', 'ashishkumarjayantibhai.patel@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc491672', 8, 'Digital Garden', '2wh0pgdhl6sf'),
(13581977, 'SASAN', 'Mohinderpal Singh Jaspal Singh', 'mohinderpalsinghjaspalsingh.sasan@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488417', 3, 'Ohm Cinemas', '4u351s24bml6'),
(13584880, 'SHARMA', 'Neha', 'neha.sharma@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488841', 5, 'Blood Bank', 'sbdo6jw0w0uu'),
(13686545, 'SIDHU', 'Gurnihal Singh', 'gurnihalsingh.sidhu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc513951', 3, 'Ohm Cinemas', 'j3gj0k4as8qf'),
(13578341, 'SUNUWAR', 'Subash', 'subash.sunuwar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487741', 10, 'Network Monitor', 'dx0x6vw51u1k'),
(13577558, 'SURYAWANSHI', 'Gaurav Parasnath', 'gauravparasnath.suryawanshi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487619', 6, 'GreenKPI OCR', '9n453fu7vn3b'),
(13580424, 'SUTHAR', 'Chintan Dineshkumar', 'chintandineshkumar.suthar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488130', 1, 'Employee Tracker', 'kam13x44jym3'),
(13644857, 'Shah', 'Bhavik Chetankumar', 'bhavikchetankumar.shah@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499637', 1, 'Employee Tracker', '2t45mpjutuib'),
(13596445, 'Shah', 'Suraj Yogesh', 'surajyogesh.shah@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc491160', 1, 'Employee Tracker', 'osn515xtosny'),
(13562408, 'Shrestha', 'Maikal', 'maikal.shrestha@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484785', 6, 'GreenKPI OCR', '53mxfqqg1hf9'),
(13559198, 'Shrestha', 'Manish', 'manish.shrestha@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484126', 10, 'Network Monitor', 'yw95e87z2olt'),
(13592619, 'Silwal', 'Shishir', 'shishir.silwal@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc490487', 10, 'Network Monitor', 'e9cy6b112ed4'),
(13545450, 'Sonar', 'Sheshbhushan Rajesh', 'sheshbhushanrajesh.sonar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc480051', 11, 'Urban Xtreme', 'dyjj34zq8xtc'),
(13580435, 'VAGHELA', 'Harshish Sunilsinh', 'harshishsunilsinh.vaghela@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488131', 12, 'Linfox', '3rqjnyamlvcg'),
(13513266, 'VASWANI', 'Anand Navalkumar', 'anandnavalkumar.vaswani@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc472616', 7, 'Cool Pool', 'zyp34yeea4s4'),
(13688110, 'VERMA', 'Anjali Pawan', 'anjalipawan.verma@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc515311', 2, 'Smart Parking', '17rv4b7g5qxw'),
(13543929, 'Vedicherla', 'Praneeth', 'praneeth.vedicherla@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc479621', 5, 'Blood Bank', 'ip430j6q31nv'),
(12940517, 'Virdi', 'Sandeep', 'sandeep.virdi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc276219', 8, 'Digital Garden', 'o5nz3ony0fge'),
(13365568, 'YIN', 'Qichang', 'qichang.yin@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc437895', 9, 'VetCon', '0geigm1f7fa9'),
(13531371, 'Yenugu', 'Sirish Vardhan Reddy', 'sirishvardhanreddy.yenugu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc476845', 4, 'CRM Leads', '2lz0tai95e3k');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

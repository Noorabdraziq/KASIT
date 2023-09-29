-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 09:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasit_guide_first_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(20) NOT NULL,
  `Department_ID` int(20) NOT NULL,
  `Course_Number` int(40) NOT NULL,
  `Course_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Course_Description` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Course_Type` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Course_Hours` int(20) NOT NULL,
  `Prerequisite_ID` int(20) NOT NULL,
  `Course_Needed_Hours` int(20) NOT NULL,
  `Course_Year` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Department_ID`, `Course_Number`, `Course_Name`, `Course_Description`, `Course_Type`, `Course_Hours`, `Prerequisite_ID`, `Course_Needed_Hours`, `Course_Year`) VALUES
(1, 3, 123456789, 'PHP', 'PHP Intro', 'Required', 3, 0, 3, 2),
(2, 2, 987654321, 'Database', 'Database', 'Optional', 3, 0, 3, 2),
(3, 3, 123456, 'MIS', 'MIS', 'Optional', 3, 0, 3, 2),
(4, 1, 654321, 'Java', 'Java', 'Required', 3, 0, 3, 2),
(5, 3, 913750, 'Special Topics', 'Special Topics', 'Optional', 3, 0, 3, 3),
(6, 1, 5454565, 'رياضة وصحة', 'رياضة وصحة', 'Optional', 3, 0, 3, 1),
(7, 1, 321654, 'سلامة عامة', 'سلامة عامة', 'Optional', 3, 0, 3, 1),
(141414, 1, 141414, 'مشروع 1', 'ا', 'Required', 3, 0, 90, 4),
(141415, 1, 141415, 'مشروع 2', 'ا', 'Required', 3, 141414, 90, 4),
(8, 1, 1818, 'c++', 'c++', 'Required', 3, 0, 0, 1),
(9, 1, 1774, 'Fundimintal', 'ا', 'Required', 3, 0, 0, 1),
(798562, 1, 18563, 'ثقافه اسلاميه', 'ا', 'Optional', 3, 0, 0, 1),
(584162, 1, 5421562, 'web2', 'ا', 'Optional', 3, 0, 3, 1),
(555544558, 1, 45851485, 'semantic', 'ا', 'Required', 3, 0, 0, 3),
(87452, 1, 7852, 'وطنيه', 'ا', 'Optional', 3, 0, 0, 1),
(10, 2, 10, 'الوسائط المتعددة', 'الوسائط المتعددة', 'Optional', 3, 0, 0, 3),
(11, 3, 11, 'التفاضل والتكامل 	', 'التفاضل والتكامل ', 'Required', 3, 0, 0, 1),
(12, 3, 12, 'تراكيب البيانات-1', 'تراكيب البيانات-1', 'Required', 3, 0, 0, 2),
(13, 1, 13, 'تطوير تطبيقات الويب-1	', 'تطوير تطبيقات الويب-1	', 'Required', 3, 0, 0, 1),
(15, 1, 15, 'الحكومة الالكترونية', 'الحكومة الالكترونية', 'Optional', 3, 16, 0, 2),
(16, 3, 16, 'التوثيق وأخلاقيات الحاسوب', 'التوثيق وأخلاقيات الحاسوب', 'Required', 3, 0, 0, 2),
(17, 3, 17, 'رياضيات منفصلة', 'رياضيات منفصلة', 'Required', 3, 0, 0, 1),
(18, 2, 18, 'مقدمة في نظم قواعد البيانات', 'مقدمة في نظم قواعد البيانات', 'Required', 3, 0, 0, 2),
(20, 2, 20, 'وسائل التواصل الاجتماعي', 'وسائل التواصل الاجتماعي', 'Optional', 3, 0, 0, 3),
(22, 2, 22, 'أخلاقيات الحاسوب', 'أخلاقيات الحاسوب', 'Optional', 3, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `ID` int(20) NOT NULL,
  `Department_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Department_Full_Hours` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`ID`, `Department_Name`, `Department_Full_Hours`) VALUES
(1, 'BIT', 132),
(2, 'CIS', 132),
(3, 'CS', 132);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `ID` int(20) NOT NULL,
  `Department_ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`ID`, `Department_ID`, `Student_ID`) VALUES
(196, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_details`
--

CREATE TABLE `schedule_details` (
  `ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_details`
--

INSERT INTO `schedule_details` (`ID`, `Student_ID`, `Course_ID`) VALUES
(636, 1, 87452),
(635, 1, 12),
(634, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(20) NOT NULL,
  `Department_ID` int(20) NOT NULL,
  `Student_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Student_Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Student_Year` int(20) NOT NULL,
  `Student_Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Department_ID`, `Student_Number`, `Student_Full_Name`, `Student_Year`, `Student_Password`) VALUES
(1, 2, '1234567', 'Test Student', 2, '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `success_courses`
--

CREATE TABLE `success_courses` (
  `ID` int(20) NOT NULL,
  `Course_ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_courses`
--

INSERT INTO `success_courses` (`ID`, `Course_ID`, `Student_ID`) VALUES
(1, 6, 1),
(2, 8, 1),
(3, 9, 1),
(4, 13, 1),
(5, 17, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Department_ID` (`Department_ID`,`Student_ID`) USING BTREE;

--
-- Indexes for table `schedule_details`
--
ALTER TABLE `schedule_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Student_ID` (`Student_ID`,`Course_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `success_courses`
--
ALTER TABLE `success_courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_ID` (`Course_ID`,`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=555544559;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `schedule_details`
--
ALTER TABLE `schedule_details`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=637;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146853;

--
-- AUTO_INCREMENT for table `success_courses`
--
ALTER TABLE `success_courses`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

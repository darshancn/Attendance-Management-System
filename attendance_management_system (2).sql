-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 07:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `20is520_attendance`
--

CREATE TABLE `20is520_attendance` (
  `Roll_no` int(3) NOT NULL,
  `USN` varchar(12) NOT NULL,
  `S_name` varchar(50) NOT NULL,
  `Total_attendance` int(3) DEFAULT NULL,
  `Attendance_Percentage` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `20is520_attendance`
--

INSERT INTO `20is520_attendance` (`Roll_no`, `USN`, `S_name`, `Total_attendance`, `Attendance_Percentage`) VALUES
(1, '01JST18IS018', 'Kampana Gowda', NULL, NULL),
(2, '01JST20IS001', 'Aanchal Jha', NULL, NULL),
(3, '01JST20IS002', 'Aashi Singh', NULL, NULL),
(4, '01JST20IS003', 'Abhishek A', NULL, NULL),
(5, '01JST20IS004', 'Aishwarya Kulkarni', NULL, NULL),
(6, '01JST20IS005', 'Amogh A S', NULL, NULL),
(7, '01JST20IS006', 'Amoolya K Pal', NULL, NULL),
(8, '01JST20IS007', 'Anand K S', NULL, NULL),
(9, '01JST20IS008', 'Ananya M', NULL, NULL),
(10, '01JST20IS009', 'Anud Saud', NULL, NULL),
(11, '01JST20IS010', 'Aroop Ghosh', NULL, NULL),
(12, '01JST20IS011', 'B Sathvik Shenoy', NULL, NULL),
(13, '01JST20IS012', 'Bhoomi Swaroopa K M', NULL, NULL),
(14, '01JST20IS013', 'Bhuvan S', NULL, NULL),
(15, '01JST20IS014', 'Darshan C N', NULL, NULL),
(16, '01JST20IS015', 'Deeksha S', NULL, NULL),
(17, '01JST20IS016', 'Dhanya hegde', NULL, NULL),
(18, '01JST20IS017', 'Gayana K', NULL, NULL),
(19, '01JST20IS018', 'Harshith Pandey', NULL, NULL),
(20, '01JST20IS019', 'Hemanth Kumar MJ', NULL, NULL),
(21, '01JST20IS020', 'Hrithik RaJ', NULL, NULL),
(22, '01JST20IS021', ' koduru Bhuvan Chandra', NULL, NULL),
(23, '01JST20IS022', 'Koushik S L', NULL, NULL),
(24, '01JST20IS023', 'Likith NB', NULL, NULL),
(25, '01JST20IS024', 'M Madhav Reddy', NULL, NULL),
(26, '01JST20IS025', 'Nandan Holla K', NULL, NULL),
(27, '01JST20IS026', 'Nawneet swaraj', NULL, NULL),
(28, '01JST20IS027', 'Nihal noojibail', NULL, NULL),
(29, '01JST20IS028', 'Nikhil bhalerao', NULL, NULL),
(30, '01JST20IS029', 'Nitnem Singh saluja', NULL, NULL),
(31, '01JST20IS030', 'Ojesvi Bhehal', NULL, NULL),
(32, '01JST20IS031', 'P Rajath bhandari', NULL, NULL),
(33, '01JST20IS032', 'Pathikonda Nithin', NULL, NULL),
(34, '01JST20IS033', 'Prabhat Mishra', NULL, NULL),
(35, '01JST20IS034', 'Priyanshu', NULL, NULL),
(36, '01JST20IS035', 'Punya keshav', NULL, NULL),
(37, '01JST20IS036', 'Raghav Nandwana', NULL, NULL),
(38, '01JST20IS037', 'Reeshika Hosmani', NULL, NULL),
(39, '01JST20IS038', 'Sachin badigar', NULL, NULL),
(40, '01JST20IS039', 'Sameeksha R', NULL, NULL),
(41, '01JST20IS040', 'Saraswathi MS', NULL, NULL),
(42, '01JST20IS041', 'Shashank HR', NULL, NULL),
(43, '01JST20IS042', 'Siddesh RV', NULL, NULL),
(44, '01JST20IS043', 'Sonika M', NULL, NULL),
(45, '01JST20IS044', 'Sudhindra R Desai', NULL, NULL),
(46, '01JST20IS045', 'Suhas MS', NULL, NULL),
(47, '01JST20IS046', 'Sumukh KJ', NULL, NULL),
(48, '01JST20IS047', 'Suprith ', NULL, NULL),
(49, '01JST20IS048', 'Thanmaya KN', NULL, NULL),
(50, '01JST20IS049', 'Varsha MM', NULL, NULL),
(51, '01JST20IS050', 'Venkata Aneesh Nimagadda', NULL, NULL),
(52, '01JST20IS051', 'Venkatesh Hanamsagar', NULL, NULL),
(53, '01JST20IS052', 'Vinay Patil', NULL, NULL),
(54, '01JST20IS053', 'Vinayak P Katti', NULL, NULL),
(55, '01JST20IS054', 'Dhanika Gowda D', NULL, NULL),
(56, '01JST20IS055', 'Harshini B', NULL, NULL),
(57, '01JST20IS056', 'M Chandan', NULL, NULL),
(58, '01JST20IS057', 'Rakshita G', NULL, NULL),
(59, '01JST20IS058', 'Ramesha B S', NULL, NULL),
(60, '01JST20IS059', 'Varsha Manjunath', NULL, NULL),
(61, '01JST21IS400', 'Gagan Gowda L', NULL, NULL),
(62, '01JST21IS401', 'Priyanka C', NULL, NULL),
(63, '01JST21IS402', 'Shishira R', NULL, NULL),
(64, '01JST21IS403', 'Shruthi P N', NULL, NULL),
(65, '01JST21IS404', 'Threya R', NULL, NULL),
(66, '01JST21IS405', 'Vikas M', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `20is520_cie`
--

CREATE TABLE `20is520_cie` (
  `Roll_no` int(3) NOT NULL,
  `USN` varchar(12) NOT NULL,
  `S_name` varchar(50) NOT NULL,
  `E1` int(3) DEFAULT NULL,
  `E2` int(3) DEFAULT NULL,
  `E3` int(3) DEFAULT NULL,
  `E4` int(3) DEFAULT NULL,
  `E5` int(3) DEFAULT NULL,
  `CIE` int(3) DEFAULT NULL,
  `Eligibility` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `20is520_cie`
--

INSERT INTO `20is520_cie` (`Roll_no`, `USN`, `S_name`, `E1`, `E2`, `E3`, `E4`, `E5`, `CIE`, `Eligibility`) VALUES
(1, '01JST18IS018', 'Kampana Gowda', 12, 19, 15, 17, 17, 40, 'E'),
(2, '01JST20IS001', 'Aanchal Jha', 18, 15, 20, 19, 17, 45, 'E'),
(3, '01JST20IS002', 'Aashi Singh', 19, 15, 14, 16, 14, 39, 'E'),
(4, '01JST20IS003', 'Abhishek A', 10, 5, 4, 3, 5, 14, 'NE'),
(5, '01JST20IS004', 'Aishwarya Kulkarni', 18, 20, 15, 9, 20, 41, 'E'),
(6, '01JST20IS005', 'Amogh A S', 17, 15, 14, 13, 18, 39, 'E'),
(7, '01JST20IS006', 'Amoolya K Pal', 10, 15, 8, 7, 10, 25, 'E'),
(8, '01JST20IS007', 'Anand K S', 19, 18, 16, 15, 12, 40, 'E'),
(9, '01JST20IS008', 'Ananya M', 20, 19, 18, 15, 16, 44, 'E'),
(10, '01JST20IS009', 'Anud Saud', 20, 18, 16, 15, 14, 42, 'E'),
(11, '01JST20IS010', 'Aroop Ghosh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '01JST20IS011', 'B Sathvik Shenoy', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '01JST20IS012', 'Bhoomi Swaroopa K M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '01JST20IS013', 'Bhuvan S', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '01JST20IS014', 'Darshan C N', 19, 18, 20, 17, 20, 47, 'E'),
(16, '01JST20IS015', 'Deeksha S', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '01JST20IS016', 'Dhanya hegde', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '01JST20IS017', 'Gayana K', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '01JST20IS018', 'Harshith Pandey', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '01JST20IS019', 'Hemanth Kumar MJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '01JST20IS020', 'Hrithik RaJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '01JST20IS021', 'Bhuvan Chandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '01JST20IS022', 'Koushik S L', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '01JST20IS023', 'Likith NB', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '01JST20IS024', 'M Madhav Reddy', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '01JST20IS025', 'Nandan Holla K', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '01JST20IS026', 'Nawneet swaraj', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '01JST20IS027', 'Nihal noojibail', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '01JST20IS028', 'Nikhil bhalerao', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '01JST20IS029', 'Nitnem Singh saluja', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '01JST20IS030', 'Ojesvi Bhehal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '01JST20IS031', 'P Rajath bhandari', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '01JST20IS032', 'Pathikonda Nithin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '01JST20IS033', 'Prabhat Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '01JST20IS034', 'Priyanshu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '01JST20IS035', 'Punya keshav', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '01JST20IS036', 'Raghav Nandwana', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '01JST20IS037', 'Reeshika Hosmani', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '01JST20IS038', 'Sachin badigar', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, '01JST20IS039', 'Sameeksha R', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '01JST20IS040', 'Saraswathi MS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '01JST20IS041', 'Shashank HR', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '01JST20IS042', 'Siddesh RV', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '01JST20IS043', 'Sonika M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '01JST20IS044', 'Sudhindra R Desai', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '01JST20IS045', 'Suhas MS', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '01JST20IS046', 'Sumukh KJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '01JST20IS047', 'Suprith ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '01JST20IS048', 'Thanmaya KN', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, '01JST20IS049', 'Varsha MM', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, '01JST20IS050', 'Venkata Aneesh Nimagadda', 20, 18, 19, 15, 14, 43, 'E'),
(52, '01JST20IS051', 'Venkatesh Hanamsagar', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, '01JST20IS052', 'Vinay Patil', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, '01JST20IS053', 'Vinayak P Katti', 5, 4, 1, 1, 2, 7, 'NE'),
(55, '01JST20IS054', 'Dhanika Gowda D', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '01JST20IS055', 'Harshini B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '01JST20IS056', 'M Chandan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '01JST20IS057', 'Rakshita G', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '01JST20IS058', 'Ramesha B S', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '01JST20IS059', 'Varsha Manjunath', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '01JST21IS400', 'Gagan Gowda L', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, '01JST21IS401', 'Priyanka C', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '01JST21IS402', 'Shishira R', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, '01JST21IS403', 'Shruthi P N', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, '01JST21IS404', 'Threya R', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, '01JST21IS405', 'Vikas M', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursetable`
--

CREATE TABLE `coursetable` (
  `Course_code` varchar(7) NOT NULL,
  `Course_name` varchar(50) NOT NULL,
  `FID` int(5) NOT NULL,
  `Sem` int(1) NOT NULL,
  `Dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursetable`
--

INSERT INTO `coursetable` (`Course_code`, `Course_name`, `FID`, `Sem`, `Dept`) VALUES
('20IS041', 'Data Com', 12345, 5, 'ISE'),
('20IS043', 'unix', 12347, 4, 'ISE'),
('20IS510', 'computernetworks', 12345, 5, 'ISE'),
('20IS520', 'DBMS', 12347, 5, 'ISE'),
('20IS552', 'Web dev', 12346, 5, 'ISE');

-- --------------------------------------------------------

--
-- Table structure for table `facultytable`
--

CREATE TABLE `facultytable` (
  `Faculty_id` int(5) NOT NULL,
  `Faculty_name` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultytable`
--

INSERT INTO `facultytable` (`Faculty_id`, `Faculty_name`, `Password`) VALUES
(11111, 'Admin', 'Admin11111'),
(12345, 'Sindhu A S', '1234567'),
(12346, 'Sindhu G', '1234567'),
(12347, 'R J Prathiba', '12347'),
(12348, 'Shruti N', '12348');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `USN` varchar(12) NOT NULL,
  `S_name` varchar(50) NOT NULL,
  `Sem` int(1) NOT NULL,
  `Dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`USN`, `S_name`, `Sem`, `Dept`) VALUES
('01JST18IS018', 'Kampana Gowda', 5, 'ISE'),
('01JST20IS001', 'Aanchal Jha', 5, 'ISE'),
('01JST20IS002', 'Aashi Singh', 5, 'ISE'),
('01JST20IS003', 'Abhishek A', 5, 'ISE'),
('01JST20IS004', 'Aishwarya Kulkarni', 5, 'ISE'),
('01JST20IS005', 'Amogh A S', 5, 'ISE'),
('01JST20IS006', 'Amoolya K Pal', 5, 'ISE'),
('01JST20IS007', 'Anand K S', 5, 'ISE'),
('01JST20IS008', 'Ananya M', 5, 'ISE'),
('01JST20IS009', 'Anud Saud', 5, 'ISE'),
('01JST20IS010', 'Aroop Ghosh', 5, 'ISE'),
('01JST20IS011', 'B Sathvik Shenoy', 5, 'ISE'),
('01JST20IS012', 'Bhoomi Swaroopa K M', 5, 'ISE'),
('01JST20IS013', 'Bhuvan S', 5, 'ISE'),
('01JST20IS014', 'Darshan C N', 5, 'ISE'),
('01JST20IS015', 'Deeksha S', 5, 'ISE'),
('01JST20IS016', 'Dhanya hegde', 5, 'ISE'),
('01JST20IS017', 'Gayana K', 5, 'ISE'),
('01JST20IS018', 'Harshith Pandey', 5, 'ISE'),
('01JST20IS019', 'Hemanth Kumar MJ', 5, 'ISE'),
('01JST20IS020', 'Hrithik RaJ', 5, 'ISE'),
('01JST20IS021', 'Bhuvan Chandra', 5, 'ISE'),
('01JST20IS022', 'Koushik S L', 5, 'ISE'),
('01JST20IS023', 'Likith NB', 5, 'ISE'),
('01JST20IS024', 'M Madhav Reddy', 5, 'ISE'),
('01JST20IS025', 'Nandan Holla K', 5, 'ISE'),
('01JST20IS026', 'Nawneet swaraj', 5, 'ISE'),
('01JST20IS027', 'Nihal noojibail', 5, 'ISE'),
('01JST20IS028', 'Nikhil bhalerao', 5, 'ISE'),
('01JST20IS029', 'Nitnem Singh saluja', 5, 'ISE'),
('01JST20IS030', 'Ojesvi Bhehal', 5, 'ISE'),
('01JST20IS031', 'P Rajath bhandari', 5, 'ISE'),
('01JST20IS032', 'Pathikonda Nithin', 5, 'ISE'),
('01JST20IS033', 'Prabhat Mishra', 5, 'ISE'),
('01JST20IS034', 'Priyanshu', 5, 'ISE'),
('01JST20IS035', 'Punya keshav', 5, 'ISE'),
('01JST20IS036', 'Raghav Nandwana', 5, 'ISE'),
('01JST20IS037', 'Reeshika Hosmani', 5, 'ISE'),
('01JST20IS038', 'Sachin badigar', 5, 'ISE'),
('01JST20IS039', 'Sameeksha R', 5, 'ISE'),
('01JST20IS040', 'Saraswathi MS', 5, 'ISE'),
('01JST20IS041', 'Shashank HR', 5, 'ISE'),
('01JST20IS042', 'Siddesh RV', 5, 'ISE'),
('01JST20IS043', 'Sonika M', 5, 'ISE'),
('01JST20IS044', 'Sudhindra R Desai', 5, 'ISE'),
('01JST20IS045', 'Suhas MS', 5, 'ISE'),
('01JST20IS046', 'Sumukh KJ', 5, 'ISE'),
('01JST20IS047', 'Suprith ', 5, 'ISE'),
('01JST20IS048', 'Thanmaya KN', 5, 'ISE'),
('01JST20IS049', 'Varsha MM', 5, 'ISE'),
('01JST20IS050', 'Venkata Aneesh Nimagadda', 5, 'ISE'),
('01JST20IS051', 'Venkatesh Hanamsagar', 5, 'ISE'),
('01JST20IS052', 'Vinay Patil', 5, 'ISE'),
('01JST20IS053', 'Vinayak P Katti', 5, 'ISE'),
('01JST20IS054', 'Dhanika Gowda D', 5, 'ISE'),
('01JST20IS055', 'Harshini B', 5, 'ISE'),
('01JST20IS056', 'M Chandan', 5, 'ISE'),
('01JST20IS057', 'Rakshita G', 5, 'ISE'),
('01JST20IS058', 'Ramesha B S', 5, 'ISE'),
('01JST20IS059', 'Varsha Manjunath', 5, 'ISE'),
('01JST21IS400', 'Gagan Gowda L', 5, 'ISE'),
('01JST21IS401', 'Priyanka C', 5, 'ISE'),
('01JST21IS402', 'Shishira R', 5, 'ISE'),
('01JST21IS403', 'Shruthi P N', 5, 'ISE'),
('01JST21IS404', 'Threya R', 5, 'ISE'),
('01JST21IS405', 'Vikas M', 5, 'ISE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `20is520_attendance`
--
ALTER TABLE `20is520_attendance`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `20is520_cie`
--
ALTER TABLE `20is520_cie`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `coursetable`
--
ALTER TABLE `coursetable`
  ADD PRIMARY KEY (`Course_code`),
  ADD KEY `FID` (`FID`);

--
-- Indexes for table `facultytable`
--
ALTER TABLE `facultytable`
  ADD PRIMARY KEY (`Faculty_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`USN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `20is520_attendance`
--
ALTER TABLE `20is520_attendance`
  ADD CONSTRAINT `20is520_attendance_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student_details` (`USN`);

--
-- Constraints for table `20is520_cie`
--
ALTER TABLE `20is520_cie`
  ADD CONSTRAINT `20is520_cie_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student_details` (`USN`);

--
-- Constraints for table `coursetable`
--
ALTER TABLE `coursetable`
  ADD CONSTRAINT `coursetable_ibfk_1` FOREIGN KEY (`FID`) REFERENCES `facultytable` (`Faculty_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

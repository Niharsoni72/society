-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 06:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsdb5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555556, 'adminuser@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2019-12-09 07:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblallotment`
--

CREATE TABLE `tblallotment` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Block` varchar(10) DEFAULT NULL,
  `FlatNum` int(10) DEFAULT NULL,
  `EContactnum` bigint(10) DEFAULT NULL,
  `Noofmember` int(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `AllotmentDate` timestamp NULL DEFAULT current_timestamp(),
  `Password` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblallotment`
--

INSERT INTO `tblallotment` (`ID`, `Name`, `ContactNumber`, `Block`, `FlatNum`, `EContactnum`, `Noofmember`, `Address`, `AllotmentDate`, `Password`) VALUES
(3, 'Rahul Chandra', 7777797979, 'A', 102, 4644646546, 4, 'Thana-Rohtas G-899 Bihar', '2019-12-11 11:43:29', 0),
(4, 'Kabir Rajvansh', 3146541327, 'A', 103, 4564646546, 2, 'iuyihuiyiuyhui', '2019-12-11 11:44:39', 0),
(5, 'Lokesh Kumar', 3256589812, 'B', 203, 6446464656, 5, 'yiuyiyuhiyiygvuyftyytcgfddxfg', '2019-12-11 11:45:30', 0),
(6, 'Om Prakash', 4564649879, 'C', 304, 6546798124, 5, 'tutttuytuytuy', '2019-12-11 11:46:01', 0),
(7, 'Mohini Singh', 8774549465, 'E', 503, 6446776498, 2, 'tyutuututut765tyrdytryrr', '2019-12-11 11:46:45', 0),
(8, 'Test', 4654464646, 'A', 107, 4464644464, 5, 'Varanasi', '2019-12-24 06:44:26', 0),
(9, 'Anuj Kumar', 9354778033, 'A', 201, 9354778033, 10, 'New Delhi India', '2019-12-29 17:00:55', 0),
(10, 'Sarthak', 123, 'A', 99, 12, 5, '6', '2024-03-21 17:08:49', 0),
(11, 'Paresh', 1234567890, 'A', 70, 1, 5, 'rgbgrb', '2024-03-21 17:16:08', 123),
(12, 'new', 4525632144, 'A', 75, 40, 5, 'botad', '2024-03-21 17:27:37', 123),
(13, 'William', 1212121212, 'A', 111, 2121212121, 2, 'Botad', '2024-03-24 04:59:13', 111),
(14, 'Jethalal Gada', 1478521478, 'A', 112, 1234562453, 4, 'Gokuldham', '2024-03-24 05:05:09', 112),
(15, 'Hritik', 1954876230, 'O', 35, 1542566698, 5, 'Botad', '2024-03-26 10:07:07', 3535),
(16, 'Samshera', 7226022222, 'N', 32, 1234567891, 5, 'Botad', '2024-03-26 17:08:21', 3232);

-- --------------------------------------------------------

--
-- Table structure for table `tblbill`
--

CREATE TABLE `tblbill` (
  `ID` int(10) NOT NULL,
  `Block` varchar(20) DEFAULT NULL,
  `FlatNum` int(10) DEFAULT NULL,
  `PricepUnit` int(10) DEFAULT NULL,
  `UnitCons` int(10) DEFAULT NULL,
  `Echarge` varchar(50) DEFAULT NULL,
  `BillDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbill`
--

INSERT INTO `tblbill` (`ID`, `Block`, `FlatNum`, `PricepUnit`, `UnitCons`, `Echarge`, `BillDate`) VALUES
(5, 'A', 102, 10, 100, '1000', '2019-12-12 17:08:07'),
(6, 'A', 102, 12, 50, '600', '2019-12-12 17:13:15'),
(7, 'A', 101, 100, 20, '2000', '2019-12-19 17:14:33'),
(8, 'A', 101, 8, 400, '3200', '2019-12-20 04:29:37'),
(9, 'B', 201, 8, 200, '1600', '2019-12-24 05:02:32'),
(10, 'A', 107, 8, 200, '1600', '2019-12-24 06:51:02'),
(11, 'A', 103, 4, 700, '2800', '2019-12-29 16:30:02'),
(12, 'B', 203, 12, 120, '1440', '2019-12-29 16:36:38'),
(13, 'A', 201, 5, 1200, '6000', '2019-12-29 17:19:33'),
(14, 'A', 201, 15, 200, '3000', '2024-03-21 07:51:14'),
(15, 'E', 503, 10, 250, '2500', '2024-03-21 11:10:40'),
(16, 'A', 111, 12, 120, '1440', '2024-03-24 05:00:09'),
(17, 'A', 112, 10, 120, '1200', '2024-03-24 05:06:25'),
(18, 'A', 112, 12, 120, '1440', '2024-03-24 13:25:45'),
(19, 'A', 111, 20, 1500, '30000', '2024-03-24 13:33:21'),
(20, 'O', 35, 9, 100, '900', '2024-03-26 10:08:17'),
(21, 'O', 35, 10, 120, '1200', '2024-03-26 15:56:17'),
(22, 'O', 35, 12, 120, '1440', '2024-03-26 16:06:23'),
(23, 'N', 32, 12, 150, '1800', '2024-03-26 17:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblblocks`
--

CREATE TABLE `tblblocks` (
  `ID` int(10) NOT NULL,
  `BlockName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblblocks`
--

INSERT INTO `tblblocks` (`ID`, `BlockName`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(9, 'H'),
(10, 'I'),
(11, 'J'),
(12, 'K'),
(13, 'L'),
(14, 'M'),
(15, 'N'),
(16, 'O'),
(17, 'P'),
(18, 'Q'),
(19, 'R'),
(20, 'S'),
(21, 'T'),
(22, 'U'),
(23, 'V'),
(24, 'W'),
(25, 'X'),
(26, 'Y'),
(27, 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplain`
--

CREATE TABLE `tblcomplain` (
  `ID` int(10) NOT NULL,
  `RequestID` int(10) DEFAULT NULL,
  `UserID` int(10) DEFAULT NULL,
  `ComplainType` varchar(200) DEFAULT NULL,
  `ComplainDes` mediumtext DEFAULT NULL,
  `CompRaisedate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `ResolvedDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcomplain`
--

INSERT INTO `tblcomplain` (`ID`, `RequestID`, `UserID`, `ComplainType`, `ComplainDes`, `CompRaisedate`, `AdminRemark`, `Status`, `ResolvedDate`) VALUES
(1, 279266349, 2, 'Other', 'Intercom is not working', '2019-12-23 06:28:39', 'Your Issue has been resolved', 'Resolved', '2019-12-23 07:51:48'),
(2, 297649716, 5, 'Other', 'Floor of common area not clean properly', '2019-12-24 06:14:55', 'We are looking at this matter', 'In Progress', '2019-12-24 07:04:06'),
(3, 386338533, 8, 'Carpenter', 'Front Door Not working', '2019-12-24 07:12:56', NULL, NULL, NULL),
(4, 801134490, 9, 'Electrical', ' electric board not working', '2019-12-29 17:20:27', 'Board fixed.', 'Resolved', '2019-12-29 17:21:42'),
(5, 133038767, 9, 'Plumbing', 'not working', '2024-03-21 06:53:17', 'ok done your problem', 'Resolved', '2024-03-21 07:05:43'),
(6, 927797923, 9, 'Gym', 'gym ac not working', '2024-03-21 07:23:10', NULL, NULL, NULL),
(7, 707803010, 4, 'Common Area', 'jsbchb', '2024-03-21 10:32:02', NULL, NULL, NULL),
(8, 416549403, 9, 'Lift', 'Lift is not working', '2024-03-21 13:03:53', 'You complain is resolved', 'Resolved', '2024-03-21 13:06:15'),
(9, 906182056, 9, 'Plumbing', 'rkhgjkhgkjrhg', '2024-03-21 15:06:10', 'done', 'Resolved', '2024-03-21 15:06:48'),
(10, 919349376, 6, 'Plumbing', 'jhdbf', '2024-03-21 15:27:21', NULL, NULL, NULL),
(11, 407032233, 7, 'Plumbing', 'fjkhgkrughf', '2024-03-21 16:18:33', NULL, NULL, NULL),
(12, 839027329, NULL, 'Carpenter', 'ytjtyjtyjty', '2024-03-21 17:32:21', NULL, NULL, NULL),
(13, 622368659, 5, 'Plumbing', 'jhbhbhgvbhj', '2024-03-21 17:35:53', NULL, NULL, NULL),
(14, 571745979, 5, 'Plumbing', 'jdbgjhebjbrjkf', '2024-03-24 05:00:40', NULL, NULL, NULL),
(15, 127452063, NULL, NULL, NULL, '2024-03-24 05:09:33', NULL, NULL, NULL),
(16, 560802616, NULL, NULL, NULL, '2024-03-24 05:09:35', NULL, NULL, NULL),
(17, 275204702, NULL, NULL, NULL, '2024-03-24 05:09:37', NULL, NULL, NULL),
(18, 190379703, NULL, NULL, NULL, '2024-03-24 05:09:41', NULL, NULL, NULL),
(19, 957467785, NULL, 'Parking', 'kj3rhbgfhj3rg', '2024-03-24 05:15:51', NULL, NULL, NULL),
(20, 677824667, NULL, 'Fire', 'kjsncjkns', '2024-03-24 05:16:51', NULL, NULL, NULL),
(21, 667203904, NULL, 'Carpenter', 'jndbcfjhbf', '2024-03-24 13:24:58', NULL, NULL, NULL),
(22, 763870176, NULL, 'Common Area', 'hjghjvbhjbjbv', '2024-03-26 10:07:33', NULL, NULL, NULL),
(23, 205697892, NULL, 'Plumbing', 'jkqhzjgqjg\r\n', '2024-03-26 16:07:10', NULL, NULL, NULL),
(24, 287530217, 11, 'Parking', 'jghjgbjh', '2024-03-26 16:07:46', NULL, NULL, NULL),
(25, 171726896, NULL, 'Carpenter', 'hygy', '2024-03-26 16:12:19', NULL, NULL, NULL),
(26, 814794993, NULL, 'Common Area', 'j', '2024-03-26 16:32:08', NULL, NULL, NULL),
(27, 172380815, 15, 'Parking', 'JN', '2024-03-26 16:52:43', NULL, NULL, NULL),
(28, 281968345, 16, 'Events', 'Nathi thati event', '2024-03-26 17:09:28', 'Thase raah jovo', 'Resolved', '2024-03-26 17:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblflat`
--

CREATE TABLE `tblflat` (
  `ID` int(10) NOT NULL,
  `FlatNum` int(50) DEFAULT NULL,
  `Floor` varchar(50) DEFAULT NULL,
  `Block` varchar(50) DEFAULT NULL,
  `FlatType` varchar(120) DEFAULT NULL,
  `MCharge` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblflat`
--

INSERT INTO `tblflat` (`ID`, `FlatNum`, `Floor`, `Block`, `FlatType`, `MCharge`, `CreationDate`, `Password`) VALUES
(47, 201, '1', 'A', '3 bhk', '1500', '2024-03-21 16:50:16', '202cb962ac59075b964b07152d234b70'),
(48, 99, '1', 'A', '5 bhk', '1500', '2024-03-21 16:56:38', '202cb962ac59075b964b07152d234b70'),
(49, 70, '1', 'A', '3 bhk', '1500', '2024-03-21 17:11:29', '202cb962ac59075b964b07152d234b70'),
(50, 75, '2', 'A', '3 bhk', '2500', '2024-03-21 17:20:43', 'f899139df5e1059396431415e770c6dd'),
(51, 111, '1', 'A', '2 bhk', '1200', '2024-03-24 04:57:57', '698d51a19d8a121ce581499d7b701668'),
(52, 112, '4', 'A', '1 bhk', '1000', '2024-03-24 05:04:33', '7f6ffaa6bb0b408017b62254211691b5'),
(53, 35, '2', 'O', '3 bhk', '1500', '2024-03-26 10:06:26', 'b99d193b66a6542917d2b7bee52c2574'),
(54, 32, '2', 'N', '2 bhk', '1200', '2024-03-26 17:07:41', '12e086066892a311b752673a28583d3f');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `ID` int(10) NOT NULL,
  `VisitorName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `WhomtoMeet` varchar(200) DEFAULT NULL,
  `ReasontoMeet` mediumtext DEFAULT NULL,
  `Block` varchar(50) DEFAULT NULL,
  `FlatNo` varchar(50) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `remark` varchar(200) DEFAULT NULL,
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `VisitorName`, `MobileNumber`, `Address`, `WhomtoMeet`, `ReasontoMeet`, `Block`, `FlatNo`, `EnterDate`, `remark`, `outtime`) VALUES
(1, 'Abir Rajvansh', 7798777898, 'X-128 New delhi', 'Mr. Raghav', 'Friend', 'H-909', '9 th floor', '2019-12-16 05:24:02', 'Ok', '2019-12-16 06:04:12'),
(2, 'Joginder', 6546876546, 'Mayur Vihar ph 3', 'Mr. Sanjay', 'Delivery of Vegetables', 'A', '101', '2019-12-16 05:25:27', NULL, '2019-12-19 07:03:39'),
(3, 'Rohan', 4646546446, 'Kailash Puram New Delhi', 'Raginii', 'Relative', 'A', '102', '2019-12-19 06:45:44', 'Done', '2019-12-19 06:48:08'),
(4, 'Rakesh', 8979789789, 'yutjhyudccty', 'XYZ', 'Delivery', 'A', '107', '2019-12-24 07:14:53', NULL, NULL),
(5, 'Test', 4466546546, 'oiuoiuhuihyiui', 'kiououoi', 'ghiuyuui', 'A', '107', '2019-12-24 07:15:22', 'ok', '2019-12-24 07:18:14'),
(6, 'Amit kumar', 4569871133, 'New Delhi', 'Anuj', 'Personal', 'A', '201', '2019-12-29 17:22:31', 'Out', '2019-12-29 17:23:04'),
(7, 'Jhon', 145145145, 'Botad', 'William', 'Personal', 'A', '111', '2024-03-24 05:03:24', NULL, NULL),
(8, 'Ranveer', 8181818181, 'Mumbai', 'Hritik', 'Personal', 'O', '35', '2024-03-26 10:09:28', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblallotment`
--
ALTER TABLE `tblallotment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Block` (`Block`),
  ADD KEY `FlatNum` (`FlatNum`);

--
-- Indexes for table `tblbill`
--
ALTER TABLE `tblbill`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Block` (`Block`),
  ADD KEY `FlatNum` (`FlatNum`);

--
-- Indexes for table `tblblocks`
--
ALTER TABLE `tblblocks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcomplain`
--
ALTER TABLE `tblcomplain`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tblflat`
--
ALTER TABLE `tblflat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Block` (`Block`),
  ADD KEY `FlatNo` (`FlatNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblallotment`
--
ALTER TABLE `tblallotment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblbill`
--
ALTER TABLE `tblbill`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblblocks`
--
ALTER TABLE `tblblocks`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcomplain`
--
ALTER TABLE `tblcomplain`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblflat`
--
ALTER TABLE `tblflat`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

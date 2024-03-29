-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 11:56 AM
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
(10, 'Sarthak', 123, 'A', 99, 12, 5, '6', '2024-03-21 17:08:49', 0),
(11, 'Paresh', 1234567890, 'A', 70, 1, 5, 'rgbgrb', '2024-03-21 17:16:08', 123),
(12, 'new', 4525632144, 'A', 75, 40, 5, 'botad', '2024-03-21 17:27:37', 123),
(13, 'William', 1212121212, 'A', 111, 2121212121, 2, 'Botad', '2024-03-24 04:59:13', 111),
(14, 'Jethalal Gada', 1478521478, 'A', 112, 1234562453, 4, 'Gokuldham', '2024-03-24 05:05:09', 112),
(15, 'Hritik', 1954876230, 'O', 35, 1542566698, 5, 'Botad', '2024-03-26 10:07:07', 3535),
(16, 'Samshera', 7226022222, 'N', 32, 1234567891, 5, 'Botad', '2024-03-26 17:08:21', 3232),
(17, 'Ranbeer', 6666666666, 'Z', 155, 9999999999, 5, 'Mumbai ', '2024-03-28 07:40:52', 155);

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
(14, 'A', 201, 15, 200, '3000', '2024-03-21 07:51:14'),
(15, 'E', 503, 10, 250, '2500', '2024-03-21 11:10:40'),
(16, 'A', 111, 12, 120, '1440', '2024-03-24 05:00:09'),
(17, 'A', 112, 10, 120, '1200', '2024-03-24 05:06:25'),
(18, 'A', 112, 12, 120, '1440', '2024-03-24 13:25:45'),
(19, 'A', 111, 20, 1500, '30000', '2024-03-24 13:33:21'),
(20, 'O', 35, 9, 100, '900', '2024-03-26 10:08:17'),
(21, 'O', 35, 10, 120, '1200', '2024-03-26 15:56:17'),
(22, 'O', 35, 12, 120, '1440', '2024-03-26 16:06:23'),
(23, 'N', 32, 12, 150, '1800', '2024-03-26 17:09:06'),
(24, 'Z', 155, 10, 120, '1200', '2024-03-28 07:42:17');

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
(27, 172380815, 15, 'Parking', 'JN', '2024-03-26 16:52:43', NULL, NULL, NULL),
(29, 281844483, 17, 'Lift', 'Lift is not working in Z wing', '2024-03-29 10:48:24', 'done', 'Resolved', '2024-03-29 10:52:10');

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
(54, 32, '2', 'N', '2 bhk', '1200', '2024-03-26 17:07:41', '12e086066892a311b752673a28583d3f'),
(55, 155, '2', 'Z', '3 bhk', '1100', '2024-03-28 07:39:46', '2a79ea27c279e471f4d180b08d62b00a');

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblbill`
--
ALTER TABLE `tblbill`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblblocks`
--
ALTER TABLE `tblblocks`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcomplain`
--
ALTER TABLE `tblcomplain`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblflat`
--
ALTER TABLE `tblflat`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 02:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cedula`
--

-- --------------------------------------------------------

--
-- Table structure for table `classa`
--

CREATE TABLE `classa` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middle` varchar(5) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `homeAddress` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `placeOfBirth` varchar(100) NOT NULL,
  `civilStatus` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateAndTimeProcessed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classa`
--

INSERT INTO `classa` (`ID`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `placeOfBirth`, `civilStatus`, `gender`, `dateAndTimeProcessed`) VALUES
(1, 'Juan', 'A.', 'Dela Cruz', '1 Sales St., Sta. Cruz, Manila', '2000-01-01', 'Tondo, Manila', 'single', 'male', '0000-00-00 00:00:00'),
(2, 'Maria', 'B.', 'Flores', '2 Sales St., Sta. Cruz, Manila', '1999-12-25', 'Sampaloc, Manila', 'Married', 'Female', '0000-00-00 00:00:00'),
(3, 'Pedro', 'C.', 'Flores', '3 Sales St., Sta. Cruz, Manila', '1975-12-31', 'Los Baños, Laguna', 'Married', 'Male', '0000-00-00 00:00:00'),
(4, 'Fernando', 'F.', 'Fernando', '1 Fernando St., Malate, Manila', '2000-01-01', 'Manila', 'Single', 'Male', '0000-00-00 00:00:00'),
(5, 'Antonio', 'A.', 'Antonio', '1 Antonio St., Brgy. 342, Zone 34, Sta. Cruz, Manila', '2000-12-30', 'Manila', 'Married', 'Male', '0000-00-00 00:00:00'),
(6, 'Maria', 'S.', 'Mendoza', '5 Sales St., Sta. Cruz, Manila', '2000-02-02', 'Manila', 'Single', 'Female', '0000-00-00 00:00:00'),
(14, 'Angelo', 'A.', 'Abad', '77 Fernando St., Malate, Manila', '1990-01-01', 'Malate, Manila', 'Single', 'Male', '0000-00-00 00:00:00'),
(16, 'Algene Steven', 'T.', 'Quinto', '1224 D Quiricada St., Sta. Cruz, Manila', '1998-11-03', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(17, 'Algene Steven', 'T.', 'Quinto', '1224 D Quiricada St., Sta. Cruz, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(19, 'Kendrick', 'T.', 'Quinto', '1224 D Quiricada St., Sta. Cruz, Manila', '2020-01-01', 'California, USA', 'Divorced', 'Male', '0000-00-00 00:00:00'),
(37, 'Karl', 'A.', 'Quinto', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(38, 'Karl', 'A.', 'Quinto', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(39, 'Karl', 'A.', 'Quinto', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(40, 'Karl', 'A.', 'Quinto', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(52, 'Karl', 'A.', 'Quinto', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(56, 'Karl', 'A.', 'Quinto', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '0000-00-00 00:00:00'),
(58, 'Algene Steven', 'M.', 'Fonte', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '2020-03-08 10:17:03'),
(59, 'Algene Steven', 'M.', 'Fonte', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '2020-03-08 10:20:26'),
(60, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 14:51:44'),
(61, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 15:10:20'),
(62, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 15:11:35'),
(63, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 16:04:21'),
(64, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 16:27:30'),
(65, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 16:27:51'),
(66, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 16:29:06'),
(67, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 16:39:45'),
(68, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:09:02'),
(69, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:12:21'),
(70, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:37:21'),
(71, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:37:28'),
(72, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:39:00'),
(73, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:39:29'),
(74, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:40:34'),
(75, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:40:51'),
(76, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:41:33'),
(77, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:41:33'),
(78, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:41:49'),
(79, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:42:10'),
(80, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:45:21'),
(81, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:45:27'),
(82, 'Algene Steven', 'W.', 'Mendoza', '2 Gen. Luna, Intramuros, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '2020-03-08 17:45:45'),
(83, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:46:12'),
(84, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:46:30'),
(85, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:46:40'),
(86, 'Algene Steven', 'A.', 'Quinto', '2 Gen. Luna, Intramuros, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '2020-03-08 17:46:59'),
(87, '', '', '', '', '0000-00-00', '', '', '', '2020-03-08 17:51:19'),
(88, 'Karl', 'M.', 'Reyes', '864 Julio Nakpil St., Tondo, Manila', '2020-01-01', 'California, USA', 'Divorced', 'Male', '2020-03-08 18:03:25'),
(89, 'Steven', 'T.', 'Reyes', '1 Gen. Luna, Intramuros, Manila', '2020-01-01', 'California, USA', 'Single', 'Male', '2020-03-08 18:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `classab`
--

CREATE TABLE `classab` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middle` varchar(5) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `homeAddress` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `placeOfBirth` varchar(100) NOT NULL,
  `civilStatus` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `taxAccountNo` bigint(20) NOT NULL,
  `ACRNo` varchar(13) NOT NULL,
  `heightCentimeters` float NOT NULL,
  `weightKilograms` float NOT NULL,
  `realPropertyIncome` double NOT NULL,
  `grossReceiptsFromBusiness` double NOT NULL,
  `salariesFromProfession` double NOT NULL,
  `dateAndTimeProcessed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classab`
--

INSERT INTO `classab` (`ID`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `citizenship`, `placeOfBirth`, `civilStatus`, `gender`, `profession`, `taxAccountNo`, `ACRNo`, `heightCentimeters`, `weightKilograms`, `realPropertyIncome`, `grossReceiptsFromBusiness`, `salariesFromProfession`, `dateAndTimeProcessed`) VALUES
(1, 'Pedro', 'A.', 'Rivera', '1 Ongpin St., Binondo, Manila', '1980-01-01', 'Filipino', 'Quezon City', 'Single', 'Male', 'Chemical Engineer', 123456789000, '0', 163, 61, 100, 500, 1000, '0000-00-00 00:00:00'),
(2, 'John', 'A.', 'Doe', '1 Carriedo St., Quiapo, Manila', '1965-02-14', 'American', 'Los Angeles, California, USA', 'Divorced', 'Male', 'Warehouse Staff', 987654321000, 'F1003000601TV', 180, 60, 0, 0, 0, '0000-00-00 00:00:00'),
(4, 'Cedric', 'T.', 'Quinto', '1 Gen. Luna, Intramuros, Manila', '2020-01-01', 'Filipino', 'Pasay City', 'Single', 'Male', 'Software Engineer', 123456789000, '', 160, 60, 0, 0, 0, '0000-00-00 00:00:00'),
(12, 'Algene Steven', 'W.', 'Mendoza', '1 Gen. Luna, Intramuros, Manila', '2020-04-30', 'Filipino', 'Pasay City', 'Divorced', 'Female', 'Mechanical Engineer', 888888888888, '', 160, 60, 10, 10, 10, '2020-03-08 10:37:08'),
(16, 'Algene Steven', 'T.', 'Mendoza', '1 Gen. Luna, Intramuros, Manila', '2020-01-01', 'Filipino', 'Pasay City', 'Divorced', 'Male', 'Software Engineer', 123456789000, '', 160, 60, 0, 0, 0, '2020-03-08 16:40:19'),
(17, '', '', '', '', '0000-00-00', '', '', '', '', '', 0, '', 0, 0, 0, 0, 0, '2020-03-08 20:19:28'),
(18, '', '', '', '', '0000-00-00', '', '', '', '', '', 0, '', 0, 0, 0, 0, 0, '2020-03-08 20:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `classc`
--

CREATE TABLE `classc` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middle` varchar(5) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `corporation` varchar(100) NOT NULL,
  `addressOfCorporation` varchar(100) NOT NULL,
  `dateOfRegistration` date NOT NULL,
  `placeOfRegistration` varchar(100) NOT NULL,
  `natureOfBusiness` varchar(50) NOT NULL,
  `nbspTIN` bigint(20) NOT NULL,
  `assessedRealProperty` double NOT NULL,
  `grossEarnings` double NOT NULL,
  `dateAndTimeProcessed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classc`
--

INSERT INTO `classc` (`ID`, `firstName`, `middle`, `lastName`, `corporation`, `addressOfCorporation`, `dateOfRegistration`, `placeOfRegistration`, `natureOfBusiness`, `nbspTIN`, `assessedRealProperty`, `grossEarnings`, `dateAndTimeProcessed`) VALUES
(1, 'Andres', 'D.', 'Mendoza', 'Mendoza Group of Companies', '1000 Roxas Blvd., Ermita, Manila', '2006-12-01', 'Ermita, Manila', 'Corporation', 123789456000, 1000000, 2000000, '0000-00-00 00:00:00'),
(2, 'Vincent', 'A.', 'Xuniga', 'Lebanon Commercial Company', '864 Julio Nakpil St., Tondo, Manila', '2003-01-01', 'Tondo, Manila', 'Corporation', 777777777777, 200000, 500000, '0000-00-00 00:00:00'),
(10, 'Kendrick', 'M.', 'Xuniga', 'Philippine Commercial Company', '1224 D Quiricada St., Sta. Cruz, Manila', '2008-09-23', 'Tondo, Manila', 'Corporation', 333333333333, 200000, 500000, '2020-03-08 10:42:08'),
(11, '', '', '', '', '', '0000-00-00', '', '', 0, 0, 0, '2020-03-08 16:27:22'),
(12, '', '', '', '', '', '0000-00-00', '', '', 0, 0, 0, '2020-03-08 17:12:34'),
(13, '', '', '', '', '', '0000-00-00', '', '', 0, 0, 0, '2020-03-08 17:12:48'),
(14, 'Algene Steven', 'W.', 'Fonte', 'Singapore Commercial Company', '2 Gen. Luna, Intramuros, Manila', '2020-01-01', 'Tondo, Manila', 'Corporation', 333222111667, 300000, 10000, '2020-03-08 17:13:34'),
(15, 'Cedric', 'A.', 'Fonte', 'Philippine Commercial Company', '1224 D Quiricada St., Sta. Cruz, Manila', '2020-01-31', 'Tondo, Manila', 'Corporation', 222111888777, 200000, 10000, '2020-03-08 17:15:29'),
(16, '', '', '', '', '', '0000-00-00', '', '', 0, 0, 0, '2020-03-08 20:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userPass`) VALUES
(1, 'user', 'IskoMoreno2019'),
(2, 'admin', 'Yorme10242019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classa`
--
ALTER TABLE `classa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classab`
--
ALTER TABLE `classab`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classc`
--
ALTER TABLE `classc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classa`
--
ALTER TABLE `classa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `classab`
--
ALTER TABLE `classab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `classc`
--
ALTER TABLE `classc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 05:50 AM
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
  `dateProcessed` date NOT NULL,
  `timeProcessed` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classa`
--

INSERT INTO `classa` (`ID`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `placeOfBirth`, `civilStatus`, `gender`, `dateProcessed`, `timeProcessed`) VALUES
(1, 'Juan', 'A.', 'Dela Cruz', '1 Sales St., Sta. Cruz, Manila', '2000-01-01', 'Tondo, Manila', 'Single', 'Male', '2020-03-11', '12:45:28'),
(2, 'Regina Joyce', 'C.', 'Pacheco', '231 Moderna St., Balut, Tondo, Manila', '1999-05-27', 'Tondo, Manila', 'Single', 'Female', '2020-03-11', '12:47:01');

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
(16, 'Algene Steven', 'T.', 'Mendoza', '1 Gen. Luna, Intramuros, Manila', '2020-01-01', 'Filipino', 'Pasay City', 'Divorced', 'Male', 'Software Engineer', 123456789000, '', 160, 60, 0, 0, 0, '2020-03-08 16:40:19');

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
(14, 'Algene Steven', 'W.', 'Fonte', 'Singapore Commercial Company', '2 Gen. Luna, Intramuros, Manila', '2020-01-01', 'Tondo, Manila', 'Corporation', 333222111667, 300000, 10000, '2020-03-08 17:13:34'),
(15, 'Cedric', 'A.', 'Fonte', 'Philippine Commercial Company', '1224 D Quiricada St., Sta. Cruz, Manila', '2020-01-31', 'Tondo, Manila', 'Corporation', 222111888777, 200000, 10000, '2020-03-08 17:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `userPass` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userPass`) VALUES
(1, 'user', 'IskoMoreno2019'),
(2, 'admin', 'Yorme10241974');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

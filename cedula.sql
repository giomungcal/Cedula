-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 01:09 AM
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
  `queueNo` varchar(14) NOT NULL,
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

INSERT INTO `classa` (`ID`, `queueNo`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `placeOfBirth`, `civilStatus`, `gender`, `dateProcessed`, `timeProcessed`) VALUES
(1, 'A-001-03142020', 'Cedrick', 'S.', 'Dela Cruz', '1 Antonio St., Brgy. 342, Zone 34, Sta. Cruz, Manila', '1990-01-01', 'Obando, Bulacan', 'Single', 'Male', '2020-03-14', '15:02:01'),
(2, 'A-002-03142020', 'Juan', 'M.', 'Fonte', '10 Moderna St., Balut, Tondo, Manila', '1990-01-01', 'Carmen, Cebu', 'Single', 'Male', '2020-03-14', '15:27:17'),
(3, 'A-003-03142020', 'John', 'F.', 'Flores', '1000 Moderna St., Balut, Tondo, Manila', '2020-01-01', 'San Rafael, Bulacan', 'Single', 'Male', '2020-03-14', '15:58:15'),
(4, 'A-001-03192020', 'Heherson', 'I.', 'Domael', '1 Muralla St., Intramuros, Manila', '1998-08-18', 'Quezon City', 'Single', 'Male', '2020-03-19', '06:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `classab`
--

CREATE TABLE `classab` (
  `ID` int(11) NOT NULL,
  `queueNo` varchar(15) NOT NULL,
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
  `dateProcessed` date NOT NULL,
  `timeProcessed` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classab`
--

INSERT INTO `classab` (`ID`, `queueNo`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `citizenship`, `placeOfBirth`, `civilStatus`, `gender`, `profession`, `taxAccountNo`, `ACRNo`, `heightCentimeters`, `weightKilograms`, `realPropertyIncome`, `grossReceiptsFromBusiness`, `salariesFromProfession`, `dateProcessed`, `timeProcessed`) VALUES
(1, 'A-001-03142020', 'Regina Joyce', 'P.', 'Mungcal', '231 Moderna St., Balut, Tondo, Manila', '1999-05-27', 'Filipino', 'Tondo, Manila', 'Married', 'Female', 'Network Engineer', 777555333111, '', 160, 65, 0, 0, 0, '2020-03-14', '16:01:41'),
(2, 'A-001-03192020', 'Giomar', 'C.', 'Cajucom', '2 Muralla St., Intramuros, Manila', '1998-05-15', 'Filipino', 'San Rafael, Bulcan', 'Single', 'Male', 'Chief Technology Officer', 515515515515, '', 170, 59, 0, 0, 0, '2020-03-19', '07:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `classc`
--

CREATE TABLE `classc` (
  `ID` int(11) NOT NULL,
  `queueNo` varchar(14) NOT NULL,
  `dateProcessed` date NOT NULL,
  `timeProcessed` time NOT NULL,
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
  `grossEarnings` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classc`
--

INSERT INTO `classc` (`ID`, `queueNo`, `dateProcessed`, `timeProcessed`, `firstName`, `middle`, `lastName`, `corporation`, `addressOfCorporation`, `dateOfRegistration`, `placeOfRegistration`, `natureOfBusiness`, `nbspTIN`, `assessedRealProperty`, `grossEarnings`) VALUES
(1, 'A-001-03142020', '2020-03-14', '16:27:09', 'Karl Vincent', 'M.', 'Pacheco', 'Philippine Ramen Corporation', '1000 Roxas Blvd., Ermita, Manila', '2015-01-01', 'Ermita, Manila', 'Food Services', 333333333333, 1000000, 500000),
(2, 'A-002-03142020', '2020-03-14', '16:40:27', 'Vincent', 'M.', 'Zuniga', 'VZ Group of Companies', '1 Julio Nakpil St., Tondo, Manila', '2001-04-03', 'Makati CBD', 'Engineering and Construction', 122344566788, 5456789.01, 4231755.44),
(3, 'A-001-03192020', '2020-03-19', '08:03:45', 'Regina Joyce', 'F.', 'Cruz', 'Cruz-Pacheco-Cruzado Land and Lifescapes', '120 España Blvd., Sampaloc, Manila', '2017-10-20', 'Sampaloc, Manila', 'Real Estate', 102030405060, 2234123.22, 1896423.75);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classab`
--
ALTER TABLE `classab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classc`
--
ALTER TABLE `classc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

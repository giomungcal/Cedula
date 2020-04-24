-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 08:09 AM
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
  `communityTax` int(11) NOT NULL,
  `dateProcessed` date NOT NULL,
  `timeProcessed` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classa`
--

INSERT INTO `classa` (`ID`, `queueNo`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `placeOfBirth`, `civilStatus`, `gender`, `communityTax`, `dateProcessed`, `timeProcessed`) VALUES
(1, 'A-001-03142020', 'Cedrick', 'S.', 'Dela Cruz', '1 Antonio St., Brgy. 342, Zone 34, Sta. Cruz, Manila', '1990-01-01', 'Obando, Bulacan', 'Single', 'Male', 10, '2020-03-14', '15:02:01'),
(2, 'A-002-03142020', 'Juan', 'M.', 'Fonte', '10 Moderna St., Balut, Tondo, Manila', '1990-01-01', 'Carmen, Cebu', 'Single', 'Male', 10, '2020-03-14', '15:27:17'),
(3, 'A-003-03142020', 'John', 'F.', 'Flores', '1000 Moderna St., Balut, Tondo, Manila', '2020-01-01', 'San Rafael, Bulacan', 'Single', 'Male', 10, '2020-03-14', '15:58:15'),
(4, 'A-001-03192020', 'Heherson', 'I.', 'Domael', '1 Muralla St., Intramuros, Manila', '1998-08-18', 'Quezon City', 'Single', 'Male', 10, '2020-03-19', '06:37:04'),
(5, 'A-002-03192020', 'Ma. Regina', 'V.', 'Guerra', '3 Felix Hidalgo St., Quiapo, Manila', '1973-04-02', 'Chinese General Hospital', 'Married', 'Female', 10, '2020-03-19', '09:57:25'),
(6, 'A-001-04022020', 'Giomar Erick', 'E.', 'Maico', '1024 España Blvd., Sampaloc, Manila', '2001-03-31', 'Tanay, Rizal', 'Married', 'Male', 10, '2020-04-02', '16:37:43'),
(7, 'A-002-04022020', 'Regina Jovita', 'C.', 'Mungcal', '121 Laong Laan Rd., Sampaloc, Manila', '2000-01-01', 'Pasig', 'Single', 'Female', 10, '2020-04-02', '17:53:07'),
(8, 'A-003-04022020', 'Erick Joshua', 'G.', 'Cruz', '9 Felix Hidalgo St., Quiapo, Manila', '1968-01-01', 'Quezon City', 'Single', 'Male', 10, '2020-04-02', '18:06:15'),
(9, 'A-001-04222020', 'John Carlo', 'Q.', 'Chua', '1 Magallanes St., Intramuros, Manila', '1990-01-01', 'Muntinlupa', 'Married', 'Male', 10, '2020-04-22', '21:23:21'),
(10, 'A-001-04242020', 'Jovita', 'M.', 'Fonte', '1 Recto Ave., Manila', '1994-01-01', 'Quezon City', 'Widowed', 'Female', 10, '2020-04-24', '13:51:06');

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
  `communityTax` int(11) NOT NULL,
  `dateProcessed` date NOT NULL,
  `timeProcessed` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classab`
--

INSERT INTO `classab` (`ID`, `queueNo`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `citizenship`, `placeOfBirth`, `civilStatus`, `gender`, `profession`, `taxAccountNo`, `ACRNo`, `heightCentimeters`, `weightKilograms`, `realPropertyIncome`, `grossReceiptsFromBusiness`, `salariesFromProfession`, `communityTax`, `dateProcessed`, `timeProcessed`) VALUES
(1, 'AB-001-03142020', 'Regina Joyce', 'P.', 'Mungcal', '231 Moderna St., Balut, Tondo, Manila', '1999-05-27', 'Filipino', 'Tondo, Manila', 'Married', 'Female', 'Network Engineer', 777555333111, '', 160, 65, 0, 0, 0, 10, '2020-03-14', '16:01:41'),
(2, 'AB-001-03192020', 'Giomar', 'C.', 'Cajucom', '2 Muralla St., Intramuros, Manila', '1998-05-15', 'Filipino', 'San Rafael, Bulcan', 'Single', 'Male', 'Chief Technology Officer', 515515515515, '', 170, 59, 0, 0, 0, 10, '2020-03-19', '07:15:57'),
(3, 'AB-002-03192020', 'Giomar Luis', 'V.', 'Manzano', '35 Magallanes St., Intramuros, Manila', '1979-10-31', 'Filipino', 'Chinese General Hospital', 'Married', 'Male', 'Actor', 257257257257, '', 175, 60, 0, 0, 0, 10, '2020-03-19', '09:23:14'),
(4, 'AB-001-04012020', 'Karlo', 'F.', 'Africano', '1 Solano St., Intramuros, Manila', '1994-09-04', 'Filipino', 'Pasay City', 'Married', 'Male', 'Entrepreneur', 904904904998, '', 172, 69, 1, 2, 2, 15, '2020-04-01', '20:18:28'),
(5, 'AB-002-04012020', 'Erick Joshua', 'G.', 'Mungcal', '120 Laong Laan Rd., Sampaloc, Manila', '1998-12-01', 'Filipino', 'San Pedro, Laguna', 'Married', 'Male', 'Information Technology Officer IV', 515515515511, '', 180, 70, 0, 0, 0, 10, '2020-04-01', '20:56:10'),
(6, 'AB-001-04022020', 'Erick Joshua', 'P.', 'Guerra', '1 Cabildo St., Intramuros, Manila', '1998-04-15', 'Filipino', 'Lipa, Batangas', 'Single', 'Male', 'Professor', 225415403513, '', 175, 70, 0, 0, 0, 10, '2020-04-02', '15:32:25');

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
  `grossEarnings` double NOT NULL,
  `communityTax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classc`
--

INSERT INTO `classc` (`ID`, `queueNo`, `dateProcessed`, `timeProcessed`, `firstName`, `middle`, `lastName`, `corporation`, `addressOfCorporation`, `dateOfRegistration`, `placeOfRegistration`, `natureOfBusiness`, `nbspTIN`, `assessedRealProperty`, `grossEarnings`, `communityTax`) VALUES
(1, 'C-001-03142020', '2020-03-14', '16:27:09', 'Karl Vincent', 'M.', 'Pacheco', 'Philippine Ramen Corporation', '1000 Roxas Blvd., Ermita, Manila', '2015-01-01', 'Ermita, Manila', 'Food Services', 333333333333, 1000000, 500000, 1100),
(2, 'C-002-03142020', '2020-03-14', '16:40:27', 'Vincent', 'M.', 'Zuniga', 'VZ Group of Companies', '1 Julio Nakpil St., Tondo, Manila', '2001-04-03', 'Makati CBD', 'Engineering and Construction', 122344566788, 5456789.01, 4231755.44, 4375.42),
(3, 'C-001-03192020', '2020-03-19', '08:03:45', 'Regina Joyce', 'F.', 'Cruz', 'Cruz-Pacheco-Cruzado Land and Lifescapes', '120 España Blvd., Sampaloc, Manila', '2017-10-20', 'Sampaloc, Manila', 'Real Estate', 102030405060, 2234123.22, 1896423.75, 2152.22),
(4, 'C-001-04012020', '2020-04-01', '20:42:30', 'Giomar Vincent', 'P.', 'Guerra', 'Guerra Holdings, Inc.', '2 Muralla St., Intramuros, Manila', '2012-12-21', 'Intramuros, Manila', 'Stocks', 102201901876, 1250700.36, 500240.49, 1200.38),
(5, 'C-001-04022020', '2020-04-02', '16:01:33', 'Regina Sharmaine', 'F.', 'Fonte', 'Fonte Foods Corporation', '22 Solana St., Intramuros, Manila', '1993-09-04', 'Intramuros, Manila', 'Food and Beverages', 102030406683, 1000000, 800000, 1220),
(6, 'C-002-04022020', '2020-04-02', '16:12:48', 'Giomar Joshua', 'M.', 'Mungcal', 'GJMM Incorporated', '500 Carriedo St., Quiapo, Manila', '1992-01-10', 'Quiapo, Manila', 'Professional Services', 434657989002, 6230186.65, 245874.93, 3090.42);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `classab`
--
ALTER TABLE `classab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classc`
--
ALTER TABLE `classc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

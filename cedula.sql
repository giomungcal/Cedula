-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 03:39 AM
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
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classa`
--

INSERT INTO `classa` (`ID`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `placeOfBirth`, `civilStatus`, `gender`) VALUES
(1, 'Juan', 'A.', 'Dela Cruz', '1 Sales St., Sta. Cruz, Manila', '2000-01-01', 'Tondo, Manila', 'single', 'male'),
(2, 'Maria', 'B.', 'Flores', '2 Sales St., Sta. Cruz, Manila', '1999-12-25', 'Sampaloc, Manila', 'Married', 'Female'),
(3, 'Pedro', 'C.', 'Flores', '3 Sales St., Sta. Cruz, Manila', '1975-12-31', 'Los Baños, Laguna', 'Married', 'Male'),
(4, 'Fernando', 'F.', 'Fernando', '1 Fernando St., Malate, Manila', '2000-01-01', 'Manila', 'Single', 'Male'),
(5, 'Antonio', 'A.', 'Antonio', '1 Antonio St., Brgy. 342, Zone 34, Sta. Cruz, Manila', '2000-12-30', 'Manila', 'Married', 'Male'),
(6, 'Maria', 'S.', 'Mendoza', '5 Sales St., Sta. Cruz, Manila', '2000-02-02', 'Manila', 'Single', 'Female'),
(14, 'Angelo', 'A.', 'Abad', '77 Fernando St., Malate, Manila', '1990-01-01', 'Malate, Manila', 'Single', 'Male'),
(15, '', '', '', '', '0000-00-00', '', '', '');

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
  `salariesFromProfession` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classab`
--

INSERT INTO `classab` (`ID`, `firstName`, `middle`, `lastName`, `homeAddress`, `dateOfBirth`, `citizenship`, `placeOfBirth`, `civilStatus`, `gender`, `profession`, `taxAccountNo`, `ACRNo`, `heightCentimeters`, `weightKilograms`, `realPropertyIncome`, `grossReceiptsFromBusiness`, `salariesFromProfession`) VALUES
(1, 'Pedro', 'A.', 'Rivera', '1 Ongpin St., Binondo, Manila', '1980-01-01', 'Filipino', 'Quezon City', 'Single', 'Male', 'Chemical Engineer', 123456789000, '0', 163, 61, 100, 500, 1000),
(2, 'John', 'A.', 'Doe', '1 Carriedo St., Quiapo, Manila', '1965-02-14', 'American', 'Los Angeles, California, USA', 'Divorced', 'Male', 'Warehouse Staff', 987654321000, 'F1003000601TV', 180, 60, 0, 0, 0);

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
  `grossEarnings` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classc`
--

INSERT INTO `classc` (`ID`, `firstName`, `middle`, `lastName`, `corporation`, `addressOfCorporation`, `dateOfRegistration`, `placeOfRegistration`, `natureOfBusiness`, `nbspTIN`, `assessedRealProperty`, `grossEarnings`) VALUES
(1, 'Andres', 'D.', 'Mendoza', 'Mendoza Group of Companies', '1000 Roxas Blvd., Ermita, Manila', '2006-12-01', 'Ermita, Manila', 'Corporation', 123789456000, 1000000, 2000000);

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
(1, 'user', 'IskoMoreno2019');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `classab`
--
ALTER TABLE `classab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classc`
--
ALTER TABLE `classc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

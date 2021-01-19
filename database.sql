-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2020 at 09:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14216513_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendance`
--

CREATE TABLE `Attendance` (
  `Rollno` int(11) NOT NULL,
  `DM` int(3) NOT NULL DEFAULT 0,
  `AWT` int(3) NOT NULL DEFAULT 0,
  `JAVA` int(3) NOT NULL DEFAULT 0,
  `OS` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student attendance';

-- --------------------------------------------------------

--
-- Table structure for table `Classes`
--

CREATE TABLE `Classes` (
  `class` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `mentor` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DM` int(3) NOT NULL,
  `AWT` int(3) NOT NULL,
  `JAVA` int(3) NOT NULL,
  `OS` int(3) NOT NULL,
  `Mphno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `MarksSt1`
--

CREATE TABLE `MarksSt1` (
  `Rollno` int(11) NOT NULL,
  `DM` int(2) NOT NULL DEFAULT 0,
  `AWT` int(2) NOT NULL DEFAULT 0,
  `JAVA` int(2) NOT NULL,
  `OS` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `class` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Message` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `StudentDetails`
--

CREATE TABLE `StudentDetails` (
  `rollno` int(11) NOT NULL,
  `Username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Fathername` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Year` int(1) NOT NULL,
  `img` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Ph` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Class` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Attendance`
--
ALTER TABLE `Attendance`
  ADD PRIMARY KEY (`Rollno`);

--
-- Indexes for table `MarksSt1`
--
ALTER TABLE `MarksSt1`
  ADD PRIMARY KEY (`Rollno`);

--
-- Indexes for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Attendance`
--
ALTER TABLE `Attendance`
  MODIFY `Rollno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MarksSt1`
--
ALTER TABLE `MarksSt1`
  MODIFY `Rollno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  MODIFY `rollno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

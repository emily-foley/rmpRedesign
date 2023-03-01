-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 11:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmpaccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `email` text CHARACTER SET utf32 NOT NULL,
  `password` text CHARACTER SET utf32 NOT NULL,
  `re_password` text CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `email`, `password`, `re_password`) VALUES
(1, 'yaraa.anwar2@gmail.com', '$2y$10$SbKgCTZkTo/cw6H2XlBQnOvm91.kuJ.h3vmPP1/Jpf9EddCrHC6Fm', ''),
(2, 'emily@gmail.com', '$2y$10$VxZTAYMhBbVWlP2MIIQOGeHjyb79cDD2pW1WaD7wHBGWaig2VsiUW', ''),
(3, 'yara@anw.com', '$2y$10$A5pDytwDbVFBGXSZT1VZBO4OWBspOBLbbmk40vJeoopAoxJBcFCd.', '12345'),
(4, 'yara@me.com', '$2y$10$pFslOva8wlGcl8JZNuyDz.FobP8Qrz/MNTTMlG.ODW9rAbtJ5AHCa', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: net1255
-- Generation Time: Mar 02, 2023 at 02:14 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ya818631`
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
(4, 'yara@me.com', '$2y$10$pFslOva8wlGcl8JZNuyDz.FobP8Qrz/MNTTMlG.ODW9rAbtJ5AHCa', '12345'),
(5, 'yara@anw.com', '$2y$10$iRdK8n9ouwLKGw7xxPhS4eVl8/rKy6j/W0Rs3Z2gcEzflRW8GiM/O', '112'),
(6, 'yo@yo.com', '$2y$10$ozhF64r.dBLjpTozdonnluNKdbJm4/jzlXJpO45Ka3tow9Ggh/2zq', 'hi'),
(7, 'hi@hello.com', '$2y$10$tw8SyRK4fOivy2VHspqR/eUgXY7FzWdxdqo3RodDWdEoEpCTe8kbe', 'pop');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `rating` float(2,1) NOT NULL,
  `num_ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ID` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `re_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

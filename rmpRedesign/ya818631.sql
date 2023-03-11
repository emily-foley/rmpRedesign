-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: net1255
-- Generation Time: Mar 11, 2023 at 03:55 AM
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
-- Table structure for table `personalization`
--

CREATE TABLE `personalization` (
  `ID` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalization`
--

INSERT INTO `personalization` (`ID`, `q1`, `q2`, `q3`, `q4`) VALUES
(1, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `professorID` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `school` varchar(255) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`professorID`, `name`, `school`) VALUES
(4, 'Leonardo DiCaprio', 'UCF'),
(5, 'Tom Cruise', 'UCF'),
(6, 'Chris Evans', 'UCF');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ratingID` int(11) NOT NULL,
  `professorID` int(11) NOT NULL,
  `course` text NOT NULL,
  `online` text NOT NULL,
  `rating` text NOT NULL,
  `difficulty` text NOT NULL,
  `again` text NOT NULL,
  `textbooks` text NOT NULL,
  `grade` text NOT NULL,
  `review` text CHARACTER SET utf32 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`ratingID`, `professorID`, `course`, `online`, `rating`, `difficulty`, `again`, `textbooks`, `grade`, `review`, `date`) VALUES
(19, 6, 'DIG4813', 'Online course', '5.0', '3.0', 'Yes', 'No', 'B', 'This is the best professor I have ever taken in my life. He truly wants you to understand the material and gives you every opportunity to fully understand what he is teaching. All of his interactions have the utmost respect and he is understanding that the topics he is teaching are difficult to grasp. I wish he taught web design work shop!', '2023-03-10'),
(20, 6, 'DIG4172C', 'Online course', '2.0', '5.0', 'No', 'No', 'D', 'Very tough class! Asked for help multiple times on discord and he never responded to my questions, always skipped over them. When he did answer one of them it was never a full on answer. Assignment dates were all over the place but he was nice enough to push back assignments that the whole class had trouble with.', '2023-03-10'),
(21, 6, 'DIG4172C', 'Online course', '1.0', '5.0', 'No', 'No', 'C', 'I have taken one web development class and was thrown into the deep in with a weight around my neck trying to figure out video game coding / programming. Vague instructions led to many hours stressing and endless nights completing assignments.', '2023-03-10'),
(23, 4, 'DIG3043', '', '4.0', '4.0', 'Yes', 'No', 'A', 'A bit aloof, but his assignments helped me understand and apply what we learned. Try to figure things out on your own and ask him specific questions. I used a lot of sources online to help me understand the material more. A VERY picky grader and will deduct points for minute things he specifically asks for.', '2023-03-10'),
(24, 4, 'DIG4813', '', '1.0', '5.0', 'No', 'Yes', 'A', 'This was my first semester at the university of central florida, and I kind say it was the worst semester of my life. I really disliked this class so much, I cried the whole semester because of this class. The professor is very mean he will make you feel dumb and he makes you feel that he enjoys when you are struggling. Wish you had more professors', '2023-03-10'),
(25, 4, 'DIG4172C', '', '5.0', '4.0', 'Yes', 'No', 'A', 'Mixed feelings. Sometimes he could be empathetic if you reached out to him early, gives good feedback, responds to emails within less than an hour & even lets you work in groups. However, he could come off as condescending and snarky. Takes points for the smallest error (file names, etc) even if code is functional and wont let you resubmit.', '2023-03-10'),
(27, 5, 'DIG4172C', '', '3.0', '2.0', 'Yes', 'No', 'A', 'Ive had this professor several semesters. He is very boring but the class is pretty easy. He posts most of his lectures online so you can get away with not going to class.', '2023-03-10'),
(28, 5, 'DIG3043', 'Online course', '5.0', '2.0', 'Yes', 'No', 'A', 'This professor always makes his lectures enjoyable. He infuses his lectures with life lessons and stories that keep you awake and engaged ', '2023-03-10'),
(29, 5, 'DIG4172C', '', '5.0', '3.0', 'Yes', 'No', 'A', 'He was an easy grader. Was quick to respond to emails. His lectures were from another professor. I found them very boring. He included a video of himself as an introduction and it was very entertaining. I wish he were the one speaking in lectures. I plan to take other courses with him in-person.', '2023-03-10');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `re_password`) VALUES
(1, 'hello@hello.com', '$2y$10$DxiPIBNPY.fTf9L9PzPBDOuR8K/DXpVmsWKtKixb/VmqoN1KKFd32', 'hello'),
(2, 'emily@gmail.com', '$2y$10$9Um.VhEzy8ebihBjVssc8u93m6tDAoq16uXKOmP/0lz4eu035eJke', 'emily'),
(3, 'me@me.com', '$2y$10$4Ig5Opsp1/HQwPqiv15niuryodWXcjzLrYx6eyFkUPQvCMhn91FOy', 'me'),
(4, 'e@e.com', '$2y$10$uuHJNZ9c1npdYhpmQqjgtOSgW98JNWncmBlLQaJInz0LuBFnu5yWm', 'eee'),
(5, 'e@e.com', '$2y$10$m9llEcRu.SyQIE2ZXHDmAuvgSYOFweLV5PUJv/wVOOMwh8a3OC6aC', 'eee'),
(6, 'e@e.com', '$2y$10$TCguaEnAftIsnMjGcwoLy.ppYphv.TEy7Nv8Tz.Bye2DWAZhLLyKC', 'eee'),
(7, 'hi@hello.com', '$2y$10$Cp/Uev1lIAQ4MYpRjKPcIuc4WESrL8HQFcDRLqBdLxxXrGfkmLO7G', 'hi'),
(8, 'hi@hello.com', '$2y$10$0xqlbUvLuxqjQF3NYS5n8uk4W.qvNOxQHVO8Klj9sMxGDp8Kg0UpO', 'hi'),
(10, 'si@si.com', '$2y$10$sTpx74y8fM7UgqbY/kP9vOVQTmK2eXvqSuYNxEfW4xHGZc9AoYlO2', 'si'),
(11, 'go@go.com', '$2y$10$erKAKWFpAy7q7q1zx.Vl8es2u5b0ymiLwThO6HbOKo16so6P/7j6q', 'go'),
(12, 'mar@mar.com', '$2y$10$V.Ls19ukw2ecwDUtgzS13.3pKVZqxoQol26nHS8JgBIMx7AHqqpx2', 'mar'),
(13, 'abo@abo.com', '$2y$10$Q870pBXtSz4WRC5ILHE7iuBGB9T/WqSMyXZ4t2fzns1aMZ0BfMmne', 'abo'),
(14, 'hi@hello.com', '$2y$10$hrg6rXIZ8h8lOs.iRTE/puPZSu/WEuiwsc2wHjFdql3fQFEefNlUS', 'mo'),
(15, 'emily@gmail.com', '$2y$10$ak.a/JSdWcxu.CshEMFOV.Z5muQGVocq3IQlCdgsa6tYI1o2hydQi', 'eee'),
(16, 'lolo@lo.com', '$2y$10$rb8bM1g3wQPc.qVV3seLbONiomZjPbTQwjLFDnKrLnJPInUkyN7tC', 'lo'),
(17, 'jk@jk.com', '$2y$10$f4uE7RFmjM84ePPOMd6l8uhOev1bDUrYxV58aMwxHwLXnZ4sWxEZG', 'jk'),
(18, 'kp@Kp.com', '$2y$10$pW5Nbs763A6Envq8E2PXY.SOK6P7IWJWCYIpvD89IcdFVkcIXBv16', 'kp'),
(19, 'email@email.com', '$2y$10$Ddp6ZuqbMHlqXS53.pTv8eXEe5LD0EG00jpvnbrY9.lbn1KinNQy6', 'email'),
(20, 'hi@hi.com', '$2y$10$RNWhoGgy20qd.vmX4Kjaoe6Wwfj4dKDMqX6.ikkKNm12ek3lLv.hm', 'hi'),
(21, 'hola@hola.com', '$2y$10$ZFd10TpOGYM0BPSnteL9UuqR8J1ko60G206V6hIs1mCZB952Ivvom', 'hola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalization`
--
ALTER TABLE `personalization`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`professorID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ratingID`),
  ADD KEY `professorID` (`professorID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalization`
--
ALTER TABLE `personalization`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `professorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ratingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`professorID`) REFERENCES `professors` (`professorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

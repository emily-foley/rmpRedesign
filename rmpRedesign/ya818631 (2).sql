-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: net1255
-- Generation Time: Apr 14, 2023 at 11:00 PM
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
(1, 1, 2, 1, 1),
(2, 1, 2, 1, 2),
(3, 1, 2, 1, 2),
(4, 1, 1, 2, 2),
(5, 2, 1, 2, 1),
(6, 2, 1, 2, 1),
(7, 2, 2, 2, 1);

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
(6, 'Chris Evans', 'UCF'),
(7, 'Drew Barrymore', 'UCF'),
(8, 'Anne Hathaway', 'UCF'),
(9, 'Kevin Hart', 'UCF'),
(10, 'Vin Diesel', 'UCF'),
(11, 'Selena Gomez', 'UCF');

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
(29, 5, 'DIG4172C', '', '5.0', '3.0', 'Yes', 'No', 'A', 'He was an easy grader. Was quick to respond to emails. His lectures were from another professor. I found them very boring. He included a video of himself as an introduction and it was very entertaining. I wish he were the one speaking in lectures. I plan to take other courses with him in-person.', '2023-03-10'),
(31, 5, 'DIG4172C', '', '1.0', '1.0', 'No', 'Yes', 'F', 'Horrible professor.', '2023-03-29'),
(32, 5, 'DIG4172C', '', '1.0', '1.0', 'No', 'Yes', 'F', 'Just terrible.', '2023-03-29'),
(37, 7, 'DIG2000', 'No', '1.0', '3.0', 'No', 'N/A', 'F', 'This class was so difficult! I do not recommend her at all! She takes attendance quizzes, which is a little absurd, and gives out written homework that is due the next class period and there is also online homework due the day of the test, and it is over every single unit so be prepared to spend a lot of time for this class.', '2023-04-05'),
(38, 7, 'DIG2000', 'No', '5.0', '4.0', 'Yes', 'Yes', 'A-', 'Worked hard to make sure every student understood the problems even helped when passing students studying for the test.', '2022-04-05'),
(39, 7, 'DIG2500', 'Yes', '1.0', '5.0', 'No', 'Yes', 'B-', 'RIDICULOUS amount of homework given for an online class. Could not even focus on the material because I was too stressed out with all the homework assignments with multiple steps to each question. She also would suddenly release more homework throughout the class on top of what you thought you had so it is difficult to pace yourself.', '2022-10-27'),
(40, 7, 'DIG2500', 'Yes', '2.0', '4.0', 'No', 'No', 'C-', 'She is unhelpful with an online class. She did not return the midterm test so I could go over what I had gotten wrong. The homework is extremely time-consuming, with tons of steps without actual preparation for test questions. She is not helpful when I needed extra help. Very bad at responding to emails/phone calls.', '2022-04-23'),
(41, 8, 'DIG2109', 'Yes', '1.0', '3.0', 'No', 'N/A', 'A+', 'Professor ghosted the entire class for a month, leaving assignments without due dates and not responding to messages or even showing up to office hours. Compensated by lowering the difficulty of the class.', '2023-02-07'),
(42, 8, 'DIG2109', 'Yes', '5.0', '3.0', 'Yes', 'N/A', 'A', 'Outstanding prof. Not just an easy elective but a good prof to take if you really want to learn about Photoshop. No lectures but she did have helpful YouTube tutorials. 4 projects, all using Photoshop, and were all very fun. Not too hard but definitely expect to put in work if you don\'t know Photoshop.', '2022-12-08'),
(43, 8, 'DIG2030', 'No', '4.0', '3.0', 'Yes', 'N/A', 'A', 'A great professor with fun in-depth assignments, projects you can do with friends, and a final video project with full creative freedom.', '2023-03-01'),
(44, 8, 'DIG4595', 'Yes', '4.0', '1.0', 'Yes', 'No', 'A', 'Hathaway is a great person and it\'s always lovely to speak with her. For this class, she kinda just gave the assignments and we just did them, and that\'s about it. Very easy. She grades the assignments late, but they are so easy that it isn\'t that big of a deal.', '2023-01-03'),
(45, 9, 'DIG2000', 'Yes', '2.0', '2.0', 'No', 'Yes', 'A', 'For a professor who teaches digital media, he does not use his computer very well. Email responses were short, 1-word responses. The lessons are all in the wrong modules, so you don\'t have the correct information to complete the quizzes. When I pointed it out, he brushed me off rudely. Easy A though so I can\'t complain too much.', '2022-12-30'),
(46, 9, 'DIG2000', 'Yes', '4.0', '1.0', 'Yes', 'Yes', 'A', 'Online course, so no real need to communicate with the professor. Coursework and lectures were laid out nicely but instructions were a bit vague/confusing sometimes. Seems to be very easy, though - I put the minimum effort into my projects and still got an A, and I didn\'t even buy the textbook because the tests are so straightforward.', '2023-01-02'),
(47, 9, 'DIG2000', 'Yes', '2.0', '2.0', 'No', 'Yes', 'A', 'Pretty sure our class got mixed curriculums. Went from talking about games, technology, and HTML to analyzing art. Didn\'t get much out of the class for game dev, but was an easy class nonetheless. The book is not really useful and can be safely and securely purchased for a good price on the Internet.', '2022-12-15'),
(48, 9, 'DIG3525', 'No', '4.0', '2.0', 'Yes', 'Yes', 'A-', 'His syllabus says attendance is mandatory but he never checks for attendance and it isn\'t a grade so I barely showed up. As long as you do his assignments, you\'ll pass the class, he\'s an easy grader. Discussion posts, quizzes, projects, and tests will be on this course. Very funny guy though and he does have some engaging lectures.', '2022-12-09'),
(49, 10, 'DIG2030', 'Yes', '1.0', '4.0', 'No', 'No', 'B', 'The whole class is basically a series of group discussions with graded replies and word-count minimums. Who learns anything from these? Then there\'s a final project that builds on skills that we *would* have if we had actually been provided legitimate hands-on assignments throughout the course. It all just culminates to \"figure it out yourself.\"', '2022-12-20'),
(50, 10, 'DIG3043', 'Yes', '5.0', '2.0', 'Yes', 'Yes', 'A+', 'Super chill online class. It\'s divided up into two work-at-your-own-pace sections, both have 6 quizzes, two papers, and an exam. Take your time answering the questions and you\'re golden.', '2023-02-14'),
(51, 10, 'DIG3043', 'Yes', '5.0', '1.0', 'Yes', 'Yes', 'A', 'This is the perfect online class: easy with interesting material. All quizzes and exams are open-book, with 4 short-ish papers due throughout the semester. It\'s possible to work ahead and finish the course in a few days with hard work. Mr. Diesel gave great feedback on papers and was always accessible even without concurrent meetings. Highly recommend!', '2023-04-02'),
(52, 10, 'DIG3043', 'Yes', '5.0', '1.0', 'Yes', 'Yes', 'A', 'Diesel as a lecturer was nonexistent as the entirety of the class was taught via the mandatory online textbook, but as a feedback provider, he provided very insightful feedback. He was also very open-minded, giving full credit to you even if he disagreed with your opinions (as long as you wrote the assignment correctly).', '2023-03-07'),
(53, 11, 'PUR3100', 'No', '5.0', '2.0', 'Yes', 'No', 'A', 'TOP on my best professors list! Although new to teaching she is very well-versed in the PR field (10+ years) and very well-known in the community. This is actually the first time I\'ve posted a rate my professor\'s comment (that is how strongly I feel). Lots of guest speakers. Didn\'t use the book but now want to purchase it. MUST TAKE HER!', '2023-04-02'),
(54, 11, 'PUR3100', 'No', '5.0', '1.0', 'Yes', 'No', 'A', 'TAKE HER YOU WON\'T REGRET IT!! She is extremely helpful and ALWAYS there for her students. By far the best teacher I have ever had. She gives a daily quiz every class but they\'re pretty easy, she gives you exactly what you need to study for on the class website. One big final at the end, questions come from the quizzes throughout the semester.', '2023-03-12'),
(55, 11, 'PUR3100', 'No', '5.0', '2.0', 'Yes', 'No', 'A', 'By far the best teacher I have had in my three years at UCF. She helped us out so much outside of school and even got me an internship. Her real-world experience makes the class relevant and enhanced my interest in PR. She continues to keep in contact with us and helps us make connections as we prepare for the real world. Highly recommended!', '2023-02-21'),
(56, 11, 'PUR3100', 'No', '5.0', '1.0', 'Yes', 'No', 'A', 'Selena is a great teacher. She makes the class very interesting. There was almost always an interesting speaker. She was very helpful with assignments and made sure we understood and did well. Make sure to keep up on current news because she has news questions on the quizzes.', '2023-01-13'),
(57, 5, 'DIG3043', 'Online course', '2.0', '5.0', 'No', 'Yes', 'B', 'hi', '2023-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `re_password` text NOT NULL,
  `quizScore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `re_password`, `quizScore`) VALUES
(1, 'hello@hello.com', '$2y$10$DxiPIBNPY.fTf9L9PzPBDOuR8K/DXpVmsWKtKixb/VmqoN1KKFd32', 'hello', 0),
(2, 'emily@gmail.com', '$2y$10$9Um.VhEzy8ebihBjVssc8u93m6tDAoq16uXKOmP/0lz4eu035eJke', 'emily', 0),
(3, 'me@me.com', '$2y$10$4Ig5Opsp1/HQwPqiv15niuryodWXcjzLrYx6eyFkUPQvCMhn91FOy', 'me', 0),
(4, 'e@e.com', '$2y$10$uuHJNZ9c1npdYhpmQqjgtOSgW98JNWncmBlLQaJInz0LuBFnu5yWm', 'eee', 0),
(5, 'e@e.com', '$2y$10$m9llEcRu.SyQIE2ZXHDmAuvgSYOFweLV5PUJv/wVOOMwh8a3OC6aC', 'eee', 0),
(6, 'e@e.com', '$2y$10$TCguaEnAftIsnMjGcwoLy.ppYphv.TEy7Nv8Tz.Bye2DWAZhLLyKC', 'eee', 0),
(7, 'hi@hello.com', '$2y$10$Cp/Uev1lIAQ4MYpRjKPcIuc4WESrL8HQFcDRLqBdLxxXrGfkmLO7G', 'hi', 0),
(8, 'hi@hello.com', '$2y$10$0xqlbUvLuxqjQF3NYS5n8uk4W.qvNOxQHVO8Klj9sMxGDp8Kg0UpO', 'hi', 0),
(10, 'si@si.com', '$2y$10$sTpx74y8fM7UgqbY/kP9vOVQTmK2eXvqSuYNxEfW4xHGZc9AoYlO2', 'si', 0),
(11, 'go@go.com', '$2y$10$erKAKWFpAy7q7q1zx.Vl8es2u5b0ymiLwThO6HbOKo16so6P/7j6q', 'go', 0),
(12, 'mar@mar.com', '$2y$10$V.Ls19ukw2ecwDUtgzS13.3pKVZqxoQol26nHS8JgBIMx7AHqqpx2', 'mar', 0),
(13, 'abo@abo.com', '$2y$10$Q870pBXtSz4WRC5ILHE7iuBGB9T/WqSMyXZ4t2fzns1aMZ0BfMmne', 'abo', 0),
(14, 'hi@hello.com', '$2y$10$hrg6rXIZ8h8lOs.iRTE/puPZSu/WEuiwsc2wHjFdql3fQFEefNlUS', 'mo', 0),
(15, 'emily@gmail.com', '$2y$10$ak.a/JSdWcxu.CshEMFOV.Z5muQGVocq3IQlCdgsa6tYI1o2hydQi', 'eee', 0),
(16, 'lolo@lo.com', '$2y$10$rb8bM1g3wQPc.qVV3seLbONiomZjPbTQwjLFDnKrLnJPInUkyN7tC', 'lo', 0),
(17, 'jk@jk.com', '$2y$10$f4uE7RFmjM84ePPOMd6l8uhOev1bDUrYxV58aMwxHwLXnZ4sWxEZG', 'jk', 0),
(18, 'kp@Kp.com', '$2y$10$pW5Nbs763A6Envq8E2PXY.SOK6P7IWJWCYIpvD89IcdFVkcIXBv16', 'kp', 0),
(19, 'email@email.com', '$2y$10$Ddp6ZuqbMHlqXS53.pTv8eXEe5LD0EG00jpvnbrY9.lbn1KinNQy6', 'email', 0),
(20, 'hi@hi.com', '$2y$10$RNWhoGgy20qd.vmX4Kjaoe6Wwfj4dKDMqX6.ikkKNm12ek3lLv.hm', 'hi', 0),
(21, 'hola@hola.com', '$2y$10$ZFd10TpOGYM0BPSnteL9UuqR8J1ko60G206V6hIs1mCZB952Ivvom', 'hola', 0),
(27, 'alo@gmail.com', '$2y$10$DwIAJUqqD5P2w2FKTt.zFO7Fi9VGb/quh.QWgwqEXx8wZ9dSbqNHy', 'alo', 0),
(28, 'alo@gmail.com', '$2y$10$LBZxsMM8u9LpaHkwp16sfek8623gVmgssxssnt5J2Qytl3XLdFxkC', 'alo', 0),
(29, 'alo@gmail.com', '$2y$10$M7eHtfTN7DvsPPHieVxZZuycXWA5hz0Tecv.090vI91UdULebaUtK', 'alo', 0),
(30, 'qwe@qwe.com', '$2y$10$UyV.N1PXuXeykv3/xjNcRuhwsUWBabLPWKXYifOG2f5cS3Y9bOlbS', 'qwe', 0),
(31, 'pear@pear.com', '$2y$10$/hi8P9zv7w6BoCLbUURiu.PkZFTKdGqFgucvRv8CdrShI6VKqP/pS', 'pear', 0),
(32, 'kiwi@kiwi.com', '$2y$10$eyk6r.VCrgOP77WHGC8aQe8/uBWmxJoHxRHUuEOx5yMCq43s/GQrC', 'kiwi', 0),
(33, 'fruit@fruit.com', '$2y$10$rtO1xSiqlyoB1yeCYuQaiOrQRx1JeYQxXlxA1RE22VkjWIqsQh1Da', 'fruit', 0),
(34, 'alo@gmail.com', '$2y$10$e2aPxjlZWen1xa5fRWlUJua9fxV/al.eRBD1UrA2Xqc1tkc1N8R1q', 'alo', 0),
(35, 'lola@lo.com', '$2y$10$DVX1m7kHK.o0S/TbgkXKR.K19EuR29hYSxoYcSKV9NpPjQLhMlf9C', 'lola', 0),
(36, 'r@R.com', '$2y$10$tvRZy8sQ4bjk5Cy0zc5vhewITTJw1G3f3It1BxNLSJMKjjZMkHxIC', 'r', 0),
(37, '2@2.com', '$2y$10$xbGTpHF8PNeKE.Pf/Suf.O2V4NQpfEBIFTWRg3tks9sA7CSZYzWSu', '2', 0),
(38, 'p@p.com', '$2y$10$X3jiK84Yl8NUqc8Z/hCQTO83zO6F8ETO5yDLj9JucOwp5nkhoMLlm', 'p', 0),
(39, 'hello@3.com', '$2y$10$ZcfMBehHcg8PyEprfB.YmuY9P3AotNE3WLwPMa.iJYbJY3.rrTkNG', '3', 0),
(40, '8@8.com', '$2y$10$5JWquSFRtkHJ1EwC3V2Ri.BBRG/8I3vfMnCadpSdoxsgRTjDbIjdO', '8', 0),
(41, '1234@gmail.com', '$2y$10$DCa1ySvrf1GvQqe7KyQwQ.lZSQk0RmA3oJyC7vu7oPJ0NyyYz1qje', '1234', 0),
(42, 'yara@anwar.com', '$2y$10$XpcAVFq3TOqlYyVklJ1MaOqBIeJ/u9Dyd7TfuhqTdDX7exw9QmzsO', 'yara', 0),
(43, 'alo@mail.com', '$2y$10$RyXmt0klT8K2ID4UYX81duAFS4RFPn6pTcaffL0SGwpqTIW1Eqsra', 'alo', 0),
(44, '5@5.com', '$2y$10$gB29apbmCMG3iQrOOtxGbOiXei9sVGAIfMIjg6ME8jH5OAepcZUqW', '5', 7),
(45, '4@4.com', '$2y$10$/jrkFB4TSSGfWpeR051xr.MKUVtqvYEUQRbIdTP6l1//zirgp83cW', '4', 5),
(46, '6@6.com', '$2y$10$WVhdiGPLNMSM841r6Toi3eeFKYH2OpAJXU0/iAMRTW/s8HIfRYV0a', '6', 4);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `professorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ratingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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

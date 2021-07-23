-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 02:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learningdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(50) NOT NULL,
  `ass_id` varchar(255) NOT NULL,
  `ass_title` varchar(255) NOT NULL,
  `ass_desc` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_lecturer` varchar(255) NOT NULL,
  `ass_file` varchar(255) NOT NULL,
  `submit_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `ass_id`, `ass_title`, `ass_desc`, `course_name`, `course_lecturer`, `ass_file`, `submit_date`) VALUES
(12, 'e-learning/ass/20-07-211626745184', 'first ass', 'sxxwwx', 'e-learning/course/20-07-211626740269', 'e-learning/lecturer/19-07-211626706448', 'assignment-first ass-2007211626745184.zip', '2021-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_lecturer` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `course_lecturer`, `course_name`, `course_title`) VALUES
(6, 'e-learning/course/20-07-211626740252', 'e-learning/lecturer/18-07-211626601342', 'com113', 'computer programmin'),
(7, 'e-learning/course/20-07-211626740269', 'e-learning/lecturer/19-07-211626706448', 'com112', 'system programmin'),
(9, 'e-learning/course/20-07-211626740308', 'e-learning/lecturer/18-07-211626601342', 'com101', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `course_reg`
--

CREATE TABLE `course_reg` (
  `id` int(50) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_reg`
--

INSERT INTO `course_reg` (`id`, `course_id`, `student_id`) VALUES
(5, 'e-learning/course/20-07-211626740269', 'e-learning/student/20-07-211626740828'),
(13, 'e-learning/course/20-07-211626740252', 'e-learning/student/20-07-211626788062'),
(14, 'e-learning/course/20-07-211626740269', 'e-learning/student/20-07-211626788062'),
(15, 'e-learning/course/20-07-211626740252', 'e-learning/student/20-07-211626740828');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `lecture_id` varchar(255) NOT NULL,
  `course_lecturer` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_file` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `lecture_id`, `course_lecturer`, `course_name`, `course_file`, `title`, `description`) VALUES
(12, 'e-learning/lecture/20-07-211626740406', 'e-learning/lecturer/19-07-211626706448', 'e-learning/course/20-07-211626740269', 'lecture-first lecture-2007211626740406.zip', 'first lecture', 'rcknlknl'),
(13, 'e-learning/lecture/20-07-211626740478', 'e-learning/lecturer/18-07-211626601342', 'e-learning/course/20-07-211626740308', 'lecture-desccc-2007211626740478.zip', 'desccc', 'cewewcewc');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(50) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `student_id`, `course`, `question`, `answer`) VALUES
(5, 'e-learning/question/2107211626851104', 'e-learning/student/20-07-211626788062', 'e-learning/course/20-07-211626740269', 'can we get a pdf link to your last lecture?', 'www'),
(6, 'e-learning/question/2107211626851642', 'e-learning/student/20-07-211626740828', 'e-learning/course/20-07-211626740252', 'new question', ''),
(7, 'e-learning/question/2107211626851806', 'e-learning/student/20-07-211626740828', 'e-learning/course/20-07-211626740252', 'last question', ''),
(8, 'e-learning/question/2107211626851841', 'e-learning/student/20-07-211626740828', 'e-learning/course/20-07-211626740308', 'wciicmomocwoim', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(50) NOT NULL,
  `result_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `test_id` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submit_ass`
--

CREATE TABLE `submit_ass` (
  `id` int(50) NOT NULL,
  `ass_id` varchar(255) NOT NULL,
  `submission_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `ass_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_ass`
--

INSERT INTO `submit_ass` (`id`, `ass_id`, `submission_id`, `student_id`, `ass_file`) VALUES
(4, 'e-learning/ass/20-07-211626745184', 'e-learning/submit_ass/20-07-211626788002', 'e-learning/student/20-07-211626740828', 'submitted-2007211626788002.zip'),
(5, 'e-learning/ass/20-07-211626745184', 'e-learning/submit_ass/20-07-211626788487', 'e-learning/student/20-07-211626788062', 'submitted-2007211626788487.zip');

-- --------------------------------------------------------

--
-- Table structure for table `test_tb`
--

CREATE TABLE `test_tb` (
  `id` int(50) NOT NULL,
  `test_id` varchar(255) NOT NULL,
  `test_title` varchar(255) NOT NULL,
  `test_course` varchar(255) NOT NULL,
  `test_date` varchar(255) NOT NULL,
  `test_time` varchar(255) NOT NULL,
  `test_lecturer` varchar(255) NOT NULL,
  `test_status` varchar(255) NOT NULL DEFAULT 'pending',
  `test_table` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_tb`
--

INSERT INTO `test_tb` (`id`, `test_id`, `test_title`, `test_course`, `test_date`, `test_time`, `test_lecturer`, `test_status`, `test_table`) VALUES
(39, 'e-learning/test/1626999463230721', 'first test', 'e-learning/course/20-07-211626740252', '2021-07-26', '08:00', 'e-learning/lecturer/18-07-211626601342', 'pending', 'e-learning/course/20-07-211626740252_first test');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(50) NOT NULL,
  `portal_id` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course_duration` int(10) NOT NULL,
  `state_of_origin` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `portal_id`, `user_email`, `user_name`, `user_password`, `usertype`, `user_dob`, `department`, `course_duration`, `state_of_origin`, `lga`, `country`, `gender`, `level`, `session`) VALUES
(13, 'e-learning/admin/18-07-211626559391', 'willemzy2002@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '', '', 0, '', '', '', '', '', ''),
(26, 'e-learning/admin/18-07-211626601327', 'emma@mail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '', '', 0, '', '', '', '', '', ''),
(27, 'e-learning/lecturer/18-07-211626601342', 'presh@mail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'lecturer', '', '', 0, '', '', '', '', '', ''),
(28, 'e-learning/lecturer/19-07-211626706448', 'heinze@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'lecturer', '', '', 0, '', '', '', '', '', ''),
(29, 'e-learning/student/20-07-211626740828', 'victor@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'student', '', '', 0, '', '', '', '', '', ''),
(30, 'e-learning/student/20-07-211626788062', 'ebube@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'student', '', '', 0, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_reg`
--
ALTER TABLE `course_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_ass`
--
ALTER TABLE `submit_ass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_tb`
--
ALTER TABLE `test_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_reg`
--
ALTER TABLE `course_reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `submit_ass`
--
ALTER TABLE `submit_ass`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test_tb`
--
ALTER TABLE `test_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

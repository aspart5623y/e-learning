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
-- Database: `exam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `e-learning/course/20-07-211626740252_first test`
--

CREATE TABLE `e-learning/course/20-07-211626740252_first test` (
  `id` int(50) UNSIGNED NOT NULL,
  `ques_id` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL,
  `answer_5` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e-learning/course/20-07-211626740252_first test`
--

INSERT INTO `e-learning/course/20-07-211626740252_first test` (`id`, `ques_id`, `question`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `correct`) VALUES
(1, 'e-learning/ques_id/2307211626999535', 'what is a computer', 'a computer is an electronic device that can accept input', 'a computer is a machine', 'a computer is a robot', 'a computer is an idiot machine', 'a computer is a bke', 'a computer is an electronic device that can accept input'),
(2, 'e-learning/ques_id/2307211626999637', 'what is a noun', 'a noun is a word', 'a noun is a action word', 'a noun is a erons', 'a noun is heince', 'a neeoe', 'a noun is a erons'),
(3, 'e-learning/ques_id/2307211626999677', 'who is the lecturer if this course', 'mr heinze', 'mr emma', 'mr williams', 'mr presh', 'mr victor', 'mr heinze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e-learning/course/20-07-211626740252_first test`
--
ALTER TABLE `e-learning/course/20-07-211626740252_first test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e-learning/course/20-07-211626740252_first test`
--
ALTER TABLE `e-learning/course/20-07-211626740252_first test`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

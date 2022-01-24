-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 23, 2022 at 04:39 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project01`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'Студенти од маркетинг'),
(2, 'Студенти од програмирање'),
(3, 'Студенти од data science'),
(4, 'Студенти од дизајн');

-- --------------------------------------------------------

--
-- Table structure for table `hire_our_student`
--

CREATE TABLE `hire_our_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `company_name` varchar(64) NOT NULL,
  `contact_email` varchar(64) NOT NULL,
  `contact_mobile` varchar(32) NOT NULL,
  `student_course` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hire_our_student`
--

INSERT INTO `hire_our_student` (`id`, `fullname`, `company_name`, `contact_email`, `contact_mobile`, `student_course`) VALUES
(1, 'Atanasija Gjorgievski', 'Imagine LLC', 'gjorgievskiatanasija@gmail.com', '+38970255516', 2),
(2, 'Gjorgievski Atanasija', 'DevCut Inc', 'atanasija1109gjorgievski@gmail.com', '070255516', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_our_student`
--
ALTER TABLE `hire_our_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_course` (`student_course`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hire_our_student`
--
ALTER TABLE `hire_our_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hire_our_student`
--
ALTER TABLE `hire_our_student`
  ADD CONSTRAINT `hire_our_student_ibfk_1` FOREIGN KEY (`student_course`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
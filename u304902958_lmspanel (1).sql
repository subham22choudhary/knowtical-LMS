-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2024 at 09:01 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u304902958_lmspanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option_text` varchar(255) NOT NULL,
  `is_right` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_text`, `is_right`) VALUES
(49, 18, '4', 1),
(50, 18, '44', 0),
(51, 18, '444', 0),
(52, 19, 'Thomas Edison', 1),
(53, 19, ' Nikola Tesla', 0),
(54, 19, 'Albert Einstein', 0),
(59, 21, '[A] the temperature of water will become zero and it will freeze', 1),
(60, 21, '[B] the temperature of water will become zero but it will not freeze', 0),
(61, 21, '[C] the temperature of the water will become zero and it will come out of the cavity', 0),
(62, 21, '[D] the temperature of the water will become zero and ice will melt to merge with water', 0),
(63, 22, '[A] Microwaves', 1),
(64, 22, '[B] Infra Red Waves', 0),
(65, 22, '[C] Ultra Violet Waves', 0),
(66, 22, '[D] Radio Waves', 0),
(67, 23, '[A] Eclipse', 1),
(68, 23, '[B] Occultation', 0),
(69, 23, '[C] Transit', 0),
(70, 23, '[D] Blockage', 0),
(71, 24, 'Thomas Edison', 1),
(72, 24, ' Nikola Tesla', 0),
(73, 25, '23', 1),
(74, 25, '23', 1),
(75, 26, 'sdsd', 1),
(76, 26, 'sdvsv', 0),
(77, 27, '2dff', 1),
(78, 27, 'wrsvfvdfv', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_name` varchar(255) NOT NULL,
  `time_alloted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question_name`, `time_alloted`) VALUES
(18, 14, '2+2=?', 150),
(19, 15, 'Who Invented Bulb ?', 60),
(21, 24, '3.A small quantity of water is placed in a small cavity made in a block of Ice at 0 degree centigrade. Which of the following will happen?', 56),
(22, 24, '4.Which among the following waves are most commonly used in the Night Vision Devices?', 33),
(23, 25, '6.What do you call the phenomenon when Moon blocks the light coming from a star?', 55),
(24, 27, 'Who Invented Bulb ?', 66),
(25, 29, '3', 323),
(26, 30, 'csdcsd', 222),
(27, 31, 'wewefwef', 3232243);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `creator_name` varchar(255) DEFAULT NULL,
  `organizationname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `quiz_name`, `creator_name`, `organizationname`) VALUES
(14, 'Maths', NULL, NULL),
(15, 'Science', NULL, NULL),
(16, 'Quiz1', NULL, NULL),
(22, 'wewe', 'Teacher2', 'org2'),
(24, 'Physics 2', 'Teacher3', 'org3'),
(25, 'Physics 1', 'Teacher3', 'org3'),
(27, 'Check2', 'Teacher3', 'org3'),
(28, 'qwerty', 'Teacher 4', 'org4'),
(29, 'wef', 'Teacher 4', 'org4'),
(30, 'qwertyui', 'Teacher1', 'org1'),
(31, 'accsecwcwef', 'Teacher2', 'org2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `selected_option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`id`, `user_id`, `question_id`, `selected_option`) VALUES
(1, 9, 9, '21'),
(2, 9, 10, '23'),
(3, 9, 10, '24'),
(4, 9, 9, '21'),
(5, 9, 10, '23'),
(6, 9, 10, '24'),
(7, 11, 9, '21'),
(8, 11, 9, '22'),
(9, 11, 10, '25'),
(10, 14, 9, '21'),
(11, 14, 10, '23'),
(12, 11, 11, '26'),
(13, 11, 11, '27'),
(14, 11, 11, '28'),
(15, 11, 11, '26'),
(16, 11, 11, '27'),
(17, 11, 11, '27'),
(18, 11, 11, '26'),
(19, 11, 11, '27'),
(20, 11, 12, '29'),
(21, 11, 12, '30'),
(22, 11, 15, '40'),
(23, 11, 15, '41'),
(24, 11, 15, '40'),
(25, 11, 15, '41'),
(26, 11, 15, '38'),
(27, 11, 15, '39'),
(28, 11, 15, '38'),
(29, 11, 15, '39'),
(30, 11, 15, '38'),
(31, 11, 15, '39'),
(32, 11, 15, '40'),
(33, 11, 15, '41'),
(34, 14, 17, '46'),
(35, 14, 17, '47'),
(36, 14, 17, '48'),
(37, 14, 15, '38'),
(38, 14, 15, '39'),
(39, 14, 15, '40'),
(40, 14, 15, '41'),
(41, 14, 16, '42'),
(42, 14, 16, '43'),
(43, 14, 16, '44'),
(44, 14, 16, '45'),
(45, 14, 17, '46'),
(46, 14, 17, '47'),
(47, 14, 17, '48'),
(48, 14, 17, '46'),
(49, 14, 17, '47'),
(50, 14, 17, '48'),
(51, 14, 17, '47'),
(52, 14, 17, '48'),
(53, 14, 17, '46'),
(54, 14, 17, '47'),
(55, 14, 17, '48'),
(56, 14, 17, '46'),
(57, 14, 17, '47'),
(58, 14, 17, '48'),
(59, 14, 18, '49'),
(60, 14, 18, '50'),
(61, 14, 18, '51'),
(62, 14, 17, '47'),
(63, 14, 17, '48'),
(64, 14, 18, '50'),
(65, 14, 18, '51'),
(66, 14, 17, '46'),
(67, 14, 18, '49'),
(68, 14, 18, '49'),
(69, 14, 19, '52'),
(70, 14, 18, '49'),
(71, 14, 18, '50'),
(72, 14, 18, '51'),
(73, 14, 19, '52'),
(74, 14, 19, '53'),
(75, 14, 19, '54'),
(76, 14, 18, '49'),
(77, 14, 18, '50'),
(78, 14, 18, '51'),
(79, 14, 19, '52'),
(80, 14, 19, '53'),
(81, 14, 18, '49'),
(82, 14, 19, '52'),
(83, 14, 18, '49'),
(84, 14, 19, '52'),
(85, 14, 18, '49'),
(86, 14, 18, '50'),
(87, 14, 19, '52'),
(88, 14, 19, '53'),
(89, 14, 18, '50'),
(90, 14, 19, '53'),
(91, 14, 19, '52'),
(92, 14, 19, '53'),
(93, 14, 18, '49'),
(94, 14, 18, '50'),
(95, 14, 19, '52'),
(96, 14, 19, '53'),
(97, 14, 18, '49'),
(98, 14, 19, '52'),
(99, 9, 18, '49'),
(100, 9, 19, '52'),
(101, 9, 18, '49'),
(102, 9, 19, '52'),
(103, 14, 23, '67'),
(104, 14, 23, '68');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_role` enum('student','teacher','admin') NOT NULL,
  `user_organization` varchar(255) NOT NULL,
  `score_percentage` decimal(5,2) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_name`, `user_role`, `user_organization`, `score_percentage`, `user_id`) VALUES
(2, 'student1', 'student', 'org1', 100.00, 0),
(3, 'student2', 'student', 'org2', 50.00, 0),
(4, 'student3', 'student', 'org3', 100.00, 0),
(5, 'student2', 'student', 'org2', 100.00, 0),
(6, 'student2', 'student', 'org2', 0.00, 0),
(7, 'student2', 'student', 'org2', 100.00, 0),
(8, 'student2', 'student', 'org2', 100.00, 0),
(9, 'student2', 'student', 'org2', 100.00, 0),
(10, 'student2', 'student', 'org2', 100.00, 0),
(11, 'student2', 'student', 'org2', 100.00, 0),
(12, 'student2', 'student', 'org2', 0.00, 0),
(13, 'student2', 'student', 'org2', 0.00, 0),
(14, 'student2', 'student', 'org2', 100.00, 0),
(15, 'student3', 'student', 'org3', 0.00, 0),
(16, 'student3', 'student', 'org3', 33.33, 0),
(17, 'student3', 'student', 'org3', 0.00, 0),
(18, 'student3', 'student', 'org3', 0.00, 0),
(19, 'student3', 'student', 'org3', 0.00, 0),
(20, 'student3', 'student', 'org3', 50.00, 0),
(21, 'student3', 'student', 'org3', 0.00, 0),
(22, 'student3', 'student', 'org3', 50.00, 0),
(23, 'student3', 'student', 'org3', 100.00, 0),
(24, 'student3', 'student', 'org3', 100.00, 0),
(25, 'student3', 'student', 'org3', 0.00, 0),
(26, 'student3', 'student', 'org3', 0.00, 0),
(27, 'student3', 'student', 'org3', 0.00, 0),
(28, 'student3', 'student', 'org3', 100.00, 0),
(29, 'student3', 'student', 'org3', 0.00, 0),
(30, 'student3', 'student', 'org3', 0.00, 0),
(31, 'student3', 'student', 'org3', 0.00, 0),
(32, 'student3', 'student', 'org3', 100.00, 0),
(33, 'student1', 'student', 'org1', 100.00, 0),
(34, 'student1', 'student', 'org1', 100.00, 0),
(35, 'student3', 'student', 'org3', 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('student','teacher','admin') NOT NULL,
  `organizationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `organizationname`) VALUES
(9, 'student1', 'student1@gmail.com', 'root', 'student', 'org1'),
(10, 'Teacher1', 'teacher1@gmail.com', 'root', 'teacher', 'org1'),
(11, 'student2', 'student2@gamil.com', 'root', 'student', 'org2'),
(12, 'Teacher2', 'teacher2@gmail.com', 'root', 'teacher', 'org2'),
(13, 'Teacher3', 'teacher3@gmail.com', 'root', 'teacher', 'org3'),
(14, 'student3', 'student3@gamil.com', 'root', 'student', 'org3'),
(18, 'Teacher 4', 'teacher4@gmail.com', 'root', 'teacher', 'org4'),
(19, '  DIPESH YADAV', 'dipesh.osa@gmail.com', '12345', 'student', 'Ganit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 03:20 PM
-- Server version: 8.0.22
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int NOT NULL,
  `classname` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classname`, `created_at`) VALUES
(1, 'I', '2020-12-01 17:46:32'),
(2, 'II', '2020-12-01 17:46:36'),
(3, 'III', '2020-12-01 17:46:39'),
(4, 'IV', '2020-12-01 17:46:42'),
(5, 'V', '2020-12-01 17:46:46'),
(7, 'VI', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`) VALUES
(1, 'admin', 'Admin', '2020-11-16 06:15:00'),
(2, 'teacher', 'Guru', '2020-11-16 06:15:00'),
(3, 'student', 'Murid', '2020-11-16 06:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int NOT NULL,
  `semester_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_name`, `created_at`) VALUES
(2, 'Semester 2', '2020-11-21 13:38:25'),
(8, 'Semester 1', '2020-11-30 17:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `nis` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_place` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('Laki - Laki','Perempuan') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int NOT NULL,
  `semester_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nis`, `name`, `birth_place`, `birth_date`, `gender`, `address`, `phone`, `email`, `major`, `class_id`, `semester_id`, `user_id`, `created_at`) VALUES
(7, 123, 'Arman Septian', 'Bekasi', '1999-01-01', 'Laki - Laki', 'Babakan', '0895-1722-7009', 'arman@gmail.com', '', 1, 2, 12, '2020-12-01 17:26:06'),
(8, 123123, '123', '123', '1999-01-01', 'Laki - Laki', '123', '1231-2312-3123', '123123@gmail.com', '123123', 1, 2, 14, '2020-12-01 18:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `subclass`
--

CREATE TABLE `subclass` (
  `id` int NOT NULL,
  `class_id` int NOT NULL,
  `semester_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `year` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subclass`
--

INSERT INTO `subclass` (`id`, `class_id`, `semester_id`, `subject_id`, `year`, `created_at`) VALUES
(137, 1, 2, 3, 2020, '2020-12-06 14:23:01'),
(138, 1, 2, 2, 2020, '2020-12-06 14:27:12'),
(140, 2, 2, 2, 2020, '2020-12-06 14:28:32'),
(141, 2, 2, 3, 2020, '2020-12-06 14:28:34'),
(142, 2, 8, 8, 2020, '2020-12-06 14:30:25'),
(143, 2, 8, 9, 2020, '2020-12-06 14:30:27'),
(145, 2, 8, 6, 2020, '2020-12-06 14:30:29'),
(146, 2, 8, 7, 2020, '2020-12-06 14:30:31'),
(147, 2, 8, 11, 2020, '2020-12-06 14:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL,
  `subject_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `created_at`) VALUES
(2, 'Agama', '2020-11-22 22:45:58'),
(3, 'PKN', '2020-11-22 22:46:02'),
(4, 'Bahasa Indonesia', '2020-11-22 22:46:05'),
(5, 'IPA', '2020-11-22 22:46:09'),
(6, 'IPS', '2020-11-22 22:46:12'),
(7, 'SBDP', '2020-11-22 22:46:16'),
(8, 'Matematika', '2020-11-22 22:46:22'),
(9, 'PJOK', '2020-11-22 22:46:26'),
(10, 'Bahasa Sunda', '2020-11-22 22:46:30'),
(11, 'Bahasa Inggris', '2020-11-22 22:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `subteachers`
--

CREATE TABLE `subteachers` (
  `id` int NOT NULL,
  `subclass_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subteachers`
--

INSERT INTO `subteachers` (`id`, `subclass_id`, `teacher_id`, `created_at`) VALUES
(34, 137, 6, '2020-12-06 14:41:26'),
(35, 138, 6, '2020-12-06 14:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL,
  `nip` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_place` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('Laki - Laki','Perempuan') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `education` enum('S1','S2','S3') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Lajang','Menikah') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `work_status` enum('PNS','Honorer') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `nip`, `name`, `birth_place`, `birth_date`, `gender`, `address`, `phone`, `email`, `education`, `major`, `status`, `work_status`, `user_id`, `created_at`) VALUES
(5, '123', 'Andri S.Kom', 'Bekasi', '1999-01-01', 'Laki - Laki', 'Bekasi', '0895-1722-7009', 'andri@gmail.com', 'S1', 'Teknik Informatika', 'Lajang', 'PNS', 9, '2020-11-29 19:10:36'),
(6, '1234', 'Ariel S.Pdi', 'Bekasi', '1999-01-01', 'Laki - Laki', 'Bekasi', '0895-1722-7008', 'ariel@gmail.com', 'S1', 'Teknik Informatika', 'Lajang', 'PNS', 10, '2020-11-30 00:25:05'),
(8, '123123', '123', '123', '1999-01-01', 'Laki - Laki', '123', '1231-2312-3123', '123@gmail.com', 'S1', '123', 'Lajang', 'PNS', 13, '2020-12-01 17:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int NOT NULL,
  `token` varchar(62) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token_password` varchar(62) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `token`, `token_password`, `is_verified`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$spDBjwixY6YbiJ2SZOXZKuXjURsZx8l4a/kDhS0y9uJgCymtRhTei', 1, '', '', 1, '2020-11-16 06:14:13'),
(9, 'Andri S.Kom', 'andri@gmail.com', '$2y$10$avzfpnnS/jdJsnBpZfkULO0PQKoYUCr94MOyK0VygColc5vCcXRGa', 2, '', '', 1, '2020-11-29 19:10:36'),
(10, 'Ariel S.Pdi', 'ariel@gmail.com', '$2y$10$nNnikPVq.gc7i41PUfgrBuxm.4FtpM3ptvXaEY9KTigvhnZBoz9f.', 2, '', '', 1, '2020-11-30 00:25:05'),
(12, 'Arman Septian', 'arman@gmail.com', '$2y$10$uHH7Z6VkIYz2Karg/0IXIeCllHGxbeXowlqFndANz7ga14IH10p0q', 3, '', '', 1, '2020-12-01 17:26:06'),
(13, '123', '123@gmail.com', '$2y$10$lAFL4JtzMXrWnXJvR6iJkOShpn4pMB1.3tOZqTOI4YDXa9u2h.NvC', 2, '', '', 1, '2020-12-01 17:59:58'),
(14, '123', '123123@gmail.com', '$2y$10$5nlRgq765N9z0cdnUrKenO5l8G5lEuMveIU2BcsUuLM.hGNXfFfbu', 3, '', '', 1, '2020-12-01 18:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`,`semester_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `subclass`
--
ALTER TABLE `subclass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`) USING BTREE,
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subteachers`
--
ALTER TABLE `subteachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subclass_id` (`subclass_id`) USING BTREE,
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subclass`
--
ALTER TABLE `subclass`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subteachers`
--
ALTER TABLE `subteachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subclass`
--
ALTER TABLE `subclass`
  ADD CONSTRAINT `subclass_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subclass_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subclass_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subteachers`
--
ALTER TABLE `subteachers`
  ADD CONSTRAINT `subteachers_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subteachers_ibfk_2` FOREIGN KEY (`subclass_id`) REFERENCES `subclass` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

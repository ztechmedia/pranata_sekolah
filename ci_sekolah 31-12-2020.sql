-- phpMyAdmin SQL Dump
-- version 5.0.3-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2020 at 01:11 AM
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
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `slug`, `description`, `date`, `user_id`, `created_at`) VALUES
(2, 'Penyuluhan Bahasa Virus Corona', 'penyuluhan-bahasa-virus-corona', '<p><img src=\"https://rs-soewandhi.surabaya.go.id/wp-content/uploads/2020/02/Berita-36.jpg\" alt=\"\" width=\"550\" height=\"367\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Hari ini (7/2), tim PKRS dan PPI RSUD dr. Mohamad Soewandhie memberikan penyuluhan mengenai bahaya serta cara mengantisipasi Virus Corona yang marak di masyarakat kepada para pengunjung Rumah Sakit.</p>\r\n<p>Virus yang dikenal dengan nama Novel Coronavirus ini memiliki gejala yang serupa dengan penyakit flu pada umumnya, sehingga dapat dengan mudah menyebar ke orang lain. Untuk mengatasi hal tersebut, maka yang bisa dilakukan adalah menjaga diri dengan melakukan tiga hal mendasar, yaitu cara menggunakan masker yang benar, melakukan cuci tangan dengan benar sesuai 6 langkah 5 momen, serta menerapkan etika batuk.</p>\r\n<p>Tim PKRS dan PPI RSUD dr. Mohamad Soewandhie akan terus melakukan penyuluhan setiap harinya agar para pengunjung RSUD dr. Mohamad Soewandhie menjadi lebih peduli dengan kesehatan.</p>\r\n<p>Terus jaga kesehatan ya sahabat sehat.</p>', '2020-12-13', 1, '2020-12-13 09:18:12');

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
(7, 'VI', '0000-00-00 00:00:00'),
(9, 'VII', '2020-12-13 09:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `description`, `created_at`) VALUES
(1, 'ARmanasd asda sd asda sd adasd', '2020-12-13 09:20:23');

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
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int NOT NULL,
  `subclass_id` int NOT NULL,
  `start_time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `day` tinyint(1) NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `subclass_id`, `start_time`, `end_time`, `day`, `created-at`) VALUES
(2, 137, '07:00', '07:00', 1, '2020-12-30 15:58:42'),
(3, 149, '07:00', '07:00', 2, '2020-12-30 23:20:51'),
(4, 150, '07:00', '07:00', 3, '2020-12-30 23:44:25'),
(5, 151, '07:00', '07:00', 3, '2020-12-30 23:44:55'),
(6, 138, '07:00', '07:00', 2, '2020-12-31 00:04:10'),
(7, 138, '07:00', '07:00', 3, '2020-12-31 00:05:50'),
(8, 149, '07:00', '07:00', 1, '2020-12-31 00:27:53'),
(9, 148, '07:00', '09:00', 4, '2020-12-31 00:35:08'),
(10, 149, '07:00', '12:00', 4, '2020-12-31 00:37:01'),
(11, 137, '10:30', '13:30', 4, '2020-12-31 00:37:24'),
(12, 150, '07:00', '07:00', 5, '2020-12-31 00:38:03');

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
(9, 123, 'Arman', 'Bekasi', '1999-01-01', 'Laki - Laki', 'Bekasi', '0895-1722-7009', 'arman@gmail.com', '', 1, 2, 16, '2020-12-21 17:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `student_values`
--

CREATE TABLE `student_values` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `subclass_id` int NOT NULL,
  `task` int NOT NULL,
  `midtest` int NOT NULL,
  `endtest` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_values`
--

INSERT INTO `student_values` (`id`, `student_id`, `subclass_id`, `task`, `midtest`, `endtest`, `created_at`) VALUES
(44, 9, 148, 70, 90, 90, '2020-12-21 17:34:23'),
(45, 9, 149, 90, 90, 90, '2020-12-21 17:34:23'),
(46, 9, 150, 90, 90, 90, '2020-12-21 17:34:23'),
(47, 9, 151, 90, 90, 90, '2020-12-21 17:34:23'),
(48, 9, 137, 90, 90, 90, '2020-12-21 17:34:23'),
(49, 9, 138, 90, 90, 90, '2020-12-21 17:34:23');

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
(147, 2, 8, 11, 2020, '2020-12-06 14:30:33'),
(148, 1, 8, 2, 2020, '2020-12-08 12:14:17'),
(149, 1, 8, 3, 2020, '2020-12-08 12:14:19'),
(150, 1, 8, 4, 2020, '2020-12-08 12:14:20'),
(151, 1, 8, 5, 2020, '2020-12-08 12:14:21'),
(152, 2, 8, 3, 2020, '2020-12-08 12:14:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subteachers`
--

INSERT INTO `subteachers` (`id`, `subclass_id`, `teacher_id`, `created_at`) VALUES
(48, 148, 9, '2020-12-21 17:33:42'),
(49, 149, 9, '2020-12-21 17:33:45'),
(50, 150, 9, '2020-12-21 17:33:48'),
(51, 151, 9, '2020-12-21 17:33:51'),
(52, 137, 9, '2020-12-21 17:33:55'),
(53, 138, 9, '2020-12-21 17:33:58');

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
(9, '123', 'Arman', 'Bekasi', '1999-01-01', 'Laki - Laki', 'Bekasi', '0895-1722-7009', 'septian.arman009@gmail.com', 'S1', 'Teknik Informatika', 'Lajang', 'PNS', 15, '2020-12-21 17:32:42');

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
(15, 'Arman', 'septian.arman009@gmail.com', '$2y$10$yAHa8DMfq35/TVGF.2ni.emRgspnsCDw9dh1rUEx0.d9SE/8U9cgC', 2, '', '', 1, '2020-12-21 17:32:42'),
(16, 'Arman', 'arman@gmail.com', '$2y$10$QhSr2w4D4SlKVIwXOKsjx.p0LycV2U5OfV7Yh6h1PaqRA9ABR20Om', 3, '', '', 1, '2020-12-21 17:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `vision_mission`
--

CREATE TABLE `vision_mission` (
  `id` int NOT NULL,
  `vision` text COLLATE utf8_unicode_ci NOT NULL,
  `mission` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vision_mission`
--

INSERT INTO `vision_mission` (`id`, `vision`, `mission`, `created_at`) VALUES
(1, 'Terwujudnya Generasi Yang Berkualitas Dan Berkarakter', '- Menanamkan Keyakinan Akidah melalui Pengalaman Ajaran Agama <br><br>\r\n- Mengoptimalkan Proses Pembelajaran dan Bimbingan melalui PAKEM (Pembelajaran Aktif Inovatif Kreatif Efektif dan Menyenangkan) <br><br>\r\n- Mengembangkan Pengetahuan di Bidan IPTEK, Bahasa, Olahraga dan Seni Budaya sesuai dengan Bakat, Minat dan Potensi Siswa <br><br>\r\n- Menjalin Kerjasama yang Harmonis antara Warga Sekolah dan Lingkungan <br><br>\r\n- Meningkatkan Mutu Pendidikan dalam upaya Mencerdaskan Kehidupan Generasi yang Bermoral, Kreatif, Maju dan Mandiri', '2020-12-12 08:13:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
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
-- Indexes for table `student_values`
--
ALTER TABLE `student_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`,`subclass_id`),
  ADD KEY `subclass_id` (`subclass_id`);

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
-- Indexes for table `vision_mission`
--
ALTER TABLE `vision_mission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_values`
--
ALTER TABLE `student_values`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `subclass`
--
ALTER TABLE `subclass`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subteachers`
--
ALTER TABLE `subteachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vision_mission`
--
ALTER TABLE `vision_mission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `student_values`
--
ALTER TABLE `student_values`
  ADD CONSTRAINT `student_values_ibfk_1` FOREIGN KEY (`subclass_id`) REFERENCES `subclass` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_values_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

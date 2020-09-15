-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 09:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `student_id`, `roll`, `class_id`, `year_id`, `group_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(4, 9, NULL, 1, 8, 1, 1, '2020-07-04 23:12:02', '2020-07-04 23:12:02'),
(5, 10, NULL, 2, 8, 2, 2, '2020-07-04 23:13:11', '2020-07-04 23:13:11'),
(6, 11, NULL, 3, 7, 3, 1, '2020-07-04 23:17:42', '2020-07-04 23:17:42'),
(7, 12, NULL, 5, 9, 1, 2, '2020-07-04 23:18:47', '2020-07-04 23:18:47'),
(8, 13, NULL, 1, 9, 1, 1, '2020-07-04 23:58:32', '2020-07-04 23:58:32'),
(9, 14, NULL, 2, 8, 1, 1, '2020-07-05 23:42:14', '2020-07-05 23:42:14'),
(10, 14, NULL, 3, 9, 2, 2, '2020-07-06 03:47:38', '2020-07-06 03:47:38'),
(11, 13, NULL, 4, 9, 1, 1, '2020-07-06 03:52:15', '2020-07-06 03:52:15'),
(12, 10, NULL, 2, 8, 2, 1, '2020-07-06 06:38:35', '2020-07-06 06:38:35'),
(13, 16, NULL, 1, 9, 1, 1, '2020-07-22 22:22:17', '2020-07-22 22:22:17'),
(14, 17, NULL, 2, 11, 1, 1, '2020-07-22 22:23:06', '2020-07-22 22:23:06'),
(15, 18, NULL, 1, 11, 1, 1, '2020-07-22 22:25:18', '2020-07-22 22:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `subjective_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `subjective_mark`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100, 40, 100, '2020-07-03 23:01:25', '2020-07-03 23:01:25'),
(2, 1, 2, 100, 40, 100, '2020-07-03 23:01:25', '2020-07-03 23:01:25'),
(3, 1, 3, 100, 40, 100, '2020-07-03 23:01:25', '2020-07-03 23:01:25'),
(4, 2, 1, 100, 40, 100, '2020-07-03 23:01:59', '2020-07-03 23:01:59'),
(5, 2, 2, 100, 40, 100, '2020-07-03 23:01:59', '2020-07-03 23:01:59'),
(6, 2, 3, 100, 40, 100, '2020-07-03 23:01:59', '2020-07-03 23:01:59'),
(7, 3, 1, 100, 40, 100, '2020-07-03 23:02:52', '2020-07-03 23:02:52'),
(8, 3, 2, 100, 40, 100, '2020-07-03 23:02:52', '2020-07-03 23:02:52'),
(9, 3, 3, 100, 40, 100, '2020-07-03 23:02:52', '2020-07-03 23:02:52'),
(10, 3, 4, 100, 40, 100, '2020-07-03 23:02:52', '2020-07-03 23:02:52'),
(11, 3, 5, 100, 40, 100, '2020-07-03 23:02:52', '2020-07-03 23:02:52'),
(12, 3, 6, 100, 40, 100, '2020-07-03 23:02:52', '2020-07-03 23:02:52'),
(13, 4, 1, 100, 40, 100, '2020-07-03 23:04:02', '2020-07-03 23:04:02'),
(14, 4, 2, 100, 40, 100, '2020-07-03 23:04:02', '2020-07-03 23:04:02'),
(15, 4, 3, 100, 40, 100, '2020-07-03 23:04:02', '2020-07-03 23:04:02'),
(16, 4, 4, 100, 40, 100, '2020-07-03 23:04:02', '2020-07-03 23:04:02'),
(17, 4, 5, 100, 40, 100, '2020-07-03 23:04:02', '2020-07-03 23:04:02'),
(18, 4, 6, 100, 40, 100, '2020-07-03 23:04:02', '2020-07-03 23:04:02'),
(19, 5, 1, 100, 40, 100, '2020-07-03 23:23:50', '2020-07-03 23:23:50'),
(20, 5, 2, 100, 40, 100, '2020-07-03 23:23:50', '2020-07-03 23:23:50'),
(21, 5, 3, 100, 40, 100, '2020-07-03 23:23:50', '2020-07-03 23:23:50'),
(22, 5, 4, 100, 40, 100, '2020-07-03 23:23:50', '2020-07-03 23:23:50'),
(23, 5, 5, 100, 40, 100, '2020-07-03 23:23:50', '2020-07-03 23:23:50'),
(24, 5, 6, 100, 40, 100, '2020-07-03 23:23:50', '2020-07-03 23:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', '2020-07-03 23:24:14', '2020-07-03 23:24:14'),
(2, 'Computer Oparator', '2020-07-03 23:24:34', '2020-07-03 23:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assign_student_id`, `fee_category_id`, `discount`, `created_at`, `updated_at`) VALUES
(3, 4, 1, 30, '2020-07-04 23:12:02', '2020-07-04 23:12:02'),
(4, 5, 1, NULL, '2020-07-04 23:13:11', '2020-07-04 23:13:11'),
(5, 6, 1, NULL, '2020-07-04 23:17:42', '2020-07-04 23:17:42'),
(6, 7, 1, 30, '2020-07-04 23:18:47', '2020-07-04 23:18:47'),
(7, 8, 1, 30, '2020-07-04 23:58:32', '2020-07-04 23:58:32'),
(8, 9, 1, NULL, '2020-07-05 23:42:14', '2020-07-05 23:42:14'),
(9, 10, 1, NULL, '2020-07-06 03:47:38', '2020-07-06 03:47:38'),
(10, 11, 1, 30, '2020-07-06 03:52:15', '2020-07-06 03:52:15'),
(11, 12, 1, NULL, '2020-07-06 06:38:35', '2020-07-06 06:38:35'),
(12, 13, 1, 30, '2020-07-22 22:22:17', '2020-07-22 22:22:17'),
(13, 14, 1, 30, '2020-07-22 22:23:06', '2020-07-22 22:23:06'),
(14, 15, 1, 30, '2020-07-22 22:25:18', '2020-07-22 22:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', '2020-07-03 22:59:23', '2020-07-03 22:59:23'),
(2, 'Semister', '2020-07-03 22:59:33', '2020-07-03 22:59:33'),
(3, 'Final', '2020-07-03 22:59:47', '2020-07-03 22:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Registration', '2020-07-03 22:55:24', '2020-07-03 22:55:24'),
(2, 'Exam', '2020-07-03 22:55:32', '2020-07-03 22:55:32'),
(3, 'Monthly', '2020-07-03 22:55:40', '2020-07-03 22:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 300, '2020-07-03 22:56:59', '2020-07-03 22:56:59'),
(2, 1, 2, 300, '2020-07-03 22:56:59', '2020-07-03 22:56:59'),
(3, 1, 3, 500, '2020-07-03 22:56:59', '2020-07-03 22:56:59'),
(4, 1, 4, 800, '2020-07-03 22:56:59', '2020-07-03 22:56:59'),
(5, 1, 5, 1000, '2020-07-03 22:56:59', '2020-07-03 22:56:59'),
(6, 2, 1, 300, '2020-07-03 22:57:52', '2020-07-03 22:57:52'),
(7, 2, 2, 300, '2020-07-03 22:57:52', '2020-07-03 22:57:52'),
(8, 2, 3, 500, '2020-07-03 22:57:52', '2020-07-03 22:57:52'),
(9, 2, 4, 500, '2020-07-03 22:57:52', '2020-07-03 22:57:52'),
(10, 2, 5, 500, '2020-07-03 22:57:52', '2020-07-03 22:57:52'),
(11, 2, 2, 300, '2020-07-03 22:57:52', '2020-07-03 22:57:52'),
(12, 3, 1, 300, '2020-07-03 22:58:38', '2020-07-03 22:58:38'),
(13, 3, 2, 300, '2020-07-03 22:58:38', '2020-07-03 22:58:38'),
(14, 3, 3, 500, '2020-07-03 22:58:38', '2020-07-03 22:58:38'),
(15, 3, 4, 800, '2020-07-03 22:58:38', '2020-07-03 22:58:38'),
(16, 3, 5, 1000, '2020-07-03 22:58:38', '2020-07-03 22:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_25_134738_create_student_classes_table', 1),
(4, '2020_06_26_143307_create_years_table', 1),
(5, '2020_06_27_164552_create_student_groups_table', 1),
(6, '2020_06_28_125423_create_student_shifts_table', 1),
(7, '2020_06_28_140116_create_fee_categories_table', 1),
(8, '2020_06_29_143251_create_fee_category_amounts_table', 1),
(9, '2020_06_30_083642_create_exam_types_table', 1),
(10, '2020_07_01_054757_create_subjects_table', 1),
(11, '2020_07_01_062158_create_assign_subjects_table', 1),
(12, '2020_07_03_060845_create_designations_table', 1),
(13, '2020_07_04_035012_create_users_table', 1),
(14, '2020_07_04_040638_create_assign_students_table', 2),
(15, '2020_07_04_041200_create_discount_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'One', '2020-07-03 22:52:52', '2020-07-03 22:52:52'),
(2, 'Two', '2020-07-03 22:53:01', '2020-07-03 22:53:01'),
(3, 'Three', '2020-07-03 22:53:15', '2020-07-03 22:53:15'),
(4, 'Four', '2020-07-03 22:53:27', '2020-07-03 22:53:27'),
(5, 'Five', '2020-07-03 22:53:36', '2020-07-03 22:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2020-07-03 22:54:11', '2020-07-03 22:54:11'),
(2, 'B', '2020-07-03 22:54:16', '2020-07-03 22:54:16'),
(3, 'C', '2020-07-03 22:54:21', '2020-07-03 22:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Morning', '2020-07-03 22:54:48', '2020-07-03 22:54:48'),
(2, 'Day', '2020-07-03 22:54:55', '2020-07-03 22:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', '2020-07-03 23:00:02', '2020-07-03 23:00:02'),
(2, 'English', '2020-07-03 23:00:10', '2020-07-03 23:00:10'),
(3, 'Math', '2020-07-03 23:00:18', '2020-07-03 23:00:18'),
(4, 'General Science', '2020-07-03 23:00:27', '2020-07-03 23:00:27'),
(5, 'Social Science', '2020-07-03 23:00:34', '2020-07-03 23:00:34'),
(6, 'Religion', '2020-07-03 23:00:43', '2020-07-03 23:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin= head of software, operator=computer operator, user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$1kGLhbnUECzU8ee3ca31l.buF5IVS35dbtstX2mLPlHKHz19Hg4J.', '+8801517167619', NULL, 'Male', '202007230420115909884_1341829542874713_373340878995839890_n.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, 1, NULL, NULL, '2020-07-22 22:20:48'),
(9, 'student', 'Shakil', NULL, NULL, '$2y$10$ew7N8BOcqgAqn3V2SPfJaubmchbnsind6.g7lrlbmOIsGW2Ei/EEG', '+8801517167619', 'Village: Enayetpur', 'Male', '202007050512s2.jpg', 'Md. Sajedul', 'salma', 'Islam', '20190001', '2017-01-05', '7179', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-04 23:12:02', '2020-07-04 23:12:02'),
(10, 'student', 'Ema', NULL, NULL, '$2y$10$yRtTuNFRPrMZyv8.LQaB4uLckuF7MAlmeW6USpu8NppDTYutAd3yq', '01843085498', 'Village: Enayetpur', 'Female', '202007050513s1.jpg', 'Md. Sajedul', 'salma', 'Christan', '20190010', '2016-09-02', '5649', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-04 23:13:11', '2020-07-04 23:13:11'),
(11, 'student', 'Md Sajedul Islam', NULL, NULL, '$2y$10$Len3lNcgTIv/i1KKB4l2j.8GYtkmCog.iIQ/S6Cs0MEZAbdYiwdJ2', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '202007050517s2.jpg', 'Md. Sajedul', 'salma', 'Islam', '20180011', '2017-05-05', '7867', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-04 23:17:42', '2020-07-04 23:17:42'),
(12, 'student', 'Love', NULL, NULL, '$2y$10$uAzf5oKORHy9AOvLXzhv0ejX/zew63rrKFs1PrxtwKMS2nezakY2G', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '202007050518s.jpg', 'Md. Sajedul', 'salma', 'Islam', '20200012', '2014-10-05', '2919', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-04 23:18:47', '2020-07-04 23:18:47'),
(13, 'student', 'Md Sajedul Islam', NULL, NULL, '$2y$10$BwYeEawe8k7EKYS1/jqQfeFWZPQmSMD/M5Lmn5nj8Vtw4Y8LoA.VK', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '2020070609521.jpg', 'SI', 'salma', 'Islam', '20200013', '2020-07-05', '7469', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-04 23:58:32', '2020-07-06 03:52:15'),
(14, 'student', 'Md Sajedul Islam', NULL, NULL, '$2y$10$p4fdlbKVWPngf8V0gXvOtecQ5P67aPyHXxUeaVNrTblcnJafnokO.', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '202007060542s2.jpg', 'Md. Sajedul', 'salma', 'Islam', '20190014', '2019-01-01', '2982', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-05 23:42:14', '2020-07-05 23:42:14'),
(16, 'student', 'Md Sajedul Islam', NULL, NULL, '$2y$10$ZiuxeuLyytm7mx4xo516v.xKu2EUXmc/R3PURQqj10S8CDcP7IuWS', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '202007230422109872451_1341829496208051_2713723811340200216_n.jpg', 'Md. Sajedul', 'salma', 'Islam', '20190015', '2020-01-01', '7132', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-22 22:22:17', '2020-07-22 22:22:17'),
(17, 'student', 'Md Sajedul Islam', NULL, NULL, '$2y$10$ogcZlQKNawV7iHftL.jJeONEbl0/qsVeXh/A2mGVOxeDLFJm0ssdK', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '202007230423111644017_992575391200007_371692471734902042_n.jpg', 'Md. Sajedul', 'salma', 'Islam', '20200017', '2020-07-23', '3779', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-22 22:23:06', '2020-07-22 22:23:06'),
(18, 'student', 'Md Sajedul Islam', NULL, NULL, '$2y$10$/QpZNxSvkakvAvstp2XjMeM4I2I.UxBcXI9TAt7Z.ssnly1C7pCt2', '+8801517167619', '34/4 Zigatola, Dhanmondi 4a', 'Male', '202007230425FotoJet (4).jpg', 'SI', 'salma', 'Islam', '20200018', '2020-07-23', '276', NULL, NULL, NULL, NULL, 1, NULL, '2020-07-22 22:25:18', '2020-07-22 22:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2011', '2020-07-04 01:13:54', '2020-07-04 01:13:54'),
(2, '2012', '2020-07-04 01:14:04', '2020-07-04 01:14:04'),
(3, '2013', '2020-07-04 01:14:10', '2020-07-04 01:14:10'),
(4, '2014', '2020-07-04 01:14:16', '2020-07-04 01:14:16'),
(5, '2015', '2020-07-04 01:14:25', '2020-07-10 06:20:18'),
(6, '2016', '2020-07-04 01:14:30', '2020-07-10 06:20:24'),
(7, '2017', '2020-07-04 01:14:35', '2020-07-10 06:20:38'),
(8, '2018', '2020-07-04 01:14:41', '2020-07-10 06:20:47'),
(9, '2019', '2020-07-04 01:14:48', '2020-07-10 06:20:56'),
(11, '2020', '2020-07-10 06:21:06', '2020-07-10 06:21:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `discount_students`
--
ALTER TABLE `discount_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_categories_name_unique` (`name`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

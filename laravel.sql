-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 02:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `source` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filetype` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `source`, `source_url`, `filename`, `filetype`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1000, 'LOCAL_PC', '', 'IMG-20190215-WA0013_1628490986.jpg', NULL, '1', '2021-08-09 01:31:56', '2021-08-09 01:06:25', '2021-08-09 01:31:56'),
(3, 1000, 'LOCAL_PC', '', 'Media Specification Document - V1_1628490986.docx', NULL, '1', NULL, '2021-08-09 01:06:26', '2021-08-09 01:06:26'),
(4, 1000, 'LOCAL_PC', '', 'redmi 9  invoice_1628490986.pdf', NULL, '1', '2021-08-09 07:02:48', '2021-08-09 01:06:26', '2021-08-09 07:02:48'),
(5, 1000, 'LOCAL_PC', '', '2021-08-04_1628490986.png', NULL, '1', '2021-08-09 23:01:07', '2021-08-09 01:06:26', '2021-08-09 23:01:07'),
(6, 1000, 'LOCAL_PC', '', 'PG0218218465638_1628493136.pdf', NULL, '1', '2021-08-09 04:20:35', '2021-08-09 01:42:16', '2021-08-09 04:20:35'),
(7, 1000, 'LOCAL_PC', '', 'bookamovercom_ciadmin_1628493136.sql', NULL, '1', '2021-08-09 06:17:53', '2021-08-09 01:42:16', '2021-08-09 06:17:53'),
(8, 1000, 'LOCAL_PC', '', 'email-template_1628493694.html', 'text/html', '1', '2021-08-09 05:06:33', '2021-08-09 01:51:34', '2021-08-09 05:06:33'),
(9, 1000, 'LOCAL_PC', '', '58073933-book-appointment-online-pro-license_1628493988.txt', 'txt', '1', NULL, '2021-08-09 01:56:28', '2021-08-09 01:56:28'),
(10, 1000, 'LOCAL_PC', '', 'mail_with_multiple_attachment_1628495784.php', 'php', '1', '2021-08-09 07:05:52', '2021-08-09 02:26:24', '2021-08-09 07:05:52'),
(11, 1000, 'LOCAL_PC', '', 'PG0218218465638_1628500581.pdf', 'pdf', '1', '2021-08-09 06:15:34', '2021-08-09 03:46:20', '2021-08-09 06:15:34'),
(12, 1000, 'LOCAL_PC', '', 'uploadcare-php-master_1628512534.zip', 'zip', '1', NULL, '2021-08-09 07:05:34', '2021-08-09 07:05:34'),
(13, 1000, 'LOCAL_PC', '', 'PHP Developer_1628512535.pdf', 'pdf', '1', NULL, '2021-08-09 07:05:34', '2021-08-09 07:05:35'),
(14, 1000, 'LOCAL_PC', '', 'Investment Declaration Form (2021-2022)_1628512535.pdf', 'pdf', '1', '2021-08-09 07:06:56', '2021-08-09 07:05:35', '2021-08-09 07:06:56'),
(15, 1000, 'LOCAL_PC', '', '58073933-book-appointment-online-pro-license_1628512637.txt', 'txt', '1', '2021-08-09 23:17:22', '2021-08-09 07:07:17', '2021-08-09 23:17:22'),
(16, 1000, 'LOCAL_PC', '', 'PG0218218465638_1628512637.pdf', 'pdf', '1', NULL, '2021-08-09 07:07:17', '2021-08-09 07:07:17'),
(17, 1000, 'LOCAL_PC', '', 'PHP Developer Job Description_1628512637.pdf', 'pdf', '1', NULL, '2021-08-09 07:07:17', '2021-08-09 07:07:17'),
(18, 1000, 'LOCAL_PC', '', 'Core PHP Developer Job Description (1)_1628512637.pdf', 'pdf', '1', NULL, '2021-08-09 07:07:17', '2021-08-09 07:07:17'),
(19, 1000, 'LOCAL_PC', '', 'react_projects_1628513039.pdf', 'pdf', '1', NULL, '2021-08-09 07:13:59', '2021-08-09 07:13:59'),
(20, 1000, 'LOCAL_PC', '', 'mongodb_tutorial_1628513039.pdf', 'pdf', '1', '2021-08-09 07:14:58', '2021-08-09 07:13:59', '2021-08-09 07:14:58'),
(21, 1000, 'LOCAL_PC', '', 'the_react_workshop_1628513039.pdf', 'pdf', '1', NULL, '2021-08-09 07:13:59', '2021-08-09 07:13:59'),
(22, 1000, 'LOCAL_PC', '', 'PHP  Laravel_1628513040.rtf', 'rtf', '1', NULL, '2021-08-09 07:14:00', '2021-08-09 07:14:00'),
(23, 1000, 'LOCAL_PC', '', 'JD- PHP Laravel_1628513040.pdf', 'pdf', '1', NULL, '2021-08-09 07:14:00', '2021-08-09 07:14:00'),
(24, NULL, NULL, NULL, '1628523562245IMG-20190215-WA0013.jpg', NULL, '1', NULL, '2021-08-09 10:09:23', '2021-08-09 10:09:23'),
(25, NULL, NULL, NULL, '1628523562270Sanya cv.pdf', NULL, '1', NULL, '2021-08-09 10:09:25', '2021-08-09 10:09:25'),
(26, NULL, NULL, NULL, '162852356227358073933-book-appointment-online-pro-license.txt', NULL, '1', NULL, '2021-08-09 10:09:25', '2021-08-09 10:09:25'),
(27, 1000, 'LOCAL_PC', NULL, '1628525069013Optima-Restore-Brochure_1628525074.pdf', 'pdf', '1', NULL, '2021-08-09 10:34:34', '2021-08-09 10:34:34'),
(28, 1000, 'LOCAL_PC', NULL, '1628525069016logo-social_1628525075.png', 'png', '1', '2021-08-09 23:23:09', '2021-08-09 10:34:35', '2021-08-09 23:23:09'),
(29, 1000, 'LOCAL_PC', NULL, '1628525069020the_react_workshop (1)_1628525077.pdf', 'pdf', '1', NULL, '2021-08-09 10:34:37', '2021-08-09 10:34:37'),
(30, 1000, 'LOCAL_PC', NULL, '1628525629516uploadcare-php-master.zip', 'zip', '1', NULL, '2021-08-09 10:43:50', '2021-08-09 10:43:50'),
(31, 1000, 'LOCAL_PC', NULL, 'Jag Ghoomeya Thaare Jaisa Na Koi - (FilmyMp3.in).mp3', 'mp3', '1', NULL, '2021-08-09 23:56:57', '2021-08-09 23:56:57'),
(32, 1000, 'LOCAL_PC', NULL, 'Jag Ghoomeya Thaare Jaisa Na Koi - (FilmyMp3.in).mp3', 'mp3', '1', '2021-08-10 03:20:32', '2021-08-09 23:57:21', '2021-08-10 03:20:32'),
(33, 1000, 'LOCAL_PC', NULL, 'Jag Ghoomeya Thaare Jaisa Na Koi - (FilmyMp3.in).mp3', 'mp3', '1', NULL, '2021-08-09 23:58:29', '2021-08-09 23:58:29'),
(34, 1000, 'LOCAL_PC', NULL, 'Sachin Sharma.pdf', 'pdf', '1', NULL, '2021-08-09 23:58:44', '2021-08-09 23:58:44'),
(35, 1000, 'LOCAL_PC', NULL, '1628573347875Sanya cv.pdf', 'pdf', '1', NULL, '2021-08-09 23:59:08', '2021-08-09 23:59:08'),
(36, 1000, 'LOCAL_PC', NULL, '1628574312079PHP Developer Job Description.pdf', 'pdf', '1', NULL, '2021-08-10 00:15:12', '2021-08-10 00:15:12'),
(37, 1000, 'LOCAL_PC', NULL, '1628586043934Readme.txt', 'txt', '1', NULL, '2021-08-10 03:30:45', '2021-08-10 03:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_08_04_100657_create_files_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

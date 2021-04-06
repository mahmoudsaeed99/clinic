-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 10:23 PM
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
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'amr', '$2y$10$GxEtnh4srWgmpDOcqGb1OuFJM/q.8MyA2pObY/qflYTOOLcksBNE6', '2020-09-05 10:52:34', '2020-09-05 10:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `commit` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `patient_id`, `commit`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-05 16:52:43', '2020-09-05 16:52:43'),
(2, 2, 0, '2020-09-05 16:53:23', '2020-09-05 16:53:23'),
(3, 3, 1, '2020-09-06 16:53:46', '2020-09-06 16:53:46'),
(4, 4, 1, '2020-09-08 16:54:05', '2020-09-08 16:54:05'),
(5, 7, 0, '2020-09-12 22:00:00', '2020-09-13 10:39:46'),
(6, 20, 0, '2020-09-17 22:00:00', '2020-09-18 15:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `patient_id`, `img`, `created_at`, `updated_at`) VALUES
(3, 8, 'jgGz74lBCfI1BrQu7ihtedUkVR88tKsOhgg2UX6s.png', '2020-09-13 11:57:57', '2020-09-13 11:57:57'),
(4, 8, 'd9nRP8zFJyaG48SSp5PZdj9N1Qpk9AJCP3m9W6IB.png', '2020-09-13 11:58:35', '2020-09-13 11:58:35'),
(5, 8, 'QuYp6HDXA2n3mtTdrSbth18v0RwuR5kRNG62IohR.png', '2020-09-13 12:00:06', '2020-09-13 12:00:06'),
(6, 18, 'MVmyMx0nIF1VXLSa3M2KJ9Up72cSIwvE1tSBQw7V.png', '2020-09-17 22:29:16', '2020-09-17 22:29:16'),
(7, 18, 'wnKslh5Wf90jJ02ly5on7AFR8LAkimP3SZlj959R.png', '2020-09-17 22:29:26', '2020-09-17 22:29:26'),
(8, 21, 'BId36Ry267B9Ve6ApNcg4dMZpIq5ZUZFf4fvQnlW.png', '2020-09-18 11:19:30', '2020-09-18 11:19:30'),
(9, 21, 'y2jv8KLhbNgnAwYMTCtGyqhr2BlDqnjF9KlefeVh.png', '2020-09-18 11:19:35', '2020-09-18 11:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `lower_dentures`
--

CREATE TABLE `lower_dentures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `seventeen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eighteen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nineteen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twenty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentyone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentytwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentythree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentyfour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentyfive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentysix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentyseven` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentyeight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twentynine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thirty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thirtyone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thirtytwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lower_dentures`
--

INSERT INTO `lower_dentures` (`id`, `patient_id`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twentyone`, `twentytwo`, `twentythree`, `twentyfour`, `twentyfive`, `twentysix`, `twentyseven`, `twentyeight`, `twentynine`, `thirty`, `thirtyone`, `thirtytwo`, `created_at`, `updated_at`) VALUES
(1, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-17 23:02:45', '2020-09-17 23:02:45'),
(2, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-18 11:18:29', '2020-09-18 11:18:29');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_08_25_185528_create_admins_table', 1),
(3, '2020_08_25_185947_create_patients_table', 1),
(4, '2020_08_25_191944_create_services_table', 1),
(5, '2020_08_25_192103_create_transactions_table', 1),
(8, '2020_09_03_115819_create_images_table', 1),
(9, '2020_09_03_144008_create_bookings_table', 1),
(10, '2020_09_04_193249_patient__service', 2),
(11, '2020_09_04_194541_create_patient_service_table', 3),
(14, '2020_08_25_195343_create_upper_dentures_table', 4),
(15, '2020_08_25_195635_create_lower_dentures_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `totalMoney` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heart` tinyint(1) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `allergy` tinyint(1) NOT NULL,
  `bleed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `totalMoney`, `mobile`, `note`, `heart`, `diabetes`, `allergy`, `bleed`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 22, 3000, '01117858476', 'i am a new patient in the clinic', 1, 1, 1, 1, '2020-09-05 14:35:30', '2020-09-17 20:35:22'),
(2, 'sameh', 25, 15000, '011177755', 'i am a new patient in the clinic', 1, 1, 1, 1, '2020-09-05 14:47:15', '2020-09-05 14:47:15'),
(3, 'mariem', 30, 4000, '0111112222', 'i am a new patient in the clinic', 1, 1, 1, 1, '2020-09-05 14:47:15', '2020-09-05 14:47:15'),
(4, 'ayman', 60, 6000, '0100265548', 'i am a new patient in the clinic', 1, 1, 1, 1, '2020-09-05 14:47:15', '2020-09-05 14:47:15'),
(5, 'ahmed', 30, 5000, '01001667259', 'i am a new patient in the clinic', 0, 1, 0, 1, '2020-09-05 14:47:15', '2020-09-05 14:47:15'),
(6, 'sayd', 50, 2500, '010033300', 'i am a new patient in the clinic', 1, 1, 1, 1, '2020-09-05 14:47:15', '2020-09-05 14:47:15'),
(7, 'mohamed ahmed ibrahim', 60, 0, '01112223334', 'i am mohamed ahmed ibrahim', 1, 0, 1, 0, '2020-09-13 10:37:41', '2020-09-13 10:37:41'),
(8, 'ismael ahmed audin', 70, 0, '01122336610', 'i am new here', 1, 0, 1, 0, '2020-09-13 11:33:45', '2020-09-13 11:33:45'),
(15, 'hassnaa hassan', 19, 0, '01126293041', 'hassnaa hassan', 1, 0, 1, 0, '2020-09-17 22:10:41', '2020-09-17 22:10:41'),
(18, 'ahmed hossam', 23, 0, '01221231240', 'ahmed hossam', 0, 0, 0, 0, '2020-09-17 22:19:51', '2020-09-17 22:19:51'),
(19, 'ahmed hossam', 24, 0, '01221231240', 'ahmed hossam', 1, 0, 0, 1, '2020-09-17 22:26:06', '2020-09-17 22:26:06'),
(20, 'sameh lotfy ahmed', 66, 0, '01234567891', 'sameh lotfy ahmed', 1, 1, 0, 0, '2020-09-17 23:02:45', '2020-09-17 23:02:45'),
(21, 'ahmed hassan', 40, -500, '01001916672', '7aml', 0, 0, 0, 0, '2020-09-18 11:18:29', '2020-09-18 11:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `patient_service`
--

CREATE TABLE `patient_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_service`
--

INSERT INTO `patient_service` (`id`, `patient_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 'خلع ضرس', 1000, '2020-09-04 20:33:37', '2020-09-04 20:33:37'),
(3, 'مهمات وقائية أسنان', 2000, '2020-09-04 21:20:58', '2020-09-18 11:20:26'),
(9, 'تبيض اسنان', 4000, '2020-09-18 15:04:12', '2020-09-18 15:04:12'),
(10, 'شراء غسول', 100, '2020-09-18 15:05:41', '2020-09-18 15:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `upper_dentures`
--

CREATE TABLE `upper_dentures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `six` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seven` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eleven` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twelve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thirteen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fourteen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fifteen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sixteen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upper_dentures`
--

INSERT INTO `upper_dentures` (`id`, `patient_id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `created_at`, `updated_at`) VALUES
(1, 20, NULL, NULL, NULL, 'rgb(255, 255, 0)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-17 23:02:45', '2020-09-17 23:02:54'),
(2, 21, NULL, NULL, NULL, 'rgb(248, 182, 168)', 'rgb(255, 255, 0)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-18 11:18:29', '2020-09-18 11:19:13');

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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `lower_dentures`
--
ALTER TABLE `lower_dentures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lower_dentures_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_service`
--
ALTER TABLE `patient_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_service_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_service_service_id_foreign` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upper_dentures`
--
ALTER TABLE `upper_dentures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upper_dentures_patient_id_foreign` (`patient_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lower_dentures`
--
ALTER TABLE `lower_dentures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patient_service`
--
ALTER TABLE `patient_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upper_dentures`
--
ALTER TABLE `upper_dentures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `lower_dentures`
--
ALTER TABLE `lower_dentures`
  ADD CONSTRAINT `lower_dentures_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_service`
--
ALTER TABLE `patient_service`
  ADD CONSTRAINT `patient_service_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `patient_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `upper_dentures`
--
ALTER TABLE `upper_dentures`
  ADD CONSTRAINT `upper_dentures_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

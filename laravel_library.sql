-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2023 at 01:21 PM
-- Server version: 8.0.33-0ubuntu0.22.04.1
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int NOT NULL DEFAULT '1',
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `school_id`, `title`, `image`, `author`, `isbn_no`, `barcode`, `stock`, `description`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'ewqfewf', '1683282759.jpg', 'wefwefw', '34534534', '', 0, 'qwqwqofq', 'Thrillers', 1, '2023-05-05 05:02:39', '2023-05-09 22:32:42'),
(2, 4, 3, 'ghfgf', '1683282804.jpg', 'gtfhfgh', '76786', '2', 0, 'gfhfhfg', 'Nobles', 1, '2023-05-05 05:03:24', '2023-05-12 11:21:08'),
(3, 3, 2, 'title', '1683287612.jpg', 'author', '78978978', '1', 1, 'description', 'Nobles', 1, '2023-05-05 06:23:32', '2023-05-12 11:08:26'),
(4, 3, 2, 'qwerty', '1683289418.jpg', 'author', '7898799', '2', 1, 'description', 'Law', 1, '2023-05-05 06:53:38', '2023-05-12 11:08:28'),
(5, 3, 2, 'fgtgg', '1683291257.jpg', 'gfgfg', '56757567', '3', 1, 'retgrgryrygrt yrt tyrt6', '10', 1, '2023-05-05 07:24:17', '2023-05-12 11:08:32'),
(6, 4, 3, 'title', '1683548812.jpg', 'author', '8778997', '4', 1, 'description', '[\"10\",\"12\"]', 1, '2023-05-08 06:56:52', '2023-05-12 11:08:37'),
(7, 4, 3, 'title', '1683549274.jpg', 'author', '76867867', 'barcode', 0, 'description', '[\"10\",\"noble\"]', 1, '2023-05-08 07:04:34', '2023-05-11 03:36:57'),
(8, 4, 3, 'Nature', '1683607152.jpg', 'author', '789789', '89799787', 14, 'description,', '1,2', 1, '2023-05-08 23:09:12', '2023-05-11 23:13:56'),
(9, 4, 3, 'title', '1683692003.jpg', 'author', '789787978', '89799787', 12, 'description', '1', 1, '2023-05-09 22:43:23', '2023-05-12 00:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nobel', 1, NULL, NULL),
(2, 'thriller', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `barcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` int DEFAULT NULL,
  `hours` int DEFAULT NULL,
  `fine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_days` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `book_id`, `user_id`, `school_id`, `barcode`, `days`, `hours`, `fine`, `late_days`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 8, 3, NULL, 2, 4, NULL, NULL, 1, '2023-05-09 03:48:47', '2023-05-09 03:48:47'),
(2, NULL, 8, 3, NULL, 2, 4, NULL, NULL, 1, '2023-05-09 04:16:53', '2023-05-09 04:16:53'),
(3, NULL, 8, 3, NULL, 2, 8, NULL, NULL, 1, '2023-05-09 05:03:02', '2023-05-09 05:03:02'),
(4, NULL, 8, 3, NULL, NULL, NULL, NULL, NULL, 1, '2023-05-09 05:30:00', '2023-05-09 05:30:00'),
(5, NULL, 8, 3, NULL, 2, 4, NULL, NULL, 1, '2023-05-09 05:30:06', '2023-05-09 05:30:06'),
(6, NULL, 8, 3, '89799787', 2, 4, NULL, NULL, 1, '2023-05-09 05:52:48', '2023-05-09 05:52:48'),
(7, NULL, 8, 3, '89799787', 2, 24, NULL, NULL, 1, '2023-05-09 05:53:10', '2023-05-09 05:53:10'),
(22, 1, 8, 3, NULL, 2, NULL, NULL, NULL, 1, '2023-05-09 22:32:42', '2023-05-09 22:32:42'),
(63, 8, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 07:33:37', '2023-05-13 07:33:37'),
(71, 8, 8, 3, '89799787', 4, NULL, '0', NULL, 0, '2023-05-11 22:57:31', '2023-05-15 22:57:31'),
(87, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:19:17', '2023-05-13 23:19:17'),
(88, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:22:38', '2023-05-13 23:22:38'),
(89, 9, 8, 3, '89799787', 4, NULL, '0', NULL, 0, '2023-05-11 23:23:19', '2023-05-15 23:23:19'),
(90, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:29:41', '2023-05-13 23:29:41'),
(91, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:30:16', '2023-05-13 23:30:16'),
(92, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:44:08', '2023-05-13 23:44:08'),
(93, 9, 8, 3, '89799787', 0, NULL, '0', NULL, 0, '2023-05-11 23:45:07', '2023-05-11 23:45:19'),
(94, 9, 8, 3, '89799787', 4, NULL, '0', NULL, 0, '2023-05-11 23:52:22', '2023-05-15 23:52:22'),
(95, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:55:04', '2023-05-13 23:55:04'),
(96, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-11 23:56:29', '2023-05-13 23:56:29'),
(97, 9, 8, 3, '89799787', 4, NULL, '0', NULL, 0, '2023-05-12 00:01:21', '2023-05-16 00:01:21'),
(98, 9, 8, 3, '89799787', 2, NULL, '0', NULL, 0, '2023-05-12 00:02:05', '2023-05-14 00:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED DEFAULT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `book_id`, `school_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 1, '2023-05-05 05:03:24', '2023-05-05 05:03:24'),
(2, 3, 2, 1, '2023-05-05 06:23:32', '2023-05-05 06:23:32'),
(3, 4, 2, 1, '2023-05-05 06:53:38', '2023-05-05 06:53:38'),
(4, 5, 2, 1, '2023-05-05 07:24:17', '2023-05-05 07:24:17'),
(5, 6, 3, 1, '2023-05-08 06:56:52', '2023-05-08 06:56:52'),
(6, 7, 3, 1, '2023-05-08 07:04:34', '2023-05-08 07:04:34'),
(7, 8, 3, 1, '2023-05-08 23:09:12', '2023-05-08 23:09:12'),
(8, 9, 3, 1, '2023-05-09 22:43:23', '2023-05-09 22:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_03_051359_create_schools_table', 1),
(6, '2023_05_03_051545_add_coloums_to_users_table', 1),
(7, '2023_05_03_054344_add_coloums_to_schools_table', 1),
(8, '2023_05_03_085835_create_user_detail_table', 2),
(9, '2023_05_03_090626_create_books_table', 2),
(11, '2023_05_03_105822_create_books_table', 3),
(12, '2023_05_03_122908_create_user_detail_table', 4),
(13, '2023_05_04_051748_add_coloumns_to_books_table', 5),
(14, '2023_05_04_071229_create_collections_table', 6),
(15, '2023_05_04_085424_add_coloumns_to_books_table', 7),
(18, '2023_05_04_062743_create_books_table', 8),
(19, '2023_05_05_073135_create_rating_table', 8),
(20, '2023_05_05_102557_create_collections_table', 9),
(21, '2023_05_05_103057_add_coloumn_to_books_table', 10),
(22, '2023_05_08_091447_create_category_table', 11),
(23, '2023_05_08_093810_create_checkout_table', 11),
(24, '2023_05_09_043406_add_column_to_books_table', 12);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `book_id` bigint UNSIGNED DEFAULT NULL,
  `rate` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user_id`, `book_id`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 4, 'jhgbjygyj', '2023-05-08 02:01:10', '2023-05-09 00:34:24'),
(2, 8, 2, 4, 'nice book.,', '2023-05-08 02:01:41', '2023-05-08 05:37:13'),
(3, 7, 1, 4, 'nice book,', '2023-05-08 02:12:47', '2023-05-08 02:12:47'),
(4, 8, 8, 4, 'nice book,', '2023-05-09 01:05:38', '2023-05-09 03:48:40'),
(5, NULL, NULL, 2, 'nice,', '2023-05-09 05:33:39', '2023-05-09 05:33:39'),
(6, 8, 6, 3, 'average,', '2023-05-09 05:55:09', '2023-05-09 05:55:09'),
(7, 8, 7, 2, 'nice,', '2023-05-09 06:02:41', '2023-05-09 06:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `logo`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, '1683100212.png', 'MIPS School', 'mips-school', '2023-05-03 02:20:12', '2023-05-03 02:20:12'),
(3, '1683116026.png', 'DPS School', 'dps-school', '2023-05-03 06:43:46', '2023-05-03 06:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `school_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `school_id`, `name`, `email`, `role`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'admin@gmail.com', '0', 1, NULL, '$2y$10$4XTBsjqtCBY3B1zcceJvYODlJ1dmZHyLZHsgRTfNP8u3yGb2A9QIC', NULL, NULL, NULL),
(3, 2, 'MIPS School', 'siiankush@teqmavens.com', '1', 1, NULL, '$2y$10$bBlhw8Sd2WApuSLfuaJwOugjf8ppTfpg5N9.qJd0Dn8kBc7NZZB/K', NULL, '2023-05-03 02:20:12', '2023-05-03 02:20:12'),
(4, 3, 'DPS School', 'siankush@teqmavens.com', '1', 1, NULL, '$2y$10$/1Wo6FOPVkymGGsY7s.Sz.MWPVmInDiVYdEOzST7VziMPmgQ4BSue', NULL, '2023-05-03 06:43:46', '2023-05-03 06:43:46'),
(5, 3, 'qwerty', 'sameer@gmail.com', '1', 2, NULL, '$2y$10$X5Ot3frdVTw76jDvQqd2C.m2jkv8D2VCcAXlFimSok0YRWj9mb3uK', NULL, '2023-05-03 22:51:20', '2023-05-03 22:51:20'),
(6, 3, 'qwerty', 'samar@gmail.com', '1', 2, NULL, '$2y$10$.zSQKRPHGDjRXCoj/2TL8O55e9.p27awPygoWiAaCCNyri48HfFIu', NULL, '2023-05-04 00:12:43', '2023-05-04 00:12:43'),
(7, 3, 'qwerty', 'samerty@gmail.com', '2', 1, NULL, '$2y$10$xnNdsaflfEoQrMyCY4eaEeY6DdI4ZrAv94Nz3aZWoxdzM0y3j8Wjq', NULL, '2023-05-04 00:50:49', '2023-05-04 00:50:49'),
(8, 3, 'qwerty', 'sameera@gmail.com', '2', 1, NULL, '$2y$10$4vLimsTwtnilIGU2XoOBfe2LDtv1P5QFLG.8/CPeQYWBid/KzKwIC', NULL, '2023-05-05 03:20:50', '2023-05-05 03:20:50'),
(9, 2, 'Rahul Kumar', 'rahul@gmail.com', '2', 1, NULL, '$2y$10$1xDCoAGezKE7r11QTMrlw.IanfU5WrONzkUZ9eRSyUc3CLUuXimwG', NULL, '2023-05-05 07:26:39', '2023-05-05 07:26:39'),
(10, 3, 'qwerty', 'qwerty@gmail.com', '2', 1, NULL, '$2y$10$EdcU0IPSz30osXeIkvhrreZMOWR9gga.zdOTB1TCBa8u69ZSxvOP2', NULL, '2023-05-09 22:44:40', '2023-05-09 22:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_expires` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_id`, `image`, `number`, `address`, `localaddress`, `city`, `zip`, `state`, `card_expires`, `created_at`, `updated_at`) VALUES
(1, 5, '1683174080.jpg', '8797897898', 'companyaddress', 'local', 'city', '132114', 'state', '2023-05-06', '2023-05-03 22:51:20', '2023-05-03 22:51:20'),
(2, 6, '1683178963.jpg', '07899789797', 'companyaddress', 'local', 'city', '132114', 'state', '2023-05-14', '2023-05-04 00:12:43', '2023-05-04 00:12:43'),
(3, 7, '1683181249.jpg', '07899789797', 'companyaddress', 'local', 'city', '132114', 'state', '2023-05-10', '2023-05-04 00:50:49', '2023-05-04 00:50:49'),
(4, 8, '1683276650.jpg', '11212', 'companyaddress', 'local', 'city', '132114', 'state', '2023-05-14', '2023-05-05 03:20:50', '2023-05-05 03:20:50'),
(5, 9, '1683291399.jpg', '1121245', 'ytryyt', 'local', 'city', '132114', 'state', '2023-05-18', '2023-05-05 07:26:39', '2023-05-05 07:26:39'),
(6, 10, '1683692080.jpg', '11212', 'companyaddress', 'local', 'city', '132114', 'state', '2023-05-14', '2023-05-09 22:44:40', '2023-05-09 22:44:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_user_id_foreign` (`user_id`),
  ADD KEY `books_school_id_foreign` (`school_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkout_book_id_foreign` (`book_id`),
  ADD KEY `checkout_user_id_foreign` (`user_id`),
  ADD KEY `checkout_school_id_foreign` (`school_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collections_book_id_foreign` (`book_id`),
  ADD KEY `collections_school_id_foreign` (`school_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_user_id_foreign` (`user_id`),
  ADD KEY `rating_book_id_foreign` (`book_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_school_id_foreign` (`school_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_detail_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `users` (`school_id`),
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `checkout_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `checkout_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `collections_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

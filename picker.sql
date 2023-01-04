-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picker`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_price` decimal(8,2) NOT NULL,
  `buy_now_price` decimal(8,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `auction_condition_id` int(10) UNSIGNED NOT NULL,
  `auction_category_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `title`, `description`, `start_price`, `buy_now_price`, `start_date`, `end_date`, `auction_condition_id`, `auction_category_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'animi', 'Rerum voluptate omnis temporibus. Ut excepturi id quasi aut aut qui. Pariatur necessitatibus consectetur ut aut accusamus cum est et.', '656.23', '12.78', '2022-03-24 17:49:12', '2023-06-14 10:41:59', 7, 1, 5, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(2, 'ipsam', 'Veritatis sit sit voluptate culpa cum autem culpa. Autem ullam deleniti nihil doloribus ut voluptas optio deserunt. Sed voluptatem aut omnis pariatur dolores vel officia. Repellat nisi et rerum qui cupiditate.', '662.97', '469.29', '2022-01-17 00:00:11', '2023-05-19 09:56:36', 4, 9, 4, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(3, 'pariatur', 'Repellat et magni modi beatae sunt. Qui eum quia molestiae est maiores dolorem reprehenderit quis. Cumque est ducimus maxime minima architecto voluptatibus mollitia non. Cumque voluptatum earum similique fugiat excepturi nesciunt voluptatem.', '625.22', '229.22', '2022-09-14 04:54:03', '2023-05-16 22:32:03', 6, 9, 4, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(4, 'autem', 'Voluptas pariatur ut vel repellat iusto. Nemo quaerat aperiam dolore. Et sunt quisquam tenetur necessitatibus qui. Occaecati voluptates ipsum dolor sint nihil minima. Rerum aut qui commodi et in.', '945.58', '99.02', '2022-03-01 18:51:58', '2023-02-13 03:36:25', 3, 5, 7, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(5, 'voluptas', 'Quos voluptates ducimus aut iure. Cumque sit laboriosam est. Nihil iusto ducimus nam ut ut est reiciendis. Aut non quo odit ut omnis enim.', '705.50', '194.09', '2022-03-30 19:17:52', '2023-03-24 15:57:04', 8, 2, 5, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(6, 'quidem', 'Aperiam dignissimos molestiae molestias a quia repellat earum. Quo molestiae quos eos et iure. Voluptas sit laboriosam vitae qui possimus id. Harum eum alias mollitia accusamus.', '613.52', '636.87', '2022-06-28 18:58:58', '2023-09-03 03:10:39', 8, 1, 6, '2022-12-29 00:02:37', '2022-12-29 00:02:37'),
(7, 'repellat', 'Possimus tenetur aut rerum qui aut amet modi. Nihil atque consectetur nihil qui ut ipsam quis. Recusandae dicta non sint voluptas et.', '861.05', '200.19', '2022-01-22 00:58:49', '2023-09-12 10:00:09', 2, 5, 3, '2022-12-28 23:45:02', '2022-12-28 23:45:02'),
(8, 'quas', 'A et aspernatur quam. Qui neque iure pariatur optio. Fuga animi aut repellendus beatae sed distinctio natus.', '318.83', '153.46', '2022-12-27 13:48:08', '2023-05-12 01:15:37', 4, 4, 6, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(9, 'eum', 'Commodi consectetur eveniet sint vel. Harum id sit deserunt sed est eius ea. Alias quod numquam facilis cum et commodi. Dolor dolores doloribus sint dolorem.', '629.50', '628.75', '2022-04-29 18:55:08', '2023-07-04 20:40:34', 7, 4, 5, '2022-12-28 23:44:11', '2022-12-28 23:44:11'),
(10, 'veniam', 'Ea illo iure quibusdam aperiam aspernatur. Aut ullam aspernatur at ut quisquam dignissimos animi. Rem sint fugit temporibus voluptas iste modi. Ipsum enim natus voluptatem repudiandae reprehenderit et cum.', '416.42', '417.15', '2022-03-21 00:21:24', '2023-02-08 12:17:05', 8, 7, 8, '2022-12-28 23:44:11', '2022-12-28 23:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `auction_categories`
--

CREATE TABLE `auction_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auction_conditions`
--

CREATE TABLE `auction_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `condition` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `auction_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `amount`, `auction_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '634.00', 1, 6, '2022-12-28 23:56:05', '2022-12-28 23:56:05'),
(2, '399.00', 7, 9, '2022-12-28 23:56:05', '2022-12-28 23:56:05'),
(3, '94.00', 9, 2, '2022-12-28 23:56:06', '2022-12-28 23:56:06'),
(6, '547.00', 1, 5, '2022-12-28 23:56:05', '2022-12-28 23:56:05'),
(7, '358.00', 9, 7, '2022-12-29 00:02:06', '2022-12-29 00:02:06'),
(8, '88.00', 10, 1, '2022-12-29 00:02:05', '2022-12-29 00:02:05'),
(9, '419.00', 7, 2, '2022-12-29 00:02:05', '2022-12-29 00:02:05'),
(11, '400.00', 10, 1, '2022-12-29 00:02:01', '2022-12-29 00:02:01'),
(12, '272.00', 5, 2, '2022-12-29 00:01:57', '2022-12-29 00:01:57'),
(13, '410.00', 1, 4, '2022-12-28 23:56:05', '2022-12-28 23:56:05'),
(15, '555.00', 1, 6, '2022-12-29 00:02:02', '2022-12-29 00:02:02'),
(16, '543.00', 5, 9, '2022-12-29 00:02:07', '2022-12-29 00:02:07'),
(17, '318.00', 9, 9, '2022-12-29 00:02:02', '2022-12-29 00:02:02'),
(18, '61.00', 4, 9, '2022-12-29 00:02:02', '2022-12-29 00:02:02'),
(19, '324.00', 7, 9, '2022-12-29 00:02:01', '2022-12-29 00:02:01'),
(20, '615.00', 1, 4, '2022-12-29 00:02:05', '2022-12-29 00:02:05'),
(22, '708.00', 3, 1, '2022-12-28 23:56:05', '2022-12-28 23:56:05'),
(23, '518.00', 7, 4, '2022-12-29 00:02:10', '2022-12-29 00:02:10'),
(24, '314.00', 1, 9, '2022-12-29 00:02:02', '2022-12-29 00:02:02'),
(25, '360.00', 2, 1, '2022-12-29 00:02:01', '2022-12-29 00:02:01'),
(26, '327.00', 10, 4, '2022-12-29 00:02:05', '2022-12-29 00:02:05'),
(27, '661.00', 5, 10, '2022-12-29 00:02:00', '2022-12-29 00:02:00'),
(28, '774.00', 4, 5, '2022-12-29 00:02:05', '2022-12-29 00:02:05'),
(29, '997.00', 2, 7, '2022-12-28 23:56:06', '2022-12-28 23:56:06'),
(30, '100.00', 2, 6, '2022-12-28 23:56:05', '2022-12-28 23:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auction_id` int(10) UNSIGNED NOT NULL,
  `feedback_type_id` int(10) UNSIGNED NOT NULL,
  `left_by_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_types`
--

CREATE TABLE `feedback_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_24_014220_create_auction_categories_table', 1),
(6, '2022_12_24_014418_create_auction_conditions_table', 1),
(7, '2022_12_24_101856_create_auctions_table', 1),
(8, '2022_12_24_134751_create_bids_table', 1),
(9, '2022_12_26_034357_create_feedback_types_table', 1),
(10, '2022_12_26_034411_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ravindu@123.com', '$2y$10$XRNBi166Y0Za1pcbOmdT7.cAD478dRK8Aa3EvKyzkce5EBSF64siu', '2022-12-29 02:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 52, 'authtoken', 'e89dae2743530e449ef9f1af8039717f2892b79514ce81e299aaa64fa76479ad', '[\"*\"]', '2022-12-29 02:04:48', '2022-12-29 02:03:44', '2022-12-29 02:04:48'),
(2, 'App\\Models\\User', 52, 'authtoken', '6f76bac861ac165336d694fb8379125bc5eb7380bfa70d44e34eeec9f7f763a0', '[\"*\"]', NULL, '2022-12-29 02:05:23', '2022-12-29 02:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kristoffer Lueilwitz', 'smith.sophie@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1mt4m8O07M', '2022-12-28 23:55:42', '2022-12-28 23:55:42'),
(2, 'Glenda Upton', 'keeling.nannie@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nVOYrCDJnu', '2022-12-28 23:55:42', '2022-12-28 23:55:42'),
(3, 'Mable Huels I', 'bella.ernser@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5edxpgQRFX', '2022-12-28 23:55:42', '2022-12-28 23:55:42'),
(4, 'Bradly Howe', 'anita67@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cLmYab0C3S', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(5, 'Prof. Einar Pagac', 'monica.mills@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tWVYIZAIud', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(6, 'Eldora Effertz', 'laisha82@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J2HCu7zFM2', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(7, 'Destiny Murray', 'nicole.barton@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lf5XMCJlSW', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(8, 'Elouise Greenfelder', 'jakubowski.isabelle@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1tgiOF5kFJ', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(9, 'Caitlyn Braun', 'jazmin74@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8G2Ken5lDN', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(10, 'Florencio Funk', 'xmcglynn@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VD7kE2n1fE', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(11, 'Justen Goldner DVM', 'warmstrong@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HcmNUK0LZv', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(12, 'Aida Prohaska', 'wolff.raheem@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'C6ZIvln59S', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(14, 'Ova Jacobi', 'kkoss@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HO9bUWdKmm', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(15, 'Bridie Gutmann', 'angel.bailey@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mMZInKWqcQ', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(16, 'Prof. Demario Kemmer', 'grady.derick@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'z5vqrUPczf', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(17, 'Chauncey Gusikowski', 'aliya.jakubowski@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sRzQ7DjLoQ', '2022-12-28 23:55:43', '2022-12-28 23:55:43'),
(18, 'Jayce Tillman III', 'wade.schimmel@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OE9sSF8Ims', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(19, 'Dr. Mac Yost V', 'cory.tillman@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oJv2jyMZpv', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(20, 'Kenyon Schowalter', 'barney.wehner@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2L3fkJm0Ib', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(21, 'Lesly Leannon', 'mylene27@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iS2tOoQuJY', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(22, 'Alice Lubowitz', 'dina70@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EzHTE9SMZR', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(23, 'Mr. Branson Bruen Jr.', 'adella.mcglynn@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CeyF5aShiV', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(24, 'Prof. Caleb Schneider', 'wyman.sarah@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'F1ZaYlhl26', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(25, 'Verdie Grimes', 'marguerite.towne@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'akTMCwuoIE', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(26, 'Vallie Graham V', 'wisozk.berniece@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ru7pse46Dp', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(27, 'Genoveva Kris PhD', 'tressa.buckridge@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EDZByptZ4E', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(28, 'Heloise Hoppe', 'jenkins.rhianna@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zYNKv3qS3T', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(29, 'Angie Balistreri', 'ikuhic@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HvswN3PEjA', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(30, 'Johnathan Hyatt', 'xzboncak@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GS8P4Mc1pK', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(31, 'Niko Barrows', 'von.linnie@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WC0ZVfkFeG', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(32, 'Kelley Stroman II', 'gharris@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'skG2AlGE2r', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(33, 'Gideon McKenzie MD', 'hunter21@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H4bkFoKUaa', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(34, 'Emmett Schultz', 'philip.jerde@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KMPnuGXDjP', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(35, 'Neil Johns', 'bmueller@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yR4iz8gGIY', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(36, 'Dr. Jesse Swift', 'lourdes.beatty@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IejTLCLJvH', '2022-12-28 23:55:44', '2022-12-28 23:55:44'),
(37, 'Reginald Rohan', 'raynor.giovani@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ApUTMifoh0', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(38, 'Adelia Olson III', 'brobel@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'K4WWaHpDgr', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(39, 'Ronaldo Howe IV', 'torphy.florian@example.net', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aTAae9lRWa', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(40, 'Evalyn Romaguera', 'reichel.boyd@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'le7b2lRmHg', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(41, 'Lucious Altenwerth', 'thurman.harvey@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FyaX1UV5bv', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(42, 'Timmothy Flatley I', 'laury.stehr@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RbiIJD6nNo', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(43, 'Lexi Rutherford II', 'cartwright.emery@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qFaZ6CcZ0h', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(44, 'Coy Kirlin', 'cormier.aleen@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'j1LldBwcLu', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(45, 'Kameron Boyer', 'jorge.hills@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MHFKkINJ0I', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(46, 'Ned Schimmel', 'cristina29@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lkczU6ZbEw', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(47, 'Izaiah Lakin DDS', 'erosenbaum@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bMlpBL7wq4', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(48, 'Mr. Malachi McKenzie', 'kayli.bradtke@example.com', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Y1yEuZAh7t', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(49, 'Seamus Huels', 'hadley.kutch@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CXWYt0BZCL', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(50, 'Tomas Schimmel', 'eauer@example.org', '2022-12-28 23:55:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g1gQ4JY3VP', '2022-12-28 23:55:45', '2022-12-28 23:55:45'),
(51, 'ravind', 'ravindu@1f23.com', NULL, '$2y$10$SlXDvamk/aOP.Vp8zul3seWPFvdyAkUN1ylKBshNbt/R.aD2Sh/eO', NULL, '2022-12-29 02:00:53', '2022-12-29 02:00:53'),
(52, 'ravind', 'ravindu@123.com', NULL, '$2y$10$FyHo.DsWQRc5LJBIwCT26exCwDXSZ96SDrzgz4N8smIJuBfxqZ2bi', NULL, '2022-12-29 02:01:35', '2022-12-29 02:01:35'),
(53, 'ravind', 'ravindu@1523.com', NULL, '$2y$10$qxnkuOHD40ud/w4TfsnqM.jjdk2exyPyrv4E8bhb17UTSAVy82MeO', NULL, '2022-12-29 02:05:12', '2022-12-29 02:05:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction_categories`
--
ALTER TABLE `auction_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auction_categories_category_unique` (`category`);

--
-- Indexes for table `auction_conditions`
--
ALTER TABLE `auction_conditions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auction_conditions_condition_unique` (`condition`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_auction_id_foreign` (`auction_id`),
  ADD KEY `bids_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedback_auction_id_unique` (`auction_id`),
  ADD KEY `feedback_feedback_type_id_foreign` (`feedback_type_id`),
  ADD KEY `feedback_left_by_user_id_foreign` (`left_by_user_id`);

--
-- Indexes for table `feedback_types`
--
ALTER TABLE `feedback_types`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auction_categories`
--
ALTER TABLE `auction_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auction_conditions`
--
ALTER TABLE `auction_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_types`
--
ALTER TABLE `feedback_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`),
  ADD CONSTRAINT `bids_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedback_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`),
  ADD CONSTRAINT `feedback_feedback_type_id_foreign` FOREIGN KEY (`feedback_type_id`) REFERENCES `feedback_types` (`id`),
  ADD CONSTRAINT `feedback_left_by_user_id_foreign` FOREIGN KEY (`left_by_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

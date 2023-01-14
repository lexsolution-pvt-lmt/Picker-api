-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 08:49 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ravindu', NULL, 'ravindu@123.com', '2023-01-10 07:50:25', '$2y$10$chGdJ3WrzR143G5.EC6DsuERJbKJgfl3mjwETZuuqFbhgloOTPufi', NULL, '2023-01-10 07:38:54', '2023-01-10 07:50:25'),
(2, 'ravindu', NULL, 'ravindu@1234.com', NULL, '$2y$10$XSx775qp0UCMAKSREFoxweKjdJA7R/Etf7yChVTpjFJf5iJmuVQ/e', NULL, '2023-01-10 07:40:56', '2023-01-10 07:40:56'),
(3, 'ravind', NULL, 'ravindu@1235.com', NULL, '$2y$10$NaXk0EfIBDsE1BsU.9j/6O8i4uKcOt9C843n5shrj1cTiXTZD6hMG', NULL, '2023-01-10 07:46:39', '2023-01-10 07:46:39'),
(4, 'ravi dd', NULL, 'ravindu@12366.com', NULL, '123', NULL, '2023-01-12 22:01:31', '2023-01-12 22:01:31'),
(5, 'dddd', NULL, 'Dharme@123.com', NULL, '$2y$10$GYI01UD9vzeELNJlqkdqJOi6e7I9dAbfMc64G2ekZNned9nIJ7SIK', NULL, '2023-01-14 02:10:31', '2023-01-14 02:10:31');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

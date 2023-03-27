-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 06:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `image`, `gender`, `state`, `country`, `dob`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hamza', 'Ahmed', 'hamza@gmail.com', '202cb962ac59075b964b07152d234b70', 'pngegg (34).png', 'Male', 'Karachi', 'Pakistan', '2023-01-29', 1, '2023-02-28 08:10:25', '2023-02-28 08:10:25', NULL),
(2, 'Saad', 'Khan', 'saad@gmail.com', '202cb962ac59075b964b07152d234b70', 'pngegg (35).png', 'Male', 'Lahore', 'Pakistan', '2023-01-29', 1, '2023-02-28 08:11:10', '2023-02-28 08:11:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Jewellery', '1', '2023-02-04 07:14:28', '2023-02-04 14:06:31', NULL),
(2, 1, 'BRACELET', '1', '2023-02-04 07:14:52', '2023-02-04 10:37:01', NULL),
(3, 1, 'RINGS', '1', '2023-02-04 07:14:58', '2023-02-04 14:06:30', NULL),
(4, 1, 'EARINGS', '1', '2023-02-04 07:15:03', '2023-02-04 14:14:47', NULL),
(6, 1, 'qwertyuio', '1', '2023-02-04 14:15:06', '2023-02-04 14:15:17', '2023-02-04 14:15:17'),
(7, 1, 'qwertyu', '1', '2023-02-04 14:15:10', '2023-02-04 14:15:15', '2023-02-04 14:15:15'),
(8, NULL, 'Diamond', '1', '2023-02-13 04:12:55', '2023-02-13 04:12:55', NULL),
(9, 8, 'Diamond Rings', '1', '2023-02-13 04:13:15', '2023-02-13 04:13:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(116, '2014_10_12_000000_create_users_table', 1),
(117, '2014_10_12_100000_create_password_resets_table', 1),
(118, '2019_08_19_000000_create_failed_jobs_table', 1),
(119, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(120, '2023_01_18_114832_create__customer_table', 1),
(121, '2023_01_20_175430_add_deleted_at_to_customer_table', 1),
(122, '2023_01_21_091509_create__admin_table', 1),
(123, '2023_01_27_113736_create_categories_table', 1),
(124, '2023_01_29_162722_create_products_table', 1),
(125, '2023_02_03_141554_create_product_details_table', 1),
(126, '2023_02_13_090106_create_carts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 4, 'Gold Earings', '35000', '040220231675522239.png', '1', '2023-02-04 09:50:39', '2023-02-04 14:06:16', '2023-02-04 14:06:16'),
(3, 3, '20carat Gold rings', '700000', '040220231675524226.png', '1', '2023-02-04 10:23:46', '2023-02-04 14:06:18', '2023-02-04 14:06:18'),
(4, 4, 'Ok Earings', '1200', '040220231675525415.png', '1', '2023-02-04 10:43:35', '2023-02-04 14:06:15', '2023-02-04 14:06:15'),
(5, 2, 'Simple Bracelet', '28000', '040220231675538256.png', '1', '2023-02-04 14:17:36', '2023-02-04 14:18:30', '2023-02-04 14:18:30'),
(6, 2, 'Curve Braclet', '30000', '040220231675538292.png', '1', '2023-02-04 14:18:12', '2023-02-04 14:18:12', NULL),
(7, 2, 'Simple Bracelet', '25000', '270220231677495765.png', '1', '2023-02-04 14:18:59', '2023-02-27 06:02:45', NULL),
(8, 3, 'Ring-E5100', '12000', '270220231677495814.png', '1', '2023-02-04 14:20:20', '2023-02-27 06:03:34', NULL),
(9, 3, 'Ring-E7500', '25000', '270220231677493722.jpg', '1', '2023-02-04 14:21:12', '2023-02-27 05:28:42', NULL),
(10, 4, 'EARINGS-A7-45', '30000', '040220231675538519.png', '1', '2023-02-04 14:21:59', '2023-02-19 05:53:51', '2023-02-19 05:53:51'),
(11, 4, 'EARINGS-A7-50', '35000', '040220231675538543.png', '1', '2023-02-04 14:22:23', '2023-02-10 14:07:31', '2023-02-10 14:07:31'),
(12, 2, 'BRACELET-QE-01', '20000', '040220231675538726.png', '1', '2023-02-04 14:25:26', '2023-02-10 14:07:28', '2023-02-10 14:07:28'),
(13, 2, 'BRACELET-QE-09', '25000', '040220231675538774.png', '1', '2023-02-04 14:26:14', '2023-02-10 14:07:06', '2023-02-10 14:07:06'),
(14, 2, 'BRACELET-QE-06', '29000', '040220231675538833.png', '1', '2023-02-04 14:27:13', '2023-02-10 14:07:34', '2023-02-10 14:07:34'),
(15, 3, 'Ring-E7503', '50000', '040220231675538863.png', '1', '2023-02-04 14:27:43', '2023-02-19 05:53:48', '2023-02-19 05:53:48'),
(16, 3, 'Ring-E5101', '30000', '040220231675538885.png', '1', '2023-02-04 14:28:05', '2023-02-19 05:54:01', '2023-02-19 05:54:01'),
(17, 3, 'Ring-E7503', '10000', '040220231675538989.png', '1', '2023-02-04 14:29:49', '2023-02-19 05:53:53', '2023-02-19 05:53:53'),
(18, 4, 'EARINGS-A7-44', '25000', '270220231677494862.png', '1', '2023-02-04 14:30:21', '2023-02-27 05:47:43', NULL),
(19, 4, 'EARINGS-A7-55', '30000', '040220231675539037.png', '1', '2023-02-04 14:30:37', '2023-02-19 05:53:58', '2023-02-19 05:53:58'),
(20, 4, 'EARINGS-A7-49', '29999', '040220231675539055.png', '1', '2023-02-04 14:30:55', '2023-02-19 05:53:56', '2023-02-19 05:53:56'),
(21, 2, 'BRACELET-XY-01', '50000', '040220231675539106.png', '1', '2023-02-04 14:31:46', '2023-02-19 05:54:03', '2023-02-19 05:54:03'),
(22, 2, 'BRACELET-XY-02', '45000', '040220231675539123.png', '1', '2023-02-04 14:32:03', '2023-02-19 05:54:05', '2023-02-19 05:54:05'),
(23, 2, 'BRACELET-XY-03', '59999', '040220231675539151.png', '1', '2023-02-04 14:32:31', '2023-02-19 05:54:07', '2023-02-19 05:54:07'),
(24, 4, 'EARINGS-XY-01', '60000', '040220231675539186.png', '1', '2023-02-04 14:33:06', '2023-02-04 14:33:06', NULL),
(25, 4, 'EARINGS-XY-02', '69000', '040220231675539235.png', '1', '2023-02-04 14:33:55', '2023-02-04 14:33:55', NULL),
(26, 3, 'Ring-XY-01', '70000', '270220231677494792.png', '1', '2023-02-04 14:35:40', '2023-02-27 05:46:32', NULL),
(27, 4, 'EARINGS-XY-02', '99999', '040220231675539381.png', '1', '2023-02-04 14:36:21', '2023-02-19 05:54:10', '2023-02-19 05:54:10'),
(28, 3, 'Ring-E7503', '12000', '040220231675539418.png', '1', '2023-02-04 14:36:58', '2023-02-19 05:54:13', '2023-02-19 05:54:13'),
(29, 2, 'BRACELET-QE-09', '12000', '240220231677247602.png', '1', '2023-02-24 09:06:42', '2023-02-24 09:06:42', NULL),
(30, 3, 'Ring-E5105', '25000', '270220231677494646.png', '1', '2023-02-24 16:22:51', '2023-02-27 05:44:06', NULL),
(31, 2, 'BRACELET-XY-09', '10000', '270220231677495246.png', '1', '2023-02-27 05:49:19', '2023-02-27 05:54:06', NULL),
(32, 4, 'EARINGS-XY-20', '20000', '270220231677495061.png', '1', '2023-02-27 05:51:01', '2023-02-27 05:51:01', NULL),
(33, 4, 'EARINGS-A7-95', '14000', '270220231677495353.png', '1', '2023-02-27 05:51:53', '2023-02-27 05:55:53', NULL),
(34, 4, 'EARINGS-A7-52', '15000', '270220231677495192.png', '1', '2023-02-27 05:53:12', '2023-02-27 05:53:12', NULL),
(35, 2, 'BRACELET-XY-06', '19999', '270220231677496552.png', '1', '2023-02-27 05:59:27', '2023-02-27 06:15:52', NULL),
(36, 4, 'EARINGS-A7-54', '12000', '270220231677495631.png', '1', '2023-02-27 06:00:31', '2023-02-27 06:00:31', NULL),
(37, 4, 'EARINGS-XY-11', '10000', '270220231677495700.png', '1', '2023-02-27 06:01:40', '2023-02-27 06:01:40', NULL),
(38, 3, 'Ring-E7504', '30000', '270220231677535750.png', '1', '2023-02-27 17:09:10', '2023-02-27 17:09:10', NULL),
(39, 2, 'BRACELET-QE-07', '20000', '270220231677536603.png', '1', '2023-02-27 17:10:17', '2023-02-27 17:23:23', NULL),
(40, 4, 'EARINGS-A7-46', '10000', '270220231677536292.png', '1', '2023-02-27 17:18:12', '2023-02-27 17:18:12', NULL),
(41, 4, 'EARINGS-A7-47', '10000', '270220231677536381.png', '1', '2023-02-27 17:19:41', '2023-02-27 17:19:41', NULL),
(42, 2, 'BRACELET-QE-08', '12000', '270220231677536442.png', '1', '2023-02-27 17:20:42', '2023-02-27 17:20:42', NULL),
(43, 4, 'EARINGS-XY-04', '9000', '270220231677537949.png', '1', '2023-02-27 17:22:06', '2023-02-27 17:46:39', NULL),
(44, 2, 'BRACELET-QE-02', '80000', '270220231677536685.png', '1', '2023-02-27 17:24:45', '2023-02-27 17:24:45', NULL),
(45, 3, 'Ring-E5102', '30000', '270220231677536775.png', '1', '2023-02-27 17:26:15', '2023-02-27 17:26:15', NULL),
(46, 3, 'Ring-E7502', '29999', '270220231677536943.png', '1', '2023-02-27 17:29:03', '2023-02-27 17:29:03', NULL),
(47, 3, 'Ring-E7501', '20000', '270220231677537037.png', '1', '2023-02-27 17:30:37', '2023-02-27 17:30:37', NULL),
(48, 2, 'BRACELET-QE-03', '15000', '270220231677537054.png', '1', '2023-02-27 17:30:54', '2023-02-27 17:30:54', NULL),
(49, 2, 'BRACELET-QE-04', '340000', '270220231677537374.png', '1', '2023-02-27 17:36:14', '2023-02-27 17:36:14', NULL),
(50, 2, 'BRACELET-QE-06', '33333', '270220231677537418.png', '1', '2023-02-27 17:36:58', '2023-02-27 17:36:58', NULL),
(51, 2, 'BRACELET-QE-07', '39999', '270220231677537474.png', '1', '2023-02-27 17:37:54', '2023-02-27 17:37:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_bookings`
--

CREATE TABLE `product_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) NOT NULL,
  `paymet_status` varchar(255) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_bookings`
--

INSERT INTO `product_bookings` (`id`, `user_id`, `product_id`, `qty`, `paymet_status`, `booking_status`, `created_at`, `updated_at`) VALUES
(21, 1, 8, '1', '0', 0, '2023-02-19 22:05:21', '2023-03-02 04:55:37'),
(22, 1, 9, '1', '1', 1, '2023-02-19 22:08:54', '2023-03-02 04:55:49'),
(23, 1, 7, '1', '1', 1, '2023-02-19 22:31:19', '2023-02-25 05:33:18'),
(24, 1, 6, '1', '0', 1, '2023-02-19 22:32:05', '2023-02-25 05:33:19'),
(25, 1, 6, '3', '0', 1, '2023-02-19 23:18:36', '2023-02-25 05:33:21'),
(26, 1, 6, '2', '0', 0, '2023-02-25 13:21:57', '2023-02-25 13:21:57'),
(27, 1, 6, '2', '0', 0, '2023-02-26 12:37:12', '2023-02-26 12:37:12'),
(28, 1, 7, '1', '0', 0, '2023-02-27 20:16:11', '2023-02-27 20:16:11'),
(29, 1, 31, '2', '0', 0, '2023-02-27 20:16:43', '2023-02-27 20:16:43'),
(30, 1, 7, '1', '0', 0, '2023-02-27 20:27:49', '2023-02-27 20:27:49'),
(31, 1, 37, '1', '1', 0, '2023-02-27 20:27:52', '2023-02-27 15:29:53'),
(32, 1, 6, '1', '0', 0, '2023-02-27 20:59:26', '2023-02-27 20:59:26'),
(33, 1, 7, '2', '0', 0, '2023-02-27 20:59:26', '2023-02-27 20:59:26'),
(34, 1, 9, '2', '0', 0, '2023-02-27 20:59:26', '2023-02-27 20:59:26'),
(35, 1, 37, '1', '0', 0, '2023-02-27 20:59:26', '2023-02-27 20:59:26'),
(36, 1, 33, '2', '0', 0, '2023-02-27 20:59:26', '2023-02-27 20:59:26'),
(37, 1, 6, '1', '0', 0, '2023-02-27 23:00:13', '2023-02-27 23:00:13'),
(38, 1, 6, '1', '0', 0, '2023-03-05 11:38:59', '2023-03-05 11:38:59'),
(39, 1, 7, '1', '0', 0, '2023-03-05 11:40:25', '2023-03-05 11:40:25'),
(40, 1, 6, '1', '0', 0, '2023-03-05 11:46:40', '2023-03-05 11:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `total_items` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `title`, `total_items`, `description`, `created_at`, `updated_at`) VALUES
(2, 2, 'qer', '12', 'asdfc', '2023-02-04 09:51:33', '2023-02-04 09:51:33'),
(3, 3, 'Ruby Pearl Earings', '12', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 10:24:29', '2023-02-04 10:24:29'),
(4, 6, 'Curve Braclet', '10', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum. Okay Perfect', '2023-02-04 15:54:49', '2023-02-04 15:54:49'),
(5, 7, 'Simple Bracelet', '9', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.theek a', '2023-02-04 15:55:23', '2023-02-04 15:55:23'),
(6, 8, 'Ring-E5100', '99', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 15:55:48', '2023-02-04 15:55:48'),
(7, 9, 'Ring-E7500', '100', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 15:56:11', '2023-02-04 15:56:11'),
(8, 10, 'EARINGS-A7-45', '99', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 15:56:35', '2023-02-04 15:56:35'),
(9, 11, 'EARINGS-A7-50', '1', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 15:57:28', '2023-02-04 15:57:28'),
(10, 12, 'BRACELET-QE-01', '1200', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 15:57:48', '2023-02-04 15:57:48'),
(11, 13, 'BRACELET-QE-09', '12500', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-04 15:58:09', '2023-02-04 15:58:09'),
(12, 25, 'ok', '8', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum. Okay Perfect', '2023-02-25 08:25:12', '2023-02-25 08:25:12'),
(13, 18, 'EARINGS-A7-44', '16', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.\r\nthats it', '2023-02-27 05:38:15', '2023-02-27 05:38:15'),
(14, 24, 'EARINGS-XY-01', '19', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 05:39:18', '2023-02-27 05:39:18'),
(15, 26, 'Ring-XY-01', '23', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 05:39:42', '2023-02-27 05:39:42'),
(16, 29, 'BRACELET-QE-09', '90', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 05:40:04', '2023-02-27 05:40:04'),
(17, 30, 'Ring-E5105', '67', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 05:40:19', '2023-02-27 05:40:19'),
(18, 31, 'BRACELET-XY-09', '30', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:08:25', '2023-02-27 06:08:25'),
(19, 32, 'EARINGS-XY-20', '50', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:08:45', '2023-02-27 06:08:45'),
(20, 33, 'EARINGS-A7-95', '2', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:09:07', '2023-02-27 06:09:07'),
(21, 34, 'EARINGS-A7-52', '123', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:09:31', '2023-02-27 06:09:31'),
(22, 35, 'BRACELET-XY-06', '34', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:09:59', '2023-02-27 06:09:59'),
(23, 36, 'EARINGS-A7-54', '300', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:10:14', '2023-02-27 06:10:14'),
(24, 37, 'EARINGS-XY-11', '455', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 06:10:35', '2023-02-27 06:10:35'),
(25, 38, 'Ring-E7504', '11', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\ng', '2023-02-27 17:38:36', '2023-02-27 17:38:36'),
(26, 39, 'BRACELET-QE-07', '88', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:38:52', '2023-02-27 17:38:52'),
(27, 40, 'EARINGS-A7-46', '99', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:39:10', '2023-02-27 17:39:10'),
(28, 41, 'EARINGS-A7-47', '22', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:39:25', '2023-02-27 17:39:25'),
(29, 42, 'BRACELET-QE-08', '1', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:39:42', '2023-02-27 17:39:42'),
(30, 44, 'BRACELET-QE-02', '44', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:40:11', '2023-02-27 17:40:11'),
(31, 45, 'Ring-E5102', '55', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:40:28', '2023-02-27 17:40:28'),
(32, 46, 'Ring-E7502', '3', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:40:47', '2023-02-27 17:40:47'),
(33, 47, 'Ring-E7501', '1', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:41:52', '2023-02-27 17:41:52'),
(34, 48, 'BRACELET-QE-03', '1', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:42:38', '2023-02-27 17:42:38'),
(35, 49, 'BRACELET-QE-04', '55', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:43:04', '2023-02-27 17:43:04'),
(36, 50, 'BRACELET-QE-06', '44', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:43:52', '2023-02-27 17:43:52'),
(37, 51, 'BRACELET-QE-07', '88', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:44:12', '2023-02-27 17:44:12'),
(38, 43, 'BRACELET-QE-05', '33', 'Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.\r\n\r\nNam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec ut elit sodales, dignissim elit et, sollicitudin nulla.\r\nDonec at leo sed nisl vestibulum fermentum.', '2023-02-27 17:45:07', '2023-02-27 17:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamza Ahmed', 'hamza@gmail.com', NULL, '$2y$10$6d6gQVEFt2HVr8dQ1L0xzuCwyTnxiwy4X2Wm6QTaSDz.fdc0QtOPu', NULL, '2023-02-05 07:42:30', '2023-02-05 07:42:30'),
(2, 'saad khan', 'saad@gmail.com', NULL, '$2y$10$yx.2WEImZGQkLX.kEdQ60eBFhEImmHTItCj7uU9d5QUn8HvyTWMDy', NULL, '2023-02-11 06:37:39', '2023-02-11 06:37:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_bookings`
--
ALTER TABLE `product_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_bookings_user_id_foreign` (`user_id`),
  ADD KEY `product_bookings_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product_bookings`
--
ALTER TABLE `product_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_bookings`
--
ALTER TABLE `product_bookings`
  ADD CONSTRAINT `product_bookings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

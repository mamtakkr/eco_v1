-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 03:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `link_title`, `link_url`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SWEETS', 'SWEETS', 'Buy Now', '#', 'SF_03.jpg', 'active', NULL, NULL),
(2, 'ORGANIC JAGGERY SWEETS', 'ORGANIC JAGGERY SWEETS', 'Buy Now', '#', 'SF_022.jpg', 'active', NULL, NULL),
(3, 'NON-VEG PICKLE', 'NON-VEG PICKLE', 'Buy Now', '#', 'SF_041.jpg', 'active', NULL, NULL),
(4, 'SPICES', 'SPICES', 'Buy Now', '#', 'SF_059.jpg', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `author_name`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Jone Doe', 'SF_04.jpg', 'show', NULL, NULL),
(2, 'Where can I get some?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Saraha Smith', 'SF_021.jpg', 'show', NULL, NULL),
(3, 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Saraha Smith', 'SF_039.jpg', 'show', NULL, NULL),
(4, 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Jone Doe', 'SF_062.jpg', 'show', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `image_url`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'SWEETS', 'sweets', 'SF_06.jpg', 'active', 0, NULL, NULL),
(2, 'ORGANIC JAGGERY SWEETS', 'organic jaggery sweets', 'SF_024.jpg', 'active', 0, NULL, NULL),
(3, 'NON-VEG PICKLE', 'non-veg-pickle', 'SF_038.jpg', 'active', 0, NULL, NULL),
(4, 'SPICES', 'spices', 'SF_058.jpg', 'active', 0, NULL, NULL),
(5, 'VEG PICKLE', 'veg-pickle', 'SF_056.jpg', 'active', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `pro_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `quantity` int(11) DEFAULT NULL,
  `mode` enum('cart','wishlist') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `is_parent`, `parent_id`, `description`, `image_url1`, `image_url2`, `image_url3`, `image_url4`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'SWEETS', 'sweets', 1, NULL, NULL, 'SF_023.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(2, 'ORGANIC JAGGERY SWEETS', 'organic jaggery sweets', 1, NULL, NULL, 'SF_024.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(3, 'HOT', 'hot', 1, NULL, NULL, 'SF_035.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(4, 'NON-VEG PICKLE', 'non-veg-pickle', 1, NULL, NULL, 'SF_043.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(5, 'VEG PICKLE', 'veg-pickle', 1, NULL, NULL, 'SF_058.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(6, 'SPICES', 'spices', 1, NULL, NULL, 'SF_078.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(7, 'MILLET SAVOURIES', 'millet savouries', 1, NULL, NULL, 'SF_089.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL),
(8, 'DAIRY PRODUCTS', 'dairy-products', 1, NULL, NULL, 'SF_091.jpg', NULL, NULL, NULL, 'active', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `coupon_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_limit` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `visibility_status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deal_of_days`
--

CREATE TABLE `deal_of_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deal_of_days`
--

INSERT INTO `deal_of_days` (`id`, `pro_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 2, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:16:54'),
(2, 7, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:16:55'),
(3, 11, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:16:56');

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
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `pro_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 67, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:17:43'),
(2, 173, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:17:45'),
(3, 7, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:17:46'),
(4, 237, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `title`, `meta_description`, `meta_keywords`, `logo`, `favicon`, `address`, `email`, `phone`, `fax`, `footer`, `footer_url`, `facebook_url`, `twitter_url`, `linkedin_url`, `pinterest_url`, `youtube_url`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Sweets Online Shopping', 'Sweets Online Shopping', 'Sweets, Online Shopping, Sweets Website', 'logo.png', '', 'address', 'test@test.com', '5264598756', '(888) 123-4567', 'Sweets Online Websie', 'https:://www.xyz.com', '', '', '', '', '', 1, NULL, NULL);

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
(321, '2014_10_12_000000_create_users_table', 1),
(322, '2014_10_12_100000_create_password_resets_table', 1),
(323, '2019_08_19_000000_create_failed_jobs_table', 1),
(324, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(325, '2021_09_03_070534_create_categories_table', 1),
(326, '2021_09_10_103440_create_shipping_addresses_table', 1),
(327, '2021_09_10_104849_create_states_table', 1),
(328, '2021_09_16_132216_create_coupons_table', 1),
(329, '2021_09_20_083044_create_banners_table', 1),
(330, '2021_09_20_105542_create_blogs_table', 1),
(331, '2021_09_20_115139_create_sliders_table', 1),
(332, '2021_09_22_060027_create_general_settings_table', 1),
(333, '2021_09_25_054531_create_brands_table', 1),
(334, '2021_09_25_082857_create_products_table', 1),
(335, '2021_09_25_083710_create_carts_table', 1),
(336, '2021_09_25_083759_create_orders_table', 1),
(337, '2021_09_25_083859_create_order_items_table', 1),
(338, '2021_09_29_120509_create_deal_of_days_table', 1),
(339, '2021_10_04_043606_create_featured_products_table', 1),
(340, '2021_10_04_051641_create_popular_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `address_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `tracking_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_msg` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` double(8,2) DEFAULT NULL,
  `payment_status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` enum('pending','commpleted','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `cancel_reason` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify` tinyint(4) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `pro_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `tax_amount` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `popular_products`
--

CREATE TABLE `popular_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_products`
--

INSERT INTO `popular_products` (`id`, `pro_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:18:25'),
(2, 12, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:18:27'),
(3, 13, 'active', 0, '2022-01-30 18:30:00', '2022-01-31 08:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `vendor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sale_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double(8,2) DEFAULT 0.00,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `short_description`, `description`, `cat_id`, `vendor_id`, `price`, `sale_price`, `quantity`, `code`, `discount`, `status`, `image_url1`, `image_url2`, `image_url3`, `image_url4`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'KAJU MITHAI-250gm', '1643636209--kaju-mithai-250gm', NULL, NULL, 1, NULL, '325', '325', NULL, 'SF_01', 0.00, 'show', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(2, 'DRY FRUIT LADDU-250gm', '1643636209--dry-fruit-laddu-250gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_02', 0.00, 'show', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(3, 'SOAN PAPDI-250gm', '1643636209--soan-papdi-250gm', NULL, NULL, 1, NULL, '175', '175', NULL, 'SF_03', 0.00, 'show', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(4, 'POOTHAREKULU DRY FRUIT-250gm', '1643636209--pootharekulu-dry-fruit-250gm', NULL, NULL, 1, NULL, '350', '350', NULL, 'SF_04', 0.00, 'show', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(5, 'POOTHAREKULU BELLAM-250gm', '1643636209--pootharekulu-bellam-250gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_05', 0.00, 'show', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(6, 'POOTHAREKULU PLAIN-250gm', '1643636209--pootharekulu-plain-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_06', 0.00, 'show', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(7, 'GAVVALU BELLAM-250gm', '1643636209--gavvalu-bellam-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_07', 0.00, 'show', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(8, 'PALA KOVA-250gm', '1643636209--pala-kova-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_08', 0.00, 'show', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(9, 'KOVA KAJJIKAYA-250gm', '1643636209--kova-kajjikaya-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_09', 0.00, 'show', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(10, 'MALPURI KOVA-250gm', '1643636209--malpuri-kova-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_010', 0.00, 'show', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(11, 'KALAKAND-250gm', '1643636209--kalakand-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_011', 0.00, 'show', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(12, 'KAJU KATHLI-250gm', '1643636209--kaju-kathli-250gm', NULL, NULL, 1, NULL, '325', '325', NULL, 'SF_012', 0.00, 'show', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(13, 'ARISELU-250gm', '1643636209--ariselu-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_013', 0.00, 'show', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(14, 'KAJJIKAYALU-250gm', '1643636209--kajjikayalu-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_014', 0.00, 'show', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(15, 'MYSORE PAK-250gm', '1643636209--mysore-pak-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_015', 0.00, 'show', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(16, 'MINAPA SUNNUNDALU-250gm', '1643636209--minapa-sunnundalu-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_016', 0.00, 'show', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(17, 'MADATHA KAJA-250gm', '1643636209--madatha-kaja-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_017', 0.00, 'show', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(18, 'KAKINADA KAJA-250gm', '1643636209--kakinada-kaja-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_018', 0.00, 'show', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(19, 'CHALIMIDI WITH SUGAR-250gm', '1643636209--chalimidi-with-sugar-250gm', NULL, NULL, 1, NULL, '100', '100', NULL, 'SF_019', 0.00, 'show', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(20, 'BELLAM MITHAI-250gm', '1643636209--bellam-mithai-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_020', 0.00, 'show', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(21, 'MILK MYSORE PAK-250gm', '1643636209--milk-mysore-pak-250gm', NULL, NULL, 1, NULL, '175', '175', NULL, 'SF_021', 0.00, 'show', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(22, 'BANDARU HALWA-250gm', '1643636209--bandaru-halwa-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_022', 0.00, 'show', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(23, 'Motichoor Laddu-250gm', '1643636209--motichoor-laddu-250gm', NULL, NULL, 1, NULL, '225', '225', NULL, 'SF_023', 0.00, 'show', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(24, 'KAJU JAGGERY-250gm', '1643636209--kaju-jaggery-250gm', NULL, NULL, 2, NULL, '325', '325', NULL, 'SF_024', 0.00, 'show', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(25, 'RAGI LADDU-250gm', '1643636209--ragi-laddu-250gm', NULL, NULL, 2, NULL, '175', '175', NULL, 'SF_025', 0.00, 'show', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(26, 'KORRA LADDU-250gm', '1643636209--korra-laddu-250gm', NULL, NULL, 2, NULL, '175', '175', NULL, 'SF_026', 0.00, 'show', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(27, 'NUVVULA BELLAM LADDU-250gm', '1643636209--nuvvula-bellam-laddu-250gm', NULL, NULL, 2, NULL, '175', '175', NULL, 'SF_027', 0.00, 'show', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(28, 'JONNA BELLAM GAVVALU-250gm', '1643636209--jonna-bellam-gavvalu-250gm', NULL, NULL, 2, NULL, '150', '150', NULL, 'SF_028', 0.00, 'show', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(29, 'BELLAM PALKOVA-250gm', '1643636209--bellam-palkova-250gm', NULL, NULL, 2, NULL, '200', '200', NULL, 'SF_029', 0.00, 'show', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(30, 'ARIKALA ARISALU-250gm', '1643636209--arikala-arisalu-250gm', NULL, NULL, 2, NULL, '200', '200', NULL, 'SF_030', 0.00, 'show', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(31, 'RAGI JAGGERY HALWA-250gm', '1643636209--ragi-jaggery-halwa-250gm', NULL, NULL, 2, NULL, '200', '200', NULL, 'SF_031', 0.00, 'show', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(32, 'KOBBARI BOORELU-250gm', '1643636209--kobbari-boorelu-250gm', NULL, NULL, 2, NULL, '150', '150', NULL, 'SF_032', 0.00, 'show', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(33, 'RASAGULLA - RAW SUGAR-250gm', '1643636209--rasagulla-raw-sugar-250gm', NULL, NULL, 2, NULL, '225', '225', NULL, 'SF_033', 0.00, 'show', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(34, 'SALT SAKINALU-250gm', '1643636209--salt-sakinalu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_034', 0.00, 'show', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(35, 'SANNAKARAPUSA-250gm', '1643636209--sannakarapusa-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_035', 0.00, 'show', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(36, 'KARA BOONDI-250gm', '1643636209--kara-boondi-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_036', 0.00, 'show', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(37, 'MURUKULU-250gm', '1643636209--murukulu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_037', 0.00, 'show', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(38, 'RIBBON PAKODI-250gm', '1643636209--ribbon-pakodi-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_038', 0.00, 'show', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(39, 'CHALLA CHAKRALU-250gm', '1643636209--challa-chakralu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_039', 0.00, 'show', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(40, 'CHEKODEELU-250gm', '1643636209--chekodeelu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_040', 0.00, 'show', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(41, 'CHEKKALU-250gm', '1643636209--chekkalu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_041', 0.00, 'show', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(42, 'JONNA CHEKKALU-250gm', '1643636209--jonna-chekkalu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_042', 0.00, 'show', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(43, 'PRAWN PICKLE-250gm', '1643636209--prawn-pickle-250gm', NULL, NULL, 4, NULL, '400', '400', NULL, 'SF_043', 0.00, 'show', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(44, 'GONGURA CHICKEN PICKLE-250gm', '1643636209--gongura-chicken-pickle-250gm', NULL, NULL, 4, NULL, '325', '325', NULL, 'SF_044', 0.00, 'show', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(45, 'CHICKEN PICKLE WITH BONE-250gm', '1643636209--chicken-pickle-with-bone-250gm', NULL, NULL, 4, NULL, '275', '275', NULL, 'SF_045', 0.00, 'show', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(46, 'CHICKEN PICKLE BONELESS-250gm', '1643636209--chicken-pickle-boneless-250gm', NULL, NULL, 4, NULL, '325', '325', NULL, 'SF_046', 0.00, 'show', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(47, 'MUTTON PICKLE BONELESS-250gm', '1643636209--mutton-pickle-boneless-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_047', 0.00, 'show', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(48, 'MUTTON KEEMA PICKLE-250gm', '1643636209--mutton-keema-pickle-250gm', NULL, NULL, 4, NULL, '450', '450', NULL, 'SF_048', 0.00, 'show', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(49, 'KORAMENU FISH PICKLE-250gm', '1643636209--koramenu-fish-pickle-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_049', 0.00, 'show', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(50, 'CHERUVU FISH PICKLE-250gm', '1643636209--cheruvu-fish-pickle-250gm', NULL, NULL, 4, NULL, '325', '325', NULL, 'SF_050', 0.00, 'show', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(51, 'GONGURA PRAWNS PICKLE-250gm', '1643636209--gongura-prawns-pickle-250gm', NULL, NULL, 4, NULL, '450', '450', NULL, 'SF_051', 0.00, 'show', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(52, 'SEA BASS FISH PICKLE ( PANDU KAPPA)-250gm', '1643636209--sea-bass-fish-pickle-pandu-kappa-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_052', 0.00, 'show', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(53, 'GONGURA MUTTON PICKLE-250gm', '1643636209--gongura-mutton-pickle-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_053', 0.00, 'show', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(54, 'PESARA AVAKAYA-250gm', '1643636209--pesara-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_054', 0.00, 'show', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(55, 'USIRI AVAKAYA-250gm', '1643636209--usiri-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_055', 0.00, 'show', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(56, 'MAAGAYA-250gm', '1643636209--maagaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_056', 0.00, 'show', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(57, 'CHINTAKAYA PACHADI-250gm', '1643636209--chintakaya-pachadi-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_057', 0.00, 'show', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(58, 'GONGURA-250gm', '1643636209--gongura-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_058', 0.00, 'show', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(59, 'TAMOTO PICKLE-250gm', '1643636209--tamoto-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_059', 0.00, 'show', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(60, 'DABBAKAYA PACHADI-250gm', '1643636209--dabbakaya-pachadi-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_060', 0.00, 'show', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(61, 'LEMON PICKLE-250gm', '1643636209--lemon-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_061', 0.00, 'show', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(62, 'ALLAM PACHADI-250gm', '1643636209--allam-pachadi-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_062', 0.00, 'show', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(63, 'DONDAKAYA AVAKAYA-250gm', '1643636209--dondakaya-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_063', 0.00, 'show', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(64, 'MUNAGA AVAKAYA-250gm', '1643636209--munaga-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_064', 0.00, 'show', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(65, 'KAKARAKAYA AVAKAYA-250gm', '1643636209--kakarakaya-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_065', 0.00, 'show', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(66, 'MIXED AAVAKAYA-250gm', '1643636209--mixed-aavakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_066', 0.00, 'show', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(67, 'CORIANDER PICKLE-250gm', '1643636209--coriander-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_067', 0.00, 'show', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(68, 'RED CHILLY PICKLE-250gm', '1643636209--red-chilly-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_068', 0.00, 'show', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(69, 'GREEN CHILLY PICKLE-250gm', '1643636209--green-chilly-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_069', 0.00, 'show', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(70, 'AAVAKAYA - MANGO-250gm', '1643636209--aavakaya-mango-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_070', 0.00, 'show', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(71, 'KANDI PODI-250gm', '1643636209--kandi-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_071', 0.00, 'show', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(72, 'PESARA PODI-250gm', '1643636209--pesara-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_072', 0.00, 'show', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(73, 'PALLI PODI-250gm', '1643636209--palli-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_073', 0.00, 'show', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(74, 'NUVVULA PODI-250gm', '1643636209--nuvvula-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_074', 0.00, 'show', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(75, 'TELAGA PINDI-250gm', '1643636209--telaga-pindi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_075', 0.00, 'show', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(76, 'KOBBARI KAARAM-250gm', '1643636209--kobbari-kaaram-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_076', 0.00, 'show', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(77, 'CURRI LEAF POWDER-250gm', '1643636209--curri-leaf-powder-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_077', 0.00, 'show', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(78, 'AVISA KAARAPPODI-250gm', '1643636209--avisa-kaarappodi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_078', 0.00, 'show', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(79, 'PUTNALA PODI-250gm', '1643636209--putnala-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_079', 0.00, 'show', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(80, 'IDLY KAARAM-250gm', '1643636209--idly-kaaram-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_080', 0.00, 'show', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(81, 'SAMBAR PODI-250gm', '1643636209--sambar-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_081', 0.00, 'show', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(82, 'RASAM PODI-250gm', '1643636209--rasam-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_082', 0.00, 'show', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(83, 'KURA KAARAM-250gm', '1643636209--kura-kaaram-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_083', 0.00, 'show', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(84, 'VEPAPODI-250gm', '1643636209--vepapodi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_084', 0.00, 'show', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(85, 'KAKARAKAYA KARAM PODI-250gm', '1643636209--kakarakaya-karam-podi-250gm', NULL, NULL, 6, NULL, '150', '150', NULL, 'SF_085', 0.00, 'show', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(86, 'PULIHORA PASTE-250gm', '1643636209--pulihora-paste-250gm', NULL, NULL, 6, NULL, '200', '200', NULL, 'SF_086', 0.00, 'show', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(87, 'TAMARIND PASTE-250gm', '1643636209--tamarind-paste-250gm', NULL, NULL, 6, NULL, '200', '200', NULL, 'SF_087', 0.00, 'show', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(88, 'RAGI PINDI VADIYALU-250gm', '1643636209--ragi-pindi-vadiyalu-250gm', NULL, NULL, 6, NULL, '150', '150', NULL, 'SF_088', 0.00, 'show', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(89, 'ULAVACHARU-250gm', '1643636209--ulavacharu-250gm', NULL, NULL, 7, NULL, '175', '175', NULL, 'SF_090', 0.00, 'show', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(90, 'GHEE-250gm', '1643636209--ghee-250gm', NULL, NULL, 8, NULL, '175', '175', NULL, 'SF_091', 0.00, 'show', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(91, 'KAJU MITHAI-500gm', '1643636209--kaju-mithai-500gm', NULL, NULL, 1, NULL, '650', '650', NULL, 'SF_01', 0.00, 'show', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(92, 'DRY FRUIT LADDU-500gm', '1643636209--dry-fruit-laddu-500gm', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_02', 0.00, 'show', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(93, 'SOAN PAPDI-500gm', '1643636209--soan-papdi-500gm', NULL, NULL, 1, NULL, '325', '325', NULL, 'SF_03', 0.00, 'show', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(94, 'POOTHAREKULU DRY FRUIT-500gm', '1643636209--pootharekulu-dry-fruit-500gm', NULL, NULL, 1, NULL, '700', '700', NULL, 'SF_04', 0.00, 'show', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(95, 'POOTHAREKULU BELLAM-500gm', '1643636209--pootharekulu-bellam-500gm', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_05', 0.00, 'show', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(96, 'POOTHAREKULU PLAIN-500gm', '1643636209--pootharekulu-plain-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_06', 0.00, 'show', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(97, 'GAVVALU BELLAM-500gm', '1643636209--gavvalu-bellam-500gm', NULL, NULL, 1, NULL, '275', '275', NULL, 'SF_07', 0.00, 'show', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(98, 'PALA KOVA-500gm', '1643636209--pala-kova-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_08', 0.00, 'show', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(99, 'KOVA KAJJIKAYA-500gm', '1643636209--kova-kajjikaya-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_09', 0.00, 'show', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(100, 'MALPURI KOVA-500gm', '1643636209--malpuri-kova-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_010', 0.00, 'show', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(101, 'KALAKAND-500gm', '1643636209--kalakand-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_011', 0.00, 'show', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(102, 'KAJU KATHLI-500gm', '1643636209--kaju-kathli-500gm', NULL, NULL, 1, NULL, '625', '625', NULL, 'SF_012', 0.00, 'show', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(103, 'ARISELU-500gm', '1643636209--ariselu-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_013', 0.00, 'show', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(104, 'KAJJIKAYALU-500gm', '1643636209--kajjikayalu-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_014', 0.00, 'show', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(105, 'MYSORE PAK-500gm', '1643636209--mysore-pak-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_015', 0.00, 'show', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(106, 'MINAPA SUNNUNDALU-500gm', '1643636209--minapa-sunnundalu-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_016', 0.00, 'show', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(107, 'MADATHA KAJA-500gm', '1643636209--madatha-kaja-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_017', 0.00, 'show', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(108, 'KAKINADA KAJA-500gm', '1643636209--kakinada-kaja-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_018', 0.00, 'show', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(109, 'CHALIMIDI WITH SUGAR-500gm', '1643636209--chalimidi-with-sugar-500gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_019', 0.00, 'show', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(110, 'BELLAM MITHAI-500gm', '1643636209--bellam-mithai-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_020', 0.00, 'show', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(111, 'MILK MYSORE PAK-500gm', '1643636209--milk-mysore-pak-500gm', NULL, NULL, 1, NULL, '350', '350', NULL, 'SF_021', 0.00, 'show', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(112, 'BANDARU HALWA-500gm', '1643636209--bandaru-halwa-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_022', 0.00, 'show', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(113, 'Motichoor Laddu-500gm', '1643636209--motichoor-laddu-500gm', NULL, NULL, 1, NULL, '450', '450', NULL, 'SF_023', 0.00, 'show', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(114, 'KAJU JAGGERY-500gm', '1643636209--kaju-jaggery-500gm', NULL, NULL, 2, NULL, '650', '650', NULL, 'SF_024', 0.00, 'show', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(115, 'RAGI LADDU-500gm', '1643636209--ragi-laddu-500gm', NULL, NULL, 2, NULL, '350', '350', NULL, 'SF_025', 0.00, 'show', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(116, 'KORRA LADDU-500gm', '1643636209--korra-laddu-500gm', NULL, NULL, 2, NULL, '350', '350', NULL, 'SF_026', 0.00, 'show', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(117, 'NUVVULA BELLAM LADDU-500gm', '1643636209--nuvvula-bellam-laddu-500gm', NULL, NULL, 2, NULL, '350', '350', NULL, 'SF_027', 0.00, 'show', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(118, 'JONNA BELLAM GAVVALU-500gm', '1643636209--jonna-bellam-gavvalu-500gm', NULL, NULL, 2, NULL, '300', '300', NULL, 'SF_028', 0.00, 'show', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(119, 'BELLAM PALKOVA-500gm', '1643636209--bellam-palkova-500gm', NULL, NULL, 2, NULL, '400', '400', NULL, 'SF_029', 0.00, 'show', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(120, 'ARIKALA ARISALU-500gm', '1643636209--arikala-arisalu-500gm', NULL, NULL, 2, NULL, '400', '400', NULL, 'SF_030', 0.00, 'show', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(121, 'RAGI JAGGERY HALWA-500gm', '1643636209--ragi-jaggery-halwa-500gm', NULL, NULL, 2, NULL, '400', '400', NULL, 'SF_031', 0.00, 'show', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(122, 'KOBBARI BOORELU-500gm', '1643636209--kobbari-boorelu-500gm', NULL, NULL, 2, NULL, '300', '300', NULL, 'SF_032', 0.00, 'show', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(123, 'RASAGULLA - RAW SUGAR-500gm', '1643636209--rasagulla-raw-sugar-500gm', NULL, NULL, 2, NULL, '450', '450', NULL, 'SF_033', 0.00, 'show', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(124, 'SALT SAKINALU-500gm', '1643636209--salt-sakinalu-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_034', 0.00, 'show', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(125, 'SANNAKARAPUSA-500gm', '1643636209--sannakarapusa-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_035', 0.00, 'show', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(126, 'KARA BOONDI-500gm', '1643636209--kara-boondi-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_036', 0.00, 'show', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(127, 'MURUKULU-500gm', '1643636209--murukulu-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_037', 0.00, 'show', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(128, 'RIBBON PAKODI-500gm', '1643636209--ribbon-pakodi-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_038', 0.00, 'show', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(129, 'CHALLA CHAKRALU-500gm', '1643636209--challa-chakralu-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_039', 0.00, 'show', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(130, 'CHEKODEELU-500gm', '1643636209--chekodeelu-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_040', 0.00, 'show', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(131, 'CHEKKALU-500gm', '1643636209--chekkalu-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_041', 0.00, 'show', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(132, 'JONNA CHEKKALU-500gm', '1643636209--jonna-chekkalu-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_042', 0.00, 'show', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(133, 'PRAWN PICKLE-500gm', '1643636209--prawn-pickle-500gm', NULL, NULL, 4, NULL, '800', '800', NULL, 'SF_043', 0.00, 'show', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(134, 'GONGURA CHICKEN PICKLE-500gm', '1643636209--gongura-chicken-pickle-500gm', NULL, NULL, 4, NULL, '650', '650', NULL, 'SF_044', 0.00, 'show', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(135, 'CHICKEN PICKLE WITH BONE-500gm', '1643636209--chicken-pickle-with-bone-500gm', NULL, NULL, 4, NULL, '550', '550', NULL, 'SF_045', 0.00, 'show', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(136, 'CHICKEN PICKLE BONELESS-500gm', '1643636209--chicken-pickle-boneless-500gm', NULL, NULL, 4, NULL, '650', '650', NULL, 'SF_046', 0.00, 'show', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(137, 'MUTTON PICKLE BONELESS-500gm', '1643636209--mutton-pickle-boneless-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_047', 0.00, 'show', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(138, 'MUTTON KEEMA PICKLE-500gm', '1643636209--mutton-keema-pickle-500gm', NULL, NULL, 4, NULL, '900', '900', NULL, 'SF_048', 0.00, 'show', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(139, 'KORAMENU FISH PICKLE-500gm', '1643636209--koramenu-fish-pickle-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_049', 0.00, 'show', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(140, 'CHERUVU FISH PICKLE-500gm', '1643636209--cheruvu-fish-pickle-500gm', NULL, NULL, 4, NULL, '650', '650', NULL, 'SF_050', 0.00, 'show', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(141, 'GONGURA PRAWNS PICKLE-500gm', '1643636209--gongura-prawns-pickle-500gm', NULL, NULL, 4, NULL, '900', '900', NULL, 'SF_051', 0.00, 'show', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(142, 'SEA BASS FISH PICKLE ( PANDU KAPPA)-500gm', '1643636209--sea-bass-fish-pickle-pandu-kappa-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_052', 0.00, 'show', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(143, 'GONGURA MUTTON PICKLE-500gm', '1643636209--gongura-mutton-pickle-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_053', 0.00, 'show', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(144, 'PESARA AVAKAYA-500gm', '1643636209--pesara-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_054', 0.00, 'show', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(145, 'USIRI AVAKAYA-500gm', '1643636209--usiri-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_055', 0.00, 'show', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(146, 'MAAGAYA-500gm', '1643636209--maagaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_056', 0.00, 'show', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(147, 'CHINTAKAYA PACHADI-500gm', '1643636209--chintakaya-pachadi-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_057', 0.00, 'show', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(148, 'GONGURA-500gm', '1643636209--gongura-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_058', 0.00, 'show', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(149, 'TAMOTO PICKLE-500gm', '1643636209--tamoto-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_059', 0.00, 'show', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(150, 'DABBAKAYA PACHADI-500gm', '1643636209--dabbakaya-pachadi-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_060', 0.00, 'show', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(151, 'LEMON PICKLE-500gm', '1643636209--lemon-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_061', 0.00, 'show', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(152, 'ALLAM PACHADI-500gm', '1643636209--allam-pachadi-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_062', 0.00, 'show', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(153, 'DONDAKAYA AVAKAYA-500gm', '1643636209--dondakaya-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_063', 0.00, 'show', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(154, 'MUNAGA AVAKAYA-500gm', '1643636209--munaga-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_064', 0.00, 'show', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(155, 'KAKARAKAYA AVAKAYA-500gm', '1643636209--kakarakaya-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_065', 0.00, 'show', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(156, 'MIXED AAVAKAYA-500gm', '1643636209--mixed-aavakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_066', 0.00, 'show', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(157, 'CORIANDER PICKLE-500gm', '1643636209--coriander-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_067', 0.00, 'show', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(158, 'RED CHILLY PICKLE-500gm', '1643636209--red-chilly-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_068', 0.00, 'show', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(159, 'GREEN CHILLY PICKLE-500gm', '1643636209--green-chilly-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_069', 0.00, 'show', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(160, 'AAVAKAYA - MANGO-500gm', '1643636209--aavakaya-mango-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_070', 0.00, 'show', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(161, 'KANDI PODI-500gm', '1643636209--kandi-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_071', 0.00, 'show', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(162, 'PESARA PODI-500gm', '1643636209--pesara-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_072', 0.00, 'show', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(163, 'PALLI PODI-500gm', '1643636209--palli-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_073', 0.00, 'show', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(164, 'NUVVULA PODI-500gm', '1643636209--nuvvula-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_074', 0.00, 'show', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(165, 'TELAGA PINDI-500gm', '1643636209--telaga-pindi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_075', 0.00, 'show', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(166, 'KOBBARI KAARAM-500gm', '1643636209--kobbari-kaaram-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_076', 0.00, 'show', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(167, 'CURRI LEAF POWDER-500gm', '1643636209--curri-leaf-powder-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_077', 0.00, 'show', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(168, 'AVISA KAARAPPODI-500gm', '1643636209--avisa-kaarappodi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_078', 0.00, 'show', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(169, 'PUTNALA PODI-500gm', '1643636209--putnala-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_079', 0.00, 'show', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(170, 'IDLY KAARAM-500gm', '1643636209--idly-kaaram-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_080', 0.00, 'show', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(171, 'SAMBAR PODI-500gm', '1643636209--sambar-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_081', 0.00, 'show', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(172, 'RASAM PODI-500gm', '1643636209--rasam-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_082', 0.00, 'show', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(173, 'KURA KAARAM-500gm', '1643636209--kura-kaaram-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_083', 0.00, 'show', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(174, 'VEPAPODI-500gm', '1643636209--vepapodi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_084', 0.00, 'show', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(175, 'KAKARAKAYA KARAM PODI-500gm', '1643636209--kakarakaya-karam-podi-500gm', NULL, NULL, 6, NULL, '275', '275', NULL, 'SF_085', 0.00, 'show', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(176, 'PULIHORA PASTE-500gm', '1643636209--pulihora-paste-500gm', NULL, NULL, 6, NULL, '400', '400', NULL, 'SF_086', 0.00, 'show', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(177, 'TAMARIND PASTE-500gm', '1643636209--tamarind-paste-500gm', NULL, NULL, 6, NULL, '400', '400', NULL, 'SF_087', 0.00, 'show', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(178, 'RAGI PINDI VADIYALU-500gm', '1643636209--ragi-pindi-vadiyalu-500gm', NULL, NULL, 6, NULL, '300', '300', NULL, 'SF_088', 0.00, 'show', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(179, 'ULAVACHARU-500gm', '1643636209--ulavacharu-500gm', NULL, NULL, 7, NULL, '350', '350', NULL, 'SF_090', 0.00, 'show', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(180, 'GHEE-500gm', '1643636209--ghee-500gm', NULL, NULL, 8, NULL, '350', '350', NULL, 'SF_091', 0.00, 'show', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(181, 'KAJU MITHAI-1kg', '1643636209--kaju-mithai-1kg', NULL, NULL, 1, NULL, '1300', '1300', NULL, 'SF_01', 0.00, 'show', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(182, 'DRY FRUIT LADDU-1kg', '1643636209--dry-fruit-laddu-1kg', NULL, NULL, 1, NULL, '1200', '1200', NULL, 'SF_02', 0.00, 'show', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(183, 'SOAN PAPDI-1kg', '1643636209--soan-papdi-1kg', NULL, NULL, 1, NULL, '650', '650', NULL, 'SF_03', 0.00, 'show', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(184, 'POOTHAREKULU DRY FRUIT-1kg', '1643636209--pootharekulu-dry-fruit-1kg', NULL, NULL, 1, NULL, '1400', '1400', NULL, 'SF_04', 0.00, 'show', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(185, 'POOTHAREKULU BELLAM-1kg', '1643636209--pootharekulu-bellam-1kg', NULL, NULL, 1, NULL, '1200', '1200', NULL, 'SF_05', 0.00, 'show', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(186, 'POOTHAREKULU PLAIN-1kg', '1643636209--pootharekulu-plain-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_06', 0.00, 'show', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(187, 'GAVVALU BELLAM-1kg', '1643636209--gavvalu-bellam-1kg', NULL, NULL, 1, NULL, '550', '550', NULL, 'SF_07', 0.00, 'show', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(188, 'PALA KOVA-1kg', '1643636210--pala-kova-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_08', 0.00, 'show', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(189, 'KOVA KAJJIKAYA-1kg', '1643636210--kova-kajjikaya-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_09', 0.00, 'show', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(190, 'MALPURI KOVA-1kg', '1643636210--malpuri-kova-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_010', 0.00, 'show', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(191, 'KALAKAND-1kg', '1643636210--kalakand-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_011', 0.00, 'show', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(192, 'KAJU KATHLI-1kg', '1643636210--kaju-kathli-1kg', NULL, NULL, 1, NULL, '1250', '1250', NULL, 'SF_012', 0.00, 'show', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(193, 'ARISELU-1kg', '1643636210--ariselu-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_013', 0.00, 'show', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(194, 'KAJJIKAYALU-1kg', '1643636210--kajjikayalu-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_014', 0.00, 'show', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(195, 'MYSORE PAK-1kg', '1643636210--mysore-pak-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_015', 0.00, 'show', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(196, 'MINAPA SUNNUNDALU-1kg', '1643636210--minapa-sunnundalu-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_016', 0.00, 'show', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(197, 'MADATHA KAJA-1kg', '1643636210--madatha-kaja-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_017', 0.00, 'show', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(198, 'KAKINADA KAJA-1kg', '1643636210--kakinada-kaja-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_018', 0.00, 'show', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(199, 'CHALIMIDI WITH SUGAR-1kg', '1643636210--chalimidi-with-sugar-1kg', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_019', 0.00, 'show', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(200, 'BELLAM MITHAI-1kg', '1643636210--bellam-mithai-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_020', 0.00, 'show', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(201, 'MILK MYSORE PAK-1kg', '1643636210--milk-mysore-pak-1kg', NULL, NULL, 1, NULL, '700', '700', NULL, 'SF_021', 0.00, 'show', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(202, 'BANDARU HALWA-1kg', '1643636210--bandaru-halwa-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_022', 0.00, 'show', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(203, 'Motichoor Laddu-1kg', '1643636210--motichoor-laddu-1kg', NULL, NULL, 1, NULL, '900', '900', NULL, 'SF_023', 0.00, 'show', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(204, 'KAJU JAGGERY-1kg', '1643636210--kaju-jaggery-1kg', NULL, NULL, 2, NULL, '1300', '1300', NULL, 'SF_024', 0.00, 'show', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(205, 'RAGI LADDU-1kg', '1643636210--ragi-laddu-1kg', NULL, NULL, 2, NULL, '700', '700', NULL, 'SF_025', 0.00, 'show', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(206, 'KORRA LADDU-1kg', '1643636210--korra-laddu-1kg', NULL, NULL, 2, NULL, '700', '700', NULL, 'SF_026', 0.00, 'show', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(207, 'NUVVULA BELLAM LADDU-1kg', '1643636210--nuvvula-bellam-laddu-1kg', NULL, NULL, 2, NULL, '700', '700', NULL, 'SF_027', 0.00, 'show', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(208, 'JONNA BELLAM GAVVALU-1kg', '1643636210--jonna-bellam-gavvalu-1kg', NULL, NULL, 2, NULL, '600', '600', NULL, 'SF_028', 0.00, 'show', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(209, 'BELLAM PALKOVA-1kg', '1643636210--bellam-palkova-1kg', NULL, NULL, 2, NULL, '800', '800', NULL, 'SF_029', 0.00, 'show', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(210, 'ARIKALA ARISALU-1kg', '1643636210--arikala-arisalu-1kg', NULL, NULL, 2, NULL, '800', '800', NULL, 'SF_030', 0.00, 'show', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(211, 'RAGI JAGGERY HALWA-1kg', '1643636210--ragi-jaggery-halwa-1kg', NULL, NULL, 2, NULL, '800', '800', NULL, 'SF_031', 0.00, 'show', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(212, 'KOBBARI BOORELU-1kg', '1643636210--kobbari-boorelu-1kg', NULL, NULL, 2, NULL, '600', '600', NULL, 'SF_032', 0.00, 'show', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00');
INSERT INTO `products` (`id`, `title`, `slug`, `short_description`, `description`, `cat_id`, `vendor_id`, `price`, `sale_price`, `quantity`, `code`, `discount`, `status`, `image_url1`, `image_url2`, `image_url3`, `image_url4`, `is_deleted`, `created_at`, `updated_at`) VALUES
(213, 'RASAGULLA - RAW SUGAR-1kg', '1643636210--rasagulla-raw-sugar-1kg', NULL, NULL, 2, NULL, '900', '900', NULL, 'SF_033', 0.00, 'show', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(214, 'SALT SAKINALU-1kg', '1643636210--salt-sakinalu-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_034', 0.00, 'show', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(215, 'SANNAKARAPUSA-1kg', '1643636210--sannakarapusa-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_035', 0.00, 'show', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(216, 'KARA BOONDI-1kg', '1643636210--kara-boondi-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_036', 0.00, 'show', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(217, 'MURUKULU-1kg', '1643636210--murukulu-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_037', 0.00, 'show', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(218, 'RIBBON PAKODI-1kg', '1643636210--ribbon-pakodi-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_038', 0.00, 'show', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(219, 'CHALLA CHAKRALU-1kg', '1643636210--challa-chakralu-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_039', 0.00, 'show', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(220, 'CHEKODEELU-1kg', '1643636210--chekodeelu-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_040', 0.00, 'show', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(221, 'CHEKKALU-1kg', '1643636210--chekkalu-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_041', 0.00, 'show', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(222, 'JONNA CHEKKALU-1kg', '1643636210--jonna-chekkalu-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_042', 0.00, 'show', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(223, 'PRAWN PICKLE-1kg', '1643636210--prawn-pickle-1kg', NULL, NULL, 4, NULL, '1600', '1600', NULL, 'SF_043', 0.00, 'show', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(224, 'GONGURA CHICKEN PICKLE-1kg', '1643636210--gongura-chicken-pickle-1kg', NULL, NULL, 4, NULL, '1300', '1300', NULL, 'SF_044', 0.00, 'show', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(225, 'CHICKEN PICKLE WITH BONE-1kg', '1643636210--chicken-pickle-with-bone-1kg', NULL, NULL, 4, NULL, '1100', '1100', NULL, 'SF_045', 0.00, 'show', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(226, 'CHICKEN PICKLE BONELESS-1kg', '1643636210--chicken-pickle-boneless-1kg', NULL, NULL, 4, NULL, '1300', '1300', NULL, 'SF_046', 0.00, 'show', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(227, 'MUTTON PICKLE BONELESS-1kg', '1643636210--mutton-pickle-boneless-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_047', 0.00, 'show', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(228, 'MUTTON KEEMA PICKLE-1kg', '1643636210--mutton-keema-pickle-1kg', NULL, NULL, 4, NULL, '1800', '1800', NULL, 'SF_048', 0.00, 'show', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(229, 'KORAMENU FISH PICKLE-1kg', '1643636210--koramenu-fish-pickle-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_049', 0.00, 'show', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(230, 'CHERUVU FISH PICKLE-1kg', '1643636210--cheruvu-fish-pickle-1kg', NULL, NULL, 4, NULL, '1300', '1300', NULL, 'SF_050', 0.00, 'show', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(231, 'GONGURA PRAWNS PICKLE-1kg', '1643636210--gongura-prawns-pickle-1kg', NULL, NULL, 4, NULL, '1800', '1800', NULL, 'SF_051', 0.00, 'show', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(232, 'SEA BASS FISH PICKLE ( PANDU KAPPA)-1kg', '1643636210--sea-bass-fish-pickle-pandu-kappa-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_052', 0.00, 'show', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(233, 'GONGURA MUTTON PICKLE-1kg', '1643636210--gongura-mutton-pickle-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_053', 0.00, 'show', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(234, 'PESARA AVAKAYA-1kg', '1643636210--pesara-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_054', 0.00, 'show', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(235, 'USIRI AVAKAYA-1kg', '1643636210--usiri-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_055', 0.00, 'show', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(236, 'MAAGAYA-1kg', '1643636210--maagaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_056', 0.00, 'show', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(237, 'CHINTAKAYA PACHADI-1kg', '1643636210--chintakaya-pachadi-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_057', 0.00, 'show', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(238, 'GONGURA-1kg', '1643636210--gongura-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_058', 0.00, 'show', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(239, 'TAMOTO PICKLE-1kg', '1643636210--tamoto-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_059', 0.00, 'show', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(240, 'DABBAKAYA PACHADI-1kg', '1643636210--dabbakaya-pachadi-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_060', 0.00, 'show', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(241, 'LEMON PICKLE-1kg', '1643636210--lemon-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_061', 0.00, 'show', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(242, 'ALLAM PACHADI-1kg', '1643636210--allam-pachadi-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_062', 0.00, 'show', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(243, 'DONDAKAYA AVAKAYA-1kg', '1643636210--dondakaya-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_063', 0.00, 'show', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(244, 'MUNAGA AVAKAYA-1kg', '1643636210--munaga-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_064', 0.00, 'show', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(245, 'KAKARAKAYA AVAKAYA-1kg', '1643636210--kakarakaya-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_065', 0.00, 'show', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(246, 'MIXED AAVAKAYA-1kg', '1643636210--mixed-aavakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_066', 0.00, 'show', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(247, 'CORIANDER PICKLE-1kg', '1643636210--coriander-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_067', 0.00, 'show', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(248, 'RED CHILLY PICKLE-1kg', '1643636210--red-chilly-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_068', 0.00, 'show', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(249, 'GREEN CHILLY PICKLE-1kg', '1643636210--green-chilly-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_069', 0.00, 'show', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(250, 'AAVAKAYA - MANGO-1kg', '1643636210--aavakaya-mango-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_070', 0.00, 'show', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(251, 'KANDI PODI-1kg', '1643636210--kandi-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_071', 0.00, 'show', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(252, 'PESARA PODI-1kg', '1643636210--pesara-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_072', 0.00, 'show', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(253, 'PALLI PODI-1kg', '1643636210--palli-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_073', 0.00, 'show', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(254, 'NUVVULA PODI-1kg', '1643636210--nuvvula-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_074', 0.00, 'show', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(255, 'TELAGA PINDI-1kg', '1643636210--telaga-pindi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_075', 0.00, 'show', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(256, 'KOBBARI KAARAM-1kg', '1643636210--kobbari-kaaram-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_076', 0.00, 'show', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(257, 'CURRI LEAF POWDER-1kg', '1643636210--curri-leaf-powder-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_077', 0.00, 'show', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(258, 'AVISA KAARAPPODI-1kg', '1643636210--avisa-kaarappodi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_078', 0.00, 'show', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(259, 'PUTNALA PODI-1kg', '1643636210--putnala-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_079', 0.00, 'show', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(260, 'IDLY KAARAM-1kg', '1643636210--idly-kaaram-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_080', 0.00, 'show', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(261, 'SAMBAR PODI-1kg', '1643636210--sambar-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_081', 0.00, 'show', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(262, 'RASAM PODI-1kg', '1643636210--rasam-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_082', 0.00, 'show', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(263, 'KURA KAARAM-1kg', '1643636210--kura-kaaram-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_083', 0.00, 'show', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(264, 'VEPAPODI-1kg', '1643636210--vepapodi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_084', 0.00, 'show', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(265, 'KAKARAKAYA KARAM PODI-1kg', '1643636210--kakarakaya-karam-podi-1kg', NULL, NULL, 6, NULL, '550', '550', NULL, 'SF_085', 0.00, 'show', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(266, 'PULIHORA PASTE-1kg', '1643636210--pulihora-paste-1kg', NULL, NULL, 6, NULL, '800', '800', NULL, 'SF_086', 0.00, 'show', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(267, 'TAMARIND PASTE-1kg', '1643636210--tamarind-paste-1kg', NULL, NULL, 6, NULL, '800', '800', NULL, 'SF_087', 0.00, 'show', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(268, 'RAGI PINDI VADIYALU-1kg', '1643636210--ragi-pindi-vadiyalu-1kg', NULL, NULL, 6, NULL, '600', '600', NULL, 'SF_088', 0.00, 'show', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(269, 'ULAVACHARU-1kg', '1643636210--ulavacharu-1kg', NULL, NULL, 7, NULL, '700', '700', NULL, 'SF_090', 0.00, 'show', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(270, 'GHEE-1kg', '1643636210--ghee-1kg', NULL, NULL, 8, NULL, '700', '700', NULL, 'SF_091', 0.00, 'show', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(271, 'KAJU MITHAI-250gm', '1643636578--kaju-mithai-250gm', NULL, NULL, 1, NULL, '325', '325', NULL, 'SF_01', 0.00, 'show', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(272, 'DRY FRUIT LADDU-250gm', '1643636578--dry-fruit-laddu-250gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_02', 0.00, 'show', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(273, 'SOAN PAPDI-250gm', '1643636578--soan-papdi-250gm', NULL, NULL, 1, NULL, '175', '175', NULL, 'SF_03', 0.00, 'show', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(274, 'POOTHAREKULU DRY FRUIT-250gm', '1643636578--pootharekulu-dry-fruit-250gm', NULL, NULL, 1, NULL, '350', '350', NULL, 'SF_04', 0.00, 'show', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(275, 'POOTHAREKULU BELLAM-250gm', '1643636578--pootharekulu-bellam-250gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_05', 0.00, 'show', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(276, 'POOTHAREKULU PLAIN-250gm', '1643636578--pootharekulu-plain-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_06', 0.00, 'show', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(277, 'GAVVALU BELLAM-250gm', '1643636578--gavvalu-bellam-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_07', 0.00, 'show', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(278, 'PALA KOVA-250gm', '1643636578--pala-kova-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_08', 0.00, 'show', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(279, 'KOVA KAJJIKAYA-250gm', '1643636578--kova-kajjikaya-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_09', 0.00, 'show', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(280, 'MALPURI KOVA-250gm', '1643636578--malpuri-kova-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_010', 0.00, 'show', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(281, 'KALAKAND-250gm', '1643636578--kalakand-250gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_011', 0.00, 'show', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(282, 'KAJU KATHLI-250gm', '1643636578--kaju-kathli-250gm', NULL, NULL, 1, NULL, '325', '325', NULL, 'SF_012', 0.00, 'show', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(283, 'ARISELU-250gm', '1643636578--ariselu-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_013', 0.00, 'show', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(284, 'KAJJIKAYALU-250gm', '1643636578--kajjikayalu-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_014', 0.00, 'show', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(285, 'MYSORE PAK-250gm', '1643636578--mysore-pak-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_015', 0.00, 'show', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(286, 'MINAPA SUNNUNDALU-250gm', '1643636578--minapa-sunnundalu-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_016', 0.00, 'show', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(287, 'MADATHA KAJA-250gm', '1643636578--madatha-kaja-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_017', 0.00, 'show', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(288, 'KAKINADA KAJA-250gm', '1643636578--kakinada-kaja-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_018', 0.00, 'show', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(289, 'CHALIMIDI WITH SUGAR-250gm', '1643636578--chalimidi-with-sugar-250gm', NULL, NULL, 1, NULL, '100', '100', NULL, 'SF_019', 0.00, 'show', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(290, 'BELLAM MITHAI-250gm', '1643636578--bellam-mithai-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_020', 0.00, 'show', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(291, 'MILK MYSORE PAK-250gm', '1643636578--milk-mysore-pak-250gm', NULL, NULL, 1, NULL, '175', '175', NULL, 'SF_021', 0.00, 'show', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(292, 'BANDARU HALWA-250gm', '1643636578--bandaru-halwa-250gm', NULL, NULL, 1, NULL, '150', '150', NULL, 'SF_022', 0.00, 'show', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(293, 'Motichoor Laddu-250gm', '1643636578--motichoor-laddu-250gm', NULL, NULL, 1, NULL, '225', '225', NULL, 'SF_023', 0.00, 'show', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(294, 'KAJU JAGGERY-250gm', '1643636578--kaju-jaggery-250gm', NULL, NULL, 2, NULL, '325', '325', NULL, 'SF_024', 0.00, 'show', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(295, 'RAGI LADDU-250gm', '1643636578--ragi-laddu-250gm', NULL, NULL, 2, NULL, '175', '175', NULL, 'SF_025', 0.00, 'show', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(296, 'KORRA LADDU-250gm', '1643636578--korra-laddu-250gm', NULL, NULL, 2, NULL, '175', '175', NULL, 'SF_026', 0.00, 'show', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(297, 'NUVVULA BELLAM LADDU-250gm', '1643636578--nuvvula-bellam-laddu-250gm', NULL, NULL, 2, NULL, '175', '175', NULL, 'SF_027', 0.00, 'show', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(298, 'JONNA BELLAM GAVVALU-250gm', '1643636578--jonna-bellam-gavvalu-250gm', NULL, NULL, 2, NULL, '150', '150', NULL, 'SF_028', 0.00, 'show', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(299, 'BELLAM PALKOVA-250gm', '1643636578--bellam-palkova-250gm', NULL, NULL, 2, NULL, '200', '200', NULL, 'SF_029', 0.00, 'show', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(300, 'ARIKALA ARISALU-250gm', '1643636578--arikala-arisalu-250gm', NULL, NULL, 2, NULL, '200', '200', NULL, 'SF_030', 0.00, 'show', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(301, 'RAGI JAGGERY HALWA-250gm', '1643636578--ragi-jaggery-halwa-250gm', NULL, NULL, 2, NULL, '200', '200', NULL, 'SF_031', 0.00, 'show', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(302, 'KOBBARI BOORELU-250gm', '1643636578--kobbari-boorelu-250gm', NULL, NULL, 2, NULL, '150', '150', NULL, 'SF_032', 0.00, 'show', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(303, 'RASAGULLA - RAW SUGAR-250gm', '1643636578--rasagulla-raw-sugar-250gm', NULL, NULL, 2, NULL, '225', '225', NULL, 'SF_033', 0.00, 'show', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(304, 'SALT SAKINALU-250gm', '1643636578--salt-sakinalu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_034', 0.00, 'show', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(305, 'SANNAKARAPUSA-250gm', '1643636578--sannakarapusa-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_035', 0.00, 'show', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(306, 'KARA BOONDI-250gm', '1643636578--kara-boondi-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_036', 0.00, 'show', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(307, 'MURUKULU-250gm', '1643636578--murukulu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_037', 0.00, 'show', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(308, 'RIBBON PAKODI-250gm', '1643636578--ribbon-pakodi-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_038', 0.00, 'show', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(309, 'CHALLA CHAKRALU-250gm', '1643636578--challa-chakralu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_039', 0.00, 'show', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(310, 'CHEKODEELU-250gm', '1643636578--chekodeelu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_040', 0.00, 'show', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(311, 'CHEKKALU-250gm', '1643636578--chekkalu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_041', 0.00, 'show', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(312, 'JONNA CHEKKALU-250gm', '1643636578--jonna-chekkalu-250gm', NULL, NULL, 3, NULL, '150', '150', NULL, 'SF_042', 0.00, 'show', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(313, 'PRAWN PICKLE-250gm', '1643636578--prawn-pickle-250gm', NULL, NULL, 4, NULL, '400', '400', NULL, 'SF_043', 0.00, 'show', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(314, 'GONGURA CHICKEN PICKLE-250gm', '1643636578--gongura-chicken-pickle-250gm', NULL, NULL, 4, NULL, '325', '325', NULL, 'SF_044', 0.00, 'show', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(315, 'CHICKEN PICKLE WITH BONE-250gm', '1643636578--chicken-pickle-with-bone-250gm', NULL, NULL, 4, NULL, '275', '275', NULL, 'SF_045', 0.00, 'show', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(316, 'CHICKEN PICKLE BONELESS-250gm', '1643636578--chicken-pickle-boneless-250gm', NULL, NULL, 4, NULL, '325', '325', NULL, 'SF_046', 0.00, 'show', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(317, 'MUTTON PICKLE BONELESS-250gm', '1643636578--mutton-pickle-boneless-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_047', 0.00, 'show', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(318, 'MUTTON KEEMA PICKLE-250gm', '1643636578--mutton-keema-pickle-250gm', NULL, NULL, 4, NULL, '450', '450', NULL, 'SF_048', 0.00, 'show', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(319, 'KORAMENU FISH PICKLE-250gm', '1643636578--koramenu-fish-pickle-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_049', 0.00, 'show', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(320, 'CHERUVU FISH PICKLE-250gm', '1643636578--cheruvu-fish-pickle-250gm', NULL, NULL, 4, NULL, '325', '325', NULL, 'SF_050', 0.00, 'show', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(321, 'GONGURA PRAWNS PICKLE-250gm', '1643636578--gongura-prawns-pickle-250gm', NULL, NULL, 4, NULL, '450', '450', NULL, 'SF_051', 0.00, 'show', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(322, 'SEA BASS FISH PICKLE ( PANDU KAPPA)-250gm', '1643636578--sea-bass-fish-pickle-pandu-kappa-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_052', 0.00, 'show', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(323, 'GONGURA MUTTON PICKLE-250gm', '1643636578--gongura-mutton-pickle-250gm', NULL, NULL, 4, NULL, '425', '425', NULL, 'SF_053', 0.00, 'show', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(324, 'PESARA AVAKAYA-250gm', '1643636578--pesara-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_054', 0.00, 'show', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(325, 'USIRI AVAKAYA-250gm', '1643636578--usiri-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_055', 0.00, 'show', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(326, 'MAAGAYA-250gm', '1643636578--maagaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_056', 0.00, 'show', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(327, 'CHINTAKAYA PACHADI-250gm', '1643636578--chintakaya-pachadi-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_057', 0.00, 'show', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(328, 'GONGURA-250gm', '1643636578--gongura-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_058', 0.00, 'show', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(329, 'TAMOTO PICKLE-250gm', '1643636578--tamoto-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_059', 0.00, 'show', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(330, 'DABBAKAYA PACHADI-250gm', '1643636578--dabbakaya-pachadi-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_060', 0.00, 'show', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(331, 'LEMON PICKLE-250gm', '1643636578--lemon-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_061', 0.00, 'show', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(332, 'ALLAM PACHADI-250gm', '1643636578--allam-pachadi-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_062', 0.00, 'show', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(333, 'DONDAKAYA AVAKAYA-250gm', '1643636578--dondakaya-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_063', 0.00, 'show', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(334, 'MUNAGA AVAKAYA-250gm', '1643636578--munaga-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_064', 0.00, 'show', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(335, 'KAKARAKAYA AVAKAYA-250gm', '1643636578--kakarakaya-avakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_065', 0.00, 'show', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(336, 'MIXED AAVAKAYA-250gm', '1643636578--mixed-aavakaya-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_066', 0.00, 'show', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(337, 'CORIANDER PICKLE-250gm', '1643636578--coriander-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_067', 0.00, 'show', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(338, 'RED CHILLY PICKLE-250gm', '1643636578--red-chilly-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_068', 0.00, 'show', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(339, 'GREEN CHILLY PICKLE-250gm', '1643636578--green-chilly-pickle-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_069', 0.00, 'show', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(340, 'AAVAKAYA - MANGO-250gm', '1643636578--aavakaya-mango-250gm', NULL, NULL, 5, NULL, '150', '150', NULL, 'SF_070', 0.00, 'show', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(341, 'KANDI PODI-250gm', '1643636578--kandi-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_071', 0.00, 'show', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(342, 'PESARA PODI-250gm', '1643636578--pesara-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_072', 0.00, 'show', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(343, 'PALLI PODI-250gm', '1643636578--palli-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_073', 0.00, 'show', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(344, 'NUVVULA PODI-250gm', '1643636578--nuvvula-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_074', 0.00, 'show', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(345, 'TELAGA PINDI-250gm', '1643636578--telaga-pindi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_075', 0.00, 'show', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(346, 'KOBBARI KAARAM-250gm', '1643636578--kobbari-kaaram-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_076', 0.00, 'show', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(347, 'CURRI LEAF POWDER-250gm', '1643636578--curri-leaf-powder-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_077', 0.00, 'show', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(348, 'AVISA KAARAPPODI-250gm', '1643636578--avisa-kaarappodi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_078', 0.00, 'show', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(349, 'PUTNALA PODI-250gm', '1643636578--putnala-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_079', 0.00, 'show', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(350, 'IDLY KAARAM-250gm', '1643636578--idly-kaaram-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_080', 0.00, 'show', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(351, 'SAMBAR PODI-250gm', '1643636578--sambar-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_081', 0.00, 'show', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(352, 'RASAM PODI-250gm', '1643636578--rasam-podi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_082', 0.00, 'show', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(353, 'KURA KAARAM-250gm', '1643636578--kura-kaaram-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_083', 0.00, 'show', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(354, 'VEPAPODI-250gm', '1643636578--vepapodi-250gm', NULL, NULL, 6, NULL, '125', '125', NULL, 'SF_084', 0.00, 'show', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(355, 'KAKARAKAYA KARAM PODI-250gm', '1643636578--kakarakaya-karam-podi-250gm', NULL, NULL, 6, NULL, '150', '150', NULL, 'SF_085', 0.00, 'show', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(356, 'PULIHORA PASTE-250gm', '1643636578--pulihora-paste-250gm', NULL, NULL, 6, NULL, '200', '200', NULL, 'SF_086', 0.00, 'show', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(357, 'TAMARIND PASTE-250gm', '1643636578--tamarind-paste-250gm', NULL, NULL, 6, NULL, '200', '200', NULL, 'SF_087', 0.00, 'show', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(358, 'RAGI PINDI VADIYALU-250gm', '1643636578--ragi-pindi-vadiyalu-250gm', NULL, NULL, 6, NULL, '150', '150', NULL, 'SF_088', 0.00, 'show', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(359, 'ULAVACHARU-250gm', '1643636578--ulavacharu-250gm', NULL, NULL, 7, NULL, '175', '175', NULL, 'SF_090', 0.00, 'show', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(360, 'GHEE-250gm', '1643636578--ghee-250gm', NULL, NULL, 8, NULL, '175', '175', NULL, 'SF_091', 0.00, 'show', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(361, 'KAJU MITHAI-500gm', '1643636578--kaju-mithai-500gm', NULL, NULL, 1, NULL, '650', '650', NULL, 'SF_01', 0.00, 'show', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(362, 'DRY FRUIT LADDU-500gm', '1643636578--dry-fruit-laddu-500gm', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_02', 0.00, 'show', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(363, 'SOAN PAPDI-500gm', '1643636578--soan-papdi-500gm', NULL, NULL, 1, NULL, '325', '325', NULL, 'SF_03', 0.00, 'show', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(364, 'POOTHAREKULU DRY FRUIT-500gm', '1643636578--pootharekulu-dry-fruit-500gm', NULL, NULL, 1, NULL, '700', '700', NULL, 'SF_04', 0.00, 'show', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(365, 'POOTHAREKULU BELLAM-500gm', '1643636578--pootharekulu-bellam-500gm', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_05', 0.00, 'show', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(366, 'POOTHAREKULU PLAIN-500gm', '1643636578--pootharekulu-plain-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_06', 0.00, 'show', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(367, 'GAVVALU BELLAM-500gm', '1643636578--gavvalu-bellam-500gm', NULL, NULL, 1, NULL, '275', '275', NULL, 'SF_07', 0.00, 'show', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(368, 'PALA KOVA-500gm', '1643636578--pala-kova-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_08', 0.00, 'show', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(369, 'KOVA KAJJIKAYA-500gm', '1643636578--kova-kajjikaya-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_09', 0.00, 'show', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(370, 'MALPURI KOVA-500gm', '1643636578--malpuri-kova-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_010', 0.00, 'show', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(371, 'KALAKAND-500gm', '1643636578--kalakand-500gm', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_011', 0.00, 'show', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(372, 'KAJU KATHLI-500gm', '1643636578--kaju-kathli-500gm', NULL, NULL, 1, NULL, '625', '625', NULL, 'SF_012', 0.00, 'show', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(373, 'ARISELU-500gm', '1643636578--ariselu-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_013', 0.00, 'show', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(374, 'KAJJIKAYALU-500gm', '1643636578--kajjikayalu-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_014', 0.00, 'show', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(375, 'MYSORE PAK-500gm', '1643636578--mysore-pak-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_015', 0.00, 'show', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(376, 'MINAPA SUNNUNDALU-500gm', '1643636578--minapa-sunnundalu-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_016', 0.00, 'show', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(377, 'MADATHA KAJA-500gm', '1643636578--madatha-kaja-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_017', 0.00, 'show', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(378, 'KAKINADA KAJA-500gm', '1643636578--kakinada-kaja-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_018', 0.00, 'show', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(379, 'CHALIMIDI WITH SUGAR-500gm', '1643636578--chalimidi-with-sugar-500gm', NULL, NULL, 1, NULL, '200', '200', NULL, 'SF_019', 0.00, 'show', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(380, 'BELLAM MITHAI-500gm', '1643636578--bellam-mithai-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_020', 0.00, 'show', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(381, 'MILK MYSORE PAK-500gm', '1643636578--milk-mysore-pak-500gm', NULL, NULL, 1, NULL, '350', '350', NULL, 'SF_021', 0.00, 'show', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(382, 'BANDARU HALWA-500gm', '1643636578--bandaru-halwa-500gm', NULL, NULL, 1, NULL, '300', '300', NULL, 'SF_022', 0.00, 'show', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(383, 'Motichoor Laddu-500gm', '1643636578--motichoor-laddu-500gm', NULL, NULL, 1, NULL, '450', '450', NULL, 'SF_023', 0.00, 'show', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(384, 'KAJU JAGGERY-500gm', '1643636578--kaju-jaggery-500gm', NULL, NULL, 2, NULL, '650', '650', NULL, 'SF_024', 0.00, 'show', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(385, 'RAGI LADDU-500gm', '1643636578--ragi-laddu-500gm', NULL, NULL, 2, NULL, '350', '350', NULL, 'SF_025', 0.00, 'show', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(386, 'KORRA LADDU-500gm', '1643636578--korra-laddu-500gm', NULL, NULL, 2, NULL, '350', '350', NULL, 'SF_026', 0.00, 'show', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(387, 'NUVVULA BELLAM LADDU-500gm', '1643636578--nuvvula-bellam-laddu-500gm', NULL, NULL, 2, NULL, '350', '350', NULL, 'SF_027', 0.00, 'show', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(388, 'JONNA BELLAM GAVVALU-500gm', '1643636578--jonna-bellam-gavvalu-500gm', NULL, NULL, 2, NULL, '300', '300', NULL, 'SF_028', 0.00, 'show', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(389, 'BELLAM PALKOVA-500gm', '1643636578--bellam-palkova-500gm', NULL, NULL, 2, NULL, '400', '400', NULL, 'SF_029', 0.00, 'show', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(390, 'ARIKALA ARISALU-500gm', '1643636578--arikala-arisalu-500gm', NULL, NULL, 2, NULL, '400', '400', NULL, 'SF_030', 0.00, 'show', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(391, 'RAGI JAGGERY HALWA-500gm', '1643636578--ragi-jaggery-halwa-500gm', NULL, NULL, 2, NULL, '400', '400', NULL, 'SF_031', 0.00, 'show', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(392, 'KOBBARI BOORELU-500gm', '1643636578--kobbari-boorelu-500gm', NULL, NULL, 2, NULL, '300', '300', NULL, 'SF_032', 0.00, 'show', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(393, 'RASAGULLA - RAW SUGAR-500gm', '1643636578--rasagulla-raw-sugar-500gm', NULL, NULL, 2, NULL, '450', '450', NULL, 'SF_033', 0.00, 'show', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(394, 'SALT SAKINALU-500gm', '1643636578--salt-sakinalu-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_034', 0.00, 'show', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(395, 'SANNAKARAPUSA-500gm', '1643636578--sannakarapusa-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_035', 0.00, 'show', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(396, 'KARA BOONDI-500gm', '1643636578--kara-boondi-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_036', 0.00, 'show', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(397, 'MURUKULU-500gm', '1643636578--murukulu-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_037', 0.00, 'show', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(398, 'RIBBON PAKODI-500gm', '1643636578--ribbon-pakodi-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_038', 0.00, 'show', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(399, 'CHALLA CHAKRALU-500gm', '1643636578--challa-chakralu-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_039', 0.00, 'show', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(400, 'CHEKODEELU-500gm', '1643636578--chekodeelu-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_040', 0.00, 'show', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(401, 'CHEKKALU-500gm', '1643636578--chekkalu-500gm', NULL, NULL, 3, NULL, '275', '275', NULL, 'SF_041', 0.00, 'show', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(402, 'JONNA CHEKKALU-500gm', '1643636578--jonna-chekkalu-500gm', NULL, NULL, 3, NULL, '300', '300', NULL, 'SF_042', 0.00, 'show', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(403, 'PRAWN PICKLE-500gm', '1643636578--prawn-pickle-500gm', NULL, NULL, 4, NULL, '800', '800', NULL, 'SF_043', 0.00, 'show', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(404, 'GONGURA CHICKEN PICKLE-500gm', '1643636578--gongura-chicken-pickle-500gm', NULL, NULL, 4, NULL, '650', '650', NULL, 'SF_044', 0.00, 'show', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(405, 'CHICKEN PICKLE WITH BONE-500gm', '1643636578--chicken-pickle-with-bone-500gm', NULL, NULL, 4, NULL, '550', '550', NULL, 'SF_045', 0.00, 'show', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(406, 'CHICKEN PICKLE BONELESS-500gm', '1643636578--chicken-pickle-boneless-500gm', NULL, NULL, 4, NULL, '650', '650', NULL, 'SF_046', 0.00, 'show', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(407, 'MUTTON PICKLE BONELESS-500gm', '1643636578--mutton-pickle-boneless-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_047', 0.00, 'show', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(408, 'MUTTON KEEMA PICKLE-500gm', '1643636578--mutton-keema-pickle-500gm', NULL, NULL, 4, NULL, '900', '900', NULL, 'SF_048', 0.00, 'show', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(409, 'KORAMENU FISH PICKLE-500gm', '1643636578--koramenu-fish-pickle-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_049', 0.00, 'show', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(410, 'CHERUVU FISH PICKLE-500gm', '1643636578--cheruvu-fish-pickle-500gm', NULL, NULL, 4, NULL, '650', '650', NULL, 'SF_050', 0.00, 'show', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(411, 'GONGURA PRAWNS PICKLE-500gm', '1643636578--gongura-prawns-pickle-500gm', NULL, NULL, 4, NULL, '900', '900', NULL, 'SF_051', 0.00, 'show', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(412, 'SEA BASS FISH PICKLE ( PANDU KAPPA)-500gm', '1643636578--sea-bass-fish-pickle-pandu-kappa-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_052', 0.00, 'show', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(413, 'GONGURA MUTTON PICKLE-500gm', '1643636578--gongura-mutton-pickle-500gm', NULL, NULL, 4, NULL, '850', '850', NULL, 'SF_053', 0.00, 'show', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(414, 'PESARA AVAKAYA-500gm', '1643636578--pesara-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_054', 0.00, 'show', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(415, 'USIRI AVAKAYA-500gm', '1643636578--usiri-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_055', 0.00, 'show', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(416, 'MAAGAYA-500gm', '1643636578--maagaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_056', 0.00, 'show', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(417, 'CHINTAKAYA PACHADI-500gm', '1643636578--chintakaya-pachadi-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_057', 0.00, 'show', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(418, 'GONGURA-500gm', '1643636578--gongura-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_058', 0.00, 'show', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(419, 'TAMOTO PICKLE-500gm', '1643636578--tamoto-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_059', 0.00, 'show', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(420, 'DABBAKAYA PACHADI-500gm', '1643636578--dabbakaya-pachadi-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_060', 0.00, 'show', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(421, 'LEMON PICKLE-500gm', '1643636578--lemon-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_061', 0.00, 'show', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(422, 'ALLAM PACHADI-500gm', '1643636578--allam-pachadi-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_062', 0.00, 'show', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(423, 'DONDAKAYA AVAKAYA-500gm', '1643636579--dondakaya-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_063', 0.00, 'show', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00');
INSERT INTO `products` (`id`, `title`, `slug`, `short_description`, `description`, `cat_id`, `vendor_id`, `price`, `sale_price`, `quantity`, `code`, `discount`, `status`, `image_url1`, `image_url2`, `image_url3`, `image_url4`, `is_deleted`, `created_at`, `updated_at`) VALUES
(424, 'MUNAGA AVAKAYA-500gm', '1643636579--munaga-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_064', 0.00, 'show', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(425, 'KAKARAKAYA AVAKAYA-500gm', '1643636579--kakarakaya-avakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_065', 0.00, 'show', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(426, 'MIXED AAVAKAYA-500gm', '1643636579--mixed-aavakaya-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_066', 0.00, 'show', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(427, 'CORIANDER PICKLE-500gm', '1643636579--coriander-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_067', 0.00, 'show', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(428, 'RED CHILLY PICKLE-500gm', '1643636579--red-chilly-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_068', 0.00, 'show', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(429, 'GREEN CHILLY PICKLE-500gm', '1643636579--green-chilly-pickle-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_069', 0.00, 'show', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(430, 'AAVAKAYA - MANGO-500gm', '1643636579--aavakaya-mango-500gm', NULL, NULL, 5, NULL, '300', '300', NULL, 'SF_070', 0.00, 'show', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(431, 'KANDI PODI-500gm', '1643636579--kandi-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_071', 0.00, 'show', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(432, 'PESARA PODI-500gm', '1643636579--pesara-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_072', 0.00, 'show', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(433, 'PALLI PODI-500gm', '1643636579--palli-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_073', 0.00, 'show', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(434, 'NUVVULA PODI-500gm', '1643636579--nuvvula-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_074', 0.00, 'show', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(435, 'TELAGA PINDI-500gm', '1643636579--telaga-pindi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_075', 0.00, 'show', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(436, 'KOBBARI KAARAM-500gm', '1643636579--kobbari-kaaram-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_076', 0.00, 'show', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(437, 'CURRI LEAF POWDER-500gm', '1643636579--curri-leaf-powder-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_077', 0.00, 'show', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(438, 'AVISA KAARAPPODI-500gm', '1643636579--avisa-kaarappodi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_078', 0.00, 'show', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(439, 'PUTNALA PODI-500gm', '1643636579--putnala-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_079', 0.00, 'show', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(440, 'IDLY KAARAM-500gm', '1643636579--idly-kaaram-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_080', 0.00, 'show', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(441, 'SAMBAR PODI-500gm', '1643636579--sambar-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_081', 0.00, 'show', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(442, 'RASAM PODI-500gm', '1643636579--rasam-podi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_082', 0.00, 'show', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(443, 'KURA KAARAM-500gm', '1643636579--kura-kaaram-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_083', 0.00, 'show', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(444, 'VEPAPODI-500gm', '1643636579--vepapodi-500gm', NULL, NULL, 6, NULL, '250', '250', NULL, 'SF_084', 0.00, 'show', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(445, 'KAKARAKAYA KARAM PODI-500gm', '1643636579--kakarakaya-karam-podi-500gm', NULL, NULL, 6, NULL, '275', '275', NULL, 'SF_085', 0.00, 'show', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(446, 'PULIHORA PASTE-500gm', '1643636579--pulihora-paste-500gm', NULL, NULL, 6, NULL, '400', '400', NULL, 'SF_086', 0.00, 'show', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(447, 'TAMARIND PASTE-500gm', '1643636579--tamarind-paste-500gm', NULL, NULL, 6, NULL, '400', '400', NULL, 'SF_087', 0.00, 'show', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(448, 'RAGI PINDI VADIYALU-500gm', '1643636579--ragi-pindi-vadiyalu-500gm', NULL, NULL, 6, NULL, '300', '300', NULL, 'SF_088', 0.00, 'show', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(449, 'ULAVACHARU-500gm', '1643636579--ulavacharu-500gm', NULL, NULL, 7, NULL, '350', '350', NULL, 'SF_090', 0.00, 'show', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(450, 'GHEE-500gm', '1643636579--ghee-500gm', NULL, NULL, 8, NULL, '350', '350', NULL, 'SF_091', 0.00, 'show', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(451, 'KAJU MITHAI-1kg', '1643636579--kaju-mithai-1kg', NULL, NULL, 1, NULL, '1300', '1300', NULL, 'SF_01', 0.00, 'show', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 'SF_01.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(452, 'DRY FRUIT LADDU-1kg', '1643636579--dry-fruit-laddu-1kg', NULL, NULL, 1, NULL, '1200', '1200', NULL, 'SF_02', 0.00, 'show', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 'SF_02.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(453, 'SOAN PAPDI-1kg', '1643636579--soan-papdi-1kg', NULL, NULL, 1, NULL, '650', '650', NULL, 'SF_03', 0.00, 'show', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 'SF_03.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(454, 'POOTHAREKULU DRY FRUIT-1kg', '1643636579--pootharekulu-dry-fruit-1kg', NULL, NULL, 1, NULL, '1400', '1400', NULL, 'SF_04', 0.00, 'show', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 'SF_04.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(455, 'POOTHAREKULU BELLAM-1kg', '1643636579--pootharekulu-bellam-1kg', NULL, NULL, 1, NULL, '1200', '1200', NULL, 'SF_05', 0.00, 'show', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 'SF_05.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(456, 'POOTHAREKULU PLAIN-1kg', '1643636579--pootharekulu-plain-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_06', 0.00, 'show', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 'SF_06.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(457, 'GAVVALU BELLAM-1kg', '1643636579--gavvalu-bellam-1kg', NULL, NULL, 1, NULL, '550', '550', NULL, 'SF_07', 0.00, 'show', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 'SF_07.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(458, 'PALA KOVA-1kg', '1643636579--pala-kova-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_08', 0.00, 'show', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 'SF_08.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(459, 'KOVA KAJJIKAYA-1kg', '1643636579--kova-kajjikaya-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_09', 0.00, 'show', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 'SF_09.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(460, 'MALPURI KOVA-1kg', '1643636579--malpuri-kova-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_010', 0.00, 'show', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 'SF_010.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(461, 'KALAKAND-1kg', '1643636579--kalakand-1kg', NULL, NULL, 1, NULL, '800', '800', NULL, 'SF_011', 0.00, 'show', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 'SF_011.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(462, 'KAJU KATHLI-1kg', '1643636579--kaju-kathli-1kg', NULL, NULL, 1, NULL, '1250', '1250', NULL, 'SF_012', 0.00, 'show', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 'SF_012.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(463, 'ARISELU-1kg', '1643636579--ariselu-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_013', 0.00, 'show', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 'SF_013.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(464, 'KAJJIKAYALU-1kg', '1643636579--kajjikayalu-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_014', 0.00, 'show', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 'SF_014.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(465, 'MYSORE PAK-1kg', '1643636579--mysore-pak-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_015', 0.00, 'show', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 'SF_015.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(466, 'MINAPA SUNNUNDALU-1kg', '1643636579--minapa-sunnundalu-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_016', 0.00, 'show', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 'SF_016.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(467, 'MADATHA KAJA-1kg', '1643636579--madatha-kaja-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_017', 0.00, 'show', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 'SF_017.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(468, 'KAKINADA KAJA-1kg', '1643636579--kakinada-kaja-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_018', 0.00, 'show', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 'SF_018.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(469, 'CHALIMIDI WITH SUGAR-1kg', '1643636579--chalimidi-with-sugar-1kg', NULL, NULL, 1, NULL, '400', '400', NULL, 'SF_019', 0.00, 'show', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 'SF_019.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(470, 'BELLAM MITHAI-1kg', '1643636579--bellam-mithai-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_020', 0.00, 'show', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 'SF_020.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(471, 'MILK MYSORE PAK-1kg', '1643636579--milk-mysore-pak-1kg', NULL, NULL, 1, NULL, '700', '700', NULL, 'SF_021', 0.00, 'show', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 'SF_021.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(472, 'BANDARU HALWA-1kg', '1643636579--bandaru-halwa-1kg', NULL, NULL, 1, NULL, '600', '600', NULL, 'SF_022', 0.00, 'show', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 'SF_022.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(473, 'Motichoor Laddu-1kg', '1643636579--motichoor-laddu-1kg', NULL, NULL, 1, NULL, '900', '900', NULL, 'SF_023', 0.00, 'show', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 'SF_023.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(474, 'KAJU JAGGERY-1kg', '1643636579--kaju-jaggery-1kg', NULL, NULL, 2, NULL, '1300', '1300', NULL, 'SF_024', 0.00, 'show', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 'SF_024.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(475, 'RAGI LADDU-1kg', '1643636579--ragi-laddu-1kg', NULL, NULL, 2, NULL, '700', '700', NULL, 'SF_025', 0.00, 'show', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 'SF_025.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(476, 'KORRA LADDU-1kg', '1643636579--korra-laddu-1kg', NULL, NULL, 2, NULL, '700', '700', NULL, 'SF_026', 0.00, 'show', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 'SF_026.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(477, 'NUVVULA BELLAM LADDU-1kg', '1643636579--nuvvula-bellam-laddu-1kg', NULL, NULL, 2, NULL, '700', '700', NULL, 'SF_027', 0.00, 'show', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 'SF_027.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(478, 'JONNA BELLAM GAVVALU-1kg', '1643636579--jonna-bellam-gavvalu-1kg', NULL, NULL, 2, NULL, '600', '600', NULL, 'SF_028', 0.00, 'show', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 'SF_028.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(479, 'BELLAM PALKOVA-1kg', '1643636579--bellam-palkova-1kg', NULL, NULL, 2, NULL, '800', '800', NULL, 'SF_029', 0.00, 'show', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 'SF_029.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(480, 'ARIKALA ARISALU-1kg', '1643636579--arikala-arisalu-1kg', NULL, NULL, 2, NULL, '800', '800', NULL, 'SF_030', 0.00, 'show', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 'SF_030.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(481, 'RAGI JAGGERY HALWA-1kg', '1643636579--ragi-jaggery-halwa-1kg', NULL, NULL, 2, NULL, '800', '800', NULL, 'SF_031', 0.00, 'show', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 'SF_031.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(482, 'KOBBARI BOORELU-1kg', '1643636579--kobbari-boorelu-1kg', NULL, NULL, 2, NULL, '600', '600', NULL, 'SF_032', 0.00, 'show', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 'SF_032.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(483, 'RASAGULLA - RAW SUGAR-1kg', '1643636579--rasagulla-raw-sugar-1kg', NULL, NULL, 2, NULL, '900', '900', NULL, 'SF_033', 0.00, 'show', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 'SF_033.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(484, 'SALT SAKINALU-1kg', '1643636579--salt-sakinalu-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_034', 0.00, 'show', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 'SF_034.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(485, 'SANNAKARAPUSA-1kg', '1643636579--sannakarapusa-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_035', 0.00, 'show', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 'SF_035.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(486, 'KARA BOONDI-1kg', '1643636579--kara-boondi-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_036', 0.00, 'show', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 'SF_036.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(487, 'MURUKULU-1kg', '1643636579--murukulu-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_037', 0.00, 'show', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 'SF_037.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(488, 'RIBBON PAKODI-1kg', '1643636579--ribbon-pakodi-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_038', 0.00, 'show', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 'SF_038.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(489, 'CHALLA CHAKRALU-1kg', '1643636579--challa-chakralu-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_039', 0.00, 'show', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 'SF_039.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(490, 'CHEKODEELU-1kg', '1643636579--chekodeelu-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_040', 0.00, 'show', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 'SF_040.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(491, 'CHEKKALU-1kg', '1643636579--chekkalu-1kg', NULL, NULL, 3, NULL, '550', '550', NULL, 'SF_041', 0.00, 'show', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 'SF_041.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(492, 'JONNA CHEKKALU-1kg', '1643636579--jonna-chekkalu-1kg', NULL, NULL, 3, NULL, '600', '600', NULL, 'SF_042', 0.00, 'show', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 'SF_042.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(493, 'PRAWN PICKLE-1kg', '1643636579--prawn-pickle-1kg', NULL, NULL, 4, NULL, '1600', '1600', NULL, 'SF_043', 0.00, 'show', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 'SF_043.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(494, 'GONGURA CHICKEN PICKLE-1kg', '1643636579--gongura-chicken-pickle-1kg', NULL, NULL, 4, NULL, '1300', '1300', NULL, 'SF_044', 0.00, 'show', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 'SF_044.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(495, 'CHICKEN PICKLE WITH BONE-1kg', '1643636579--chicken-pickle-with-bone-1kg', NULL, NULL, 4, NULL, '1100', '1100', NULL, 'SF_045', 0.00, 'show', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 'SF_045.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(496, 'CHICKEN PICKLE BONELESS-1kg', '1643636579--chicken-pickle-boneless-1kg', NULL, NULL, 4, NULL, '1300', '1300', NULL, 'SF_046', 0.00, 'show', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 'SF_046.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(497, 'MUTTON PICKLE BONELESS-1kg', '1643636579--mutton-pickle-boneless-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_047', 0.00, 'show', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 'SF_047.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(498, 'MUTTON KEEMA PICKLE-1kg', '1643636579--mutton-keema-pickle-1kg', NULL, NULL, 4, NULL, '1800', '1800', NULL, 'SF_048', 0.00, 'show', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 'SF_048.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(499, 'KORAMENU FISH PICKLE-1kg', '1643636579--koramenu-fish-pickle-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_049', 0.00, 'show', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 'SF_049.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(500, 'CHERUVU FISH PICKLE-1kg', '1643636579--cheruvu-fish-pickle-1kg', NULL, NULL, 4, NULL, '1300', '1300', NULL, 'SF_050', 0.00, 'show', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 'SF_050.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(501, 'GONGURA PRAWNS PICKLE-1kg', '1643636579--gongura-prawns-pickle-1kg', NULL, NULL, 4, NULL, '1800', '1800', NULL, 'SF_051', 0.00, 'show', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 'SF_051.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(502, 'SEA BASS FISH PICKLE ( PANDU KAPPA)-1kg', '1643636579--sea-bass-fish-pickle-pandu-kappa-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_052', 0.00, 'show', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 'SF_052.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(503, 'GONGURA MUTTON PICKLE-1kg', '1643636579--gongura-mutton-pickle-1kg', NULL, NULL, 4, NULL, '1700', '1700', NULL, 'SF_053', 0.00, 'show', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 'SF_053.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(504, 'PESARA AVAKAYA-1kg', '1643636579--pesara-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_054', 0.00, 'show', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 'SF_054.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(505, 'USIRI AVAKAYA-1kg', '1643636579--usiri-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_055', 0.00, 'show', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 'SF_055.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(506, 'MAAGAYA-1kg', '1643636579--maagaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_056', 0.00, 'show', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 'SF_056.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(507, 'CHINTAKAYA PACHADI-1kg', '1643636579--chintakaya-pachadi-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_057', 0.00, 'show', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 'SF_057.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(508, 'GONGURA-1kg', '1643636579--gongura-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_058', 0.00, 'show', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 'SF_058.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(509, 'TAMOTO PICKLE-1kg', '1643636579--tamoto-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_059', 0.00, 'show', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 'SF_059.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(510, 'DABBAKAYA PACHADI-1kg', '1643636579--dabbakaya-pachadi-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_060', 0.00, 'show', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 'SF_060.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(511, 'LEMON PICKLE-1kg', '1643636579--lemon-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_061', 0.00, 'show', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 'SF_061.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(512, 'ALLAM PACHADI-1kg', '1643636579--allam-pachadi-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_062', 0.00, 'show', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 'SF_062.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(513, 'DONDAKAYA AVAKAYA-1kg', '1643636579--dondakaya-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_063', 0.00, 'show', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 'SF_063.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(514, 'MUNAGA AVAKAYA-1kg', '1643636579--munaga-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_064', 0.00, 'show', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 'SF_064.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(515, 'KAKARAKAYA AVAKAYA-1kg', '1643636579--kakarakaya-avakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_065', 0.00, 'show', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 'SF_065.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(516, 'MIXED AAVAKAYA-1kg', '1643636579--mixed-aavakaya-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_066', 0.00, 'show', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 'SF_066.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(517, 'CORIANDER PICKLE-1kg', '1643636579--coriander-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_067', 0.00, 'show', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 'SF_067.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(518, 'RED CHILLY PICKLE-1kg', '1643636579--red-chilly-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_068', 0.00, 'show', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 'SF_068.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(519, 'GREEN CHILLY PICKLE-1kg', '1643636579--green-chilly-pickle-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_069', 0.00, 'show', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 'SF_069.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(520, 'AAVAKAYA - MANGO-1kg', '1643636579--aavakaya-mango-1kg', NULL, NULL, 5, NULL, '600', '600', NULL, 'SF_070', 0.00, 'show', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 'SF_070.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(521, 'KANDI PODI-1kg', '1643636579--kandi-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_071', 0.00, 'show', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 'SF_071.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(522, 'PESARA PODI-1kg', '1643636579--pesara-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_072', 0.00, 'show', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 'SF_072.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(523, 'PALLI PODI-1kg', '1643636579--palli-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_073', 0.00, 'show', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 'SF_073.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(524, 'NUVVULA PODI-1kg', '1643636579--nuvvula-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_074', 0.00, 'show', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 'SF_074.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(525, 'TELAGA PINDI-1kg', '1643636579--telaga-pindi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_075', 0.00, 'show', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 'SF_075.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(526, 'KOBBARI KAARAM-1kg', '1643636579--kobbari-kaaram-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_076', 0.00, 'show', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 'SF_076.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(527, 'CURRI LEAF POWDER-1kg', '1643636579--curri-leaf-powder-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_077', 0.00, 'show', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 'SF_077.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(528, 'AVISA KAARAPPODI-1kg', '1643636579--avisa-kaarappodi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_078', 0.00, 'show', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 'SF_078.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(529, 'PUTNALA PODI-1kg', '1643636579--putnala-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_079', 0.00, 'show', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 'SF_079.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(530, 'IDLY KAARAM-1kg', '1643636579--idly-kaaram-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_080', 0.00, 'show', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 'SF_080.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(531, 'SAMBAR PODI-1kg', '1643636579--sambar-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_081', 0.00, 'show', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 'SF_081.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(532, 'RASAM PODI-1kg', '1643636579--rasam-podi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_082', 0.00, 'show', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 'SF_082.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(533, 'KURA KAARAM-1kg', '1643636579--kura-kaaram-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_083', 0.00, 'show', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 'SF_083.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(534, 'VEPAPODI-1kg', '1643636579--vepapodi-1kg', NULL, NULL, 6, NULL, '500', '500', NULL, 'SF_084', 0.00, 'show', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 'SF_084.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(535, 'KAKARAKAYA KARAM PODI-1kg', '1643636579--kakarakaya-karam-podi-1kg', NULL, NULL, 6, NULL, '550', '550', NULL, 'SF_085', 0.00, 'show', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 'SF_085.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(536, 'PULIHORA PASTE-1kg', '1643636579--pulihora-paste-1kg', NULL, NULL, 6, NULL, '800', '800', NULL, 'SF_086', 0.00, 'show', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 'SF_086.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(537, 'TAMARIND PASTE-1kg', '1643636579--tamarind-paste-1kg', NULL, NULL, 6, NULL, '800', '800', NULL, 'SF_087', 0.00, 'show', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 'SF_087.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(538, 'RAGI PINDI VADIYALU-1kg', '1643636579--ragi-pindi-vadiyalu-1kg', NULL, NULL, 6, NULL, '600', '600', NULL, 'SF_088', 0.00, 'show', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 'SF_088.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(539, 'ULAVACHARU-1kg', '1643636579--ulavacharu-1kg', NULL, NULL, 7, NULL, '700', '700', NULL, 'SF_090', 0.00, 'show', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 'SF_090.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00'),
(540, 'GHEE-1kg', '1643636579--ghee-1kg', NULL, NULL, 8, NULL, '700', '700', NULL, 'SF_091', 0.00, 'show', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 'SF_091.jpg', 0, '2022-01-30 18:30:00', '2022-01-30 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locality` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` enum('home','work') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `short_description`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SWEETS', 'SWEETS', 'Contrary to popular belief', 'SF_018.jpg', 'show', NULL, NULL),
(2, 'ORGANIC JAGGERY SWEETS', 'ORGANIC JAGGERY SWEETS', 'Contrary to popular belief', 'SF_022.jpg', 'show', NULL, NULL),
(3, 'NON-VEG PICKLE', 'NON-VEG PICKLE', 'Contrary to popular belief', 'SF_041.jpg', 'show', NULL, NULL),
(4, 'SPICES', 'SPICES', 'Contrary to popular belief', 'SF_061.jpg', 'show', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('user','admin','vendor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_status` enum('unapproved','approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unapproved',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-delete,1-delete',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `user_type`, `email_verified_at`, `password`, `approved_status`, `is_deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '1477481373', 'admin', '2022-01-31 08:06:28', '$2y$10$hW86Mf4zzWdwWoq7vTW3uu9SZvCSWpXvUKENrvlhIyBn6Rr9oQw96', 'unapproved', 0, 'WJh5AhRU5BuIYZYicQtgktgCxGHeClEhh8OWjVk2UhMf4nb8AS2LkbnoLs9w', NULL, NULL),
(2, 'User', 'user@user.com', '4916049024', 'user', '2022-01-31 08:06:28', '$2y$10$PxEqkr75U5SvuKEhX7mHFezmbtXZgLflgQq4dkvqjDm3x/5NTlN1y', 'unapproved', 0, '9M8Tc3FgXdUr38HF3OyvY9ILY5AgC5PZZMTnJL3QukPjpVBCbxuG7q785mrH', NULL, NULL),
(3, 'Vendor', 'vendor@vendor.com', '71476717', 'vendor', '2022-01-31 08:06:28', '$2y$10$G6pp5b0VDDh4iFKW/2IvLem63ufL/f1jKmGJVoV3uwtrAwNK7IAhu', 'unapproved', 0, 'OaLPNs5aT3', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_pro_id_foreign` (`pro_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_coupon_code_unique` (`coupon_code`);

--
-- Indexes for table `deal_of_days`
--
ALTER TABLE `deal_of_days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deal_of_days_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_products_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_settings_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_pro_id_foreign` (`pro_id`);

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
-- Indexes for table `popular_products`
--
ALTER TABLE `popular_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `popular_products_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deal_of_days`
--
ALTER TABLE `deal_of_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular_products`
--
ALTER TABLE `popular_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `deal_of_days`
--
ALTER TABLE `deal_of_days`
  ADD CONSTRAINT `deal_of_days_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD CONSTRAINT `featured_products_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD CONSTRAINT `general_settings_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `shipping_addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `popular_products`
--
ALTER TABLE `popular_products`
  ADD CONSTRAINT `popular_products_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD CONSTRAINT `shipping_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

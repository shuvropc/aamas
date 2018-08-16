-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 06:03 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aamas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `permanent_address` varchar(191) DEFAULT NULL,
  `present_address` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `permanent_address`, `present_address`, `image`) VALUES
(1, 'Mahadi', 'admin1@gmail.com', '111111', '01672667977', 'Tejgaon, Dhaka', NULL, ''),
(2, 'Md Mahadi Hasan', 'admin@gmail.com', '$2y$10$LbvyeBvSbZfm.rH0xUoZIe0psuT6UrSg/H7/6B5.RPal6FtaLQhbG', '01672667977', 'Tejgaon, Dhaka', 'Dhaka,Bangladesh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_Id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '', '2018-06-03 07:26:51', '2018-06-03 07:26:51'),
(2, 'Clothing', '', '2018-06-03 07:29:16', '2018-06-03 07:29:16'),
(3, 'phone', '', '2018-08-14 05:38:13', '2018-08-14 05:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `product_id`, `size`, `color`, `total_quantity`, `available_quantity`, `created_at`, `updated_at`) VALUES
(3, 2, NULL, 'Black', 10, 5, '2018-07-19 01:20:39', '2018-08-14 04:28:20'),
(4, 2, NULL, 'Grey', 10, 9, '2018-07-19 01:20:39', '2018-08-01 05:31:01'),
(5, 2, NULL, 'Sand Stone', 5, 4, '2018-07-19 01:20:39', '2018-08-01 05:29:01'),
(6, 3, NULL, 'Red', 5, 0, '2018-07-19 01:21:53', '2018-08-14 05:50:43'),
(7, 3, NULL, 'Pink', 3, 0, '2018-07-19 01:21:53', '2018-08-14 05:21:16'),
(12, 1, NULL, 'Black', 10, 9, NULL, '2018-07-25 05:20:45'),
(13, 1, NULL, 'White', 70, 70, '2018-07-22 05:16:21', '2018-07-22 05:16:21'),
(14, 1, NULL, 'Golden', 30, 30, '2018-07-22 05:19:28', '2018-07-22 05:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referenced_by` int(11) NOT NULL,
  `Identity_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `current_address`, `parmanent_address`, `contact_number`, `type`, `referenced_by`, `Identity_number`, `active`, `image`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1, 'Mark Jow', 'hr1@gmail.com', '$2y$10$b8809APlVnzoXXLryHNEwegVLh3BfnNU.a8x7UcJAjN1TYUYNMfNC', 'Dhaka', 'Lalmonirhat', '0098978454545', 'HR', 1, '122345678765432345', 1, 'uploads/vendor/product/QiMvJNU0xmpLjM9WnRf2XU7paQMHQN.jpg', 1, '2018-05-29 06:27:00', '2018-07-17 00:34:22'),
(2, 'Ricardo Rick', 'sales1@gmail.com', '$2y$10$J3FdvLGMv6mAmEDb2nvIIeggKjMcuWim5/ceDF/TmOfGWx4Pjw8aC', 'Chittagong', 'Faridpur', '0065989749465', 'Sales', 1, '122345678765432345', 1, NULL, 1, '2018-05-29 12:43:09', '2018-05-29 12:43:09'),
(3, 'asasda', 'sales2@ajsdh.com', '$2y$10$xLoZoPTDjA0ww/NZsbZjuO63.hMAltxir4YnU7hAJcyaUy6p2Owc.', NULL, NULL, NULL, 'Sales', 1, 'asdasd', 1, NULL, 1, '2018-07-03 07:16:33', '2018-07-03 07:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `feature_products`
--

CREATE TABLE `feature_products` (
  `id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `featured_by` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_products`
--

INSERT INTO `feature_products` (`id`, `product_id`, `featured_by`, `created_at`, `updated_at`) VALUES
(5, 3, NULL, '2018-07-29 05:53:48', '2018-07-29 05:53:48'),
(6, 1, NULL, '2018-08-14 05:27:58', '2018-08-14 05:27:58'),
(7, 2, NULL, '2018-08-14 05:27:59', '2018-08-14 05:27:59');

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2018_05_22_074615_create_details_table', 1),
(26, '2018_05_22_082006_create_vendors_table', 1),
(27, '2018_05_22_082007_create_categories_table', 1),
(28, '2018_05_22_082008_create_products_table', 1),
(29, '2018_05_22_175602_create_orders_table', 1),
(30, '2018_05_22_180000_create_deliveries_table', 1),
(31, '2018_05_22_182359_create_employees_table', 1),
(32, '2018_05_23_010737_create_wishlists_table', 1),
(33, '2018_05_30_115938_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `discount` double NOT NULL,
  `payment_amount` double NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `delivery` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `quantity`, `total_price`, `discount`, `payment_amount`, `payment_type`, `shipping_address`, `product_id`, `user_id`, `delivery`, `created_at`, `updated_at`) VALUES
(1, '', 1, 100009, 0, 0, '0', 'Dhaka Attack', 3, 1, 0, '2018-07-25 05:20:45', '2018-07-25 05:20:45'),
(2, '', 1, 100000, 0, 0, '0', 'Dhaka Attack', 1, 1, 0, '2018-07-25 05:20:45', '2018-07-25 05:20:45'),
(3, 'O-11-22-07-lE', 1, 100009, 0, 0, '0', 'Dhaka', 3, 1, 1, '2018-08-01 05:22:07', '2018-08-14 05:48:13'),
(4, 'O-11-22-07-ZH', 1, 100009, 0, 0, '0', 'Dhaka', 3, 1, 1, '2018-08-01 05:22:07', '2018-08-12 14:07:55'),
(6, '', 1, 50000, 0, 0, '0', 'Dhaka', 2, 1, 0, '2018-08-01 05:29:01', '2018-08-01 05:29:01'),
(7, '', 1, 50000, 0, 0, '0', 'Dhaka', 2, 1, 0, '2018-08-01 05:29:01', '2018-08-01 05:29:01'),
(8, 'O-11-31-01-hD', 1, 50000, 0, 0, '0', 'Dhaka', 2, 1, 1, '2018-08-01 05:31:01', '2018-08-14 03:10:42'),
(9, 'O-11-31-01-hD', 1, 50000, 0, 0, '0', 'Dhaka', 2, 1, 1, '2018-08-01 05:31:01', '2018-08-14 03:10:42'),
(10, 'O-10-26-31-5Y', 1, 50000, 0, 0, '0', 'Dhaka', 2, 1, 0, '2018-08-14 04:26:31', '2018-08-14 04:26:31'),
(11, 'O-10-28-20-9Y', 2, 100000, 0, 0, '0', 'Dhaka', 2, 1, 0, '2018-08-14 04:28:20', '2018-08-14 04:28:20'),
(12, 'O-11-21-16-Te', 2, 200018, 0, 0, '0', 'Dhaka', 3, 1, 1, '2018-08-14 05:21:16', '2018-08-14 05:49:02'),
(13, 'O-11-50-43-u7', 1, 100009, 0, 0, '0', 'Dhaka', 3, 2, 1, '2018-08-14 05:50:43', '2018-08-14 05:51:26');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` tinyint(1) NOT NULL,
  `aamas_status` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `buying_price`, `selling_price`, `discount`, `brand`, `image1`, `image2`, `image3`, `image4`, `available`, `aamas_status`, `category_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1, 'iPhone X', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 80000, 100000, 5, 'Apple', 'uploads/vendor/product/nFFMUYllegJZ6BMghD8Zp58zPcFJOSb6010aeefdeb5309b7dfc98e1080fc249d51d239.jpg', 'uploads/vendor/product/sMrjywHTOhjqBFERCN31NbdMI28sVcb6010aeefdeb5309b7dfc98e1080fc249d51d239.jpg', 'uploads/vendor/product/Fj79PlEpKD5A7Twv1WM7GmemHNgjSob6010aeefdeb5309b7dfc98e1080fc249d51d239.jpg', 'uploads/vendor/product/bmzKvvzGjWcq2KOpF8l3SryqdyWwDnb6010aeefdeb5309b7dfc98e1080fc249d51d239.jpg', 0, 1, 1, 1, '2018-07-19 01:19:37', '2018-07-25 05:10:22'),
(2, 'One Plus 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 40000, 50000, 4, 'One Plus', 'uploads/vendor/product/trFch0Z0sfaca3lXIeFyOIC7fNIToV829bc76604fa96a18c6ae792d8107f17671fdf56.jpg', 'uploads/vendor/product/nf8HyFhTHie5mNgTgmnTtPFOdnBo14829bc76604fa96a18c6ae792d8107f17671fdf56.jpg', 'uploads/vendor/product/jVJinLsq5PXQG6TPp6xAN7N7gBiuLe829bc76604fa96a18c6ae792d8107f17671fdf56.jpg', 'uploads/vendor/product/pcYEr9dhzr22S9iDG87C0TlVSNnmNs829bc76604fa96a18c6ae792d8107f17671fdf56.jpg', 1, 1, 1, 1, '2018-07-19 01:20:39', '2018-07-19 01:20:39'),
(3, 'Galaxy Note 8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 80000, 100009, 3, 'Samsung', 'uploads/vendor/product/eMF8nD2x95isFtW3FETiuay2Ry5EyW29f63799fdd652a6678cd1dc131e9e30c0bd0b4b.jpg', 'uploads/vendor/product/wFEkmHH9Gj4Dry2OMoIUF3fOCei00V29f63799fdd652a6678cd1dc131e9e30c0bd0b4b.jpg', 'uploads/vendor/product/LFpibC9hSuHHUBeCPVmahWlUYCCNYO29f63799fdd652a6678cd1dc131e9e30c0bd0b4b.jpg', 'uploads/vendor/product/R9nGGHglZODkVVdazPna7AG9Oca4m529f63799fdd652a6678cd1dc131e9e30c0bd0b4b.jpg', 1, 1, 1, 1, '2018-07-19 01:21:53', '2018-07-19 01:21:53');

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_with_details`
-- (See below for the actual view)
--
CREATE TABLE `product_with_details` (
`id` int(10) unsigned
,`product_name` varchar(191)
,`product_description` varchar(2000)
,`buying_price` int(11)
,`selling_price` int(11)
,`discount` int(11)
,`brand` varchar(191)
,`image1` varchar(191)
,`image2` varchar(191)
,`image3` varchar(191)
,`image4` varchar(191)
,`available` tinyint(1)
,`aamas_status` tinyint(1)
,`category_id` int(10) unsigned
,`vendor_id` int(10) unsigned
,`created_at` timestamp
,`updated_at` timestamp
,`category_name` varchar(191)
,`sub_category` varchar(191)
,`NAME` varchar(191)
,`vendor_name` varchar(191)
,`contact_number` varchar(191)
,`website` varchar(191)
,`address` varchar(191)
,`country` varchar(191)
,`zipcode` varchar(191)
,`vendors_discount` int(11)
,`logo_image` varchar(191)
,`company_reg_number` varchar(191)
,`product_types` varchar(191)
,`status` tinyint(1)
,`size` varchar(191)
,`color` varchar(191)
,`total_quantity` int(11)
,`available_quantity` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(190) NOT NULL,
  `image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `city`, `zipcode`, `contact_number`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$SjiIt2Zmi/PdfB/U5pcP/eHUM0f/eCT9LvgL2cExAdALgo6YpJ9nm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'asif', 'user2@gmail.com', '$2y$10$r74hdav3XmqpjUmdGWq8JusQAdiCR2r7.OMeY9.o0VSOz8hS1qmJm', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-14 05:50:01', '2018-08-14 05:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `logo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_reg_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_types` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `vendor_name`, `contact_number`, `email`, `password`, `website`, `address`, `country`, `zipcode`, `discount`, `logo_image`, `company_reg_number`, `product_types`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mark John', 'Gadget Store', '00985454545', 'vendor1@gmail.com', '$2y$10$3IjB.bTzFgDs0Z1fSNkT7OoaI0zKjG7GCALVBKT6jz/xoBSLyR7f.', 'https://www.gadget-store.com', 'Tokyo', 'Japan', '5412', NULL, 'uploads/vendor/logo/fhDOBRWZJ0rd4AQ7Bn6ShpWNx0vgqxvendor1@gmail.com.jpg', '0', 'Electronics', 1, '2018-06-02 18:18:59', '2018-08-14 01:37:29'),
(2, 'Mike Henry', 'Lyda Fashion', '00988415415445', 'vendor2@gmail.com', '$2y$10$S62Ak5RT8XffpAPYtDzZnuyF3wuu0Ycb/lyEM3hkfUdCQGsIdSvOm', 'https://www.lydafashion.com', 'New York', 'USA', '5487', NULL, 'uploads/vendor/logo/LPilwul17SwzWriVb8pK2jPJKL9tiovendor2@gmail.com.png', '0', 'Clothing', 1, '2018-06-02 18:21:58', '2018-07-13 04:53:43'),
(3, 'Haider', 'dsfsd', '4564', 'vendor3@gmail.com', '$2y$10$wmsA3FU3tRtwJ62ER9LTHOScaudNDFu3zyQXff0RfUJjT4kWGEUzu', 'sdfsfsd', 'dhak', 'b', '54', NULL, 'uploads/vendor/logo/x0lnJ80Lj4S5Mi4MIu3EdlrFpL4DcVvendor3@gmail.com.png', '0', 'Clothing', 1, '2018-07-03 07:03:16', '2018-08-14 05:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `product_with_details`
--
DROP TABLE IF EXISTS `product_with_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_with_details`  AS  select `products`.`id` AS `id`,`products`.`product_name` AS `product_name`,`products`.`product_description` AS `product_description`,`products`.`buying_price` AS `buying_price`,`products`.`selling_price` AS `selling_price`,`products`.`discount` AS `discount`,`products`.`brand` AS `brand`,`products`.`image1` AS `image1`,`products`.`image2` AS `image2`,`products`.`image3` AS `image3`,`products`.`image4` AS `image4`,`products`.`available` AS `available`,`products`.`aamas_status` AS `aamas_status`,`products`.`category_id` AS `category_id`,`products`.`vendor_id` AS `vendor_id`,`products`.`created_at` AS `created_at`,`products`.`updated_at` AS `updated_at`,`categories`.`category_name` AS `category_name`,`categories`.`sub_category` AS `sub_category`,`vendors`.`name` AS `NAME`,`vendors`.`vendor_name` AS `vendor_name`,`vendors`.`contact_number` AS `contact_number`,`vendors`.`website` AS `website`,`vendors`.`address` AS `address`,`vendors`.`country` AS `country`,`vendors`.`zipcode` AS `zipcode`,`vendors`.`discount` AS `vendors_discount`,`vendors`.`logo_image` AS `logo_image`,`vendors`.`company_reg_number` AS `company_reg_number`,`vendors`.`product_types` AS `product_types`,`vendors`.`status` AS `status`,`details`.`size` AS `size`,`details`.`color` AS `color`,`details`.`total_quantity` AS `total_quantity`,`details`.`available_quantity` AS `available_quantity` from (((`products` join `categories` on((`products`.`category_id` = `categories`.`id`))) join `vendors` on((`products`.`vendor_id` = `vendors`.`id`))) join `details` on((`products`.`id` = `details`.`product_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_Id` (`user_Id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_order_id_foreign` (`order_id`),
  ADD KEY `deliveries_user_id_foreign` (`user_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_ibfk_1` (`product_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_products_ibfk_1` (`product_id`);

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
  ADD KEY `orders_product_id_foreign` (`product_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_vendor_id_foreign` (`vendor_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_products`
--
ALTER TABLE `feature_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `details` (`product_id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `deliveries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD CONSTRAINT `feature_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 01:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
(2, 'Clothing', '', '2018-06-03 07:29:16', '2018-06-03 07:29:16');

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
(1, 1, NULL, 'Black', 5, 5, '2018-06-03 07:26:51', '2018-06-03 07:26:51'),
(2, 1, NULL, 'Red', 3, 3, '2018-06-03 07:26:51', '2018-06-03 07:26:51'),
(3, 2, 'M', 'Red', 5, 5, '2018-06-03 07:29:16', '2018-06-03 07:29:16'),
(4, 2, 'S', 'Black', 3, 3, '2018-06-03 07:29:16', '2018-06-03 07:29:16'),
(5, 3, NULL, 'Red', 5, 5, '2018-06-03 07:34:53', '2018-06-03 07:34:53'),
(6, 3, NULL, 'Black', 15, 15, '2018-06-03 07:34:53', '2018-06-03 07:34:53'),
(7, 6, NULL, 'Black', 50, 50, '2018-07-03 07:25:08', '2018-07-03 07:25:08'),
(8, 4, NULL, 'Black', 3, 3, '2018-06-03 07:29:16', '2018-06-03 07:29:16');

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
  `Active` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `current_address`, `parmanent_address`, `contact_number`, `type`, `referenced_by`, `Identity_number`, `Active`, `image`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1, 'Mark Jow', 'hr1@gmail.com', '$2y$10$b8809APlVnzoXXLryHNEwegVLh3BfnNU.a8x7UcJAjN1TYUYNMfNC', 'Dhaka', 'Lalmonirhat', '0098978454545', 'HR', 1, '122345678765432345', 1, NULL, 1, '2018-05-29 06:27:00', '2018-05-29 06:27:00'),
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
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `discount` double NOT NULL,
  `payment_amount` double NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
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
(1, 'iPhone X', 'Apple iPhone X smartphone was launched in September 2017. The phone comes with a 5.80-inch touchscreen display with a resolution of 1125 pixels by 2436 pixels. Apple iPhone X price in India starts from Rs. 77,989*.\r\n\r\nThe Apple iPhone X is powered by hexa-core processor and it comes with 3GB of RAM. The phone packs 64GB of internal storage that cannot be expanded. As far as the cameras are concerned, the Apple iPhone X packs a 12-megapixel primary camera on the rear and a 7-megapixel front shooter for selfies.', 80000, 100000, 5, 'Apple', 'uploads/vendor/product/QiMvJNU0xmpLjM9WnRf2XU7paQMHQN.jpg', 'uploads/vendor/product/lPfilhiDRh0kUX656tgSTyjat740P9.jpg', 'uploads/vendor/product/FlP89Guw9IPe043DLX71nCbOJHKWay.jpg', 'uploads/vendor/product/huGUn6jjGcMMe4tnnGk7XJfw3ZIcI7.jpg', 1, 1, 1, 1, '2018-06-03 01:26:51', '2018-06-03 01:26:51'),
(2, 'Shirt', 'Two before narrow not relied how except moment myself. Dejection assurance mrs led certainly. So gate at no only none open. Betrayed at properly it of graceful on. Dinner abroad am depart ye turned hearts as me wished. Therefore allowance too perfectly gentleman supposing man his now. Families goodness all eat out bed steepest servants. Explained the incommode sir improving northward immediate eat. Man denoting received you sex possible you. Shew park own loud son door less yet.', 800, 1500, 10, 'Shirt House', 'uploads/vendor/product/qcXdwaG5seGOBKK4OHWp8ExIwKB6kF.jpg', 'uploads/vendor/product/dgX0OR6l49jzwHEDLd3W2fx3lA8tzb.jpeg', 'uploads/vendor/product/pZlHzGOygq7K9MbSHwWuUln7N7CGfj.jpg', NULL, 1, 1, 2, 1, '2018-06-03 01:29:16', '2018-06-03 01:29:16'),
(3, 'One Plus 6', 'Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no. Boisterous estimating interested collecting get conviction friendship say boy. Him mrs shy article smiling respect opinion excited. Welcomed humoured rejoiced peculiar to in an.', 35000, 50000, 4, 'One Plus', 'uploads/vendor/product/zxonGUvCkX1WrJ4Mrw5vu8Ts9JDMjc9d248f95c725605887d5284a6529221e63927fdc.jpg', 'uploads/vendor/product/gQRibWd11vdyGQKwwAEhYu4EdWKkHH9d248f95c725605887d5284a6529221e63927fdc.jpg', 'uploads/vendor/product/HJfpsOIN92Nc2xgpmlNlZQAiIfYUWu9d248f95c725605887d5284a6529221e63927fdc.jpg', 'uploads/vendor/product/1FHy9l6V1dReUgfdQB1s4JQMvTiMYP9d248f95c725605887d5284a6529221e63927fdc.jpg', 1, 1, 1, 1, '2018-06-03 01:34:53', '2018-06-03 01:34:53'),
(4, 'hp', 'its a good product', 40000, 50000, 2, 'hp', 'uploads/vendor/product/tI1K7cs6CX0KPmEyJIE8i3pVg74dfI292396b5a5cddf2b61fd979adc6aa19523db599f.jpg', 'uploads/vendor/product/lu8gvGtgl1BjpNasGj6FMaKedTgQjg292396b5a5cddf2b61fd979adc6aa19523db599f.jpg', 'uploads/vendor/product/8G5Vyv7qBfA5sHVoYsp0bcDGa7RXNR292396b5a5cddf2b61fd979adc6aa19523db599f.jpg', 'uploads/vendor/product/WuknhMCwnGY6jjZORNvhTC9jXSLejn292396b5a5cddf2b61fd979adc6aa19523db599f.gif', 1, 1, 1, 1, '2018-06-06 06:02:55', '2018-06-06 06:02:55'),
(5, 'samsung', 'good', 10000, 12000, 5, 'samsung', 'uploads/vendor/product/E3W0WMTLtlJSykcbDk7vaqyYi7wjqGc924c1a277369a760ac4d57fc217f725eafb1dfe.jpg', 'uploads/vendor/product/utuQ3WeA1ftKTrX8GGJrF9jAluUpw2c924c1a277369a760ac4d57fc217f725eafb1dfe.jpg', 'uploads/vendor/product/ZZmpBBNkdZE9ybFq6YXtoDMB2CP6hYc924c1a277369a760ac4d57fc217f725eafb1dfe.jpg', 'uploads/vendor/product/AqhszdifrJdKdaYcEsRoY959Ec7rqwc924c1a277369a760ac4d57fc217f725eafb1dfe.jpg', 1, 1, 1, 1, '2018-06-06 06:52:09', '2018-06-06 06:52:09'),
(6, 'Glass', 'fdsfsdfsd', 500, 800, 4, 'Reabon', 'uploads/vendor/product/y6kSoxjaYjDmvwuEL3Tla8i95DREInbd204cbbb0ce116a85f983c07a76337005a888bb.png', NULL, NULL, NULL, 1, 1, 2, 1, '2018-07-03 07:25:08', '2018-07-03 07:25:08');

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
(1, 'user', 'user@gmail.com', '$2y$10$SjiIt2Zmi/PdfB/U5pcP/eHUM0f/eCT9LvgL2cExAdALgo6YpJ9nm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 'Mark John', 'Gadget Store', '00985454545', 'vendor1@gmail.com', '$2y$10$3IjB.bTzFgDs0Z1fSNkT7OoaI0zKjG7GCALVBKT6jz/xoBSLyR7f.', 'https://www.gadget-store.com', 'Tokyo', 'Japan', '5412', NULL, 'uploads/vendor/logo/fhDOBRWZJ0rd4AQ7Bn6ShpWNx0vgqxvendor1@gmail.com.jpg', '0', 'Electronics', 1, '2018-06-02 18:18:59', '2018-07-13 04:54:09'),
(2, 'Mike Henry', 'Lyda Fashion', '00988415415445', 'vendor2@gmail.com', '$2y$10$S62Ak5RT8XffpAPYtDzZnuyF3wuu0Ycb/lyEM3hkfUdCQGsIdSvOm', 'https://www.lydafashion.com', 'New York', 'USA', '5487', NULL, 'uploads/vendor/logo/LPilwul17SwzWriVb8pK2jPJKL9tiovendor2@gmail.com.png', '0', 'Clothing', 1, '2018-06-02 18:21:58', '2018-07-13 04:53:43'),
(3, 'Haider', 'dsfsd', '4564', 'vendor3@gmail.com', '$2y$10$wmsA3FU3tRtwJ62ER9LTHOScaudNDFu3zyQXff0RfUJjT4kWGEUzu', 'sdfsfsd', 'dhak', 'b', '54', NULL, 'uploads/vendor/logo/x0lnJ80Lj4S5Mi4MIu3EdlrFpL4DcVvendor3@gmail.com.png', '0', 'Clothing', 1, '2018-07-03 07:03:16', '2018-07-13 04:54:10');

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
  ADD KEY `product_id` (`product_id`);

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
  ADD KEY `product_id` (`product_id`);

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
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_vendor_id_foreign` (`vendor_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_products`
--
ALTER TABLE `feature_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD CONSTRAINT `feature_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

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
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
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

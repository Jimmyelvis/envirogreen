-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 10:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enviro-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'For Sale', NULL, NULL),
(2, 'For Rent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Springfield', '2018-05-17 06:00:20', '2018-05-17 06:00:20'),
(2, 'Agawam', '2018-05-17 06:00:54', '2018-05-17 06:00:54'),
(3, 'East  Longmeadow', '2018-05-17 06:01:19', '2018-05-17 06:01:19'),
(4, 'Longmeadow', '2018-05-17 06:01:34', '2018-05-17 06:01:34'),
(5, 'Chicopee', '2018-05-17 06:01:48', '2018-05-17 06:01:48'),
(6, 'Granby', '2018-05-17 06:01:57', '2018-05-17 06:01:57'),
(7, 'Granby', '2018-05-17 06:02:38', '2018-05-17 06:02:38'),
(8, 'Avon', '2018-05-17 06:02:50', '2018-05-17 06:02:50'),
(9, 'Enfield', '2018-05-17 06:02:57', '2018-05-17 06:02:57'),
(10, 'Sommers', '2018-05-17 06:03:09', '2018-05-17 06:03:09'),
(11, 'Sufield', '2018-05-17 06:03:22', '2018-05-17 06:03:22'),
(12, 'Westfield', '2018-05-17 06:03:38', '2018-05-17 06:03:38'),
(13, 'West Springfield', '2018-05-17 06:03:48', '2018-05-17 06:03:48'),
(14, 'Pittsfield', '2018-05-17 06:04:14', '2018-05-17 06:04:14'),
(15, 'Greenfield', '2018-05-17 06:04:33', '2018-05-17 06:04:33'),
(16, 'Brattleboro', '2018-05-17 06:05:15', '2018-05-17 06:05:15'),
(17, 'East Windsor', '2018-05-17 06:05:36', '2018-05-17 06:05:36'),
(18, 'Manchester', '2018-05-17 06:07:56', '2018-05-17 06:07:56'),
(19, 'Bloomfield', '2018-05-17 06:08:54', '2018-05-17 06:08:54'),
(20, 'Monson', '2018-05-17 06:09:06', '2018-05-17 06:09:06'),
(21, 'Wibraham', '2018-05-17 06:09:18', '2018-05-17 06:09:18'),
(22, 'Warren', '2018-05-17 06:34:35', '2018-05-17 06:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `extra_photo_fours`
--

CREATE TABLE `extra_photo_fours` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extra_photo_fours`
--

INSERT INTO `extra_photo_fours` (`id`, `file`, `created_at`, `updated_at`) VALUES
(28, '1522460183pexels-photo-280208.jpg', '2018-03-31 06:36:23', '2018-03-31 06:36:23'),
(29, '1522460535pexels-photo-709767.png', '2018-03-31 06:42:15', '2018-03-31 06:42:15'),
(30, '1522460785pexels-photo-265004.jpeg', '2018-03-31 06:46:25', '2018-03-31 06:46:25'),
(31, '1522460941pexels-photo-271624.jpg', '2018-03-31 06:49:01', '2018-03-31 06:49:01'),
(32, '1522461134pexels-photo-276653.jpeg', '2018-03-31 06:52:14', '2018-03-31 06:52:14'),
(33, '1522461277pexels-photo-77931.jpeg', '2018-03-31 06:54:37', '2018-03-31 06:54:37'),
(34, '1522785654pexels-photo-273669.jpeg', '2018-04-04 01:00:54', '2018-04-04 01:00:54'),
(35, '1522788571pexels-photo-276551.jpeg', '2018-04-04 01:49:31', '2018-04-04 01:49:31'),
(36, '1522788677pexels-photo-279719.jpg', '2018-04-04 01:51:17', '2018-04-04 01:51:17'),
(37, '1526257734pexels-photo-271618.jpg', '2018-05-14 05:28:54', '2018-05-14 05:28:54'),
(38, '1526257861pexels-photo-276551.jpeg', '2018-05-14 05:31:01', '2018-05-14 05:31:01'),
(39, '1526257996pexels-photo-273843.jpg', '2018-05-14 05:33:16', '2018-05-14 05:33:16'),
(40, '1526519762pexels-photo-263189.jpeg', '2018-05-17 06:16:02', '2018-05-17 06:16:02'),
(41, '1526519937pexels-photo-271753.jpeg', '2018-05-17 06:18:57', '2018-05-17 06:18:57'),
(42, '1526520079pexels-photo-257344.jpeg', '2018-05-17 06:21:19', '2018-05-17 06:21:19'),
(43, '1526522366pexels-photo-271722.jpg', '2018-05-17 06:59:26', '2018-05-17 06:59:26'),
(44, '1526522488pexels-photo-276508.jpg', '2018-05-17 07:01:28', '2018-05-17 07:01:28'),
(45, '1526522618pexels-photo-276551.jpeg', '2018-05-17 07:03:38', '2018-05-17 07:03:38'),
(46, '1526522809pexels-photo-276700.jpeg', '2018-05-17 07:06:49', '2018-05-17 07:06:49'),
(47, '1526523218pexels-photo-276511.jpg', '2018-05-17 07:13:38', '2018-05-17 07:13:38'),
(48, '1526523393pexels-photo-276724.jpeg', '2018-05-17 07:16:33', '2018-05-17 07:16:33'),
(49, '1526523545pexels-photo-709767.png', '2018-05-17 07:19:05', '2018-05-17 07:19:05'),
(50, '1526523820pexels-photo-279607.jpeg', '2018-05-17 07:23:40', '2018-05-17 07:23:40'),
(51, '1526524107pexels-photo-276715.jpeg', '2018-05-17 07:28:27', '2018-05-17 07:28:27'),
(52, '1526524294pexels-photo-342800.jpg', '2018-05-17 07:31:34', '2018-05-17 07:31:34'),
(53, '1526524449pexels-photo-545046.jpg', '2018-05-17 07:34:09', '2018-05-17 07:34:09'),
(54, '1526524609pexels-photo-279719.jpg', '2018-05-17 07:36:49', '2018-05-17 07:36:49'),
(55, '1526524856pexels-photo-276551.jpeg', '2018-05-17 07:40:56', '2018-05-17 07:40:56'),
(56, '1526525131pexels-photo-279607.jpeg', '2018-05-17 07:45:31', '2018-05-17 07:45:31'),
(57, '1526525357pexels-photo-276554.jpg', '2018-05-17 07:49:17', '2018-05-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `extra_photo_ones`
--

CREATE TABLE `extra_photo_ones` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extra_photo_ones`
--

INSERT INTO `extra_photo_ones` (`id`, `file`, `created_at`, `updated_at`) VALUES
(42, '1522460183kitchen-stove-sink-kitchen-counter-349749.jpg', '2018-03-31 06:36:23', '2018-03-31 06:36:23'),
(43, '1522460535pexels-photo-275484.jpeg', '2018-03-31 06:42:15', '2018-03-31 06:42:15'),
(44, '1522460785pexels-photo-121668.jpg', '2018-03-31 06:46:25', '2018-03-31 06:46:25'),
(45, '1522460941pexels-photo-106936.jpeg', '2018-03-31 06:49:01', '2018-03-31 06:49:01'),
(46, '1522461134pexels-photo-210265.jpg', '2018-03-31 06:52:14', '2018-03-31 06:52:14'),
(47, '1522461277pexels-photo-210265.jpg', '2018-03-31 06:54:37', '2018-03-31 06:54:37'),
(48, '1522785654pexels-photo-238377.jpeg', '2018-04-04 01:00:54', '2018-04-04 01:00:54'),
(49, '1522788571kitchen-stove-sink-kitchen-counter-349749.jpg', '2018-04-04 01:49:31', '2018-04-04 01:49:31'),
(50, '1522788677pexels-photo-276625.jpg', '2018-04-04 01:51:17', '2018-04-04 01:51:17'),
(51, '1526257734living-room-couch-interior-room-584399.jpeg', '2018-05-14 05:28:54', '2018-05-14 05:28:54'),
(52, '1526257860pexels-photo-271696.jpg', '2018-05-14 05:31:01', '2018-05-14 05:31:01'),
(53, '1526257996pexels-photo-271696.jpg', '2018-05-14 05:33:16', '2018-05-14 05:33:16'),
(54, '1526519762pexels-photo-189333.jpeg', '2018-05-17 06:16:02', '2018-05-17 06:16:02'),
(55, '1526519937kitchen-stove-sink-kitchen-counter-349749.jpg', '2018-05-17 06:18:57', '2018-05-17 06:18:57'),
(56, '1526520079pexels-photo-271696.jpg', '2018-05-17 06:21:19', '2018-05-17 06:21:19'),
(57, '1526522366pexels-photo-271654.jpeg', '2018-05-17 06:59:26', '2018-05-17 06:59:26'),
(58, '1526522488pexels-photo-269218.jpeg', '2018-05-17 07:01:28', '2018-05-17 07:01:28'),
(59, '1526522618pexels-photo-273669.jpeg', '2018-05-17 07:03:38', '2018-05-17 07:03:38'),
(60, '1526522809pexels-photo-276554.jpg', '2018-05-17 07:06:49', '2018-05-17 07:06:49'),
(61, '1526523217pexels-photo-210265.jpg', '2018-05-17 07:13:37', '2018-05-17 07:13:37'),
(62, '1526523393pexels-photo-273669.jpeg', '2018-05-17 07:16:33', '2018-05-17 07:16:33'),
(63, '1526523545pexels-photo-276700.jpeg', '2018-05-17 07:19:05', '2018-05-17 07:19:05'),
(64, '1526523820pexels-photo-271618.jpg', '2018-05-17 07:23:40', '2018-05-17 07:23:40'),
(65, '1526524107kitchen-stove-sink-kitchen-counter-349749.jpg', '2018-05-17 07:28:27', '2018-05-17 07:28:27'),
(66, '1526524294pexels-photo-276715.jpeg', '2018-05-17 07:31:34', '2018-05-17 07:31:34'),
(67, '1526524449pexels-photo-276724.jpeg', '2018-05-17 07:34:09', '2018-05-17 07:34:09'),
(68, '1526524609pexels-photo-262048.jpg', '2018-05-17 07:36:49', '2018-05-17 07:36:49'),
(69, '1526524856pexels-photo-261410.jpeg', '2018-05-17 07:40:56', '2018-05-17 07:40:56'),
(70, '1526525131pexels-photo-271618.jpg', '2018-05-17 07:45:31', '2018-05-17 07:45:31'),
(71, '1526525357pexels-photo-265004.jpeg', '2018-05-17 07:49:17', '2018-05-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `extra_photo_threes`
--

CREATE TABLE `extra_photo_threes` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extra_photo_threes`
--

INSERT INTO `extra_photo_threes` (`id`, `file`, `created_at`, `updated_at`) VALUES
(26, '1522453916pexels-photo-269218.jpeg', '2018-03-31 04:51:56', '2018-03-31 04:51:56'),
(27, '1522454874pexels-photo-257344.jpeg', '2018-03-31 05:07:54', '2018-03-31 05:07:54'),
(28, '1522460183pexels-photo-545034.jpg', '2018-03-31 06:36:23', '2018-03-31 06:36:23'),
(29, '1522460535pexels-photo-276583.jpeg', '2018-03-31 06:42:15', '2018-03-31 06:42:15'),
(30, '1522460785pexels-photo-238377.jpeg', '2018-03-31 06:46:25', '2018-03-31 06:46:25'),
(31, '1522460941pexels-photo-271632.jpg', '2018-03-31 06:49:01', '2018-03-31 06:49:01'),
(32, '1522461134pexels-photo-273843.jpg', '2018-03-31 06:52:14', '2018-03-31 06:52:14'),
(33, '1522461277pexels-photo-271795.jpeg', '2018-03-31 06:54:37', '2018-03-31 06:54:37'),
(34, '1522785654pexels-photo-271618.jpg', '2018-04-04 01:00:54', '2018-04-04 01:00:54'),
(35, '1522788571pexels-photo-271816.jpeg', '2018-04-04 01:49:31', '2018-04-04 01:49:31'),
(36, '1522788677pexels-photo-280239.jpg', '2018-04-04 01:51:17', '2018-04-04 01:51:17'),
(37, '1526257734pexels-photo-261045.jpg', '2018-05-14 05:28:54', '2018-05-14 05:28:54'),
(38, '1526257861pexels-photo-276677.jpeg', '2018-05-14 05:31:01', '2018-05-14 05:31:01'),
(39, '1526257996pexels-photo-265004.jpeg', '2018-05-14 05:33:16', '2018-05-14 05:33:16'),
(40, '1526519762pexels-photo-271632.jpg', '2018-05-17 06:16:02', '2018-05-17 06:16:02'),
(41, '1526519937pexels-photo-269262.jpg', '2018-05-17 06:18:57', '2018-05-17 06:18:57'),
(42, '1526520079pexels-photo-273822.jpeg', '2018-05-17 06:21:19', '2018-05-17 06:21:19'),
(43, '1526522366pexels-photo-271654.jpeg', '2018-05-17 06:59:26', '2018-05-17 06:59:26'),
(44, '1526522488pexels-photo-276583.jpeg', '2018-05-17 07:01:28', '2018-05-17 07:01:28'),
(45, '1526522618pexels-photo-189333.jpeg', '2018-05-17 07:03:38', '2018-05-17 07:03:38'),
(46, '1526522809pexels-photo-121668.jpg', '2018-05-17 07:06:49', '2018-05-17 07:06:49'),
(47, '1526523217pexels-photo-271816.jpeg', '2018-05-17 07:13:37', '2018-05-17 07:13:37'),
(48, '1526523393pexels-photo-276625.jpg', '2018-05-17 07:16:33', '2018-05-17 07:16:33'),
(49, '1526523545pexels-photo-309724.jpg', '2018-05-17 07:19:05', '2018-05-17 07:19:05'),
(50, '1526523820pexels-photo-238377.jpeg', '2018-05-17 07:23:40', '2018-05-17 07:23:40'),
(51, '1526524107pexels-photo-121668.jpg', '2018-05-17 07:28:27', '2018-05-17 07:28:27'),
(52, '1526524294pexels-photo-271753.jpeg', '2018-05-17 07:31:34', '2018-05-17 07:31:34'),
(53, '1526524449pexels-photo-545034.jpg', '2018-05-17 07:34:09', '2018-05-17 07:34:09'),
(54, '1526524609pexels-photo-269218.jpeg', '2018-05-17 07:36:49', '2018-05-17 07:36:49'),
(55, '1526524856pexels-photo-271632.jpg', '2018-05-17 07:40:56', '2018-05-17 07:40:56'),
(56, '1526525131pexels-photo-271696.jpg', '2018-05-17 07:45:31', '2018-05-17 07:45:31'),
(57, '1526525357pexels-photo-238377.jpeg', '2018-05-17 07:49:17', '2018-05-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `extra_photo_twos`
--

CREATE TABLE `extra_photo_twos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extra_photo_twos`
--

INSERT INTO `extra_photo_twos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(34, '1522460183pexels-photo-276508.jpg', '2018-03-31 06:36:23', '2018-03-31 06:36:23'),
(35, '1522460535pexels-photo-276551.jpeg', '2018-03-31 06:42:15', '2018-03-31 06:42:15'),
(36, '1522460785pexels-photo-261410.jpeg', '2018-03-31 06:46:25', '2018-03-31 06:46:25'),
(37, '1522460941pexels-photo-269218.jpeg', '2018-03-31 06:49:01', '2018-03-31 06:49:01'),
(38, '1522461134living-room-couch-interior-room-584399.jpeg', '2018-03-31 06:52:14', '2018-03-31 06:52:14'),
(39, '1522461277pexels-photo-257344.jpeg', '2018-03-31 06:54:37', '2018-03-31 06:54:37'),
(40, '1522785654pexels-photo-106936.jpeg', '2018-04-04 01:00:54', '2018-04-04 01:00:54'),
(41, '1522788571pexels-photo-271654.jpeg', '2018-04-04 01:49:31', '2018-04-04 01:49:31'),
(42, '1522788677pexels-photo-276653.jpeg', '2018-04-04 01:51:17', '2018-04-04 01:51:17'),
(43, '1526257734pexels-photo-259962.jpg', '2018-05-14 05:28:54', '2018-05-14 05:28:54'),
(44, '1526257861pexels-photo-273669.jpeg', '2018-05-14 05:31:01', '2018-05-14 05:31:01'),
(45, '1526257996pexels-photo-269262.jpg', '2018-05-14 05:33:16', '2018-05-14 05:33:16'),
(46, '1526519762pexels-photo-210552.jpeg', '2018-05-17 06:16:02', '2018-05-17 06:16:02'),
(47, '1526519937pexels-photo-77931.jpeg', '2018-05-17 06:18:57', '2018-05-17 06:18:57'),
(48, '1526520079pexels-photo-261410.jpeg', '2018-05-17 06:21:19', '2018-05-17 06:21:19'),
(49, '1526522366pexels-photo-238377.jpeg', '2018-05-17 06:59:26', '2018-05-17 06:59:26'),
(50, '1526522488pexels-photo-265004.jpeg', '2018-05-17 07:01:28', '2018-05-17 07:01:28'),
(51, '1526522618pexels-photo-265004.jpeg', '2018-05-17 07:03:38', '2018-05-17 07:03:38'),
(52, '1526522809living-room-couch-interior-room-584399.jpeg', '2018-05-17 07:06:49', '2018-05-17 07:06:49'),
(53, '1526523217pexels-photo-273822.jpeg', '2018-05-17 07:13:37', '2018-05-17 07:13:37'),
(54, '1526523393pexels-photo-271618.jpg', '2018-05-17 07:16:33', '2018-05-17 07:16:33'),
(55, '1526523545pexels-photo-238377.jpeg', '2018-05-17 07:19:05', '2018-05-17 07:19:05'),
(56, '1526523820pexels-photo-265004.jpeg', '2018-05-17 07:23:40', '2018-05-17 07:23:40'),
(57, '1526524107pexels-photo-77931.jpeg', '2018-05-17 07:28:27', '2018-05-17 07:28:27'),
(58, '1526524294pexels-photo-271795.jpeg', '2018-05-17 07:31:34', '2018-05-17 07:31:34'),
(59, '1526524449pexels-photo-238377.jpeg', '2018-05-17 07:34:09', '2018-05-17 07:34:09'),
(60, '1526524609pexels-photo-238377.jpeg', '2018-05-17 07:36:49', '2018-05-17 07:36:49'),
(61, '1526524856pexels-photo-261045.jpg', '2018-05-17 07:40:56', '2018-05-17 07:40:56'),
(62, '1526525131pexels-photo-189333.jpeg', '2018-05-17 07:45:31', '2018-05-17 07:45:31'),
(63, '1526525357pexels-photo-210552.jpeg', '2018-05-17 07:49:17', '2018-05-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `beds` int(10) UNSIGNED NOT NULL,
  `baths` int(10) UNSIGNED NOT NULL,
  `sqft` int(10) UNSIGNED NOT NULL,
  `fullpic_id` int(10) UNSIGNED NOT NULL,
  `extrapicone_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extrapictwo_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extrapicthree_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extrapicfour_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `descrip` text COLLATE utf8_unicode_ci NOT NULL,
  `feat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `category_id`, `street`, `city_id`, `state_id`, `price`, `beds`, `baths`, `sqft`, `fullpic_id`, `extrapicone_id`, `extrapictwo_id`, `extrapicthree_id`, `extrapicfour_id`, `user_id`, `descrip`, `feat_id`, `created_at`, `updated_at`) VALUES
(1, 1, '24 Moonlight Drive', 1, 21, 300000, 5, 1, 3000, 77, '54', '46', '40', '40', 9, 'Elegant custom home offers unparalleled craftsmanship and exceptional \r\namenities! This French-inspired design is truly remarkable inside and out. \r\nFeatures include cherry cabinets, quartz countertops, crown molding, custom \r\nwindows provide plenty of natural lighting, expansive decking (1000 sq. ft.), \r\ngourmet kitchen with island (great for entertaining), gorgeous master suite, \r\nden, storage, plus STUNNING views ', 0, '2018-05-17 06:16:02', '2018-05-17 06:16:02'),
(2, 1, '59 Blue Moon Road', 2, 21, 350000, 6, 2, 4000, 78, '55', '47', '41', '41', 10, 'Masterful design and modern luxury are uniquely embodied in this 4 \r\nbedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace \r\natop Sky Lofts Condominium. This one-of-a-kind glass house, created by New \r\nYork architect James Carpenter who designed 7 World Trade Center, is \r\nsheathed in high-performance, museum-quality insulated glass atop an \r\nhistoric Art Deco loft building in the heart of Tribeca. The sun and \r\ntemperature-controlled glass envelope of its 7500 SF interior was tastefully \r\ndesigned with the top art collector in mind. Unobstructed 360 views from \r\nthis penthouse are truly unparalleled, and include vistas of the Freedom \r\nTower, Empire State Building and Hudson River.', 0, '2018-05-17 06:18:57', '2018-05-17 06:18:57'),
(3, 1, '1969 Sunnyvale Road', 4, 21, 450000, 7, 3, 4000, 79, '56', '48', '42', '42', 11, 'Living is easy in this impressive, generously spacious residence with Delta \r\nviews and access.\r\n\r\nThe open floor plan encompasses four spacious bedrooms with plenty of \r\nroom for study, sleep and storage, four and a half luxurious bathrooms, and a \r\nsleek and stylish gourmet kitchen that flows through to the dining room.  The \r\nexpansive living room opens up to a spacious rear patio with pool and spa and \r\nprivate boat dock on San Joaquin Delta. The master bedroom, complete with \r\nwalk-in closet and ensuite, ensures parents have a private space where they \r\ncan enjoy the Delta views on their private balcony.\r\n\r\nPerfect for anyone, this home is ideally positioned to enjoy summers on the \r\nDelta.  Truly resort style living in Brookside Country Club Estates.', 0, '2018-05-17 06:21:19', '2018-05-17 06:21:19'),
(4, 1, '73 Darkville Ave', 5, 21, 140000, 4, 1, 2000, 80, '57', '49', '43', '43', 12, 'This immaculate, professionally-designed 2-story condo with a private deck \r\nand patio invites comfort, and exudes modern elegance. With 2 bedrooms, 2 \r\nand a half baths, generous living space and stylish finishes, you\'ll enjoy a \r\nperfect setting for relaxing and entertaining.\r\n\r\nBeautiful mahogany hardwood floors and plenty of natural night flow \r\nthroughout the home\'s open, airy layout. Other special highlights include a \r\ncharming gas fireplace, rich exposed brick, chic recessed lighting and ceiling \r\nfans, a Kenmore Elite washer/dryer, marble baths, tons of storage space, and \r\nready-for-cable wiring in all rooms.', 0, '2018-05-17 06:59:26', '2018-05-17 06:59:26'),
(5, 1, '488 Mountain Way', 6, 7, 103000, 4, 1, 3000, 81, '58', '50', '44', '44', 11, 'This immaculate, professionally-designed 2-story condo with a private deck \r\nand patio invites comfort, and exudes modern elegance. With 2 bedrooms, 2 \r\nand a half baths, generous living space and stylish finishes, you\'ll enjoy a \r\nperfect setting for relaxing and entertaining.\r\n\r\nBeautiful mahogany hardwood floors and plenty of natural night flow \r\nthroughout the home\'s open, airy layout. Other special highlights include a \r\ncharming gas fireplace, rich exposed brick, chic recessed lighting and ceiling \r\nfans, a Kenmore Elite washer/dryer, marble baths, tons of storage space, and \r\nready-for-cable wiring in all rooms.', 0, '2018-05-17 07:01:28', '2018-05-17 07:01:28'),
(6, 1, '669 Blue Ocean Drive', 10, 7, 400000, 8, 3, 4000, 82, '59', '51', '45', '45', 10, 'Living is easy in this impressive, generously spacious residence with Delta \r\nviews and access.\r\n\r\nThe open floor plan encompasses four spacious bedrooms with plenty of \r\nroom for study, sleep and storage, four and a half luxurious bathrooms, and a \r\nsleek and stylish gourmet kitchen that flows through to the dining room.  The \r\nexpansive living room opens up to a spacious rear patio with pool and spa and \r\nprivate boat dock on San Joaquin Delta. The master bedroom, complete with \r\nwalk-in closet and ensuite, ensures parents have a private space where they \r\ncan enjoy the Delta views on their private balcony.', 0, '2018-05-17 07:03:38', '2018-05-17 07:03:38'),
(7, 1, '56 Morning Breeze Street', 17, 7, 300000, 5, 2, 3000, 83, '60', '52', '46', '46', 10, 'Paradise at The Point! This luxurious 5 bedroom 4.5 bath Dienst-built estate on \r\nthe Lake Norman peninsula is a dream home in a high-end community that\'s \r\nhome to Trump National Golf Club. Spanning over 4900 SF, this magnificent \r\nwaterfront residence graced by soaring ceilings and wall-to-wall windows is a \r\nhaven for gazing at Lake Norman views from multiple vantage points. The grand \r\nentryway with a sweeping staircase draws you into a voluminous layout made \r\nfor entertaining. ', 0, '2018-05-17 07:06:49', '2018-05-17 07:06:49'),
(8, 1, '34 Greensville Road', 16, 45, 230000, 4, 1, 3000, 84, '61', '53', '47', '47', 9, 'It won’t be easy to click out of holiday mode in this stylishly contemporary \r\nresidence for the modern pleasure-seeker.\r\n\r\nCool, calm and sophisticated with a youthful edge, this functional home is \r\nenveloped in light and comfort. Crisp white walls, timber floors and high \r\nceilings create a style as timeless as the sparkling ocean view. The calming sea \r\nvista, captured through the extensive use of glass, will help you forget your \r\ncity stress.\r\n\r\nThis house screams ‘designer’ and will reflect the personality and taste of \r\nthose accustomed to the best in quality design, finishes and lifestyle', 0, '2018-05-17 07:13:38', '2018-05-17 07:13:38'),
(9, 1, '718 White Clouds Ave', 17, 7, 300000, 5, 2, 3000, 85, '62', '54', '48', '48', 13, 'This immaculately presented apartment is set amongst manicured grounds \r\nwithin a private and secure complex. As a resident you will have access to \r\nlifestyle amenities including a lap pool, gymnasium, communal terraces, \r\nconcierge service and basement parking.\r\n\r\nThe floorplan incorporates 2 bedrooms, the main with built-in robe and \r\nensuite, a study nook, modern kitchen with quality appliances, luxurious \r\nbathroom, a cleverly concealed laundry and a spacious living/dining area. The \r\ngenerously proportioned interior flows effortlessly from the open-plan living \r\nspace to the private covered balcony from which you can admire the views of \r\nthe garden and beyond.\r\n\r\nWith its warm sense of community, and only moments to shops, eateries and \r\ntransport this home provides all the elements for relaxing, comfortable and \r\neasycare living.', 0, '2018-05-17 07:16:33', '2018-05-17 07:16:33'),
(10, 1, '45 Forest Drive', 2, 21, 163000, 3, 1, 2000, 86, '63', '55', '49', '49', 7, 'This cozy cottage is nestled against a spectacular coastal backdrop with an \r\nunbroken view of the sea and a faraway coastline. With an environmentally \r\nconscious design that maximizes home efficiency, this spectacular, modern \r\nfamily home provides plenty of space for entertaining. This truly is a dream \r\nabode for the growing family.', 0, '2018-05-17 07:19:05', '2018-05-17 07:19:05'),
(11, 1, '889 Woodsy Street', 1, 21, 180000, 3, 1, 2500, 88, '64', '56', '50', '50', 4, 'Embrace the spirit of DIY with this original cottage occupying a peaceful street \r\nposition. This charming weatherboard home features 3 roomy bedrooms and \r\nbright, open living spaces.\r\n\r\nThere’s plenty of potential for the savvy investor or first home buyer.', 0, '2018-05-17 07:23:40', '2018-05-17 07:24:28'),
(12, 1, '1645 Peachville Drive', 2, 21, 240500, 5, 1, 2300, 89, '65', '57', '51', '51', 6, 'The living is easy in this impressive, generously proportioned contemporary \r\nresidence with lake and ocean views, located within a level stroll to the sand \r\nand surf.\r\n\r\nThe floor plan encompasses four spacious bedrooms with plenty of room for \r\nstudy, sleep and storage, three luxurious bathrooms, and a sleek and stylish \r\nkitchen that flows through to the dining room and private rear patio. The \r\nmaster bedroom, complete with walk-in robe and ensuite, ensures parents \r\nhave a private space where they can enjoy the view.\r\n\r\nPerfect for a family or as a holiday retreat, this home is ideally positioned to \r\nenjoy the proximity to beaches, cafes and restaurants, shopping centre, and a \r\nselection of premier schools.', 0, '2018-05-17 07:28:27', '2018-05-17 07:28:27'),
(13, 1, '90 Granite Ave', 3, 21, 250000, 5, 1, 3000, 90, '66', '58', '52', '52', 12, 'The living is easy in this impressive, generously proportioned contemporary \r\nresidence with lake and ocean views, located within a level stroll to the sand \r\nand surf.\r\n\r\nThe floor plan encompasses four spacious bedrooms with plenty of room for \r\nstudy, sleep and storage, three luxurious bathrooms, and a sleek and stylish \r\nkitchen that flows through to the dining room and private rear patio. The \r\nmaster bedroom, complete with walk-in robe and ensuite, ensures parents \r\nhave a private space where they can enjoy the view.\r\n\r\nPerfect for a family or as a holiday retreat, this home is ideally positioned to \r\nenjoy the proximity to beaches, cafes and restaurants, shopping centre, and a \r\nselection of premier schools.', 0, '2018-05-17 07:31:34', '2018-05-17 07:31:34'),
(14, 1, '1968 Rocky Hill Road', 9, 7, 180000, 4, 1, 2000, 91, '67', '59', '53', '53', 9, 'The living is easy in this impressive, generously proportioned contemporary \r\nresidence with lake and ocean views, located within a level stroll to the sand \r\nand surf.\r\n\r\nThe floor plan encompasses four spacious bedrooms with plenty of room for \r\nstudy, sleep and storage, three luxurious bathrooms, and a sleek and stylish \r\nkitchen that flows through to the dining room and private rear patio. The \r\nmaster bedroom, complete with walk-in robe and ensuite, ensures parents \r\nhave a private space where they can enjoy the view.\r\n\r\nPerfect for a family or as a holiday retreat, this home is ideally positioned to \r\nenjoy the proximity to beaches, cafes and restaurants, shopping centre, and a \r\nselection of premier schools.', 0, '2018-05-17 07:34:09', '2018-05-17 07:34:09'),
(15, 1, '1969 Breezy Way', 12, 21, 330000, 5, 2, 4500, 92, '68', '60', '54', '54', 13, 'The living is easy in this impressive, generously proportioned contemporary \r\nresidence with lake and ocean views, located within a level stroll to the sand \r\nand surf.\r\n\r\nThe floor plan encompasses four spacious bedrooms with plenty of room for \r\nstudy, sleep and storage, three luxurious bathrooms, and a sleek and stylish \r\nkitchen that flows through to the dining room and private rear patio. The \r\nmaster bedroom, complete with walk-in robe and ensuite, ensures parents \r\nhave a private space where they can enjoy the view.\r\n\r\nPerfect for a family or as a holiday retreat, this home is ideally positioned to \r\nenjoy the proximity to beaches, cafes and restaurants, shopping centre, and a \r\nselection of premier schools.', 0, '2018-05-17 07:36:49', '2018-05-17 07:36:49'),
(16, 1, '68 Winter Drive', 18, 7, 465000, 7, 3, 4500, 93, '69', '61', '55', '55', 10, 'This immaculately presented apartment is set amongst manicured grounds \r\nwithin a private and secure complex. As a resident you will have access to \r\nlifestyle amenities including a lap pool, gymnasium, communal terraces, \r\nconcierge service and basement parking.\r\n\r\nThe floorplan incorporates 2 bedrooms, the main with built-in robe and \r\nensuite, a study nook, modern kitchen with quality appliances, luxurious \r\nbathroom, a cleverly concealed laundry and a spacious living/dining area. The \r\ngenerously proportioned interior flows effortlessly from the open-plan living \r\nspace to the private covered balcony from which you can admire the views of \r\nthe garden and beyond.\r\n\r\nWith its warm sense of community, and only moments to shops, eateries and \r\ntransport this home provides all the elements for relaxing, comfortable and \r\neasycare living', 0, '2018-05-17 07:40:56', '2018-05-17 07:40:56'),
(17, 1, '1071 Floral Street', 2, 21, 270600, 5, 1, 3200, 94, '70', '62', '56', '56', 6, 'This cozy cottage is nestled against a spectacular coastal backdrop with an \r\nunbroken view of the sea and a faraway coastline. With an environmentally \r\nconscious design that maximizes home efficiency, this spectacular, modern \r\nfamily home provides plenty of space for entertaining. This truly is a dream \r\nabode for the growing family.', 0, '2018-05-17 07:45:31', '2018-05-17 07:45:31'),
(18, 1, '545 Lightning Circle', 7, 21, 251000, 4, 1, 3000, 95, '71', '63', '57', '57', 12, 'Embrace the spirit of DIY with this original cottage occupying a peaceful street \r\nposition. This charming weatherboard home features 3 roomy bedrooms and \r\nbright, open living spaces.\r\n\r\nThere’s plenty of potential for the savvy investor or first home buyer.', 0, '2018-05-17 07:49:17', '2018-05-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 2),
('2017_12_30_015856_create_posts_table', 3),
('2018_01_03_013953_create_categories_table', 3),
('2018_01_18_195525_add_slug_column', 3),
('2018_02_18_193437_create_roles_table', 3),
('2018_03_06_034118_create_photoStaff_table', 3),
('2018_03_06_034156_create_photoListing_table', 3),
('2018_03_06_035435_create_positions_table', 3),
('2018_03_06_035531_create_listings_table', 3),
('2018_03_12_234943_create_extra_photo_ones_table', 4),
('2018_03_12_235001_create_extra_photo_twos_table', 4),
('2018_03_12_235010_create_extra_photo_threes_table', 4),
('2018_03_12_235021_create_extra_photo_fours_table', 4),
('2018_03_13_235355_create_states_table', 5),
('2018_05_15_222344_create_cities_table', 6),
('2018_05_15_225033_add_state_column_to_cities_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL),
(2, '', NULL, NULL),
(3, '152045505615150332010003-m9218939_1416710617721.jpg', '2018-03-08 01:37:36', '2018-03-08 01:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `photo_listings`
--

CREATE TABLE `photo_listings` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `photo_listings`
--

INSERT INTO `photo_listings` (`id`, `file`, `created_at`, `updated_at`) VALUES
(65, '1522460183pexels-photo-164516.jpg', '2018-03-31 06:36:23', '2018-03-31 06:36:23'),
(66, '1522460535pexels-photo-210617.jpg', '2018-03-31 06:42:15', '2018-03-31 06:42:15'),
(67, '1522460785pexels-photo-140511.jpeg', '2018-03-31 06:46:25', '2018-03-31 06:46:25'),
(68, '1522460941pexels-photo-210617.jpg', '2018-03-31 06:49:01', '2018-03-31 06:49:01'),
(69, '1522461134pexels-photo-534184.jpg', '2018-03-31 06:52:14', '2018-03-31 06:52:14'),
(70, '1522461277pexels-photo-139115.jpeg', '2018-03-31 06:54:37', '2018-03-31 06:54:37'),
(71, '1522785654pexels-photo-259098.jpg', '2018-04-04 01:00:54', '2018-04-04 01:00:54'),
(72, '1522788571pexels-photo-139115.jpeg', '2018-04-04 01:49:31', '2018-04-04 01:49:31'),
(73, '1522788677pexels-photo-209296.jpg', '2018-04-04 01:51:17', '2018-04-04 01:51:17'),
(74, '1526257734pexels-photo-206172.jpeg', '2018-05-14 05:28:54', '2018-05-14 05:28:54'),
(75, '1526257860pexels-photo-259646.jpg', '2018-05-14 05:31:00', '2018-05-14 05:31:00'),
(76, '1526257996pexels-photo-221024_1.jpg', '2018-05-14 05:33:16', '2018-05-14 05:33:16'),
(77, '1526519761pexels-photo-164539.jpeg', '2018-05-17 06:16:02', '2018-05-17 06:16:02'),
(78, '1526519937pexels-photo-164558.jpg', '2018-05-17 06:18:57', '2018-05-17 06:18:57'),
(79, '1526520079pexels-photo-259751.jpeg', '2018-05-17 06:21:19', '2018-05-17 06:21:19'),
(80, '1526522366pexels-photo-534184.jpg', '2018-05-17 06:59:26', '2018-05-17 06:59:26'),
(81, '1526522488pexels-photo-221024.jpg', '2018-05-17 07:01:28', '2018-05-17 07:01:28'),
(82, '1526522618large-home-residential-house-architecture-53610.jpeg', '2018-05-17 07:03:38', '2018-05-17 07:03:38'),
(83, '1526522809pexels-photo-280229.jpeg', '2018-05-17 07:06:49', '2018-05-17 07:06:49'),
(84, '1526523217pexels-photo-243722.jpg', '2018-05-17 07:13:37', '2018-05-17 07:13:37'),
(85, '1526523393pexels-photo-140511.jpeg', '2018-05-17 07:16:33', '2018-05-17 07:16:33'),
(86, '1526523545pexels-photo-139115.jpeg', '2018-05-17 07:19:05', '2018-05-17 07:19:05'),
(87, '1526523820pexels-photo-139115.jpeg', '2018-05-17 07:23:40', '2018-05-17 07:23:40'),
(88, '1526523868pexels-photo-164522.jpg', '2018-05-17 07:24:28', '2018-05-17 07:24:28'),
(89, '1526524107pexels-photo-164516.jpg', '2018-05-17 07:28:27', '2018-05-17 07:28:27'),
(90, '1526524294pexels-photo-206172.jpeg', '2018-05-17 07:31:34', '2018-05-17 07:31:34'),
(91, '1526524449pexels-photo-534184.jpg', '2018-05-17 07:34:09', '2018-05-17 07:34:09'),
(92, '1526524609pexels-photo-106399.jpg', '2018-05-17 07:36:49', '2018-05-17 07:36:49'),
(93, '1526524856pexels-photo-462358.jpg', '2018-05-17 07:40:56', '2018-05-17 07:40:56'),
(94, '1526525131pexels-photo-206673.jpeg', '2018-05-17 07:45:31', '2018-05-17 07:45:31'),
(95, '1526525357pexels-photo-139115.jpeg', '2018-05-17 07:49:17', '2018-05-17 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `photo_staffs`
--

CREATE TABLE `photo_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `photo_staffs`
--

INSERT INTO `photo_staffs` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'sam.jpg', NULL, NULL),
(2, 'luger.jpg', NULL, NULL),
(9, '1522274393r32fdewq2fdc3eq.jpg', '2018-03-29 02:59:53', '2018-03-29 02:59:53'),
(10, '1522274409454564fw.jpg', '2018-03-29 03:00:09', '2018-03-29 03:00:09'),
(11, '1522457745fdgsdfg.jpg', '2018-03-31 05:55:45', '2018-03-31 05:55:45'),
(12, '152245777232133.jpg', '2018-03-31 05:56:12', '2018-03-31 05:56:12'),
(13, '15224578421522274393r32fdewq2fdc3eq.jpg', '2018-03-31 05:57:22', '2018-03-31 05:57:22'),
(14, '1522457925247885.jpg', '2018-03-31 05:58:45', '2018-03-31 05:58:45'),
(15, '1522457969247885.jpg', '2018-03-31 05:59:29', '2018-03-31 05:59:29'),
(16, '152245804723r2dqd32wq.jpg', '2018-03-31 06:00:47', '2018-03-31 06:00:47'),
(17, '1522458129fwersf.jpg', '2018-03-31 06:02:09', '2018-03-31 06:02:09'),
(18, '152245830243tf3t3e4wr.jpg', '2018-03-31 06:05:02', '2018-03-31 06:05:02'),
(19, '15224583841515033345233254.jpg', '2018-03-31 06:06:24', '2018-03-31 06:06:24'),
(20, '152245845746465456446.jpg', '2018-03-31 06:07:37', '2018-03-31 06:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Founder', NULL, NULL),
(2, 'Sales Agent', NULL, NULL),
(3, 'Reality Agent', NULL, NULL),
(4, 'Web Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'web-admin', NULL, NULL),
(2, 'data-entry', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `position_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `role_id`, `position_id`, `name`, `photo`, `bio`, `email`, `phone`, `skype`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Sam Kerrigan', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius earum laudantium et consequatur quidem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius earum laudantium et consequatur quidem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius earum laudantium et consequatur quidem.', 'samker@envirogreen.com', 5555555, 'Samker', '123', NULL, NULL, NULL),
(2, 1, 1, 'Jake Kerr', '2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, ab, accusantium. Veritatis tenetur expedita laboriosam fugit exercitationem, a nesciunt quidem, nulla repellendus doloribus mollitia hic sequi dolor! Aperiam ad nostrum, vel quibusdam, ratione accusantium officiis laborum eum a, molestiae minima nobis dolorum unde dolores, ab. Ullam molestiae iste aliquam veritatis nulla et provident praesentium, voluptates quidem, quod, natus, id deserunt facere eaque. Odit, aliquam culpa excepturi explicabo sed molestias maiores veritatis laborum, facilis beatae corporis vitae eveniet corrupti, delectus cupiditate non illo. Veritatis soluta ab provident nisi quia odit, recusandae tenetur. Sapiente quibusdam magnam pariatur ex id temporibus sequi tempora', 'jakekerr@envirogreen.com', 5555555, 'jakekerr', '123', NULL, NULL, NULL),
(3, 2, 2, 'Annete Pounder', '3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius earum laudantium et consequatur quidem.', 'Pounder@envirogreen.com', 6677679, 'Pounder', '123', NULL, NULL, NULL),
(4, 2, 3, 'Steven Smith', '4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius earum laudantium et consequatur quidem.\r\n\r\n', 'smith@envirogreen.com', 7878787, 'smithy', '123', NULL, NULL, NULL),
(5, 1, 4, 'Pete Mason\r\n', '5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eius earum laudantium et consequatur quidem.\r\n\r\n', 'Mason@envirogreen.com', 4567895, 'mason', '123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbrev`, `created_at`, `updated_at`) VALUES
(1, 'Alabama', 'AL', '2018-05-17 03:19:06', '2018-05-17 03:19:06'),
(2, 'Alaska', 'AK', '2018-05-17 03:20:12', '2018-05-17 03:20:12'),
(3, 'Arizona ', 'AZ', '2018-05-17 03:21:05', '2018-05-17 03:21:05'),
(4, 'Arkansas ', 'AR', '2018-05-17 03:21:19', '2018-05-17 03:21:19'),
(5, 'California ', 'CA', '2018-05-17 03:21:28', '2018-05-17 03:21:28'),
(6, 'Colorado ', 'CO', '2018-05-17 03:21:40', '2018-05-17 03:21:40'),
(7, 'Connecticut ', 'CT', '2018-05-17 03:21:50', '2018-05-17 03:21:50'),
(8, 'Delaware ', 'DE', '2018-05-17 03:22:01', '2018-05-17 03:22:01'),
(9, 'Florida ', 'FL', '2018-05-17 03:22:09', '2018-05-17 03:22:09'),
(10, 'Georgia ', 'GA', '2018-05-17 03:22:40', '2018-05-17 03:22:40'),
(11, 'Hawaii ', 'HI', '2018-05-17 03:22:51', '2018-05-17 03:22:51'),
(12, 'Idaho ', 'ID', '2018-05-17 03:23:01', '2018-05-17 03:23:01'),
(13, 'Illinois ', 'IL', '2018-05-17 03:23:13', '2018-05-17 03:23:13'),
(14, 'Indiana ', 'IN', '2018-05-17 03:23:25', '2018-05-17 03:23:25'),
(15, 'Iowa ', 'IA', '2018-05-17 03:23:36', '2018-05-17 03:23:36'),
(16, 'Kansas ', 'KS', '2018-05-17 03:23:48', '2018-05-17 03:23:48'),
(17, 'Kentucky ', 'KY', '2018-05-17 03:24:02', '2018-05-17 03:24:02'),
(18, 'Louisiana ', 'LA', '2018-05-17 03:24:18', '2018-05-17 03:24:18'),
(19, 'Maine ', 'ME', '2018-05-17 03:24:31', '2018-05-17 03:24:31'),
(20, 'Maryland ', 'MD', '2018-05-17 03:24:42', '2018-05-17 03:24:42'),
(21, 'Massachusetts ', 'MA', '2018-05-17 03:24:56', '2018-05-17 03:24:56'),
(22, 'Michigan ', 'MI', '2018-05-17 03:25:21', '2018-05-17 03:25:21'),
(23, 'Minnesota ', 'MN', '2018-05-17 03:25:32', '2018-05-17 03:25:32'),
(24, 'Mississippi ', 'MS', '2018-05-17 03:25:44', '2018-05-17 03:25:44'),
(25, 'Missouri ', 'MO', '2018-05-17 03:25:57', '2018-05-17 03:25:57'),
(26, 'Montana ', 'MT', '2018-05-17 03:26:07', '2018-05-17 03:26:07'),
(27, 'Nebraska ', 'NE', '2018-05-17 03:26:21', '2018-05-17 03:26:21'),
(28, 'Nevada ', 'NV', '2018-05-17 03:26:35', '2018-05-17 03:26:35'),
(29, 'New Hampshire', 'NH', '2018-05-17 03:26:52', '2018-05-17 03:26:52'),
(30, 'New Jersey', 'NJ', '2018-05-17 03:27:06', '2018-05-17 03:27:06'),
(31, 'New Mexico', 'NM', '2018-05-17 03:27:21', '2018-05-17 03:27:21'),
(32, 'New York', 'NY', '2018-05-17 03:27:33', '2018-05-17 03:27:33'),
(33, 'North Carolina', 'NC', '2018-05-17 03:27:53', '2018-05-17 03:27:53'),
(34, 'North Dakota ', 'ND', '2018-05-17 03:28:09', '2018-05-17 03:28:09'),
(35, 'Ohio ', 'OH', '2018-05-17 03:28:19', '2018-05-17 03:28:19'),
(36, 'Oklahoma ', 'OK', '2018-05-17 03:28:32', '2018-05-17 03:28:32'),
(37, 'Oregon ', 'OR', '2018-05-17 03:28:44', '2018-05-17 03:28:44'),
(38, 'Pennsylvania ', 'PA', '2018-05-17 03:29:20', '2018-05-17 03:29:20'),
(39, 'Rhode Island', 'RI', '2018-05-17 03:29:37', '2018-05-17 03:29:37'),
(40, 'South Carolina', 'SC', '2018-05-17 03:29:48', '2018-05-17 03:29:48'),
(41, 'South Dakota', 'SD', '2018-05-17 03:29:59', '2018-05-17 03:29:59'),
(42, 'Tennessee ', 'TN', '2018-05-17 03:30:10', '2018-05-17 03:30:10'),
(43, 'Texas ', 'TX', '2018-05-17 03:30:24', '2018-05-17 03:30:24'),
(44, 'Utah ', 'UT', '2018-05-17 03:30:34', '2018-05-17 03:30:34'),
(45, 'Vermont ', 'VT', '2018-05-17 03:30:43', '2018-05-17 03:30:43'),
(46, 'Virginia ', 'VA', '2018-05-17 03:30:56', '2018-05-17 03:30:56'),
(47, 'Washington ', 'WA', '2018-05-17 03:31:07', '2018-05-17 03:31:07'),
(48, 'West Virginia', 'WV', '2018-05-17 03:31:20', '2018-05-17 03:31:20'),
(49, 'Wisconsin ', 'WI', '2018-05-17 03:31:31', '2018-05-17 03:31:31'),
(50, 'Wyoming ', 'WY', '2018-05-17 03:31:42', '2018-05-17 03:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `position_id` int(10) UNSIGNED DEFAULT NULL,
  `photo_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `position_id`, `photo_id`, `bio`, `phone`, `skype`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sam Kerrigan', 1, 1, '1', 'Lorem ipsum dolor amet twee elit shoreditch palo santo labore gluten-free craft beer literally photo booth 3 wolf moon nulla. Mlkshk edison bulb raw denim pickled adipisicing velit minim bushwick wolf. Twee bespoke microdosing waistcoat. Squid 8-bit dolore fam cupidatat disrupt. In paleo +1, hammock bicycle rights marfa cupidatat mlkshk ramps dolore. Crucifix ethical la croix vexillologist. Magna paleo poke vice raclette chambray.', '4137888888', 'sam', 'samker@envirogreen.com', '$2y$10$Z0VEnobYEJzB3kRgZqoUhO5n5rPn9EduxN1kH.3q41dEFyz007rdy', 'EC6BmXIXN8jICs7hg71sKDwQ7evoKFcT4IFSvF17fm2RL0MTteR0tq6QO1PP', '2018-03-06 09:03:39', '2018-03-31 06:07:55'),
(2, 'Mike Luger', 1, 1, '2', 'Coloring book umami organic, gluten-free consectetur banh mi humblebrag poutine street art shabby chic. Yr blue bottle man braid beard cupidatat neutra. Ipsum poke ullamco, occaecat tote bag selvage hot chicken coloring book art party ea. Distillery voluptate next level banh mi.', '4125555555', 'luger', 'luger@envirogreen.com', '$2y$10$AD/pkMnE7yU89tdLCgka/ecb5l1oszW02flLQM8qw9pl8udq9v/z2', NULL, '2018-03-06 09:05:45', '2018-03-06 09:05:45'),
(3, 'Jane Kalo', 2, 2, '10', 'Kale chips occupy enamel pin, dolore austin chicharrones pickled quis. Whatever dolore cupidatat ut, williamsburg kickstarter wolf wayfarers direct trade authentic exercitation squid man braid keytar. Trust fund try-hard umami irony food truck deep v. Direct trade art party scenester vice, dolor food truck irony celiac XOXO sunt. Mumblecore austin craft beer dolore brunch, poke crucifix in. Raw denim ullamco 3 wolf moon ugh. Nostrud 90\'s prism pariatur kogi taxidermy.', '413-569-5569', 'jane', 'jane@envirogreen.com', 'panther', NULL, '2018-03-06 09:38:06', '2018-03-29 03:00:09'),
(4, 'Dylan Cougar', 1, 4, '11', 'Kale chips occupy enamel pin, dolore austin chicharrones pickled quis. Whatever dolore cupidatat ut, williamsburg kickstarter wolf wayfarers direct trade authentic exercitation squid man braid keytar. Trust fund try-hard umami irony food truck deep v. Direct trade art party scenester vice, dolor food truck irony celiac XOXO sunt. Mumblecore austin craft beer dolore brunch, poke crucifix in. Raw denim ullamco 3 wolf moon ugh. Nostrud 90\'s prism pariatur kogi taxidermy.', '413-669-6969', 'dylan', 'dylancougar@envirogreen.com', '$2y$10$eiY3AIVMIpoLF8W4V0SiFusqMYjsCcm1368ChGwIK/gJm00vXTRTy', NULL, '2018-03-06 09:41:17', '2018-03-31 05:55:45'),
(6, 'Ana Hartman', 2, 2, '12', 'Pour-over pickled pitchfork fanny pack laborum la croix. Mixtape dolor enim, hashtag culpa green juice organic yuccie sustainable. Cred sed locavore chartreuse. Non roof party brooklyn woke consequat vape blog dolore la croix post-ironic kitsch flexitarian vaporware heirloom ut. Mumblecore try-hard laborum kale chips hoodie godard labore tacos meggings banh mi nulla.', '5555555', 'hart', 'hart@envirogreen.com', '$2y$10$U/Mz1cdLBo0T7ujkiLWGfOPhAqEuFgYBofNS2r4ZKmZ3jbBYA4az2', NULL, '2018-03-31 05:56:12', '2018-03-31 05:56:12'),
(7, 'Jane Brisbane', 2, 2, '13', 'Fixie shoreditch chartreuse affogato, duis taiyaki enim taxidermy leggings vinyl. Jianbing small batch sint hammock XOXO tattooed ennui kogi. Yuccie hashtag cronut try-hard proident esse culpa selvage succulents lorem lyft. Artisan edison bulb wayfarers, hot chicken est keffiyeh cupidatat green juice commodo excepteur culpa adipisicing mollit. Photo booth humblebrag helvetica, biodiesel VHS pok pok selvage ennui. Meh elit air plant four dollar toast ennui asymmetrical fugiat cred laborum. Before they sold out lomo bicycle rights gastropub sustainable polaroid scenester blue bottle et.', '5555555', 'jane', 'brisbane@envirogreen.com', '$2y$10$Q9jIXr.oXA6mwqGWJrlxvuTY.nDwcPoY2TgHOYdHP1Wce9UQh2ILK', NULL, '2018-03-31 05:57:22', '2018-03-31 05:57:22'),
(9, 'Steven Sherner', 2, 3, '15', 'Coloring book umami organic, gluten-free consectetur banh mi humblebrag poutine street art shabby chic. Yr blue bottle man braid beard cupidatat neutra. Ipsum poke ullamco, occaecat tote bag selvage hot chicken coloring book art party ea. Distillery voluptate next level banh mi.', '5555555', 'shern', 'shern@envirogreen.com', '$2y$10$EB/B6T6SqEuvcvZsnPNypuCLvK7GgY/8ZiLaSuCZRv.Z5olGtSYbS', NULL, '2018-03-31 05:59:29', '2018-03-31 05:59:29'),
(10, 'Tommy Kane', 2, 3, '16', 'Non roof party brooklyn woke consequat vape blog dolore la croix post-ironic kitsch flexitarian vaporware heirloom ut. Mumblecore try-hard laborum kale chips hoodie godard labore tacos meggings banh mi nulla.', '5555555', 'kane', 'kane@envirogreen.com', '$2y$10$yYj7rS2Q2wnlZu5KS7OpwuY6G2BzXLYGwrMnh91uokQCGDs02.hF.', '3LGQRXDTsJuUBSY85DRk0otCfzKn1c9JdHEkK8EN0WxkzJwQu0I4pwoxl8l5', '2018-03-31 06:00:47', '2018-03-31 06:08:45'),
(11, 'Randy Lords', 2, 3, '17', 'Meh elit air plant four dollar toast ennui asymmetrical fugiat cred laborum. Before they sold out lomo bicycle rights gastropub sustainable polaroid scenester blue bottle et.', '5555555', 'randy', 'randy@envirogreen.com', '$2y$10$5p10aCYXEvtrzpKeENxlQ.i2klqtAl2hw69GDyxkL0BNMNybzFPHa', NULL, '2018-03-31 06:02:09', '2018-03-31 06:02:09'),
(12, 'Tammy Landis', 2, 3, '18', 'Kale chips occupy enamel pin, dolore austin chicharrones pickled quis. Whatever dolore cupidatat ut, williamsburg kickstarter wolf wayfarers direct trade authentic exercitation squid man braid keytar. Trust fund try-hard umami irony food truck deep v. Direct trade art party scenester vice, dolor food truck irony celiac XOXO sunt. Mumblecore austin craft beer dolore brunch, poke crucifix in. Raw denim ullamco 3 wolf moon ugh. Nostrud 90\'s prism pariatur kogi taxidermy.', '55544454', 'landis', 'landis@envirogreen.com', '$2y$10$8nftcl0ChTHw.bglKShiEu4YJInlrBOSd6MeL9zkTWxLynID9FlB.', NULL, '2018-03-31 06:05:02', '2018-03-31 06:05:02'),
(13, 'Greg Handler', 2, 2, '19', 'Direct trade art party scenester vice, dolor food truck irony celiac XOXO sunt. Mumblecore austin craft beer dolore brunch, poke crucifix in. Raw denim ullamco 3 wolf moon ugh. ', '7777777', 'greg', 'greg@envirogreen.com', '$2y$10$NoFIPDSPbEVOlbFkGSHfsOm3aGQjiicR5eW6EXuqTz0DSLjt4xi7m', NULL, '2018-03-31 06:06:24', '2018-03-31 06:06:24'),
(14, 'Johnny Bristol', 1, 4, '20', 'Coloring book umami organic, gluten-free consectetur banh mi humblebrag poutine street art shabby chic. Yr blue bottle man braid beard cupidatat neutra. Ipsum poke ullamco, occaecat tote bag selvage hot chicken coloring book art party ea. Distillery voluptate next level banh mi.', '9999999', 'bristol', 'bristol@envirogreen.com', '$2y$10$6OZxGC1/F/u/DdHez5yJl.aCSdJCwfvBxa.kjoo72SfvAqKCscKQm', NULL, '0000-00-00 00:00:00', '2018-03-31 06:07:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_photo_fours`
--
ALTER TABLE `extra_photo_fours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_photo_ones`
--
ALTER TABLE `extra_photo_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_photo_threes`
--
ALTER TABLE `extra_photo_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_photo_twos`
--
ALTER TABLE `extra_photo_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_fullpic_id_index` (`fullpic_id`),
  ADD KEY `listings_extrapic_id_index` (`extrapicone_id`),
  ADD KEY `listings_agent_id_index` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_listings`
--
ALTER TABLE `photo_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_staffs`
--
ALTER TABLE `photo_staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`),
  ADD KEY `posts_category_id_index` (`category_id`),
  ADD KEY `posts_photo_id_index` (`photo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`),
  ADD KEY `staff_role_id_index` (`role_id`),
  ADD KEY `staff_position_id_index` (`position_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`),
  ADD KEY `users_position_id_index` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `extra_photo_fours`
--
ALTER TABLE `extra_photo_fours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `extra_photo_ones`
--
ALTER TABLE `extra_photo_ones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `extra_photo_threes`
--
ALTER TABLE `extra_photo_threes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `extra_photo_twos`
--
ALTER TABLE `extra_photo_twos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `photo_listings`
--
ALTER TABLE `photo_listings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `photo_staffs`
--
ALTER TABLE `photo_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

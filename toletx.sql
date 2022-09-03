-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 03:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toletx`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilboards`
--

CREATE TABLE `bilboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hieght` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bilboards`
--

INSERT INTO `bilboards` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `type`, `size`, `hieght`, `electricity`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'gfhtfr', '2022-08-10', '01680409920', 'gfhgf', 'khilkhet', 'bulletin', '1000', '122', 'Electricity', '10000', '202208090535tbilisi-4930959_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 23:35:19', '2022-08-08 23:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `community__centers`
--

CREATE TABLE `community__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `community_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community__centers`
--

INSERT INTO `community__centers` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `community_name`, `address`, `floor_level`, `floor_size`, `road_width`, `utilities`, `interior_condition`, `fire_safety`, `lift`, `parking`, `garden`, `cooking`, `sitting`, `wifi`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'Community Center Available', '2022-08-09', '01680409920', '1000', 'sdfgdsgds', 'Blue range', 'Dhaka', '13', '1222', '333333', 'Utilities', 'best', 'Fire Safety', 'Lift', 'Parking', 'Garden', 'Cooking Facilities', 'Sitting Arrangement', 'Wifi', '1000000', 'C:\\xampp\\tmp\\php1F77.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 03:46:17', NULL),
(2, '2', 'Wanted', 'Community Center Available', '2022-08-09', '01680409920', '1000', 'sdfgdsgds', 'Blue range', 'Dhaka', '13', '1222', '333333', 'Utilities', 'best', 'Fire Safety', 'Lift', 'Parking', 'Garden', 'Cooking Facilities', 'Sitting Arrangement', 'Wifi', '1000000', '202208080949623c0bd7a247a.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 03:49:47', '2022-08-08 03:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `exibution__centers`
--

CREATE TABLE `exibution__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exibution_center_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimmingpool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exibution__centers`
--

INSERT INTO `exibution__centers` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `exibution_center_name`, `address`, `room_size`, `room_type`, `wifi`, `attached_toilet`, `utilities`, `lift`, `furnished`, `attached_varanda`, `hot_water`, `laundry`, `ac`, `cable_tv`, `parking`, `dining`, `spa`, `gym`, `sports`, `swimmingpool`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'exhibution Center', '2022-08-09', '01680409920', 'gfbfbf', 'red rose', 'Rajshahi', '36sqr', 'Classic', 'Wifi', 'Attached Toilet', 'Utilities', 'Lift', 'Furnished', 'Attached Varanda', 'Hot Water', 'Laundry', 'Ac', 'Cable tv', 'Parking', 'Dining Facilities', 'Spa', 'Gym', 'Sports Facilities', 'Swimming Pool', '10000', '202208081148March-2017-VV-POLI-gorilla.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 05:48:42', '2022-08-08 05:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainage_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `factory_name`, `address`, `floor_level`, `floor_size`, `road_width`, `utilities`, `building_condition`, `fire_safety`, `lift`, `parking`, `interior_condition`, `drainage_system`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'jhfsd', '2022-08-08', '01680409920', 'sds', 'Green', 'Konabari', '11', '111154', '45', 'Utilities', 'good', 'Fire Safety', 'Lift', 'Parking', 'Interior condition', 'Drainage System', '10000', '2022080811121344252.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 05:12:42', '2022-08-08 05:12:42');

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
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `address`, `flat_size`, `wifi`, `attached_toilet`, `utilities`, `lift`, `furnished`, `attached_varanda`, `hot_water`, `laundry`, `ac`, `cable_tv`, `parking`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'flat', '2022-08-09', '01680409920', '765', 'fdgdf', 'Khulna', '1222', 'Wifi', 'Attached Toilet', 'Utilities', 'Lift', 'Furnished', 'Attached Varanda', 'Hot Water', 'Laundry', 'Ac', 'Cable tv', 'Parking', '10000', '20220808095562384306247e5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 03:55:08', '2022-08-08 03:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghats`
--

CREATE TABLE `ghats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `hostel_name`, `address`, `room_size`, `room_type`, `wifi`, `attached_toilet`, `utilities`, `lift`, `furnished`, `attached_varanda`, `hot_water`, `laundry`, `ac`, `cable_tv`, `parking`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'dfds', '2022-08-15', '01680409920', '100', 'erfgds', 'red', 'Savar', '1555', 'Single bed', 'Wifi', 'Attached Toilet', NULL, 'Lift', NULL, 'Attached Varanda', 'Hot Water', NULL, NULL, NULL, NULL, '10000', '202208081044tbilisi-4930959_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 04:44:17', '2022-08-08 04:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathroom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cctv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `hotel_name`, `location`, `wifi`, `bathroom`, `cctv`, `lift`, `furnished`, `security`, `parking`, `price`, `guest_count`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'hotel Available', '2022-08-08', '01680409920', '100', 'dfdfdfj', 'blue', 'Tangail', 'Wifi', 'Bathroom', 'CCTV', 'Lift', 'Furnished', 'Security', 'Parking', '100000', '3', '202208081017phoenix-lu.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 04:17:08', '2022-08-08 04:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vegetations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `land_area`, `vegetations`, `road_width`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'ghf', '2022-08-09', '01680409920', 'tygfbf', 'ajompur', '11121', 'Vegetations', '121', '1000', '2022080905401344252.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 23:40:12', '2022-08-08 23:40:12');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_12_20_065936_create_user_information_table', 1),
(11, '2021_12_22_120036_add_facebook_id_in_users_table', 1),
(222, '2014_10_12_000000_create_users_table', 2),
(223, '2021_12_28_100841_create_rooms_table', 2),
(224, '2021_12_28_100923_create_parking__spots_table', 2),
(225, '2021_12_28_100955_create_hotels_table', 2),
(226, '2021_12_28_101015_create_offices_table', 2),
(227, '2021_12_28_101028_create_lands_table', 2),
(228, '2021_12_28_101053_create_community__centers_table', 2),
(229, '2021_12_28_101116_create_shooting__spots_table', 2),
(230, '2021_12_28_101132_create_shops_table', 2),
(231, '2021_12_28_101146_create_factories_table', 2),
(232, '2021_12_28_101205_create_warehouses_table', 2),
(233, '2021_12_28_101217_create_ponds_table', 2),
(234, '2021_12_28_101242_create_swimming__pools_table', 2),
(235, '2021_12_28_101257_create_bilboards_table', 2),
(236, '2021_12_28_101312_create_rooftops_table', 2),
(237, '2021_12_28_101333_create_restaurants_table', 2),
(238, '2021_12_28_101350_create_galleries_table', 2),
(239, '2021_12_28_101555_create_hostels_table', 2),
(240, '2022_01_09_104502_create_flats_table', 2),
(241, '2022_01_18_101557_create_exibution__centers_table', 2),
(242, '2022_01_18_101623_create_play_grounds_table', 2),
(243, '2022_02_28_171755_create_phoneotps_table', 2),
(244, '2022_03_13_112108_create_products_table', 2),
(245, '2022_03_28_084313_create_payments_table', 2),
(246, '2022_04_03_063920_create_ghats_table', 2),
(247, '2022_04_03_064006_create_picnic__spots_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ToletX Personal Access Client', 'nNxAJ8c6fnqMINwmd1Y2MKcpzjlfLAzWOh8iLEZn', NULL, 'http://localhost', 1, 0, 0, '2022-04-03 23:20:36', '2022-04-03 23:20:36'),
(2, NULL, 'ToletX Password Grant Client', 'QKcuXZYlxN18uwgNWagzwOxTsk0egLIrBF9IwkJZ', 'users', 'http://localhost', 0, 1, 0, '2022-04-03 23:20:36', '2022-04-03 23:20:36'),
(3, NULL, 'ToletX Personal Access Client', '38dZRQAlBTlwAajMy64YTgCbu1qhyMXgiqKS26qg', NULL, 'http://localhost', 1, 0, 0, '2022-04-03 23:21:05', '2022-04-03 23:21:05'),
(4, NULL, 'ToletX Password Grant Client', 'Tvhhxy7btMWr2p7oywhBQiqq66rKLVW4uVsJafwI', 'users', 'http://localhost', 0, 1, 0, '2022-04-03 23:21:05', '2022-04-03 23:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-04-03 23:20:36', '2022-04-03 23:20:36'),
(2, 3, '2022-04-03 23:21:05', '2022-04-03 23:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `floor_level`, `floor_size`, `road_width`, `utilities`, `interior_condition`, `fire_safety`, `lift`, `emergency_lift`, `parking`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'Offfice Available', '2022-08-08', '01680409920', 'sdfsd', 'Pabna', '2', '18sqr', '16fit', 'Utilities', 'best', 'Fire Safety', 'Lift', 'Emergency Lift', 'Parking', '10000', '202208081059March-2017-VV-POLI-gorilla.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 04:59:50', '2022-08-08 04:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `parking__spots`
--

CREATE TABLE `parking__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking__spots`
--

INSERT INTO `parking__spots` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `address`, `price`, `floor_level`, `floor_height`, `description`, `vehicle_type`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'fghf', '2022-08-09', '01680409920', 'Comilla', '10000', '1', '14', 'fdgk', 'Privet car', '202208081012Capture.PNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 04:12:40', '2022-08-08 04:12:40');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isverified` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phoneotps`
--

CREATE TABLE `phoneotps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phoneotps`
--

INSERT INTO `phoneotps` (`id`, `phone_number`, `isverified`, `otp`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '', '2022-08-02 04:28:50', '2022-08-03 04:24:44'),
(2, '2', 1, '', '2022-08-03 04:30:13', '2022-08-03 04:30:23'),
(3, '3', 1, '', '2022-08-03 05:24:51', '2022-08-03 05:25:09'),
(4, '12', 1, '', '2022-08-04 01:01:41', '2022-08-04 01:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `picnic__spots`
--

CREATE TABLE `picnic__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picnic_spot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `play_grounds`
--

CREATE TABLE `play_grounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimmingpool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `play_grounds`
--

INSERT INTO `play_grounds` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `type`, `wifi`, `attached_toilet`, `utilities`, `lift`, `furnished`, `laundry`, `change_room`, `ac`, `parking`, `dining`, `spa`, `gym`, `sports`, `swimmingpool`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'playground', '2022-08-08', '01680409920', 'fd', 'kustiya', 'others', 'wifi', 'Toilet', 'Utilities', NULL, 'Furnished', 'Laundry', 'Changing Room', 'Ac', 'Parking', 'Dining Facilities', 'Spa', 'Gym', 'Sports Facilities', 'Swimming Pool', '10000', '202208081137623c0bd7a247a.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 05:37:40', '2022-08-08 05:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `ponds`
--

CREATE TABLE `ponds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pond_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drainage_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ponds`
--

INSERT INTO `ponds` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `purpose`, `road_width`, `water_level`, `pond_area`, `drainage_system`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'xcgvf', '2022-08-09', '01680409920', 'fdgf', 'kaliyartek', 'other', '51', '1000000', '10000', 'Drainage System', '10000', '202208090543phoenix-lu.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 23:43:31', '2022-08-08 23:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimmingpool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `resort_name`, `address`, `room_size`, `room_type`, `wifi`, `attached_toilet`, `utilities`, `lift`, `furnished`, `attached_varanda`, `hot_water`, `laundry`, `ac`, `cable_tv`, `parking`, `dining`, `spa`, `gym`, `sports`, `swimmingpool`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'Resort', '2022-08-09', '01680409920', '1000', 'tryhgf', 'Black Rose', 'Gazipur', '1555', 'Single bed', 'Wifi', 'Attached Toilet', 'Utilities', 'Lift', 'Furnished', 'Attached Varanda', 'Hot Water', 'Laundry', 'Ac', 'Cable tv', 'Parking', 'Dining Facilities', NULL, 'Gym', 'Spa', NULL, '10000', '202208081051What_Kind_of_Emotions_Do_Animals_Feel.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 04:51:49', '2022-08-08 04:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `rooftops`
--

CREATE TABLE `rooftops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooftops`
--

INSERT INTO `rooftops` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `floor_area`, `utilities`, `protection`, `lift`, `parking`, `interior_condition`, `shed`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'dfds', '2022-08-10', '01680409920', 'erfres', 'kurmitola', '10000', NULL, 'Protection', NULL, 'Parking', NULL, NULL, '10000', '202208090529March-2017-VV-POLI-gorilla.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 23:29:14', '2022-08-08 23:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `common_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `common_toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attached_varanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_water` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `address`, `room_size`, `wifi`, `attached_toilet`, `gas`, `water`, `common_varanda`, `common_toilet`, `electricity`, `lift`, `furnished`, `attached_varanda`, `hot_water`, `laundry`, `ac`, `cable_tv`, `parking`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Rented', 'sublet for male', '2022-08-02', '01720972180', '1000', 'Describe something about your service...', 'uttara sector 10', '24sqr', 'Wifi', 'Attached Toilet', 'Utilities', 'Utilities', NULL, NULL, 'Utilities', 'Lift', NULL, 'Attached Varanda', 'Hot Water', NULL, NULL, NULL, NULL, '5000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-02 04:49:41', '2022-08-02 04:49:41'),
(2, '2', 'Wanted', 'Studio', '2022-08-15', '1', '5000', 'Best Enviornment', 'Dhamrai,Uttora,Mirpur,Mohammadpur,Dhanmondi,Gendaria', '160', 'Wifi', 'Attached Toilet', 'Utilities', 'Utilities', 'Common Varanda', 'Common Toilet', 'Utilities', 'Lift', 'Furnished', 'Attached Varanda', 'Hot Water', 'Laundry', 'Ac', 'Cable tv', 'Parking', '25000', '202208070736254499.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/gzrBs869XBs', 1, NULL, '2022-08-07 01:36:09', '2022-08-07 01:36:09'),
(3, '2', 'Wanted', 'Art Studio', '2022-08-24', '1', '1000', 'asd', 'Uttara Sector 1', '250', 'Wifi', NULL, NULL, 'Utilities', NULL, NULL, 'Utilities', NULL, NULL, 'Attached Varanda', NULL, NULL, NULL, NULL, NULL, '10000', '202208070758254499.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-07 01:58:04', '2022-08-07 01:58:04'),
(4, '2', 'Wanted', 'Small Family Room', '2022-08-08', '1', '1500', 'good', 'Uttara sector 2', '360', 'Wifi', 'Attached Toilet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15000', '2022080707581343980.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-07 01:58:45', '2022-08-07 01:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `shooting__spots`
--

CREATE TABLE `shooting__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shooting_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegetations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shooting__spots`
--

INSERT INTO `shooting__spots` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `shooting_name`, `address`, `floor_level`, `floor_size`, `road_width`, `utilities`, `building_condition`, `fire_safety`, `lift`, `parking`, `garden`, `cooking`, `sitting`, `wifi`, `vegetations`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'shooting', '2022-08-12', '01680409920', 'dsds', 'Sweety', 'Munshigonj', '7', '15555', '102', 'Utilities', 'good', 'Fire Safety', 'Lift', 'Parking', NULL, 'Cooking Facilities', 'Sitting Arrangement', 'Wifi', NULL, '10000', '202208081142254499.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 05:42:26', '2022-08-08 05:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `floor_level`, `floor_size`, `road_width`, `utilities`, `building_condition`, `fire_safety`, `lift`, `parking`, `interior_condition`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'shop Available', '2022-08-08', '01680409920', 'dfj', 'Manikgonj', '13', '1000', '8', 'Utilities', 'best', 'Fire Safety', 'Lift', 'Parking', 'Interior condition', '10000', '202208081105March-2017-VV-POLI-gorilla.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 05:05:00', '2022-08-08 05:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `swimming__pools`
--

CREATE TABLE `swimming__pools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `swimming__pools`
--

INSERT INTO `swimming__pools` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `type`, `size`, `wifi`, `laundry`, `change_room`, `toilet`, `parking`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Wanted', 'xcfgvdf', '2022-08-09', '01680409920', 'fgdf', 'kolabagan', 'swim', '1000', 'Wifi', 'Laundry', 'Changing Room', 'Toilet', 'Parking', '10000', '202208090547What_Kind_of_Emotions_Do_Animals_Feel.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 23:47:14', '2022-08-08 23:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_qt1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_qt2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_qt3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_ans1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_ans2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_ans3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `otp` int(11) DEFAULT NULL,
  `terms` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `phone1`, `photo`, `email`, `nationality`, `father_name`, `mother_name`, `address`, `date_of_birth`, `gender`, `n_photo1`, `n_photo2`, `fav_qt1`, `fav_qt2`, `fav_qt3`, `fav_ans1`, `fav_ans2`, `fav_ans3`, `provider_id`, `slug`, `avatar`, `email_verified_at`, `password`, `role_id`, `otp`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shakil', '01680419920', '01720972180', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 's020820221', NULL, NULL, '$2y$10$63sP7c3AxLN6VHuhPjaYQezeRxIEaRhU2UBTPSleD7wQRpsk2eUJm', 2, NULL, 1, NULL, '2022-08-02 04:29:20', '2022-08-03 03:46:01'),
(2, 'mintu', '1', '01680409920', '2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f_developer030820222', NULL, NULL, '$2y$10$pQKAHAdl5xKtDz7447L63.ILmvoZeaNN/NwZ2WdxaydVq.mcrC9NC', 2, NULL, 1, NULL, '2022-08-03 04:25:07', '2022-08-08 03:26:21'),
(3, 'check', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'check030820223', NULL, NULL, '$2y$10$4B96/aH090B/GvZO3bYCNeq/NiQQZqNEvN7MI0qBwCTtyDF2R8Dsm', 2, NULL, 1, NULL, '2022-08-03 04:30:39', '2022-08-03 04:30:39'),
(4, 'reg', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'reg030820224', NULL, NULL, '$2y$10$d0I7nNc0irGXNuMFCox3I.3OMtpNaU5la00WrnwnDNji4HleBzyNe', 2, NULL, 1, NULL, '2022-08-03 05:25:29', '2022-08-03 05:25:29'),
(5, 'reroute', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'reroute040820225', NULL, NULL, '$2y$10$dIlb/bnBFxHC7hCHg8EFNOiz7J.jB1wAvdYXpFWREXFyLQU/c0C56', 2, NULL, 1, NULL, '2022-08-04 01:02:22', '2022-08-04 01:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncard_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_identity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainage_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `type`, `floor_level`, `floor_size`, `road_width`, `utilities`, `building_condition`, `fire_safety`, `lift`, `parking`, `interior_condition`, `drainage_system`, `price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rented', 'Warehouse', '2022-08-08', '01680409920', 'dfsd', 'Barishal', 'cosmetic', '3', '1555', '12', 'Utilities', 'best', 'Fire Safety', 'Lift', 'Parking', 'Interior condition', 'Drainage System', '10000', '20220808113162384306247e5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2022-08-08 05:31:00', '2022-08-08 05:31:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilboards`
--
ALTER TABLE `bilboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community__centers`
--
ALTER TABLE `community__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghats`
--
ALTER TABLE `ghats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking__spots`
--
ALTER TABLE `parking__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phoneotps`
--
ALTER TABLE `phoneotps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play_grounds`
--
ALTER TABLE `play_grounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponds`
--
ALTER TABLE `ponds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooftops`
--
ALTER TABLE `rooftops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilboards`
--
ALTER TABLE `bilboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community__centers`
--
ALTER TABLE `community__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghats`
--
ALTER TABLE `ghats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parking__spots`
--
ALTER TABLE `parking__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phoneotps`
--
ALTER TABLE `phoneotps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `play_grounds`
--
ALTER TABLE `play_grounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ponds`
--
ALTER TABLE `ponds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooftops`
--
ALTER TABLE `rooftops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

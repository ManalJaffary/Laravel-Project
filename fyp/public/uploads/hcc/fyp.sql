-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 07:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `h_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `firstname`, `lastname`, `dob`, `gender`, `card_id`, `p_id`, `h_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rafay', 'Aslam', '2021-07-18', 'Male', 1821, 4, 1, 'Non-vaccinated', '2022-04-19 16:44:31', '2022-04-19 16:44:31'),
(2, 'Rabia', 'Asif', '2020-02-28', 'Female', 2820, 2, 5, 'Vaccinated', '2022-04-19 16:45:53', '2022-04-19 16:45:53'),
(4, 'Momin', 'Haider', '2021-06-11', 'Male', 1121, 4, 1, 'Non-vaccinated', '2022-04-19 16:44:31', '2022-04-19 16:44:31'),
(5, 'Talha', 'Syed', '25-03-2018', 'Male', 2518, 14, 1, 'Non-vaccinated', '2022-05-19 17:16:33', '2022-05-19 17:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare_center`
--

CREATE TABLE `healthcare_center` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `healthcare_center`
--

INSERT INTO `healthcare_center` (`id`, `name`, `email`, `password`, `profile_picture`, `phone_number`, `reg_number`, `address`, `postal_code`, `area`, `city`, `admin_id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Madina Healthcare Center', 'madinahcc@gmail.com', '12345678', 'Caring-and-Healing-Center-logo.jpg', '0533602307', '10973450480', 'Near Boys High School, Madina Chowk', '50700', 'Madina Syedan', 'Gujrat', 15, 'Healthcare_center', 'Verified', NULL, '2022-03-28 06:00:18'),
(2, 'MP Healthcare Center', 'mphcc@gmail.com', '02468', 'depositphotos_78193826-stock-illustration-medical-logo-health-care-center.jpg', '0533729168', '10621976357', 'Opposite Petrol Pump, Moinuddin Pur Road', '50760', 'Moinuddin Pur', 'Gujrat', 15, 'Healthcare_center', 'Verified', NULL, '2022-03-18 03:59:04'),
(3, 'MP02 Healthcare Center ', 'mp2hcc@gmail.com', '199125', 'Caring-and-Healing-Center-logo.jpg', '0533703165', '10823647921', 'Moinuddin Pur Road', '50760', 'Moinuddin Pur', 'Gujrat', 15, 'Healthcare_center', 'Blocked', NULL, '2022-03-28 11:21:16'),
(4, 'JPJ Healthcare Center ', 'jpjhcc@gmail.com', '0900123', 'depositphotos_78193826-stock-illustration-medical-logo-health-care-center.jpg', '0533792837', '10324985441', 'Jalal Pur Jattan Road', '50780', 'Jalal Pur Jattan', 'Gujrat', 15, 'Healthcare_center', 'Deleted', NULL, NULL),
(5, 'JPJ02 Healthcare Center ', 'jpj2hcc@gmail.com', '673218', 'Caring-and-Healing-Center-logo.jpg', '0533704369', '10763421198', 'Jalal Pur Jattan Chowk', '50780', 'Jalal Pur Jattan', 'Gujrat', 15, 'Healthcare_center', 'Deleted', NULL, '2022-03-28 15:14:50');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_04_060958_create_admin_table', 1),
(3, '2022_03_17_083900_create_healthcare_center_table', 2),
(4, '2022_03_17_091243_create_hcc_table', 3),
(5, '2022_03_17_100219_create_healthcare_center_table', 4),
(6, '2022_03_25_144506_add_profile_picture_to_healthcare_center', 5),
(7, '2022_03_28_181534_create_users_table', 6),
(8, '2022_04_19_144116_create_child_table', 7),
(9, '2022_04_19_145927_create_vaccine_table', 8),
(10, '2022_04_19_145953_create_vaccine_process_table', 8),
(11, '2022_04_19_152050_create_child_table', 8),
(12, '2022_04_20_185028_create_vaccine_process_table', 9),
(13, '2022_04_21_102410_add_dose_to_vaccine_process', 10),
(14, '2022_04_21_214055_add_hcc_id_to_child', 11),
(15, '2022_04_21_221434_add_h_id_to_child', 12);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hcc_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `profile_picture`, `gender`, `phone_number`, `cnic`, `address`, `postal_code`, `area`, `city`, `hcc_id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Manal', 'Haider', 'manal@gmail.com', '1357', '16363.png', 'Female', '03136439871', '3012748739948', 'Opposite Petrol Pump, Moinuddin Pur, Gujrat', '50760', 'Moinuddin Pur', 'Gujrat', 2, 'Parent', 'Verified', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(2, 'Rimsha', 'Asif', 'rimsha@gmail.com', '124356', '16363.png', 'Female', '03196434891', '3032748736565', 'Opposite Petrol Pump, Jalal Pur Jattan, Gujrat', '50780', 'Jalal Pur Jattan', 'Gujrat', 5, 'Parent', 'Verified', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(3, 'Shehroz', 'Shahid', 'shehroz@gmail.com', '124987', '16363.png', 'Male', '03356435791', '3032748738907', 'Opposite Boys School, Jalal Pur Jattan, Gujrat', '50780', 'Jalal Pur Jattan', 'Gujrat', 4, 'Parent', 'Blocked', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(4, 'Ahmed', 'Syed', 'ahmed@gmail.com', '097743', '16363.png', 'Male', '03314412987', '3032764465573', 'Near Girls School, Madina Syedan, Gujrat', '50700', 'Madina Syedan', 'Gujrat', 1, 'Parent', 'Verified', '2022-03-28 18:40:46', '2022-04-19 12:17:43'),
(5, 'Bilal', 'Syed', 'bilal@gmail.com', '128867', '16363.png', 'Male', '03354349087', '3020144589021', 'Near Chowk, Madina Syedan, Gujrat', '50700', 'Madina Syedan', 'Gujrat', 1, 'Vaccinator', 'Verified', '2022-03-28 18:40:46', '2022-04-23 13:37:13'),
(6, 'Ali', 'Haider', 'ali@gmail.com', '88021', '16363.png', 'Male', '03121189776', '3012748434321', 'Opposite Petrol Pump, Moinuddin Pur, Gujrat', '50760', 'Moinuddin Pur', 'Gujrat', 2, 'Vaccinator', 'Verified', '2022-03-28 18:40:46', '2022-03-31 08:13:55'),
(7, 'Fatima', 'Ali', 'fatima@gmail.com', '124987', '16363.png', 'Female', '03356435791', '3032748730090', 'Opposite Boys School, Jalal Pur Jattan, Gujrat', '50780', 'Jalal Pur Jattan', 'Gujrat', 4, 'Vaccinator', 'Blocked', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(8, 'Haider', 'Ali', 'haider@gmail.com', '1357', '16363.png', 'Male', '03136439871', '3012748739002', 'Opposite Petrol Pump, Moinuddin Pur, Gujrat', '50760', 'Moinuddin Pur', 'Gujrat', 2, 'Vaccinator', 'Deleted', '2022-03-28 18:40:46', '2022-03-31 05:47:37'),
(9, 'Raza', 'Ali', 'raza@gmail.com', '1357', '16363.png', 'Male', '03136439871', '3012748739078', 'Opposite School, Moinuddin Pur, Gujrat', '50760', 'Moinuddin Pur', 'Gujrat', 3, 'Vaccinator', 'Blocked', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(10, 'Salman', 'Shah', 'salman@gmail.com', '6664746', '16363.png', 'Male', '03356435702', '3032748732219', 'Opposite Chowk, Jalal Pur Jattan, Gujrat', '50780', 'Jalal Pur Jattan', 'Gujrat', 5, 'Vaccinator', 'Deleted', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(11, 'Safdar', 'Raza', 'safdar@gmail.com', '1357', '16363.png', 'Male', '03426439866', '3043448735532', 'Opposite Petrol Pump, Moinuddin Pur, Gujrat', '50760', 'Moinuddin Pur', 'Gujrat', 3, 'Parent', 'Verified', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
(12, 'Ali', 'Syed', 'alisyed@gmail.com', '128867', '16363.png', 'Male', '03354349087', '3020144589998', 'Near Chowk, Madina Syedan, Gujrat', '50700', 'Madina Syedan', 'Gujrat', 1, 'Vaccinator', 'Blocked', '2022-03-28 18:40:46', '2022-03-28 15:22:52'),
(13, 'Musa', 'Syed', 'musa@gmail.com', '097743', '16363.png', 'Male', '03314413322', '3009864463321', 'Near Girls School, Madina Syedan, Gujrat', '50700', 'Madina Syedan', 'Gujrat', 1, 'Parent', 'Deleted', '2022-03-28 18:40:46', '2022-04-06 00:45:49'),
(14, 'Shahmeer', 'Aslam', 'shahmeer@gmail.com', '25889', '16363.png', 'male', '0533703270', '3420156780714', 'Jail Chowk, Gujrat', '50700', 'Gujrat', 'Gujrat', 1, 'Parent', 'Verified', '2022-04-15 01:31:49', '2022-05-08 13:16:11'),
(15, 'Khaliqa', 'Syed', 'khaliqa@gmail.com', '12345', 'img1.jpg', 'Female', '03117647852', '3420159220916', 'Opposite Boys Elementary School, Madina Syedan', '50700', 'Madina Syedan', 'Gujrat', 0, 'Admin', 'Verified', '2022-04-17 14:59:28', '2022-04-17 14:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `hcc_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `name`, `description`, `quantity`, `hcc_id`, `created_at`, `updated_at`) VALUES
(1, 'BCG', 'BCG vaccine is used to prevent tuberculosis (TB) disease. TB disease affects the lungs.', 20, 1, '2022-04-19 16:22:04', '2022-04-21 05:55:30'),
(2, 'Hepatitis-B', 'It prevents from diseases of liver.', 18, 1, '2022-04-19 16:25:46', '2022-04-19 16:25:46'),
(3, 'OPV', 'OPV helps to fight with polio. Paralysis is the most severe symptom associated with polio, because it can lead to permanent disability and death.', 22, 1, '2022-04-19 16:28:50', '2022-04-19 16:28:50'),
(4, 'Rota Virus', 'Rotavirus vaccine is the best way to protect your child against rotavirus disease.', 20, 1, '2022-04-19 16:30:20', '2022-04-19 16:30:20'),
(5, 'IPV', 'It helps to prevent every kind of polio.', 25, 1, '2022-04-20 19:19:43', '2022-04-20 19:19:43'),
(6, 'PCV', 'It can protect against pneumococcal disease, which is any type of infection caused by Streptococcus pneumoniae bacteria.', 15, 1, '2022-04-20 19:22:36', '2022-04-20 19:22:36'),
(7, 'Penta', 'Pentavalent vaccine provides protection to a child from 5 life-threatening diseases – Diphtheria, Pertussis, Tetanus, Hepatitis B and Hib.', 18, 1, '2022-04-20 19:23:57', '2022-04-20 19:23:57'),
(8, 'Measles', 'The vaccine protects against three diseases: measles, mumps, and rubella.', 23, 1, '2022-04-20 19:25:33', '2022-04-20 19:25:33'),
(9, 'BCG', 'BCG vaccine is used to prevent tuberculosis (TB) disease. TB disease affects the lungs.', 20, 2, '2022-04-19 16:22:04', '2022-04-19 16:22:04'),
(10, 'Hepatitis-B', 'It prevents from diseases of liver.', 18, 2, '2022-04-19 16:25:46', '2022-04-19 16:25:46'),
(11, 'OPV', 'OPV helps to fight with polio. Paralysis is the most severe symptom associated with polio, because it can lead to permanent disability and death.', 22, 2, '2022-04-19 16:28:50', '2022-04-19 16:28:50'),
(12, 'Rota Virus', 'Rotavirus vaccine is the best way to protect your child against rotavirus disease.', 20, 2, '2022-04-19 16:30:20', '2022-04-19 16:30:20'),
(13, 'IPV', 'It helps to prevent every kind of polio.', 25, 2, '2022-04-20 19:19:43', '2022-04-20 19:19:43'),
(14, 'PCV', 'It can protect against pneumococcal disease, which is any type of infection caused by Streptococcus pneumoniae bacteria.', 15, 2, '2022-04-20 19:22:36', '2022-04-20 19:22:36'),
(15, 'Penta', 'Pentavalent vaccine provides protection to a child from 5 life-threatening diseases – Diphtheria, Pertussis, Tetanus, Hepatitis B and Hib.', 18, 2, '2022-04-20 19:23:57', '2022-04-20 19:23:57'),
(16, 'Measles', 'The vaccine protects against three diseases: measles, mumps, and rubella.', 23, 2, '2022-04-20 19:25:33', '2022-04-20 19:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_process`
--

CREATE TABLE `vaccine_process` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_id` int(11) NOT NULL,
  `valid_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `dose` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccine_process`
--

INSERT INTO `vaccine_process` (`id`, `v_id`, `valid_age`, `created_at`, `updated_at`, `dose`) VALUES
(1, 1, 'Soon after birth', '2022-04-20 19:30:30', '2022-04-20 19:30:30', 1),
(2, 3, 'Soon after birth', '2022-04-20 19:30:55', '2022-04-20 19:30:55', 0),
(3, 3, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(4, 4, '6 weeks', '2022-04-20 19:32:25', '2022-04-21 05:48:16', 1),
(5, 6, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(6, 7, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(7, 3, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(8, 4, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(9, 6, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(10, 7, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(11, 3, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(12, 5, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(13, 6, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(14, 7, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(15, 8, '9 months', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(16, 8, '15 months', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(17, 2, 'Soon after birth', '2022-04-20 19:30:55', '2022-04-20 19:30:55', 1),
(18, 9, 'Soon after birth', '2022-04-20 19:30:30', '2022-04-20 19:30:30', 1),
(19, 10, 'Soon after birth', '2022-04-20 19:30:55', '2022-04-20 19:30:55', 1),
(20, 11, 'Soon after birth', '2022-04-20 19:30:55', '2022-04-20 19:30:55', 0),
(21, 11, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(22, 12, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(23, 14, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(24, 15, '6 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(25, 11, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(26, 12, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(27, 14, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(28, 15, '10 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(29, 11, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(30, 13, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(31, 14, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(32, 15, '14 weeks', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(33, 16, '9 months', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(34, 16, '15 months', '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthcare_center`
--
ALTER TABLE `healthcare_center`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `healthcare_center_email_unique` (`email`),
  ADD UNIQUE KEY `healthcare_center_reg_number_unique` (`reg_number`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_cnic_unique` (`cnic`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine_process`
--
ALTER TABLE `vaccine_process`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `healthcare_center`
--
ALTER TABLE `healthcare_center`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vaccine_process`
--
ALTER TABLE `vaccine_process`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

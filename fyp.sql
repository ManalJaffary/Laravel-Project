-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 07:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `hccid` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pid`, `hccid`, `date`, `created_at`, `updated_at`) VALUES
(16, 14, 4, '2022-07-15', '2022-07-21 02:44:42', '2022-07-21 02:44:42'),
(17, 14, 4, '2022-07-30', '2022-07-21 02:47:27', '2022-07-21 02:47:27'),
(18, 1, 2, '2022-07-27', '2022-07-21 03:33:40', '2022-07-21 03:33:40'),
(19, 1, 2, '2022-07-26', '2022-07-21 03:34:04', '2022-07-21 03:34:04'),
(20, 1, 2, '2022-07-28', '2022-07-21 03:35:24', '2022-07-21 03:35:24'),
(21, 1, 5, '2022-07-28', '2022-07-23 17:45:51', '2022-07-23 17:45:51'),
(22, 1, 1, '2022-07-24', '2022-07-23 17:47:12', '2022-07-23 17:47:12');

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
  `p_id` int(11) NOT NULL,
  `h_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `age` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `firstname`, `lastname`, `dob`, `gender`, `p_id`, `h_id`, `status`, `created_at`, `updated_at`, `age`) VALUES
(1, 'Qavi', 'Syed', '2020-10-30', 'Male', 1, 1, 'Non-vaccinated', '2022-08-17 09:28:09', '2022-08-17 05:35:17', 0),
(2, 'Alia', 'Shah', '2020-10-30', 'Female', 1, 1, 'Non-vaccinated', '2022-08-17 09:28:09', '2022-08-17 09:28:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `child_vaccination`
--

CREATE TABLE `child_vaccination` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `vaccinator_id` int(11) NOT NULL,
  `vaccine_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `vp_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `next_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_vaccination`
--

INSERT INTO `child_vaccination` (`id`, `vaccine_id`, `child_id`, `vaccinator_id`, `vaccine_date`, `created_at`, `updated_at`, `vp_id`, `age`, `next_date`) VALUES
(1, 1, 6, 5, '2022-08-06', '2022-08-06 14:19:49', '2022-08-06 14:19:49', 1, 0, '2022-10-06'),
(2, 3, 6, 5, '2022-08-06', '2022-08-06 14:19:49', '2022-08-06 14:19:49', 2, 0, '2022-10-06'),
(3, 2, 6, 5, '2022-08-06', '2022-08-06 14:19:49', '2022-08-06 14:19:49', 17, 0, '2022-10-06'),
(4, 1, 9, 5, '2022-08-06', '2022-08-06 14:28:28', '2022-08-06 14:28:28', 1, 0, '2022-10-06'),
(5, 3, 9, 5, '2022-08-06', '2022-08-06 14:28:28', '2022-08-06 14:28:28', 2, 0, '2022-10-06'),
(6, 2, 9, 5, '2022-08-06', '2022-08-06 14:28:28', '2022-08-06 14:28:28', 17, 0, '2022-10-06'),
(7, 1, 8, 5, '2022-08-17', '2022-08-17 08:15:25', '2022-08-17 08:15:25', 1, 0, '2022-10-17'),
(8, 3, 8, 5, '2022-08-17', '2022-08-17 08:15:25', '2022-08-17 08:15:25', 2, 0, '2022-10-17'),
(9, 2, 8, 5, '2022-08-17', '2022-08-17 08:15:25', '2022-08-17 08:15:25', 17, 0, '2022-10-17');

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
(5, 'JPJ02 Healthcare Center ', 'jpj2hcc@gmail.com', '673218', 'Caring-and-Healing-Center-logo.jpg', '0533704369', '10763421198', 'Jalal Pur Jattan Chowk', '50780', 'Jalal Pur Jattan', 'Gujrat', 15, 'Healthcare_center', 'Deleted', NULL, '2022-03-28 15:14:50'),
(8, 'zeeshan', 'zeeshan@gmail.com', '12345', 'admin1.PNG', '03114367578', '898907987', 'gujrat', '50700', 'Gujrat', 'gujrat', 15, 'Healthcare_center', 'Verified', '2022-08-03 05:27:44', '2022-08-03 05:27:44');

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
(15, '2022_04_21_221434_add_h_id_to_child', 12),
(16, '2022_07_20_162720_create_appointment_table', 13),
(17, '2022_07_21_090310_add_age_to_child', 14),
(18, '2022_07_21_102402_create_child_vaccination_table', 15),
(19, '2022_07_26_105311_add_vp_id_to_vaccine_process_table', 16),
(20, '2022_07_26_105611_add_vp_id_to_child_vaccination_table', 17),
(21, '2022_07_31_154505_add_age_to_child_vaccination_table', 18),
(22, '2022_07_31_154531_add_next_vaccination_date_to_child_vaccination_table', 18),
(23, '2022_08_01_120517_create_password_resets_table', 19),
(24, '2022_08_17_085525_drop_card_id_from_child_table', 20);

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
(1, 'Manal', 'Haider', 'manalzafarsyed@gmail.com', '1357', '16363.png', 'Female', '03136439871', '3012748739948', 'Opposite Petrol Pump, Moinuddin Pur, Gujrat', '50760', 'Moinuddin Pur', 'Gujrat', 2, 'Parent', 'Verified', '2022-03-28 18:40:46', '2022-03-28 18:40:46'),
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
(15, 'Khaliqa', 'Syed', 'khaliqasyed@gmail.com', '12345678', 'img1.jpg', 'Female', '03117647852', '3420159220916', 'Opposite Boys Elementary School, Madina Syedan', '50700', 'Madina Syedan', 'Gujrat', 0, 'Admin', 'Verified', '2022-04-17 14:59:28', '2022-08-01 09:04:49'),
(19, 'Zeeshan', 'Haider', 'zeeshanhaider@gmail.com', '1122', 'admin2.PNG', 'Male', '034567989', '75764676689797', 'Jail Chowk, Gujrat', '57', 'Gujrat', 'Gujrat', 1, 'Parent', 'Verified', '2022-08-03 05:31:23', '2022-08-03 05:31:23');

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
(1, 'BCG', 'BCG vaccine is used to prevent tuberculosis (TB) disease. TB disease affects the lungs.', 6, 1, '2022-04-19 16:22:04', '2022-08-17 08:15:25'),
(2, 'Hepatitis-B', 'It prevents from diseases of liver.', 4, 1, '2022-04-19 16:25:46', '2022-08-17 08:15:25'),
(3, 'OPV', 'OPV helps to fight with polio. Paralysis is the most severe symptom associated with polio, because it can lead to permanent disability and death.', -5, 1, '2022-04-19 16:28:50', '2022-08-17 08:15:25'),
(4, 'Rota Virus', 'Rotavirus vaccine is the best way to protect your child against rotavirus disease.', 10, 1, '2022-04-19 16:30:20', '2022-08-03 10:59:19'),
(5, 'IPV', 'It helps to prevent every kind of polio.', 22, 1, '2022-04-20 19:19:43', '2022-08-03 10:59:29'),
(6, 'PCV', 'It can protect against pneumococcal disease, which is any type of infection caused by Streptococcus pneumoniae bacteria.', 2, 1, '2022-04-20 19:22:36', '2022-08-03 10:59:29'),
(7, 'Penta', 'Pentavalent vaccine provides protection to a child from 5 life-threatening diseases – Diphtheria, Pertussis, Tetanus, Hepatitis B and Hib.', 5, 1, '2022-04-20 19:23:57', '2022-08-03 10:59:29'),
(8, 'Measles', 'The vaccine protects against three diseases: measles, mumps, and rubella.', 3, 1, '2022-04-20 19:25:33', '2022-08-03 10:59:53'),
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
  `valid_age` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `dose` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccine_process`
--

INSERT INTO `vaccine_process` (`id`, `v_id`, `valid_age`, `created_at`, `updated_at`, `dose`) VALUES
(1, 1, 0, '2022-04-20 19:30:30', '2022-04-20 19:30:30', 1),
(2, 3, 0, '2022-04-20 19:30:55', '2022-04-20 19:30:55', 0),
(3, 3, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(4, 4, 2, '2022-04-20 19:32:25', '2022-04-21 05:48:16', 1),
(5, 6, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(6, 7, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(7, 3, 4, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(8, 4, 4, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(9, 6, 4, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(10, 7, 4, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(11, 3, 6, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(12, 5, 6, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(13, 6, 6, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(14, 7, 6, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(15, 8, 9, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(16, 8, 15, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(17, 2, 0, '2022-04-20 19:30:55', '2022-04-20 19:30:55', 1),
(18, 9, 0, '2022-04-20 19:30:30', '2022-04-20 19:30:30', 1),
(19, 10, 0, '2022-04-20 19:30:55', '2022-04-20 19:30:55', 1),
(20, 11, 0, '2022-04-20 19:30:55', '2022-04-20 19:30:55', 0),
(21, 11, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(22, 12, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(23, 14, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(24, 15, 2, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(25, 11, 4, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(26, 12, 10, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(27, 14, 10, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(28, 15, 10, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2),
(29, 11, 14, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(30, 13, 14, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(31, 14, 14, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(32, 15, 14, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 3),
(33, 16, 9, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 1),
(34, 16, 15, '2022-04-20 19:32:25', '2022-04-20 19:32:25', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_vaccination`
--
ALTER TABLE `child_vaccination`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `child_vaccination`
--
ALTER TABLE `child_vaccination`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `healthcare_center`
--
ALTER TABLE `healthcare_center`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2024 at 08:46 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u718774278_htfhgfhgf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salary_date` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `balance`, `name`, `photo`, `email`, `email_verified_at`, `password`, `salary_date`, `type`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 0.00, 'Md Admin', 'admin profile', 'admin@gmail.com', '2023-11-29 18:37:08', '$2a$12$Dth.dIlJPoA57DwsJuXz7u1YSFmiUDrTdLNQSAHEQKz.V9y4PnOji', '2024-01-14', 'admin', '01600000000', 'sd', '4Jhc57QR6qWzwFvFsuydq4zfbOQyuXHFSqgI52cUSGekb8skIGzFqNp1Jbsp', '2023-11-28 11:11:57', '2024-01-14 12:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ledgers`
--

CREATE TABLE `admin_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bonus_name` varchar(255) NOT NULL,
  `counter` int(11) DEFAULT 0 COMMENT 'user get service count',
  `set_service_counter` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `winner` int(11) DEFAULT 0,
  `amount` double NOT NULL DEFAULT 0,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`id`, `bonus_name`, `counter`, `set_service_counter`, `code`, `winner`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(68, '1', 1, 1, 'Gf5jhsuv', 3, 36, 'active', '2024-01-05 17:32:13', '2024-01-05 17:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `bonus_ledgers`
--

CREATE TABLE `bonus_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bonus_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `bonus_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comings`
--

CREATE TABLE `comings` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `price` double(20,2) NOT NULL DEFAULT 0.00,
  `step` enum('zone_a','zone_b','zone_c') DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comings`
--

INSERT INTO `comings` (`id`, `photo`, `price`, `step`, `created_at`, `updated_at`) VALUES
(1, '/public/upload/coming/1692347592bJF.jpg', 200.00, 'zone_b', '2023-08-18 08:33:21', '2023-08-18 08:33:21'),
(2, '/public/upload/coming/1692347672KU8.jpg', 150.00, 'zone_b', '2023-08-18 08:34:33', '2023-08-18 08:34:33'),
(3, '/public/upload/coming/1692347694wtX.jpg', 210.00, 'zone_a', '2023-08-18 08:34:55', '2023-08-18 08:34:55'),
(4, '/public/upload/coming/1692347714zAH.jpg', 365.00, 'zone_c', '2023-08-18 08:35:14', '2023-08-18 08:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `token` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `user_id`, `task_id`, `amount`, `date`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 21.00, '2024-01-26', 'active', '2024-01-14', '2024-01-26 04:14:48', '2024-01-26 04:14:48'),
(2, 2, 1, 21.00, '2024-01-26', 'active', '2024-01-14', '2024-01-26 04:14:52', '2024-01-26 04:14:52'),
(3, 2, 1, 21.00, '2024-01-26', 'active', '2024-01-14', '2024-01-26 04:14:56', '2024-01-26 04:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `method_number` varchar(255) DEFAULT NULL,
  `oid` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL COMMENT 'User Number',
  `amount` varchar(255) NOT NULL COMMENT 'User Deposit Amount',
  `usdt` int(11) DEFAULT 0,
  `charge_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `final_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) NOT NULL,
  `feedback` text DEFAULT NULL,
  `status` enum('pending','rejected','approved') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `method_name`, `method_number`, `oid`, `photo`, `order_id`, `transaction_id`, `number`, `amount`, `usdt`, `charge_amount`, `final_amount`, `date`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'UUUU', NULL, 'D-602699285218464609', NULL, '40522247', 'AKH1K9OBLB', '0000000000', '942', 0, 0.00, 942.00, '26-01-2024 03:59:37', 'approved by admin', 'approved', '2024-01-26 08:59:37', '2024-01-26 09:00:20'),
(2, 2, 'bkash', NULL, 'D-63500183062757198', NULL, '79375031', 'AKH1K9OBLB', '0000000000', '700', 0, 0.00, 700.00, '26-01-2024 04:01:50', NULL, 'pending', '2024-01-26 09:01:50', '2024-01-26 09:01:50'),
(3, 2, 'nagad', NULL, 'D-576033518453916660', NULL, '53721874', '1234567', '0000000000', '942', 0, 0.00, 942.00, '26-01-2024 04:02:24', NULL, 'pending', '2024-01-26 09:02:24', '2024-01-26 09:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `drows`
--

CREATE TABLE `drows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drows`
--

INSERT INTO `drows` (`id`, `icon`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '/public/upload/draw/1683283338TJz.png', 0.03, 'active', '2023-05-05 04:05:27', '2023-05-13 20:34:44'),
(2, '/public/upload/draw/1683283166YF3.png', 0.04, 'active', '2023-05-05 04:39:27', '2023-05-13 20:34:58'),
(3, '/public/upload/draw/1683283464oAs.png', 0.02, 'active', '2023-05-05 04:44:25', '2023-05-13 20:35:17'),
(4, '/public/upload/draw/1683283480sGS.png', 0.04, 'active', '2023-05-05 04:44:40', '2023-05-13 20:35:34'),
(5, '/public/upload/draw/1683283494O9l.png', 0.06, 'active', '2023-05-05 04:44:54', '2023-05-13 20:35:54'),
(6, '/public/upload/draw/1683283507BZ0.png', 0.01, 'active', '2023-05-05 04:45:08', '2023-05-13 20:36:15'),
(7, '/public/upload/draw/1683283524Kwp.png', 0.02, 'active', '2023-05-05 04:45:24', '2023-05-13 20:36:33'),
(8, '/public/upload/draw/1683283538Bgb.png', 0.07, 'active', '2023-05-05 04:45:38', '2023-05-13 20:36:52'),
(9, '/public/upload/draw/1683283551jmN.png', 0.01, 'active', '2023-05-05 04:45:52', '2023-05-13 20:37:13'),
(10, '/public/upload/draw/1683283564Wh6.png', 0.01, 'active', '2023-05-05 04:46:04', '2023-05-13 20:37:30'),
(11, '/public/upload/draw/16832835829nS.png', 9.00, 'active', '2023-05-05 04:46:22', '2023-05-05 04:46:22'),
(13, '/public/upload/draw/1683283625dBF.png', 10.00, 'active', '2023-05-05 04:47:06', '2023-05-05 04:47:06'),
(14, '/public/upload/draw/1684010302Ui4.jpg', 0.09, 'active', '2023-05-13 20:38:22', '2023-05-13 20:38:22'),
(15, '/public/upload/draw/1684010340IzV.jpg', 0.04, 'active', '2023-05-13 20:39:00', '2023-05-13 20:39:00'),
(16, '/public/upload/draw/1684010380FK5.jpg', 0.02, 'active', '2023-05-13 20:39:40', '2023-05-13 20:39:40'),
(17, '/public/upload/draw/1684010417DyR.jpg', 0.03, 'active', '2023-05-13 20:40:17', '2023-05-13 20:40:17'),
(18, '/public/upload/draw/1684010451gAc.jpg', 0.07, 'active', '2023-05-13 20:40:51', '2023-05-13 20:40:51'),
(19, '/public/upload/draw/1684010489RMV.jpg', 0.03, 'active', '2023-05-13 20:41:29', '2023-05-13 20:41:29'),
(20, '/public/upload/draw/16840105175S5.jpg', 0.04, 'active', '2023-05-13 20:41:57', '2023-05-13 20:41:57'),
(21, '/public/upload/draw/1684010557xWD.jpg', 0.02, 'active', '2023-05-13 20:42:37', '2023-05-13 20:42:37'),
(22, '/public/upload/draw/16840105977bP.png', 0.07, 'active', '2023-05-13 20:43:17', '2023-05-13 20:43:17'),
(23, '/public/upload/draw/1684010631z28.png', 0.01, 'active', '2023-05-13 20:43:51', '2023-05-13 20:43:51'),
(24, '/public/upload/draw/1684010665NuD.png', 0.01, 'active', '2023-05-13 20:44:25', '2023-05-13 20:44:25'),
(25, '/public/upload/draw/1684010703llI.png', 0.07, 'active', '2023-05-13 20:45:03', '2023-05-13 20:45:03'),
(26, '/public/upload/draw/1684010739B5n.png', 0.09, 'active', '2023-05-13 20:45:39', '2023-05-13 20:45:39'),
(27, '/public/upload/draw/1684010775xqH.png', 0.01, 'active', '2023-05-13 20:46:15', '2023-05-13 20:46:15'),
(28, '/public/upload/draw/1684010812IpE.png', 0.07, 'active', '2023-05-13 20:46:52', '2023-05-13 20:46:52'),
(29, '/public/upload/draw/16840108528yB.png', 0.03, 'active', '2023-05-13 20:47:32', '2023-05-13 20:47:32'),
(30, '/public/upload/draw/1684010890fmG.png', 0.09, 'active', '2023-05-13 20:48:10', '2023-05-13 20:48:10'),
(31, '/public/upload/draw/1684010921WpP.png', 0.07, 'active', '2023-05-13 20:48:41', '2023-05-14 06:58:24');

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
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` longtext NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `commission` double(20,2) NOT NULL DEFAULT 0.00 COMMENT 'percent',
  `validity` bigint(20) NOT NULL,
  `minimum_invest` double(20,2) NOT NULL DEFAULT 0.00 COMMENT 'amount',
  `status` enum('upcoming','active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `name`, `title`, `photo`, `commission`, `validity`, `minimum_invest`, `status`, `created_at`, `updated_at`) VALUES
(18, 'Fund 1', '1', '/public/upload/fund/1706223895WNe.jpg', 115.00, 1, 100.00, 'active', '2024-01-26 10:04:55', '2024-01-26 10:05:59'),
(19, 'Fund 2', '2', '/public/upload/fund/170622401516I.jpg', 255.00, 3, 200.00, 'active', '2024-01-26 10:06:55', '2024-01-26 10:08:17'),
(20, 'Fund 3', '3', '/public/upload/fund/1706224082iOY.jpg', 390.00, 7, 300.00, 'active', '2024-01-26 10:08:02', '2024-01-26 10:08:02'),
(21, 'Fund 4', '4', '/public/upload/fund/1706224161IJI.jpg', 700.00, 10, 500.00, 'active', '2024-01-26 10:09:21', '2024-01-26 10:09:21'),
(22, 'Fund 5', '5', '/public/upload/fund/1706224220nxH.jpg', 1000.00, 15, 800.00, 'active', '2024-01-26 10:10:20', '2024-01-26 10:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `fund_invests`
--

CREATE TABLE `fund_invests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fund_id` bigint(20) UNSIGNED NOT NULL,
  `validity_expired` varchar(255) NOT NULL,
  `price` double(20,2) NOT NULL DEFAULT 0.00,
  `return_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiru_notices`
--

CREATE TABLE `hiru_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiru_notices`
--

INSERT INTO `hiru_notices` (`id`, `desc`, `created_at`, `updated_at`) VALUES
(5, 'Welcome to PNG-LDT. It\'s a mining era privilege.\r\n\r\n You can activated\r\n different machines here. If you have activated either machine, know that you must activate the machine every 24 hours. \r\nIf you don\'t turn on the machine it can\'t earn. PNG robotics machines can give you income through mining, you can keep an eye on the Telegram discussion group for details. \r\n\r\nThank you for being a PNG member.', '2023-05-14 19:10:36', '2023-05-14 19:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recharge` varchar(255) DEFAULT NULL,
  `recharge_button` varchar(255) DEFAULT NULL,
  `withdraw` varchar(255) DEFAULT NULL,
  `withdraw_button` varchar(255) DEFAULT NULL,
  `invitation` varchar(255) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `apps` varchar(255) DEFAULT NULL,
  `lucky_draw` varchar(255) DEFAULT NULL,
  `robot` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `profile_bank` varchar(255) DEFAULT NULL,
  `profile_invite` varchar(255) DEFAULT NULL,
  `profile_mining` varchar(255) DEFAULT NULL,
  `profile_team` varchar(255) DEFAULT NULL,
  `profile_faq` varchar(255) DEFAULT NULL,
  `profile_income` varchar(255) DEFAULT NULL,
  `profile_touch` varchar(255) DEFAULT NULL,
  `profile_reword` varchar(255) DEFAULT NULL,
  `profile_password` varchar(255) DEFAULT NULL,
  `profile_logout` varchar(255) DEFAULT NULL,
  `team_banner` varchar(255) DEFAULT NULL,
  `team_details_banner` varchar(255) DEFAULT NULL,
  `team_label1` varchar(255) DEFAULT NULL,
  `team_label2` varchar(255) DEFAULT NULL,
  `team_label3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `recharge`, `recharge_button`, `withdraw`, `withdraw_button`, `invitation`, `team`, `apps`, `lucky_draw`, `robot`, `about`, `profile_bank`, `profile_invite`, `profile_mining`, `profile_team`, `profile_faq`, `profile_income`, `profile_touch`, `profile_reword`, `profile_password`, `profile_logout`, `team_banner`, `team_details_banner`, `team_label1`, `team_label2`, `team_label3`, `created_at`, `updated_at`) VALUES
(1, '/public/upload/icon/1684012590Soa.png', '/public/upload/icon/16840125907fH.png', '/public/upload/icon/1684012590Vyo.png', '/public/upload/icon/1684012590s8Y.png', '/public/upload/icon/1683321553N9r.png', '/public/upload/icon/1683322476mWY.png', '/public/upload/icon/1684012590Uti.png', '/public/upload/icon/1684012590fm5.png', '/public/upload/icon/1683322477lvm.png', '/public/upload/icon/1684012590Woc.png', '/public/upload/icon/16840125906yF.png', '/public/upload/icon/1683323093iNz.png', '/public/upload/icon/1683323093uTb.png', '/public/upload/icon/1683323093sY9.png', '/public/upload/icon/1683323093aud.png', '/public/upload/icon/1684012590Vzj.png', '/public/upload/icon/1683324138WOd.png', '/public/upload/icon/16840125900gz.png', '/public/upload/icon/16840125907L1.png', '/public/upload/icon/16840125902ub.png', '/public/upload/icon/1683311214V7D.png', '/public/upload/icon/1683311214eIB.png', '/public/upload/icon/1683311214eMN.png', '/public/upload/icon/1683311214efG.png', '/public/upload/icon/1683310910SC0.png', '2023-05-05 12:21:50', '2023-05-13 21:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `improvments`
--

CREATE TABLE `improvments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) NOT NULL,
  `amount_limit` double NOT NULL DEFAULT 0,
  `between_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `commission` double(20,2) NOT NULL DEFAULT 1.00 COMMENT 'percentage',
  `first_refer_commission` double(20,2) NOT NULL DEFAULT 1.00 COMMENT 'percentage',
  `second_refer_commission` double(20,2) NOT NULL DEFAULT 1.00 COMMENT 'percentage',
  `third_refer_commission` double(20,2) NOT NULL DEFAULT 1.00 COMMENT 'percentage',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `improvments`
--

INSERT INTO `improvments` (`id`, `level`, `amount_limit`, `between_amount`, `commission`, `first_refer_commission`, `second_refer_commission`, `third_refer_commission`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VIP 1', 500, 5000.00, 5.00, 10.00, 4.00, 1.00, 'active', '2023-06-23 15:00:43', '2023-07-17 01:47:03'),
(2, 'VIP 2', 5001, 10000.00, 5.50, 10.00, 4.00, 1.00, 'active', '2023-06-23 15:07:37', '2023-07-17 01:47:18'),
(3, 'VIP 3', 10001, 25000.00, 6.00, 10.00, 4.00, 1.00, 'active', '2023-06-23 15:07:58', '2023-07-17 01:47:30'),
(4, 'VIP4', 25001, 35000.00, 6.50, 10.00, 4.00, 1.00, 'active', '2023-07-06 08:55:38', '2023-07-17 01:47:44'),
(5, 'Vip 5', 35001, 50000.00, 7.00, 10.00, 4.00, 1.00, 'active', '2023-07-06 08:56:18', '2023-07-17 01:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `lucky_ledgers`
--

CREATE TABLE `lucky_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `draw_id` bigint(20) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `current_date` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_074227_create_admins_table', 1),
(6, '2023_03_17_123007_create_packages_table', 2),
(8, '2023_03_27_103153_create_payment_methods_table', 3),
(10, '2023_03_28_074201_create_deposits_table', 4),
(11, '2023_03_28_142734_create_user_ledgers_table', 5),
(12, '2023_03_28_142802_create_admin_ledgers_table', 6),
(13, '2023_03_30_071745_create_vip_sliders_table', 7),
(14, '2023_03_30_150139_create_settings_table', 8),
(15, '2023_04_01_185541_create_bonuses_table', 9),
(16, '2023_04_01_205009_create_bonus_ledgers_table', 10),
(17, '2023_04_05_203304_create_purchases_table', 11),
(18, '2023_04_09_200835_create_minings_table', 12),
(19, '2023_05_05_092841_create_drows_table', 13),
(20, '2023_05_05_111428_create_lucky_ledgers_table', 14),
(21, '2023_05_05_161904_create_icons_table', 15),
(22, '2023_05_09_214610_create_hiru_notices_table', 16),
(23, '2023_06_06_210226_create_funds_table', 17),
(24, '2023_06_06_222047_create_fund_invests_table', 18),
(25, '2023_06_11_113547_create_checkins_table', 19),
(26, '2023_06_23_193458_create_improvments_table', 20),
(27, '2023_06_24_083626_create_commissions_table', 21),
(28, '2023_12_14_221116_create_tasks_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `minings`
--

CREATE TABLE `minings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `running_start_date` varchar(255) DEFAULT NULL,
  `running_end_date` varchar(255) DEFAULT NULL,
  `total_time` varchar(255) DEFAULT NULL COMMENT 'total_package_hour',
  `continue_date_time` varchar(255) DEFAULT NULL,
  `amount_24_hour` double(20,4) NOT NULL DEFAULT 0.0000 COMMENT '24=1counter',
  `counter_24_hour` int(11) NOT NULL DEFAULT 0 COMMENT '24=1counter',
  `running_status` enum('start','end') NOT NULL DEFAULT 'start',
  `amount_status` enum('true','false') NOT NULL DEFAULT 'false' COMMENT 'true=balance added, false=''mining running''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_type` varchar(255) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_desc` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` text DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `task` int(11) DEFAULT 0,
  `validity` varchar(255) NOT NULL COMMENT 'count days',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `is_default` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `title`, `photo`, `price`, `task`, `validity`, `status`, `is_default`, `created_at`, `updated_at`) VALUES
(25, 'VIP 1', '1', '/public/upload/package/1706223106H4l.jpg', 12, 2, '7', 'active', '0', '2024-01-26 09:51:46', '2024-01-26 09:52:31'),
(26, 'VIP 2', '2', '/public/upload/package/1706223132D69.jpg', 22, 2, '42', 'active', '0', '2024-01-26 09:52:12', '2024-01-26 09:52:12'),
(27, 'VIP 3', '3', '/public/upload/package/1706223207edt.jpg', 50, 3, '42', 'active', '0', '2024-01-26 09:53:28', '2024-01-26 09:54:11'),
(28, 'VIP 4', '4', '/public/upload/package/1706223294ozk.jpg', 100, 5, '42', 'active', '0', '2024-01-26 09:54:54', '2024-01-26 09:54:54'),
(29, 'VIP 5', '5', '/public/upload/package/1706223319Miz.jpg', 150, 7, '42', 'active', '0', '2024-01-26 09:55:19', '2024-01-26 09:55:19'),
(30, 'VIP 6', '6', '/public/upload/package/1706223365jir.jpg', 200, 8, '42', 'active', '0', '2024-01-26 09:56:05', '2024-01-26 09:56:05'),
(31, 'VIP 7', '7', '/public/upload/package/1706223392BEP.jpg', 300, 14, '42', 'active', '0', '2024-01-26 09:56:32', '2024-01-26 09:57:10'),
(32, 'VIP 8', '8', '/public/upload/package/1706223458QjZ.jpg', 500, 18, '42', 'active', '0', '2024-01-26 09:57:38', '2024-01-26 09:57:38'),
(33, 'VIP 9', '9', '/public/upload/package/1706225755GdF.jpg', 700, 25, '42', 'active', '0', '2024-01-26 09:58:05', '2024-01-26 10:35:55'),
(34, 'VIP 10', '10', '/public/upload/package/1706223537b7I.jpg', 1000, 32, '42', 'active', '0', '2024-01-26 09:58:57', '2024-01-26 09:58:57');

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `photo`, `address`, `status`, `created_at`, `updated_at`) VALUES
(32, 'USDT (TRC20)', '/public/upload/method/1706225967UB1.png', 'TBBKZzHadfa7vihZ5TkHifYUYaV9scGuZf', 'active', '2023-07-05 07:44:20', '2024-01-26 10:39:27'),
(33, 'BTC(SegWit)', '/public/upload/method/1706226052SGt.png', 'bc1qw2x0g2j3ql90q7vrlsxanngjqp9pc8txvuz2yr', 'active', '2023-07-05 20:17:41', '2024-01-26 10:40:53'),
(41, 'bkash', '/public/upload/method/1702980498fcX.png', '974765644', 'active', '2023-12-19 16:08:18', '2024-01-26 10:41:05'),
(42, 'Bank', '/public/upload/method/1706226131jbn.jpeg', '86687635', 'active', '2024-01-26 10:42:11', '2024-01-26 10:42:11');

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
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `daily_income` double(20,2) NOT NULL DEFAULT 0.00,
  `hours` varchar(255) DEFAULT '0',
  `task` int(11) NOT NULL DEFAULT 0,
  `date` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `running_status` enum('running','stop') NOT NULL DEFAULT 'stop',
  `validity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `package_id`, `amount`, `daily_income`, `hours`, `task`, `date`, `note`, `status`, `running_status`, `validity`, `created_at`, `updated_at`) VALUES
(1, 2, 13, 542, 63.00, '0', 3, '26-01-2024 04:01', NULL, 'active', 'stop', '2024-02-15 04:01:22', '2024-01-26 09:01:22', '2024-01-26 09:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `withdraw_charge` int(11) NOT NULL DEFAULT 0 COMMENT 'percent',
  `minimum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `maximum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `site_name` varchar(255) NOT NULL,
  `channel` varchar(255) DEFAULT NULL,
  `currency` varchar(25) DEFAULT NULL,
  `maximum_refer_friend` int(11) NOT NULL DEFAULT 0,
  `maximum_refer_commission_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `registration_bonus` double(20,2) NOT NULL DEFAULT 0.00,
  `first_level` double(20,2) NOT NULL DEFAULT 0.00,
  `second_level` double(20,2) NOT NULL DEFAULT 0.00,
  `third_level` double(20,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `withdraw_charge`, `minimum_withdraw`, `maximum_withdraw`, `site_name`, `channel`, `currency`, `maximum_refer_friend`, `maximum_refer_commission_amount`, `registration_bonus`, `first_level`, `second_level`, `third_level`, `created_at`, `updated_at`) VALUES
(1, 15, 300.00, 100000.00, 'adoptcow', '#', '$', 10, 30.00, 30.00, 0.00, 0.00, 0.00, '2022-01-18 11:03:22', '2024-01-26 09:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_code` varchar(255) DEFAULT NULL,
  `remaining_code` varchar(255) NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_code`, `remaining_code`, `amount`, `created_at`, `updated_at`) VALUES
(1, '120100', '12000', 2, '2023-12-14 22:46:24', '2024-01-26 09:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_by` varchar(255) DEFAULT NULL,
  `ref_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `phone_code` varchar(20) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `receive_able_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `register_bonus` double(20,2) NOT NULL DEFAULT 0.00,
  `register_refer_bonus` double(20,2) NOT NULL DEFAULT 0.00,
  `w_password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `gateway_method` varchar(50) DEFAULT NULL,
  `gateway_number` varchar(50) DEFAULT NULL,
  `bank_password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `bonus_vip` int(10) NOT NULL DEFAULT 0 COMMENT '1=get_bonus_vip, 0=no',
  `first_time_bonus` int(11) NOT NULL DEFAULT 0,
  `ban_unban` enum('ban','unban') NOT NULL DEFAULT 'unban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_by`, `ref_id`, `name`, `realname`, `phone_code`, `phone`, `ip`, `username`, `email`, `email_verified_at`, `password`, `type`, `balance`, `receive_able_amount`, `register_bonus`, `register_refer_bonus`, `w_password`, `photo`, `bank_name`, `gateway_method`, `gateway_number`, `bank_password`, `remember_token`, `code`, `status`, `bonus_vip`, `first_time_bonus`, `ban_unban`, `created_at`, `updated_at`) VALUES
(1, NULL, 'fgfg', 'fgf', 'fg', '10', '0', 'sds', 'sd', 'sd', NULL, 'sd', NULL, 5.04, 0.00, 0.00, 40.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 0, 0, 'unban', NULL, '2024-05-05 01:44:24'),
(2, 'fgfg', '922hd563uz', 'User44', NULL, '+880', '1933690444', '::1', 'uname1933690444', 'user346451706216805@gmail.com', NULL, '$2y$10$SLLhikuyEes9s9yJA1rVJevdUa15zV96UxZQdmZM2V3buHIU4nytm', NULL, 473.00, 0.00, 10.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '630384', 'active', 0, 0, 'unban', '2024-01-26 03:06:45', '2024-01-26 09:14:56'),
(3, 'fgfg', 'qt896r5883', 'User32', NULL, '+880', '5556667788', '88.246.199.15', 'uname5556667788', 'user841161714851864@gmail.com', NULL, '$2y$10$IVfUTFdpsjIo/EQ09eRa9ev4.MhoqKzZ6.IJmOkifXv2qMUGXvvo6', NULL, 30.00, 0.00, 30.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '818398', 'active', 0, 0, 'unban', '2024-05-05 01:44:24', '2024-05-05 01:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_ledgers`
--

CREATE TABLE `user_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `get_balance_from_user_id` bigint(20) DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `step` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ledgers`
--

INSERT INTO `user_ledgers` (`id`, `user_id`, `get_balance_from_user_id`, `reason`, `perticulation`, `amount`, `debit`, `credit`, `status`, `date`, `step`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'user_deposit', 'user deposit using externalment', 942, 942, 0, 'pending', '24-01-26', NULL, '2024-01-26 08:59:37', '2024-01-26 08:59:37'),
(2, 2, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our adoptcow', 942, 942, 0, 'approved', '26-01-2024 04:00', NULL, '2024-01-26 09:00:20', '2024-01-26 09:00:20'),
(3, 2, NULL, 'vip_purchase', 'Your vip purchase successfully. thank you', 542, 0, 542, 'approved', '2024-01-26 04:01:22', NULL, '2024-01-26 09:01:22', '2024-01-26 09:01:22'),
(4, 1, 2, 'refer_bonus', 'Congratulations', 0, 0, 0, 'approved', '26-01-2024 04:01', 'first', '2024-01-26 09:01:22', '2024-01-26 09:01:22'),
(5, 2, NULL, 'user_deposit', 'user deposit using externalment', 700, 700, 0, 'pending', '24-01-26', NULL, '2024-01-26 09:01:50', '2024-01-26 09:01:50'),
(6, 2, NULL, 'user_deposit', 'user deposit using externalment', 942, 942, 0, 'pending', '24-01-26', NULL, '2024-01-26 09:02:24', '2024-01-26 09:02:24'),
(7, 1, 2, 'refer_bonus', 'Congratulations', 1.68, 1.68, 0, 'approved', '26-01-2024 04:14', 'first', '2024-01-26 09:14:48', '2024-01-26 09:14:48'),
(8, 1, 2, 'refer_bonus', 'Congratulations', 1.68, 1.68, 0, 'approved', '26-01-2024 04:14', 'first', '2024-01-26 09:14:52', '2024-01-26 09:14:52'),
(9, 1, 2, 'refer_bonus', 'Congratulations', 1.68, 1.68, 0, 'approved', '26-01-2024 04:14', 'first', '2024-01-26 09:14:56', '2024-01-26 09:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `vip_sliders`
--

CREATE TABLE `vip_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `page_type` enum('home_page','vip_page') NOT NULL DEFAULT 'home_page',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vip_sliders`
--

INSERT INTO `vip_sliders` (`id`, `photo`, `status`, `page_type`, `created_at`, `updated_at`) VALUES
(11, '/public/upload/slider/1688711605xsK.jpg', 'active', 'home_page', '2023-07-05 01:06:16', '2023-07-07 04:33:25'),
(12, '/public/upload/slider/1688711639ObA.jpg', 'active', 'home_page', '2023-07-05 01:06:35', '2023-07-07 04:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `method_name` varchar(255) DEFAULT NULL,
  `oid` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(40) NOT NULL,
  `rate` decimal(20,2) NOT NULL DEFAULT 0.00,
  `charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `trx` varchar(40) DEFAULT NULL,
  `final_amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `after_charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `withdraw_information` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending' COMMENT '1=>success, 2=>pending, 3=>cancel,  ',
  `admin_feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkins_user_id_foreign` (`user_id`);

--
-- Indexes for table `comings`
--
ALTER TABLE `comings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drows`
--
ALTER TABLE `drows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_invests`
--
ALTER TABLE `fund_invests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fund_invests_user_id_foreign` (`user_id`),
  ADD KEY `fund_invests_fund_id_foreign` (`fund_id`);

--
-- Indexes for table `hiru_notices`
--
ALTER TABLE `hiru_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `improvments`
--
ALTER TABLE `improvments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lucky_ledgers_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minings`
--
ALTER TABLE `minings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `minings_user_id_foreign` (`user_id`),
  ADD KEY `minings_package_id_foreign` (`package_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_package_id_foreign` (`package_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comings`
--
ALTER TABLE `comings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drows`
--
ALTER TABLE `drows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fund_invests`
--
ALTER TABLE `fund_invests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiru_notices`
--
ALTER TABLE `hiru_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `improvments`
--
ALTER TABLE `improvments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `minings`
--
ALTER TABLE `minings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkins`
--
ALTER TABLE `checkins`
  ADD CONSTRAINT `checkins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fund_invests`
--
ALTER TABLE `fund_invests`
  ADD CONSTRAINT `fund_invests_fund_id_foreign` FOREIGN KEY (`fund_id`) REFERENCES `funds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fund_invests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD CONSTRAINT `lucky_ledgers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

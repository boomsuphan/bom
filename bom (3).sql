-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 25, 2020 at 04:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `stasut_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `name_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `position` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `license_plate` varchar(10) NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `user`, `password`, `stasut_user`, `name_user`, `Fullname`, `position`, `department`, `license_plate`, `sex`) VALUES
(1, 'watchara', '12345', 'app', 'lui', 'watchara chonthapha', 'programmer', 'application', '', 'male'),
(2, 'sales-barcode1', 'gggg1009', 'sales', 'Goy', 'Pornraphat Martvised', 'sales', 'office', '7กฒ6895', 'female'),
(3, 'kae', '4321', 'sales', 'Kae', 'Jantima Channara', 'manager', 'office', '', 'female'),
(4, 'sales-barcode2', 'somao0806', 'sales', 'Somo', 'Patthamanan Phookronghin', 'sales', 'paper-cup', '2กถ 6907', 'female'),
(5, 'application', 'appen', 'app', 'Wee', 'Nawee Sangkhaw', 'application-manager', 'application', '4กศ 8027', 'male'),
(7, 'admin', '1234', 'admin', 'Moddang', 'Anutita Nantha-klub', 'admin', 'office', '', 'female'),
(9, 'lui1', '1234', 'admin', 'wat', 'watchara chonthapha', 'programmer', 'application', '', 'male'),
(10, 'nid', '1819', 'account', 'Nid', 'Rujira Wintachai', 'account', 'office', '', 'female'),
(11, 'lot', '1234', 'app', 'Lot', 'Nichanan Aueanchirapornchai', 'programmer', 'application', '', 'female'),
(12, 'tum', '1234', 'app', 'tum', 'Pongpak Yingyaem', 'technician', 'application', '', 'male'),
(13, 'jpond', '1234', 'app', 'Pond', 'Aviruth Grompraputh', 'co-programmer', 'application', 'กท 4475', 'male'),
(15, 'tik', '6537', 'paper', 'Chu', 'Chutima Chongsakul', 'admin', 'paper-cup', '', 'female'),
(16, 'tua', '1234', 'app', 'Tua', 'Phubet Mabklang', 'programmer', 'application', '', 'female'),
(17, 'noi', '1234', 'maid', 'Noi', 'Supattra Phongsak', 'maid', 'office', '', 'female'),
(18, 'richard', '1234', 'paper', 'Richard', 'Ong How Leong', 'paper-manager', 'paper-cup', '', 'male'),
(19, 'tump', '1234', 'paper', 'Tump', 'Komsak Aonmee', 'driver', 'paper-cup', '', 'male'),
(22, 'Phuriwat ', '24122539', 'app', 'Tar', 'Phuriwat Wanna', 'Programmer', 'application', '', 'male'),
(21, 'hot', '1234', 'paper', 'Hot', 'Aphisak Boonthongtho', 'driver', 'paper-cup', '', 'male'),
(23, 'chayanan', 'jipjip1936', 'sales', 'Jip ', 'Chayanan Mungpong', 'sales', 'paper-cup', '7กต 8794', 'female'),
(24, 'Hormchui', 'ChUi7777', 'sales', 'Chui', 'Sarunyu  detworrawit', 'sales', 'office', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `bom2`
--

CREATE TABLE `bom2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bomsuccess_at` date DEFAULT NULL,
  `bom_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bom2`
--

INSERT INTO `bom2` (`id`, `module`, `bomsuccess_at`, `bom_status`, `project_id`, `created_at`, `updated_at`) VALUES
(4, 'Vision', NULL, NULL, 2, '2020-02-24 18:58:03', '2020-02-24 18:58:03'),
(5, 'Mechanical', NULL, NULL, 2, '2020-02-24 18:58:11', '2020-02-24 18:58:11'),
(6, 'Electrical', NULL, NULL, 2, '2020-02-24 18:58:18', '2020-02-24 18:58:33'),
(7, 'Vision', NULL, NULL, 3, '2020-02-24 19:36:23', '2020-02-24 19:36:23'),
(8, 'Electrical', NULL, NULL, 3, '2020-02-24 19:40:28', '2020-02-24 19:40:28'),
(9, 'Mechanical', NULL, NULL, 3, '2020-02-24 19:59:58', '2020-02-24 19:59:58'),
(10, 'Vision', NULL, NULL, 4, NULL, NULL),
(11, 'Electrical', NULL, NULL, 4, NULL, NULL),
(12, 'Mechanical', NULL, NULL, 4, NULL, NULL),
(13, 'Vision', NULL, NULL, 5, '2020-02-24 20:23:34', '2020-02-24 20:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `bomdetail`
--

CREATE TABLE `bomdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bom_id` int(11) DEFAULT NULL,
  `part_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `in_stock` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pirce` float DEFAULT NULL,
  `bom_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bomdetail`
--

INSERT INTO `bomdetail` (`id`, `supplier`, `part_no`, `description`, `qty`, `remark`, `user_id`, `bom_id`, `part_id`, `created_at`, `updated_at`, `in_stock`, `pirce`, `bom_name`) VALUES
(3, 'ภาคิน', 'FLOOR CONTROL-2', 'ฐานยึดพื้น', 1, NULL, 1, 4, 1, '2020-02-24 19:32:13', '2020-02-24 19:32:13', NULL, 500, 'Vision'),
(4, 'ภาคิน', 'Part L FQ2', 'Part L FQ2', 1, NULL, 1, 4, 3, '2020-02-24 19:34:54', '2020-02-24 19:34:54', NULL, 650, 'Vision'),
(6, 'Omron', 'FQ2-S20100N', 'FQ2-S2 Series , Wide View (Short-distance)', 2, NULL, 11, 7, 1, '2020-02-24 19:38:09', '2020-02-24 19:38:09', NULL, 35000, 'Vision'),
(7, 'Omron', 'FQ-WN005', 'FQ Ethernet Cables, Roboticcable, 5M', 2, NULL, 11, 7, NULL, '2020-02-24 19:38:40', '2020-02-24 19:38:44', NULL, 0, 'Vision'),
(8, 'Omron', 'FQ-WD005', 'I/O Cables, Roboticcable, 5M', 2, NULL, 11, 7, NULL, '2020-02-24 19:39:08', '2020-02-24 19:39:18', NULL, 0, 'Vision'),
(9, 'Omron', 'S8VK-G12024', 'DC power supply', 2, NULL, 11, 7, 1, '2020-02-24 19:39:37', '2020-02-24 19:39:37', NULL, 0, 'Vision'),
(10, 'Omron', 'FQ2-D30', 'Touch Finder', 1, NULL, 11, 7, 1, '2020-02-24 19:39:57', '2020-02-24 19:39:57', NULL, 15000, 'Vision'),
(11, 'Advice', 'DGS-105', 'Gigabit Switching Hub D-LINK (DGS-105) 5 Port (Metal Case) (4\")', 1, NULL, 11, 7, 1, '2020-02-24 19:40:16', '2020-02-24 19:40:16', NULL, 620, 'Vision'),
(12, 'SPE', 'AD16-22DS(สีแดง)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีแดง)', 1, NULL, 12, 8, 1, '2020-02-24 19:41:55', '2020-02-24 19:41:55', NULL, 30, 'Electrical'),
(13, 'SPE', 'AD16-22DS(สีเขียว)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีเขียว)', 1, NULL, 12, 8, 1, '2020-02-24 19:42:17', '2020-02-24 19:42:17', NULL, 30, 'Electrical'),
(14, 'SPE', 'AD16-22DS(สีน้ำเงิน)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีน้ำเงิน)', 1, NULL, 12, 8, 1, '2020-02-24 19:42:35', '2020-02-24 19:42:35', NULL, 30, 'Electrical'),
(15, 'SPE', 'AD16-22DS(สีเหลือง)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีเหลือง)', 1, NULL, 12, 8, 1, '2020-02-24 19:42:54', '2020-02-24 19:42:54', NULL, 30, 'Electrical'),
(16, 'SPE', 'AVW-411', 'สวิทช์ฉุกเฉิน (Emergency Switch)', 1, NULL, 12, 8, 1, '2020-02-24 19:43:13', '2020-02-24 19:43:13', NULL, 100, 'Electrical'),
(17, 'SPE', 'BUK-3N', 'เทอร์มินอลราง (Din Rail Terminal)', 10, NULL, 12, 8, 1, '2020-02-24 19:43:49', '2020-02-24 19:43:49', NULL, 22, 'Electrical'),
(18, 'SPE', 'E-UK', 'ใช้ร่วมกับเทอร์มินอล BUK ทุกขนาด', 2, NULL, 12, 8, 1, '2020-02-24 19:44:13', '2020-02-24 19:44:13', NULL, 10, 'Electrical'),
(19, 'SPE', 'Terminal BAR-B', 'รางเทอร์มินอลปีกนก แบบอลูมิเนียม', 1, NULL, 12, 8, 1, '2020-02-24 19:44:37', '2020-02-24 19:44:37', NULL, 90, 'Electrical'),
(20, 'SPE', 'PG-16', 'PG-Type เคเบิลแกลน PVC (PVC Cable Gland)', 2, NULL, 12, 8, 1, '2020-02-24 19:45:25', '2020-02-24 19:45:25', NULL, 20, 'Electrical'),
(21, 'SPE', 'PG-19', 'PG-Type เคเบิลแกลน PVC (PVC Cable Gland)', 4, NULL, 12, 8, 1, '2020-02-24 19:45:45', '2020-02-24 19:45:45', NULL, 25, 'Electrical'),
(22, 'SPE', 'FB10-05', 'ใช้ร่วมกับเทอร์มินอล BUK 3N', 1, NULL, 12, 8, 1, '2020-02-24 19:47:00', '2020-02-24 19:47:00', NULL, 50, 'Electrical'),
(23, 'SPE', 'ABW-111-D', 'สวิทช์กดติด-ปล่อยดับ (Pushbutton Switch)(สีเหลือง)', 1, NULL, 12, 8, 1, '2020-02-24 19:47:26', '2020-02-24 19:47:26', NULL, 50, 'Electrical'),
(24, 'SPE', '22 AWG 100ft(สีน้ำเงิน)', 'สายไฟเดี่ยว 22AWG UL1007 ความยาว100ft (สีน้ำเงิน)', 1, NULL, 12, 8, 1, '2020-02-24 19:47:58', '2020-02-24 19:47:58', NULL, 110, 'Electrical'),
(25, 'SPE', '22 AWG 100ft(สีน้ำตาล)', 'สายไฟเดี่ยว 22AWG UL1007 ความยาว100ft (สีนน้ำตาล)', 1, NULL, 12, 8, 1, '2020-02-24 19:48:50', '2020-02-24 19:48:50', NULL, 110, 'Electrical'),
(26, 'SPE', '22 AWG 100ft(สีดำ)', 'สายไฟเดี่ยว 22AWG UL1007 ความยาว100ft (สีดำ)', 1, NULL, 12, 8, 1, '2020-02-24 19:49:17', '2020-02-24 19:49:17', 'In Stock', 110, 'Electrical'),
(27, 'SPE', 'S202M-C16', 'ABB Mini Circuit Breaker (16A)', 1, NULL, 12, 8, 1, '2020-02-24 19:49:39', '2020-02-24 19:49:39', NULL, 400, 'Electrical'),
(28, 'SPE', 'PC002-SVT-18AWG-5M', 'สายพาวเวอร์คอร์ด (Power Cord) 5 เมตร', 1, NULL, 12, 8, 1, '2020-02-24 19:50:10', '2020-02-24 19:50:10', NULL, 240, 'Electrical'),
(29, 'COSMO', '#14', 'หางปลาแฉก', 50, NULL, 12, 8, 1, '2020-02-24 19:54:42', '2020-02-24 19:54:42', NULL, 2, 'Electrical'),
(30, 'COSMO', '#46', 'หางปลาแดง', 50, NULL, 12, 8, 1, '2020-02-24 19:55:11', '2020-02-24 19:55:11', NULL, 2, 'Electrical'),
(31, 'ArduitronicS', 'BA00072', 'Mitsubishi PLC (FXIN-14MR)', 1, NULL, 12, 8, 1, '2020-02-24 19:55:46', '2020-02-24 19:55:46', NULL, 1050, 'Electrical'),
(32, 'Maxtech', 'R-RR03', 'Reflector', 1, NULL, 12, 8, 1, '2020-02-24 19:56:14', '2020-02-24 19:56:14', NULL, 250, 'Electrical'),
(33, 'Maxtech', 'M-7000-08061-6110300', 'M8 female Commector straight with cable', 1, NULL, 12, 8, 1, '2020-02-24 19:56:34', '2020-02-24 19:56:34', NULL, 320, 'Electrical'),
(34, 'Maxtech', 'MD-QMRL//ON-FO', 'CUB REFX DC', 1, NULL, 12, 8, 1, '2020-02-24 19:56:56', '2020-02-24 19:56:56', NULL, 2000, 'Electrical'),
(35, 'Telepat', 'CE-03', 'Tamco CE 300x450x200', 1, NULL, 12, 8, 1, '2020-02-24 19:57:20', '2020-02-24 19:57:20', NULL, 950, 'Electrical'),
(36, 'P.N', 'เนมเพลท22mm(POWER)', 'POWER', 1, NULL, 12, 8, 1, '2020-02-24 19:57:39', '2020-02-24 19:57:39', NULL, 30, 'Electrical'),
(37, 'P.N', 'เนมเพลท22mm(EMERGENCY)', 'EMERGENCY', 1, NULL, 12, 8, 1, '2020-02-24 19:58:05', '2020-02-24 19:58:05', NULL, 30, 'Electrical'),
(38, 'P.N', 'เนมเพลท22mm( NG )', 'NG', 1, NULL, 12, 8, 1, '2020-02-24 19:58:30', '2020-02-24 19:58:30', NULL, 1, 'Electrical'),
(39, 'P.N', 'เนมเพลท22mm(OK)', 'OK', 1, NULL, 12, 8, 1, '2020-02-24 19:58:50', '2020-02-24 19:58:50', NULL, 30, 'Electrical'),
(40, 'P.N', 'เนมเพลท22mm(RESET)', 'RESET', 1, NULL, 12, 8, 1, '2020-02-24 19:59:17', '2020-02-24 19:59:17', NULL, 30, 'Electrical'),
(41, 'P.N', 'เนมเพลท22mm( READY )', 'READY', 1, NULL, 12, 8, 1, '2020-02-24 19:59:37', '2020-02-24 19:59:37', NULL, 30, 'Electrical'),
(42, 'ภาคิน', 'FLOOR CONTROL', 'FLOOR CONTROL', 1, NULL, 11, 9, 3, '2020-02-24 20:01:11', '2020-02-24 20:01:11', NULL, 950, 'Mechanical'),
(43, 'ภาคิน', 'Part L FQ2', 'Part L FQ2', 2, NULL, 11, 9, 4, '2020-02-24 20:01:33', '2020-02-24 20:01:33', NULL, 650, 'Mechanical'),
(44, 'ภาคิน', 'coverRF', 'coverRF', 1, NULL, 11, 9, 1, '2020-02-24 20:01:59', '2020-02-24 20:01:59', NULL, 650, 'Mechanical'),
(45, 'ภาคิน', 'Part cylinder', 'Part cylinder', 2, NULL, 11, 9, 1, '2020-02-24 20:02:19', '2020-02-24 20:02:19', NULL, 650, 'Mechanical'),
(46, 'ภาคิน', 'BOXNG', 'BOXNG', 1, NULL, 11, 9, 1, '2020-02-24 20:02:56', '2020-02-24 20:02:56', NULL, 6000, 'Mechanical'),
(47, 'ภาคิน', 'Part Plug NG', 'Part Plug NG', 1, NULL, 11, 9, 1, '2020-02-24 20:03:16', '2020-02-24 20:03:16', NULL, 950, 'Mechanical'),
(48, 'MISUMI', 'HFC6-6060-B', 'Frame End Caps - For 6 Series (Slot Width 8mm) Aluminum Frames', 2, NULL, 11, 9, 1, '2020-02-24 20:03:50', '2020-02-24 20:03:50', NULL, 65, 'Mechanical'),
(49, 'MISUMI', 'HFS6-6060-1200', 'Aluminum Frame 6 Series/slot width 8/60x60mm', 1, NULL, 11, 9, 1, '2020-02-24 20:04:16', '2020-02-24 20:04:16', NULL, 972, 'Mechanical'),
(50, 'MISUMI', 'HFCL6-3060-B', 'Frame End Caps - For 6 Series (Slot Width 8mm) Aluminum Frames', 3, NULL, 11, 9, 1, '2020-02-24 20:04:45', '2020-02-24 20:04:45', NULL, 62, 'Mechanical'),
(51, 'MISUMI', 'HFS6-3060-500', 'Aluminum Frame 6 Series/slot width 8/30x60mm', 1, NULL, 11, 9, 1, '2020-02-24 20:06:02', '2020-02-24 20:06:02', NULL, 235, 'Mechanical'),
(52, 'MISUMI', 'HBLUD6-SET', 'Ultra Thick Brackets - For 2 Slots - For 6 Series (Slot Width 8mm) Aluminum Frames', 4, NULL, 11, 9, 1, '2020-02-24 20:06:42', '2020-02-24 20:06:42', NULL, 227, 'Mechanical'),
(53, 'MISUMI', 'MFSTF12', 'Device Stands - Compact Through Hole Type (Bracket only)', 4, NULL, 11, 9, 1, '2020-02-24 20:08:44', '2020-02-24 20:08:44', NULL, 360, 'Mechanical'),
(54, 'MISUMI', 'FSFMMP100-12S', 'Sensor Bracket: Flexible Round Shaft', 1, NULL, 11, 9, 1, '2020-02-24 20:09:19', '2020-02-24 20:09:19', NULL, 156, 'Mechanical'),
(55, 'ALKW12', 'ALKW12', 'Super Compact Strut Clamps / Resin Compact Strut Clamps - Equal / Unequal Dia.', 3, NULL, 11, 9, 1, '2020-02-24 20:09:50', '2020-02-24 20:09:50', NULL, 360, 'Mechanical'),
(56, 'MISUMI', 'FSFMMP300-12S', 'Sensor Bracket: Flexible Round Shaft', 4, NULL, 11, 9, 1, '2020-02-24 20:10:18', '2020-02-24 20:10:18', NULL, 284, 'Mechanical'),
(57, 'MISUMI', 'AQMW12', 'Super Compact Strut Clamps - Vertical Taps / Parallel Taps', 3, NULL, 11, 9, 1, '2020-02-24 20:10:51', '2020-02-24 20:10:51', NULL, 349, 'Mechanical'),
(58, 'MISUMI', 'FSFMMP400-12S', 'Sensor Bracket: Flexible Round Shaft', 2, NULL, 11, 9, 1, '2020-02-24 20:11:20', '2020-02-24 20:11:20', NULL, 364, 'Mechanical'),
(59, 'MISUMI', 'FSFBZH-12S', 'Sensor Bracket: Single Plate Type For Photoelectric Sensor Vanbrugh H', 1, NULL, 11, 9, 1, '2020-02-24 20:11:47', '2020-02-24 20:11:47', NULL, 489, 'Mechanical'),
(60, 'MISUMI', 'HFS6-6060-300', 'Aluminum Frame 6 Series/slot width 8/60x60mm', 1, NULL, 11, 9, 1, '2020-02-24 20:12:07', '2020-02-24 20:12:07', NULL, 243, 'Mechanical'),
(61, 'MISUMI', 'HFS6-3060-300', 'Aluminum Frame 6 Series/slot width 8/30x60mm', 1, NULL, 11, 9, 1, '2020-02-24 20:12:25', '2020-02-24 20:12:25', NULL, 141, 'Mechanical'),
(62, 'MISUMI', 'HNTASS6-6', 'For 6 Series (Slot Width 8mm) - Post-Assembly Insertion - Stopper Nuts', 5, NULL, 11, 9, 1, '2020-02-24 20:12:51', '2020-02-24 20:12:51', NULL, 26, 'Mechanical'),
(63, 'MISUMI', 'HNTASN6-5', 'For 6 Series (Slot Width 8mm) - Post-Assembly Insertion - Stopper Nuts', 15, NULL, 11, 9, 1, '2020-02-24 20:13:42', '2020-02-24 20:13:42', NULL, 12, 'Mechanical'),
(64, 'MISUMI', 'HBLSD6-SST', 'Thin Brackets For 6 Series (Slot Width 8mm) Aluminum Frames', 2, NULL, 11, 9, 1, '2020-02-24 20:14:05', '2020-02-24 20:14:05', NULL, 72, 'Mechanical'),
(65, 'COSMO', 'หัวจม M6X12 เสตนเลส', 'หัวหมวก M6X12 เสตนเลส', 4, NULL, 11, 9, 1, '2020-02-24 20:14:33', '2020-02-24 20:14:33', NULL, 5, 'Mechanical'),
(66, 'COSMO', 'หัวจมM4X8 เสตนเลส', 'หัวจมM4X8 เสตนเลส', 20, NULL, 11, 9, 1, '2020-02-24 20:14:57', '2020-02-24 20:14:57', NULL, 4, 'Mechanical'),
(67, 'COSMO', 'หัวจมM5X10 เสตนเลส', 'หัวจมM5X10 เสตนเลส', 4, NULL, 11, 9, 1, '2020-02-24 20:15:44', '2020-02-24 20:15:44', NULL, 3, 'Mechanical'),
(68, 'COSMO', 'หัวจมM5X16 เสตนเลส', 'หัวจมM5X16 เสตนเลส', 8, NULL, 11, 9, 1, '2020-02-24 20:16:11', '2020-02-24 20:16:11', NULL, 4, 'Mechanical'),
(69, 'COSMO', 'หัวจมM3X20 เสตนเลส', 'หัวจมM3X20 เสตนเลส', 2, NULL, 11, 9, 1, '2020-02-24 20:16:36', '2020-02-24 20:16:36', NULL, 2, 'Mechanical'),
(70, 'COSMO', 'น๊อตตัวเมีย M3', 'น๊อตตัวเมีย M3', 2, NULL, 11, 9, 1, '2020-02-24 20:17:01', '2020-02-24 20:17:01', NULL, 3, 'Mechanical'),
(71, 'COSMO', 'spring ring M3', 'spring ring M3', 8, NULL, 11, 9, 1, '2020-02-24 20:17:27', '2020-02-24 20:17:27', NULL, 1, 'Mechanical'),
(72, 'COSMO', 'Boit 5/16 X 40', 'Boit 5/16 X 40', 4, NULL, 11, 9, 1, '2020-02-24 20:17:49', '2020-02-24 20:17:49', NULL, 20, 'Mechanical'),
(73, 'COSMO', 'แหวนแปะ M8', '-', 4, NULL, 11, 9, 1, '2020-02-24 20:18:10', '2020-02-24 20:18:10', NULL, 1, 'Mechanical'),
(74, 'Omron', 'FQ2-S20100N', 'FQ2-S2 Series , Wide View (Short-distance)', 2, NULL, 11, 10, 1, NULL, NULL, NULL, 35000, 'Vision'),
(75, 'Omron', 'FQ-WN005', 'FQ Ethernet Cables, Roboticcable, 5M', 2, NULL, 11, 10, NULL, NULL, NULL, NULL, 0, 'Vision'),
(76, 'Omron', 'FQ-WD005', 'I/O Cables, Roboticcable, 5M', 2, NULL, 11, 10, NULL, NULL, NULL, NULL, 0, 'Vision'),
(77, 'Omron', 'S8VK-G12024', 'DC power supply', 2, NULL, 11, 10, 1, NULL, NULL, NULL, 0, 'Vision'),
(78, 'Omron', 'FQ2-D30', 'Touch Finder', 1, NULL, 11, 10, 1, NULL, NULL, NULL, 15000, 'Vision'),
(79, 'Advice', 'DGS-105', 'Gigabit Switching Hub D-LINK (DGS-105) 5 Port (Metal Case) (4\")', 1, NULL, 11, 10, 1, NULL, NULL, NULL, 620, 'Vision'),
(81, 'SPE', 'AD16-22DS(สีแดง)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีแดง)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(82, 'SPE', 'AD16-22DS(สีเขียว)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีเขียว)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(83, 'SPE', 'AD16-22DS(สีน้ำเงิน)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีน้ำเงิน)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(84, 'SPE', 'AD16-22DS(สีเหลือง)', 'หลอดตู้คอนโทรล (Pilot Lamp) Ø22 mm (สีเหลือง)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(85, 'SPE', 'AVW-411', 'สวิทช์ฉุกเฉิน (Emergency Switch)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 100, 'Electrical'),
(86, 'SPE', 'BUK-3N', 'เทอร์มินอลราง (Din Rail Terminal)', 10, NULL, 12, 11, 1, NULL, NULL, NULL, 22, 'Electrical'),
(87, 'SPE', 'E-UK', 'ใช้ร่วมกับเทอร์มินอล BUK ทุกขนาด', 2, NULL, 12, 11, 1, NULL, NULL, NULL, 10, 'Electrical'),
(88, 'SPE', 'Terminal BAR-B', 'รางเทอร์มินอลปีกนก แบบอลูมิเนียม', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 90, 'Electrical'),
(89, 'SPE', 'PG-16', 'PG-Type เคเบิลแกลน PVC (PVC Cable Gland)', 2, NULL, 12, 11, 1, NULL, NULL, NULL, 20, 'Electrical'),
(90, 'SPE', 'PG-19', 'PG-Type เคเบิลแกลน PVC (PVC Cable Gland)', 4, NULL, 12, 11, 1, NULL, NULL, NULL, 25, 'Electrical'),
(91, 'SPE', 'FB10-05', 'ใช้ร่วมกับเทอร์มินอล BUK 3N', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 50, 'Electrical'),
(92, 'SPE', 'ABW-111-D', 'สวิทช์กดติด-ปล่อยดับ (Pushbutton Switch)(สีเหลือง)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 50, 'Electrical'),
(93, 'SPE', '22 AWG 100ft(สีน้ำเงิน)', 'สายไฟเดี่ยว 22AWG UL1007 ความยาว100ft (สีน้ำเงิน)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 110, 'Electrical'),
(94, 'SPE', '22 AWG 100ft(สีน้ำตาล)', 'สายไฟเดี่ยว 22AWG UL1007 ความยาว100ft (สีนน้ำตาล)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 110, 'Electrical'),
(95, 'SPE', '22 AWG 100ft(สีดำ)', 'สายไฟเดี่ยว 22AWG UL1007 ความยาว100ft (สีดำ)', 1, NULL, 12, 11, 1, NULL, NULL, 'In Stock', 110, 'Electrical'),
(96, 'SPE', 'S202M-C16', 'ABB Mini Circuit Breaker (16A)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 400, 'Electrical'),
(97, 'SPE', 'PC002-SVT-18AWG-5M', 'สายพาวเวอร์คอร์ด (Power Cord) 5 เมตร', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 240, 'Electrical'),
(98, 'COSMO', '#14', 'หางปลาแฉก', 50, NULL, 12, 11, 1, NULL, NULL, NULL, 2, 'Electrical'),
(99, 'COSMO', '#46', 'หางปลาแดง', 50, NULL, 12, 11, 1, NULL, NULL, NULL, 2, 'Electrical'),
(100, 'ArduitronicS', 'BA00072', 'Mitsubishi PLC (FXIN-14MR)', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 1050, 'Electrical'),
(101, 'Maxtech', 'R-RR03', 'Reflector', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 250, 'Electrical'),
(102, 'Maxtech', 'M-7000-08061-6110300', 'M8 female Commector straight with cable', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 320, 'Electrical'),
(103, 'Maxtech', 'MD-QMRL//ON-FO', 'CUB REFX DC', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 2000, 'Electrical'),
(104, 'Telepat', 'CE-03', 'Tamco CE 300x450x200', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 950, 'Electrical'),
(105, 'P.N', 'เนมเพลท22mm(POWER)', 'POWER', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(106, 'P.N', 'เนมเพลท22mm(EMERGENCY)', 'EMERGENCY', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(107, 'P.N', 'เนมเพลท22mm( NG )', 'NG', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 1, 'Electrical'),
(108, 'P.N', 'เนมเพลท22mm(OK)', 'OK', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(109, 'P.N', 'เนมเพลท22mm(RESET)', 'RESET', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(110, 'P.N', 'เนมเพลท22mm( READY )', 'READY', 1, NULL, 12, 11, 1, NULL, NULL, NULL, 30, 'Electrical'),
(112, 'ภาคิน', 'FLOOR CONTROL', 'FLOOR CONTROL', 1, NULL, 12, 12, 3, NULL, NULL, NULL, 950, 'Mechanical'),
(113, 'ภาคิน', 'Part L FQ2', 'Part L FQ2', 2, NULL, 12, 12, 4, NULL, NULL, NULL, 650, 'Mechanical'),
(114, 'ภาคิน', 'coverRF', 'coverRF', 1, NULL, 12, 12, 1, NULL, NULL, NULL, 650, 'Mechanical'),
(115, 'ภาคิน', 'Part cylinder', 'Part cylinder', 2, NULL, 12, 12, 1, NULL, NULL, NULL, 650, 'Mechanical'),
(116, 'ภาคิน', 'BOXNG', 'BOXNG', 1, NULL, 12, 12, 1, NULL, NULL, NULL, 6000, 'Mechanical'),
(117, 'ภาคิน', 'Part Plug NG', 'Part Plug NG', 1, NULL, 12, 12, 1, NULL, NULL, NULL, 950, 'Mechanical'),
(118, 'MISUMI', 'HFC6-6060-B', 'Frame End Caps - For 6 Series (Slot Width 8mm) Aluminum Frames', 2, NULL, 12, 12, 1, NULL, NULL, NULL, 65, 'Mechanical'),
(119, 'MISUMI', 'HFS6-6060-1200', 'Aluminum Frame 6 Series/slot width 8/60x60mm', 1, NULL, 12, 12, 1, NULL, NULL, NULL, 972, 'Mechanical'),
(120, 'MISUMI', 'HFCL6-3060-B', 'Frame End Caps - For 6 Series (Slot Width 8mm) Aluminum Frames', 3, NULL, 12, 12, 1, NULL, NULL, NULL, 62, 'Mechanical'),
(121, 'MISUMI', 'HFS6-3060-500', 'Aluminum Frame 6 Series/slot width 8/30x60mm', 1, NULL, 11, 12, 1, NULL, NULL, NULL, 235, 'Mechanical'),
(122, 'MISUMI', 'HBLUD6-SET', 'Ultra Thick Brackets - For 2 Slots - For 6 Series (Slot Width 8mm) Aluminum Frames', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 227, 'Mechanical'),
(123, 'MISUMI', 'MFSTF12', 'Device Stands - Compact Through Hole Type (Bracket only)', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 360, 'Mechanical'),
(124, 'MISUMI', 'FSFMMP100-12S', 'Sensor Bracket: Flexible Round Shaft', 1, NULL, 11, 12, 1, NULL, NULL, NULL, 156, 'Mechanical'),
(125, 'ALKW12', 'ALKW12', 'Super Compact Strut Clamps / Resin Compact Strut Clamps - Equal / Unequal Dia.', 3, NULL, 11, 12, 1, NULL, NULL, NULL, 360, 'Mechanical'),
(126, 'MISUMI', 'FSFMMP300-12S', 'Sensor Bracket: Flexible Round Shaft', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 284, 'Mechanical'),
(127, 'MISUMI', 'AQMW12', 'Super Compact Strut Clamps - Vertical Taps / Parallel Taps', 3, NULL, 11, 12, 1, NULL, NULL, NULL, 349, 'Mechanical'),
(128, 'MISUMI', 'FSFMMP400-12S', 'Sensor Bracket: Flexible Round Shaft', 2, NULL, 11, 12, 1, NULL, NULL, NULL, 364, 'Mechanical'),
(129, 'MISUMI', 'FSFBZH-12S', 'Sensor Bracket: Single Plate Type For Photoelectric Sensor Vanbrugh H', 1, NULL, 11, 12, 1, NULL, NULL, NULL, 489, 'Mechanical'),
(130, 'MISUMI', 'HFS6-6060-300', 'Aluminum Frame 6 Series/slot width 8/60x60mm', 1, NULL, 11, 12, 1, NULL, NULL, NULL, 243, 'Mechanical'),
(131, 'MISUMI', 'HFS6-3060-300', 'Aluminum Frame 6 Series/slot width 8/30x60mm', 1, NULL, 11, 12, 1, NULL, NULL, NULL, 141, 'Mechanical'),
(132, 'MISUMI', 'HNTASS6-6', 'For 6 Series (Slot Width 8mm) - Post-Assembly Insertion - Stopper Nuts', 5, NULL, 11, 12, 1, NULL, NULL, NULL, 26, 'Mechanical'),
(133, 'MISUMI', 'HNTASN6-5', 'For 6 Series (Slot Width 8mm) - Post-Assembly Insertion - Stopper Nuts', 15, NULL, 11, 12, 1, NULL, NULL, NULL, 12, 'Mechanical'),
(134, 'MISUMI', 'HBLSD6-SST', 'Thin Brackets For 6 Series (Slot Width 8mm) Aluminum Frames', 2, NULL, 11, 12, 1, NULL, NULL, NULL, 72, 'Mechanical'),
(135, 'COSMO', 'หัวจม M6X12 เสตนเลส', 'หัวหมวก M6X12 เสตนเลส', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 5, 'Mechanical'),
(136, 'COSMO', 'หัวจมM4X8 เสตนเลส', 'หัวจมM4X8 เสตนเลส', 20, NULL, 11, 12, 1, NULL, NULL, NULL, 4, 'Mechanical'),
(137, 'COSMO', 'หัวจมM5X10 เสตนเลส', 'หัวจมM5X10 เสตนเลส', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 3, 'Mechanical'),
(138, 'COSMO', 'หัวจมM5X16 เสตนเลส', 'หัวจมM5X16 เสตนเลส', 8, NULL, 11, 12, 1, NULL, NULL, NULL, 4, 'Mechanical'),
(139, 'COSMO', 'หัวจมM3X20 เสตนเลส', 'หัวจมM3X20 เสตนเลส', 2, NULL, 11, 12, 1, NULL, NULL, NULL, 2, 'Mechanical'),
(140, 'COSMO', 'น๊อตตัวเมีย M3', 'น๊อตตัวเมีย M3', 2, NULL, 11, 12, 1, NULL, NULL, NULL, 3, 'Mechanical'),
(141, 'COSMO', 'spring ring M3', 'spring ring M3', 8, NULL, 11, 12, 1, NULL, NULL, NULL, 1, 'Mechanical'),
(142, 'COSMO', 'Boit 5/16 X 40', 'Boit 5/16 X 40', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 20, 'Mechanical'),
(143, 'COSMO', 'แหวนแปะ M8', '-', 4, NULL, 11, 12, 1, NULL, NULL, NULL, 1, 'Mechanical'),
(175, 'Omron', 'CP1E - MDR14', 'PLC Omron', 1, NULL, 5, 13, 1, '2020-02-24 20:24:02', '2020-02-24 20:24:02', NULL, 4500, 'Vision');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_21_031637_create_bom_table', 2),
(5, '2019_11_29_035625_create_project_table', 3),
(6, '2019_12_12_014845_change_number_to_project_table', 4),
(7, '2019_12_12_064045_create_bom2_table', 5),
(8, '2019_12_13_071230_create_bomdetail_table', 6),
(9, '2019_12_13_075309_change_instock_to_bomdetail_table', 7),
(10, '2019_12_17_014850_create_part_table', 8),
(11, '2020_01_13_084427_add_column_to_bomdetail_table', 9),
(12, '2020_01_13_084820_edit_price_to_bomdetail_table', 10),
(13, '2020_01_13_092952_edit_pirce_to_bomdetail_table', 11),
(14, '2020_01_13_093654_change_price_to_bomdetail_table', 12),
(15, '2020_01_14_020253_add_position_to_part_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pirce` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` bigint(4) UNSIGNED ZEROFILL NOT NULL,
  `project_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `success_at` date DEFAULT NULL,
  `number_of_machines` int(11) DEFAULT NULL,
  `support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'In Process',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `create_at`, `success_at`, `number_of_machines`, `support`, `Customer`, `sale`, `project_status`, `created_at`, `updated_at`) VALUES
(0003, 'ZCK02CHABAA- Present Absent character', '2020-02-25', NULL, 1, '11', 'Chabaa', 'Chui', 'In Process', '2020-02-24 19:35:35', '2020-02-24 19:35:35'),
(0005, 'ZCP22Shell - Reject module for tilda 1', '2020-02-25', NULL, 1, '22', 'Shell Thailand', 'Kae', 'In Process', '2020-02-24 20:22:46', '2020-02-24 20:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Name`, `Department`, `status`) VALUES
(1, 'navee', '12345678', 'นาวี', 'Application', 'Admin'),
(12, 'ta', '12345678', 'ต้า', 'Application', 'User'),
(11, 'leu', '12345678', 'ลิว', 'Application', 'User'),
(13, 'reem', '12345678', 'รีม', 'Application', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, '5', '', NULL, '', NULL, '2020-02-13 21:30:20', '2020-02-13 21:30:20'),
(14, '6', NULL, NULL, NULL, NULL, '2020-02-13 21:32:01', '2020-02-13 21:32:01'),
(16, 'logout', NULL, NULL, NULL, NULL, '2020-02-13 21:53:29', '2020-02-13 21:53:29'),
(17, '8', NULL, NULL, NULL, NULL, '2020-02-13 21:53:39', '2020-02-13 21:53:39'),
(18, '9', NULL, NULL, NULL, NULL, '2020-02-13 21:54:54', '2020-02-13 21:54:54'),
(19, '10', NULL, NULL, NULL, NULL, '2020-02-13 21:56:10', '2020-02-13 21:56:10'),
(20, '1', NULL, NULL, NULL, NULL, '2020-02-13 22:06:16', '2020-02-13 22:06:16'),
(21, '11', NULL, NULL, NULL, NULL, '2020-02-24 06:59:24', '2020-02-24 06:59:24'),
(22, '12', NULL, NULL, NULL, NULL, '2020-02-24 07:01:48', '2020-02-24 07:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `bom2`
--
ALTER TABLE `bom2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bomdetail`
--
ALTER TABLE `bomdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `bom2`
--
ALTER TABLE `bom2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bomdetail`
--
ALTER TABLE `bomdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

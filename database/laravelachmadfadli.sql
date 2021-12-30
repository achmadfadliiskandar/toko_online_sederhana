-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelachmadfadli`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `baskets_id` bigint(20) NOT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namabarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `namabarang`, `hargabarang`, `stok`, `keterangan`, `gambar`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bola Adidas', 125000, '80', 'bola dari bintuni', '1639555258.jpg', 1, '2021-12-15 01:00:58', '2021-12-17 03:20:51', NULL),
(2, 'Raket Badminton', 450000, '74', 'raket baru dan bagus', '1639555349.jpg', 2, '2021-12-15 01:02:12', '2021-12-15 02:16:04', NULL),
(3, 'Biskuit Lapindo', 15000, '78', 'biskuit bergizi dan enak', '1639555553.jpg', 3, '2021-12-15 01:05:53', '2021-12-17 03:57:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalbelanja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cod`
--

INSERT INTO `cod` (`id`, `alamat_pengiriman`, `totalbelanja`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'jakarta', '2250000', 4, '2021-12-15 02:08:51', '2021-12-15 02:08:51'),
(2, 'jakarta', '45000', 4, '2021-12-15 02:14:17', '2021-12-15 02:14:17'),
(3, 'jakarta selatan', '2250000', 4, '2021-12-15 02:16:04', '2021-12-15 02:16:04'),
(4, 'jakarta selatan', '2425000', 4, '2021-12-17 03:20:50', '2021-12-17 03:20:50'),
(5, 'jakarta', '30000', 4, '2021-12-17 03:57:29', '2021-12-17 03:57:29'),
(6, 'jalan bismillah', '1275000', 4, '2021-12-17 06:15:58', '2021-12-17 06:15:58'),
(7, 'jalan kebaikan', '1400000', 4, '2021-12-17 06:17:44', '2021-12-17 06:17:44'),
(8, 'cipedak jaksel', '1150000', 4, '2021-12-17 06:36:03', '2021-12-17 06:36:03'),
(9, 'apira beji depok tanah baru', '1150000', 4, '2021-12-17 06:37:23', '2021-12-17 06:37:23'),
(10, 'bismillah', '510000', 4, '2021-12-17 06:40:13', '2021-12-17 06:40:13'),
(11, 'bismillah', '3180000', 4, '2021-12-17 06:41:50', '2021-12-17 06:41:50'),
(12, 'bismillah', '1600000', 4, '2021-12-17 07:01:24', '2021-12-17 07:01:24'),
(13, 'jaksel', '2050000', 4, '2021-12-17 07:04:03', '2021-12-17 07:04:03'),
(14, 'jalan cinta', '1600000', 4, '2021-12-17 07:06:32', '2021-12-17 07:06:32'),
(15, 'jaksel', '530000', 4, '2021-12-17 07:15:43', '2021-12-17 07:15:43'),
(16, 'jaksel', '1275000', 4, '2021-12-17 07:17:19', '2021-12-17 07:17:19'),
(17, 'tes coba', '560000', 4, '2021-12-17 07:18:49', '2021-12-17 07:18:49'),
(18, 'jalan bismillah', '1850000', 4, '2021-12-17 07:32:32', '2021-12-17 07:32:32'),
(19, 'jakarta', '3210000', 4, '2021-12-17 07:33:18', '2021-12-17 07:33:18'),
(20, 'jaksel', '1975000', 4, '2021-12-17 07:44:16', '2021-12-17 07:44:16'),
(21, 'jakarta selatan', '1380000', 4, '2021-12-17 07:57:11', '2021-12-17 07:57:11'),
(22, 'cianjur', '625000', 4, '2021-12-17 07:58:23', '2021-12-17 07:58:23'),
(23, 'jakarta selatan', '945000', 4, '2021-12-20 22:01:29', '2021-12-20 22:01:29'),
(24, 'jaksel', '420000', 4, '2021-12-26 23:36:45', '2021-12-26 23:36:45'),
(25, 'jakarta selatan', '2265000', 4, '2021-12-27 02:18:51', '2021-12-27 02:18:51'),
(26, 'jakarta selatan', '1600000', 4, '2021-12-30 03:36:17', '2021-12-30 03:36:17');

--
-- Triggers `cod`
--
DELIMITER $$
CREATE TRIGGER `aftercreatecod` AFTER INSERT ON `cod` FOR EACH ROW BEGIN 
        DELETE FROM barangs 
        WHERE barangs.user_id = user_id; 
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coddetails`
--

CREATE TABLE `coddetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_id` bigint(20) DEFAULT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangs_id` int(11) DEFAULT NULL,
  `baskets_id` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coddetails`
--

INSERT INTO `coddetails` (`id`, `cod_id`, `status`, `barangs_id`, `baskets_id`, `stok`, `hargabeli`, `totalharga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, '', 2, 3, 3, 45000, 45000, 4, '2021-12-15 02:14:17', '2021-12-15 02:14:17'),
(2, 3, '', 3, 2, 5, 2250000, 2250000, 4, '2021-12-15 02:16:04', '2021-12-15 02:16:04'),
(3, 4, '', 4, 1, 5, 625000, 2425000, 4, '2021-12-17 03:20:51', '2021-12-17 03:20:51'),
(4, 5, '', 6, 3, 2, 30000, 30000, 4, '2021-12-17 03:57:29', '2021-12-17 03:57:29'),
(5, 17, 'Lunas', 31, 3, 4, 60000, 560000, 4, '2021-12-17 07:18:49', '2021-12-17 07:18:49'),
(6, 17, 'Lunas', 32, 1, 4, 500000, 560000, 4, '2021-12-17 07:18:49', '2021-12-17 07:18:49'),
(7, 19, 'Lunas', 35, 3, 4, 60000, 3210000, 4, '2021-12-17 07:33:18', '2021-12-17 07:33:18'),
(8, 19, 'Lunas', 36, 2, 7, 3150000, 3210000, 4, '2021-12-17 07:33:18', '2021-12-17 07:33:18'),
(9, 21, 'Lunas', 39, 2, 3, 1350000, 1380000, 4, '2021-12-17 07:57:11', '2021-12-17 07:57:11'),
(10, 21, 'Lunas', 40, 3, 2, 30000, 1380000, 4, '2021-12-17 07:57:11', '2021-12-17 07:57:11'),
(11, 22, 'Lunas', 41, 1, 5, 625000, 625000, 4, '2021-12-17 07:58:23', '2021-12-17 07:58:23'),
(12, 23, 'Lunas', 42, 3, 3, 45000, 945000, 4, '2021-12-20 22:01:29', '2021-12-20 22:01:29'),
(13, 23, 'Lunas', 43, 2, 2, 900000, 945000, 4, '2021-12-20 22:01:29', '2021-12-20 22:01:29'),
(14, 24, 'Lunas', 44, 3, 3, 45000, 420000, 4, '2021-12-26 23:36:45', '2021-12-26 23:36:45'),
(15, 24, 'Lunas', 46, 1, 3, 375000, 420000, 4, '2021-12-26 23:36:45', '2021-12-26 23:36:45'),
(16, 25, 'Lunas', 47, 2, 5, 2250000, 2265000, 4, '2021-12-27 02:18:51', '2021-12-27 02:18:51'),
(17, 25, 'Lunas', 48, 3, 1, 15000, 2265000, 4, '2021-12-27 02:18:51', '2021-12-27 02:18:51'),
(18, 26, 'Lunas', 61, 1, 2, 250000, 1600000, 4, '2021-12-30 03:36:17', '2021-12-30 03:36:17'),
(19, 26, 'Lunas', 62, 2, 3, 1350000, 1600000, 4, '2021-12-30 03:36:17', '2021-12-30 03:36:17');

--
-- Triggers `coddetails`
--
DELIMITER $$
CREATE TRIGGER `kurangstoksaatpembeliancod` AFTER INSERT ON `coddetails` FOR EACH ROW BEGIN
UPDATE baskets SET stok=stok-NEW.stok WHERE id = NEW.baskets_id;
END
$$
DELIMITER ;

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
(10, '2021_03_04_101752_create_konfirmasi_table', 1),
(12, '2021_04_12_080042_create_khususadmins_table', 1),
(61, '2014_10_12_000000_create_users_table', 2),
(62, '2014_10_12_100000_create_password_resets_table', 2),
(63, '2019_08_19_000000_create_failed_jobs_table', 2),
(64, '2020_12_18_000953_create_baskets_table', 2),
(65, '2020_12_21_040218_add_soft_delete_to_baskets', 2),
(66, '2021_01_25_060852_create_pelayanans_table', 2),
(67, '2021_01_27_145243_create_pembayaran_table', 2),
(68, '2021_01_29_094718_create_transaksionlines_table', 2),
(69, '2021_01_30_151502_create_cod_table', 2),
(70, '2021_04_09_142534_create_barangs_table', 2),
(71, '2021_04_13_033719_add_soft_delete_to_barangs', 2),
(72, '2021_07_18_001132_create_cod_triggers_table', 2),
(73, '2021_07_18_001929_create_transaksionline_triggers_table', 2),
(74, '2021_12_15_063357_create_coddetails_table', 2),
(75, '2021_12_15_063404_create_transaksionlinesdetails_table', 2);

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
-- Table structure for table `pelayanans`
--

CREATE TABLE `pelayanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namabarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hargasemua` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksionlines`
--

CREATE TABLE `transaksionlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kartu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_unik` int(11) NOT NULL,
  `totalbelanja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksionlines`
--

INSERT INTO `transaksionlines` (`id`, `kartu`, `status`, `bukti`, `alamat_pengiriman`, `kode_unik`, `totalbelanja`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'cimb-niaga', NULL, NULL, 'JAKSEL', 297, '1275000', 4, '2021-12-27 04:07:12', '2021-12-27 04:07:12'),
(2, 'CIMA', NULL, NULL, 'nikmat', 1772, '2295000', 4, '2021-12-27 04:10:21', '2021-12-27 04:10:21'),
(3, 'CIMB-NIAGA', '12345678', NULL, 'coba lagi', 3110, '480000', 4, '2021-12-30 03:26:05', '2021-12-30 03:27:01'),
(4, 'COBA', '12345678', NULL, 'test', 4377, '1860000', 4, '2021-12-30 03:29:31', '2021-12-30 03:29:40'),
(5, 'COBA KAGI', '12345678', NULL, 'WQFEWAF', 4726, '375000', 4, '2021-12-30 03:31:16', '2021-12-30 03:31:35'),
(6, 'cobF', '12345678', 'controller.PNG-1640860471.png', 'testing lagi', 3351, '1630000', 4, '2021-12-30 03:34:31', '2021-12-30 03:34:43');

--
-- Triggers `transaksionlines`
--
DELIMITER $$
CREATE TRIGGER `aftercreatetransaksionlines` AFTER INSERT ON `transaksionlines` FOR EACH ROW BEGIN 
        DELETE FROM barangs 
        WHERE barangs.user_id = user_id; 
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksionlinesdetails`
--

CREATE TABLE `transaksionlinesdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksionlines_id` bigint(20) DEFAULT NULL,
  `barangs_id` int(11) DEFAULT NULL,
  `baskets_id` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `kodeunik` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksionlinesdetails`
--

INSERT INTO `transaksionlinesdetails` (`id`, `transaksionlines_id`, `barangs_id`, `baskets_id`, `stok`, `kodeunik`, `hargabeli`, `totalharga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 53, 3, 2, '96', 30000, 480000, 4, '2021-12-30 03:26:05', '2021-12-30 03:26:05'),
(2, NULL, 54, 2, 1, '136', 450000, 480000, 4, '2021-12-30 03:26:06', '2021-12-30 03:26:06'),
(3, 4, 55, 2, 4, '114', 1800000, 1860000, 4, '2021-12-30 03:29:31', '2021-12-30 03:29:31'),
(4, 4, 56, 3, 4, '61', 60000, 1860000, 4, '2021-12-30 03:29:31', '2021-12-30 03:29:31'),
(5, 5, 57, 1, 3, '89', 375000, 375000, 4, '2021-12-30 03:31:16', '2021-12-30 03:31:16'),
(6, 6, 58, 1, 2, '53', 250000, 1630000, 4, '2021-12-30 03:34:31', '2021-12-30 03:34:31'),
(7, 6, 59, 2, 3, '36', 1350000, 1630000, 4, '2021-12-30 03:34:32', '2021-12-30 03:34:32'),
(8, 6, 60, 3, 2, '72', 30000, 1630000, 4, '2021-12-30 03:34:32', '2021-12-30 03:34:32');

--
-- Triggers `transaksionlinesdetails`
--
DELIMITER $$
CREATE TRIGGER `kurangstoksaatpembeliantransaksionlines` AFTER INSERT ON `transaksionlinesdetails` FOR EACH ROW BEGIN
UPDATE baskets SET stok=stok-NEW.stok WHERE id = NEW.baskets_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpon` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','penjual','pembeli') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pembeli',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `notelpon`, `email`, `email_verified_at`, `role`, `gambar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'btUGVFwZAW', 'xRgrSZ2jOw', '081905157612', '32vWnyAVjs@gmail.com', NULL, 'penjual', NULL, '$2y$10$Dp8ZhBfHZA4OTtakpGpv/eoF5Jp8cIA1Ra8QQOMnvsYXc4O5UO43W', NULL, NULL, NULL),
(2, '2BIihzG9Ob', 'wBS6vZCLhM', '081905157614', 'Vsm0Jl37DJ@gmail.com', NULL, 'penjual', NULL, '$2y$10$7F5kCdRiiwVgRG5XOSNrz.CYKqdZBNS33KEqDFMl7IDrz06U8Pomu', NULL, NULL, NULL),
(3, 'qv9cbxc1Wr', '36bOh7YI7t', '081905157613', 'plJav4Fdoa@gmail.com', NULL, 'penjual', NULL, '$2y$10$57h76kFiqcdVRMbTbzCMpuAboK.pk5yzz8VUWVF19UDFWDZ9HVfSK', NULL, NULL, NULL),
(4, 'Achmad Fadli Iskandar', 'jalan kopo no 27 beji depok, House', '087732785828', 'af137357@gmail.com', NULL, 'pembeli', 'kerumahlinuxtorvalds.PNG-1639557986.png', '$2y$10$bl/gzcLgG1JPPOD8ZhCBxOM7uadxp6C/w77nPKwy0wLdR6DKv0K52', NULL, '2021-12-15 01:35:24', '2021-12-15 01:46:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coddetails`
--
ALTER TABLE `coddetails`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksionlines`
--
ALTER TABLE `transaksionlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksionlinesdetails`
--
ALTER TABLE `transaksionlinesdetails`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `coddetails`
--
ALTER TABLE `coddetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `pelayanans`
--
ALTER TABLE `pelayanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksionlines`
--
ALTER TABLE `transaksionlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksionlinesdetails`
--
ALTER TABLE `transaksionlinesdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

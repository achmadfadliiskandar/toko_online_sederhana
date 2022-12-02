-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 11:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

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
(1, 'Bola Adidas', 125000, '92', 'bola keren dari jakarta', '1669890180.jpg', 1, '2022-12-01 03:23:00', '2022-12-01 03:23:00', NULL),
(2, 'Raket Li Ning 600', 200000, '94', 'raket berkualitas dari kaliwangi', '1669890327.jpeg', 2, '2022-12-01 03:25:27', '2022-12-01 03:25:27', NULL),
(3, 'Biskuit Lapindo', 5000, '90', 'biskuit yang berasal dari lapisan masyarakat indonesia', '1669890449.jpg', 3, '2022-12-01 03:27:29', '2022-12-01 03:27:29', NULL);

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
(1, 'jakarta kota', '15000', 4, '2022-12-01 03:32:44', '2022-12-01 03:32:44'),
(2, 'jalan kopo no 27 beji depok', '1250000', 4, '2022-12-01 03:40:36', '2022-12-01 03:40:36'),
(3, 'jakarta raya', '385000', 4, '2022-12-01 21:25:04', '2022-12-01 21:25:04'),
(4, 'jakarta timur', '220000', 5, '2022-12-02 02:26:03', '2022-12-02 02:26:03');

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
  `barangs_id` int(11) DEFAULT NULL,
  `baskets_id` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coddetails`
--

INSERT INTO `coddetails` (`id`, `cod_id`, `barangs_id`, `baskets_id`, `stok`, `status`, `hargabeli`, `totalharga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, 3, 'Lunas', 15000, 15000, 4, '2022-12-01 03:32:44', '2022-12-01 03:32:44'),
(2, 2, 3, 2, 5, 'Lunas', 1000000, 1250000, 4, '2022-12-01 03:40:37', '2022-12-01 03:40:37'),
(3, 2, 4, 1, 2, 'Lunas', 250000, 1250000, 4, '2022-12-01 03:40:37', '2022-12-01 03:40:37'),
(4, 3, 5, 1, 3, 'Lunas', 375000, 385000, 4, '2022-12-01 21:25:04', '2022-12-01 21:25:04'),
(5, 3, 6, 3, 2, 'Lunas', 10000, 385000, 4, '2022-12-01 21:25:05', '2022-12-01 21:25:05'),
(6, 4, 7, 3, 4, 'Lunas', 20000, 220000, 5, '2022-12-02 02:26:03', '2022-12-02 02:26:03'),
(7, 4, 8, 2, 1, 'Lunas', 200000, 220000, 5, '2022-12-02 02:26:03', '2022-12-02 02:26:03');

--
-- Triggers `coddetails`
--
DELIMITER $$
CREATE TRIGGER `kurangstoksaatpembeliancod` AFTER INSERT ON `coddetails` FOR EACH ROW BEGIN UPDATE baskets SET stok=stok-NEW.stok WHERE id = NEW.baskets_id; END
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_18_000953_create_baskets_table', 1),
(5, '2020_12_21_040218_add_soft_delete_to_baskets', 1),
(6, '2021_01_25_060852_create_pelayanans_table', 1),
(7, '2021_01_27_145243_create_pembayaran_table', 1),
(8, '2021_01_29_094718_create_transaksionlines_table', 1),
(9, '2021_01_30_151502_create_cod_table', 1),
(10, '2021_04_09_142534_create_barangs_table', 1),
(11, '2021_04_13_033719_add_soft_delete_to_barangs', 1),
(12, '2021_07_18_001132_create_cod_triggers_table', 1),
(13, '2021_07_18_001929_create_transaksionline_triggers_table', 1),
(14, '2021_12_15_063357_create_coddetails_table', 1),
(15, '2021_12_15_063404_create_transaksionlinesdetails_table', 1),
(16, '2021_12_21_045914_create_kurangstoksaatpembeliancods_table', 1),
(17, '2021_12_21_045939_create_kurangstoksaatpembeliantransaksionlines_table', 1);

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
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'BNI', '12345678', 'cert-1014-16743757.jpg-1669974383.jpg', 'jakarta timur say', 4916, '380000', 5, '2022-12-02 02:46:23', '2022-12-02 02:46:40');

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
  `transaksionline_id` bigint(20) DEFAULT NULL,
  `barangs_id` int(11) DEFAULT NULL,
  `baskets_id` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `kodeunik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksionlinesdetails`
--

INSERT INTO `transaksionlinesdetails` (`id`, `transaksionline_id`, `barangs_id`, `baskets_id`, `stok`, `kodeunik`, `hargabeli`, `totalharga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 1, 3, '157', 375000, 380000, 5, '2022-12-02 02:46:23', '2022-12-02 02:46:23'),
(2, 1, 10, 3, 1, '158', 5000, 380000, 5, '2022-12-02 02:46:23', '2022-12-02 02:46:23');

--
-- Triggers `transaksionlinesdetails`
--
DELIMITER $$
CREATE TRIGGER `kurangstoksaatpembeliantransaksionlines` AFTER INSERT ON `transaksionlinesdetails` FOR EACH ROW BEGIN UPDATE baskets SET stok=stok-NEW.stok WHERE id = NEW.baskets_id; END
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
(1, 'bambangpamungkas', 'jakarta', '087732785828', 'bambang@gmail.com', NULL, 'penjual', NULL, '$2y$10$VQLayhvNgm4TynY2aoupnewFIakXrM1oKBX5XI4fQZRUnf5YKFRYq', NULL, '2022-12-01 03:21:59', '2022-12-01 03:21:59'),
(2, 'steven', 'depok', '08912321', 'steven@gmail.com', NULL, 'penjual', NULL, '$2y$10$OWIxn60DqiJUdIKeB25aNeYvnMYxP.z6aOjs5q/7YRYPMYJw6a9Zy', NULL, '2022-12-01 03:24:19', '2022-12-01 03:24:19'),
(3, 'chen hong', 'kelabang timur', '087732785828', 'chen@gmail.com', NULL, 'penjual', NULL, '$2y$10$doyIBKSgC9y67VAYk2CON.S8P2bii0nT5FpPK0TWEHY3WMSWpRKD6', NULL, '2022-12-01 03:26:38', '2022-12-01 03:26:38'),
(4, 'fadli', 'jalan kopo no 27 beji depok, House', '087732785828', 'fadli@gmail.com', NULL, 'pembeli', 'grammar.PNG-1669891103.png', '$2y$10$hUo1y6ivO0.MCNLHvyEhrO5QVyR8W3rh0jiFs3d10ftSX11enrzTi', NULL, '2022-12-01 03:28:41', '2022-12-01 03:38:23'),
(5, 'fadlan', 'depok', '0817613223', 'fadlan@gmail.com', NULL, 'pembeli', NULL, '$2y$10$8e4m.IRSHwTY9FbiHIPkHeYGuzYJ3YKrLOnEtIfHXbSOnSanb8JMi', NULL, '2022-12-01 03:41:27', '2022-12-01 03:41:27');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coddetails`
--
ALTER TABLE `coddetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksionlinesdetails`
--
ALTER TABLE `transaksionlinesdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

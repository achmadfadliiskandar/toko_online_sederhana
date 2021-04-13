-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 06:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelachmadfadlii`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_baskets` bigint(20) UNSIGNED NOT NULL,
  `namabarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keteranganbrg` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `id_baskets`, `namabarang`, `hargabarang`, `totalharga`, `stok`, `keteranganbrg`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 3, 'Bola Basket', 150000, 150000, 1, 'bola bagus dalam kondisi baru', 1, '2021-04-12 21:31:19', '2021-04-12 21:31:47', '2021-04-12 21:31:47'),
(6, 2, 'raket badminton', 200000, 1000000, 5, 'Bulu tangkis adalah suatu olahraga yang menggunakan alat yang berbentuk bulat dengan memiliki rongga rongga di bagian pemukulnya. Dan memiliki gagang. Alat ini dikenal dengan nama raket yang dimainkan oleh dua orang atau dua pasangan yang saling berlawanan. dan barang kondisi baru', 1, '2021-04-12 21:38:51', '2021-04-12 21:39:04', '2021-04-12 21:39:04'),
(9, 3, 'Bola Basket', 150000, 900000, 6, 'bola bagus dalam kondisi baru', 1, '2021-04-12 21:45:08', '2021-04-12 21:45:20', '2021-04-12 21:45:20');

--
-- Triggers `barangs`
--
DELIMITER $$
CREATE TRIGGER `pindahkekhususadmin` AFTER DELETE ON `barangs` FOR EACH ROW INSERT INTO khususadmins VALUES('',old.id_baskets,old.hargabarang,old.totalharga,old.stok,old.user_id,'SUKSES BELI',NOW())
$$
DELIMITER ;

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
(1, 'bola sepak', 100000, '94', 'Sepak bola, secara resmi dikenal sebagai sepak bola asosiasi, adalah cabang olahraga yang menggunakan bola yang umumnya terbuat dari bahan kulit dan dimainkan oleh dua tim yang masing-masing beranggotakan 11 orang pemain inti dan beberapa pemain cadangan dan barang kondisi baru', 'bola.jpg', 1, '2021-04-12 21:30:04', '2021-04-12 21:30:04', NULL),
(2, 'raket badminton', 200000, '96', 'Bulu tangkis adalah suatu olahraga yang menggunakan alat yang berbentuk bulat dengan memiliki rongga rongga di bagian pemukulnya. Dan memiliki gagang. Alat ini dikenal dengan nama raket yang dimainkan oleh dua orang atau dua pasangan yang saling berlawanan. dan barang kondisi baru', 'badminton.jpg', 1, '2021-04-12 21:30:16', '2021-04-12 21:30:16', NULL),
(3, 'kok badminton', 75000, '100', 'alat yang di gunakan untuk permainan badminton dan barang kondisi baru', 'kokbadminton.jpg', 1, '2021-04-12 21:30:30', '2021-04-12 21:30:39', '2021-04-12 21:30:39'),
(4, 'bola basket', 125000, '100', 'Bola basket adalah olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan. Bola basket dapat di lapangan terbuka, walaupun pertandingan profesional pada umumnya dilakukan di ruang tertutup. dan barang kondisi baru', 'bolabasket.jpg', 1, '2021-04-12 21:30:46', '2021-04-12 21:30:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `telpon` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalbelanja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `basket_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cod`
--

INSERT INTO `cod` (`id`, `telpon`, `alamat`, `pengiriman`, `totalbelanja`, `user_id`, `basket_id`, `created_at`, `updated_at`) VALUES
(1, '081905157614', 'jakarta', 'Gojek', '1,100,000', 1, NULL, '2021-04-12 21:32:25', '2021-04-12 21:32:25'),
(2, '081905157614', 'JALAN KOPO', 'Gojek', '1,500,000', 1, NULL, '2021-04-12 21:34:27', '2021-04-12 21:34:27'),
(3, '081905157614', 'jakarta', 'Gojek', '750,000', 1, NULL, '2021-04-12 21:39:32', '2021-04-12 21:39:32'),
(4, '081905157614', 'kopo bandung', 'Gojek', '800,000', 1, NULL, '2021-04-12 21:45:40', '2021-04-12 21:45:40');

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
-- Table structure for table `khususadmins`
--

CREATE TABLE `khususadmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_baskets` int(11) NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khususadmins`
--

INSERT INTO `khususadmins` (`id`, `id_baskets`, `hargabarang`, `totalharga`, `stok`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 100000, 600000, 6, 1, '0000-00-00 00:00:00', '2021-04-13 04:44:19'),
(3, 2, 200000, 800000, 4, 1, '0000-00-00 00:00:00', '2021-04-13 04:45:45');

--
-- Triggers `khususadmins`
--
DELIMITER $$
CREATE TRIGGER `kurangstokksaatdibeli` AFTER INSERT ON `khususadmins` FOR EACH ROW BEGIN 
UPDATE baskets SET stok=stok-NEW.stok
WHERE id  = NEW.id_baskets;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengantaran` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(10, '2021_03_04_101752_create_konfirmasi_table', 1),
(11, '2021_04_09_142534_create_barangs_table', 1),
(12, '2021_04_12_080042_create_khususadmins_table', 1),
(13, '2021_04_13_033719_add_soft_delete_to_barangs', 1);

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
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatpengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalbelanja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `basket_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksionlines`
--

INSERT INTO `transaksionlines` (`id`, `kartu`, `bukti`, `alamatpengiriman`, `pengiriman`, `totalbelanja`, `user_id`, `basket_id`, `created_at`, `updated_at`) VALUES
(1, 'CIMB-NIAGA', 'admin 1.PNG-1618289056.png', 'jonggol', 'Gojek', '600,000', 1, NULL, '2021-04-12 21:44:16', '2021-04-12 21:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Lorem', 'indonesia', 'adminlorem21@gmail.com', NULL, '$2y$10$ID8XVRmT8.RMtOSTVrmBgeHvKUyTKrCH99cZ5FKAsyC27zbdlTtkq', NULL, '2021-04-12 21:29:53', '2021-04-12 21:29:53');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khususadmins`
--
ALTER TABLE `khususadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khususadmins`
--
ALTER TABLE `khususadmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

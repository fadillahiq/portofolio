-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 10:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `title`, `image`, `description`, `genre`, `link_download`, `created_at`, `updated_at`) VALUES
(3, 'Kimetsu no Yaiba', 'public/hero/E9k9F5eerI2AIvLzymtlsM5kNQopaENPEJGo4JoN.jpg', 'Pemburu Iblis', 'Action', 'https://drive.google.com/u/1/uc?export=download&confirm=BI-p&id=1NXyu_zMnRiDqpU-GbB_kgdI5tdOqFXYX', '2021-01-16 08:23:56', '2021-01-16 08:23:56'),
(4, 'Tate no Yuusha', 'public/hero/9WrTnhlm0rNZCxoUA1kxAkUYuv5lCXBgtPqPAmhT.jpg', 'Pahlawan from zero to hero', 'Fantasy', 'https://drive.google.com/uc?export=download&id=1bcdU-4BaFliTI8_3lnVTLyLr_H1PrmBa', '2021-01-16 08:28:46', '2021-01-16 08:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Iqbal Fadilah', 'Halo nama saya Muhamad Iqbal Fadilah', '2021-01-17 07:08:16', '2021-01-17 07:08:16'),
(2, 'Muhamad Iqbal Fadilah', 'Halo nama saya Muhamad Iqbal Fadilah', '2021-01-17 07:10:03', '2021-01-17 07:10:03'),
(3, 'asdasd', 'asdasd', '2021-01-17 07:11:41', '2021-01-17 07:11:41'),
(4, 'asdasd', 'asdasd', '2021-01-17 07:13:43', '2021-01-17 07:13:43'),
(5, 'xcvxcv', 'xcvxcv', '2021-01-17 07:19:23', '2021-01-17 07:19:23'),
(6, 'aaaaaaaaaaaaaa', 'aaaaaaaa', '2021-01-17 07:22:17', '2021-01-17 07:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', 'asdasd', 'asdasd', '2021-01-15 14:10:01', '2021-01-15 14:10:01'),
(2, 'asdasd', 'asdasd@gmail.com', 'asdasd', 'asdasd', '2021-01-15 14:11:54', '2021-01-15 14:11:54'),
(3, 'asdasd', 'asdasd@gmail.com', 'asdsad', 'asdasd', '2021-01-15 14:18:08', '2021-01-15 14:18:08'),
(4, 'asdasd', 'asdasd@gmail.com', 'asasdasd', 'asdasd', '2021-01-15 14:20:12', '2021-01-15 14:20:12'),
(5, 'asdasd', 'asdasd@gmail.com', 'asdasd', 'asdasd', '2021-01-15 14:22:25', '2021-01-15 14:22:25'),
(6, 'asdasd', 'admin@mail.com', 'asdasd', 'asdsadasd', '2021-01-15 14:24:25', '2021-01-15 14:24:25'),
(7, 'asdasd', 'admin@mail.com', 'asdasd', 'asdsadasd', '2021-01-15 14:26:37', '2021-01-15 14:26:37'),
(8, 'asdasd', 'asdasd@gmail.com', 'asdasd', 'asdasd', '2021-01-15 14:26:51', '2021-01-15 14:26:51'),
(9, 'asd', 'laku0505@gmail.com', 'asd', 'asd', '2021-01-15 14:35:10', '2021-01-15 14:35:10'),
(16, 'Muhamad Iqbal Fadilah', 'laku0505@gmail.com', 'Perkenalan', 'Halo perkenalkan nama saya Muhamad Iqbal Fadilah', '2021-01-17 01:02:30', '2021-01-17 01:02:30'),
(17, 'Muhamad Iqbal Fadilah', 'laku0505@gmail.com', 'Perkenalan', 'Halo perkenalkan nama saya Muhamad Iqbal Fadilah', '2021-01-17 18:32:45', '2021-01-17 18:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_480p_uptobox` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_480p_acefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_480p_googledrive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_720p_uptobox` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_720p_acefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_720p_googledrive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_1080p_uptobox` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_1080p_acefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_1080p_googledrive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `title`, `image`, `description`, `type`, `episode`, `genre`, `duration`, `link_480p_uptobox`, `link_480p_acefile`, `link_480p_googledrive`, `link_720p_uptobox`, `link_720p_acefile`, `link_720p_googledrive`, `link_1080p_uptobox`, `link_1080p_acefile`, `link_1080p_googledrive`, `created_at`, `updated_at`) VALUES
(4, 'Kimi No Na Wa', 'public/images/qo2a13MGtBo10XYNEhQFMTPnV0Ph6lMs1QxOZ3oh.jpg', 'Kimi no Na wa bercerita tentang Mitsuha Miyamizu, seorang siswi sekolah menengah atas yang tinggal di desa fiktif bernama Itomori di daerah pegunungan Hida Prefektur Gifu, mulai bosan dengan kehidupannya di pedesaan tempat dia lahir dan berharap dapat terlahir menjadi pemuda tampan yang hidup di Tokyo pada kehidupan selanjutnya. Kemudian, Taki Tachibana, seorang siswa sekolah menengah atas yang tinggal di Tokyo, terbangun dari tidurnya dan menyadari bahwa dirinya adalah Mitsuha, yang entah bagaimana bisa masuk ke dalam tubuh Taki.', 'Movie', 1, 'Fantasy', '1hr . 46 min .', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '2021-01-15 16:51:00', '2021-01-16 07:12:07'),
(5, 'Kimi no Suizou wo Tabetai', 'public/images/YF808CvJmbPPLoqcqQovWzUdKbujTJThMDN2QNG5.jpg', 'di bulan april, di mana bunga sakura mulai bermekaran dan awal bagi setiap anak sekolah memulai kegiatan sekolah di semester baru nya . Fokus cerita berpusat pada seorang siswa biasa yang suka membaca bernama Shiga Haruki . Ketika sedang ke dokter dirinya tanpa sengaja menemukan sebuah buku harian yang tergeletak dengan sampul yang tertulis “Hidup saat Sekarat” . Ketika dia membaca isi buku itu menyadari kalau yang memiliki buku tersebut memiliki penyakit yang sudah parah pada pankreas nya .', 'Movie', 1, 'Action', '1 hr . 48 min .', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '2021-01-15 17:32:03', '2021-01-16 07:12:14'),
(7, 'Semunya punya Iqbal', 'public/images/bzyh4XPhvjsDoykmcHwnwbHpISSyKCTxvVtTpxEQ.jpg', 'Hahahahahahah', 'BD', 24, 'Romance', '24 min. per ep.', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '2021-01-15 17:58:51', '2021-01-16 07:11:49');

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
(4, '2021_01_15_145046_create_animes_table', 2),
(5, '2021_01_15_192012_create_animes_table', 3),
(7, '2014_10_12_000000_create_users_table', 4),
(8, '2014_10_12_100000_create_password_resets_table', 4),
(9, '2019_08_19_000000_create_failed_jobs_table', 4),
(10, '2021_01_15_192956_create_dashboards_table', 4),
(11, '2021_01_15_205114_create_contacts_table', 5),
(12, '2021_01_16_143358_create_carousels_table', 6),
(13, '2021_01_17_134736_create_comments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('laku0505@gmail.com', '$2y$10$oByLKGlJjBlGzLRAn3q8POL8OBji93UyXIaueBP9ziSD8K4NeiSyK', '2021-01-15 16:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Iqbal Fadilah', 'laku0505@gmail.com', NULL, '$2y$10$vtYCUPLbGjQ0SltAPzZ/7.iz58XKi.zL8gP9VkwxvIZaYdk7/ep6C', 'eAeQzK1JhnpJ1FWJ0TZHJIYr4c9hxNilCjNs2A2mb0TbJ629TjGmyF86MKtG', '2021-01-15 12:48:54', '2021-01-15 12:48:54'),
(2, 'Iqbal', 'maende0909@gmail.com', NULL, '$2y$10$Z6KqYdWudBXmG5iUI6ynuevabqDCx3pYNuX6KRsMnRZvn3m5miXW2', NULL, '2021-01-17 01:32:12', '2021-01-17 01:32:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

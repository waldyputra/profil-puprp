-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2025 at 01:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puprp`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Dinas PUPR Bintan Akan Lakukan Pemasangan Batu Miring', 'KBRN, Bintan: Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPR) Kabupaten Bintan akan melakukan pemasangan batu miring di area perkantoran Pemkab Bintan pada 2025 mendatang.\r\n\r\nKepala Dinas PUPR Bintan, Wan Affandi mengatakan, pemasangan batu miring di lokasi perkantoran DLH, Disdukcapil dan Disnaker tersebut, nantinya akan dibangun dua kantor lainnya. \r\n\r\n\"Disini udah ada 3 kantor, nanti rencananya akan bertambah 2 lagi untuk Satpol PP dan Kesbangpol di lokasi yang sama,\" kata Wan Affandi Senin (30/9/2024).\r\n\r\nNamun, lanjutnya, perencanaan dua gedung tersebut, masih dihitung untuk besaran anggaran yang diperlukan untuk pembangunan dua gedung kantor pada tahun 2025.\r\n\r\n\"Dua gedung itu masih direncanakan, dan anggarannya belum ditetapkan. Tapi untuk kaplingnya sudah kita data,\" ucapnya. \r\n\r\nIa menyebut, jika anggaran 2025 memadai untuk pembangunan gedung baru, maka pengerjaan akan dilakukan. \r\n\r\n\"Kita masih nunggu anggaran. Kalau luasan kapling gedung baru kurang ingat,\" katanya, mengakhiri.', 'images/imsoHaa1qnapQXysQ2wLSgA4YBeVDb5LvneYG9EA.jpg', '2025-01-16 19:03:30', '2025-01-16 19:03:30'),
(3, 'Dinas PUPR Bintan Akan Lakukan Pemasangan Batu Miring', 'KBRN, Bintan: Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPR) Kabupaten Bintan akan melakukan pemasangan batu miring di area perkantoran Pemkab Bintan pada 2025 mendatang.\r\n\r\nKepala Dinas PUPR Bintan, Wan Affandi mengatakan, pemasangan batu miring di lokasi perkantoran DLH, Disdukcapil dan Disnaker tersebut, nantinya akan dibangun dua kantor lainnya. \r\n\r\n\"Disini udah ada 3 kantor, nanti rencananya akan bertambah 2 lagi untuk Satpol PP dan Kesbangpol di lokasi yang sama,\" kata Wan Affandi Senin (30/9/2024).\r\n\r\nNamun, lanjutnya, perencanaan dua gedung tersebut, masih dihitung untuk besaran anggaran yang diperlukan untuk pembangunan dua gedung kantor pada tahun 2025.\r\n\r\n\"Dua gedung itu masih direncanakan, dan anggarannya belum ditetapkan. Tapi untuk kaplingnya sudah kita data,\" ucapnya. \r\n\r\nIa menyebut, jika anggaran 2025 memadai untuk pembangunan gedung baru, maka pengerjaan akan dilakukan. \r\n\r\n\"Kita masih nunggu anggaran. Kalau luasan kapling gedung baru kurang ingat,\" katanya, mengakhiri.', 'images/xVFE6V9cZtxJFUundQCp3G8sYA1hFQrMb6X5Jk7x.jpg', '2025-01-22 19:51:00', '2025-01-22 19:51:00'),
(4, 'rtertert', 'KBRN, Bintan: Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPR) Kabupaten Bintan akan melakukan pemasangan batu miring di area perkantoran Pemkab Bintan pada 2025 mendatang.\r\n\r\nKepala Dinas PUPR Bintan, Wan Affandi mengatakan, pemasangan batu miring di lokasi perkantoran DLH, Disdukcapil dan Disnaker tersebut, nantinya akan dibangun dua kantor lainnya. \r\n\r\n\"Disini udah ada 3 kantor, nanti rencananya akan bertambah 2 lagi untuk Satpol PP dan Kesbangpol di lokasi yang sama,\" kata Wan Affandi Senin (30/9/2024).\r\n\r\nNamun, lanjutnya, perencanaan dua gedung tersebut, masih dihitung untuk besaran anggaran yang diperlukan untuk pembangunan dua gedung kantor pada tahun 2025.\r\n\r\n\"Dua gedung itu masih direncanakan, dan anggarannya belum ditetapkan. Tapi untuk kaplingnya sudah kita data,\" ucapnya. \r\n\r\nIa menyebut, jika anggaran 2025 memadai untuk pembangunan gedung baru, maka pengerjaan akan dilakukan. \r\n\r\n\"Kita masih nunggu anggaran. Kalau luasan kapling gedung baru kurang ingat,\" katanya, mengakhiri.', 'images/3oMLbbSnkLqZGpPHhyvD5FZuqSfwEe8UJebBq0Ac.jpg', '2025-01-22 19:51:19', '2025-01-22 19:51:19'),
(5, 'fsdfsdfsd', 'KBRN, Bintan: Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPR) Kabupaten Bintan akan melakukan pemasangan batu miring di area perkantoran Pemkab Bintan pada 2025 mendatang.\r\n\r\nKepala Dinas PUPR Bintan, Wan Affandi mengatakan, pemasangan batu miring di lokasi perkantoran DLH, Disdukcapil dan Disnaker tersebut, nantinya akan dibangun dua kantor lainnya. \r\n\r\n\"Disini udah ada 3 kantor, nanti rencananya akan bertambah 2 lagi untuk Satpol PP dan Kesbangpol di lokasi yang sama,\" kata Wan Affandi Senin (30/9/2024).\r\n\r\nNamun, lanjutnya, perencanaan dua gedung tersebut, masih dihitung untuk besaran anggaran yang diperlukan untuk pembangunan dua gedung kantor pada tahun 2025.', 'images/vwTGHnXLSfAYq3RyCb4EpSE0EWgMFW2o46y6BU50.jpg', '2025-01-22 19:51:38', '2025-01-22 19:51:38'),
(6, 'dfhfdghfg', '\"Dua gedung itu masih direncanakan, dan anggarannya belum ditetapkan. Tapi untuk kaplingnya sudah kita data,\" ucapnya. \r\n\r\nIa menyebut, jika anggaran 2025 memadai untuk pembangunan gedung baru, maka pengerjaan akan dilakukan. \r\n\r\n\"Kita masih nunggu anggaran. Kalau luasan kapling gedung baru kurang ingat,\" katanya, mengakhiri.', 'images/oPQX1q9GXx9WIjSXTVvuMIUg9bYO8VTs8hKeI3gs.png', '2025-01-22 19:52:08', '2025-01-22 19:52:08'),
(7, 'czvzcvbvbcvxbxcvbcv', 'KBRN, Bintan: Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPR) Kabupaten Bintan akan melakukan pemasangan batu miring di area perkantoran Pemkab Bintan pada 2025 mendatang.\r\n\r\nKepala Dinas PUPR Bintan, Wan Affandi mengatakan, pemasangan batu miring di lokasi perkantoran DLH, Disdukcapil dan Disnaker tersebut, nantinya akan dibangun dua kantor lainnya. \r\n\r\n\"Disini udah ada 3 kantor, nanti rencananya akan bertambah 2 lagi untuk Satpol PP dan Kesbangpol di lokasi yang sama,\" kata Wan Affandi Senin (30/9/2024).\r\n\r\nNamun, lanjutnya, perencanaan dua gedung tersebut, masih dihitung untuk besaran anggaran yang diperlukan untuk pembangunan dua gedung kantor pada tahun 2025.\r\n\r\n\"Dua gedung itu masih direncanakan, dan anggarannya belum ditetapkan. Tapi untuk kaplingnya sudah kita data,\" ucapnya. \r\n\r\nIa menyebut, jika anggaran 2025 memadai untuk pembangunan gedung baru, maka pengerjaan akan dilakukan. \r\n\r\n\"Kita masih nunggu anggaran. Kalau luasan kapling gedung baru kurang ingat,\" katanya, mengakhiri.', 'images/mgaLBlcNpqjPj9vesSaxXMK74CA4gi9xHYh3g2yX.jpg', '2025-01-22 19:52:27', '2025-01-22 19:52:27'),
(8, 'uiouiopoip', 'KBRN, Bintan: Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPR) Kabupaten Bintan akan melakukan pemasangan batu miring di area perkantoran Pemkab Bintan pada 2025 mendatang.\r\n\r\nKepala Dinas PUPR Bintan, Wan Affandi mengatakan, pemasangan batu miring di lokasi perkantoran DLH, Disdukcapil dan Disnaker tersebut, nantinya akan dibangun dua kantor lainnya. \r\n\r\n\"Disini udah ada 3 kantor, nanti rencananya akan bertambah 2 lagi untuk Satpol PP dan Kesbangpol di lokasi yang sama,\" kata Wan Affandi Senin (30/9/2024).\r\n\r\nNamun, lanjutnya, perencanaan dua gedung tersebut, masih dihitung untuk besaran anggaran yang diperlukan untuk pembangunan dua gedung kantor pada tahun 2025.\r\n\r\n\"Dua gedung itu masih direncanakan, dan anggarannya belum ditetapkan. Tapi untuk kaplingnya sudah kita data,\" ucapnya. \r\n\r\nIa menyebut, jika anggaran 2025 memadai untuk pembangunan gedung baru, maka pengerjaan akan dilakukan. \r\n\r\n\"Kita masih nunggu anggaran. Kalau luasan kapling gedung baru kurang ingat,\" katanya, mengakhiri.', 'images/eekc3FBgo7Zhtdfw0yzWXrrJQNd3cND473e5Mo0j.jpg', '2025-01-22 19:52:40', '2025-01-22 19:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `bidangs`
--

CREATE TABLE `bidangs` (
  `id` bigint UNSIGNED NOT NULL,
  `namabidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidangs`
--

INSERT INTO `bidangs` (`id`, `namabidang`, `tentang`, `created_at`, `updated_at`) VALUES
(3, 'Bina Marga', 'Bidang yang mengurusi jalan dan jembatan', '2024-07-22 20:17:30', '2024-07-22 20:17:30'),
(4, 'Sumber Daya Air', 'Sumber yang mengurusi air', '2024-07-22 20:18:24', '2024-07-22 20:18:24'),
(5, 'Bina Konstruksi', 'Bidang yang mengurusi bangunan', '2024-07-22 20:18:39', '2024-07-22 20:18:39'),
(6, 'Cipta Karya', 'Bidang yang mengurusi pembangunan', '2024-07-22 20:18:58', '2024-07-22 20:18:58'),
(7, 'Tata Ruang dan Pertanahan', 'Bidang yang mengurusi tata ruang dan pertanahan', '2024-07-22 20:23:24', '2024-07-22 20:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'bermanfaat', '2025-01-20 23:49:09', '2025-01-20 23:49:09'),
(2, 'bermanfaat', '2025-01-20 23:50:24', '2025-01-20 23:50:24'),
(3, 'sangat_bermanfaat', '2025-01-20 23:54:28', '2025-01-20 23:54:28'),
(4, 'cukup_bermanfaat', '2025-01-21 00:13:49', '2025-01-21 00:13:49'),
(5, 'bermanfaat', '2025-01-21 00:14:15', '2025-01-21 00:14:15'),
(6, 'cukup_bermanfaat', '2025-01-21 00:14:24', '2025-01-21 00:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `created_at`, `updated_at`) VALUES
(4, 'Monitoring', '2025-01-17 01:03:21', '2025-01-17 01:03:21'),
(5, 'Monitoring lagi', '2025-01-17 01:11:47', '2025-01-17 01:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `geografis`
--

CREATE TABLE `geografis` (
  `id` bigint UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geografis`
--

INSERT INTO `geografis` (`id`, `alamat`, `koordinat`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Raya Tanjungpinang-Tanjunguban Km.42', '1.0950987,104.4959756', '2024-07-24 20:04:40', '2024-07-24 20:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `alamat`, `koordinat`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Raya Tanjungpinang-Tanjunguban Km.42', '1.0950811,104.4958334', '2024-07-28 20:24:13', '2025-01-19 20:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_21_071615_create_bidangs_table', 2),
(7, '2024_07_23_041211_create_pejabats_table', 3),
(8, '2024_07_24_095002_create_sejarahs_table', 4),
(9, '2024_07_24_150057_create_visimisis_table', 5),
(10, '2024_07_25_020441_create_strukturs_table', 6),
(12, '2024_07_25_024026_create_geografis_table', 7),
(13, '2024_07_29_021550_create_maps_table', 8),
(14, '2024_07_29_070230_create_galleries_table', 9),
(15, '2024_07_29_070248_create_photos_table', 9),
(16, '2024_07_30_023727_create_beritas_table', 10),
(17, '2025_01_21_064313_create_feedback_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pejabats`
--

CREATE TABLE `pejabats` (
  `id` bigint UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapejabat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pejabats`
--

INSERT INTO `pejabats` (`id`, `jabatan`, `namapejabat`, `nip`, `tempatlahir`, `tanggallahir`, `agama`, `pangkat`, `pendidikan`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Kepala Dinas', 'Wan Affandi, S.T., M.M', '198101162006041010', 'PEKANBARU', '1981-01-16', 'ISLAM', 'Pembina Tk.I (IV/b)', 'S2 Manajemen', 'images/HrRgpatqfDjdJevQoCgxlCLLHxkuGO9LijH0l7yQ.jpg', '2025-01-19 18:49:37', '2025-01-19 18:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `gallery_id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `gallery_id`, `path`, `created_at`, `updated_at`) VALUES
(10, 4, 'photos/6CukoRd1JrnLj3zUyQ5fsQUeHwdfnyvNqNmb7KeR.jpg', '2025-01-17 01:03:22', '2025-01-17 01:03:22'),
(11, 5, 'photos/JLXxb6cRBhoB79dJ9mS8tkrrb89NuZWWM7LUvrI7.jpg', '2025-01-17 01:11:47', '2025-01-17 01:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` bigint UNSIGNED NOT NULL,
  `namasejarah` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strukturs`
--

INSERT INTO `strukturs` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'images/oG0K1e96vI5XBQeXMfTzlY8XIVLusB6ggF2ApqUT.png', '2025-01-21 21:16:49', '2025-01-21 21:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `address`, `city`, `country`, `postal`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', 'admin@argon.com', NULL, '$2y$12$7lPBcaII8kRtV2R2yZnLNuUNRpna6tL8hcd1UvghlsWBff6.JfKNu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visimisis`
--

CREATE TABLE `visimisis` (
  `id` bigint UNSIGNED NOT NULL,
  `visi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visimisis`
--

INSERT INTO `visimisis` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(4, 'Visi pembangunan jangka menengah Kabupaten Bintan dalam 5 (lima) tahun mendatang untuk periode RPJMD Tahun 2021-2026 adalah “BINTAN RUMAH KITA YANG BERKEADILAN, BERDAYA SAING, DAN INOVATIF MENUJU MASYARAKAT YANG SEJAHTERA”.', 'Mempercepat Pertumbuhan dan Pemerataan Pembangunan Infrastruktur Berbasis Lingkungan dan Tata Ruang', '2025-01-16 00:56:41', '2025-01-16 00:56:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geografis`
--
ALTER TABLE `geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pejabats`
--
ALTER TABLE `pejabats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visimisis`
--
ALTER TABLE `visimisis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `geografis`
--
ALTER TABLE `geografis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pejabats`
--
ALTER TABLE `pejabats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisis`
--
ALTER TABLE `visimisis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

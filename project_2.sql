-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 05:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_2`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_10_071513_create_section_1_table', 1),
(6, '2023_08_10_072556_create_section_2_table', 1),
(7, '2023_08_10_075053_create_section_3_table', 1),
(8, '2023_08_10_080015_create_sectioncards_table', 1),
(9, '2023_08_10_080633_create_section_4_table', 1),
(10, '2023_08_10_081111_create_quick_tips_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `quick_tips`
--

CREATE TABLE `quick_tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick_tips`
--

INSERT INTO `quick_tips` (`id`, `title`, `text`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(35, 'Be Relax', 'this is testing for quick tip 1  this is testing for quick tip 1 this is testing for quick tip 1 this is testing for quick tip 1 this is testing for quick tip 1 this is testing for quick tip 1 this is testing for quick tip 1', 'images/bSJOU8Zry5HiajvfM7hmbhvA7ZkHuZE5fKMETBE4.png', 'fab fa-adversal', NULL, NULL),
(36, 'HEADING 2', 'this is also QUick TIPSssssssssssssssssssss testing texttttttttttttt  this is also QUick TIPSssssssssssssssssssss testing textttttttttttttthis is also QUick TIPSssssssssssssssssssss testing textttttttttttttthis is also QUick TIPSssssssssssssssssssss testing textttttttttttttthis is also QUick TIPSssssssssssssssssssss testing textttttttttttttthis is also QUick TIPSssssssssssssssssssss testing texttttttttttttt', 'images/FD4dQ8IUWKiqII8MKzFtFV5y4IOPUek03fMQ6DPh.png', 'fas fa-american-sign-language-interpreting', NULL, NULL),
(37, 'heading 3', 'this is also QUick TIPSsssslkfddfkjgfopdavjgmrdirakfvduwesktnvfdesrluhnvsirl;ifjhoditrfildstgfiezkruilkfdloeskudjgvpdwasuthgjfoesp;ierfhgruidtairfkojisrdkfjgtttttttttttthis is also QUick TIPSssssssssssssssssssss testing texttttttttttttt', 'images/A1pYPFF4e4wTSaYUnaIH74qIey4E4Ee2A4UlhQA8.png', 'fab fa-bitcoin', NULL, NULL),
(38, 'this is fourth one', 'testinkdsflkdf sdjfvcdjfisdjfad  g gsdg vsdg dglsdgk\\sd\r\ntv47e4]crr/34]wr\r\n6vtc44t/4\r\ng\'ERt\r\ng\'5ver idtcfWESYF][pgvksjdar;fwpls.yogvfjwk,t,ogjvdktlrfodjfxgfpsohjg', 'images/VerH4BHMGUijsFti89UEyOh8rXaywHXOMhVDDpbd.png', 'far fa-address-book', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sectioncards`
--

CREATE TABLE `sectioncards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cardTitle` varchar(255) DEFAULT NULL,
  `cardText` text DEFAULT NULL,
  `buttonText` varchar(255) DEFAULT NULL,
  `backgroundimage` varchar(255) DEFAULT NULL,
  `cardIcon` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectioncards`
--

INSERT INTO `sectioncards` (`id`, `cardTitle`, `cardText`, `buttonText`, `backgroundimage`, `cardIcon`, `pdf`, `page`, `url`, `created_at`, `updated_at`) VALUES
(1, 'this is 1st heading', 'testing text testing text testing text testing text testing texttesting text testing text testing text testing text testing texttesting text testing text testing text testing text testing text', 'next card', 'images/QQBB31J2J3r3vYFFs3evSjW2ewQH40WiSWcS0Dzf.png', 'fas fa-adjust', NULL, NULL, NULL, NULL, NULL),
(2, 'this is second Card', 'testing testing text in card body hi this is testing  testing testing text in card body hi this is testing     testing testing text in card body hi this is testing   testing testing text in card body hi this is testing', 'move next', 'images/jexned1b4ohHAlkpxNZZz0VH55uwjKtUmxhJgTrP.png', 'fas fa-address-card', NULL, NULL, NULL, NULL, NULL),
(3, 'this is card heading', 'testing testing text in card body hi this is testingtesting testing text in card body hi this is testingtesting testing text in card body hi this is testingtesting testing text in card body hi this is testingtesting testing text in card body hi this is testingtesting testing text in card body hi this is testing', 'explore more', 'images/uHeJJQQYFWkyTmZqliypEShujWWxZquct5MU9uGW.png', 'fas fa-bullseye', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_1`
--

CREATE TABLE `section_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `bodyText` text NOT NULL,
  `backgroundImage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_1`
--

INSERT INTO `section_1` (`id`, `heading`, `bodyText`, `backgroundImage`, `created_at`, `updated_at`) VALUES
(1, 'sfsf', 'sdcfecfreftrwet4dwftf34e', 'images/w84qBgthWd7tR1Po8ftc3jSK68LAmqGmr5Srt5DX.jpg', '2023-08-11 12:18:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_2`
--

CREATE TABLE `section_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `bodyText` text DEFAULT NULL,
  `text_2` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sliderimage1` varchar(255) DEFAULT NULL,
  `sliderimage2` varchar(255) DEFAULT NULL,
  `sliderimage3` varchar(255) DEFAULT NULL,
  `sliderimage4` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_2`
--

INSERT INTO `section_2` (`id`, `heading`, `bodyText`, `text_2`, `image`, `sliderimage1`, `sliderimage2`, `sliderimage3`, `sliderimage4`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'hhhhhhhhhhhhhhhh', 'this is section 2 body tthis is section 2 body text hi there im herethis is section 2 body text hi there im here\r\nthis is section 2 body text hi there im herethis is section 2 body text hi there im herethis is section 2 body text hi there im herethis is section 2 body text hi there im hereext hi there im herethis is section 2 body tthis is section 2 body text hi there im herethis is section 2 body text hi there im here\r\nthis is section 2 body text hi there im herethis is section 2 body text hi there im herethis is section 2 body text hi there im herethis is section 2 body text hi there im hereext hi there im here', 'tykkknfbbyfszdcsdxdgesavgrtfsyre', 'images/8StJI4svA3m2x24b9wdUv7d0urOYK1qPIJJaGO36.png', 'images/ln7Z8MPNqiqA1iIczcg0FOvDqQ2bnINUxVvZLhDU.png', 'images/HpGooznzzGLRwYFQ8d422sC52mX9AwiXrOrSJCwi.png', 'images/9jpMBziPLXkHSpJc9QDRJFi4zgvLihJ8y6dPNZe5.png', 'images/d90k7Z2ENT9YYrULDWXs01jIACQmBEvyquow6c1p.png', 'https://youtu.be/7BnWU6Q-f_c?t=1115', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_3`
--

CREATE TABLE `section_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `bodyText` text DEFAULT NULL,
  `buttonText` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_3`
--

INSERT INTO `section_3` (`id`, `heading`, `bodyText`, `buttonText`, `image`, `pdf`, `page`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About the section 3 heading is this', 'and this is the testing for section 3 Text Area   and this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Areaand this is the testing for section 3 Text Area', 'button text..', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_4`
--

CREATE TABLE `section_4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Text` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `FrontDeskText` text DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_4`
--

INSERT INTO `section_4` (`id`, `Title`, `Text`, `email`, `phone`, `FrontDeskText`, `facebook_link`, `insta_link`, `twitter_link`, `linkedin_link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'cfdfcsf', 'saietjv@gmail.com', '0234234243555', 'dkfodas fc', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'www.linkedin.com/in/shahbaz-ali-4b375b1b9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quick_tips`
--
ALTER TABLE `quick_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectioncards`
--
ALTER TABLE `sectioncards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_1`
--
ALTER TABLE `section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_2`
--
ALTER TABLE `section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_3`
--
ALTER TABLE `section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_4`
--
ALTER TABLE `section_4`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quick_tips`
--
ALTER TABLE `quick_tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sectioncards`
--
ALTER TABLE `sectioncards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_1`
--
ALTER TABLE `section_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_2`
--
ALTER TABLE `section_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_3`
--
ALTER TABLE `section_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_4`
--
ALTER TABLE `section_4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

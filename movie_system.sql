-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 10:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `casts`
--

CREATE TABLE `casts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_of_movies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casts`
--

INSERT INTO `casts` (`id`, `name`, `image`, `bio`, `birth_date`, `list_of_movies`, `created_at`, `updated_at`) VALUES
(1, 'Sahid kapoor', '/img/sahidkapoor.jpg', 'Kapoor also known as Shahid Khattar, is an Indian actor who appears in Hindi films was born to actor Pankaj Kapoor and actor/classical dancer Neelima Azeem. Kapoor made his film debut in 2003 with a leading role in the romantic comedy Ishq Vishk, a sleeper hit for which he won a Filmfare Award for Best Male Debut. Kapoor earned nominations for the Filmfare Award for Best Actor for portraying a troubled businessman in Imtiaz Ali\'s romantic comedy Jab We Met (2007) and twin brothers in Vishal Bhardwaj\'s caper thriller Kaminey (2009).', '1981-02-25', 'Vivah,Kismat connection,Chp chup ke,Kabir Singh,', '2021-05-18 05:38:35', '2021-05-22 11:00:26'),
(3, 'Kareena Kapoor', '/img/kareenakapoor.jpg', 'Kareena Kapoor often informally referred to as Bebo, is an Indian film actress who appears in Bollywood films. Born into a film family where both her parents, Randhir Kapoor and Babita, and her elder sister Karisma were actors, Kapoor faced the media spotlight from a very young age. However, she did not make her acting debut until the 2000 film Refugee, which earned her the Filmfare Best Female Debut Award. Her melodrama Kabhi Khushi Kabhie Gham became India\'s highest grossing film in the overseas market in 2001 and is her biggest commercial success to date.', '1980-03-03', 'Chup Chup ke,Golamal3,Atraz,Kabir Singh', '2021-05-19 21:01:04', '2021-05-22 11:02:50'),
(4, 'shraddha kapoor', '/img/shraddha.jpg', 'Shraddha Kapoor is an Indian actress and singer who is known for her work in Bollywood films. The daughter of actor Shakti Kapoor, she began her acting career with a brief role in the 2010 heist film Teen Patti, and followed it with her first leading role in the teen drama Luv Ka The End (2011).  Kapoor gained wide recognition for playing a singer in the highly successful romantic drama Aashiqui 2 (2013), for which she received a Filmfare Award for Best Actress nomination.', '1987-03-03', 'Baaghi 3,Stree,Saaho,Aashiqui 2', '2021-05-22 10:56:09', '2021-05-22 10:56:09'),
(5, 'Varun Dhawan', '/img/varun.jpg', 'Varun Dhawan is an Indian actor working in Bollywood films. The son of film director David Dhawan, he studied Business Management in England, after which he worked as an assistant director to Karan Johar on the 2010 drama My Name Is Khan. Dhawan made his acting debut with Johar\'s 2012 romantic comedy Student of the Year, a box office success, for which he received a Filmfare nomination for Best Male Debut. In 2014, he starred as the protagonist of two commercially successful comedies— Main Tera Hero and Humpty Sharma Ki Dulhania.', '1987-02-04', 'Kalank,Judwaa 2 ,Student of the Year', '2021-05-23 13:01:57', '2021-05-23 13:01:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_17_082120_create_movies_table', 2),
(5, '2021_05_17_124046_create_casts_table', 2),
(6, '2021_05_22_183859_create_theaters_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_year` int(11) NOT NULL,
  `runtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `overview`, `release_year`, `runtime`, `cast`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'Vivah', 'Poonam, a traditionally brought-up young woman, is to marry Prem, a groom chosen by her uncle. Poonam and Prem\'s faith and love are to be tested however, when an accident occurs and Poonam might be scarred for life.....', 2006, '2 H : 55 M', 'Sahid kapoor, Amrita rao', '/img/vivah.jpg', '2021-05-18 03:56:08', '2021-05-23 00:10:29'),
(3, 'Bāhubali 2: The Conclusion', 'When Mahendra, the son of Bāhubali, learns about his heritage, he begins to look for answers. His story is juxtaposed with past events that unfolded in the Mahishmati Kingdom.', 2017, '2 H : 48 M', 'Prabhas,Anushka Shetty,Rana Daggubati', '/img/bahubali1.jpg', '2021-05-19 03:20:19', '2021-05-23 00:09:50'),
(4, 'Yeh Jawaani Hai Deewani', 'Yeh jawaani hai deewani is truly a treat to watch.Such a masterpiece. The joy that runs through you mind when you enjoy golden days with your best friends.when you don\'t know interacting with people still someone comes to your life,changes the rhythm,makes you fall in love with the most unexpected person and of course yourself too.6 years passed still the love and craze is same! it\'s insanely beautiful.A worth watching movie for all ages. But amidst all of these, i love naina the most.', 2013, '2 H : 30M', 'Ranbir Kapoor and Dipika Padukone', '/img/yjhd.jpg', '2021-05-19 08:47:08', '2021-05-23 00:10:55'),
(9, 'Baaghi 3', 'A man embarks on a bloody rampage to save his kidnapped brother.', 2020, '2 H : 23M', 'Tiger Shroff,Ritesh Deshmukh,Shraddha Kapoor', '/img/baghi3.jpg', '2021-05-22 09:25:26', '2021-05-23 00:11:42'),
(10, 'Student of the Year', 'Several alumni reminisce about their final year at St. Theresa\'s College and the events that shaped their lives.', 2012, '2 H : 26M', 'Sidharth Malhotra,Alia Bhatt,Varun Dhawan', '/img/soty.jpg', '2021-05-23 12:59:24', '2021-05-23 12:59:24'),
(11, 'Dear Zindagi', 'An unconventional thinker helps a budding cinematographer gain a new perspective on life.  Gauri Shinde', 2016, '2 H : 31M', 'Alia Bhatt,Shah Rukh Khan', '/img/dearzindgi.jpg', '2021-05-23 15:06:05', '2021-05-23 15:06:05');

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
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theatre_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratting` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `theatre_name`, `city_name`, `ratting`, `created_at`, `updated_at`) VALUES
(1, 'PVR Cinemas', 'AHMEDABAD', 5, '2021-05-22 14:35:46', '2021-05-22 14:41:32'),
(2, 'Wide Angle', 'AHMEDABAD', 4, '2021-05-22 14:48:06', '2021-05-22 14:48:06');

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
(1, 'Kajal Jethava', 'kajaljethva@gmail.com', NULL, '$2y$10$6Wuq0HPjkuZcNC5mtKWEzuLB2VsmM9kV5sEUFujUHOWXniIjpJ6ae', NULL, '2021-05-19 23:58:48', '2021-05-19 23:58:48'),
(2, 'Chirag Jethava', 'chiragjethva@gmail.com', NULL, '$2y$10$5lv8coOJaIliZzdY0Dst/ejR6rYlZuhGRSC0CTbEyzA9nc/x5RyGa', NULL, '2021-05-20 01:38:13', '2021-05-20 01:38:13'),
(3, 'Komal dave', 'komaldave@gmail.com', NULL, '$2y$10$yOn0VIf6DNTqMKVmOGtdSuSpTzTMONj7Rsf8dzqwPpXMbh42H15xa', NULL, '2021-05-20 01:50:41', '2021-05-20 01:50:41'),
(4, 'Arti Jain', 'aj@gmail.com', NULL, '$2y$10$DG2IIraNEzaID0fc1phNJ.vXZP1sUTG9KPVyUWH2o1d28gAJ2KrJa', NULL, '2021-05-20 01:55:22', '2021-05-20 01:55:22'),
(5, 'Isha More', 'ishamore@gmail.com', NULL, '$2y$10$WXIDEmPkzYp3xTVItn6uyOlD3.1VX4uYx.XvndlQJN5rWiVgs8kQu', NULL, '2021-05-20 01:57:05', '2021-05-20 01:57:05'),
(6, 'Kareena', 'kareenavaghela@gmail.com', NULL, '$2y$10$wJt.JQf67DPznbnG1QweuesMUyShvxDYN0OKNetizt3ujHp9prXjq', NULL, '2021-05-20 02:00:20', '2021-05-20 02:00:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casts`
--
ALTER TABLE `casts`
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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
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
-- AUTO_INCREMENT for table `casts`
--
ALTER TABLE `casts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

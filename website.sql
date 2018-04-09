-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-04-10 02:02:46
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `website`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `created_at`, `updated_at`) VALUES
(0, 'tabby', 'tabby@gasf', NULL, NULL),
(0, 'ss', 'tabby@gasf', NULL, NULL),
(0, 'ssa', 'tabby@gasf', '2018-04-09 17:54:28', '2018-04-09 17:54:28'),
(0, 'ssa', 'tabby@gasf', '2018-04-09 17:55:43', '2018-04-09 17:55:43'),
(0, 'ssa', 'tabby@gasf', '2018-04-09 17:57:21', '2018-04-09 17:57:21'),
(0, 'ssa', 'tabby@gasf', '2018-04-09 17:58:22', '2018-04-09 17:58:22'),
(0, 'ff', 'ff', '2018-04-09 18:00:35', '2018-04-09 18:00:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

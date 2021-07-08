-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 7 月 08 日 16:28
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_DEV8_04_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(NULL, 'nanana', '111111', 1, 1, '2021-07-03 16:17:21', '2021-07-03 16:17:21'),
(NULL, 'かわせ', '111111', 1, 0, '2021-07-03 16:35:45', '2021-07-03 16:35:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_touroku`
--

CREATE TABLE `user_touroku` (
  `id` int(12) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chiiki` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kijutu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `user_touroku`
--

INSERT INTO `user_touroku` (`id`, `username`, `mail`, `chiiki`, `age`, `kijutu`) VALUES
(11, 'とかげ', 'keienne0513@icloud.com', '北海道', '９０', 'しっぽ'),
(13, 'ミノムシ', 'keienne0513@icloud.com', '千葉県', '２１', '健康'),
(14, 'かわせ', 'keienne0513@icloud.com', '宮城県', '20', '健康'),
(15, 'ラムネ', 'keienne0513@icloud.com', '青森県', '９９', 'メロン'),
(16, 'かわせ', 'keienne0513@icloud.com', '北海道', '20', 'しっぽ'),
(17, 'もみじ１', 'keienne0513@icloud.com', '北海道', '２０', '目'),
(18, 'nanana', 'keienne0513@icloud.com', '北海道', '12', 'あさごはん'),
(19, 'たまご', 'keienne0513@icloud.com', '青森県', '20', '健康'),
(20, 'a', 'keienne0513@icloud.com', '青森県', '1', '健康');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `user_touroku`
--
ALTER TABLE `user_touroku`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `user_touroku`
--
ALTER TABLE `user_touroku`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

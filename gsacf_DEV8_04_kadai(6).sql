-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 7 月 29 日 17:02
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
-- テーブルの構造 `like_table`
--

CREATE TABLE `like_table` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `todo_id` int(12) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `like_table`
--

INSERT INTO `like_table` (`id`, `user_id`, `todo_id`, `created_at`) VALUES
(10, 0, 1, '2021-07-29 23:25:46');

-- --------------------------------------------------------

--
-- テーブルの構造 `tsukare_table`
--

CREATE TABLE `tsukare_table` (
  `id` int(12) NOT NULL,
  `todo` varbinary(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `tsukare_table`
--

INSERT INTO `tsukare_table` (`id`, `todo`) VALUES
(1, 0x4e6f7720466f6f64732c20e382a8e3838de383abe382aee383bce38081e38399e382b8e382abe38397e382bbe383ab3930e7b292);

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `mail`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'nanana', '111111', 1, 1, '2021-07-03 16:17:21', '2021-07-03 16:17:21'),
(2, 'かわせ', '111111', 1, 0, '2021-07-03 16:35:45', '2021-07-03 16:35:45'),
(3, 'keienne0513@icloud.com', '11', 0, 0, '2021-07-14 22:07:37', '2021-07-14 22:07:37'),
(4, 'keienne0513@icloud.com', '123', 1, 0, '2021-07-14 22:07:59', '2021-07-14 22:07:59'),
(5, 'mail', '123', 0, 0, '2021-07-15 12:55:03', '2021-07-15 12:55:03'),
(6, 'mail2', '123', 0, 0, '2021-07-15 12:57:17', '2021-07-15 12:57:17'),
(7, 'aaa', '123', 0, 0, '2021-07-15 14:41:19', '2021-07-15 14:41:19'),
(8, 'mail', '123', 0, 0, '2021-07-15 18:50:57', '2021-07-15 18:50:57');

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
(20, 'a', 'keienne0513@icloud.com', '青森県', '1', '健康'),
(22, 'かわせ', 'keienne0513@icloud.com', '0', '20', '健康'),
(23, 'かわせ', 'keienne0513@icloud.com', '0', '20', '健康'),
(24, 'かわせ', 'keienne0513@icloud.com', '青森県', '20', '健康'),
(25, 'とら', 'keienne0513@icloud.com', '福岡', '2', '髪の毛'),
(29, 'むぎ', 'keienne0513@icloud.com', '福岡', '12', 'かわ'),
(30, 'たまご', 'mail', '福岡', '20', 'bihaku '),
(31, 'はし', 'mail2', '福岡', '12', '健康'),
(32, 'たまご', 'aaa', '福岡', '20', '美白'),
(33, 'かわせ', 'mail', '福岡', '20', '健康');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `tsukare_table`
--
ALTER TABLE `tsukare_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_touroku`
--
ALTER TABLE `user_touroku`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `like_table`
--
ALTER TABLE `like_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルの AUTO_INCREMENT `tsukare_table`
--
ALTER TABLE `tsukare_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `user_touroku`
--
ALTER TABLE `user_touroku`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

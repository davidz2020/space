-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2018-11-15 14:11:58
-- 服务器版本： 10.1.36-MariaDB
-- PHP 版本： 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `books`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE `book` (
  `bookid` int(11) NOT NULL COMMENT '自动增长主键',
  `booktitle` varchar(100) NOT NULL COMMENT '书名',
  `author` varchar(100) NOT NULL COMMENT '作者',
  `addtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`bookid`, `booktitle`, `author`, `addtime`) VALUES
(6, '张1的书', '张1', '2018-11-12 06:02:39'),
(7, '张2的书', '张2', '2018-11-12 06:02:39'),
(8, '张三的书', '张三', '2018-11-12 06:02:39'),
(9, '张5的书', '张三', '2018-11-12 06:02:39'),
(10, '张6的书', '张三', '2018-11-12 06:02:39'),
(11, '阿萨德法师打发斯蒂芬', '阿斯蒂芬', '2018-11-13 05:43:30'),
(12, '阿斯蒂芬撒旦法', '史蒂芬孙', '2018-11-13 05:43:30'),
(16, '123', '123', '2018-11-14 01:08:16'),
(18, 'qqq', 'qqq', '2018-11-14 01:18:56'),
(19, 'TT', 'TT', '2018-11-14 01:39:23'),
(20, 'yy', 'yy', '2018-11-14 01:57:58'),
(23, '新添加的书籍', '老王', '2018-11-14 06:09:21'),
(24, '王志文', 'yy', '2018-11-15 03:18:37'),
(25, '张张一张张', '张张一张张', '2018-11-15 03:57:42'),
(26, '张张二张张', '张张二张张', '2018-11-15 03:57:53');

-- --------------------------------------------------------

--
-- 表的结构 `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 18886000),
('BR', 'Brazil', 170115000),
('CA', 'Canada', 1147000),
('CN', 'China', 1277558000),
('DE', 'Germany', 82164700),
('FR', 'France', 59225700),
('GB', 'United Kingdom', 59623400),
('IN', 'India', 1013662000),
('RU', 'Russia', 146934000),
('tw', '中国台湾', 13),
('US', 'United States', 278357000);

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1542096779),
('m130524_201442_init', 1542096786);

-- --------------------------------------------------------

--
-- 表的结构 `person`
--

CREATE TABLE `person` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `person`
--

INSERT INTO `person` (`userid`, `username`, `age`) VALUES
(1, 'tom1', 18),
(2, 'tom2', 18),
(3, 'tom3', 18),
(4, 'tom4', 18),
(5, 'tom5', 18),
(6, 'tom6', 18),
(7, 'tom7', 18),
(8, 'tom8', 18),
(9, 'tom9', 18),
(10, 'tom10', 18),
(11, 'tom11', 18),
(13, '', 0),
(14, 'wer', 234),
(15, '', 0),
(16, 'qwe', 123);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'zhaow', 'pa-iXfkRbkqowhgH4Q6JumuCuwphNbnX', '$2y$13$aN.e7o0Z501VQhaTwN.VcOquWLo3WZGvBA4EoWpcu8QCp9aFpt5EO', NULL, '111@111.com', 10, 1542097254, 1542097254);

--
-- 转储表的索引
--

--
-- 表的索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- 表的索引 `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`userid`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动增长主键', AUTO_INCREMENT=27;

--
-- 使用表AUTO_INCREMENT `person`
--
ALTER TABLE `person`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

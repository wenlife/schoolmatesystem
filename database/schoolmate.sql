-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-07-18 11:07:15
-- 服务器版本： 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmate`
--
CREATE DATABASE IF NOT EXISTS `schoolmate` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `schoolmate`;

-- --------------------------------------------------------

--
-- 表的结构 `mate`
--

DROP TABLE IF EXISTS `mate`;
CREATE TABLE `mate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `graduation` varchar(20) NOT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `teacher` varchar(20) DEFAULT NULL,
  `commend` text,
  `regtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mate`
--

INSERT INTO `mate` (`id`, `name`, `gender`, `birthday`, `graduation`, `unit`, `job`, `address`, `phone`, `email`, `teacher`, `commend`, `regtime`) VALUES
(4, '马文林', '男', '1988-10-22', '1989', '攀枝花第七高级中学', '教师', '攀枝花第七高级中学', '18782301909', 'mael146@qq.com', NULL, '杨菲     18180126536', '2019-07-13 13:51:22'),
(7, '段誉', '男', '1979-03-01', '1984', '大理国皇宫', '皇帝', '云南大理一号街道', '18888888888', 'empire@dali.com', NULL, '乔峰   1222222222\r\n虚竹   1333333333', '2019-07-14 00:29:54'),
(8, '小飞飞', '男', '1899-12-07', '1981', '桃花岛', '岛主帮手', '桃花岛', '18589525662', 'zhushou@taohuadao.com', '黄药师', '小丽  2212213', '2019-07-18 07:39:56');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1562934430);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `type` varchar(13) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'teacher',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'wenlife207', '马文林', 'qgwY92tUajedvdJJrePzzkSLFkjm_RHF', '$2y$13$2Zyf//TDG3BMCeOfuqbDU.r76Q1nyqvq8BkBGjCv7t0Qr5m0s1Wnm', NULL, 'mawl146@qq.com', 10, 'admin', 1456796101, 1505183382);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mate`
--
ALTER TABLE `mate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
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
-- 使用表AUTO_INCREMENT `mate`
--
ALTER TABLE `mate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

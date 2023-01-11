-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-07-17 10:28:56
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `eva`
--
CREATE DATABASE IF NOT EXISTS `eva` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `eva`;

-- --------------------------------------------------------

--
-- 資料表結構 `學生資料`
--

CREATE TABLE `學生資料` (
  `學號` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `姓名` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `班級` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `學生資料`
--

INSERT INTO `學生資料` (`學號`, `姓名`, `班級`) VALUES
('1', '林芳羽', '商一B'),
('2', '王曉明', '商一A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

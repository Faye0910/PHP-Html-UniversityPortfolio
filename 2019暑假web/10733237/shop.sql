-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 09 月 09 日 19:34
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `uerid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `peice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`uerid`, `number`, `qu`, `peice`, `item`) VALUES
('123', '003', '3', '99', '衣服');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sex` enum('男','女','','') COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `password`, `birthday`, `name`, `phone`, `sex`, `address`, `email`) VALUES
('123', '1111', '1999-09-10', '芳羽', '0915880910', '女', '5644', 'evao15900@gmail.com'),
('abc', '!123', '2019-01-01', '管理員', '912345678', '男', '台北市天龍區天龍路', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `orde`
--

CREATE TABLE `orde` (
  `uerid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ordernumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `peice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `orde`
--

INSERT INTO `orde` (`uerid`, `ordernumber`, `number`, `qu`, `peice`, `item`) VALUES
('123', '297', '123', '2', '99', '006'),
('123', '898', '123', '2', '99', '006'),
('123', '251', ',123,123', '1', '297', ',006,003');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `types` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stock` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shelf` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`number`, `types`, `color`, `price`, `stock`, `pic`, `shelf`) VALUES
('001', '衣服', '淺橘色', '99', '10', 'pic/001.jpg', '下架'),
('002', '衣服', '粉紅色', '199', '10', 'pic/002.jpg', ''),
('003', '衣服', '黃色', '99', '10', 'pic/003.jpg', ''),
('004', '衣服', '綠色', '99', '10', 'pic/004.jpg', ''),
('005', '衣服', '紅色', '99', '10', 'pic/005.jpg', ''),
('006', '衣服', '藍色', '99', '10', 'pic/006.jpg', ''),
('007', '衣服', '淺藍色', '99', '10', 'pic/007.jpg', ''),
('008', '衣服', '灰色', '99', '10', 'pic/008.jpg', ''),
('009', '衣服', '橘色', '99', '10', 'pic/009.jpg', ''),
('010', '衣服', '紫色', '99', '10', 'pic/010.jpg', ''),
('101', '褲子', '淺橘色', '299', '10', 'pic/101.jpg', ''),
('102', '褲子', '粉紅色', '299', '10', 'pic/102.jpg', ''),
('103', '褲子', '黃色', '299', '10', 'pic/103.jpg', ''),
('104', '褲子', '綠色', '299', '10', 'pic/104.jpg', ''),
('105', '褲子', '紅色', '299', '10', 'pic/105.jpg', ''),
('106', '褲子', '藍色', '299', '10', 'pic/106.jpg', ''),
('107', '褲子', '淺藍色', '299', '10', 'pic/107.jpg', ''),
('108', '褲子', '灰色', '299', '10', 'pic/108.jpg', ''),
('109', '褲子', '橘色', '299', '10', 'pic/109.jpg', ''),
('110', '褲子', '紫色', '299', '10', 'pic/110.jpg', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

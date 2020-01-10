-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `users`
--

-- --------------------------------------------------------

--
-- 資料表結構 `usersdb`
--

CREATE TABLE `usersdb` (
  `Account` varchar(20) DEFAULT NULL,
  `Pass` varchar(20) DEFAULT NULL,
  `Alarmclock` varchar(255) DEFAULT NULL,
  `music` varchar(8) DEFAULT NULL,
  `musicII` varchar(8) DEFAULT NULL,
  `nusicIII` varchar(8) DEFAULT NULL,
  `musicIV` varchar(8) DEFAULT NULL,
  `musicV` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `usersdb`
--

INSERT INTO `usersdb` (`Account`, `Pass`, `Alarmclock`, `music`, `musicII`, `nusicIII`, `musicIV`, `musicV`) VALUES
('abcdfg', 'abcdefg', NULL, NULL, NULL, NULL, NULL, NULL),
('zxcv123', 'zxcv123', NULL, NULL, NULL, NULL, NULL, NULL),
('asdf321', 'asdf321', NULL, NULL, NULL, NULL, NULL, NULL),
('asdf3212', 'asdf3212', NULL, NULL, NULL, NULL, NULL, NULL),
('qwer123', 'qwer123', NULL, NULL, NULL, NULL, NULL, NULL),
('qazwsx', 'qazwsx', NULL, NULL, NULL, NULL, NULL, NULL),
('qazwsxe', 'qazwsxe', NULL, NULL, NULL, NULL, NULL, NULL),
('qwerty', 'qwerty', '0', '10101111', NULL, NULL, NULL, NULL),
('wsxedc', 'wsxedc', NULL, NULL, NULL, NULL, NULL, NULL),
('poiuyt', 'poiuyt', NULL, NULL, NULL, NULL, NULL, NULL),
('mnbvcx', 'mnbvcx', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

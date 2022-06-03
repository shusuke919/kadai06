-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 6 月 03 日 00:50
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_an_db`
--

CREATE TABLE `kadai_an_db` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `naiyou` text,
  `indate` datetime NOT NULL,
  `age2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `kadai_an_db`
--

INSERT INTO `kadai_an_db` (`id`, `name`, `email`, `naiyou`, `indate`, `age2`) VALUES
(63, 'dfdfd', 'dc', 'cd', '2022-06-02 13:48:07', 60),
(64, 'cdcdc', 'cd', 'cdc', '2022-06-02 13:48:13', 50),
(65, 'dd', 'd', 'dd', '2022-06-02 13:48:42', 10),
(66, 'cd', 'cd', 'cd', '2022-06-02 13:48:48', 10),
(67, 'dc', 'cd', 'cd', '2022-06-02 13:48:53', 30),
(68, 'r', 're', 'rer', '2022-06-02 16:28:55', 10),
(69, 'er', 'er', 'rer', '2022-06-02 16:31:44', 10),
(70, 'れ', 'れ', 'れ', '2022-06-02 16:32:59', 10),
(71, 're', 're', 're', '2022-06-02 16:40:44', 50),
(72, 'れ', 'fe', 'fe', '2022-06-02 16:59:55', 30),
(73, 're', 're', 'er', '2022-06-02 18:09:50', 60),
(74, 'r3', '3r', 'r3', '2022-06-02 18:10:10', 50),
(75, '4et', 't4', 't4', '2022-06-02 18:10:53', 30),
(76, 't4', '4t4', '4t', '2022-06-02 18:11:01', 30),
(77, 't4', 't4t', 'ttt4', '2022-06-02 18:11:11', 10),
(78, 'fd', 'fd', 'ffd', '2022-06-02 20:02:02', 10),
(79, 'fdf', 'fdf', 'fdd', '2022-06-02 20:09:09', 10),
(80, 'erqe', 'ere', 'ere', '2022-06-02 20:14:35', 60),
(81, 'rrer', 'erre', 're', '2022-06-02 20:17:56', 70);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai_an_db`
--
ALTER TABLE `kadai_an_db`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai_an_db`
--
ALTER TABLE `kadai_an_db`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

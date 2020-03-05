-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2020-03-04 14:13:41
-- 服务器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `template_album`
--

-- --------------------------------------------------------

--
-- 表的结构 `bgnow`
--

DROP TABLE IF EXISTS `bgnow`;
CREATE TABLE IF NOT EXISTS `bgnow` (
  `r` varchar(4) NOT NULL,
  `g` varchar(4) NOT NULL,
  `b` varchar(4) NOT NULL,
  `a` varchar(9) NOT NULL,
  `hex` varchar(10) NOT NULL,
  PRIMARY KEY (`a`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `bgnow`
--

INSERT INTO `bgnow` (`r`, `g`, `b`, `a`, `hex`) VALUES
('245', '246', '247', '1', 'f5f6f7');

-- --------------------------------------------------------

--
-- 表的结构 `black`
--

DROP TABLE IF EXISTS `black`;
CREATE TABLE IF NOT EXISTS `black` (
  `path` varchar(200) NOT NULL,
  `ptime` varchar(100) NOT NULL,
  `story` varchar(500) NOT NULL,
  `user` varchar(300) NOT NULL,
  PRIMARY KEY (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `black`
--

INSERT INTO `black` (`path`, `ptime`, `story`, `user`) VALUES
('picb/l/ac/k/202003041349128713.jpg', '2020-03-04', '风景照', 'album');

-- --------------------------------------------------------

--
-- 表的结构 `kua`
--

DROP TABLE IF EXISTS `kua`;
CREATE TABLE IF NOT EXISTS `kua` (
  `item` varchar(200) NOT NULL,
  PRIMARY KEY (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `kua`
--

INSERT INTO `kua` (`item`) VALUES
('相册模板');

-- --------------------------------------------------------

--
-- 表的结构 `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `path` varchar(200) NOT NULL,
  `ptime` varchar(100) NOT NULL,
  `story` varchar(500) NOT NULL,
  `user` varchar(300) NOT NULL,
  PRIMARY KEY (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `picture`
--

INSERT INTO `picture` (`path`, `ptime`, `story`, `user`) VALUES
('pic/202003041348535863.jpg', '2020-03-04', '你的名字', 'album');

-- --------------------------------------------------------

--
-- 表的结构 `praise`
--

DROP TABLE IF EXISTS `praise`;
CREATE TABLE IF NOT EXISTS `praise` (
  `content` varchar(500) NOT NULL,
  `times` varchar(100) NOT NULL,
  `isright` int(1) NOT NULL,
  PRIMARY KEY (`times`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `praise`
--

INSERT INTO `praise` (`content`, `times`, `isright`) VALUES
('相册模板', '2020年03月04日 21:49:25', 1),
('相册模板', '2020年03月04日 21:16:37', 1),
('相册模板', '2020年03月04日 21:16:20', 1),
('相册模板', '2020年03月04日 21:16:11', 1),
('相册模板', '2020年03月04日 21:16:06', 1),
('相册模板', '2020年03月04日 21:25:59', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('album', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

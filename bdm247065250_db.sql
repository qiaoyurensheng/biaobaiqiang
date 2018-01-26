-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 �?08 �?02 �?15:59
-- 服务器版�? 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据�? `-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 �?08 �?02 �?15:59
-- 服务器版�? 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据�? `bdm247065250_db`
--
CREATE DATABASE IF NOT EXISTS `bdm247065250_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdm247065250_db`;

-- --------------------------------------------------------

--
-- 表的结构 `ty_message`
--

CREATE TABLE IF NOT EXISTS `ty_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `realname` varchar(25) CHARACTER SET gb2312 NOT NULL,
  `towho` text CHARACTER SET gb2312 NOT NULL,
  `avatar` text COLLATE utf8_bin,
  `ip` text COLLATE utf8_bin,
  `title` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `lastdate` datetime DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- 转存表中的数�?`ty_message`
--

INSERT INTO `ty_message` (`id`, `realname`, `towho`, `avatar`, `ip`, `title`, `content`, `lastdate`, `email`) VALUES
(3, 'aaa', 'aaa', NULL, '::1', NULL, 'ddddddfdf', '2015-05-01 16:30:20', 'aaaa'),
(4, 'aaa', 'sdd', NULL, '::1', NULL, 'dffddf', '2015-05-01 16:32:04', 'ssaaa');

-- --------------------------------------------------------

--
-- 表的结构 `ty_user`
--

CREATE TABLE IF NOT EXISTS `ty_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `pending` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数�?`ty_user`
--

INSERT INTO `ty_user` (`id`, `username`, `password`, `pending`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

`
--
CREATE DATABASE IF NOT EXISTS `bdm247065250_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdm247065250_db`;

-- --------------------------------------------------------

--
-- 表的结构 `ty_message`
--

CREATE TABLE IF NOT EXISTS `ty_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `realname` varchar(25) CHARACTER SET gb2312 NOT NULL,
  `towho` text CHARACTER SET gb2312 NOT NULL,
  `avatar` text COLLATE utf8_bin,
  `ip` text COLLATE utf8_bin,
  `title` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `lastdate` datetime DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- 转存表中的数�?`ty_message`
--

INSERT INTO `ty_message` (`id`, `realname`, `towho`, `avatar`, `ip`, `title`, `content`, `lastdate`, `email`) VALUES
(3, 'aaa', 'aaa', NULL, '::1', NULL, 'ddddddfdf', '2015-05-01 16:30:20', 'aaaa'),
(4, 'aaa', 'sdd', NULL, '::1', NULL, 'dffddf', '2015-05-01 16:32:04', 'ssaaa');

-- --------------------------------------------------------

--
-- 表的结构 `ty_user`
--

CREATE TABLE IF NOT EXISTS `ty_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `pending` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数�?`ty_user`
--

INSERT INTO `ty_user` (`id`, `username`, `password`, `pending`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


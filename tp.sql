-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014-05-02 07:37:51
-- 服务器版本: 5.6.14
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tp`
--

-- --------------------------------------------------------

--
-- 表的结构 `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sex` varchar(10) NOT NULL DEFAULT '男',
  `age` int(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `martial_status` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `patient`
--

INSERT INTO `patient` (`id`, `sex`, `age`, `avatar`, `birth_place`, `martial_status`, `profession`, `phonenumber`, `name`) VALUES
(1, '', 0, '', '', '已婚', '', 1234567880, 'neychang'),
(3, '', 16, '', '', '已婚', '程序员', 0, 'test');

-- --------------------------------------------------------

--
-- 表的结构 `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) unsigned NOT NULL,
  `complained` text NOT NULL,
  `diagnosis` text NOT NULL,
  `result` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ended_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `record`
--

INSERT INTO `record` (`id`, `patient_id`, `complained`, `diagnosis`, `result`, `created_at`, `ended_at`) VALUES
(3, 1, 'test-3', 'test-3', 'good', '2014-05-02 04:39:08', '0000-00-00 00:00:00'),
(4, 1, 'tets', 'test', 'test', '2014-05-02 04:42:22', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

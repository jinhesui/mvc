-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.7.19-0ubuntu0.16.04.1 - (Ubuntu)
-- 服务器操作系统:                      Linux
-- HeidiSQL 版本:                  9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 butterfly 的数据库结构
DROP DATABASE IF EXISTS `butterfly`;
CREATE DATABASE IF NOT EXISTS `butterfly` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `butterfly`;

-- 导出  表 butterfly.news 结构
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `nid` smallint(6) NOT NULL AUTO_INCREMENT,
  `cid` tinyint(1) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `source` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `keywords` varchar(120) COLLATE utf8_unicode_ci DEFAULT '0',
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `orderby` tinyint(2) NOT NULL DEFAULT '50',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `hits` smallint(6) NOT NULL DEFAULT '0',
  `addate` int(15) DEFAULT '0',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 数据导出被取消选择。
-- 导出  表 butterfly.student 结构
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sex` enum('男','女') COLLATE utf8_unicode_ci NOT NULL DEFAULT '男',
  `age` tinyint(4) NOT NULL,
  `edu` enum('初中','高中','大专','本科','研究生') COLLATE utf8_unicode_ci NOT NULL DEFAULT '本科',
  `salary` float(8,2) unsigned NOT NULL,
  `bonus` float(6,2) unsigned NOT NULL,
  `city` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 数据导出被取消选择。
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

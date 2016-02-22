-- 主机: localhost
-- 生成日期: 2016-02-22 13:51:20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- 数据库 bill

CREATE TABLE IF NOT EXISTS `bill_records` (
	`bill_id` tinyint(5) unsigned NOT NULL AUTO_INCREMENT,
	`bill_time` varchar(20) NOT NULL,
	`bill_money` decimal(6,2) NOT NULL,
	`bill_item` text NOT NULL,
	`bill_place` text NOT NULL,
	`bill_other` text NOT NULL,
	PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
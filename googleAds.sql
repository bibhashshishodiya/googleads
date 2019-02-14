-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `search_terms`;
CREATE TABLE `search_terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `search_volume` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `search_terms` (`id`, `name`, `search_volume`) VALUES
(1,	'baby products',	NULL),
(2,	'Asana',	NULL),
(3,	'beginner drones',	NULL);

-- 2019-02-14 13:55:15

-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1,	'小燕子',	'xyz@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2,	'紫薇',	'zw@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3,	'五阿哥',	'wag@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4,	'尔康',	'ek@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5,	'金锁',	'js@php.cn',	'7c4a8d09ca3762af61e59520943dc26494f8941b');

-- 2020-07-20 11:23:27
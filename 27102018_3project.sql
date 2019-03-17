-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 03 2019 г., 19:02
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `27102018_3project`
--
CREATE DATABASE IF NOT EXISTS `27102018_3project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `27102018_3project`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `sku` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sale` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `description`, `price`, `photo`, `active`, `sale`) VALUES
(1, 'Куртка синяя', 171531, 'Куртка синяя с капюшоном. Осенняя, на молнии', 4500, '/images/catalog/1.jpg', 0, 0),
(2, 'Куртка зеленая', 251815, 'Куртка зеленая, с капюшоном, непромокаемая. ', 6000, '/images/catalog/2.jpg', 1, 0),
(3, 'Куртка с накладными карманами', 385708, 'Куртка хлопковая, с нашивкой', 4000, '/images/catalog/3.png', 1, 0),
(4, 'Куртка кожаная', 418171, 'Куртка кожаная, черная', 7300, '/images/catalog/4.jpg', 1, 0),
(5, 'Кеды серые. Адидас', 771888, 'Кеды серые, на резиновой подошве', 2300, '/images/catalog/7.jpg', 1, 0.15),
(6, 'Кеды черные, высокие', 811227, 'Кеды черные, со шнурками, высокие', 4600, '/images/catalog/8.jpg', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

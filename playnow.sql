-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 30 2015 г., 17:49
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `playnow`
--

-- --------------------------------------------------------

--
-- Структура таблицы `published_videos`
--

CREATE TABLE IF NOT EXISTS `published_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `published_videos`
--

INSERT INTO `published_videos` (`id`, `username`, `videolink`, `comment`) VALUES
(3, 'Tarrr', 'https://www.youtube.com/embed/o_l4Ab5FRwM', 'zozoPApa'),
(4, 'Taras', 'https://www.youtube.com/embed/_zssP6w0VWQ', 'some come'),
(5, 'Taras', 'https://www.youtube.com/embed/XYr5IC-mGi4', 'The honestly'),
(6, 'Taras', 'https://www.youtube.com/embed/MKk1u5RMTn4', 'Go!'),
(7, 'Taras', 'https://www.youtube.com/embed/9BXNKyoW_Ow', 'Fallen-leeeeeeeaves!');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'Taras', 'admin'),
(5, 'Liam', 'qwerty'),
(6, 'Max', 'Slam'),
(7, 'Jeff', 'popopo');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `moderation` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `postid`, `username`, `videolink`, `comment`, `moderation`) VALUES
(5, 0, 'Taras', 'https://www.youtube.com/embed/XYr5IC-mGi4', 'Music, yeeeeeeeeah!', 'yes'),
(9, 0, 'Taras', 'https://www.youtube.com/embed/Pn-6eOxnEMI', 'So...', 'no'),
(12, 1, 'Taras', 'https://www.youtube.com/embed/s5SsdrPbHHk', 'no', 'no'),
(13, 0, 'Taras', 'https://www.youtube.com/embed/MKk1u5RMTn4', 'Go!', 'yes'),
(14, 0, 'Taras', 'https://www.youtube.com/embed/_zssP6w0VWQ', 'some come', 'yes'),
(15, 0, 'Taras', 'https://www.youtube.com/embed/9BXNKyoW_Ow', 'Fallen-leeeeeeeaves!', 'yes'),
(17, 0, 'MuseMan', 'https://www.youtube.com/embed/w8KQmps-Sog', 'Muuuuuuuuuse!', 'no'),
(18, 0, 'Zeddus', 'https://www.youtube.com/embed/Um8EEzl42PQ', 'Opacity)', 'no'),
(20, 0, 'Mett', 'https://www.youtube.com/embed/2k4Xgm9dDMg', 'Wow! take it!', 'no'),
(21, 0, 'Tarrr', 'https://www.youtube.com/embed/o_l4Ab5FRwM', 'zozoPApa', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

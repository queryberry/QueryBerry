-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 30 2019 г., 01:15
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `queryberry`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `rank`) VALUES
(1, 'mark', '890958d8ddc0e3e58db3849aa3d74f40', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `page_text`
--

CREATE TABLE `page_text` (
  `id` int(11) NOT NULL,
  `header` varchar(256) NOT NULL,
  `text_header` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page_text`
--

INSERT INTO `page_text` (`id`, `header`, `text_header`, `text`, `date`) VALUES
(4, 'Разработка сайта официально закончена! Выпущенна рабочая версия 1.0, но это только начало', 'Запуск сайта и его поддержка', 'Разработка сайта официально закончена! Выпущенна рабочая версия 1.0, но это только начало. Туса суп суп супсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсупсуп&lt;br&gt;', '30.09.19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page_text`
--
ALTER TABLE `page_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `page_text`
--
ALTER TABLE `page_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

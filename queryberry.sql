-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 27 2019 г., 15:54
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

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
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page_text`
--

INSERT INTO `page_text` (`id`, `header`, `text_header`, `text`) VALUES
(2, 'test prewie test for my boys', 'test', '&lt;p style=&quot;margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;Текст&lt;/span&gt; (от &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%9B%D0%B0%D1%82%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA&quot; title=&quot;Латинский язык&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;лат.&lt;/a&gt; &lt;span lang=&quot;la&quot; style=&quot;font-style: italic;&quot;&gt;textus&lt;/span&gt; — ткань; сплетение, сочетание) — зафиксированная на каком-либо материальном носителе человеческая мысль; в общем плане связная и полная последовательность символов.&lt;/p&gt;&lt;p style=&quot;margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;&quot;&gt;Существуют две основные трактовки понятия «текст»: &lt;i&gt;имманентная&lt;/i&gt; (расширенная, философски нагруженная) и &lt;i&gt;репрезентативная&lt;/i&gt;(более частная). &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%98%D0%BC%D0%BC%D0%B0%D0%BD%D0%B5%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D1%8C&quot; title=&quot;Имманентность&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Имманентный&lt;/a&gt; подход подразумевает отношение к тексту как к автономной реальности, нацеленность на выявление его внутренней структуры. &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%A0%D0%B5%D0%BF%D1%80%D0%B5%D0%B7%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F&quot; title=&quot;Репрезентация&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Репрезентативный&lt;/a&gt; — рассмотрение текста как особой формы представления знаний о внешней тексту действительности.&lt;/p&gt;&lt;p style=&quot;margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;&quot;&gt;В &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D0%BD%D0%B3%D0%B2%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0&quot; title=&quot;Лингвистика&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;лингвистике&lt;/a&gt; термин «текст» используется в широком значении, включая и образцы &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%A3%D1%81%D1%82%D0%BD%D0%B0%D1%8F_%D1%80%D0%B5%D1%87%D1%8C&quot; title=&quot;Устная речь&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;устной речи&lt;/a&gt;. &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%92%D0%BE%D1%81%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B5&quot; title=&quot;Восприятие&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Восприятие&lt;/a&gt; текста изучается в рамках &lt;a href=&quot;https://ru.wikipedia.org/w/index.php?title=%D0%9B%D0%B8%D0%BD%D0%B3%D0%B2%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0_%D1%82%D0%B5%D0%BA%D1%81%D1%82%D0%B0&amp;action=edit&amp;redlink=1&quot; class=&quot;new&quot; title=&quot;Лингвистика текста (страница отсутствует)&quot; style=&quot;color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;лингвистики текста&lt;/a&gt; и &lt;a href=&quot;https://ru.wikipedia.org/wiki/%D0%9F%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%B8%D0%BD%D0%B3%D0%B2%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0&quot; title=&quot;Психолингвистика&quot; style=&quot;color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;психолингвистики&lt;/a&gt;. Так, например, И. Р. Гальперин определяет текст следующим образом: «Это письменное сообщение, объективированное в виде письменного документа, состоящее из ряда высказываний, объединённых разными типами лексической, грамматической и логической связи, имеющее определённый моральный характер, прагматическую установку и соответственно литературно обработанное»&lt;/p&gt;'),
(3, 'Введение в ооп', 'php', '&lt;p class=&quot;para&quot; style=&quot;margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &amp;quot;Fira Sans&amp;quot;, &amp;quot;Source Sans Pro&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(242, 242, 242);&quot;&gt;Начиная с версии PHP 5, PHP включает полноценную объектную модель. Некоторые из ее особенностей:&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.visibility.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;видимость&lt;/a&gt;,&amp;nbsp;&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.abstract.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;абстрактные&lt;/a&gt;&amp;nbsp;и&amp;nbsp;&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.final.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;ненаследуемые&lt;/a&gt;&amp;nbsp;(final) классы и методы, а также&amp;nbsp;&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.magic.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;магические методы&lt;/a&gt;,&amp;nbsp;&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.interfaces.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;интерфейсы&lt;/a&gt;,&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.cloning.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;клонирование&lt;/a&gt;&amp;nbsp;и&amp;nbsp;&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.typehinting.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;контроль типов (typehinting)&lt;/a&gt;.&lt;/p&gt;&lt;p class=&quot;para&quot; style=&quot;margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; color: rgb(51, 51, 51); font-family: &amp;quot;Fira Sans&amp;quot;, &amp;quot;Source Sans Pro&amp;quot;, Helvetica, Arial, sans-serif; background-color: rgb(242, 242, 242);&quot;&gt;PHP работает с объектами так же, как с ссылками или дескрипторами, это означает что каждая переменная содержит ссылку на объект, а не его копию. Более подробную информацию см. в разделе&amp;nbsp;&lt;a href=&quot;https://www.php.net/manual/ru/language.oop5.references.php&quot; class=&quot;link&quot; style=&quot;border-bottom: 1px solid; color: rgb(51, 102, 153);&quot;&gt;Объекты и ссылки&lt;/a&gt;.&lt;/p&gt;');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

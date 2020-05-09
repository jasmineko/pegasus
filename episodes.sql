-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 08 2020 г., 22:05
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pegasus`
--

-- --------------------------------------------------------

--
-- Структура таблицы `episodes`
--

CREATE TABLE `episodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `season` int(11) NOT NULL DEFAULT 1,
  `episode_no` int(11) NOT NULL DEFAULT 1,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/default.jpg',
  `release_date` date NOT NULL DEFAULT '2020-04-27',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  `views` int(11) NOT NULL DEFAULT 0,
  `commentaries` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `episodes`
--

INSERT INTO `episodes` (`id`, `title`, `season`, `episode_no`, `name`, `thumbnail`, `release_date`, `description`, `views`, `commentaries`) VALUES
(15, 'better_call_saul', 1, 1, 'S1E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(16, 'better_call_saul', 1, 2, 'S1E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(17, 'better_call_saul', 2, 1, 'S2E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(18, 'better_call_saul', 2, 2, 'S2E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(19, 'better_call_saul', 3, 1, 'S3E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(20, 'better_call_saul', 3, 2, 'S3E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(21, 'itaewon_class', 1, 1, 'S1E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(22, 'itaewon_class', 1, 2, 'S1E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(23, 'itaewon_class', 2, 1, 'S2E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(24, 'itaewon_class', 2, 2, 'S2E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(25, 'itaewon_class', 3, 1, 'S3E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(26, 'itaewon_class', 3, 2, 'S3E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(27, 'the_amazing_world_of_gumball', 1, 1, 'S1E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(28, 'the_amazing_world_of_gumball', 1, 2, 'S1E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(29, 'the_amazing_world_of_gumball', 2, 1, 'S2E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(30, 'the_amazing_world_of_gumball', 2, 2, 'S2E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(31, 'the_amazing_world_of_gumball', 3, 1, 'S3E1', 'img/project-3.jpg', '2020-04-27', 'None', 0, ''),
(32, 'the_amazing_world_of_gumball', 3, 2, 'S3E2', 'img/project-3.jpg', '2020-04-27', 'None', 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_title_foreign` (`title`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_title_foreign` FOREIGN KEY (`title`) REFERENCES `titles` (`page_id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

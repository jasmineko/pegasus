-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 08 2020 г., 20:00
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
-- Структура таблицы `mirrors`
--

CREATE TABLE `mirrors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mirror` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mirrors`
--

INSERT INTO `mirrors` (`id`, `name`, `mirror`) VALUES
(15, 'S1E1', 'videos/better_call_saul/1/1.mp4'),
(16, 'S1E2', 'videos/better_call_saul/1/2.mp4'),
(17, 'S2E1', 'videos/better_call_saul/2/1.mp4'),
(18, 'S2E2', 'videos/better_call_saul/2/2.mp4'),
(19, 'S3E1', 'videos/better_call_saul/3/1.mp4'),
(20, 'S3E2', 'videos/better_call_saul/3/2.mp4'),
(21, 'S1E1', 'videos/itaewon_class/1/1.mp4'),
(22, 'S1E2', 'videos/itaewon_class/1/2.mp4'),
(23, 'S2E1', 'videos/itaewon_class/2/1.mp4'),
(24, 'S2E2', 'videos/itaewon_class/2/2.mp4'),
(25, 'S3E1', 'videos/itaewon_class/3/1.mp4'),
(26, 'S3E2', 'videos/itaewon_class/3/2.mp4'),
(27, 'S1E1', 'videos/the_amazing_world_of_gumball/1/1.mp4'),
(28, 'S1E2', 'videos/the_amazing_world_of_gumball/1/2.mp4'),
(29, 'S2E1', 'videos/the_amazing_world_of_gumball/2/1.mp4'),
(30, 'S2E2', 'videos/the_amazing_world_of_gumball/2/2.mp4'),
(31, 'S3E1', 'videos/the_amazing_world_of_gumball/3/1.mp4'),
(32, 'S3E2', 'videos/the_amazing_world_of_gumball/3/2.mp4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mirrors`
--
ALTER TABLE `mirrors`
  ADD KEY `mirrors_id_foreign` (`id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `mirrors`
--
ALTER TABLE `mirrors`
  ADD CONSTRAINT `mirrors_id_foreign` FOREIGN KEY (`id`) REFERENCES `episodes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

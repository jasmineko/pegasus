-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 24 2020 г., 23:28
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
-- Структура таблицы `titles`
--

CREATE TABLE `titles` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('series','dorama','cartoon') COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` set('comedy','action','horror','sci-fi','supernatural','adventure','romance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `status` enum('airing','finished') COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `titles`
--

INSERT INTO `titles` (`page_id`, `name`, `thumbnail`, `category`, `genre`, `release_date`, `status`, `country`, `description`, `rating`) VALUES
('game_of_thrones', 'Game of Thrones', 'img/series/game_of_thrones.jpg', 'series', 'adventure', '2011-04-17', 'finished', 'US, UK', 'The time of prosperity is coming to an end, and summer, and almost a decade, is dying away. This year, the cow decides to seek support from the youth of Eddard Stark. In a world where everything - from the king to the mercenary - from power, from intrigue and willingness to stick a knife in the back, there is a place for nobility, compassion and love. Meanwhile, no one notices the awakening of darkness from a legend far in the North.', 8.9),
('the_walking_dead', 'The Walking Dead', 'img/series/the_walking_dead.jpg', 'series', 'horror', '2010-10-31', 'finished', 'US', 'Sheriff Rick Grimes wakes up after an accident alone in the hospital and realizes that the world has changed: there are no living people in the city, everyone has turned into a zombie. Then he decides to go in search of his family. Rick accidentally encounters a group of people, among whom his wife and son settled. But one cannot dream of a normal life, the heroes are forced not just to live, but constantly fight for survival in a world teeming with dangerous zombies.', 7.6),
('fear_the_walking_dead', 'Fear The Walking Dead', 'img/series/fear_the_walking_dead.jpg', 'series', 'horror', '2015-08-23', 'finished', 'US', 'In parallel with the invasion of zombies, Los Angeles has its own life, in which there is the same eternal problem of the interaction of fathers and children. So, the divorced school teacher Sean is trying to improve his life and the life of his new girlfriend Nancy, who has two children with adaptation difficulties in the modern world.', 7.8),
('lost', 'Lost', 'img/series/lost.jpg', 'series', 'adventure', '2005-07-10', 'finished', 'US', '48 passengers who survived the terrible plane crash end up on a Pacific island. After a few days, they realize that the plane is likely to be considered dead and there is no point in waiting for rescue. Soon, passengers discover that this is not just an island, but a strange, mysterious place with mystical creatures and anomalous phenomena.', 8.2),
('the_resident', 'The Resident', 'img/series/the_resident.jpg', 'series', 'adventure', '2017-01-01', 'finished', 'US', 'The series tells about a young doctor with idealistic outlook on life, who begins to work under the supervision of a brilliant and more experienced doctor. Over time, the protagonist understands that not everything is so simple, and in his work there are a hundred nuances that are impossible to close your eyes.', 7.6),
('house_of_cards', 'House of Cards', 'img/series/house_of_cards.jpg', 'series', 'adventure', '2013-02-05', 'finished', 'US', 'Congressman Frank Underwood intends to become Secretary of State under the new US President. He takes an appropriate promise from candidate Garrett Walker, in exchange for help in the election race. But the president-elect does not fulfill his promise. Underwood is angry and about to take revenge.', 8.1),
('13_reasons_why', '13 Reasons Why', 'img/series/13_reasons_why.jpg', 'series', 'supernatural', '2017-03-31', 'finished', 'US', 'A young guy, Clay Jensen, once finds a box with his name on the doorstep of his house. Inside are audio tapes recorded by Hannah Baker. He was in love with her at school until she once committed suicide. In her notes, the girl indicated 13 reasons that pushed her to this. And Clay is the main one.', 7.9),
('supernatural', 'Supernatural', 'img/series/supernatural.jpg', 'series', 'supernatural', '2005-09-13', 'finished', 'US', 'Two brothers Sam and Dean in early childhood saw with their own eyes the death of their mother. But this was not a murder at the hands of an ordinary criminal, but a real demon. Then father John devoted his whole life to hunting for supernatural powers. When the brothers had already grown up, their father once went hunting and disappeared. Sam and Dean set off in search of truth, and the terrible secrets of the supernatural world begin to be revealed to them ...', 8.1),
('sherlock', 'Sherlock', 'img/series/sherlock.jpg', 'series', 'adventure', '2010-09-18', 'finished', 'UK', 'Sherlock Holmes lives in the XXI century, uses the latest gadgets and investigates convoluted crimes. John Watson, a military doctor, helps him solve cases.', 8.8),
('doctor_who', 'Doctor Who', 'img/series/doctor_who.jpg', 'series', 'comedy', '2005-03-26', 'finished', 'UK', 'The alien who calls himself the Doctor is the last representative of the Time Lords. He travels in time and space and fights evil with all his strength and ways. In this he is helped by ordinary people, whom he sometimes takes as his partner.', 2.4),
('once_upon_a_time', 'Once Upon a Time', 'img/series/once_upon_a_time.jpg', 'series', 'adventure', '2011-10-23', 'finished', 'US', 'Emma grew up without parents and herself abandoned her child many years ago. But her son Henry escapes from his foster parents to find his mother. He has some important news: Emma is the daughter of Snow White and the Beautiful Prince! And her mission is to save the fairy world from the curse of the Evil Queen. Emma is not going to believe in the words of a 10-year-old boy and run to save the fairy-tale camp, she intends to take the fugitive to her foster parents in a small town in Maine. However, reaching the town, she begins to notice unusual things, and the boy’s words begin to be confirmed by mysterious events.', 8.2),
('big_bang_theory', 'The Big Bang Theory', 'img/series/big_bang_theory.jpg', 'series', 'comedy', '2007-09-24', 'finished', 'US', 'The story is about brilliant scientists - friends, flatmates and colleagues at a technological institute who are brilliant in everything related to science, but completely unable to communicate with people. Therefore, in their free time, they, together with two other friends who are friends, watch Star Trek and read comics. But their quiet life comes to an end when a novice actress, the beautiful Penny, moves to the next apartment.', 8.4),
('better_call_saul', 'Better Call Saul', 'img/series/better_call_saul.jpg', 'series', 'action,romance,drama', '2020-04-14', 'airing', 'US', 'Ex-con artist Jimmy McGill turns into a small-time attorney and goes through a series of trials and tragedies, as he transforms into his alter ego Saul Goodman, a morally challenged criminal lawyer.', 10.0);
--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

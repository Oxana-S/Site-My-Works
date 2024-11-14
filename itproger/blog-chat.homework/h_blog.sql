-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+jammy2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 05 2023 г., 03:41
-- Версия сервера: 8.0.32-0ubuntu0.22.04.2
-- Версия PHP: 8.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anons` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `full_text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `author` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `anons`, `full_text`, `author`, `date`) VALUES
(2, 'Подчеркивание, зачеркивание текста в CSS: свойство text-decoration', 'Применяя свойство text-decoration в CSS, следует соблюдать чувство меры и некоторые рекомендации. Перед использованием значения underline не для гиперссылки убедитесь, что текст на веб-странице не будет на нее похож.', 'Применяя свойство text-decoration в CSS, следует соблюдать чувство меры и некоторые рекомендации.\r\n<br>\r\nПеред использованием значения underline не для гиперссылки убедитесь, что текст на веб-странице не будет на нее похож. Многие пользователи воспринимают подчеркнутый текст как ссылку.\r\n<br>\r\nЧтобы более гибко настроить стиль и иметь возможность изменять толщину, вид и цвет полосы подчеркивания, можно использовать свойство border (подробнее о нем мы будем говорить чуть позже). <br>\r\nЕсли вы желаете убрать стандартное подчеркивание гиперссылки в браузере, воспользуйтесь значением none.\r\n<br>\r\nЗначение blink (мигание текста) хоть и внесено в таблицу, на данный момент не поддерживается браузерами.\r\n', 'test', '1683064876'),
(3, 'Styling textarea', 'text-decoration-style&#10;Свойство text-decoration-style используется для определения типа оформления текста, а новые инструкции содержат два значения: double и wavy:&#10;&#10;.wavy {&#10;  text-decoration: underline;&#10;&#10;}', 'text-decoration-style&#10;Свойство text-decoration-style используется для определения типа оформления текста, а новые инструкции содержат два значения: double и wavy:&#10;&#10;.wavy {&#10;  text-decoration: underline;&#10;  -webkit-text-decoration-color: salmon;&#10;  text-decoration-color: salmon;&#10;  -webkit-text-decoration-style: wavy;&#10;  text-decoration-style: wavy;&#10;}', 'test', '1683069752');

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int UNSIGNED NOT NULL,
  `user_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `chat_mess` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `user_name`, `chat_mess`) VALUES
(146, 'guest', 'привет'),
(147, 'guest', 'лоно'),
(148, 'papa', 'давай');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mess` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `article_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `mess`, `article_id`) VALUES
(3, 'test', 'Просто тестовый комментарий к этому посту', 2),
(4, 'test', 'Ещё один коммант', 2),
(5, 'test', 'ПРоверка', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES
(46, 'daughter', 'daughter@gmail.com', 'daughter', '08dbe6c23ca05da6c7b2691a8c6741a6'),
(40, 'test', 'test@gmail.com', 'test', '08dbe6c23ca05da6c7b2691a8c6741a6'),
(41, 'papa', 'papa@gmail.com', 'papa', '08dbe6c23ca05da6c7b2691a8c6741a6'),
(43, 'mama', 'mama@gmail.com', 'mama', '08dbe6c23ca05da6c7b2691a8c6741a6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

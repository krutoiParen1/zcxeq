-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 26 2023 г., 23:00
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tele3_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access_keys`
--

CREATE TABLE `access_keys` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `tariff_id` int DEFAULT NULL,
  `access_key` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `access_keys`
--

INSERT INTO `access_keys` (`id`, `user_id`, `tariff_id`, `access_key`) VALUES
(99, 90, 50, '652cd75dcc6ae'),
(100, 91, 50, '652cd78b9a242'),
(101, 92, 51, '652cd7a626d97'),
(102, 93, 48, '652df84d7a486'),
(104, 94, 49, '6539d244c7198'),
(105, 95, 49, '6539f84fe9afb'),
(106, 96, 48, '653cad74985aa'),
(107, 97, 49, '65419f059185a'),
(108, 98, 51, '654d8d5d100c8'),
(110, 99, 51, '654d99de58fdf'),
(111, 100, 49, '6551853a838bb'),
(112, 101, 49, '65633e5300587'),
(113, 102, 49, '656340b5e32c3');

-- --------------------------------------------------------

--
-- Структура таблицы `site_users`
--

CREATE TABLE `site_users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `site_users`
--

INSERT INTO `site_users` (`id`, `first_name`, `last_name`, `email`, `login`, `password`) VALUES
(9, 'AMxim', 'VASsa', 'qweqwe@mail.ru', '1', '$2y$10$qHNO9b5GHYwRvpnH.e9sROmUhrZeXoWraWFL.81AkLBZXVGSWvAta'),
(10, 'qweeqw', 'qweeqw', 'qwe@mail.com', '2', '$2y$10$UNJHzsAa.xush7CDnuLG3O1eUh/iusXX9FI4qUrD3UYiM1UknkMM.'),
(11, 'йцу', 'йцу', 'asdf@mail.ru', 'qwe', '$2y$10$NtgGx6DwaQvn6pOXfC3xquIM.R2GN4tRV/.QD62z3zvOuRxlKynPW');

-- --------------------------------------------------------

--
-- Структура таблицы `tariffs`
--

CREATE TABLE `tariffs` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tariffs`
--

INSERT INTO `tariffs` (`id`, `name`, `description`, `price`) VALUES
(47, '\"Эконом\"', 'Скорость интернета: до 25 Мбит/с\r\nОбъем трафика: 50 ГБ в месяц\r\nКоличество каналов: 50+\r\nПодключение домашнего телефона: опция', 200.00),
(48, '\"Стандарт\"', 'Скорость интернета: до 100 Мбит/с\r\nОбъем трафика: 100 ГБ в месяц\r\nКоличество каналов: 100+\r\nПодключение домашнего телефона: включено', 300.00),
(49, '\"Семейный\"', 'Скорость интернета: до 250 Мбит/с\r\nОбъем трафика: 150 ГБ в месяц\r\nКоличество каналов: 150+\r\nПодключение домашнего телефона: включено\r\nВозможность добавления дополнительных линий для семьи', 500.00),
(50, '\"Премиум\"', 'Скорость интернета: до 500 Мбит/с\r\nОбъем трафика: безлимитный\r\nКоличество каналов: 200+\r\nПодключение домашнего телефона: включено\r\nВозможность подключения видеосервисов по сниженной цене', 600.00),
(51, '!NEW! Для Геймеров !NEW!', 'Скорость интернета: до 1 Гбит/с\r\nОбъем трафика: безлимитный\r\nКоличество каналов: 100+\r\nПодключение домашнего телефона: опция\r\nПриоритетный доступ к онлайн-играм', 1000.00),
(54, '123', 'asdfasdf', 88.00);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
(90, 'qwe', 'qwe', '123', 'qwe@mail.ru'),
(91, 'qwe', 'asd', '412421', 'asd@mail.ru'),
(92, 'asfd', 'afs', '1342', 'zxc@mail.ru'),
(93, 'нгег', 'дэжд', '798789', 'd@mail.ru'),
(94, 'tgregt', 'ki', '8', 'i@gmail.com'),
(95, 'lkasfndascfd', 'fasdadsfv', '42', 'qwrasf@mail.ru'),
(96, 'йцуйцк', 'йцуйцк', '123', 'asfjkjfksal@mail.ru'),
(97, '77686t', 'jhgjkh', '67687', 'jhjljl@mail.ru'),
(98, 'Анжелика', 'Афанасьева', '89246554444', 'fghqwertykjk@gmail.com'),
(99, 'afskljjlafks', 'ioqfjeoiqwefjhio', '123452436576', 'flashka@gmail.com'),
(100, 'asfasfd', 'afsdafds', '1231234', 'qsfdasfd@mail.ru'),
(101, 'qwe', 'qwe', '213123', 'qweee@mail.ru'),
(102, 'qwe', 'qwe', '213', 'afwki@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `access_keys`
--
ALTER TABLE `access_keys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `access_key` (`access_key`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tariff_id` (`tariff_id`);

--
-- Индексы таблицы `site_users`
--
ALTER TABLE `site_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tariffs`
--
ALTER TABLE `tariffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `access_keys`
--
ALTER TABLE `access_keys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT для таблицы `site_users`
--
ALTER TABLE `site_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `tariffs`
--
ALTER TABLE `tariffs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `access_keys`
--
ALTER TABLE `access_keys`
  ADD CONSTRAINT `access_keys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `access_keys_ibfk_2` FOREIGN KEY (`tariff_id`) REFERENCES `tariffs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

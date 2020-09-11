-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 11 2020 г., 10:16
-- Версия сервера: 5.7.25
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sudak`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(16) UNSIGNED NOT NULL,
  `date` varchar(20) NOT NULL,
  `rooms` int(11) NOT NULL,
  `all-space` int(11) NOT NULL,
  `livin-space` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `all-floors` int(11) NOT NULL,
  `seciton-id` int(11) NOT NULL,
  `image-url` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `date`, `rooms`, `all-space`, `livin-space`, `kitchen`, `floor`, `all-floors`, `seciton-id`, `image-url`) VALUES
(1, '24.28.2011', 5, 35, 18, 11, 2, 4, 1, '/img/preview/1.png'),
(2, '24.28.2011', 1, 35, 18, 11, 2, 4, 1, '/img/preview/2.png'),
(3, '24.28.2011', 2, 35, 18, 11, 2, 4, 1, '/img/preview/3.png'),
(4, '24.28.2011', 3, 35, 18, 11, 2, 4, 1, '/img/preview/4.png'),
(5, '24.28.2011', 3, 35, 18, 11, 2, 4, 2, '/img/preview/5.png'),
(6, '24.28.2011', 2, 35, 18, 11, 2, 4, 2, '/img/preview/6.png'),
(7, '24.11.2032', 14, 35, 18, 11, 2, 4, 2, '/img/preview/7.png'),
(8, '24.11.2032', 14, 35, 18, 11, 2, 4, 3, '/img/preview/8.png'),
(9, '24.28.2011', 3, 35, 18, 11, 2, 4, 3, '/img/preview/9.png'),
(10, '24.28.2011', 3, 35, 18, 11, 2, 4, 3, '/img/preview/10.png'),
(11, '24.28.2011', 3, 35, 18, 11, 2, 4, 3, '/img/preview/11.png'),
(12, '24.28.2011', 3, 35, 18, 11, 2, 4, 3, '/img/preview/12.png'),
(13, '24.28.2011', 3, 35, 18, 11, 2, 4, 4, '/img/preview/13.png'),
(14, '24.28.2011', 3, 35, 18, 11, 2, 4, 4, '/img/preview/14.png'),
(15, '24.28.2011', 3, 35, 18, 11, 2, 4, 4, '/img/preview/15.png'),
(16, '24.28.2011', 3, 35, 18, 11, 2, 4, 4, '/img/preview/16.png'),
(17, '24.28.2011', 4, 35, 18, 11, 2, 4, 1, '/img/preview/17.png');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(12) NOT NULL,
  `section-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `section-name`) VALUES
(1, 'Гостиницы'),
(2, 'Пансионаты'),
(3, 'Квартиры'),
(4, 'Дома');

-- --------------------------------------------------------

--
-- Структура таблицы `shouts`
--

CREATE TABLE `shouts` (
  `id` int(16) UNSIGNED NOT NULL,
  `date` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `preview-text` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shouts`
--

INSERT INTO `shouts` (`id`, `date`, `name`, `email`, `preview-text`) VALUES
(12, '05.03.2015', 'Сарутоби', 'sarunara@email.com', 'Lorem awefrw faw ef  Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaewfaewfwfa vvvv'),
(11, '19.07.2014', 'Сайтама', 'saitama@email.com', 'Зимний отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaewfaewfwfa onp'),
(10, '07.02.2021', 'Хачиман', 'hadaf@email.com', 'Зимний отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaewfaewfwfa фффф'),
(5, '21.12.2012', 'Олег', 'somerrr@email.com', 'Зимний отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaef'),
(6, '26.07.2071', 'Кирито', 'kirkir24@email.com', 'Зимний отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!efaef ea516'),
(7, '24.05.2012', 'Асуна', 'asu@email.com', 'Зимний отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!afaewfawef aefzzzz'),
(8, '05.03.2015', 'Казума', 'kazu@email.com', 'Зимний отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaewfaewfwfa vvvv'),
(15, '05.03.2015', 'Илья', 'илья@email.com', ' фцуфуца фцафуц фуца фцЗимний 2 отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaewfaewfwfa vvvv'),
(14, '05.03.2015', 'Казума', 'kazu@email.com', 'Зимний 2 отдых в Судаке! Номера с кухнями внутри, отопление - Теплый пол. Приглашаем!aefaewfaewfwfa vvvv');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(16) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `pass`) VALUES
(6, '123@gag.ag', '123123', 'fe003b4ab3b291474237bbaf1248ae74'),
(4, 'qerqew@fafe.test', 'testuser2', 'fe003b4ab3b291474237bbaf1248ae74'),
(5, 'rqew@qwerqer', 'qewrqwer', 'e033dccdaaf6c928e563dd98d4edbc63'),
(7, 'metro@gsc.io', 'stalker', '7cab2a3ae2e5e4dc99ac1bb64611a734'),
(8, '18@gmail.com', 'Мопс', '17091bdb327824724ae68ab53433fef2'),
(9, 'qerqew@fafe.te', 'nikizz', 'fe003b4ab3b291474237bbaf1248ae74'),
(10, '321321@gmai.com', '3213213', 'c22542c8ee0161d9e2bed3a86c746561'),
(11, '456456@gmail.com', '456456', 'a4f25d6330e080ccfd59f2acd3efbe84'),
(13, '789789@mail.com', '789789', '48567411159f35f8c5c162158773e4c1'),
(14, '999888@gmial.com', '999888', '4c16b59f0c8faff818cdd873518ec17e'),
(15, 'qerqew@fafe.com', '888999', 'fe003b4ab3b291474237bbaf1248ae74');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `shouts`
--
ALTER TABLE `shouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT для таблицы `shouts`
--
ALTER TABLE `shouts`
  MODIFY `id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 16 2018 г., 23:30
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `summ` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `budget`
--

INSERT INTO `budget` (`id`, `category`, `summ`, `date`) VALUES
(1, 'deposit', '2000.00', '2018-07-16 09:51:20'),
(2, 'loan', '1000.00', '2018-07-16 09:51:20'),
(3, 'shopping', '2000.00', '2018-07-16 09:51:20'),
(4, 'communal', '3000.00', '2018-07-16 09:51:20'),
(5, 'food', '4000.00', '2018-07-16 09:51:20'),
(6, 'vehicle', '1000.00', '2018-07-16 09:51:20'),
(7, 'entertainment', '1000.00', '2018-07-16 09:51:20'),
(8, 'medicine', '300.00', '2018-07-16 09:51:20'),
(9, 'small', '700.00', '2018-07-16 09:51:20');

-- --------------------------------------------------------

--
-- Структура таблицы `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `summ` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `expenses`
--

INSERT INTO `expenses` (`id`, `category`, `summ`, `date`) VALUES
(1, 'deposit', '500.00', '2018-07-16 09:51:36'),
(2, 'loan', '300.00', '2018-07-16 09:51:41'),
(3, 'shopping', '450.00', '2018-07-16 09:51:51'),
(4, 'communal', '2500.00', '2018-07-16 09:51:59'),
(5, 'food', '200.00', '2018-07-16 09:52:04'),
(6, 'vehicle', '200.00', '2018-07-16 09:52:10'),
(7, 'entertainment', '150.00', '2018-07-16 09:52:15'),
(8, 'medicine', '100.00', '2018-07-16 09:52:23'),
(9, 'small', '200.00', '2018-07-16 09:52:28'),
(10, 'loan', '100.00', '2018-07-16 10:38:14'),
(11, 'medicine', '50.00', '2018-07-16 16:53:19'),
(12, 'entertainment', '200.00', '2018-07-16 16:53:23'),
(13, 'small', '100.00', '2018-07-16 16:53:27'),
(14, 'vehicle', '100.00', '2018-07-16 16:53:32'),
(15, 'shopping', '300.00', '2018-07-16 16:53:37'),
(16, 'loan', '100.00', '2018-07-16 16:53:42'),
(17, 'deposit', '300.00', '2018-07-16 16:53:47'),
(18, 'deposit', '2000.00', '2018-07-16 19:03:24'),
(19, 'shopping', '3000.00', '2018-07-16 19:14:53');

-- --------------------------------------------------------

--
-- Структура таблицы `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `summ` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `salary`
--

INSERT INTO `salary` (`id`, `summ`, `date`) VALUES
(1, '15000.00', '2018-07-16 09:51:20');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(1, 'ncux.sasha@gmail.com', 'Sashka', '$2y$10$yNTiqV.UNRmd3Tdkofy7n.5aq5a5SK0PxXSQWo/7MafLSoyC5H.lO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `salary`
--
ALTER TABLE `salary`
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
-- AUTO_INCREMENT для таблицы `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

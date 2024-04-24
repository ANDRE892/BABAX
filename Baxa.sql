-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 24 2024 г., 03:36
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Baxa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Katalog`
--

CREATE TABLE `Katalog` (
  `id` int NOT NULL,
  `img` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `img2` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `img3` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nazvanie` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tovar` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `razmeri` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `akciya` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cena` varchar(500) NOT NULL,
  `silka` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Katalog`
--

INSERT INTO `Katalog` (`id`, `img`, `img2`, `img3`, `nazvanie`, `tovar`, `razmeri`, `akciya`, `cena`, `silka`) VALUES
(1, '5350836_01.jpg', '5350836_02.jpg', '5350836_03.jpg', 'Rinascimento', 'Плащ', '40-48', '', '23 000Р', 'Tovar.php'),
(2, '5350836_04.jpg', '5350836_05.jpg', 'kedi-bla.jpg', 'шланг', 'шарф', '30-50', '', '25 000Р', ''),
(5, 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa'),
(6, 'sss', 'ssss', 'ssss', 'ssss', 'ssss', 'ssss', 'ssss', 'ssss', 'ssss'),
(7, 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd'),
(8, 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'ffff', 'fff', 'fff'),
(9, 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `pass` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `phone`, `pass`) VALUES
(1, 'ewqeqw', 'eqwe', 'qweqweqw', '123'),
(2, 'ewqeqw', 'wqeq@qwe', '89036712365', '1'),
(3, 'ewqeqw', 'wqeq@qwe', '89036712365', '1'),
(4, '131', '1231@mail.ru', '89036712365', '1'),
(5, '12', '12', '12', '12'),
(6, '1', '1', '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Katalog`
--
ALTER TABLE `Katalog`
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
-- AUTO_INCREMENT для таблицы `Katalog`
--
ALTER TABLE `Katalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

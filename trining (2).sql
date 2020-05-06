-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 25 2020 г., 21:30
-- Версия сервера: 10.1.29-MariaDB
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trining`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_date`, `update_date`) VALUES
(1, 'earphones', '2020-03-15', '2020-03-15'),
(2, 'phonessssll', '2020-03-15', '2020-03-15'),
(3, 'Eaiuurphones', '2020-03-17', '2020-03-17'),
(4, 'admin', '2020-04-23', '2020-04-23'),
(5, 'Johnll', '2020-04-23', '2020-04-23'),
(6, 'Android', '2020-04-24', '2020-04-24'),
(7, 'Android', '2020-04-24', '2020-04-24'),
(8, 'John', '2020-04-24', '2020-04-24'),
(9, 'gfgfhh', '2020-04-24', '2020-04-24'),
(10, 'gfglklfhh', '2020-04-24', '2020-04-24'),
(11, 'gfgfhh', '2020-04-24', '2020-04-24'),
(12, 'gfgfhh', '2020-04-24', '2020-04-24'),
(13, 'gfgfhh', '2020-04-24', '2020-04-24'),
(14, 'gfgfhh', '2020-04-24', '2020-04-24'),
(15, 'gfgfhh', '2020-04-24', '2020-04-24'),
(16, 'gfgfhh', '2020-04-24', '2020-04-24'),
(17, 'gfgfhh', '2020-04-24', '2020-04-24'),
(18, 'gfgfhh', '2020-04-24', '2020-04-24'),
(19, 'gfgfhh', '2020-04-24', '2020-04-24'),
(20, 'gfgfhh', '2020-04-24', '2020-04-24'),
(21, 'gfgfhh', '2020-04-24', '2020-04-24'),
(22, 'gfgfhh', '2020-04-24', '2020-04-24'),
(23, 'gfgfhh', '2020-04-24', '2020-04-24'),
(24, 'gfgfhh', '2020-04-24', '2020-04-24'),
(25, 'gfgfhh', '2020-04-24', '2020-04-24'),
(26, 'gfgfhh', '2020-04-24', '2020-04-24'),
(27, 'gfgfhh', '2020-04-24', '2020-04-24'),
(28, 'gfgfhh', '2020-04-24', '2020-04-24'),
(29, 'gfgfhh', '2020-04-24', '2020-04-24'),
(30, 'gfgfhh', '2020-04-24', '2020-04-24'),
(31, 'gfgfhh', '2020-04-24', '2020-04-24');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `prName` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `is_New` tinyint(1) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `prName`, `category_id`, `is_New`, `price`, `image_path`, `description`, `created_date`, `update_date`) VALUES
(1, 'Iphone', 1, 1, 610000, 'img.jpg', '3 camera', NULL, NULL),
(27, 'admin', 4, 0, 50000, 'img.png', 'ioio', '2020-04-23 22:20:59', '2020-04-23 19:20:59'),
(28, 'admin', 1, 1, 50000, 'img.png', 'ophghg', '2020-04-23 22:30:22', '2020-04-23 19:30:22'),
(29, 'admin', 1, 1, 50000, 'img.png', 'fgfgfhg', '2020-04-24 13:18:58', '2020-04-24 10:18:58'),
(30, 'Android', 1, 1, 0, 'yy', 'tytu', '2020-04-24 14:12:47', '2020-04-24 11:12:47'),
(31, 'iphone7+', 2, 1, 250000, 'img.png', 'ukukukuk', '2020-04-24 18:26:51', '2020-04-24 15:26:51');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cookie_key` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `cookie_key`) VALUES
(2, 'Zara', 'Harutyunyan', 'zara.harutyunyan97@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

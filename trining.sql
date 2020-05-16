-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 16 2020 г., 20:01
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
(1, 'computer', '2020-03-15', '2020-03-15'),
(2, 'computer', '2020-03-15', '2020-03-15'),
(3, 'Videos', '2020-03-17', '2020-03-17'),
(4, 'Accessories', '2020-04-23', '2020-04-23'),
(20, 'earphones', '2020-04-24', '2020-04-24'),
(21, 'Android', '2020-04-29', '2020-04-29'),
(22, 'Earphones', '2020-04-29', '2020-04-29'),
(23, 'Earphones', '2020-04-29', '2020-04-29'),
(24, 'Video', '2020-04-29', '2020-04-29'),
(25, 'Ios', '2020-04-30', '2020-04-30'),
(26, 'po[p[', '2020-04-30', '2020-04-30');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `user_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `status` int(2) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`user_id`, `product_id`, `status`, `order_date`) VALUES
(1, 6, 0, '2020-05-09'),
(1, 6, 0, '2020-05-09'),
(1, 5, 0, '2020-05-09'),
(1, 5, 0, '2020-05-09'),
(1, 6, 0, '2020-05-16'),
(1, 6, 0, '2020-05-16');

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
(1, 'Iphone11 7', 1, 1, 610000, '../../../assets/image/image-1.jpeg', '3 camera', '2020-04-29 15:24:17', '2020-05-02 15:39:04'),
(2, 'Honor 9 Lite', 2, 1, 14499, '../../../assets/image/image-2.jpeg', '10', '2020-04-29 15:06:35', '2020-05-02 15:38:56'),
(4, 'Huaweiii', 3, 1, 80000, '../../../assets/image/image-4.jpeg', '2 cart', '2020-04-29 15:24:00', '2020-05-02 15:39:18'),
(5, 'samsung galaxy', 21, 1, 100000, '../../../assets/image/image-5.jpg', '2camera', '2020-04-30 22:06:13', '2020-04-30 22:04:30'),
(6, 'ZenFone ', 25, 1, 50000, '../../../assets/image/image-6.jpeg', '32gb', '2020-05-01 00:15:15', '2020-04-30 22:04:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
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
(2, 'Zara', 'Harutyunyan', 'zara.harutyunyan97@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(3, 'Anna', 'HAkobyan', 'shush.atoyan@mail.ru', 'NAsVn5RFd0BSc5fwK7at9eUeW289cc0owX1vgrPT7CZC9CBtKEwou', NULL),
(4, 'tuyu', 'Harutyunyan', 'yuytuy', 'Nmh64cWmfQSLQMXWpCn2AO6ltMKiyHuhfONs0vEB6zjmlPqgAlwbu', NULL),
(5, 'ryrty', 'tutu', 'admin@mail.com', 'NEqv/ZMfmPPw9bIGv6pDSuWazEaG2LZiWRkZoMalHr27nYH.p/9Um', NULL),
(9, 'Anna', 'Sargsyan', 'an.sargsyan@mail.ru', 'Q2PrniFIFiS83Gfvebyz9O32m3jdaws.Obvngp7oJVrLM2msZ8Fbi', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

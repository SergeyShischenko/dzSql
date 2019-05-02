-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2019 г., 17:34
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dz20sql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address_cities`
--

CREATE TABLE `address_cities` (
  `id` int(11) NOT NULL,
  `countryId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `address_cities`
--

INSERT INTO `address_cities` (`id`, `countryId`, `name`) VALUES
(1, 4, 'Киев'),
(2, 5, 'Варшава');

-- --------------------------------------------------------

--
-- Структура таблицы `address_countries`
--

CREATE TABLE `address_countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `address_countries`
--

INSERT INTO `address_countries` (`id`, `name`) VALUES
(4, 'Украина'),
(5, 'Польша');

-- --------------------------------------------------------

--
-- Структура таблицы `address_streets`
--

CREATE TABLE `address_streets` (
  `id` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `address_streets`
--

INSERT INTO `address_streets` (`id`, `cityId`, `type`, `name`) VALUES
(3, 1, 'Улица Соломенка', 'Соломенка'),
(4, 2, 'Проспект Ляшека', 'Ляшека');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parentId`, `name`) VALUES
(1, NULL, 'Продукты питания'),
(2, NULL, 'Бытовая техника'),
(3, 1, 'Молочные продукты'),
(4, 3, 'Творог'),
(5, 3, 'Молоко'),
(6, 1, 'Овощи'),
(7, 1, 'Фрукты'),
(8, 6, 'Картошка'),
(9, 6, 'Буряк'),
(10, 7, 'Яблоки'),
(11, 7, 'Груши');

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `option_products`
--

CREATE TABLE `option_products` (
  `optionId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `option_types`
--

CREATE TABLE `option_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `countryId` int(11) NOT NULL,
  `typeId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(260) NOT NULL,
  `roleId` int(11) NOT NULL,
  `addressStreetId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phone`, `email`, `password`, `roleId`, `addressStreetId`) VALUES
(1, 'Жора', 'Иванова', '3000', 'ssf1@test.com', '123456fff', 1, 4),
(3, 'Петр', 'Токарев', '3200', 'kkk@dd.com', '554545', 2, 3),
(5, 'Егор ', 'Иванов', '1200', 'swswsw@test.com', '54461ceefef', 2, 3),
(6, 'Егор', 'Сидоров', '6000', 'hferrrt5fh@fgh.com', 'ed4913037c47f898ed494da9452da47dbe5c37cafe08fed968aead191b887baf', 2, 4),
(8, 'Сергей', 'Петров', '7300', 's5522f@test.com', '262923', 2, 4),
(9, 'Сергей', 'Иванов', '5863', 'dsefg@dfg.com', 'edf3f', 1, 3),
(11, 'Петр', 'Токарев', '1560', 'ddswfgg@test.com', '315351864', 1, 4),
(12, 'Инна', 'Иванова', '3655', 'ddfg@klkl.com', 'rvregg', 1, 3),
(13, 'Иван', 'Токарев', '9500', 'hfhfh@fgh.com', '022fa3aeb8b4cface16a46e5b6e5c116245f8af01d9f9ce14f8b93c2ee5076fc', 2, 4),
(14, 'Иван', 'Токарев', '9500', 'hffrfh@fgh.com', '022fa3aeb8b4cface16a46e5b6e5c116245f8af01d9f9ce14f8b93c2ee5076fc', 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `keyu` varchar(20) NOT NULL,
  `createAt` date NOT NULL,
  `updateAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `keyu`, `createAt`, `updateAt`) VALUES
(1, 'Администратор', '1', '2019-04-04', '0000-00-00'),
(2, 'Менеджер', '2', '2019-04-09', '0000-00-00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address_cities`
--
ALTER TABLE `address_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countryId` (`countryId`);

--
-- Индексы таблицы `address_countries`
--
ALTER TABLE `address_countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `address_streets`
--
ALTER TABLE `address_streets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityId` (`cityId`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD KEY `id` (`id`),
  ADD KEY `parentId` (`parentId`);

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `option_types`
--
ALTER TABLE `option_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countryId` (`countryId`),
  ADD KEY `typeId` (`typeId`),
  ADD KEY `products_ibfk_3` (`categoryId`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleId` (`roleId`),
  ADD KEY `addressStreetId` (`addressStreetId`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address_cities`
--
ALTER TABLE `address_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `address_countries`
--
ALTER TABLE `address_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `address_streets`
--
ALTER TABLE `address_streets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `option_types`
--
ALTER TABLE `option_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `address_cities`
--
ALTER TABLE `address_cities`
  ADD CONSTRAINT `address_cities_ibfk_1` FOREIGN KEY (`countryId`) REFERENCES `address_countries` (`id`);

--
-- Ограничения внешнего ключа таблицы `address_streets`
--
ALTER TABLE `address_streets`
  ADD CONSTRAINT `address_streets_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `address_cities` (`id`);

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parentId`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`countryId`) REFERENCES `address_countries` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`typeId`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`parentId`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `user_roles` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`addressStreetId`) REFERENCES `address_streets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2019 г., 20:30
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
(2, 5, 'Варшавка'),
(11, 4, 'Тернополь'),
(12, 7, 'Берлин'),
(13, 6, 'Вашингтон'),
(15, 8, 'Париж'),
(17, 9, 'Рим'),
(21, 4, 'Львов'),
(22, 4, 'Днепро'),
(23, 13, 'Питербург');

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
(6, 'Америка'),
(7, 'Германия'),
(9, 'Италия'),
(15, 'Канада'),
(5, 'Польша'),
(13, 'Россия'),
(4, 'Украина'),
(8, 'Франция');

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
(3, 1, 'Улица', 'Соломенка'),
(4, 2, 'Проспект', 'Ляшека'),
(5, 1, 'Улица', 'Кадетский Буй'),
(6, 1, 'улица', 'Пулюя'),
(7, 1, 'улица', 'Эрнста'),
(8, 12, 'Проспект', 'Штрассе'),
(9, 17, 'улица', 'Венецианская'),
(10, 23, 'Проспект', 'Питерский'),
(11, 13, 'улица', 'Киевская'),
(12, 11, 'Проспект', 'Бандеры');

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

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `name`) VALUES
(1, 'Киев-Компани'),
(2, 'Луганск-Компани');

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

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `countryId`, `typeId`, `categoryId`, `description`, `price`) VALUES
(1, 'Картошка', 5, 1, 8, 'Польская картошка.', 9),
(2, 'Утюги', 4, 2, 2, 'Украинские утюги', 250);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Пищевые'),
(2, 'Не пищевые');

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
(8, 'Сергей', 'Петров', '9000', 's5522f@test.com', 'a', 2, 4),
(9, 'Сергей', 'Иванов', '9000', 'dsefg@dfg.com', 'x', 1, 3),
(11, 'Илья', 'Токарева', '1560', 'ddswfgg@test.com', 'w', 1, 4),
(18, 'Вова', 'Токарев', '6750', 'svh7@meta.ua', 'w', 2, 4),
(21, 'Толик', 'Иванов', '5684', 'svh88@meta.ua', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 2, 4),
(23, 'Админ', 'Соломенков', '2252', 'svh71@meta.ua', 'db24808de032b66d06636425f69e425018ce63bd094dd168cd98729462a0e1e8', 1, 3),
(24, 'Георгий', 'Нагаев', '063-335-13-28', 'jora@meta.ua', 'a', 1, 3),
(25, 'Ольга', 'Сидорова', '5258', 'olga@meta.ua', '3538a1ef2e113da64249eea7bd068b585ec7ce5df73b2d1e319d8c9bf47eb314', 1, 3),
(26, '&lt;?Иван*?&gt;', 'Петров', '6363', 'svh1@meta.ua', '18ac3e7343f016890c510e93f935261169d9e3f565436429830faf0934f4f8e4', 1, 3),
(27, 'Виктор', 'Викторов', '5222', '25358@meta.ua', '91a73fd806ab2c005c13b4dc19130a884e909dea3f72d46e30266fe1a1f588d8', 1, 3),
(28, 'Вован', 'Пуговкий', '5228', 'kolia@test.com', '8b940be7fb78aaa6b6567dd7a3987996947460df1c668e698eb92ca77e425349', 2, 4),
(29, 'Ольга', 'Ивченко', '063-840-40-30', 'vmartevesna@gmail.com', '3eee72dc96a778bb8a32b9295647bdf80af511cc458ced25fcbf77ae6350aa2e', 1, 3),
(30, 'Додик', 'Боров', '2558', 'kolia@test.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', 1, 3);

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
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `countryId` (`countryId`);

--
-- Индексы таблицы `address_countries`
--
ALTER TABLE `address_countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `parentId` (`parentId`),
  ADD KEY `id_2` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `address_countries`
--
ALTER TABLE `address_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `address_streets`
--
ALTER TABLE `address_streets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);

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

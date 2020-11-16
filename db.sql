-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2020 г., 16:07
-- Версия сервера: 5.6.47
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `juliajewerli_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Илюхин Даниил Алексеевич', 'danyatangens@yandex.ru', '+79505434708', 'тест'),
(2, 'rerrergyy', 'danyatangens@yandex.ru', '', 'dfghjkghyujikfghjk'),
(3, 'rerrergyy', 'danyatangens@yandex.ru', '', 'dfghjkghyujikfghjk'),
(4, 'Даниил', 'mail@mail.ru', '88005553535', 'Здравствуйте, интересует цепочка'),
(5, 'rerrergyy', 'danyatangens@yandex.ru', '', 'dfghjkghyujikfghjk'),
(6, 'тест', 'danya@mai.ru', '', 'sdfdfsdfsdfsdfsd'),
(7, 'тест', 'danya@mai.ru', '', 'sdfdfsdfsdfsdfsd'),
(8, 'тест', 'danya@mai.ru', '', 'sdfdfsdfsdfsdfsd'),
(9, 'тест', 'danya@mai.ru', '', 'sdfdfsdfsdfsdfsd'),
(10, 'Тестовая', 'danya@yandex.ru', '88005553535', 'Аве цезарь аве римская империя'),
(11, 'Даниил', 'danya@yandex.ru', '88005553535', 'Аве юлий цезарь '),
(12, 'Тестовая', 'danya@yandex.ru', '88005553535', 'Аве цезарь аве римская империя'),
(13, 'Тестовая', 'danya@yandex.ru', '88005553535', 'Аве цезарь аве римская империя'),
(14, 'тест', 'danya@mai.ru', '', 'sdfdfsdfsdfsdfsd'),
(15, 'тест', 'danya@mai.ru', '', 'sdfdfsdfsdfsdfsd');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`) VALUES
(1, 'Акцентные серьги', 'Ювелирная сталь LUX;Не вызывает аллергию;Замок гвоздик - серебро;', '1400', 2),
(2, 'Кольцо', 'Украшения выполнены из качественной ювелирной стали, cтойкое покрытие, не вызывает аллергии', '700', 3),
(3, 'Кольцо Люкс', 'Крутое', '7000', 3),
(4, 'Цепь с крестом', 'Замок Тогл;  Покрытие качественное и не вызывает аллергии.', '1500', 4),
(5, 'Серьги биколор', '🔸️ Высококачественная ювелирная сталь; 🔸️ Гвоздик серебро', '1300', 2),
(6, 'Серьги с искусственным камнем', 'Ювелирная бижутерия (Корея); Покрытие позолота;  Замок - гвоздики (серебро)', '1500', 2),
(7, 'Браслет-массивный', 'Стильно, модно, грациозно', '1500', 1),
(8, 'Цепь с монетой', 'Качественная ювелирная сталь; Прекрасное покрытие позолота', '1500', 4),
(9, 'Сэт из двух цепей', 'Ювелирная сталь с качественным покрытием; 🔸️Длина цепей регулируется; 🔸️Подвес съёмный', '1600', 4),
(10, 'Цепь с шарами', 'Покрытие качественная позолота.', '1500', 4),
(11, 'Цепь с шарами 1', 'Покрытие качественная позолота 1', '1500', 4),
(12, 'Цепь с шарами 2', 'Покрытие качественная позолота 2', '1500', 4),
(13, 'Цепь с шарами 3', 'Покрытие качественная позолота 3', '1500', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

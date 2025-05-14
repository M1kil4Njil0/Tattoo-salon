-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2024 г., 20:10
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `CRM`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '../images/order/order.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_orders`, `id_users`, `date`, `time`, `image`) VALUES
(6, 9, '2024-06-23', '01:52:00', '../images/profile/order.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_cons`
--

CREATE TABLE `orders_cons` (
  `id_orderscons` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders_cons`
--

INSERT INTO `orders_cons` (`id_orderscons`, `name`, `email`, `address`, `message`) VALUES
(24, 'молоко', 'alex@mail.ru', 'Ленина 18', 'sdasdasdas'),
(25, 'Алекс', 'asdkaljsdhklahfjkas@mail.ru', NULL, 'Привет');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Users', 'users', '1,2', '2024-05-06 04:54:16', '2024-05-08 04:28:56'),
(3, 'Roles', 'roles', '2', '2024-05-08 04:24:35', '2024-05-08 04:28:53'),
(4, 'Pages', 'pages', '2', '2024-05-08 04:29:17', '2024-05-08 04:29:17'),
(5, 'Page create', 'pages/create', '2', '2024-05-08 04:34:02', '2024-05-08 04:35:21'),
(6, 'Page store', 'pages/store', '2', '2024-05-08 04:35:40', '2024-05-08 04:35:40'),
(7, 'User create', 'users/create', '2', '2024-05-08 04:35:59', '2024-05-08 04:35:59'),
(8, 'Role create', 'roles/create', '2', '2024-06-05 15:12:49', '2024-06-17 18:57:38'),
(9, 'Role store', 'roles/store', '2', '2024-06-18 13:10:29', '2024-06-18 13:10:29'),
(10, 'Users store', 'users/store', '2', '2024-06-18 13:11:17', '2024-06-18 13:11:17'),
(11, 'Users edit', 'users/edit', '2', '2024-06-18 13:11:42', '2024-06-18 13:11:42'),
(12, 'Users delete', 'users/delete', '2', '2024-06-18 13:11:59', '2024-06-18 13:11:59'),
(13, 'Role edit', 'roles/edit', '2', '2024-06-18 13:13:05', '2024-06-18 13:13:05'),
(14, 'Page edit', 'pages/edit', '2', '2024-06-18 13:13:31', '2024-06-18 13:13:31'),
(15, 'Page delete', 'pages/delete', '2', '2024-06-18 13:13:47', '2024-06-18 13:16:04'),
(16, 'Page update', 'pages/update', '2', '2024-06-18 13:15:58', '2024-06-18 13:15:58'),
(17, 'Users update', 'users/update', '2', '2024-06-18 13:16:46', '2024-06-18 13:17:31'),
(18, 'Role update', 'roles/update', '2', '2024-06-18 13:17:57', '2024-06-18 13:18:05'),
(21, 'Orders cons', 'orders_cons', '2', '2024-06-18 13:54:10', '2024-06-18 13:54:10'),
(22, 'Orders', 'orders', '2', '2024-06-19 03:16:22', '2024-06-19 03:16:22'),
(23, 'Orders cons delete', 'orders_cons/delete', '2', '2024-06-19 03:49:57', '2024-06-19 03:50:27'),
(24, 'Orders delete', 'orders/delete', '2', '2024-06-19 10:37:33', '2024-06-19 10:37:33'),
(25, 'Orders create', 'orders/create', '2', '2024-06-19 10:39:23', '2024-06-19 10:39:23'),
(26, 'Orders edit', 'orders/edit', '2', '2024-06-19 10:40:38', '2024-06-19 10:40:38'),
(27, 'Orders store', 'orders/store', '2', '2024-06-19 19:41:42', '2024-06-19 19:41:42'),
(28, 'Orders update', 'orders/update', '2', '2024-06-19 19:47:09', '2024-06-19 19:47:09');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id_reviews` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id_reviews`, `name`, `message`) VALUES
(5, 'Никита', 'Мой опыт работы с тату-мастером был сказочным! Она обладает невероятным талантом и мастерством. Она создала для меня уникальную татуировку, которая является искусством на моей коже.'),
(6, 'Дарья Кожевникова', 'Я очень довольна работой тату-мастера! Он внимательно выслушал мои пожелания и создал прекрасный дизайн, полностью соответствующий моим ожиданиям. Процесс татуировки был безболезненным и профессиональным.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `role_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_description`) VALUES
(1, 'Пользователь', 'может создавать свои собственные статьи, но они не могут быть опубликованы до одобрения администратором или редактором.'),
(2, 'Администратор', 'полный доступ ко всем функциям сайта, включая управление пользователями, плагинами а также создание и публикация статей.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img_user` varchar(255) NOT NULL DEFAULT '../images/profile/default.jpg',
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL DEFAULT 1,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `img_user`, `username`, `email`, `password`, `is_admin`, `role`, `is_active`, `created_at`) VALUES
(2, '', 'Miki132', 'alex@mail.ru', '$2y$10$V80/RsjhXqXkwrzw8WaBwOAx9W93NlHK0I/hdLbp.SxV/andXnda6', 0, 2, 0, '2024-05-08 04:23:33'),
(9, '../images/profile/Ilia.jpg', 'Илья1', 'jsdagsdjkga1@mail.ru', '$2y$10$BuleC47Ob5zW.phRRrtEseSuz3G9/FDYUU2hLJVcqb6OH9XnpM1Eu', 1, 2, 1, '2024-06-18 13:04:52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `orders_cons`
--
ALTER TABLE `orders_cons`
  ADD PRIMARY KEY (`id_orderscons`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_reviews`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders_cons`
--
ALTER TABLE `orders_cons`
  MODIFY `id_orderscons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_reviews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

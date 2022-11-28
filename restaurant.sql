-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 28.Nov 2022, 20:56
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `restaurant`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_blog_entries` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `blog`
--

INSERT INTO `blog` (`id`, `sys_name`, `display_name`, `author`, `image`, `image_blog_entries`, `text`, `created_at`, `updated_at`) VALUES
(1, 'stumptown_tofu_schlitz', 'Stumptown Tofu Schlitz', 'Branding / Admin', 'img/blog_post_01.jpg', 'img/blog_item_01.jpg', 'Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...', '2020-10-26 18:55:43', '2022-11-20 18:55:43'),
(2, 'succulents_hashtag_folk', 'Succulents Hashtag Folk', 'Branding / Admin', 'img/blog_post_02.jpg', 'img/blog_item_02.jpg', 'Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...', '2020-10-21 18:57:56', '2022-11-20 18:55:43'),
(3, 'knaus_sriracha _pinterest', 'Knaus Sriracha Pinterest', 'Dessert / Chef', 'img/blog_post_03.jpg', 'img/blog_item_03.jpg', 'Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...', '2020-10-11 18:57:56', '2022-11-20 18:55:43'),
(4, 'crucifix_selvage_coat', 'Crucifix Selvage Coat', 'Plate / Chef', 'img/blog_post_04.jpg', 'img/blog_item_04.jpg', 'Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...', '2020-10-03 18:57:56', '2022-11-20 18:55:43');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@test.com', '0900000000', 'test', '2022-11-28 16:58:00', '2022-11-28 16:58:00'),
(4, 'Test2', 'test@test.com', '0900000001', 'test', '2022-11-28 17:39:37', '2022-11-28 17:39:37');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `food_menu`
--

CREATE TABLE `food_menu` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `food_menu`
--

INSERT INTO `food_menu` (`id`, `sys_name`, `display_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'Breakfast', 'img/cook_breakfast.png', '2022-11-17 19:41:45', '2022-11-17 19:41:45'),
(2, 'Lunch', 'Lunch', 'img/cook_lunch.png', '2022-11-17 19:41:45', '2022-11-17 19:41:45'),
(3, 'Dinner', 'Dinner', 'img/cook_dinner.png', '2022-11-17 19:41:45', '2022-11-17 19:41:45'),
(4, 'Desserts', 'Desserts', 'img/cook_dessert.png', '2022-11-17 19:41:45', '2022-11-17 19:41:45');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `meals`
--

INSERT INTO `meals` (`id`, `name`, `description`, `price`, `image`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Kale Chips Art Party', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 3.5, 'img/breakfast_item.jpg', 1, '2022-11-28 14:13:56', '2022-11-28 14:13:56'),
(2, 'Drink Vinegar Prism', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 7.25, 'img/lunch_item.jpg', 1, '2022-11-28 14:13:56', '2022-11-28 14:13:56'),
(3, 'Taiyaki Gastro Tousled', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 11.5, 'img/dinner_item.jpg', 1, '2022-11-28 14:13:56', '2022-11-28 14:13:56'),
(4, 'Mumble Ditch Corn', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 6.5, 'img/lunch_item.jpg', 2, '2022-11-28 14:18:13', '2022-11-28 14:18:13'),
(5, 'Wayfare Lomo Core', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 11.75, 'img/breakfast_item.jpg', 2, '2022-11-28 14:18:13', '2022-11-28 14:18:13'),
(6, 'Taiyaki Gastro Tousled', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 16.5, 'img/dinner_item.jpg', 2, '2022-11-28 14:18:13', '2022-11-28 14:18:13'),
(7, 'Meal Apples Almonds', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 8.25, 'img/dinner_item.jpg', 3, '2022-11-28 14:18:13', '2022-11-28 14:18:13'),
(8, 'Ditch Corn Art', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 12.5, 'img/lunch_item.jpg', 3, '2022-11-28 14:18:13', '2022-11-28 14:18:13'),
(9, 'Kale Chips Art Party', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean ditcher meal...', 16, 'img/breakfast_item.jpg', 3, '2022-11-28 14:18:13', '2022-11-28 14:18:13');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `sys_name`, `display_name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', 'index.php', '2022-11-20 20:19:47', '2022-11-20 20:19:47'),
(2, 'our_menus', 'Our Menus', 'menu.php', '2022-11-20 20:19:47', '2022-11-20 20:19:47'),
(3, 'blog_entries', 'Blog Entries', 'blog.php', '2022-11-20 20:19:47', '2022-11-20 20:19:47'),
(4, 'contact_us', 'Contact us', 'contact.php', '2022-11-20 20:19:47', '2022-11-20 20:19:47');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@test.com', '2022-11-28 20:43:37', '2022-11-28 20:43:37'),
(2, 'test2@test.com', '2022-11-28 20:44:56', '2022-11-28 20:44:56');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `name` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `reservation`
--

INSERT INTO `reservation` (`id`, `day`, `time`, `name`, `phone`, `number_of_people`, `created_at`, `updated_at`, `status`) VALUES
(6, 'Wednesday', '12:00:00', 'Test', '0904587444', 4, '2022-11-28 17:40:37', '2022-11-28 17:40:37', 'new'),
(7, 'Wednesday', '19:00:00', 'Jan Novy', '0900005748', 2, '2022-11-28 17:40:51', '2022-11-28 20:25:38', 'new');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `type_meals_menu`
--

CREATE TABLE `type_meals_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(45) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `type_meals_menu`
--

INSERT INTO `type_meals_menu` (`id`, `title`, `image`, `alt`, `sys_name`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast Menu', 'img/breakfast_menu.jpg', 'Breakfast', 'breakfast', '2022-11-28 14:07:49', '2022-11-28 14:07:49'),
(2, 'Lunch Menu', 'img/lunch_menu.jpg', 'Lunch', 'lunch', '2022-11-28 14:07:49', '2022-11-28 14:07:49'),
(3, 'Dinner Menu', 'img/dinner_menu.jpg', 'Dinner', 'dinner', '2022-11-28 14:07:49', '2022-11-28 14:07:49');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `weekly_food`
--

CREATE TABLE `weekly_food` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `food_name` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `weekly_food`
--

INSERT INTO `weekly_food` (`id`, `sys_name`, `display_name`, `price`, `food_name`, `description`, `image`) VALUES
(1, 'breakfast', 'Breakfast', 4.5, 'Kale Chips Art Party', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...', 'img/breakfast_item.jpg'),
(2, 'lunch', 'Lunch', 7.5, 'Taiyaki Gastro Tousled', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...', 'img/lunch_item.jpg'),
(3, 'dinner', 'Dinner', 12.5, 'Batch Squid Jean Shorts', 'Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...', 'img/dinner_item.jpg');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `type_meals_menu`
--
ALTER TABLE `type_meals_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `weekly_food`
--
ALTER TABLE `weekly_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `type_meals_menu`
--
ALTER TABLE `type_meals_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `weekly_food`
--
ALTER TABLE `weekly_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

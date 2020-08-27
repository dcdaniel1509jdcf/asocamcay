-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2020 a las 05:02:32
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesisv1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`) VALUES
(1, 'Hortalizas', 'hortalizas', 'productos obtenidas de tubérculos y legumbres'),
(2, 'Frutas', 'frutas', 'productos obtenidos de plantas cultivadas'),
(3, 'Granos y harinas', 'granos-y-harinas', 'productos obtenidas de tubérculos y legumbres'),
(4, 'Hiervas de sal', 'hiervas-de-sal', 'productos obtenidos de plantas cultivadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homecode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `homedesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeimg1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeimg2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeimg3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeimg4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeimg5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homedir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hometelf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `homes`
--

INSERT INTO `homes` (`id`, `homecode`, `homedesc`, `homeimg1`, `homeimg2`, `homeimg3`, `homeimg4`, `homeimg5`, `homedir`, `hometelf`, `homeemail`, `created_at`, `updated_at`) VALUES
(1, '170903', 'Esta organización con el Apoyo de la Fundación Casa Campesina Cayambe, se dedica a la producción y comercialización de productos agropecuarios con enfoque agroecológico, luchando permanentemente por concretar un sistema con características de sostenibilidad en los ámbitos social, económico y ambiental', '1595273899180.FRESASFragaria.jpg', '1598015376galeria4.webp', '1598015270galeria3.jpeg', NULL, NULL, 'Cayambe Av. Natalia Jarrín', '02 450 1956', 'asocamcay@gmail.com', '2020-05-23 17:58:21', '2020-08-21 13:12:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_07_232237_create_categories_table', 1),
(4, '2019_10_07_232546_create_products_table', 1),
(5, '2019_11_18_221540_create_orders_table', 1),
(6, '2019_11_18_221714_create_order_items_table', 1),
(7, '2020_03_26_182932_create_recipes_table', 1),
(8, '2020_04_06_082238_create_reportsexcels_table', 1),
(9, '2020_04_23_222134_create_news_table', 1),
(10, '2020_05_20_000558_create_homes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `subtotal` decimal(5,2) NOT NULL,
  `shipping` decimal(5,2) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `subtotal`, `shipping`, `user_id`, `created_at`, `updated_at`) VALUES
(5, '22.00', '0.00', 1, '2020-06-26 17:04:03', '2020-06-26 17:04:03'),
(6, '8.00', '0.00', 1, '2020-06-27 19:35:35', '2020-06-27 19:35:35'),
(7, '12.75', '0.00', 5, '2020-08-21 14:04:29', '2020-08-21 14:04:29'),
(8, '6.25', '0.00', 5, '2020-08-21 15:36:05', '2020-08-21 15:36:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `price`, `quantity`, `product_id`, `order_id`) VALUES
(8, '1.00', 22, 6, 5),
(9, '1.00', 8, 6, 6),
(10, '0.50', 2, 17, 7),
(11, '1.25', 4, 8, 7),
(12, '1.50', 2, 7, 7),
(13, '1.25', 3, 10, 7),
(14, '1.25', 1, 13, 8),
(15, '1.50', 2, 7, 8),
(16, '0.75', 1, 12, 8),
(17, '1.25', 1, 15, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `extract` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `extract`, `price`, `image`, `visible`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'Frejol', 'frejol', 'Funda con cierre conteniendo granos secos', '400 gramos', '1.00', '1598015839pprod2.jpg', 1, 3, '2020-06-26 16:47:56', '2020-08-21 13:19:14'),
(7, 'Frutilla', 'frutilla', 'Tarrina trasparente con frutos', '454 gramos', '1.50', '1598015696prod1.jpg', 1, 2, '2020-08-21 13:14:56', '2020-08-21 13:17:29'),
(8, 'Chulpi', 'chulpi', 'Funda con cierre conteniendo granos secos  de chulpi', '400 gramos', '1.25', '1598016110mas-corona-chulpi-500-gr.jpg', 1, 3, '2020-08-21 13:21:33', '2020-08-21 13:22:58'),
(9, 'Melloco', 'melloco', 'Malla con tubérculos tiernos', '400 gramos', '1.00', '1598016258mellocos.jpg', 1, 1, '2020-08-21 13:24:18', '2020-08-21 13:24:18'),
(10, 'Papa Chola', 'papa-chola', 'Malla con tubérculos.', '1365 gramos', '1.25', '1598016351Vermontina-foto2.jpg', 1, 1, '2020-08-21 13:25:51', '2020-08-21 13:34:25'),
(11, 'Pimiento rojo', 'pimiento-rojo', 'Malla de aproximadamente 5 unidades', '400 gramos', '0.75', '1598016555149584_00_1.jpg', 1, 1, '2020-08-21 13:29:15', '2020-08-21 13:29:15'),
(12, 'Coliflor', 'coliflor', 'Repollo sin empaque. El precio variará de acuerdo al peso del producto', '600 gramos', '0.75', '1598016663coliflor.jpg', 1, 1, '2020-08-21 13:31:03', '2020-08-21 13:31:03'),
(13, 'Babaco', 'babaco', 'Fruto sin empaque. El precio variará de acuerdo al peso del producto', '800 gramos', '1.25', '1598016902babaco.jpg', 1, 1, '2020-08-21 13:35:02', '2020-08-21 13:35:02'),
(14, 'Taxo', 'taxo', 'Malla con aproximadamente 8 frutos', '800 gramos', '1.00', '1598017195taxo-7082630.jpg', 1, 2, '2020-08-21 13:39:55', '2020-08-21 13:40:22'),
(15, 'Mora', 'mora', 'Tarrina con frutos tiernos', '400 gramos', '1.25', '1598017327mora.png', 1, 1, '2020-08-21 13:42:07', '2020-08-21 13:42:07'),
(16, 'Cilantro', 'cilantro', 'Atado con tallos y hojas', '200 gramos', '0.50', '1598017439100891149.jpg', 1, 4, '2020-08-21 13:43:59', '2020-08-21 13:44:14'),
(17, 'Albaca', 'albaca', 'Atado de hojas con peciolo', '200 gramos', '0.50', '1598017556shutterstock_1611109069-560x420.jpg', 1, 4, '2020-08-21 13:45:56', '2020-08-21 13:45:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `image`, `ingredients`, `description`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'CREPAS SALADAS ESTILO POBLANO', '1598016397recetas-de-crepas-saladas-estilo-poblano.jpg', '1 lata pequeña de granos de elote amarillo (220 g)\r\n1 lata pequeña de champiñones (186 g)\r\n8 crepas\r\n2 pechugas de pollo cortadas en fajitas delgadas y pequeñas\r\n3 chiles poblanos asados, desvenados y sin piel cortados en tiras finas\r\n½ cebolla mediana cortada en rodajas delgadas', 'En una sartén a fuego medio, coloca un chorrito de aceite de oliva. Cuando esté caliente, agrega la cebolla hasta que esté transparente.\r\n\r\nAñade la mitad del chile poblano, los champiñones, los granos de elote y las fajitas de pollo; sazona con sal y pimienta, fríe todo hasta que el pollo se vea dorado.\r\n\r\nHaz taquitos de este pollo con las crepas y colócalos en un refractario engrasado para que no se peguen.\r\n\r\nLicua el resto del chile poblano junto con el queso crema, el caldo de pollo y la leche. Vacía esta mezcla en una cacerola con un poco de margarina para que se caliente.', NULL, NULL, NULL),
(2, 'EMPANADAS DE VERDE', '159801773722a59697a.jpg', 'Para la masa de plátano verde:\r\n4 plátanos verdes\r\n1 huevo – opcional se puede utilizar un poco del agua de cocción de los plátanos en lugar del huevo\r\n2 cucharadas de mantequilla a temperatura ambiente – o aceite\r\n~ 1 cucharadita de sal\r\n\r\nPara el relleno de queso:\r\n1 taza de queso rallado o desmenuzado puede usar quesillo, queso fresco o mozzarella\r\n1/3 taza de cebolla blanca perla o de tallo picadita en cubitos\r\nAceite para freír', 'Lave y pele los plátanos verdes, tenga cuidado ya que los plátanos verdes tienden a manchar la ropa y las tablas de cortar. Es mejor pelar los plátanos verdes bajo un chorro de agua fría.\r\n\r\nCorte 3 de los plátanos por la mitad y hágalos hervir con abundante agua hasta que estén suaves, unos 30 minutos .\r\n\r\nMantenga el plátano pelado restante en un recipiente con agua fría.\r\nDeje que los plátanos cocidos en el agua donde se cocinaron hasta que estén lo suficientemente fríos como para manipularlos (pero aún calientes), pero déjelos en el agua para evitar que se endurezcan.\r\n\r\nMientras tanto, ralle el plátano crudo restante usando un rallador fino.\r\nColoque los plátanos hervidos en un procesador de alimentos y mezcle hasta que estén molidos y tenga una masa gruesa. Añada el huevo y la mantequilla o el aceite, y mezcle hasta que los ingredientes estén bien combinados y la masa quede más suave. Si no tiene un procesador de alimentos, se pueden triturar o rallar los plátanos cocidos con un majador o rallador y luego mezclarlas con el huevo (ligeramente batido) y la mantequilla.\r\n\r\nColoque la masa de los plátanos hervidos en un tazón grande. Frote sus manos con un poco de mantequilla o aceite, y agregue el plátano crudo finamente rallado y ½ a 1 cucharadita de sal (ajuste basado en su nivel de tolerancia a la sal). \r\nUtilice sus manos para trabajar la masa hasta que tenga una mezcla suave. Si la masa está muy seca o demasiado pegajosa, puede agregar un poco del agua donde se hirvieron los plátanos – es probable que lo necesite si no uso un huevo.\r\n\r\nForme la masa en una bola y déjela reposar en un recipiente a temperatura ambiente durante unos 15-30 minutos. También puede guardarlo en la refrigeradora para usarlo más tarde durante 24 horas, pero cuando lo saque de la refri, se deja reposar durante al menos 30 minutos a temperatura ambiente.', NULL, NULL, NULL),
(3, 'SALSA DE QUESO', '1598018004salsa-de-queso-1-768x512.jpg', 'Para 300 ml. de Salsa\r\n\r\n200 ml. de Nata para Cocinar (Crema de Leche)\r\n100 g. de Queso (Roquefor, Azul, Parmesano\r\n1 Chorreón de Coñac o Brandy\r\nSal', 'Para hacer la salsa de queso lo primero será coger la sartén o el recipiente donde la vayamos a hacer.\r\n\r\nPondremos la nata a calentar.\r\n\r\nMientras coge temperatura le añadiremos el queso que vayamos a hacer en trozos. También podemos usar queso rallado.\r\n\r\nPasados unos minutos veremos que el queso comienza a derretirse.se es el momento de añadirle el chorreoncito de coñac. Si no quieres puedes prescindir de él, pero le da un toque muy rico.\r\n\r\nTambién es el momento de ponerle un poquito de sal. Pasados un par de minutos que nos aseguremos que el alcohol se ha evaporado lo retiramos del fuego.\r\n\r\nComprobamos que no quedan trozos de queso y se ha derretido todo por completo.\r\nY así de fácil es preparar la receta de la salsa de queso ¡Que la disfrutes!', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportsexcels`
--

CREATE TABLE `reportsexcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `ci`, `contact`, `email`, `email_verified_at`, `password`, `type`, `active`, `address`, `notice`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daniel', 'Cahuatijo', '1725658437', '098050555', 'jdcf@gmail.com', NULL, '$2y$10$u4tjU7L5N59uc5kEuEh.tO.zzNu00CeR5a2mlo0Zjfvxm/D.hgngi', 'admin', 1, 'Quito - Tumbaco', '0', NULL, '2020-05-23 17:58:21', '2020-08-21 14:06:52'),
(4, 'Betsy', 'Cahuatijo', '1709510142', '0980364839', 'jdcfdanielmess@gmail.co1', NULL, '$2y$10$hHOZVOwNagarpe1./9yk7OH.yRuixCsqmLUC0/oMJIruiof0k52OC', 'user', 1, 'Tumbaco Av. Universitaria', '1', NULL, '2020-06-27 19:42:52', '2020-08-21 14:06:35'),
(5, 'Fanny', 'Farinango', '1711613115', '0993339502', 'fannyfarinangoo@gmail.com', NULL, '$2y$10$SobyobrJwRK77cZ.92N53uzIvJ9JLDbrryeKQslPG7CAs0/9VY2UW', 'admin', 1, 'Tumbaco Av. Universitaria', '1', NULL, '2020-08-21 13:57:16', '2020-08-21 14:07:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_id_unique` (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recipes_name_unique` (`name`);

--
-- Indices de la tabla `reportsexcels`
--
ALTER TABLE `reportsexcels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_ci_unique` (`ci`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reportsexcels`
--
ALTER TABLE `reportsexcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

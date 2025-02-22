-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2025 at 03:59 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayhan_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:33:48', '2024-01-15 23:33:48'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:35:07', '2024-01-15 23:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `addto_carts`
--

DROP TABLE IF EXISTS `addto_carts`;
CREATE TABLE IF NOT EXISTS `addto_carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pound` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flavor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=380 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addto_carts`
--

INSERT INTO `addto_carts` (`id`, `user_id`, `product_id`, `qty`, `pound`, `flavor`, `des`, `price`, `img`, `location`, `created_at`, `updated_at`) VALUES
(248, '18', '1', '1', NULL, NULL, NULL, '1500', NULL, NULL, '2025-02-12 07:34:31', '2025-02-12 07:34:31'),
(251, 'guest_67ac78777c1ad', '26', '1', NULL, NULL, NULL, '182', NULL, '80', '2025-02-12 10:45:23', '2025-02-12 10:45:23'),
(252, 'guest_67ac78777c1ad', '2', '1', '1 pcs', NULL, 'test', '1500', 'uploads/cart_images/1739381855.png', '80', '2025-02-12 11:37:35', '2025-02-12 11:37:35'),
(267, 'guest_67b0362965d0e', '1', '1', 'Pounds-6', 'coclate', 'test', '1500', NULL, '80', '2025-02-15 00:41:11', '2025-02-15 00:41:11'),
(268, '19', '2', '1', '1 pcs', NULL, NULL, '1500', NULL, NULL, '2025-02-15 04:10:17', '2025-02-15 04:10:17'),
(341, '26', '3', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-16 13:41:38', '2025-02-16 13:41:38'),
(342, '26', '4', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-16 13:41:38', '2025-02-16 13:41:38'),
(343, 'guest_67b2f08ef17c6', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-17 02:17:18', '2025-02-17 02:17:18'),
(349, 'guest_67b2f08ef17c6', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-17 04:43:15', '2025-02-17 04:43:15'),
(367, 'guest_67b5af4f01def', '3', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 06:47:02', '2025-02-19 06:47:02'),
(373, 'guest_67b74ec712e28', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 09:48:23', '2025-02-20 09:48:23'),
(374, 'guest_67b74ec712e28', '21', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 09:48:23', '2025-02-20 09:48:23'),
(375, 'guest_67b74ec712e28', '24', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 09:48:23', '2025-02-20 09:48:23'),
(376, 'guest_67b74ec712e28', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 09:48:41', '2025-02-20 09:48:41'),
(377, 'guest_67b77d064ca27', '12', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 13:05:42', '2025-02-20 13:05:42'),
(378, 'guest_67b77d064ca27', '23', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 13:05:42', '2025-02-20 13:05:42'),
(379, 'guest_67b9610852da0', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-21 23:30:48', '2025-02-21 23:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS `ads` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_price` double(8,2) NOT NULL DEFAULT '0.00',
  `discount` int NOT NULL DEFAULT '0',
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `product_id`, `title`, `sub_title`, `position`, `offer_price`, `discount`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'We\'re an Apple Authorised Service Provider 1', 'Repair Services 1', '-1', 0.00, 0, 'admin/img/ad-images/16179.png', 1, '2024-01-02 05:12:28', '2024-01-02 06:04:54'),
(2, 10, 'Shop Today’s Deals', 'Happy Mother\'s Day. Big Sale Up to', '12', 0.00, 40, 'admin/img/ad-images/42079.jpg', 1, '2024-02-11 23:55:19', '2024-02-12 00:07:57'),
(3, 8, 'Repair Services', 'We\'re an Apple Authorised Service Provider 1', '4', 0.00, 0, 'admin/img/ad-images/23274.png', 1, '2024-02-12 00:28:56', '2024-02-12 00:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'President Bags', 'Stylish and functional bags for every occasion.', 'admin/img/brand-img/6425brand_bag_President_1.jpg', 1, '2023-11-13 21:08:11', '2024-09-21 08:39:23'),
(2, 'CAT Bags', 'Durable and rugged bags designed for adventure.', 'admin/img/brand-img/5122brand_bag_CAT_1.jpg', 1, '2023-11-13 21:08:33', '2024-09-21 08:33:55'),
(3, 'Nike', 'Stay in style with our latest shoe collection.', 'admin/img/brand-img/1787brand_Shoe_Nike_1.jpg', 1, '2023-11-13 21:09:09', '2023-11-13 21:09:09'),
(4, 'Adidas', 'Walk with comfort, walk with confidence.', 'admin/img/brand-img/4389brand_Shoe_Adidas_1.jpg', 1, '2023-11-13 21:09:28', '2023-11-13 21:09:28'),
(5, 'Cats Eye', 'Express yourself with our trendy clothing line.', 'admin/img/brand-img/2074brand_Clothing_cats_eye_1.jpg', 1, '2023-11-13 21:10:07', '2023-11-13 21:10:07'),
(6, 'Anjans', 'Effortlessly stylish clothing for any occasion.', 'admin/img/brand-img/9087brand_Clothing_Anjans_1.png', 1, '2023-11-13 21:10:30', '2023-11-13 21:10:30'),
(7, 'Hitachi', 'Cutting-edge technology for the modern lifestyle.', 'admin/img/brand-img/4711brand_Electronics_Hitachi_1.jpg', 1, '2023-11-13 21:11:26', '2023-11-13 21:11:26'),
(8, 'Star Tech', 'Explore a world of innovative gadgets and devices.', 'admin/img/brand-img/4102brand_Electronics_Star_Tech_1.jpg', 1, '2023-11-13 21:11:47', '2023-11-13 21:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `top` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `top`, `mid`, `bottom`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Flowers', 'Elevate your style with our diverse collection of fashionable bags for every occasion.aaaaa', 'admin/img/category-img/83Rectangle 105.jpg', 1, 'top', 'mid', NULL, '2023-11-13 20:26:19', '2025-02-15 04:48:11'),
(2, 'Birthday', 'Walk with confidence in our trendy and comfortable shoe collection for men and women.', 'admin/img/category-img/97cake-homepage_0.jpg', 1, 'top', 'mid', NULL, '2023-11-13 20:26:54', '2025-02-15 04:51:29'),
(3, 'Anniversary', 'Unleash your fashion statement with our exclusive clothing line inspired by Bangladeshi culture.', 'admin/img/category-img/64Gift-card-2.jpg', 1, 'top', 'mid', 'bottom', '2023-11-13 20:27:45', '2025-02-15 04:58:03'),
(6, 'Get Well Soon Gift', 'Enhance your beauty with our curated selection of skincare and cosmetics, tailored for Bangladesh\'s climate.', 'admin/img/category-img/46personalised_14.jpg', 1, 'top', 'mid', NULL, '2023-11-13 20:29:51', '2025-02-15 04:48:31'),
(7, 'Retirement', 'Gear up for active living with our sports and outdoor essentials, crafted for Bangladesh\'s landscapes.', 'admin/img/category-img/23flower_desktop-new.jpg', 1, 'top', 'mid', 'bottom', '2023-11-13 20:30:39', '2025-02-15 04:58:15'),
(8, 'Books', 'Immerse yourself in Bangladeshi literature and knowledge with our diverse book collection.', 'admin/img/category-img/33combo-gifts_1.jpg', 1, NULL, NULL, NULL, '2023-11-13 20:31:20', '2025-02-01 03:37:26'),
(9, 'Traditional Wear', 'Embrace the elegance of Bangladeshi traditional wear, perfect for cultural celebrations and events.', 'admin/img/category-img/12cake-homepage_0.jpg', 1, NULL, 'mid', NULL, '2023-11-13 20:32:04', '2025-02-15 04:49:07'),
(11, 'test', 'test', ' ', 1, 'top', NULL, 'bottom', '2025-02-15 04:41:17', '2025-02-15 04:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `colors_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'valnila', '#0000ff', 'Blue symbolizes trust, loyalty, and confidence. It\'s a calming color often associated with depth and stability.', 1, '2023-11-13 21:20:47', '2023-11-13 21:20:47'),
(2, 'stobery', '#00ff40', 'Green represents nature, growth, and harmony. It\'s a color that signifies freshness and is often associated with health and renewal.', 1, '2023-11-13 21:21:24', '2023-11-13 21:21:24'),
(3, 'coclate', '#ffff00', 'Yellow is associated with sunshine, happiness, and energy. It\'s a color that evokes feelings of warmth and positivity.', 1, '2023-11-13 21:21:49', '2023-11-13 21:21:49'),
(4, 'bluevary', '#c0c0c0', 'Silver is often linked with modernity and sophistication. It\'s a color that represents technological innovation and sleek design.', 1, '2023-11-13 21:22:51', '2023-11-13 21:22:51'),
(11, 'test1', NULL, 'test1', 0, '2025-02-09 03:45:31', '2025-02-09 03:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p><br></p><p></p>', 1, '2024-01-15 23:42:56', '2024-01-15 23:42:56'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p><br></p><p></p>', 1, '2024-01-15 23:44:09', '2024-01-15 23:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

DROP TABLE IF EXISTS `couriers`;
CREATE TABLE IF NOT EXISTS `couriers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_cost` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `couriers_email_unique` (`email`),
  UNIQUE KEY `couriers_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `name`, `email`, `mobile`, `address`, `shipping_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sa Paribahan 01', 'saParibahan@mailinator.com', '01747534816', 'Malibag. Dhaka-1217', 66, 1, '2023-12-25 21:44:10', '2023-12-25 21:48:46'),
(2, 'Sundorban  01', 'Sundorban@gmail.com', '01747534817', 'Khilgoan, Dhaka-1217', 150, 1, '2023-12-25 21:46:17', '2023-12-25 21:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date_of_birth` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blood_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`),
  UNIQUE KEY `customers_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `address`, `date_of_birth`, `blood_group`, `district`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah Al Monayem', 'almonayem2019@gmail.com', '01747534818', '$2y$10$.Kffzgx8XRX1.FJkw497F.1Q/sjKb7TJgE3yMdnsvHurdkqYY45a6', NULL, NULL, NULL, NULL, NULL, 1, '2023-11-28 02:45:58', '2023-11-28 02:45:58'),
(2, 'Abdullah Al Monayem2', 'almonayem20191@gmail.com', '01747534817', '$2y$10$oSxUj0KHpCFsofJLF8NHCOLjGMR9GV8fYTGwHHxoAWM9SnCOzk0ym', NULL, NULL, NULL, NULL, NULL, 1, '2023-11-28 03:11:36', '2023-11-28 03:11:36'),
(3, 'Abdullah Al Monayem 3', 'almonayem20192@gmail.com', '01747534816', '$2y$10$mYyM5V/4uuoZZuOF9koh/uBZH6IHbUEfrPgW2/Nj17OKmL7HUkcrq', NULL, NULL, NULL, NULL, NULL, 1, '2023-11-28 04:44:26', '2023-11-28 04:44:26'),
(5, 'Abdullah Al Monayem 2', 'almonayem20194@gmail.com', '017475348155', '$2y$10$tukhUs2R0XX2mq.0pMHkxej0JMfQavefBVwY2jykMKfg07yHEChfu', NULL, NULL, NULL, NULL, NULL, 1, '2023-11-28 05:10:22', '2023-11-28 05:10:22'),
(6, 'Abdullah Al Monayem 6', 'almonayem20196@gmail.com', '01756064943', '$2y$10$QdmYi/wohFWHU9qshkl.luQVCp2POpF112MNEOPVmQ6cqGlVvecZS', NULL, NULL, NULL, NULL, NULL, 1, '2023-11-30 05:33:43', '2023-11-30 05:33:43'),
(7, 'Monayem Ali 1', 'monayemAli@gmail.com', '017475000000', 'monayemAli@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, '2023-12-17 02:17:52', '2023-12-17 02:17:52'),
(8, 'Monayem Ali 2', 'monayemAli2@gmail.com', '0174756444444', '$2y$10$g0W23oKOmm6/kumGYNLV6.6qTyu5JaHBQD8SIHAXzkihPJmXKQqXS', 'Malibag', '05/29/2000', 'B+', 'Dhaka', 'admin/img/customer/26072.jpeg', 1, '2023-12-17 03:52:00', '2024-02-11 13:19:43'),
(9, 'khan', 'khanpr2020@gmail.com', '0124454545', '$2y$10$f0W.7mcMWWTNbGykZpfX5OPxRKcl7E/4rbGF5dkh00q2qSdrQvyZu', NULL, NULL, NULL, NULL, NULL, 1, '2024-09-21 01:25:35', '2024-09-21 01:25:35'),
(10, 'khan', 'admin@admin.com', '01548484848', '$2y$10$WS.Sh9YfgXQxYvl4liHHwerWCu.ZSNDWuqxymILw49/k6gJBfq5cm', NULL, NULL, NULL, NULL, NULL, 1, '2024-09-25 02:23:08', '2024-09-25 02:23:08'),
(11, 'Gemma Whitehead', 'qelapopoz@mailinator.com', '6', '$2y$10$UTNBRENGsSKKer5Zw.L2ROB0EdrGqM.Q5TUqBlDSkjceBNNr60etO', NULL, NULL, NULL, NULL, NULL, 1, '2024-09-29 13:43:37', '2024-09-29 13:43:37'),
(12, 'Dennis Sharp', 'zoxycav@mailinator.com', '70', '$2y$10$w/8m25w2/jJLxDUXZRzLy.ZduMvy07BgTQZ5f9lP8JDg/UfVve0zC', NULL, NULL, NULL, NULL, NULL, 1, '2024-10-08 14:17:36', '2024-10-08 14:17:36'),
(13, 'Davis Sharp', 'doctor@demo.com', '01545454545', '$2y$10$QxuaV0tCJeJg67sspshnJeBztlbLjiFbYQzug1Ke19jGvKB2BnNGu', NULL, NULL, NULL, NULL, NULL, 1, '2024-10-24 14:37:38', '2024-10-24 14:37:38'),
(14, 'test', 'test1@gmail.com', '01701103784', '$2y$10$y6RWKOQH/b5JKlholI4X0uz3vPoTTT4bZC6.UNs3P/qGpPCdZenK6', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-12 03:07:43', '2025-02-12 03:07:43'),
(16, 'TechWebIT', 'tech@gmail.com', '01701103734', '$2y$10$2XfvAp9LJn2q24kv3Vq6uu.vxNMceb5lU6TjmuY/IAdpPNa6NmNXW', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-12 03:25:25', '2025-02-12 03:25:25'),
(17, 'Ross David', 'cujodizomi@mailinator.com', '+1 (156) 148-6568', '$2y$10$ldL6.LiXt2s0kqU6Ab89YedgzRAgPcj6b743DsxLRrynzJlbKYLMy', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-12 04:32:46', '2025-02-12 04:32:46'),
(18, 'test', 'sa@gmai.com', '0147852369', '$2y$10$WnnYDR9ZdWwoqFNvARbc9uNLryHvcY/EDCAPEmKK4kknAoCIs83ZS', 'test', '01/01/1970', NULL, NULL, 'admin/img/customer/12789.png', 1, '2025-02-12 06:49:44', '2025-02-12 09:48:07'),
(19, 'sagor', 'sagor@gmail.com', '01701108437', '$2y$10$wBY89y1pxjLu2Pq1BhxHHOEIFGi.wCgza7qkwfNhkRrhgZWcJu102', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-12 10:20:12', '2025-02-12 10:20:12'),
(22, 'test', 'test@gmail.com', '01701103786', '$2y$10$7ZKqQkz3dzq0J9GyZCf9bOq35fv8YtY/A.Z1Jg4/eDrXo09R5dARq', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-14 23:17:22', '2025-02-14 23:17:22'),
(23, 'sagor', 'sa@gmail.com', '0125648755', '$2y$10$P52Kb.pKeFzh3zi.UdD3feA6HFdIifYXWnjgP4RBEBbhBefqe18Q2', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-14 23:18:00', '2025-02-14 23:18:00'),
(24, 'Maite Velasquez', 'jamel@mailinator.com', 'Preston Duran', '$2y$10$nLW3JUffajwtj0j4QBgVxO442WJJTel8a.bLH5YJKPxN4oLlgjZPq', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-15 00:03:07', '2025-02-15 00:03:07'),
(25, 'Barrett Rhodes', 'qyfe@mailinator.com', 'Allen Ewing', '$2y$10$2I5BRkLLRSGUOOYmmP1cy.Iqum2DhjwgbZ6rfrwXgmDupK5xdm.Ji', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-15 00:37:37', '2025-02-15 00:37:37'),
(26, 'burhan', 'burhan@gmail.com', '0124563987', '$2y$10$PKYg1E1RQn3gC.dV3fr3kOdcisjHgoEWhuEeHZZyWzXIT/Ov9U.ai', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-16 03:29:04', '2025-02-16 03:29:04'),
(27, 'Xenos Mathews', 'saqet@mailinator.com', 'Fleur Michael', '$2y$10$WcczUYAnpvNuG5c20JrwTeeLrBZUURnUC7wO9pxhilIlvWfg5diTC', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-21 23:31:01', '2025-02-21 23:31:01'),
(28, '234', '234234', '234', '$2y$10$mSm7QeTRRcH3tPruwz0MhuTteSUrbnjz2sLbdStzqL37GDumBqu6C', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-22 09:51:21', '2025-02-22 09:51:21'),
(29, '2342', '234', '2342', '$2y$10$PTdKfflEpWD.WXbKY3eXCe7lBc.yXspXYy1GYSvmjQqUbJvCnJbpO', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-22 09:55:06', '2025-02-22 09:55:06'),
(30, 'sdfsd', 'sdfs', 'dfsd', '$2y$10$jEGsHRDo.ddVoY6ZZ/2IHuXjMqxWEYweS.k4iFtxtbnGCINFOTUPe', NULL, NULL, NULL, NULL, NULL, 1, '2025-02-22 09:57:29', '2025-02-22 09:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `custom_flowers`
--

DROP TABLE IF EXISTS `custom_flowers`;
CREATE TABLE IF NOT EXISTS `custom_flowers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `flower_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_flowers`
--

INSERT INTO `custom_flowers` (`id`, `flower_id`, `color_id`, `name`, `price`, `created_at`, `updated_at`, `order_id`, `quantity`) VALUES
(9, '9', '1', 'rose', '150', '2025-02-21 11:15:55', '2025-02-21 11:15:55', '0', 0),
(10, '9', '1', NULL, NULL, '2025-02-22 01:28:40', '2025-02-22 01:28:40', '1740209320', 1),
(11, '9', '1', NULL, NULL, '2025-02-22 01:29:31', '2025-02-22 01:29:31', '1740209371', 1),
(12, '9', '1', NULL, NULL, '2025-02-22 01:32:37', '2025-02-22 01:32:37', '1740209557', 1),
(13, '2', '1', NULL, NULL, '2025-02-22 01:42:42', '2025-02-22 01:42:42', '1740210162', 4),
(14, '2', '4', NULL, NULL, '2025-02-22 01:42:42', '2025-02-22 01:42:42', '1740210162', 4),
(15, '2', '4', NULL, NULL, '2025-02-22 01:42:42', '2025-02-22 01:42:42', '1740210162', 5),
(16, '2', '4', NULL, NULL, '2025-02-22 01:42:42', '2025-02-22 01:42:42', '1740210162', 1),
(17, '2', '1', NULL, '20', '2025-02-22 01:44:29', '2025-02-22 01:44:29', '1740210269', 1),
(18, '2', '1', NULL, '10', '2025-02-22 01:45:35', '2025-02-22 01:45:35', '1740210335', 5),
(19, '2', '4', NULL, '10', '2025-02-22 01:45:35', '2025-02-22 01:45:35', '1740210335', 5),
(20, '2', '4', NULL, '20', '2025-02-22 01:45:35', '2025-02-22 01:45:35', '1740210335', 2),
(21, '6', '4', NULL, '25', '2025-02-22 09:55:06', '2025-02-22 09:55:06', '1', 1),
(22, '6', '4', NULL, '25', '2025-02-22 09:55:06', '2025-02-22 09:55:06', '1', 1),
(23, '6', '1', NULL, '1000', '2025-02-22 09:57:30', '2025-02-22 09:57:30', '2', 100);

-- --------------------------------------------------------

--
-- Table structure for table `custom_flower_orders`
--

DROP TABLE IF EXISTS `custom_flower_orders`;
CREATE TABLE IF NOT EXISTS `custom_flower_orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint NOT NULL,
  `repper_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_flower_orders`
--

INSERT INTO `custom_flower_orders` (`id`, `order_id`, `customer_id`, `repper_id`, `ip_address`, `total_price`, `total_quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, '1740239706', 29, '0', '127.0.0.1', '50', '2', 'pending', '2025-02-22 09:55:06', '2025-02-22 09:55:06'),
(2, '1740239849', 30, '5', '127.0.0.1', '4000', '100', 'pending', '2025-02-22 09:57:30', '2025-02-22 09:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'How to buy a product?', '<p><span style=\"color: rgb(0, 0, 0); font-family: Urbanist, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</span></p>', '2025-02-11 01:58:35', '2025-02-11 01:58:35'),
(3, 'How can i make refund from your website?', '<p><span style=\"color: rgb(0, 0, 0); font-family: Urbanist, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</span></p>', '2025-02-11 02:05:53', '2025-02-11 02:05:53'),
(4, 'test', '<p>test</p>', '2025-02-11 02:09:42', '2025-02-11 02:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'HeadPhone 21', 'admin/img/feature-images/1703399976.jpg', 0, '2023-12-24 00:39:06', '2024-02-11 22:53:15'),
(3, 'Free Shipping', 'admin/img/feature-images/1707713471.png', 1, '2024-02-11 22:51:11', '2024-02-11 22:51:11'),
(4, 'Online Order', 'admin/img/feature-images/1707713711.png', 1, '2024-02-11 22:55:11', '2024-02-11 22:55:11'),
(5, '24/7 Support', 'admin/img/feature-images/1707713780.png', 1, '2024-02-11 22:56:20', '2024-02-11 22:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

DROP TABLE IF EXISTS `flowers`;
CREATE TABLE IF NOT EXISTS `flowers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(2, 'Rose', 'admin/images/1739999381.png', '2025-02-19 15:09:41', '2025-02-19 15:09:41'),
(5, 'sunflower', 'admin/images/1740036414.png', '2025-02-20 01:26:54', '2025-02-20 01:26:54'),
(6, 'bely', 'admin/images/1740235837.jpg', '2025-02-22 08:50:37', '2025-02-22 08:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `flower_attributes`
--

DROP TABLE IF EXISTS `flower_attributes`;
CREATE TABLE IF NOT EXISTS `flower_attributes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `flower_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flower_attributes`
--

INSERT INTO `flower_attributes` (`id`, `flower_id`, `color_id`, `price`, `created_at`, `updated_at`) VALUES
(2, '2', '4', '10', '2025-02-21 11:15:55', '2025-02-21 11:15:55'),
(3, '2', '1', '20', '2025-02-21 11:15:55', '2025-02-21 11:15:55'),
(4, '6', '5', '45', '2025-02-22 08:50:37', '2025-02-22 08:50:37'),
(5, '6', '4', '25', '2025-02-22 08:50:37', '2025-02-22 08:50:37'),
(6, '6', '1', '10', '2025-02-22 08:50:37', '2025-02-22 08:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `flower_colors`
--

DROP TABLE IF EXISTS `flower_colors`;
CREATE TABLE IF NOT EXISTS `flower_colors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flower_colors`
--

INSERT INTO `flower_colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'red', '2025-02-19 15:04:41', '2025-02-19 15:04:41'),
(4, 'white', '2025-02-19 23:40:19', '2025-02-19 23:40:19'),
(5, 'blue', '2025-02-21 10:54:21', '2025-02-21 10:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_19_082748_create_sessions_table', 1),
(7, '2023_10_19_102335_create_categories_table', 1),
(8, '2023_10_26_034037_create_brands_table', 1),
(9, '2023_10_26_085913_create_sub_categories_table', 1),
(10, '2023_10_31_085300_create_units_table', 1),
(11, '2023_10_31_085311_create_colors_table', 1),
(12, '2023_10_31_085331_create_sizes_table', 1),
(13, '2023_11_02_050424_create_products_table', 1),
(14, '2023_11_02_082603_create_product_colors_table', 1),
(15, '2023_11_02_082613_create_product_sizes_table', 1),
(16, '2023_11_02_083551_create_product_images_table', 1),
(17, '2023_11_14_074532_create_product_offers_table', 2),
(18, '2023_11_26_102049_create_customers_table', 3),
(19, '2023_11_26_102105_create_orders_table', 3),
(20, '2023_11_26_102126_create_order_details_table', 3),
(22, '2023_12_18_163348_create_wish_lists_table', 4),
(24, '2023_12_21_093848_add_courier_id_column_to_orders_table', 5),
(25, '2023_12_24_040659_create_features_table', 5),
(26, '2023_12_24_051803_add_courier_id_column_to_orders_table', 6),
(27, '2023_12_24_052114_create_features_table', 7),
(28, '2023_12_24_061223_create_couriers_table', 8),
(32, '2023_12_26_093737_add_mobile_column_to_users_table', 9),
(33, '2023_12_26_094110_add_role_column_to_users_table', 9),
(34, '2024_01_02_063829_create_ads_table', 10),
(37, '2024_01_04_093218_create_settings_table', 11),
(38, '2024_01_14_081508_create_purchase_guides_table', 12),
(39, '2024_01_14_081630_create_shipping_policies_table', 12),
(40, '2024_01_14_081738_create_return_policies_table', 12),
(41, '2024_01_14_081746_create_privacy_policies_table', 12),
(42, '2024_01_14_091217_add_discount_amount_column_product_offers_table', 12),
(43, '2024_01_16_035148_create_privacy_policies_table', 13),
(44, '2024_01_16_035159_create_return_policies_table', 13),
(45, '2024_01_16_035219_create_shipping_policies_table', 13),
(46, '2024_01_16_035232_create_purchase_guides_table', 13),
(47, '2024_01_16_042245_create_terms_conditions_table', 13),
(48, '2024_01_16_042600_create_about_us_table', 13),
(49, '2024_01_16_042609_create_contact_us_table', 13),
(50, '2024_01_16_085254_create_vendors_table', 14),
(51, '2024_01_21_071042_add_vendor_id_column_to_products_table', 15),
(52, '2024_09_24_163251_create_product_variants_table', 16),
(53, '2025_02_04_183651_create_addto_carts_table', 17),
(54, '2025_02_06_054735_create_shipping_fees_table', 18),
(55, '2025_02_11_072828_create_faqs_table', 19),
(58, '2025_02_19_194017_create_custom_flowers_table', 20),
(59, '2025_02_19_202426_create_flowers_table', 20),
(60, '2025_02_19_202914_create_flower_colors_table', 21),
(61, '2025_02_20_114512_create_reapers_table', 22),
(62, '2025_02_21_170548_create_flower_attributes_table', 23),
(63, '2025_02_22_152416_create_custom_flower_orders_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `track_id` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_total` int DEFAULT NULL,
  `tax_total` int DEFAULT NULL,
  `shipping_total` int DEFAULT NULL,
  `order_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order_timestamp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `delivery_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `delivery_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_method` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payment_amount` int NOT NULL DEFAULT '0',
  `payment_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payment_timestamp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'BDT.',
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `courier_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `track_id`, `order_total`, `tax_total`, `shipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `payment_method`, `payment_amount`, `payment_date`, `payment_timestamp`, `payment_status`, `currency`, `transaction_id`, `created_at`, `updated_at`, `courier_id`) VALUES
(95, 17, 'radian-FDBC2931', 6000, NULL, NULL, NULL, NULL, 'Pending', 'test', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:19:31', '2025-02-12 06:19:31', 0),
(96, 17, 'radian-24AE3607', 4500, NULL, NULL, NULL, NULL, 'Pending', 'new place', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:20:59', '2025-02-12 06:20:59', 0),
(97, 17, 'radian-CB5AB864', 4500, NULL, NULL, NULL, NULL, 'Pending', 'new place', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:21:23', '2025-02-12 06:21:23', 0),
(98, 17, 'radian-0A0193A4', 4500, NULL, NULL, NULL, NULL, 'Pending', 'new place', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:23:49', '2025-02-12 06:23:49', 0),
(99, 17, 'radian-58389A12', 1500, NULL, NULL, NULL, NULL, 'Pending', 'test', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:25:25', '2025-02-12 06:25:25', 0),
(100, 17, 'radian-9730E46C', 1500, NULL, NULL, NULL, NULL, 'Pending', 'test', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:27:14', '2025-02-12 06:27:14', 0),
(101, 17, 'radian-2FAB98B9', 1500, NULL, NULL, NULL, NULL, 'Pending', 'testaga', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:27:27', '2025-02-12 06:27:27', 0),
(102, 17, 'radian-3C9B80E9', 1500, NULL, NULL, NULL, NULL, 'Pending', 'test', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:32:49', '2025-02-12 06:32:49', 0),
(103, 17, 'radian-6CB81131', 1500, NULL, NULL, NULL, NULL, 'Pending', 'asdfasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:43:27', '2025-02-12 06:43:27', 0),
(104, 17, 'radian-DD0BB758', 0, NULL, NULL, NULL, NULL, 'Pending', 'my first order', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:45:38', '2025-02-12 06:45:38', 0),
(105, 17, 'radian-433A2AF6', 2500, NULL, NULL, NULL, NULL, 'Complete', 'test', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:47:19', '2025-02-12 13:24:16', 0),
(106, 18, 'radian-2381CC1D', 1500, NULL, NULL, NULL, NULL, 'Complete', 'sajadpur ,Badda', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:49:44', '2025-02-12 13:24:16', 0),
(107, 18, 'radian-56510F78', 1500, NULL, NULL, NULL, NULL, 'Complete', 'sasss', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 06:52:49', '2025-02-12 13:24:16', 0),
(108, 19, 'radian-2614B95D', 1500, NULL, NULL, NULL, NULL, 'Complete', 'test', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-12 10:22:30', '2025-02-12 13:24:16', 0),
(109, 22, 'radian-0F09D7FD', 1500, NULL, NULL, NULL, NULL, 'Pending', 'sajadpur ,Badda', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:17:22', '2025-02-14 23:17:22', 0),
(110, 23, 'radian-061B6291', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:18:00', '2025-02-14 23:18:00', 0),
(111, 23, 'radian-B9F5B0D0', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:18:56', '2025-02-14 23:18:56', 0),
(112, 23, 'radian-5A344387', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:25:00', '2025-02-14 23:25:00', 0),
(113, 23, 'radian-E2A3AE3C', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:28:18', '2025-02-14 23:28:18', 0),
(114, 23, 'radian-405B6138', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:28:49', '2025-02-14 23:28:49', 0),
(115, 23, 'radian-EBA0C4FF', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:33:36', '2025-02-14 23:33:36', 0),
(116, 23, 'radian-3248DDFE', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:54:49', '2025-02-14 23:54:49', 0),
(117, 23, 'radian-579E1293', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-14 23:55:32', '2025-02-14 23:55:32', 0),
(118, 23, NULL, 1500, NULL, NULL, '2025-02-15', '1739577600', 'Pending', NULL, 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT', '67b02c546a3ed', NULL, NULL, 0),
(119, 23, 'radian-A1B660EA', 1500, NULL, NULL, NULL, NULL, 'Pending', 'fasdf', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-15 00:02:17', '2025-02-15 00:02:17', 0),
(120, 23, NULL, 1500, NULL, NULL, '2025-02-15', '1739577600', 'Pending', NULL, 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT', '67b02de955743', NULL, NULL, 0),
(121, 24, 'radian-371C5D38', 2100, NULL, NULL, NULL, NULL, 'Pending', 'Anim sed eum aliquip', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-15 00:03:07', '2025-02-15 00:03:07', 0),
(122, 24, NULL, 2100, NULL, NULL, '2025-02-15', '1739577600', 'Pending', NULL, 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT', '67b02e1b9a229', NULL, NULL, 0),
(123, 25, 'radian-724D8C21', 182, NULL, NULL, NULL, NULL, 'Pending', 'Fugit incidunt mod', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-15 00:37:37', '2025-02-15 00:37:37', 0),
(124, 26, 'radian-978C5532', 1500, NULL, NULL, NULL, NULL, 'Pending', 'sajadpur ,Badda', 'Pending', 'ssl', 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-16 03:31:54', '2025-02-16 03:31:54', 0),
(125, 27, 'radian-B7CED1BA', 1500, NULL, NULL, NULL, NULL, 'Pending', 'Sunt cumque lorem re', 'Pending', NULL, 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-21 23:31:01', '2025-02-21 23:31:01', 0),
(126, 27, 'radian-79F3B8EA', 1500, NULL, NULL, NULL, NULL, 'Pending', 'Sunt cumque lorem re', 'Pending', 'ssl', 0, NULL, NULL, 'Pending', 'BDT.', NULL, '2025-02-21 23:31:13', '2025-02-21 23:31:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `flavor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pound` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int NOT NULL,
  `product_qty` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `flavor`, `pound`, `product_price`, `product_qty`, `img`, `created_at`, `updated_at`) VALUES
(103, 105, 4, 'High Heels', NULL, NULL, 2500, 1, 'admin/img/product-img/1738403099.jpg', '2025-02-12 06:47:19', '2025-02-12 06:47:19'),
(104, 106, 1, 'School Bag sd', 'bluevary', 'Pounds-6', 1500, 1, 'admin/img/product-img/1738403136.jpg', '2025-02-12 06:49:44', '2025-02-12 06:49:44'),
(105, 107, 2, 'Office Bag', NULL, '1 pcs', 1500, 1, 'admin/img/product-img/1738403086.jpg', '2025-02-12 06:52:49', '2025-02-12 06:52:49'),
(106, 108, 1, 'School Bag sd', 'coclate', 'Pounds-6', 1500, 1, 'admin/img/product-img/1738403136.jpg', '2025-02-12 10:22:30', '2025-02-12 10:22:30'),
(107, 119, 1, 'School Bag sd', NULL, NULL, 1500, 1, 'admin/img/product-img/1738403136.jpg', '2025-02-15 00:02:17', '2025-02-15 00:02:17'),
(108, 121, 5, 'Casual Wear', NULL, NULL, 2100, 1, 'admin/img/product-img/1738403153.jpg', '2025-02-15 00:03:08', '2025-02-15 00:03:08'),
(109, 123, 26, 'Phoebe Melton', NULL, NULL, 182, 1, 'admin/img/product-img/1739123348.jpg', '2025-02-15 00:37:37', '2025-02-15 00:37:37'),
(110, 124, 1, 'School Bag sd', 'coclate', 'Pounds-6', 1500, 1, 'admin/img/product-img/1738403136.jpg', '2025-02-16 03:31:54', '2025-02-16 03:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$mCGXyxFGGIr75pnL528Ba.TS/.gof4gnwmt86wBsR/g1GLBEFiLOq', '2024-10-01 08:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

DROP TABLE IF EXISTS `privacy_policies`;
CREATE TABLE IF NOT EXISTS `privacy_policies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:24:47', '2024-01-15 23:24:47'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:27:17', '2024-01-15 23:27:17');
INSERT INTO `privacy_policies` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, '<div class=\"footer-container-box footerContent\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin: 50px 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px; color: rgb(70, 70, 70); font-size: 14px;\"><div id=\"lesser-footer\" class=\"font-fix  footerHidden\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px; display: -webkit-box; overflow: hidden; -webkit-line-clamp: 5; -webkit-box-orient: vertical; width: 1280px; max-width: 1280px; margin: 0px auto;\"><h1 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-size: 18px; font-weight: 600;\">FlowerAura: Send Flowers, Cakes, Gifts &amp; Plants Online Across India</h1><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">At FlowerAura, we take pride in delivering the highest quality flowers, cakes, plants, and gifts to your loved ones. Our diverse range ensures there\'s something perfect for every occasion. From romantic roses to delightful chocolate cakes and vibrant indoor plants, we have it all. As India\'s most trusted gifting brand, we guarantee fresh and beautiful flowers, delicious cakes, vibrant plants, and unique gifts that bring joy and smiles. Enjoy the convenience of doorstep delivery with our safe and secure packaging, ensuring your order arrives in pristine condition. Let’s explore our collection a little better:</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Flowers</span>: At FlowerAura, we offer a stunning range of&nbsp;<a href=\"https://www.floweraura.com/flowers/bouquet\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">flower bouquets</a>&nbsp;and arrangements. Choose from a variety of flowers like roses, carnations, sunflowers, orchids, and gerberas. For something special, explore our&nbsp;<a href=\"https://www.floweraura.com/flowers/luxury\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">luxury flowers</a>&nbsp;like Cape Cup, Taal palm, Limonium, and Eucalyptus. Our reliable&nbsp;<a href=\"https://www.floweraura.com/\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">flower delivery in india</a>&nbsp;service ensures your flowers are handled with care and arrive fresh and beautiful.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Cakes</span>: Our freshly baked &amp; delicious cakes are FSSAI-certified, ensuring safety and quality. We offer a wide range of flavours, such as chocolate, black forest, red velvet, tiramisu, coffee, blueberry, and various cake types, including bomb cakes,&nbsp;<a href=\"https://www.floweraura.com/cakes/designer\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">designer cakes</a>&nbsp;theme cakes, photo cakes, pinata cakes, fruit cakes, &amp; bento cakes. Our&nbsp;<a href=\"https://www.floweraura.com/cakes\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">online cake delivery</a>&nbsp;service guarantees safe and timely delivery.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Plants</span>: At FlowerAura, we understand the need of&nbsp;<a href=\"https://www.floweraura.com/plants/indoor\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">plants for home</a>&nbsp;and offer an extensive range of plants to brighten your indoor spaces. Our plants are not just healthy but also come potted in beautiful planters that add a touch of elegance to any space. With FlowerAura\'s doorstep&nbsp;<a href=\"https://www.floweraura.com/plants/same-day-delivery\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">plants delivery same day</a>, you can enjoy the convenience of having your plants delivered safely and swiftly.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Gifts</span>: Finding new and trendy gift ideas can be challenging, but we cater to that need with an amazing gift range. Our variety includes gifts under categories such as home decor, dining &amp; serving, jewellery, showpieces, candles, spiritual gifts, soft toys, and perfumes. We also offer a wide range of heart-warming personalised gifts like mugs, cushions, wooden planks, photo frames, LED lamps, neon lights, caricatures, key chains, bar accessories, sippers, bottles, and more. One can also explore and order&nbsp;<a href=\"https://www.floweraura.com/gifts\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">gifts online</a>&nbsp;based on the occasion and the relationships they want to pamper.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Combos &amp; Hampers</span>: At FlowerAura, we recognise the joy of gifting and offer an exquisite range of combos and hampers to make every occasion special. From delightful&nbsp;<a href=\"https://www.floweraura.com/combos/flowers-and-cakes\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">cakes and flowers combos</a>&nbsp;to charming plant &amp; cake pairings and even elegant flower &amp; plant combos, we have something to suit every taste and preference. Our thoughtfully curated hampers, filled with premium goodies, are designed to delight your loved ones and add a touch of elegance to your celebrations.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Personalised Gifts</span>: Every gift should reflect your unique bond with your loved ones. That\'s why we offer a stunning collection of&nbsp;<a href=\"https://www.floweraura.com/personalised-gifts\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">personalised gifts</a>, perfect for adding a personal touch to any occasion. From custom mugs, cushions, and water bottles to creative caricatures, diaries, coasters, fridge magnets, key chains, and more, our range is designed to make every moment memorable. Our seamless delivery service ensures that your personalised gifts reach their destination on the same day, bringing joy and a heartfelt connection to your special ones.</p><h2 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-weight: 600; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 18px;\">Shop &amp; Send Gifts Online On Different Occasions to Surprise Your Loved Ones</h2><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">Every special moment in life deserves to be celebrated with love and thoughtfulness. At FlowerAura, the perfect gift can transform any occasion into a cherished memory.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Birthday:</span>&nbsp;Surprise your loved ones with&nbsp;<a href=\"https://www.floweraura.com/birthday\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">birthday gifts</a>&nbsp;that bring joy and happiness. Explore a variety of options, including cakes, personalised gifts, and combos, to create lasting memories on their special day.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Anniversary:</span>&nbsp;Mark your milestones with meaningful&nbsp;<a href=\"https://www.floweraura.com/anniversary\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">anniversary gifts</a>. Whether it’s flowers, cakes, or personalised keepsakes, our selection will help you celebrate your love and create beautiful memories together.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">New Year :</span>&nbsp;Celebrate the start of a new year with our exclusive collection of&nbsp;<a href=\"https://www.floweraura.com/new-year\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">New Year Gifts</a>&nbsp;and Cakes! Choose from personalized presents and mouthwatering&nbsp;<a href=\"https://www.floweraura.com/new-year/cakes\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">new year cakes</a>&nbsp;to add joy to your celebrations. Explore our newest arrivals and make this New Year unforgettable for your loved ones!</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Valentine’s Day:</span>&nbsp;Make your soulmate feel the most special person with romantic&nbsp;<a href=\"https://www.floweraura.com/valentine\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Valentine Day gifts</a>&nbsp;that speak from the heart. Pick from blooming beautiful flowers and gourmet chocolates to unique personalised gifts. Express your love and affection with a surprise that feels like a warm hug!</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">At FlowerAura, we cater to all occasions and have the best gifts that reflect your love and thoughtfulness, making every celebration unforgettable. Choose FlowerAura for your special moments, and let us help you create lasting memories with the perfect gift for every occasion.</p><h2 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-weight: 600; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 18px;\">Explore &amp; Order Online Special Festive Occasion Gifts</h2><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">Festive moments in life deserve to be celebrated with love and thoughtfulness. At FlowerAura, we believe that the perfect gift can transform any celebration into a cherished memory. That\'s why our range includes something for every festival and every relationship, ensuring your gift is as unique as your bond.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Christmas:</span>&nbsp;Spread the warmth of Christmas with our&nbsp;<a href=\"https://www.floweraura.com/christmas\" title=\"gifts for Xmas\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">special Christmas gifts</a>. From beautifully decorated&nbsp;<a href=\"https://www.floweraura.com/christmas/cakes\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Christmas cakes</a>&nbsp;to charming gift hampers and personalised items, we have everything to make your celebrations magical.</p><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">At FlowerAura, we cater to all festive occasions and have the best gifts that reflect your love and thoughtfulness, making every celebration unforgettable. Choose FlowerAura for your festive moments, and let us help you create lasting memories with the perfect gift for every occasion.</p><h2 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-weight: 600; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 18px;\">Never Miss Out on Celebrations with FlowerAura On-time Delivery</h2><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">At FlowerAura, we understand the importance of timely surprises in making every celebration unforgettable. With our reliable same-day delivery and midnight delivery services, you can rest assured that your thoughtful gifts will reach their destination on time, no matter the occasion. Whether it\'s our delightful range of cakes, stunning floral arrangements, personalised gifts, or carefully curated combos, we ensure your loved ones receive their surprises when it matters most. From birthdays and anniversaries to festive occasions like Raksha Bandhan and Diwali, FlowerAura\'s on-time delivery guarantees you never miss out on making your moments truly special.</p><h2 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-weight: 600; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 18px;\">Save Big with FlowerAura\'s Exclusive Offers and Discounts</h2><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">At FlowerAura, we believe in making gifting easy and affordable for everyone. That\'s why we keep dropping special offers throughout the year, ensuring you always have the perfect gift at the best price. Whether it\'s a birthday, anniversary, or just because, our exclusive discounts and year-round offers help you save big while spreading joy. Explore our wide range of flowers, cakes, and personalised gifts, and enjoy significant savings on every purchase. With&nbsp;<a href=\"https://www.floweraura.com/coupon-deals\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">FlowerAura Coupons</a>, you can make every moment special without breaking the bank. Stay tuned for more exciting deals, and start gifting today! Check out our late cups and deals!</p><h2 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-weight: 600; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 18px;\">Unleash the Power of Gifting: Install Our Android &amp; iOS App Today</h2><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\">Gifts hold the magical ability to convey emotions that words alone may struggle to express. FlowerAura understands the profound importance of gifting in our lives. That\'s why we bring you an extraordinary feature-packed App, available for Android and iOS devices, to experience the joy of gifting like never before. Our user-friendly app is your on-the-go companion for shopping for online gifts. Offering seamless navigation, it allows for easy browsing of our diverse collection. With&nbsp;<a href=\"https://www.floweraura.com/download-app\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">FlowerAura App</a>, you can keep track of your orders and stay updated with notifications on ongoing offers and deals for the best finds at unbeatable prices. So, download it now and start spreading smiles!</p><h2 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-weight: 600; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 18px;\">Avail Flower Delivery Service In Below Mentioned Cities</h2><p style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px 0px 10px; line-height: 21px; margin: 10px 0px; text-align: justify;\"><a href=\"https://www.floweraura.com/sendflowers/bangalore\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Send Flowers to Bangalore</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/mumbai\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Flowers Delivery in Mumbai</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/delhi\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Online Flower Delivery in Delhi</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/pune\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Send Flowers to Pune</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/gurgaon\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Same Day Flowers Delivery in Gurgaon</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/hyderabad\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Flowers Delivery in Hyderabad</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/kolkata\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Online Flower Delivery in Kolkata</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/chennai\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Flowers Delivery in Chennai</a>&nbsp;|&nbsp;<a href=\"https://www.floweraura.com/sendflowers/noida\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Send Flowers to Noida</a></p></div><div class=\"readMore\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; width: fit-content; max-width: 1280px; margin: 20px auto auto; cursor: pointer; color: rgb(25, 120, 137); line-height: 23.8px; letter-spacing: 0.02em; text-align: center; text-decoration-line: underline; text-decoration-style: solid; text-decoration-skip-ink: none;\">Read More</div></div><div class=\"blog-container-box asss\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(70, 70, 70); font-size: 14px;\"><div class=\"prod-category card-blog\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin: 0px auto auto; background: none; padding: 0px; width: 1280px; max-width: 1280px;\"><div class=\"heading\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin: 0px; font-weight: 600; font-size: 24px; font-stretch: normal; line-height: normal; color: rgb(28, 33, 32);\">Related Blog</div><ul style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; list-style-position: initial; list-style-image: initial; padding-inline-start: 0px; margin-top: 22px; text-wrap-mode: nowrap; overflow: initial;\"><li style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin-right: 12.8px; padding: 0px; display: inline-block; text-align: left; vertical-align: top; text-wrap-mode: wrap; width: 403.2px; margin-top: 0px !important; margin-bottom: 20px !important; margin-left: 0px !important; max-width: none !important; float: none !important;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none;\"><img src=\"https://imgcdn.floweraura.com/How-to-Choose-the-Best-Flower-Shop-Delivery-Service-Near-You--Blog-Cover-D.jpg\" loading=\"lazy\" alt=\"How to Choose the Best Flower Shop Delivery Service Near You\" srcset=\"https://imgcdn.floweraura.com/How-to-Choose-the-Best-Flower-Shop-Delivery-Service-Near-You--Blog-Cover-D.jpg?tr=w-404,h-202,q-70 1x,https://imgcdn.floweraura.com/How-to-Choose-the-Best-Flower-Shop-Delivery-Service-Near-You--Blog-Cover-D.jpg?tr=w-404,h-202,dpr-1.5,q-70 1.5x,https://imgcdn.floweraura.com/How-to-Choose-the-Best-Flower-Shop-Delivery-Service-Near-You--Blog-Cover-D.jpg?tr=w-404,h-202,dpr-1.75,q-70 2x\" title=\"How to Choose the Best Flower Shop Delivery Service Near You\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; border-radius: 8px; display: inline; width: 403.2px; height: 201.6px;\"></span><div class=\"blog-title\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin-bottom: 10px;\"><span class=\"field-content\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">How to Choose the Best Flower Shop Delivery Service Near You</span></div><div class=\"blog-body\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; line-height: 21px;\"><div class=\"field-content\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; text-align: justify;\">Did you know that 75% of people say receiving flowers instantly improves their mood? Flowers have the power to brighten anyone’s day, turning ordinary moments into cherished memories. But for</div><a href=\"https://www.floweraura.com/blog/best-flower-shop-delivery-service-near-you\" class=\"views-more-link\" target=\"_self\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Read More...</a></div></li><li style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin-right: 12.8px; margin-left: 12.8px; padding: 0px; display: inline-block; text-align: left; vertical-align: top; text-wrap-mode: wrap; width: 403.2px; margin-top: 0px !important; margin-bottom: 20px !important; max-width: none !important; float: none !important;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none;\"><img src=\"https://imgcdn.floweraura.com/how-international-flower-delivery-works-cover-D.jpg\" loading=\"lazy\" alt=\"Sending Blooms Across Borders: How International Flower Delivery Works\" srcset=\"https://imgcdn.floweraura.com/how-international-flower-delivery-works-cover-D.jpg?tr=w-404,h-202,q-70 1x,https://imgcdn.floweraura.com/how-international-flower-delivery-works-cover-D.jpg?tr=w-404,h-202,dpr-1.5,q-70 1.5x,https://imgcdn.floweraura.com/how-international-flower-delivery-works-cover-D.jpg?tr=w-404,h-202,dpr-1.75,q-70 2x\" title=\"Sending Blooms Across Borders: How International Flower Delivery Works\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; border-radius: 8px; display: inline; width: 403.2px; height: 201.6px;\"></span><div class=\"blog-title\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin-bottom: 10px;\"><span class=\"field-content\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Sending Blooms Across Borders: How International Flower Delivery Works</span></div><div class=\"blog-body\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; line-height: 21px;\"><div class=\"field-content\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; text-align: justify;\">Flowers have always been a meaningful token, whether to celebrate a milestone, offer sympathy, or simply express love. Over time, gifting blooms has become a common way to show you</div><a href=\"https://www.floweraura.com/blog/sending-blooms-across-borders-how-international-flower-delivery-works\" class=\"views-more-link\" target=\"_self\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Read More...</a></div></li><li style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin-right: 12.8px; margin-left: 12.8px; padding: 0px; display: inline-block; text-align: left; vertical-align: top; text-wrap-mode: wrap; width: 403.2px; margin-top: 0px !important; margin-bottom: 20px !important; max-width: none !important; float: none !important;\"><span style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none;\"><img src=\"https://imgcdn.floweraura.com/BLOG-654-COVER%20IMAGE-D.jpg\" loading=\"lazy\" alt=\"Why Same Day Flower Delivery is a Game-Changer for Last-Minute Gifts\" srcset=\"https://imgcdn.floweraura.com/BLOG-654-COVER%20IMAGE-D.jpg?tr=w-404,h-202,q-70 1x,https://imgcdn.floweraura.com/BLOG-654-COVER%20IMAGE-D.jpg?tr=w-404,h-202,dpr-1.5,q-70 1.5x,https://imgcdn.floweraura.com/BLOG-654-COVER%20IMAGE-D.jpg?tr=w-404,h-202,dpr-1.75,q-70 2x\" title=\"Why Same Day Flower Delivery is a Game-Changer for Last-Minute Gifts\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; border-radius: 8px; display: inline; width: 403.2px; height: 201.6px;\"></span><div class=\"blog-title\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin-bottom: 10px;\"><span class=\"field-content\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-weight: 600;\">Why Same Day Flower Delivery is a Game-Changer for Last-Minute Gifts</span></div><div class=\"blog-body\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; line-height: 21px;\"><div class=\"field-content\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; text-align: justify;\">Flowers have long been a symbol of love, care, and thoughtfulness, making them a perfect gift for any occasion. From expressing love and gratitude to offering condolences or congratulations, flowers</div><a href=\"https://www.floweraura.com/blog/why-same-day-flower-delivery-game-changer-last-minute-gifts\" class=\"views-more-link\" target=\"_self\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; color: rgb(25, 120, 137);\">Read More...</a></div></li></ul></div></div><p></p>', 1, '2025-02-17 04:31:50', '2025-02-17 04:31:50');
INSERT INTO `privacy_policies` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, '<div class=\"footer-container-box footerContent\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; margin: 50px 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px; color: rgb(70, 70, 70); font-size: 14px;\"><div id=\"lesser-footer\" class=\"font-fix  footerHidden\" style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; padding: 0px; display: -webkit-box; overflow: hidden; -webkit-line-clamp: 5; -webkit-box-orient: vertical; width: 1280px; max-width: 1280px; margin: 0px auto;\"><h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; text-align: left;\">Why do we use it?</h2><h1 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-size: 18px; font-weight: 600;\"><div style=\"margin: 0px 28.8px 0px 14.4px; padding: 0px; width: 436.8px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 400;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br style=\"margin: 0px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 400; text-align: center;\"></h1><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2><h1 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-size: 18px; font-weight: 600;\"><div style=\"margin: 0px 14.4px 0px 28.8px; padding: 0px; width: 436.8px; float: left; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 400;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div></h1><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2><h1 style=\"--tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; appearance: none; font-family: Poppins, sans-serif; font-size: 18px; font-weight: 600;\"><div style=\"margin: 0px 28.8px 0px 14.4px; padding: 0px; width: 436.8px; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-weight: 400;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div></h1></div></div><p></p>', 1, '2025-02-17 04:38:18', '2025-02-17 04:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `sub_category_id` int NOT NULL,
  `brand_id` int DEFAULT NULL,
  `unit_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` double(11,2) NOT NULL,
  `selling_price` double(11,2) NOT NULL,
  `stock_amount` int NOT NULL DEFAULT '0',
  `hit_count` int NOT NULL DEFAULT '0',
  `sales_count` int NOT NULL DEFAULT '0',
  `featured_status` tinyint NOT NULL DEFAULT '1',
  `is_variant` int DEFAULT '0' COMMENT '1=on ,0=off',
  `status` tinyint NOT NULL DEFAULT '1',
  `free_delivery` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vendor_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `short_description`, `long_description`, `image`, `regular_price`, `selling_price`, `stock_amount`, `hit_count`, `sales_count`, `featured_status`, `is_variant`, `status`, `free_delivery`, `created_at`, `updated_at`, `vendor_id`) VALUES
(1, 1, 1, NULL, NULL, 'School Bag sd', 'SB-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.s', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.</pre><p></p>', 'admin/img/product-img/1738403136.jpg', 2000.00, 1500.00, 100, 0, 0, 1, 1, 1, '1', '2023-11-13 21:56:25', '2025-02-10 11:08:56', 0),
(2, 1, 2, NULL, NULL, 'Office Bag', 'OB-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p></p>', 'admin/img/product-img/1738403086.jpg', 2000.00, 1500.00, 50, 0, 0, 1, 1, 1, '1', '2023-11-13 22:05:03', '2025-02-09 11:47:48', 0),
(3, 2, 3, NULL, NULL, 'Sneakers', 'SN-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p></p>', 'admin/img/product-img/1738403046.jpg', 3000.00, 2000.00, 30, 0, 0, 1, 0, 1, '0', '2023-11-13 22:07:13', '2025-02-01 03:44:06', 0),
(4, 2, 4, NULL, NULL, 'High Heels', 'HH-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1738403099.jpg', 3500.00, 2500.00, 100, 0, 0, 1, 0, 1, '0', '2023-11-13 22:10:31', '2025-02-01 03:44:59', 0),
(5, 3, 5, NULL, NULL, 'Casual Wear', 'CW-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1738403153.jpg', 2200.00, 2100.00, 70, 0, 0, 1, 0, 1, '1', '2023-11-13 22:13:20', '2025-02-09 11:48:06', 0),
(6, 3, 6, NULL, NULL, 'Formal Attire', 'FA-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1738403172.jpg', 5000.00, 4500.00, 30, 0, 0, 1, 0, 1, '0', '2023-11-13 22:15:41', '2025-02-01 03:46:12', 0),
(7, 2, 4, NULL, NULL, 'Smartphones', 'SP-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1738403209.jpg', 35000.00, 30000.00, 500, 0, 0, 1, 0, 1, '0', '2023-11-13 22:18:02', '2025-02-01 03:46:49', 0),
(8, 3, 6, NULL, NULL, 'Laptops', 'L-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1738403248.jpg', 70000.00, 68000.00, 50, 0, 0, 1, 0, 1, '0', '2023-11-13 22:21:15', '2025-02-01 03:47:28', 0),
(9, 5, 9, 9, 5, 'Wall Art', 'WA-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699935938.jpg', 5000.00, 4500.00, 20, 0, 0, 1, 0, 1, '0', '2023-11-13 22:25:38', '2023-11-13 22:25:38', 0),
(10, 5, 10, 10, 7, 'Decorative Pillows', 'DP-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\">Prior to the innovations of <a href=\"https://en.wikipedia.org/wiki/Franco_of_Cologne\" title=\"Franco of Cologne\">Franco of Cologne</a>\r\n in the mid-thirteenth century, the value of the longa was in common \r\nusage in both theoretical and practical sources but appeared primarily \r\nin <a href=\"https://en.wikipedia.org/wiki/Mensural_notation#Ligatures\" title=\"Mensural notation\">pre-mensural notation ligatures</a>,\r\n symbols representing two or more notes joined together. A ligature that\r\n began with a longa was said to lack \"propriety\", while ligatures ending\r\n with a longa possessed \"perfection\", since in the view of that era a \r\n\"proper and perfect\" rhythmic sequence was the succession of a brevis \r\nfollowed by a longa, justified by the fact that the ligature \r\nrepresenting this rhythm is written the same way as a plainchant \r\nligature (a different usage of the term from above). As a result, there \r\nwere four possible ligature types: those beginning with a <i>brevis</i> and ending with a <i>longa</i>, which had both propriety and perfection; the reverse, which had neither; those both beginning and ending with a <i>longa</i>, which lacked propriety but had perfection; and those beginning and ending with a brevis, which were proper but not perfect.<sup id=\"cite_ref-FOOTNOTEApel196188–9,_261–2,_312–4_1-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Longa_(music)#cite_note-FOOTNOTEApel196188–9,_261–2,_312–4-1\">[1]</a></sup><sup id=\"cite_ref-Reckow1967_4_2-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Longa_(music)#cite_note-Reckow1967_4-2\">[2]</a></sup> Two longae, rarely three, had the combined value of a <i><a href=\"https://en.wikipedia.org/wiki/Maxima_(music)\" title=\"Maxima (music)\">maxima</a></i>. The theoretical value of a <i>maximodus perfectus</i> could only be written with three longae or a <i>maxima</i> plus a <i>longa</i>.<sup id=\"cite_ref-FOOTNOTEApel1961124,_328,_440_3-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Longa_(music)#cite_note-FOOTNOTEApel1961124,_328,_440-3\">[3]</a></sup></pre><p><br></p><p></p>', 'admin/img/product-img/1699936037.jpg', 1500.00, 1200.00, 80, 0, 0, 1, 0, 1, '0', '2023-11-13 22:27:17', '2023-11-28 03:22:54', 0),
(11, 6, 11, 11, 5, 'Skincare', 'SC-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936155.jpg', 1800.00, 1500.00, 200, 0, 0, 1, 0, 1, '0', '2023-11-13 22:29:15', '2023-11-13 22:29:15', 0),
(12, 6, 12, 12, 6, 'Makeup', 'MU-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936268.jpg', 1000.00, 800.00, 300, 0, 0, 1, 0, 1, '0', '2023-11-13 22:31:08', '2023-11-13 22:31:08', 0),
(13, 7, 13, 13, 4, 'Outdoor Gear', 'OG-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936427.jpg', 50000.00, 45000.00, 20, 0, 0, 1, 0, 1, '0', '2023-11-13 22:33:47', '2023-11-13 22:33:47', 0),
(14, 7, 14, 14, 6, 'Fitness Equipment', 'FE-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936566.jpg', 10000.00, 8000.00, 15, 0, 0, 1, 0, 1, '0', '2023-11-13 22:36:06', '2023-11-13 22:36:06', 0),
(15, 8, 15, 15, 8, 'Fiction', 'F-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936667.jpg', 3000.00, 2500.00, 20, 0, 0, 1, 0, 1, '0', '2023-11-13 22:37:47', '2023-11-13 22:37:47', 0),
(16, 8, 16, 16, 8, 'Non-Fiction', 'NF-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936767.jpg', 3500.00, 3300.00, 25, 0, 0, 1, 0, 1, '0', '2023-11-13 22:39:27', '2023-11-13 22:39:27', 0),
(17, 9, 17, 17, 9, 'Ethnic Dresses', 'ED-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699936920.jpg', 5000.00, 4000.00, 75, 0, 0, 1, 1, 1, '0', '2023-11-13 22:42:00', '2024-10-05 03:45:47', 0),
(18, 9, 18, 18, 9, 'Traditional Accessories', 'TA-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699937070.jpg', 3000.00, 2800.00, 1000, 0, 0, 1, 0, 1, '0', '2023-11-13 22:44:30', '2023-11-13 22:44:30', 0),
(19, 10, 19, 19, 10, 'Android Phones', 'AP-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699937215.jpg', 45000.00, 42000.00, 150, 0, 0, 1, 0, 1, '0', '2023-11-13 22:46:55', '2023-11-13 22:46:55', 0),
(20, 10, 20, 20, 10, 'iOS Phones', 'IP-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, sed.', '<pre style=\"background-color:#ffffff;color:#000000;font-family:\'JetBrains Mono\';font-size:9.8pt;\"><span style=\"background-color:#efefef;\">&lt;</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, veniam!<span style=\"background-color:#efefef;\">&lt;/</span><span style=\"color:#000080;background-color:#efefef;font-weight:bold;\">p</span><span style=\"background-color:#efefef;\">&gt;</span></pre><p><br></p><p></p>', 'admin/img/product-img/1699937342.jpg', 200000.00, 198000.00, 50, 0, 0, 1, 0, 1, '0', '2023-11-13 22:49:02', '2023-11-13 22:49:02', 0),
(21, 1, 2, 2, 1, 'New Bag 1', 'NW1', 'New Bag 1', 'New Bag 1', 'admin/img/product-img/1728119917.webp', 1500.00, 1400.00, 20, 0, 0, 1, 0, 1, '0', '2024-01-21 01:21:05', '2024-10-05 03:18:37', 5),
(23, 6, 12, 2, 5, 'Alice Bell', 'Sit vel dolore dolor', 'Molestias ea reprehe', 'Eligendi dolorem vol sadas<br>', 'admin/img/product-img/1707710400.jpg', 222.00, 200.00, 78, 0, 0, 1, 0, 1, '0', '2024-02-11 22:00:00', '2024-02-11 22:03:26', 5),
(24, 1, 2, NULL, NULL, 'Keely Rivers', 'Illum delectus cul', 'Perferendis eligendi', 'Nulla ad ullamco nis.dfsdfgsd', 'admin/img/product-img/1739788202.jpg', 337.00, 432.00, 22, 0, 0, 1, 0, 0, NULL, '2024-02-11 22:20:26', '2025-02-17 04:30:02', 5),
(25, 3, 6, NULL, NULL, 'vallena cake', '2154', 'adfasdf', 'adfasdfasdf', 'admin/img/product-img/1738397099.png', 600.00, 300.00, 22, 0, 0, 1, 1, 1, '0', '2025-02-01 02:04:59', '2025-02-01 02:04:59', 0),
(26, 1, 2, NULL, NULL, 'Phoebe Melton', 'Sylvester Kline', 'Aut eum id eiusmod v', 'Debitis ut at magnam', 'admin/img/product-img/1739123348.jpg', 469.00, 182.00, 60, 0, 0, 1, 0, 0, '1', '2025-02-09 11:49:08', '2025-02-09 11:49:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

DROP TABLE IF EXISTS `product_colors`;
CREATE TABLE IF NOT EXISTS `product_colors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-11-13 21:56:26', '2023-11-13 21:56:26'),
(2, 1, 2, '2023-11-13 21:56:26', '2023-11-13 21:56:26'),
(3, 1, 4, '2023-11-13 21:56:26', '2023-11-13 21:56:26'),
(4, 2, 1, '2023-11-13 22:05:03', '2023-11-13 22:05:03'),
(5, 2, 8, '2023-11-13 22:05:03', '2023-11-13 22:05:03'),
(6, 2, 10, '2023-11-13 22:05:03', '2023-11-13 22:05:03'),
(7, 3, 2, '2023-11-13 22:07:13', '2023-11-13 22:07:13'),
(8, 3, 3, '2023-11-13 22:07:13', '2023-11-13 22:07:13'),
(9, 3, 6, '2023-11-13 22:07:13', '2023-11-13 22:07:13'),
(10, 4, 5, '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(11, 4, 6, '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(12, 4, 7, '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(13, 5, 4, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(14, 5, 8, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(15, 5, 10, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(16, 6, 1, '2023-11-13 22:15:41', '2023-11-13 22:15:41'),
(17, 6, 3, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(18, 6, 4, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(19, 6, 5, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(20, 6, 9, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(21, 7, 1, '2023-11-13 22:18:02', '2023-11-13 22:18:02'),
(22, 7, 4, '2023-11-13 22:18:02', '2023-11-13 22:18:02'),
(23, 7, 6, '2023-11-13 22:18:02', '2023-11-13 22:18:02'),
(24, 7, 10, '2023-11-13 22:18:03', '2023-11-13 22:18:03'),
(25, 8, 4, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(26, 8, 8, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(27, 8, 9, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(28, 8, 10, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(36, 11, 1, '2023-11-13 22:29:15', '2023-11-13 22:29:15'),
(37, 11, 5, '2023-11-13 22:29:15', '2023-11-13 22:29:15'),
(38, 11, 6, '2023-11-13 22:29:15', '2023-11-13 22:29:15'),
(39, 12, 2, '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(40, 12, 5, '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(41, 12, 8, '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(42, 13, 1, '2023-11-13 22:33:47', '2023-11-13 22:33:47'),
(43, 13, 8, '2023-11-13 22:33:47', '2023-11-13 22:33:47'),
(44, 13, 10, '2023-11-13 22:33:48', '2023-11-13 22:33:48'),
(45, 14, 4, '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(46, 14, 8, '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(47, 14, 10, '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(48, 15, 1, '2023-11-13 22:37:47', '2023-11-13 22:37:47'),
(49, 15, 2, '2023-11-13 22:37:47', '2023-11-13 22:37:47'),
(50, 15, 3, '2023-11-13 22:37:47', '2023-11-13 22:37:47'),
(51, 15, 7, '2023-11-13 22:37:47', '2023-11-13 22:37:47'),
(52, 16, 1, '2023-11-13 22:39:27', '2023-11-13 22:39:27'),
(53, 16, 2, '2023-11-13 22:39:27', '2023-11-13 22:39:27'),
(54, 16, 8, '2023-11-13 22:39:27', '2023-11-13 22:39:27'),
(55, 16, 10, '2023-11-13 22:39:27', '2023-11-13 22:39:27'),
(56, 17, 1, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(57, 17, 2, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(58, 17, 3, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(59, 17, 4, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(60, 17, 8, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(61, 17, 10, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(62, 18, 1, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(63, 18, 2, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(64, 18, 5, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(65, 18, 6, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(66, 18, 8, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(67, 19, 1, '2023-11-13 22:46:55', '2023-11-13 22:46:55'),
(68, 19, 4, '2023-11-13 22:46:55', '2023-11-13 22:46:55'),
(69, 19, 10, '2023-11-13 22:46:55', '2023-11-13 22:46:55'),
(70, 20, 1, '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(71, 20, 4, '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(72, 20, 10, '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(73, 9, 1, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(74, 9, 2, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(75, 9, 3, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(76, 9, 4, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(80, 10, 5, '2023-11-28 03:22:54', '2023-11-28 03:22:54'),
(81, 10, 6, '2023-11-28 03:22:54', '2023-11-28 03:22:54'),
(82, 10, 7, '2023-11-28 03:22:54', '2023-11-28 03:22:54'),
(89, 21, 2, '2024-01-21 04:49:27', '2024-01-21 04:49:27'),
(90, 21, 6, '2024-01-21 04:49:27', '2024-01-21 04:49:27'),
(94, 23, 2, '2024-02-11 22:03:27', '2024-02-11 22:03:27'),
(95, 23, 6, '2024-02-11 22:03:27', '2024-02-11 22:03:27'),
(96, 23, 9, '2024-02-11 22:03:27', '2024-02-11 22:03:27'),
(97, 24, 2, '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(98, 24, 3, '2024-02-11 22:20:27', '2024-02-11 22:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 3, 'admin/img/product-other-img/152545.jpg', '2023-11-13 22:07:14', '2023-11-13 22:07:14'),
(5, 4, 'admin/img/product-other-img/467795.jpg', '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(6, 4, 'admin/img/product-other-img/276717.jpg', '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(7, 5, 'admin/img/product-other-img/402223.jpg', '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(8, 5, 'admin/img/product-other-img/35558.jpg', '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(9, 5, 'admin/img/product-other-img/290856.jpg', '2023-11-13 22:13:21', '2023-11-13 22:13:21'),
(10, 6, 'admin/img/product-other-img/498652.jpg', '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(11, 7, 'admin/img/product-other-img/93812.jpg', '2023-11-13 22:18:03', '2023-11-13 22:18:03'),
(12, 8, 'admin/img/product-other-img/252326.jpg', '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(13, 8, 'admin/img/product-other-img/87874.jpg', '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(14, 8, 'admin/img/product-other-img/52811.jpg', '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(15, 9, 'admin/img/product-other-img/380787.jpeg', '2023-11-13 22:25:38', '2023-11-13 22:25:38'),
(16, 10, 'admin/img/product-other-img/34988.jpg', '2023-11-13 22:27:17', '2023-11-13 22:27:17'),
(17, 11, 'admin/img/product-other-img/476155.jpg', '2023-11-13 22:29:16', '2023-11-13 22:29:16'),
(18, 12, 'admin/img/product-other-img/248143.jpg', '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(19, 13, 'admin/img/product-other-img/447153.jpg', '2023-11-13 22:33:48', '2023-11-13 22:33:48'),
(20, 14, 'admin/img/product-other-img/418841.jpg', '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(21, 14, 'admin/img/product-other-img/57530.jpg', '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(22, 15, 'admin/img/product-other-img/139824.jpg', '2023-11-13 22:37:48', '2023-11-13 22:37:48'),
(23, 16, 'admin/img/product-other-img/349109.jpg', '2023-11-13 22:39:28', '2023-11-13 22:39:28'),
(24, 17, 'admin/img/product-other-img/320821.jpg', '2023-11-13 22:42:01', '2023-11-13 22:42:01'),
(25, 17, 'admin/img/product-other-img/109130.jpg', '2023-11-13 22:42:01', '2023-11-13 22:42:01'),
(26, 18, 'admin/img/product-other-img/481895.jpg', '2023-11-13 22:44:31', '2023-11-13 22:44:31'),
(28, 18, 'admin/img/product-other-img/64691.jpg', '2023-11-13 22:44:31', '2023-11-13 22:44:31'),
(29, 19, 'admin/img/product-other-img/20933.jpg', '2023-11-13 22:46:55', '2023-11-13 22:46:55'),
(30, 19, 'admin/img/product-other-img/237669.jpg', '2023-11-13 22:46:56', '2023-11-13 22:46:56'),
(31, 20, 'admin/img/product-other-img/237589.jpg', '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(32, 20, 'admin/img/product-other-img/137253.jpg', '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(39, 23, 'admin/img/product-other-img/183398.jpg', '2024-02-11 22:00:01', '2024-02-11 22:00:01'),
(40, 23, 'admin/img/product-other-img/480128.jpg', '2024-02-11 22:00:01', '2024-02-11 22:00:01'),
(41, 23, 'admin/img/product-other-img/39100.png', '2024-02-11 22:00:01', '2024-02-11 22:00:01'),
(42, 24, 'admin/img/product-other-img/441901.jpg', '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(43, 24, 'admin/img/product-other-img/309941.jpg', '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(44, 24, 'admin/img/product-other-img/361156.png', '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(45, 21, 'admin/img/product-other-img/323053.jpeg', '2024-10-05 03:18:38', '2024-10-05 03:18:38'),
(48, 25, 'admin/img/product-other-img/21651.png', '2025-02-01 02:04:59', '2025-02-01 02:04:59'),
(49, 25, 'admin/img/product-other-img/26536.png', '2025-02-01 02:04:59', '2025-02-01 02:04:59'),
(50, 1, 'admin/img/product-other-img/307352.jpg', '2025-02-02 11:53:35', '2025-02-02 11:53:35'),
(51, 1, 'admin/img/product-other-img/166011.jpg', '2025-02-02 11:53:35', '2025-02-02 11:53:35'),
(54, 2, 'admin/img/product-other-img/447823.png', '2025-02-04 12:01:51', '2025-02-04 12:01:51'),
(55, 2, 'admin/img/product-other-img/91828.png', '2025-02-04 12:01:51', '2025-02-04 12:01:51'),
(56, 26, 'admin/img/product-other-img/307244.jpg', '2025-02-09 11:49:08', '2025-02-09 11:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_offers`
--

DROP TABLE IF EXISTS `product_offers`;
CREATE TABLE IF NOT EXISTS `product_offers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `title_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount_amount` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_offers`
--

INSERT INTO `product_offers` (`id`, `product_id`, `title_one`, `title_two`, `title_three`, `description`, `image`, `status`, `created_at`, `updated_at`, `discount_amount`) VALUES
(1, 5, 'Hot Promotions', 'Fashion Trending', 'Great Collection', 'save more with coupons & upto 20% off', 'admin/img/product-offer-images/1727716944.webp', 1, '2023-11-15 22:46:16', '2024-09-30 11:22:24', 20),
(2, 18, 'Trade-in offer', 'Super value deals', 'On all products', 'save more with coupons & upto 70% off', 'admin/img/product-offer-images/1727716994.webp', 1, '2023-11-15 22:52:13', '2024-09-30 11:23:14', 0),
(3, 6, 'Upcoming Offer', 'Big Deals From', 'Manufacturers', 'Clothing, Shoes, Bags, Wallets', 'admin/img/product-offer-images/1727717018.webp', 1, '2023-11-15 22:57:48', '2024-09-30 11:23:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

DROP TABLE IF EXISTS `product_sizes`;
CREATE TABLE IF NOT EXISTS `product_sizes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2023-11-13 21:56:26', '2023-11-13 21:56:26'),
(2, 1, 6, '2023-11-13 21:56:26', '2023-11-13 21:56:26'),
(3, 2, 1, '2023-11-13 22:05:03', '2023-11-13 22:05:03'),
(4, 2, 11, '2023-11-13 22:05:03', '2023-11-13 22:05:03'),
(5, 3, 2, '2023-11-13 22:07:14', '2023-11-13 22:07:14'),
(6, 3, 9, '2023-11-13 22:07:14', '2023-11-13 22:07:14'),
(7, 4, 1, '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(8, 4, 2, '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(9, 4, 9, '2023-11-13 22:10:31', '2023-11-13 22:10:31'),
(10, 5, 1, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(11, 5, 3, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(12, 5, 4, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(13, 5, 9, '2023-11-13 22:13:20', '2023-11-13 22:13:20'),
(14, 6, 1, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(15, 6, 3, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(16, 6, 4, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(17, 6, 6, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(18, 6, 9, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(19, 6, 11, '2023-11-13 22:15:42', '2023-11-13 22:15:42'),
(20, 7, 6, '2023-11-13 22:18:03', '2023-11-13 22:18:03'),
(21, 7, 8, '2023-11-13 22:18:03', '2023-11-13 22:18:03'),
(22, 7, 9, '2023-11-13 22:18:03', '2023-11-13 22:18:03'),
(23, 7, 12, '2023-11-13 22:18:03', '2023-11-13 22:18:03'),
(24, 8, 1, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(25, 8, 5, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(26, 8, 8, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(27, 8, 9, '2023-11-13 22:21:16', '2023-11-13 22:21:16'),
(32, 11, 8, '2023-11-13 22:29:15', '2023-11-13 22:29:15'),
(33, 11, 9, '2023-11-13 22:29:15', '2023-11-13 22:29:15'),
(34, 12, 6, '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(35, 12, 8, '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(36, 12, 9, '2023-11-13 22:31:09', '2023-11-13 22:31:09'),
(37, 13, 1, '2023-11-13 22:33:48', '2023-11-13 22:33:48'),
(38, 13, 3, '2023-11-13 22:33:48', '2023-11-13 22:33:48'),
(39, 13, 9, '2023-11-13 22:33:48', '2023-11-13 22:33:48'),
(40, 14, 1, '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(41, 14, 3, '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(42, 14, 8, '2023-11-13 22:36:07', '2023-11-13 22:36:07'),
(43, 15, 8, '2023-11-13 22:37:47', '2023-11-13 22:37:47'),
(44, 15, 10, '2023-11-13 22:37:48', '2023-11-13 22:37:48'),
(45, 16, 8, '2023-11-13 22:39:27', '2023-11-13 22:39:27'),
(46, 16, 10, '2023-11-13 22:39:28', '2023-11-13 22:39:28'),
(47, 17, 1, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(48, 17, 3, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(49, 17, 4, '2023-11-13 22:42:00', '2023-11-13 22:42:00'),
(50, 17, 9, '2023-11-13 22:42:01', '2023-11-13 22:42:01'),
(51, 18, 1, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(52, 18, 3, '2023-11-13 22:44:30', '2023-11-13 22:44:30'),
(53, 18, 5, '2023-11-13 22:44:31', '2023-11-13 22:44:31'),
(54, 18, 9, '2023-11-13 22:44:31', '2023-11-13 22:44:31'),
(55, 18, 11, '2023-11-13 22:44:31', '2023-11-13 22:44:31'),
(56, 19, 9, '2023-11-13 22:46:55', '2023-11-13 22:46:55'),
(57, 19, 12, '2023-11-13 22:46:55', '2023-11-13 22:46:55'),
(58, 20, 1, '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(59, 20, 9, '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(60, 20, 12, '2023-11-13 22:49:02', '2023-11-13 22:49:02'),
(61, 9, 3, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(62, 9, 6, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(63, 9, 7, '2023-11-13 22:50:40', '2023-11-13 22:50:40'),
(67, 10, 1, '2023-11-28 03:22:54', '2023-11-28 03:22:54'),
(68, 10, 6, '2023-11-28 03:22:54', '2023-11-28 03:22:54'),
(69, 10, 7, '2023-11-28 03:22:54', '2023-11-28 03:22:54'),
(76, 21, 1, '2024-01-21 04:49:27', '2024-01-21 04:49:27'),
(77, 21, 8, '2024-01-21 04:49:27', '2024-01-21 04:49:27'),
(80, 23, 3, '2024-02-11 22:03:27', '2024-02-11 22:03:27'),
(81, 23, 6, '2024-02-11 22:03:27', '2024-02-11 22:03:27'),
(82, 24, 5, '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(83, 24, 6, '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(84, 24, 10, '2024-02-11 22:20:27', '2024-02-11 22:20:27'),
(85, 24, 11, '2024-02-11 22:20:27', '2024-02-11 22:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

DROP TABLE IF EXISTS `product_variants`;
CREATE TABLE IF NOT EXISTS `product_variants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `variant_regular_price` double(11,2) DEFAULT NULL,
  `variant_selling_price` double(11,2) NOT NULL,
  `variant_stock_amount` int DEFAULT NULL,
  `size_id` int NOT NULL,
  `color_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `sku`, `variant_image`, `variant_regular_price`, `variant_selling_price`, `variant_stock_amount`, `size_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 17, '121', 'upload/product-variant-images/442800.jpg', 5000.00, 4000.00, 70, 1, 2, '2024-09-24 11:09:50', '2024-09-25 05:03:56'),
(2, 17, '122', NULL, 5000.00, 4000.00, 75, 3, 1, '2024-09-24 11:13:08', '2024-09-24 11:13:08'),
(3, 21, '232', 'upload/product-variant-images/393204.png', 32.00, 23.00, 232, 6, 4, '2024-10-05 03:19:45', '2024-10-05 03:19:45'),
(15, 1, '500', NULL, NULL, 100.00, NULL, 3, 3, '2025-02-01 01:48:45', '2025-02-01 01:48:45'),
(16, 1, 'tes2', NULL, NULL, 6002.00, NULL, 4, 4, '2025-02-01 01:50:35', '2025-02-01 02:00:35'),
(19, 25, 'ljbmk', NULL, NULL, 500.00, NULL, 14, NULL, '2025-02-01 02:09:29', '2025-02-01 02:09:29'),
(23, 2, 'test', NULL, NULL, 200.00, NULL, 13, NULL, '2025-02-02 12:26:24', '2025-02-02 12:26:24'),
(24, 2, 'asdf', NULL, NULL, 300.00, NULL, 14, NULL, '2025-02-02 12:26:24', '2025-02-02 12:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_guides`
--

DROP TABLE IF EXISTS `purchase_guides`;
CREATE TABLE IF NOT EXISTS `purchase_guides` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_guides`
--

INSERT INTO `purchase_guides` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"single-content\">\r\n                            <h4>1. Account Registering</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Nulla modi dolores neque omnis ipsa? Quia, nam \r\nvoluptas! Aut, magnam molestias:</p>\r\n                            <ul class=\"mb-30\"><li>Name (required)</li><li>Age (required)</li><li>Date of birth (required)</li><li>Passport/ ID no. (required)</li><li>Current career (required)</li><li>Mobile phone numbers (required)</li><li>Email address (required)</li><li>Hobbies &amp; interests (optional)</li><li>Social profiles (optional)</li></ul>\r\n                            <h4>2. Select Product</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Suscipit officia necessitatibus repellat placeat aut \r\nenim recusandae assumenda adipisci quisquam, deserunt iure veritatis \r\ncupiditate modi aspernatur accusantium, mollitia doloribus. Velit, iste.</p>\r\n                            <h4>3. Confirm Order Content</h4>\r\n                            <p>Lorem, ipsum dolor sit amet consectetur \r\nadipisicing elit. Libero ut autem sed! Assumenda, nostrum non doloribus \r\ntenetur, pariatur veritatis harum natus ipsam maiores dolorem \r\nrepudiandae laboriosam, cupiditate odio earum eum?</p>\r\n                            <h4>4.Transaction Completed</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Ipsam nesciunt nam aut magnam libero aspernatur eaque \r\npraesentium? Tempore labore quis neque? Magni.</p>\r\n                            <h4>5. Accepted Credit Cards</h4>\r\n                            <ul><li>Visa</li><li>Mastercards</li><li>American Express</li><li>Discover</li></ul>\r\n                            <span>*Taxes are calculated by your local bank and location.</span>\r\n                            <h4 class=\"mt-30\">6. Download and Setup</h4>\r\n                            <ul><li>Updated content on a regular basis</li><li>Secure &amp; hassle-free payment</li><li>1-click checkout</li><li>Easy access &amp; smart user dashboard</li></ul>\r\n                        </div><p></p>', 1, '2024-01-15 23:16:56', '2024-01-15 23:16:56'),
(2, '<div class=\"single-content\">\r\n                            <h4>1. Account Registering</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Nulla modi dolores neque omnis ipsa? Quia, nam \r\nvoluptas! Aut, magnam molestias:</p>\r\n                            <ul class=\"mb-30\"><li>Name (required)</li><li>Age (required)</li><li>Date of birth (required)</li><li>Passport/ ID no. (required)</li><li>Current career (required)</li><li>Mobile phone numbers (required)</li><li>Email address (required)</li><li>Hobbies & interests (optional)</li><li>Social profiles (optional)</li></ul>\r\n                            <h4>2. Select Product</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Suscipit officia necessitatibus repellat placeat aut \r\nenim recusandae assumenda adipisci quisquam, deserunt iure veritatis \r\ncupiditate modi aspernatur accusantium, mollitia doloribus. Velit, iste.</p>\r\n                            <h4>3. Confirm Order Content</h4>\r\n                            <p>Lorem, ipsum dolor sit amet consectetur \r\nadipisicing elit. Libero ut autem sed! Assumenda, nostrum non doloribus \r\ntenetur, pariatur veritatis harum natus ipsam maiores dolorem \r\nrepudiandae laboriosam, cupiditate odio earum eum?</p>\r\n                            <h4>4.Transaction Completed</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Ipsam nesciunt nam aut magnam libero aspernatur eaque \r\npraesentium? Tempore labore quis neque? Magni.</p>\r\n                            <h4>5. Accepted Credit Cards</h4>\r\n                            <ul><li>Visa</li><li>Mastercards</li><li>American Express</li><li>Discover</li></ul>\r\n                            <span>*Taxes are calculated by your local bank and location.</span>\r\n                            <h4 class=\"mt-30\">6. Download and Setup</h4>\r\n                            <ul><li>Updated content on a regular basis</li><li>Secure & hassle-free payment</li><li>1-click checkout</li><li>Easy access & smart user dashboard</li></ul>\r\n                        </div><p></p>', 1, '2024-01-15 23:18:24', '2024-01-15 23:18:24'),
(3, '<div class=\"single-content\">\r\n                            <h4>1. Account Registering</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Nulla modi dolores neque omnis ipsa? Quia, nam \r\nvoluptas! Aut, magnam molestias:</p>\r\n                            <ul class=\"mb-30\"><li>Name (required)</li><li>Age (required)</li><li>Date of birth (required)</li><li>Passport/ ID no. (required)</li><li>Current career (required)</li><li>Mobile phone numbers (required)</li><li>Email address (required)</li><li>Hobbies & interests (optional)</li><li>Social profiles (optional)</li></ul>\r\n                            <h4>2. Select Product</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Suscipit officia necessitatibus repellat placeat aut \r\nenim recusandae assumenda adipisci quisquam, deserunt iure veritatis \r\ncupiditate modi aspernatur accusantium, mollitia doloribus. Velit, iste.</p>\r\n                            <h4>3. Confirm Order Content</h4>\r\n                            <p>Lorem, ipsum dolor sit amet consectetur \r\nadipisicing elit. Libero ut autem sed! Assumenda, nostrum non doloribus \r\ntenetur, pariatur veritatis harum natus ipsam maiores dolorem \r\nrepudiandae laboriosam, cupiditate odio earum eum?</p>\r\n                            <h4>4.Transaction Completed</h4>\r\n                            <p>Lorem ipsum dolor sit amet consectetur \r\nadipisicing elit. Ipsam nesciunt nam aut magnam libero aspernatur eaque \r\npraesentium? Tempore labore quis neque? Magni.</p>\r\n                            <h4>5. Accepted Credit Cards</h4>\r\n                            <ul><li>Visa</li><li>Mastercards</li><li>American Express</li><li>Discover</li></ul>\r\n                            <span>*Taxes are calculated by your local bank and location.</span>\r\n                            <h4 class=\"mt-30\">6. Download and Setup</h4>\r\n                            <ul><li>Updated content on a regular basis</li><li>Secure & hassle-free payment</li><li>1-click checkout</li><li>Easy access & smart user dashboard</li></ul>\r\n                        </div><p></p>', 1, '2024-02-11 12:26:06', '2024-02-11 12:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `reapers`
--

DROP TABLE IF EXISTS `reapers`;
CREATE TABLE IF NOT EXISTS `reapers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `flower_qty` int DEFAULT NULL,
  `reaper` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reapers`
--

INSERT INTO `reapers` (`id`, `flower_qty`, `reaper`, `price`, `created_at`, `updated_at`) VALUES
(3, 20, '5', '600', '2025-02-20 06:46:24', '2025-02-20 06:46:24'),
(4, 40, '10', '900', '2025-02-20 06:46:44', '2025-02-20 06:46:44'),
(5, 100, '50', '3000', '2025-02-22 09:32:22', '2025-02-22 09:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `return_policies`
--

DROP TABLE IF EXISTS `return_policies`;
CREATE TABLE IF NOT EXISTS `return_policies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_policies`
--

INSERT INTO `return_policies` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:19:28', '2024-01-15 23:19:28'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:23:41', '2024-01-15 23:23:41'),
(3, '<h4><b><span style=\"font-family: Verdana;\">Return Policy.</span></b></h4><p>Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p><br><h4><b><span style=\"font-family: Verdana;\">Refun Policy</span></b></h4></p><p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2025-02-11 00:45:15', '2025-02-11 00:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ybql8txkI5HJbY6LSVoYYp1L7bDe9LLsm7lTF9ow', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSnlScUZ4d0pxU0Nwa01aUXdiek9uS3R2aDJoY3k5OHF5V0k4cVZzQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jdXRvbWUtb3JkZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGYwVy43bWNNV1dUTmJHeWtacGZYNU9QeFJLY2w3RS80cmJHRjVka2gwMHEycVNkclF2eVp1Ijt9', 1740239854);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_hour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `twitter_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `linkedin_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `youtube_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `instagram_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `google_map_api_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `android_app_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `android_app_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ios_app_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ios_app_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `company_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_jpg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_png` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `favicon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payment_method_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `slogan`, `contact_phone`, `support_phone`, `contact_email`, `support_email`, `office_hour`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `instagram_link`, `google_map_api_link`, `android_app_image`, `android_app_url`, `ios_app_image`, `ios_app_url`, `company_address`, `logo_jpg`, `logo_png`, `favicon`, `title`, `payment_method_image`, `created_at`, `updated_at`) VALUES
(1, 'My Ecommerce', 'We are Building The Destination For Getting Things Done', '01747534818', '01957675711', 'radian@gmail.com', 'support@gmail.com', '10:00 - 18:00, Mon - Sat', 'https://www.facebook.com/facebook', 'https://www.facebook.com/twitter', 'https://www.facebook.com/linkedin', 'https://www.facebook.com/youtube', 'https://www.facebook.com/instagram', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1420865010823!2d90.42166437456511!3d23.813545986350746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fb95f16c1%3A0xb333248370356dee!2sJamuna%20Future%20Park!5e0!3m2!1sen!2sbd!4v1739255285758!5m2!1sen!2sbd\" width=\"1300\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'admin/img/setting/26317.jpg', 'https://www.facebook.com/AbdullahAlMonayem.sk', 'admin/img/setting/47913.jpg', 'https://www.facebook.com/AbdullahAlMonayem.sk', 'Mirpur,Dhaka-1216', 'admin/img/setting/23005.png', 'admin/img/setting/19540.png', 'admin/img/setting/46459.png', 'Biggest E-commerce in Bangladesh', 'admin/img/setting/38423.png', '2024-01-09 03:27:26', '2025-02-11 00:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_fees`
--

DROP TABLE IF EXISTS `shipping_fees`;
CREATE TABLE IF NOT EXISTS `shipping_fees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `inside_dhaka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outside_dhaka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_fees`
--

INSERT INTO `shipping_fees` (`id`, `inside_dhaka`, `outside_dhaka`, `created_at`, `updated_at`) VALUES
(1, '80', '150', NULL, '2025-02-06 00:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_policies`
--

DROP TABLE IF EXISTS `shipping_policies`;
CREATE TABLE IF NOT EXISTS `shipping_policies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_policies`
--

INSERT INTO `shipping_policies` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                       <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                       <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:02:51', '2024-01-15 23:02:51'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                       <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                       <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:10:57', '2024-01-15 23:10:57'),
(3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                       <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                       <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:11:45', '2024-01-15 23:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sizes_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pounds-2', 'M', 'M size is suitable for everyday use, providing a balanced capacity.', 1, '2023-11-13 21:35:17', '2025-02-09 03:57:37'),
(2, 'Pounds-4', '9US', 'Size 9 in US standard, ideal for a comfortable fit for most individuals. For Shoes..', 1, '2023-11-13 21:36:24', '2023-11-13 21:36:24'),
(3, 'Pounds-6', 'XL', 'XL menas Extra large', 1, '2023-11-13 21:37:38', '2023-11-13 21:37:38'),
(4, 'Pounds-8', 'XXL', 'XXL menas Double Extra large', 1, '2023-11-13 21:38:07', '2023-11-13 21:38:07'),
(13, '1 pcs', '1232', 'fasd', 1, '2025-01-31 23:34:30', '2025-01-31 23:34:30'),
(14, '5 pcs', '1232', 'fas', 1, '2025-01-31 23:35:06', '2025-01-31 23:35:06'),
(15, '10 pcs', '1432', 'fadf', 1, '2025-01-31 23:35:21', '2025-01-31 23:35:21'),
(16, 'test', NULL, 'test', 0, '2025-02-09 03:53:32', '2025-02-09 03:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'School Bag', 'Stylish and practical school bags for students.', 'admin/img/sub-category-img/4449sub_category_school_bag_1.jpg', 1, '2023-11-13 20:35:57', '2023-11-13 20:35:57'),
(2, 1, 'Office Bag', 'Professional office bags for a sophisticated look.', 'admin/img/sub-category-img/8957sub_category_Office_Bag_2.jpg', 1, '2023-11-13 20:36:49', '2023-11-13 20:36:49'),
(3, 2, 'Sneakers', 'Comfortable sneakers for casual and sporty occasions.', 'admin/img/sub-category-img/5623sub_category_Sneakers_1.jpg', 1, '2023-11-13 20:37:58', '2023-11-13 20:37:58'),
(4, 2, 'High Heels', 'Elegant high heels to elevate your style.', 'admin/img/sub-category-img/7345sub_category_High_Heels_1.jpg', 1, '2023-11-13 20:38:35', '2023-11-13 20:38:35'),
(5, 3, 'Casual Wear', 'Trendy and comfortable casual wear for everyday use.', 'admin/img/sub-category-img/4013sub_category_Casual_Wear_1.jpg', 1, '2023-11-13 20:39:33', '2023-11-13 20:39:33'),
(6, 3, 'Formal Attire', 'Sophisticated formal wear for special occasions.', 'admin/img/sub-category-img/7789sub_category_Formal_Attire_1.jpg', 1, '2023-11-13 20:40:17', '2023-11-13 20:40:17'),
(7, 4, 'Smartphones', 'Cutting-edge smartphones with the latest technology.', 'admin/img/sub-category-img/1294sub_category_Smartphones_2.jpg', 1, '2023-11-13 20:41:58', '2023-11-13 20:42:34'),
(8, 4, 'Laptops', 'Powerful laptops for work and entertainment.', 'admin/img/sub-category-img/5859sub_category_Laptops_2.jpg', 1, '2023-11-13 20:43:23', '2023-11-13 20:43:23'),
(9, 5, 'Wall Art', 'Beautiful wall art to enhance your home decor.', 'admin/img/sub-category-img/9044sub_category_Wall_Art_2.jpeg', 1, '2023-11-13 20:44:17', '2023-11-13 20:44:17'),
(10, 5, 'Decorative Pillows', 'Cozy and stylish decorative pillows for your living space.', 'admin/img/sub-category-img/8503sub_category_Decorative_Pillows_1.jpg', 1, '2023-11-13 20:45:24', '2023-11-13 20:45:24'),
(11, 6, 'Skincare', 'Nourishing skincare products for a radiant complexion.', 'admin/img/sub-category-img/7904sub_category_Skincare_1.jpg', 1, '2023-11-13 20:46:21', '2023-11-13 20:46:21'),
(12, 6, 'Makeup', 'High-quality makeup for a flawless look.', 'admin/img/sub-category-img/7809sub_category_Makeup_1.jpg', 1, '2023-11-13 20:47:03', '2023-11-13 20:47:03'),
(13, 7, 'Outdoor Gear', 'Durable outdoor gear for adventurous activities.', 'admin/img/sub-category-img/9509sub_category_Outdoor_Gear_1.jpg', 1, '2023-11-13 20:48:05', '2023-11-13 20:48:05'),
(14, 7, 'Fitness Equipment', 'Quality fitness equipment for a healthy lifestyle.', 'admin/img/sub-category-img/7553sub_category_Fitness_Equipment_2.jpg', 1, '2023-11-13 20:49:01', '2023-11-13 20:49:01'),
(15, 8, 'Fiction', 'Engaging fiction books for your reading pleasure.', 'admin/img/sub-category-img/6104sub_category_Fiction_2.jpg', 1, '2023-11-13 20:49:43', '2023-11-13 20:49:43'),
(16, 8, 'Non-Fiction', 'Informative non-fiction books for knowledge seekers.', 'admin/img/sub-category-img/8815sub_category_Non_Fiction_1.jpg', 1, '2023-11-13 20:50:16', '2023-11-13 20:50:16'),
(17, 9, 'Ethnic Dresses', 'Traditional and elegant ethnic dresses for special occasions.', 'admin/img/sub-category-img/3960sub_category_Ethnic_Dresses_2.jpg', 1, '2023-11-13 20:51:39', '2023-11-13 20:51:39'),
(18, 9, 'Traditional Accessories', 'Accessories to complement your traditional attire.', 'admin/img/sub-category-img/7377sub_category_Traditional_Accessories_3.jpg', 1, '2023-11-13 20:52:18', '2023-11-13 20:52:18'),
(19, 10, 'Android Phones', 'Feature-rich Android smartphones for tech enthusiasts.', 'admin/img/sub-category-img/7563sub_category_Android_Phones_3.jpg', 1, '2023-11-13 20:53:08', '2023-11-13 20:53:08'),
(20, 10, 'iOS Phones', 'Stylish and user-friendly iPhones for Apple enthusiasts.', 'admin/img/sub-category-img/5441sub_category_iOS Phones_2.jpg', 1, '2023-11-13 20:53:47', '2023-11-13 20:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

DROP TABLE IF EXISTS `terms_conditions`;
CREATE TABLE IF NOT EXISTS `terms_conditions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \neius illo incidunt mollitia numquam quas quia quo!</p>\n                        <p>Lorem ipsum dolor sit amet, consectetur \nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\n                        <p>Lorem ipsum dolor sit amet, consectetur \nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \naperiam atque beatae cum deleniti distinctio dolorum eius eos est \nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:28:01', '2024-01-15 23:28:01'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p></p>', 1, '2024-01-15 23:35:48', '2024-01-15 23:35:48'),
(3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p><br></p><p></p>', 1, '2024-01-15 23:38:26', '2024-01-15 23:38:26'),
(4, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab \r\nasperiores cupiditate expedita ipsa iste reiciendis repellendus sit? \r\nAdipisci delectus in magnam maiores molestiae nemo nesciunt quia quo \r\nquos vero! Aperiam architecto consequatur doloremque eligendi ex fugit \r\nitaque iure maiores, nulla, numquam odit officia repellendus rerum? \r\nAccusamus dolores, harum ipsam quaerat quod suscipit veritatis \r\nvoluptatum. Eligendi expedita hic maxime non quas qui ratione saepe sint\r\n sit temporibus. Asperiores autem consequuntur dolor doloribus esse, est\r\n et excepturi, exercitationem facere fuga id labore laudantium molestiae\r\n molestias mollitia natus nobis non ratione, sit veniam. Animi beatae \r\neius illo incidunt mollitia numquam quas quia quo!</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Architecto, blanditiis commodi dolorem ducimus, enim \r\nfugiat fugit illo incidunt ipsa iure iusto laudantium officia \r\npraesentium reprehenderit sequi. A ab architecto, consectetur corporis \r\ndignissimos, eligendi fuga hic labore libero minima nam, provident quae \r\nquas quod saepe similique temporibus! Illo labore nihil porro?    </p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. In nisi qui sequi tenetur voluptatibus voluptatum. Ad \r\naperiam atque beatae cum deleniti distinctio dolorum eius eos est \r\nexpedita fugit harum, incidunt ipsam molestiae mollitia nostrum qui \r\nquibusdam rem sapiente soluta velit veritatis vero voluptatem? \r\nDoloremque ducimus error vel. Ad architecto at dolorem dolorum eligendi \r\nexplicabo impedit ipsam, laudantium nemo praesentium provident qui rem \r\nrerum sapiente veniam vero voluptatem. Eveniet excepturi facilis nemo \r\nvelit voluptatum. Aliquid odit quas, reiciendis sint velit voluptatibus?</p><p><br></p><p></p>', 1, '2024-01-15 23:50:05', '2024-01-15 23:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `units_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pieces', NULL, 'If you are going to buy bags, you should buy in quantity as per piece.', 1, '2023-11-13 21:28:41', '2025-02-09 04:22:00'),
(2, 'Pairs', 'PA_01', 'Shoes are typically sold in pairs for a complete set.', 1, '2023-11-13 21:29:14', '2023-11-13 21:29:14'),
(3, 'Apparel', 'A_01', 'Clothing items such as shirts, pants, and dresses.', 1, '2023-11-13 21:29:41', '2023-11-13 21:29:41'),
(4, 'Units', 'U_01', 'Electronic gadgets and devices sold individually.', 1, '2023-11-13 21:30:13', '2023-11-13 21:30:13'),
(5, 'Items', 'I_01', 'Individual beauty products for personal care.', 1, '2023-11-13 21:31:12', '2023-11-13 21:31:12'),
(6, 'Number', 'No.', 'Quantity as Number', 1, '2023-11-13 21:32:14', '2023-11-13 21:32:14'),
(7, 'Sets', 'S_01', 'Sports equipment and outdoor gear sold in sets.', 1, '2023-11-13 21:32:41', '2023-11-13 21:32:41'),
(8, 'Copies', 'C_01', 'Books sold as individual copies for reading pleasure.', 1, '2023-11-13 21:33:08', '2023-11-13 21:33:08'),
(9, 'Garments', 'G_01', 'Traditional clothing items sold individually.', 1, '2023-11-13 21:33:33', '2023-11-13 21:33:33'),
(10, 'Devices', 'D_01', 'Individual mobile phones with the latest technology.', 1, '2023-11-13 21:34:02', '2023-11-13 21:34:02'),
(11, 'test', NULL, 'test', 1, '2025-02-09 04:24:30', '2025-02-09 04:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `mobile`, `role`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$f0W.7mcMWWTNbGykZpfX5OPxRKcl7E/4rbGF5dkh00q2qSdrQvyZu', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-13 00:45:45', '2023-11-13 00:45:45', NULL, '0'),
(3, 'jehyl a', 'qutaboc@mailinator.com', NULL, '$2y$10$h9aluAsFuNxEi5xMVPMuC.H4agVSm15I5C0uLhamiN/E.yqxzBfOe', NULL, NULL, NULL, NULL, NULL, 'admin/img/admin-user-images/1726927834.png', '2023-12-26 04:59:16', '2024-09-21 08:11:38', '01500000000', '2'),
(4, 'monayem', 'monayem1231@gmail.com', NULL, '$2y$10$h9aluAsFuNxEi5xMVPMuC.H4agVSm15I5C0uLhamiN/E.yqxzBfOe', NULL, NULL, NULL, NULL, NULL, 'admin/img/admin-user-img/1703752406.jpg', '2023-12-28 02:33:26', '2023-12-28 02:33:26', '01756064943', '3'),
(5, 'Violet Sellers', 'byji@mailinator.com', NULL, '$2y$10$f0W.7mcMWWTNbGykZpfX5OPxRKcl7E/4rbGF5dkh00q2qSdrQvyZu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-06 04:41:31', '2025-02-06 04:41:31', NULL, '3'),
(18, 'Porter Simpson', 'naqeroha@mailinator.com', NULL, '12345', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-06 04:56:11', '2025-02-06 04:56:11', NULL, '0'),
(19, 'Keith Gates', 'rurulyd@mailinator.com', NULL, '12345', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-06 04:58:33', '2025-02-06 04:58:33', NULL, '0'),
(20, 'Zahir Brewer', 'cyzahovi@mailinator.com', NULL, '$2y$10$oD8oBflpHBB1kBIl68RHiOydYQFsca7SOESPKjzturMvjXJQFNRPi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-06 09:05:58', '2025-02-06 09:05:58', NULL, '0'),
(49, 'test', 'test@gmail.com', NULL, '$2y$10$uCFkdvH0nydaFgyEhXqVoeaNQBk4dKqkhrUSKPPzWE/WothzyHXOW', NULL, NULL, NULL, NULL, NULL, 'admin/img/product.png', '2025-02-12 07:09:12', '2025-02-12 07:09:12', '01701103784', '2');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date_of_birth` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blood_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Executive',
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendors_mobile_unique` (`mobile`),
  UNIQUE KEY `vendors_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `mobile`, `email`, `password`, `address`, `image`, `date_of_birth`, `blood_group`, `nid`, `district`, `vendor_label`, `status`, `created_at`, `updated_at`) VALUES
(6, 'vendor', '01500000000', 'vendor@gmail.com', '$2y$10$HQGwOLuNRcCGW/9xyk1kZ.4.Clv5zcJCTFF36oheF/T6FxQ7ptKp6', NULL, 'admin/img/vendor/38914.jpg', '8/4/1999', 'A+', '3432553534', 'dhaka', 'Executive', 0, '2024-09-21 07:59:06', '2024-09-21 08:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

DROP TABLE IF EXISTS `wish_lists`;
CREATE TABLE IF NOT EXISTS `wish_lists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int NOT NULL,
  `date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `customer_id`, `product_id`, `date`, `timestamp`, `status`, `created_at`, `updated_at`) VALUES
(1, '8', 10, '2023-12-19', '1702944000', 1, '2023-12-19 05:14:16', '2023-12-19 05:14:16'),
(2, '8', 9, '2023-12-19', '1702944000', 1, '2023-12-19 05:14:31', '2023-12-19 05:14:31'),
(3, '7', 5, '2023-12-20', '1703030400', 1, '2023-12-20 12:40:23', '2023-12-20 12:40:23'),
(4, '8', 18, '2024-02-12', '1707696000', 1, '2024-02-11 22:29:31', '2024-02-11 22:29:31'),
(7, '8', 21, '2024-02-12', '1707696000', 1, '2024-02-12 00:46:39', '2024-02-12 00:46:39'),
(9, '8', 17, '2024-02-12', '1707696000', 1, '2024-02-12 00:56:30', '2024-02-12 00:56:30'),
(10, '9', 17, '2024-09-21', '1726876800', 1, '2024-09-21 01:25:56', '2024-09-21 01:25:56'),
(11, '9', 6, '2024-09-21', '1726876800', 1, '2024-09-21 01:28:20', '2024-09-21 01:28:20'),
(14, '11', 8, '2024-09-29', '1727568000', 1, '2024-09-29 14:04:37', '2024-09-29 14:04:37'),
(15, '11', 7, '2024-09-29', '1727568000', 1, '2024-09-29 14:04:53', '2024-09-29 14:04:53'),
(27, 'guest_67b5af4f01def', 1, '2025-02-19', '1739923200', 1, '2025-02-19 06:54:33', '2025-02-19 06:54:33'),
(28, 'guest_67b5af4f01def', 2, '2025-02-19', '1739923200', 1, '2025-02-19 07:46:02', '2025-02-19 07:46:02'),
(29, 'guest_67b74ec712e28', 2, '2025-02-20', '1740009600', 1, '2025-02-20 09:48:36', '2025-02-20 09:48:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

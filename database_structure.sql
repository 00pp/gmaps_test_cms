-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categories_names_id` int NOT NULL,
  `places_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_names_id` (`categories_names_id`),
  KEY `items_id` (`places_id`),
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`places_id`) REFERENCES `places` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `categories_names` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `locations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slug` varchar(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `place_images` (
  `id` int NOT NULL DEFAULT '0',
  `place_id` int NOT NULL,
  `attribute_type` varchar(100) NOT NULL,
  `attribute_value` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `place_id` (`place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `place_open_hours` (
  `id` int NOT NULL DEFAULT '0',
  `place_id` int NOT NULL,
  `day` varchar(200) DEFAULT NULL,
  `open_interval` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `place_id` (`place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `place_reviews` (
  `id` int NOT NULL DEFAULT '0',
  `place_id` int DEFAULT NULL,
  `is_local_guid` int DEFAULT '0',
  `user_name` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `publish_date` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `review_text` text,
  `publish_time` timestamp NULL DEFAULT NULL,
  `user_profile` varchar(1000) DEFAULT NULL,
  `review_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `place_id` (`place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `places` (
  `id` int NOT NULL DEFAULT '0',
  `place_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `async_cid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `slug` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `website_url` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `website_url2` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `rating` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lng` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `images_json` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `meta_tags` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `all_data` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `reviews` int DEFAULT '0',
  `feature_id` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `social_links` int DEFAULT '0',
  `distance` int DEFAULT NULL,
  `raw_data` text,
  `facebook_scraper_status` int DEFAULT NULL,
  `facebook_last_photo_token` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `facebook_last_review_token` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `facebook_page_name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price_level` int DEFAULT '0',
  `house_number` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `street` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `town` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `state` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `county` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zip_code` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zone` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `country` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `street_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `console_country` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `console_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `source_url` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remote_id` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `website_status` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `area` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `serial` int DEFAULT NULL,
  `reviews_status` int DEFAULT NULL,
  `main_address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `reverse_geocode_address` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `domain_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `is_chain` int DEFAULT NULL,
  `is_address_parsed` int DEFAULT '0',
  `state_id` int DEFAULT NULL,
  `town_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `state_id_idx` (`state_id`),
  KEY `town_id_idx` (`town_id`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- 2020-07-27 13:22:56

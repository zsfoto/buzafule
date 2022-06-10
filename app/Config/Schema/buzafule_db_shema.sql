-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2022. Jún 09. 10:14
-- Szerver verzió: 5.1.73
-- PHP verzió: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `buzafule_db`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_abouts`
--

CREATE TABLE IF NOT EXISTS `buza_abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `splash_title` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `splash_body` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `price` int(10) unsigned DEFAULT '0',
  `deliveryprice` int(10) unsigned NOT NULL,
  `totalvalue` int(10) unsigned NOT NULL,
  `order_confirm_message` text COLLATE utf8_hungarian_ci NOT NULL,
  `companydetails` tinytext COLLATE utf8_hungarian_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `company_email` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `facebook_url` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `youtube_url` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `og_title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `og_description` tinytext COLLATE utf8_hungarian_ci NOT NULL,
  `page_title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `meta_description` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `meta_keywords` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `pagetitle` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `motto` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `menu1` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `menu2` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `menu3` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `menu4` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `menu5` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `menu6` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `menu7` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `link1_text` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `link2_text` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `copyright_text` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title1` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text1` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title2` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text2` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title3` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text3` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title4` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text4` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title5` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text5` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_title6` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `mainpage_text6` text COLLATE utf8_hungarian_ci NOT NULL,
  `wgj_subtitle` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `wgj_subtext` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `order_name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `order_email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `order_phone` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `order_postcode` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `order_city` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `order_address` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `order_qty` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `order_message` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `delivery_title` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `delivery_text` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `cash_on_delivery` int(10) unsigned NOT NULL COMMENT 'Utánvét díja',
  `cash_on_delivery_percent` decimal(15,5) NOT NULL,
  `contact_title` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `contact_text` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `contact_name` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `contact_email` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `contact_phone` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `contact_message` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `email_confirm_subject` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `email_confirm_title` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `email_confirm` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `email_shiping_subject` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email_shiping_title` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `email_shiping` longtext COLLATE utf8_hungarian_ci,
  `email_message_subject` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email_message_title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email_message` longtext COLLATE utf8_hungarian_ci,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Abouts table' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_cash_on_deliveries`
--

CREATE TABLE IF NOT EXISTS `buza_cash_on_deliveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price_from` int(10) unsigned NOT NULL,
  `price_to` int(10) unsigned NOT NULL,
  `cashOnDelivery` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `price_from` (`price_from`),
  KEY `price_to` (`price_to`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Utánvétek összege' AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_email_emails`
--

CREATE TABLE IF NOT EXISTS `buza_email_emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `email_template_id` int(10) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `last_order` datetime NOT NULL,
  `sent` datetime DEFAULT NULL,
  `order_count` int(10) unsigned NOT NULL DEFAULT '0',
  `order_qty` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email_template_id` (`email_template_id`,`name`,`address`(255),`email`,`phone`),
  KEY `last_order` (`last_order`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Ezekre a címekre kell elküldeni az email-t' AUTO_INCREMENT=3392 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_email_templates`
--

CREATE TABLE IF NOT EXISTS `buza_email_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) COLLATE utf8_hungarian_ci NOT NULL,
  `body` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `sent` datetime DEFAULT NULL,
  `email_email_count` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`(255))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Email-ek, amiket el kell küldeni' AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_messages`
--

CREATE TABLE IF NOT EXISTS `buza_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `message` text COLLATE utf8_hungarian_ci NOT NULL,
  `readed` tinyint(1) unsigned DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Messages from vontact form' AUTO_INCREMENT=104 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_orders`
--

CREATE TABLE IF NOT EXISTS `buza_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `postcode` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `message` text COLLATE utf8_hungarian_ci NOT NULL,
  `delivered` tinyint(1) unsigned DEFAULT '0',
  `quantity` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `value` int(10) unsigned NOT NULL,
  `discount` int(10) unsigned NOT NULL,
  `deliveryprice` int(10) unsigned NOT NULL,
  `totalvalue` int(10) unsigned NOT NULL,
  `due_date` date NOT NULL,
  `payment_type` int(10) unsigned NOT NULL,
  `payment_amount` int(10) unsigned NOT NULL,
  `date_of_bank_transfer` date NOT NULL,
  `sent_email` tinyint(1) unsigned NOT NULL,
  `click_to_link` int(10) unsigned NOT NULL,
  `uuid` varchar(36) COLLATE utf8_hungarian_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paymentType` (`payment_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Orders table' AUTO_INCREMENT=122594 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_photos`
--

CREATE TABLE IF NOT EXISTS `buza_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) COLLATE utf8_hungarian_ci NOT NULL,
  `position` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `position` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Photos table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_prices`
--

CREATE TABLE IF NOT EXISTS `buza_prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `discount` int(10) unsigned DEFAULT NULL,
  `delivery_price` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Ár táblázat' AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_texts`
--

CREATE TABLE IF NOT EXISTS `buza_texts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `text` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_users`
--

CREATE TABLE IF NOT EXISTS `buza_users` (
  `id` varchar(36) COLLATE utf8_hungarian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Users table';

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `buza_visitors`
--

CREATE TABLE IF NOT EXISTS `buza_visitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) COLLATE utf8_hungarian_ci NOT NULL,
  `remote_host` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `referer` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Visitors logs' AUTO_INCREMENT=9967 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

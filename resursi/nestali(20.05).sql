-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2014 at 09:58 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nestali`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `ptt` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ptt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89103 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ptt`, `name`) VALUES
(71420, 'Pale'),
(73240, 'Višegrad'),
(74200, 'Doboj'),
(74400, 'Derventa'),
(75420, 'Bratunac'),
(75450, 'Šekovići'),
(76000, 'Bijeljina'),
(78000, 'Banja Luka'),
(79102, 'Prijedor'),
(89101, 'Trebinje');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Janko Janković', 'janko@email.com', '0038765222333'),
(2, 'Goran Janković', 'janko@email.com', '0038765222333'),
(3, 'Zoran Janković', 'janko@email.com', '0038765222333'),
(4, 'Ilija', 'ilija@gmail.com', '065756877'),
(5, 'Ilija', 'ilija@gmail.com', '065756877'),
(6, 'test', 'test', 'test'),
(7, 'Ilija', 'ilija@gmail.com', '065756877'),
(8, 'Ilija', 'ilija@gmail.com', '065756877'),
(9, 'Ilija', 'ilija@gmail.com', '065756877'),
(10, 'Marko', 'marko@gmail.com', '065756877'),
(11, 'Ilija', 'ilija@gmail.com', '065756877'),
(12, 'test', 'test', 'test'),
(13, 'te', 'test', 'tets'),
(14, 'aaa', 'aaa', 'aaaa'),
(15, 'eeeee', 'eee', 'eee'),
(16, 'eeee', 'eeee', 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `evacuees`
--

CREATE TABLE IF NOT EXISTS `evacuees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` timestamp NULL DEFAULT NULL,
  `hometown` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `evacuees`
--

INSERT INTO `evacuees` (`id`, `name`, `parent_name`, `sex`, `birthday`, `hometown`, `location`) VALUES
(1, 'Igor', 'Marko', 'M', '0000-00-00 00:00:00', 'Sarajevo', 'Pale'),
(2, 'Ivan', 'Marko', 'M', '2021-05-20 12:00:00', 'Sarajevo', 'Pale'),
(3, 'Igor', 'Marko', 'M', '2014-05-20 10:05:00', 'Sarajevo', 'Pale');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_page_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_surname` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published_date` timestamp NULL DEFAULT NULL,
  `last_seen_date` timestamp NULL DEFAULT NULL,
  `is_missing` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_id` int(11) NOT NULL,
  `city_ptt` int(11) NOT NULL,
  `last_seen_destination` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profile_contact_idx` (`contact_id`),
  KEY `fk_profile_city1_idx` (`city_ptt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name_surname`, `description`, `published_date`, `last_seen_date`, `is_missing`, `image`, `contact_id`, `city_ptt`, `last_seen_destination`) VALUES
(1, 'Marko Marković', 'Ne znamo gdje je.', '2014-05-18 22:00:00', '2014-05-13 22:00:00', 1, '', 1, 71420, 'Poslednji put vidjen u ulici Svetog Save.'),
(3, 'Ivan Marković', 'Ne znamo gdje je.', '2014-05-18 22:00:00', '2014-05-13 22:00:00', 0, '', 2, 73240, 'Poslednji put vidjen u ulici Svetog Save.'),
(4, 'Maja Marković', 'Ne znamo gdje je.', '2014-05-18 22:00:00', '2014-05-13 22:00:00', 0, '', 3, 73240, 'Poslednji put vidjen u ulici Svetog Save.'),
(5, 'Igor ', 'Neki opis', '2014-05-19 01:05:27', '2017-05-20 12:00:00', 1, '', 5, 74200, 'Trebinje'),
(6, 'Test slike', 'test', '2014-05-19 02:05:40', '2019-05-20 12:00:00', 1, NULL, 6, 71420, 'test'),
(7, 'Igor', 'Neki opis', '2014-05-19 02:05:24', '2022-05-20 12:00:00', 1, 'jahorina.jpg', 7, 71420, 'test'),
(8, 'aaaa', 'aaaa', '2014-05-19 09:05:30', '2014-05-20 12:00:00', 1, 'jahorina.jpg', 14, 71420, 'aaaa'),
(9, 'eeee', 'eeeee', '2014-05-19 09:05:12', '2022-05-20 12:00:00', 1, 'jahorina.jpg', 16, 71420, 'eeee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1400520270),
('m140519_092248_intial', 1400520278),
('m140519_171824_evakuisani', 1400520279);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'Golub', '1bed2e6bba53bf08328ab88464771d2c', 'goolub.igor@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `fk_page_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_profile_contact` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_city1` FOREIGN KEY (`city_ptt`) REFERENCES `city` (`ptt`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

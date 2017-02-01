-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 11:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestatedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartmants`
--

CREATE TABLE IF NOT EXISTS `apartmants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `space` int(20) NOT NULL,
  `rooms` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `apartmants`
--

INSERT INTO `apartmants` (`id`, `city`, `street`, `space`, `rooms`, `price`, `slika`) VALUES
(1, 'Sarajevo', 'Titova ulica 32', 56, 2, 50000, 'http://www.market.ba/slike/oglasi/820015.1.jpg'),
(6, 'Mostar', 'Mostarska 32', 44, 4, 44444, 'http://localhost/images/sx_749221.1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `space` int(20) NOT NULL,
  `rooms` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `city`, `street`, `space`, `rooms`, `price`, `slika`) VALUES
(1, 'Sarajevo', 'Ferhadija 52', 32, 12, 125, 'http://img.halooglasi.com/slike/oglasi/Thumbs/160411/m/kuca-na-prodaju-5425438972803-71779928482.jpg'),
(2, 'Zagreb', 'Marticeva 23', 45, 3, 231, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(3, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(4, 'Sarajevo', 'Titova 31', 75, 1, 2313, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(5, 'Tuzla', 'Ulica Armije BiH 52', 88, 21, 21412, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(6, 'Mostar', 'Kralja Tomislava 52', 100, 2, 1231, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(7, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(8, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(9, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(10, 'Sarajevo', 'Titova 31', 125, 1, 2313, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(11, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(12, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(13, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(14, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(15, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(16, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(17, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(18, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(19, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(20, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(21, 'Sarajevo', 'Ferhadija 52', 32, 15, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(22, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(23, 'Zagreb', 'Marticeva 23', 45, 3, 231, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(24, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(25, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(26, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(27, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(28, 'Zagreb', 'Marticeva 23', 45, 3, 231, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(29, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(30, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(31, 'Zenica', 'Zeljezarska bb', 12, 1, 123, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(32, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(33, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg'),
(34, 'Tuzla', 'Ulica Armije BiH 52', 88, 21, 21412, 'http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg'),
(35, 'Sarajevo', 'Ferhadija 52', 32, 2, 125, 'https://i.ytimg.com/vi/qeIdhCGQcog/hqdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `birthday`) VALUES
(2, 'admin', 'admin', 'adminko', 'adminkovic', '0000-00-00'),
(3, 'mujo', 'mujo', 'mujo', 'mujic', '1980-06-18'),
(5, 'suljo', 'suljic', 'suljo', 'suljic', '2016-06-13'),
(6, 'hamo', 'hamic', 'hamo', 'hamo', '1989-05-25'),
(7, 'aaa', 'aaa', 'aaaa', 'aaaaa', '1990-12-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

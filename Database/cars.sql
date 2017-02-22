-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2014 at 11:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `phone` int(30) NOT NULL,
  `company` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `fname`, `phone`, `company`, `email`, `description`) VALUES
(1, 'Amos Kimutai Tum', 2147483647, 'sf', 'amostum5@gmail.com', ''),
(2, 'Amos Kimutai Tum', 2147483647, 'sadfdg', 'amostum5@gmail.com', 'dgfe');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `amount` int(30) NOT NULL,
  `service` text NOT NULL,
  `cnumber` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `service`, `cnumber`, `name`, `address`, `email`, `phone`) VALUES
(1, 120000, 'Bank Transfar', '2454', 'Amos Kimutai Tum', '44 LESSOS', 'amostum5@gmail.com', 2147483647),
(2, 120000, 'Bank Transfar', '2454', 'Amos Kimutai Tum', '44 LESSOS', 'amostum5@gmail.com', 2147483647),
(3, 120000, 'Bank Transfar', '2454', 'Amos Kimutai Tum', '44 LESSOS', 'amostum5@gmail.com', 2147483647),
(4, 120000, 'Bank Transfar', '2454', 'Amos Kimutai Tum', '44 LESSOS', 'amostum5@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `mobile` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `secondname`, `username`, `pass`, `email`, `gender`, `mobile`) VALUES
(1, 'Amos', 'Tum', 'amos', '81dc9bdb52d04dc20036dbd8313ed055', 'amostum5@gmail.com', 'Male', 2147483647),
(3, 'Amos', 'Tum', 'amos', '4a7d1ed414474e4033ac29ccb8653d9b', 'amostum5@gmail.com', 'Male', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`) VALUES
(2, 'Amos Kimutai Tum', 'dsgtrhtrhtrhtrhttrghtrg\r\newgergerg\r\n\r\ner'),
(3, 'Toyota', 'dsgerh');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `location`, `name`, `price`, `description`) VALUES
(2, 'cars/mp011_015mb.jpg', 'ford ', '120000', 'very fast car'),
(3, 'cars/dacia-duster-to-race-in-2013-dakar-rally-video-photo-gallery-53433-7.jpg', 'Mitsubishi', '130000', 'Powerful car');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `location`, `caption`) VALUES
(1, 'photos/dacia-duster-to-race-in-2013-dakar-rally-video-photo-gallery-53433-7.jpg', '12000s fe'),
(2, 'photos/3D-graphics_Red_Technology_006870_.jpg', 'dsbgdf'),
(3, 'photos/984248_1389685055.png', 'safa'),
(4, 'photos/517515_1373013388.png', 'zsafergh'),
(5, 'photos/dandroidsuperrobotwallpaper.jpg', 'asferghtrh'),
(6, 'photos/121020_1374492536.jpg', 'asfhrgjryj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

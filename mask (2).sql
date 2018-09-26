-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2018 at 09:39 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mask`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `cat` int(5) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat`, `category`) VALUES
(1, 'T-Shirt'),
(2, 'Cap and Hats'),
(3, 'Mugs'),
(4, 'Phone Cover'),
(5, 'Pillow Cover'),
(6, 'Hoodie');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `del` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `name`, `email`, `password`, `del`) VALUES
(1, 'Midhun', 'mmockuwait@gmail.com', 'miya1234', 0),
(2, 'Priya', 'priyamidhun7@gmail.com', '1234miya', 0),
(3, 'Pooja', 'poojaraj9421@gmail.com', 'helloworld', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `item_no` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `price` double(5,3) NOT NULL,
  `offer_occation` varchar(150) NOT NULL DEFAULT 'null',
  `offer_price` double(5,3) NOT NULL DEFAULT '0.000',
  `offer_bit` int(5) NOT NULL DEFAULT '0',
  `del` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `item_no`, `category`, `subcat`, `image`, `price`, `offer_occation`, `offer_price`, `offer_bit`, `del`) VALUES
(1, 'P0MD040125', 'T-Shirt', 'Single', 'img/20.jpeg', 9.000, 'Ramadan', 1.500, 1, 0),
(2, 'P0MD034125', 'T-Shirt', 'Couple', 'img/21.jpeg', 11.000, 'null', 0.000, 0, 0),
(3, 'P0MD034126', 'Mugs', 'All', 'img/22.jpg', 11.000, 'null', 0.000, 0, 0),
(4, 'P0MD034127', 'Phone Cover', 'Single', 'img/19.jpeg', 6.000, 'null', 0.000, 0, 0),
(5, 'P0MD034128', 'Cap and Hats', 'Couple', 'img/27.jpg', 11.000, 'null', 0.000, 0, 0),
(6, 'P0MD034127', 'Hoodie', 'Single', 'img\\hood.jpg', 11.000, 'null', 0.000, 0, 0),
(7, 'P0MD034124', 'Pillow Cover', 'All', 'img\\pillow.jpg', 5.000, 'null', 0.000, 0, 0),
(8, 'P0MD030425', 'T-Shirt', 'Couple', 'img/15.jpeg', 11.000, 'null', 0.000, 0, 0),
(9, 'P0MD041250', 'T-Shirt', 'Single', 'img/54132.jpg', 6.000, 'null', 0.000, 0, 0),
(10, 'P0MD005412', 'T-Shirt', 'Couple', 'img/123.jpg', 11.000, 'null', 0.000, 0, 0),
(11, 'P0MD005412', 'T-Shirt', 'Couple', 'img/111.jpg', 11.000, 'null', 0.000, 0, 0),
(16, 'P0MD012345', 'Cap and Hats', 'Couple', 'img/25.jpg', 10.000, 'null', 0.000, 0, 0),
(17, 'P0MD003124', 'Cap and Hats', 'Couple', 'img/26.jpg', 10.000, 'null', 0.000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `rid` int(5) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `c_address` varchar(700) NOT NULL,
  `c_contact` varchar(50) NOT NULL,
  `t_products` varchar(500) NOT NULL,
  `t_desc` varchar(1500) NOT NULL,
  `t_price` varchar(50) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `del_date` varchar(50) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`rid`, `c_name`, `c_address`, `c_contact`, `t_products`, `t_desc`, `t_price`, `order_date`, `del_date`) VALUES
(1, 'pooja', 'Raipur', '9424284027', '1', 'One T-shirt Pink Color Micky print', '9', '2018-06-14', '2018-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `rid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(1000) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

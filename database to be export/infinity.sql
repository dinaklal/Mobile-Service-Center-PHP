-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2016 at 06:50 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `amount`, `date`) VALUES
(1, 1000, '2016-08-26'),
(1, 1000, '2016-08-26'),
(1, 45, '2016-08-26'),
(1, 45, '2016-08-26'),
(3, 412, '2016-08-26'),
(3, 444, '2016-08-26'),
(1, 4, '2016-08-26'),
(999, 44, '2016-08-26'),
(999, 544, '2016-08-26'),
(999, 55, '2016-08-26'),
(2, 55, '2016-08-26'),
(999, 5, '2016-08-26'),
(2, 0, '2016-08-26'),
(2, 20000, '2016-08-26'),
(6, 1000, '2016-08-26'),
(5, 1000, '2016-08-26'),
(7, 500, '2016-08-26'),
(1, 1000, '2016-08-26'),
(1, 1000, '2016-08-26'),
(7, 1000, '2016-08-26'),
(9, 500, '2016-08-29'),
(1, 4500, '2016-09-20'),
(1, 100000, '2016-09-20'),
(12, 500, '2016-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `problem` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `payment` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact`, `place`, `type`, `model`, `description`, `problem`, `amount`, `status`, `date`, `password`, `payment`) VALUES
(1, 'l;`mm`mm`mm`m', 'l', 'lml', 'Mobiles', 'mml', 'mmm', 'lmlmlm', 0, 'pending', '2016-10-15', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `sino` int(100) NOT NULL AUTO_INCREMENT,
  `user` int(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sino`, `user`, `message`, `date`) VALUES
(1, 1, 'dadsadsa', '2016-10-17'),
(2, 1, ',asdn,asndmasdn', '2016-10-17'),
(3, 1, 'nnn', '2016-10-17'),
(4, 1, 'mbnb', '2016-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `balance` int(60) NOT NULL,
  `works_pending` int(20) NOT NULL,
  `total_works_given` int(20) NOT NULL,
  `total_money_given` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `place`, `contact`, `balance`, `works_pending`, `total_works_given`, `total_money_given`) VALUES
(1, 'rubix', 'mattannur', '9645719298', 3173109, 20, 20, 108684),
(2, 'KNNN', 'NNN', 'N', -20055, 3, 3, 20155),
(3, 'xavi', 'kannur', '9645719298', -656, 1, 1, 856),
(4, 'lava', 'MATTANNUR', '956+6545456456', 0, 1, 1, 0),
(5, 'space', 'MATTANNUR', '9665655656565', 500, 1, 1, 1000),
(6, 'LAVA MOBILES', 'MATTANNUR', '654655655', -800, 1, 1, 1000),
(7, 'rubix', 'kannur', '9645719298', 0, 1, 1, 1500),
(8, 'sharat', 'kadalayi', '99578787', 0, 0, 0, 0),
(9, 'spaceee', 'MATTANNUR', '9566565', 1000, 1, 1, 500),
(10, 'jlj', 'jjlj', 'ljlj', 0, 0, 0, 0),
(11, 'rubix', 'knknkn', '6656565', 0, 0, 0, 0),
(12, 'LAVA G', 'MATTANNUR', '9645719298', 500, 1, 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `type` varchar(60) NOT NULL,
  `model` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `problem` varchar(60) NOT NULL,
  `shop_id` int(60) NOT NULL,
  `date` date NOT NULL,
  `amount` int(60) NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `type`, `model`, `description`, `problem`, `shop_id`, `date`, `amount`, `status`) VALUES
(1, 'Mobiles', 'lenovo g500', '6395', 'display', 1, '2016-08-07', 100, 'Completed'),
(2, 'Mobiles', 'oj', 'ljlj', 'jjj', 1, '2016-08-07', 3434, 'Completed'),
(3, 'Mobiles', 'oj', 'ljlj', 'jjj', 1, '2016-08-07', 2323, 'Completed'),
(4, 'Mobiles', 'oj', 'ljlj', 'jjj', 1, '2016-08-07', 100, 'Completed'),
(5, 'Mobiles', 'oj', 'ljlj', 'jjj', 1, '2016-08-07', 100, 'Completed'),
(6, 'Mobiles', 'oj', 'ljlj', 'jjj', 1, '2016-08-07', 0, 'Completed'),
(7, 'Mobiles', 'oj', 'ljlj', 'jjj', 1, '2016-08-07', 0, 'Completed'),
(8, 'Computers', 'hh', 'kh', 'h', 1, '2016-08-07', 450, 'Completed'),
(9, 'Computers', 'hh', 'kh', 'h', 1, '2016-08-07', 3213123, 'Cannot Repaired'),
(10, 'Computers', 'khkjh', 'hk', 'hhkk', 1, '2016-08-07', 4440, 'Completed'),
(11, 'Computers', 'khkjh', 'hk', 'hhkk', 1, '2016-08-07', 12223, 'Completed'),
(12, 'Computers', 'lkj', 'lkj', 'jkl\r\n', 1, '2016-08-07', 0, 'pending'),
(13, 'Computers', 'KLJJ', 'KJK', 'JHK\r\n', 1, '2016-08-07', 0, 'pending'),
(14, 'Computers', 'KKJ', 'KJ', 'JJ', 1, '2016-08-07', 0, 'pending'),
(15, 'Mobiles', 'jjhj', 'jghjgj', 'ggj', 1, '2016-08-07', 0, 'pending'),
(16, 'Computers', 'leno', '56222', 'slmlmm', 1, '2016-08-12', 0, 'pending'),
(17, 'Computers', 'lh', 'kjhkhk', 'hhkhk\r\n', 1, '2016-08-12', 0, 'pending'),
(18, 'Computers', '522', '666654646', 'display', 3, '2016-08-22', 200, 'pending'),
(19, 'Mobiles', 'nokia', '646464', 'display not working', 4, '2016-08-24', 0, 'Completed'),
(20, 'Computers', 'jjhhhhkhkh', 'hkhkhkhkh', 'hkhkhkjkhkhkhkbkdnfkdnskfk dskfndskfnkdns ksdnfkndksnfkndsak', 2, '2016-08-25', 100, 'pending'),
(21, '', '', '', '', 2, '2016-08-26', 0, 'pending'),
(22, '', '', '', '', 1, '2016-08-26', 0, 'pending'),
(23, 'Mobiles', 'wedfewcxc', 'ssds', 'jlkjhkkl', 1, '2016-08-26', 0, 'pending'),
(24, 'Computers', 'lenovo g500', '656656', 'display', 5, '2016-08-26', 1500, 'Completed'),
(25, 'Mobiles', 'lkslkd', 'kljjjklj', 'jlj', 6, '2016-08-26', 200, 'pending'),
(26, 'Computers', 'lenovo g500', '5645454', 'dis[laef', 7, '2016-08-26', 1500, 'Completed'),
(27, 'Computers', 'assas', '464646464', 'diutidwd', 2, '2016-08-26', 0, 'pending'),
(28, 'Mobiles', 'lenovo g500', '6516', 'soojd', 9, '2016-08-29', 1500, 'Completed'),
(29, 'Computers', 'ughgg', '9444545', 'dipal', 1, '2016-09-20', 45500, 'Completed'),
(30, 'Mobiles', 'ihi', 'hihi', 'hihi', 12, '2016-09-20', 1000, 'Completed');

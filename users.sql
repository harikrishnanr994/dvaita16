-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 06:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dvaita16`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `activation` varchar(255) NOT NULL,
  `activated` tinyint(4) NOT NULL,
  `checked_in` tinyint(4) NOT NULL,
  `rp_activate` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `college` text NOT NULL,
  `accommodation` varchar(5) NOT NULL,
  `gender` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `email`, `password`, `salt`, `activation`, `activated`, `checked_in`, `rp_activate`, `mobile`, `college`, `accommodation`, `gender`) VALUES
(1, 'D161', 'Jasif', 'jasifkolangath@gmail.com', 'UZt1kF3Grg7IrvlYcZgCtOfc9XBhOGI3NjdjMTcy', 'a8b767c172', 'fbae46375dcbd2e1151db795ba85cce1', 0, 0, '', '', 'NSS College of Engineering', 'on', 'male'),
(2, 'D162', 'Jasif', 'jasifkolangath123@gmail.com', 'wOJpc7bPopGLVh/kgcapeODA69ZlOTZmY2UwMzcw', 'e96fce0370', '544c18d2d70dda65595c814c0b83f644', 0, 0, '', '9605033776', 'NSS College of Engineering', 'on', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

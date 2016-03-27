-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2015 at 03:36 AM
-- Server version: 5.6.22
-- PHP Version: 5.5.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii_thebook`
--

--
-- Dumping data for table `p2m_gender`
--

INSERT INTO `p2m_gender` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Other');

--
-- Dumping data for table `p2m_role`
--

INSERT INTO `p2m_role` (`id`, `name`, `value`) VALUES
(2, 'User', 10),
(3, 'Admin', 20);

--
-- Dumping data for table `p2m_status`
--

INSERT INTO `p2m_status` (`id`, `name`, `value`) VALUES
(1, 'Active', 10),
(2, 'Pending', 5);

--
-- Dumping data for table `p2m_user_type`
--

INSERT INTO `p2m_user_type` (`id`, `name`, `value`) VALUES
(1, 'Free', 10),
(2, 'Paid', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

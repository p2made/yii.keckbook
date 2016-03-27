-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2015 at 05:14 AM
-- Server version: 5.6.22
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii_thebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `p2m_gender`
--

CREATE TABLE IF NOT EXISTS `p2m_gender` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2m_migration`
--

CREATE TABLE IF NOT EXISTS `p2m_migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2m_profile`
--

CREATE TABLE IF NOT EXISTS `p2m_profile` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `given_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `family_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender_id` int(11) unsigned NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2m_role`
--

CREATE TABLE IF NOT EXISTS `p2m_role` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2m_status`
--

CREATE TABLE IF NOT EXISTS `p2m_status` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2m_user`
--

CREATE TABLE IF NOT EXISTS `p2m_user` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) unsigned NOT NULL DEFAULT '10',
  `status_id` int(11) unsigned NOT NULL DEFAULT '10',
  `user_type_id` int(11) unsigned NOT NULL DEFAULT '10',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2m_user_type`
--

CREATE TABLE IF NOT EXISTS `p2m_user_type` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p2m_gender`
--
ALTER TABLE `p2m_gender`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `p2m_profile`
--
ALTER TABLE `p2m_profile`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `user_id_idxfk` (`user_id`), ADD KEY `gender_id_idxfk` (`gender_id`);

--
-- Indexes for table `p2m_role`
--
ALTER TABLE `p2m_role`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `p2m_status`
--
ALTER TABLE `p2m_status`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `p2m_user`
--
ALTER TABLE `p2m_user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `role_id` (`role_id`), ADD UNIQUE KEY `status_id` (`status_id`), ADD UNIQUE KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `p2m_user_type`
--
ALTER TABLE `p2m_user_type`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p2m_gender`
--
ALTER TABLE `p2m_gender`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p2m_profile`
--
ALTER TABLE `p2m_profile`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p2m_role`
--
ALTER TABLE `p2m_role`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p2m_status`
--
ALTER TABLE `p2m_status`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p2m_user`
--
ALTER TABLE `p2m_user`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p2m_user_type`
--
ALTER TABLE `p2m_user_type`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `p2m_profile`
--
ALTER TABLE `p2m_profile`
ADD CONSTRAINT `p2m_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `p2m_user` (`id`),
ADD CONSTRAINT `p2m_profile_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `p2m_gender` (`id`);

--
-- Constraints for table `p2m_role`
--
ALTER TABLE `p2m_role`
ADD CONSTRAINT `p2m_role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `p2m_user` (`role_id`);

--
-- Constraints for table `p2m_status`
--
ALTER TABLE `p2m_status`
ADD CONSTRAINT `p2m_status_ibfk_1` FOREIGN KEY (`id`) REFERENCES `p2m_user` (`status_id`);

--
-- Constraints for table `p2m_user_type`
--
ALTER TABLE `p2m_user_type`
ADD CONSTRAINT `p2m_user_type_ibfk_1` FOREIGN KEY (`id`) REFERENCES `p2m_user` (`user_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

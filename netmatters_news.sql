-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 06:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` text NOT NULL,
  `comp_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `marketing` text NOT NULL,
  `submit_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `comp_name`, `email`, `phone`, `subject`, `message`, `marketing`, `submit_time`) VALUES
('test', 'test', 'Test2@gmail.com', '9999999999', 'test', 'testing my php', 'on', '2022-02-01 17:31:59'),
('Test 2', 'testing corp', 'fake@email.com', '888888888', 'SANDWICHES', 'extra sauce', '', '2022-02-01 17:32:42');

-- --------------------------------------------------------

--
-- Stand-in structure for view `default view`
-- (See below for the actual view)
--
CREATE TABLE `default view` (
);

-- --------------------------------------------------------

--
-- Table structure for table `email_signup`
--

CREATE TABLE `email_signup` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `marketing` text NOT NULL,
  `submit_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_signup`
--

INSERT INTO `email_signup` (`name`, `email`, `marketing`, `submit_time`) VALUES
('test', 'test@test.test', '', '2022-02-01 17:29:54'),
('test 2', '2many@tests.forme', '', '2022-02-01 17:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `news_entries`
--

CREATE TABLE `news_entries` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `image_src` text NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `author` text NOT NULL,
  `author_image` text NOT NULL,
  `colour` text NOT NULL,
  `date_published` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_entries`
--

INSERT INTO `news_entries` (`id`, `category`, `image_src`, `title`, `paragraph`, `author`, `author_image`, `colour`, `date_published`) VALUES
(3, 'CAREERS', 'imgs/latest-careers-1.png', 'Senior IT Support Technician', 'Salary Range Salary (subject to experience) + Profit Share + Pension Hours 40 hours per week, Monday...', 'Rob George', 'imgs/latest-careers-2.png', 'sticker-blue', '2021-05-17'),
(2, 'NEWS', 'imgs/latest-news-1.png', 'Congratulations to Lloyd Cox for Graduating...', 'We are pleased to announce that after a year spent on our Netmatters Scion Coalition Scheme (SCS)...', 'Netmatters Ltd', 'imgs/favicon-large.png', 'sticker-purple', '2021-05-10'),
(1, 'NEWS', 'imgs/latest-news-2.png', 'April 2021 Notables', 'Every month we celebrate the most notable of employees here at Netmatters. Each department head...', 'Netmatters Ltd', 'imgs/favicon-large.png', 'sticker-red', '2021-05-06');

-- --------------------------------------------------------

--
-- Structure for view `default view`
--
DROP TABLE IF EXISTS `default view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `default view`  AS SELECT `news_entries`.`category` AS `category`, `news_entries`.`img` AS `img`, `news_entries`.`title` AS `title`, `news_entries`.`paragraph` AS `paragraph`, `news_entries`.`author` AS `author`, `news_entries`.`author_image` AS `author_image`, `news_entries`.`date_published` AS `date_published` FROM `news_entries` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

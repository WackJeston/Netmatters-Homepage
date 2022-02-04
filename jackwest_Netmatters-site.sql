-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2022 at 03:04 PM
-- Server version: 8.0.28
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jackwest_Netmatters-site`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `comp_name`, `email`, `phone`, `subject`, `message`, `marketing`, `submit_time`) VALUES
('John', 'Snow', 'snow@cblack.north', '7777777777', 'Winter is coming', 'snowwwwwwww', 'on', '2022-02-04 14:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `email_signup`
--

CREATE TABLE `email_signup` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `marketing` text NOT NULL,
  `submit_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `email_signup`
--

INSERT INTO `email_signup` (`name`, `email`, `marketing`, `submit_time`) VALUES
('poo', 'poo@poo.poo', '', '2022-02-04 14:50:04'),
('poo', 'poo@poo.poo', '', '2022-02-04 14:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `news_entries`
--

CREATE TABLE `news_entries` (
  `id` int NOT NULL,
  `category` text NOT NULL,
  `image_src` text NOT NULL,
  `title` text NOT NULL,
  `paragraph` text NOT NULL,
  `author` text NOT NULL,
  `author_image` text NOT NULL,
  `colour` text NOT NULL,
  `date_published` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_entries`
--

INSERT INTO `news_entries` (`id`, `category`, `image_src`, `title`, `paragraph`, `author`, `author_image`, `colour`, `date_published`) VALUES
(3, 'CAREERS', 'imgs/latest-careers-1.png', 'Senior IT Support Technician', 'Salary Range Salary (subject to experience) + Profit Share + Pension Hours 40 hours per week, Monday...', 'Rob George', 'imgs/latest-careers-2.png', 'sticker-blue', '2021-05-17'),
(2, 'NEWS', 'imgs/latest-news-1.png', 'Congratulations to Lloyd Cox for Graduating...', 'We are pleased to announce that after a year spent on our Netmatters Scion Coalition Scheme (SCS)...', 'Netmatters Ltd', 'imgs/favicon-large.png', 'sticker-purple', '2021-05-10'),
(1, 'NEWS', 'imgs/latest-news-2.png', 'April 2021 Notables', 'Every month we celebrate the most notable of employees here at Netmatters. Each department head...', 'Netmatters Ltd', 'imgs/favicon-large.png', 'sticker-red', '2021-05-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

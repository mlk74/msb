-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2023 at 09:26 PM
-- Server version: 10.9.3-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mastersaudi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', '123'),
(2, 'Admino', 'Admin@yu.com', '123454');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `fieldId` int(11) NOT NULL,
  `fieldName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`fieldId`, `fieldName`) VALUES

(2, 'chef'),
(3, 'coding'),
(4, 'science'),
(5, 'class'),
(6, 'technology');

-- --------------------------------------------------------

--
-- Table structure for table `field_follow`
--

CREATE TABLE `field_follow` (
  `id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field_follow`
--

INSERT INTO `field_follow` (`id`, `field_id`, `follower_id`) VALUES
(1, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE `follower` (
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `post_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspirers`
--

CREATE TABLE `inspirers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(999) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fields` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspirers`
--

INSERT INTO `inspirers` (`id`, `name`, `description`, `fields`) VALUES

(8, 'Abdullah Alsabaa', NULL, 'chef'),
(9, 'omar', 'Ahmad is a nice engi', 'Engineering'),
(10, 'ali', 'Ahmad is a nice engi', 'technology'),
(11, 'kok', 'Ahmad is a nice engi', 'science');

-- --------------------------------------------------------

--
-- Table structure for table `inspirers_fields`
--

CREATE TABLE `inspirers_fields` (
  `linkid` int(11) NOT NULL,
  `inspirer_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `field_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `inspirers_fields`
--

INSERT INTO `inspirers_fields` (`linkid`, `inspirer_id`, `field_id`, `field_name`) VALUES
(1, 3, 2, NULL),
(2, 4, 1, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `inspirer_follow`
--

CREATE TABLE `inspirer_follow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspirer_follow`
--

INSERT INTO `inspirer_follow` (`id`, `user_id`, `follower_id`) VALUES
(1, 32, 10),
(2, 5, 15),
(3, 1414, 1212),
(5, 3, 10),
(6, 3, 10),
(7, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(15) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `rid` int(10) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `social_post`
--

CREATE TABLE `social_post` (
  `id` int(11) NOT NULL,
  `postFieldId` int(11) NOT NULL,
  `post_inspirer_id` int(11) NOT NULL,
  `title` varchar(225) CHARACTER SET utf8mb4 NOT NULL,
  `description` text NOT NULL,
  `video` blob DEFAULT NULL,
  `embbed` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `social_post`
--

INSERT INTO `social_post` (`id`, `postFieldId`, `post_inspirer_id`, `title`, `description`, `video`, `embbed`, `created`) VALUES
(1, 0, 0, 'd', 's', '', NULL, '2023-01-15 19:13:07'),
(2, 0, 0, 'VideoTest2', 'some sample text......', '', NULL, '2023-01-15 19:27:39'),
(3, 2, 3, 'عبدالله السبع', 'المؤثر', NULL, 'iIVVnVG9d2k', '2023-01-16 02:57:23'),
(4, 2, 3, 'New video test', 'Wow', '', 'lksd', '2023-01-17 21:56:37'),
(5, 2, 3, 'New video test', 'Wow', '', 'lksd', '2023-01-17 22:27:22'),
(6, 2, 3, 'New video test', 'Wow', NULL, 'lksd', '2023-01-17 22:29:35'),
(7, 2, 3, 'd', '2', NULL, 's', '2023-01-17 22:35:26'),
(8, 1, 4, 'Engineering tips', 'Yes this works', NULL, '2929w', '2023-01-17 22:36:25'),
(9, 1, 4, 'Engineering tips', 'Yes this works', NULL, '2929w', '2023-01-17 22:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dateob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `city`, `country`, `dateob`, `gender`) VALUES
(1, 'Someone', 'someone@gmail.com', '123', 'King Saud University', 'Saudi Arabia', '2016-02-02', 'Male'),
(4, 'sample', 'sample@gmail.com', '123', 'Al Khobar', 'Saudi Arabia', '2016-02-02', 'Male'),
(5, 'user1', 'user1@gmail.com', '123', 'Eastern Province? Al Hofuf', 'Saudi Arabia', '2018-03-02', 'Male'),
(6, 'user2', 'user2@gmail.com', '123', 'King Saud University', 'Saudi Arabia', '2018-03-02', 'Male'),
(7, 'abc', 'abc@gmail.com', 'd3d3', 'Riyadh', 'Saudi Arabia', '2021-12-01', 'Male'),
(8, 'admin22', 'admin@admin.com', '123', 'a2', 'Afghanistan', '2021-12-10', 'Male'),
(9, 'Yasir', 'Yasir@gmail.com', 'y2', 'Abha', 'Saudi Arabia', '1111-11-11', 'Male'),
(10, '2', 'a@a.com', '12', '3', '23', '2022-11-29', 'Female'),
(11, 'y12', 'a@a2.com', '12', 'y', 'y', '2022-11-29', 'Female'),
(12, '2', 'aa@aaa.com', '12', 's', 'd', '2023-01-25', 'Male'),
(13, 'ad', 'aa@aaa.com', 'asdasdasdasd', 's', 'American Samoa', '2023-01-17', 'Male'),
(14, 'ad', 'aa@aaa.com', 'adadadadadad', 's', 'American Samoa', '2023-01-26', 'Male'),
(15, 's', 'aa@aaa.com', 'ad3123123', 's', 'Angola', '2023-02-08', 'Male'),
(16, 'Final', 'aa@a.com', '123456', 'Riyadh', 'Saudi Arabia', '2023-01-05', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`fieldId`);

--
-- Indexes for table `field_follow`
--
ALTER TABLE `field_follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_follower_id` (`follower_id`),
  ADD KEY `fk_field_id` (`field_id`);

--
-- Indexes for table `follower`
--
ALTER TABLE `follower`
  ADD PRIMARY KEY (`user_id`,`follower_id`),
  ADD UNIQUE KEY `follower_id` (`follower_id`,`user_id`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `inspirers`
--
ALTER TABLE `inspirers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspirers_fields`
--
ALTER TABLE `inspirers_fields`
  ADD PRIMARY KEY (`linkid`);

--
-- Indexes for table `inspirer_follow`
--
ALTER TABLE `inspirer_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_post`
--
ALTER TABLE `social_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `fieldId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `field_follow`
--
ALTER TABLE `field_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspirers`
--
ALTER TABLE `inspirers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inspirers_fields`
--
ALTER TABLE `inspirers_fields`
  MODIFY `linkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inspirer_follow`
--
ALTER TABLE `inspirer_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_post`
--
ALTER TABLE `social_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

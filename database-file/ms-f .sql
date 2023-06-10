-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 يونيو 2023 الساعة 20:28
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms-f`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', '123'),
(2, 'Admino', 'Admin@yu.com', '123454'),
(3, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` int(15) NOT NULL DEFAULT 0,
  `userid` int(10) DEFAULT NULL,
  `rid` int(10) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`id`, `userid`, `rid`, `comment`) VALUES
(0, 10, 3, 'Second!'),
(0, 10, 3, 'Try again!'),
(0, 10, 3, 'Duplicate Success!'),
(0, 10, 3, 'Final Attempt!'),
(0, 10, 3, 'd'),
(0, 1, 3, 'Admin Comment'),
(0, 10, 3, 'Sprint 4 !'),
(0, 10, 9, 'Test1'),
(0, 10, 10, 'd'),
(0, 10, 5, 'd'),
(0, 10, 5, 'd'),
(0, 10, 8, 'test4'),
(0, 19, 11, 'ahshsv'),
(0, 18, 3, 'I enjoyed watching this!'),
(0, 19, 2, 'Gagaga'),
(0, 19, 8, 'A'),
(0, 20, 3, 'Needed to hear this, thank you!'),
(0, 21, 37, 'جيد جدا'),
(0, 22, 45, 'These meals look SO delicious!!! \r\nI am really looking forward to starting to make them.'),
(0, 23, 37, 'Wow '),
(0, 23, 30, 'جميل'),
(0, 24, 30, 'So good'),
(0, 10, 56, 'goood'),
(0, 20, 37, 'kkvkkvfdslvkflkdvbkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(0, 41, 38, 'Comment Test');

-- --------------------------------------------------------

--
-- بنية الجدول `fields`
--

CREATE TABLE `fields` (
  `fieldId` int(11) NOT NULL,
  `fieldName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `fields`
--

INSERT INTO `fields` (`fieldId`, `fieldName`) VALUES
(1, 'Engineering'),
(2, 'chef'),
(3, 'coding'),
(4, 'science'),
(5, 'class'),
(6, 'technology');

-- --------------------------------------------------------

--
-- بنية الجدول `field_follow`
--

CREATE TABLE `field_follow` (
  `id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `field_follow`
--

INSERT INTO `field_follow` (`id`, `field_id`, `follower_id`) VALUES
(1, 2, 10),
(2, 0, 16),
(3, 0, 16),
(4, 2, 16),
(5, 1, 16),
(6, 6, 16),
(7, 4, 16),
(8, 3, 16),
(9, 5, 16),
(10, 6, 10),
(12, 3, 10),
(13, 1, 19),
(14, 1, 20),
(31, 1, 23),
(32, 3, 23),
(41, 1, 21),
(42, 2, 21);

-- --------------------------------------------------------

--
-- بنية الجدول `follower`
--

CREATE TABLE `follower` (
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `forum_posts`
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
-- بنية الجدول `inspirers`
--

CREATE TABLE `inspirers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(999) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fields` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `inspirers`
--

INSERT INTO `inspirers` (`id`, `name`, `description`, `fields`) VALUES
(6, 'Ahmed', 'Ahmad is a nice engi', 'Engineering'),
(7, 'Abdullah', 'a', 'Engineering'),
(8, 'kok', 'a', 'chef'),
(9, 'ali', 'we', 'science'),
(10, 'omar', 'coding ', 'coding'),
(11, 'aser', 'aa', 'technology'),
(12, 'mohamed', 'aa', 'class'),
(13, 'naseer', 'aw', 'class'),
(14, 'Osama Mohamed', '--', 'coding'),
(17, 'Conner Ardman', 'A', 'Engineering'),
(18, 'Ibrahim Adel', 'A', 'class'),
(19, 'Gordon Ramsay', 'A', 'chef'),
(20, 'Khalid Gharib', 'A', 'science'),
(22, 'Sameh Ramadan ', 'A', 'technology');

-- --------------------------------------------------------

--
-- بنية الجدول `inspirers_fields`
--

CREATE TABLE `inspirers_fields` (
  `linkid` int(11) NOT NULL,
  `inspirer_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `field_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `inspirers_fields`
--

INSERT INTO `inspirers_fields` (`linkid`, `inspirer_id`, `field_id`, `field_name`) VALUES
(1, 3, 2, NULL),
(2, 4, 1, 'Engineering'),
(3, 7, 1, 'Engineering'),
(4, 8, 2, 'chef'),
(5, 9, 4, 'science'),
(6, 10, 3, 'coding'),
(7, 11, 6, 'technology'),
(8, 12, 5, 'class'),
(9, 13, 5, 'class'),
(10, 14, 3, 'coding'),
(11, 15, 2, 'chef'),
(12, 16, 2, 'chef'),
(13, 17, 1, 'Engineering'),
(14, 18, 5, 'class'),
(15, 19, 2, 'chef'),
(16, 20, 4, 'science'),
(17, 21, 6, 'technology'),
(18, 22, 6, 'technology');

-- --------------------------------------------------------

--
-- بنية الجدول `inspirer_follow`
--

CREATE TABLE `inspirer_follow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `inspirer_follow`
--

INSERT INTO `inspirer_follow` (`id`, `user_id`, `follower_id`) VALUES
(39, 19, 22),
(41, 17, 23),
(42, 17, 20),
(43, 17, 20),
(55, 14, 21);

-- --------------------------------------------------------

--
-- بنية الجدول `ratings`
--

CREATE TABLE `ratings` (
  `id` int(15) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `rid` int(10) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `ratings`
--

INSERT INTO `ratings` (`id`, `userid`, `rid`, `rating`) VALUES
(2, 10, 3, 3),
(3, 10, 8, 5),
(4, 19, 11, 5),
(5, 18, 3, 4),
(6, 19, 2, 5),
(7, 19, 8, 2),
(8, 20, 3, 4),
(9, 21, 8, 1),
(10, 1, 37, 5),
(11, 21, 37, 5),
(12, 18, 37, 3),
(13, 18, 38, 5),
(14, 22, 45, 5),
(15, 22, 44, 4),
(16, 23, 37, 5),
(17, 23, 30, 3),
(18, 10, 38, 4),
(19, 10, 56, 5),
(20, 10, 30, 4),
(21, 41, 38, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `social_post`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `social_post`
--

INSERT INTO `social_post` (`id`, `postFieldId`, `post_inspirer_id`, `title`, `description`, `video`, `embbed`, `created`) VALUES
(30, 3, 14, 'Osama Mohamed\r\n To handle Hostinger Lesson # 01 Hosting -  Buy Hosting and Raise Your Site to Host', 'Buy Hosting and Raise Your Site for Hosting', NULL, '4ydvMB3Vtc0', '2023-02-12 14:04:25'),
(31, 3, 14, 'Osama Mohamed\r\n Handling Hostinger Lesson # 02 - Create a new email on your account', 'Create a new email on your account', NULL, 'MYeMIylwkbI', '2023-02-12 14:05:59'),
(32, 3, 14, 'Osama Mohamed\r\n Handling Hostinger Lesson # 03 - Learn how to use subdomains', 'Learn how to use subdomains', NULL, 'RnrM5asZ2aI', '2023-02-12 14:07:24'),
(37, 1, 17, 'Conner Ardman How I Would Learn To Code (If I Could Start Over)', ' Learning to code is hard', NULL, 'nqYLM5iFa_U', '2023-02-12 14:53:37'),
(38, 1, 17, 'Conner Ardman Computer Science In 14 Minutes (But Actually Practical)', 'Computer science degrees generally encompass a lot of \"filler\"', NULL, 'a3HlrLETajU', '2023-02-12 14:54:37'),
(39, 1, 17, 'Conner Ardman 8 Things Every Front-End Developer Should  \r\n Know', 'When I was first learning front-end software engineering,', NULL, 'Np3SICQfETg', '2023-02-12 14:55:36'),
(41, 5, 18, 'Ibrahim Adel Comprehensive Course to Learn English from Scratch for Beginners Full Course from Start to Professionalism: Episode 1 ', 'none', NULL, '77IK9T45kiU', '2023-02-12 15:20:02'),
(42, 5, 18, 'Ibrahim Adel Comprehensive Course to Learn English from Scratch for Beginners Full Course from Start to Professionalism: Episode 2', 'None', NULL, 'AZZCsweJaiw', '2023-02-12 15:20:56'),
(43, 5, 18, 'Ibrahim Adel Comprehensive Course for Learning English from Scratch for Beginners Words \r\n about Family: Episode 3', 'None', NULL, 'S_deJPyvtfo', '2023-02-12 15:21:52'),
(44, 2, 19, 'Gordon Ramsays Top Basic Cooking Skills ', 'some basic cooking skills as well as some easy to do recipes. ', NULL, 'FTociictyyE', '2023-02-12 15:23:18'),
(45, 2, 19, 'Gordon Ramsays Favourite Simple Recipes ', 'how to make deliciously simple recipes from Chilli beef lettuce wraps to Miso Poached', NULL, 'EVpBQPw6xTk', '2023-02-12 15:24:11'),
(46, 2, 19, 'Gordon Ramsays Slow Cooked Recipes', 'demonstrates more slow-cooked recipes', NULL, 'OrKnMl_jBgo', '2023-02-12 15:25:27'),
(47, 4, 20, ' Dr. Khaled Gharibi Archaeology J1 ', 'Framework for the dissemination of cultural and knowledge awareness of tour guides', NULL, 'tsu_MYrOomc', '2023-02-12 15:48:37'),
(48, 4, 20, ' Dr. Khaled Gharibi Archaeology J2 ', 'None', NULL, 'dTqauaeygp0', '2023-02-12 15:49:55'),
(49, 4, 20, ' Dr. Khaled Gharibi Archaeology J3', 'Solar calendar and archaeology', NULL, 'W0bxyIWTJVQ', '2023-02-12 15:50:53'),
(53, 6, 22, 'Sameh Ramadan 03. CompTIA A + 194 Power Supply Power Supply Explanation', 'Through this video you will learn some of the basics of electricity and then you will learn about the characteristics of the power provider', NULL, 'A9rExIbfyzs', '2023-02-12 15:59:24'),
(54, 6, 22, 'Sameh Ramadan 01- CompTIA A+ | Introduction to Hardware ', 'In this video you will learn the most important information about hardware in short... as a prelude to more details coming in this fun course', NULL, 'HCdzduik1ZE', '2023-02-12 16:03:18'),
(55, 6, 22, 'Sameh Ramadan 02- CompTIA A+ | Form Factor ', 'Through this video you will learn about Form Factor', NULL, 'GQFeSgssCAo', '2023-02-12 16:03:44'),
(56, 3, 14, 'Osama Mohamed\r\nHow i take \r\nnote as an engneerin zstudentg ', 'Create a new email on your account', NULL, 'ere4SEGeocY', '2023-02-12 14:05:59');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dateob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `code` mediumint(50) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `city`, `country`, `dateob`, `gender`, `code`, `status`) VALUES
(1, 'Someone', 'someone@gmail.com', '123', 'King Saud University', 'Saudi Arabia', '2016-02-02', 'Male', NULL, NULL),
(4, 'sample', 'sample@gmail.com', '123', 'Al Khobar', 'Saudi Arabia', '2016-02-02', 'Male', NULL, NULL),
(5, 'user1', 'user1@gmail.com', '123', 'Eastern Province? Al Hofuf', 'Saudi Arabia', '2018-03-02', 'Male', NULL, NULL),
(6, 'user2', 'user2@gmail.com', '123', 'King Saud University', 'Saudi Arabia', '2018-03-02', 'Male', NULL, NULL),
(7, 'abc', 'abc@gmail.com', 'd3d3', 'Riyadh', 'Saudi Arabia', '2021-12-01', 'Male', NULL, NULL),
(8, 'admin22', 'admin@admin.com', '123', 'a2', 'Afghanistan', '2021-12-10', 'Male', NULL, NULL),
(9, 'Yasir', 'Yasir@gmail.com', 'y2', 'Abha', 'Saudi Arabia', '1111-11-11', 'Male', NULL, NULL),
(10, '2', 'a@a.com', '12', 'Mecca', '23', '2022-11-29', 'Female', NULL, NULL),
(11, 'y12', 'a@a2.com', '12', 'y', 'y', '2022-11-29', 'Female', NULL, NULL),
(12, '2', 'aa@aaa.com', '12', 's', 'd', '2023-01-25', 'Male', 462682, NULL),
(13, 'ad', 'aa@aaa.com', 'asdasdasdasd', 's', 'American Samoa', '2023-01-17', 'Male', 462682, NULL),
(14, 'ad', 'aa@aaa.com', 'adadadadadad', 's', 'American Samoa', '2023-01-26', 'Male', 462682, NULL),
(15, 's', 'aa@aaa.com', 'ad3123123', 's', 'Angola', '2023-02-08', 'Male', 462682, NULL),
(16, 'Final', 'aa@a.com', '123456', 'Riyadh', 'Saudi Arabia', '2023-01-05', 'Female', NULL, NULL),
(17, 'qwqwqwqw', 'qwqwqw@gmsil.com', 'qwqwqwqw', 'riyadh', 'Afghanistan', '2023-01-11', 'Male', NULL, NULL),
(18, 'SprintUser4', 'SprintUser@gmail.com', '123456', 'Riyadh', 'Saudi Arabia', '1997-01-07', 'Male', NULL, NULL),
(19, 'Dodo1234', 'aswcd448@gmail.com', '12', 'As', 'Saudi Arabia', '2023-02-07', 'Male', 0, NULL),
(20, 'fahadalosaimi', 'fahadalosaimi01@gmail.com', 'Af123456', 'RIYADH', 'Saudi Arabia', '2002-01-28', 'Male', NULL, NULL),
(21, 'abod1234', 'aswcd448@gmail.com', '12', 'riyadh', 'American Samoa', '2023-02-02', 'Male', 0, NULL),
(22, 'khalidaaa', 'khalid.aaa@hotmail.co.uk', '12341234', 'riyadh', 'Saudi Arabia', '2001-09-05', 'Male', NULL, NULL),
(23, 'Abod9999', 'aswcd448@gmail.com', '12', 'F', 'Saudi Arabia', '2023-02-13', 'Male', 0, NULL),
(24, 'Sooud1', 'aswcd448@gmail.com', '12', 'A', 'Saudi Arabia', '2023-02-13', 'Male', 0, NULL),
(25, 'FaisalTest', 'fhdhdh@dhdhdh.com', 'faisal123', 'Riyadh', 'Saudi arabia', '2001-07-13', 'Male', NULL, NULL),
(26, 'name', 'fahadalosaimi01@gmail.com', 'afafafafafa', 'RIYADH', 'Saudi Arabia', '2012-12-12', 'Male', NULL, NULL),
(28, 'a', 'sample@gmail.com', 'asd123', 'asdasdadsads', 'American Samoa', '2023-06-06', 'Male', 674958, 'notverified'),
(38, '2', 'sample@gmail.com', 'asd123', 'asdasdadsads', 'Algeria', '2023-06-06', 'Male', 912295, 'notverified'),
(39, '2', 'sample@gmail.com', 'ad123asd', 'asdasdadsads', 'Algeria', '2023-06-06', 'Male', 184354, 'notverified'),
(40, 'admin', 'sample@gmail.com', 'asd123', 'sd', 'Andorra', '2023-06-06', 'Male', 568598, 'notverified'),
(41, 'FinalTest', '441101719@student.ksu.edu.sa', '$2y$10$PizTOB3DqWEa175Dzyw4fuZgVND8raC.f.kiUOmR5eRYPUqy24xi2', 'Riyadh', 'Guinea-bissau', '3212-03-21', 'Female', 0, 'verified'),
(42, 'abod', 'abdullah.aldrwish1@gmail.com', '1212121', 'Riyadh', 'Bangladesh', '2023-06-16', 'Male', 976118, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `fieldId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `field_follow`
--
ALTER TABLE `field_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspirers`
--
ALTER TABLE `inspirers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `inspirers_fields`
--
ALTER TABLE `inspirers_fields`
  MODIFY `linkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inspirer_follow`
--
ALTER TABLE `inspirer_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `social_post`
--
ALTER TABLE `social_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

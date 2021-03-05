-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2021 at 05:13 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Instagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `post_id` int(5) NOT NULL,
  `commenter_id` int(5) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `post_id` int(5) NOT NULL,
  `user_liker_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`post_id`, `user_liker_id`) VALUES
(1, 36),
(1, 40),
(2, 36);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(5) NOT NULL,
  `post` varchar(100) NOT NULL,
  `user_id` int(5) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post`, `user_id`, `caption`) VALUES
(1, 'IMG_20210301_164522.jpg', 36, 'At office!'),
(2, 'IMG-20210226-WA0028.jpg', 39, 'At college campus, after a long time!'),
(3, 'tomjerry.jpeg', 36, 'Amazing movie, but not great animation, Shingeki no kyojin sasageyo!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` varchar(300) NOT NULL,
  `user_dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `password`, `bio`, `user_dp`) VALUES
(1, 'vismay__', 'vismaypb86@gmail.com', 'vismay99', '', 'default.jpg'),
(36, 'prakash_makwana', 'prakash27202@gmail.com', 'prakas', '', 'prakash.jpg'),
(38, 'yuvraj', 'yuvraj.addweb@email.com', 'yumraj', '', 'favicon.ico'),
(39, 'rajat', '', 'rajat1611', '', 'default.jpg'),
(40, 'nitin_parmar', 'nitin.addweb@gmail.com', 'rajan', '', 'default.jpg'),
(41, 'vismay99', '', 'vy', '', 'default.jpg'),
(42, 'vishal_brahmbhatt', 'v.milkyway@gmail.com', 'SBI', '', 'default.jpg'),
(43, 'neet', 'n@n.in', '12', '', 'forgot.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_follow`
--

CREATE TABLE `user_follow` (
  `user_id` int(5) NOT NULL,
  `user_follow_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_follow`
--

INSERT INTO `user_follow` (`user_id`, `user_follow_id`) VALUES
(41, 36),
(39, 36),
(41, 39);

-- --------------------------------------------------------

--
-- Table structure for table `user_follower`
--

CREATE TABLE `user_follower` (
  `user_id` int(5) NOT NULL,
  `user_follower_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_follower`
--

INSERT INTO `user_follower` (`user_id`, `user_follower_id`) VALUES
(41, 36),
(36, 41),
(36, 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `commenter_id` (`commenter_id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_liker_id` (`user_liker_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_follow`
--
ALTER TABLE `user_follow`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_follow_id` (`user_follow_id`);

--
-- Indexes for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_follower_id` (`user_follower_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`commenter_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`user_liker_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_follow`
--
ALTER TABLE `user_follow`
  ADD CONSTRAINT `user_follow_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_follow_ibfk_2` FOREIGN KEY (`user_follow_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD CONSTRAINT `user_follower_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_follower_ibfk_2` FOREIGN KEY (`user_follower_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

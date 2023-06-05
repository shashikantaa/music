-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 02:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES
(1, '123', '123', 'success', 'something', 0),
(2, 'order_GOULzvaUdTkGxh', 'pay_GOUMD2ci7aJIq6', 'success', 'admin@azhark.com', 0),
(3, 'order_GOUOQbjWaGxTtn', 'pay_GOUOaVKgUe6vyY', 'success', 'contact@azhark.com', 500),
(4, 'order_LlClBJzmqZzCJH', 'pay_LlClTs6RPesQNp', 'success', 'shashikantalaikhuram@gmail.com', 1),
(5, 'order_LlClBJzmqZzCJH', 'pay_LlClTs6RPesQNp', 'success', 'shashikantalaikhuram@gmail.com', 1),
(6, 'order_LlDiqjNlpHuiPW', 'pay_LlDjAiOIXnRume', 'success', 'shashikantalaikhuram@gmail.com', 1),
(7, 'order_LlDiqjNlpHuiPW', 'pay_LlDjAiOIXnRume', 'success', 'shashikantalaikhuram@gmail.com', 1),
(8, 'order_LlDzDkf1frVRCL', 'pay_LlDzZTBQjr4vOP', 'success', 'shashikantalaikhuram@gmail.com', 0),
(9, '', '', 'success', '', 0),
(10, 'order_LlE1und88lyhT0', 'pay_LlE2LzNGhqrWzv', 'success', 'shashikantalaikhuram@gmail.com', 0),
(11, 'order_LlE1und88lyhT0', '', 'success', 'shashikantalaikhuram@gmail.com', 0),
(12, 'order_LlE6e687ex61PF', 'pay_LlE70h9STMCLSH', 'success', 'shashikantalaikhuram@gmail.com', 0),
(13, 'order_LlE6e687ex61PF', 'pay_LlE70h9STMCLSH', 'success', 'shashikantalaikhuram@gmail.com', 0),
(14, 'order_LlE8NYrpMlgQZo', 'pay_LlE8hgE5nXbIGs', 'success', 'shashikantalaikhuram@gmail.com', 0),
(15, 'order_LlE8NYrpMlgQZo', '', 'success', 'shashikantalaikhuram@gmail.com', 0),
(16, 'order_LlE9kHdWstk14G', 'pay_LlEA14RCy38HRt', 'success', 'shashikantalaikhuram@gmail.com', 0),
(17, 'order_LlEBVVYkyiqc2S', 'pay_LlEBmkB2pWymEx', 'success', 'shashikantalaikhuram@gmail.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tb_artist`
--

CREATE TABLE `tb_artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(15) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artist`
--

INSERT INTO `tb_artist` (`artist_id`, `artist_name`, `lang_id`) VALUES
(1, 'Vijayprakash', 1),
(2, 'Sanjit Hegde', 1),
(3, 'Anuradha Bhat', 1),
(4, 'JustinBieber', 2),
(5, 'Selena Gomez', 2),
(6, 'Billie Eilish', 2),
(7, 'Arijit Singh', 3),
(8, 'Shreya Ghoshal', 3),
(9, 'Sonu Nigam', 3),
(10, 'Vineeth Sreeniv', 4),
(11, 'Sithara Krishna', 4),
(12, 'KS Harishankar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ins`
--

CREATE TABLE `tb_ins` (
  `ins_id` int(3) NOT NULL,
  `ins_name` varchar(20) NOT NULL,
  `ins_loc` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_ins`
--

INSERT INTO `tb_ins` (`ins_id`, `ins_name`, `ins_loc`) VALUES
(1, 'Audio1', 'Audio1.mp3'),
(2, 'Audio2', 'Audio2.mp3'),
(3, 'Audio3', 'Audio3.mp3'),
(4, 'Audio4', 'Audio4.mp3'),
(5, 'Audio5', 'Audio5.mp3'),
(6, 'Audio6', 'Audio6.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_language`
--

CREATE TABLE `tb_language` (
  `lang_id` int(3) NOT NULL,
  `lang_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_language`
--

INSERT INTO `tb_language` (`lang_id`, `lang_name`) VALUES
(1, 'Kannada'),
(2, 'English'),
(3, 'Hindi'),
(4, 'Malyalam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_play`
--

CREATE TABLE `tb_play` (
  `uid` int(3) NOT NULL,
  `song_name` varchar(20) NOT NULL,
  `artist_id` int(20) NOT NULL,
  `loc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_play`
--

INSERT INTO `tb_play` (`uid`, `song_name`, `artist_id`, `loc`) VALUES
(1, 'Bad Guy', 6, 'bad guy.mp3'),
(4, 'Bombe Helutaite', 1, 'Bombe Helutaite.mp3'),
(4, 'Lovtely', 6, 'lovely.mp3'),
(7, 'Stay', 4, 'Stay.mp3'),
(7, 'Payyaram', 12, 'Payyaram.mp3'),
(8, 'Main Agar Kahoon', 9, 'Main Agar Kahoon.mp3'),
(8, 'Kal Ho Na Ho', 9, 'Kal Ho Na Ho.mp3'),
(4, 'Bad Guy', 6, 'bad guy.mp3'),
(9, 'Peaches', 4, 'Peaches.mp3'),
(9, 'Hands To MySelf', 5, 'Hands To myself.mp3'),
(9, 'Come ', 5, 'Come and Get It.mp3'),
(9, 'BoyFriend', 4, 'Boyfriend.mp3'),
(9, 'Sorry', 4, 'Sorry.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_songs`
--

CREATE TABLE `tb_songs` (
  `song_id` int(3) NOT NULL,
  `song_name` varchar(30) NOT NULL,
  `artist_id` int(3) NOT NULL,
  `lang_id` int(3) NOT NULL,
  `loc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_songs`
--

INSERT INTO `tb_songs` (`song_id`, `song_name`, `artist_id`, `lang_id`, `loc`) VALUES
(1, 'BoyFriend', 4, 2, 'Boyfriend.mp3'),
(2, 'Sorry', 4, 2, 'Sorry.mp3'),
(3, 'Peaches', 4, 2, 'Peaches.mp3'),
(4, 'Stay', 4, 2, 'Stay.mp3'),
(5, 'Hands To MySelf', 5, 2, 'Hands To myself.mp3'),
(6, 'Hands To MySelf', 5, 2, 'Hands To myself.mp3'),
(7, 'Come & get it', 5, 2, 'Come and Get It.mp3'),
(8, 'Love You Like a Love Song', 5, 2, 'Love you like a love song.mp3'),
(9, 'Who Says', 5, 2, 'Who Says.mp3'),
(10, 'Bad Guy', 6, 2, 'bad guy.mp3'),
(11, 'Lovtely', 6, 2, 'lovely.mp3'),
(12, 'No Time To Die', 6, 2, 'No Time To Die.mp3'),
(13, 'When The Partys is over', 6, 2, 'when the party s over.mp3'),
(14, 'Tum Hi Ho', 7, 3, 'Tum Hi ho.mp3'),
(15, 'Enna Sonna', 7, 3, 'Enna Sona.mp3'),
(16, 'Nashe Si Chadh Gayi', 7, 3, 'Nashe Si Chadh Gayi.mp3'),
(17, 'Ae Dil Hai Mushkil', 7, 3, 'Ae Dil Hai Mushkil.mp3'),
(18, 'Deewani Mastani', 8, 3, 'Deewani Mastani.mp3'),
(19, 'Nagada Sang Dhol', 8, 3, 'Nagada Sang Dhol.mp3'),
(20, 'Tere Liye', 8, 3, 'Tere Liye.mp3'),
(21, 'Tujh me rab dikhta hai', 8, 3, 'Tujh me rab dikhta hai.mp3'),
(22, 'Kal Ho Na Ho', 9, 3, 'Kal Ho Na Ho.mp3'),
(23, 'Saathiya', 9, 3, 'Saathiya.mp3'),
(24, 'Tumse Milke Dil ka', 9, 3, 'Tumse Milke Dil ka.mp3'),
(25, 'Main Agar Kahoon', 9, 3, 'Main Agar Kahoon.mp3'),
(26, 'Main Agar Kahoon', 9, 3, 'Main Agar Kahoon.mp3'),
(27, 'Singara Siriye', 1, 1, 'Singara Siriye.mp3'),
(28, 'Belageddu', 1, 1, 'Belageddu.mp3'),
(29, 'Bombe Helutaite', 1, 1, 'Bombe Helutaite.mp3'),
(30, 'Yenammi Yenammi', 1, 1, 'Yenammi Yenammi.mp3'),
(37, 'Kush Kush', 2, 1, 'Kush Kush.mp3'),
(35, 'BelaKina Kavithe', 2, 1, 'BelaKina Kavithe.mp3'),
(36, 'Maleya Maleya', 2, 1, 'Maleya Maleya.mp3'),
(38, 'Shaakuntle Sikkalu', 2, 1, 'Shaakuntle Sikkalu.mp3'),
(39, 'Appa I love You Pa', 3, 1, 'Appa I love You Pa.mp3'),
(40, 'O Baby', 3, 1, 'O Baby.mp3'),
(41, 'Neenu Iruvaga', 3, 1, 'Neenu Iruvaga\r\n.mp3'),
(42, 'Sri Krishna', 3, 1, 'Sri Krishna\r\n.mp3'),
(43, 'Kannil Kannil', 12, 4, 'Kannil Kannil.mp3'),
(44, 'Pavizha Mazha', 12, 4, 'Pavizha Mazha.mp3'),
(45, 'Kamini', 12, 4, 'Kamini.mp3'),
(46, 'Payyaram', 12, 4, 'Payyaram.mp3'),
(47, 'Thiruvaavaniraavu', 11, 4, 'Thiruvaavaniraavu.mp3'),
(48, 'Killi Penne', 11, 4, 'Killi Penne.mp3'),
(49, 'Hey Nila Nila', 11, 4, 'Hey Nila Nila.mp3'),
(50, 'Pularippo', 11, 4, 'Pularippo.mp3'),
(51, 'KuduKKu', 10, 4, 'KuduKKu.mp3'),
(52, 'Kaathu Kaathirippu', 10, 4, 'Kaathu Kaathirippu.mp3'),
(53, 'Kattu Mooliyo', 10, 4, 'Kattu Mooliyo.mp3'),
(54, 'Onakka Munthiri', 10, 4, 'Onakka Munthirimp3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `email`, `password`) VALUES
(1, 'a@a.com', '111'),
(4, 'b@b.com', '222'),
(7, 'c@c.com', '333'),
(8, 'd@d.com', '444'),
(9, 'shashikantalaikhuram@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_artist`
--
ALTER TABLE `tb_artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `tb_ins`
--
ALTER TABLE `tb_ins`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `tb_songs`
--
ALTER TABLE `tb_songs`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_artist`
--
ALTER TABLE `tb_artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_ins`
--
ALTER TABLE `tb_ins`
  MODIFY `ins_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_songs`
--
ALTER TABLE `tb_songs`
  MODIFY `song_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

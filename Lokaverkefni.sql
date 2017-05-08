-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2017 at 11:10 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Lokaverkefni`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `text` varchar(750) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `text`, `idUser`) VALUES
(1, 'Hello', 1),
(2, 'yo', 1),
(3, '....', 5),
(4, 'ofnwaofnw', 1),
(5, 'ehh', 1),
(6, 'hehe', 1),
(7, 'heheh', 1),
(8, 'heheh', 1),
(9, 'hehe', 1),
(10, 'hey thts not cool', 6),
(11, 'hello i am prince afgahnistan', 6),
(12, 'hey', 6),
(13, 'ehem', 6),
(14, 'ey yo nigga lemme c some anime tiddy', 6),
(15, 'umm wrong person', 6),
(16, 'ffuuuuggg ma niBBa', 6),
(17, 'Herro there', 5),
(18, 'no', 6),
(19, 'this is bad', 6),
(20, 'Hello', 1),
(21, 'the govermentos is spying', 6),
(22, 'nope', 1),
(23, 'I know', 1),
(24, 'FBI everywere', 1),
(25, 'yes and my mom', 6),
(26, 'Okey', 1),
(27, 'yo', 1),
(28, 'hello', 6),
(29, 'no', 6),
(30, 'i like horses', 6),
(31, 'dont fucc widd me', 6),
(32, 'hahahaha', 6),
(33, 'HAHAHAHAH', 6),
(34, 'HAHAHAHAHHAHAHAHAHA', 6),
(35, 'MEISTARI!', 6),
(36, 'HAHAHAHAHAHA', 6),
(37, 'LOL', 6),
(38, 'EKKI EYÐA', 6),
(39, 'BÍDDU', 6),
(40, 'ÆTLA GERA FOR LÚPPU', 6),
(41, 'K', 6),
(42, 'K', 6),
(43, 'K', 6),
(44, '\r\nK', 6),
(45, 'K', 6),
(46, '\r\nK', 6),
(47, '\r\n', 6),
(48, '\r\nK', 6),
(49, '\r\nK', 6),
(50, 'K', 6),
(51, '\r\nK', 6),
(52, '\r\nK', 6),
(53, '\r\nJ', 6),
(54, '\r\nH', 6),
(55, '\r\nFG', 6),
(56, '\r\nF', 6),
(57, '\r\nD', 6),
(58, '\r\nD', 6),
(59, '\r\nD', 6),
(60, '\r\nF', 6),
(61, '\r\nH', 6),
(62, '\r\nG', 6),
(63, '\r\nD', 6),
(64, '\r\nD', 6),
(65, '\r\nSDA', 6),
(66, '\r\nDSF', 6),
(67, '\r\nG', 6),
(68, '\r\nS', 6),
(69, '\r\nDF', 6),
(70, '\r\nDF', 6),
(71, '\r\nF', 6),
(72, '\r\nF', 6),
(73, 'D', 6),
(74, '\r\nS', 6),
(75, '\r\nD', 6),
(76, '\r\nS', 6),
(77, '\r\nD', 6),
(78, '\r\nS', 6),
(79, '\r\nD', 6),
(80, '\r\nD', 6),
(81, '\r\nD', 6),
(82, '\r\nD', 6),
(83, '\r\nD', 6),
(84, 'yo', 1),
(85, 'I am Groot', 7),
(96, 'i no speak lol', 6),
(97, 'just meme ahaha', 6),
(98, 'hahahahahaha meistari', 6),
(99, 'Hehehe', 1),
(100, 'Halló', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `about` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `image`, `about`) VALUES
(1, 'Matthías', 'snefill@gmail.com', 'test', 'http://178.62.46.222/myndir/Matti.jpg', 'Halló'),
(5, 'Snefill', 'snefill@snefill.com', 'test', 'http://chainimage.com/images/wallpaper-tigre-blanc.jpeg', 'Halló'),
(6, 'Eggert', 'eggertgeir@gmail.com', 'test', 'http://i1.kym-cdn.com/photos/images/original/000/901/760/4ec.jpg', 'Just a young lad looking 4 trouble xd ;)'),
(7, 'Groot', 'gunnhildurb@gmail.com', 'pardusblarbjor8', 'https://i.ytimg.com/vi/FAciZRkOKQs/maxresdefault.jpg', 'I am Groot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

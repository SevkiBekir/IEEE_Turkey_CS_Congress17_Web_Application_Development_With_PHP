-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2017 at 07:53 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sozluk`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `subjectId` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `content`, `subjectId`, `createdDate`, `userId`) VALUES
(1, 'asdasd', 2, '2017-03-26 04:36:25', 1),
(2, 'deneme biÅŸey', 1, '2017-03-26 04:36:59', 1),
(3, 'sadasd', 1, '2017-03-26 04:37:14', 1),
(4, 'asdsadsad', 1, '2017-03-26 04:46:28', 1),
(5, 'hello', 1, '2017-03-26 04:46:31', 1),
(6, 'yeni bir iÃ§erik', 1, '2017-03-26 05:03:32', 1),
(7, 'diÄŸer bir iÃ§erik', 2, '2017-03-26 05:03:39', 1),
(8, 'deneme', 3, '2017-03-26 05:07:06', 1),
(9, 'sdsadsa', 5, '2017-03-26 05:10:12', 5),
(10, 'hello world', 5, '2017-03-26 09:33:50', 6),
(11, 'sabah saatlerinde eÄŸitim mi olur yaaa? :p', 7, '2017-03-26 10:03:51', 7),
(12, 'asdasdas', 3, '2017-03-26 10:03:58', 7),
(13, 'olur olur derse gel :D', 7, '2017-03-26 10:04:38', 3),
(14, 'tamam geldim :D', 7, '2017-03-26 10:17:51', 7),
(15, 'yine bir gÃ¼n konaktayÄ±z. kahve iÃ§iyoruz.', 8, '2017-03-26 20:45:22', 8),
(16, 'sonra bilgisayardan birÅŸeyler yazdÄ±k.', 8, '2017-03-26 20:45:38', 8),
(17, 'eÄŸitim bitti', 6, '2017-03-26 20:45:49', 8),
(18, 'az daha viÅŸneli kahveli iÃ§ecektik...', 8, '2017-03-26 20:46:17', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `createdDate`, `userId`) VALUES
(1, 'deneme', '2017-03-26 03:49:10', 2),
(2, 'hello', '2017-03-26 03:49:43', 1),
(3, 'yeni bir konu', '2017-03-26 05:05:55', 1),
(4, 'hello222', '2017-03-26 05:08:23', 1),
(5, 'dneee', '2017-03-26 05:10:08', 5),
(6, 'eÄŸitim gÃ¼nÃ¼', '2017-03-26 09:34:11', 6),
(7, 'ilk entry', '2017-03-26 10:03:35', 7),
(8, 'kahve deryasÄ±', '2017-03-26 20:44:41', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pass` varchar(65) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keyValue` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `pass`, `keyValue`, `createdDate`) VALUES
(1, 'Deneme', 'Deneme2', 'deneme@deneme.com', '71104bff1b655018ebfc8c0a61d1f74aa78adfc2655623f2743da3c32412e141', '58d6f7cc297337.62827700', '2017-03-26 02:05:48'),
(2, 'SBK', 'SBK2', 'sbk@sbk.com', '5e4c7924876fe01133aabf0eeee35ed7746f805a3264514cb47d890c3a1e5e7d', '58d6f7eb7d4391.36331562', '2017-03-26 02:06:19'),
(3, 'Åževki', 'KocadaÄŸ', 'bekirsevki@gmail.com', '86fc670467d8eacfc79f420c88939a470543a1f5bd53f6322e263752b2e0a1a5', '58d6f8b356ec37.87800388', '2017-03-26 02:09:39'),
(4, 'b', 'b', 'b@b.com', '6b6660c845730b266c214037570c1ea959339d25b99aea39c2e554acfa6cd5df', '58d6fee0045fb3.61871325', '2017-03-26 02:36:00'),
(5, 'yenibir', 'kayit', 'yen@yen.com', 'ab61e04d0f8b1e40c30be74bcda4754d06e5c9fcf6c3b3432927f6f8c8361225', '58d722f3b304f7.91248473', '2017-03-26 05:09:55'),
(6, 'Utku', 'Ã‡aÄŸlayan', 'utku@metu.edu.tr', 'bc8b70b6857c66f94a4afcc4b80be1bd5392ce488297b5f30fce8cc1e7f2bab9', '58d7609ec61d71.06511828', '2017-03-26 09:33:02'),
(7, 'cscon', 'ieee', 'cscon@ieee.edu', 'ce4d140cdc21d83a9a8dfa48b2177e108ff16c6fd1e8bbf418596fd05493ca84', '58d767b243fde3.39582206', '2017-03-26 10:03:14'),
(8, 'muhammed', 'arÄ±', 'ari@ari.com', 'dd3ff50192240153f8e584bc61a789f10513e4974a39f9817f288842f05417ff', '58d7fde5cc8c56.74273360', '2017-03-26 20:44:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fUser_e_idx` (`userId`),
  ADD KEY `fSubject_e_idx` (`subjectId`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fUserId_s_idx` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `fSubject_e` FOREIGN KEY (`subjectId`) REFERENCES `subjects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fUser_e` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `fUserId_s` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

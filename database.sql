-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 04:30 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news33`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NEWS_ID` int(11) NOT NULL,
  `TITLE` varchar(255) COLLATE utf8_bin NOT NULL,
  `CONTENT` text COLLATE utf8_bin NOT NULL,
  `DATE` date NOT NULL,
  `IMAGE` varchar(1000) COLLATE utf8_bin DEFAULT 'sport8.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NEWS_ID`, `TITLE`, `CONTENT`, `DATE`, `IMAGE`) VALUES
(1, 'Jokic nba sampion sa Denverom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2017-02-05', 'jokic.jpg'),
(2, 'Boban Marjanovic presao u LA Kliperse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2016-08-09', 'boban.jpg'),
(3, 'Man Utd pobijedio Lester nakon preokreta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2019-02-05', 'manutd.jpg'),
(4, 'Federer izgubio od Djokovica u finalu Pariza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2019-11-23', 'federer.jpg'),
(5, 'djokovic osvojio 18. gren slam titulu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2018-02-15', 'djokovicwin.jpg'),
(6, 'filip filipovic donio zlato golom u poslednjoj sekundi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2019-05-18', 'filip.jpg'),
(7, 'Odbojkasice srbije ponovo svjetske sampionke!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2017-08-14', 'srbija.jpg'),
(8, 'KK Crvena Zvezda u euroligi i sledece godine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2020-06-06', 'kkzvezda.jpg'),
(9, 'Luka Jovic napusta Real', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2020-07-02', 'jovic.jpg'),
(10, 'Valentino Rossi Moto GP sampion osmi put', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2014-08-05', 'rossi.jpg'),
(11, 'Inter ponovo u Ligi sampiona ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2018-08-09', 'inter.jpg'),
(12, 'Stefan Majdov svjetski sampion u dzudou', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2016-08-04', 'majdov.jpg'),
(13, 'Milorad Cavic osvojio zlato na 100m delfin stilom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2017-05-05', 'cavic.jpg'),
(14, 'Lebron James ostaje u Lejkersima do 2022.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2018-02-15', 'james.jpg'),
(15, 'Felps izgubio od Cavica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2018-08-09', 'phelps.jpg'),
(16, 'Karim benzema najbolji strijelac Reala', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2019-07-01', 'benzema.jpg'),
(17, 'Juventus osvojio Ligu Sampiona', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2020-08-04', 'juventus.jpg'),
(74, 'Tatum vodio Boston do nove pobjede', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2020-08-05', 'tatum.jpg'),
(77, 'Derozan postigao 45 poena u novom porazu Spursa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.', '2020-07-16', 'derozan.jpg'),
(113, 'Barcelona osvojila primeru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.\r\n\r\n', '2020-08-12', 'barcelona.jpg'),
(154, 'Wawrinka u polufinalu US opena', '<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; text-align: center;\"><strong><em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</span></em></strong></p>\r\n<p><em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">&nbsp;</span></em></p>', '2020-08-19', 'wawrinka.jpg'),
(155, 'Serena Wiliams osvojila AUS open', '<div id=\"content-news\" class=\"col-12 col-xl-12 text-center bg-light\" style=\"box-sizing: border-box; position: relative; width: 1110px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; background-color: #f8f9fa !important; text-align: center !important;\">\r\n<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</p>\r\n<p>&nbsp;</p>\r\n</div>', '2020-08-12', 'serena.jpg'),
(156, 'Janis ubacio 44 poena u pobjedi baksa', '<div id=\"content-news\" class=\"col-12 col-xl-12 text-center bg-light\" style=\"box-sizing: border-box; position: relative; width: 1110px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; background-color: #f8f9fa !important; text-align: center !important;\">\r\n<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</p>\r\n<p>&nbsp;</p>\r\n</div>', '2020-08-25', 'Janis.jpg'),
(157, 'Zeljko obradovic napustio Fenerbahce', '<div id=\"content-news\" class=\"col-12 col-xl-12 text-center bg-light\" style=\"box-sizing: border-box; position: relative; width: 1110px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; background-color: #f8f9fa !important; text-align: center !important;\">\r\n<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</p>\r\n<p>&nbsp;</p>\r\n</div>', '2023-06-13', 'zeljko.jpg'),
(158, 'Sevilja ponovo u finalu LE', '<div id=\"content-news\" class=\"col-12 col-xl-12 text-center bg-light\" style=\"box-sizing: border-box; position: relative; width: 1110px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; background-color: #f8f9fa !important; text-align: center !important;\">\r\n<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</p>\r\n<p>&nbsp;</p>\r\n</div>', '2020-08-05', 'sevilja.jpg'),
(159, 'Izvuceni parovi osmine filala Lige sampiona', '<div id=\"content-news\" class=\"col-12 col-xl-12 text-center bg-light\" style=\"box-sizing: border-box; position: relative; width: 1110px; padding-right: 15px; padding-left: 15px; flex: 0 0 100%; max-width: 100%; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; background-color: #f8f9fa !important; text-align: center !important;\">\r\n<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</p>\r\n<p>&nbsp;</p>\r\n</div>', '2020-08-19', 'liga.jpg'),
(160, 'Kyrgios pobijedio Nadala nakon 4 seta velike borbe', '<p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Manrope, sans-serif; font-size: 16px; text-align: center;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a. Dictumst quisque sagittis purus sit. Morbi tristique senectus et netus et malesuada fames ac. Sed cras ornare arcu dui vivamus. Leo urna molestie at elementum eu. Tortor at risus viverra adipiscing at in tellus integer. In mollis nunc sed id semper risus in hendrerit gravida. Risus in hendrerit gravida rutrum quisque non tellus. Ultricies mi eget mauris pharetra et ultrices neque. Donec enim diam vulputate ut. Et leo duis ut diam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit.</p>\r\n<p>&nbsp;</p>', '2020-09-23', 'kyrgios.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newstag`
--

CREATE TABLE `newstag` (
  `TAG_ID` int(11) NOT NULL,
  `NEWS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `newstag`
--

INSERT INTO `newstag` (`TAG_ID`, `NEWS_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 7),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 15),
(1, 16),
(1, 74),
(1, 77),
(1, 113),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 159),
(1, 160),
(2, 9),
(2, 11),
(2, 16),
(2, 17),
(2, 113),
(2, 158),
(2, 159),
(4, 154),
(4, 155),
(4, 160),
(5, 1),
(5, 2),
(5, 14),
(5, 74),
(5, 77),
(5, 156),
(5, 157),
(8, 6),
(9, 7),
(10, 5),
(11, 9),
(11, 16),
(13, 9),
(13, 16),
(20, 113),
(30, 159),
(31, 158),
(32, 156),
(33, 157),
(34, 160),
(35, 155);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `TAG_ID` int(11) NOT NULL,
  `NAME` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`TAG_ID`, `NAME`) VALUES
(1, 'sport'),
(2, 'fudbal'),
(3, 'bejzbol'),
(4, 'tenis'),
(5, 'kosarka'),
(6, 'sah'),
(7, 'plivanje'),
(8, 'vaterpolo'),
(9, 'odbojka'),
(10, 'djokovic'),
(11, 'fudbalski transferi'),
(12, 'moto gp'),
(13, 'real madrid'),
(20, 'barcelona'),
(30, 'liga-sampiona'),
(31, 'liga-evrope'),
(32, 'nba-liga'),
(33, 'euroliga'),
(34, 'atp'),
(35, 'wta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NEWS_ID`);

--
-- Indexes for table `newstag`
--
ALTER TABLE `newstag`
  ADD PRIMARY KEY (`TAG_ID`,`NEWS_ID`),
  ADD KEY `FK_HAS2` (`NEWS_ID`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`TAG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NEWS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `TAG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `newstag`
--
ALTER TABLE `newstag`
  ADD CONSTRAINT `FK_HAS` FOREIGN KEY (`TAG_ID`) REFERENCES `tag` (`TAG_ID`),
  ADD CONSTRAINT `FK_HAS2` FOREIGN KEY (`NEWS_ID`) REFERENCES `news` (`NEWS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

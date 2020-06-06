-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 05:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog3`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `subtitle`, `author`, `content`, `date_created`) VALUES
(1, 'Christmas', 'Oh how I love Christmas time', 'Peter Mike', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'September 13,2020'),
(2, 'Church', 'Psalm 122:1', 'Anna Tetteh', 'My help comes from the LORD, the Maker of heaven and earth. indeed, he who watches over Israel will neither slumber nor sleep. the sun will not harm you by day, nor the moon by night. the LORD will watch over your coming and going both now and forevermore.', 'November 15,2020'),
(4, 'Ghana', 'Bless', 'Peter Umonyu', 'God bless our homeland Ghana and make us great and strong', 'January 12,1978'),
(5, 'Dumebi', 'Another Banger', 'Rema', 'Make I pon, make I pon pon pon\r\nMake I come\r\nMake I give her the pon pon pon\r\nYour body kakara make I pon pon pon\r\nOnome get e\r\n\r\nKi lo fe omote je ogede (aha)\r\nFine fine okpekete (aha)\r\nWa je alo folake (aha)\r\nWhine am omote (ah)', 'September 10 2020'),
(6, 'Badman Commando', 'Another Banger', '', 'Dem know, huh\r\nBow down and pray for mercy\r\nWhenever you come near me\r\nGirl wanna try come test me\r\nBut she can never tempt me\r\nShe wanna buy me Bentley\r\nShe wanna indirectly\r\nTry to dey complicate me\r\nTherefore I show no mercy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

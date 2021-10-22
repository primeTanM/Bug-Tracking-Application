-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 12:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bug_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug`
--

CREATE TABLE `bug` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bug`
--

INSERT INTO `bug` (`id`, `title`, `description`, `comment`, `status`, `username`) VALUES
(4, 'asdasdsad', '  At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.\r\n  ', '     At w3schools.com you\r\n  ', 'Work In Progress', 'Raj123'),
(5, 'adawdwq', '  At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.\r\n  ', '', 'Closed', 'Raj123');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(3) NOT NULL,
  `post_id` int(3) NOT NULL,
  `comment` text NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `username`) VALUES
(1, 4, 'At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.', 'Raj123'),
(2, 4, 'At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.', 'Raj123'),
(3, 4, 'dadsda', 'Raj123'),
(4, 5, 'At w3schools.com you will learn how to make a website. They offer free tutorials in all web development wewewqtechnologies.', 'Raj123'),
(5, 5, 'At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.weqw', 'Raj123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `type` varchar(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `name`, `email`, `username`, `password`) VALUES
(1, 'ADM', 'Yash', 'yash@gmail.com', 'Yash123', 'Yash123'),
(2, 'QA', 'Raj', 'raj@gmail.com', 'Raj123', 'Raj123'),
(3, 'DEV', 'Dev', 'dev@gmail.com', 'Dev123', 'Dev123'),
(4, 'DEV', 'New', 'new@gmail.com', 'New123', 'New123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bug`
--
ALTER TABLE `bug`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

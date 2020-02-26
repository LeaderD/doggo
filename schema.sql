-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 09:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doggo`
--

-- --------------------------------------------------------

--
-- Table structure for table `doggos`
--

CREATE TABLE `doggos` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `coat` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doggos`
--

INSERT INTO `doggos` (`id`, `img`, `name`, `breed`, `age`, `gender`, `size`, `coat`, `description`, `deleted`) VALUES
(2, 'https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg?w=1155&h=1541', 'Billy', 'Cocker Spaniel', '7', 'Male', 'Medium', 'Medium', 'it\'s a DOG AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA ok ', 0),
(3, 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-1094874726.png?crop=0.542xw:0.814xh;0.0472xw,0.127xh&resize=640:*', 'Brown', 'Australian Shepherd', '2', 'Female', 'Small', 'Long', 'Wow look at this DOGGGO hAWT DIGGITY', 0),
(4, 'https://i.insider.com/5b2024211ae66249008b4fed?width=1100&format=jpeg&auto=webp', 'Beech', 'Pom', '2', 'Female', 'Small', 'Short', 'wow its a pom', 0),
(5, 'https://i.insider.com/5b2024211ae66249008b4fed?width=1100&format=jpeg&auto=webp', 'Yippe', 'Pom', '2', 'Male', 'Small', 'Short', 'wow its a pom', 0),
(6, 'https://i.insider.com/5b2024211ae66249008b4fed?width=1100&format=jpeg&auto=webp', 'Yippe', 'Pom', '2', 'Male', 'Small', 'Short', 'wow its a pom', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pw`) VALUES
('admin', 'admin'),
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doggos`
--
ALTER TABLE `doggos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doggos`
--
ALTER TABLE `doggos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

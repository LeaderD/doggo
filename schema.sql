-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2020 at 06:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doggos`
--

INSERT INTO `doggos` (`id`, `img`, `name`, `breed`, `age`, `gender`, `size`, `coat`, `description`, `deleted`) VALUES
(2, 'https://i.imgur.com/Sr2Vrgz.jpg', 'Billy', 'Cocker Spaniel', '7 years', 'Male', 'Medium', 'Medium', 'it\'s a DOG AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA ok ', 0),
(3, 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-1094874726.png?crop=0.542xw:0.814xh;0.0472xw,0.127xh&resize=640:*', 'Brown', 'Australian Shepherd', '2', 'Female', 'Small', 'Long', 'Wow look at this DOGGGO hAWT DIGGITY', 0),
(4, 'https://vetstreet.brightspotcdn.com/dims4/default/1d87d20/2147483647/thumbnail/645x380/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F3a%2Fc3%2F424ee1bf4768973966bde73acda8%2Fgerman-shepherd-AP-1S7FRX-645sm12913.jpg', 'Beech', 'German Shepherd', '2', 'Female', 'Large', 'Medium', 'Its a german shepherd!', 0),
(5, 'https://i.insider.com/5b2024211ae66249008b4fed?width=1100&format=jpeg&auto=webp', 'Yippe', 'Pom', '2', 'Male', 'Small', 'Short', 'wow its a pom', 0),
(6, 'https://vetstreet-brightspot.s3.amazonaws.com/bf/33d570a7fb11e0a0d50050568d634f/file/Rottweiler-3-645mk062811.jpg', 'Diego', 'Rottweiler', '2', 'Male', 'Medium', 'Short', 'Its a rottweiler!', 0),
(7, 'https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/v1555443372/shape/mentalfloss/istock_000011211040_small.jpg?itok=LCelZ0Rd', 'Tamago', 'Shiba Inu', '2', 'Male', 'Medium', 'Short', 'Its a Shiba!', 0),
(8, 'https://www.thisdogslife.co/wp-content/uploads/2018/04/GoldenDoodle_whatjunoboutadoodle.jpg', 'Eggo', 'Doodle', '3', 'Female', 'Medium', 'Long', 'Its a doodle!', 0),
(9, 'https://ak3.picdn.net/shutterstock/videos/1023315223/thumb/1.jpg?ip=x480', 'Nori', 'Toy Poodle', '1', 'Female', 'Small', 'Medium', 'Its a Toy poodle!', 0),
(10, 'https://www.pets4homes.co.uk/images/classifieds/2019/05/25/2306413/large/male-chow-chow-for-sale-needs-new-forever-home-5cee6256553ea.jpg', 'Agedashi', 'Chow Chow', '2', 'Male', 'Large', 'Long', 'Its a chow chow!', 0),
(11, 'https://cdn1-www.dogtime.com/assets/uploads/gallery/pembroke-welsh-corgi-dog-breed-pictures/prance-8.jpg', 'Cheddar', 'Corgi', '2', 'Male', 'Medium', 'Short', 'Its a corgi!', 0),
(12, 'https://i.ytimg.com/vi/wRx3Uvcktm8/maxresdefault.jpg', 'Tofu', 'Pug', '1', 'Male', 'Small', 'Short', 'Its a Pug!', 0),
(13, 'https://thehappypuppysite.com/wp-content/uploads/2019/03/Maltese-Lifespan-long.jpg', 'Hotpot', 'Maltese', '1', 'Female', 'Short', 'Long', 'Its a Maltese!', 0),
(14, 'https://thehappypuppysite.com/wp-content/uploads/2018/12/fat-dachshund-long.jpg', 'Sausage', 'Dachshund', '3', 'Female', 'Small', 'Short', 'Its a pregnant Dachshund!', 0),
(15, 'https://i.redd.it/jcuhwxscw4s21.jpg', 'Floof', 'Samoyed', '3', 'Male', 'Medium', 'Long', 'Its a samoyed!', 0),
(16, 'https://photos.puppyspot.com/0/listing/631070/photo/5350823_large-resize.jpg', 'Toppoki', 'Bichon Frise', '2', 'Female', 'Small', 'Long', 'Its a Bichon Frise!', 0),
(17, 'https://cuddleyourdogs.com/wp-content/uploads/2016/08/Are-Havanese-Hard-to-Potty-Train-15.jpg', 'Tommy', 'Havanese ', '1', 'Male', 'Small', 'Long', 'Its a Havanese!', 0),
(18, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyrMIz3QS1LWCYXpq9UKYuX61noq6Nm2rR76yguahXuPEZ4oEF4Q&s', 'Snow', 'Siberian Husky', '3', 'Male', 'Large', 'Medium', 'Its a Husky!', 0),
(19, 'https://i.pinimg.com/originals/d2/33/9a/d2339a636c856482fd03fb3c9b045d62.jpg', 'Bruno', 'Bulldog', '1', 'Male', 'Small', 'Short', 'Its a bulldog!', 0),
(20, 'https://i.ytimg.com/vi/Qh4Ae8AOo78/maxresdefault.jpg', 'Swarley', 'Beagle', '2', 'Male', 'Medium', 'Short', 'Its a beagle!', 0),
(21, 'https://vetstreet.brightspotcdn.com/dims4/default/e1bbff7/2147483647/thumbnail/645x380/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F04%2F43%2Fc530807343e5a684b6f0b5eaa4e0%2Fgreat-dane-ap-1xo5vr-645.jpg', 'Cassie', 'Great Dane', '3', 'Female', 'Large', 'Short', 'Its a great dane!', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

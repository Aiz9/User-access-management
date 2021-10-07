-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 05, 2021 at 08:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system_29e`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `description` text COLLATE latin1_general_ci DEFAULT NULL,
  `post_image` varchar(2000) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `headline`, `description`, `post_image`) VALUES
(2, 'Tesla Model S', 'The 2021 Tesla Model S is an all-electric sedan that sits at the top of the automaker\'s lineup with the robust performance as well as unparalleled all-electric range. Currently, the Model S Long Range boasts an estimated 405 miles, which is the most from any EV on the market', 'post6154279f075855.65436107.jpg'),
(5, 'Tesla Model 3', 'The Tesla Model 3 is a game-changing electric vehicle. With its generous range at a price that\'s more accessible to the average consumer', 'post615b2a34b62c07.42702418.jpg'),
(6, 'Tesla Model X', 'The Tesla Model X is an SUV built with safety in mind. The electric vehicle, the body, chassis, restraints, and battery technology provide a very low probability of occupant injury.', 'post615b2bc4e7e724.18168668.jpg'),
(7, 'Tesla Model Y', 'Model Y is capable in rain, snow, mud and off-road. Tesla All-Wheel Drive has two ultra-responsive, independent electric motors that digitally control torque to the front and rear wheels—for far better handling, traction and stability control.', 'post615b2ef5d5fa31.88813747.jpg'),
(8, 'Tesla Wall Charger', 'Tesla Wall Connector supplies a full charge without ever leaving the house. Easily installed in a variety of homes and designed for both indoor and outdoor use, Wall Connector provides convenient, fast charging for every homeowner and tenant, any time of the day.', 'post61543470e7bb66.38041761.jpg'),
(9, 'Tesla Solar Panels', 'Solar Roof is the most durable roof available and the glass itself will come with a warranty for the lifetime of your house, or infinity, whichever comes first.', 'post615434b74e0580.19628889.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `message` text COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `firstname`, `lastname`, `mail`, `message`, `subject`) VALUES
(1, 'Ram', 'ram', 'ram@gmail.com', 'ab', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `middlename` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `user_password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `profile_image` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `is_superuser` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `user_password`, `profile_image`, `is_superuser`, `is_active`, `joined_date`) VALUES
(6, 'Admin', '', 'Admin', 'admin', 'admin@gmail.com', '$2y$10$nHv8WbXTg/hdmgGkv/ML4uU4Ch0ryfGbU3PNFQJvysCIlyTkt/48O', NULL, 1, 1, '2021-10-05 06:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

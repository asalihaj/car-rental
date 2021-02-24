-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 24, 2021 at 03:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `production_year` int(11) NOT NULL,
  `transmission` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rental_rate` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `manufacturer`, `model`, `color`, `production_year`, `transmission`, `category`, `image`, `rental_rate`, `capacity`, `last_update`, `updated_by_user`) VALUES
(26, 'Audi', 'A7', 'Light gray', 2018, 'Automatic', 'Coupe', 'MODEL-60341a710fab28.35503333.png', 150, 4, '2021-02-22 20:56:17', 40),
(27, 'Mercedes', 'S550', 'Light black', 2019, 'Automatic', 'Coupe', 'MODEL-60341a918bf727.56304517.png', 180, 4, '2021-02-22 20:56:49', 44),
(28, 'Audi', 'A4', 'Navy', 2017, 'Automatic', 'Coupe', 'MODEL-60341aae5bc1d2.64571510.png', 90, 4, '2021-02-22 20:57:18', 44),
(30, 'Bmw', 'M5', 'White', 2019, 'Automatic', 'Coupe', 'MODEL-60341b2b6b3892.32476495.png', 170, 4, '2021-02-22 20:59:23', 40),
(31, 'Mercedes', 'C300', 'Gray', 2019, 'Automatic', 'Sedan', 'MODEL-60341b4498c268.05160445.png', 140, 4, '2021-02-22 20:59:48', 40),
(32, 'Audi', 'Q8', 'White', 2020, 'Automatic', 'Suv', 'MODEL-60341b566f5156.75070154.png', 200, 4, '2021-02-22 21:00:06', 40),
(33, 'VW', 'Golf 6', 'Black', 2017, 'Manual', 'Hatchback', 'MODEL-60341b69989bb0.98756095.png', 70, 4, '2021-02-22 21:00:25', 40),
(35, 'VW', 'Golf 7', 'White', 2020, 'Automatic', 'Hatchback', 'MODEL-603668a8c08eb1.34219856.png', 100, 4, '2021-02-24 14:54:32', 40),
(36, 'Audi', 'R8', 'Gray', 2020, 'Automatic', 'Sport', 'MODEL-603668c052a753.74696223.png', 500, 2, '2021-02-24 14:54:56', 40);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` varchar(255) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`, `last_update`) VALUES
(23, 'Guest', 'guest@guest.com', 'Guest Message 1', '2021-02-22 21:30:51'),
(24, 'Guest', 'guest2@email.com', 'Message 22222', '2021-02-24 13:26:07'),
(25, 'Client One', 'client1@client.com', 'The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.', '2021-02-24 13:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `rental_id` int(11) NOT NULL,
  `rental_date` datetime NOT NULL,
  `return_date` datetime NOT NULL,
  `pick_up_location` varchar(255) NOT NULL,
  `drop_off_location` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rental_id`, `rental_date`, `return_date`, `pick_up_location`, `drop_off_location`, `user_id`, `car_id`, `total`, `last_update`) VALUES
(9, '2021-02-25 10:30:00', '2021-02-28 16:30:00', 'Prishtine', 'Ferizaj', 47, 26, 450, '2021-02-24 13:30:18'),
(11, '2021-03-01 15:15:00', '2021-03-02 12:30:00', 'Prishtine', 'Viti', 49, 27, 180, '2021-02-24 14:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `description`, `last_update`, `updated_by_user`) VALUES
(6, 'Special rates on car booking', 'Tired of shopping around for the lowest prices online? Now there\'s no need to spend hours browsing for savings – because if you find a rental rate on another website that\'s lower than the prepay rate on dristrental.com, we\'ll match the rate and give you an additional 10% off your prepaid Drist rental.', '2021-02-22 21:58:21', 40),
(7, 'Mobile Phone Reservation', 'Your rental is only a few taps away with the Drist mobile app. Reserve a car, update your reservations, or track your itinerary from your mobile device.', '2021-02-22 20:50:24', 40),
(8, 'Unlimited Miles Car Rental', 'Most of our rental cars come with unlimited mileage. Only a few high-end car groups and a few locations do not. Most likely your car rental will have unlimited mileage.', '2021-02-22 20:53:51', 44),
(10, 'One Way Car Rentals', 'Looking to rent a car for a one-way trip? No problem! Drist Rent-A-Car offers easy and convenient one-way car rentals between many of its locations worldwide. Choose from a great selection of vehicles, including economy, full-size sedans, SUVs, minivans, and pickup trucks.', '2021-02-24 14:56:56', 40);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `role` int(11) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role`, `last_update`) VALUES
(40, 'admin1', 'admin1@drist.com', '$2y$10$Kv8C5K27PyPoAfKE1VKWL.CuTAtgK2pAAtKgelP.G2H0VwWjPEj2m', 0, '2021-02-15 23:27:15'),
(44, 'admin2', 'admin2@drist.com', '$2y$10$6Uhy0ekRigSBgYdUHx7VKOMRmE90HAVp99cz2iIJEXChYHzuFn8Y.', 0, '2021-02-20 23:59:21'),
(47, 'client1', 'client1@client.com', '$2y$10$HmlVVkwljbw7oVVRSBSvr.wXipIFx9qf1D.3Teh6eXhkbCaPeWe6G', 1, '2021-02-22 21:08:06'),
(49, 'client2', 'client2@client.com', '$2y$10$DmOTo.uLCmoP6OhoYebpCOtoJMnaHsJnkRWvVOT6jyZbJFSq4oULC', 1, '2021-02-22 21:09:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `UserCar` (`updated_by_user`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `CarRental` (`car_id`),
  ADD KEY `UserRental` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `UserService` (`updated_by_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `UserCar` FOREIGN KEY (`updated_by_user`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `CarRental` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `UserRental` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `UserService` FOREIGN KEY (`updated_by_user`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 09, 2021 at 06:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$CIDsH8OnQDIhFtVEgNHxv.sYDSyRtB/mueBFHBbWKgUm7UEtKsl/y', '2021-09-08 16:45:39'),
(2, 'admin2', 'admin2@gmail.com', '$2y$10$g92yS1xnMX3uDnxjtpAoeePDAjeao28SzYHNjuua7TUC.J4A07DcK', '2021-09-08 16:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `bookingid` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `journey_date` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `bookingid`, `name`, `username`, `gender`, `email`, `mobile`, `journey_date`, `status`, `age`) VALUES
(3, 121159, 'vivek kumar', 'admin', 'Male', 'jevive3062@dedatre.com', 8700584120, '25-09-2021', 'booked', '20'),
(3, 121161, 'Abhishek Gupta', 'admin', 'Male', 'abhishek10.4.2001@gmail.com', 7048960164, '08-09-2021', 'booked', '20'),
(2, 121162, 'Abhishek Gupta', 'admin', 'Male', 'cefeso9041@w3boats.com', 41545215455, '11-09-2021', 'booked', '20'),
(1, 121164, 'sahil kumar', 'Sahil Kumar', 'Male', 'sahil@gmail.com', 8700456123, '09-09-2021', 'booked', '20');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  `fare` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `bus_name`, `source`, `destination`, `arrival_time`, `departure_time`, `fare`, `seats`, `created_at`) VALUES
(1, 'Shanti Travels', 'Delhi', 'Jaipur', '09:00:00', '11:00:00', '300', 38, '2021-09-08 19:38:05'),
(2, 'Vikas Travels', 'Delhi', 'Jaipur', '11:00:00', '01:00:00', '450', 39, '2021-09-08 19:39:02'),
(3, 'Rohan Travels', 'Delhi', 'Agra', '09:00:00', '12:30:00', '400', 40, '2021-09-08 19:42:34'),
(4, 'Surya Travels ', 'Delhi', 'Dehradun', '09:00:00', '07:00:00', '600', 40, '2021-09-09 01:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `created_at`) VALUES
(1, 'abhi', 'abhishek10.4.2001@gmail.com', '$2y$10$3FTQINf7cAyxpA8j50JFduaL4fJdnRf0B4OwadCn41p/tN/axtniK', 7048960164, '2021-09-08 15:40:35'),
(2, 'admin', 'abhishek10.4.2001@gmail.com', '$2y$10$KxCaCsryHMzXnGW/62.3yeulnUz2zGRkdSqBtH1sn9Px6HZ7Dk1SK', 7048960164, '2021-09-08 15:47:56'),
(3, 'Sahil Kumar', 'sahil@gmail.com', '$2y$10$z6rEnw26pFDw7VtwmUNVhOwyCrKSdThNZSIyG8rQmkiO0/H4gGfz6', 8700456123, '2021-09-09 00:42:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121165;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

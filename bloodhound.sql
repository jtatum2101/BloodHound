-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2021 at 09:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodhound`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` int(11) NOT NULL,
  `county_name` varchar(255) NOT NULL,
  `county_state` varchar(255) NOT NULL,
  `county_population` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `county_name`, `county_state`, `county_population`) VALUES
(1, 'Sardis County', 'Mississippi', 1572),
(2, 'Panola County', 'Mississippi', 34190);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback_name` varchar(100) NOT NULL,
  `feedback_email` varchar(100) NOT NULL,
  `feedback_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_name`, `feedback_email`, `feedback_message`) VALUES
(1, 'Test me', 'testme01@aol.com', 'This website is awesome! I love this website!');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `mugshot` varchar(255) NOT NULL,
  `criminal_name` varchar(255) NOT NULL,
  `criminal_birth_date` date NOT NULL,
  `criminal_weight` decimal(10,0) NOT NULL,
  `criminal_height` decimal(10,0) NOT NULL,
  `criminal_eye_color` varchar(255) NOT NULL,
  `criminal_hair_color` varchar(255) NOT NULL,
  `criminal_ethnicity` varchar(255) NOT NULL,
  `criminal_charges` varchar(255) NOT NULL,
  `criminal_date_of_arrest` date NOT NULL,
  `criminal_county_of_arrest` varchar(255) NOT NULL,
  `author_of_record` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `mugshot`, `criminal_name`, `criminal_birth_date`, `criminal_weight`, `criminal_height`, `criminal_eye_color`, `criminal_hair_color`, `criminal_ethnicity`, `criminal_charges`, `criminal_date_of_arrest`, `criminal_county_of_arrest`, `author_of_record`) VALUES
(45, 'pictureofmyfather.jpeg', 'Christopher Word', '1982-01-28', '180', '70', 'Green', 'Blonde', 'White', 'Possession of Controlled Substance', '2018-02-07', 'Panola County', 'Bob Dylan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `police_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `psw`, `role`, `police_id`, `admin_id`, `county`, `state`, `date_joined`) VALUES
(3, 'Bob Dylan', 'bobdylan@bloodhound.org', 'D2rXEufyFkxK59c', 'officer', 1234567, NULL, 'Sardis County', 'MS', '2021-07-27 20:51:54'),
(4, 'Jeremiah Tatum', 'jeremiahtatum@yahoo.com', 'jeremiah5', 'admin', NULL, 364813, NULL, NULL, '2021-07-15 20:30:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
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
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

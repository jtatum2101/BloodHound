-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2021 at 10:26 PM
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
  `county_population` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(40, '/opt/lampp/temp/phpA8CgqI', 'Jeremiah Tatum', '2021-07-08', '123', '1234', 'Blue', 'Blonde', 'Black', 'gun charges', '2021-07-14', 'Panola County', 'Bob Dylan');

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
(3, 'Bob Dylan', 'bobdylan@bloodhound.org', 'D2rXEufyFkxK59c', 'officer', 1234567, NULL, NULL, NULL, '2021-07-13 22:17:33'),
(4, 'Jeremiah Tatum', 'jeremiahtatum@yahoo.com', 'jeremiah5', 'admin', NULL, 364813, NULL, NULL, '2021-07-15 20:30:28'),
(5, 'Lathe Ward', 'latheward@gmail.com', 'password1', 'admin', NULL, 123456789, NULL, NULL, '2021-07-16 16:44:51'),
(6, 'David Sing', 'davidsing@bloodhound.org', 'password123', 'officer', 4596766, NULL, NULL, NULL, '2021-07-23 20:17:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
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
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

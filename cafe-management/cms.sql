-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_type` int(1) NOT NULL DEFAULT 1 COMMENT '1-admin1, 2-admin2, 3-admin3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `admin_type`) VALUES
(1, 'admin', 'admin1@gmail.com', 'Adnan319', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1-active, 2-unactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `price`, `description`, `status`) VALUES
(1, 'coffe1', '11$', ' Coffee is a beverage brewed from the roasted and ', 1),
(2, ' Double Espresso', '15$', ' Coffee is a beverage brewed from the roasted and ', 1),
(3, ' Macchiato', '13$', ' Coffee is a beverage brewed from the roasted and ', 1),
(4, 'Espresso (Short Black)', '18$', ' Coffee is a beverage brewed from the roasted and ', 1),
(5, 'Americano', '12$', ' Coffee is a beverage brewed from the roasted and ', 1),
(6, 'Mocha', '9$', ' Coffee is a beverage brewed from the roasted and ', 1),
(7, 'Café Latte', '18$', ' Coffee is a beverage brewed from the roasted and ', 1),
(8, ' Cappuccino', '20$', ' Coffee is a beverage brewed from the roasted and ', 1),
(9, 'Piccolo Latte', '16$', ' Coffee is a beverage brewed from the roasted and ', 1),
(10, 'Espresso', '10$', ' Coffee is a beverage brewed from the roasted and ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mocktail`
--

CREATE TABLE `mocktail` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1-active, 2-unactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mocktail`
--

INSERT INTO `mocktail` (`id`, `name`, `price`, `description`, `status`) VALUES
(1, 'mocktail', '10', 'It contains fresh and delicious ingredients, such ', 1),
(2, ' Strawberry Honey Soda', '12$', 'It contains fresh and delicious ingredients, such ', 1),
(3, 'Pineapple Grapefruit Yuzu Mocktail', '16$', 'It contains fresh and delicious ingredients, such ', 1),
(4, 'Pineapple Ice Cream Float', '18$', 'It contains fresh and delicious ingredients, such ', 1),
(5, ' Unicorn Lemonade', '20$', 'It contains fresh and delicious ingredients, such ', 1),
(6, 'Blueberry Lemonade', '15$', 'It contains fresh and delicious ingredients, such ', 1),
(7, 'Mango-Pineapple Slushie', '16$', 'It contains fresh and delicious ingredients, such ', 1),
(8, 'Chocolate Fake-tini', '12$', 'It contains fresh and delicious ingredients, such ', 1),
(9, 'Spicy Watermelon Mocktails', '10$', 'It contains fresh and delicious ingredients, such ', 1),
(10, ' Cranberry Maple Rosemary Mocktail', '20$', 'It contains fresh and delicious ingredients, such ', 1),
(11, 'blue mocktail', '11$', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shake`
--

CREATE TABLE `shake` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1-active, 2-unactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shake`
--

INSERT INTO `shake` (`id`, `name`, `price`, `description`, `status`) VALUES
(1, 'shake1', '10', 'It is usually prepared by milk, ice cream or iced ', 1),
(2, 'Vanilla special', '15$', 'It is usually prepared by milk, ice cream or iced ', 1),
(3, 'Cool mint', '18$', 'It is usually prepared by milk, ice cream or iced ', 1),
(4, 'Strawberry marshallow', '20$', 'It is usually prepared by milk, ice cream or iced ', 1),
(5, 'Raspberry and white chocolate', '18$', 'It is usually prepared by milk, ice cream or iced ', 1),
(6, ' Blueberry cheesecake', '19$', 'It is usually prepared by milk, ice cream or iced ', 1),
(7, 'Triple nut caramel', '14$', 'It is usually prepared by milk, ice cream or iced ', 1),
(8, 'Neapolitan', '16$', 'It is usually prepared by milk, ice cream or iced ', 1),
(9, 'Choc malt', '18$', 'It is usually prepared by milk, ice cream or iced ', 1),
(10, 'Pina colada', '15$', 'It is usually prepared by milk, ice cream or iced ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT 'active-1, de-active-2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Adnan Belim ', 'belimadnan488@gmail.com', '123456', 2),
(2, 'Mohammed Adnan Belim ', 'belimadnan111@gmail.com', '123456', 2),
(3, 'Naved Belim', 'navedbelim@gmail.com', '123456', 2),
(4, 'ayan yasar', 'ayan111@gmail.com', '123456', 2),
(5, 'zaidan Belim', 'zaidan111@gmail.com', '123456', 2),
(6, 'Sajid Belim', 'sajidbelim1175@gmail.com', '123456', 1),
(7, 'yojit joshi', 'yojit@gmail.com', '123456', 2),
(8, 'Sajid Belim', 'deepak@gmail.com', '123456', 2),
(9, 'Mohit Maakvana', 'mohit123@gmail.com', '123456', 1),
(10, 'Deepak', 'deepak123@gmail.com', '123456', 1),
(11, 'Piyush Sharma', 'piyush123@gmail.com', 'login_btn', 1),
(12, 'Yojit Joshi', 'yojit123@gmail.com', '123456', 1),
(13, 'Asnil Sharma', 'anil123@gmail.com', '123456', 1),
(14, 'samir khan', 'samir123@gmail.com', '123456', 1),
(15, 'imran', 'imran123@gmail.com', '123456', 1),
(16, 'ibrahim', 'ibrahim123@gmail.com', '123456', 1),
(17, 'dikshant bhai', 'dikshant123@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mocktail`
--
ALTER TABLE `mocktail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shake`
--
ALTER TABLE `shake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mocktail`
--
ALTER TABLE `mocktail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shake`
--
ALTER TABLE `shake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

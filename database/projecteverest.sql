-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 03:54 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecteverest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `skill` text NOT NULL,
  `available` int(1) NOT NULL,
  `experience` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `name`, `address`, `skill`, `available`, `experience`, `email`, `phone`, `password`, `photo`) VALUES
(3, 'David', 'Kapan', 'Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada\r\n                                            magna mollis euismod. Donec sed odio dui.', 1, 'Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada\r\n                                            magna mollis euismod. Donec sed odio dui.', 'david@gmail.com', 45646512, '$2y$10$rJMcvR3iUh1TGvTkZL/JDug8msKlSzgWXEAC0VogoLYwvWuVkiOG.', '1423_f.jpg'),
(4, 'Karma', 'Boudha', 'Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada\r\n                                            magna mollis euismod. Donec sed odio dui.', 1, 'Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada\r\n                                            magna mollis euismod. Donec sed odio dui.', 'karma@gmail.com', 5456456, '$2y$10$bBfWiiDft.F40bm2F/exBOCPyIcH1Rp8nwf4oFIMn7hZYWU/pz8Ha', '1423_f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `totalRoom` int(11) NOT NULL,
  `bookedRoom` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `availabe` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `location`, `services`, `description`, `price`, `totalRoom`, `bookedRoom`, `email`, `password`, `photo`, `rating`, `availabe`) VALUES
(15, 'Hotel', 'Kapan', 'Lots Of', 'Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada\r\n                                            magna mollis euismod. Donec sed odio dui.', 1000, 25, 0, 'hotel@gmail.com', '$2y$10$kzQbUiKuERoDJDk/WNNdCeQ21hYCu/BkXLYgaJ44FOL2moKjqTB1.', '30ee7549-8310-421e-b92a-976fb2ba59b6.jpeg', 0, 1),
(16, 'Sagarmatha', 'Sukhedhara', 'Lots Of', 'Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada\r\n                                            magna mollis euismod. Donec sed odio dui.', 450, 20, 0, 'sagarmatha@gmail.com', '$2y$10$O0ZgLSM8o6LvF5tmV1kVSO3sBlnXpD5O33Bf8zv4byDqWdmvqIZI6', '5pikachu-1gif.gif.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `2dphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `recent` text NOT NULL,
  `things` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `mode`, `name`, `rating`, `feedback`) VALUES
(1, 'Place', 'Mt.Everest', 1, 'NIce'),
(2, 'Place', 'Mt.Everest', 3, 'ohhh');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `u_name` varchar(55) NOT NULL,
  `u_email` varchar(55) NOT NULL,
  `NoPeople` int(100) NOT NULL,
  `u_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone`, `email`, `password`, `photo`) VALUES
(9, 'New', 'Kapan', 2147483647, 'new@gmail.com', '$2y$10$o8mYln7mj5DBFzgcw/A0COs6hIsF9u.q2Rdqv0mYeDvhsDGjOCOf.', '5pikachu-1gif.gif.jpg'),
(10, 'Pemba', 'Kapan', 984561237, 'pemba@gmail.com', '$2y$10$HC27MoyU3c6EkwgQB0omdOdnc4mxdKrgf7/NftN56Hqo0MrAKD9AK', '5pikachu-1gif.gif.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

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
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

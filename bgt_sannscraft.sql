-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgt_sannscraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `item_category` varchar(250) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `price`, `stock`, `item_category`, `image_url`, `date_added`) VALUES
(1, 'Binhi Inspired Bracelet', 100, 25, 'BRACELETS', '', '2024-06-06 22:26:42'),
(2, 'Ben&Ben Inspired Bracelet', 100, 50, 'BRACELETS', '', '2024-06-07 11:38:15'),
(3, 'Sza Inspired Bracelet', 100, 30, 'BRACELETS', '', '2024-06-07 11:38:15'),
(4, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:12:32'),
(5, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:14:25'),
(6, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:14:45'),
(7, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:18:07'),
(8, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:18:10'),
(9, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:21:33'),
(10, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:24:37'),
(11, 'Ben&Ben Inspired Bracelet', 100, 500, 'BRACELETS', '', '2024-06-07 14:30:34'),
(12, 'Sza Inspired Bracelet', 100, 250, 'BRACELETS', '', '2024-06-07 14:30:53'),
(13, 'Flower Keychain', 30, 150, 'KEYCHAIN', '', '2024-06-07 14:47:12'),
(14, 'Sza Inspired Bracelet', 100, 120, 'BRACELETS', '', '2024-06-07 14:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `item_id` int(30) NOT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` int(30) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `item_name` varchar(300) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `item_price`, `quantity`, `date_added`, `item_name`, `image_url`, `user_id`, `total_amount`, `status`) VALUES
(66621, 0, 100, 4, '2024-06-06 14:22:45', 'Black & White Necklace', '', 0, 400.00, 'Processing'),
(666219, 0, 100, 4, '2024-06-06 14:20:00', 'Black & White Necklace', '', 0, 400.00, 'Processing'),
(666227, 0, 100, 1, '2024-06-06 15:18:26', 'Colorful Anklet', '', 0, 100.00, 'Processing'),
(20240606, 0, 100, 2, '2024-06-06 14:58:00', 'Colorful Anklet', '', 0, 200.00, 'Processing'),
(666219604, 0, 100, 1, '2024-06-06 14:17:36', 'Name Anklet', '', 0, 100.00, 'Processing'),
(1717706205, 0, 100, 4, '2024-06-06 14:36:45', 'Black & White Necklace', '', 0, 400.00, 'Processing'),
(1717706294, 0, 100, 4, '2024-06-06 14:38:14', 'Black & White Necklace', '', 0, 400.00, 'Processing'),
(1717706736, 0, 100, 4, '2024-06-06 14:45:36', 'Black & White Necklace', '', 0, 400.00, 'Processing'),
(1717706862, 0, 100, 2, '2024-06-06 14:47:42', 'Colorful Anklet', '', 0, 200.00, 'Processing'),
(1717707219, 0, 100, 2, '2024-06-06 14:53:39', 'Colorful Anklet', '', 0, 200.00, 'Processing'),
(1717707248, 0, 100, 2, '2024-06-06 14:54:08', 'Colorful Anklet', '', 0, 200.00, 'Processing'),
(1717708507, 0, 100, 1, '2024-06-06 15:15:07', 'Ben&Ben Inspired Bracelet', '', 0, 100.00, 'Processing'),
(1717708673, 0, 100, 1, '2024-06-06 15:17:53', 'Coldplay Inspired Bracelet', '', 0, 100.00, 'Processing'),
(1717709007, 0, 100, 1, '2024-06-06 15:23:27', 'Coldplay Inspired Bracelet', '', 0, 100.00, 'Processing'),
(1717709073, 0, 100, 1, '2024-06-06 15:24:33', 'Cherry Anklet', '', 0, 100.00, 'Processing'),
(1717709189, 0, 100, 1, '2024-06-06 15:26:29', 'Rainbow Necklace', '', 0, 100.00, 'Processing'),
(1717709237, 0, 100, 1, '2024-06-06 15:27:17', 'Sagada Inspired Bracelet', '', 0, 100.00, 'Processing'),
(1717710065, 0, 100, 3, '2024-06-06 15:41:05', 'Gem Anklet', '', 0, 300.00, 'Processing'),
(1717710717, 0, 100, 1, '2024-06-06 15:51:57', 'Taylor Swift Inspired Bracelet', '', 0, 100.00, 'Processing'),
(1717733212, 0, 100, 1, '2024-06-06 22:06:52', 'Coldplay Inspired Bracelet', '', 0, 100.00, 'Processing'),
(1717733321, 0, 100, 2, '2024-06-06 22:08:41', 'Binhi Inspired Bracelet', '', 0, 200.00, 'Processing'),
(1717733327, 0, 100, 2, '2024-06-06 22:08:47', 'Binhi Inspired Bracelet', '', 0, 200.00, 'Processing'),
(1717768714, 0, 100, 1, '2024-06-07 07:58:34', 'Colorful Anklet', '', 0, 100.00, 'Processing'),
(1717773373, 0, 100, 1, '2024-06-07 09:16:13', 'Colorful Anklet', '', 0, 100.00, 'Processing'),
(2147483647, 0, 100, 1, '2024-06-06 21:40:44', 'Colorful Anklet', '', 0, 100.00, 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `user_id` int(11) NOT NULL,
  `item_id` int(30) NOT NULL,
  `shipped_via` text NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `shipped_date` datetime(6) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_amount` decimal(10,2) NOT NULL,
  `customer_email` varchar(300) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `tracking_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(30) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `mode_of_payment` varchar(100) NOT NULL,
  `amount_tendered` int(20) NOT NULL,
  `account_number` int(20) DEFAULT NULL,
  `account_name` varchar(100) DEFAULT NULL,
  `reference_no` int(20) DEFAULT NULL,
  `payment_status` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `user_id` int(11) NOT NULL,
  `ratings` int(5) NOT NULL,
  `comments` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(200) NOT NULL,
  `user_type` char(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `full_name`, `age`, `address`, `user_type`, `date_added`, `username`) VALUES
(1, 'nics@gmail.com', '$2y$10$Oe7mMw6vupvh3ahIjFqkNe6pKKHUsBn8MNFhwmGEYR1xC9tImyRu6', 'Nichole Retumban', 20, 'Tobog, Oas, Albay', 'c', '2024-06-06 07:50:51', 'nics'),
(2, 'alex@gm.com', '$2y$10$TfdbudGSGpe4cZazXBXN8OC3QrTRttxFlXZ67/4iCRJN/XmvYLR.u', 'Alexandra Arevalo', 20, 'San Vicente Libon Albay', 'c', '2024-06-06 13:38:37', 'Lex'),
(3, 'alex@example.com', '$2y$10$yhCpgCzLyhASdcB5HdzGgOy9iQzXmfpkAw8bng9wL/LohwyizpyKC', 'Alexandra Arevalo', 20, 'Libon Albay', 'c', '2024-06-06 14:13:04', 'alex'),
(4, 'lex@gm.com', '$2y$10$ydt3a2MncxYrocidpndYFOLzICzVDYlTRI9RZnl33It.iDRhSF4B6', 'Alex', 20, 'Libon Albay', 'c', '2024-06-06 14:17:30', 'lex'),
(5, 'nics-r@gm.com', '$2y$10$x9ec0UVnG5zadz47RA1QXuE2gY3/tx0E2wt6A2DLVR8lLaHlsEHHy', 'Nichole', 20, 'Tobog, Oas, Albay', 'c', '2024-06-06 20:47:07', 'nic'),
(6, 'nc@gm.cm', '$2y$10$OxwrVvBj2hh0HuPmvR1miOpoIK6HDrV13wYYIP5wSvJdg9Ea.ZrIC', 'nc', 20, 'tobog', 'a', '2024-06-07 03:22:00', 'en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`tracking_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 03:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_c_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_c_password`) VALUES
(1, 'waqas', 'waqas@gmail.com', '12345678', '12345678'),
(2, 'ali', 'ali@gmail.com', '3232', '3232'),
(3, 'bilal', 'bilal@gmail.com', '2121', '2121');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(25, 'Swiggy'),
(26, 'Zomato'),
(27, 'Amazone'),
(28, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(17, 'Fruits'),
(18, 'Vegetables'),
(19, 'Milk Products'),
(20, 'Chips');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 1, 201460212, 43, 1, 'pending'),
(2, 1, 1077385870, 41, 1, 'pending'),
(3, 1, 1375158870, 42, 1, 'pending'),
(4, 1, 2134672981, 43, 1, 'pending'),
(5, 1, 1740509403, 0, 1, 'pending'),
(6, 1, 572461747, 0, 1, 'pending'),
(7, 1, 1356735153, 0, 1, 'pending'),
(8, 1, 396559063, 0, 1, 'pending'),
(9, 1, 40722698, 0, 1, 'pending'),
(10, 1, 766395787, 0, 1, 'pending'),
(11, 1, 1944207738, 0, 1, 'pending'),
(12, 1, 1779019103, 0, 1, 'pending'),
(13, 1, 1239504195, 0, 1, 'pending'),
(14, 1, 1480218737, 38, 1, 'pending'),
(15, 1, 60033023, 0, 1, 'pending'),
(16, 1, 1843557279, 0, 1, 'pending'),
(17, 1, 1645936910, 0, 1, 'pending'),
(18, 1, 157281596, 0, 1, 'pending'),
(19, 1, 1514069750, 0, 1, 'pending'),
(20, 1, 1099249305, 0, 1, 'pending'),
(21, 1, 1058559002, 0, 1, 'pending'),
(22, 1, 1160590601, 0, 1, 'pending'),
(23, 1, 1302174950, 43, 1, 'pending'),
(24, 1, 896957093, 38, 1, 'pending'),
(25, 1, 1919480719, 39, 1, 'pending'),
(26, 3, 1085059031, 39, 1, 'pending'),
(27, 3, 839986902, 38, 1, 'pending'),
(28, 3, 1835809631, 39, 1, 'pending'),
(29, 3, 917274626, 42, 1, 'pending'),
(30, 3, 1770929133, 42, 2, 'pending'),
(31, 3, 701677492, 41, 1, 'pending'),
(32, 3, 1836100943, 39, 1, 'pending'),
(33, 3, 1451161877, 41, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(38, 'Shoes', 'this is a brand shoes', 'this is a brand shoes', 20, 28, 'shoes2.jpg', 'shoes3.jpg', 'shoes1.jpg ', '2000 ', '2022-12-14 18:28:40', 0),
(39, 'Fresh Mango', 'Mango is a fruit', 'Mango is a fruit', 17, 25, 'mango.jpg', 'mango1.jpg', 'mango2.jpg', '250 ', '2022-12-14 18:42:05', 0),
(41, 'Vegetable', 'vegetables is a fresh for mind', 'vegetables is a fresh for mind', 18, 26, 'vegetable.jpg', 'juices.jpg', 'carrot.jpg ', '300 ', '2022-12-14 18:45:34', 0),
(42, 'Dairy', 'dairy is a milky', 'dairy is a milky', 19, 27, 'dairymilk.jpg', 'dairy2.jpg', 'dairy1.jpg ', '70 ', '2022-12-14 18:46:56', 0),
(43, 'Chips', 'chips is a enjoy time', 'chips is a enjoy time', 20, 27, 'ch.jpg', 'pineapple.png', 'fruit.jpg ', '120 ', '2022-12-14 18:50:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_data`, `order_status`) VALUES
(1, 1, 2740, 201460212, 5, '2022-12-14 19:00:34', 'Complete'),
(2, 1, 300, 1077385870, 1, '2022-12-14 19:00:41', 'Complete'),
(3, 1, 70, 1375158870, 1, '2022-12-15 08:47:26', 'Complete'),
(4, 1, 120, 2134672981, 1, '2022-12-15 14:34:44', 'Complete'),
(5, 1, 0, 1740509403, 0, '2022-12-15 13:47:07', 'pending'),
(6, 1, 0, 572461747, 0, '2022-12-15 13:47:42', 'pending'),
(7, 1, 0, 1356735153, 0, '2022-12-15 13:49:33', 'pending'),
(8, 1, 0, 396559063, 0, '2022-12-15 13:50:10', 'pending'),
(9, 1, 0, 40722698, 0, '2022-12-15 13:56:11', 'pending'),
(10, 1, 0, 766395787, 0, '2022-12-15 13:57:13', 'pending'),
(11, 1, 0, 1944207738, 0, '2022-12-15 14:34:19', 'pending'),
(12, 1, 0, 1779019103, 0, '2022-12-15 14:40:11', 'pending'),
(13, 1, 0, 1239504195, 0, '2022-12-15 14:41:16', 'pending'),
(14, 1, 2000, 1480218737, 1, '2022-12-15 18:46:15', 'pending'),
(15, 1, 0, 60033023, 0, '2022-12-15 18:46:42', 'pending'),
(16, 1, 0, 1843557279, 0, '2022-12-15 18:49:27', 'pending'),
(17, 1, 0, 1645936910, 0, '2022-12-15 18:49:55', 'pending'),
(18, 1, 0, 157281596, 0, '2022-12-15 18:51:38', 'pending'),
(19, 1, 0, 1514069750, 0, '2022-12-15 18:57:03', 'pending'),
(20, 1, 0, 1099249305, 0, '2022-12-15 18:57:44', 'pending'),
(21, 1, 0, 1058559002, 0, '2022-12-15 19:03:16', 'pending'),
(22, 1, 0, 1160590601, 0, '2022-12-15 19:03:55', 'pending'),
(23, 1, 2120, 1302174950, 2, '2022-12-16 07:35:53', 'Complete'),
(24, 1, 2000, 896957093, 1, '2022-12-16 09:49:11', 'pending'),
(25, 1, 250, 1919480719, 1, '2022-12-16 19:04:39', 'pending'),
(26, 3, 250, 1085059031, 1, '2022-12-16 20:12:21', 'pending'),
(27, 3, 2000, 839986902, 1, '2022-12-16 20:36:10', 'pending'),
(28, 3, 250, 1835809631, 1, '2022-12-16 20:44:01', 'pending'),
(29, 3, 70, 917274626, 1, '2022-12-17 12:24:35', 'pending'),
(30, 3, 140, 1770929133, 1, '2022-12-17 12:26:35', 'pending'),
(31, 3, 300, 701677492, 1, '2022-12-17 12:28:22', 'pending'),
(32, 3, 250, 1836100943, 1, '2022-12-25 06:48:48', 'pending'),
(33, 3, 300, 1451161877, 1, '2022-12-27 12:49:52', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(1, 1, 201460212, 2740, 'Cash on Delivery', '2022-12-14 19:00:34'),
(2, 2, 1077385870, 300, 'Cash on Delivery', '2022-12-14 19:00:41'),
(3, 3, 1375158870, 70, 'Net Banking', '2022-12-15 08:47:26'),
(4, 4, 2134672981, 120, 'Net Banking', '2022-12-15 14:34:44'),
(5, 23, 1302174950, 2120, 'Net Banking', '2022-12-16 07:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(3, 'bilal', 'bilal@gmail.com', '$2y$10$q5SS8BpU9NQ0QRjBFMyZleiNCfwmoS8FBPV8KYuluk6wf9L7JRq7m', '2.png', '::1', 'karachi', '89899'),
(4, 'danish', 'danish@gmail.com', '$2y$10$33Flx5lUW8VnJnrWmjFb8epFbC9UZGermJ0QFzcY8MpgFIi1bpZLa', '2.png', '::1', 'lahore', '09876543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

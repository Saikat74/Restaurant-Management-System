-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 05:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Vegetable'),
(2, 'Fruits'),
(3, 'Protein'),
(4, 'Fishes');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(5) NOT NULL,
  `foodname` varchar(60) NOT NULL,
  `foodprice` varchar(5) NOT NULL,
  `fimage` varchar(200) NOT NULL,
  `fdescription` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `foodname`, `foodprice`, `fimage`, `fdescription`) VALUES
(15, 'French Fries', '70', 'styles/Storage/image/item2.jpg', 'Crispy'),
(16, 'Beef Burger', '240', 'styles/Storage/image/item3.jpg', 'Delicious Beef Burger with mayonnaise.');

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE `groceries` (
  `id` int(4) NOT NULL,
  `name` varchar(15) NOT NULL,
  `quantity` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groceries`
--

INSERT INTO `groceries` (`id`, `name`, `quantity`) VALUES
(1, 'Potato', '12kg'),
(3, 'Onion', '6kg'),
(4, 'Beef', '5kg'),
(5, 'Chicken', '10kg'),
(6, 'Mutton', '3kg');

-- --------------------------------------------------------

--
-- Table structure for table `ordert`
--

CREATE TABLE `ordert` (
  `oid` int(3) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_quantity` int(5) NOT NULL,
  `product_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordert`
--

INSERT INTO `ordert` (`oid`, `item_name`, `item_quantity`, `product_price`) VALUES
(1, '', 0, ''),
(2, '', 0, ''),
(3, '', 0, ''),
(4, '', 0, ''),
(5, '', 0, ''),
(6, '', 0, ''),
(7, '$value[\"item_name\"]', 0, '$value[\"product_pric'),
(8, '', 0, ''),
(9, '', 0, ''),
(10, '', 0, ''),
(11, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Name` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Price` int(7) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Name`, `Category`, `Price`, `Quantity`, `Description`, `id`) VALUES
('Redmi Note 7', 'Mobile', 17000, 1, 'Android 9', 1),
('Redmi note 9pro', 'Mobile', 23500, 25, 'Os:Android Q,Varient:6/128gb Cam:64mp and 32mp', 2),
('Redmi note 5', 'Mobile', 12000, 1, 'Based ON Android 8', 3),
('Mi Band 5', 'Gadgets', 2900, 1, 'Mi Band 5 is a smart fitness band from Xiaomi.', 4),
('Redmi note 6pro', 'Mobile', 14500, 1, '4/64gb variant', 5),
('Redmi note 8', 'Mobile', 19500, 40, '8/128gb', 6),
('Galaxy A71', 'Select a Category', 25000, 20, '4/64gb variant Exynos 772', 7);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `cn` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `price` varchar(5) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `cn`, `fname`, `price`, `date`, `time`) VALUES
(1, 'Xyz', 'Beef Burger', '240', '2020-09-27', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

CREATE TABLE `stuffs` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` enum('Admin','Manager','Chef') NOT NULL,
  `age` int(3) NOT NULL,
  `salary` varchar(6) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuffs`
--

INSERT INTO `stuffs` (`id`, `name`, `password`, `type`, `age`, `salary`, `phone`, `address`) VALUES
(1, 'admin', '1', 'Admin', 23, '25000', 1791936886, 'Cumilla'),
(2, 'manager', '2', 'Manager', 23, '15000t', 17, 'Cumilla,BD');

-- --------------------------------------------------------

--
-- Table structure for table `tbooking`
--

CREATE TABLE `tbooking` (
  `bookid` int(5) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbooking`
--

INSERT INTO `tbooking` (`bookid`, `name`, `email`, `phone`, `date`, `time`) VALUES
(8, 'Ayon', 'tanzilon413@gmail.com', 1791936886, '2020-09-28', '20:38:00'),
(9, 'Anando', 'ana@gmail.com', 423455, '2020-10-02', '19:37:00'),
(11, 'Ayon', 'tanzilon413@gmail.com', 1791936886, '2020-09-25', '04:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Tanzil Ayon', 'ayon', 'tzayon1@gmail.com', '01791936886', 'Cumilla', 81),
(2, 'Tanzil Ayon', 'ayon', 'tzayon1@gmail.com', '01791936886', 'Cumilla', 81),
(3, 'abc', 'abc', 'abc@gmail.com', '01791936886', 'Cumilla', 0),
(4, 'xyz', 'xyz', 'tanzilon413@gmail.com', '01791936886', 'Same', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groceries`
--
ALTER TABLE `groceries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordert`
--
ALTER TABLE `ordert`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuffs`
--
ALTER TABLE `stuffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbooking`
--
ALTER TABLE `tbooking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `groceries`
--
ALTER TABLE `groceries`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ordert`
--
ALTER TABLE `ordert`
  MODIFY `oid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stuffs`
--
ALTER TABLE `stuffs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbooking`
--
ALTER TABLE `tbooking`
  MODIFY `bookid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

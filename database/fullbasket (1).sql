-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 12:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullbasket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Ruwaiba', 'Jawaria', 'ruwaiba123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `product` int(11) NOT NULL,
  `category_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `product`, `category_img`) VALUES
(6, 'Jewellery', 1, 'jewellery.jpg'),
(7, 'Bags', 0, 'p16.jpg'),
(22, 'Kitchen Accessories', 1, 'kitchen-appliances.jpg'),
(24, 'Electronics', 0, 'electronics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`id`, `fullname`, `phone`, `address`, `city`, `landmark`) VALUES
(28, 'Ruwaiba Jawaria', '124554646', 'Liaquatabad ', 'Karachi', 'abcdef'),
(29, 'Shaharyar Jawed', '23645777', 'Liaquatabad ', 'Karachi', 'qwerty'),
(30, 'Shaharyar Jawed', '23645777', 'Liaquatabad ', 'Karachi', 'qwerty'),
(31, 'Jawaria jawed', '21435663', 'Nazimabad', 'Lahore', 'ertgag'),
(32, 'Zoha Baig', '4575372', 'Nazimabad', 'Karachi', 'fghfhs'),
(33, 'Ruwaiba Jawaria', '4363462', 'Liaquatabad ', 'Karachi', 'wdeqwf'),
(34, 'Aimon jawed', '235346456', 'Liaquatabad ', 'Karachi', ''),
(35, 'abcde', '234345346', 'Gulshan', 'Lahore', 'abcdef'),
(36, 'abcde', '234345346', 'Gulshan', 'Lahore', 'abcdef'),
(37, 'abcde', '523453', 'Gulshan', 'Lahore', 'abcdefgh'),
(38, 'Shaharyar Jawed', '235366', 'Nazimabad', 'Lahore', ''),
(39, 'Jawaria jawed', '346462', 'Nazimabad', 'Karachi', ''),
(40, 'Jawaria jawed', '45436', 'Liaquatabad karachi', 'sad', 'w'),
(41, 'Ruwaiba Jawaria', '235255', 'Nazimabad', 'Lahore', ''),
(42, 'Ruwaiba Jawed', '12345678', 'Gulberg', 'Islamabad', ''),
(43, 'Aimon jawed', '432442323', 'Gulshan', 'Karachi', 'abcdef'),
(44, 'Zoha Baig', '36326636', 'Gulberg', 'Lahore', ''),
(45, 'Ruwaiba Jawaria', '574721146', 'Gulshan', 'Islamabad', ''),
(46, 'Zoha Baig', '4534634', 'Gulberg', 'Islamabad', ''),
(47, 'Jawaria jawed', '123455789', 'Gulberg', 'Islamabad', ''),
(48, 'Aimon jawed', '132455562', 'Gulshan', 'Lahore', ''),
(49, 'abcde', '2342355', 'Gulberg', 'Karachi', ''),
(50, 'Ruwaiba Jawaria', '2425325552', 'Liaquatabad ', 'Karachi', ''),
(51, 'Jawaria jawed', '42332351', 'Nazimabad', 'Islamabad', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `product_name`, `price`, `quantity`, `timestamp`) VALUES
(28, 28, 'Purple Bag', 4000, 2, '2023-09-12 18:51:22'),
(29, 28, 'Blue Hand Bag', 8000, 3, '2023-09-12 18:51:22'),
(30, 29, 'Gold Pearl Jewellery Set', 98000, 1, '2023-09-12 18:53:37'),
(31, 29, 'Portable Juicer', 3000, 2, '2023-09-12 18:53:37'),
(32, 31, 'Golden necklace', 78000, 1, '2023-09-12 18:56:58'),
(33, 31, 'Green Bag', 4000, 1, '2023-09-12 18:56:58'),
(34, 32, 'Blue Hand Bag', 8000, 2, '2023-09-12 18:58:28'),
(35, 32, 'Pink Bag', 5450, 2, '2023-09-12 18:58:28'),
(36, 33, 'Green Bag', 4000, 1, '2023-09-12 18:59:32'),
(37, 33, 'Portable Juicer', 3000, 1, '2023-09-12 18:59:32'),
(38, 34, 'Necklace', 9000, 1, '2023-09-13 18:58:46'),
(39, 34, 'Green Bag', 4000, 1, '2023-09-13 18:58:46'),
(40, 37, 'Pink Bag', 5450, 1, '2023-09-13 21:14:46'),
(41, 40, 'Pink Bag', 5450, 1, '2023-09-13 21:47:19'),
(42, 43, 'Purple Bag', 4000, 1, '2023-09-14 16:27:14'),
(43, 44, 'Necklace', 9000, 1, '2023-09-14 18:36:46'),
(44, 45, 'Purple Bag', 4000, 2, '2023-09-14 18:38:10'),
(45, 46, 'Blue Hand Bag', 8000, 4, '2023-09-14 18:41:08'),
(46, 47, 'Gold Pearl Jewellery Set', 98000, 1, '2023-09-15 20:37:19'),
(47, 48, 'Green Bag', 4000, 1, '2023-09-15 20:38:39'),
(48, 49, 'Blue Bag', 8000, 1, '2023-09-15 21:12:49'),
(49, 50, 'Blue Bag', 8000, 1, '2023-09-23 16:42:43'),
(50, 50, 'Necklace', 9000, 1, '2023-09-23 16:42:43'),
(51, 51, 'Green Bag', 4000, 1, '2023-09-23 16:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `product_date` varchar(255) DEFAULT NULL,
  `product_img1` varchar(255) DEFAULT NULL,
  `product_img2` varchar(255) DEFAULT NULL,
  `product_img3` varchar(255) DEFAULT NULL,
  `product_img4` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `description`, `category`, `product_date`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `price`) VALUES
(1, 'Blue Bag', 'This is a Hand Bag.', 7, '05, Aug ,2023', 'p5.jpg', 'p5.jpg', 'p5.jpg', 'p5.jpg', 8000),
(2, 'Necklace', 'This is a Diamond Necklace.', 6, '05, Aug ,2023', 'jewellery.jpg', 'jewellery.jpg', 'jewellery.jpg', 'jewellery.jpg', 9000),
(4, 'Gold Pearl Jewellery Set', 'This is a Gold Pearl Jewellery set.', 6, '08, Aug ,2023', 'jewellery-2.jpg', 'jewellery-2.jpg', 'jewellery-2.jpg', 'jewellery-2.jpg', 98000),
(15, 'Green Bag', 'This is a Green Bag.', 7, '08, Aug ,2023', 'p13.jpg', 'p13.jpg', 'p13.jpg', 'p13.jpg', 4000),
(16, 'Purple Bag', 'This is a Purple Bag.', 7, '10, Aug ,2023', 'p11.jpg', 'p11.jpg', 'p11.jpg', 'p11.jpg', 4000),
(17, 'Pink Bag', 'This is a Pink Bag.', 7, '15, Aug ,2023', 'pd_5.jpg', 'pd_5.jpg', 'pd_5.jpg', 'pd_5.jpg', 5450),
(21, 'Golden necklace', 'This is Gold Necklace..', 6, '21, Aug ,2023', 'jewellery-3.jpg', 'jewellery-3.jpg', 'jewellery-3.jpg', 'jewellery-3.jpg', 78000),
(22, 'Portable Juicer', 'This is a Portable Juicer.', 22, '24, Aug ,2023', 'juicer.jpg', 'juicer.jpg', 'juicer.jpg', 'juicer.jpg', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

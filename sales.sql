-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 09:13 AM
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
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`) VALUES
(16, 'Kevin Kipkosgei Kibet', '1248', '1234567', '123', 'omeprazol', '2020-10-14', 'clean');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `gen_name`, `product_name`, `cost`, `o_price`, `price`, `profit`, `supplier`, `onhand_qty`, `qty`, `qty_sold`, `expiry_date`, `date_arrival`) VALUES
(61, 'test', 'test', ' test', '', '25', '45', '20', '', 0, 7, 43, '2020-10-16', '2020-10-08'),
(62, 'kemsa', 'omeprazol', ' digestive ', '', '45', '56', '11', '', 0, 45, 45, '2020-10-17', '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE `purchases_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(146, 'RS-0052003', 'Admin', '10/02/20', 'cash', '60', '10', '100', 'guyo', ''),
(147, 'RS-23382', 'Admin', '10/02/20', 'cash', '90', '15', '40', 'him', ''),
(148, 'RS-22243', 'Admin', '10/02/20', 'cash', '90', '15', '700', 'guyo', ''),
(150, 'RS-52225', 'Admin', '10/03/20', 'cash', '30', '5', '34', 'test', ''),
(151, 'RS-733070', 'Admin', '10/03/20', 'cash', '30', '5', '35', 'test', ''),
(152, 'RS-92203', 'Admin', '10/03/20', 'cash', '405', '90', '34', 'guyo', ''),
(153, 'RS-4202', 'Admin', '10/05/20', 'cash', '45', '10', '122', 'test', ''),
(154, 'RS-33224930', 'Admin', '10/05/20', 'cash', '', '', '23', 'we', ''),
(155, 'RS-3233502', 'Admin', '10/05/20', 'cash', '45', '20', '2', 'test', ''),
(156, 'RS-4286532', 'Admin', '10/05/20', 'cash', '45', '20', '45', 'rt', ''),
(157, 'RS-89233623', 'Admin', '10/05/20', 'cash', '45', '20', '34', 'hey', ''),
(158, 'RS-230222', 'Admin', '10/05/20', 'cash', '45', '20', '90', 'Hy', ''),
(159, 'RS-222760', 'Admin', '10/05/20', 'cash', '45', '20', '23', 'test', ''),
(160, 'RS-3222322', 'Admin', '10/05/20', 'cash', '45', '20', '10', 'hey', ''),
(161, 'RS-622002', 'Admin', '10/05/20', 'cash', '45', '20', '24', 'test', ''),
(162, 'RS-3220024', 'Admin', '10/05/20', 'cash', '45', '20', '90', 'tets', ''),
(163, 'RS-23457', 'Admin', '10/05/20', 'cash', '45', '20', '56', 'test', ''),
(164, 'RS-2333432', 'Admin', '10/05/20', 'cash', '45', '20', '34', 'wer', ''),
(165, 'RS-232332', 'Admin', '10/05/20', 'cash', '45', '20', '78', 'tesr', ''),
(166, 'RS-3330243', 'Admin', '10/05/20', 'cash', '45', '20', '67', 'hey', ''),
(167, 'RS-07333092', 'Admin', '10/05/20', 'cash', '45', '20', '90', 'bgt', ''),
(168, 'RS-200630', 'Admin', '10/05/20', 'cash', '405', '180', '46', 'test', ''),
(169, 'RS-3223232', 'Admin', '10/05/20', 'cash', '45', '20', '56', 'ft', ''),
(170, 'RS-33932393', 'Admin', '10/05/20', 'cash', '45', '20', '67', 'Kevin Kipkosgei Kibet', ''),
(171, 'RS-922332', 'Admin', '10/05/20', 'cash', '45', '20', '56', 'Kevin Kipkosgei Kibet', ''),
(172, 'RS-223990', 'Admin', '10/05/20', 'cash', '45', '20', '56', 'Kevin Kipkosgei Kibet', ''),
(173, 'RS-260030', 'Admin', '10/05/20', 'cash', '45', '20', '43', 'Kevin Kipkosgei Kibet', ''),
(174, 'RS-3420032', 'admin123', '10/06/20', 'cash', '45', '20', '45', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`) VALUES
(327, 'RS-92203', '60', '5', '225', '50', 'ytte', 'ttete', ' yeyywe', '45', '', '10/03/20'),
(328, 'RS-92203', '60', '3', '135', '30', 'ytte', 'ttete', ' yeyywe', '45', '', '10/03/20'),
(329, 'RS-92203', '60', '1', '45', '10', 'ytte', 'ttete', ' yeyywe', '45', '', '10/03/20'),
(330, 'RS-3307328', '60', '1', '45', '10', 'ytte', 'ttete', ' yeyywe', '45', '', '10/04/20'),
(331, 'RS-0306003', '60', '1', '45', '10', 'ytte', 'ttete', ' yeyywe', '45', '', '10/05/20'),
(332, 'RS-0202', '60', '1', '45', '10', 'ytte', 'ttete', ' yeyywe', '45', '', '10/05/20'),
(333, 'RS-4202', '60', '1', '45', '10', 'ytte', 'ttete', ' yeyywe', '45', '', '10/05/20'),
(334, 'RS-738788', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(335, 'RS-30702283', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(336, 'RS-333202', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(337, 'RS-33235330', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(338, 'RS-33235330', '61', '2', '90', '40', 'test', 'test', ' test', '45', '', '10/05/20'),
(339, 'RS-3233502', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(340, 'RS-4286532', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(341, 'RS-89233623', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(342, 'RS-230222', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(343, 'RS-3223932', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(344, 'RS-222760', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(345, 'RS-3222322', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(346, 'RS-622002', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(347, 'RS-3220024', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(348, 'RS-23457', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(349, 'RS-2333432', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(350, 'RS-223223', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(351, 'RS-232332', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(352, 'RS-3330243', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(353, 'RS-07333092', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(354, 'RS-200630', '61', '9', '405', '180', 'test', 'test', ' test', '45', '', '10/05/20'),
(355, 'RS-3223232', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(356, 'RS-33932393', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(357, 'RS-922332', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(358, 'RS-223990', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(359, 'RS-260030', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/05/20'),
(360, 'RS-3420032', '61', '1', '45', '20', 'test', 'test', ' test', '45', '', '10/06/20');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `UserName` varchar(12) DEFAULT NULL,
  `UserEmail` varchar(200) DEFAULT NULL,
  `UserMobileNumber` varchar(10) DEFAULT NULL,
  `LoginPassword` varchar(255) DEFAULT NULL,
  `Position` varchar(255) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `FullName`, `UserName`, `UserEmail`, `UserMobileNumber`, `LoginPassword`, `Position`, `RegDate`) VALUES
(10, 'Admin', 'admin', 'kevinkipkosgei310@gmail.com', '0712803678', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', '2020-10-06 05:40:05'),
(11, 'Cashier', 'cashier', 'cashier@mail.com', '1212121212', '6a79b51fec89db977e62d3b5aee3ea8b9de93cabf2446aae7d6f517db6d16178', 'cashier', '2020-10-06 05:42:06'),
(12, 'Guyo Abdi', 'Abdi123', 'guyoabdi310@gmail.com', '712334545', '131110a5fb2d0d7e9d3f40e299d98c712879c39e836388d17b5a2757fae9911e', 'admin', '2020-10-06 08:15:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `purchases_item`
--
ALTER TABLE `purchases_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchases_item`
--
ALTER TABLE `purchases_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

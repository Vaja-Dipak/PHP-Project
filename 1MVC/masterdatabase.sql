-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 10:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_price` float NOT NULL,
  `p_amount` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_des` varchar(50) NOT NULL,
  `cat_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`, `cat_image`) VALUES
(1, 'Makeup', 'Makeup consists of things such as lipstick, eye sh', ''),
(6, 'Skin Care', 'The cleansing, massaging, moisturizing, etc., of t', ''),
(7, 'Hair Care', 'Hair care is all the things people do to keep thei', ''),
(8, 'skincare', 'ddd', 'skincare_profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `state_id`) VALUES
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cities_data`
--

CREATE TABLE `cities_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities_data`
--

INSERT INTO `cities_data` (`id`, `name`) VALUES
(1, 'Ahmedabad'),
(2, 'Surat'),
(3, 'Botad'),
(4, 'Gandhinagar'),
(5, 'Bapunagar');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE `deliveryboy` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `d_pass` varchar(20) NOT NULL,
  `d_contactno` varchar(15) NOT NULL,
  `d_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryboy`
--

INSERT INTO `deliveryboy` (`d_id`, `d_name`, `d_pass`, `d_contactno`, `d_email`) VALUES
(1, 'dipika', 'dipu123', '9567894563', 'dipika123@gmail.com'),
(3, 'xyz', 'xyz12345', '9876567842', 'xyz@gmail.com'),
(6, 'kajal', 'kajal123', '987234522', 'kajal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `f_message` varchar(200) NOT NULL,
  `f_date` date NOT NULL,
  `f_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `c_id`, `f_message`, `f_date`, `f_status`) VALUES
(1, 83, 'Best Quality Product', '2024-01-01', '1'),
(2, 87, 'Best Quality product', '2024-01-05', '0'),
(3, 87, 'abcdefghijklmnopqrstuvwxyz', '2024-01-15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `g_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_path`) VALUES
(2, 'oil33.jpg'),
(3, 'g3.jpg'),
(4, 'k3.jpg'),
(5, 'g5.jpg'),
(6, 'g6.jpg'),
(7, 'g7.jpg'),
(8, 'comp3.webp'),
(10, 'facewash6.jpg'),
(14, '4_profile.jpg'),
(16, 'ee1.webpwebp'),
(17, 'cream13.webpwebp'),
(18, 'comp3.webpwebp'),
(19, 'comp1.webpwebp'),
(20, 'f9.jpgjpg'),
(21, 'f13.webpwebp'),
(23, 'shampoo6.webpwebp');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `i_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `o_date` date NOT NULL DEFAULT current_timestamp(),
  `p_method` varchar(20) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `p_name`, `c_id`, `o_date`, `p_method`, `Amount`) VALUES
(1, 'lipstic', 83, '2024-02-18', 'online', 34567),
(6, 'Eyeshadow | Foundation', 83, '2024-02-19', 'Online', 468.72),
(24, 'Face Wash | Foundation | Face Wash', 83, '2024-02-19', 'Online', 863.84),
(25, 'Face Wash', 83, '2024-02-19', 'Online', 336.75);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `of_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `of_startdate` date NOT NULL,
  `of_enddate` date NOT NULL,
  `of_detail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`of_id`, `p_id`, `of_startdate`, `of_enddate`, `of_detail`) VALUES
(1, 18, '2024-01-08', '2024-01-10', '30%'),
(29, 18, '2024-01-04', '2024-01-23', '15%'),
(30, 40, '2024-01-04', '2024-01-26', '15%'),
(31, 47, '2024-01-05', '2024-01-14', '15%'),
(32, 18, '2024-01-21', '2024-02-01', '20%');

-- --------------------------------------------------------

--
-- Table structure for table `orderdata`
--

CREATE TABLE `orderdata` (
  `o_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `orderdate` date NOT NULL DEFAULT current_timestamp(),
  `totalamount` float NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdata`
--

INSERT INTO `orderdata` (`o_id`, `p_name`, `c_id`, `orderdate`, `totalamount`, `status`) VALUES
(12, 'Lipstick | Face Wash | Foundation | Eyeshadow | Hair Oil | lipstick', 83, '2024-02-18', 1475.37, 'Pending'),
(17, 'Compact Powder', 83, '2024-02-19', 0, 'Pending'),
(20, 'Eyeshadow | Foundation', 83, '2024-02-19', 468.72, 'Pending'),
(38, 'Face Wash | Foundation | Face Wash', 83, '2024-02-19', 863.84, 'Pending'),
(39, 'Face Wash', 83, '2024-02-19', 336.75, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `pay_amount` float NOT NULL,
  `pay_date` date NOT NULL DEFAULT current_timestamp(),
  `pay_type` varchar(30) NOT NULL DEFAULT 'Online'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `c_id`, `product`, `pay_amount`, `pay_date`, `pay_type`) VALUES
(65432456, 83, 'lipstic', 656, '2024-02-18', 'Online'),
(65432457, 83, 'compact powder', 400, '2024-02-19', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `p_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_price` float NOT NULL,
  `p_image` varchar(20) NOT NULL,
  `p_des` varchar(200) NOT NULL,
  `p_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`p_id`, `sc_id`, `p_name`, `p_price`, `p_image`, `p_des`, `p_discount`) VALUES
(18, 1, 'Compact Powder', 279, 'comp1.webp', 'Lakme 9To5 Wet&Dry Compact', 10),
(20, 1, 'Compact Powder', 279, 'comp3.webp', 'Miled Lakme Compact Powder, Size: 100 Gm', 20),
(21, 1, 'Compact Powder', 259, 'comp4.webp', 'Lakme Sun Expert SPF 40 PA+++ Compact ', 12),
(36, 1, 'Compact Powder', 379, 'comp7.jpg', 'Swiss Beauty Foundation', 15),
(37, 1, 'Compact Powder', 249, 'comp6.jpg', 'High Coverage Compact Powder.', 10),
(38, 1, 'Compact Powder', 259, 'comp5.avif', 'Mamaearth  Glow Oil Control compact', 12),
(39, 12, 'Foundation', 443, 'f3.jpg', 'MARS High Coverage Foundation', 15),
(40, 12, 'Foundation', 543, 'f13.webp', 'Sugar pop Foundation', 20),
(41, 12, 'Foundation', 326, 'f4.jpg', 'FIT ME Foundation', 12),
(43, 4, 'Lipstick', 259, 'lip7.cms', 'Red and Pink Lipstick', 15),
(44, 4, 'Lipstick', 199, 'lip.avif', 'Nykaa So Matte Lipstick - Pink Brat 05 M', 10),
(45, 4, 'lipstick', 199, 'lip9.avif', 'BUY FOR INTENSE MATTE VELVET TOUCHE', 20),
(46, 4, 'Lipstick', 259, 'lip10.jpg', 'Lipstick Nude shade for fair screen ', 30),
(47, 4, 'Lipstick', 199, 'lip13.webp', 'MARS Lipstick', 10),
(48, 4, 'Lipstick', 199, 'lip12.webp', 'BUY FOR Lakme absolute Lipstick', 12),
(49, 9, 'Eyelinear', 199, 'eye7.webp', 'Black Liquid Eyeliner | Free Flow Eyeliner', 15),
(50, 9, 'Eyelinear', 299, 'e2.jpg', 'Sugar Pop Black Eyeliner', 20),
(51, 9, 'Eyelinear', 159, 'e33.jpg', 'Lakme Eyeconic Waterproof black Eyeliner', 30),
(52, 9, 'Eyelinear', 179, 'eye9.webp', 'PINKFLASH Waterproof Easy Eyeliner', 25),
(53, 9, 'Eyelinear', 99, 'e1.webp', 'MARS Liquid Eyeliner', 12),
(54, 9, 'Eyelinear', 100, 'eye8.jpg', 'Black Liquid Lakme Eyeliner Eyeliner', 10),
(55, 12, 'Foundation', 443, 'f8.webp', 'LOREAL Foundation', 20),
(56, 12, 'Foundation', 543, 'f7.jpg', 'PONDS BB+ Cream', 10),
(57, 12, 'Foundation', 326, 'f1.jpg', 'Lakme 9 To 5 Foundation', 20),
(63, 8, 'Eyeshadow', 279, 'eye4.webp', 'BEAUTY Nude Edition Eyeshadow Palette', 15),
(64, 8, 'Eyeshadow', 189, 'eye6.webp', 'Best Pink Eyeshadow Palettes Matte Tones ', 12),
(65, 8, 'Eyeshadow', 279, 'eye5.webp', 'Eyeshadow Palette, 18 Multi Shades Makeup', 10),
(66, 8, 'Eyeshadow', 279, 'eye2.webp', '36 Multi shade Eyeshadow palatte', 20),
(67, 8, 'Eyeshadow', 189, 'eyeshadow3.jpg', '25 shades Eyeshadoew palette ', 15),
(69, 8, 'Eyeshadow', 279, 'ee1.webp', 'GlasGow Nude Eyeshadow Palette', 10),
(70, 18, 'Face Wash', 270, 'facewash9.webp', 'Bright Beauty Spot-less Glow Face Wash', 10),
(71, 18, 'Face Wash', 449, 'facewash6.jpg', 'Lakme Blush & Glow Creme Face Washes', 12),
(72, 18, 'Face Wash', 279, 'facewash3.webp', 'Biotique Advanced Fairness Face wash.', 15),
(73, 18, 'Face Wash', 270, 'facewash11.webp', 'mamaearth Facewash', 20),
(74, 18, 'Face Wash', 449, 'facewash13.jpg', 'Himaliya Tan Removal Orange Face Washes', 25),
(75, 18, 'Face Wash', 279, 'facewash8.webp', 'Wow Skin Science foaming Facewash.', 30),
(76, 17, 'Moisturizer', 99, 'cream3.webp', 'Joy Hydra Refresh Ultra Light Gel Oil Free', 23),
(77, 17, 'Moisturizer', 199, 'cream12.jpg', 'Nivya Soft light Moisturizer', 40),
(78, 17, 'Moisturizer', 209, 'cream2.jpg', 'POND Clarant B3 Anti Dark Spot Moisturizer.', 25),
(79, 17, 'Moisturizer', 199, 'cream6.jpg', 'Nivya soft light Moisturizer', 20),
(80, 17, 'Moisturizer', 209, 'cream14.webp', 'Ponds Bright Beauty  Spot Less Glow', 10),
(81, 17, 'Moisturizer', 199, 'cream13.webp', 'aloe vera moisturizer for face cream.', 30),
(82, 10, 'Sunscreen', 225, 'ss1.webp', 'Safe Sunscreen Cream PA+ SPF 20', 25),
(83, 10, 'Sunscreen', 225, 'ss2.jpg', 'Ultra Light Sunscreen SPF 50 PA+++', 35),
(84, 10, 'Sunscreen', 199, 'ss3.webp', 'Lakme Sunscreen spf50.', 10),
(85, 10, 'Sunscreen', 225, 'ss22.jpg', 'mamaearth ultra light Indian Sunscreen Cream', 20),
(86, 10, 'Sunscreen', 249, 'ss5.jpg', 'Neutrogena Invisible Daily Defense Sunscreen.', 50),
(87, 10, 'Sunscreen', 500, 'ss4.webp', 'Neutrogena Ultra Sheer Dry Touch Sunblock SPF 50 - 80 g MRP:₹205', 13),
(88, 7, 'Sheetmask', 74, 'sheetmask1.jpg', 'Garnier Skin Naturals Light Complete Milky Serum Sheet Face Mask, 32 gm', 17),
(89, 7, 'Sheetmask', 94, 'sheetmask33.webp', 'Garnier Moisture bomb sakura an d Hyaluronic Acid Sheetmask.', 23),
(90, 7, 'Sheetmask', 87, 'sheetmask2.jpg', 'Mamaearth Ubtan Bamboo Sheet Mask with Turmeric .', 28),
(91, 7, 'Sheetmask', 69, 'sheetmask66.jpg', 'Garnier Skin Naturals, Serum Mask,Hydra Bomb Mask', 26),
(92, 7, 'Sheetmask', 99, 'sheetmask5.jpg', 'GARNIER SKIN NATURAL SERUM MASK HYDRA BOMB MASK', 16),
(93, 7, 'Sheetmask', 100, 'sheetmask6.png', 'Garnier Hydra Bomb Hyaluronic Acid Lavender Sheet Mask', 15),
(94, 3, 'Shampoo & Conditioner', 900, 'shampoo4.avif', 'mamaearth Shampoo and Conditioner', 50),
(95, 3, 'Shampoo & Conditioner', 854, 'shampoo3.webp', 'Dove Intense Repair Shampoo + Conditioner.', 20),
(96, 3, 'Shampoo & Conditioner', 479, 'shampoo11.webp', 'Wow Skin Science Shampoo&Conditioner', 10),
(97, 3, 'Shampoo & Conditioner', 950, 'shampoo5.webp', 'Aaryanveda Keratin Shampoo&Conditioner', 15),
(98, 3, 'Shampoo & Conditioner', 794, 'sss1.webp', 'Wow skin science Shampoo and Conditioner', 15),
(99, 3, 'Shampoo & Conditioner', 794, 'shampoo6.webp', 'LOREAL PARIS HYALURON MOISTURE .', 15),
(100, 6, 'Hair Oil', 198, 'oil11.jpg', 'Dabur Amla Hair Oil| Long and Thick hair', 25),
(101, 6, 'Hair Oil', 490, 'oil2.webp', 'SESA Ayurvedic Hair Oil', 20),
(102, 6, 'Hair Oil', 200, 'oil33.jpg', 'Roasted Hair Oil with Vital Herbs Mix', 17),
(103, 6, 'Hair Oil', 349, 'oil4.jpg', 'Yeka Moringa Herbal Hair Oil (1000ml)', 16),
(104, 6, 'Hair Oil', 250, 'oil8.webp', 'Indulekha Bringha Ayurvedic Hair Oil.', 10),
(105, 6, 'Hair Oil', 490, 'oil5.webp', '21 Herbs Herbal Oil Promotes Hair Growth.', 12),
(108, 18, 'Face Wash', 200, 'facewash3.webp', 'Biotique bio white Advanced Fairness Face wash.', 30),
(112, 18, 'Face Wash', 279, 'Face Washf123.jpg', 'Lakme Face wash', 15),
(113, 12, 'Foundation', 279, 'Foundationf9.jpg', 'Full Coverage Foundation', 17);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sc_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sc_name` varchar(78) NOT NULL,
  `sc_des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sc_id`, `cat_id`, `sc_name`, `sc_des`) VALUES
(1, 1, 'compact', ''),
(3, 7, 'Shampoo & Conditioner', ''),
(4, 1, 'Lipstick', ''),
(5, 6, 'Moisturizer', ''),
(6, 7, 'Hair Oil', ''),
(7, 6, 'Sheetmask', ''),
(8, 1, 'Eyeshadow', ''),
(9, 1, 'Eyelinear', ''),
(10, 6, 'Sunscreen', ''),
(12, 1, 'Foundation', ''),
(13, 1, 'compact', 'gfgf'),
(14, 1, 'Lipstick', 'gfgfxs'),
(15, 1, 'Lipstick', 'gfgfxs'),
(16, 7, 'Hair Oil', 'gfgfxs'),
(17, 8, 'Moisturizer', 'urffh'),
(18, 6, 'Face Wash', 'sdfghjkl'),
(19, 1, 'Face Wash', 'aza');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `c_id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `otp` int(11) NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`c_id`, `username`, `password`, `mobile`, `email`, `gender`, `city`, `address`, `otp`, `role_id`) VALUES
(1, 'admin', '2345', '9879583816', 'admin@gmail.com', 'Female', 'ahmedabad', 'Saligram plus', 0, 1),
(83, 'khushbu', '1234', '9879583816', 'khushburathod5354@gmail.com', 'Female', 'Ahmedabad', 'B203 tirth elegance ', 794175, 0),
(87, 'rutvi', 'rutvi123', '7754499865', 'rutvi@gmail.com', 'Female', 'Ahmedabad', 'gota , ahmedabad', 0, 0),
(93, 'dipak', '222', '7896654322', 'vajadipak2110@gmail.com', 'Male', 'Narmada', 'thaltej', 129114, 0),
(97, 'dipi', 'dipi123', '12345678', 'dipi@gmail.com', 'Female', 'Ahmedabad', 'vasantnagar , gota', 0, 0),
(99, 'khushbu', '1234', '9879583816', 'khushburathod5354@gmail.com', 'Female', 'Ahmedabad', 'chandlodiya ,ahmedabad', 794175, 0),
(100, 'khushi', '123', '4356689065', 'khushirathod0096@gmail.com', 'Female', 'Navsari', 'Ajay residency', 589637, 0),
(101, 'yashvi', 'yashvi123', '4567896542', 'yashvi@gmail.com', 'Female', 'city', 'chandlodiya ,ahmedabad', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_ibfk_1` (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `cities_data`
--
ALTER TABLE `cities_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`of_id`);

--
-- Indexes for table `orderdata`
--
ALTER TABLE `orderdata`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `pro_ibfk_1` (`sc_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sc_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `cities_data`
--
ALTER TABLE `cities_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `of_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orderdata`
--
ALTER TABLE `orderdata`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65432458;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `pro` (`p_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `users` (`c_id`);

--
-- Constraints for table `pro`
--
ALTER TABLE `pro`
  ADD CONSTRAINT `pro_ibfk_1` FOREIGN KEY (`sc_id`) REFERENCES `subcategory` (`sc_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

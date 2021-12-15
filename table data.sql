-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 05:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phone` varchar(11) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `deletion_status` tinyint(1) NOT NULL DEFAULT 1,
  `admin_address` text NOT NULL,
  `admin_about` text NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_pass`, `admin_status`, `deletion_status`, `admin_address`, `admin_about`, `picture`) VALUES
(30, 'Asa', 'gobinda72@gmail.com', '', '123456', 0, 1, '', '', ''),
(33, 'Asa', 'noipunno@gmail.com', '', '', 0, 1, '', '', ''),
(37, 'Asa', 'asa5@gmail.com', '', '', 0, 1, '', '', ''),
(40, 'Asa', 'asa2@gmail.com', '', '', 0, 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_table`
--

CREATE TABLE `blog_table` (
  `blog_id` int(10) NOT NULL,
  `blog_user` varchar(150) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `s_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user` varchar(10) NOT NULL,
  `blog_image` varchar(150) NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  `deletion_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_table`
--

INSERT INTO `blog_table` (`blog_id`, `blog_user`, `title`, `body`, `s_date`, `user`, `blog_image`, `publication_status`, `deletion_status`) VALUES
(18, 'Kamal;', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-12 15:43:20', '', '', 1, 1),
(19, 'Kamal;', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-12 15:43:25', '', '', 1, 1),
(20, 'Kamal;', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-10 13:06:28', '', '', 0, 1),
(21, 'Moni Das;', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-10 13:01:37', '', '5.png', 1, 1),
(22, 'Gobinda Chandra Das', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) Ho', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-04 10:56:24', '', 'How-to-Make-Bootable-Pendrive-768x416.jpg', 1, 1),
(23, 'Mitali Das', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-10 13:01:42', '', 'png-transparent-ladder-ladder-angle-technic-wood-thumbnail.png', 1, 1),
(24, 'Mitali Das', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-10 13:01:24', '', 'download (1).jpg', 1, 1),
(25, 'Mukta Das', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-05 13:10:43', '', '', 1, 1),
(26, 'Shova ', 'How to make a cake', 'Cake make in ata', '2021-11-10 13:01:19', '', 'CLICK-Cyclone-Fan.jpg', 1, 1),
(27, 'Shova ', 'How to make a cake', 'How to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cakeHow to make a cake', '2021-11-05 13:10:35', '', 'download.jpg', 1, 1),
(28, '', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-04 13:38:46', '', '2.jpg', 1, 1),
(29, '', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-04 13:41:20', '', '2.jpg', 1, 1),
(30, 'Mukta Das', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-04 13:46:42', '', 'CLICK-Cyclone-Fan.jpg', 1, 1),
(31, 'Mukta Das', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-04 14:01:13', '', '', 1, 1),
(32, 'Mukta Das', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-04 14:34:39', '', '2.jpg', 1, 1),
(34, 'Monir Hossen', 'How to make a cake', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-10 12:59:34', '', '7777 - Copy.jpg', 1, 1),
(36, 'Noipunno', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-12 15:31:26', '', 'asus.png', 1, 1),
(37, 'Noipunno', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) Ho', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-12 15:40:32', '', 'asus.png', 1, 1),
(38, 'Noipunno', 'How to Make Bootable USB Pendrive (Easiest Ways)', 'How to Make Bootable USB Pendrive (Easiest Ways) How to Make Bootable USB Pendrive (Easiest Ways)', '2021-11-14 13:17:36', '', '5555.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content_category`
--

CREATE TABLE `content_category` (
  `content_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `content_name` varchar(150) NOT NULL,
  `content_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `deletion_status` tinyint(1) NOT NULL DEFAULT 1,
  `update_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_category`
--

INSERT INTO `content_category` (`content_id`, `user_name`, `content_name`, `content_description`, `publication_status`, `deletion_status`, `update_time`) VALUES
(42, 'Moni Das', 'Sports', 'Baby car', 1, 1, '2021-11-12 15:42:19.200331'),
(49, 'Moni Das', 'Mobile', '', 1, 1, '2021-11-21 13:28:20.549139'),
(50, 'Asa', 'Electronic', 'mobile, tv', 1, 1, '2021-11-12 10:19:27.278988'),
(51, 'Asa', 'HomeApplince', '', 1, 1, '2021-11-21 13:28:32.187184'),
(52, 'Asa', 'FashionLifestyle', '', 1, 1, '2021-11-21 13:28:47.345832'),
(53, 'Asa', 'Blog', '', 1, 1, '2021-11-22 13:03:34.298358'),
(54, 'Asa', 'Create_Blog', '', 1, 1, '2021-11-22 13:04:02.100540');

-- --------------------------------------------------------

--
-- Table structure for table `customer_data_table`
--

CREATE TABLE `customer_data_table` (
  `customer_order_data_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_data_table`
--

INSERT INTO `customer_data_table` (`customer_order_data_id`, `product_id`, `customer_email`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(22, 14, 'gobinda72@gmail.com', 'Iphone 11', 100000.00, 1, 'product_image/1.jpg'),
(23, 22, 'gobinda72@gmail.com', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg'),
(24, 14, 'gobinda72@gmail.com', 'Iphone 11', 100000.00, 1, 'product_image/1.jpg'),
(25, 22, 'gobinda72@gmail.com', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg'),
(26, 14, 'gobinda72@gmail.com', 'Iphone 11', 100000.00, 1, 'product_image/1.jpg'),
(27, 22, 'moni925@gmail.com', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg'),
(28, 22, 'moni925@gmail.com', 'Vivo V11', 120000.00, 2, 'product_image/5.jpg'),
(29, 4, 'noipunno@gmail.com', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(30, 4, 'moni925@gmail.com', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(31, 4, 'moni925@gmail.com', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(32, 4, 'moni925@gmail.com', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(33, 4, 'noipunno@gmail.com', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(34, 21, 'mita@gmail.com', 'Vivo V7', 18000.00, 1, 'product_image/6.jpg'),
(35, 21, 'mita@gmail.com', 'Vivo V7', 18000.00, 1, 'product_image/6.jpg'),
(36, 24, 'mita@gmail.com', 'Fashion dress', 1200.00, 1, 'product_image/1.jpg'),
(37, 17, 'noipunno@gmail.com', 'Walton Television', 35000.00, 1, 'product_image/gfgt.jpg'),
(38, 17, 'mita@gmail.com', 'Walton Television', 35000.00, 1, 'product_image/gfgt.jpg'),
(39, 24, 'noipunno@gmail.com', 'Fashion dress', 1200.00, 1, 'product_image/1.jpg'),
(40, 21, 'noipunno@gmail.com', 'Vivo V7', 18000.00, 1, 'product_image/6.jpg'),
(41, 4, 'mita@gmail.com', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `address`, `phone_number`, `city`, `country`) VALUES
(1, 'Noipunno', 'Das', 'noipunno@gmail.com', '123456', 'Mirsarai', '01710429999', 'Mirsarai', 'bangladesh'),
(4, 'Noipunno', 'Das', 'noipunno@gmail.com', '123456', '', '', '', ''),
(5, 'Noipunno', 'Das', 'noipunno@gmail.com', '123456', '', '', '', ''),
(6, 'gobinda ', 'Das', 'gobinda72@gmail.com', '', '', '01710429999', 'Mirsarai', 'bangladesh'),
(7, 'Moni', 'Das', 'moni@gmail.com', '123456', '', '01710429999', 'Mirsarai', 'bangladesh'),
(8, 'Noipunno', 'Das', 'moni925@gmail.com', '123456', 'Mirsarai', '017104299999', 'Chattogram', 'bangladesh'),
(9, 'Mita ', 'Das', 'mita@gmail.com', '123456', 'Mirsarai, Jorargonj', '017774554455', 'Chattogram', 'bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `gender`, `age`, `designation`, `address`) VALUES
(1, '[karim]', '[male]', '[45]', '[manager]', '[mirsarai]'),
(2, '[karim]', '[male]', '[45]', '[manager]', '[mirsarai]'),
(3, '[karim]', '[male]', '[45]', '[manager]', '[mirsarai]'),
(4, '[karim]', '[male]', '[45]', '[manager]', '[mirsarai]');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `image_id` int(100) NOT NULL,
  `image_name` varchar(150) NOT NULL,
  `upload_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`image_id`, `image_name`, `upload_image`) VALUES
(1, 'mango', '2.jpg'),
(2, 'mango', '2.jpg'),
(3, '', 'product_image/download (1).jpg'),
(4, 'My Picture', 'product_image/How-to-Make-Bootable-Pendrive-768x416.jpg'),
(5, 'My Picture', 'product_image/mango-leaf-isolated-white-background-260nw-1157303833.jpg'),
(6, 'mango', 'product_image/258.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inline_table`
--

CREATE TABLE `inline_table` (
  `id` int(100) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `degination` varchar(150) NOT NULL,
  `salary` varchar(150) NOT NULL,
  `village` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inline_table`
--

INSERT INTO `inline_table` (`id`, `fname`, `lname`, `title`, `degination`, `salary`, `village`) VALUES
(1, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(2, 'karimuddin', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(3, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(4, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(5, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(6, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(7, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', ''),
(8, 'karim', 'uddin', 'I am a Manager', 'manager', '60000', '');

-- --------------------------------------------------------

--
-- Table structure for table `institution_table`
--

CREATE TABLE `institution_table` (
  `ins_id` int(100) NOT NULL,
  `ins_name` varchar(150) NOT NULL,
  `ins_address` text NOT NULL,
  `ins_catagory` varchar(150) NOT NULL,
  `ins_head` varchar(150) NOT NULL,
  `ins_mobile` varchar(11) NOT NULL,
  `ins_logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution_table`
--

INSERT INTO `institution_table` (`ins_id`, `ins_name`, `ins_address`, `ins_catagory`, `ins_head`, `ins_mobile`, `ins_logo`) VALUES
(1, 'Jonnerdonpur High School', 'Aburhat, Jorargonj, Mirsarai', 'Sceondary', 'MD. Rahim', '0171042999', '[value-7]');

-- --------------------------------------------------------

--
-- Table structure for table `mark_table`
--

CREATE TABLE `mark_table` (
  `id` int(100) NOT NULL,
  `student_roll` varchar(150) NOT NULL,
  `student_class` varchar(150) NOT NULL,
  `class_group` varchar(150) NOT NULL,
  `academy_year` varchar(150) NOT NULL,
  `section` varchar(150) NOT NULL,
  `bangla_mark` varchar(150) NOT NULL,
  `english_mark` varchar(150) NOT NULL,
  `math_mark` varchar(150) NOT NULL,
  `science_mark` varchar(150) NOT NULL,
  `bob_mark` varchar(150) NOT NULL,
  `religion_mark` varchar(150) NOT NULL,
  `music_mark` varchar(150) NOT NULL,
  `social_mark` varchar(150) NOT NULL,
  `expressive_mark` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark_table`
--

INSERT INTO `mark_table` (`id`, `student_roll`, `student_class`, `class_group`, `academy_year`, `section`, `bangla_mark`, `english_mark`, `math_mark`, `science_mark`, `bob_mark`, `religion_mark`, `music_mark`, `social_mark`, `expressive_mark`) VALUES
(1, '55', 'five', 'science', '2021', 'joba', '100', '66', '88', '55', '88', '55', '88', '55', '55'),
(2, '33', 'two', 'science', '2021', 'joba', '100', '99', '99', '100', '66', '55', '55', '55', '55'),
(3, '22', 'one', 'nill', '2021', 'joba', '108', '55', '66', '99', '55', '88', '55', '88', '55'),
(4, '88', 'two', 'science', '2021', 'joba', '100', '55', '33', '22', '55', '22', '55', '55', '22');

-- --------------------------------------------------------

--
-- Table structure for table `order_details_table`
--

CREATE TABLE `order_details_table` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `session_id` varchar(150) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details_table`
--

INSERT INTO `order_details_table` (`order_details_id`, `order_id`, `product_id`, `session_id`, `product_name`, `product_price`, `product_quantity`) VALUES
(1, 1, 22, '', 'Vivo V11', 120000.00, 1),
(2, 2, 17, '', 'Walton Television', 35000.00, 1),
(3, 3, 14, '', 'Iphone 11', 100000.00, 1),
(4, 4, 22, '', 'Vivo V11', 120000.00, 1),
(5, 5, 14, '', 'Iphone 11', 100000.00, 1),
(6, 6, 17, '', 'Walton Television', 35000.00, 1),
(7, 7, 22, '', 'Vivo V11', 120000.00, 1),
(8, 8, 22, '', 'Vivo V11', 120000.00, 2),
(9, 10, 21, 'ohmurs5i15ec759f23dcjr7k1h', 'Vivo V7', 18000.00, 1),
(10, 11, 24, 'ohmurs5i15ec759f23dcjr7k1h', 'Fashion dress', 1200.00, 1),
(11, 12, 17, '3hcq9rf90fgm7kg30gchb20f5f', 'Walton Television', 35000.00, 1),
(12, 13, 21, 'vf0kr9brpecj0e7sj7h3c2sfof', 'Vivo V7', 18000.00, 1),
(13, 14, 4, 'snlokft54d2npub1ck6fds4g73', 'Samsung S11', 100000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `session_id` varchar(150) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `customer_id`, `shipping_id`, `session_id`, `order_total`, `order_status`, `order_date`) VALUES
(1, 6, 2, '', 138000.00, '', '2021-11-18 13:47:01'),
(2, 7, 3, '', 40250.00, '', '2021-11-18 14:16:17'),
(3, 6, 4, '', 115000.00, 'pending', '2021-11-18 14:28:35'),
(4, 6, 5, '', 138000.00, 'pending', '2021-11-18 14:46:46'),
(5, 6, 6, '', 115000.00, 'pending', '2021-11-19 09:34:53'),
(6, 8, 7, '', 40250.00, 'pending', '2021-11-19 12:11:23'),
(7, 8, 8, '', 138000.00, 'pending', '2021-11-19 12:14:34'),
(8, 8, 9, '', 276000.00, 'pending', '2021-11-19 13:31:17'),
(9, 9, 12, '', 1380.00, 'pending', '2021-11-20 10:24:48'),
(10, 9, 13, '', 20700.00, 'pending', '2021-11-20 10:26:58'),
(11, 9, 13, '', 1380.00, 'pending', '2021-11-20 10:31:36'),
(12, 1, 0, '', 40250.00, 'pending', '2021-11-20 11:06:30'),
(13, 1, 0, '', 20700.00, 'pending', '2021-11-22 13:12:50'),
(14, 9, 0, '', 115000.00, 'pending', '2021-11-22 13:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(150) NOT NULL,
  `payment_status` varchar(150) NOT NULL DEFAULT 'pending',
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `payment_date`) VALUES
(1, 3, 'cash_on_delivery', 'pending', '2021-11-18 14:28:35'),
(2, 4, 'cash_on_delivery', 'pending', '2021-11-18 14:46:46'),
(3, 5, 'cash_on_delivery', 'pending', '2021-11-19 09:34:53'),
(4, 6, 'cash_on_delivery', 'pending', '2021-11-19 12:11:23'),
(5, 7, 'cash_on_delivery', 'pending', '2021-11-19 12:14:34'),
(6, 8, 'cash_on_delivery', 'pending', '2021-11-19 13:31:17'),
(7, 9, 'cash_on_delivery', 'pending', '2021-11-20 10:24:48'),
(8, 10, 'cash_on_delivery', 'pending', '2021-11-20 10:26:58'),
(9, 11, 'cash_on_delivery', 'pending', '2021-11-20 10:31:36'),
(10, 12, 'cash_on_delivery', 'pending', '2021-11-20 11:06:30'),
(11, 13, 'cash_on_delivery', 'pending', '2021-11-22 13:12:50'),
(12, 14, 'cash_on_delivery', 'pending', '2021-11-22 13:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_manufacturer`
--

CREATE TABLE `product_manufacturer` (
  `manufacturer_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `deletion_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_manufacturer`
--

INSERT INTO `product_manufacturer` (`manufacturer_id`, `user_name`, `manufacturer_name`, `product_description`, `publication_status`, `deletion_status`) VALUES
(1, 'Moni Das', 'Samsung Electronic', 'AC&nbsp;', 0, 0),
(2, 'Asa', 'Walton ', 'tv', 1, 1),
(3, 'Asa', 'Singer Electronic', 'Singer Washing Mashine', 1, 1),
(4, 'Asa', 'BRB Cable', 'wire', 1, 1),
(5, 'Asa', 'Vi', '', 0, 1),
(6, 'Asa', 'Vivo', '', 1, 1),
(7, 'Asa', 'GM Garments', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(4) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `content_id` int(4) NOT NULL,
  `manufacturer_id` int(4) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_sku` varchar(50) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `best_seller` tinyint(1) NOT NULL DEFAULT 0,
  `deletion_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`, `content_id`, `manufacturer_id`, `product_price`, `product_quantity`, `product_sku`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`, `best_seller`, `deletion_status`) VALUES
(4, 'Samsung S11', 50, 2, 100000.00, 2, '10', 'Samsung S11', '<div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Software</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">OS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Android 10, One UI 2.0</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Hardware</div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Design</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">screen</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">6.5\" PLS IPS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">resolution</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">720 x 1600 pixels, 20:9 ratio (~270 ppi density)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">dimension</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">164 x 75.9 x 9.1 mm</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">weight</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">206 gm</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Memory</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">expandable</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">256 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">RAM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">3 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">ROM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">32 GB</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Processor</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">number of cores</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">4 core</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SoC</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Mediatek MT6739W (28 nm)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">CPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Quad-core 1.5 GHz Cortex-A53</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">PowerVR GE8100</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Camera</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">video</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">1080p@30fps</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">features</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">LED flash</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">primary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual:<br>13 MP, f/1.9, (wide), AF<br>2 MP, f/2.4, (macro)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">secondary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5 MP, f/2.0</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Battery</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">capacity</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5000mAh Li-Polymer (non-removable)</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Connectivity</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">USB</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">microUSB 2.0</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Yes, with A-GPS, GLONASS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Wi-Fi</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">internet</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">2G/3G/4G</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">bluetooth</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5.0, A2DP, LE</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Audio</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">radio</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">FM Radio</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Others</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">sensors</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Accelerometer, proximity</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Manufacturer</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">first arrival</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">March, 2021</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Manufactured By</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Samsung</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">availability</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">available</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SIM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual SIM (Nano-SIM, dual stand-by)</div></div>', 'product_image/4.jpg', 1, 0, 1),
(14, 'Iphone 11', 50, 2, 100000.00, 2, '10', 'Iphone 11', '<div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Software</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">OS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Android 10, One UI 2.0</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Hardware</div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Design</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">screen</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">6.5\" PLS IPS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">resolution</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">720 x 1600 pixels, 20:9 ratio (~270 ppi density)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">dimension</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">164 x 75.9 x 9.1 mm</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">weight</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">206 gm</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Memory</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">expandable</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">256 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">RAM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">3 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">ROM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">32 GB</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Processor</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">number of cores</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">4 core</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SoC</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Mediatek MT6739W (28 nm)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">CPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Quad-core 1.5 GHz Cortex-A53</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">PowerVR GE8100</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Camera</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">video</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">1080p@30fps</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">features</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">LED flash</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">primary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual:<br>13 MP, f/1.9, (wide), AF<br>2 MP, f/2.4, (macro)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">secondary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5 MP, f/2.0</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Battery</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">capacity</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5000mAh Li-Polymer (non-removable)</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Connectivity</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">USB</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">microUSB 2.0</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Yes, with A-GPS, GLONASS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Wi-Fi</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">internet</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">2G/3G/4G</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">bluetooth</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5.0, A2DP, LE</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Audio</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">radio</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">FM Radio</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Others</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">sensors</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Accelerometer, proximity</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Manufacturer</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">first arrival</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">March, 2021</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Manufactured By</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Samsung</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">availability</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">available</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SIM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual SIM (Nano-SIM, dual stand-by)</div></div>', 'product_image/1.jpg', 1, 0, 1),
(17, 'Walton Television', 50, 2, 35000.00, 2, '10', '', '', 'product_image/gfgt.jpg', 1, 0, 1),
(18, 'Singer Television', 50, 3, 35000.00, 10, '10', '', '', 'product_image/fsfs.png', 1, 1, 1),
(19, 'Walton Television', 50, 2, 35000.00, 2, '10', '', '', 'product_image/gfgt.jpg', 1, 0, 1),
(20, 'Singer Television', 50, 3, 35000.00, 10, '10', '', '', 'product_image/fsfs.png', 1, 1, 1);
INSERT INTO `product_table` (`product_id`, `product_name`, `content_id`, `manufacturer_id`, `product_price`, `product_quantity`, `product_sku`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`, `best_seller`, `deletion_status`) VALUES
(21, 'Vivo V7', 50, 6, 18000.00, 12, '10', 'Vivo V7', '<div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Software</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">OS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Android 10, One UI 2.0</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Hardware</div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Design</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">screen</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">6.5\" PLS IPS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">resolution</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">720 x 1600 pixels, 20:9 ratio (~270 ppi density)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">dimension</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">164 x 75.9 x 9.1 mm</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">weight</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">206 gm</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Memory</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">expandable</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">256 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">RAM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">3 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">ROM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">32 GB</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Processor</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">number of cores</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">4 core</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SoC</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Mediatek MT6739W (28 nm)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">CPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Quad-core 1.5 GHz Cortex-A53</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">PowerVR GE8100</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Camera</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">video</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">1080p@30fps</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">features</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">LED flash</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">primary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual:<br>13 MP, f/1.9, (wide), AF<br>2 MP, f/2.4, (macro)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">secondary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5 MP, f/2.0</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Battery</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">capacity</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5000mAh Li-Polymer (non-removable)</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Connectivity</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">USB</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">microUSB 2.0</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Yes, with A-GPS, GLONASS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Wi-Fi</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">internet</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">2G/3G/4G</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">bluetooth</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5.0, A2DP, LE</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Audio</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">radio</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">FM Radio</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Others</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">sensors</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Accelerometer, proximity</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Manufacturer</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">first arrival</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">March, 2021</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Manufactured By</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Samsung</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">availability</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">available</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SIM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual SIM (Nano-SIM, dual stand-by)</div></div>', 'product_image/6.jpg', 1, 0, 1),
(22, 'Vivo V11', 50, 6, 120000.00, 6, '6', 'Vivo Y11', '<div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Software</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">OS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Android 10, One UI 2.0</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Hardware</div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Design</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">screen</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">6.5\" PLS IPS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">resolution</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">720 x 1600 pixels, 20:9 ratio (~270 ppi density)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">dimension</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">164 x 75.9 x 9.1 mm</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">weight</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">206 gm</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Memory</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">expandable</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">256 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">RAM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">3 GB</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">ROM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">32 GB</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Processor</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">number of cores</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">4 core</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SoC</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Mediatek MT6739W (28 nm)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">CPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Quad-core 1.5 GHz Cortex-A53</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPU</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">PowerVR GE8100</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Camera</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">video</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">1080p@30fps</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">features</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">LED flash</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">primary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual:<br>13 MP, f/1.9, (wide), AF<br>2 MP, f/2.4, (macro)</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">secondary</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5 MP, f/2.0</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Battery</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">capacity</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5000mAh Li-Polymer (non-removable)</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Connectivity</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">USB</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">microUSB 2.0</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">GPS</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Yes, with A-GPS, GLONASS</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Wi-Fi</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">internet</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">2G/3G/4G</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">bluetooth</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">5.0, A2DP, LE</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Audio</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">radio</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">FM Radio</div></div><div class=\"pure-g\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; color: rgb(102, 102, 102); font-size: medium;\"><div id=\"sub\" style=\"margin-top: 0.5em; padding-left: 0.2em; font-size: 1em; color: rgb(59, 89, 152);\">Others</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">sensors</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Accelerometer, proximity</div></div><div id=\"section\" style=\"margin-top: 0.5em; font-size: 1.4em; color: rgb(59, 89, 152); font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif;\">Manufacturer</div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">first arrival</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">March, 2021</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">Manufactured By</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Samsung</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">availability</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">available</div></div><div class=\"pure-g\" id=\"kv\" style=\"text-rendering: optimizespeed; font-family: Ubuntu, &quot;Hind Siliguri&quot;, Verdana, Geneva, Tahoma, sans-serif; display: flex; flex-flow: row wrap; align-content: flex-start; font-size: 0.9em; padding-left: 0.5em; color: rgb(102, 102, 102);\"><div class=\"pure-u-2-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 201.125px;\">SIM</div><div class=\"pure-u-3-5\" style=\"word-spacing: normal; vertical-align: top; text-rendering: auto; display: inline-block; zoom: 1; width: 301.688px;\">Dual SIM (Nano-SIM, dual stand-by)</div></div>', 'product_image/5.jpg', 1, 0, 1),
(23, 'Fashion dress', 52, 7, 1500.00, 12, '10', 'Fashion Dress', '', 'product_image/3.jpg', 1, 1, 1),
(24, 'Fashion dress', 52, 7, 1200.00, 10, '10', '', '', 'product_image/1.jpg', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_table`
--

CREATE TABLE `shipping_table` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_table`
--

INSERT INTO `shipping_table` (`shipping_id`, `full_name`, `email_address`, `address`, `phone_number`, `city`, `country`) VALUES
(2, 'Noipunno Das', 'gobinda72@gmail.com', 'Hatiya', '01710429999', 'Mirsarai', 'bangladesh'),
(7, 'Gobinda Das', 'moni925@gmail.com', 'Chaitenerhat, Mirsarai', '01710429999', 'Chattogram', 'bangladesh'),
(11, 'Gobinda Das', 'noipunno@gmail.com', '  Jonnardonpur, Jorargonj', '016285612325', 'Chattogram', 'bangladesh'),
(12, 'Mita Das', 'mita@gmail.com', '  Jonnardonpur, Mirsarai  ', '01407299999', 'Chattogram', 'bangladesh'),
(13, '', '', '', '', '', ''),
(14, 'Gobinda Das', 'noipunno55@gmail.com', '  ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `slider_image_id` int(11) NOT NULL,
  `slider_image` varchar(150) NOT NULL,
  `slider_image1` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`slider_image_id`, `slider_image`, `slider_image1`) VALUES
(2, '666 - Copy.jpg', ''),
(3, '666.jpg', ''),
(4, 'slider2.jpg', ''),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `student_roll` varchar(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_class` varchar(10) NOT NULL,
  `class_group` varchar(10) NOT NULL,
  `academy_year` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `birth_number` varchar(30) NOT NULL,
  `fnid` varchar(30) NOT NULL,
  `mnid` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `upazila` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `user_picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `student_roll`, `student_name`, `student_class`, `class_group`, `academy_year`, `section`, `father_name`, `mother_name`, `gender`, `religion`, `birth_number`, `fnid`, `mnid`, `village`, `upazila`, `district`, `mobile_number`, `user_picture`) VALUES
(12, '11', 'Monir', 'three', '', '2021', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '11', 'Monir', 'three', '', '2021', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '11', 'Monir', 'three', '', '2021', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '11', 'Monir', 'three', '', '2021', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', 'five', 'science', '2021', 'belly', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '02', 'Noipunno', 'three', 'science', '2020', 'joba', 'Gobinda Das', 'Moni Das', 'male', 'islam', '', '', '', '', '', '', '', '2.jpg'),
(32, '3', 'Mita', 'three', 'science', '2020', 'joba', 'Saikat', 'Hasina', 'male', 'islam', '', '', '', '', '', '', '', 'download.jpg'),
(33, '3', 'Mita', 'three', 'science', '2020', 'joba', 'Saikat', 'Hasina', 'male', 'islam', '', '', '', '', '', '', '', 'download.jpg'),
(34, '3', 'Mita', 'three', 'science', '2020', 'joba', 'Saikat', 'Hasina', 'male', 'islam', '', '', '', '', '', '', '', 'download.jpg'),
(35, '3', 'Mita', 'three', 'science', '2020', 'joba', 'Saikat', 'Hasina', 'male', 'islam', '', '', '', '', '', '', '', 'download.jpg'),
(36, '3', 'Mita', 'three', 'science', '2020', 'joba', 'Saikat', 'Hasina', 'male', 'islam', '', '', '', '', '', '', '', 'download.jpg'),
(37, '96', 'Monir', 'four', 'science', '2020', 'belly', 'hasan', 'Moni Das', 'male', 'islam', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart_table`
--

CREATE TABLE `temp_cart_table` (
  `temp_cart_id` int(3) NOT NULL,
  `product_id` int(4) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_cart_table`
--

INSERT INTO `temp_cart_table` (`temp_cart_id`, `product_id`, `session_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, 14, 'tv6vod4phpn7chnp2fssh8ck51', 'Cannon Mobile', 100000.00, 1, 'product_image/cannonl.jpg'),
(9, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(10, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(21, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(22, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(23, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(24, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(25, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(26, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(27, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(28, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(29, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(30, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(31, 14, '2mf72bcaki40ugkk7nfsdp3cog', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(32, 14, '9kkqihr43h7k9j0ujecs0au90j', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(33, 14, '1b38qbnjpggmv15r835m12h7eq', 'Samsung Smart Mobile phone', 100000.00, 1, 'product_image/rfr.png'),
(34, 17, '1b38qbnjpggmv15r835m12h7eq', 'Walton Television', 35000.00, 1, 'product_image/gfgt.jpg'),
(44, 24, 'lpdnleo9top1juqrn7mff12bbb', 'Fashion dress', 1200.00, 2, 'product_image/1.jpg'),
(45, 22, 'lpdnleo9top1juqrn7mff12bbb', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg'),
(51, 24, 'egsb7e3m27vgcv45f3h8lf19cn', 'Fashion dress', 1200.00, 1, 'product_image/1.jpg'),
(52, 14, 'egsb7e3m27vgcv45f3h8lf19cn', 'Iphone 11', 100000.00, 1, 'product_image/1.jpg'),
(53, 22, 'egsb7e3m27vgcv45f3h8lf19cn', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg'),
(62, 22, 'fqcv83s5t0egkbhkh5q6a2fc9c', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg'),
(63, 4, 'fqcv83s5t0egkbhkh5q6a2fc9c', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(68, 4, 'jmrvje049niqsolmsmi5s20r7v', 'Samsung S11', 100000.00, 1, 'product_image/4.jpg'),
(74, 24, 'pn5s0otqgp03rk7k0o99v0j7h5', 'Fashion dress', 1200.00, 1, 'product_image/1.jpg'),
(76, 22, 'vf0kr9brpecj0e7sj7h3c2sfof', 'Vivo V11', 120000.00, 1, 'product_image/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_pass` varchar(150) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `deletion_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_address` text NOT NULL,
  `user_about` text NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_pass`, `user_status`, `deletion_status`, `user_address`, `user_about`, `picture`) VALUES
(12, 'Noipunno', 'moni925@gmail.com', '01710429998', '123456', 0, 1, '0', 'I am Mukta', '555555.jpg'),
(24, 'Monir Hossen', 'monir@gmail.com', '01710429994', '123456', 0, 1, '0', '', 'CLICK-Cyclone-Fan.jpg'),
(27, 'Noipunno', 'gobinda72@gmail.com', '01710429998', '123456', 0, 1, 'Hatiya, Noakhali', 'This is my simple account.', '555555.jpg'),
(28, 'Noipunno', 'gobinda62@gmail.com', '01710429999', '123456', 0, 1, 'Hatiya, Noakhali', '', './user_profile_image/mobile.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_table1`
--

CREATE TABLE `user_table1` (
  `user_email_id` int(11) NOT NULL,
  `user_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table1`
--

INSERT INTO `user_table1` (`user_email_id`, `user_email`) VALUES
(1, 'gobinda72@gmail.com'),
(9, 'mitadd@gmail.com'),
(10, 'noipunno@gmail.com'),
(11, 'moni@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `blog_table`
--
ALTER TABLE `blog_table`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `content_category`
--
ALTER TABLE `content_category`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `customer_data_table`
--
ALTER TABLE `customer_data_table`
  ADD PRIMARY KEY (`customer_order_data_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `inline_table`
--
ALTER TABLE `inline_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution_table`
--
ALTER TABLE `institution_table`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `mark_table`
--
ALTER TABLE `mark_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details_table`
--
ALTER TABLE `order_details_table`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product_manufacturer`
--
ALTER TABLE `product_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipping_table`
--
ALTER TABLE `shipping_table`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`slider_image_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `temp_cart_table`
--
ALTER TABLE `temp_cart_table`
  ADD PRIMARY KEY (`temp_cart_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_table1`
--
ALTER TABLE `user_table1`
  ADD PRIMARY KEY (`user_email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `blog_table`
--
ALTER TABLE `blog_table`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `content_category`
--
ALTER TABLE `content_category`
  MODIFY `content_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customer_data_table`
--
ALTER TABLE `customer_data_table`
  MODIFY `customer_order_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_table`
--
ALTER TABLE `image_table`
  MODIFY `image_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inline_table`
--
ALTER TABLE `inline_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `institution_table`
--
ALTER TABLE `institution_table`
  MODIFY `ins_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mark_table`
--
ALTER TABLE `mark_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details_table`
--
ALTER TABLE `order_details_table`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_manufacturer`
--
ALTER TABLE `product_manufacturer`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shipping_table`
--
ALTER TABLE `shipping_table`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `slider_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `temp_cart_table`
--
ALTER TABLE `temp_cart_table`
  MODIFY `temp_cart_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_table1`
--
ALTER TABLE `user_table1`
  MODIFY `user_email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

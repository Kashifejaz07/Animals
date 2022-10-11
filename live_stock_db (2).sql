-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2022 at 11:38 PM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_stock_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_animals`
--

CREATE TABLE `add_animals` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `Purpose` varchar(11) NOT NULL,
  `Animal` varchar(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `breed` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `health_status` varchar(11) NOT NULL,
  `age_months` varchar(11) NOT NULL,
  `weight_kg` varchar(11) NOT NULL,
  `height_inch` varchar(11) NOT NULL,
  `grade` varchar(11) NOT NULL,
  `broker_commission` varchar(11) NOT NULL,
  `purchase_price` varchar(11) NOT NULL,
  `inward_fare` varchar(11) NOT NULL,
  `purchase_location` varchar(11) NOT NULL,
  `issolation_date` date NOT NULL,
  `buying_broker_name` varchar(11) NOT NULL,
  `comments` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_animals`
--

INSERT INTO `add_animals` (`id`, `create_date`, `Purpose`, `Animal`, `image`, `breed`, `gender`, `health_status`, `age_months`, `weight_kg`, `height_inch`, `grade`, `broker_commission`, `purchase_price`, `inward_fare`, `purchase_location`, `issolation_date`, `buying_broker_name`, `comments`) VALUES
(79, '2022-09-10', 'Fattening', 'goat', '33e793bf641414867de8e970b2c3df70.jpg', 'potato', 'Female', 'strong', '7', '4', '95', '', 'Magni ut na', '247', 'In providen', 'Anim esse a', '2011-09-02', 'Octavia Whi', 'Sint est et'),
(80, '2022-08-28', 'Fattening', 'Cow', '82cccac1927b1228932fe5ace021417b.jpg', 'Select Bree', 'Male', 'very low', '5', '7', '42', '', 'Saepe aliqu', '510', 'Animi autem', 'Sunt vel as', '1983-07-28', 'Carson Stev', 'Sapiente cu'),
(82, '2022-08-28', 'Fattening', 'Cow', 'Bakra-Eid-Masha-Allah-12866.jpg', 'dhaniya', 'Male', 'strong', '12', '59', '81', '', 'Possimus a ', '170', 'Eos ad quas', 'Cumque ulla', '2003-01-23', 'Malachi Mon', 'Ut sint acc'),
(83, '2022-08-28', 'Fattening', 'Cow', 'bbedde6c8e4ddac682f273924ce7ac8f.jpg', 'Select Bree', 'Female', 'Select', '10', '88', '36', '', 'Mollitia fu', '972', 'Nam anim ob', 'Dolore in q', '2018-12-08', 'Quintessa D', 'Suscipit re'),
(84, '2022-08-28', 'Milking', 'Cow', 'cow_400.jpg', 'potato', 'Male', 'Select', '12', '88', '100', '', 'Eum eveniet', '295', 'Amet nihil ', 'Error quide', '1993-03-06', 'Alexis Hort', 'Alias accus'),
(85, '2022-08-28', 'Milking', 'Cow', 'hqdefault.jpg', 'potato', 'Female', 'Select', '5', '15', '76', '', 'Tempor qui ', '833', 'Dolorem sin', 'Ab labore d', '1992-05-15', 'Kyra Wilkin', 'Molestias c'),
(86, '2022-08-28', 'Fattening', 'Cow', '9144adecf34edcd059fc226de19dc8c0--pakistani-farm-animals.jpg', 'potato', 'Male', 'strong', '1', '35', '1', '', 'Adipisicing', '621', 'Est labore ', 'Amet sequi ', '1981-06-08', 'Knox Lancas', 'Consectetur'),
(87, '2022-08-28', 'Milking', 'Cow', 'Bakra-Eid-DZ-Cattle-Farm-2016-13007 (1).jpg', 'food', 'Male', 'very low', '4', '41', '8', '', 'Aliquid cup', '778', 'Aut anim do', 'Dolorem off', '1993-12-17', 'Lamar Mack', 'Itaque tene'),
(88, '2022-08-28', 'Fattening', 'Cow', 'Bakra-Eid-Beautiful-Brown-Spotted-Cow-865.jpg', 'potato', 'Female', 'very low', '6', '21', '3', '', 'Cillum qui ', '153', 'Minima quis', 'Impedit rep', '2016-07-25', 'Jamal Hanso', 'Corrupti ul'),
(89, '2022-08-28', 'Fattening', 'Cow', 'Bakra-Eid-Very-Heavy-Bull-In-Dilpasand-Cattle-Farm-2016-13008.jpg', 'Select Bree', 'Female', 'strong', '5', '97', '86', '', 'Distinctio ', '555', 'Voluptate c', 'Adipisci qu', '1975-11-30', 'Oleg Gilber', 'Possimus qu'),
(90, '2022-08-28', 'Milking', 'cow', 'f1c4eeeb85f5dc6f5f70ee1c35075fbb.jpg', 'dhaniya', 'Male', 'sold', '4', '86', '54', '', 'Aut aperiam', '834', 'Unde est ve', 'Ab repellen', '1997-01-24', 'Keaton Mcke', 'Repellendus'),
(91, '2022-08-28', 'Fattening', 'Cow', 'channels4_profile.jpg', 'potato', 'Male', 'Available', '1', '96', '25', '', 'Reiciendis ', '135', 'Dolor excep', 'Quis esse u', '1970-10-05', 'Timothy Doy', 'Eveniet dol'),
(92, '2022-08-29', 'Fattening', 'cow', 'Bakra-Eid-Masha-Allah-12766.jpg', 'dhaniya', 'Male', 'Died', '2', '51', '36', '', 'Non nobis e', '144', 'Quos verita', 'Libero null', '2002-02-04', 'Madeline Si', 'Velit iure '),
(95, '2022-08-31', 'm', 'Goat', '1d71821efb9078beaf4bca3ebaaf88a3.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(96, '2022-08-31', 'Fattening', 'Goat', '625396829d8df0675bbdb5827d204110.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(97, '2022-08-31', 'Fattening', 'Goat', 'Boer2.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(98, '2022-08-31', 'Fattening', 'Goat', 'istockphoto-146731223-170667a.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(99, '0000-00-00', 'Fattening', 'goat', 'Angora-goat.webp', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(100, '2022-08-31', 'Fattening', 'Goat', 'goat.webp', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(101, '2022-08-31', 'Fattening', 'Goat', 'goat-5535783__340.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(102, '2022-09-11', 'Fattening', 'camel', '1200px-07._Camel_Profile,_near_Silverton,_NSW,_07.07.2007.jpg', 'food', 'Male', 'Select', '10', '98', '22', '', 'Ullam esse ', '107', 'Quia aspern', 'Eu facilis ', '2000-12-23', 'Sloane Duke', 'Unde fugiat'),
(103, '2022-09-05', 'Milking', 'camel', 'Bakra-Eid-Camel-Qurbani-2015-10093.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(104, '0000-00-00', 'Fattening', 'cow', '15442175201_52f3096c0c_o.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(105, '2022-09-03', 'Milking', 'Goat', 'istockphoto-146731223-170667a.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(106, '2022-09-06', 'Milking', 'goat', '625396829d8df0675bbdb5827d204110.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(107, '2022-09-06', 'Fattening', 'Goat', 'GettyImages-1199243328.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(108, '2022-09-06', 'Fattening', 'Camel', 'istockphoto-146734864-612x612.jpg', 'potato', 'Female', 'very low', '11', '83', '58', '', 'Nihil et qu', '312', 'Consequatur', 'Ipsum et vo', '2005-10-14', 'Nero Mercer', 'Non cupidit'),
(109, '2022-09-08', 'Milking', 'Camel', 'images.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(110, '2022-09-10', 'Fattening', 'Goat', '15442175201_52f3096c0c_o.jpg', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ab_id` int(11) NOT NULL,
  `Animal` varchar(20) NOT NULL,
  `Breed` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ab_id`, `Animal`, `Breed`) VALUES
(7, 'Goat', 'Kamuri'),
(5, 'Buffalow', 'Australian'),
(6, 'Buffalow', 'Gilgiti'),
(17, 'Cow', 'Buf'),
(9, 'Goat', 'Teddy'),
(10, 'Goat', 'Gulabi'),
(11, 'Cow', 'Red'),
(12, 'Buffalow', 'Chand'),
(13, 'Cow', 'Chand'),
(14, 'Goat', 'Mix Breed'),
(15, 'Cow', 'BUFFALO'),
(18, 'Cow', 'cow');

-- --------------------------------------------------------

--
-- Table structure for table `agent_commission`
--

CREATE TABLE `agent_commission` (
  `id` int(11) NOT NULL,
  `agent_commission` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_commission`
--

INSERT INTO `agent_commission` (`id`, `agent_commission`) VALUES
(1, 'kashif');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `a_id` int(11) NOT NULL,
  `Animal` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`a_id`, `Animal`) VALUES
(26, 'Camel'),
(19, 'Goat'),
(27, 'Cow');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `b_id` int(11) NOT NULL,
  `b_animal` varchar(25) NOT NULL,
  `b_tag` varchar(30) NOT NULL,
  `b_dob` varchar(30) NOT NULL,
  `b_gender` varchar(25) NOT NULL,
  `b_qty` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`b_id`, `b_animal`, `b_tag`, `b_dob`, `b_gender`, `b_qty`) VALUES
(1, 'Cow', 'CF24419', '2019-07-16', 'Male', '1');

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `id` int(11) NOT NULL,
  `Animal` varchar(11) NOT NULL,
  `breed` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`id`, `Animal`, `breed`) VALUES
(10, 'Camel', 'food'),
(11, 'Cow', 'potato'),
(12, 'Goat', 'dhaniya');

-- --------------------------------------------------------

--
-- Table structure for table `calculate`
--

CREATE TABLE `calculate` (
  `id` int(11) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `no1` varchar(200) NOT NULL,
  `no2` varchar(200) NOT NULL,
  `no3` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculate`
--

INSERT INTO `calculate` (`id`, `tag`, `price`, `weight`, `no1`, `no2`, `no3`, `total`) VALUES
(5, 'te3674873', '456575', '543', '32', '32', '25', '53'),
(6, 'CW7683', '4654654', '120', '32', '32', '6', '70'),
(7, 'CQ3341', '50000', '3', '32', '32', '6', '70'),
(9, 'CQ29419', '200000', '181Kg', '54', '65', '8', '127'),
(13, 'CF25419', '50', '10', '24', '25', '26', '75'),
(31, '', '20', '57', '4', '5', '65', '74'),
(30, '', '1400', '50', '15', '100', '100', '215'),
(29, '', '', '', '', '', '', '0'),
(28, '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `category`) VALUES
(2, 'B'),
(6, 'C'),
(8, '55'),
(9, '55');

-- --------------------------------------------------------

--
-- Table structure for table `comission`
--

CREATE TABLE `comission` (
  `c_id` int(11) NOT NULL,
  `comission` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comission`
--

INSERT INTO `comission` (`c_id`, `comission`) VALUES
(4, 'Haris'),
(5, 'Hakim'),
(6, 'Zahid');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `purchase_price` varchar(200) NOT NULL,
  `transportation` varchar(11) NOT NULL,
  `purchase_commission` varchar(200) NOT NULL,
  `sales_commission` varchar(200) NOT NULL,
  `medicine` varchar(200) NOT NULL,
  `feed` varchar(200) NOT NULL,
  `misc` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `tag`, `purchase_price`, `transportation`, `purchase_commission`, `sales_commission`, `medicine`, `feed`, `misc`) VALUES
(4, 'KF6419', '279', '0000-00-00', 'Maxime vel libero si', 'Aut deleniti suscipi', 'Iure vel cum quibusd', 'Ullam eum eaque beat', 'Corrupti provident'),
(5, 'abvc343823', '120000', '0000-00-00', '200', '3000', '500', '50000', 'no'),
(6, 'CS246', '80', '80', '80', '80', '80', '80', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `disease` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `disease`) VALUES
(1, 'kashi'),
(2, 'KASHIF EJAZ'),
(3, 'MR ASH'),
(4, 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `email`, `password`, `address`, `phone`) VALUES
(1, 'abcv', 'dassa', 'sobia@gmail.com', '352', 'abc,87metery', 4564654),
(2, 'asc', 'adf', 'ssaa@gmail.com', '655', 'abc,87metery,54', 345656),
(3, 'abcv', 'dassa', 'sobiashakeel0346@gmail.com', '352', 'abc,87metery', 4564654),
(4, '454fghfgh', 'h', 'ssaa@gmail.com', '<br /><b>Notice</b>:  Undefined variable: row in <b>C:xampphtdocsasearch.php</b> on line <b>31</b><br />', 'abc,87metery', 9090768),
(5, 'abcv', 'adf', 'sobia@gmail.com', '352', 'abc,87metery', 2147483647),
(6, 'asd32', '543', '532', '34', '8568oui', 0),
(7, 'ryrtyuutiuy', 'yuytujyg', 'sobia@', '32543uyui', 't64regyiuyi', 6879890);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `feed` varchar(11) NOT NULL,
  `doctor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `feed`, `doctor`) VALUES
(4, 'Feed', ''),
(5, 'Doctor', '');

-- --------------------------------------------------------

--
-- Table structure for table `expense_tab`
--

CREATE TABLE `expense_tab` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `expense_head` varchar(11) NOT NULL,
  `cost` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_tab`
--

INSERT INTO `expense_tab` (`id`, `create_date`, `expense_head`, `cost`) VALUES
(3, '2022-09-03', 'Doctor', '190'),
(4, '2022-09-03', 'Feed', '800'),
(5, '2022-09-03', 'Feed', '3000'),
(6, '2022-09-03', 'Feed', '15000'),
(7, '2022-09-06', 'Doctor', '11'),
(8, '2022-09-06', 'Feed', '2'),
(9, '2022-09-06', 'Select Expe', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feed_in`
--

CREATE TABLE `feed_in` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `feed_quantity` int(255) NOT NULL,
  `feed_rate` int(255) NOT NULL,
  `total_feed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_in`
--

INSERT INTO `feed_in` (`id`, `create_date`, `feed_quantity`, `feed_rate`, `total_feed`) VALUES
(21, '1999-11-23', 453, 41, 0),
(22, '1990-12-23', 326, 38, 0),
(23, '2018-12-05', 944, 23, 0),
(24, '2010-11-25', 1000, 1000, 0),
(25, '1995-10-04', 777, 72, 0),
(26, '1977-08-28', 428, 61, 0),
(27, '2022-08-15', 2, 61, 0),
(28, '1974-04-12', 0, 40, 0),
(29, '0000-00-00', 67, 57, 0),
(30, '2031-10-15', 999, 999, 0),
(32, '2022-09-01', 55, 5, 0),
(33, '2022-09-03', 500, 900, 400),
(34, '2022-09-03', 500, 900, 400),
(35, '2022-09-03', 500, 900, 400),
(36, '1982-09-01', 17, 80, 547),
(37, '1971-12-09', 11, 54, 453),
(38, '1972-11-09', 14, 42, 686),
(39, '2022-09-24', 122, 432, 687),
(40, '2022-09-24', 20, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `feed_out`
--

CREATE TABLE `feed_out` (
  `id` int(11) NOT NULL,
  `tag` text,
  `animal` text,
  `animal_id` int(50) DEFAULT NULL,
  `feed_quantity` int(50) DEFAULT NULL,
  `feed_rate` int(50) DEFAULT NULL,
  `animal_counter` int(50) DEFAULT NULL,
  `feed_animal` int(50) DEFAULT NULL,
  `feed_cost` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_out`
--

INSERT INTO `feed_out` (`id`, `tag`, `animal`, `animal_id`, `feed_quantity`, `feed_rate`, `animal_counter`, `feed_animal`, `feed_cost`) VALUES
(14, 'Reprehenderit occae', 'Cow', 2, 405, 91, 55, 55, 77),
(15, 'Possimus quasi labo', 'Cow', 2, 967, 6, 51, 100, 222),
(16, 'Possimus quasi labo', 'Cow', 2, 967, 6, 51, 100, 222),
(20, 'kashif ', 'Cow', 1, 8, 810, 20, 20, 80),
(21, 'Sit asperiores volup', 'Goat', 1, 808, 37, 74, 8, 8),
(22, 'Id excepturi laudan', 'Goat', 0, 916, 31, 29, 0, 0),
(23, 'kahif', 'Cow', 3, 55, 55, 25, 52, 25);

-- --------------------------------------------------------

--
-- Table structure for table `fixe_cost`
--

CREATE TABLE `fixe_cost` (
  `k_id` int(11) NOT NULL,
  `k_charge` varchar(200) NOT NULL,
  `f_cost` varchar(200) NOT NULL,
  `o_cost` varchar(200) NOT NULL,
  `s_commision` varchar(200) NOT NULL,
  `a_factor` varchar(200) NOT NULL,
  `b_commission` varchar(200) NOT NULL,
  `transport` varchar(200) NOT NULL,
  `e_fees` varchar(200) NOT NULL,
  `l_cost` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixe_cost`
--

INSERT INTO `fixe_cost` (`k_id`, `k_charge`, `f_cost`, `o_cost`, `s_commision`, `a_factor`, `b_commission`, `transport`, `e_fees`, `l_cost`) VALUES
(1, '505', '55', '50', '50', '70', '70', '60', '55', '45');

-- --------------------------------------------------------

--
-- Table structure for table `goat_vacination`
--

CREATE TABLE `goat_vacination` (
  `v_id` int(11) NOT NULL,
  `goat_id` varchar(40) NOT NULL,
  `month` varchar(40) NOT NULL,
  `disease` varchar(40) NOT NULL,
  `v_date` varchar(50) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health_status`
--

CREATE TABLE `health_status` (
  `id2` int(11) NOT NULL,
  `health_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_status`
--

INSERT INTO `health_status` (`id2`, `health_status`) VALUES
(5, 'very low'),
(6, 'strong');

-- --------------------------------------------------------

--
-- Table structure for table `herd`
--

CREATE TABLE `herd` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `tag` varchar(11) NOT NULL,
  `Animal` varchar(11) NOT NULL,
  `breed` varchar(11) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `Purpose` varchar(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herd`
--

INSERT INTO `herd` (`id`, `create_date`, `tag`, `Animal`, `breed`, `weight`, `Purpose`, `image`, `status`) VALUES
(1, '2022-09-10', '', 'Cow', '', '', 'Fattening', '15442175201_52f3096c0c_o.jpg', ''),
(2, '2022-09-10', '', 'Cow', '', '', 'Fattening', 'Angora-goat.webp', ''),
(3, '2022-09-10', '', 'Goat', '', '', 'Milking', 'Bakra-Eid-Camel-Qurbani-2015-10093.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(104, ''),
(104, ''),
(103, ''),
(103, ''),
(103, ''),
(102, ''),
(102, ''),
(72, ''),
(105, '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine_cost` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine_cost`, `date`) VALUES
(102, '600', '2022-09-01'),
(97, '999', '2022-09-01'),
(103, '52', '2022-09-03'),
(104, '800', '2022-09-03'),
(105, '300', '2022-09-05'),
(0, '30', '2022-09-05'),
(0, '30', '2022-09-05'),
(105, '30', '2022-09-05'),
(105, '3000', '2022-09-05'),
(105, '800', '2022-09-06'),
(105, '300800', '2022-09-06'),
(101, '922', '2022-09-06'),
(108, '25', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `milk_sale`
--

CREATE TABLE `milk_sale` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `animal_quantity` varchar(11) NOT NULL,
  `daily_milk_quantity` varchar(11) NOT NULL,
  `milk_rate` varchar(11) NOT NULL,
  `total_milk` varchar(11) NOT NULL,
  `milk_sold` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milk_sale`
--

INSERT INTO `milk_sale` (`id`, `date`, `animal_quantity`, `daily_milk_quantity`, `milk_rate`, `total_milk`, `milk_sold`) VALUES
(1, '2022-09-03', '100', '100', '100', '100', '100'),
(2, '2022-09-03', '100', '100', '100', '100', '100'),
(3, '2022-09-03', '100', '100', '100', '100', '100'),
(4, '2022-09-03', '100', '100', '100', '100', '100'),
(5, '2022-09-03', '500', '500', '500', '500', '500');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `seller` varchar(200) NOT NULL,
  `p_price` varchar(200) NOT NULL,
  `c_date` varchar(200) NOT NULL,
  `p_weight` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `tag`, `image`, `seller`, `p_price`, `c_date`, `p_weight`) VALUES
(1, 'CF25419', 0x676f61745f504e4731333135352e706e67, 'Haris', '  50000 ', '2019-10-10 ', '8'),
(2, 'ddf', '', 'Haris', '2324', '2019-10-18 ', '43'),
(3, 'abc', 0x6c6f676f322d312e706e67, 'Mamoo', '20000', '2019-10-18 ', '500'),
(4, '1213', 0x696c6d646f73742e6a666966, 'Select seller', '50', '2019-11-22', '8');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `id` int(11) NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`id`, `purpose`) VALUES
(10, 'Fattening'),
(13, 'Milking'),
(14, ''),
(15, '');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale_animal`
--

CREATE TABLE `sale_animal` (
  `id` int(11) NOT NULL,
  `create_date` varchar(11) NOT NULL,
  `animal` varchar(11) NOT NULL,
  `animal_id` varchar(11) NOT NULL,
  `feed_quantity` varchar(11) NOT NULL,
  `feed_rate` varchar(11) NOT NULL,
  `sale_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_animal`
--

INSERT INTO `sale_animal` (`id`, `create_date`, `animal`, `animal_id`, `feed_quantity`, `feed_rate`, `sale_price`) VALUES
(1, '2022-09-03', 'Camel', '25', '30', '800', '9000'),
(2, '2022-09-03', 'Camel', '25', '30', '800', '9000'),
(3, '2022-09-03', 'Camel', '25', '30', '800', '9000');

-- --------------------------------------------------------

--
-- Table structure for table `sale_cost`
--

CREATE TABLE `sale_cost` (
  `id` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `los` varchar(200) NOT NULL,
  `l_cost` varchar(200) NOT NULL,
  `w_purchase` varchar(200) NOT NULL,
  `k_factor` varchar(200) NOT NULL,
  `k_charge` varchar(200) NOT NULL,
  `f_factor` varchar(200) NOT NULL,
  `f_cost` varchar(200) NOT NULL,
  `o_cost` varchar(200) NOT NULL,
  `s_comm` varchar(200) NOT NULL,
  `w_factor` varchar(200) NOT NULL,
  `a_factor` varchar(200) NOT NULL,
  `arhat` varchar(200) NOT NULL,
  `t_cost_l` varchar(200) NOT NULL,
  `t_cost_k` varchar(200) NOT NULL,
  `c_live_w` varchar(200) NOT NULL,
  `m_factor` varchar(200) NOT NULL,
  `c_meat_w` varchar(200) NOT NULL,
  `k_per_m` varchar(200) NOT NULL,
  `cost_lw` varchar(200) NOT NULL,
  `c_meat_wm` varchar(200) NOT NULL,
  `r_factor` varchar(200) NOT NULL,
  `r_sale_p` varchar(200) NOT NULL,
  `s_price_k` varchar(200) NOT NULL,
  `s_price_km` varchar(200) NOT NULL,
  `r_p_mann` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `seller` varchar(200) NOT NULL,
  `image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_cost`
--

INSERT INTO `sale_cost` (`id`, `a_date`, `los`, `l_cost`, `w_purchase`, `k_factor`, `k_charge`, `f_factor`, `f_cost`, `o_cost`, `s_comm`, `w_factor`, `a_factor`, `arhat`, `t_cost_l`, `t_cost_k`, `c_live_w`, `m_factor`, `c_meat_w`, `k_per_m`, `cost_lw`, `c_meat_wm`, `r_factor`, `r_sale_p`, `s_price_k`, `s_price_km`, `r_p_mann`, `total`, `seller`, `image`) VALUES
(1, '0000-00-00', '2019-10-10 ', '8', '220', '287Kg', '676', '767', '87', '86', '86', '86', '8', '9769', '86', '86', '435', '534', '543', '53', '53', '53', '53', '53', '543', '53', '', '53', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `nic` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `sname`, `nic`, `phone`) VALUES
(2, 'Haris', 42401, 32124567),
(3, 'abc', 123456, 9545454),
(4, 'Mamoo', 2147483647, 33223434),
(5, 'PNT', 31212565, 6531163);

-- --------------------------------------------------------

--
-- Table structure for table `soft`
--

CREATE TABLE `soft` (
  `id` int(11) NOT NULL,
  `Tag` varchar(200) NOT NULL,
  `Animal` varchar(255) DEFAULT NULL,
  `dob` varchar(25) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Breed` varchar(255) DEFAULT NULL,
  `Weight` varchar(25) DEFAULT NULL,
  `Height` varchar(25) DEFAULT NULL,
  `Age` varchar(15) DEFAULT NULL,
  `HealthStatus` varchar(255) DEFAULT NULL,
  `Purpose` varchar(255) DEFAULT NULL,
  `Category` varchar(255) NOT NULL,
  `PurchaseP` int(255) DEFAULT NULL,
  `inwardfare` varchar(255) NOT NULL,
  `purchaseagent` varchar(255) DEFAULT NULL,
  `purchaselocation` varchar(255) DEFAULT NULL,
  `purchasedate` date DEFAULT NULL,
  `issolationperiod` date DEFAULT NULL,
  `agentcommission` varchar(255) DEFAULT NULL,
  `other` varchar(25) DEFAULT NULL,
  `vaccination` varchar(255) NOT NULL,
  `Due` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soft`
--

INSERT INTO `soft` (`id`, `Tag`, `Animal`, `dob`, `image`, `Breed`, `Weight`, `Height`, `Age`, `HealthStatus`, `Purpose`, `Category`, `PurchaseP`, `inwardfare`, `purchaseagent`, `purchaselocation`, `purchasedate`, `issolationperiod`, `agentcommission`, `other`, `vaccination`, `Due`) VALUES
(31, 'CS246', 'Cow', '2021-12-28', 'pexels-pixabay-60597.jpg', 'Mix', '120Kg', '4Inch', '24Months', 'Select', 'Select Your Purpose', 'B', 120000, '2000', '', 'Karachi', '0000-00-00', '0000-00-00', '', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `Status`) VALUES
(1, 'Normal'),
(2, 'Weak'),
(3, 'Good'),
(7, 'Observe');

-- --------------------------------------------------------

--
-- Table structure for table `status_dashbord`
--

CREATE TABLE `status_dashbord` (
  `id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_dashbord`
--

INSERT INTO `status_dashbord` (`id`, `status`) VALUES
(2, 'sold'),
(3, 'Available'),
(6, 'Died');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`) VALUES
(1, 'yssyogesh', 'Yogesh singh', 'yssyogesh@gmail.com'),
(2, 'sonarika', 'Sonarika', 'sonarika@gmail.com'),
(3, 'vishal', 'Vishal Sahu', 'vishal@gmail.com'),
(4, 'mayank', 'Mayank', 'mayank@yahoo.com'),
(5, 'vijay', 'Vijay', 'vijayec@gmai.com'),
(6, 'jiten', 'Jiten singh', 'jiten93@gmail.com'),
(7, 'rahul', 'Rahul singh', 'rahul@gmail.com'),
(8, 'shreya', 'Shreya', 'shreya@yahoo.com'),
(9, 'mohit', 'Mohit', 'mohit@gmail.com'),
(10, 'rohit', 'Rohit singh', 'rohit@gmail.com'),
(11, 'abhilash', 'Abhilash ', 'abhilash@gmail.com'),
(12, 'abhishek', 'Abhishek', 'abhishek@yahoo.com'),
(13, 'aditya', 'Aditya', 'aditya@gmail.com'),
(14, 'ajay', 'Ajay singh', 'ajay@gmail.com'),
(15, 'akhilesh', 'Akhilesh', 'akhilesh@yahoo.com'),
(16, 'daniel', 'Daniel', 'daniel@yahoo.com'),
(17, 'deepak', 'Deepak', 'deepak@gmail.com'),
(18, 'ganesh', 'Ganesh', 'ganesh@gmail.com'),
(19, 'gaurav', 'Gaurav', 'gaurav@yahoo.com'),
(20, 'gautam', 'Gautam', 'gautam@gmail.com'),
(21, 'kuldeep', 'Kuldeep', 'kuldeep@gmail.com'),
(22, 'mukesh', 'Mukesh', 'mukesh@yahoo.com'),
(23, 'nitin', 'Nitin', 'nitin@gmail.com'),
(24, 'palash', 'Palash', 'palash@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vacci`
--

CREATE TABLE `vacci` (
  `v_id` int(11) NOT NULL,
  `v_sno` varchar(25) NOT NULL,
  `v_animal` varchar(30) NOT NULL,
  `v_vaccination` varchar(30) NOT NULL,
  `v_date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacci`
--

INSERT INTO `vacci` (`v_id`, `v_sno`, `v_animal`, `v_vaccination`, `v_date`) VALUES
(1, 'Camel-154-15/03/19', 'Camel', 'Abc', '2019-03-18'),
(2, 'Goat-766-06/03/19', 'Goat', 'Abc', '2019-03-18'),
(3, 'Goat-771-15/03/19', 'Goat', 'Abc', '2019-03-18'),
(4, '', '', 'abd', '2019-06-08'),
(5, '', '', 'ergeg', '2019-07-01'),
(6, '', '', '464844', '2019-06-30'),
(7, 'Camel-154-15/03/19', 'camel', 'dfd', '2019-01-01'),
(8, '', '', 'YES', '2019-01-02'),
(9, '2', 'xdgfd', 'dgdf', '2019-07-24'),
(10, 'e545', 'fdgd', '6757', '2019-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `vacination`
--

CREATE TABLE `vacination` (
  `id` int(11) NOT NULL,
  `disease` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `week` varchar(11) NOT NULL,
  `immunity_period` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacination`
--

INSERT INTO `vacination` (`id`, `disease`, `month`, `week`, `immunity_period`) VALUES
(1, 'KASHIF EJAZ', 'April', '2', '25'),
(2, 'KASHIF EJAZ', 'April', '2', '25'),
(3, 'hello world', 'Feburary', '3', '4'),
(4, 'MR ASH', 'January', '2', '555'),
(5, 'MR ASH', 'January', '2', '555'),
(6, 'MR ASH', 'March', '2', '55'),
(7, 'KASHIF EJAZ', 'Feburary', '1', '555'),
(8, 'hello world', 'Feburary', '2', '555'),
(9, 'hello world', 'Feburary', '2', '555'),
(10, 'KASHIF EJAZ', 'May', '1', '555'),
(11, 'KASHIF EJAZ', 'May', '1', '555');

-- --------------------------------------------------------

--
-- Table structure for table `vacinationc`
--

CREATE TABLE `vacinationc` (
  `v_id` int(11) NOT NULL,
  `v_disease` varchar(25) NOT NULL,
  `vaccination` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacinationc`
--

INSERT INTO `vacinationc` (`v_id`, `v_disease`, `vaccination`) VALUES
(8, 'Select Week', ''),
(7, 'LooseMotions', 'Tikka_2'),
(5, 'MouthNFoot', 'MnF#1'),
(10, 'KASHIF EJAZ', ''),
(11, 'kashi', 'ggg'),
(12, 'MR ASH', 'Moderna');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `weight`, `date`) VALUES
(97, '500', '2022-08-31'),
(97, '10', '2022-08-31'),
(98, '1000', '2022-08-31'),
(103, '55', '2022-09-01'),
(104, '800', '2022-09-05'),
(102, '780', '2022-09-05'),
(101, '500', '2022-09-05'),
(0, '500', '2022-09-05'),
(0, '5007', '2022-09-05'),
(0, '5007', '2022-09-05'),
(0, '50080', '2022-09-05'),
(105, '800', '2022-09-05'),
(104, '455', '2022-09-05'),
(106, '800', '2022-09-05'),
(104, '7998', '2022-09-05'),
(102, '5555', '2022-09-05'),
(104, '8000', '2022-09-05'),
(105, '100', '2022-09-06'),
(103, '5555', '2022-09-06'),
(103, '5555', '2022-09-06'),
(103, '5555', '2022-09-06'),
(110, '58', '2022-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_animals`
--
ALTER TABLE `add_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `agent_commission`
--
ALTER TABLE `agent_commission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculate`
--
ALTER TABLE `calculate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comission`
--
ALTER TABLE `comission`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_tab`
--
ALTER TABLE `expense_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_in`
--
ALTER TABLE `feed_in`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `feed_out`
--
ALTER TABLE `feed_out`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fixe_cost`
--
ALTER TABLE `fixe_cost`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `goat_vacination`
--
ALTER TABLE `goat_vacination`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `health_status`
--
ALTER TABLE `health_status`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `herd`
--
ALTER TABLE `herd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milk_sale`
--
ALTER TABLE `milk_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag1` (`tag`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `sale_animal`
--
ALTER TABLE `sale_animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_cost`
--
ALTER TABLE `sale_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `soft`
--
ALTER TABLE `soft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `status_dashbord`
--
ALTER TABLE `status_dashbord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `vacci`
--
ALTER TABLE `vacci`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vacination`
--
ALTER TABLE `vacination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacinationc`
--
ALTER TABLE `vacinationc`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_animals`
--
ALTER TABLE `add_animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `agent_commission`
--
ALTER TABLE `agent_commission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `calculate`
--
ALTER TABLE `calculate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comission`
--
ALTER TABLE `comission`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense_tab`
--
ALTER TABLE `expense_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feed_in`
--
ALTER TABLE `feed_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feed_out`
--
ALTER TABLE `feed_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `fixe_cost`
--
ALTER TABLE `fixe_cost`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goat_vacination`
--
ALTER TABLE `goat_vacination`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_status`
--
ALTER TABLE `health_status`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `herd`
--
ALTER TABLE `herd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `milk_sale`
--
ALTER TABLE `milk_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_animal`
--
ALTER TABLE `sale_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale_cost`
--
ALTER TABLE `sale_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soft`
--
ALTER TABLE `soft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status_dashbord`
--
ALTER TABLE `status_dashbord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vacci`
--
ALTER TABLE `vacci`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vacination`
--
ALTER TABLE `vacination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vacinationc`
--
ALTER TABLE `vacinationc`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

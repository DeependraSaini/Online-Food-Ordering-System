-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 02:00 PM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `upass`) VALUES
(2, 'Deependra', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `order detail`
--

CREATE TABLE `order detail` (
  `F_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order detail`
--

INSERT INTO `order detail` (`F_ID`, `name`, `quantity`, `price`, `username`) VALUES
(2, 'SPRING ROLLS', '1', 65.00, 'deepak1'),
(9, 'CHEESE BLAST SANDWICH', '2', 200.00, 'rahul123'),
(112, 'MEDU VADA', '1', 110.00, 'deepak1'),
(223, 'ALOO KA PARATHA', '1', 120.00, 'deepak1'),
(228, 'KADHI CHAWAL', '1', 300.00, 'deepak1'),
(331, 'KHAMAN DHOKLA', '1', 250.00, 'deepak1'),
(332, 'UNDHIYU', '1', 350.00, 'deepak1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `Card_holder` varchar(50) NOT NULL,
  `Card_number` int(16) NOT NULL,
  `Expiry` int(10) NOT NULL,
  `CVV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Card_holder`, `Card_number`, `Expiry`, `CVV`) VALUES
(1, 'Rajesh Pathak', 2147483647, 522, 890);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `E_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  ` Mobile` bigint(10) NOT NULL,
  `DOB` date NOT NULL,
  `Dept` varchar(20) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`E_id`, `Name`, ` Mobile`, `DOB`, `Dept`, `Gender`, `State`, `City`) VALUES
(73472, 'RAJESH PATHAK', 9999738472, '1991-06-23', 'HELPER', 'MALE', 'UTTARAKHAND', 'RAMNAGAR'),
(74324, 'REENA MEHTA', 9886545376, '1988-10-23', 'HELPER', 'FEMALE', 'UTTARAKHAND', 'NANITAL');

-- --------------------------------------------------------

--
-- Table structure for table `tproduct`
--

CREATE TABLE `tproduct` (
  `F_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tproduct`
--

INSERT INTO `tproduct` (`F_ID`, `name`, `image`, `price`) VALUES
(1, 'HAPPY HAPPY CHOCO CHIPS SHAKE', 'photo/happy.jpg', 80.00),
(2, 'SPRING ROLLS', 'photo/spring.jpg', 65.00),
(3, 'SHOT GUN CHICKEN BURGER', 'photo/shot.jpg', 120.00),
(4, 'CHOCOLATE HAZELNUT TRUFFLE', 'photo/chocolate.jpg', 99.00),
(5, 'CHOWMIN', 'photo/chow.jpeg', 180.00),
(6, 'JUICY MASALA PANEER KATHI ROLL', 'photo/paneer.jpg', 70.00),
(7, 'PAKORA', 'photo/pakora.jpg', 80.00),
(8, 'CHEESE BLAST PIZZA', 'photo/pizza.jpg', 460.00),
(9, 'CHEESE BLAST SANDWICH', 'photo/sandwich.jpg', 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `tproduct2`
--

CREATE TABLE `tproduct2` (
  `F_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tproduct2`
--

INSERT INTO `tproduct2` (`F_ID`, `name`, `image`, `price`) VALUES
(111, 'MASALA DOSA', 'photo/dosa.jpeg', 200.00),
(112, 'MEDU VADA', 'photo/medu.jpeg', 110.00),
(113, 'IDLI SAMBAR', 'photo/Idli.jpeg', 180.00),
(114, 'APPAM', 'photo/appam.jpeg', 120.00),
(115, 'RASAM', 'photo/rasam.jpeg', 250.00),
(116, 'PULIYOGARE', 'photo/puli.jpeg', 350.00),
(117, 'MALABAR FISH CURRY', 'photo/cury.jpeg', 420.00),
(118, 'CHETTINAD CHICKEN', 'photo/chick.jpeg', 480.00);

-- --------------------------------------------------------

--
-- Table structure for table `tproduct3`
--

CREATE TABLE `tproduct3` (
  `F_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tproduct3`
--

INSERT INTO `tproduct3` (`F_ID`, `name`, `image`, `price`) VALUES
(221, 'MAKKI KI ROTI SARSON KA SAAG', 'photo/sarson.jpeg', 250.00),
(222, 'RAJMA CHAWAL', 'photo/rajma.jpeg', 200.00),
(223, 'ALOO KA PARATHA', 'photo/aloo.jpeg', 120.00),
(224, 'DAL MAKHANI', 'photo/dal.jpeg', 220.00),
(225, 'AMRITSARI KULCHA', 'photo/kulcha.jpeg', 180.00),
(226, 'BUTTER CHICKEN', 'photo/butter.jpeg', 650.00),
(227, 'TANDOORI CHICKEN', 'photo/tandoori.jpeg', 470.00),
(228, 'KADHI CHAWAL', 'photo/kadhi.jpeg', 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `tproduct4`
--

CREATE TABLE `tproduct4` (
  `F_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tproduct4`
--

INSERT INTO `tproduct4` (`F_ID`, `name`, `image`, `price`) VALUES
(331, 'KHAMAN DHOKLA', 'photo/dokhla.jpeg', 250.00),
(332, 'UNDHIYU', 'photo/udi.jpeg', 350.00),
(333, 'FAFDA JALEBI', 'photo/fafda.jpeg', 120.00),
(334, 'THEPLA', 'photo/thepla.jpeg', 140.00),
(335, 'KHANDVI', 'photo/khandvi.jpeg', 320.00),
(336, 'HANDVO', 'photo/handvo.jpeg', 350.00),
(337, 'KHAKHRA', 'photo/khakhra.jpeg', 380.00),
(338, 'GUJARATI KADHI', 'photo/guj.jpeg', 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `number`) VALUES
(1, 'rahul123', 'rahul pathak', 'rahulpathak345@gmail', 'rahul321', 8988988880),
(2, 'deepak1', 'Deependra Kumar Saini', 'deependra121@gmail.c', 'admin', 6935824715);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order detail`
--
ALTER TABLE `order detail`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `tproduct`
--
ALTER TABLE `tproduct`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `tproduct2`
--
ALTER TABLE `tproduct2`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `tproduct3`
--
ALTER TABLE `tproduct3`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `tproduct4`
--
ALTER TABLE `tproduct4`
  ADD PRIMARY KEY (`F_ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74325;

--
-- AUTO_INCREMENT for table `tproduct`
--
ALTER TABLE `tproduct`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tproduct2`
--
ALTER TABLE `tproduct2`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tproduct3`
--
ALTER TABLE `tproduct3`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `tproduct4`
--
ALTER TABLE `tproduct4`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

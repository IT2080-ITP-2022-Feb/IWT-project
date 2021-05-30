-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `F_name` varchar(25) DEFAULT NULL,
  `M_name` varchar(25) DEFAULT NULL,
  `L_name` varchar(25) DEFAULT NULL,
  `A_dob` date DEFAULT NULL,
  `A_email` varchar(50) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `A_Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `F_name`, `M_name`, `L_name`, `A_dob`, `A_email`, `user_type`, `A_Password`) VALUES
(1, 'Nadeesha', 'Dilshan', 'Wickramarathna', '1999-10-11', 'Nadeesha@gmail.com', 'admin', 'test1234'),
(2, 'Dinushika', 'Sewwandi', 'Dodanthenna', '1999-07-01', 'Dinushika@gmail.com', 'admin', 'test1234'),
(3, 'Kavindu', 'Malshan', 'Madutharanga', '1999-09-21', 'Kavindu@gmail.com', 'admin', 'test1234'),
(4, 'Sameesha', 'Rashani', 'Kulasekara', '1999-10-21', 'Sameesha@gmail.com', 'admin', 'test1234'),
(5, 'Dilki', 'Poornima', 'Welagedara', '1999-12-18', 'Dilki@gmail.com', 'admin', 'test1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` int(11) NOT NULL,
  `Author` varchar(25) DEFAULT NULL,
  `Book_name` varchar(35) DEFAULT NULL,
  `Book_img` varchar(300) DEFAULT NULL,
  `S_ID` int(11) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Author`, `Book_name`, `Book_img`, `S_ID`, `catID`) VALUES
(1, 'Kiribathgoda Ghnananda', 'Sri sambundhathwaya', 'book1.jpg', 1, 1),
(2, 'A.D.K.Rupasinha', 'Genaral Knowladge', 'book2.jpg', 2, 2),
(3, 'Umberto Eco', 'The Sea', 'book3.jpg', 3, 3),
(4, 'Olga Tokarczuk', 'Flights', 'book4.jpg', 4, 4),
(5, 'Tara Westover', 'Educated', 'book5.jpg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `B_ID` int(11) NOT NULL,
  `F_name` varchar(25) DEFAULT NULL,
  `M_name` varchar(25) DEFAULT NULL,
  `L_name` varchar(25) DEFAULT NULL,
  `B_dob` date DEFAULT NULL,
  `B_email` varchar(50) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `B_Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`B_ID`, `F_name`, `M_name`, `L_name`, `B_dob`, `B_email`, `user_type`, `B_Password`) VALUES
(1, 'Suneth', 'Sampath', 'Perera', '1993-10-15', 'Suneth@gmail.com', 'buyer', 'test1234'),
(2, 'Gimhana', 'Senarathna', 'Silva', '1997-12-01', 'Gimhana@gmail.com', 'buyer', 'test1234'),
(3, 'Kavindu', 'Maduranga', 'Eodanthanna', '1995-06-18', 'Kavindu@gmail.com', 'buyer', 'test1234'),
(4, 'Sameesha', 'Rashini', 'Rathnayaka', '1993-11-20', 'Sameesha@gmail.com', 'buyer', 'test1234'),
(5, 'Tharuka', 'Ekanayaka', 'Perera', '1992-07-12', 'Tharuka@gmail.com', 'buyer', 'test1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `C_ID` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Book_ID` int(11) NOT NULL,
  `B_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`C_ID`, `quantity`, `Book_ID`, `B_ID`) VALUES
(1, 2, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 3, 4, 4),
(5, 4, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(11) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `catDescription` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`, `catDescription`) VALUES
(1, 'Buddihist Book', 'This is a Category Description'),
(2, 'IT & Information Book', 'This is a Category Description'),
(3, 'Literature Book', 'This is a Category Description'),
(4, 'Novel', 'This is a Category Description'),
(5, 'Educational Book', 'This is a Category Description');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `conusID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`conusID`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Nadeesha Dilshan', 'suneth123@gmail.com', '0712345678', 'This is a message'),
(2, 'Dinushika Sewwandi', 'gimhana23@gmail.com', '0712345678', 'This is a message'),
(3, 'Kavindu Malshan', 'kavindu@gmail.com', '0712345678', 'This is a message'),
(4, 'Sameesha Rashani', 'sameesha25@gmail.com', '0712345678', 'This is a message'),
(5, 'Dilki Poornima', 'dilki123@gmail.com', '0712345678', 'This is a message');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` int(11) NOT NULL,
  `B_ID` int(11) DEFAULT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `comment` varchar(25) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Rate` int(11) DEFAULT NULL,
  `F_time` time DEFAULT NULL,
  `F_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_ID`, `B_ID`, `Book_ID`, `comment`, `Email`, `Rate`, `F_time`, `F_date`) VALUES
(1, 1, 1, 'Good', 'suneth123@gmail.com', 2, '10:30:50', '2021-01-07'),
(2, 2, 2, 'Great', 'gimhana23@gmail.com', 3, '14:40:00', '2018-12-20'),
(3, 3, 3, 'Bad', 'kavindu@gmail.com', 4, '16:13:40', '2016-07-21'),
(4, 4, 4, 'excellent', 'sameesha25@gmail.com', 1, '12:50:00', '2015-03-21'),
(5, 5, 5, 'Good', 'dilki123@gmail.com', 5, '09:10:30', '2015-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `P_ID` int(11) NOT NULL,
  `B_ID` int(11) DEFAULT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `pay_type` varchar(20) DEFAULT NULL,
  `pymntDescription` varchar(300) DEFAULT NULL,
  `P_time` time DEFAULT NULL,
  `P_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_ID`, `B_ID`, `Book_ID`, `amount`, `pay_type`, `pymntDescription`, `P_time`, `P_date`) VALUES
(1, 1, 1, 700, 'cash on delivery', 'This is a payment Description', '08:30:50', '2021-01-01'),
(2, 2, 2, 350, 'cash on delivery', 'This is a payment Description', '14:30:00', '2018-12-15'),
(3, 3, 3, 1100, 'cash on delivery', 'This is a payment Description', '16:43:40', '2016-07-12'),
(4, 4, 4, 580, 'cash on delivery', 'This is a payment Description', '12:15:00', '2015-03-14'),
(5, 5, 5, 1000, 'cash on delivery', 'This is a payment Description', '09:30:30', '2015-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `S_ID` int(11) NOT NULL,
  `F_name` varchar(25) DEFAULT NULL,
  `M_name` varchar(25) DEFAULT NULL,
  `L_name` varchar(25) DEFAULT NULL,
  `S_dob` date DEFAULT NULL,
  `S_email` varchar(50) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `S_Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`S_ID`, `F_name`, `M_name`, `L_name`, `S_dob`, `S_email`, `user_type`, `S_Password`) VALUES
(1, 'Malsha', 'Ravihari', 'perera', '1991-10-23', 'Malsha@gmail.com', 'seller', 'test1234'),
(2, 'Rashmi', 'Senarathna', 'gamage', '1999-05-06', 'Rashmi@gmail.com', 'seller', 'test1234'),
(3, 'Kosala', 'Maduranga', 'withanage', '1998-09-03', 'Kosala@gmail.com', 'seller', 'test1234'),
(4, 'Dilsha', 'Lakshani', 'bandara', '1997-02-01', 'Dilsha@gmail.com', 'seller', 'test1234'),
(5, 'Amandi', 'Pamudika', 'ekanayaka', '1992-12-01', 'Amandi@gmail.com', 'seller', 'test1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `bookCategoryID_fk` (`catID`),
  ADD KEY `bookSellerID_fk` (`S_ID`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `CartBookID_fk` (`Book_ID`),
  ADD KEY `CartB_ID_fk` (`B_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`conusID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `feedBuyerID_fk` (`B_ID`),
  ADD KEY `feedBookID_fk` (`Book_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `payBuyerID` (`B_ID`),
  ADD KEY `payBookID` (`Book_ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `conusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `bookCategoryID_fk` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`) ON DELETE SET NULL,
  ADD CONSTRAINT `bookSellerID_fk` FOREIGN KEY (`S_ID`) REFERENCES `seller` (`S_ID`) ON DELETE SET NULL;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `CartB_ID_fk` FOREIGN KEY (`B_ID`) REFERENCES `buyer` (`B_ID`),
  ADD CONSTRAINT `CartBookID_fk` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedBookID_fk` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`),
  ADD CONSTRAINT `feedBuyerID_fk` FOREIGN KEY (`B_ID`) REFERENCES `buyer` (`B_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payBookID` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`),
  ADD CONSTRAINT `payBuyerID` FOREIGN KEY (`B_ID`) REFERENCES `buyer` (`B_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

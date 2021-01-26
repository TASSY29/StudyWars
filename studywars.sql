SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studywars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `productID` char(5) COLLATE utf8_danish_ci DEFAULT NULL,
  `qty` int(11) DEFAULT '1',
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `productID`, `qty`, `userID`) VALUES
(25, 'C23', 1, 14),
(26, 'C12', 2, 17),
(27, 'C11', 3, 15);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_product`
-- (See below for the actual view)
--
CREATE TABLE `cart_product` (
`cartID` int(11)
,`ProName` varchar(125)
,`ProID` char(5)
,`Price` decimal(5,2)
,`qty` int(11)
,`userID` int(11)
);

-- --------------------------------------------------------
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productID` char(5) COLLATE utf8_danish_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProID` char(5) CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL,
  `ProName` varchar(125) NOT NULL,
  `proImages` varchar(255) DEFAULT NULL,
  `ProType` varchar(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` decimal(5,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProID`, `ProName`, `proImages`, `ProType`, `Description`, `Price`, `qty`) VALUES
('C01', 'CHOCOLATE CHIP COOKIES', '', 'COOKIES', 'CRUNCHY COOKIES WITH CHOCOLATE CHIP AND PEANUT FILLING', '9.99', 30),
('C02', 'FLOURLESS PENUT BUTTER SMORES', '', 'COOKIES', 'FLOURLESS COOKIES WITH PEANUT BUTTER TASTE', '10.00', 25),
('C03', 'RAINBOW MARCARONIES', '', 'COOKIES', 'RAINBOW MACARON WITH FRUIT TASTE FILLING INSIDE ', '15.00', 40),
('C04', 'CHIRSTMAS COOKIES','', 'COOKIES', 'CELEBRATE WINTER WITH SOME CHILLIN COOKIE. (MAY GIVE TO SANTA TOO)', '20.00', 22),
('C05', 'OREO CHUNK COOKIES','', 'COOKIES', 'OREO, EVERYONE FAVOURITE.. NOW IN COOKIES','8.00',12),
('C06', 'CHOCOLATE DIP CAKE','','CAKE', 'CELEBRATE YOUR DAY WITH SOME SOUR SWEET TREATS','45.00',3),
('C07', ''),
('C08', ),
('C09', ),
('C10', ),
('C11', ),
('C12', ),
('C13', ),
('C14', ),
('C15', ),
('C16', ),
('C17', ),
('C18', ),
('C19', ),
('C20', ),
('C21', ),
('C22', ),
('C23', ),
('C24', ),
('C25', );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `lname` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL,
  `uPassword` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL,
  `uLevel` varchar(10) COLLATE utf8_danish_ci DEFAULT 'user'
  `uAddress` varchar(225) COLLATE utf8_danish_ci DEFAULT 'Address'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fname`, `lname`, `email`, `uPassword`, `uLevel`) VALUES
(1, 'JYTas', 'Tassy', 'tassy@gmail.com', '67506', 'admin'),
(2, '', '', '', '', 'user'),
(14, '', '', '', '', 'user'),
(15, '', '', '', '', 'user'),
(16, '', '', '', '', 'user'),
(17, '', '', '', '', 'user');

-- --------------------------------------------------------

--
-- Structure for view `cart_product`
--
DROP TABLE IF EXISTS `cart_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_product`  AS  select `cart`.`cartID` AS `cartID`,`product`.`ProName` AS `ProName`,`product`.`ProID` AS `ProID`,`product`.`Price` AS `Price`,`cart`.`qty` AS `qty`,`cart`.`userID` AS `userID` from (`cart` join `product`) where (`cart`.`productID` = `product`.`ProID`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`ProID`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `users` (`userId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`ProID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

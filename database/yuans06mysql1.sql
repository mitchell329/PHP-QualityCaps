-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2017 at 09:51 AM
-- Server version: 5.7.9-log
-- PHP Version: 5.6.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuans06mysql1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cap`
--

CREATE TABLE `cap` (
  `CapID` int(11) NOT NULL,
  `CapName` varchar(50) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Price` decimal(6,2) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ImagePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cap`
--

INSERT INTO `cap` (`CapID`, `CapName`, `SupplierID`, `CategoryID`, `Price`, `Description`, `ImagePath`) VALUES
(3, 'Adidas Golf Cap Black', 1, 1, '6.00', 'The Mens adidas Golf Cap has been constructed with a peak to help keep sun out of your eyes combined with an adjustable touch and close fastener to the back for secure and comfortable fit. This adidas golf cap also features a large adidas 3-Stripes logo embroidered to the front along with a small logo to the back for a simple but stylish look.', '../images/caps/men/adidas Golf Cap-black-1.jpg'),
(4, 'Adidas Golf Cap Blue', 1, 1, '5.99', 'The Mens adidas Golf Cap has been constructed with a peak to help keep sun out of your eyes combined with an adjustable touch and close fastener to the back for secure and comfortable fit. This adidas golf cap also features a large adidas 3-Stripes logo embroidered to the front along with a small logo to the back for a simple but stylish look.', '../images/caps/men/adidas Golf Cap-blue-1.jpg'),
(5, 'Adidas Golf Cap Grey', 1, 1, '5.99', 'The Mens adidas Golf Cap has been constructed with a peak to help keep sun out of your eyes combined with an adjustable touch and close fastener to the back for secure and comfortable fit. This adidas golf cap also features a large adidas 3-Stripes logo embroidered to the front along with a small logo to the back for a simple but stylish look.', '../images/caps/men/adidas Golf Cap-grey-1.jpg'),
(6, 'Adidas Golf Cap Red', 1, 1, '5.99', 'The Mens adidas Golf Cap has been constructed with a peak to help keep sun out of your eyes combined with an adjustable touch and close fastener to the back for secure and comfortable fit. This adidas golf cap also features a large adidas 3-Stripes logo embroidered to the front along with a small logo to the back for a simple but stylish look.', '../images/caps/men/adidas Golf Cap-red-1.jpg'),
(7, 'Adidas Golf Cap Royal', 1, 1, '5.99', 'The Mens adidas Golf Cap has been constructed with a peak to help keep sun out of your eyes combined with an adjustable touch and close fastener to the back for secure and comfortable fit. This adidas golf cap also features a large adidas 3-Stripes logo embroidered to the front along with a small logo to the back for a simple but stylish look.', '../images/caps/men/adidas Golf Cap-royal-1.jpg'),
(8, 'Nike Met Swoosh Cap Black', 2, 1, '9.99', 'The Nike Metal Swoosh Cap offers a comfortable fit with ventilated air holes across the outer coupled with an adjustable buckled rear strap. This Nike cap is available in a selection of colours with a simple style featuring a Nike swoosh badge to the left side.', '../images/caps/men/Nike Met Swoosh Cap Junior-black-1.jpg'),
(9, 'Nike Met Swoosh Cap Navy', 2, 1, '9.99', 'The Nike Metal Swoosh Cap offers a comfortable fit with ventilated air holes across the outer coupled with an adjustable buckled rear strap. This Nike cap is available in a selection of colours with a simple style featuring a Nike swoosh badge to the left side.', '../images/caps/men/Nike Met Swoosh Cap Junior-navy-1.jpg'),
(10, 'Nike Met Swoosh Cap White', 2, 1, '9.99', 'The Nike Metal Swoosh Cap offers a comfortable fit with ventilated air holes across the outer coupled with an adjustable buckled rear strap. This Nike cap is available in a selection of colours with a simple style featuring a Nike swoosh badge to the left side.', '../images/caps/men/Nike Met Swoosh Cap Junior-white-1.jpg'),
(11, 'No Fear Army Hat Black', 3, 1, '5.99', 'This No Fear Army Hat is a military style cap that looks great for everyday wear. The cap features a structured peak. with stitched detail, metal eyelets for ventilation and is finished with No Fear branding to the trim. The hook and loop tape fastening to the back offers a comfortable fit.', '../images/caps/men/No Fear Army Hat-black-1.jpg'),
(12, 'No Fear Army Hat Grey', 3, 1, '5.99', 'This No Fear Army Hat is a military style cap that looks great for everyday wear. The cap features a structured peak. with stitched detail, metal eyelets for ventilation and is finished with No Fear branding to the trim. The hook and loop tape fastening to the back offers a comfortable fit.', '../images/caps/men/No Fear Army Hat-grey-1.jpg'),
(13, 'Under Armour Blitzing Mens Blue', 4, 1, '12.21', 'Look great with ease in everyday casual style wearing the Under Armour Blitzing Mens Cap! The Under Armour Blitzing Mens Cap features the classic cap look and feel with a curved peak and top button surrounded by vent holes.', '../images/caps/men/Under Armour Blitzing Mens Cap-blue-1.jpg'),
(14, 'Under Armour Blitzing Mens Grey', 4, 1, '12.21', 'Look great with ease in everyday casual style wearing the Under Armour Blitzing Mens Cap! The Under Armour Blitzing Mens Cap features the classic cap look and feel with a curved peak and top button surrounded by vent holes.', '../images/caps/men/Under Armour Blitzing Mens Cap-grey-1.jpg'),
(15, 'Under Armour Blitzing Mens Navy', 4, 1, '12.21', 'Look great with ease in everyday casual style wearing the Under Armour Blitzing Mens Cap! The Under Armour Blitzing Mens Cap features the classic cap look and feel with a curved peak and top button surrounded by vent holes.', '../images/caps/men/Under Armour Blitzing Mens Cap-navy-1.jpg'),
(16, 'Under Armour Blitzing Mens Red', 4, 1, '12.21', 'Look great with ease in everyday casual style wearing the Under Armour Blitzing Mens Cap! The Under Armour Blitzing Mens Cap features the classic cap look and feel with a curved peak and top button surrounded by vent holes.', '../images/caps/men/Under Armour Blitzing Mens Cap-red-1.jpg'),
(17, 'Under Armour Blitzing Mens White', 4, 1, '12.21', 'Look great with ease in everyday casual style wearing the Under Armour Blitzing Mens Cap! The Under Armour Blitzing Mens Cap features the classic cap look and feel with a curved peak and top button surrounded by vent holes.', '../images/caps/men/Under Armour Blitzing Mens Cap-white-1.jpg'),
(18, 'Adidas Stripe Baseball Ladies Pink', 1, 2, '8.99', 'Stay sun savvy in style in this adidas Performance 3 Stripe Baseball Cap, in a six panel design, the back four being flexible, with an adjustable strap, curved peak hosting colour contrasting embroidered three stripe branding, plus embroidered logo branding to the front. Internally sits a sweatband to the forehead.', '../images/caps/women/adidas Stripe Baseball Ladies-pink.jpg'),
(19, 'Firetrap Offense Cap Ladies Grey', 5, 2, '4.50', 'This Firetrap Offense Cap is a stylish construction that is crafted from a coloured canvas for a simple but stylish look. A adjustable strap fastening is designed at the back of the cap for a secure, customised fitting. Ventilation eyelets promote a breathable feel when wearing. Firetrap branding is situated on the front of the cap to complete the look.', '../images/caps/women/Firetrap Offense Cap Ladies-grey-1.jpg'),
(20, 'Firetrap Offense Cap Ladies Navy', 5, 2, '4.50', 'This Firetrap Offense Cap is a stylish construction that is crafted from a coloured canvas for a simple but stylish look. A adjustable strap fastening is designed at the back of the cap for a secure, customised fitting. Ventilation eyelets promote a breathable feel when wearing. Firetrap branding is situated on the front of the cap to complete the look.', '../images/caps/women/Firetrap Offense Cap Ladies-navy-1.jpg'),
(21, 'Firetrap Offense Cap Ladies Phantom', 5, 2, '4.50', 'This Firetrap Offense Cap is a stylish construction that is crafted from a coloured canvas for a simple but stylish look. A adjustable strap fastening is designed at the back of the cap for a secure, customised fitting. Ventilation eyelets promote a breathable feel when wearing. Firetrap branding is situated on the front of the cap to complete the look.', '../images/caps/women/Firetrap Offense Cap Ladies-phantom-1.jpg'),
(22, 'Lonsdale Bond Ladies Blue', 6, 2, '4.50', 'Add a Lonsdale cap to your wardrobe that benefits from a sturdy peak, breathable air holes to the upper and an adjustable hook and loop tape fastening for a comfortable fit. This is all finished off with the Lonsdale logos and a check design for a recognisable look that also provides instant brand recognition.', '../images/caps/women/Lonsdale Bond Ladies-blue-1.jpg'),
(23, 'Lonsdale Bond Ladies Lilac', 6, 2, '4.50', 'Add a Lonsdale cap to your wardrobe that benefits from a sturdy peak, breathable air holes to the upper and an adjustable hook and loop tape fastening for a comfortable fit. This is all finished off with the Lonsdale logos and a check design for a recognisable look that also provides instant brand recognition.', '../images/caps/women/Lonsdale Bond Ladies-lilac-1.jpg'),
(24, 'Nike Feather Visor Ladies Black', 2, 2, '12.21', 'This Nike Feather Visor is a lightweight construction that features Dri Fit technology to provide you with a cool, dry feeling by drawing sweat away from the body. A curved peak is teamed with a stretchy head fit band to offer a comfortable, secure fit. A Nike Swoosh is printed on the front to complete the look.', '../images/caps/women/Nike Feather Visor Ladies-black-1.jpg'),
(25, 'Nike Feather Visor Ladies Pink', 2, 2, '12.21', 'This Nike Feather Visor is a lightweight construction that features Dri Fit technology to provide you with a cool, dry feeling by drawing sweat away from the body. A curved peak is teamed with a stretchy head fit band to offer a comfortable, secure fit. A Nike Swoosh is printed on the front to complete the look.', '../images/caps/women/Nike Feather Visor Ladies-pink-1.jpg'),
(26, 'Nike Feather Visor Ladies White', 2, 2, '12.21', 'This Nike Feather Visor is a lightweight construction that features Dri Fit technology to provide you with a cool, dry feeling by drawing sweat away from the body. A curved peak is teamed with a stretchy head fit band to offer a comfortable, secure fit. A Nike Swoosh is printed on the front to complete the look.', '../images/caps/women/Nike Feather Visor Ladies-white-1.jpg'),
(27, 'No Fear NY Cap Ladies Grey', 3, 2, '4.50', 'Ideal for the sunny weather, this No Fear cap has a sturdy peak to shield your eyes, breathable air holes and an adjustable hook and loop tape strap for a close fit.', '../images/caps/women/No Fear NY Cap Ladies-grey-1.jpg'),
(28, 'No Fear NY Cap Ladies White', 3, 2, '4.50', 'Ideal for the sunny weather, this No Fear cap has a sturdy peak to shield your eyes, breathable air holes and an adjustable hook and loop tape strap for a close fit.', '../images/caps/women/No Fear NY Cap Ladies-white-1.jpg'),
(29, 'Under Armour Solid Ladies Black', 4, 2, '12.21', 'This Under Armour Armour Solid Ladies Cap offers a great look thanks to the Under Armour branding to the front, whilst the lightweight construction helps keep this hat breathable for amore comfort. An adjustable buckle to back provides an adjustable fit for all, a pre curved peak helps keep the sun out of your eyes.', '../images/caps/women/Under Armour Solid Ladies-black-1.jpg'),
(30, 'Under Armour Solid Ladies Pink', 4, 2, '12.21', 'This Under Armour Armour Solid Ladies Cap offers a great look thanks to the Under Armour branding to the front, whilst the lightweight construction helps keep this hat breathable for amore comfort. An adjustable buckle to back provides an adjustable fit for all, a pre curved peak helps keep the sun out of your eyes.', '../images/caps/women/Under Armour Solid Ladies-pink-1.jpg'),
(31, 'Under Armour Solid Ladies White', 4, 2, '12.21', 'This Under Armour Armour Solid Ladies Cap offers a great look thanks to the Under Armour branding to the front, whilst the lightweight construction helps keep this hat breathable for amore comfort. An adjustable buckle to back provides an adjustable fit for all, a pre curved peak helps keep the sun out of your eyes.', '../images/caps/women/Under Armour Solid Ladies-white-1.jpg'),
(32, 'Character Flat peak Juniors Batman', 9, 3, '4.50', 'Character Flat peak Juniors-batman', '../images/caps/children/Character Flat peak Juniors-batman-1.jpg'),
(33, 'Golddigga Snapback Cap Grey', 8, 3, '5.99', 'The Golddigga Snapback Cap Girls offers a stylish and stand out look whilst also ensuring you remain protected from the sun on hotter summer days. The caps features a detailed stitched pattern on the front for a great look and Goldigga branding on the side. The cap features an adjustable fastening on the back of the top for a secure fit.', '../images/caps/children/Golddigga Snapback Cap Girls-mint-1.jpg'),
(34, 'Golddigga Snapback Cap Pink', 8, 3, '5.99', 'The Golddigga Snapback Cap Girls offers a stylish and stand out look whilst also ensuring you remain protected from the sun on hotter summer days. The caps features a detailed stitched pattern on the front for a great look and Goldigga branding on the side. The cap features an adjustable fastening on the back of the top for a secure fit.', '../images/caps/children/Golddigga Snapback Cap Girls-pink-1.jpg'),
(35, 'No Fear Necro Snapback Black', 3, 3, '5.99', 'Top off your outfit with this No Fear Necro Junior Snapback Cap, this cap features a snapback adjustable fit which provides comfort for all, a flat peak provides a fashionable on trend look and also helps keeps the sun out of your eyes. This hat consists of six panel design with a studded top for a regular look, finished off with No fear branding that provides a great look and also offers instant brand recognition.', '../images/caps/children/No Fear Necro Snapback Boys-1.jpg'),
(36, 'test cap', 9, 4, '4.99', 'This is a test.', '../images/caps/friday/SmallRape.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Children'),
(4, 'friday');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Subtotal` decimal(8,2) NOT NULL,
  `GST` decimal(8,2) NOT NULL,
  `GrandTotal` decimal(8,2) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderID`, `CustomerID`, `Subtotal`, `GST`, `GrandTotal`, `Status`) VALUES
(1, 1, '23.97', '3.60', '27.57', 'shipped'),
(2, 1, '17.97', '2.70', '20.67', 'shipped'),
(3, 1, '36.17', '5.43', '41.60', 'waiting'),
(4, 1, '11.98', '1.80', '13.78', 'waiting'),
(5, 3, '11.98', '1.80', '13.78', 'waiting'),
(6, 7, '12.21', '1.83', '14.04', 'waiting'),
(7, 8, '5.99', '0.90', '6.89', 'shipped');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `OrderID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`OrderID`, `ItemID`, `Quantity`) VALUES
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(2, 6, 1),
(2, 12, 2),
(3, 12, 4),
(3, 26, 1),
(4, 12, 1),
(4, 35, 1),
(5, 12, 1),
(5, 35, 1),
(6, 13, 1),
(7, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(20) NOT NULL,
  `HomePhone` varchar(20) DEFAULT NULL,
  `WorkPhone` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupplierID`, `SupplierName`, `HomePhone`, `WorkPhone`, `Mobile`, `Email`) VALUES
(1, 'Adidas', NULL, '000000', NULL, 'adidas@adidas.com'),
(2, 'Nike', '123456', NULL, NULL, 'email@nike.com'),
(3, 'No Fear', NULL, '654321', NULL, 'nofear@nofear.com'),
(4, 'Under Armour', NULL, '654321', NULL, 'underarmour@underarmour.com'),
(5, 'Firetrap', NULL, '654321', NULL, 'firetrap@firetrap.com'),
(6, 'Lonsdale', NULL, '654321', NULL, 'email@lonsdale.com'),
(7, 'DC Comics', NULL, '654321', NULL, 'email@email.com'),
(8, 'Golddigga', NULL, '654321', NULL, 'email@email.com'),
(9, 'Miso', NULL, '111111', NULL, 'email@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `HomePhone` varchar(20) DEFAULT NULL,
  `WorkPhone` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `HomePhone`, `WorkPhone`, `Mobile`, `Email`, `Address`, `Enabled`) VALUES
(1, 'test', '0000', '1', '', '', 'test@e.com', '', 1),
(2, 'EmailTest', '0000', '1', '', '', 'yuanshuai329@gmail.com', '', 0),
(3, 'LogTest', '0000', '1', '', '', 'yuanshuai329@gmail.com', '', 1),
(4, 'LogTest2', '0000', '1', '', '', 'yuanshuai329@gmail.com', '', 1),
(5, 'test2', '0000', '1', '', '', 'yuanshuai329@gmail.com', '', 0),
(6, 'LogTest3', '0000', '1', '', '', 'yuanshuai329@gmail.com', '', 1),
(7, 'admin', 'admin', '1', '', '', 'yuanshuai329@gmail.com', 'UNITEC', 1),
(8, 'xiaosong', 'password', '', '8154321', '', 'xli@unitec.ac.nz', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cap`
--
ALTER TABLE `cap`
  ADD PRIMARY KEY (`CapID`),
  ADD KEY `SupplierID` (`SupplierID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`OrderID`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cap`
--
ALTER TABLE `cap`
  MODIFY `CapID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cap`
--
ALTER TABLE `cap`
  ADD CONSTRAINT `cap_ibfk_1` FOREIGN KEY (`SupplierID`) REFERENCES `supplier` (`SupplierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cap_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `order` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `cap` (`CapID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

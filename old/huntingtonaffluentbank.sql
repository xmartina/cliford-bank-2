-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2021 at 07:48 PM
-- Server version: 10.3.29-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affluen9_mfb`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `id` int(11) NOT NULL,
  `benname` varchar(100) NOT NULL,
  `benaccnt` varchar(100) NOT NULL,
  `benbank` varchar(100) NOT NULL,
  `benno` varchar(100) NOT NULL,
  `benamt` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `activated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `benname`, `benaccnt`, `benbank`, `benno`, `benamt`, `owner`, `activated`) VALUES
(905, 'Testing Frozen Account', '12334638', 'AnyBank', '82528', '100', 'demo', ''),
(906, 'Here, bank asks for COT and the likes code', '7151915181', 'Take a look', '71628', '600', 'demo', ''),
(908, 'Maria espitia', '477524458', 'First National bank ', '111906271', '18,000', 'Garytt', ''),
(909, 'Barbara davis', '241279616', 'superior credit union inc', '1200000192703', '300,000', 'Garytt', ''),
(910, 'Maria Espinoza', '1200000192703', 'Superior Credit Union Inc', 'rtng', '4,000.00', 'Garytt', ''),
(911, 'Patricia Helen', '3047167933', 'Providus Bank', '62727373', '8,000', 'demo', '');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `pin`) VALUES
(1, '0009');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `account` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `cot` varchar(100) NOT NULL,
  `imf` varchar(100) NOT NULL,
  `vat` varchar(100) NOT NULL,
  `ncc` varchar(100) NOT NULL,
  `fc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `account`, `client`, `cot`, `imf`, `vat`, `ncc`, `fc`) VALUES
(73, '7151915181', 'Here, bank asks for COT and the likes code', '5657', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transact`
--

CREATE TABLE `transact` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `datas` varchar(100) NOT NULL,
  `transid` varchar(100) NOT NULL,
  `details` varchar(300) NOT NULL,
  `withdraw` varchar(100) NOT NULL,
  `deposit` varchar(100) NOT NULL,
  `rbal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transact`
--

INSERT INTO `transact` (`id`, `userid`, `datas`, `transid`, `details`, `withdraw`, `deposit`, `rbal`) VALUES
(153, 'demo', '15/05/2021', '64129427241', 'Online Transfer of $35,400.00 from account xxxxxx6789 to <em>Nettie</em>, <b>01619161</b>', '$35,400.00', '', '$34,600'),
(154, 'demo', '16/05/2021', '20963572875', 'FAB-Inter Bank Transfer of $.00 from account xxxxxx6789 to account <em></em>, <b></b>', '$.00', '', '$34,600'),
(155, 'demo', '16/05/2021', '20963572875', 'FAB-Inter Bank Transfer of $.00 from account xxxxxx6789 by <em></em>, <b></b>', '$.00', '', '$34,600'),
(156, 'demo', '16/05/2021', '20963572875', 'Online Transfer of $.00 from account xxxxxx6789 by <em></em>, <b></b>', '$.00', '', '$34,600'),
(157, '', '16/05/2021', '76566469467', 'FAB-Inter Bank Transfer of $.00 from account xxxxxx6789 to <em></em>, <b></b>', '$.00', '', '$34,600'),
(158, '', '16/05/2021', '76566469467', 'Online Transfer of $.00 from account xxxxxx6789 to <em></em>, <b></b>', '$.00', '', '$34,600'),
(159, '', '16/05/2021', '76566469467', 'Card Payment of $.00 from account xxxxxx6789 to <em></em>, <b></b>', '$.00', '', '$34,600'),
(160, 'demo', '16/05/2021', '69328931423', 'Online Transfer of $.00 from account xxxxxx6789 by <em></em>, <b></b>', '$.00', '', '$34,600'),
(161, 'demo', '16/05/2021', '38953845018', 'Online Transfer of $700.00 from account ending xxxxxx6789 by <em>Ayodeji</em>, <b>715191618</b>', '$700.00', '', '$33,900'),
(162, 'demo', '16/05/2021', '61646685125', 'ACH Transfer of $5,000.00 from account xxxxxx6789 to <em>Paul Fisher </em>, <b>1234567890</b>', '$5,000.00', '', '$28,900'),
(163, 'Garytt', '17/05/2021', '1133242578', 'Check Deposit of $38000000 to account XXXXXX2578', '', '$38000000', '$38000000'),
(164, 'Garytt', '17/05/2021', '1133242578', 'Wire Transfer of $100000 from account XXXXXX2578', '100000', '', '38000000'),
(165, 'Garytt', '17/05/2021', '1133242578', 'Check Deposit of $20000 to account XXXXXX2578', '', '20000', '38000000'),
(166, 'Garytt', '17/05/2021', '1133242578', 'Mobile Deposit Of $40000 to account XXXXXX2578', '', '40000', '38000000'),
(167, 'Garytt', '17/05/2021', '1133242578', 'Direct Deposit of $40000 to account XXXXXX2578', '', '40000', '38000000'),
(168, 'Garytt', '17/05/2021', '49778771507', 'Online Transfer of $18,000.00 from account ending xxxxxx2578 to account <em>Maria espitia</em>, <b>477524458</b>', '$18,000.00', '', '$37,982,000'),
(169, 'Garytt', '17/05/2021', '5691224430', 'Card Payment of $300,000.00 from account ending xxxxxx2578 to account <em>Barbara davis</em>, <b>241279616</b>', '$300,000.00', '', '$37,682,000'),
(170, 'mfallant', '22/01/2021', '7589284092', '', '', '', '87,950,329'),
(171, 'Garytt', '26/05/2021', '31213571778', 'Huntington Bank Transfer of $4,000.00.00 from account xxxxxx2578 to <em>Maria Espinoza</em>, <b>1200000192703</b>', '$4,000.00.00', '', '$37,282,000'),
(172, 'demo', '30/05/2021', '85466016901', 'MFBOnline Transfer of $8,000.00 from account xxxxxx6789 to [Providus Bank] Patricia Helen, 3047167933.', '$8,000.00', '$0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `accnt` varchar(100) NOT NULL,
  `accntt` varchar(100) NOT NULL,
  `cur` varchar(100) NOT NULL,
  `bal` varchar(100) NOT NULL,
  `balstatus` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `phn` varchar(100) NOT NULL,
  `accnttype` varchar(100) NOT NULL,
  `image_location` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `activated` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `cardtype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fname`, `lname`, `accnt`, `accntt`, `cur`, `bal`, `balstatus`, `address`, `dob`, `country`, `nation`, `phn`, `accnttype`, `image_location`, `user_type`, `pin`, `activated`, `status`, `num`, `cvv`, `exp`, `cardtype`) VALUES
(10, 'cyber', '', 'b016af4dc3fcc9958c61b9c8b3c9d229', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', '', '', '', '', '', ''),
(16, 'net', 'ecampusceo@gmail.com', '40fa73c9d0083043c6576dd2b40511e4', 'Ayodeji', 'Abayomi', '3047167933', '7933', '$', '9000', '', 'Ijasan', '', 'NG', 'Nigerian', '08145822527', 'savings', '16.jpg', 'admin', '9090', 'yes', '', '', '', '', ''),
(594, 'demo', 'net@me.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Shina', 'Ayomi', '0123456789', '6789', '$', '20,900', 'Available Balance', '103 birds nest rd steelville, mo 65566', '01/01/20', 'United States', 'American', '6519161916', 'Savings', 'favicon (4).ico', 'user', '0000', 'yes', 'Active', '5399 9161 0021 8151', '827', '03/24', 'VISA'),
(595, 'Garytt', 'Garytt444@gmail.com', 'beab4d1e491ff89ed27d676e9301d998', 'Gary', 'Tommasson', '1133242578', '2578', '$', '37,282,000', 'FROZEN', '6405 Chesterfield Ave UNIT B Austin, TX 78752', '04-04-1957', 'Austin', 'Texas', '(512) 734-8932', 'Savings', 'Gary Tommasson.jpeg', 'user', '4444', 'yes', 'Suspended', '5399 4328 0066 1906', '524', '05/24', 'MASTER'),
(596, 'mfallant', ' gmatheworge@gmail.com', 'fa83d706bfb8e19559ebc1ac6baf1f49', 'Matthew', 'Fallan', '2145676349', '6349', '$', '19,000,476', 'Available Balance', '334 Date Ave, Carlsbad, CA 92008', '01/22/1958', 'USA', 'USA', '(818)Â 860-1725', 'Checkings', 'waeed.jpeg', 'user', '0805', 'yes', 'Active', '5399729134239892', '872', '2024', 'MASTER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transact`
--
ALTER TABLE `transact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=912;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `transact`
--
ALTER TABLE `transact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=597;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 07:08 AM
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
-- Database: `db4485ahtiigzv`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'imran', 'imran@sociapa.com', '1234567890', 'hello', '2021-12-07'),
(2, 'imran', 'imran@sociapa.com', '1234567890', 'hello', '2021-12-07'),
(3, 'imran', 'imran@sociapa.com', '1234567890', 'hello', '2021-12-07'),
(4, 'imran', 'imran@sociapa.com', '1234567890', 'hello', '2021-12-07'),
(5, 'ssdsd', 'sdsd@dfdfd', '4343434343434343434343434', '343434', '2021-12-07'),
(6, 'ssdsd', 'sdsd@dfdfd', '4343434343434343434343434', '343434', '2021-12-07'),
(7, 'ssdsd', 'sdsd@dfdfd', '4343434343434343434343434', '343434', '2021-12-07'),
(8, 'ssdsd', 'sdsd@dfdfd', '4343434343434343434343434', '343434', '2021-12-07'),
(9, 'sonakshi', 'sonakshi@gmaill.com', '3434343434343434', 'dfdf', '2021-12-07'),
(10, 'sonakshi', 'sonakshi@gmaill.com', '3434343434343434', 'dfdf', '2021-12-07'),
(11, 'sonakshi', 'sonakshi@gmaill.com', '3434343434343434', 'dfdf', '2021-12-07'),
(12, 'Aman', 'khanparvez7744@gmail.com', '123', 'Wrr', '2021-12-07'),
(13, 'simar', 'siamr@yahoo.com', '3343434', 'rere', '2021-12-07'),
(14, 'simar', 'siamr@yahoo.com', '3343434', 'rere', '2021-12-07'),
(15, 'zakir', 'z@d', '33', '3', '2021-12-07'),
(16, 'zakir', 'z@d', '33', '3', '2021-12-07'),
(17, 'zakir', 'z@d', '33', '3', '2021-12-07'),
(18, 'abdul', 'abdul@fgfg', '343', 'abdul', '2021-12-07'),
(19, 'abdul', 'abdul@fgfg', '343', 'abdul', '2021-12-07'),
(20, 'manisha', 'manisha@dfdf', '343', 'manisha', '2021-12-07'),
(21, 'Aman', 'khanparvez7744@gmail.com', '123', 'Wrr', '2021-12-07'),
(22, 'Aman', 'khanparvez7744@gmail.com', '123', 'Wrr', '2021-12-07'),
(23, 'Nazim', 'n@a', '1', 'a', '2021-12-07'),
(24, 'Nazim', 'n@a', '1', 'a', '2021-12-07'),
(25, 'Ali', 'ali@dfdf', '2', '2', '2021-12-07'),
(26, 'roshan', 'r@s', '1', '1', '2021-12-07'),
(27, 'pari', 'pari@gmail.com', '9874563210', 'hey its me', '2021-12-07'),
(28, 'Pintu Khan', 'pinky@sociapa.com', '08052837744', 'its from pinky', '2021-12-07'),
(29, 'imran', 'imran@gmail.com', '7458963210', 'khan bhai', '2021-12-07'),
(30, 'naggan khala', 'nagga@gmail.com', '7896523014', 'parvez babu pharm m ghore', '2021-12-07'),
(31, 'wasim', 'wasim@gmail.com', '1232323', 'dffd', '2021-12-07'),
(32, 'Amir', 'yuu@ghh', '266', 'Chh', '2021-12-15'),
(33, 'Imran Hashmi', 'hasmi@yahoo.com', '1234567890', 'hello', '2021-12-21'),
(34, 'Wasim Khan', 'khan@gmail.com', '9876543212', 'hello', '2021-12-21'),
(35, 'emma', 'emma@gmail.com', '9745632100', 'hell', '2021-12-27'),
(36, 'parvez', 'pari@gmail.com', '9874563210', 'hi parvez!', '2021-12-27'),
(37, 'Sonakshai', 'Sonakshai@yahoo.com', '11111111', 'hello', '2021-12-27'),
(38, 'Sagar Grover', 'sgrgrover@gmail.com', '9999599440', 'Interested in E-commerce fulfilment services', '2022-01-21'),
(39, 'ss', 'sss@ddd', '8012345678', 'hello', '2022-02-04'),
(40, 'salaman', 'salman@gmail.com', '9876543216', 'Tech support', '2022-02-12'),
(41, 'Ajit Kumar', 'ajitkumarch183@gmail.com', '032 971 72 30', 'Invitation from your Chamber of Commerce\r\n\r\nYou are cordially invited to participate in our India Community Hub Online Mixer hosted by the Chamber of Commerce.\r\n\r\nThis is an important event for any senior executive looking to expand their business, access new capital and/or acquire new customers.\r\n\r\nDate: Friday, 25th February 2022.\r\n\r\nTime: 2:30pm - 3:30pm (India Time)\r\n\r\nFormat: Online -- Free to attend.\r\n\r\nRegistration & Event Link: https://bit.ly/3oVgKuO\r\n\r\nThe India Online Community Hub is ', '2022-02-17'),
(42, 'Susan Cook', 'susancookcali@gmail.com', '0681 275 47 25', 'DOMAIN NAMES FOR SALE\r\nPlease visit the sites directly to bid.\r\n\r\nhttps://www.dnew.org  <- super rare 4 letter domain\r\n\r\nhttps://www.n95facemasks.org\r\nhttps://www.surgicalfacemasks.org\r\nhttps://www.surgicalfacemasks.net\r\n\r\nhttps://www.formationsexpert.com\r\nhttps://www.theseriousstartup.com\r\nhttps://www.theseriousstartup.net\r\nhttps://www.theseriousstartup.org\r\n\r\nPlease visit the sites to bid.\r\nBids close this week\r\n', '2022-02-19'),
(43, 'Jeevan Aggarwal', 'jeevan@thinkglobalconferenceindia.org', '561-518-3284', 'INVITATION\r\n\r\nEvent: India Exporter / Importer Virtual Meetup / Chamber of Commerce Meetup\r\n\r\nDate: Friday, 25th February 2022\r\n\r\nTime: 2:30pm India Time\r\n\r\nEvent & Registration Link: https://bit.ly/3oVgKuO\r\n\r\nFormat: Online / Free of Charge\r\n\r\nPLEASE REGISTER PRIOR TO ATTENDING\r\n\r\nThis event is a mixer and free event held by the chamber of commerce / trade council.\r\n\r\nAgenda:\r\nHow to locate customers in new markets.\r\nParticipating in national (India wide) and international tenders.\r\nComplaince ', '2022-02-22'),
(44, 'Amit Mehra', 'amit.mehra.9384@gmal.com', '', 'INVITATION / EVENT REMINDER - Please register today\r\n\r\nWebinar: How to Establish a USA tax-free Company for Foreign, Non-resident Owners\r\n\r\nDate: Tuesday, 1st March 2022\r\n\r\nTime: Â 11am (UAE) / 12:30 (midday) (India) / 3pm (Singapore / HK / China / Ph)\r\n\r\nFormat: Online live event\r\n\r\nRegistration and Attendee Link: https://www.runtheworld.today/app/invitation/40459\r\n\r\nThe worldâ€™s workforce shiftedâ€¯to aâ€¯remoteâ€¯settingâ€¯practically overnight,â€¯andâ€¯companies reexaminedâ€¯how well they f', '2022-02-25'),
(45, 'parvez', 'parvez@parvez.parvez', 'parvez', 'parvez', '2022-03-07'),
(46, 'a', 'a@a', 'a', 'a', '2022-03-07'),
(47, 'a', 'a@a', 'a', 'a', '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(20) NOT NULL,
  `visits` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `visits`) VALUES
(1, 6170);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

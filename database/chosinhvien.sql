-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 05:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sachcuhue`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES
(12, 'Admin', '', 'admin@gmail.com', '01645197864', 'f455722356e931497b8582811cc7fb17'),
(99, 'Tester', '', 'test@gmail.com', '01232189312', 'f455722356e931497b8582811cc7fb17');

-- --------------------------------------------------------

--
-- Table structure for table `postads`
--

CREATE TABLE `postads` (
  `id` int(11) NOT NULL,
  `user` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_member` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postads`
--

INSERT INTO `postads` (`id`, `user`, `time`, `title`, `id_member`, `content`, `price`, `address`, `contact`, `category`, `img_1`, `img_2`, `img_3`, `img_4`) VALUES
(217, 'Việt Bùi', '23:35 12-04-2017', 'Kích Hoạt Tài Năng Bán Hàng', '12', 'Kích Hoạt Tài Năng Bán Hàng\r\n\r\nCuốn sách này dành cho những ai muốn thay đổi khả năng bán hàng để tạo ra bước đột phá doanh số cao nhất.\r\n\r\nTất cả chúng ta đều là người bán hàng. Nhưng không phải ai cũng có được một tài năng bán hàng như nhau. Trước hết, để trở thành một chuyên gia bán hàng xuất sắc bạn cần phải có niềm đam mê, tận tâm và nỗ lực thì mới có thể chiến thắng và thuyết phục những khách hàng khó tính nhất. Để làm điều này, không phải bạn không có tố chất hay năng lực về bán hàng mà là bạn chưa có cơ hội để kích hoạt tiềm năng của chính bản thân mình. Với cuốn sách Kích Hoạt Tài Năng Bán Hàng sẽ là một bản đồ hướng dẫn thông minh, khai mở và phát huy tài năng bán hàng trong bạn, vẽ lối và chỉ dẫn bạn đến đúng đích điểm để chinh phục và chiến thắng.', 57000, 'ĐH Kinh Te', 'Bùi Đức Việt - 01648176040', 'Sách kinh tế', 'data/kichhoattainangbanhang1.u2469.d20161117.t155504.616435.jpg', 'data/kichhoatbanhang.u2469.d20161117.t155504.493728.jpg', 'data/default-image.jpg', 'data/default-image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `postads`
--
ALTER TABLE `postads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `postads`
--
ALTER TABLE `postads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

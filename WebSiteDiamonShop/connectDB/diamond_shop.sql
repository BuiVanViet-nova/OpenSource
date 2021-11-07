-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 07, 2021 at 04:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamond_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`, `display_name`) VALUES
(1, 'admin', '123', 'Việt');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `description`) VALUES
(1, 'Đồng hồ', NULL),
(2, 'Vòng tay', NULL),
(3, 'Nhẫn', NULL),
(4, 'Dây chuyền', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infomation`
--

CREATE TABLE `infomation` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa` int(11) NOT NULL,
  `lop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infomation`
--

INSERT INTO `infomation` (`name`, `hobby`, `age`, `phone`, `address`, `khoa`, `lop`, `content`) VALUES
('Bùi Văn Việt (bí danh: không có)', 'Chơi bóng đá, nấu ăn, thể dục thể thao, ca hát, du lịch và khám phá', 21, '0382956496', 'Thị xã Ninh Đa, huyện Ninh Hòa, tỉnh Khánh Hòa', 60, 'CNTT-2', 'Là con người với thái độ nhiệt tình, năng động, luôn cố gắng hết sức mình trong công việc, học hỏi nhanh, làm việc có tổ chức, có tính toán. <br> - Điểm mạnh lớn nhất của tôi là quan tâm tới từng chi tiết. Tính năng này đã giúp tôi rất nhiều trong lĩnh vực này. <br> Tôi luôn là  1 trưởng nhóm tuyệt vời. Tôi khá giỏi trong việc duy trì công việc trong nhóm để đạt kết quả tốt nhất. <br> - Về điểm yếu: Điểm yếu của tôi là vẫn chưa có 1 định hướng chính xác cho tương lai bởi tôi là người muốn hoàn thành càng nhiều càng tốt. Tôi nhân ra điều này làm tổn hại đến chất lượng và tôi đang tìm kiếm sự cân bằng giữa chất lượng và số lượng.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `note`, `status`, `address`, `phone`) VALUES
(4, 14, 'dấdasd', NULL, 'Ninh Đa, Ninh Hòa', '382952222'),
(5, 21, '123', NULL, 'Ninh Đa, Ninh Hòa', '382952222');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` bigint(11) NOT NULL,
  `quanlity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_product`, `quanlity`, `price`) VALUES
(4, 37, 1, 200000),
(5, 39, 1, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `id_category` int(11) NOT NULL,
  `sizes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_category`, `sizes`, `name`, `img`, `price`, `title`, `details`, `created_date`, `updated_date`) VALUES
(36, 1, 'L,M,S', 'Manicure & Pedicure', 'a.jpg', 20000, 'Nowadays the lingerie industry is one of the most successful business spheres. Nowadays the lingerie industry is one of ...', '<div class=\"tab-pane fade active in\" id=\"home\">\r\n			  <h4>Product Information</h4>\r\n                <table class=\"table table-striped\">\r\n				<tbody>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Color:</td><td class=\"techSpecTD2\">Black</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Style:</td><td class=\"techSpecTD2\">Apparel,Sports</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Season:</td><td class=\"techSpecTD2\">spring/summer</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Usage:</td><td class=\"techSpecTD2\">fitness</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Sport:</td><td class=\"techSpecTD2\">122855031</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Brand:</td><td class=\"techSpecTD2\">Shock Absorber</td></tr>\r\n				</tbody>\r\n				</table>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n\r\n			</div>', '2020-04-09 11:38:43', '2020-04-09 11:47:31'),
(37, 1, 'L,S,M', 'Name', 'aaa.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(38, 1, 'L,S,M', 'Name', 'bbb.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(39, 1, 'L,S,M', 'Name', 'ccc.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(40, 1, 'L,S,M', 'Name', 'ddd.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(41, 1, 'L,S,M', 'Name', 'eee.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(42, 1, 'L,S,M', 'Name', 'fff.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(43, 2, 'L,S,M', 'Name', 'b.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(44, 2, 'L,S,M', 'Name', 'c.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(45, 2, 'L,S,M', 'Name', 'aa.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(46, 2, 'L,S,M', 'Name', 'bb.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(47, 2, 'L,S,M', 'Name', 'cc.png', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(48, 2, 'L,S,M', 'Name', 'dd.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(49, 2, 'L,S,M', 'Name', 'ee.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(50, 3, 'L,S,M', 'Name', 'd.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(51, 3, 'L,S,M', 'Name', 'e.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(52, 3, 'L,S,M', 'Name', 'g.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(53, 3, 'L,S,M', 'Name', 'j.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(54, 3, 'X', 'Name', 'z.png', 200000, 'tital', 'details', '2020-04-09 11:38:43', '0000-00-00 00:00:00'),
(55, 3, 'L,S,M', 'Name', 'w.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(56, 3, 'L,S,M', 'Name', 'x.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(57, 4, 'L,S,M', 'Name', 'i.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(58, 4, 'L,S,M', 'Name', 'shop-cart.PNG', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(59, 4, 'X', 'Name', 'ab.png', 200000, 'tital', 'details', '2020-04-09 11:38:43', '0000-00-00 00:00:00'),
(60, 4, 'L,S,M', 'Name', 'ac.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(61, 4, 'L,S,M', 'Name', 'ad.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(62, 4, 'L,S,M', 'Name', 'ae.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(63, 4, 'L,S,M', 'Name', 'af.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `img`, `caption`, `content`) VALUES
(1, 'carousel1.png', 'Hình ảnh slide 1', 'compitable to many more opensoruce cart'),
(2, 'bootstrap_free-ecommerce.png', 'Hình ảnh slide 2', 'very clean simple to use compitable to many more opensource cart'),
(3, 'carousel3.png', 'Hình ảnh slide 3', 'compitable to many more opensoruce cart'),
(4, 'bootstrap-templates.png', 'Hình ảnh slide 4', 'very clean simple to use compitable to many more opensource cart');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `display_name`, `address`) VALUES
(14, 'mikubui.1409@gmail.com', '123', 'Bùi Văn Việt', 'Ninh Đa, Ninh Hòa'),
(15, 'minhhoangcap@gmail.com', 'hoangvo1', 'Cáp Minh hoagnf', 'Ninh Đa, Ninh Hòa'),
(21, '123@456', '123', 'abc', 'Ninh Đa, Ninh Hòa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `FK_idOrder` (`id_order`),
  ADD KEY `FK_idProduct` (`id_product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_categorys` (`id_category`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_idOrder` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idProduct` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categorys` FOREIGN KEY (`id_category`) REFERENCES `categorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

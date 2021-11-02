-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 02, 2021 at 04:32 PM
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
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_category`, `sizes`, `name`, `img`, `price`, `title`, `details`, `created_date`, `updated_date`) VALUES
(1, 1, 'L,M,S', 'Manicure & Pedicure', 'a.jpg', 20000, 'Nowadays the lingerie industry is one of the most successful business spheres. Nowadays the lingerie industry is one of ...', '<div class=\"tab-pane fade active in\" id=\"home\">\r\n			  <h4>Product Information</h4>\r\n                <table class=\"table table-striped\">\r\n				<tbody>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Color:</td><td class=\"techSpecTD2\">Black</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Style:</td><td class=\"techSpecTD2\">Apparel,Sports</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Season:</td><td class=\"techSpecTD2\">spring/summer</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Usage:</td><td class=\"techSpecTD2\">fitness</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Sport:</td><td class=\"techSpecTD2\">122855031</td></tr>\r\n				<tr class=\"techSpecRow\"><td class=\"techSpecTD1\">Brand:</td><td class=\"techSpecTD2\">Shock Absorber</td></tr>\r\n				</tbody>\r\n				</table>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n				<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>\r\n\r\n			</div>', '2020-04-09 11:38:43', '2020-04-09 11:47:31'),
(2, 1, 'L,S,M', 'Name', 'aaa.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(3, 1, 'L,S,M', 'Name', 'bbb.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(4, 1, 'L,S,M', 'Name', 'ccc.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(5, 1, 'L,S,M', 'Name', 'ddd.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(6, 1, 'L,S,M', 'Name', 'eee.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(7, 1, 'L,S,M', 'Name', 'fff.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(8, 2, 'L,S,M', 'Name', 'b.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(9, 2, 'L,S,M', 'Name', 'c.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(10, 2, 'L,S,M', 'Name', 'aa.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(11, 2, 'L,S,M', 'Name', 'bb.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(12, 2, 'L,S,M', 'Name', 'cc.png', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(13, 2, 'L,S,M', 'Name', 'dd.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(14, 2, 'L,S,M', 'Name', 'ee.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(15, 3, 'L,S,M', 'Name', 'd.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(16, 3, 'L,S,M', 'Name', 'e.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(17, 3, 'L,S,M', 'Name', 'g.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(18, 3, 'L,S,M', 'Name', 'j.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(19, 3, 'L,S,M', 'Name', 'z.png', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(20, 3, 'L,S,M', 'Name', 'w.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(21, 3, 'L,S,M', 'Name', 'x.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(22, 4, 'L,S,M', 'Name', 'i.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(23, 4, 'L,S,M', 'Name', 'shop-cart.PNG', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(24, 4, 'L,S,M', 'Name', 'ab.png', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(25, 4, 'L,S,M', 'Name', 'ac.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(26, 4, 'L,S,M', 'Name', 'ad.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(27, 4, 'L,S,M', 'Name', 'ae.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43'),
(28, 4, 'L,S,M', 'Name', 'af.jpg', 200000, 'tital', 'details', '2020-04-09 11:38:43', '2020-04-09 11:38:43');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categorys` FOREIGN KEY (`id_category`) REFERENCES `categorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

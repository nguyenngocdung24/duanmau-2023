-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2023 at 10:45 AM
-- Server version: 10.6.15-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Sản phẩm rất đang trải nghiệm', 2, 1, '2023-09-22'),
(2, 'Sản phẩm rất tốt', 3, 1, '2023-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Điện Thoại'),
(18, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Tai nghe AirPods Pro 2022', 60000.00, 'Tai nghe AirPods Pro 2022.jpg', '', 10, 18),
(2, 'iPhone 14 Pro Max', 140000.00, 'iPhone 14 Pro Max.jpg', 'Những dòng iPhone đến từ nhà Apple đều có sức hút đặc biệt ngay từ thời điểm ra mắt và thế hệ iPhone 14 Pro Max cũng không ngoại lệ. Có thể nói, iPhone 14 Pro Max là sự kết hợp hoàn hảo giữa các yếu tố về thiết kế, cấu hình, tính năng, hệ điều hành,... Nếu bạn tò mò về siêu phẩm này, hãy đọc ngay phần đánh giá chi tiết phiên bản cao cấp nhất trong series iPhone 14 bên dưới nhé. ', 9, 2),
(3, 'Laptop Asus VivoBook Go 14', 180000.00, 'Laptop Asus VivoBook Go 14.jpg', 'ASUS Vivobook E1404FA-NK186W thuộc dòng Vivobook Go 14, dòng laptop hiệu năng cao giá rẻ giúp bạn làm việc hiệu quả mọi lúc mọi nơi. Với bộ vi xử lý AMD 7000 series mạnh mẽ, trang bị sẵn tới 16GB RAM, 512GB SSD, Vivobook E1404FA sẽ mang đến trải nghiệm làm việc thoải mái, vô cùng mượt mà.', 9, 1),
(5, 'Laptop Lenovo Ideapad 5 Pro', 300000.00, 'Laptop Lenovo Ideapad 5 Pro.jpg', 'Lenovo Ideapad 5 Pro 16 là chiếc laptop, máy tính xách tay thời đại mới dành cho các bạn trẻ đa nhiệm, năng động với vẻ ngoài hiện đại, mỏng nhẹ nhưng bên trong lại chứa một hiệu năng cực khủng. Bên cạnh đó, chiếc laptop Lenovo - Lenovo Ideapad này cũng được tích hợp nhiều công nghệ hiện đại, tối ưu tốt cho trải nghiệm sử dụng. Chắc chắn, mẫu laptop mỏng nhẹ này sẽ khiến bạn phải bất ngờ đấy. Hãy cùng Laptop88 đánh giá ngay mẫu laptop văn phòng này dưới đây nhé!', 10, 1),
(6, 'Xiaomi Redmi Note 12 Pro', 140000.00, 'Xiaomi Redmi Note 12 Pro.jpg', 'Samsung S23 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuông vức sang trọng. Sản phẩm được ra mắt từ đầu năm 2023.', 9, 2),
(7, 'Macbook Air 15 inch M2 2023', 180000.00, 'Macbook Air 15 inch M2 2023.jpg', 'Vận hành doanh nghiệp trên MacBook Air M2. Siêu mạnh mẽ với chip M2 thế hệ tiếp theo, MacBook Air được thiết kế mới nay nhỏ gọn hơn bao giờ hết, kết hợp giữa hiệu năng đáng kinh ngạc và thời lượng pin lên đến 18 giờ trong vỏ nhôm mỏng đầy ấn tượng.1 Nhờ đó, tất cả các bộ phận từ kinh doanh đến tài chính đều có thể làm việc năng suất hơn dù ở bất cứ đâu.', 9, 1),
(18, 'Tai nghe choàng đầu có mic Gaming Havit H2230D', 18000000.00, 'Tai nghe choàng đầu có mic Gaming Havit H2230D.jpg', 'Tai nghe choàng đầu có mic Gaming Havit H2230D', 0, 18),
(19, 'aaaa', 111.00, 'Tai nghe AirPods Pro 2022.jpg', 'ac', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Admin', '123456', 'admin@fpt.edu.vn', NULL, NULL, 1),
(2, 'Hoàng Long', '123456', 'longhh7@fpt.edu.vn', NULL, NULL, 2),
(3, 'Thành Trung', '1234565', 'trungnt173@fpt.edu.vn', 'Hà Nội', NULL, 2),
(4, 'dungnguyen', '123456', 'dungnnph37530@fpt.edu.vn', NULL, NULL, 0),
(5, 'dungnguyen', '123456', 'dungnnph37530@fpt.edu.vn', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

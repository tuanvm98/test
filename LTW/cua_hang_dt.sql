-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2017 at 09:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cua_hang_dt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id` int(11) NOT NULL,
  `hoa_don_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `gia_ban` float NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`id`, `hoa_don_id`, `sp_id`, `gia_ban`, `so_luong`) VALUES
(3, 1, 0, 6000000, 1),
(4, 1, 0, 6500000, 1),
(5, 1, 0, 6000000, 1),
(6, 1, 0, 6500000, 1),
(7, 1, 0, 110000, 1),
(8, 1, 0, 6500000, 1),
(9, 1, 0, 6500000, 12),
(10, 1, 0, 6000000, 2),
(11, 1, 0, 6000000, 1),
(12, 3, 0, 6000000, 5),
(13, 3, 0, 4900000, 2),
(14, 3, 0, 17000000, 2),
(15, 3, 0, 12490000, 2),
(16, 3, 0, 17000000, 1),
(17, 3, 0, 3900000, 1),
(18, 3, 0, 17000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ngay_hoa_don` date NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `tong_tien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ngay_hoa_don`, `nguoi_dung_id`, `tong_tien`) VALUES
(3, '2017-03-28', 0, 12000000),
(4, '2017-03-28', 0, 6000000),
(5, '2017-03-28', 0, 30000000),
(6, '2017-03-28', 0, 9800000),
(7, '2017-03-29', 0, 34000000),
(8, '2017-03-29', 0, 24980000),
(9, '2017-03-29', 0, 17000000),
(10, '2017-03-29', 0, 3900000),
(11, '2017-03-29', 0, 17000000);

-- --------------------------------------------------------

--
-- Table structure for table `tblhang`
--

CREATE TABLE `tblhang` (
  `hang_id` int(11) NOT NULL,
  `ten_hang` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblhang`
--

INSERT INTO `tblhang` (`hang_id`, `ten_hang`) VALUES
(1, 'APPLE'),
(2, 'OPPO'),
(3, 'SAMSUNG'),
(4, 'SONY'),
(5, 'NOKIA'),
(6, 'LG'),
(7, 'SKY'),
(8, 'LENOVO'),
(9, 'MOBIISTAR'),
(10, 'ASUS'),
(11, 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `tblkh`
--

CREATE TABLE `tblkh` (
  `nguoi_dung_id` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkh`
--

INSERT INTO `tblkh` (`nguoi_dung_id`, `ten_nguoi_dung`, `ten_dang_nhap`, `mat_khau`, `email`, `sdt`) VALUES
(1, 'Nguyễn Thị Lan Anh', 'lananh', '123456', 'nhoxbe1996@gmail.com', '01648299096');

-- --------------------------------------------------------

--
-- Table structure for table `tblloaisp`
--

CREATE TABLE `tblloaisp` (
  `loaisp_id` int(11) NOT NULL,
  `ten_loai_sp` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblloaisp`
--

INSERT INTO `tblloaisp` (`loaisp_id`, `ten_loai_sp`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `tblnhanvien`
--

CREATE TABLE `tblnhanvien` (
  `id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten_nv` varchar(100) CHARACTER SET utf8 NOT NULL,
  `chuc_vu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mat_khau` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnhanvien`
--

INSERT INTO `tblnhanvien` (`id`, `ten_nv`, `chuc_vu`, `mat_khau`) VALUES
('11120', 'lananh', 'sếp', 'e10adc3949ba59abbe56e057f20f883e'),
('NV01', 'Mai Liên', 'Quản lý', 'cc0489d26657e31d1bd801187bcf82b7'),
('NV04', 'Thảo', 'Quản lý', 'cc0489d26657e31d1bd801187bcf82b7'),
('nv05', 'lan anh', 'nv', 'cc0489d26657e31d1bd801187bcf82b7');

-- --------------------------------------------------------

--
-- Table structure for table `tblsp`
--

CREATE TABLE `tblsp` (
  `sp_id` int(11) NOT NULL,
  `ten_sp` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hang_id` int(11) NOT NULL,
  `loaisp_id` int(11) NOT NULL,
  `hinh_anh` varchar(200) NOT NULL,
  `mau` varchar(50) CHARACTER SET utf8 NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_ban` float NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mo_ta` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsp`
--

INSERT INTO `tblsp` (`sp_id`, `ten_sp`, `hang_id`, `loaisp_id`, `hinh_anh`, `mau`, `so_luong`, `gia_ban`, `tinhtrang`, `mo_ta`) VALUES
(1, 'Iphone 7', 1, 1, 'iphone7.jpg', 'Trắng', 100, 17000000, 'Còn Hàng', ' Màn hình:LED-backlit IPS LCD, 4.7\", Retina HD\r\n    Hệ điều hành:iOS 10\r\n    Camera sau:12 MP\r\n    Camera trước:7 MP\r\n    CPU:Apple A10 Fusion 4 nhân 64-bit\r\n    RAM:2 GB\r\n    Bộ nhớ trong:128 GB\r\n    Thẻ nhớ:Không\r\n    Thẻ SIM:1 Nano SIM\r\n    Dung lượng pin:1960 mAh'),
(2, 'Tai nghe', 2, 4, 'chup.jpg', 'Đỏ', 50, 650000, 'Còn hàng', ''),
(3, 'Mobiistar', 9, 1, 'mobiistar.jpg', 'Vàng đồng', 100, 3900000, 'Còn hàng', 'Màn hình:IPS LCD, 5.5\", HD\r\n    Hệ điều hành:Android 6.0 (Marshmallow)\r\n    Camera sau:13 MP\r\n    Camera trước:8 MP\r\n    CPU:MT6737 4 nhân\r\n    RAM:3 GB\r\n    Bộ nhớ trong:16 GB\r\n    Hỗ trợ thẻ nhớ:128 GB\r\n    Thẻ SIM:2 SIM, SIM 2 chung khe thẻ nhớ, 1 Nano + 1 Micro\r\n    Dung lượng pin:3000 mAh\r\n'),
(4, 'SamSung Galaxy Tab E', 3, 3, 'tab-e.ipg.png', 'Trắng', 50, 4990000, 'Còn hàng', 'Màn hình WXGA TFT, 9.6\"\r\nHệ điều hành Android 4.4\r\nCPU Spreadtrum 4 nhân, 1.3 GHz\r\nRAM 1.5 GB\r\nBộ nhớ trong 8 GB\r\nCamera sau 5 MP\r\nCamera trước 2 MP\r\nKết nối mạng WiFi, 3G, Không hỗ trợ 4G\r\nHỗ trợ SIM Micro sim\r\nĐàm thoại Có'),
(5, 'Oppo F1S', 2, 1, 'oppof1s.jpg', 'Bạc', 100, 4900000, 'Còn hàng', 'Màn hình:IPS LCD, 5.5\", HD\r\n    Hệ điều hành:Android 5.1 (Lollipop)\r\n    Camera sau:13 MP\r\n    Camera trước:16 MP\r\n    CPU:Mediatek MT6750 8 nhân\r\n    RAM:4 GB\r\n    Bộ nhớ trong:64 GB\r\n    Thẻ nhớ:MicroSD, hỗ trợ tối đa 128 GB\r\n    Thẻ SIM:2 Nano SIM\r\n    Dung lượng pin:3075 mAh'),
(6, 'Laptop Asus X441UA i5 6200U/4GB/500GB/Win10', 10, 2, 'asus.jpg', 'Đen', 50, 12490000, 'Còn hàng', 'CPU:Intel, Core i5 Skylake, 6200U, 2.30 GHz\r\nRAM:DDR4 (1 khe), 4 GB, 2133 MHz\r\nĐĩa cứng:HDD, 500 GB\r\nMàn hình rộng:14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:Không\r\nĐồ họa:Intel® HD Graphics 520, Share (Dùng chung bộ nhớ với RAM)\r\nĐĩa quang:DVD Super Multi Double Layer\r\nWebcam:0.3 MP\r\nChất liệu vỏ:Vỏ nhựa\r\nCổng giao tiếp:HDMI, LAN (RJ45), USB 2.0, USB 3.0, VGA (D-Sub)'),
(7, 'Cáp sạc', 3, 4, 'cap.jpg', 'Trắng', 100, 150000, 'Còn hàng', ''),
(8, 'Laptop HP Pavilion 14 AL001TU i3 6100U/4GB/500GB/Win10', 11, 2, 'hp.jpg', 'Vàng đồng', 50, 10990000, 'Còn hàng', 'CPU:Intel, A-Series, 6100U, 2.30 GHz\r\nRAM:DDR3L (1 khe RAM), 4 GB, 1600 MHz\r\nĐĩa cứng:HDD, 500 GB\r\nMàn hình rộng:14 inch, HD (1366 x 768 pixels)\r\nCảm ứng:Không\r\nĐồ họa:Intel® HD Graphics 520, Share (Dùng chung bộ nhớ với RAM)\r\nĐĩa quang:Không\r\nWebcam:0.9 MP(16:9)\r\nChất liệu vỏ:Vỏ nhựa\r\nCổng giao tiếp:2 x USB 3.0, HDMI, LAN (RJ45), USB 2.0'),
(9, 'SONY XPERIA XZ', 4, 1, 'xz.jpg', 'Bạc', 50, 4500000, 'Còn hàng', '        Màn hình:TRILUMINOS™, 5.2\", Full HD\r\n    Hệ điều hành:Android 6.0 (Marshmallow)\r\n    Camera sau:23 MP\r\n    Camera trước:13 MP\r\n    CPU:Snapdragon 820 4 nhân 64-bit\r\n    RAM:3 GB\r\n    Bộ nhớ trong:64 GB\r\n    Thẻ SIM:2 Nano SIM (SIM 2 chung khe thẻ nhớ)\r\n    Dung lượng pin:2900 mAh\r\n'),
(10, 'Samsung S7', 3, 1, 'samsungs7.jpg', 'Vàng đồng', 100, 13000000, 'Còn hàng', '   Màn hình:Super AMOLED, 5.5\", Quad HD\r\n    Hệ điều hành:Android 6.0 (Marshmallow)\r\n    Camera sau:12 MP\r\n    Camera trước:5 MP\r\n    CPU:Exynos 8890 8 nhân 64-bit\r\n    RAM:4 GB\r\n    Bộ nhớ trong:32 GB\r\n    Hỗ trợ thẻ nhớ:256 GB\r\n    Thẻ SIM:2 SIM, SIM 2 chung khe thẻ nhớ, Nano SIM\r\n    Dung lượng pin:3600 mAh\r\n'),
(11, 'Iphone 7 ', 1, 1, 'iphone7plus.jpg', 'Đen', 50, 17000000, 'Còn hàng', '  Màn hình:LED-backlit IPS LCD, 4.7\", Retina HD\r\n    Hệ điều hành:iOS 10\r\n    Camera sau:12 MP\r\n    Camera trước:7 MP\r\n    CPU:Apple A10 Fusion 4 nhân 64-bit\r\n    RAM:2 GB\r\n    Bộ nhớ trong:128 GB\r\n    Thẻ nhớ:Không\r\n    Thẻ SIM:1 Nano SIM\r\n    Dung lượng pin:1960 mAh');

-- --------------------------------------------------------

--
-- Table structure for table `tbltintuc`
--

CREATE TABLE `tbltintuc` (
  `tintuc_id` int(11) NOT NULL,
  `tentintuc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhang`
--
ALTER TABLE `tblhang`
  ADD PRIMARY KEY (`hang_id`);

--
-- Indexes for table `tblkh`
--
ALTER TABLE `tblkh`
  ADD PRIMARY KEY (`nguoi_dung_id`);

--
-- Indexes for table `tblloaisp`
--
ALTER TABLE `tblloaisp`
  ADD PRIMARY KEY (`loaisp_id`);

--
-- Indexes for table `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsp`
--
ALTER TABLE `tblsp`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `tbltintuc`
--
ALTER TABLE `tbltintuc`
  ADD PRIMARY KEY (`tintuc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblhang`
--
ALTER TABLE `tblhang`
  MODIFY `hang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblkh`
--
ALTER TABLE `tblkh`
  MODIFY `nguoi_dung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblloaisp`
--
ALTER TABLE `tblloaisp`
  MODIFY `loaisp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblsp`
--
ALTER TABLE `tblsp`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbltintuc`
--
ALTER TABLE `tbltintuc`
  MODIFY `tintuc_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

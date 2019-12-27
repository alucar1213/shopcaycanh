-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 05:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlycaycanhstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaChiTietDonDatHang`, `SoLuong`, `GiaBan`, `MaDonDatHang`, `MaSanPham`) VALUES
('DHCT00001', 1, 60000, 'DH000001', 26),
('DHCT00002', 2, 75000, 'DH000002', 29),
('DHCT00003', 8, 60000, 'DH00003', 26),
('DHCT00004', 10, 100000, 'DH000004', 31),
('DHCT00005', 9, 60000, 'DH000005', 26);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayLap` date NOT NULL,
  `TongThanhTien` int(11) NOT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `NgayLap`, `TongThanhTien`, `MaTaiKhoan`, `MaTinhTrang`) VALUES
('DH000001', '2018-12-27', 60000, 7, 1),
('DH000002', '2018-12-27', 150000, 6, 1),
('DH000004', '2018-12-27', 1000000, 13, 2),
('DH000005', '2018-12-27', 540000, 12, 2),
('DH00003', '2018-12-27', 480000, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LogoURL` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'cayxinh.vn', 'zFrMjbxuong-rong-trung-chim.jpg', 0),
(2, 'thienduongcayxanh.com', 'gn7Q8Sthien-duong-cay-xanh-logo.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Tiểu Cảnh', 0),
(2, 'Sen đá', 0),
(3, 'Xương rồng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(0, 'ADMIN'),
(1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhURL` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaSanPham` int(11) NOT NULL,
  `NgayNhap` date NOT NULL,
  `SoLuongTon` int(11) NOT NULL,
  `SoLuongBan` int(11) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` int(11) NOT NULL,
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuotXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(3, 'Tiểu cảnh 01', 'tOkWwetieu-canh-1.jpg', 75000, '2018-12-05', 12, 2, 10, '', 0, 1, 1),
(15, 'sen đá hàn quốc', 'rIYiQJsen-đá-hàn-quốc-300x300.jpg', 100000, '2018-12-25', 10, 5, 50, 'sen đá hàn quốc', 0, 2, 1),
(18, 'sen đá sừng hươu', 'rtT92sSen-đá-sừng-hươu-300x300.jpg', 75000, '2018-12-25', 10, 5, 10, 'sen đá sừng hươu', 0, 2, 1),
(26, 'sen đá lá nhung', 'TBg5nbsen-đá-nhung.jpg', 60000, '2018-12-26', 20, 10, 10, 'sen đá lá nhung', 0, 2, 1),
(29, 'sen đá phật bà', 'Lhl7Nesen-phật-bà-đẹp-2-300x300.jpg', 75000, '2018-12-26', 10, 0, 0, 'sen đá phật bà', 0, 2, 1),
(30, 'Xương rồng gymno', 'pdTkrLxuong-rong-gymno.jpg', 75000, '2018-12-26', 10, 0, 0, 'xương rồng gymno', 0, 3, 1),
(31, 'Xương rồng thần long', 'USRAOyxuong-rong-than-long.jpg', 100000, '2018-12-26', 20, 10, 20, 'xương rồng thần long', 0, 3, 1),
(32, 'Tiểu cảnh 3', 'IFBzJstieu-canh-3.jpg', 200000, '2018-12-26', 5, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 2),
(33, 'Tiểu cảnh 25', 'PySbaMtieu-canh-25.jpg', 1750000, '2018-12-26', 10, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 1),
(40, 'Tiểu cảnh 17', 'iBfkY8tieu-canh-17.jpg', 125000, '2018-12-26', 10, 0, 0, 'tiểu cảnh trang trí văn phòng', 0, 1, 1),
(41, 'Xương rồng giống mới', 'meqLHKxuong-rong-giong-moi.jpg', 65000, '2018-12-26', 12, 0, 0, 'xương rồng giống mới', 0, 3, 1),
(42, 'Xương rồng núi', 'qny0YNxuong-rong-nui.jpg', 65000, '2018-12-26', 10, 0, 0, 'Xương rồng núi', 0, 3, 1),
(46, 'Sen đá chuỗi', 'no5gh2sen-đá-chuỗi-ngọc-300x300.jpg', 69000, '2018-12-26', 12, 0, 0, 'sen đá chuỗi', 0, 2, 1),
(47, 'Sen đá móng rồng xanh', 'QEZo7SSen-đá-móng-rồng-xanh-300x300.jpg', 65000, '2018-12-26', 12, 0, 0, 'Sen đá móng rồng xanh', 0, 2, 1),
(48, 'Sen đá cỏ ngọc', 'cvlmKRsen-đá-cỏ-ngọc.jpg', 65000, '2018-12-26', 25, 0, 0, 'Sen đá cỏ ngọc', 0, 2, 1),
(49, 'Xương rồng tròn', 'ZSWwImxuong-rong-tron.png', 75000, '2018-12-27', 20, 5, 10, 'Xương rồng tròn', 0, 3, 1),
(50, 'Tiểu cảnh 21', 'w073Jxtieu-canh-21.jpg', 110000, '2018-12-27', 20, 0, 0, 'tiểu cảnh trang trí góc làm việc', 0, 1, 1),
(51, 'Tiểu cảnh 23', 'FvH5nrtieu-canh-23.jpg', 200000, '2018-12-27', 10, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 1),
(52, 'Tiểu cảnh 14', 'eLO0XItieu-canh-14.jpg', 150000, '2018-12-27', 20, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 1),
(53, 'Tiểu cảnh số 6', '91Qeyntieu-canh-6.jpg', 100000, '2018-12-27', 20, 0, 0, 'tiểu cảnh trang trí góc làm việc', 0, 1, 1),
(54, 'Tiểu cảnh 7', 'ux5B1Dtieu-canh-7.jpg', 75000, '2018-12-27', 30, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 1),
(55, 'Sen đá nâu', 'Eog8YSsen-da-nau.png', 90000, '2018-12-27', 10, 0, 0, 'sen đá nâu', 0, 2, 1),
(56, 'Sen ngọc', 'h9Asgmsen-ngoc.jpg', 75000, '2018-12-27', 20, 0, 0, 'sen ngọc', 0, 2, 1),
(57, 'Xương rồng bụi', 'Y4eAXlxuong-rong-bui.jpg', 55000, '2018-12-27', 20, 0, 0, 'xương rồng bụi', 0, 3, 1),
(58, 'Tiểu cảnh 18', 'sXcWzAtieu-canh-18.jpg', 155000, '2018-12-27', 10, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHienThi` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` tinyint(1) NOT NULL,
  `MaLoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'sa', 'sa', 'ADMIN', '', '', '', 0, 0),
(2, 'test', '123', 'Hải', '', '', '', 0, 1),
(4, 'haha1', '123', 'haha', 'ho chi minh', '01234556789', 'ahaha@gmail.com', 0, 1),
(6, 'admin', '123', 'Minh Chiến', 'Hồ Chí Minh', '021313', 'midfsadf@gmail.com', 0, 1),
(7, 'superadmin', '123', 'Chiến', 'Gia Lai', '0399115999', 'thanhcong.hahaha@gmail.com', 0, 1),
(8, 'thanhhai', '123', 'Thanh Hải', 'Đồng Nai', '1234123421', 'hahhahaha@gmail.com', 0, 1),
(9, 'huudung123', '123456789', 'huudung123', 'Hồ Chí Minh', '0123689564', 'huudung123@gmail.com', 0, 1),
(10, 'obama23', '0bama', 'Obama', 'Hồ Chí Minh', '0956441332', 'obamavietnam@gmail.com', 0, 1),
(11, 'mrtrump', 'lantram123', 'Đô Lan Trăm', 'Hồ Chí Minh', '031564498', 'donaltrump@gmail.com', 0, 1),
(12, 'ronaldo', 'ronaldo1', 'Ronaldo', 'Vĩnh Long', '0832431245', 'ronaldonumber1@gmail.con', 0, 1),
(13, 'messi', 'messi123', 'Lê Ô La', 'Cà Mau', '0123455643', 'messi2134@gmail.com', 0, 1),
(14, 'captain', 'emyeuhoabinh', 'Cáp Từn', 'Bình Dương', '099993555', 'captain.america@gmail.com', 0, 1),
(15, 'emyeuhoahoc', '123456hoa', 'Hulk Màu Hường', 'Đồng Nai', '0333240358', 'hulkyeudoi@yahoo.com', 0, 1),
(16, 'spiderman2', 'spiderman', 'Nhện Nhọ', 'Hồ Chí Minh', '01633240358', 'spiderman.notnho@gmail.com', 0, 1),
(17, 'emyeuvinaphone@gmail', 'vinaphone', 'Tổng đài viettel', 'Hồ Chí Minh', '0399913234', 'viettelmuonnam@gmail.com', 0, 1),
(18, 'fptmanhnhat', 'fptsuperlag', 'FPT ADSL', 'Hà Nội', '0398121655', 'khongduocchuifpt@gmail.com', 0, 1),
(19, 'haiadmin', 'sa', 'Nguyễn Thanh Hải', 'Đồng Nai', '0355055666', 'haidong@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đã giao'),
(2, 'Đang giao'),
(3, 'Hủy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `Fk_MaDonHang` (`MaDonDatHang`),
  ADD KEY `FK_MaSanPham` (`MaSanPham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `FK_MaTaiKhoan` (`MaTaiKhoan`),
  ADD KEY `FK_TinhTrang` (`MaTinhTrang`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSanXuat`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `FK_MaHangSanXuat` (`MaHangSanXuat`),
  ADD KEY `FK_LoaiSanPham` (`MaLoaiSanPham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `FK_LoaiTaiKhoan` (`MaLoaiTaiKhoan`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FK_MaSanPham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `Fk_MaDonHang` FOREIGN KEY (`MaDonDatHang`) REFERENCES `donhang` (`MaDonHang`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_MaTaiKhoan` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`),
  ADD CONSTRAINT `FK_TinhTrang` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LoaiSanPham` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`),
  ADD CONSTRAINT `FK_MaHangSanXuat` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `FK_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

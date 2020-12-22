-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 10:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dack`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madh` int(11) NOT NULL,
  `tendh` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `diachinguoimua` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `phuongthuctt` varchar(255) DEFAULT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthaidh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `madondh` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `giatien` int(11) DEFAULT NULL,
  `khuyenmai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hangsx`
--

CREATE TABLE `hangsx` (
  `tenhang` varchar(255) DEFAULT NULL,
  `phobien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaitk`
--

CREATE TABLE `loaitk` (
  `id` int(11) NOT NULL,
  `capbattk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `tenhang` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `khuyenmai` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `motasp` varchar(255) NOT NULL,
  `danhgiasp` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `loaitk` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` varchar(255) DEFAULT NULL,
  `NameAccout` varchar(255) NOT NULL,
  `avatar` mediumblob DEFAULT NULL,
  `sdt` varchar(255) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `stt` int(11) NOT NULL,
  `masp` int(11) DEFAULT NULL,
  `dtngay` int(11) NOT NULL,
  `dtthang` int(11) NOT NULL,
  `dtquy` int(11) NOT NULL,
  `dtnam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thongsokythuat`
--

CREATE TABLE `thongsokythuat` (
  `masp` int(11) NOT NULL,
  `manhinh` varchar(255) NOT NULL,
  `hedieuhanh` varchar(255) NOT NULL,
  `camera_sau` varchar(255) NOT NULL,
  `camera_truoc` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `bonhotrong` varchar(255) NOT NULL,
  `sim` int(11) NOT NULL,
  `dungluongpin` varchar(255) NOT NULL,
  `motasp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangdonhon`
--

CREATE TABLE `tinhtrangdonhon` (
  `madh` int(11) NOT NULL,
  `tendh` varchar(255) NOT NULL,
  `trangthaidh` varchar(255) NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`madh`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`madondh`);

--
-- Indexes for table `loaitk`
--
ALTER TABLE `loaitk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `thongsokythuat`
--
ALTER TABLE `thongsokythuat`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `tinhtrangdonhon`
--
ALTER TABLE `tinhtrangdonhon`
  ADD PRIMARY KEY (`madh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `madondh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaitk`
--
ALTER TABLE `loaitk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thongsokythuat`
--
ALTER TABLE `thongsokythuat`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tinhtrangdonhon`
--
ALTER TABLE `tinhtrangdonhon`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

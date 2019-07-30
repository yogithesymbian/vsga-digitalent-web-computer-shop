-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2019 at 04:07 AM
-- Server version: 10.3.15-MariaDB-1
-- PHP Version: 7.3.4-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbspcshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `permission` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `permission`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `tb_register_email` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `tb_register_email`, `role_id`) VALUES
(1, 'yogirenbox33@gmail.com', 1),
(6, 'user3@user.com', 2),
(8, 'digitalent@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` char(50) NOT NULL,
  `code` varchar(10) DEFAULT '0',
  `name` varchar(50) DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT 0,
  `spesifikasi` varchar(200) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT 0,
  `path_image` varchar(100) DEFAULT '0',
  `name_image1` varchar(100) DEFAULT '0',
  `name_image2` varchar(100) DEFAULT '0',
  `name_image3` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `code`, `name`, `quantity`, `spesifikasi`, `price`, `path_image`, `name_image1`, `name_image2`, `name_image3`) VALUES
('938b4ea4-ad12-11e9-853c-005056c00001', 'ROG4', 'ROG Strix G', 99, '9th-gen Intel® Core™ i7, Ultra-slim design, until 16G', 5000000, '../log/image-ROG4', NULL, NULL, NULL),
('a722d600-ad0b-11e9-853c-005056c00001', 'ROG5', 'ROG Zephyrus S GX502', 99, '9th-gen Intel® Core™ i7, hingga GeForce RTX™ 2070, 512G PCIe', 5000000, '../log/image-ROG5', NULL, NULL, NULL),
('bd4ddf98-ad0a-11e9-853c-005056c00001', 'ROG2', 'ROG Strix Hero III', 20, '9th-gen Intel® Core™ i7, GTX1660Ti_V6G, until 16G', 20299000, '../log/image-ROG1', NULL, NULL, NULL),
('db4ddf79-ad0a-11e9-853c-005056c00001', 'ROG3', 'ROG Strix SCAR III', 9, '9th-gen Intel® Core™ i9, hingga 32GB, Per-key RGB', 30999000, '../log/image-ROG3', NULL, NULL, NULL),
('e7ca91d5-ad12-11e9-853c-005056c00001', 'ROG6', 'ROG Mothership (GZ700)', 99, '9th-gen Intel® Core™ i9, RTX2080_V8G, 64G', 9000000, '../log/image-ROG6', NULL, NULL, NULL),
('fd30650e-ad15-11e9-853c-005056c00001', 'ROG1', 'ROG Zephyrus G GA502', 10, 'AMD® Ryzen™ 7 3750H, 8G, 512G', 20299000, '../log/image-ROG2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` char(36) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `2nd_forgot_pass` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `hobby` varchar(30) DEFAULT NULL,
  `bussines_name` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `country` int(4) DEFAULT NULL,
  `profile_img` text DEFAULT NULL,
  `level` enum('Y','N') DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `username`, `email`, `password`, `2nd_forgot_pass`, `gender`, `hobby`, `bussines_name`, `address`, `country`, `profile_img`, `level`, `notelp`) VALUES
('0de5693b-ac5c-11e9-b038-005056c00001', 'Yogi Arif Widodo', 'yogirenbox33@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', 'L', NULL, 'PT SCODEID', NULL, NULL, '../_assets/image/auth/profile-yogi', NULL, NULL),
('0de5693b-ac5c-11e9-b038-005056c00002', 'digitalent', 'digitalent@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', 'L', NULL, 'PT SCODEID', NULL, NULL, '../_assets/image/auth/profile-yogi', NULL, NULL),
('923c51bc-af39-11e9-ba20-f4b7e230f08c', 'user03', 'user3@user.com', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, NULL, NULL, '../_assets/image/auth/profile-user03', NULL, NULL),
('e1378af5-af36-11e9-ba20-f4b7e230f08c', 'adm', 'user1@user.com', '8cb2237d0679ca88db6464eac60da96345513964', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, NULL, NULL, '../_assets/image/auth/profile-adm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `nama_barang` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_role_user_role` (`role_id`),
  ADD KEY `FK_role_user_tb_register` (`tb_register_email`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `FK_role_user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `FK_role_user_tb_register` FOREIGN KEY (`tb_register_email`) REFERENCES `tb_register` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

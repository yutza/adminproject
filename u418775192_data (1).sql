-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2018 at 09:28 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u418775192_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` enum('ADMIN','USER') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(001, 'yutza', '1234', 'ธีรยุทธ สีดามา', 'USER'),
(002, 'admin', '36230', 'ธีรยุทธ สีดามา', 'ADMIN'),
(003, 'yut', '36230', 'teerayut', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aword_lenner`
--

CREATE TABLE `tbl_aword_lenner` (
  `id_al` int(11) NOT NULL,
  `name_al` varchar(250) NOT NULL,
  `year_al` varchar(50) NOT NULL,
  `aword_al` varchar(50) NOT NULL,
  `tier_al` varchar(50) NOT NULL,
  `department_al` varchar(150) NOT NULL,
  `evidence_al` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aword_student`
--

CREATE TABLE `tbl_aword_student` (
  `id_as` int(11) NOT NULL,
  `name_as` varchar(250) NOT NULL,
  `year_as` varchar(50) NOT NULL,
  `aword_as` varchar(50) NOT NULL,
  `tier_as` varchar(50) NOT NULL,
  `department_as` varchar(150) NOT NULL,
  `evidence_as` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aword_student`
--

INSERT INTO `tbl_aword_student` (`id_as`, `name_as`, `year_as`, `aword_as`, `tier_as`, `department_as`, `evidence_as`) VALUES
(2, 'เว็บไซต์', '2554', 'ชนะเลิศ', 'นานาชาติ', 'วิทยาลัยเทคนิคชัยภูมิ', 'img/awordstudent/pdf-test.pdf'),
(3, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aword_techer`
--

CREATE TABLE `tbl_aword_techer` (
  `id_at` int(11) NOT NULL,
  `name_techer_at` varchar(150) NOT NULL,
  `name_at` varchar(250) NOT NULL,
  `year_at` varchar(50) NOT NULL,
  `tier_at` varchar(50) NOT NULL,
  `department_at` varchar(150) NOT NULL,
  `evidence_at` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `d_term` varchar(100) NOT NULL,
  `d_vocational` varchar(5) DEFAULT NULL,
  `d_diploma` varchar(5) DEFAULT NULL,
  `d_vocational_techer` varchar(5) DEFAULT NULL,
  `d_diploma_techer` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`d_term`, `d_vocational`, `d_diploma`, `d_vocational_techer`, `d_diploma_techer`) VALUES
('1/2559', '15', '15', '15', '15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_techer`
--

CREATE TABLE `tbl_techer` (
  `t_tem` varchar(50) NOT NULL,
  `t_techer` varchar(11) NOT NULL,
  `t_subject` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_techer`
--

INSERT INTO `tbl_techer` (`t_tem`, `t_techer`, `t_subject`) VALUES
('2/2560', '65', '56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_budget`
--

CREATE TABLE `tb_budget` (
  `b_term` varchar(50) NOT NULL,
  `b_statements` int(11) NOT NULL,
  `b_learning` int(11) NOT NULL,
  `b_ict` int(11) NOT NULL,
  `b_ict_learning` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_budget`
--

INSERT INTO `tb_budget` (`b_term`, `b_statements`, `b_learning`, `b_ict`, `b_ict_learning`) VALUES
('1/2560', 12, 12, 12, 12),
('1/2561', 111111, 13, 13, 13),
('2/2560', 14, 14, 14, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_code` int(10) NOT NULL,
  `login_user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `login_password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `login_school` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `login_school_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login_province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login_Status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_code`, `login_user`, `login_password`, `login_school`, `login_school_type`, `login_province`, `login_Status`) VALUES
(1234567890, 'yutza', '1234', 'วิทยาลัยเทคนิคชัยภูมิ', 'วิทยาลัยเทคนิค', 'ชัยภูมิ', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_quality`
--

CREATE TABLE `tb_quality` (
  `tem_quality` varchar(50) NOT NULL,
  `q_dapartment` int(11) NOT NULL,
  `q_company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_quality`
--

INSERT INTO `tb_quality` (`tem_quality`, `q_dapartment`, `q_company`) VALUES
('1/2560', 80, 'ดีมาก'),
('2/2560', 70, 'ดี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `tbl_aword_lenner`
--
ALTER TABLE `tbl_aword_lenner`
  ADD PRIMARY KEY (`id_al`);

--
-- Indexes for table `tbl_aword_student`
--
ALTER TABLE `tbl_aword_student`
  ADD PRIMARY KEY (`id_as`);

--
-- Indexes for table `tbl_aword_techer`
--
ALTER TABLE `tbl_aword_techer`
  ADD PRIMARY KEY (`id_at`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`d_term`);

--
-- Indexes for table `tbl_techer`
--
ALTER TABLE `tbl_techer`
  ADD PRIMARY KEY (`t_tem`);

--
-- Indexes for table `tb_budget`
--
ALTER TABLE `tb_budget`
  ADD PRIMARY KEY (`b_term`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_code`);

--
-- Indexes for table `tb_quality`
--
ALTER TABLE `tb_quality`
  ADD PRIMARY KEY (`tem_quality`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_aword_lenner`
--
ALTER TABLE `tbl_aword_lenner`
  MODIFY `id_al` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_aword_student`
--
ALTER TABLE `tbl_aword_student`
  MODIFY `id_as` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_aword_techer`
--
ALTER TABLE `tbl_aword_techer`
  MODIFY `id_at` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

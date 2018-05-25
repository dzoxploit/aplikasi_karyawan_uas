-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2018 pada 03.19
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `dept_id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `headofdept` varchar(30) NOT NULL,
  `ruangan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dept`
--

INSERT INTO `tbl_dept` (`dept_id`, `description`, `headofdept`, `ruangan`) VALUES
(1, 'departemen kurikulum', 'kurikulum', '10'),
(2, 'shshs', 'shhshs', 'A03'),
(3, 'departemen peserta didik', 'meta toxic', 'Tempat pembuangan sampah permanen'),
(16101, 'departemen kurikulum', 'meta bangsatt', 'Tempat pembuangan sampah permanen'),
(16162, 'departemen ti', 'meta bejatt', 'Tempat pembuangan sampah permanen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `empid` int(11) NOT NULL,
  `empfirstname` varchar(100) NOT NULL,
  `hire_date` date NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_mobile` varchar(12) NOT NULL,
  `emp_bdate` date NOT NULL,
  `deptid` int(2) NOT NULL,
  `empaddress` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_salary`
--

CREATE TABLE `tbl_salary` (
  `salid` int(11) NOT NULL,
  `salempid` int(11) NOT NULL,
  `salbegindate` date NOT NULL,
  `salbasicsalary` varchar(100) NOT NULL,
  `salgrade` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `is_admin` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`empid`),
  ADD KEY `deptid` (`deptid`);

--
-- Indexes for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD PRIMARY KEY (`salid`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD CONSTRAINT `tbl_employee_ibfk_1` FOREIGN KEY (`deptid`) REFERENCES `tbl_dept` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

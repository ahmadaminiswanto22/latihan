-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 02:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kehadiran` varchar(25) NOT NULL,
  `pesan` varchar(250) NOT NULL,
  `tanggal` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `nama`, `kehadiran`, `pesan`, `tanggal`) VALUES
(15, 'Ilham &amp; Keluarga', 'Hadir', 'Selamat yaa semoga menjadi keluarga yang SAMARA yaa aamiin..', 'Friday, 17 Dec 2021 13:04'),
(16, 'Putri', 'Tidak Hadir', 'Selamat yaa selamat menempuh hidup baru maaf belum bisa dateng', 'Friday, 17 Dec 2021 13:08'),
(17, 'BPTIK Cibitung', 'Hadir', 'Salam dari kami semua, semoga menjadi keluarga yang sakinah mawadah warohmah aamiin,\r\nkerja woi kerja jangan cuti kelamaan :)', 'Friday, 17 Dec 2021 13:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
